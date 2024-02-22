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
        }
        
        .clock span::after{
            font-size: 16px;
            position: absolute;
            bottom: -5px;
            left: 50%;
            transform: translateX(-50%);
        }

        #hrs::after{
            content: 'Jam';
        }

        #min::after{
            content: 'Menit';
        }

        #sec::after{
            content: 'Detik';
        }
    </style>

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
                            <th></th>
                            <th>Imsyak</th>
                            <th>Subuh</th>
                            <th>Dzuhur</th>
                            <th>Ashar</th>
                            <th>Maghrib</th>
                            <th>Isya</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Jakarta</td>
                            <td>04.23(WIB)</td>
                            <td>04.33(WIB)</td>
                            <td>12.06(WIB)</td>
                            <td>15.26(WIB)</td>
                            <td>18.17(WIB)</td>
                            <td>19.30(WIB)</td>
                        </tr>
                        <tr>
                            <td>Jawa Timur</td>
                            <td>04.17(WIB)</td>
                            <td>05.36(WIB)</td>
                            <td>11.45(WIB)</td>
                            <td>14.51(WIB)</td>
                            <td>17.53(WIB)</td>
                            <td>19.04(WIB)</td>
                        </tr>
                        <tr>
                            <td>Jawa Barat</td>
                            <td>04.35(WIB)</td>
                            <td>05.54(WIB)</td>
                            <td>12.03(WIB)</td>
                            <td>15.10(WIB)</td>
                            <td>18.11(WIB)</td>
                            <td>19.22(WIB)</td>
                    </tr>
                    <tr>
                        <td>Jawa Tengah</td>
                        <td>04.25(WIB)</td>
                        <td>05.44(WIB)</td>
                        <td>11.53(WIB)</td>
                        <td>15.00(WIB)</td>
                        <td>18.01(WIB)</td>
                        <td>19.12(WIB)</td>
                    </tr>
                    <tr>
                        <td>DI Yogyakarta</td>
                        <td>04.24(WIB)</td>
                        <td>05.43(WIB)</td>
                        <td>11.52(WIB)</td>
                        <td>14.58(WIB)</td>
                        <td>18.01(WIB)</td>
                        <td>19.12(WIB)</td>
                    </tr>
                </tbody>
            </table>
        </div><br>
        <div data-aos="zoom-in-down">
            <h4><strong>Daftar Surat Al Quran dan Terjemahan</strong></h4><br>
            <div class="row">
                <div class="col">
                    <h5>1. Al Fatihah</h5>
                    <p>Pembukaan</p>
                </div>
                <div class="col">
                    <h5>سُورَةُ ٱلْفَاتِحَةِ</h5>
                    <p>7 Ayat</p>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <h5>2. Al Baqarah</h5>
                    <p>Sapi Betina</p>
                </div>
                <div class="col">
                    <h5>سُورَةُ البَقَرَةِ</h5>
                    <p>286 Ayat</p>
                </div>
            </div>
        </div>
        </center>
    </div>
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
@endpush