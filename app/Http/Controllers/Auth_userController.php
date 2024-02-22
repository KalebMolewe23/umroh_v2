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
use App\Mail\KirimEmail;
use App\Mail\ResetMail;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\URL;

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
            $request->session()->flash('error', 'Kata sandi yang Anda masukkan salah');
            return redirect()->route('user/login');
        }else{
            $request->session()->regenerate();
    
            return redirect()->route('home');
        }

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

        // event(new Registered($user));

        //update email verifikasi saat melakukan verify akun melalui email
        $data_id_user = DB::table('users')->where('email', $request->email)->first();
        $token = csrf_field();
        $verificationUrl = URL::to('verification_account/' . $data_id_user->id);

        $data_web = DB::table('cms')->first();
        //get image didalam asset dan kolom dari cms
        $imageData = base64_encode(file_get_contents(asset('assets/img/' . $data_web->logo)));
        $imageHtml = "<img src='data:image/png;base64,{$imageData}' class='card-img-top' alt='Logo'>";
        $pesan = "
            <center>
                <div class='card' style='width: 41rem;position: relative;display: flex;flex-direction: column;min-width: 0;word-wrap: break-word;background-color: #fff;background-clip: border-box;border: 1px solid rgba(0,0,0,.125);border-radius: 1.25rem;'>
                    <br>
                    $imageHtml
                    <div class='card-body'>
                        <h3 style='color:black'>Assalamualaikum, Selamat akun anda berhasil dibuat.</h3>
                        <p style='color:black'>Selanjutnya klik tombol dibawah ini untuk melakukan verifikasi akun anda.</p>
                        <form action='$verificationUrl' method='POST'>
                            $token                        
                            <button style='width: 142px;background-color: #15baef;border-radius: 10px;color: white;height: 50px;'>
                                <strong>Verifikasi Akun</strong>
                            </button>
                        </form>    
                        <br><br>
                        <center><p style='color:red;text-decoration: none;'>Info lebih lanjut, silahkan klik di link ini<a style='color:red;text-decoration: none;' href='https://api.whatsapp.com/send/?phone=62083819496697&text&type=phone_number&app_absent=0'> https://api.whatsapp.com/send/?phone=62083819496697&text&type=phone_number&app_absent=0</a></p></center>
                    </div>
                </div>
            </center>
        ";
        $data_email = [
            'isi' => $pesan
        ];
        Mail::to("$user->email")->send(new kirimEmail($data_email));

        // Auth::login($user);

        return redirect()->route('user/login');

    }

    public function logout(Request $request){
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        return redirect('/');
    }

    public function verify_account(Request $request, $id){
        $data = User::find($id);
        
        $data->email_verified_at = now();
        $data->save();

        return redirect('/auth_user/login')->with('success', 'Data Berhasil Ditambah');
    }

    public function change_password(Request $request){

        $email = $request->email;
        
        $pesan = "
            <center>
                <div class='card' style='width: 41rem;position: relative;display: flex;flex-direction: column;min-width: 0;word-wrap: break-word;background-color: #fff;background-clip: border-box;border: 1px solid rgba(0,0,0,.125);border-radius: 1.25rem;'>
                    <br>
                    <div class='card-body'>
                        <h3 style='color:black'>Assalamualaikum, berikut informasi password baru anda.</h3>
                        <p style='color:black'>Email : $email</p>
                        <p style='color:black'>Password : password</p>
                        <br><br><center><p style='color:red;text-decoration: none;'>Info lebih lanjut, silahkan klik di link ini<a style='color:red;text-decoration: none;' href='https://api.whatsapp.com/send/?phone=62083819496697&text&type=phone_number&app_absent=0'> https://api.whatsapp.com/send/?phone=62083819496697&text&type=phone_number&app_absent=0</a></p></center>
                    </div>
                </div>
            </center>
        ";
        $data_email = [
            'isi' => $pesan
        ];
        Mail::to("$email")->send(new ResetMail($data_email));
        
        $data_user = DB::table('users')->where('email', $email)->first();

        $data = User::find($data_user->id);
        $data->password = Hash::make("password");
        $data->save();
        
        return redirect('/auth_user/login')->with('success', 'Data Berhasil Ditambah');
    }
}
