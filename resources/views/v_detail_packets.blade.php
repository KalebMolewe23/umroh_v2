<?php $bg = DB::table('cms')->first(); ?>

@php
    use App\Models\Hotel;
    use App\Models\List_hotel;
    use App\Models\Maskapai;
    use App\Models\Itinery;
@endphp

@extends('template.main')

@push('css')
    <style>
        ul.timeline {
            list-style-type: none;
            position: relative;
        }
        ul.timeline:before {
            content: ' ';
            border: 1.6px dashed #d4d9df;
            display: inline-block;
            position: absolute;
            left: 29px;
            width: 2px;
            height: 100%;
            z-index: 400;
        }
        ul.timeline > li {
            margin: 20px 0;
            padding-left: 20px;
        }
        ul.timeline > li:before {
            content: ' ';
            background: white;
            display: inline-block;
            position: absolute;
            border-radius: 50%;
            border: 3px solid #22c0e8;
            left: 20px;
            width: 20px;
            height: 20px;
            z-index: 400;
        }
        .label_price{
            position: relative;
            background: #fff;
            height: 35px;
            width: 382px;
            border-radius: 10px;
            display: block;
            text-align: center;
            line-height: 30px;
            font-size: 15px;
            font-weight: 500;
            /* text-transform: uppercase; */
            color: black;
            cursor: pointer;
            border: 2px solid <?= $bg->bg1; ?>;
            transition : all 0.3s ease;
        }
        #check{
            display: none;
        }
        #check:checked ~ label:before{
            opacity: 1;
            pointer-events: auto;
        }
        .icons{
            position: absolute;
            left: -110px;
            top: 395px;
            transform: translateX(-50%);
            background: #fff;
            height: 35px;
            width: 200px;
            display: flex;
            justify-content: space-evenly;
            align-items: center;
            border-radius: 35px;
            opacity: 0;
            pointer-events: none;
            box-shadow: 0 0 4px <?= $bg->bg1; ?>;
            transition: all 0.3s ease;
        }
        .icons::before{
            position: absolute;
            content: '';
            height: 18px;
            width: 18px;
            background: white;
            left: 184px;
            transform: rotate(45deg);
        }
        #check:checked ~ .icons{
            opacity: 1;
            pointer-events: auto;
            left: -110px;
            top: 395px;
        }
        .icons a{
            /* font-size: 15px; */
            color: #0984e3;
            transition: all 0.3s ease;
        }
        .icons a:hover{
            transform: translateY(-2px);
        }
        .icons a:nth-child(1):hover{
            color: #426782;
        }
        .icons a:nth-child(2):hover{
            color: #1da1f2;
        }
        .icons a:nth-child(3):hover{
            color: green;
        }
        .icons a:nth-child(4):hover{
            color: red;
        }
    </style>
@endpush

