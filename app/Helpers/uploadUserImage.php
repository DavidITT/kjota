<?php

use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

function uploadUserImage($request, $user){

    //Validate type of img
    $validator = Validator::make($request, [
        'img' => 'mimes:jpg,jpeg,png|max:2048'
    ]);

    //Return error message if fails
    if ($validator->fails()) {
        return response()->json($validator->errors()->messages(), 422);
    }

    // Check if the user has an image already saved, if so, delete it and save the new one, if not, save normal
    if($user->image){
        $oldPath = $user->image->url;
        Storage::disk('public')->delete($oldPath);
        $file_name = time().'_'.uniqid().'.'.$request['img']->extension();
        $file_path = $request['img']->storeAs('uploads/profiles', $file_name, 'public');
        $user->image()->update([
            'url' => $file_path
        ]);
    }else{
        $file_name = time().'_'.uniqid().'.'.$request['img']->extension();
        $file_path = $request['img']->storeAs('uploads/profiles', $file_name, 'public');
        $user->image()->create([
            'url' => $file_path
        ]);
    }

    return true;

}


