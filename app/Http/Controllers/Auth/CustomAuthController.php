<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Member;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class CustomAuthController extends Controller
{
    public function showRegister()
    {
        return view('auth.custom-register'); // Կամ որտեղ պահում ես այս Blade view-ն
    }

    public function register(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:members,email',
            'password' => 'required|min:6|confirmed',
        ]);

        $member = Member::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        Auth::login($member);

        return redirect()->route('home'); // Փոխիր ըստ անհրաժեշտության
    }

    public function showLogin()
    {
        return view('auth.custom-login'); // Քո login view
    }

    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            return redirect()->route('home');
        }

        return back()->withErrors(['email' => 'Մուտքի տվյալները սխալ են։']);
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('custom.login');
    }
}
