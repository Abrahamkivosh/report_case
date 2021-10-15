<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

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
    public function update(Request $request,User $user){
        $request->validate([

        ]);

            $user->update($request->all());

            if($user){

            return redirect()->route('home');
            }

    }
}
