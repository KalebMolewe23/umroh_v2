<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;
use Illuminate\Auth\Events\Registered;

class Auth_userController extends Controller
{
    public function index(){

        $title = "Login / Masuk - Umroh.com";

        return view('v_login', ['title' => $title]);

    }

    public function loginaksi(Request $request){
        Validator::make($request->all(),[
            'email'     => 'required|email',
            'password'  => 'required'
        ])->validate();

        if (!Auth::attempt($request->only('email','password'), $request->boolean('remember'))){
            throw ValidationException::withMessages([
                'email' => trans('auth.failed')
            ]);
        }

        $request->session()->regenerate();

        return redirect()->route('home');
    }

    public function register(){

        $title = "Register / Daftar - Umroh.com";

        return view('v_register', ['title' => $title]);

    }

    public function save_registrasi(Request $request){
        Validator::make($request->all(), [
            'name'      => 'required',
            'email'     => 'required|email',
            'password'  => 'required|confirmed'
        ])->validate();

        $user = User::create([
            'name'      => $request->name,
            'email'     => $request->email,
            'password'  => Hash::make($request->password),
        ]);

        event(new Registered($user));

        Auth::login($user);

        return redirect('/auth_user/login')->with('success', 'Data Berhasil Ditambah');

    }

    public function logout(Request $request){
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        return redirect('/');
    }
}
