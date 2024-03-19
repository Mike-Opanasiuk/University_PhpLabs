<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Facades\Session;

class user_controller extends Controller
{
    public function postSignin(Request $request) {
        if (!Auth::attempt($request->only('email', 'password'), $request->has('member'))) {
            echo '<h1>Невірний логін або пароль</h1>';
            echo '<h2><a href="/">На головну</a></h2>';
        }
        else {
            echo '<h1>Авторизація пройшла успішно</h1>';
            echo '<h2><a href="/">На головну</a></h2>';
        }
    }

    public function postReg(Request $request) {
        $user = User::create([
            'email' => $request->input('email'),
            'name' => $request->input('name'),
            'password' => bcrypt($request->input('password'))
        ]);

        Auth::loginUsingId($user->id);

        return redirect('/');
    }

    public function perform() {
        Session::flush();
        Auth::logout();
        return redirect('/');
    }
}