@section('content')
    <div class="container mt-4">
        <div class="row">
            <div class="col-8-packet" data-aos="zoom-out-right">
                <!-- Hero -->
                <div class="card">
                    <div class="card-body">
                        <h3 class="fw-bold name-of-packet">{{ $data->photo->packets->name_packet }}</h3>
                        <div id="carouselExampleControls" class="carousel slide"
                            style="background-color: #000">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img style="height: 460px"
                                        src="{{ asset('assets/image_travel/' . $data->photo->image) }}" alt="">
                                    <style>
                                        @media only screen and (max-width: 1400px) {
                                            img{
                                                width: 100%;
                                            }
                                        }
                                    </style>
                                </div>
                                @if ($data->photo->video)
                                    <div class="carousel-item">
                                        <video style="height: 460px" controls
                                            src="{{ asset('assets/video_travel/' . $data->photo->video) }}"></video>
                                        <style>
                                            @media only screen and (max-width: 1400px) {
                                                video{
                                                    width: 100%;
                                                }
                                            }
                                        </style>
                                    </div>
                                @endif
                            </div>
                            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls"
                                data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Previous</span>
                            </button>
                            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls"
                                data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Next</span>
                            </button>
                        </div>
                        <div class="row mt-3">
                            <div class="col-4">
                                <center>
                                    <i class="fas fa-calendar-alt"></i> Waktu Keberangkatan <br>
                                    <span class="fw-bold">{{ $data->photo->packets->departure_date }}</span>
                                </center>
                            </div>
                            <div class="col-4">
                                <center>
                                    <i class="fas fa-map-marker-alt"></i> Berangkat Dari <br>
                                    <span class="fw-bold">{{ $data->photo->packets->departure_city }}</span>
                                </center>
                            </div>
                            <div class="col-4">
                                <center>
                                    <i class="fas fa-clock"></i> Durasi Perjalanan <br>
                                    <span class="fw-bold">{{ str_replace('day=', '', $day) }} Hari</span>
                                </center>
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-4">
                                <center>
                                    <i class="fas fa-plane-departure"></i> Pesawat <br>
                                    <span class="fw-bold">{{ $data->photo->packets->maskapai_name }}</span>
                                </center>
                            </div>
                            <div class="col-4">
                                <center>
                                    <i class="fas fa-building"></i> Kelas Hotel <br>
                                    <span class="fw-bold"><i style="color: #fd9644" class="fas fa-star"></i>
                                        {{ $data->photo->hotels->type_hotel_1 }}{{ $data->photo->hotels->type_hotel_2 != '' ? ' / ' . $data->photo->hotels->type_hotel_2 : '' }}</span>
                                </center>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Travel Umroh -->
                <div class="card mt-3">
                    <div class="card-body">
                        <h5 class="fw-bold head-title">Travel Umroh</h5>
                        <div class="head-border"></div>
                        <div class="row">
                            <div class="col-2">
                                <img src="{{ asset('assets/image_travel/'.$data->photo->packets->informasiTravels->image) }}" alt="" style="width:100px;border-radius:15px;box-shadow:0px 0px 13px 0px #e1e1e1">
                            </div>
                            <div class="col">
                                <h5>{{ $data->photo->packets->informasiTravels->travel_name }}</h5>
                                <span class="text-secondary">Izin Umroh : {{ $data->photo->packets->informasiTravels->number_umroh }}</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Penilaian Travel Umroh -->
                {{-- <div class="card mt-3">
                    <div class="card-body">
                        <h5 class="fw-bold head-title">Penilaian Travel</h5>

                    </div>
                </div> --}}

                <!-- Fasilitas -->
                <div class="card mt-3">
                    <div class="card-body">
                        <h5 class="fw-bold head-title">Fasilitas</h5>
                        <div class="head-border"></div>
                        <div class="row">
                            <div class="col">
                                <h5>Termasuk</h5>
                                <ul>
                                    <?php
                                    for ($i = 0; $i < 10; $i++) {
                                        if ($i == 0) {
                                            $facilityName = "in_facilitas";
                                        }else{
                                            $facilityName = "in_facilitas_" . $i;
                                        }
                                        if (!empty($data->photo->hotels->facility->$facilityName)) {
                                            echo "<li>{$data->photo->hotels->facility->$facilityName}</li>";
                                        }
                                    }
                                    ?>
                                </ul>
                            </div>
                            <div class="col">
                                <h5>Tidak Termasuk</h5>
                                <ul>
                                    <?php
                                    for ($i = 0; $i < 10; $i++) {
                                        if ($i == 0) {
                                            $facilityName = "out_facilitas";
                                        }else{
                                            $facilityName = "out_facilitas_" . $i;
                                        }
                                        if (!empty($data->photo->hotels->facility->$facilityName)) {
                                            echo "<li>{$data->photo->hotels->facility->$facilityName}</li>";
                                        }
                                    }
                                    ?>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Hotel -->
                <div class="card mt-3">
                    <div class="card-body">
                        <h5 class="fw-bold head-title">Hotel</h5>
                        <div class="head-border"></div>
                        <span>Mekkah</span><br>
                        @php
                            $hotel = Hotel::where('id_packet', $data->photo->packets->id)->first();
                            $hotel_mekkah = List_hotel::where('id', $hotel->id_hotel_mekah)->first();
                            $hotel_madinah = List_hotel::where('id', $hotel->id_hotel_madinah)->first();
                        @endphp
                        <small style="font-size: 17px" class="fw-bold">{{ $hotel_mekkah->name_hotel }}</small><br>
                        <small class=""><i class="fas fa-map-marker-alt"></i> {{ $hotel_mekkah->address }}</small>
                        <div class="row mt-2">
                            <div class="col-md-3">
                                <img class="img_produk" src="{{ asset('assets/images/'.$hotel_mekkah->img_1) }}" alt="">
                            </div>
                            <div class="col-md-3">
                                <img class="img_produk" src="{{ asset('assets/images/'.$hotel_mekkah->img_2) }}" alt="">
                            </div>
                            <div class="col-md-3">
                                <img class="img_produk" src="{{ asset('assets/images/'.$hotel_mekkah->img_3) }}" alt="">
                            </div>
                            <div class="col-md-3">
                                <img class="img_produk" src="{{ asset('assets/images/'.$hotel_mekkah->img_4) }}" alt="">
                            </div>
                            <style>
                                .img_produk{
                                    border-radius: 10px;
                                    width: 100%;
                                    height: 150px;
                                }
                                @media only screen and (max-width: 1400px) {
                                    .img_produk{
                                        border-radius: 10px;
                                        width: 100%;
                                        height: 150px;
                                        margin-top: 20px;
                                        justify-content: center;
                                        display: flex;
                                    }
                                }
                            </style>
                        </div>
                        <div class="row mt-3">
                            <small style="font-size: 17px" class="fw-bold">Fasilitas Populer</small>
                            <div class="row">
                                <div class="col">
                                    <i class="fas fa-wifi"></i> Free Wifi
                                </div>
                                <div class="col">
                                    <i class="fas fa-user-friends"></i> Ruangan keluarga
                                </div>
                                <div class="col">
                                    <i class="fas fa-wheelchair"></i> Disabilitas
                                </div>
                                <div class="col">
                                    <i class="fas fa-utensils"></i> Tempat makan
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-3">
                                    <i class="fas fa-bus"></i> Shuttle Bandara
                                </div>
                                <div class="col">
                                    <i class="fas fa-hands-helping"></i> Pelayanan kamar
                                </div>
                            </div>
                        </div>
                        <hr>
                        <?php if($hotel->id_hotel_madinah == null) {?>
                            <span>Madinah</span><br>
                            <p>Hotel Tidak Disediakan</p>
                            <div class="row mt-3">
                                <small style="font-size: 17px" class="fw-bold">Fasilitas Populer</small>
                                <div class="row">
                                    <div class="col">
                                        <i class="fas fa-wifi"></i> Free Wifi
                                    </div>
                                    <div class="col">
                                        <i class="fas fa-user-friends"></i> Ruangan keluarga
                                    </div>
                                    <div class="col">
                                        <i class="fas fa-wheelchair"></i> Disabilitas
                                    </div>
                                    <div class="col">
                                        <i class="fas fa-utensils"></i> Tempat makan
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-3">
                                        <i class="fas fa-bus"></i> Shuttle Bandara
                                    </div>
                                    <div class="col">
                                        <i class="fas fa-hands-helping"></i> Pelayanan kamar
                                    </div>
                                </div>
                            </div>
                        <?php }else{ ?>
                            <span>Madinah</span><br>
                            <small style="font-size: 17px" class="fw-bold">{{ $hotel_madinah->name_hotel }}</small><br>
                            <small class=""><i class="fas fa-map-marker-alt"></i> {{ $hotel_madinah->address }}</small>
                            <div class="row mt-2">
                                <div class="col-md-3">
                                    <img style="border-radius:10px;width: 100%;height: 150px;" src="{{ asset('assets/images/'.$hotel_madinah->img_1) }}" alt="">
                                </div>
                                <div class="col-md-3">
                                    <img style="border-radius:10px;width: 100%;height: 150px;" src="{{ asset('assets/images/'.$hotel_madinah->img_2) }}" alt="">
                                </div>
                                <div class="col-md-3">
                                    <img style="border-radius:10px;width: 100%;height: 150px;" src="{{ asset('assets/images/'.$hotel_madinah->img_3) }}" alt="">
                                </div>
                                <div class="col-md-3">
                                    <img style="border-radius:10px;width: 100%;height: 150px;" src="{{ asset('assets/images/'.$hotel_madinah->img_4) }}" alt="">
                                </div>
                            </div>
                            <div class="row mt-3">
                                <small style="font-size: 17px" class="fw-bold">Fasilitas Populer</small>
                                <div class="row">
                                    <div class="col">
                                        <i class="fas fa-wifi"></i> Free Wifi
                                    </div>
                                    <div class="col">
                                        <i class="fas fa-user-friends"></i> Ruangan keluarga
                                    </div>
                                    <div class="col">
                                        <i class="fas fa-wheelchair"></i> Disabilitas
                                    </div>
                                    <div class="col">
                                        <i class="fas fa-utensils"></i> Tempat makan
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-3">
                                        <i class="fas fa-bus"></i> Shuttle Bandara
                                    </div>
                                    <div class="col">
                                        <i class="fas fa-hands-helping"></i> Pelayanan kamar
                                    </div>
                                </div>
                            </div>
                        <?php } ?>
                    </div>
                </div>

                <!-- Maskapai Penerbangan -->
                <div class="card mt-3">
                    <div class="card-body">
                        <h5 class="fw-bold head-title">Maskapai Penerbangan</h5>
                        <div class="head-border"></div>
                        @php
                            $keberangkatan = Maskapai::where('id', $data->photo->packets->tiketGroup->id_maskapai)->first();
                            $pulang = Maskapai::where('id', $data->photo->packets->tiketGroup->id_maskapai_homecoming)->first();
                        @endphp
                        <div class="row mt-3">
                            <div class="col-6">
                                <div class="card">
                                    <div class="card-header">
                                        <h6>Penerbangan 1</h6>
                                    </div>
                                    <div class="card-body">
                                        <img style="width: 70px;margin-right: 20px" src="{{ asset('assets/maskapai_image/'.$keberangkatan->image) }}" alt="">
                                        {{ $keberangkatan->name_maskapai }}
                                    </div>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="card">
                                    <div class="card-header">
                                        <h6>Penerbangan 2</h6>
                                    </div>
                                    <div class="card-body">
                                        <img style="width: 70px;margin-right: 20px" src="{{ asset('assets/maskapai_image/'.$pulang->image) }}" alt="">
                                        {{ $pulang->name_maskapai }}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Rencana Perjalanan -->
                <div class="card mt-3">
                    <div class="card-body">
                        <h5 class="fw-bold head-title">Rencana Perjalanan</h5>
                        <div class="head-border"></div>
                        <div class="container-fluid p-0">
                            <div class="row">
                                <div class="col-md-11 p-0">
                                    <ul class="timeline">
                                        @php
                                            $count = 1;
                                            for ($i = 0; $i < 16; $i++) {
                                                if ($i == 0) {
                                                    $activity_column = "activity";
                                                }else{
                                                    $activity_column = "activity_" . $i;
                                                }
                                                if (!empty($data->$activity_column)) {
                                                    echo "<li>
                                                            <span class='fw-bold'>Hari ".$count++."</span><br>
                                                            {$data->$activity_column}
                                                        </li>";
                                                }
                                            }
                                        @endphp
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Syarat & Ketentuan -->
                <div class="card mt-3">
                    <div class="card-body">
                        <h5 class="fw-bold head-title">Syarat & Ketentuan</h5>
                        <div class="head-border"></div>
                        <ul>
                            @php
                                for ($i = 0; $i < 21; $i++) {
                                    if ($i == 0) {
                                        $in_conditions = "in_condition";
                                    }else{
                                        $in_conditions = "in_condition_" . $i;
                                    }
                                    if (!empty($data->photo->conditions->$in_conditions)) {
                                        echo "<li>
                                                {$data->photo->conditions->$in_conditions}
                                            </li>";
                                    }
                                }
                            @endphp
                        </ul>
                    </div>
                </div>
            </div>

            <form action="" method="POST" class="col" id="form-send" data-aos="zoom-out-left">
                <!-- Init All Price -->
                <input type="hidden" class="price_quad_1" value="{{ $data->photo->hotels->quad_1 }}">
                <input type="hidden" class="price_quad_2" value="{{ $data->photo->hotels->quad_2 }}">
                <input type="hidden" class="price_quad_3" value="{{ $data->photo->hotels->quad_3 }}">

                <input type="hidden" class="price_triple_1" value="{{ $data->photo->hotels->triple_1 }}">
                <input type="hidden" class="price_triple_2" value="{{ $data->photo->hotels->triple_2 }}">
                <input type="hidden" class="price_triple_3" value="{{ $data->photo->hotels->triple_3 }}">

                <input type="hidden" class="price_double_1" value="{{ $data->photo->hotels->double_1 }}">
                <input type="hidden" class="price_double_2" value="{{ $data->photo->hotels->double_2 }}">
                <input type="hidden" class="price_double_3" value="{{ $data->photo->hotels->double_3 }}">

                <input type="hidden" class="price_adult" value="{{ $data->photo->hotels->moneyPackets->price_adult }}">
                <input type="hidden" class="price_child" value="{{ $data->photo->hotels->moneyPackets->price_child }}">
                <input type="hidden" class="price_baby" value="{{ $data->photo->hotels->moneyPackets->price_baby }}">
                <input type="hidden" class="due_date" value="{{ $due_date }}">

                <!-- Send to controller -->
                <input type="hidden" class="total-amount-post">
                <input type="hidden" class="room-type-post">
                <input type="hidden" class="hotel-type-post">
                <input type="hidden" class="departing-from-post">

                <div class="card-transaction">
                    <div class="card-body">
                        <?php 
                            $price_ticket = DB::table('packets')->where('packets.id', $data->photo->packets->id)->join('ticket_groups','ticket_groups.id', '=', 'packets.id_ticket')->first(); 
                            $total_ticket_quad = $data->photo->hotels->quad_1 + $price_ticket->price_ticket;
                            $total_ticket_triple = $data->photo->hotels->triple_1 + $price_ticket->price_ticket;
                            $total_ticket_double = $data->photo->hotels->double_1 + $price_ticket->price_ticket;
                        ?>
                        <h2 class="fw-bolder total-amount">Rp {{ number_format($total_ticket_quad) }}</h2>
                        <div class="text-secondary">
                            <small>Quad - Sekamar Ber-4:Rp <span class="sekamar-quad">{{ number_format($total_ticket_quad) }}</span></small>
                        </div>
                        <div class="text-secondary">
                            <small>Triple - Sekamar Ber-3:Rp <span class="sekamar-triple">{{ number_format($total_ticket_triple) }}</span></small>
                        </div>
                        <div class="text-secondary">
                            <small>Double - Sekamar Ber-2:Rp <span class="sekamar-double">{{ number_format($total_ticket_double) }}</span></small>
                        </div>
                        <div class="col mt-1 mb-1">
                            <div class="progress" style="height: 20px;">
                                <div class="progress-bar bg-blue progress-bar-striped progress-bar-animated"
                                    role="progressbar" aria-valuenow="{{ $presentase_seat }}" aria-valuemin="0" aria-valuemax="100"
                                    style="width: {{ $presentase_seat }}%">
                                    <b>Sisa {{ $available_seat }} Seat</b>
                                </div>
                            </div>
                        </div>
                        <small class="mini">Amankan seat dengan uang muka <b>Rp
                                {{ number_format($data->photo->packets->dp) }}</b>
                            /Jamaah. Transaksi aman, ibadah nyaman. Pembayaran hanya diproses apabila tiket pesawat telah
                            confirm.</small>
                        <hr>

                        <!-- Quantity -->
                        <div class="quantity-area mt-3" style="display: none">
                            <div class="row">
                                <!-- Send Data -->
                                <input type="hidden" name="jamaah_type[]" value="Dewasa">
                                <input type="hidden" name="qty[]" value="">
                                <input type="hidden" name="price[]" value="">
                                <input type="hidden" name="sub_total[]" value="">
                                <div class="col-7">
                                    Jumlah Jamaah Dewasa
                                </div>
                                <div class="col">
                                    <button type="button" data-age-category="adult" type="text"
                                        class="btn btn-light border mx-1 btn-minus">-</button>
                                    <span class="quantity">0</span>
                                    <button type="button" data-age-category="adult" type="text"
                                        class="btn btn-light border mx-1 btn-plus">+</button>
                                </div>
                            </div>
                            <div class="row mt-3">
                                <!-- Send Data -->
                                <input type="hidden" name="jamaah_type[]" value="Anak">
                                <input type="hidden" name="qty[]" value="">
                                <input type="hidden" name="price[]" value="">
                                <input type="hidden" name="sub_total[]" value="">
                                <div class="col-7">
                                    Jumlah Anak <small class="text-secondary">(2-5 Tahun)</small>
                                </div>
                                <div class="col">
                                    <button type="button" data-age-category="child" type="text"
                                        class="btn btn-light border mx-1 btn-minus">-</button>
                                    <span class="quantity">0</span>
                                    <button type="button" data-age-category="child" type="text"
                                        class="btn btn-light border mx-1 btn-plus">+</button>
                                </div>
                            </div>
                            <div class="row mt-3">
                                <!-- Send Data -->
                                <input type="hidden" name="jamaah_type[]" value="Bayi">
                                <input type="hidden" name="qty[]" value="">
                                <input type="hidden" name="price[]" value="">
                                <input type="hidden" name="sub_total[]" value="">
                                <div class="col-7">
                                    Jumlah Bayi <small class="text-secondary">(< 2 Tahun)</small>
                                </div>
                                <div class="col">
                                    <button type="button" data-age-category="baby" type="text"
                                        class="btn btn-light border mx-1 btn-minus">-</button>
                                    <span class="quantity">0</span>
                                    <button type="button" data-age-category="baby" type="text"
                                        class="btn btn-light border mx-1 btn-plus">+</button>
                                </div>
                            </div>
                            <div class="divider mt-3"></div>
                            <h6 class="fw-bold">Tipe Hotel</h6>
                            <div class="row tipe-hotel">
                                @if ($data->photo->hotels->type_hotel_1)
                                    <div class="col">
                                        <div class="d-grid gap-2 mt-4">
                                            <button data-type="{{ $data->photo->hotels->type_hotel_1 }}" type="button" data-tipe="1"
                                                class="btn btn-tipe-hotel btn-active btn-outline-info">Bintang
                                                {{ $data->photo->hotels->type_hotel_1 }}</button>
                                        </div>
                                    </div>
                                @endif
                                @if ($data->photo->hotels->type_hotel_2)
                                    <div class="col">
                                        <div class="d-grid gap-2 mt-4">
                                            <button data-type="{{ $data->photo->hotels->type_hotel_2 }}" type="button" data-tipe="2" class="btn btn-tipe-hotel btn-outline-info">Bintang
                                                {{ $data->photo->hotels->type_hotel_2 }}</button>
                                        </div>
                                    </div>
                                @endif
                                @if ($data->photo->hotels->type_hotel_3)
                                    <div class="col">
                                        <div class="d-grid gap-2 mt-4">
                                            <button data-type="{{ $data->photo->hotels->type_hotel_3 }}" type="button" data-tipe="3" class="btn btn-tipe-hotel btn-outline-info">Bintang
                                                {{ $data->photo->hotels->type_hotel_3 }}</button>
                                        </div>
                                    </div>
                                @endif
                            </div>
                            <div class="divider mt-3"></div>
                            <h6 class="fw-bold">Tipe Kamar</h6>
                            <div class="row tipe-kamar">
                                @if ($data->photo->hotels->quad_1)
                                    <div class="col">
                                        <div class="d-grid gap-2 mt-4">
                                            <button type="button" data-price="{{ $data->photo->hotels->quad_1 }}" class="btn btn-tipe-kamar tipe-kamar-quad btn-outline-info btn-active">Quad</button>
                                        </div>
                                    </div>
                                @endif
                                @if ($data->photo->hotels->triple_1)
                                    <div class="col">
                                        <div class="d-grid gap-2 mt-4">
                                            <button type="button" data-price="{{ $data->photo->hotels->triple_1 }}" class="btn btn-tipe-kamar tipe-kamar-triple btn-outline-info">Triple</button>
                                        </div>
                                    </div>
                                @endif
                                @if ($data->photo->hotels->double_1)
                                    <div class="col">
                                        <div class="d-grid gap-2 mt-4">
                                            <button type="button" data-price="{{ $data->photo->hotels->double_1 }}" class="btn btn-tipe-kamar tipe-kamar-double btn-outline-info">Double</button>
                                        </div>
                                    </div>
                                @endif
                            </div>
                            <div class="divider mt-3"></div>
                            <h6 class="fw-bold">Berangkat Dari</h6>
                            <small class="mini">
                                Termasuk transport & akomodasi lokal. Tim kami akan menghubungi calon jamaah untuk persiapan
                                keberangkatan dari setiap kota, setelah pembayaran uang muka dilakukan.
                            </small>
                            <div class="row keberangkatan">
                                <div class="col">
                                    <div class="d-grid gap-2 mt-4">
                                        <button data-city="{{ $data->photo->packets->departure_city }}" type="button" data-price="0"
                                            class="btn btn-outline-info btn-keberangkatan btn-active"><small>{{ $data->photo->packets->departure_city }}</small></button>
                                    </div>
                                </div>
                                @foreach ($partner_branches as $item)
                                    <div class="col">
                                        <div class="d-grid gap-2 mt-4">
                                            <button data-city="{{ $item->city }}" type="button" data-price="{{ $item->cost }}"
                                                class="btn btn-outline-info btn-keberangkatan"><small>{{ $item->city }}</small></button>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>

                        <!-- Button Area -->
                        <div class="button-area">
                            <div class="d-grid gap-2 mt-4">
                                <button type="button" class="btn bg-blue text-white pesan-paket"><i
                                        class="fas fa-user"></i> Pesan Paket</button>
                            </div>
                            <div class="d-grid gap-2 mt-4 area-save" style="display:none !important">
                                <button type="button" class="btn bg-blue text-white save"><i
                                        class="fas fa-user"></i> Pesan Paket</button>
                            </div>
                            <div class="d-grid gap-2 mt-4 pesan-group-area">
                                <button type="button" class="btn bg-blue text-white pesan-group"><i class="fas fa-users"></i> Pesan
                                    Group</button>
                            </div>
                            <div class="d-grid gap-2 mt-4">
                                <input type="checkbox" id="check">
                                <label for="check" class="label_price">
                                  
                                        <i class="fas fa-share"></i>
                                        Bagikan
                                    
                                </label>
                                </button>
                                <div class="icons">
                                    <a href="#"><i class='bx bxl-facebook-circle' ></i></a>
                                    <a href="#"><i class='bx bxl-twitter' ></i></a>
                                    <a href="#"><i class='bx bxl-whatsapp' ></i></a>
                                    <a href="#"><i class='bx bxs-envelope' ></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
        <div class="row mt-5" data-aos="zoom-out-top">
            <center>
                <h4 class="fw-bold head-title">Paket Umroh Lainnya</h4>
            </center>
            <div class="row">
                @foreach ($other_packet as $item_packets)
                    @php
                        $hotel = Hotel::with('listHotel')
                                    ->where('id_packet', $item_packets->id_packet)
                                    ->first();

                        $itineries = Itinery::where('id_photo', $item_packets->id)->first();

                        $counter = 0;

                        if ($itineries) {
                            for ($i = 2; $i <= 14; $i++) {
                                $columnName = 'activity_' . $i;
                                if (!is_null($itineries->$columnName)) {
                                    $counter++;
                                }
                            }
                        }

                        $usingSeat = DB::table('transactions')
                                        ->where('id_packet', $item_packets->packets->id)
                                        ->where('transaction_status', 'success')
                                        ->count();

                        $available_seat = $item_packets->packets->seat_capasitas - $usingSeat;

                        $presentase = ($available_seat / $item_packets->packets->seat_capasitas) * 100;
                    @endphp

                    @if ($available_seat > 0)

                    <div class="col-md-4 mt-2">
                        <a style="color:black; text-decoration:none;" href="{{ url('/detail-product/' . $itineries->id . '&day=' . $counter + 1) }}">
                            <div class="card_produk_lainnya">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-3">
                                            <img style="width: 100%;border-radius: 5px;"
                                                src="{{ asset('assets/image_travel/' . $item_packets->image) }}" alt="">
                                        </div>
                                        <div class="col">
                                            <h6>{{ $item_packets->packets->name_packet }}</h6>
                                            <div class="progress" style="height: 20px;">
                                                <div class="progress-bar bg-blue progress-bar-striped progress-bar-animated"
                                                    role="progressbar" aria-valuenow="{{ $presentase }}" aria-valuemin="0"
                                                    aria-valuemax="100" style="width: {{ $presentase }}%">
                                                    <b>Sisa {{ $available_seat }} Seat</b>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mt-3">
                                        <small>Quad, <span class="text-secondary">Sekamar Ber-4</span> <span
                                                style="float: right;" class="text-warning fw-bolder">Rp
                                                {{ number_format($item_packets->hotels->quad_1) }}</span></small>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="row fw-bold">
                                                <div class="col-6">
                                                    <small><i class="fas fa-calendar-alt"></i>
                                                        {{ date('d-m-Y', strtotime($item_packets->packets->departure_date)) }}</small><br>
                                                    <small><i class="fas fa-plane-departure"></i>
                                                        {{ $item_packets->packets->maskapai_name }}</small><br>
                                                    <small><i class="fas fa-map-marker-alt"></i>
                                                        {{ $item_packets->packets->departure_city }}</small><br>
                                                </div>
                                                <div class="col-6 text-end">
                                                    <small><i class="fas fa-star"></i>
                                                        {{ $hotel->listHotel->star }}</small><br>
                                                    <small><i class="fas fa-clock"></i> {{ $counter + 1 }} Hari</small><br>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>

                    @endif

                @endforeach
            </div>
            <center>
                <a href="/all_product"><button class="btn btn-info text-white mt-4 bg-blue">Lihat Lebih Banyak</button></a>
            </center>
        </div>
    </div>
@endsection

@push('js')
    <script src="{{ asset('assets/js/detail-packets.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        const id_packet = {{ $data->photo->packets->id }};
        let auth_id = "<?= (!empty(Auth::user()->id) ? Auth::user()->id : null) ?>";
        let params = "<?= str_replace('id_user=', '', $id_user) ?>";
        let flag_transaction_code = "ON";
        
        if (params != "") {
            auth_id = params;
            flag_transaction_code = "OFF";
        }

        $(document).ready(function(){
            var myCarousel = new bootstrap.Carousel(document.getElementById('carouselExampleControls'), {
                interval: false // Set interval to false to disable auto sliding
            });
        })
    </script>
@endpush