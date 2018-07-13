<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Iluminate\Http\Response;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

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
     'username' => 'max:25|min:3|unique:users|required',
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


  public function getLogout()
  {
    Auth::logout();
    return redirect()-> route('home');
  }

  public function getProfile()
  {
    return view('profile', ['user' => Auth::user()]);
  }

  public function postSaveProfile(Request $request)
  {
    $this->validate($request,[
      'username' => 'required|max:50|min:3'
    ]);
    $user = Auth::user();
    $user->username = $request['username'];
    $user->update();


    if($request->hasFile('image')){
      $file = $request->file('image');
      $filename = $request['username'] . '-' . $user->id . '.' . $file->extension();
      $file->storeAs('userimage', $filename);
      //Storage::disk('local')->put($filename, File::get($file));
    }
    return redirect()->route('profile');
  }
  public function getUserImage($filename)
  {
    $file = Storage::disk('local')->get($filename);
    return new Response($file, 200);
  }


}
