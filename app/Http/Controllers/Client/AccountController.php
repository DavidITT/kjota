<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\UpdateAccountInfoRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class AccountController extends Controller
{
    public function index(Request $request)
    {
        $activeTab = $request->query('tab', 'general');
        $queriesAllowed = array(0 => 'tracking', 1 => 'orders');
        //Search query in array of queries allowed
        $search = in_array($activeTab, $queriesAllowed);

        if ($search) {
            $activeTab = $request->query('tab');
            return view('client.account.index', compact('activeTab'));
        } else {
            $activeTab = 'general';
            return view('client.account.index', compact('activeTab'));
        }

    }

    public function getInformation()
    {
        $user = auth()->user();
        return response()->json($user);
    }

    public function saveInformation(UpdateAccountInfoRequest $request)
    {
        try {
            DB::beginTransaction();

            $userId = Auth::user()->id;

            $user = User::find($userId);

            $user->update([
               'name' => $request['name'] ,
               'lastname' => $request['lastname'] ,
               'phone' => $request['phone'] ,
               'email' => $request['email'] ,
            ]);

            DB::commit();
            return response()->json(['message' => 'Informacion actualizada'], 200);

        } catch (\Exception $e) {
            DB::rollBack();
            return response()->json(['message' => 'Ocurrio un error al intentar actualizar la informacion'], 400);
        }
    }
}
