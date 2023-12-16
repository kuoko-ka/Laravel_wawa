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

        //Directly Login After register
        auth()->login($user);
        return redirect('/')->with('success', 'Registered Successfully and Logged in');
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
            $request->session()->regenerate();
            return Redirect('/')->with('success', 'Login Success');
        }
        return back()->with('error', 'Invalid Email or Password!');

    }

    public function logout(Request $request) {
        auth()->logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/')->with('message', 'You have been logged out!');

    }

}
