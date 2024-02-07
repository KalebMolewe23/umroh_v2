<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('/assets/css_agen/css/style.css') }}">

    <!-- Font Icon -->
    <link rel="stylesheet" href="{{ asset('/assets/css_agen/fonts/material-icon/css/material-design-iconic-font.min.css') }}">
    <link rel="icon" type="image/x-icon" href="{{ asset('assets/img/logo.png') }}">

    <title>Registrasi Agen</title>
</head>
<body>
<div class="main">

<!-- Sign up form -->
<section class="signup">
    <div class="container">
        <div class="signup-content">
            <div class="signup-form">
                <h2 class="form-title">Registrasi Agen</h2>
                <form action="{{ route('register.simpan') }}" method="POST" class="register-form" id="register-form">
                    @csrf
                    <input type="hidden" name="id">
                    <div class="form-group">
                        <label for="name"><i class="zmdi zmdi-account material-icons-name"></i></label>
                        <input type="text" class="@error('name')is-invalid @enderror" name="name" id="name" placeholder="Your Name"/>
                        @error('name')
                            <span class="invalid-feedback">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="email"><i class="zmdi zmdi-email"></i></label>
                        <input type="email" class="@error('email')is-invalid @enderror" name="email" id="email" placeholder="Your Email"/>
                        @error('email')
                            <span class="invalid-feedback">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="pass"><i class="zmdi zmdi-lock"></i></label>
                        <input type="password" class="@error('password')is-invalid @enderror" name="password" id="password" placeholder="Password"/>
                        @error('password')
                            <span class="invalid-feedback">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="re-pass"><i class="zmdi zmdi-lock-outline"></i></label>
                        <input type="password" name="password_confirmation" id="password_confirmation" placeholder="Repeat your password"/>
                    </div>
                    <div class="form-group form-button">
                        <input type="submit" name="signup" id="signup" class="form-submit" value="Registrasi"/>
                    </div>
                </form>
            </div>
            <div class="signup-image">
                <figure><img src="{{ asset('assets/css_agen/images/signup-image.png')}}" alt="sing up image"></figure>
                <a href="/login_agen" class="signup-image-link">Sudah punya akun agen?</a>
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