<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('/assets/css_agen/css/style.css') }}">

    <!-- Font Icon -->
    <link rel="stylesheet" href="{{ asset('/assets/css_agen/fonts/material-icon/css/material-design-iconic-font.min.css') }}">
    <link rel="icon" type="image/x-icon" href="{{ asset('assets/img/logo.png') }}">

    <title>Login</title>
</head>
<body>
<div class="main">

<!-- Sing in  Form -->
<section class="sign-in">
    <div class="container">
        <div class="signin-content">
            <div class="signin-image">
                <figure><img src="{{ asset('assets/css_agen/images/signin-image.png')}}" alt="sing up image"></figure>
                <a href="/" class="signup-image-link">Ingin berangkat umroh?</a>
                <!-- <a href="/regis_agen" class="signup-image-link">Belum punya akun agen?</a> -->
            </div>

            <div class="signin-form">
                <h2 class="form-title">Login</h2>
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
                        <label for="your_name"><i class="zmdi zmdi-email"></i></i></label>
                        <input type="email" name="email" id="email" placeholder="Masukkan Email Anda"/>
                    </div>
                    <div class="form-group">
                        <label for="your_pass"><i class="zmdi zmdi-lock"></i></label>
                        <input type="password" name="password" id="password" placeholder="Masukkan Password Anda"/>
                    </div>
                    <div class="form-group form-button">
                        <input type="submit" name="signin" id="signin" class="form-submit" value="Masuk"/>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>

</div>

<!-- JS -->
<script src="{{ asset('assets/css_agen/vendor/jquery/jquery.min.js') }}"></script>
<script src="{{ asset('assets/css_agen/js/main.js') }}"></script>

</body>
</html>