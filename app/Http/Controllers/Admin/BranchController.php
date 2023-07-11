<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Branch;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class BranchController extends Controller
{
    public function index()
    {
        return view('admin.content.branchs.index');
    }

    public function getBranchs()
    {
        try {
            $branchs = Branch::orderBy('id', 'desc')->paginate(7);
            return response()->json($branchs);
        } catch (\Exception $e) {
            return response()->json('Error to get branches');
        }
    }

    public function deleteBranch($id)
    {
        try {
            DB::beginTransaction();
            $status = Branch::findOrFail($id);
            $status->delete();
            DB::commit();
            return response()->json(['message' => 'Sucursal eliminada'], 200);
        } catch (\Exception $e) {
            DB::rollBack();
            return response()->json('Error to delete branch');
        }
    }

    public function createBranch(Request $request)
    {
        try {
            DB::beginTransaction();
            $branch = Branch::create([
                'name' => $request['name'],
                'address' => $request['address'],
                'phone' => $request['phone'],
                'status' => $request['status'] == 'true' ? 1 : 0,
            ]);
            if ($request->hasFile('img')) {
                $this->uploadBranchImage($request->all(), $branch);
            }
            DB::commit();

            return response()->json(['message' => 'Sucursal creada'], 200);
        } catch (\Exception $e) {
            DB::rollBack();
            return response()->json('Error to create branch');
        }
    }

    private function uploadBranchImage($request, $branch)
    {
        // Check if the branch has an image already saved, if so, delete it and save the new one, if not, save normal
        if ($branch->image !== null) {
            $oldPath = $branch->image->url;
            Storage::disk('public')->delete($oldPath);
            $file_name = time() . '_' . uniqid() . '.' . $request['img']->extension();
            $file_path = $request['img']->storeAs('uploads/branches', $file_name, 'public');
            $branch->image()->update([
                'url' => 'storage/' . $file_path
            ]);
        } else {
            $file_name = time() . '_' . uniqid() . '.' . $request['img']->extension();
            $file_path = $request['img']->storeAs('uploads/branches', $file_name, 'public');
            $branch->image()->create([
                'url' => 'storage/' . $file_path
            ]);
        }
        return $branch->save();
    }
}
