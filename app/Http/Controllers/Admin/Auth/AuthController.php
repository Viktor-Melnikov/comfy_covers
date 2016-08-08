<?php

namespace App\Http\Controllers\Admin\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\AuthRequest;
use App\Models\Admin\User;
use Auth;
use Session;

class AuthController extends Controller
{
    public function showLogin()
    {
        return view('admin.auth.login');
    }

    public function postLogin(AuthRequest $request)
    {
        if ( Auth::guard()->attempt(['email'=> $request->login, 'password' => $request->password]))
        {
            $user = Auth::guard()->user();

            $user->increment('logged');

            return redirect()->to('admin');
        }
        else
        {
            Session::flash('auth', [
                'status'  => 'danger',
                'message' => 'Неверная пара логин/пароль'
            ] );

            return redirect()->back()->withInput();
        }
    }

    public function logout()
    {
        Auth::logout();

        return redirect('admin');
    }
}
