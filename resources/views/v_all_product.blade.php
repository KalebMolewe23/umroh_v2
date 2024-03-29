<?php
use App\Models\Hotel;
use App\Models\Itinery;
?>

<?php $bg = DB::table('cms')->first(); ?>
<?php $information = DB::table('information')->first(); ?>
<?php $social_media = DB::table('social_media')->where('status', 1)->get(); ?>

@extends('template.main')

<link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">

@section('content')
    <div class="container" style="margin-top: 30px;z-index: 999; position:relative">
        <div class="row">
            <div class="col-3">
                <div class="card" data-aos="zoom-out-right"><br>
                    <h5>&nbsp;&nbsp;Lokasi Keberangkatan</h5>
                    <center>
                        <div class="boxContainer">
                            <table class="elementsContainer">
                                <form method="get" action="/search_city">
                                    <tr>
                                        <td>
                                            <input type="text" name="search" placeholder="Cari Kota" class="search_city search">
                                        </td>
                                        <td>
                                            <button type="button" class="button_search_data"><i class='bx bx-search-alt-2'></i></button>
                                        </td>
                                    </tr>
                                </form>
                            </table>
                        </div>
                    </center><hr>
                    <h5>&nbsp;&nbsp;Kategori Paket</h5>
                    <center>
                        <button class="button-search btn-category-packet" data-id="0">Semua Paket</button>
                        <?php
                            $kategori = DB::table('packet_categories')->get();

                            foreach($kategori as $v_kategori){
                        ?>
                            <button class="button-search btn-category-packet" data-id="<?= $v_kategori->id; ?>"><?= $v_kategori->categorie_name ?></button>
                        <?php } ?>
                    </center><hr>
                    <h5>&nbsp;&nbsp;Biaya DP Umroh</h5>
                    <center>
                        <button class="button-search btn-price" data-price="0">Semua Biaya</button>
                        <button class="button-search btn-price" data-price="1">< Rp 5jt</button>
                        <button class="button-search btn-price" data-price="2">> Rp 5jt</button>
                    </center>
                    <br>
                </div>
            </div>
            <div class="col-9">
                <h4>Paket Umroh</h4><br>
                <div class="card_packet" data-aos="zoom-out-left">
                    <form action="/all_product" method="GET">
                        @csrf
                        <div class="row">
                            <div class="col">
                                <div class="form-group">
                                    <label class="form-label">Tanggal Awal</label>
                                    <input autocomplete="off" type="text" class="form-control tanggal_awal" name="tanggal_awal">
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-group">
                                    <label class="form-label">Tanggal Akhir</label>
                                    <input autocomplete="off" type="text" class="form-control tanggal_akhir" name="tanggal_akhir">
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-group" style="margin-top: 32px">
                                    <button class="btn btn-primary">Filter</button>
                                    <button type="button" class="btn btn-light reset">Reset</button>
                                </div>
                            </div>
                        </div>
                    </form>
                    <br>
                </div>
                
                <style>
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
                        
                        .card_packet {
                            position: relative;
                            display: flex;
                            flex-direction: column;
                            min-width: 0;
                            word-wrap: break-word;
                            background-color: #fff;
                            background-clip: border-box;
                            border: 1px solid rgba(0,0,0,.125);
                            border-radius: 0.25rem;
                            padding-left:30px;
                            padding-top:20px;
                            width:800px;
                        }

                        @media only screen and (max-width: 1200px) {
                            .boxContainer{
                                width: 150px;
                            }

                            .button-search{
                                width: 150px;
                            }

                            h5{
                                font-size: 15px;
                            }

                            .card_packet {
                                width: 680px;
                            }
                        }

                        @media only screen and (max-width: 1000px) {
                            .boxContainer{
                                width: 455px;
                            }

                            .button-search{
                                width: 282px;
                            }

                            .button_search_data{
                                margin-left: -35px;
                            }

                            h5{
                                font-size: 20px;
                            }

                            .col-3{
                                width: 100%;
                            }

                            .card_packet {
                                width: 519px;
                            }
                        }

                        @media only screen and (max-width: 767px) {
                            .card_packet {
                                width: 517px;
                            }
                        }
                        
                        @media only screen and (max-width: 540px) {
                            .boxContainer{
                                width: 300px;
                            }

                            .card_packet {
                                width: 377px;
                            }
                        }

                        @media only screen and (max-width: 478px) {
                            .card_packet {
                                width: 377px;
                            }
                        }
                    </style>
                
                <br>
                <div class="col-md-12">
                    <div class="row">
                        @foreach ($data as $item)
                            @php
                                $hotel = Hotel::with('listHotel')
                                    ->where('id_packet', $item->id_packet)
                                    ->first();

                                try{
                                    $itineries = Itinery::where('id_photo', $item->id)->first();
                                } catch (ModelNotFoundException $e) {
                                    $itineries = null;
                                }

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

                            <div class="col-md-4 mt-2 list-item" data-aos="zoom-out-left">
                                <a style="color:black; text-decoration:none;" href="{{ url('/detail-product/' . optional($itineries)->id . '&day=' . $counter + 1) }}">
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
                                                            role="progressbar" aria-valuenow="75" aria-valuemin="0"
                                                            aria-valuemax="100" style="width: 75%">
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

                                                <span style="display: none" class="price-dp">{{ $item->packets->dp }}</span>
                                                <span style="display: none" class="category-packet">{{ $item->packets->id_category_packet }}</span>
                                                <span style="display: none" class="departure-city">{{ $item->packets->departure_city }}</span>
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
                </div>
            </div>
        </div>
    </div>
