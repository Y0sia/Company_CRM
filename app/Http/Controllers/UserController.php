<?php

namespace App\Http\Controllers;

use App\Http\Requests\Login;
use App\Http\Requests\Register;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function loginForm()
    {
        return view('login');
    }

    public function create()
    {
        return view('register');
    }

    /**
     *
     * @param  Register  $request
     */

    public function store(Register $request)
    {
        $user = User::create([
            'login' => $request->login,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);
        Auth::login($user);
        return redirect()->home()->with('success', 'Успешно');;
    }

    /**
    *
    * @param Login $request
    */

    public function login(Login $request)
    {
        $have_login = Auth::attempt([
                            'login' => $request->login_email,
                            'password' => $request->password,
                        ]);
        $have_email = Auth::attempt([
            'email' => $request->login_email,
            'password' => $request->password,
        ]);
        if($have_login || $have_email) {
            return redirect()->home()->with('success', 'Успешный вход!');
        }
        return redirect()->back()->with('danger', 'Неверный логин или пароль');;
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->home()->with('success', 'Вы успешно вышли');
    }
}
