<?php
use App\Models\Hotel;
use App\Models\Itinery;
?>

@extends('template.main')

@push('css')
    <link rel="stylesheet" href="{{ asset('assets/custom/micro-slider.css') }}">
@endpush

@section('content')

    <?php $bg = DB::table('cms')->first(); ?>

    <div class="container-fluid p-0">
        <div class="micro-slider">
            <div class="slider-item"><img src="{{ asset('assets/img/'.@$bg->banner1) }}" alt=""></div>
            <div class="slider-item"><img src="{{ asset('assets/img/'.@$bg->banner2) }}" alt=""></div>
            <div class="slider-item"><img src="{{ asset('assets/img/'.@$bg->banner3) }}" alt=""></div>
        </div>
    </div>
    <div class="container" style="margin-top: -30px;z-index: 999; position:relative">
        <div class="col-md-12">
            <div class="card_filter_packet">
                <div class="card-body">
                    <form action="/" method="GET">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <?php $airpots = DB::table('airports')->where('countryName', 'INDONESIA')->get();?>
                                    <label for="">Lokasi Keberangkatan</label>
                                    <select name="departure_city" class="form-control departure_city" id="">
                                        <option selected disabled>Lokasi Keberangkatan</option>
                                        <?php 
                                            foreach($airpots as $v_airport){
                                        ?>
                                            <option value="<?= $v_airport->cityName ?>"><?= $v_airport->cityName ?></option>
                                        <?php } ?>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="">Waktu Keberangkatan</label>
                                    <select name="departure_date" class="form-control departure_date" id="">
                                        <option selected disabled>Waktu Keberangkatan</option>
                                        <option value="">Semua Waktu</option>
                                        <option value="1">Januari</option>
                                        <option value="2">Februari</option>
                                        <option value="3">Maret</option>
                                        <option value="4">April</option>
                                        <option value="5">Mei</option>
                                        <option value="6">Juni</option>
                                        <option value="7">July</option>
                                        <option value="8">Agustus</option>
                                        <option value="9">September</option>
                                        <option value="10">Oktober</option>
                                        <option value="11">November</option>
                                        <option value="12">Desember</option>
                                    </select>
                                </div>
                            </div>
                            {{-- <div class="col-md-4">
                                <div class="form-group">
                                    <label for="">Biaya Umroh</label>
                                        <select name="" class="form-control" id="">
                                            <option selected>Semua Biaya</option>
                                            <option value="">< Rp 30jt</option>
                                            <option value="">Rp 30jt - 40jt</option>
                                            <option value="">> Rp 40jt</option>
                                    </select>
                                </div>
                            </div> --}}
                            <div class="col-md-4">
                                <div class="d-grid gap-2 mt-4">
                                    <button class="btn text-white btn-block bg-blue">Cari Paket Umroh</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <style>

            .card_filter_packet {
                position: relative;
                display: flex;
                flex-direction: column;
                min-width: 0;
                word-wrap: break-word;
                background-color: #fff;
                background-clip: border-box;
                border: 1px solid rgba(0,0,0,.125);
                border-radius: 0.25rem;
            }

            @media only screen and (max-width: 990px) {
                .micro-slider{
                    display: none;
                } 
                
                .card_filter_packet {
                    margin-top: 100px;
                }
            }
        </style>

        <div class="col-md-12 mt-5">
            <span>Paket Umroh dengan Keberangkatan Paling Awal</span>
            <div class="row">
                @foreach ($data as $item)
                    @php
                        $hotel = Hotel::with('listHotel')
                                    ->where('id_packet', $item->id_packet)
                                    ->first();

                        $itineries = Itinery::where('id_photo', $item->id)->first();

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
                                        ->where('id_packet', $item->packets->id)
                                        ->where('transaction_status', 'success')
                                        ->count();

                        $available_seat = $item->packets->seat_capasitas - $usingSeat;

                        $presentase = ($available_seat / $item->packets->seat_capasitas) * 100;

                    @endphp
                    
                    @if ($available_seat > 0)

                    <div class="col-md-4 mt-2">
                        <a href="{{ url('/detail-product/' . $itineries->id . '&day=' . $counter + 1) }}">
                            <div class="card">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-3">
                                            <img style="width: 100%;border-radius: 5px;"
                                                src="{{ asset('assets/image_travel/' . $item->image) }}" alt="">
                                        </div>
                                        <div class="col">
                                            <h6>{{ $item->packets->name_packet }}</h6>
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
                                                style="float: right;" class="text-warning fw-bolder">
                                                <?php 
                                                    $price_ticket = DB::table('packets')->where('packets.id', $item->id_packet)->join('ticket_groups','ticket_groups.id', '=', 'packets.id_ticket')->first(); 
                                                    $total_ticket = $item->hotels->quad_1 + $price_ticket->price_ticket;
                                                ?>
                                                Rp {{ number_format($total_ticket) }}</span></small>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="row fw-bold">
                                                <div class="col-6">
                                                    <small><i class="fas fa-calendar-alt"></i>
                                                        {{ date('d-m-Y', strtotime($item->packets->departure_date)) }}</small><br>
                                                    <small><i class="fas fa-plane-departure"></i>
                                                        {{ $item->packets->maskapai_name }}</small><br>
                                                    <small><i class="fas fa-map-marker-alt"></i>
                                                        {{ $item->packets->departure_city }}</small><br>
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
    <script src="https://unpkg.com/micro-slider@latest/dist/micro-slider.min.js"></script>
    <script>
        const departure_city = "{{ @$_GET['departure_city'] ?? "" }}";
        const departure_date = "{{ @$_GET['departure_date'] ?? "" }}";
        
        window.onload = function() {
            var microSlider = new MicroSlider('.micro-slider');

            // Set the interval for auto-scrolling (e.g., every 3000 milliseconds or 3 seconds)
            var interval = 4000;

            // Function to move the slider to the next slide
            function autoScroll() {
                microSlider.next();
            }

            // Set the interval to call the autoScroll function
            var autoScrollInterval = setInterval(autoScroll, interval);

            // Optionally, you can stop the auto-scrolling when the user interacts with the slider
            document.querySelector('.micro-slider').addEventListener('mouseenter', function() {
                clearInterval(autoScrollInterval);
            });

            document.querySelector('.micro-slider').addEventListener('mouseleave', function() {
                autoScrollInterval = setInterval(autoScroll, interval);
            });

        };

        $(document).ready(function(){
            $('.departure_city').val(departure_city);
            $('.departure_date').val(departure_date);
        })
    </script>
@endpush