@endsection

@push('js')
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<script>
    const tanggal_awal = "{{ @$_GET['tanggal_awal'] ?? "" }}";
    const tanggal_akhir = "{{ @$_GET['tanggal_akhir'] ?? "" }}";
    const order_by = "{{ @$_GET['order_by'] ?? "" }}";
    
    $(document).ready(function(){
        $('.tanggal_awal').val(tanggal_awal);
        $('.tanggal_akhir').val(tanggal_akhir);
        $('.tanggal_awal, .tanggal_akhir').datepicker({
            dateFormat: 'dd-mm-yy',
        });
    });

    $('.btn-category-packet').click(function() {
        $('.btn-category-packet').removeClass('btn-bordered');
        $(this).addClass('btn-bordered');
        filterData();
    });

    $('.reset').click(function() {
        window.location.href = '/all_product';
    });

    $('.btn-price').click(function() {
        $('.btn-price').removeClass('btn-bordered');
        $(this).addClass('btn-bordered');
        filterData();
    });

    $('.button_search_data').click(function(){
        filterData();
    })

    function filterData() {
        var id = $('.btn-category-packet.btn-bordered').data('id');
        var priceVal = $('.btn-price.btn-bordered').data('price');
        var departureCityVal = $('.search_city').val();

        $('.list-item').each(function() {
            var idCategory = $(this).find('.category-packet').text();
            var priceText = $(this).find('.price-dp').text();
            var departureCity = $(this).find('.departure-city').text();
            var price = parseInt(priceText);

            departureCity = departureCity.toLowerCase();
            departureCityVal = departureCityVal.toLowerCase();

            if ((priceVal == 0 || priceVal == undefined) && (id == 0 || id == idCategory) && (departureCityVal == "" || departureCityVal == departureCity)) {
                $(this).show();
            } else if (priceVal == 1 && price < 5000000 && (id == 0 || id == idCategory) && (departureCityVal == "" || departureCityVal == departureCity)) {
                $(this).show();
            } else if (priceVal == 2 && price >= 5000000 && (id == 0 || id == idCategory) && (departureCityVal == "" || departureCityVal == departureCity)) {
                $(this).show();
            } else {
                $(this).hide();
            }
        });
    }
</script>
@endpush