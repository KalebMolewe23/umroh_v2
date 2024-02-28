<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class Auth_agenController extends Controller
{
    public function index(){

        $title = "Login Agen Travel";

        $today = Carbon::today()->toDateString();

        $tiket = DB::table('bursa_tickets')->join('maskapais', 'maskapais.id' ,'=', 'bursa_tickets.id_maskapai')->where('departure_date', '>=', $today)->get();

        return view('agen.v_login', ['ticket' => $tiket, 'title' => $title]);
    }

    // public function loginaksi(Request $request){
    //     Validator::make($request->all(),[
    //         'email'     => 'required|email',
    //         'password'  => 'required'
    //     ])->validate();

    //     if (!Auth::attempt($request->only('email','password'), $request->boolean('remember'))){
    //         throw ValidationException::withMessages([
    //             'email' => trans('auth.failed')
    //         ]);
    //     }

    //     $request->session()->regenerate();

    //     return redirect()->route('agen/dashboard');

    // }

    public function loginaksi(Request $request){
        $request->validate([
            'email'     => 'required', 
            'password'     => 'required', 
        ],[
            'email.required'    => 'Email Wajib Diisi',
            'password.required' => 'Password Wajib Diisi'
        ]);

        $infologin = [
            'email'     => $request->email,
            'password'  => $request->password,
        ];

        if(Auth::attempt($infologin)){
            if(Auth::user()->idrole == '2'){
                return redirect()->route('agen/dashboard');
            }else{
                return redirect()->route('admin/dashboard');
            }
        }else{
            return redirect('login_agen')->with('success', 'Username dan password yang dimasukkan tidak sesuai');
        }
    }

    public function registrasi(){
        return view('agen.v_registrasi');
    }

    public function save_registrasi(Request $request){
        Validator::make($request->all(), [
            'name'      => 'required',
            'email'     => 'required|email',
            'password'  => 'required|confirmed'
        ])->validate();

        User::create([
            'name'      => $request->name,
            'email'     => $request->email,
            'password'  => Hash::make($request->password),
        ]);

        return redirect()->route('login_agen');

    }

    public function logout(Request $request){
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        return redirect('login_agen');
    }
}
