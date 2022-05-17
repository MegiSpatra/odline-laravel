<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index()
    {
        return view('login.index', [
            'title' => 'Login',
            'active' => 'login'
        ]);
    }

    public function authenticate(Request $request)
    {
        // $this->validate($request, [
        //     'email' => 'required|email:dns',
        //     'password' => 'required',
        // ]);
        // Attempt to log the user in
        // Passwordnya pake bcrypt
        if (Auth::guard('web')->attempt(['email' => $request->email, 'password' => $request->password])) {
            // if successful, then redirect to their intended location
            return redirect()->intended('/dashboard');
        } else if (Auth::guard('members')->attempt(['email' => $request->email, 'password' => $request->password])) {
            return redirect()->intended('/dashboard');
        }
    }
    public function logout() {
        if (Auth::guard('web')->check()) {
            Auth::guard('web')->logout();
        } elseif (Auth::guard('memberss')->check()) {
            Auth::guard('memberss')->logout();
        }
        return redirect('/');
    }
}