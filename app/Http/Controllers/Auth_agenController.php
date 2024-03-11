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
use Illuminate\Support\Facades\Http;

class Auth_agenController extends Controller
{
    public function index(){

        $params = $_GET;
        $query = DB::table('bursa_tickets')
        ->join('maskapais', 'maskapais.id', '=', 'bursa_tickets.id_maskapai')
        ->orderBy('bursa_tickets.id', 'DESC')
        ->get();

        $title = "Login Agen Travel";

        if (!empty($params['departure_date'])){
            $query->whereHas('bursa_tickets', function ($query) use ($params){
                $query->whereMonth('departure_date', '=', $params['departure_date']);
            });
        }

        if(!empty($params['tanggal_awal'])) {
            $tanggal_awal = date('Y-m-d', strtotime($params['tanggal_awal']));
            $tanggal_akhir = date('Y-m-d', strtotime($params['tanggal_akhir']));
            $query->where('bursa_tickets', function ($query) use ($tanggal_awal, $tanggal_akhir){
                $query->where('departure_date', '>=', $tanggal_awal);
                $query->where('departure_date', '<=', $tanggal_akhir);
            });
        }

        $today = Carbon::today()->toDateString();

        $query->where('bursa_tickets', function ($query) use ($today){
            $query->where('departure_date', '>=', $today);
        });

        return view('agen.v_login', ['ticket' => $query, 'title' => $title], compact('query'));

    }

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
