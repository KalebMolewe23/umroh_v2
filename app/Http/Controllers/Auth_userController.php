<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;
use Illuminate\Auth\Events\Registered;
use Illuminate\Support\Facades\DB;

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

    public function getRegencies(Request $request){

        $kota = DB::table('regencies')->where('province_id', $request->province_id)->get();

        if(count($kota) > 0){
            return response()->json($kota);
        }
    }

    public function save_registrasi(Request $request){
        Validator::make($request->all(), [
            'name'              => 'required',
            'email'             => 'required|email',
            'password'          => 'required|confirmed',
            'name'              => 'required',
            'email'             => 'required',
            'phone'             => 'required',
            'ktp'               => 'required',
            'father_name'       => 'required',
            'blood_groub'       => 'required',
            'date_of_birth'     => 'required',
            'born_place'        => 'required',
            'marital_status'    => 'required',
            'title'             => 'required',
            'gender'            => 'required',
            'citizenship'       => 'required',
            'address'           => 'required',
            'id_province'       => 'required',
            'id_regencies'      => 'required',
            'education'         => 'required',
            'job'               => 'required',
            'status_umroh'      => 'required',
            'passport_name'     => 'required',
            'passport_number'   => 'required',
            'passport_place'    => 'required',
            'passport_date'     => 'required',
            'expired'           => 'required',
            'companion_name'    => 'required',
            'connection'        => 'required',
            'password'          => 'required',
        ])->validate();

        $user = User::create([
            'name'              => $request->name,
            'email'             => $request->email,
            'phone'             => $request->phone,
            'ktp'               => $request->ktp,
            'father_name'       => $request->father_name,
            'blood_groub'       => $request->blood_groub,
            'date_of_birth'     => $request->date_of_birth,
            'born_place'        => $request->born_place,
            'marital_status'    => $request->marital_status,
            'title'             => $request->title,
            'gender'            => $request->gender,
            'citizenship'       => $request->citizenship,
            'address'           => $request->address,
            'id_province'       => $request->id_province,
            'id_regencies'      => $request->id_regencies,
            'education'         => $request->education,
            'job'               => $request->job,
            'status_umroh'      => $request->status_umroh,
            'passport_name'     => $request->passport_name,
            'passport_number'   => $request->passport_number,
            'passport_place'    => $request->passport_place,
            'passport_date'     => $request->passport_date,
            'expired'           => $request->expired,
            'companion_name'    => $request->companion_name,
            'connection'        => $request->connection,
            'password'          => Hash::make($request->password),
        ]);

        event(new Registered($user));

        Auth::login($user);

        return redirect('/home')->with('success', 'Data Berhasil Ditambah');

    }

    public function logout(Request $request){
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        return redirect('/');
    }
}
