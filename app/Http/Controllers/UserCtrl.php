<?php

namespace App\Http\Controllers;

use App\Http\Middleware\RedirectIfAuthenticated;
use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Http\Controllers\Controller\PageCtrl;
use Illuminate\validation\Rule;


class UserCtrl extends Controller
{
    public function Register()
    {
        return view('User.Regis');


    }

    public function registerPost(Request $request)
    {
        $formFields = $request->validate([
            'name' => ['required', 'min:2'],
            'email' => ['required', 'email', Rule::unique('users', 'email')],
            'password' => 'required|confirmed|min:8'
            ]);

        // to make password hash
        $formFields['password'] = bcrypt($formFields['password']);

        // create it tru model for sampling/testing 'User::' can be found at app/models/user
        $user = User::create($formFields);


        return redirect('/')->with('success', 'Registered Successfully');
    }



    public function login()
    {
        return view('User.Login');
    }
    public function loginpost(Request $request)
    {
        $credentials = [
            'email' => $request->email,
            'password' => $request->password,
        ];

        if (Auth::attempt($credentials)){
            return Redirect('/')->with('success', 'Login Success');
        }
        return back()->with('error', 'Invalid Email or Password!');

    }
}
