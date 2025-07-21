<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Member;
use App\Models\NewUser;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class CustomAuthController extends Controller
{
   
public function register(Request $request)
{
    $request->validate([
        'name' => 'required|string|max:255',
        'email' => 'required|email|unique:newusers,email',
        'password' => 'required|string|confirmed|min:6',
    ]);

    $user = NewUser::create([
        'name' => $request->name,
        'email' => $request->email,
        'password' => Hash::make($request->password),
    ]);
dd($user);
    Auth::login($user);

    return redirect()->route('auth.registr'); // փոխիր ըստ անհրաժեշտության
}
}
