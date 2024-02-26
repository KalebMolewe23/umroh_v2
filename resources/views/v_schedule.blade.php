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
                <a style="text-decoration: none;" href="#" onclick="toggle()">
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
                </a>
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
    </main>
    <div id="popup_al_fatihah">
        <div class="row">
            <div class="col">
                1.   Dengan menyebut nama Allah Yang Maha Pemurah lagi Maha Penyayang
            </div>
            <div class="col">
                ﻿بِسْمِ ٱللَّهِ ٱلرَّحْمَٰنِ ٱلرَّحِيمِ  (1)
            </div>
        </div><br>
        <div class="row">
            <div class="col">
                2.   Segala puji bagi Allah, Tuhan semesta alam.
            </div>
            <div class="col">
                ٱلْحَمْدُ لِلَّهِ رَبِّ ٱلْعَٰلَمِينَ   (2)
            </div>
        </div><br>
        <div class="row">
            <div class="col">
                3.   Maha Pemurah lagi Maha Penyayang.
            </div>
            <div class="col">
                ٱلرَّحْمَٰنِ ٱلرَّحِيمِ   (3)
            </div>
        </div><br>
        <div class="row">
            <div class="col">
                4.   Yang menguasai di Hari Pembalasan.
            </div>
            <div class="col">
                مَٰلِكِ يَوْمِ ٱلدِّينِ   (4)
            </div>
        </div><br>
        <div class="row">
            <div class="col">
                5.   Hanya Engkaulah yang kami sembah, dan hanya kepada Engkaulah kami meminta pertolongan.
            </div>
            <div class="col">
                إِيَّاكَ نَعْبُدُ وَإِيَّاكَ نَسْتَعِينُ   (5)
            </div>
        </div><br>
        <div class="row">
            <div class="col">
                6.   Tunjukilah kami jalan yang lurus,
            </div>
            <div class="col">
                ٱهْدِنَا ٱلصِّرَٰطَ ٱلْمُسْتَقِيمَ   (6)
            </div>
        </div><br>
        <div class="row">
            <div class="col">
                7.   (yaitu) Jalan orang-orang yang telah Engkau beri nikmat kepada mereka; bukan (jalan) mereka yang dimurkai dan bukan (pula jalan) mereka yang sesat.
            </div>
            <div class="col">
                صِرَٰطَ ٱلَّذِينَ أَنْعَمْتَ عَلَيْهِمْ غَيْرِ ٱلْمَغْضُوبِ عَلَيْهِمْ وَلَا ٱلضَّآلِّينَ   (7)
            </div>
        </div><br>
        <h5>Surat Al Fatihah, Surat ke-1 dalam Al-Quran</h5><br>
        <p>Membaca Al-Quran dan mencari surat Al Fatihah kini akan menjadi mudah, karena umroh.com kini memilki fitur Al-Quran Indonesia yang membantu Anda untuk menemukan surat Al Fatihah untuk Anda baca maupun Anda ingin mencari tau terjemahan dari surat ke-1 akan terasa mudah tidak perlu lagi pusing dan bingung jika Anda lupa membawa Al-Quran, karena hanya dengan mendowonload aplikasi umroh.com atau membuka website umroh.com Anda bisa menikmati fitur Al-Quran Indonesia dan mencari surat Al Fatihah lengkap dengan terjemahannya serta informasi jumlah ayat.</p><br>
        <h5>Bacaan Al-Quran Surat Al Fatihah</h5><br>
        <p>Saat Anda sedang berada dalam suatu kajian pasti biasanya Anda membawa Al-Quran untuk dibaca dan membaca terjemahannya, tapi jika Anda tidak ingin repot tentunya di jaman serba teknologi ini Anda akan memanfaatkan smartphone Anda untuk mencari Al-Quran dan terjemahan ataupun mendownload aplikasi Al-Quran dan terjemahannya. Biasanya Anda akan mencari tahu surat Al Fatihah yang sedang dibahas dalam kajian. Umroh.com memberikan kemudahan untuk Anda dengan menghadirkan fitur Al-Quran Indonesia, umroh.com sendiri merupakan online marketplace yang menyediakan berbagai paket umroh lengkap dari travel umroh terpercaya, selain menyediakan paket umroh, umroh.com juga menyediakan fitur untuk menunjang kebutuhan beribadah umat muslim, dari jadwal sholat, arah kiblat dan tentunya Al-Quran Indonesia, yang akan memudahkan Anda untuk mencari surat Al Fatihah atau surat ke-1 dalam Al-Quran.</p><br>
        <h5>Tampilan Jelas Memudahkan Membaca Al-Quran Surat Al Fatihah</h5><br>
        <p>Ketika Anda membuka fitur Al-Quran dan terjemahan di aplikasi atau website umroh.com, Anda tidak akan bingung karena umroh.com memberikan tampilan surat dengan detail terjemahan dan informasi berapa ayat yang terkandung dalam setiap surat. Jika Anda ingin mencari surat Al Fatihah Anda bisa langsung mencari dengan jelas, tampilan surat Al Fatihah yang langsung terlihat yang akan memudahkan Anda menemukan surat ke-1 ini.</p><br>
        <p>Dalam nama surat Al Fatihah fitur Al-Quran umroh.com langsung memberi tahu arti dari surat ke-1 ini sehingga informasi yang Anda dapatkan langsung bisa Anda lihat. Tulisan arab dalam surat ke-1 ini juga sangat jelas tanda baca yang ada pun sangat jelas, jadi memudahkan Anda untuk membaca surat dengan sangat jelas.</p><br>
        <p>Surat Al Fatihah merupakan surat ke-1, setiap membaca surat dalam Al-Quran kita akan mendapatkan pahala diantaranya, akan mendapatkan ketenangan, serta dimuliakan Allah SWT, Allah akan mengangkat derajat kita, setiap satu huruf dalam Al-Quran yang kita baca akan mendapatkan 10 kebaikan, kita akan bersama malaikat, selalu dingat langit, kita akan mendapatkan cahaya saat hari kimat tiba, akan mendapatkan syafaat, mendapatkan tempat sesuai akhir Al-Quran yang kita baca, kita akan dijadikan hamba pilihan Allah, dan dengan membaca surat Al Fatihah kita dapat memuliakan orangtua. Didalam setiap surat dalam Al-Quran terdapat kandungan tauhid rububiyah,uluhiyah, dan tauhid asma’ shifat. Jangan tunda membaca surat Al Fatihah sempurnakan ibadah Anda, dan dapatkan pelajaran dalam surat ke-1 ini.</p><br>
        <p>Umroh.com akan selalu membantu Anda untuk memudahkan dalam melaksanakan ibadah, mencari surat Al Fatihah menjadi lebih mudah, dan Anda tidak lagi repot membuka aplikasi lain jika ingin mengecek jadwal sholat, ataupun arah kiblat karena hanya di umroh.com Anda sudah bisa menikmati segala kenyamanan ibadah Anda.</p><br>
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

    <script type="text/javascript">
        function toggle(){
            var blur = document.getElementById('blur');
            blur.classList.toggle('active')
            var popup_al_fatihah = document.getElementById('popup_al_fatihah');
            popup_al_fatihah.classList.toggle('active')
        }
    </script>
@endpush