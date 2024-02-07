<?php
use App\Models\Hotel;
use App\Models\Itinery;
?>

@extends('template.main')

@section('content')
    <div class="container" style="margin-top: 30px;z-index: 999; position:relative">
        <div class="row">
            <div class="col-3">
                <div class="card">
                    <p style="padding-left:30px;padding-top:10px;width:800px">Filter</p>
                    <hr><h5 style="padding-left:30px;width:800px">Lokasi Keberangkatan</h5>
                    <center>
                        <div class="boxContainer">
                            <table class="elementsContainer">
                                <form method="get" action="/search_city">
                                    <tr>
                                        <td>
                                            <input type="text" name="search" placeholder="Cari Kota" class="search">
                                        </td>
                                        <td>
                                            <button type="submit" class="button_search_data"><i class='bx bx-search-alt-2'></i></button>
                                        </td>
                                    </tr>
                                </form>
                            </table>
                        </div>
                    </center><hr>
                    <h5 style="padding-left:30px;width:800px">Kategori Paket</h5>
                    <center>
                        <button class="button-search">Semua Paket</button>
                        <?php
                            $kategori = DB::table('packet_categories')->get();

                            foreach($kategori as $v_kategori){
                        ?>
                            <button class="button-search" name="<?= $v_kategori->id; ?>"><?= $v_kategori->categorie_name ?></button>
                        <?php } ?>
                    </center><hr>
                    <h5 style="padding-left:30px;width:800px">Biaya Umroh</h5>
                    <center>
                        <button class="button-search">Semua Biaya</button>
                        <button class="button-search">< Rp 30jt</button>
                        <button class="button-search">Rp 30jt - 40jt</button>
                        <button class="button-search">> Rp 40jt</button>
                    </center>
                    <br>
                </div>
            </div>
            <div class="col-9">
                <h4>Paket Umroh</h4><br>
                <div class="card" style="padding-left:30px;padding-top:20px;width:800px">
                    <div class="row">
                        <div class="col">
                            <select style="width:300px" class="form-control">
                                <option value="">Keberangkatan Paling Awal</option>
                                <option value="">Paling Murah</option>
                                <option value="">Paling Mahal</option>
                            </select>
                        </div>
                        <div class="col">
                            <select style="width:300px" class="form-control">
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
                    <br>
                </div><br>
                <div class="col-md-12">
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
                            @endphp

                            <div class="col-md-4 mt-2">
                                <a style="color:black; text-decoration:none;" href="{{ url('/detail-product/' . $itineries->id . '&day=' . $counter + 1) }}">
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
                                                            <b>Sisa {{ $item->packets->seat_capasitas }} Seat</b>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row mt-3">
                                                <small>Quad, <span class="text-secondary">Sekamar Ber-4</span> <span
                                                        style="float: right;" class="text-warning fw-bolder">Rp
                                                        {{ number_format($item->hotels->quad_1) }}</span></small>
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
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection