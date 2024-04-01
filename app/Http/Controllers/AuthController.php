<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function signup() 
    {
        return view('signup');
    }

    public function signupPost(Request $request) 
    {
      $user = new User();

      $user->name = $request->name;
      $user->password = Hash::make($request->password);

      $user->save();

      return back()->with('success', 'Register successufully');
    }

    public function login()
    {
        return view('login');
    }

    public function loginPost(Request $request)
    {
        $credetials = [
            'email' => $request->email,
            'password' => $request->password,
        ];
 
        if (Auth::attempt($credetials)) {
            return redirect('/home')->with('success', 'Login Success');
        }
 
        return back()->with('error', 'Error Email or Password');
    }

    public function logout()
    {
        Auth::logout();
 
        return redirect()->route('login');
    }
}
