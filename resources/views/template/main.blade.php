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
    <script type="text/javascript"
    src="https://app.sandbox.midtrans.com/snap/snap.js"
    data-client-key="{{ config('midtrans.client_key') }}"></script>
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

    .boxContainer{
        margin:auto;
        margin-top:5%;
        position:relative;
        width: 250px;
        height: 42px;
        border: 2px solid <?= $bg->bg1; ?>;
        padding: 0px 10px;
        border-radius: 10px;
    }

    .elementsContainer{
        width: 100%;
        height: 100%;
        vertical-align: middle;
    }

    .search{
        border: none;
        height: 100%;
        width: 100%;
        padding: 0px 5px;
        border-radius: 50px;
        font-size: 18px;
        font-family: "Nunito";
        color: #4244242;
        font-weight: 500;
    }

    .search:focus{
        outline:none;
    }

    .bx-search-alt-2{
        font-size:26;
        color: <?= $bg->bg1; ?>
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

    .button_search_data{
        border:none;
        background-color: white;
    }
</style>

@stack('css')

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
                <span class="navbar-text" style="margin-right:20px">
                    <i class="fas fa-kaaba"></i>
                    <a style="text-decoration: none;padding-right:20px;" class="nav-item" href="http://127.0.0.1:8000/all_product">Paket Umrah</a>
                    <i class="far fa-newspaper"></i>
                    <a style="text-decoration: none;padding-right:20px;" class="nav-item" href="#">Blog</a>
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
</body>

<script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4="
    crossorigin="anonymous"></script>

<script src="{{ asset('assets/js/bootstrap.bundle.js') }}"></script>

<script>
     $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
</script>

@stack('js')

</html>
