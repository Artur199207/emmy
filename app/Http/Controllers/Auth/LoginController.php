<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Handle user redirection after authentication.
     */
    protected function authenticated()
    {
        if (Auth::user()->role_as == '1') {
            return redirect('admin/dashboard')->with('status', 'Добро пожаловать в админ панель');
        } else if (Auth::user()->role_as == '0') {
            return redirect('/home')->with('status', 'Вы успешно вошли в систему');
        } else {
            return redirect('/')->with('status', 'Неизвестная роль пользователя');
        }
    }

    /**
     * Create a new controller instance.
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
        $this->middleware('auth')->only('logout');
    }
}
