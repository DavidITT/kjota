<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\UpdateAccountInfoRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class AccountController extends Controller
{
    public function index(Request $request)
    {
        $activeTab = $request->query('tab', 'general');
        $queriesAllowed = array(0 => 'tracking', 1 => 'orders', 2 => 'change-password');
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

    public function changePassword(Request $request)
    {

        try{
            #Match The Old Password
            if(!Hash::check($request['old-password'], auth()->user()->password)){
                return response()->json(['message' => 'Su antigua contraseña no coincide'],400);
            }

            #Update the new Password
            User::whereId(auth()->user()->id)->update([
                'password' => Hash::make($request['new-password'])
            ]);

            return response()->json(['message' => 'Contraseña actualizada'],200);

        }catch(\Exception $e){
            return response()->json(['message' => 'Ocurrio un error intentelo mas tarde'],400);
        }
    }
}
