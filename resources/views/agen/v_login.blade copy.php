<?php $bg = DB::table('cms')->first(); ?>
<?php $information = DB::table('information')->first(); ?>
<?php $social_media = DB::table('social_media')->where('status', 1)->get(); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title><?= $bg->name_website ?></title>
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <link rel="stylesheet" href="{{ asset('/assets/admin/vendor/fonts/boxicons.css') }}" />
    <link rel="stylesheet" href="{{ asset('/assets/css/style.css') }}">
</head>

<body>
    <nav class="navbar sticky-top navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <a class="navbar-brand" href="/">
                <img style="width: 120px;" src="{{ asset('assets/img/'.$bg->logo) }}" alt="">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText"
                aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarText">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                </ul>
                <span class="navbar-text">
                    <!-- <button type="button" style="border-radius:20px" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">Masuk</button> -->
                    <button id="myBtn" style="border-radius:20px" class="btn btn-primary">Masuk</button>
                </span>
            </div>
        </div>
    </nav>

    <!-- The Modal -->
    <div id="myModal" class="modal">

        <!-- Modal content -->
        <div class="modal-content">
            <span class="close">&times;</span>
            <div class="row">
                <div class="col-6">
                    <figure><img style="padding-left:100px;width:700px" src="{{ asset('assets/css_agen/images/signin-image.png')}}" alt="sing up image"></figure>
                </div>
                <div class="col-5" style="padding-top:100px">
                    <center>
                        <h5>Assalamualaikum,</h5>
                        <p>Masukkan Data Diri Anda</p>
                    </center>
                    <div class="card" style="padding-top:20px;padding-left:20px">
                    <form action="{{ route('login.aksi') }}" method="POST" class="register-form" id="login-form">
                    @csrf
                    @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                        @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                        </ul>
                    </div>
                    @endif
                    <div class="form-group">
                        <h4 for="your_name"><i class="zmdi zmdi-email"></i>Masukkan Email Anda</h4>
                        <input style="width:550px" type="email" name="email" class="form-control" id="email" placeholder="Masukkan Email Anda"/>
                    </div><br>
                    <div class="form-group">
                        <h4 for="your_pass"><i class="zmdi zmdi-lock"></i>Masukkan Password Anda</h4>
                        <input style="width:550px" type="password" class="form-control" name="password" id="password" placeholder="Masukkan Password Anda"/>
                    </div><br>
                    <div class="form-group form-button">
                        <input type="submit" name="signin" id="signin" class="btn btn-primary" value="Masuk"/>
                    </div><br>
                </form>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <div class="text-with-background" style="width:1400px;height:800px"></div>
        <div class="container" style="margin-top:-600px">
            <div class="row">
                <div class="col-4">
                    <h2><strong>Kembangkan & Lindungi Travel Umroh Anda</strong></h2><br>
                    <h5>Ingin group umroh terisi optimal & minim potensi kerugian? Tingkatkan produktifitas team anda & rasakan kemudahan dalam mengelola bisnis travel dari mana saja.</h5>
                        <br>
                    <h5>Software manajemen travel umroh yang lengkap & terintegrasi. Mulai dari mengelola tiket rute umroh, memasarkan paket umroh, aplikasi keagenan, mengelola pesanan, dokumen jamaah, hingga pembayaran & keuangan.</h5>
                </div>
                <div class="col">
                    <img src="{{ asset('assets/images/laptop.png') }}" width="600px">
                </div>
            </div><br><br><br><br><br>
            <div class="row">
                <div class="col-3">
                    <div class="card">
                        <p style="padding-left:30px;padding-top:10px;width:800px">Filter</p><hr>
                        <p style="padding-left:30px;padding-top:10px;width:800px"><strong>Jenis Tiket</strong></p>
                        <center>
                            <button class="button-search">Semua Jenis</button><br><br>
                            <button class="button-search">Rontokan</button><br><br>
                            <button class="button-search">Group</button>
                        </center><hr>
                        <p style="padding-left:30px;padding-top:10px;width:800px"><strong>Rute</strong></p>
                        <center>
                            <button class="button-search">Semua Rute</button><br><br>
                            <button class="button-search">Direct</button><br><br>
                            <button class="button-search">Transit</button>
                        </center><hr>
                        <p style="padding-left:30px;padding-top:10px;width:800px"><strong>Harga</strong></p>
                        <center>
                            <button class="button-search">Semua Harga</button><br><br>
                            <button class="button-search">< Rp.10.000.000</button><br><br>
                            <button class="button-search">< Rp.15.000.000</button><br><br>
                            <button class="button-search">< Rp.20.000.000</button>
                        </center>
                        <br>
                    </div>
                </div>
                <div class="col-9">
                    <h4>Tiket Gorup & Rontokan</h4><br>
                    <div class="card" style="padding-left:30px;padding-top:20px;width:800px">
                        <div class="row">
                            <div class="col">
                                <select style="width:300px" class="form-control">
                                    <option value="">Keberangkatan Paling Awal</option>
                                    <option value="">Paling Murah</option>
                                    <option value="">Paling Mahal</option>
                                </select>
                            </div>
                            <div class="col">
                                <select style="width:300px" class="form-control">
                                    <option value="">Semua Waktu</option>
                                    <option value="1">Januari</option>
                                    <option value="2">Februari</option>
                                    <option value="3">Maret</option>
                                    <option value="4">April</option>
                                    <option value="5">Mei</option>
                                    <option value="6">Juni</option>
                                    <option value="7">July</option>
                                    <option value="8">Agustus</option>
                                    <option value="9">September</option>
                                    <option value="10">Oktober</option>
                                    <option value="11">November</option>
                                    <option value="12">Desember</option>
                                </select>
                            </div>
                        </div><br>
                    </div><br>
                    @foreach($ticket as $v_tiket)
                    <div class="card" style="padding-left:30px;padding-top:10px;width:800px">
                        <div class="row">
                            <div class="col-9">
                                <i class='bx bxs-calendar'></i><?= $v_tiket->departure_date_arrival ?> - <?= $v_tiket->homecoming_date ?>
                            </div>
                            <div class="col-3">
                                <i class='bx bx-handicap'></i><?= $v_tiket->seat_capasitas ?>,
                                @if($v_tiket->ticket_type == 1)
                                    Group
                                @else
                                    Rontokan
                                @endif 
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-9">
                                <i class='bx bxs-plane-alt' ></i><img src="{{ asset('assets/maskapai_image/'.$v_tiket->image) }}" width="50px"><?= $v_tiket->name_maskapai ?>, Direct</img>
                            </div>
                            <div class="col-3">
                                <i class='bx bxs-time'></i><?= $hari ?> hari
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-9">
                                <i class='bx bxs-map'></i><?= $v_tiket->id_departure_city ?>-<?= $v_tiket->id_departure_city_arrival ?>,<?= $v_tiket->id_homecoming_city ?>-<?= $v_tiket->id_homecoming_city_arrival ?>
                            </div>
                            <div class="col-3">
                                <strong><p style="color:orange">Rp <?= number_format($v_tiket->price_ticket,2,',','.') ?></p></strong>
                            </div>
                        </div>
                    </div><br>
                    @endforeach
                </div>
            </div><br><br><br><br><br>
        </div>    
    <div class="text-with-background-2" style="width:1600px;height:900px;"></div>
        <div class="container" style="margin-top:-600px">
        <h3><strong>Bagaimana Caranya Bergabung?</strong></h3>
            <br><br>
            <div class="row">
                <div class="col">
                    <div class="card" style="padding:40px;padding-top:20px;height:300px">
                        <center>
                            <img src="{{ asset('assets/images/login_1.png') }}" width="100px">
                            <h4>Daftarkan Data Travel Kamu</h4><br>
                            <p>
                                Tambahkan detail tentang Travel anda, agar jamaah lebih mengenal Travel anda dengan baik.
                            </p>
                        </center>
                    </div>
                </div>
                <div class="col">
                    <div class="card" style="padding:40px;padding-top:20px;height:300px">
                        <center>
                            <img src="{{ asset('assets/images/login_2.png') }}" width="100px">
                            <h4>Kami Akan Menghubungi Kamu Untuk Verifikasi</h4><br>
                            <p>
                                Jika registrasi anda sudah selesai, kami akan menguhubungi anda untuk penjelasan lebih lanjut.
                            </p>
                        </center>
                    </div>
                </div>
                <div class="col">
                    <div class="card" style="padding:40px;padding-top:20px;height:300px">
                        <center>
                            <img src="{{ asset('assets/images/login_3.png') }}" width="100px">
                            <h4>Dashboard Verified</h4><br>
                            <p>
                                Dashboard sangat mudah digunakan dan lebih efisien sehingga dapat meningkatkan penjualan travel Anda.
                            </p>
                        </center>
                    </div>
                </div>
            </div>
    </div><br><br><br><br><br><br><br><br>
    

    <div class="wrapper mt-4">
        <div class="container wrapper_content">
            <footer class="py-5">
                <div class="row">
                    <div class="col">
                        <img style="width: 200px;" src="{{ asset('assets/img/'.$bg->logo) }}" alt="">
                        <div class="card mt-4 border-0">
                            <div class="card-body p-24">
                                <div class="row">
                                    <div class="col-2">
                                        <div
                                            style="background-color:#0be881;border-radius: 100%;width:40px;height:40px">
                                            <center>
                                                <i style="font-size: 18px;margin-top:10px" class="fab fa-whatsapp"></i>
                                            </center>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="col">
                                            <span>Whatsapp</span>
                                        </div>
                                        <div class="col">
                                            <a style="color:black;text-decoration:none;" href="https://wa.me/62<?= $information->whatsapp ?>"><b>0<?= $information->whatsapp ?></b></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="row mt-2">
                                    <div class="col-2">
                                        <div
                                            style="background-color:#f53b57;border-radius: 100%;width:40px;height:40px">
                                            <center>
                                                <i style="font-size: 18px;margin-top:10px;color:white"
                                                    class="far fa-envelope"></i>
                                            </center>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="col">
                                            <span>Email</span>
                                        </div>
                                        <div class="col">
                                            <b><?= $information->email ?></b>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col">
                        <h5 class="fw-bold">Tentang Perusahaan</h5>
                        <ul class="nav flex-column">
                            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Tentang Kami</a>
                            </li>
                            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Cara
                                    Pembayaran</a></li>
                            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Blog</a></li>
                            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">FAQ</a></li>
                            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Syarat dan
                                    Ketentuan</a></li>
                            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Kebijakan
                                    Privasi</a></li>
                            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Site Map</a>
                            </li>
                        </ul>
                    </div>

                    <div class="col">
                        <h5 class="fw-bold">Produk</h5>
                        <ul class="nav flex-column">
                            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Paket
                                    Umroh</a></li>
                            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Jadwal
                                    Sholat</a></li>
                            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Al-Quran
                                    Online</a></li>
                        </ul>
                    </div>

                    <div class="col">
                        <h5 class="fw-bold">Travel Partner</h5>
                        <ul class="nav flex-column">
                            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Gabung Travel
                                    Partner</a></li>
                            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Travel
                                    Umroh</a></li>
                        </ul>
                        <div class="col mt-4">
                            <h5 class="fw-bold">Ikuti Kami</h5>
                            <ul class="nav flex-column">
                                <?php foreach($social_media as $v_sosmed){ ?>
                                <li class="nav-item mb-2">
                                    <a href="<?= $v_sosmed->link ?>" class="nav-link p-0 text-muted">
                                    <?= $v_sosmed->icon ?> <?= $v_sosmed->name ?>
                                    </a>
                                </li>
                                <?php } ?>
                            </ul>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
    </div>

    <script>
    // Get the modal
    var modal = document.getElementById("myModal");

    // Get the button that opens the modal
    var btn = document.getElementById("myBtn");

    // Get the <span> element that closes the modal
    var span = document.getElementsByClassName("close")[0];

    // When the user clicks the button, open the modal 
    btn.onclick = function() {
    modal.style.display = "block";
    }

    // When the user clicks on <span> (x), close the modal
    span.onclick = function() {
    modal.style.display = "none";
    }

    // When the user clicks anywhere outside of the modal, close it
    window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
    }
    </script>
</body>

</html>