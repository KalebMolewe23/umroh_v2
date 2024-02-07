<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel</title>
    <link rel="stylesheet" href="{!! asset('assets/home/style.css') !!}">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@3.5.0/fonts/remixicon.css" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@600&display=swap" rel="stylesheet">
    @vite('../resources/css/app.css')
    @vite('../resources/js/app.js')
    @inertiaHead
</head>
<body>
    @include('template.header')
    @inertia
    @include('template.footer')

    <script>

        function pesan_paket() {
            document.getElementById('data_pesan_paket').style.display = 'block';
            document.getElementById('informasi_paket').style.display = 'none';
        }

        let menu = document.querySelector('#menu-icon');
        let navbar = document.querySelector('.navbar');

        menu.onclick = () => {
            menu.classList.toggle('bx-x');
            navbar.classList.toggle('open')
        }

        document.addEventListener('DOMContentLoaded', function() {
            const processing = document.querySelector('.processing-bar');
    
            setTimeout(() => {
                if (processing !== null) {
                    processing.style.opacity = 1;
                    processing.style.width = processing.getAttribute('data-bar') + '%';
                }
            }, 500)
        });

        function tambah() {
            let harga = document.getElementById('harga');
            harga.value = parseInt(harga.value) * 2;
        }

        function kurang() {
            let harga = document.getElementById('harga');
            if (parseInt(harga.value) > 0) {
                harga.value = parseInt(harga.value) / 2;
            }
        }

    </script>
</body>
</html>