<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Usercontroller extends Controller
{
 public function postLogIn(Request $request)
 {
   $this->validate($request, [
     'username' => 'required',
     'password' => 'required'
   ]);

   if (Auth::attempt(['username'=> $request['username'], 'password'=> $request['password']])) {
     return redirect()->route('home');
   }else{
   return redirect()->back();
  }
 }

 public function postRegister(Request $request)
 {
   $this->validate($request, [
     'email' => 'email|unique:users|required',
     'username' => 'max:25|unique:users|required',
     'password' => 'min:6|required'
   ]);

   $email = $request['email'];
   $username = $request['username'];
   $password = bcrypt ($request['password']);

   $user = new User();
   $user->email = $email;
   $user->username = $username;
   $user->password = $password;
   $user->save();

   Auth::login($user);

   return redirect()->route('home');
 }

public function getHome()
{
  return view ('home');
}







}
