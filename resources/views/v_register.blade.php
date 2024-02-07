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
                    <center><h4>Assalamualaikum,</h4>
                    <p>Selamat Datang! Silahkan Masukkan Data Diri Anda</p>
                    <form action="{{ route('register_customer.simpan') }}" method="POST">
                    @csrf
                        <input style="width:500px;" class="form-control" type="text" class="@error('name')is-invalid @enderror" name="name" id="name" placeholder="nama lengkap anda" required/>
                        <br>
                        <input style="width:500px;" class="form-control" type="email" class="@error('email')is-invalid @enderror" name="email" id="email" placeholder="masukkan email anda" required/>
                        <br>
                        <input style="width:500px;" class="form-control" type="password" class="@error('password')is-invalid @enderror" name="password" id="password" placeholder="masukkan password anda" required/>
                        <br>
                        <input style="width:500px;" class="form-control" type="password" name="password_confirmation" id="password_confirmation" placeholder="masukkan kembali password anda" required/>
                        <br>
                        <button style="width:500px;" type="submit" class="btn text-white btn-block bg-blue">Masuk</button>
                    </form>    
                    <br>
                    <p>Sudah punya akun Umroh? <a style="text-decoration: none; color: <?= $bg->bg1 ?>" href="/auth_user/login">Login</a></p>
                    </center>
                </div>
            </div>
        </div>
    </div>
    <br><br><br><br><br><br><br>
@endsection