<?php $bg = DB::table('cms')->first(); ?>
@extends('template.main')

@section('content')
    <div class="container" style="margin-top: 50px;z-index: 999; position:relative;">
        <div class="row">
            <h4>Mengapa memilih website kami?</h4><br><br>
            <div class="col">
                <div class="row">
                    <div class="col-3">
                        <img src="{!! asset('assets/img/Image_33_222x.png') !!}" width="100px">
                    </div>
                    <div class="col-9">
                        <h5>Jaminan Berangkat dan Pembayaran Aman</h5>
                        <p>Dana aman 100% dan hanya kami bayarkan kepada biro umroh setelah anda mendapatkan tiket pesawat dan visa.</p>
                    </div>
                </div><br>
                <div class="row">
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
                <div class="card"><br>
                    <center><h5>Assalamualaikum,</h5>
                    <p>Masukkan Data Diri Anda</p>
                    <form action="{{ route('login.aksi_user') }}" method="POST" class="register-form" id="login-form">
                        @csrf
                        <input style="width:500px;" type="text" class="form-control" name="email" id="email" placeholder="masukkan email anda" required><br>
                        <input style="width:500px;" type="password" class="form-control" name="password" id="password" placeholder="masukkan password anda" required><br>
                        <button style="width:500px;" type="submit" class="btn text-white btn-block bg-blue">Masuk</button>
                    </form>
                    <a style="text-decoration: none; color: <?= $bg->bg1 ?>" href=""><p>Lupa Password?</p></a>
                    <br>
                    <p>Belum punya akun Umroh? <a style="text-decoration: none; color: <?= $bg->bg1 ?>" href="/auth_user/register">Daftar</a></p>
                    <p>Ingin masuk sebagai agen? <a style="text-decoration: none; color: <?= $bg->bg1 ?>" href="/login_agen"> Masuk</a></p>
                    </center>
                </div>
            </div>
        </div>
    </div><br><br><br><br><br><br><br>
@endsection