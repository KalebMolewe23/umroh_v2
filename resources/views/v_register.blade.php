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
                        <div class="row" style="padding:20px">
                            <div class="col">
                                <input class="form-control" type="text" class="@error('name')is-invalid @enderror" name="name" id="name" placeholder="nama lengkap anda" required/>
                            </div>
                            <div class="col">
                                <input class="form-control" type="number" class="@error('ktp')is-invalid @enderror" name="ktp" id="ktp" placeholder="nomor ktp anda" required/>
                            </div>
                        </div>
                        <div class="row" style="padding:20px">
                            <div class="col">
                                <input class="form-control" maxlength="255" type="email" class="@error('email')is-invalid @enderror" name="email" id="email" placeholder="masukkan email anda" required/>
                            </div>
                            <div class="col">
                                <input class="form-control" maxlength="20" type="number" class="@error('phone')is-invalid @enderror" name="phone" id="phone" placeholder="nomor hp anda" required/>
                            </div>
                        </div>
                        <div class="row" style="padding:20px">
                            <div class="col">
                                <input class="form-control" type="text" maxlength="200" class="@error('father_name')is-invalid @enderror" name="father_name" id="father_name" placeholder="masukkan nama ayah kandung" required/>
                            </div>
                            <div class="col">
                                <select name="blood_groub" class="form-control" required>
                                    <option value=""> -Pilih Golongan Darah- </option>
                                    <option value="A">A</option>
                                    <option value="B">B</option>
                                    <option value="AB">AB</option>
                                    <option value="O">O</option>
                                </select>
                            </div>
                        </div>
                        <div class="row" style="padding:20px">
                            <div class="col">
                                <label style="margin-left:-189px">Tempat Lahir</label>
                                <input class="form-control" type="text" maxlength="200" class="@error('born_place')is-invalid @enderror" name="born_place" id="born_place" placeholder="masukkan tempat lahir anda" required/>
                            </div>
                            <div class="col">
                                <label style="margin-left:-189px">Tanggal Lahir</label>
                                <input class="form-control" type="date" class="@error('date_of_birth')is-invalid @enderror" name="date_of_birth" id="date_of_birth" placeholder="masukkan tanggal lahir anda" required/>
                            </div>
                        </div>
                        <div class="row" style="padding:20px">
                            <div class="col">
                                <select name="marital_status" class="form-control" required>
                                    <option value=""> -Pilih Status Perkawinan- </option>
                                    <option value="Kawin">Kawin</option>
                                    <option value="Belum Kawin">Belum Kawin</option>
                                    <option value="Cerai">Cerai</option>
                                    <option value="Cerai Mari">Cerai Mati</option>
                                </select>
                            </div>
                            <div class="col">
                                <select name="title" class="form-control" required>
                                    <option value=""> -Pilih Title Anda- </option>
                                    <option value="MR">MR</option>
                                    <option value="MRS">MRS</option>
                                </select>
                            </div>
                        </div>
                        <div class="row" style="padding:20px">
                            <div class="col">
                                <select name="gender" class="form-control" required>
                                    <option value=""> -Pilih Jenis Kelamin Anda- </option>
                                    <option value="Male">Laki-laki</option>
                                    <option value="Female">Perempuan</option>
                                </select>
                            </div>
                            <div class="col">
                                <input class="form-control" type="text" maxlength="200" class="@error('citizenship')is-invalid @enderror" name="citizenship" id="citizenship" placeholder="masukkan kewarganegaraan anda" required/>
                            </div>
                        </div>
                        <div class="row" style="padding:20px">
                            <div class="col">
                                <select name="id_province" id="provinsi" class="form-control" required>
                                <option value="">Pilih Provinsi</option>
                                    <?php $provinsi = DB::table('provinces')->get(); ?>
                                    @foreach($provinsi as $v_provinsi)
                                        <option value="<?= $v_provinsi->id ?>"><?= $v_provinsi->name ?></option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col">
                                <select class="form-control" id="kota" name="id_regencies" required>
                                </select>
                            </div>
                        </div>
                        <input style="width:600px;" class="form-control" maxlength="200" type="text" class="@error('address')is-invalid @enderror" name="address" id="address" placeholder="masukkan alamat anda" required/>
                        <div class="row" style="padding:20px">
                            <div class="col">
                                <input class="form-control" type="text" maxlength="200" class="@error('education')is-invalid @enderror" name="education" id="education" placeholder="masukkan pendidikan terakhir anda" required/>
                            </div>
                            <div class="col">
                                <input class="form-control" type="text" maxlength="200" class="@error('job')is-invalid @enderror" name="job" id="job" placeholder="masukkan pekerjaan anda" required/>
                            </div>
                        </div>
                        <div class="row" style="padding:20px">
                            <div class="col">
                                <select name="status_umroh" id="status_umroh" class="form-control" required>
                                    <option value="status_umroh"> -Pilih Status Umroh- </option>
                                    <option value="UMROH">Umroh</option>
                                    <option value="HAJI">Haji</option>
                                </select>
                            </div>
                            <div class="col">
                                <input class="form-control" type="text" maxlength="200" class="@error('passport_name')is-invalid @enderror" name="passport_name" id="passport_name" placeholder="masukkan nama passport anda" required/>
                            </div>
                        </div>
                        <div class="row" style="padding:20px">
                            <div class="col">
                                <input class="form-control" type="text" maxlength="200" class="@error('passport_number')is-invalid @enderror" name="passport_number" id="passport_number" placeholder="masukkan nomor passport anda" required/>
                            </div>
                            <div class="col">
                                <input class="form-control" type="text" maxlength="200" class="@error('passport_place')is-invalid @enderror" name="passport_place" id="passport_place" placeholder="masukkan lokasi pembuatan passport anda" required/>
                            </div>
                        </div>
                        <div class="row" style="padding:20px">
                            <div class="col">
                                <label style="margin-left:-78px">Tanggal Pembuatan Passport</label>
                                <input class="form-control" type="date" class="@error('passport_date')is-invalid @enderror" name="passport_date" id="passport_date" placeholder="masukkan nomor passport anda" required/>
                            </div>
                            <div class="col">
                                <label style="margin-left:-22px">Tanggal Habis Masa Berlaku Passport</label>
                                <input class="form-control" type="date" class="@error('expired')is-invalid @enderror" name="expired" id="expired" placeholder="masukkan lokasi pembuatan passport anda" required/>
                            </div>
                        </div>
                        <div class="row" style="padding:20px">
                            <div class="col">
                                <input class="form-control" type="text" maxlength="200" class="@error('companion_name')is-invalid @enderror" name="companion_name" id="companion_name" placeholder="masukkan pendamping anda" required/>
                            </div>
                            <div class="col">
                                <input class="form-control" type="text" class="@error('connection')is-invalid @enderror" name="connection" id="connection" placeholder="masukkan hubungan pendamping anda" required/>
                            </div>
                        </div>
                        <div class="row" style="padding:20px">
                            <div class="col">
                                <input class="form-control" type="password" maxlength="255" class="@error('password')is-invalid @enderror" name="password" id="password" placeholder="masukkan password anda" required/>
                            </div>
                            <div class="col">
                                <input class="form-control" type="password" name="password_confirmation" id="password_confirmation" placeholder="masukkan kembali password anda" required/>
                            </div>
                        </div>
                        <br>
                        <br>
                        <button style="width:600px;" type="submit" class="btn text-white btn-block bg-blue">Buat Akun</button>
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