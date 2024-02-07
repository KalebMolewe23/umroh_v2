@include('template.header')
    <div class="box1">
        <div id="Carousel-slider">
            <section>
                <div class="Carousel-slider">
                    <!-- Background Images div -->
                    <div class="slider-item banner1" data-href="#" ></div>
                    <div class="slider-item banner2" data-href="#" ></div>
                    <div class="slider-item banner3" data-href="#" ></div>
                    <!-- Background Images div End -->
                </div>
            </section>
        </div>
    </div>

        
    <div class="container">
        <div class="card">
            <div class="row"><br>
                <div class="column">
                    Lokasi Keberangkatan
                </div>
                <div class="column">
                    Waktu Keberangkatan
                </div>
                <div class="column">
                    Biaya Umroh
                </div>
                <div class="column">
                    <input class="input_disabled" disabled>
                </div>
            </div>
            <div class="row">
                <div class="column">
                    <select type="text">
                        <option> Silahkan Pilih Lokasi </option>
                    </select>
                </div>
                <div class="column">
                    <select type="text">
                        <option> Silahkan Pilih Waktu </option>
                    </select>
                </div>
                <div class="column">
                    <select type="text">
                        <option> Silahkan Pilih Biaya </option>
                    </select>
                </div>
                <div class="column">
                    <button><i class='bx bx-search-alt'></i> Cari Paket Umroh</button>
                </div>
            </div>
        </div><br><br>

        <!-- start progress informasi paket umroh -->

        <?php
            $data_product = DB::table('itineries')->where('status', 1)->get();
            $count = $data_product->count();

            if($count == 0){
        ?>
            <center> Maaf, Data Paket Umroh Masih Kosong </center>
        <?php }else{ ?>
        <h4 class="h4_title">Paket Umroh dengan Keberangkatan Paling Awal</h4><br>
        <div class="row_paket">
            <?php foreach ($product as $v_product) {
                $total_order = DB::table('order_packets')->where('id_packet', $v_product->id_data_packet)->where('status', 'Paid')->count();
                $total_seat = $v_product->total_seat;
                $total_data_seat = (($total_seat - $total_order) / $total_seat) * 100;    
                $total_data_seat2 = $total_seat - $total_order; 
            ?>
            <a href="/product/{{ $v_product->id }}" style="color: black">
                <div class="column_paket">
                    <div class="card_paket">
                        <img src="{{ asset('assets/image_travel/'. $v_product->image) }}" class="img_paket">
                        <h4 class="h4_money">{{ $v_product->name_packet }}</h4>
                        <div class="processing">
                            <div class="processing-bar" data-bar="<?= $total_data_seat ?>">
                                Sisa Seat <?= $total_data_seat2 ?>
                            </div>
                        </div><br>
                        <h5 class="h5_paket_money">Type Kamar : 
                        <?php if($v_product->quad != null && $v_product->triple != null && $v_product->double != null){ ?>    
                            Quad, Triple, Double
                        <?php }else if ($v_product->quad != null && $v_product->triple != null && $v_product->double == null){ ?>
                            Quad, Triple
                        <?php }else if ($v_product->quad != null && $v_product->triple == null && $v_product->double == null){ ?>
                            Quad
                        <?php } ?>
                        <br>
                        Harga Mulai Dari Rp {{ number_format($v_product->price_ticket,2,',','.') }}</h5><hr>
                        <div class="row_isi_paket">
                            <div class="column_isi_paket">
                                <h4><i class='bx bxs-calendar' ></i> {{ date('d-m-Y', strtotime($v_product->departure_date)) }}</h4>
                            </div>
                            <div class="column_isi_paket">
                                <h4><i class='bx bxs-hotel' ></i><i class='bx bxs-star' ></i> {{ $v_product->star }} </h4>
                            </div>
                            <div class="column_isi_paket">
                                <h4><i class='bx bxs-plane-alt' ></i> {{ $v_product->maskapai_name }}</h4>
                            </div>
                            <div class="column_isi_paket">
                                <h4><i class='bx bxs-time'></i> {{ $date}}</h4>
                            </div>
                            <div class="column_isi_paket">
                                <h4><i class='bx bxs-map' ></i> {{ $v_product->departure_city }}</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </a>
            <?php } ?>
        </div>
        
        <?php } ?>
        <button type="button" class="info_lanjut">Lihat Lebih Banyak</button>
        <!-- end progress informasi paket umroh -->

    </div><br><br><br><br><br><br><br><br><br><br><br><br>
@include('template.footer')