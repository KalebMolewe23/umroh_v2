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
    <link rel="stylesheet" href="https://unpkg.com/rolly.js@0.2.1/css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css">
    <link rel="stylesheet" href="{{ asset('/assets/css/style.css') }}">

    <style>
         .button-search{
            margin:auto;
            margin-top:5%;
            position:relative;
            width: 250px;
            height: 42px;
            border: 2px solid <?= $bg->bg1; ?>;
            padding: 0px 10px;
            border-radius: 10px;
            background-color: white;
        }

        .button-search:hover{
            background-color: <?= $bg->bg1; ?>;
        }
    </style>

</head>

<body>
    <main class="app" id="blur">
        <header>
            <div class="left-menu">
                <img style="width:150px" src="{{ asset('assets/img/'.$bg->logo) }}" alt="">
            </div>
            <div class="right-menu">
                <ul>
                    <li><a href="#" onclick="toggle()"><button class="button-search">Login</button></a></li>
                </ul>
            </div>
        </header>

        <section class="sec2 left-right-sec" data-scene>
            <div class="container">
                <div class="about" id="about">
                    <div class="sec2-inner">
                        <div class="img" data-aos="zoom-out-up">
                            <div class="img">
                                <img style="width:550px" src="{{ asset('assets/image_travel/travel_umroh.png') }}" alt="">
                            </div>
                        </div>
                        <div class="text" data-aos="zoom-out-left">
                            <h2><strong>Kembangkan & Lindungi Travel Umroh Anda</strong></h2>
                            <div class="text-inner">
                                <p>
                                    Ingin group umroh terisi optimal & minim potensi kerugian? Tingkatkan produktifitas team anda & rasakan kemudahan dalam mengelola bisnis travel dari mana saja.
                                </p>
                                <p>
                                    Software manajemen travel umroh yang lengkap & terintegrasi. Mulai dari mengelola tiket rute umroh, memasarkan paket umroh, aplikasi keagenan, mengelola pesanan, dokumen jamaah, hingga pembayaran & keuangan.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="sec1" data-scene>
            <div class="container">
                <div class="information" id="information">
                <h2><strong>Tiket Group & Rontokan</strong></h2>
                <div class="sec1-inner">
                    <div class="text text-left" data-aos="zoom-out-right">
                        <div class="card">
                            <p>Filter</p>
                            <hr>
                            <p><strong>Jenis Tiket</strong></p>
                            <center>
                                <button class="button-search">Semua Jenis</button><br><br>
                                <button class="button-search">Rontokan</button><br><br>
                                <button class="button-search">Group</button>
                            </center><br><hr>
                            <p><strong>Rute</strong></p>
                            <center>
                                <button class="button-search">Semua Rute</button><br><br>
                                <button class="button-search">Direct</button><br><br>
                                <button class="button-search">Transit</button>
                            </center><br><hr>
                            <p><strong>Harga</strong></p>
                            <center>
                                <button class="button-search">Semua Harga</button><br><br>
                                <button class="button-search">< Rp.10.000.000</button><br><br>
                                <button class="button-search">< Rp.15.000.000</button><br><br>
                                <button class="button-search">< Rp.20.000.000</button>
                            </center><br>
                        </div>
                    </div>
                    <div class="text text-right" data-aos="zoom-out-left">
                        @foreach($ticket as $v_tiket)
                            <div class="card" style="padding-left:30px;padding-top:20px;">
                                <div class="row">
                                    <div class="col-7">
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
                                    <div class="col-7">
                                        <i class='bx bxs-plane-alt' ></i><img src="{{ asset('assets/maskapai_image/'.$v_tiket->image) }}" width="50px"><?= $v_tiket->name_maskapai ?>, Direct</img>
                                    </div>
                                    <div class="col-4">
                                        <i class='bx bxs-time'></i><?= $hari ?> hari
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-7">
                                        <i class='bx bxs-map'></i><?= $v_tiket->id_departure_city ?>-<?= $v_tiket->id_departure_city_arrival ?>,<?= $v_tiket->id_homecoming_city ?>-<?= $v_tiket->id_homecoming_city_arrival ?>
                                    </div>
                                    <div class="col-4">
                                        <strong><h5 style="color:orange">Rp <?= number_format($v_tiket->price_ticket,2,',','.') ?></h5></strong>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
                </div>
            </div>
        </section>

        <section class="sec2 left-right-sec" data-scene>

            <div class="container">
            <div class="join" id="join">
                <h2><strong>Bagaimana Caranya Bergabung?</strong></h2>
                    <div class="timeline">
                        <div class="container_travel left-container">
                            <img src="{{ asset('assets/images/login_1.png') }}">
                            <div class="text-box">
                                <h4><strong>1. Daftarkan Data Travel Kamu</strong></h4>
                                <p>Tambahkan detail tentang Travel anda, agar jamaah lebih mengenal Travel anda dengan baik.</p>
                                <span class="left-container-arrow"></span>
                            </div>
                        </div>
    
                        <div class="container_travel right-container">
                            <img src="{{ asset('assets/images/login_2.png') }}">
                            <div class="text-box">
                                <h4><strong>2. Kami Akan Menghubungi Kamu Untuk Verifikasi</strong></h4>
                                <p>Jika registrasi anda sudah selesai, kami akan menguhubungi anda untuk penjelasan lebih lanjut.</p>
                                <span class="right-container-arrow"></span>
                            </div>
                        </div>
    
                        <div class="container_travel left-container">
                            <img src="{{ asset('assets/images/login_3.png') }}">
                            <div class="text-box">
                                <h4><strong>3. Dashboard Verified</strong></h4>
                                <p>Dashboard sangat mudah digunakan dan lebih efisien sehingga dapat meningkatkan penjualan travel Anda.</p>
                                <span class="left-container-arrow"></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
        </section>

        <footer data-scene>
            <div class="container">
                <div class="footer-inner" data-aos="zoom-out-up">
                    <div class="col"><img style="width: 200px;" src="{{ asset('assets/img/'.$bg->logo) }}" alt="">
                </div>
                    <div class="col">
                        <ul>
                        <li><a href="#">About as</a></li>
                        <li><a href="#">Information Ticket</a></li>
                        <li><a href="#">Join Now</a></li>
                        </ul>
                    </div>
                    <div class="col">
                        <ul>
                            <li><a href="#">Tentang Kami</a></li>
                            <li><a href="#">Cara Pembayaran</a></li>
                            <li><a href="#">Blog</a></li>
                            <li><a href="#">FAQ</a></li>
                            <li><a href="#">Syarat dan Ketentuan</a></li>
                            <li><a href="#">Kebijakan Privasi</a></li>
                            <li><a href="#">Site Map</a></li>
                        </ul>
                    </div>
                    <div class="col">
                        <ul>
                            <?php foreach($social_media as $v_sosmed){ ?>
                                <li>
                                    <a href="<?= $v_sosmed->link ?>">
                                        <?= $v_sosmed->icon ?> <?= $v_sosmed->name ?>
                                    </a>
                                </li>
                            <?php } ?>
                        </ul>
                    </div>
                </div>
            </div>
        </footer>

        <div class="copyright" data-scene>
            <div class="container" data-aos="zoom-out-up" data-aos-offset="0">
                <p>&copy; <?= date("Y") ?> umroh.com</p>
            </div>
        </div>

    </main>

    <div id="popup">
            <div class="row">
                <div class="col">
                    <img style="width:320px" src="{{ asset('assets/css_agen/images/signin-image.png')}}" alt="">
                </div>
                <div class="col">
                    <center>
                        <h5>Assalamualaikum,</h5>
                        <p>Masukkan Data Diri Anda</p>
                    </center>
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
                            <h5 for="your_name"><i class="zmdi zmdi-email"></i>Masukkan Email Anda</h5>
                            <input style="width:338px" type="email" name="email" class="form-control" id="email" placeholder="Masukkan Email Anda"/>
                        </div><br>
                        <div class="form-group">
                            <h5 for="your_pass"><i class="zmdi zmdi-lock"></i>Masukkan Password Anda</h5>
                            <input style="width:338px" type="password" class="form-control" name="password" id="password" placeholder="Masukkan Password Anda"/>
                        </div><br>
                        <div class="form-group form-button" style="text-align:right">
                            <!-- <a href="#" onclick="toggle()">Close</a> -->
                            <button type="button" class="btn btn-danger" onclick="toggle()">Tutup</button>
                            <input type="submit" name="signin" id="signin" class="btn btn-primary" value="Masuk"/>
                        </div><br>
                    </form>
                </div>
            </div>
        </div>

        <!-- <div class="loading-page">
            <img id="svg" src="{{ asset('assets/img/'.$bg->logo) }}" alt="">
        </div> -->

    <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4="
    crossorigin="anonymous"></script>
    <script src="https://unpkg.com/rolly.js@0.2.1/dist/rolly.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/gsap.min.js" integrity="sha512-7eHRwcbYkK4d9g/6tD/mhkf++eoTHwpNM9woBxtPUBWm67zeAfFC+HrdoE2GanKeocly/VxeLvIqwvCdk7qScg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="{{ asset('/assets/js/script.js') }}"></script>

    <script>
        const r = rolly({
        view: document.querySelector('.app'),
        native: true,
        // other options
        });
        r.init();

        AOS.init({
            duration: 1500
        });
    </script>

    <script type="text/javascript">
        function toggle(){
            var blur = document.getElementById('blur');
            blur.classList.toggle('active')
            var popup = document.getElementById('popup');
            popup.classList.toggle('active')
        }
    </script>
</body>

</html>