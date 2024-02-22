<?php $bg = DB::table('cms')->first(); ?>
@extends('template.main')

@section('content')
    <main id="blur">
        <div class="container" style="margin-top: 50px;z-index: 999; position:relative;">
        @if(session('error'))
            <div class="alert alert-danger">
                {{ session('error') }}
            </div>
        @endif
            <div class="row">
                <h4>Mengapa memilih website kami?</h4><br><br>
                <div class="col">
                    <div class="row" data-aos="zoom-out-right">
                        <div class="col-3">
                            <img src="{!! asset('assets/img/Image_33_222x.png') !!}" width="100px">
                        </div>
                        <div class="col-9" >
                            <h5>Jaminan Berangkat dan Pembayaran Aman</h5>
                            <p>Dana aman 100% dan hanya kami bayarkan kepada biro umroh setelah anda mendapatkan tiket pesawat dan visa.</p>
                        </div>
                    </div><br>
                    <div class="row" data-aos="zoom-out-right">
                        <div class="col-3">
                            <img src="{!! asset('assets/img/Image_36_222x.png') !!}" width="100px">
                        </div>
                        <div class="col-9">
                            <h5>Jaminan Berangkat dan Pembayaran Aman</h5>
                            <p>Nikmati fasilitas seperti gratis biaya pembuatan atau perpanjangan Paspor, VFS Tashleel, Internet Provider selama ibadah umroh.</p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card" data-aos="zoom-out-left"><br>
                        <center><h5>Assalamualaikum,</h5>
                        <p>Masukkan Data Diri Anda</p>
                        <form action="{{ route('login.aksi_user') }}" method="POST" class="register-form" id="login-form">
                            @csrf
                            <input type="email" class="form-control_login" name="email" id="email" placeholder="masukkan email anda" required><br>
                            <input type="password" class="form-control_login" name="password" id="password" placeholder="masukkan password anda" required><br>
                            <button type="submit" class="btn text-white btn-block bg-blue">Masuk</button>
                        </form>
                        <a style="text-decoration: none; color: <?= $bg->bg1 ?>" href="#" onclick="toggle()"><p>Lupa Password?</p></a>
                        <br>
                        <p>Belum punya akun Umroh? <a style="text-decoration: none; color: <?= $bg->bg1 ?>" href="/auth_user/register">Daftar</a></p>
                        <p>Ingin masuk sebagai agen? <a style="text-decoration: none; color: <?= $bg->bg1 ?>" href="/login_agen"> Masuk</a></p>
                        </center>
                    </div>
                </div>
                <style>
                    main#blur.active{
                        filter: blur(20px);
                        pointer-events: none;
                        user-select: none;
                    }
    
                    #popup{
                        position: fixed;
                        top: 40%;
                        left: 50%;
                        transform: translate(-50%, -50%);
                        width: 800px;
                        padding: 50px;
                        box-shadow: 0 5px 30px rgba(0,0,0,.30);
                        background: #fff;
                        opacity: 0;
                        transition: 0.5s;
                    }
    
                    #popup.active{
                        top: 50%;
                        visibility: visible;
                        opacity: 1;
                        transition: 0.5s;
                    }
    
                    .form-control_login {
                        display: block;
                        width: 80%;
                        padding: 0.375rem 0.75rem;
                        font-size: 1rem;
                        font-weight: 400;
                        line-height: 1.5;
                        color: #212529;
                        background-color: #fff;
                        background-clip: padding-box;
                        border: 1px solid #ced4da;
                        -webkit-appearance: none;
                        -moz-appearance: none;
                        appearance: none;
                        border-radius: 0.25rem;
                        transition: border-color .15s ease-in-out,box-shadow .15s ease-in-out;
                    }
    
                    @media only screen and (max-width: 1000px) {
                        .col-3{
                            display: none;
                        }

                        #popup{
                            width: 500px;
                        }
                    }
    
                    @media only screen and (max-width: 775px) {
                        h4{
                            display: none;
                        }
                        .col-3{
                            display: block;
                        }
                        .col {
                            flex: 0 0 100%; */
                            /* flex-grow: 1; */
                            /* flex-shrink: 0; */
                            /* flex-basis: 0%; */
                        }
                        #popup{
                            width: 350px;
                        }
                    }
                </style>
            </div>
        </div>
    </main>
    
    <div id="popup">
        <h4>Assalamualaikum,</h4><p> silahkan masukkan email anda di bawah ini.</p>
        <form action="{{ url('/change_password') }}" method="post">
            @csrf
            <input type="email" class="form-control" name="email"><br>
            <button type="button" onclick="toggle()" class="btn btn-danger">Kembali</button>
            <button type="submit" class="btn btn-primary">Reset Password</button>
        </form>
    </div>
    
    <br><br><br><br><br><br><br>
@endsection