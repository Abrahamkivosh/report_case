<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests\UserUpdateRequest;

class UserController extends Controller
{



    public function edit( $id){
        $user= User::where('id',$id)->first();
        return view('user.edit',compact('user'));
    }
    public function show($id){
        $user =User::where('id',$id)->first();

        return view('user.show',compact('user'));
    }
    public function update(UserUpdateRequest $request,$user_id){

        $data = $request->validated();
        $user = User::find($user_id) ;

        if (! Hash::check($data["old_password"], $user->password) ) {
            return back()->withInput(["name", "email","phone","role"])->with("error","Incorrect Old Password!") ;
        }

        if ( isset($data["password"])) {
            $data["password"] =   Hash::make( $data["password"]);
            $user->password =  $data["password"];
        }


            $user->name = $data["name"] ;
            $user->email = $data["email"] ;
            $user->phone = $data["phone"] ;
            if (Auth::user()->role == "admin" ) {

                $user->role = $data["role"] ;
            }


            $user->email = $data["email"] ;


            $this->storeImage($request , $user);

            if($user->save()){

            return back()->with("success","User profile updated");
            }

    }


    public function storeImage(request $request,$user)
    {
        # code...
        if (file_exists($request->file('image'))) {
            // dd($request);
             // Get filename with extension
             $filenameWithExt = $request->file('image')->getClientOriginalName();

             // Get just the filename
             $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);

             // Get extension
             $extension = $request->file('image')->getClientOriginalExtension();

             // Create new filename
             $filenameToStore = $filename . '_' . time() . '.' . $extension;

             // Uplaod image
             $path = $request->file('image')->storeAs('public/profile', $filenameToStore);
             $avatar  = $filenameToStore;
            $user->image = $avatar ;
         }
    }



}
