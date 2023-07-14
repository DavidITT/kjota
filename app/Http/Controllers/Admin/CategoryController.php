<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use DragonCode\Support\Facades\Helpers\Str;

class CategoryController extends Controller
{
    public function index()
    {
        return view('admin.categories.index');
    }

    public function getCategories($type)
    {
        try {
            switch ($type) {
                case 'categories':
                    $categories = Category::orderBy('priority', 'desc')
                        ->with('image:url,imageable_id')
                        ->where('parent_id', '=', null)
                        ->paginate(6);
                    return response()->json($categories);
                case 'subcategories':
                    $categories = Category::orderBy('parent_id', 'desc')
                        ->with(['image:url,imageable_id', 'parentCategory:id,name'])
                        ->where('parent_id', '!=', null)
                        ->paginate(6);
                    return response()->json($categories);
            }
        } catch (\Exception $e) {
            return response()->json('Error to get categories');
        }
    }

    public function getParentCategories()
    {
        try {
            $parenCategories = Category::select('id','name','status')
                ->where('parent_id', null)
                ->where('status', 1)
                ->get();

            return response()->json($parenCategories);

        } catch (\Exception $e) {
            return response()->json('Error to get parent categories');
        }
    }

    public function createCategory(Request $request)
    {
        try {
            DB::beginTransaction();
            $parent = ($request['parent_id'] == 'parent' ? null : $request['parent_id']);
            $slug = Str::slug($request['name'], "-");

            $category = Category::create([
                'name' => $request['name'],
                'description' => $request['description'],
                'slug' => $slug,
                'priority' => $request['priority'] == 'null' ? null : $request['priority'],
                'popular_category' => $request['popular'] == 'true' ? 1 : '0',
                'parent_id' => $parent,

            ]);
            if ($request->hasFile('img')) {
                $this->uploadCategoryImage($request->all(), $category);
            }
            DB::commit();

            return response()->json(['message' => 'Categoria creada'], 200);
        } catch (\Exception $e) {
            DB::rollBack();
            return response()->json('Error to create category' . $e);
        }
    }

    private function uploadCategoryImage($request, $category)
    {

        // Check if the branch has an image already saved, if so, delete it and save the new one, if not, save normal
        if ($category->image) {
            $oldPath = str_replace("storage/", "", $category->image->url);
            Storage::disk('public')->delete($oldPath);
            $file_name = time() . '_' . uniqid() . '.' . $request['img']->extension();
            $file_path = $request['img']->storeAs('uploads/categories', $file_name, 'public');
            $category->image()->update([
                'url' => 'storage/' . $file_path
            ]);
        } else {
            $file_name = time() . '_' . uniqid() . '.' . $request['img']->extension();
            $file_path = $request['img']->storeAs('uploads/categories', $file_name, 'public');
            $category->image()->create([
                'url' => 'storage/' . $file_path
            ]);
        }
        return $category->save();
    }
}
