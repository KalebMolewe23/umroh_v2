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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css">
    <script type="text/javascript"
    src="https://app.sandbox.midtrans.com/snap/snap.js"
    data-client-key="{{ config('midtrans.client_key') }}"></script>

    <!-- blog css -->
    <link rel="stylesheet" href="{{ asset('assets/blog/fonts/icomoon/style.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/blog/fonts/flaticon/font/flaticon.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/blog/css/tiny-slider.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/blog/css/aos.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/blog/css/glightbox.min.css') }}" />
    <!-- <link rel="stylesheet" href="{{ asset('assets/blog/css/style.css') }}" /> -->

    <link rel="stylesheet" href="{{ asset('assets/blog/css/flatpickr.min.css') }}" />
</head>

<style>

    .micro-slider {
        background-color: <?= $bg->bg1; ?>;
        height: 320px;
        position: relative;
        width: 100%;
        margin-top : -30px
    }

    .micro-slider.fullwidth {
        height: 480px;
        margin: 64px 0;
    }

    .micro-slider.fullwidth .slider-item {
        height: 480px;
        line-height: 480px;
        width: 100%
    }

    .wrapper, .wrapper_content{
        background-color: <?= $bg->bg2; ?>
    }
    .swiper {
        width: 100%;
        height: 380px;
    }

    .bg-blue {
        border: none;
        background-color: <?= $bg->bg1; ?> !important;
    }

    .divider {
        background-color: #f6f6f6;
        height: 15px;
        margin: 0 -15px 15px -15px;
    }

    .mini {
        color: #57606f;
        line-height: 1;
        font-size: 13px
    }

    .btn-active {
        background-color: <?= $bg->bg1; ?>;
        color: white;
    }

    .head-title {
        color: <?= $bg->bg1; ?>;
    }

    .head-border {
        border-radius: 10px;
        width: 40px;
        background-color: <?= $bg->bg1; ?>;
        height: 3px;
        margin-bottom: 15px !important;
    }

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

    .btn-bordered{
        background-color: <?= $bg->bg1; ?> !important;
        color:white;
    }

    #preloader{
        background: white;
        height: 100vh;
        width: 100%;
        position: fixed;
        z-index:9999;
    }

    .button_search_data{
        border:none;
        background-color: white;
    }

    .center{
        display: flex;
        text-align: center;
        justify-content: center;
        align-items: center;
        min-height: 100vh;
    }

    .ring{
        position: absolute;
        width: 200px;
        height: 200px;
        border-radius: 50%;
        animation: ring 2s linear infinite;
    }

    @keyframes ring{
        0%{
            transform: rotate(0deg);
            box-shadow: 1px 5px 2px #15baef;
        }
        50%{
            transform: rotate(180deg);
            box-shadow: 1px 5px 2px #18b201;
        }
        100%{
            transform: rotate(360deg);
            box-shadow: 1px 5px 2px #0456c8;
        }
    }

    .ring:before{
        position: absolute;
        content: '';
        left: 0;
        top: 0;
        height: 100%;
        width: 100%;
        border-radius: 50%;
        box-shadow: 0 0 5px #15baef;
    }

    
</style>

@stack('css')

<body>
<div id="preloader">
    <div class="center">
        <div class="ring"></div>
        <span><img style="width: 300px;" src="{{ asset('assets/img/'.$bg->logo) }}" alt=""></span>
    </div>
</div>
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
                <span class="navbar-text" style="margin-right:20px">
                    <i class="fas fa-kaaba"></i>
                    <a style="text-decoration: none;padding-right:20px;" class="nav-item" href="{{ url('/all_product') }}">Paket Umrah</a>
                    <i class="far fa-newspaper"></i>
                    <a style="text-decoration: none;padding-right:20px;" class="nav-item" href="{{ url('/blog') }}#">Blog</a>
                    <i class="fas fa-th-large"></i>
                    <a style="text-decoration: none;" class="nav-item" href="#">Lainnya</a>
                </span>
                <div style="border-left: 1px solid #e1e1e1;width: 20px;height: 30px;"></div>
                <span class="navbar-text">
                    @if (!empty(Auth::user()->name))
                        <a style="text-decoration: none;color:white" href="{{ url('/user_profile') }}"><button class="btn btn-sm btn-info text-light"><i class="fa fa-user"></i> Profil</button></a>
                        @else
                        <button class="btn btn-sm btn-light"><a style="text-decoration: none;" href="{{ url('/auth_user/login') }}">Masuk</a></button>
                        <button class="btn btn-sm bg-blue text-white"><a style="text-decoration: none;" href="{{ url('/auth_user/register') }}">Daftar</a></button>
                    @endif
                </span>
            </div>
        </div>
    </nav>

    @yield('content')
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
                                        <div class="data_whatsapp"
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
                                        <div class="data_email"
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
</body>

<script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4="
    crossorigin="anonymous"></script>

<script src="{{ asset('assets/js/bootstrap.bundle.js') }}"></script>

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>

<script>

    var loader = document.getElementById("preloader");

    window.addEventListener("load", function(){
        loader.style.display = "none";
    })

     $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    $('#provinsi').on('change', function() {
            var province_id = this.value;
            console.log(province_id);
            $('#kota').html('');
            $.ajax({
                url: '{{ route('auth_user/getRegencies') }}?province_id='+province_id,
                type: 'get',
                success: function (res){
                    $('#kota').html('<option value="">Pilih Daerah / Kota / Kabupaten</option>');
                    $.each(res, function (key, value) {
                        $('#kota').append('<option value="' + value.id + '"> ' + value.name + '</option>');
                    });
                }
            });
        });

    <?php if (session()->has('swal_icon')) {?>
        Swal.fire({
            icon: "<?= session()->get('swal_icon') ?>",
            title: "<?= session()->get('swal_title') ?>",
            text: "<?= session()->get('swal_text') ?>",
        });
    <?php } ?>

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

@stack('js')

</html>
