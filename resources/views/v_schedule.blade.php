<?php
    use Carbon\Carbon;
?>

@extends('template.main')

@section('content')

    <style>
        .clock{
            width: 30%;
            height: 40%;
            background: #15baef;
            border-radius: 10px;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .clock span{
            font-size: 40px;
            width: 60px;
            display: inline-block;
            text-align: center;
            position: relative;
            text-align: center;
        }
        
        .clock span::after{
            font-size: 16px;
            position: absolute;
            bottom: 5px;
            left: 50%;
            transform: translateX(-50%);
        }

        main#blur.active{
            filter: blur(20px);
            pointer-events: none;
            user-select: none;
        }

        #popup_al_fatihah{
            position: fixed;
            top: 40%;
            left: 50%;
            transform: translate(-50%, -50%);
            width: 800px;
            padding: 50px;
            box-shadow: 0 5px 30px rgba(0,0,0,.30);
            background: #fff;
            opacity: 0;
            transition: 0.5s;
        }

        #popup_al_fatihah.active{
            top: 50%;
            visibility: visible;
            opacity: 1;
            transition: 0.5s;
        }

        /* #hrs::after{
            content: 'Jam';
        }

        #min::after{
            content: 'Menit';
        }

        #sec::after{
            content: 'Detik';
        } */
    </style>

    <main id="blur">
        <div class="container" style="margin-top: 30px;z-index: 999; position:relative">
            <center>
                <div data-aos="zoom-out-up">
                    <h4><strong>Jadwal Sholat</strong></h4>
                    <h4><strong>{{ Carbon::now()->locale('id_ID')->isoFormat('dddd, D MMMM YYYY') }}</strong></h4>
                    <div class="clock">
                        <span id="hrs">00</span>
                        <span>:</span>
                        <span id="min">00</span>
                        <span>:</span>
                        <span id="sec">00</span>
                    </div><br>
                    <p>"Mari ingatkan sodara kita untuk sholat"</p>
                    
                    <table class="table">
                        <thead class="thead-dark">
                            <tr>
                                <th>Provinsi</th>
                                <th>Tanggal</th>
                                <th>Imsyak</th>
                                <th>Subuh</th>
                                <th>Dzuhur</th>
                                <th>Ashar</th>
                                <th>Maghrib</th>
                                <th>Isya</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($prayerTimes as $day)
                                <tr>
                                    <td>DKI Jakarta</td>
                                    <td>{{ $day['date']['readable'] }}</td>
                                    <td>{{ $day['timings']['Fajr'] }}</td>
                                    <td>{{ $day['timings']['Sunrise'] }}</td>
                                    <td>{{ $day['timings']['Dhuhr'] }}</td>
                                    <td>{{ $day['timings']['Asr'] }}</td>
                                    <td>{{ $day['timings']['Maghrib'] }}</td>
                                    <td>{{ $day['timings']['Isha'] }}</td>
                                </tr>
                            @endforeach       
                    </tbody>
                </table>
            </div><br>
            </center>
        </div>
    </main>
@endsection

@push('js')
    <script>
        let hrs = document.getElementById("hrs");
        let min = document.getElementById("min");
        let sec = document.getElementById("sec");

        setInterval(()=>{
            let currentTime = new Date();

            hrs.innerHTML = currentTime.getHours();
            min.innerHTML = currentTime.getMinutes();
            sec.innerHTML = currentTime.getSeconds();
        },1000)

    </script>

    <script type="text/javascript">
        function toggle(){
            var blur = document.getElementById('blur');
            blur.classList.toggle('active')
            var popup_al_fatihah = document.getElementById('popup_al_fatihah');
            popup_al_fatihah.classList.toggle('active')
        }
    </script>
@endpush