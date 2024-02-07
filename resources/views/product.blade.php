@include('template.header')

    <section class="home containers">
        <?php foreach ($packet as $v_packet){  
            $harga_quad = $v_packet->quad;    
            $harga_triple = $v_packet->triple;    
            $harga_double = $v_packet->double;
            $harga_baby = $v_packet->price_baby;    
            $harga_child = $v_packet->price_child;    
            $harga_adult = $v_packet->price_adult;
            $price_plane_total = $v_packet->price_plane_total;
            $harga_paket = $harga_quad + $harga_adult + $price_plane_total;
            $departure_plane = $v_packet->departure_city;
            $departure_plane_1 = $v_packet->departure_city;

            if($v_packet->id_ticket_1 == null){
                
            }else{
                $plane_1 = DB::table('ticket_groups')->where('id', $v_packet->id_ticket_1)->get();
                foreach ($plane_1 as $v_plane_1){
                    $price_plane_2 = $v_plane_1->price_ticket;
                    $departure_plane_2 = $v_plane_1->departure_city;
                }
                $harga_paket_2 = $harga_quad + $harga_adult + $price_plane_2;
                
            }

            if($v_packet->id_ticket_2 == null){
                
            }else{
                $plane_2 = DB::table('ticket_groups')->where('id', $v_packet->id_ticket_2)->get();
                foreach ($plane_2 as $v_plane_2){
                    $price_plane_3 = $v_plane_2->price_ticket;
                    $departure_plane_3 = $v_plane_2->departure_city;
                }
                $harga_paket_3 = $harga_quad + $harga_adult + $price_plane_3;
            }
            
            if($v_packet->id_ticket_3 == null){
                
            }else{
                $plane_3 = DB::table('ticket_groups')->where('id', $v_packet->id_ticket_3)->get();
                foreach ($plane_3 as $v_plane_3){
                    $price_plane_4 = $v_plane_3->price_ticket;
                    $departure_plane_4 = $v_plane_3->departure_city;
                }
                $harga_paket_4 = $harga_quad + $harga_adult + $price_plane_4;
            }

            if($v_packet->id_ticket_4 == null){
                
            }else{
                $plane_4 = DB::table('ticket_groups')->where('id', $v_packet->id_ticket_4)->get();
                foreach ($plane_4 as $v_plane_4){
                    $price_plane_5 = $v_plane_4->price_ticket;
                    $departure_plane_5 = $v_plane_4->departure_city;
                }
                $harga_paket_5 = $harga_quad + $harga_adult + $price_plane_5;
            }

            if($v_packet->id_ticket_5 == null){
                
            }else{
                $plane_5 = DB::table('ticket_groups')->where('id', $v_packet->id_ticket_5)->get();
                foreach ($plane_5 as $v_plane_5){
                    $price_plane_6 = $v_plane_5->price_ticket;
                    $departure_plane_6 = $v_plane_5->departure_city;
                }
                $harga_paket_6 = $harga_quad + $harga_adult + $price_plane_6;
            }

            if($v_packet->id_ticket_6 == null){
                
            }else{
                $plane_6 = DB::table('ticket_groups')->where('id', $v_packet->id_ticket_6)->get();
                foreach ($plane_6 as $v_plane_6){
                    $price_plane_7 = $v_plane_6->price_ticket;
                    $departure_plane_7 = $v_plane_6->departure_city;
                }
                $harga_paket_7 = $harga_quad + $harga_adult + $price_plane_7;
            }

            if($v_packet->id_ticket_7 == null){
                
            }else{
                $plane_7 = DB::table('ticket_groups')->where('id', $v_packet->id_ticket_7)->get();
                foreach ($plane_7 as $v_plane_7){
                    $price_plane_8 = $v_plane_7->price_ticket;
                    $departure_plane_8 = $v_plane_7->departure_city;
                }
                $harga_paket_8 = $harga_quad + $harga_adult + $price_plane_8;
            }

            if($v_packet->id_ticket_8 == null){
                
            }else{
                $plane_8 = DB::table('ticket_groups')->where('id', $v_packet->id_ticket_8)->get();
                foreach ($plane_8 as $v_plane_8){
                    $price_plane_9 = $v_plane_8->price_ticket;
                    $departure_plane_9 = $v_plane_8->departure_city;
                }
                $harga_paket_9 = $harga_quad + $harga_adult + $price_plane_9;
            }

            if($v_packet->id_ticket_9 == null){
                
            }else{
                $plane_9 = DB::table('ticket_groups')->where('id', $v_packet->id_ticket_9)->get();
                foreach ($plane_9 as $v_plane_9){
                    $price_plane_10 = $v_plane_9->price_ticket;
                    $departure_plane_10 = $v_plane_9->departure_city;
                }
                $harga_paket_10 = $harga_quad + $harga_adult + $price_plane_10;
            }

            //paket harga triple
            $harga_paket_triple = $harga_triple + $harga_adult + $price_plane_total;
            if($v_packet->id_ticket_1 == null){
                
            }else{
                $plane_triple_1 = DB::table('ticket_groups')->where('id', $v_packet->id_ticket_1)->get();
                foreach ($plane_triple_1 as $v_plane_triple_1){
                    $price_plane_triple_2 = $v_plane_triple_1->price_ticket;
                    $departure_plane_triple_2 = $v_plane_triple_1->departure_city;
                }
                $harga_paket_triple_2 = $harga_triple + $harga_adult + $price_plane_triple_2;
                
            }

            if($v_packet->id_ticket_2 == null){
                
            }else{
                $plane_triple_2 = DB::table('ticket_groups')->where('id', $v_packet->id_ticket_2)->get();
                foreach ($plane_triple_2 as $v_plane_triple_2){
                    $price_plane_triple_3 = $v_plane_triple_2->price_ticket;
                    $departure_plane_triple_3 = $v_plane_triple_2->departure_city;
                }
                $harga_paket_triple_3 = $harga_triple + $harga_adult + $price_plane_triple_3;
            }
            
            if($v_packet->id_ticket_3 == null){
                
            }else{
                $plane_triple_3 = DB::table('ticket_groups')->where('id', $v_packet->id_ticket_3)->get();
                foreach ($plane_triple_3 as $v_plane_triple_3){
                    $price_plane_triple_4 = $v_plane_triple_3->price_ticket;
                    $departure_plane_triple_4 = $v_plane_triple_3->departure_city;
                }
                $harga_paket_triple_4 = $harga_triple + $harga_adult + $price_plane_triple_4;
            }

            if($v_packet->id_ticket_4 == null){
                
            }else{
                $plane_triple_4 = DB::table('ticket_groups')->where('id', $v_packet->id_ticket_4)->get();
                foreach ($plane_triple_4 as $v_plane_triple_4){
                    $price_plane_triple_5 = $v_plane_triple_4->price_ticket;
                    $departure_plane_triple_5 = $v_plane_triple_4->departure_city;
                }
                $harga_paket_triple_5 = $harga_triple + $harga_adult + $price_plane_triple_5;
            }

            if($v_packet->id_ticket_5 == null){
                
            }else{
                $plane_triple_5 = DB::table('ticket_groups')->where('id', $v_packet->id_ticket_5)->get();
                foreach ($plane_triple_5 as $v_plane_triple_5){
                    $price_plane_triple_6 = $v_plane_triple_5->price_ticket;
                    $departure_plane_triple_6 = $v_plane_triple_5->departure_city;
                }
                $harga_paket_triple_6 = $harga_triple + $harga_adult + $price_plane_triple_6;
            }

            if($v_packet->id_ticket_6 == null){
                
            }else{
                $plane_triple_6 = DB::table('ticket_groups')->where('id', $v_packet->id_ticket_6)->get();
                foreach ($plane_triple_6 as $v_plane_triple_6){
                    $price_plane_triple_7 = $v_plane_triple_6->price_ticket;
                    $departure_plane_triple_7 = $v_plane_triple_6->departure_city;
                }
                $harga_paket_triple_7 = $harga_triple + $harga_adult + $price_plane_triple_7;
            }

            if($v_packet->id_ticket_7 == null){
                
            }else{
                $plane_triple_7 = DB::table('ticket_groups')->where('id', $v_packet->id_ticket_7)->get();
                foreach ($plane_triple_7 as $v_plane_triple_7){
                    $price_plane_triple_8 = $v_plane_triple_7->price_ticket;
                    $departure_plane_triple_8 = $v_plane_triple_7->departure_city;
                }
                $harga_paket_triple_8 = $harga_triple + $harga_adult + $price_plane_triple_8;
            }

            if($v_packet->id_ticket_8 == null){
                
            }else{
                $plane_triple_8 = DB::table('ticket_groups')->where('id', $v_packet->id_ticket_8)->get();
                foreach ($plane_triple_8 as $v_plane_triple_8){
                    $price_plane_triple_9 = $v_plane_triple_8->price_ticket;
                    $departure_plane_triple_9 = $v_plane_triple_8->departure_city;
                }
                $harga_paket_triple_9 = $harga_triple + $harga_adult + $price_plane_triple_9;
            }

            if($v_packet->id_ticket_9 == null){
                
            }else{
                $plane_triple_9 = DB::table('ticket_groups')->where('id', $v_packet->id_ticket_9)->get();
                foreach ($plane_triple_9 as $v_plane_triple_9){
                    $price_plane_triple_10 = $v_plane_triple_9->price_ticket;
                    $departure_plane_triple_10 = $v_plane_triple_9->departure_city;
                }
                $harga_paket_triple_10 = $harga_triple + $harga_adult + $price_plane_triple_10;
            }

            $harga_paket_double = $harga_double + $harga_adult;
            $tanggal_keberangkatan = $v_packet->departure_date;
            $data_tanggal_keberangkatan = date('d-m-Y', strtotime($tanggal_keberangkatan));

            $total_itineries_1 = DB::table('itineries')->where('id', $v_packet->id_data_itineries)->whereNotNull('activity')->count();
            $total_itineries_2 = DB::table('itineries')->where('id', $v_packet->id_data_itineries)->whereNotNull('activity_2')->count();
            $total_itineries_3 = DB::table('itineries')->where('id', $v_packet->id_data_itineries)->whereNotNull('activity_3')->count();
            $total_itineries_4 = DB::table('itineries')->where('id', $v_packet->id_data_itineries)->whereNotNull('activity_4')->count();
            $total_itineries_5 = DB::table('itineries')->where('id', $v_packet->id_data_itineries)->whereNotNull('activity_5')->count();
            $total_itineries_6 = DB::table('itineries')->where('id', $v_packet->id_data_itineries)->whereNotNull('activity_6')->count();
            $total_itineries_7 = DB::table('itineries')->where('id', $v_packet->id_data_itineries)->whereNotNull('activity_7')->count();
            $total_itineries_8 = DB::table('itineries')->where('id', $v_packet->id_data_itineries)->whereNotNull('activity_8')->count();
            $total_itineries_9 = DB::table('itineries')->where('id', $v_packet->id_data_itineries)->whereNotNull('activity_9')->count();
            $total_itineries_10 = DB::table('itineries')->where('id', $v_packet->id_data_itineries)->whereNotNull('activity_10')->count();
            $total_itineries_11 = DB::table('itineries')->where('id', $v_packet->id_data_itineries)->whereNotNull('activity_11')->count();
            $total_itineries_12 = DB::table('itineries')->where('id', $v_packet->id_data_itineries)->whereNotNull('activity_12')->count();
            $total_itineries_13 = DB::table('itineries')->where('id', $v_packet->id_data_itineries)->whereNotNull('activity_13')->count();
            $total_itineries_14 = DB::table('itineries')->where('id', $v_packet->id_data_itineries)->whereNotNull('activity_14')->count();
            $total_data_itineries = $total_itineries_1 + $total_itineries_2 + $total_itineries_3 + $total_itineries_4 + $total_itineries_5 + $total_itineries_6 + $total_itineries_7 + $total_itineries_8 + $total_itineries_9 + $total_itineries_10 + $total_itineries_11 + $total_itineries_12 + $total_itineries_13 + $total_itineries_14;
            $total_order = DB::table('order_packets')->where('id_packet', $v_packet->id_data_packet)->where('status', 'Paid')->count();
            $total_seat = $v_packet->total_seat;
            $total_data_seat = (($total_seat - $total_order) / $total_seat) * 100;    
            $total_data_seat2 = $total_seat - $total_order;    
        ?>
        <div class="card-container">
            <div class="card1">
                <h3><?= $v_packet->name_packet ?></h3><br><hr><br>
                
                <?php if($v_packet->video == null){ ?>
                    <div class="swiper mySwiper">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <a href="{!! asset('assets/image_travel/'.$v_packet->image_packet) !!}" data-lightbox="models" data-title="<?= $v_packet->name_packet ?>">                
                                    <img src="{!! asset('assets/image_travel/'.$v_packet->image_packet) !!}" class="img_data_paket"><br><br><hr><br>
                                </a>
                            </div>
                        </div>
                    </div>
                <?php }else{ ?>
                    <div class="swiper mySwiper">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <a href="{!! asset('assets/image_travel/'.$v_packet->image_packet) !!}" data-lightbox="models" data-title="<?= $v_packet->name_packet ?>">                
                                    <img src="{!! asset('assets/image_travel/'.$v_packet->image_packet) !!}" class="img_data_paket"><br><br><hr><br>
                                </a>
                            </div>
                            <div class="swiper-slide"> 
                                <video width="450" height="360" controls>
                                    <source src="{{ asset('assets/video_travel/'.$v_packet->video) }}" type="video/mp4">
                                    Maaf, browser Anda tidak mendukung pemutaran video.
                                </video>
                            </div>
                        </div>
                        <div class="swiper-button-next"></div>
                        <div class="swiper-button-prev"></div>
                        <div class="swiper-pagination"></div>
                    </div>
                <?php } ?>
                
                <br><hr>
                <div class="row_product">
                    <div class="col_product">
                        <h4><i class='bx bxs-calendar' ></i> Keberangkatan</h4>
                    </div>
                    <div class="col_product">
                        <h4>&nbsp;&nbsp;&nbsp;<i class='bx bxs-map'></i> Berangkat</h4>
                    </div>
                    <div class="col_product">
                        <h4><i class='bx bxs-time'></i> Perjalanan</h4>
                    </div>
                </div><br>
                <div class="row_product">
                    <div class="col_product">
                        <p><?= $data_tanggal_keberangkatan ?></p>
                    </div>
                    <div class="col_product">
                        <p>&nbsp;&nbsp;&nbsp;&nbsp;<?= $v_packet->departure_city ?></p>
                    </div>
                    <div class="col_product">
                        <p><?= $date ?> Hari</p>
                    </div>
                </div><br><br>
                <div class="row_product">
                    <div class="col_product">
                        <h4><i class='bx bxs-plane-take-off'></i> Pesawat</h4>
                    </div>
                    <div class="col_product">
                        <h4>&nbsp;&nbsp;&nbsp;&nbsp;<i class='bx bxs-hotel' ></i> Kelas Hotel</h4>
                    </div>
                    <div class="col_product">
                        <h4>&nbsp;&nbsp;&nbsp;&nbsp;</h4>
                    </div>
                </div><br>
                <div class="row_product">
                    <div class="col_product">
                        <p><?= $v_packet->maskapai_name ?></p>
                    </div>
                    <div class="col_product">
                        <p>&nbsp;&nbsp;&nbsp;&nbsp;<i class='bx bxs-star' style="color:orange;"></i> <?= $v_packet->star ?></p>
                    </div>
                    <div class="col_product">
                        <p></p>
                    </div>
                </div>
            </div>
            <div id="informasi_paket">
                <div class="card2">
                    <h3 style="color:orange">Rp <?= number_format($harga_paket,2,',','.') ?></h3>
                    <br>
                    <p>Quad - Sekamar Ber-4: Rp <?= number_format($harga_quad,2,',','.') ?></p>
                    <p>Triple - Sekamar Ber-3: Rp <?= number_format($harga_triple,2,',','.') ?></p>
                    <p>Double - Sekamar Ber-2: Rp <?= number_format($harga_double,2,',','.') ?></p><br>
                    <div class="processing_product">
                        <div class="processing-bar" data-bar="<?= $total_data_seat ?>">
                            Sisa Seat <?= $total_data_seat2 ?>
                        </div>
                    </div><br>
                    <p style="color: green;">Amankan seat dengan uang muka Rp. <?= number_format($v_packet->dp) ?> /Jamaah. Transaksi aman, ibadah nyaman. Pembayaran hanya diproses apabila tiket pesawat telah confirm.</p>
                    <br><hr>
                    <div align="center">
                    <i class='bx bx-user' ></i> Pilih Paket
                    </div><br>
                    <div class="row_pilih_paket">
                        <?php if($v_packet->quad == null){ ?>
                            <div class="col_pilih_paket">
                                <button style="background-color: orange; width:90px" onclick="pesan_paket_triple()"><i class='bx bxs-hotel'></i> Triple</button>
                            </div>
                            <div class="col_pilih_paket">
                                <button style="background-color: orange; width:90px" onclick="pesan_paket_double()"><i class='bx bxs-hotel'></i> Double</button>
                            </div>
                        <?php }else if($v_packet->triple == null){ ?>
                            <div class="col_pilih_paket">
                                <button style="background-color: orange; width:90px" onclick="pesan_paket()"><i class='bx bxs-hotel'></i> Quad</button>
                            </div>
                            <div class="col_pilih_paket">
                                <button style="background-color: orange; width:90px" onclick="pesan_paket_double()"><i class='bx bxs-hotel'></i> Double</button>
                            </div>
                        <?php }else if($v_packet->double == null){ ?>
                            <div class="col_pilih_paket">
                                <button style="background-color: orange; width:90px" onclick="pesan_paket()"><i class='bx bxs-hotel'></i> Quad</button>
                            </div>
                            <div class="col_pilih_paket">
                                <button style="background-color: orange; width:90px" onclick="pesan_paket_triple()"><i class='bx bxs-hotel'></i> Triple</button>
                            </div>
                        <?php }else{ ?>
                            <div class="col_pilih_paket">
                                <button style="background-color: orange; width:90px" onclick="pesan_paket()"><i class='bx bxs-hotel'></i> Quad</button>
                            </div>
                            <div class="col_pilih_paket">
                                <button style="background-color: orange; width:90px" onclick="pesan_paket_triple()"><i class='bx bxs-hotel'></i> Triple</button>
                            </div>
                            <div class="col_pilih_paket">
                                <button style="background-color: orange; width:90px" onclick="pesan_paket_double()"><i class='bx bxs-hotel'></i> Double</button>
                            </div>
                        <?php } ?>
                    </div>
                    <!-- <button class="button" style="background-color: orange;"><br><br> -->
                    <button style="background-color: orange;"><i class='bx bxs-user-account'></i> Pesan Group</button><br><br>
                    <button><i class='bx bxs-share' ></i> Bagikan</button>
                </div>    
            </div>

            <!-- data quad -->
            <div class="data_pesan_paket" id="data_pesan_paket">
                <div class="card_pesan_paket">
                    <form action="/product/proses_save_buy_packet" method="post">
                        @csrf
                        <input type="hidden" name="id_user" value="19">
                        <input type="hidden" name="id_itineries" value="<?= $v_packet->id_itineries ?>">
                        <input type="hidden" class="total_price_packet" id="price_total_jamaah" name="price_total" value="<?= $harga_paket ?>" readonly>
                        <input type="hidden" name="dp" value="<?= $v_packet->dp ?>">
                        <input type="hidden" name="maskapai_name" value="<?= $v_packet->maskapai_name ?>">
                        <input type="hidden" name="type_room" value="Tipe Kamar Quad">
                        <h3 style="color:orange" id="moneyDisplay">Rp <?= number_format($harga_paket,2,',','.') ?></h3>
                        <br>
                        <p>Quad - Sekamar Ber-4: Rp <?= number_format($harga_quad,2,',','.') ?></p>
                        <p>Triple - Sekamar Ber-3: Rp <?= number_format($harga_triple,2,',','.') ?></p>
                        <p>Double - Sekamar Ber-2: Rp <?= number_format($harga_double,2,',','.') ?></p>
                        <p style="color: green;">Amankan seat dengan uang muka Rp. <?= number_format($v_packet->dp,2,',','.') ?> /Jamaah. Transaksi aman, ibadah nyaman. Pembayaran hanya diproses apabila tiket pesawat telah confirm.</p>
                        <br><hr>
                        Berangkat Dari<br><br>
                        <div class="grid-container">
                            <div class="grid-item pilih_lokasi_1">
                                <button class="btn-berangkat-dari" type="button" id="plane_button" onclick="plane_button_1()"><?= $departure_plane ?></button>
                            </div>
                            <?php for ($i = 1; $i <= 9; $i++) : ?>
                                <?php $ticketId = "id_ticket_" . $i; ?>
                                <?php if ($v_packet->$ticketId !== null) : ?>
                                    <div class="grid-item pilih_lokasi_<?= $i ?>">
                                        <button class="btn-berangkat-dari" type="button" id="plane_button_<?= $i + 1 ?>" onclick="plane_button_quad_<?= $i + 1 ?>()">
                                            <?= ${"departure_plane_" . $i + 1} ?>
                                        </button>
                                    </div>
                                <?php endif; ?>
                            <?php endfor; ?>
                        </div>

                        <br><br><hr>

                        <div id="btn_total_jamaah_1">
                            Pilih Jumlah Jamaah<br><br>
                            <p>Jumlah Jamaah Dewasa
                            <button type="button" onclick="kurang_adult()" class="btn1 btn-decrement">-</button>
                                <input type="text" id="quantity" name="quantity_adult" class="btn-input-jemaah" value="1" readonly>
                            <button type="button" onclick="tambah_adult()" class="btn1 btn-increment">+</button>
                            </p><br>
                            <p>Jumlah Anak(2 - 5 Tahun)
                            <button type="button" onclick="kurang_child()" class="btn1 btn-decrement1">-</button>
                                <input type="text" id="quantity_child" name="quantity_child" class="btn-input-jemaah" value="0" readonly>
                            <button type="button" onclick="tambah_child()" class="btn1 btn-increment1">+</button>
                            </p><br>

                            <p>Jumlah Bayi ( dibawah 2 Tahun)
                            <button type="button" onclick="kurang_baby()" class="btn1 btn-decrement2">-</button>
                                <input type="text" id="quantity_baby" name="quantity_baby" class="btn-input-jemaah" value="0" readonly>
                            <button type="button" onclick="tambah_baby()" class="btn1 btn-increment2">+</button>
                            </p>
                        </div> 
                        <div id="btn_total_jamaah_2">
                            Pilih Jumlah Jamaah<br><br>
                            <p>Jumlah Jamaah Dewasa
                            <button type="button" onclick="kurang_adult_quad_1()" class="btn1 btn-decrement">-</button>
                                <input type="text" id="quantity_quad_1" name="quantity_adult" class="btn-input-jemaah" value="1" readonly>
                            <button type="button" onclick="tambah_adult_quad_1()" class="btn1 btn-increment">+</button>
                            </p><br>
                            <p>Jumlah Anak(2 - 5 Tahun)
                            <button type="button" onclick="kurang_child_quad_1()" class="btn1 btn-decrement1">-</button>
                                <input type="text" id="quantity_child_quad_1" name="quantity_child" class="btn-input-jemaah" value="0" readonly>
                            <button type="button" onclick="tambah_child_quad_1()" class="btn1 btn-increment1">+</button>
                            </p><br>

                            <p>Jumlah Bayi ( dibawah 2 Tahun)
                            <button type="button" onclick="kurang_baby_quad_1()" class="btn1 btn-decrement2">-</button>
                                <input type="text" id="quantity_baby_quad_1" name="quantity_baby" class="btn-input-jemaah" value="0" readonly>
                            <button type="button" onclick="tambah_baby_quad_1()" class="btn1 btn-increment2">+</button>
                            </p>
                        </div> 
                        <div id="btn_total_jamaah_3">
                            Pilih Jumlah Jamaah<br><br>
                            <p>Jumlah Jamaah Dewasa
                            <button type="button" onclick="kurang_adult_quad_2()" class="btn1 btn-decrement">-</button>
                                <input type="text" id="quantity_quad_2" name="quantity_adult" class="btn-input-jemaah" value="1" readonly>
                            <button type="button" onclick="tambah_adult_quad_2()" class="btn1 btn-increment">+</button>
                            </p><br>
                            <p>Jumlah Anak(2 - 5 Tahun)
                            <button type="button" onclick="kurang_child_quad_2()" class="btn1 btn-decrement1">-</button>
                                <input type="text" id="quantity_child_quad_2" name="quantity_child" class="btn-input-jemaah" value="0" readonly>
                            <button type="button" onclick="tambah_child_quad_2()" class="btn1 btn-increment1">+</button>
                            </p><br>

                            <p>Jumlah Bayi ( dibawah 2 Tahun)
                            <button type="button" onclick="kurang_baby_quad_2()" class="btn1 btn-decrement2">-</button>
                                <input type="text" id="quantity_baby_quad_2" name="quantity_baby" class="btn-input-jemaah" value="0" readonly>
                            <button type="button" onclick="tambah_baby_quad_2()" class="btn1 btn-increment2">+</button>
                            </p>
                        </div> 
                        <div id="btn_total_jamaah_4">
                            Pilih Jumlah Jamaah<br><br>
                            <p>Jumlah Jamaah Dewasa
                            <button type="button" onclick="kurang_adult_quad_3()" class="btn1 btn-decrement">-</button>
                                <input type="text" id="quantity_quad_3" name="quantity_adult" class="btn-input-jemaah" value="1" readonly>
                            <button type="button" onclick="tambah_adult_quad_3()" class="btn1 btn-increment">+</button>
                            </p><br>
                            <p>Jumlah Anak(2 - 5 Tahun)
                            <button type="button" onclick="kurang_child_quad_3()" class="btn1 btn-decrement1">-</button>
                                <input type="text" id="quantity_child_quad_3" name="quantity_child" class="btn-input-jemaah" value="0" readonly>
                            <button type="button" onclick="tambah_child_quad_3()" class="btn1 btn-increment1">+</button>
                            </p><br>

                            <p>Jumlah Bayi ( dibawah 2 Tahun)
                            <button type="button" onclick="kurang_baby_quad_3()" class="btn1 btn-decrement2">-</button>
                                <input type="text" id="quantity_baby_quad_3" name="quantity_baby" class="btn-input-jemaah" value="0" readonly>
                            <button type="button" onclick="tambah_baby_quad_3()" class="btn1 btn-increment2">+</button>
                            </p>
                        </div> 
                        <div id="btn_total_jamaah_5">
                            Pilih Jumlah Jamaah<br><br>
                            <p>Jumlah Jamaah Dewasa
                            <button type="button" onclick="kurang_adult_quad_4()" class="btn1 btn-decrement">-</button>
                                <input type="text" id="quantity_quad_4" name="quantity_adult" class="btn-input-jemaah" value="1" readonly>
                            <button type="button" onclick="tambah_adult_quad_4()" class="btn1 btn-increment">+</button>
                            </p><br>
                            <p>Jumlah Anak(2 - 5 Tahun)
                            <button type="button" onclick="kurang_child_quad_4()" class="btn1 btn-decrement1">-</button>
                                <input type="text" id="quantity_child_quad_4" name="quantity_child" class="btn-input-jemaah" value="0" readonly>
                            <button type="button" onclick="tambah_child_quad_4()" class="btn1 btn-increment1">+</button>
                            </p><br>

                            <p>Jumlah Bayi ( dibawah 2 Tahun)
                            <button type="button" onclick="kurang_baby_quad_4()" class="btn1 btn-decrement2">-</button>
                                <input type="text" id="quantity_baby_quad_4" name="quantity_baby" class="btn-input-jemaah" value="0" readonly>
                            <button type="button" onclick="tambah_baby_quad_4()" class="btn1 btn-increment2">+</button>
                            </p>
                        </div> 
                        <div id="btn_total_jamaah_6">
                            Pilih Jumlah Jamaah<br><br>
                            <p>Jumlah Jamaah Dewasa
                            <button type="button" onclick="kurang_adult_quad_5()" class="btn1 btn-decrement">-</button>
                                <input type="text" id="quantity_quad_5" name="quantity_adult" class="btn-input-jemaah" value="1" readonly>
                            <button type="button" onclick="tambah_adult_quad_5()" class="btn1 btn-increment">+</button>
                            </p><br>
                            <p>Jumlah Anak(2 - 5 Tahun)
                            <button type="button" onclick="kurang_child_quad_5()" class="btn1 btn-decrement1">-</button>
                                <input type="text" id="quantity_child_quad_5" name="quantity_child" class="btn-input-jemaah" value="0" readonly>
                            <button type="button" onclick="tambah_child_quad_5()" class="btn1 btn-increment1">+</button>
                            </p><br>

                            <p>Jumlah Bayi ( dibawah 2 Tahun)
                            <button type="button" onclick="kurang_baby_quad_5()" class="btn1 btn-decrement2">-</button>
                                <input type="text" id="quantity_baby_quad_5" name="quantity_baby" class="btn-input-jemaah" value="0" readonly>
                            <button type="button" onclick="tambah_baby_quad_5()" class="btn1 btn-increment2">+</button>
                            </p>
                        </div> 
                        <div id="btn_total_jamaah_7">
                            Pilih Jumlah Jamaah<br><br>
                            <p>Jumlah Jamaah Dewasa
                            <button type="button" onclick="kurang_adult_quad_6()" class="btn1 btn-decrement">-</button>
                                <input type="text" id="quantity_quad_6" name="quantity_adult" class="btn-input-jemaah" value="1" readonly>
                            <button type="button" onclick="tambah_adult_quad_6()" class="btn1 btn-increment">+</button>
                            </p><br>
                            <p>Jumlah Anak(2 - 5 Tahun)
                            <button type="button" onclick="kurang_child_quad_6()" class="btn1 btn-decrement1">-</button>
                                <input type="text" id="quantity_child_quad_6" name="quantity_child" class="btn-input-jemaah" value="0" readonly>
                            <button type="button" onclick="tambah_child_quad_6()" class="btn1 btn-increment1">+</button>
                            </p><br>

                            <p>Jumlah Bayi ( dibawah 2 Tahun)
                            <button type="button" onclick="kurang_baby_quad_6()" class="btn1 btn-decrement2">-</button>
                                <input type="text" id="quantity_baby_quad_6" name="quantity_baby" class="btn-input-jemaah" value="0" readonly>
                            <button type="button" onclick="tambah_baby_quad_6()" class="btn1 btn-increment2">+</button>
                            </p>
                        </div> 
                        <div id="btn_total_jamaah_8">
                            Pilih Jumlah Jamaah<br><br>
                            <p>Jumlah Jamaah Dewasa
                            <button type="button" onclick="kurang_adult_quad_7()" class="btn1 btn-decrement">-</button>
                                <input type="text" id="quantity_quad_7" name="quantity_adult" class="btn-input-jemaah" value="1" readonly>
                            <button type="button" onclick="tambah_adult_quad_7()" class="btn1 btn-increment">+</button>
                            </p><br>
                            <p>Jumlah Anak(2 - 5 Tahun)
                            <button type="button" onclick="kurang_child_quad_7()" class="btn1 btn-decrement1">-</button>
                                <input type="text" id="quantity_child_quad_7" name="quantity_child" class="btn-input-jemaah" value="0" readonly>
                            <button type="button" onclick="tambah_child_quad_7()" class="btn1 btn-increment1">+</button>
                            </p><br>

                            <p>Jumlah Bayi ( dibawah 2 Tahun)
                            <button type="button" onclick="kurang_baby_quad_7()" class="btn1 btn-decrement2">-</button>
                                <input type="text" id="quantity_baby_quad_7" name="quantity_baby" class="btn-input-jemaah" value="0" readonly>
                            <button type="button" onclick="tambah_baby_quad_7()" class="btn1 btn-increment2">+</button>
                            </p>
                        </div> 
                        <div id="btn_total_jamaah_9">
                            Pilih Jumlah Jamaah<br><br>
                            <p>Jumlah Jamaah Dewasa
                            <button type="button" onclick="kurang_adult_quad_8()" class="btn1 btn-decrement">-</button>
                                <input type="text" id="quantity_quad_8" name="quantity_adult" class="btn-input-jemaah" value="1" readonly>
                            <button type="button" onclick="tambah_adult_quad_8()" class="btn1 btn-increment">+</button>
                            </p><br>
                            <p>Jumlah Anak(2 - 5 Tahun)
                            <button type="button" onclick="kurang_child_quad_8()" class="btn1 btn-decrement1">-</button>
                                <input type="text" id="quantity_child_quad_8" name="quantity_child" class="btn-input-jemaah" value="0" readonly>
                            <button type="button" onclick="tambah_child_quad_8()" class="btn1 btn-increment1">+</button>
                            </p><br>

                            <p>Jumlah Bayi ( dibawah 2 Tahun)
                            <button type="button" onclick="kurang_baby_quad_8()" class="btn1 btn-decrement2">-</button>
                                <input type="text" id="quantity_baby_quad_8" name="quantity_baby" class="btn-input-jemaah" value="0" readonly>
                            <button type="button" onclick="tambah_baby_quad_8()" class="btn1 btn-increment2">+</button>
                            </p>
                        </div> 
                        <div id="btn_total_jamaah_10">
                            Pilih Jumlah Jamaah<br><br>
                            <p>Jumlah Jamaah Dewasa
                            <button type="button" onclick="kurang_adult_quad_9()" class="btn1 btn-decrement">-</button>
                                <input type="text" id="quantity_quad_9" name="quantity_adult" class="btn-input-jemaah" value="1" readonly>
                            <button type="button" onclick="tambah_adult_quad_9()" class="btn1 btn-increment">+</button>
                            </p><br>
                            <p>Jumlah Anak(2 - 5 Tahun)
                            <button type="button" onclick="kurang_child_quad_9()" class="btn1 btn-decrement1">-</button>
                                <input type="text" id="quantity_child_quad_9" name="quantity_child" class="btn-input-jemaah" value="0" readonly>
                            <button type="button" onclick="tambah_child_quad_9()" class="btn1 btn-increment1">+</button>
                            </p><br>

                            <p>Jumlah Bayi ( dibawah 2 Tahun)
                            <button type="button" onclick="kurang_baby_quad_9()" class="btn1 btn-decrement2">-</button>
                                <input type="text" id="quantity_baby_quad_9" name="quantity_baby" class="btn-input-jemaah" value="0" readonly>
                            <button type="button" onclick="tambah_baby_quad_9()" class="btn1 btn-increment2">+</button>
                            </p>
                        </div> 
                        <br><button style="width:310px;height:40px;background-color:#15baef">Pesan Paket</button>
                    </form>
                </div>
            </div>
            <div class="data_pesan_paket_triple" id="data_pesan_paket_triple">
                <div class="card_pesan_paket">
                    <form action="/product/proses_save_buy_packet" method="post">
                        @csrf
                        <input type="hidden" name="id_user" value="19">
                        <input type="hidden" name="id_itineries" value="<?= $v_packet->id_itineries ?>">
                        <input type="hidden" class="total_price_packet" id="price_total_jamaah_triple" name="price_total" value="<?= $harga_paket_triple ?>" readonly>
                        <input type="hidden" name="dp" value="<?= $v_packet->dp ?>">
                        <input type="hidden" name="maskapai_name" value="<?= $v_packet->maskapai_name ?>">
                        <input type="hidden" name="type_room" value="Tipe Kamar triple">
                        <h3 style="color:orange" id="moneyDisplay_triple">Rp <?= number_format($harga_paket_triple,2,',','.') ?></h3>
                        <br>
                        <p>Quad - Sekamar Ber-4: Rp <?= number_format($harga_quad,2,',','.') ?></p>
                        <p>Triple - Sekamar Ber-3: Rp <?= number_format($harga_triple,2,',','.') ?></p>
                        <p>Double - Sekamar Ber-2: Rp <?= number_format($harga_double,2,',','.') ?></p><br>
                        <p style="color: green;">Amankan seat dengan uang muka Rp. <?= number_format($v_packet->dp,2,',','.') ?> /Jamaah. Transaksi aman, ibadah nyaman. Pembayaran hanya diproses apabila tiket pesawat telah confirm.</p>
                        <br><hr>

                        Berangkat Dari<br><br>
                        <div class="grid-container">
                            <div class="grid-item pilih_lokasi_1">
                                <button class="btn-berangkat-dari" style="" type="button" id="plane_button_triple" onclick="plane_button_data_triple_1()"><?= $departure_plane ?></button>
                            </div>
                            <?php for ($i = 1; $i <= 9; $i++) : ?>
                                <?php $ticketId = "id_ticket_" . $i; ?>
                                <?php if ($v_packet->$ticketId !== null) : ?>
                                    <div class="grid-item pilih_lokasi_<?= $i ?>">
                                        <button class="btn-berangkat-dari" type="button" id="plane_button_triple_<?= $i + 1 ?>" onclick="plane_button_data_triple_<?= $i + 1 ?>()">
                                            <?= ${"departure_plane_" . $i + 1} ?>
                                        </button>
                                    </div>
                                <?php endif; ?>
                            <?php endfor; ?>
                        </div>

                        <br><br><hr>

                        <div id="btn_total_jamaah_triple_1">
                            <p>Jumlah Jamaah Dewasa
                            <button type="button" onclick="kurang_adult_triple()" class="btn1 btn-decrement">-</button>
                                <input type="text" id="quantity_triple" class="btn-input-jemaah" value="1" readonly>
                            <button type="button" onclick="tambah_adult_triple()" class="btn1 btn-increment">+</button>
                            </p><br>
                            <p>Jumlah Anak(2 - 5 Tahun)
                            <button type="button" onclick="kurang_child_triple()" class="btn1 btn-decrement1">-</button>
                                <input type="text" id="quantity_child_triple" class="btn-input-jemaah" value="0" readonly>
                            <button type="button" onclick="tambah_child_triple()" class="btn1 btn-increment1">+</button>
                            </p><br>

                            <p>Jumlah Bayi (dibawah 2 Tahun)
                            <button type="button" onclick="kurang_baby_triple()" class="btn1 btn-decrement2">-</button>
                                <input type="text" id="quantity_baby_triple" class="btn-input-jemaah" value="0" readonly>
                            <button type="button" onclick="tambah_baby_triple()" class="btn1 btn-increment2">+</button>
                            </p>
                        </div>

                        <div id="btn_total_jamaah_triple_2">
                            <p>Jumlah Jamaah Dewasa
                            <button type="button" onclick="kurang_adult_triple_1()" class="btn1 btn-decrement">-</button>
                                <input type="text" id="quantity_triple_1" class="btn-input-jemaah" value="1" readonly>
                            <button type="button" onclick="tambah_adult_triple_1()" class="btn1 btn-increment">+</button>
                            </p><br>
                            <p>Jumlah Anak(2 - 5 Tahun)
                            <button type="button" onclick="kurang_child_triple_1()" class="btn1 btn-decrement1">-</button>
                                <input type="text" id="quantity_child_triple_1" class="btn-input-jemaah" value="0" readonly>
                            <button type="button" onclick="tambah_child_triple_1()" class="btn1 btn-increment1">+</button>
                            </p><br>

                            <p>Jumlah Bayi (dibawah 2 Tahun)
                            <button type="button" onclick="kurang_baby_triple_1()" class="btn1 btn-decrement2">-</button>
                                <input type="text" id="quantity_baby_triple_1" class="btn-input-jemaah" value="0" readonly>
                            <button type="button" onclick="tambah_baby_triple_1()" class="btn1 btn-increment2">+</button>
                            </p>
                        </div>

                        <div id="btn_total_jamaah_triple_3">
                            <p>Jumlah Jamaah Dewasa
                            <button type="button" onclick="kurang_adult_triple_2()" class="btn1 btn-decrement">-</button>
                                <input type="text" id="quantity_triple_2" class="btn-input-jemaah" value="1" readonly>
                            <button type="button" onclick="tambah_adult_triple_2()" class="btn1 btn-increment">+</button>
                            </p><br>
                            <p>Jumlah Anak(2 - 5 Tahun)
                            <button type="button" onclick="kurang_child_triple_2()" class="btn1 btn-decrement1">-</button>
                                <input type="text" id="quantity_child_triple_2" class="btn-input-jemaah" value="0" readonly>
                            <button type="button" onclick="tambah_child_triple_2()" class="btn1 btn-increment1">+</button>
                            </p><br>

                            <p>Jumlah Bayi (dibawah 2 Tahun)
                            <button type="button" onclick="kurang_baby_triple_2()" class="btn1 btn-decrement2">-</button>
                                <input type="text" id="quantity_baby_triple_2" class="btn-input-jemaah" value="0" readonly>
                            <button type="button" onclick="tambah_baby_triple_2()" class="btn1 btn-increment2">+</button>
                            </p>
                        </div>

                        <div id="btn_total_jamaah_triple_4">
                            <p>Jumlah Jamaah Dewasa
                            <button type="button" onclick="kurang_adult_triple_3()" class="btn1 btn-decrement">-</button>
                                <input type="text" id="quantity_triple_3" class="btn-input-jemaah" value="1" readonly>
                            <button type="button" onclick="tambah_adult_triple_3()" class="btn1 btn-increment">+</button>
                            </p><br>
                            <p>Jumlah Anak(2 - 5 Tahun)
                            <button type="button" onclick="kurang_child_triple_3()" class="btn1 btn-decrement1">-</button>
                                <input type="text" id="quantity_child_triple_3" class="btn-input-jemaah" value="0" readonly>
                            <button type="button" onclick="tambah_child_triple_3()" class="btn1 btn-increment1">+</button>
                            </p><br>

                            <p>Jumlah Bayi (dibawah 2 Tahun)
                            <button type="button" onclick="kurang_baby_triple_3()" class="btn1 btn-decrement2">-</button>
                                <input type="text" id="quantity_baby_triple_3" class="btn-input-jemaah" value="0" readonly>
                            <button type="button" onclick="tambah_baby_triple_3()" class="btn1 btn-increment2">+</button>
                            </p>
                        </div>

                        <div id="btn_total_jamaah_triple_5">
                            <p>Jumlah Jamaah Dewasa
                            <button type="button" onclick="kurang_adult_triple_4()" class="btn1 btn-decrement">-</button>
                                <input type="text" id="quantity_triple_4" class="btn-input-jemaah" value="1" readonly>
                            <button type="button" onclick="tambah_adult_triple_4()" class="btn1 btn-increment">+</button>
                            </p><br>
                            <p>Jumlah Anak(2 - 5 Tahun)
                            <button type="button" onclick="kurang_child_triple_4()" class="btn1 btn-decrement1">-</button>
                                <input type="text" id="quantity_child_triple_4" class="btn-input-jemaah" value="0" readonly>
                            <button type="button" onclick="tambah_child_triple_4()" class="btn1 btn-increment1">+</button>
                            </p><br>

                            <p>Jumlah Bayi (dibawah 2 Tahun)
                            <button type="button" onclick="kurang_baby_triple_4()" class="btn1 btn-decrement2">-</button>
                                <input type="text" id="quantity_baby_triple_4" class="btn-input-jemaah" value="0" readonly>
                            <button type="button" onclick="tambah_baby_triple_4()" class="btn1 btn-increment2">+</button>
                            </p>
                        </div>

                        <div id="btn_total_jamaah_triple_6">
                            <p>Jumlah Jamaah Dewasa
                            <button type="button" onclick="kurang_adult_triple_5()" class="btn1 btn-decrement">-</button>
                                <input type="text" id="quantity_triple_5" class="btn-input-jemaah" value="1" readonly>
                            <button type="button" onclick="tambah_adult_triple_5()" class="btn1 btn-increment">+</button>
                            </p><br>
                            <p>Jumlah Anak(2 - 5 Tahun)
                            <button type="button" onclick="kurang_child_triple_5()" class="btn1 btn-decrement1">-</button>
                                <input type="text" id="quantity_child_triple_5" class="btn-input-jemaah" value="0" readonly>
                            <button type="button" onclick="tambah_child_triple_5()" class="btn1 btn-increment1">+</button>
                            </p><br>

                            <p>Jumlah Bayi (dibawah 2 Tahun)
                            <button type="button" onclick="kurang_baby_triple_5()" class="btn1 btn-decrement2">-</button>
                                <input type="text" id="quantity_baby_triple_5" class="btn-input-jemaah" value="0" readonly>
                            <button type="button" onclick="tambah_baby_triple_5()" class="btn1 btn-increment2">+</button>
                            </p>
                        </div>

                        <div id="btn_total_jamaah_triple_7">
                            <p>Jumlah Jamaah Dewasa
                            <button type="button" onclick="kurang_adult_triple_6()" class="btn1 btn-decrement">-</button>
                                <input type="text" id="quantity_triple_6" class="btn-input-jemaah" value="1" readonly>
                            <button type="button" onclick="tambah_adult_triple_6()" class="btn1 btn-increment">+</button>
                            </p><br>
                            <p>Jumlah Anak(2 - 5 Tahun)
                            <button type="button" onclick="kurang_child_triple_6()" class="btn1 btn-decrement1">-</button>
                                <input type="text" id="quantity_child_triple_6" class="btn-input-jemaah" value="0" readonly>
                            <button type="button" onclick="tambah_child_triple_6()" class="btn1 btn-increment1">+</button>
                            </p><br>

                            <p>Jumlah Bayi (dibawah 2 Tahun)
                            <button type="button" onclick="kurang_baby_triple_6()" class="btn1 btn-decrement2">-</button>
                                <input type="text" id="quantity_baby_triple_6" class="btn-input-jemaah" value="0" readonly>
                            <button type="button" onclick="tambah_baby_triple_6()" class="btn1 btn-increment2">+</button>
                            </p>
                        </div>

                        <div id="btn_total_jamaah_triple_8">
                            <p>Jumlah Jamaah Dewasa
                            <button type="button" onclick="kurang_adult_triple_7()" class="btn1 btn-decrement">-</button>
                                <input type="text" id="quantity_triple_7" class="btn-input-jemaah" value="1" readonly>
                            <button type="button" onclick="tambah_adult_triple_7()" class="btn1 btn-increment">+</button>
                            </p><br>
                            <p>Jumlah Anak(2 - 5 Tahun)
                            <button type="button" onclick="kurang_child_triple_7()" class="btn1 btn-decrement1">-</button>
                                <input type="text" id="quantity_child_triple_7" class="btn-input-jemaah" value="0" readonly>
                            <button type="button" onclick="tambah_child_triple_7()" class="btn1 btn-increment1">+</button>
                            </p><br>

                            <p>Jumlah Bayi (dibawah 2 Tahun)
                            <button type="button" onclick="kurang_baby_triple_7()" class="btn1 btn-decrement2">-</button>
                                <input type="text" id="quantity_baby_triple_7" class="btn-input-jemaah" value="0" readonly>
                            <button type="button" onclick="tambah_baby_triple_7()" class="btn1 btn-increment2">+</button>
                            </p>
                        </div>

                        <div id="btn_total_jamaah_triple_9">
                            <p>Jumlah Jamaah Dewasa
                            <button type="button" onclick="kurang_adult_triple_8()" class="btn1 btn-decrement">-</button>
                                <input type="text" id="quantity_triple_8" class="btn-input-jemaah" value="1" readonly>
                            <button type="button" onclick="tambah_adult_triple_8()" class="btn1 btn-increment">+</button>
                            </p><br>
                            <p>Jumlah Anak(2 - 5 Tahun)
                            <button type="button" onclick="kurang_child_triple_8()" class="btn1 btn-decrement1">-</button>
                                <input type="text" id="quantity_child_triple_8" class="btn-input-jemaah" value="0" readonly>
                            <button type="button" onclick="tambah_child_triple_8()" class="btn1 btn-increment1">+</button>
                            </p><br>

                            <p>Jumlah Bayi (dibawah 2 Tahun)
                            <button type="button" onclick="kurang_baby_triple_8()" class="btn1 btn-decrement2">-</button>
                                <input type="text" id="quantity_baby_triple_8" class="btn-input-jemaah" value="0" readonly>
                            <button type="button" onclick="tambah_baby_triple_8()" class="btn1 btn-increment2">+</button>
                            </p>
                        </div>

                        <div id="btn_total_jamaah_triple_10">
                            <p>Jumlah Jamaah Dewasa
                            <button type="button" onclick="kurang_adult_triple_9()" class="btn1 btn-decrement">-</button>
                                <input type="text" id="quantity_triple_9" class="btn-input-jemaah" value="1" readonly>
                            <button type="button" onclick="tambah_adult_triple_9()" class="btn1 btn-increment">+</button>
                            </p><br>
                            <p>Jumlah Anak(2 - 5 Tahun)
                            <button type="button" onclick="kurang_child_triple_9()" class="btn1 btn-decrement1">-</button>
                                <input type="text" id="quantity_child_triple_9" class="btn-input-jemaah" value="0" readonly>
                            <button type="button" onclick="tambah_child_triple_9()" class="btn1 btn-increment1">+</button>
                            </p><br>

                            <p>Jumlah Bayi (dibawah 2 Tahun)
                            <button type="button" onclick="kurang_baby_triple_9()" class="btn1 btn-decrement2">-</button>
                                <input type="text" id="quantity_baby_triple_9" class="btn-input-jemaah" value="0" readonly>
                            <button type="button" onclick="tambah_baby_triple_9()" class="btn1 btn-increment2">+</button>
                            </p>
                        </div>
                           
                        <br><button style="width:310px;height:40px;background-color:#15baef">Pesan Paket</button>
                    </form>
                </div>
            </div>
            <div class="data_pesan_paket_double" id="data_pesan_paket_double">
                <div class="card_pesan_paket">
                    <form action="/product/proses_save_buy_packet" method="post">
                        @csrf
                        <input type="hidden" name="id_user" value="19">
                        <input type="hidden" name="id_itineries" value="<?= $v_packet->id_itineries ?>">
                        <input type="hidden" class="total_price_packet" id="price_total_jamaah_double" name="price_total" value="<?= $harga_paket_double ?>" readonly>
                        <input type="hidden" name="dp" value="<?= $v_packet->dp ?>">
                        <input type="hidden" name="maskapai_name" value="<?= $v_packet->maskapai_name ?>">
                        <input type="hidden" name="type_room" value="Tipe Kamar Double">
                        <h3 style="color:orange" id="moneyDisplay_double">Rp <?= number_format($harga_paket_double,2,',','.') ?></h3>
                        <br>
                        <p>Quad - Sekamar Ber-4: Rp <?= number_format($harga_quad,2,',','.') ?></p>
                        <p>Triple - Sekamar Ber-3: Rp <?= number_format($harga_triple,2,',','.') ?></p>
                        <p>Double - Sekamar Ber-2: Rp <?= number_format($harga_double,2,',','.') ?></p><br>
                        <p style="color: green;">Amankan seat dengan uang muka Rp. <?= number_format($v_packet->dp,2,',','.') ?> /Jamaah. Transaksi aman, ibadah nyaman. Pembayaran hanya diproses apabila tiket pesawat telah confirm.</p>
                        <br><hr><br>

                        <div class="btn_total_jamaah">
                            <p>Jumlah Jamaah Dewasa
                            <button type="button" onclick="kurang_adult_double()" class="btn1 btn-decrement">-</button>
                                <input type="text" id="quantity_double" class="btn-input-jemaah" value="1" readonly>
                            <button type="button" onclick="tambah_adult_double()" class="btn1 btn-increment">+</button>
                            </p><br>
                            <p>Jumlah Anak(2 - 5 Tahun)
                            <button type="button" onclick="kurang_child_double()" class="btn1 btn-decrement1">-</button>
                                <input type="text" id="quantity_child_double" class="btn-input-jemaah" value="0" readonly>
                            <button type="button" onclick="tambah_child_double()" class="btn1 btn-increment1">+</button>
                            </p><br>

                            <p>Jumlah Bayi ( dibawah 2 Tahun)
                            <button type="button" onclick="kurang_baby_double()" class="btn1 btn-decrement2">-</button>
                                <input type="text" id="quantity_baby_double" class="btn-input-jemaah" value="0" readonly>
                            <button type="button" onclick="tambah_baby_double()" class="btn1 btn-increment2">+</button>
                            </p>
                        </div><br><hr><br>

                        <button type="button" id="plane_button_triple"><?= $departure_plane ?></button>
                        <?php if($v_packet->id_ticket_1 == null){ ?>

                        <?php }else{ ?>
                            <button type="button" id="plane_button__triple_2"><?= $departure_plane_2 ?></button>
                        <?php } ?>

                        <?php if($v_packet->id_ticket_2 == null){ ?>

                        <?php }else{ ?>
                            <button type="button" id="plane_button_triple_3"><?= $departure_plane_3 ?></button>
                        <?php } ?>

                        <?php if($v_packet->id_ticket_3 == null){ ?>

                        <?php }else{ ?>
                            <button type="button" id="plane_button_triple_4"><?= $departure_plane_4 ?></button>
                        <?php } ?>

                        <?php if($v_packet->id_ticket_4 == null){ ?>

                        <?php }else{ ?>
                            <button type="button" id="plane_button_triple_5"><?= $departure_plane_5 ?></button>
                        <?php } ?>

                        <?php if($v_packet->id_ticket_5 == null){ ?>

                        <?php }else{ ?>
                            <button type="button" id="plane_button_triple_6"><?= $departure_plane_6 ?></button>
                        <?php } ?>

                        <?php if($v_packet->id_ticket_6 == null){ ?>

                        <?php }else{ ?>
                            <button type="button" id="plane_button_triple_7"><?= $departure_plane_7 ?></button>
                        <?php } ?>

                        <?php if($v_packet->id_ticket_7 == null){ ?>

                        <?php }else{ ?>
                            <button type="button" id="plane_button_triple_8"><?= $departure_plane_8 ?></button>
                        <?php } ?>

                        <?php if($v_packet->id_ticket_8 == null){ ?>

                        <?php }else{ ?>
                            <button type="button" id="plane_button_triple_9"><?= $departure_plane_9 ?></button>
                        <?php } ?>

                        <button style="width:310px;height:40px;background-color:#15baef">Pesan Paket</button>
                    </form>
                </div>
            </div>
        </div>
        <div class="card-container">
            <div class="card3">
                <h3>Travel Umroh</h3><br><hr><br>
                <div class="row_data_travel">
                    <div class="col_data_travel">
                        <img src="{!! asset('assets/image_travel/'.$v_packet->image_travel) !!}" class="logo_data_paket">
                    </div>
                    <div class="col_data_travel">
                        <h4><?= $v_packet->employee_name ?></h4>
                    </div>
                </div>
            </div>
            <div class="card4">
                
            </div>
        </div>
        <div class="card-container">
            <div class="card3">
                <h3>Penilaian Travel</h3><br><hr><br>
            </div>
            <div class="card4">
                
            </div>
        </div>
        <div class="card-container">

            <?php if($v_packet->in_facilitas != null && $v_packet->in_facilitas_1 == null && $v_packet->in_facilitas_2 == null && $v_packet->in_facilitas_3 == null && $v_packet->in_facilitas_4 == null && $v_packet->in_facilitas_5 == null && $v_packet->in_facilitas_6 == null && $v_packet->in_facilitas_7 == null && $v_packet->in_facilitas_8 == null && $v_packet->in_facilitas_9 == null && $v_packet->out_facilitas != null && $v_packet->out_facilitas_1 == null && $v_packet->out_facilitas_2 == null && $v_packet->out_facilitas_3 == null && $v_packet->out_facilitas_4 == null && $v_packet->out_facilitas_5 == null && $v_packet->out_facilitas_6 == null && $v_packet->out_facilitas_7 == null && $v_packet->out_facilitas_8 == null && $v_packet->out_facilitas_9 == null){ ?>
                <div class="card1_1">
                    <h3>Fasilitas</h3><br>
                    <div class="row_product1">
                        <div class="col_product1">
                            <h4>Termasuk</h4><br>
                                <p>
                                    - <?= $v_packet->in_facilitas ?>
                                </p>
                        </div>
                        <div class="col_product1">
                            <h4>Tidak Termasuk</h4><br>
                            <p>
                            - <?= $v_packet->out_facilitas ?>
                            </p>
                        </div>
                    </div>
                </div>
            <?php }else if($v_packet->in_facilitas != null && $v_packet->in_facilitas_1 == null && $v_packet->in_facilitas_2 == null && $v_packet->in_facilitas_3 == null && $v_packet->in_facilitas_4 == null && $v_packet->in_facilitas_5 == null && $v_packet->in_facilitas_6 == null && $v_packet->in_facilitas_7 == null && $v_packet->in_facilitas_8 == null && $v_packet->in_facilitas_9 == null && $v_packet->out_facilitas != null && $v_packet->out_facilitas_1 != null && $v_packet->out_facilitas_2 == null && $v_packet->out_facilitas_3 == null && $v_packet->out_facilitas_4 == null && $v_packet->out_facilitas_5 == null && $v_packet->out_facilitas_6 == null && $v_packet->out_facilitas_7 == null && $v_packet->out_facilitas_8 == null && $v_packet->out_facilitas_9 == null){ ?>
                <div class="card1_1">
                    <h3>Fasilitas</h3><br>
                    <div class="row_product1">
                        <div class="col_product1">
                            <h4>Termasuk</h4><br>
                                <p>
                                    - <?= $v_packet->in_facilitas ?>
                                </p>
                        </div>
                        <div class="col_product1">
                            <h4>Tidak Termasuk</h4><br>
                            <p>
                            - <?= $v_packet->out_facilitas ?>
                            </p><br>
                            <p>
                            - <?= $v_packet->out_facilitas_1 ?>
                            </p>
                        </div>
                    </div>
                </div> 
            <?php }else if($v_packet->in_facilitas != null && $v_packet->in_facilitas_1 == null && $v_packet->in_facilitas_2 == null && $v_packet->in_facilitas_3 == null && $v_packet->in_facilitas_4 == null && $v_packet->in_facilitas_5 == null && $v_packet->in_facilitas_6 == null && $v_packet->in_facilitas_7 == null && $v_packet->in_facilitas_8 == null && $v_packet->in_facilitas_9 == null && $v_packet->out_facilitas != null && $v_packet->out_facilitas_1 != null && $v_packet->out_facilitas_2 != null && $v_packet->out_facilitas_3 == null && $v_packet->out_facilitas_4 == null && $v_packet->out_facilitas_5 == null && $v_packet->out_facilitas_6 == null && $v_packet->out_facilitas_7 == null && $v_packet->out_facilitas_8 == null && $v_packet->out_facilitas_9 == null){ ?>
                <div class="card1_1">
                    <h3>Fasilitas</h3><br>
                    <div class="row_product1">
                        <div class="col_product1">
                            <h4>Termasuk</h4><br>
                                <p>
                                    - <?= $v_packet->in_facilitas ?>
                                </p>
                        </div>
                        <div class="col_product1">
                            <h4>Tidak Termasuk</h4><br>
                            <p>
                            - <?= $v_packet->out_facilitas ?>
                            </p><br>
                            <p>
                            - <?= $v_packet->out_facilitas_1 ?>
                            </p><br>
                            <p>
                            - <?= $v_packet->out_facilitas_2 ?>
                            </p>
                        </div>
                    </div>
                </div> 
            <?php }else if($v_packet->in_facilitas != null && $v_packet->in_facilitas_1 != null && $v_packet->in_facilitas_2 == null && $v_packet->in_facilitas_3 == null && $v_packet->in_facilitas_4 == null && $v_packet->in_facilitas_5 == null && $v_packet->in_facilitas_6 == null && $v_packet->in_facilitas_7 == null && $v_packet->in_facilitas_8 == null && $v_packet->in_facilitas_9 == null && $v_packet->out_facilitas != null && $v_packet->out_facilitas_1 == null && $v_packet->out_facilitas_2 == null && $v_packet->out_facilitas_3 == null && $v_packet->out_facilitas_4 == null && $v_packet->out_facilitas_5 == null && $v_packet->out_facilitas_6 == null && $v_packet->out_facilitas_7 == null && $v_packet->out_facilitas_8 == null && $v_packet->out_facilitas_9 == null){ ?>
                <div class="card1_2">
                    <h3>Fasilitas</h3><br>
                    <div class="row_product1">
                        <div class="col_product1">
                            <h4>Termasuk</h4><br>
                                <p>
                                    - <?= $v_packet->in_facilitas ?>
                                </p><br>
                                <p>
                                    - <?= $v_packet->in_facilitas_1 ?>
                                </p>
                        </div>
                        <div class="col_product1">
                            <h4>Tidak Termasuk</h4><br>
                            <p>
                            - <?= $v_packet->out_facilitas ?>
                        </div>
                    </div>
                </div>
            <?php }else if($v_packet->in_facilitas != null && $v_packet->in_facilitas_1 == null && $v_packet->in_facilitas_2 == null && $v_packet->in_facilitas_3 == null && $v_packet->in_facilitas_4 == null && $v_packet->in_facilitas_5 == null && $v_packet->in_facilitas_6 == null && $v_packet->in_facilitas_7 == null && $v_packet->in_facilitas_8 == null && $v_packet->in_facilitas_9 == null && $v_packet->out_facilitas != null && $v_packet->out_facilitas_1 != null && $v_packet->out_facilitas_2 != null && $v_packet->out_facilitas_3 != null && $v_packet->out_facilitas_4 == null && $v_packet->out_facilitas_5 == null && $v_packet->out_facilitas_6 == null && $v_packet->out_facilitas_7 == null && $v_packet->out_facilitas_8 == null && $v_packet->out_facilitas_9 == null){ ?>
                <div class="card1_2">
                    <h3>Fasilitas</h3><br>
                    <div class="row_product1">
                        <div class="col_product1">
                            <h4>Termasuk</h4><br>
                                <p>
                                    - <?= $v_packet->in_facilitas ?>
                                </p>
                        </div>
                        <div class="col_product1">
                            <h4>Tidak Termasuk</h4><br>
                            <p>
                            - <?= $v_packet->out_facilitas ?>
                            </p><br>
                            <p>
                            - <?= $v_packet->out_facilitas_1 ?>
                            </p><br>
                            <p>
                            - <?= $v_packet->out_facilitas_2 ?>
                            </p><br>
                            <p>
                            - <?= $v_packet->out_facilitas_3 ?>
                            </p>
                        </div>
                    </div>
                </div>
            <?php }else if($v_packet->in_facilitas != null && $v_packet->in_facilitas_1 != null && $v_packet->in_facilitas_2 == null && $v_packet->in_facilitas_3 == null && $v_packet->in_facilitas_4 == null && $v_packet->in_facilitas_5 == null && $v_packet->in_facilitas_6 == null && $v_packet->in_facilitas_7 == null && $v_packet->in_facilitas_8 == null && $v_packet->in_facilitas_9 == null && $v_packet->out_facilitas != null && $v_packet->out_facilitas_1 != null && $v_packet->out_facilitas_2 == null && $v_packet->out_facilitas_3 == null && $v_packet->out_facilitas_4 == null && $v_packet->out_facilitas_5 == null && $v_packet->out_facilitas_6 == null && $v_packet->out_facilitas_7 == null && $v_packet->out_facilitas_8 == null && $v_packet->out_facilitas_9 == null){ ?>
                <div class="card1_2">
                    <h3>Fasilitas</h3><br>
                    <div class="row_product1">
                        <div class="col_product1">
                            <h4>Termasuk</h4><br>
                                <p>
                                    - <?= $v_packet->in_facilitas ?>
                                </p><br>
                                <p>
                                    - <?= $v_packet->in_facilitas_1 ?>
                                </p>
                        </div>
                        <div class="col_product1">
                            <h4>Tidak Termasuk</h4><br>
                            <p>
                            - <?= $v_packet->out_facilitas ?>
                            </p><br>
                            <p>
                            - <?= $v_packet->out_facilitas_1 ?>
                            </p>
                        </div>
                    </div>
                </div> 
            <?php }else if($v_packet->in_facilitas != null && $v_packet->in_facilitas_1 != null && $v_packet->in_facilitas_2 == null && $v_packet->in_facilitas_3 == null && $v_packet->in_facilitas_4 == null && $v_packet->in_facilitas_5 == null && $v_packet->in_facilitas_6 == null && $v_packet->in_facilitas_7 == null && $v_packet->in_facilitas_8 == null && $v_packet->in_facilitas_9 == null && $v_packet->out_facilitas != null && $v_packet->out_facilitas_1 != null && $v_packet->out_facilitas_2 != null && $v_packet->out_facilitas_3 == null && $v_packet->out_facilitas_4 == null && $v_packet->out_facilitas_5 == null && $v_packet->out_facilitas_6 == null && $v_packet->out_facilitas_7 == null && $v_packet->out_facilitas_8 == null && $v_packet->out_facilitas_9 == null){ ?>
                <div class="card1_2">
                    <h3>Fasilitas</h3><br>
                    <div class="row_product1">
                        <div class="col_product1">
                            <h4>Termasuk</h4><br>
                                <p>
                                    - <?= $v_packet->in_facilitas ?>
                                </p><br>
                                <p>
                                    - <?= $v_packet->in_facilitas_1 ?>
                                </p>
                        </div>
                        <div class="col_product1">
                            <h4>Tidak Termasuk</h4><br>
                            <p>
                            - <?= $v_packet->out_facilitas ?>
                            </p><br>
                            <p>
                            - <?= $v_packet->out_facilitas_1 ?>
                            </p><br>
                            <p>
                            - <?= $v_packet->out_facilitas_2 ?>
                            </p>
                        </div>
                    </div>
                </div> 
            <?php }else if($v_packet->in_facilitas != null && $v_packet->in_facilitas_1 != null && $v_packet->in_facilitas_2 == null && $v_packet->in_facilitas_3 == null && $v_packet->in_facilitas_4 == null && $v_packet->in_facilitas_5 == null && $v_packet->in_facilitas_6 == null && $v_packet->in_facilitas_7 == null && $v_packet->in_facilitas_8 == null && $v_packet->in_facilitas_9 == null && $v_packet->out_facilitas != null && $v_packet->out_facilitas_1 != null && $v_packet->out_facilitas_2 != null && $v_packet->out_facilitas_3 != null && $v_packet->out_facilitas_4 == null && $v_packet->out_facilitas_5 == null && $v_packet->out_facilitas_6 == null && $v_packet->out_facilitas_7 == null && $v_packet->out_facilitas_8 == null && $v_packet->out_facilitas_9 == null){ ?>
                <div class="card1_2">
                    <h3>Fasilitas</h3><br>
                    <div class="row_product1">
                        <div class="col_product1">
                            <h4>Termasuk</h4><br>
                                <p>
                                    - <?= $v_packet->in_facilitas ?>
                                </p><br>
                                <p>
                                    - <?= $v_packet->in_facilitas_1 ?>
                                </p>
                        </div>
                        <div class="col_product1">
                            <h4>Tidak Termasuk</h4><br>
                            <p>
                            - <?= $v_packet->out_facilitas ?>
                            </p><br>
                            <p>
                            - <?= $v_packet->out_facilitas_1 ?>
                            </p><br>
                            <p>
                            - <?= $v_packet->out_facilitas_2 ?>
                            </p><br>
                            <p>
                            - <?= $v_packet->out_facilitas_3 ?>
                            </p>
                        </div>
                    </div>
                </div> 
            <?php }else if($v_packet->in_facilitas != null && $v_packet->in_facilitas_1 != null && $v_packet->in_facilitas_2 != null && $v_packet->in_facilitas_3 == null && $v_packet->in_facilitas_4 == null && $v_packet->in_facilitas_5 == null && $v_packet->in_facilitas_6 == null && $v_packet->in_facilitas_7 == null && $v_packet->in_facilitas_8 == null && $v_packet->in_facilitas_9 == null && $v_packet->out_facilitas != null && $v_packet->out_facilitas_1 == null && $v_packet->out_facilitas_2 == null && $v_packet->out_facilitas_3 == null && $v_packet->out_facilitas_4 == null && $v_packet->out_facilitas_5 == null && $v_packet->out_facilitas_6 == null && $v_packet->out_facilitas_7 == null && $v_packet->out_facilitas_8 == null && $v_packet->out_facilitas_9 == null){ ?>
                <div class="card1_3">
                    <h3>Fasilitas</h3><br>
                    <div class="row_product1">
                        <div class="col_product1">
                            <h4>Termasuk</h4><br>
                                <p>
                                    - <?= $v_packet->in_facilitas ?>
                                </p><br>
                                <p>
                                    - <?= $v_packet->in_facilitas_1 ?>
                                </p><br>
                                <p>
                                    - <?= $v_packet->in_facilitas_2 ?>
                                </p>
                        </div>
                        <div class="col_product1">
                            <h4>Tidak Termasuk</h4><br>
                            <p>
                            - <?= $v_packet->out_facilitas ?>
                            </p>
                        </div>
                    </div>
                </div>
            <?php }else if($v_packet->in_facilitas != null && $v_packet->in_facilitas_1 != null && $v_packet->in_facilitas_2 != null && $v_packet->in_facilitas_3 == null && $v_packet->in_facilitas_4 == null && $v_packet->in_facilitas_5 == null && $v_packet->in_facilitas_6 == null && $v_packet->in_facilitas_7 == null && $v_packet->in_facilitas_8 == null && $v_packet->in_facilitas_9 == null && $v_packet->out_facilitas != null && $v_packet->out_facilitas_1 != null && $v_packet->out_facilitas_2 == null && $v_packet->out_facilitas_3 == null && $v_packet->out_facilitas_4 == null && $v_packet->out_facilitas_5 == null && $v_packet->out_facilitas_6 == null && $v_packet->out_facilitas_7 == null && $v_packet->out_facilitas_8 == null && $v_packet->out_facilitas_9 == null){ ?>
                <div class="card1_3">
                    <h3>Fasilitas</h3><br>
                    <div class="row_product1">
                        <div class="col_product1">
                            <h4>Termasuk</h4><br>
                                <p>
                                    - <?= $v_packet->in_facilitas ?>
                                </p><br>
                                <p>
                                    - <?= $v_packet->in_facilitas_1 ?>
                                </p><br>
                                <p>
                                    - <?= $v_packet->in_facilitas_2 ?>
                                </p>
                        </div>
                        <div class="col_product1">
                            <h4>Tidak Termasuk</h4><br>
                            <p>
                            - <?= $v_packet->out_facilitas ?>
                            </p><br>
                            <p>
                            - <?= $v_packet->out_facilitas_1 ?>
                            </p>
                        </div>
                    </div>
                </div>
            <?php }else if($v_packet->in_facilitas != null && $v_packet->in_facilitas_1 != null && $v_packet->in_facilitas_2 != null && $v_packet->in_facilitas_3 == null && $v_packet->in_facilitas_4 == null && $v_packet->in_facilitas_5 == null && $v_packet->in_facilitas_6 == null && $v_packet->in_facilitas_7 == null && $v_packet->in_facilitas_8 == null && $v_packet->in_facilitas_9 == null && $v_packet->out_facilitas != null && $v_packet->out_facilitas_1 != null && $v_packet->out_facilitas_2 != null && $v_packet->out_facilitas_3 == null && $v_packet->out_facilitas_4 == null && $v_packet->out_facilitas_5 == null && $v_packet->out_facilitas_6 == null && $v_packet->out_facilitas_7 == null && $v_packet->out_facilitas_8 == null && $v_packet->out_facilitas_9 == null){ ?>
                <div class="card1_3">
                    <h3>Fasilitas</h3><br>
                    <div class="row_product1">
                        <div class="col_product1">
                            <h4>Termasuk</h4><br>
                                <p>
                                    - <?= $v_packet->in_facilitas ?>
                                </p><br>
                                <p>
                                    - <?= $v_packet->in_facilitas_1 ?>
                                </p><br>
                                <p>
                                    - <?= $v_packet->in_facilitas_2 ?>
                                </p>
                        </div>
                        <div class="col_product1">
                            <h4>Tidak Termasuk</h4><br>
                            <p>
                            - <?= $v_packet->out_facilitas ?>
                            </p><br>
                            <p>
                            - <?= $v_packet->out_facilitas_1 ?>
                            </p><br>
                            <p>
                            - <?= $v_packet->out_facilitas_2 ?>
                            </p>
                        </div>
                    </div>
                </div>
            <?php }else if($v_packet->in_facilitas != null && $v_packet->in_facilitas_1 != null && $v_packet->in_facilitas_2 != null && $v_packet->in_facilitas_3 == null && $v_packet->in_facilitas_4 == null && $v_packet->in_facilitas_5 == null && $v_packet->in_facilitas_6 == null && $v_packet->in_facilitas_7 == null && $v_packet->in_facilitas_8 == null && $v_packet->in_facilitas_9 == null && $v_packet->out_facilitas != null && $v_packet->out_facilitas_1 != null && $v_packet->out_facilitas_2 != null && $v_packet->out_facilitas_3 != null && $v_packet->out_facilitas_4 == null && $v_packet->out_facilitas_5 == null && $v_packet->out_facilitas_6 == null && $v_packet->out_facilitas_7 == null && $v_packet->out_facilitas_8 == null && $v_packet->out_facilitas_9 == null){ ?>
                <div class="card1_3">
                    <h3>Fasilitas</h3><br>
                    <div class="row_product1">
                        <div class="col_product1">
                            <h4>Termasuk</h4><br>
                                <p>
                                    - <?= $v_packet->in_facilitas ?>
                                </p><br>
                                <p>
                                    - <?= $v_packet->in_facilitas_1 ?>
                                </p><br>
                                <p>
                                    - <?= $v_packet->in_facilitas_2 ?>
                                </p>
                        </div>
                        <div class="col_product1">
                            <h4>Tidak Termasuk</h4><br>
                            <p>
                            - <?= $v_packet->out_facilitas ?>
                            </p><br>
                            <p>
                            - <?= $v_packet->out_facilitas_1 ?>
                            </p><br>
                            <p>
                            - <?= $v_packet->out_facilitas_2 ?>
                            </p><br>
                            <p>
                            - <?= $v_packet->out_facilitas_3 ?>
                            </p>
                        </div>
                    </div>
                </div>
            <?php }else if($v_packet->in_facilitas != null && $v_packet->in_facilitas_1 != null && $v_packet->in_facilitas_2 != null && $v_packet->in_facilitas_3 == null && $v_packet->in_facilitas_4 == null && $v_packet->in_facilitas_5 == null && $v_packet->in_facilitas_6 == null && $v_packet->in_facilitas_7 == null && $v_packet->in_facilitas_8 == null && $v_packet->in_facilitas_9 == null && $v_packet->out_facilitas != null && $v_packet->out_facilitas_1 != null && $v_packet->out_facilitas_2 != null && $v_packet->out_facilitas_3 != null && $v_packet->out_facilitas_4 != null && $v_packet->out_facilitas_5 == null && $v_packet->out_facilitas_6 == null && $v_packet->out_facilitas_7 == null && $v_packet->out_facilitas_8 == null && $v_packet->out_facilitas_9 == null){ ?>
                <div class="card1_3">
                    <h3>Fasilitas</h3><br>
                    <div class="row_product1">
                        <div class="col_product1">
                            <h4>Termasuk</h4><br>
                                <p>
                                    - <?= $v_packet->in_facilitas ?>
                                </p><br>
                                <p>
                                    - <?= $v_packet->in_facilitas_1 ?>
                                </p><br>
                                <p>
                                    - <?= $v_packet->in_facilitas_2 ?>
                                </p>
                        </div>
                        <div class="col_product1">
                            <h4>Tidak Termasuk</h4><br>
                            <p>
                            - <?= $v_packet->out_facilitas ?>
                            </p><br>
                            <p>
                            - <?= $v_packet->out_facilitas_1 ?>
                            </p><br>
                            <p>
                            - <?= $v_packet->out_facilitas_2 ?>
                            </p><br>
                            <p>
                            - <?= $v_packet->out_facilitas_3 ?>
                            </p><br>
                            <p>
                            - <?= $v_packet->out_facilitas_4 ?>
                            </p>
                        </div>
                    </div>
                </div>
            <?php }else if($v_packet->in_facilitas != null && $v_packet->in_facilitas_1 != null && $v_packet->in_facilitas_2 == null && $v_packet->in_facilitas_3 == null && $v_packet->in_facilitas_4 == null && $v_packet->in_facilitas_5 == null && $v_packet->in_facilitas_6 == null && $v_packet->in_facilitas_7 == null && $v_packet->in_facilitas_8 == null && $v_packet->in_facilitas_9 == null && $v_packet->out_facilitas != null && $v_packet->out_facilitas_1 != null && $v_packet->out_facilitas_2 != null && $v_packet->out_facilitas_3 != null && $v_packet->out_facilitas_4 != null && $v_packet->out_facilitas_5 == null && $v_packet->out_facilitas_6 == null && $v_packet->out_facilitas_7 == null && $v_packet->out_facilitas_8 == null && $v_packet->out_facilitas_9 == null){ ?>
                <div class="card1_3">
                    <h3>Fasilitas</h3><br>
                    <div class="row_product1">
                        <div class="col_product1">
                            <h4>Termasuk</h4><br>
                                <p>
                                    - <?= $v_packet->in_facilitas ?>
                                </p><br>
                                <p>
                                    - <?= $v_packet->in_facilitas_1 ?>
                                </p>
                        </div>
                        <div class="col_product1">
                            <h4>Tidak Termasuk</h4><br>
                            <p>
                            - <?= $v_packet->out_facilitas ?>
                            </p><br>
                            <p>
                            - <?= $v_packet->out_facilitas_1 ?>
                            </p><br>
                            <p>
                            - <?= $v_packet->out_facilitas_2 ?>
                            </p><br>
                            <p>
                            - <?= $v_packet->out_facilitas_3 ?>
                            </p><br>
                            <p>
                            - <?= $v_packet->out_facilitas_4 ?>
                            </p>
                        </div>
                    </div>
                </div> 
            <?php }else if($v_packet->in_facilitas != null && $v_packet->in_facilitas_1 == null && $v_packet->in_facilitas_2 == null && $v_packet->in_facilitas_3 == null && $v_packet->in_facilitas_4 == null && $v_packet->in_facilitas_5 == null && $v_packet->in_facilitas_6 == null && $v_packet->in_facilitas_7 == null && $v_packet->in_facilitas_8 == null && $v_packet->in_facilitas_9 == null && $v_packet->out_facilitas != null && $v_packet->out_facilitas_1 != null && $v_packet->out_facilitas_2 != null && $v_packet->out_facilitas_3 != null && $v_packet->out_facilitas_4 != null && $v_packet->out_facilitas_5 == null && $v_packet->out_facilitas_6 == null && $v_packet->out_facilitas_7 == null && $v_packet->out_facilitas_8 == null && $v_packet->out_facilitas_9 == null){ ?>
                <div class="card1_3">
                    <h3>Fasilitas</h3><br>
                    <div class="row_product1">
                        <div class="col_product1">
                            <h4>Termasuk</h4><br>
                                <p>
                                    - <?= $v_packet->in_facilitas ?>
                                </p>
                        </div>
                        <div class="col_product1">
                            <h4>Tidak Termasuk</h4><br>
                            <p>
                            - <?= $v_packet->out_facilitas ?>
                            </p><br>
                            <p>
                            - <?= $v_packet->out_facilitas_1 ?>
                            </p><br>
                            <p>
                            - <?= $v_packet->out_facilitas_2 ?>
                            </p><br>
                            <p>
                            - <?= $v_packet->out_facilitas_3 ?>
                            </p><br>
                            <p>
                            - <?= $v_packet->out_facilitas_4 ?>
                            </p>
                        </div>
                    </div>
                </div>
            <?php }else if($v_packet->in_facilitas != null && $v_packet->in_facilitas_1 != null && $v_packet->in_facilitas_2 == null && $v_packet->in_facilitas_3 == null && $v_packet->in_facilitas_4 == null && $v_packet->in_facilitas_5 == null && $v_packet->in_facilitas_6 == null && $v_packet->in_facilitas_7 == null && $v_packet->in_facilitas_8 == null && $v_packet->in_facilitas_9 == null && $v_packet->out_facilitas != null && $v_packet->out_facilitas_1 != null && $v_packet->out_facilitas_2 != null && $v_packet->out_facilitas_3 != null && $v_packet->out_facilitas_4 != null && $v_packet->out_facilitas_5 != null && $v_packet->out_facilitas_6 == null && $v_packet->out_facilitas_7 == null && $v_packet->out_facilitas_8 == null && $v_packet->out_facilitas_9 == null){ ?>
                <div class="card1_4">
                    <h3>Fasilitas</h3><br>
                    <div class="row_product1">
                        <div class="col_product1">
                            <h4>Termasuk</h4><br>
                                <p>
                                    - <?= $v_packet->in_facilitas ?>
                                </p><br>
                                <p>
                                    - <?= $v_packet->in_facilitas_1 ?>
                                </p>
                        </div>
                        <div class="col_product1">
                            <h4>Tidak Termasuk</h4><br>
                            <p>
                            - <?= $v_packet->out_facilitas ?>
                            </p><br>
                            <p>
                            - <?= $v_packet->out_facilitas_1 ?>
                            </p><br>
                            <p>
                            - <?= $v_packet->out_facilitas_2 ?>
                            </p><br>
                            <p>
                            - <?= $v_packet->out_facilitas_3 ?>
                            </p><br>
                            <p>
                            - <?= $v_packet->out_facilitas_4 ?>
                            </p><br>
                            <p>
                            - <?= $v_packet->out_facilitas_5 ?>
                            </p>
                        </div>
                    </div>
                </div>
            <?php }else if($v_packet->in_facilitas != null && $v_packet->in_facilitas_1 == null && $v_packet->in_facilitas_2 == null && $v_packet->in_facilitas_3 == null && $v_packet->in_facilitas_4 == null && $v_packet->in_facilitas_5 == null && $v_packet->in_facilitas_6 == null && $v_packet->in_facilitas_7 == null && $v_packet->in_facilitas_8 == null && $v_packet->in_facilitas_9 == null && $v_packet->out_facilitas != null && $v_packet->out_facilitas_1 != null && $v_packet->out_facilitas_2 != null && $v_packet->out_facilitas_3 != null && $v_packet->out_facilitas_4 != null && $v_packet->out_facilitas_5 != null && $v_packet->out_facilitas_6 == null && $v_packet->out_facilitas_7 == null && $v_packet->out_facilitas_8 == null && $v_packet->out_facilitas_9 == null){ ?>
                <div class="card1_4">
                    <h3>Fasilitas</h3><br>
                    <div class="row_product1">
                        <div class="col_product1">
                            <h4>Termasuk</h4><br>
                                <p>
                                    - <?= $v_packet->in_facilitas ?>
                                </p>
                        </div>
                        <div class="col_product1">
                            <h4>Tidak Termasuk</h4><br>
                            <p>
                            - <?= $v_packet->out_facilitas ?>
                            </p><br>
                            <p>
                            - <?= $v_packet->out_facilitas_1 ?>
                            </p><br>
                            <p>
                            - <?= $v_packet->out_facilitas_2 ?>
                            </p><br>
                            <p>
                            - <?= $v_packet->out_facilitas_3 ?>
                            </p><br>
                            <p>
                            - <?= $v_packet->out_facilitas_4 ?>
                            </p><br>
                            <p>
                            - <?= $v_packet->out_facilitas_5 ?>
                            </p>
                        </div>
                    </div>
                </div>
            <?php }else if($v_packet->in_facilitas != null && $v_packet->in_facilitas_1 != null && $v_packet->in_facilitas_2 != null && $v_packet->in_facilitas_3 != null && $v_packet->in_facilitas_4 == null && $v_packet->in_facilitas_5 == null && $v_packet->in_facilitas_6 == null && $v_packet->in_facilitas_7 == null && $v_packet->in_facilitas_8 == null && $v_packet->in_facilitas_9 == null && $v_packet->out_facilitas != null && $v_packet->out_facilitas_1 == null && $v_packet->out_facilitas_2 == null && $v_packet->out_facilitas_3 == null && $v_packet->out_facilitas_4 == null && $v_packet->out_facilitas_5 == null && $v_packet->out_facilitas_6 == null && $v_packet->out_facilitas_7 == null && $v_packet->out_facilitas_8 == null && $v_packet->out_facilitas_9 == null){ ?>
                <div class="card1_4">
                    <h3>Fasilitas</h3><br>
                    <div class="row_product1">
                        <div class="col_product1">
                            <h4>Termasuk</h4><br>
                                <p>
                                    - <?= $v_packet->in_facilitas ?>
                                </p><br>
                                <p>
                                    - <?= $v_packet->in_facilitas_1 ?>
                                </p><br>
                                <p>
                                    - <?= $v_packet->in_facilitas_2 ?>
                                </p><br>
                                <p>
                                    - <?= $v_packet->in_facilitas_3 ?>
                                </p>
                        </div>
                        <div class="col_product1">
                            <h4>Tidak Termasuk</h4><br>
                            <p>
                            - <?= $v_packet->out_facilitas ?>
                            </p>
                        </div>
                    </div>
                </div>
            <?php }else if($v_packet->in_facilitas != null && $v_packet->in_facilitas_1 != null && $v_packet->in_facilitas_2 != null && $v_packet->in_facilitas_3 != null && $v_packet->in_facilitas_4 == null && $v_packet->in_facilitas_5 == null && $v_packet->in_facilitas_6 == null && $v_packet->in_facilitas_7 == null && $v_packet->in_facilitas_8 == null && $v_packet->in_facilitas_9 == null && $v_packet->out_facilitas != null && $v_packet->out_facilitas_1 != null && $v_packet->out_facilitas_2 == null && $v_packet->out_facilitas_3 == null && $v_packet->out_facilitas_4 == null && $v_packet->out_facilitas_5 == null && $v_packet->out_facilitas_6 == null && $v_packet->out_facilitas_7 == null && $v_packet->out_facilitas_8 == null && $v_packet->out_facilitas_9 == null){ ?>
                <div class="card1_4">
                    <h3>Fasilitas</h3><br>
                    <div class="row_product1">
                        <div class="col_product1">
                            <h4>Termasuk</h4><br>
                                <p>
                                    - <?= $v_packet->in_facilitas ?>
                                </p><br>
                                <p>
                                    - <?= $v_packet->in_facilitas_1 ?>
                                </p><br>
                                <p>
                                    - <?= $v_packet->in_facilitas_2 ?>
                                </p><br>
                                <p>
                                    - <?= $v_packet->in_facilitas_3 ?>
                                </p>
                        </div>
                        <div class="col_product1">
                            <h4>Tidak Termasuk</h4><br>
                            <p>
                            - <?= $v_packet->out_facilitas ?>
                            </p><br>
                            <p>
                            - <?= $v_packet->out_facilitas_1 ?>
                            </p>
                        </div>
                    </div>
                </div>
            <?php }else if($v_packet->in_facilitas != null && $v_packet->in_facilitas_1 != null && $v_packet->in_facilitas_2 != null && $v_packet->in_facilitas_3 != null && $v_packet->in_facilitas_4 == null && $v_packet->in_facilitas_5 == null && $v_packet->in_facilitas_6 == null && $v_packet->in_facilitas_7 == null && $v_packet->in_facilitas_8 == null && $v_packet->in_facilitas_9 == null && $v_packet->out_facilitas != null && $v_packet->out_facilitas_1 != null && $v_packet->out_facilitas_2 != null && $v_packet->out_facilitas_3 == null && $v_packet->out_facilitas_4 == null && $v_packet->out_facilitas_5 == null && $v_packet->out_facilitas_6 == null && $v_packet->out_facilitas_7 == null && $v_packet->out_facilitas_8 == null && $v_packet->out_facilitas_9 == null){ ?>
                <div class="card1_4">
                    <h3>Fasilitas</h3><br>
                    <div class="row_product1">
                        <div class="col_product1">
                            <h4>Termasuk</h4><br>
                                <p>
                                    - <?= $v_packet->in_facilitas ?>
                                </p><br>
                                <p>
                                    - <?= $v_packet->in_facilitas_1 ?>
                                </p><br>
                                <p>
                                    - <?= $v_packet->in_facilitas_2 ?>
                                </p><br>
                                <p>
                                    - <?= $v_packet->in_facilitas_3 ?>
                                </p>
                        </div>
                        <div class="col_product1">
                            <h4>Tidak Termasuk</h4><br>
                            <p>
                            - <?= $v_packet->out_facilitas ?>
                            </p><br>
                            <p>
                            - <?= $v_packet->out_facilitas_1 ?>
                            </p><br>
                            <p>
                            - <?= $v_packet->out_facilitas_2 ?>
                            </p>
                        </div>
                    </div>
                </div>
            <?php }else if($v_packet->in_facilitas != null && $v_packet->in_facilitas_1 != null && $v_packet->in_facilitas_2 != null && $v_packet->in_facilitas_3 != null && $v_packet->in_facilitas_4 == null && $v_packet->in_facilitas_5 == null && $v_packet->in_facilitas_6 == null && $v_packet->in_facilitas_7 == null && $v_packet->in_facilitas_8 == null && $v_packet->in_facilitas_9 == null && $v_packet->out_facilitas != null && $v_packet->out_facilitas_1 != null && $v_packet->out_facilitas_2 != null && $v_packet->out_facilitas_3 != null && $v_packet->out_facilitas_4 == null && $v_packet->out_facilitas_5 == null && $v_packet->out_facilitas_6 == null && $v_packet->out_facilitas_7 == null && $v_packet->out_facilitas_8 == null && $v_packet->out_facilitas_9 == null){ ?>
                <div class="card1_4">
                    <h3>Fasilitas</h3><br>
                    <div class="row_product1">
                        <div class="col_product1">
                            <h4>Termasuk</h4><br>
                                <p>
                                    - <?= $v_packet->in_facilitas ?>
                                </p><br>
                                <p>
                                    - <?= $v_packet->in_facilitas_1 ?>
                                </p><br>
                                <p>
                                    - <?= $v_packet->in_facilitas_2 ?>
                                </p><br>
                                <p>
                                    - <?= $v_packet->in_facilitas_3 ?>
                                </p>
                        </div>
                        <div class="col_product1">
                            <h4>Tidak Termasuk</h4><br>
                            <p>
                            - <?= $v_packet->out_facilitas ?>
                            </p><br>
                            <p>
                            - <?= $v_packet->out_facilitas_1 ?>
                            </p><br>
                            <p>
                            - <?= $v_packet->out_facilitas_2 ?>
                            </p><br>
                            <p>
                            - <?= $v_packet->out_facilitas_3 ?>
                            </p>
                        </div>
                    </div>
                </div>
            <?php }else if($v_packet->in_facilitas != null && $v_packet->in_facilitas_1 != null && $v_packet->in_facilitas_2 != null && $v_packet->in_facilitas_3 != null && $v_packet->in_facilitas_4 == null && $v_packet->in_facilitas_5 == null && $v_packet->in_facilitas_6 == null && $v_packet->in_facilitas_7 == null && $v_packet->in_facilitas_8 == null && $v_packet->in_facilitas_9 == null && $v_packet->out_facilitas != null && $v_packet->out_facilitas_1 != null && $v_packet->out_facilitas_2 != null && $v_packet->out_facilitas_3 != null && $v_packet->out_facilitas_4 != null && $v_packet->out_facilitas_5 == null && $v_packet->out_facilitas_6 == null && $v_packet->out_facilitas_7 == null && $v_packet->out_facilitas_8 == null && $v_packet->out_facilitas_9 == null){ ?>
                <div class="card1_4">
                    <h3>Fasilitas</h3><br>
                    <div class="row_product1">
                        <div class="col_product1">
                            <h4>Termasuk</h4><br>
                                <p>
                                    - <?= $v_packet->in_facilitas ?>
                                </p><br>
                                <p>
                                    - <?= $v_packet->in_facilitas_1 ?>
                                </p><br>
                                <p>
                                    - <?= $v_packet->in_facilitas_2 ?>
                                </p><br>
                                <p>
                                    - <?= $v_packet->in_facilitas_3 ?>
                                </p>
                        </div>
                        <div class="col_product1">
                            <h4>Tidak Termasuk</h4><br>
                            <p>
                            - <?= $v_packet->out_facilitas ?>
                            </p><br>
                            <p>
                            - <?= $v_packet->out_facilitas_1 ?>
                            </p><br>
                            <p>
                            - <?= $v_packet->out_facilitas_2 ?>
                            </p><br>
                            <p>
                            - <?= $v_packet->out_facilitas_3 ?>
                            </p><br>
                            <p>
                            - <?= $v_packet->out_facilitas_4 ?>
                            </p>
                        </div>
                    </div>
                </div>
            <?php }else if($v_packet->in_facilitas != null && $v_packet->in_facilitas_1 == null && $v_packet->in_facilitas_2 == null && $v_packet->in_facilitas_3 == null && $v_packet->in_facilitas_4 == null && $v_packet->in_facilitas_5 == null && $v_packet->in_facilitas_6 == null && $v_packet->in_facilitas_7 == null && $v_packet->in_facilitas_8 == null && $v_packet->in_facilitas_9 == null && $v_packet->out_facilitas != null && $v_packet->out_facilitas_1 != null && $v_packet->out_facilitas_2 != null && $v_packet->out_facilitas_3 != null && $v_packet->out_facilitas_4 != null && $v_packet->out_facilitas_5 != null && $v_packet->out_facilitas_6 != null && $v_packet->out_facilitas_7 == null && $v_packet->out_facilitas_8 == null && $v_packet->out_facilitas_9 == null){ ?>
                <div class="card1_4">
                    <h3>Fasilitas</h3><br>
                    <div class="row_product1">
                        <div class="col_product1">
                            <h4>Termasuk</h4><br>
                                <p>
                                    - <?= $v_packet->in_facilitas ?>
                                </p>
                        </div>
                        <div class="col_product1">
                            <h4>Tidak Termasuk</h4><br>
                            <p>
                            - <?= $v_packet->out_facilitas ?>
                            </p><br>
                            <p>
                            - <?= $v_packet->out_facilitas_1 ?>
                            </p><br>
                            <p>
                            - <?= $v_packet->out_facilitas_2 ?>
                            </p><br>
                            <p>
                            - <?= $v_packet->out_facilitas_3 ?>
                            </p><br>
                            <p>
                            - <?= $v_packet->out_facilitas_4 ?>
                            </p><br>
                            <p>
                            - <?= $v_packet->out_facilitas_5 ?>
                            </p><br>
                            <p>
                            - <?= $v_packet->out_facilitas_6 ?>
                            </p>
                        </div>
                    </div>
                </div>
            <?php }else if($v_packet->in_facilitas != null && $v_packet->in_facilitas_1 != null && $v_packet->in_facilitas_2 != null && $v_packet->in_facilitas_3 == null && $v_packet->in_facilitas_4 == null && $v_packet->in_facilitas_5 == null && $v_packet->in_facilitas_6 == null && $v_packet->in_facilitas_7 == null && $v_packet->in_facilitas_8 == null && $v_packet->in_facilitas_9 == null && $v_packet->out_facilitas != null && $v_packet->out_facilitas_1 != null && $v_packet->out_facilitas_2 != null && $v_packet->out_facilitas_3 != null && $v_packet->out_facilitas_4 != null && $v_packet->out_facilitas_5 != null && $v_packet->out_facilitas_6 == null && $v_packet->out_facilitas_7 == null && $v_packet->out_facilitas_8 == null && $v_packet->out_facilitas_9 == null){ ?>
                <div class="card1_4">
                    <h3>Fasilitas</h3><br>
                    <div class="row_product1">
                        <div class="col_product1">
                            <h4>Termasuk</h4><br>
                                <p>
                                    - <?= $v_packet->in_facilitas ?>
                                </p><br>
                                <p>
                                    - <?= $v_packet->in_facilitas_1 ?>
                                </p><br>
                                <p>
                                    - <?= $v_packet->in_facilitas_2 ?>
                                </p>
                        </div>
                        <div class="col_product1">
                            <h4>Tidak Termasuk</h4><br>
                            <p>
                            - <?= $v_packet->out_facilitas ?>
                            </p><br>
                            <p>
                            - <?= $v_packet->out_facilitas_1 ?>
                            </p><br>
                            <p>
                            - <?= $v_packet->out_facilitas_2 ?>
                            </p><br>
                            <p>
                            - <?= $v_packet->out_facilitas_3 ?>
                            </p><br>
                            <p>
                            - <?= $v_packet->out_facilitas_4 ?>
                            </p><br>
                            <p>
                            - <?= $v_packet->out_facilitas_5 ?>
                            </p>
                        </div>
                    </div>
                </div>
            <?php }else if($v_packet->in_facilitas != null && $v_packet->in_facilitas_1 != null && $v_packet->in_facilitas_2 != null && $v_packet->in_facilitas_3 != null && $v_packet->in_facilitas_4 != null && $v_packet->in_facilitas_5 == null && $v_packet->in_facilitas_6 == null && $v_packet->in_facilitas_7 == null && $v_packet->in_facilitas_8 == null && $v_packet->in_facilitas_9 == null && $v_packet->out_facilitas != null && $v_packet->out_facilitas_1 == null && $v_packet->out_facilitas_2 == null && $v_packet->out_facilitas_3 == null && $v_packet->out_facilitas_4 == null && $v_packet->out_facilitas_5 == null && $v_packet->out_facilitas_6 == null && $v_packet->out_facilitas_7 == null && $v_packet->out_facilitas_8 == null && $v_packet->out_facilitas_9 == null){ ?>
                <div class="card1_5">
                    <h3>Fasilitas</h3><br>
                    <div class="row_product1">
                        <div class="col_product1">
                            <h4>Termasuk</h4><br>
                                <p>
                                    - <?= $v_packet->in_facilitas ?>
                                </p><br>
                                <p>
                                    - <?= $v_packet->in_facilitas_1 ?>
                                </p><br>
                                <p>
                                    - <?= $v_packet->in_facilitas_2 ?>
                                </p><br>
                                <p>
                                    - <?= $v_packet->in_facilitas_3 ?>
                                </p><br>
                                <p>
                                    - <?= $v_packet->in_facilitas_4 ?>
                                </p>
                        </div>
                        <div class="col_product1">
                            <h4>Tidak Termasuk</h4><br>
                            <p>
                            - <?= $v_packet->out_facilitas ?>
                            </p>
                        </div>
                    </div>
                </div>
            <?php }else if($v_packet->in_facilitas != null && $v_packet->in_facilitas_1 != null && $v_packet->in_facilitas_2 != null && $v_packet->in_facilitas_3 != null && $v_packet->in_facilitas_4 != null && $v_packet->in_facilitas_5 == null && $v_packet->in_facilitas_6 == null && $v_packet->in_facilitas_7 == null && $v_packet->in_facilitas_8 == null && $v_packet->in_facilitas_9 == null && $v_packet->out_facilitas != null && $v_packet->out_facilitas_1 != null && $v_packet->out_facilitas_2 == null && $v_packet->out_facilitas_3 == null && $v_packet->out_facilitas_4 == null && $v_packet->out_facilitas_5 == null && $v_packet->out_facilitas_6 == null && $v_packet->out_facilitas_7 == null && $v_packet->out_facilitas_8 == null && $v_packet->out_facilitas_9 == null){ ?>
                <div class="card1_5">
                    <h3>Fasilitas</h3><br>
                    <div class="row_product1">
                        <div class="col_product1">
                            <h4>Termasuk</h4><br>
                                <p>
                                    - <?= $v_packet->in_facilitas ?>
                                </p><br>
                                <p>
                                    - <?= $v_packet->in_facilitas_1 ?>
                                </p><br>
                                <p>
                                    - <?= $v_packet->in_facilitas_2 ?>
                                </p><br>
                                <p>
                                    - <?= $v_packet->in_facilitas_3 ?>
                                </p><br>
                                <p>
                                    - <?= $v_packet->in_facilitas_4 ?>
                                </p>
                        </div>
                        <div class="col_product1">
                            <h4>Tidak Termasuk</h4><br>
                            <p>
                            - <?= $v_packet->out_facilitas ?>
                            </p><br>
                            <p>
                            - <?= $v_packet->out_facilitas_1 ?>
                            </p>
                        </div>
                    </div>
                </div>
            <?php }else if($v_packet->in_facilitas != null && $v_packet->in_facilitas_1 != null && $v_packet->in_facilitas_2 != null && $v_packet->in_facilitas_3 != null && $v_packet->in_facilitas_4 != null && $v_packet->in_facilitas_5 == null && $v_packet->in_facilitas_6 == null && $v_packet->in_facilitas_7 == null && $v_packet->in_facilitas_8 == null && $v_packet->in_facilitas_9 == null && $v_packet->out_facilitas != null && $v_packet->out_facilitas_1 != null && $v_packet->out_facilitas_2 != null && $v_packet->out_facilitas_3 == null && $v_packet->out_facilitas_4 == null && $v_packet->out_facilitas_5 == null && $v_packet->out_facilitas_6 == null && $v_packet->out_facilitas_7 == null && $v_packet->out_facilitas_8 == null && $v_packet->out_facilitas_9 == null){ ?>
                <div class="card1_5">
                    <h3>Fasilitas</h3><br>
                    <div class="row_product1">
                        <div class="col_product1">
                            <h4>Termasuk</h4><br>
                                <p>
                                    - <?= $v_packet->in_facilitas ?>
                                </p><br>
                                <p>
                                    - <?= $v_packet->in_facilitas_1 ?>
                                </p><br>
                                <p>
                                    - <?= $v_packet->in_facilitas_2 ?>
                                </p><br>
                                <p>
                                    - <?= $v_packet->in_facilitas_3 ?>
                                </p><br>
                                <p>
                                    - <?= $v_packet->in_facilitas_4 ?>
                                </p>
                        </div>
                        <div class="col_product1">
                            <h4>Tidak Termasuk</h4><br>
                            <p>
                            - <?= $v_packet->out_facilitas ?>
                            </p><br>
                            <p>
                            - <?= $v_packet->out_facilitas_1 ?>
                            </p><br>
                            <p>
                            - <?= $v_packet->out_facilitas_2 ?>
                            </p>
                        </div>
                    </div>
                </div>
            <?php }else if($v_packet->in_facilitas != null && $v_packet->in_facilitas_1 != null && $v_packet->in_facilitas_2 != null && $v_packet->in_facilitas_3 != null && $v_packet->in_facilitas_4 != null && $v_packet->in_facilitas_5 == null && $v_packet->in_facilitas_6 == null && $v_packet->in_facilitas_7 == null && $v_packet->in_facilitas_8 == null && $v_packet->in_facilitas_9 == null && $v_packet->out_facilitas != null && $v_packet->out_facilitas_1 != null && $v_packet->out_facilitas_2 != null && $v_packet->out_facilitas_3 != null && $v_packet->out_facilitas_4 == null && $v_packet->out_facilitas_5 == null && $v_packet->out_facilitas_6 == null && $v_packet->out_facilitas_7 == null && $v_packet->out_facilitas_8 == null && $v_packet->out_facilitas_9 == null){ ?>
                <div class="card1_5">
                    <h3>Fasilitas</h3><br>
                    <div class="row_product1">
                        <div class="col_product1">
                            <h4>Termasuk</h4><br>
                                <p>
                                    - <?= $v_packet->in_facilitas ?>
                                </p><br>
                                <p>
                                    - <?= $v_packet->in_facilitas_1 ?>
                                </p><br>
                                <p>
                                    - <?= $v_packet->in_facilitas_2 ?>
                                </p><br>
                                <p>
                                    - <?= $v_packet->in_facilitas_3 ?>
                                </p><br>
                                <p>
                                    - <?= $v_packet->in_facilitas_4 ?>
                                </p>
                        </div>
                        <div class="col_product1">
                            <h4>Tidak Termasuk</h4><br>
                            <p>
                            - <?= $v_packet->out_facilitas ?>
                            </p><br>
                            <p>
                            - <?= $v_packet->out_facilitas_1 ?>
                            </p><br>
                            <p>
                            - <?= $v_packet->out_facilitas_2 ?>
                            </p><br>
                            <p>
                            - <?= $v_packet->out_facilitas_3 ?>
                            </p>
                        </div>
                    </div>
                </div>
            <?php }else if($v_packet->in_facilitas != null && $v_packet->in_facilitas_1 != null && $v_packet->in_facilitas_2 != null && $v_packet->in_facilitas_3 != null && $v_packet->in_facilitas_4 != null && $v_packet->in_facilitas_5 == null && $v_packet->in_facilitas_6 == null && $v_packet->in_facilitas_7 == null && $v_packet->in_facilitas_8 == null && $v_packet->in_facilitas_9 == null && $v_packet->out_facilitas != null && $v_packet->out_facilitas_1 != null && $v_packet->out_facilitas_2 != null && $v_packet->out_facilitas_3 != null && $v_packet->out_facilitas_4 != null && $v_packet->out_facilitas_5 == null && $v_packet->out_facilitas_6 == null && $v_packet->out_facilitas_7 == null && $v_packet->out_facilitas_8 == null && $v_packet->out_facilitas_9 == null){ ?>
                <div class="card1_5">
                    <h3>Fasilitas</h3><br>
                    <div class="row_product1">
                        <div class="col_product1">
                            <h4>Termasuk</h4><br>
                                <p>
                                    - <?= $v_packet->in_facilitas ?>
                                </p><br>
                                <p>
                                    - <?= $v_packet->in_facilitas_1 ?>
                                </p><br>
                                <p>
                                    - <?= $v_packet->in_facilitas_2 ?>
                                </p><br>
                                <p>
                                    - <?= $v_packet->in_facilitas_3 ?>
                                </p><br>
                                <p>
                                    - <?= $v_packet->in_facilitas_4 ?>
                                </p>
                        </div>
                        <div class="col_product1">
                            <h4>Tidak Termasuk</h4><br>
                            <p>
                            - <?= $v_packet->out_facilitas ?>
                            </p><br>
                            <p>
                            - <?= $v_packet->out_facilitas_1 ?>
                            </p><br>
                            <p>
                            - <?= $v_packet->out_facilitas_2 ?>
                            </p><br>
                            <p>
                            - <?= $v_packet->out_facilitas_3 ?>
                            </p><br>
                            <p>
                            - <?= $v_packet->out_facilitas_4 ?>
                            </p>
                        </div>
                    </div>
                </div>
            <?php }else if($v_packet->in_facilitas != null && $v_packet->in_facilitas_1 != null && $v_packet->in_facilitas_2 != null && $v_packet->in_facilitas_3 != null && $v_packet->in_facilitas_4 != null && $v_packet->in_facilitas_5 == null && $v_packet->in_facilitas_6 == null && $v_packet->in_facilitas_7 == null && $v_packet->in_facilitas_8 == null && $v_packet->in_facilitas_9 == null && $v_packet->out_facilitas != null && $v_packet->out_facilitas_1 != null && $v_packet->out_facilitas_2 != null && $v_packet->out_facilitas_3 != null && $v_packet->out_facilitas_4 != null && $v_packet->out_facilitas_5 != null && $v_packet->out_facilitas_6 == null && $v_packet->out_facilitas_7 == null && $v_packet->out_facilitas_8 == null && $v_packet->out_facilitas_9 == null){ ?>
                <div class="card1_5">
                    <h3>Fasilitas</h3><br>
                    <div class="row_product1">
                        <div class="col_product1">
                            <h4>Termasuk</h4><br>
                                <p>
                                    - <?= $v_packet->in_facilitas ?>
                                </p><br>
                                <p>
                                    - <?= $v_packet->in_facilitas_1 ?>
                                </p><br>
                                <p>
                                    - <?= $v_packet->in_facilitas_2 ?>
                                </p><br>
                                <p>
                                    - <?= $v_packet->in_facilitas_3 ?>
                                </p><br>
                                <p>
                                    - <?= $v_packet->in_facilitas_4 ?>
                                </p>
                        </div>
                        <div class="col_product1">
                            <h4>Tidak Termasuk</h4><br>
                            <p>
                            - <?= $v_packet->out_facilitas ?>
                            </p><br>
                            <p>
                            - <?= $v_packet->out_facilitas_1 ?>
                            </p><br>
                            <p>
                            - <?= $v_packet->out_facilitas_2 ?>
                            </p><br>
                            <p>
                            - <?= $v_packet->out_facilitas_3 ?>
                            </p><br>
                            <p>
                            - <?= $v_packet->out_facilitas_4 ?>
                            </p><br>
                            <p>
                            - <?= $v_packet->out_facilitas_5 ?>
                            </p>
                        </div>
                    </div>
                </div>
            <?php }else if($v_packet->in_facilitas != null && $v_packet->in_facilitas_1 != null && $v_packet->in_facilitas_2 != null && $v_packet->in_facilitas_3 == null && $v_packet->in_facilitas_4 == null && $v_packet->in_facilitas_5 == null && $v_packet->in_facilitas_6 == null && $v_packet->in_facilitas_7 == null && $v_packet->in_facilitas_8 == null && $v_packet->in_facilitas_9 == null && $v_packet->out_facilitas != null && $v_packet->out_facilitas_1 != null && $v_packet->out_facilitas_2 != null && $v_packet->out_facilitas_3 != null && $v_packet->out_facilitas_4 != null && $v_packet->out_facilitas_5 != null && $v_packet->out_facilitas_6 != null && $v_packet->out_facilitas_7 == null && $v_packet->out_facilitas_8 == null && $v_packet->out_facilitas_9 == null){ ?>
                <div class="card1_5">
                    <h3>Fasilitas</h3><br>
                    <div class="row_product1">
                        <div class="col_product1">
                            <h4>Termasuk</h4><br>
                                <p>
                                    - <?= $v_packet->in_facilitas ?>
                                </p><br>
                                <p>
                                    - <?= $v_packet->in_facilitas_1 ?>
                                </p><br>
                                <p>
                                    - <?= $v_packet->in_facilitas_2 ?>
                                </p>
                        </div>
                        <div class="col_product1">
                            <h4>Tidak Termasuk</h4><br>
                            <p>
                            - <?= $v_packet->out_facilitas ?>
                            </p><br>
                            <p>
                            - <?= $v_packet->out_facilitas_1 ?>
                            </p><br>
                            <p>
                            - <?= $v_packet->out_facilitas_2 ?>
                            </p><br>
                            <p>
                            - <?= $v_packet->out_facilitas_3 ?>
                            </p><br>
                            <p>
                            - <?= $v_packet->out_facilitas_4 ?>
                            </p><br>
                            <p>
                            - <?= $v_packet->out_facilitas_5 ?>
                            </p><br>
                            <p>
                            - <?= $v_packet->out_facilitas_6 ?>
                            </p>
                        </div>
                    </div>
                </div>
            <?php }else if($v_packet->in_facilitas != null && $v_packet->in_facilitas_1 != null && $v_packet->in_facilitas_2 == null && $v_packet->in_facilitas_3 == null && $v_packet->in_facilitas_4 == null && $v_packet->in_facilitas_5 == null && $v_packet->in_facilitas_6 == null && $v_packet->in_facilitas_7 == null && $v_packet->in_facilitas_8 == null && $v_packet->in_facilitas_9 == null && $v_packet->out_facilitas != null && $v_packet->out_facilitas_1 != null && $v_packet->out_facilitas_2 != null && $v_packet->out_facilitas_3 != null && $v_packet->out_facilitas_4 != null && $v_packet->out_facilitas_5 != null && $v_packet->out_facilitas_6 != null && $v_packet->out_facilitas_7 == null && $v_packet->out_facilitas_8 == null && $v_packet->out_facilitas_9 == null){ ?>
                <div class="card1_5">
                    <h3>Fasilitas</h3><br>
                    <div class="row_product1">
                        <div class="col_product1">
                            <h4>Termasuk</h4><br>
                                <p>
                                    - <?= $v_packet->in_facilitas ?>
                                </p><br>
                                <p>
                                    - <?= $v_packet->in_facilitas_1 ?>
                                </p>
                        </div>
                        <div class="col_product1">
                            <h4>Tidak Termasuk</h4><br>
                            <p>
                            - <?= $v_packet->out_facilitas ?>
                            </p><br>
                            <p>
                            - <?= $v_packet->out_facilitas_1 ?>
                            </p><br>
                            <p>
                            - <?= $v_packet->out_facilitas_2 ?>
                            </p><br>
                            <p>
                            - <?= $v_packet->out_facilitas_3 ?>
                            </p><br>
                            <p>
                            - <?= $v_packet->out_facilitas_4 ?>
                            </p><br>
                            <p>
                            - <?= $v_packet->out_facilitas_5 ?>
                            </p><br>
                            <p>
                            - <?= $v_packet->out_facilitas_6 ?>
                            </p>
                        </div>
                    </div>
                </div>
            <?php }else if($v_packet->in_facilitas != null && $v_packet->in_facilitas_1 == null && $v_packet->in_facilitas_2 == null && $v_packet->in_facilitas_3 == null && $v_packet->in_facilitas_4 == null && $v_packet->in_facilitas_5 == null && $v_packet->in_facilitas_6 == null && $v_packet->in_facilitas_7 == null && $v_packet->in_facilitas_8 == null && $v_packet->in_facilitas_9 == null && $v_packet->out_facilitas != null && $v_packet->out_facilitas_1 != null && $v_packet->out_facilitas_2 != null && $v_packet->out_facilitas_3 != null && $v_packet->out_facilitas_4 != null && $v_packet->out_facilitas_5 != null && $v_packet->out_facilitas_6 != null && $v_packet->out_facilitas_7 != null && $v_packet->out_facilitas_8 == null && $v_packet->out_facilitas_9 == null){ ?>
                <div class="card1_5">
                    <h3>Fasilitas</h3><br>
                    <div class="row_product1">
                        <div class="col_product1">
                            <h4>Termasuk</h4><br>
                                <p>
                                    - <?= $v_packet->in_facilitas ?>
                                </p>
                        </div>
                        <div class="col_product1">
                            <h4>Tidak Termasuk</h4><br>
                            <p>
                            - <?= $v_packet->out_facilitas ?>
                            </p><br>
                            <p>
                            - <?= $v_packet->out_facilitas_1 ?>
                            </p><br>
                            <p>
                            - <?= $v_packet->out_facilitas_2 ?>
                            </p><br>
                            <p>
                            - <?= $v_packet->out_facilitas_3 ?>
                            </p><br>
                            <p>
                            - <?= $v_packet->out_facilitas_4 ?>
                            </p><br>
                            <p>
                            - <?= $v_packet->out_facilitas_5 ?>
                            </p><br>
                            <p>
                            - <?= $v_packet->out_facilitas_6 ?>
                            </p><br>
                            <p>
                            - <?= $v_packet->out_facilitas_7 ?>
                            </p>
                        </div>
                    </div>
                </div>
            <?php }else if($v_packet->in_facilitas != null && $v_packet->in_facilitas_1 != null && $v_packet->in_facilitas_2 != null && $v_packet->in_facilitas_3 != null && $v_packet->in_facilitas_4 == null && $v_packet->in_facilitas_5 == null && $v_packet->in_facilitas_6 == null && $v_packet->in_facilitas_7 == null && $v_packet->in_facilitas_8 == null && $v_packet->in_facilitas_9 == null && $v_packet->out_facilitas != null && $v_packet->out_facilitas_1 != null && $v_packet->out_facilitas_2 != null && $v_packet->out_facilitas_3 != null && $v_packet->out_facilitas_4 != null && $v_packet->out_facilitas_5 != null && $v_packet->out_facilitas_6 == null && $v_packet->out_facilitas_7 == null && $v_packet->out_facilitas_8 == null && $v_packet->out_facilitas_9 == null){ ?>
                <div class="card1_5">
                    <h3>Fasilitas</h3><br>
                    <div class="row_product1">
                        <div class="col_product1">
                            <h4>Termasuk</h4><br>
                                <p>
                                    - <?= $v_packet->in_facilitas ?>
                                </p><br>
                                <p>
                                    - <?= $v_packet->in_facilitas_1 ?>
                                </p><br>
                                <p>
                                    - <?= $v_packet->in_facilitas_2 ?>
                                </p><br>
                                <p>
                                    - <?= $v_packet->in_facilitas_3 ?>
                                </p>
                        </div>
                        <div class="col_product1">
                            <h4>Tidak Termasuk</h4><br>
                            <p>
                            - <?= $v_packet->out_facilitas ?>
                            </p><br>
                            <p>
                            - <?= $v_packet->out_facilitas_1 ?>
                            </p><br>
                            <p>
                            - <?= $v_packet->out_facilitas_2 ?>
                            </p><br>
                            <p>
                            - <?= $v_packet->out_facilitas_3 ?>
                            </p><br>
                            <p>
                            - <?= $v_packet->out_facilitas_4 ?>
                            </p><br>
                            <p>
                            - <?= $v_packet->out_facilitas_5 ?>
                            </p>
                        </div>
                    </div>
                </div>
            <?php }else if($v_packet->in_facilitas != null && $v_packet->in_facilitas_1 != null && $v_packet->in_facilitas_2 != null && $v_packet->in_facilitas_3 != null && $v_packet->in_facilitas_4 != null && $v_packet->in_facilitas_5 != null && $v_packet->in_facilitas_6 == null && $v_packet->in_facilitas_7 == null && $v_packet->in_facilitas_8 == null && $v_packet->in_facilitas_9 == null && $v_packet->out_facilitas != null && $v_packet->out_facilitas_1 == null && $v_packet->out_facilitas_2 == null && $v_packet->out_facilitas_3 == null && $v_packet->out_facilitas_4 == null && $v_packet->out_facilitas_5 == null && $v_packet->out_facilitas_6 == null && $v_packet->out_facilitas_7 == null && $v_packet->out_facilitas_8 == null && $v_packet->out_facilitas_9 == null){ ?>
                <div class="card1_6">
                    <h3>Fasilitas</h3><br>
                    <div class="row_product1">
                        <div class="col_product1">
                            <h4>Termasuk</h4><br>
                                <p>
                                    - <?= $v_packet->in_facilitas ?>
                                </p><br>
                                <p>
                                    - <?= $v_packet->in_facilitas_1 ?>
                                </p><br>
                                <p>
                                    - <?= $v_packet->in_facilitas_2 ?>
                                </p><br>
                                <p>
                                    - <?= $v_packet->in_facilitas_3 ?>
                                </p><br>
                                <p>
                                    - <?= $v_packet->in_facilitas_4 ?>
                                </p><br>
                                <p>
                                    - <?= $v_packet->in_facilitas_5 ?>
                                </p>
                        </div>
                        <div class="col_product1">
                            <h4>Tidak Termasuk</h4><br>
                            <p>
                            - <?= $v_packet->out_facilitas ?>
                        </div>
                    </div>
                </div>
            <?php }else if($v_packet->in_facilitas != null && $v_packet->in_facilitas_1 != null && $v_packet->in_facilitas_2 != null && $v_packet->in_facilitas_3 != null && $v_packet->in_facilitas_4 != null && $v_packet->in_facilitas_5 != null && $v_packet->in_facilitas_6 == null && $v_packet->in_facilitas_7 == null && $v_packet->in_facilitas_8 == null && $v_packet->in_facilitas_9 == null && $v_packet->out_facilitas != null && $v_packet->out_facilitas_1 != null && $v_packet->out_facilitas_2 == null && $v_packet->out_facilitas_3 == null && $v_packet->out_facilitas_4 == null && $v_packet->out_facilitas_5 == null && $v_packet->out_facilitas_6 == null && $v_packet->out_facilitas_7 == null && $v_packet->out_facilitas_8 == null && $v_packet->out_facilitas_9 == null){ ?>
                <div class="card1_6">
                    <h3>Fasilitas</h3><br>
                    <div class="row_product1">
                        <div class="col_product1">
                            <h4>Termasuk</h4><br>
                                <p>
                                    - <?= $v_packet->in_facilitas ?>
                                </p><br>
                                <p>
                                    - <?= $v_packet->in_facilitas_1 ?>
                                </p><br>
                                <p>
                                    - <?= $v_packet->in_facilitas_2 ?>
                                </p><br>
                                <p>
                                    - <?= $v_packet->in_facilitas_3 ?>
                                </p><br>
                                <p>
                                    - <?= $v_packet->in_facilitas_4 ?>
                                </p><br>
                                <p>
                                    - <?= $v_packet->in_facilitas_5 ?>
                                </p>
                        </div>
                        <div class="col_product1">
                            <h4>Tidak Termasuk</h4><br>
                            <p>
                            - <?= $v_packet->out_facilitas ?>
                            </p><br>
                            <p>
                            - <?= $v_packet->out_facilitas_1 ?>
                            </p>
                        </div>
                    </div>
                </div>
            <?php }else if($v_packet->in_facilitas != null && $v_packet->in_facilitas_1 != null && $v_packet->in_facilitas_2 != null && $v_packet->in_facilitas_3 != null && $v_packet->in_facilitas_4 != null && $v_packet->in_facilitas_5 != null && $v_packet->in_facilitas_6 == null && $v_packet->in_facilitas_7 == null && $v_packet->in_facilitas_8 == null && $v_packet->in_facilitas_9 == null && $v_packet->out_facilitas != null && $v_packet->out_facilitas_1 != null && $v_packet->out_facilitas_2 != null && $v_packet->out_facilitas_3 == null && $v_packet->out_facilitas_4 == null && $v_packet->out_facilitas_5 == null && $v_packet->out_facilitas_6 == null && $v_packet->out_facilitas_7 == null && $v_packet->out_facilitas_8 == null && $v_packet->out_facilitas_9 == null){ ?>
                <div class="card1_6">
                    <h3>Fasilitas</h3><br>
                    <div class="row_product1">
                        <div class="col_product1">
                            <h4>Termasuk</h4><br>
                                <p>
                                    - <?= $v_packet->in_facilitas ?>
                                </p><br>
                                <p>
                                    - <?= $v_packet->in_facilitas_1 ?>
                                </p><br>
                                <p>
                                    - <?= $v_packet->in_facilitas_2 ?>
                                </p><br>
                                <p>
                                    - <?= $v_packet->in_facilitas_3 ?>
                                </p><br>
                                <p>
                                    - <?= $v_packet->in_facilitas_4 ?>
                                </p><br>
                                <p>
                                    - <?= $v_packet->in_facilitas_5 ?>
                                </p>
                        </div>
                        <div class="col_product1">
                            <h4>Tidak Termasuk</h4><br>
                            <p>
                            - <?= $v_packet->out_facilitas ?>
                            </p><br>
                            <p>
                            - <?= $v_packet->out_facilitas_1 ?>
                            </p><br>
                            <p>
                            - <?= $v_packet->out_facilitas_2 ?>
                            </p>
                        </div>
                    </div>
                </div>
            <?php }else if($v_packet->in_facilitas != null && $v_packet->in_facilitas_1 != null && $v_packet->in_facilitas_2 != null && $v_packet->in_facilitas_3 != null && $v_packet->in_facilitas_4 != null && $v_packet->in_facilitas_5 != null && $v_packet->in_facilitas_6 == null && $v_packet->in_facilitas_7 == null && $v_packet->in_facilitas_8 == null && $v_packet->in_facilitas_9 == null && $v_packet->out_facilitas != null && $v_packet->out_facilitas_1 != null && $v_packet->out_facilitas_2 != null && $v_packet->out_facilitas_3 != null && $v_packet->out_facilitas_4 == null && $v_packet->out_facilitas_5 == null && $v_packet->out_facilitas_6 == null && $v_packet->out_facilitas_7 == null && $v_packet->out_facilitas_8 == null && $v_packet->out_facilitas_9 == null){ ?>
                <div class="card1_6">
                    <h3>Fasilitas</h3><br>
                    <div class="row_product1">
                        <div class="col_product1">
                            <h4>Termasuk</h4><br>
                                <p>
                                    - <?= $v_packet->in_facilitas ?>
                                </p><br>
                                <p>
                                    - <?= $v_packet->in_facilitas_1 ?>
                                </p><br>
                                <p>
                                    - <?= $v_packet->in_facilitas_2 ?>
                                </p><br>
                                <p>
                                    - <?= $v_packet->in_facilitas_3 ?>
                                </p><br>
                                <p>
                                    - <?= $v_packet->in_facilitas_4 ?>
                                </p><br>
                                <p>
                                    - <?= $v_packet->in_facilitas_5 ?>
                                </p>
                        </div>
                        <div class="col_product1">
                            <h4>Tidak Termasuk</h4><br>
                            <p>
                            - <?= $v_packet->out_facilitas ?>
                            </p><br>
                            <p>
                            - <?= $v_packet->out_facilitas_1 ?>
                            </p><br>
                            <p>
                            - <?= $v_packet->out_facilitas_2 ?>
                            </p><br>
                            <p>
                            - <?= $v_packet->out_facilitas_3 ?>
                            </p>
                        </div>
                    </div>
                </div>
            <?php }else if($v_packet->in_facilitas != null && $v_packet->in_facilitas_1 != null && $v_packet->in_facilitas_2 != null && $v_packet->in_facilitas_3 != null && $v_packet->in_facilitas_4 != null && $v_packet->in_facilitas_5 != null && $v_packet->in_facilitas_6 == null && $v_packet->in_facilitas_7 == null && $v_packet->in_facilitas_8 == null && $v_packet->in_facilitas_9 == null && $v_packet->out_facilitas != null && $v_packet->out_facilitas_1 != null && $v_packet->out_facilitas_2 != null && $v_packet->out_facilitas_3 != null && $v_packet->out_facilitas_4 != null && $v_packet->out_facilitas_5 == null && $v_packet->out_facilitas_6 == null && $v_packet->out_facilitas_7 == null && $v_packet->out_facilitas_8 == null && $v_packet->out_facilitas_9 == null){ ?>
                <div class="card1_6">
                    <h3>Fasilitas</h3><br>
                    <div class="row_product1">
                        <div class="col_product1">
                            <h4>Termasuk</h4><br>
                                <p>
                                    - <?= $v_packet->in_facilitas ?>
                                </p><br>
                                <p>
                                    - <?= $v_packet->in_facilitas_1 ?>
                                </p><br>
                                <p>
                                    - <?= $v_packet->in_facilitas_2 ?>
                                </p><br>
                                <p>
                                    - <?= $v_packet->in_facilitas_3 ?>
                                </p><br>
                                <p>
                                    - <?= $v_packet->in_facilitas_4 ?>
                                </p><br>
                                <p>
                                    - <?= $v_packet->in_facilitas_5 ?>
                                </p>
                        </div>
                        <div class="col_product1">
                            <h4>Tidak Termasuk</h4><br>
                            <p>
                            - <?= $v_packet->out_facilitas ?>
                            </p><br>
                            <p>
                            - <?= $v_packet->out_facilitas_1 ?>
                            </p><br>
                            <p>
                            - <?= $v_packet->out_facilitas_2 ?>
                            </p><br>
                            <p>
                            - <?= $v_packet->out_facilitas_3 ?>
                            </p><br>
                            <p>
                            - <?= $v_packet->out_facilitas_4 ?>
                            </p>
                        </div>
                    </div>
                </div>
            <?php }else if($v_packet->in_facilitas != null && $v_packet->in_facilitas_1 != null && $v_packet->in_facilitas_2 != null && $v_packet->in_facilitas_3 != null && $v_packet->in_facilitas_4 != null && $v_packet->in_facilitas_5 != null && $v_packet->in_facilitas_6 == null && $v_packet->in_facilitas_7 == null && $v_packet->in_facilitas_8 == null && $v_packet->in_facilitas_9 == null && $v_packet->out_facilitas != null && $v_packet->out_facilitas_1 != null && $v_packet->out_facilitas_2 != null && $v_packet->out_facilitas_3 != null && $v_packet->out_facilitas_4 != null && $v_packet->out_facilitas_5 != null && $v_packet->out_facilitas_6 == null && $v_packet->out_facilitas_7 == null && $v_packet->out_facilitas_8 == null && $v_packet->out_facilitas_9 == null){ ?>
                <div class="card1_6">
                    <h3>Fasilitas</h3><br>
                    <div class="row_product1">
                        <div class="col_product1">
                            <h4>Termasuk</h4><br>
                                <p>
                                    - <?= $v_packet->in_facilitas ?>
                                </p><br>
                                <p>
                                    - <?= $v_packet->in_facilitas_1 ?>
                                </p><br>
                                <p>
                                    - <?= $v_packet->in_facilitas_2 ?>
                                </p><br>
                                <p>
                                    - <?= $v_packet->in_facilitas_3 ?>
                                </p><br>
                                <p>
                                    - <?= $v_packet->in_facilitas_4 ?>
                                </p><br>
                                <p>
                                    - <?= $v_packet->in_facilitas_5 ?>
                                </p>
                        </div>
                        <div class="col_product1">
                            <h4>Tidak Termasuk</h4><br>
                            <p>
                            - <?= $v_packet->out_facilitas ?>
                            </p><br>
                            <p>
                            - <?= $v_packet->out_facilitas_1 ?>
                            </p><br>
                            <p>
                            - <?= $v_packet->out_facilitas_2 ?>
                            </p><br>
                            <p>
                            - <?= $v_packet->out_facilitas_3 ?>
                            </p><br>
                            <p>
                            - <?= $v_packet->out_facilitas_4 ?>
                            </p><br>
                            <p>
                            - <?= $v_packet->out_facilitas_5 ?>
                            </p>
                        </div>
                    </div>
                </div>
            <?php }else if($v_packet->in_facilitas != null && $v_packet->in_facilitas_1 != null && $v_packet->in_facilitas_2 != null && $v_packet->in_facilitas_3 != null && $v_packet->in_facilitas_4 != null && $v_packet->in_facilitas_5 != null && $v_packet->in_facilitas_6 == null && $v_packet->in_facilitas_7 == null && $v_packet->in_facilitas_8 == null && $v_packet->in_facilitas_9 == null && $v_packet->out_facilitas != null && $v_packet->out_facilitas_1 != null && $v_packet->out_facilitas_2 != null && $v_packet->out_facilitas_3 != null && $v_packet->out_facilitas_4 != null && $v_packet->out_facilitas_5 != null && $v_packet->out_facilitas_6 != null && $v_packet->out_facilitas_7 == null && $v_packet->out_facilitas_8 == null && $v_packet->out_facilitas_9 == null){ ?>
                <div class="card1_6">
                    <h3>Fasilitas</h3><br>
                    <div class="row_product1">
                        <div class="col_product1">
                            <h4>Termasuk</h4><br>
                                <p>
                                    - <?= $v_packet->in_facilitas ?>
                                </p><br>
                                <p>
                                    - <?= $v_packet->in_facilitas_1 ?>
                                </p><br>
                                <p>
                                    - <?= $v_packet->in_facilitas_2 ?>
                                </p><br>
                                <p>
                                    - <?= $v_packet->in_facilitas_3 ?>
                                </p><br>
                                <p>
                                    - <?= $v_packet->in_facilitas_4 ?>
                                </p><br>
                                <p>
                                    - <?= $v_packet->in_facilitas_5 ?>
                                </p>
                        </div>
                        <div class="col_product1">
                            <h4>Tidak Termasuk</h4><br>
                            <p>
                            - <?= $v_packet->out_facilitas ?>
                            </p><br>
                            <p>
                            - <?= $v_packet->out_facilitas_1 ?>
                            </p><br>
                            <p>
                            - <?= $v_packet->out_facilitas_2 ?>
                            </p><br>
                            <p>
                            - <?= $v_packet->out_facilitas_3 ?>
                            </p><br>
                            <p>
                            - <?= $v_packet->out_facilitas_4 ?>
                            </p><br>
                            <p>
                            - <?= $v_packet->out_facilitas_5 ?>
                            </p><br>
                            <p>
                            - <?= $v_packet->out_facilitas_6 ?>
                            </p>
                        </div>
                    </div>
                </div>
            <?php }else if($v_packet->in_facilitas != null && $v_packet->in_facilitas_1 != null && $v_packet->in_facilitas_2 != null && $v_packet->in_facilitas_3 != null && $v_packet->in_facilitas_4 != null && $v_packet->in_facilitas_5 != null && $v_packet->in_facilitas_6 == null && $v_packet->in_facilitas_7 == null && $v_packet->in_facilitas_8 == null && $v_packet->in_facilitas_9 == null && $v_packet->out_facilitas != null && $v_packet->out_facilitas_1 != null && $v_packet->out_facilitas_2 != null && $v_packet->out_facilitas_3 != null && $v_packet->out_facilitas_4 != null && $v_packet->out_facilitas_5 != null && $v_packet->out_facilitas_6 != null && $v_packet->out_facilitas_7 != null && $v_packet->out_facilitas_8 == null && $v_packet->out_facilitas_9 == null){ ?>
                <div class="card1_6">
                    <h3>Fasilitas</h3><br>
                    <div class="row_product1">
                        <div class="col_product1">
                            <h4>Termasuk</h4><br>
                                <p>
                                    - <?= $v_packet->in_facilitas ?>
                                </p><br>
                                <p>
                                    - <?= $v_packet->in_facilitas_1 ?>
                                </p><br>
                                <p>
                                    - <?= $v_packet->in_facilitas_2 ?>
                                </p><br>
                                <p>
                                    - <?= $v_packet->in_facilitas_3 ?>
                                </p><br>
                                <p>
                                    - <?= $v_packet->in_facilitas_4 ?>
                                </p><br>
                                <p>
                                    - <?= $v_packet->in_facilitas_5 ?>
                                </p>
                        </div>
                        <div class="col_product1">
                            <h4>Tidak Termasuk</h4><br>
                            <p>
                            - <?= $v_packet->out_facilitas ?>
                            </p><br>
                            <p>
                            - <?= $v_packet->out_facilitas_1 ?>
                            </p><br>
                            <p>
                            - <?= $v_packet->out_facilitas_2 ?>
                            </p><br>
                            <p>
                            - <?= $v_packet->out_facilitas_3 ?>
                            </p><br>
                            <p>
                            - <?= $v_packet->out_facilitas_4 ?>
                            </p><br>
                            <p>
                            - <?= $v_packet->out_facilitas_5 ?>
                            </p><br>
                            <p>
                            - <?= $v_packet->out_facilitas_6 ?>
                            </p><br>
                            <p>
                            - <?= $v_packet->out_facilitas_7 ?>
                            </p>
                        </div>
                    </div>
                </div>
            <?php }else if($v_packet->in_facilitas != null && $v_packet->in_facilitas_1 != null && $v_packet->in_facilitas_2 != null && $v_packet->in_facilitas_3 == null && $v_packet->in_facilitas_4 == null && $v_packet->in_facilitas_5 == null && $v_packet->in_facilitas_6 == null && $v_packet->in_facilitas_7 == null && $v_packet->in_facilitas_8 == null && $v_packet->in_facilitas_9 == null && $v_packet->out_facilitas != null && $v_packet->out_facilitas_1 != null && $v_packet->out_facilitas_2 != null && $v_packet->out_facilitas_3 != null && $v_packet->out_facilitas_4 != null && $v_packet->out_facilitas_5 != null && $v_packet->out_facilitas_6 != null && $v_packet->out_facilitas_7 != null && $v_packet->out_facilitas_8 == null && $v_packet->out_facilitas_9 == null){ ?>
                <div class="card1_6">
                    <h3>Fasilitas</h3><br>
                    <div class="row_product1">
                        <div class="col_product1">
                            <h4>Termasuk</h4><br>
                                <p>
                                    - <?= $v_packet->in_facilitas ?>
                                </p><br>
                                <p>
                                    - <?= $v_packet->in_facilitas_1 ?>
                                </p><br>
                                <p>
                                    - <?= $v_packet->in_facilitas_2 ?>
                                </p>
                        </div>
                        <div class="col_product1">
                            <h4>Tidak Termasuk</h4><br>
                            <p>
                            - <?= $v_packet->out_facilitas ?>
                            </p><br>
                            <p>
                            - <?= $v_packet->out_facilitas_1 ?>
                            </p><br>
                            <p>
                            - <?= $v_packet->out_facilitas_2 ?>
                            </p><br>
                            <p>
                            - <?= $v_packet->out_facilitas_3 ?>
                            </p><br>
                            <p>
                            - <?= $v_packet->out_facilitas_4 ?>
                            </p><br>
                            <p>
                            - <?= $v_packet->out_facilitas_5 ?>
                            </p><br>
                            <p>
                            - <?= $v_packet->out_facilitas_6 ?>
                            </p>
                            <p><br>
                            - <?= $v_packet->out_facilitas_7 ?>
                            </p>
                        </div>
                    </div>
                </div>
            <?php }else if($v_packet->in_facilitas != null && $v_packet->in_facilitas_1 == null && $v_packet->in_facilitas_2 == null && $v_packet->in_facilitas_3 == null && $v_packet->in_facilitas_4 == null && $v_packet->in_facilitas_5 == null && $v_packet->in_facilitas_6 == null && $v_packet->in_facilitas_7 == null && $v_packet->in_facilitas_8 == null && $v_packet->in_facilitas_9 == null && $v_packet->out_facilitas != null && $v_packet->out_facilitas_1 != null && $v_packet->out_facilitas_2 != null && $v_packet->out_facilitas_3 != null && $v_packet->out_facilitas_4 != null && $v_packet->out_facilitas_5 != null && $v_packet->out_facilitas_6 != null && $v_packet->out_facilitas_7 != null && $v_packet->out_facilitas_8 != null && $v_packet->out_facilitas_9 == null){ ?>
                <div class="card1_6">
                    <h3>Fasilitas</h3><br>
                    <div class="row_product1">
                        <div class="col_product1">
                            <h4>Termasuk</h4><br>
                                <p>
                                    - <?= $v_packet->in_facilitas ?>
                                </p>
                        </div>
                        <div class="col_product1">
                            <h4>Tidak Termasuk</h4><br>
                            <p>
                            - <?= $v_packet->out_facilitas ?>
                            </p><br>
                            <p>
                            - <?= $v_packet->out_facilitas_1 ?>
                            </p><br>
                            <p>
                            - <?= $v_packet->out_facilitas_2 ?>
                            </p><br>
                            <p>
                            - <?= $v_packet->out_facilitas_3 ?>
                            </p><br>
                            <p>
                            - <?= $v_packet->out_facilitas_4 ?>
                            </p><br>
                            <p>
                            - <?= $v_packet->out_facilitas_5 ?>
                            </p><br>
                            <p>
                            - <?= $v_packet->out_facilitas_6 ?>
                            </p><br>
                            <p>
                            - <?= $v_packet->out_facilitas_7 ?>
                            </p><br>
                            <p>
                            - <?= $v_packet->out_facilitas_8 ?>
                            </p>
                        </div>
                    </div>
                </div>
            <?php }else if($v_packet->in_facilitas != null && $v_packet->in_facilitas_1 != null && $v_packet->in_facilitas_2 == null && $v_packet->in_facilitas_3 == null && $v_packet->in_facilitas_4 == null && $v_packet->in_facilitas_5 == null && $v_packet->in_facilitas_6 == null && $v_packet->in_facilitas_7 == null && $v_packet->in_facilitas_8 == null && $v_packet->in_facilitas_9 == null && $v_packet->out_facilitas != null && $v_packet->out_facilitas_1 != null && $v_packet->out_facilitas_2 != null && $v_packet->out_facilitas_3 != null && $v_packet->out_facilitas_4 != null && $v_packet->out_facilitas_5 != null && $v_packet->out_facilitas_6 != null && $v_packet->out_facilitas_7 != null && $v_packet->out_facilitas_8 == null && $v_packet->out_facilitas_9 == null){ ?>
                <div class="card1_6">
                    <h3>Fasilitas</h3><br>
                    <div class="row_product1">
                        <div class="col_product1">
                            <h4>Termasuk</h4><br>
                                <p>
                                    - <?= $v_packet->in_facilitas ?>
                                </p><br>
                                <p>
                                    - <?= $v_packet->in_facilitas_1 ?>
                                </p>
                        </div>
                        <div class="col_product1">
                            <h4>Tidak Termasuk</h4><br>
                            <p>
                            - <?= $v_packet->out_facilitas ?>
                            </p><br>
                            <p>
                            - <?= $v_packet->out_facilitas_1 ?>
                            </p><br>
                            <p>
                            - <?= $v_packet->out_facilitas_2 ?>
                            </p><br>
                            <p>
                            - <?= $v_packet->out_facilitas_3 ?>
                            </p><br>
                            <p>
                            - <?= $v_packet->out_facilitas_4 ?>
                            </p><br>
                            <p>
                            - <?= $v_packet->out_facilitas_5 ?>
                            </p><br>
                            <p>
                            - <?= $v_packet->out_facilitas_6 ?>
                            </p><br>
                            <p>
                            - <?= $v_packet->out_facilitas_7 ?>
                            </p>
                        </div>
                    </div>
                </div>
            <?php }else if($v_packet->in_facilitas != null && $v_packet->in_facilitas_1 != null && $v_packet->in_facilitas_2 != null && $v_packet->in_facilitas_3 != null && $v_packet->in_facilitas_4 == null && $v_packet->in_facilitas_5 == null && $v_packet->in_facilitas_6 == null && $v_packet->in_facilitas_7 == null && $v_packet->in_facilitas_8 == null && $v_packet->in_facilitas_9 == null && $v_packet->out_facilitas != null && $v_packet->out_facilitas_1 != null && $v_packet->out_facilitas_2 != null && $v_packet->out_facilitas_3 != null && $v_packet->out_facilitas_4 != null && $v_packet->out_facilitas_5 != null && $v_packet->out_facilitas_6 != null && $v_packet->out_facilitas_7 == null && $v_packet->out_facilitas_8 == null && $v_packet->out_facilitas_9 == null){ ?>
                <div class="card1_6">
                    <h3>Fasilitas</h3><br>
                    <div class="row_product1">
                        <div class="col_product1">
                            <h4>Termasuk</h4><br>
                                <p>
                                    - <?= $v_packet->in_facilitas ?>
                                </p><br>
                                <p>
                                    - <?= $v_packet->in_facilitas_1 ?>
                                </p><br>
                                <p>
                                    - <?= $v_packet->in_facilitas_2 ?>
                                </p><br>
                                <p>
                                    - <?= $v_packet->in_facilitas_3 ?>
                                </p>
                        </div>
                        <div class="col_product1">
                            <h4>Tidak Termasuk</h4><br>
                            <p>
                            - <?= $v_packet->out_facilitas ?>
                            </p><br>
                            <p>
                            - <?= $v_packet->out_facilitas_1 ?>
                            </p><br>
                            <p>
                            - <?= $v_packet->out_facilitas_2 ?>
                            </p><br>
                            <p>
                            - <?= $v_packet->out_facilitas_3 ?>
                            </p><br>
                            <p>
                            - <?= $v_packet->out_facilitas_4 ?>
                            </p><br>
                            <p>
                            - <?= $v_packet->out_facilitas_5 ?>
                            </p><br>
                            <p>
                            - <?= $v_packet->out_facilitas_6 ?>
                            </p>
                        </div>
                    </div>
                </div>
            <?php }else if($v_packet->in_facilitas != null && $v_packet->in_facilitas_1 != null && $v_packet->in_facilitas_2 != null && $v_packet->in_facilitas_3 != null && $v_packet->in_facilitas_4 == null && $v_packet->in_facilitas_5 == null && $v_packet->in_facilitas_6 == null && $v_packet->in_facilitas_7 == null && $v_packet->in_facilitas_8 == null && $v_packet->in_facilitas_9 == null && $v_packet->out_facilitas != null && $v_packet->out_facilitas_1 != null && $v_packet->out_facilitas_2 != null && $v_packet->out_facilitas_3 != null && $v_packet->out_facilitas_4 != null && $v_packet->out_facilitas_5 != null && $v_packet->out_facilitas_6 != null && $v_packet->out_facilitas_7 != null && $v_packet->out_facilitas_8 == null && $v_packet->out_facilitas_9 == null){ ?>
                <div class="card1_6">
                    <h3>Fasilitas</h3><br>
                    <div class="row_product1">
                        <div class="col_product1">
                            <h4>Termasuk</h4><br>
                                <p>
                                    - <?= $v_packet->in_facilitas ?>
                                </p><br>
                                <p>
                                    - <?= $v_packet->in_facilitas_1 ?>
                                </p><br>
                                <p>
                                    - <?= $v_packet->in_facilitas_2 ?>
                                </p><br>
                                <p>
                                    - <?= $v_packet->in_facilitas_3 ?>
                                </p>
                        </div>
                        <div class="col_product1">
                            <h4>Tidak Termasuk</h4><br>
                            <p>
                            - <?= $v_packet->out_facilitas ?>
                            </p><br>
                            <p>
                            - <?= $v_packet->out_facilitas_1 ?>
                            </p><br>
                            <p>
                            - <?= $v_packet->out_facilitas_2 ?>
                            </p><br>
                            <p>
                            - <?= $v_packet->out_facilitas_3 ?>
                            </p><br>
                            <p>
                            - <?= $v_packet->out_facilitas_4 ?>
                            </p><br>
                            <p>
                            - <?= $v_packet->out_facilitas_5 ?>
                            </p><br>
                            <p>
                            - <?= $v_packet->out_facilitas_6 ?>
                            </p><br>
                            <p>
                            - <?= $v_packet->out_facilitas_7 ?>
                            </p>
                        </div>
                    </div>
                </div>
            <?php }else if($v_packet->in_facilitas != null && $v_packet->in_facilitas_1 != null && $v_packet->in_facilitas_2 != null && $v_packet->in_facilitas_3 != null && $v_packet->in_facilitas_4 != null && $v_packet->in_facilitas_5 == null && $v_packet->in_facilitas_6 == null && $v_packet->in_facilitas_7 == null && $v_packet->in_facilitas_8 == null && $v_packet->in_facilitas_9 == null && $v_packet->out_facilitas != null && $v_packet->out_facilitas_1 != null && $v_packet->out_facilitas_2 != null && $v_packet->out_facilitas_3 != null && $v_packet->out_facilitas_4 != null && $v_packet->out_facilitas_5 != null && $v_packet->out_facilitas_6 != null && $v_packet->out_facilitas_7 == null && $v_packet->out_facilitas_8 == null && $v_packet->out_facilitas_9 == null){ ?>
                <div class="card1_6">
                    <h3>Fasilitas</h3><br>
                    <div class="row_product1">
                        <div class="col_product1">
                            <h4>Termasuk</h4><br>
                                <p>
                                    - <?= $v_packet->in_facilitas ?>
                                </p><br>
                                <p>
                                    - <?= $v_packet->in_facilitas_1 ?>
                                </p><br>
                                <p>
                                    - <?= $v_packet->in_facilitas_2 ?>
                                </p><br>
                                <p>
                                    - <?= $v_packet->in_facilitas_3 ?>
                                </p><br>
                                <p>
                                    - <?= $v_packet->in_facilitas_4 ?>
                                </p>
                        </div>
                        <div class="col_product1">
                            <h4>Tidak Termasuk</h4><br>
                            <p>
                            - <?= $v_packet->out_facilitas ?>
                            </p><br>
                            <p>
                            - <?= $v_packet->out_facilitas_1 ?>
                            </p><br>
                            <p>
                            - <?= $v_packet->out_facilitas_2 ?>
                            </p><br>
                            <p>
                            - <?= $v_packet->out_facilitas_3 ?>
                            </p><br>
                            <p>
                            - <?= $v_packet->out_facilitas_4 ?>
                            </p><br>
                            <p>
                            - <?= $v_packet->out_facilitas_5 ?>
                            </p><br>
                            <p>
                            - <?= $v_packet->out_facilitas_6 ?>
                            </p>
                        </div>
                    </div>
                </div>
            <?php }else if($v_packet->in_facilitas != null && $v_packet->in_facilitas_1 != null && $v_packet->in_facilitas_2 != null && $v_packet->in_facilitas_3 != null && $v_packet->in_facilitas_4 != null && $v_packet->in_facilitas_5 == null && $v_packet->in_facilitas_6 == null && $v_packet->in_facilitas_7 == null && $v_packet->in_facilitas_8 == null && $v_packet->in_facilitas_9 == null && $v_packet->out_facilitas != null && $v_packet->out_facilitas_1 != null && $v_packet->out_facilitas_2 != null && $v_packet->out_facilitas_3 != null && $v_packet->out_facilitas_4 != null && $v_packet->out_facilitas_5 != null && $v_packet->out_facilitas_6 != null && $v_packet->out_facilitas_7 != null && $v_packet->out_facilitas_8 == null && $v_packet->out_facilitas_9 == null){ ?>
                <div class="card1_6">
                    <h3>Fasilitas</h3><br>
                    <div class="row_product1">
                        <div class="col_product1">
                            <h4>Termasuk</h4><br>
                                <p>
                                    - <?= $v_packet->in_facilitas ?>
                                </p><br>
                                <p>
                                    - <?= $v_packet->in_facilitas_1 ?>
                                </p><br>
                                <p>
                                    - <?= $v_packet->in_facilitas_2 ?>
                                </p><br>
                                <p>
                                    - <?= $v_packet->in_facilitas_3 ?>
                                </p><br>
                                <p>
                                    - <?= $v_packet->in_facilitas_4 ?>
                                </p>
                        </div>
                        <div class="col_product1">
                            <h4>Tidak Termasuk</h4><br>
                            <p>
                            - <?= $v_packet->out_facilitas ?>
                            </p><br>
                            <p>
                            - <?= $v_packet->out_facilitas_1 ?>
                            </p><br>
                            <p>
                            - <?= $v_packet->out_facilitas_2 ?>
                            </p><br>
                            <p>
                            - <?= $v_packet->out_facilitas_3 ?>
                            </p><br>
                            <p>
                            - <?= $v_packet->out_facilitas_4 ?>
                            </p><br>
                            <p>
                            - <?= $v_packet->out_facilitas_5 ?>
                            </p><br>
                            <p>
                            - <?= $v_packet->out_facilitas_6 ?>
                            </p><br>
                            <p>
                            - <?= $v_packet->out_facilitas_7 ?>
                            </p>
                        </div>
                    </div>
                </div>
            <?php }else if($v_packet->in_facilitas != null && $v_packet->in_facilitas_1 != null && $v_packet->in_facilitas_2 != null && $v_packet->in_facilitas_3 != null && $v_packet->in_facilitas_4 != null && $v_packet->in_facilitas_5 != null && $v_packet->in_facilitas_6 != null && $v_packet->in_facilitas_7 == null && $v_packet->in_facilitas_8 == null && $v_packet->in_facilitas_9 == null && $v_packet->out_facilitas != null && $v_packet->out_facilitas_1 == null && $v_packet->out_facilitas_2 == null && $v_packet->out_facilitas_3 == null && $v_packet->out_facilitas_4 == null && $v_packet->out_facilitas_5 == null && $v_packet->out_facilitas_6 == null && $v_packet->out_facilitas_7 == null && $v_packet->out_facilitas_8 == null && $v_packet->out_facilitas_9 == null){ ?>
                <div class="card1_7">
                    <h3>Fasilitas</h3><br>
                    <div class="row_product1">
                        <div class="col_product1">
                            <h4>Termasuk</h4><br>
                                <p>
                                    - <?= $v_packet->in_facilitas ?>
                                </p><br>
                                <p>
                                    - <?= $v_packet->in_facilitas_1 ?>
                                </p><br>
                                <p>
                                    - <?= $v_packet->in_facilitas_2 ?>
                                </p><br>
                                <p>
                                    - <?= $v_packet->in_facilitas_3 ?>
                                </p><br>
                                <p>
                                    - <?= $v_packet->in_facilitas_4 ?>
                                </p><br>
                                <p>
                                    - <?= $v_packet->in_facilitas_5 ?>
                                </p><br>
                                <p>
                                    - <?= $v_packet->in_facilitas_6 ?>
                                </p>
                        </div>
                        <div class="col_product1">
                            <h4>Tidak Termasuk</h4><br>
                            <p>
                            - <?= $v_packet->out_facilitas ?>
                            </p>
                        </div>
                    </div>
                </div>
            <?php }else if($v_packet->in_facilitas != null && $v_packet->in_facilitas_1 != null && $v_packet->in_facilitas_2 != null && $v_packet->in_facilitas_3 != null && $v_packet->in_facilitas_4 != null && $v_packet->in_facilitas_5 != null && $v_packet->in_facilitas_6 != null && $v_packet->in_facilitas_7 == null && $v_packet->in_facilitas_8 == null && $v_packet->in_facilitas_9 == null && $v_packet->out_facilitas != null && $v_packet->out_facilitas_1 != null && $v_packet->out_facilitas_2 == null && $v_packet->out_facilitas_3 == null && $v_packet->out_facilitas_4 == null && $v_packet->out_facilitas_5 == null && $v_packet->out_facilitas_6 == null && $v_packet->out_facilitas_7 == null && $v_packet->out_facilitas_8 == null && $v_packet->out_facilitas_9 == null){ ?>
                <div class="card1_7">
                    <h3>Fasilitas</h3><br>
                    <div class="row_product1">
                        <div class="col_product1">
                            <h4>Termasuk</h4><br>
                                <p>
                                    - <?= $v_packet->in_facilitas ?>
                                </p><br>
                                <p>
                                    - <?= $v_packet->in_facilitas_1 ?>
                                </p><br>
                                <p>
                                    - <?= $v_packet->in_facilitas_2 ?>
                                </p><br>
                                <p>
                                    - <?= $v_packet->in_facilitas_3 ?>
                                </p><br>
                                <p>
                                    - <?= $v_packet->in_facilitas_4 ?>
                                </p><br>
                                <p>
                                    - <?= $v_packet->in_facilitas_5 ?>
                                </p><br>
                                <p>
                                    - <?= $v_packet->in_facilitas_6 ?>
                                </p>
                        </div>
                        <div class="col_product1">
                            <h4>Tidak Termasuk</h4><br>
                            <p>
                            - <?= $v_packet->out_facilitas ?>
                            </p><br>
                            <p>
                            - <?= $v_packet->out_facilitas_1 ?>
                            </p>
                        </div>
                    </div>
                </div>
            <?php }else if($v_packet->in_facilitas != null && $v_packet->in_facilitas_1 != null && $v_packet->in_facilitas_2 != null && $v_packet->in_facilitas_3 != null && $v_packet->in_facilitas_4 != null && $v_packet->in_facilitas_5 != null && $v_packet->in_facilitas_6 != null && $v_packet->in_facilitas_7 == null && $v_packet->in_facilitas_8 == null && $v_packet->in_facilitas_9 == null && $v_packet->out_facilitas != null && $v_packet->out_facilitas_1 != null && $v_packet->out_facilitas_2 != null && $v_packet->out_facilitas_3 == null && $v_packet->out_facilitas_4 == null && $v_packet->out_facilitas_5 == null && $v_packet->out_facilitas_6 == null && $v_packet->out_facilitas_7 == null && $v_packet->out_facilitas_8 == null && $v_packet->out_facilitas_9 == null){ ?>
                <div class="card1_7">
                    <h3>Fasilitas</h3><br>
                    <div class="row_product1">
                        <div class="col_product1">
                            <h4>Termasuk</h4><br>
                                <p>
                                    - <?= $v_packet->in_facilitas ?>
                                </p><br>
                                <p>
                                    - <?= $v_packet->in_facilitas_1 ?>
                                </p><br>
                                <p>
                                    - <?= $v_packet->in_facilitas_2 ?>
                                </p><br>
                                <p>
                                    - <?= $v_packet->in_facilitas_3 ?>
                                </p><br>
                                <p>
                                    - <?= $v_packet->in_facilitas_4 ?>
                                </p><br>
                                <p>
                                    - <?= $v_packet->in_facilitas_5 ?>
                                </p><br>
                                <p>
                                    - <?= $v_packet->in_facilitas_6 ?>
                                </p>
                        </div>
                        <div class="col_product1">
                            <h4>Tidak Termasuk</h4><br>
                            <p>
                            - <?= $v_packet->out_facilitas ?>
                            </p><br>
                            <p>
                            - <?= $v_packet->out_facilitas_1 ?>
                            </p><br>
                            <p>
                            - <?= $v_packet->out_facilitas_2 ?>
                            </p>
                        </div>
                    </div>
                </div>
            <?php }else if($v_packet->in_facilitas != null && $v_packet->in_facilitas_1 != null && $v_packet->in_facilitas_2 != null && $v_packet->in_facilitas_3 != null && $v_packet->in_facilitas_4 != null && $v_packet->in_facilitas_5 != null && $v_packet->in_facilitas_6 != null && $v_packet->in_facilitas_7 == null && $v_packet->in_facilitas_8 == null && $v_packet->in_facilitas_9 == null && $v_packet->out_facilitas != null && $v_packet->out_facilitas_1 != null && $v_packet->out_facilitas_2 != null && $v_packet->out_facilitas_3 != null && $v_packet->out_facilitas_4 == null && $v_packet->out_facilitas_5 == null && $v_packet->out_facilitas_6 == null && $v_packet->out_facilitas_7 == null && $v_packet->out_facilitas_8 == null && $v_packet->out_facilitas_9 == null){ ?>
                <div class="card1_7">
                    <h3>Fasilitas</h3><br>
                    <div class="row_product1">
                        <div class="col_product1">
                            <h4>Termasuk</h4><br>
                                <p>
                                    - <?= $v_packet->in_facilitas ?>
                                </p><br>
                                <p>
                                    - <?= $v_packet->in_facilitas_1 ?>
                                </p><br>
                                <p>
                                    - <?= $v_packet->in_facilitas_2 ?>
                                </p><br>
                                <p>
                                    - <?= $v_packet->in_facilitas_3 ?>
                                </p><br>
                                <p>
                                    - <?= $v_packet->in_facilitas_4 ?>
                                </p><br>
                                <p>
                                    - <?= $v_packet->in_facilitas_5 ?>
                                </p><br>
                                <p>
                                    - <?= $v_packet->in_facilitas_6 ?>
                                </p>
                        </div>
                        <div class="col_product1">
                            <h4>Tidak Termasuk</h4><br>
                            <p>
                            - <?= $v_packet->out_facilitas ?>
                            </p><br>
                            <p>
                            - <?= $v_packet->out_facilitas_1 ?>
                            </p><br>
                            <p>
                            - <?= $v_packet->out_facilitas_2 ?>
                            </p><br>
                            <p>
                            - <?= $v_packet->out_facilitas_3 ?>
                            </p>
                        </div>
                    </div>
                </div>
            <?php }else if($v_packet->in_facilitas != null && $v_packet->in_facilitas_1 != null && $v_packet->in_facilitas_2 != null && $v_packet->in_facilitas_3 != null && $v_packet->in_facilitas_4 != null && $v_packet->in_facilitas_5 != null && $v_packet->in_facilitas_6 != null && $v_packet->in_facilitas_7 == null && $v_packet->in_facilitas_8 == null && $v_packet->in_facilitas_9 == null && $v_packet->out_facilitas != null && $v_packet->out_facilitas_1 != null && $v_packet->out_facilitas_2 != null && $v_packet->out_facilitas_3 != null && $v_packet->out_facilitas_4 != null && $v_packet->out_facilitas_5 == null && $v_packet->out_facilitas_6 == null && $v_packet->out_facilitas_7 == null && $v_packet->out_facilitas_8 == null && $v_packet->out_facilitas_9 == null){ ?>
                <div class="card1_7">
                    <h3>Fasilitas</h3><br>
                    <div class="row_product1">
                        <div class="col_product1">
                            <h4>Termasuk</h4><br>
                                <p>
                                    - <?= $v_packet->in_facilitas ?>
                                </p><br>
                                <p>
                                    - <?= $v_packet->in_facilitas_1 ?>
                                </p><br>
                                <p>
                                    - <?= $v_packet->in_facilitas_2 ?>
                                </p><br>
                                <p>
                                    - <?= $v_packet->in_facilitas_3 ?>
                                </p><br>
                                <p>
                                    - <?= $v_packet->in_facilitas_4 ?>
                                </p><br>
                                <p>
                                    - <?= $v_packet->in_facilitas_5 ?>
                                </p><br>
                                <p>
                                    - <?= $v_packet->in_facilitas_6 ?>
                                </p>
                        </div>
                        <div class="col_product1">
                            <h4>Tidak Termasuk</h4><br>
                            <p>
                            - <?= $v_packet->out_facilitas ?>
                            </p><br>
                            <p>
                            - <?= $v_packet->out_facilitas_1 ?>
                            </p><br>
                            <p>
                            - <?= $v_packet->out_facilitas_2 ?>
                            </p><br>
                            <p>
                            - <?= $v_packet->out_facilitas_3 ?>
                            </p><br>
                            <p>
                            - <?= $v_packet->out_facilitas_4 ?>
                            </p>
                        </div>
                    </div>
                </div>
            <?php }else if($v_packet->in_facilitas != null && $v_packet->in_facilitas_1 != null && $v_packet->in_facilitas_2 != null && $v_packet->in_facilitas_3 != null && $v_packet->in_facilitas_4 != null && $v_packet->in_facilitas_5 != null && $v_packet->in_facilitas_6 != null && $v_packet->in_facilitas_7 == null && $v_packet->in_facilitas_8 == null && $v_packet->in_facilitas_9 == null && $v_packet->out_facilitas != null && $v_packet->out_facilitas_1 != null && $v_packet->out_facilitas_2 != null && $v_packet->out_facilitas_3 != null && $v_packet->out_facilitas_4 != null && $v_packet->out_facilitas_5 != null && $v_packet->out_facilitas_6 == null && $v_packet->out_facilitas_7 == null && $v_packet->out_facilitas_8 == null && $v_packet->out_facilitas_9 == null){ ?>
                <div class="card1_7">
                    <h3>Fasilitas</h3><br>
                    <div class="row_product1">
                        <div class="col_product1">
                            <h4>Termasuk</h4><br>
                                <p>
                                    - <?= $v_packet->in_facilitas ?>
                                </p><br>
                                <p>
                                    - <?= $v_packet->in_facilitas_1 ?>
                                </p><br>
                                <p>
                                    - <?= $v_packet->in_facilitas_2 ?>
                                </p><br>
                                <p>
                                    - <?= $v_packet->in_facilitas_3 ?>
                                </p><br>
                                <p>
                                    - <?= $v_packet->in_facilitas_4 ?>
                                </p><br>
                                <p>
                                    - <?= $v_packet->in_facilitas_5 ?>
                                </p><br>
                                <p>
                                    - <?= $v_packet->in_facilitas_6 ?>
                                </p>
                        </div>
                        <div class="col_product1">
                            <h4>Tidak Termasuk</h4><br>
                            <p>
                            - <?= $v_packet->out_facilitas ?>
                            </p><br>
                            <p>
                            - <?= $v_packet->out_facilitas_1 ?>
                            </p><br>
                            <p>
                            - <?= $v_packet->out_facilitas_2 ?>
                            </p><br>
                            <p>
                            - <?= $v_packet->out_facilitas_3 ?>
                            </p><br>
                            <p>
                            - <?= $v_packet->out_facilitas_4 ?>
                            </p><br>
                            <p>
                            - <?= $v_packet->out_facilitas_5 ?>
                            </p>
                        </div>
                    </div>
                </div>
            <?php }else if($v_packet->in_facilitas != null && $v_packet->in_facilitas_1 != null && $v_packet->in_facilitas_2 != null && $v_packet->in_facilitas_3 != null && $v_packet->in_facilitas_4 != null && $v_packet->in_facilitas_5 != null && $v_packet->in_facilitas_6 != null && $v_packet->in_facilitas_7 == null && $v_packet->in_facilitas_8 == null && $v_packet->in_facilitas_9 == null && $v_packet->out_facilitas != null && $v_packet->out_facilitas_1 != null && $v_packet->out_facilitas_2 != null && $v_packet->out_facilitas_3 != null && $v_packet->out_facilitas_4 != null && $v_packet->out_facilitas_5 != null && $v_packet->out_facilitas_6 != null && $v_packet->out_facilitas_7 == null && $v_packet->out_facilitas_8 == null && $v_packet->out_facilitas_9 == null){ ?>
                <div class="card1_7">
                    <h3>Fasilitas</h3><br>
                    <div class="row_product1">
                        <div class="col_product1">
                            <h4>Termasuk</h4><br>
                                <p>
                                    - <?= $v_packet->in_facilitas ?>
                                </p><br>
                                <p>
                                    - <?= $v_packet->in_facilitas_1 ?>
                                </p><br>
                                <p>
                                    - <?= $v_packet->in_facilitas_2 ?>
                                </p><br>
                                <p>
                                    - <?= $v_packet->in_facilitas_3 ?>
                                </p><br>
                                <p>
                                    - <?= $v_packet->in_facilitas_4 ?>
                                </p><br>
                                <p>
                                    - <?= $v_packet->in_facilitas_5 ?>
                                </p><br>
                                <p>
                                    - <?= $v_packet->in_facilitas_6 ?>
                                </p>
                        </div>
                        <div class="col_product1">
                            <h4>Tidak Termasuk</h4><br>
                            <p>
                            - <?= $v_packet->out_facilitas ?>
                            </p><br>
                            <p>
                            - <?= $v_packet->out_facilitas_1 ?>
                            </p><br>
                            <p>
                            - <?= $v_packet->out_facilitas_2 ?>
                            </p><br>
                            <p>
                            - <?= $v_packet->out_facilitas_3 ?>
                            </p><br>
                            <p>
                            - <?= $v_packet->out_facilitas_4 ?>
                            </p><br>
                            <p>
                            - <?= $v_packet->out_facilitas_5 ?>
                            </p><br>
                            <p>
                            - <?= $v_packet->out_facilitas_6 ?>
                            </p>
                        </div>
                    </div>
                </div>
            <?php }else if($v_packet->in_facilitas != null && $v_packet->in_facilitas_1 != null && $v_packet->in_facilitas_2 != null && $v_packet->in_facilitas_3 != null && $v_packet->in_facilitas_4 != null && $v_packet->in_facilitas_5 != null && $v_packet->in_facilitas_6 != null && $v_packet->in_facilitas_7 == null && $v_packet->in_facilitas_8 == null && $v_packet->in_facilitas_9 == null && $v_packet->out_facilitas != null && $v_packet->out_facilitas_1 != null && $v_packet->out_facilitas_2 != null && $v_packet->out_facilitas_3 != null && $v_packet->out_facilitas_4 != null && $v_packet->out_facilitas_5 != null && $v_packet->out_facilitas_6 != null && $v_packet->out_facilitas_7 != null && $v_packet->out_facilitas_8 == null && $v_packet->out_facilitas_9 == null){ ?>
                <div class="card1_7">
                    <h3>Fasilitas</h3><br>
                    <div class="row_product1">
                        <div class="col_product1">
                            <h4>Termasuk</h4><br>
                                <p>
                                    - <?= $v_packet->in_facilitas ?>
                                </p><br>
                                <p>
                                    - <?= $v_packet->in_facilitas_1 ?>
                                </p><br>
                                <p>
                                    - <?= $v_packet->in_facilitas_2 ?>
                                </p><br>
                                <p>
                                    - <?= $v_packet->in_facilitas_3 ?>
                                </p><br>
                                <p>
                                    - <?= $v_packet->in_facilitas_4 ?>
                                </p><br>
                                <p>
                                    - <?= $v_packet->in_facilitas_5 ?>
                                </p><br>
                                <p>
                                    - <?= $v_packet->in_facilitas_6 ?>
                                </p>
                        </div>
                        <div class="col_product1">
                            <h4>Tidak Termasuk</h4><br>
                            <p>
                            - <?= $v_packet->out_facilitas ?>
                            </p><br>
                            <p>
                            - <?= $v_packet->out_facilitas_1 ?>
                            </p><br>
                            <p>
                            - <?= $v_packet->out_facilitas_2 ?>
                            </p><br>
                            <p>
                            - <?= $v_packet->out_facilitas_3 ?>
                            </p><br>
                            <p>
                            - <?= $v_packet->out_facilitas_4 ?>
                            </p><br>
                            <p>
                            - <?= $v_packet->out_facilitas_5 ?>
                            </p><br>
                            <p>
                            - <?= $v_packet->out_facilitas_6 ?>
                            </p><br>
                            <p>
                            - <?= $v_packet->out_facilitas_7 ?>
                            </p>
                        </div>
                    </div>
                </div>
            <?php }else if($v_packet->in_facilitas != null && $v_packet->in_facilitas_1 != null && $v_packet->in_facilitas_2 != null && $v_packet->in_facilitas_3 != null && $v_packet->in_facilitas_4 != null && $v_packet->in_facilitas_5 != null && $v_packet->in_facilitas_6 != null && $v_packet->in_facilitas_7 == null && $v_packet->in_facilitas_8 == null && $v_packet->in_facilitas_9 == null && $v_packet->out_facilitas != null && $v_packet->out_facilitas_1 != null && $v_packet->out_facilitas_2 != null && $v_packet->out_facilitas_3 != null && $v_packet->out_facilitas_4 != null && $v_packet->out_facilitas_5 != null && $v_packet->out_facilitas_6 != null && $v_packet->out_facilitas_7 != null && $v_packet->out_facilitas_8 != null && $v_packet->out_facilitas_9 == null){ ?>
                <div class="card1_7">
                    <h3>Fasilitas</h3><br>
                    <div class="row_product1">
                        <div class="col_product1">
                            <h4>Termasuk</h4><br>
                                <p>
                                    - <?= $v_packet->in_facilitas ?>
                                </p><br>
                                <p>
                                    - <?= $v_packet->in_facilitas_1 ?>
                                </p><br>
                                <p>
                                    - <?= $v_packet->in_facilitas_2 ?>
                                </p><br>
                                <p>
                                    - <?= $v_packet->in_facilitas_3 ?>
                                </p><br>
                                <p>
                                    - <?= $v_packet->in_facilitas_4 ?>
                                </p><br>
                                <p>
                                    - <?= $v_packet->in_facilitas_5 ?>
                                </p><br>
                                <p>
                                    - <?= $v_packet->in_facilitas_6 ?>
                                </p>
                        </div>
                        <div class="col_product1">
                            <h4>Tidak Termasuk</h4><br>
                            <p>
                            - <?= $v_packet->out_facilitas ?>
                            </p><br>
                            <p>
                            - <?= $v_packet->out_facilitas_1 ?>
                            </p><br>
                            <p>
                            - <?= $v_packet->out_facilitas_2 ?>
                            </p><br>
                            <p>
                            - <?= $v_packet->out_facilitas_3 ?>
                            </p><br>
                            <p>
                            - <?= $v_packet->out_facilitas_4 ?>
                            </p><br>
                            <p>
                            - <?= $v_packet->out_facilitas_5 ?>
                            </p><br>
                            <p>
                            - <?= $v_packet->out_facilitas_6 ?>
                            </p><br>
                            <p>
                            - <?= $v_packet->out_facilitas_7 ?>
                            </p><br>
                            <p>
                            - <?= $v_packet->out_facilitas_8 ?>
                            </p>
                        </div>
                    </div>
                </div>    
            <?php }else if($v_packet->in_facilitas != null && $v_packet->in_facilitas_1 != null && $v_packet->in_facilitas_2 != null && $v_packet->in_facilitas_3 != null && $v_packet->in_facilitas_4 != null && $v_packet->in_facilitas_5 == null && $v_packet->in_facilitas_6 == null && $v_packet->in_facilitas_7 == null && $v_packet->in_facilitas_8 == null && $v_packet->in_facilitas_9 == null && $v_packet->out_facilitas != null && $v_packet->out_facilitas_1 != null && $v_packet->out_facilitas_2 != null && $v_packet->out_facilitas_3 != null && $v_packet->out_facilitas_4 != null && $v_packet->out_facilitas_5 != null && $v_packet->out_facilitas_6 != null && $v_packet->out_facilitas_7 != null && $v_packet->out_facilitas_8 != null && $v_packet->out_facilitas_9 == null){ ?>
                <div class="card1_7">
                    <h3>Fasilitas</h3><br>
                    <div class="row_product1">
                        <div class="col_product1">
                            <h4>Termasuk</h4><br>
                                <p>
                                    - <?= $v_packet->in_facilitas ?>
                                </p><br>
                                <p>
                                    - <?= $v_packet->in_facilitas_1 ?>
                                </p><br>
                                <p>
                                    - <?= $v_packet->in_facilitas_2 ?>
                                </p><br>
                                <p>
                                    - <?= $v_packet->in_facilitas_3 ?>
                                </p><br>
                                <p>
                                    - <?= $v_packet->in_facilitas_4 ?>
                                </p>
                        </div>
                        <div class="col_product1">
                            <h4>Tidak Termasuk</h4><br>
                            <p>
                            - <?= $v_packet->out_facilitas ?>
                            </p><br>
                            <p>
                            - <?= $v_packet->out_facilitas_1 ?>
                            </p><br>
                            <p>
                            - <?= $v_packet->out_facilitas_2 ?>
                            </p><br>
                            <p>
                            - <?= $v_packet->out_facilitas_3 ?>
                            </p><br>
                            <p>
                            - <?= $v_packet->out_facilitas_4 ?>
                            </p><br>
                            <p>
                            - <?= $v_packet->out_facilitas_5 ?>
                            </p><br>
                            <p>
                            - <?= $v_packet->out_facilitas_6 ?>
                            </p><br>
                            <p>
                            - <?= $v_packet->out_facilitas_7 ?>
                            </p><br>
                            <p>
                            - <?= $v_packet->out_facilitas_8 ?>
                            </p>
                        </div>
                    </div>
                </div>
            <?php }else if($v_packet->in_facilitas != null && $v_packet->in_facilitas_1 == null && $v_packet->in_facilitas_2 == null && $v_packet->in_facilitas_3 == null && $v_packet->in_facilitas_4 == null && $v_packet->in_facilitas_5 == null && $v_packet->in_facilitas_6 == null && $v_packet->in_facilitas_7 == null && $v_packet->in_facilitas_8 == null && $v_packet->in_facilitas_9 == null && $v_packet->out_facilitas != null && $v_packet->out_facilitas_1 != null && $v_packet->out_facilitas_2 != null && $v_packet->out_facilitas_3 != null && $v_packet->out_facilitas_4 != null && $v_packet->out_facilitas_5 != null && $v_packet->out_facilitas_6 != null && $v_packet->out_facilitas_7 != null && $v_packet->out_facilitas_8 != null && $v_packet->out_facilitas_9 != null){ ?>
                <div class="card1_7">
                    <h3>Fasilitas</h3><br>
                    <div class="row_product1">
                        <div class="col_product1">
                            <h4>Termasuk</h4><br>
                                <p>
                                    - <?= $v_packet->in_facilitas ?>
                                </p>
                        </div>
                        <div class="col_product1">
                            <h4>Tidak Termasuk</h4><br>
                            <p>
                            - <?= $v_packet->out_facilitas ?>
                            </p><br>
                            <p>
                            - <?= $v_packet->out_facilitas_1 ?>
                            </p><br>
                            <p>
                            - <?= $v_packet->out_facilitas_2 ?>
                            </p><br>
                            <p>
                            - <?= $v_packet->out_facilitas_3 ?>
                            </p><br>
                            <p>
                            - <?= $v_packet->out_facilitas_4 ?>
                            </p><br>
                            <p>
                            - <?= $v_packet->out_facilitas_5 ?>
                            </p><br>
                            <p>
                            - <?= $v_packet->out_facilitas_6 ?>
                            </p><br>
                            <p>
                            - <?= $v_packet->out_facilitas_7 ?>
                            </p><br>
                            <p>
                            - <?= $v_packet->out_facilitas_8 ?>
                            </p>
                            <p>
                            - <?= $v_packet->out_facilitas_9 ?>
                            </p>
                        </div>
                    </div>
                </div>
            <?php }else if($v_packet->in_facilitas != null && $v_packet->in_facilitas_1 != null && $v_packet->in_facilitas_2 == null && $v_packet->in_facilitas_3 == null && $v_packet->in_facilitas_4 == null && $v_packet->in_facilitas_5 == null && $v_packet->in_facilitas_6 == null && $v_packet->in_facilitas_7 == null && $v_packet->in_facilitas_8 == null && $v_packet->in_facilitas_9 == null && $v_packet->out_facilitas != null && $v_packet->out_facilitas_1 != null && $v_packet->out_facilitas_2 != null && $v_packet->out_facilitas_3 != null && $v_packet->out_facilitas_4 != null && $v_packet->out_facilitas_5 != null && $v_packet->out_facilitas_6 != null && $v_packet->out_facilitas_7 != null && $v_packet->out_facilitas_8 != null && $v_packet->out_facilitas_9 == null){ ?>
                <div class="card1_7">
                    <h3>Fasilitas</h3><br>
                    <div class="row_product1">
                        <div class="col_product1">
                            <h4>Termasuk</h4><br>
                                <p>
                                    - <?= $v_packet->in_facilitas ?>
                                </p><br>
                                <p>
                                    - <?= $v_packet->in_facilitas_1 ?>
                                </p>
                        </div>
                        <div class="col_product1">
                            <h4>Tidak Termasuk</h4><br>
                            <p>
                            - <?= $v_packet->out_facilitas ?>
                            </p><br>
                            <p>
                            - <?= $v_packet->out_facilitas_1 ?>
                            </p><br>
                            <p>
                            - <?= $v_packet->out_facilitas_2 ?>
                            </p><br>
                            <p>
                            - <?= $v_packet->out_facilitas_3 ?>
                            </p><br>
                            <p>
                            - <?= $v_packet->out_facilitas_4 ?>
                            </p><br>
                            <p>
                            - <?= $v_packet->out_facilitas_5 ?>
                            </p><br>
                            <p>
                            - <?= $v_packet->out_facilitas_6 ?>
                            </p><br>
                            <p>
                            - <?= $v_packet->out_facilitas_7 ?>
                            </p><br>
                            <p>
                            - <?= $v_packet->out_facilitas_8 ?>
                            </p>
                        </div>
                    </div>
                </div>
            <?php }else if($v_packet->in_facilitas != null && $v_packet->in_facilitas_1 != null && $v_packet->in_facilitas_2 != null && $v_packet->in_facilitas_3 == null && $v_packet->in_facilitas_4 == null && $v_packet->in_facilitas_5 == null && $v_packet->in_facilitas_6 == null && $v_packet->in_facilitas_7 == null && $v_packet->in_facilitas_8 == null && $v_packet->in_facilitas_9 == null && $v_packet->out_facilitas != null && $v_packet->out_facilitas_1 != null && $v_packet->out_facilitas_2 != null && $v_packet->out_facilitas_3 != null && $v_packet->out_facilitas_4 != null && $v_packet->out_facilitas_5 != null && $v_packet->out_facilitas_6 != null && $v_packet->out_facilitas_7 != null && $v_packet->out_facilitas_8 != null && $v_packet->out_facilitas_9 == null){ ?>
                <div class="card1_7">
                    <h3>Fasilitas</h3><br>
                    <div class="row_product1">
                        <div class="col_product1">
                            <h4>Termasuk</h4><br>
                                <p>
                                    - <?= $v_packet->in_facilitas ?>
                                </p><br>
                                <p>
                                    - <?= $v_packet->in_facilitas_1 ?>
                                </p><br>
                                <p>
                                    - <?= $v_packet->in_facilitas_2 ?>
                                </p>
                        </div>
                        <div class="col_product1">
                            <h4>Tidak Termasuk</h4><br>
                            <p>
                            - <?= $v_packet->out_facilitas ?>
                            </p><br>
                            <p>
                            - <?= $v_packet->out_facilitas_1 ?>
                            </p><br>
                            <p>
                            - <?= $v_packet->out_facilitas_2 ?>
                            </p><br>
                            <p>
                            - <?= $v_packet->out_facilitas_3 ?>
                            </p><br>
                            <p>
                            - <?= $v_packet->out_facilitas_4 ?>
                            </p><br>
                            <p>
                            - <?= $v_packet->out_facilitas_5 ?>
                            </p><br>
                            <p>
                            - <?= $v_packet->out_facilitas_6 ?>
                            </p><br>
                            <p>
                            - <?= $v_packet->out_facilitas_7 ?>
                            </p><br>
                            <p>
                            - <?= $v_packet->out_facilitas_8 ?>
                            </p>
                        </div>
                    </div>
                </div>
            <?php }else if($v_packet->in_facilitas != null && $v_packet->in_facilitas_1 != null && $v_packet->in_facilitas_2 != null && $v_packet->in_facilitas_3 != null && $v_packet->in_facilitas_4 == null && $v_packet->in_facilitas_5 == null && $v_packet->in_facilitas_6 == null && $v_packet->in_facilitas_7 == null && $v_packet->in_facilitas_8 == null && $v_packet->in_facilitas_9 == null && $v_packet->out_facilitas != null && $v_packet->out_facilitas_1 != null && $v_packet->out_facilitas_2 != null && $v_packet->out_facilitas_3 != null && $v_packet->out_facilitas_4 != null && $v_packet->out_facilitas_5 != null && $v_packet->out_facilitas_6 != null && $v_packet->out_facilitas_7 != null && $v_packet->out_facilitas_8 != null && $v_packet->out_facilitas_9 == null){ ?>
                <div class="card1_7">
                    <h3>Fasilitas</h3><br>
                    <div class="row_product1">
                        <div class="col_product1">
                            <h4>Termasuk</h4><br>
                                <p>
                                    - <?= $v_packet->in_facilitas ?>
                                </p><br>
                                <p>
                                    - <?= $v_packet->in_facilitas_1 ?>
                                </p><br>
                                <p>
                                    - <?= $v_packet->in_facilitas_2 ?>
                                </p><br>
                                <p>
                                    - <?= $v_packet->in_facilitas_3 ?>
                                </p>
                        </div>
                        <div class="col_product1">
                            <h4>Tidak Termasuk</h4><br>
                            <p>
                            - <?= $v_packet->out_facilitas ?>
                            </p><br>
                            <p>
                            - <?= $v_packet->out_facilitas_1 ?>
                            </p><br>
                            <p>
                            - <?= $v_packet->out_facilitas_2 ?>
                            </p><br>
                            <p>
                            - <?= $v_packet->out_facilitas_3 ?>
                            </p><br>
                            <p>
                            - <?= $v_packet->out_facilitas_4 ?>
                            </p><br>
                            <p>
                            - <?= $v_packet->out_facilitas_5 ?>
                            </p><br>
                            <p>
                            - <?= $v_packet->out_facilitas_6 ?>
                            </p><br>
                            <p>
                            - <?= $v_packet->out_facilitas_7 ?>
                            </p><br>
                            <p>
                            - <?= $v_packet->out_facilitas_8 ?>
                            </p>
                        </div>
                    </div>
                </div>
                <?php }else if($v_packet->in_facilitas != null && $v_packet->in_facilitas_1 != null && $v_packet->in_facilitas_2 != null && $v_packet->in_facilitas_3 != null && $v_packet->in_facilitas_4 != null && $v_packet->in_facilitas_5 != null && $v_packet->in_facilitas_6 == null && $v_packet->in_facilitas_7 == null && $v_packet->in_facilitas_8 == null && $v_packet->in_facilitas_9 == null && $v_packet->out_facilitas != null && $v_packet->out_facilitas_1 != null && $v_packet->out_facilitas_2 != null && $v_packet->out_facilitas_3 != null && $v_packet->out_facilitas_4 != null && $v_packet->out_facilitas_5 != null && $v_packet->out_facilitas_6 != null && $v_packet->out_facilitas_7 != null && $v_packet->out_facilitas_8 != null && $v_packet->out_facilitas_9 == null){ ?>
                <div class="card1_7">
                    <h3>Fasilitas</h3><br>
                    <div class="row_product1">
                        <div class="col_product1">
                            <h4>Termasuk</h4><br>
                                <p>
                                    - <?= $v_packet->in_facilitas ?>
                                </p><br>
                                <p>
                                    - <?= $v_packet->in_facilitas_1 ?>
                                </p><br>
                                <p>
                                    - <?= $v_packet->in_facilitas_2 ?>
                                </p><br>
                                <p>
                                    - <?= $v_packet->in_facilitas_3 ?>
                                </p><br>
                                <p>
                                    - <?= $v_packet->in_facilitas_4 ?>
                                </p><br>
                                <p>
                                    - <?= $v_packet->in_facilitas_5 ?>
                                </p>
                        </div>
                        <div class="col_product1">
                            <h4>Tidak Termasuk</h4><br>
                            <p>
                            - <?= $v_packet->out_facilitas ?>
                            </p><br>
                            <p>
                            - <?= $v_packet->out_facilitas_1 ?>
                            </p><br>
                            <p>
                            - <?= $v_packet->out_facilitas_2 ?>
                            </p><br>
                            <p>
                            - <?= $v_packet->out_facilitas_3 ?>
                            </p><br>
                            <p>
                            - <?= $v_packet->out_facilitas_4 ?>
                            </p><br>
                            <p>
                            - <?= $v_packet->out_facilitas_5 ?>
                            </p><br>
                            <p>
                            - <?= $v_packet->out_facilitas_6 ?>
                            </p><br>
                            <p>
                            - <?= $v_packet->out_facilitas_7 ?>
                            </p><br>
                            <p>
                            - <?= $v_packet->out_facilitas_8 ?>
                            </p>
                        </div>
                    </div>
                </div>
            <?php }else if($v_packet->in_facilitas != null && $v_packet->in_facilitas_1 != null && $v_packet->in_facilitas_2 != null && $v_packet->in_facilitas_3 != null && $v_packet->in_facilitas_4 != null && $v_packet->in_facilitas_5 != null && $v_packet->in_facilitas_6 != null && $v_packet->in_facilitas_7 != null && $v_packet->in_facilitas_8 == null && $v_packet->in_facilitas_9 == null && $v_packet->out_facilitas != null && $v_packet->out_facilitas_1 == null && $v_packet->out_facilitas_2 == null && $v_packet->out_facilitas_3 == null && $v_packet->out_facilitas_4 == null && $v_packet->out_facilitas_5 == null && $v_packet->out_facilitas_6 == null && $v_packet->out_facilitas_7 == null && $v_packet->out_facilitas_8 == null && $v_packet->out_facilitas_9 == null){ ?>
                <div class="card1_8">
                    <h3>Fasilitas</h3><br>
                    <div class="row_product1">
                        <div class="col_product1">
                            <h4>Termasuk</h4><br>
                                <p>
                                    - <?= $v_packet->in_facilitas ?>
                                </p><br>
                                <p>
                                    - <?= $v_packet->in_facilitas_1 ?>
                                </p><br>
                                <p>
                                    - <?= $v_packet->in_facilitas_2 ?>
                                </p><br>
                                <p>
                                    - <?= $v_packet->in_facilitas_3 ?>
                                </p><br>
                                <p>
                                    - <?= $v_packet->in_facilitas_4 ?>
                                </p><br>
                                <p>
                                    - <?= $v_packet->in_facilitas_5 ?>
                                </p><br>
                                <p>
                                    - <?= $v_packet->in_facilitas_6 ?>
                                </p><br>
                                <p>
                                    - <?= $v_packet->in_facilitas_7 ?>
                                </p>
                        </div>
                        <div class="col_product1">
                            <h4>Tidak Termasuk</h4><br>
                            <p>
                            - <?= $v_packet->out_facilitas ?>
                        </div>
                    </div>
                </div>
            <?php }else if($v_packet->in_facilitas != null && $v_packet->in_facilitas_1 != null && $v_packet->in_facilitas_2 != null && $v_packet->in_facilitas_3 != null && $v_packet->in_facilitas_4 != null && $v_packet->in_facilitas_5 != null && $v_packet->in_facilitas_6 != null && $v_packet->in_facilitas_7 != null && $v_packet->in_facilitas_8 == null && $v_packet->in_facilitas_9 == null && $v_packet->out_facilitas != null && $v_packet->out_facilitas_1 != null && $v_packet->out_facilitas_2 == null && $v_packet->out_facilitas_3 == null && $v_packet->out_facilitas_4 == null && $v_packet->out_facilitas_5 == null && $v_packet->out_facilitas_6 == null && $v_packet->out_facilitas_7 == null && $v_packet->out_facilitas_8 == null && $v_packet->out_facilitas_9 == null){ ?>
                <div class="card1_8">
                    <h3>Fasilitas</h3><br>
                    <div class="row_product1">
                        <div class="col_product1">
                            <h4>Termasuk</h4><br>
                                <p>
                                    - <?= $v_packet->in_facilitas ?>
                                </p><br>
                                <p>
                                    - <?= $v_packet->in_facilitas_1 ?>
                                </p><br>
                                <p>
                                    - <?= $v_packet->in_facilitas_2 ?>
                                </p><br>
                                <p>
                                    - <?= $v_packet->in_facilitas_3 ?>
                                </p><br>
                                <p>
                                    - <?= $v_packet->in_facilitas_4 ?>
                                </p><br>
                                <p>
                                    - <?= $v_packet->in_facilitas_5 ?>
                                </p><br>
                                <p>
                                    - <?= $v_packet->in_facilitas_6 ?>
                                </p><br>
                                <p>
                                    - <?= $v_packet->in_facilitas_7 ?>
                                </p>
                        </div>
                        <div class="col_product1">
                            <h4>Tidak Termasuk</h4><br>
                            <p>
                            - <?= $v_packet->out_facilitas ?>
                            </p><br>
                            <p>
                            - <?= $v_packet->out_facilitas_1 ?>
                            </p>
                        </div>
                    </div>
                </div>
            <?php }else if($v_packet->in_facilitas != null && $v_packet->in_facilitas_1 != null && $v_packet->in_facilitas_2 != null && $v_packet->in_facilitas_3 != null && $v_packet->in_facilitas_4 != null && $v_packet->in_facilitas_5 != null && $v_packet->in_facilitas_6 != null && $v_packet->in_facilitas_7 != null && $v_packet->in_facilitas_8 == null && $v_packet->in_facilitas_9 == null && $v_packet->out_facilitas != null && $v_packet->out_facilitas_1 != null && $v_packet->out_facilitas_2 != null && $v_packet->out_facilitas_3 == null && $v_packet->out_facilitas_4 == null && $v_packet->out_facilitas_5 == null && $v_packet->out_facilitas_6 == null && $v_packet->out_facilitas_7 == null && $v_packet->out_facilitas_8 == null && $v_packet->out_facilitas_9 == null){ ?>
                <div class="card1_8">
                    <h3>Fasilitas</h3><br>
                    <div class="row_product1">
                        <div class="col_product1">
                            <h4>Termasuk</h4><br>
                                <p>
                                    - <?= $v_packet->in_facilitas ?>
                                </p><br>
                                <p>
                                    - <?= $v_packet->in_facilitas_1 ?>
                                </p><br>
                                <p>
                                    - <?= $v_packet->in_facilitas_2 ?>
                                </p><br>
                                <p>
                                    - <?= $v_packet->in_facilitas_3 ?>
                                </p><br>
                                <p>
                                    - <?= $v_packet->in_facilitas_4 ?>
                                </p><br>
                                <p>
                                    - <?= $v_packet->in_facilitas_5 ?>
                                </p><br>
                                <p>
                                    - <?= $v_packet->in_facilitas_6 ?>
                                </p><br>
                                <p>
                                    - <?= $v_packet->in_facilitas_7 ?>
                                </p>
                        </div>
                        <div class="col_product1">
                            <h4>Tidak Termasuk</h4><br>
                            <p>
                            - <?= $v_packet->out_facilitas ?>
                            </p><br>
                            <p>
                            - <?= $v_packet->out_facilitas_1 ?>
                            </p><br>
                            <p>
                            - <?= $v_packet->out_facilitas_2 ?>
                            </p>
                        </div>
                    </div>
                </div>
            <?php }else if($v_packet->in_facilitas != null && $v_packet->in_facilitas_1 != null && $v_packet->in_facilitas_2 != null && $v_packet->in_facilitas_3 != null && $v_packet->in_facilitas_4 != null && $v_packet->in_facilitas_5 != null && $v_packet->in_facilitas_6 != null && $v_packet->in_facilitas_7 != null && $v_packet->in_facilitas_8 == null && $v_packet->in_facilitas_9 == null && $v_packet->out_facilitas != null && $v_packet->out_facilitas_1 != null && $v_packet->out_facilitas_2 != null && $v_packet->out_facilitas_3 != null && $v_packet->out_facilitas_4 == null && $v_packet->out_facilitas_5 == null && $v_packet->out_facilitas_6 == null && $v_packet->out_facilitas_7 == null && $v_packet->out_facilitas_8 == null && $v_packet->out_facilitas_9 == null){ ?>
                <div class="card1_8">
                    <h3>Fasilitas</h3><br>
                    <div class="row_product1">
                        <div class="col_product1">
                            <h4>Termasuk</h4><br>
                                <p>
                                    - <?= $v_packet->in_facilitas ?>
                                </p><br>
                                <p>
                                    - <?= $v_packet->in_facilitas_1 ?>
                                </p><br>
                                <p>
                                    - <?= $v_packet->in_facilitas_2 ?>
                                </p><br>
                                <p>
                                    - <?= $v_packet->in_facilitas_3 ?>
                                </p><br>
                                <p>
                                    - <?= $v_packet->in_facilitas_4 ?>
                                </p><br>
                                <p>
                                    - <?= $v_packet->in_facilitas_5 ?>
                                </p><br>
                                <p>
                                    - <?= $v_packet->in_facilitas_6 ?>
                                </p><br>
                                <p>
                                    - <?= $v_packet->in_facilitas_7 ?>
                                </p>
                        </div>
                        <div class="col_product1">
                            <h4>Tidak Termasuk</h4><br>
                            <p>
                            - <?= $v_packet->out_facilitas ?>
                            </p><br>
                            <p>
                            - <?= $v_packet->out_facilitas_1 ?>
                            </p><br>
                            <p>
                            - <?= $v_packet->out_facilitas_2 ?>
                            </p><br>
                            <p>
                            - <?= $v_packet->out_facilitas_3 ?>
                            </p>
                        </div>
                    </div>
                </div>
            <?php }else if($v_packet->in_facilitas != null && $v_packet->in_facilitas_1 != null && $v_packet->in_facilitas_2 != null && $v_packet->in_facilitas_3 != null && $v_packet->in_facilitas_4 != null && $v_packet->in_facilitas_5 != null && $v_packet->in_facilitas_6 != null && $v_packet->in_facilitas_7 != null && $v_packet->in_facilitas_8 == null && $v_packet->in_facilitas_9 == null && $v_packet->out_facilitas != null && $v_packet->out_facilitas_1 != null && $v_packet->out_facilitas_2 != null && $v_packet->out_facilitas_3 != null && $v_packet->out_facilitas_4 != null && $v_packet->out_facilitas_5 == null && $v_packet->out_facilitas_6 == null && $v_packet->out_facilitas_7 == null && $v_packet->out_facilitas_8 == null && $v_packet->out_facilitas_9 == null){ ?>
                <div class="card1_8">
                    <h3>Fasilitas</h3><br>
                    <div class="row_product1">
                        <div class="col_product1">
                            <h4>Termasuk</h4><br>
                                <p>
                                    - <?= $v_packet->in_facilitas ?>
                                </p><br>
                                <p>
                                    - <?= $v_packet->in_facilitas_1 ?>
                                </p><br>
                                <p>
                                    - <?= $v_packet->in_facilitas_2 ?>
                                </p><br>
                                <p>
                                    - <?= $v_packet->in_facilitas_3 ?>
                                </p><br>
                                <p>
                                    - <?= $v_packet->in_facilitas_4 ?>
                                </p><br>
                                <p>
                                    - <?= $v_packet->in_facilitas_5 ?>
                                </p><br>
                                <p>
                                    - <?= $v_packet->in_facilitas_6 ?>
                                </p><br>
                                <p>
                                    - <?= $v_packet->in_facilitas_7 ?>
                                </p>
                        </div>
                        <div class="col_product1">
                            <h4>Tidak Termasuk</h4><br>
                            <p>
                            - <?= $v_packet->out_facilitas ?>
                            </p><br>
                            <p>
                            - <?= $v_packet->out_facilitas_1 ?>
                            </p><br>
                            <p>
                            - <?= $v_packet->out_facilitas_2 ?>
                            </p><br>
                            <p>
                            - <?= $v_packet->out_facilitas_3 ?>
                            </p><br>
                            <p>
                            - <?= $v_packet->out_facilitas_4 ?>
                            </p>
                        </div>
                    </div>
                </div>
            <?php }else if($v_packet->in_facilitas != null && $v_packet->in_facilitas_1 != null && $v_packet->in_facilitas_2 != null && $v_packet->in_facilitas_3 != null && $v_packet->in_facilitas_4 != null && $v_packet->in_facilitas_5 != null && $v_packet->in_facilitas_6 != null && $v_packet->in_facilitas_7 != null && $v_packet->in_facilitas_8 == null && $v_packet->in_facilitas_9 == null && $v_packet->out_facilitas != null && $v_packet->out_facilitas_1 != null && $v_packet->out_facilitas_2 != null && $v_packet->out_facilitas_3 != null && $v_packet->out_facilitas_4 != null && $v_packet->out_facilitas_5 != null && $v_packet->out_facilitas_6 == null && $v_packet->out_facilitas_7 == null && $v_packet->out_facilitas_8 == null && $v_packet->out_facilitas_9 == null){ ?>
                <div class="card1_8">
                    <h3>Fasilitas</h3><br>
                    <div class="row_product1">
                        <div class="col_product1">
                            <h4>Termasuk</h4><br>
                                <p>
                                    - <?= $v_packet->in_facilitas ?>
                                </p><br>
                                <p>
                                    - <?= $v_packet->in_facilitas_1 ?>
                                </p><br>
                                <p>
                                    - <?= $v_packet->in_facilitas_2 ?>
                                </p><br>
                                <p>
                                    - <?= $v_packet->in_facilitas_3 ?>
                                </p><br>
                                <p>
                                    - <?= $v_packet->in_facilitas_4 ?>
                                </p><br>
                                <p>
                                    - <?= $v_packet->in_facilitas_5 ?>
                                </p><br>
                                <p>
                                    - <?= $v_packet->in_facilitas_6 ?>
                                </p><br>
                                <p>
                                    - <?= $v_packet->in_facilitas_7 ?>
                                </p>
                        </div>
                        <div class="col_product1">
                            <h4>Tidak Termasuk</h4><br>
                            <p>
                            - <?= $v_packet->out_facilitas ?>
                            </p><br>
                            <p>
                            - <?= $v_packet->out_facilitas_1 ?>
                            </p><br>
                            <p>
                            - <?= $v_packet->out_facilitas_2 ?>
                            </p><br>
                            <p>
                            - <?= $v_packet->out_facilitas_3 ?>
                            </p><br>
                            <p>
                            - <?= $v_packet->out_facilitas_4 ?>
                            </p><br>
                            <p>
                            - <?= $v_packet->out_facilitas_5 ?>
                            </p>
                        </div>
                    </div>
                </div>
            <?php }else if($v_packet->in_facilitas != null && $v_packet->in_facilitas_1 != null && $v_packet->in_facilitas_2 != null && $v_packet->in_facilitas_3 != null && $v_packet->in_facilitas_4 != null && $v_packet->in_facilitas_5 != null && $v_packet->in_facilitas_6 != null && $v_packet->in_facilitas_7 != null && $v_packet->in_facilitas_8 == null && $v_packet->in_facilitas_9 == null && $v_packet->out_facilitas != null && $v_packet->out_facilitas_1 != null && $v_packet->out_facilitas_2 != null && $v_packet->out_facilitas_3 != null && $v_packet->out_facilitas_4 != null && $v_packet->out_facilitas_5 != null && $v_packet->out_facilitas_6 != null && $v_packet->out_facilitas_7 == null && $v_packet->out_facilitas_8 == null && $v_packet->out_facilitas_9 == null){ ?>
                <div class="card1_8">
                    <h3>Fasilitas</h3><br>
                    <div class="row_product1">
                        <div class="col_product1">
                            <h4>Termasuk</h4><br>
                                <p>
                                    - <?= $v_packet->in_facilitas ?>
                                </p><br>
                                <p>
                                    - <?= $v_packet->in_facilitas_1 ?>
                                </p><br>
                                <p>
                                    - <?= $v_packet->in_facilitas_2 ?>
                                </p><br>
                                <p>
                                    - <?= $v_packet->in_facilitas_3 ?>
                                </p><br>
                                <p>
                                    - <?= $v_packet->in_facilitas_4 ?>
                                </p><br>
                                <p>
                                    - <?= $v_packet->in_facilitas_5 ?>
                                </p><br>
                                <p>
                                    - <?= $v_packet->in_facilitas_6 ?>
                                </p><br>
                                <p>
                                    - <?= $v_packet->in_facilitas_7 ?>
                                </p>
                        </div>
                        <div class="col_product1">
                            <h4>Tidak Termasuk</h4><br>
                            <p>
                            - <?= $v_packet->out_facilitas ?>
                            </p><br>
                            <p>
                            - <?= $v_packet->out_facilitas_1 ?>
                            </p><br>
                            <p>
                            - <?= $v_packet->out_facilitas_2 ?>
                            </p><br>
                            <p>
                            - <?= $v_packet->out_facilitas_3 ?>
                            </p><br>
                            <p>
                            - <?= $v_packet->out_facilitas_4 ?>
                            </p><br>
                            <p>
                            - <?= $v_packet->out_facilitas_5 ?>
                            </p><br>
                            <p>
                            - <?= $v_packet->out_facilitas_6 ?>
                            </p>
                        </div>
                    </div>
                </div>
            <?php }else if($v_packet->in_facilitas != null && $v_packet->in_facilitas_1 != null && $v_packet->in_facilitas_2 != null && $v_packet->in_facilitas_3 != null && $v_packet->in_facilitas_4 != null && $v_packet->in_facilitas_5 != null && $v_packet->in_facilitas_6 != null && $v_packet->in_facilitas_7 != null && $v_packet->in_facilitas_8 == null && $v_packet->in_facilitas_9 == null && $v_packet->out_facilitas != null && $v_packet->out_facilitas_1 != null && $v_packet->out_facilitas_2 != null && $v_packet->out_facilitas_3 != null && $v_packet->out_facilitas_4 != null && $v_packet->out_facilitas_5 != null && $v_packet->out_facilitas_6 != null && $v_packet->out_facilitas_7 != null && $v_packet->out_facilitas_8 == null && $v_packet->out_facilitas_9 == null){ ?>
                <div class="card1_8">
                    <h3>Fasilitas</h3><br>
                    <div class="row_product1">
                        <div class="col_product1">
                            <h4>Termasuk</h4><br>
                                <p>
                                    - <?= $v_packet->in_facilitas ?>
                                </p><br>
                                <p>
                                    - <?= $v_packet->in_facilitas_1 ?>
                                </p><br>
                                <p>
                                    - <?= $v_packet->in_facilitas_2 ?>
                                </p><br>
                                <p>
                                    - <?= $v_packet->in_facilitas_3 ?>
                                </p><br>
                                <p>
                                    - <?= $v_packet->in_facilitas_4 ?>
                                </p><br>
                                <p>
                                    - <?= $v_packet->in_facilitas_5 ?>
                                </p><br>
                                <p>
                                    - <?= $v_packet->in_facilitas_6 ?>
                                </p><br>
                                <p>
                                    - <?= $v_packet->in_facilitas_7 ?>
                                </p>
                        </div>
                        <div class="col_product1">
                            <h4>Tidak Termasuk</h4><br>
                            <p>
                            - <?= $v_packet->out_facilitas ?>
                            </p><br>
                            <p>
                            - <?= $v_packet->out_facilitas_1 ?>
                            </p><br>
                            <p>
                            - <?= $v_packet->out_facilitas_2 ?>
                            </p><br>
                            <p>
                            - <?= $v_packet->out_facilitas_3 ?>
                            </p><br>
                            <p>
                            - <?= $v_packet->out_facilitas_4 ?>
                            </p><br>
                            <p>
                            - <?= $v_packet->out_facilitas_5 ?>
                            </p><br>
                            <p>
                            - <?= $v_packet->out_facilitas_6 ?>
                            </p><br>
                            <p>
                            - <?= $v_packet->out_facilitas_7 ?>
                            </p>
                        </div>
                    </div>
                </div>
            <?php }else if($v_packet->in_facilitas != null && $v_packet->in_facilitas_1 != null && $v_packet->in_facilitas_2 != null && $v_packet->in_facilitas_3 != null && $v_packet->in_facilitas_4 != null && $v_packet->in_facilitas_5 != null && $v_packet->in_facilitas_6 != null && $v_packet->in_facilitas_7 != null && $v_packet->in_facilitas_8 == null && $v_packet->in_facilitas_9 == null && $v_packet->out_facilitas != null && $v_packet->out_facilitas_1 != null && $v_packet->out_facilitas_2 != null && $v_packet->out_facilitas_3 != null && $v_packet->out_facilitas_4 != null && $v_packet->out_facilitas_5 != null && $v_packet->out_facilitas_6 != null && $v_packet->out_facilitas_7 != null && $v_packet->out_facilitas_8 != null && $v_packet->out_facilitas_9 == null){ ?>
                <div class="card1_8">
                    <h3>Fasilitas</h3><br>
                    <div class="row_product1">
                        <div class="col_product1">
                            <h4>Termasuk</h4><br>
                                <p>
                                    - <?= $v_packet->in_facilitas ?>
                                </p><br>
                                <p>
                                    - <?= $v_packet->in_facilitas_1 ?>
                                </p><br>
                                <p>
                                    - <?= $v_packet->in_facilitas_2 ?>
                                </p><br>
                                <p>
                                    - <?= $v_packet->in_facilitas_3 ?>
                                </p><br>
                                <p>
                                    - <?= $v_packet->in_facilitas_4 ?>
                                </p><br>
                                <p>
                                    - <?= $v_packet->in_facilitas_5 ?>
                                </p><br>
                                <p>
                                    - <?= $v_packet->in_facilitas_6 ?>
                                </p><br>
                                <p>
                                    - <?= $v_packet->in_facilitas_7 ?>
                                </p>
                        </div>
                        <div class="col_product1">
                            <h4>Tidak Termasuk</h4><br>
                            <p>
                            - <?= $v_packet->out_facilitas ?>
                            </p><br>
                            <p>
                            - <?= $v_packet->out_facilitas_1 ?>
                            </p><br>
                            <p>
                            - <?= $v_packet->out_facilitas_2 ?>
                            </p><br>
                            <p>
                            - <?= $v_packet->out_facilitas_3 ?>
                            </p><br>
                            <p>
                            - <?= $v_packet->out_facilitas_4 ?>
                            </p><br>
                            <p>
                            - <?= $v_packet->out_facilitas_5 ?>
                            </p><br>
                            <p>
                            - <?= $v_packet->out_facilitas_6 ?>
                            </p><br>
                            <p>
                            - <?= $v_packet->out_facilitas_7 ?>
                            </p><br>
                            <p>
                            - <?= $v_packet->out_facilitas_8 ?>
                            </p>
                        </div>
                    </div>
                </div>
            <?php }else if($v_packet->in_facilitas != null && $v_packet->in_facilitas_1 != null && $v_packet->in_facilitas_2 != null && $v_packet->in_facilitas_3 != null && $v_packet->in_facilitas_4 != null && $v_packet->in_facilitas_5 != null && $v_packet->in_facilitas_6 != null && $v_packet->in_facilitas_7 != null && $v_packet->in_facilitas_8 != null && $v_packet->in_facilitas_9 == null && $v_packet->out_facilitas != null && $v_packet->out_facilitas_1 == null && $v_packet->out_facilitas_2 == null && $v_packet->out_facilitas_3 == null && $v_packet->out_facilitas_4 == null && $v_packet->out_facilitas_5 == null && $v_packet->out_facilitas_6 == null && $v_packet->out_facilitas_7 == null && $v_packet->out_facilitas_8 == null && $v_packet->out_facilitas_9 == null){ ?>
                <div class="card1_9">
                    <h3>Fasilitas</h3><br>
                    <div class="row_product1">
                        <div class="col_product1">
                            <h4>Termasuk</h4><br>
                                <p>
                                    - <?= $v_packet->in_facilitas ?>
                                </p><br>
                                <p>
                                    - <?= $v_packet->in_facilitas_1 ?>
                                </p><br>
                                <p>
                                    - <?= $v_packet->in_facilitas_2 ?>
                                </p><br>
                                <p>
                                    - <?= $v_packet->in_facilitas_3 ?>
                                </p><br>
                                <p>
                                    - <?= $v_packet->in_facilitas_4 ?>
                                </p><br>
                                <p>
                                    - <?= $v_packet->in_facilitas_5 ?>
                                </p><br>
                                <p>
                                    - <?= $v_packet->in_facilitas_6 ?>
                                </p><br>
                                <p>
                                    - <?= $v_packet->in_facilitas_7 ?>
                                </p><br>
                                <p>
                                    - <?= $v_packet->in_facilitas_8 ?>
                                </p>
                        </div>
                        <div class="col_product1">
                            <h4>Tidak Termasuk</h4><br>
                            <p>
                            - <?= $v_packet->out_facilitas ?>
                        </div>
                    </div>
                </div>
            <?php }else if($v_packet->in_facilitas != null && $v_packet->in_facilitas_1 != null && $v_packet->in_facilitas_2 != null && $v_packet->in_facilitas_3 != null && $v_packet->in_facilitas_4 != null && $v_packet->in_facilitas_5 != null && $v_packet->in_facilitas_6 != null && $v_packet->in_facilitas_7 != null && $v_packet->in_facilitas_8 != null && $v_packet->in_facilitas_9 == null && $v_packet->out_facilitas != null && $v_packet->out_facilitas_1 != null && $v_packet->out_facilitas_2 == null && $v_packet->out_facilitas_3 == null && $v_packet->out_facilitas_4 == null && $v_packet->out_facilitas_5 == null && $v_packet->out_facilitas_6 == null && $v_packet->out_facilitas_7 == null && $v_packet->out_facilitas_8 == null && $v_packet->out_facilitas_9 == null){ ?>
                <div class="card1_9">
                    <h3>Fasilitas</h3><br>
                    <div class="row_product1">
                        <div class="col_product1">
                            <h4>Termasuk</h4><br>
                                <p>
                                    - <?= $v_packet->in_facilitas ?>
                                </p><br>
                                <p>
                                    - <?= $v_packet->in_facilitas_1 ?>
                                </p><br>
                                <p>
                                    - <?= $v_packet->in_facilitas_2 ?>
                                </p><br>
                                <p>
                                    - <?= $v_packet->in_facilitas_3 ?>
                                </p><br>
                                <p>
                                    - <?= $v_packet->in_facilitas_4 ?>
                                </p><br>
                                <p>
                                    - <?= $v_packet->in_facilitas_5 ?>
                                </p><br>
                                <p>
                                    - <?= $v_packet->in_facilitas_6 ?>
                                </p><br>
                                <p>
                                    - <?= $v_packet->in_facilitas_7 ?>
                                </p><br>
                                <p>
                                    - <?= $v_packet->in_facilitas_8 ?>
                                </p>
                        </div>
                        <div class="col_product1">
                            <h4>Tidak Termasuk</h4><br>
                            <p>
                            - <?= $v_packet->out_facilitas ?>
                            </p><br>
                            <p>
                            - <?= $v_packet->out_facilitas_1 ?>
                            </p>
                        </div>
                    </div>
                </div>
            <?php }else if($v_packet->in_facilitas != null && $v_packet->in_facilitas_1 != null && $v_packet->in_facilitas_2 != null && $v_packet->in_facilitas_3 != null && $v_packet->in_facilitas_4 != null && $v_packet->in_facilitas_5 != null && $v_packet->in_facilitas_6 != null && $v_packet->in_facilitas_7 != null && $v_packet->in_facilitas_8 != null && $v_packet->in_facilitas_9 == null && $v_packet->out_facilitas != null && $v_packet->out_facilitas_1 != null && $v_packet->out_facilitas_2 != null && $v_packet->out_facilitas_3 == null && $v_packet->out_facilitas_4 == null && $v_packet->out_facilitas_5 == null && $v_packet->out_facilitas_6 == null && $v_packet->out_facilitas_7 == null && $v_packet->out_facilitas_8 == null && $v_packet->out_facilitas_9 == null){ ?>
                <div class="card1_9">
                    <h3>Fasilitas</h3><br>
                    <div class="row_product1">
                        <div class="col_product1">
                            <h4>Termasuk</h4><br>
                                <p>
                                    - <?= $v_packet->in_facilitas ?>
                                </p><br>
                                <p>
                                    - <?= $v_packet->in_facilitas_1 ?>
                                </p><br>
                                <p>
                                    - <?= $v_packet->in_facilitas_2 ?>
                                </p><br>
                                <p>
                                    - <?= $v_packet->in_facilitas_3 ?>
                                </p><br>
                                <p>
                                    - <?= $v_packet->in_facilitas_4 ?>
                                </p><br>
                                <p>
                                    - <?= $v_packet->in_facilitas_5 ?>
                                </p><br>
                                <p>
                                    - <?= $v_packet->in_facilitas_6 ?>
                                </p><br>
                                <p>
                                    - <?= $v_packet->in_facilitas_7 ?>
                                </p><br>
                                <p>
                                    - <?= $v_packet->in_facilitas_8 ?>
                                </p>
                        </div>
                        <div class="col_product1">
                            <h4>Tidak Termasuk</h4><br>
                            <p>
                            - <?= $v_packet->out_facilitas ?>
                            </p><br>
                            <p>
                            - <?= $v_packet->out_facilitas_1 ?>
                            </p><br>
                            <p>
                            - <?= $v_packet->out_facilitas_2 ?>
                            </p>
                        </div>
                    </div>
                </div>
            <?php }else if($v_packet->in_facilitas != null && $v_packet->in_facilitas_1 != null && $v_packet->in_facilitas_2 != null && $v_packet->in_facilitas_3 != null && $v_packet->in_facilitas_4 != null && $v_packet->in_facilitas_5 != null && $v_packet->in_facilitas_6 != null && $v_packet->in_facilitas_7 != null && $v_packet->in_facilitas_8 != null && $v_packet->in_facilitas_9 == null && $v_packet->out_facilitas != null && $v_packet->out_facilitas_1 != null && $v_packet->out_facilitas_2 != null && $v_packet->out_facilitas_3 != null && $v_packet->out_facilitas_4 == null && $v_packet->out_facilitas_5 == null && $v_packet->out_facilitas_6 == null && $v_packet->out_facilitas_7 == null && $v_packet->out_facilitas_8 == null && $v_packet->out_facilitas_9 == null){ ?>
                <div class="card1_9">
                    <h3>Fasilitas</h3><br>
                    <div class="row_product1">
                        <div class="col_product1">
                            <h4>Termasuk</h4><br>
                                <p>
                                    - <?= $v_packet->in_facilitas ?>
                                </p><br>
                                <p>
                                    - <?= $v_packet->in_facilitas_1 ?>
                                </p><br>
                                <p>
                                    - <?= $v_packet->in_facilitas_2 ?>
                                </p><br>
                                <p>
                                    - <?= $v_packet->in_facilitas_3 ?>
                                </p><br>
                                <p>
                                    - <?= $v_packet->in_facilitas_4 ?>
                                </p><br>
                                <p>
                                    - <?= $v_packet->in_facilitas_5 ?>
                                </p><br>
                                <p>
                                    - <?= $v_packet->in_facilitas_6 ?>
                                </p><br>
                                <p>
                                    - <?= $v_packet->in_facilitas_7 ?>
                                </p><br>
                                <p>
                                    - <?= $v_packet->in_facilitas_8 ?>
                                </p>
                        </div>
                        <div class="col_product1">
                            <h4>Tidak Termasuk</h4><br>
                            <p>
                            - <?= $v_packet->out_facilitas ?>
                            </p><br>
                            <p>
                            - <?= $v_packet->out_facilitas_1 ?>
                            </p><br>
                            <p>
                            - <?= $v_packet->out_facilitas_2 ?>
                            </p><br>
                            <p>
                            - <?= $v_packet->out_facilitas_3 ?>
                            </p>
                        </div>
                    </div>
                </div>
            <?php }else if($v_packet->in_facilitas != null && $v_packet->in_facilitas_1 != null && $v_packet->in_facilitas_2 != null && $v_packet->in_facilitas_3 != null && $v_packet->in_facilitas_4 != null && $v_packet->in_facilitas_5 != null && $v_packet->in_facilitas_6 != null && $v_packet->in_facilitas_7 != null && $v_packet->in_facilitas_8 != null && $v_packet->in_facilitas_9 == null && $v_packet->out_facilitas != null && $v_packet->out_facilitas_1 != null && $v_packet->out_facilitas_2 != null && $v_packet->out_facilitas_3 != null && $v_packet->out_facilitas_4 != null && $v_packet->out_facilitas_5 == null && $v_packet->out_facilitas_6 == null && $v_packet->out_facilitas_7 == null && $v_packet->out_facilitas_8 == null && $v_packet->out_facilitas_9 == null){ ?>
                <div class="card1_9">
                    <h3>Fasilitas</h3><br>
                    <div class="row_product1">
                        <div class="col_product1">
                            <h4>Termasuk</h4><br>
                                <p>
                                    - <?= $v_packet->in_facilitas ?>
                                </p><br>
                                <p>
                                    - <?= $v_packet->in_facilitas_1 ?>
                                </p><br>
                                <p>
                                    - <?= $v_packet->in_facilitas_2 ?>
                                </p><br>
                                <p>
                                    - <?= $v_packet->in_facilitas_3 ?>
                                </p><br>
                                <p>
                                    - <?= $v_packet->in_facilitas_4 ?>
                                </p><br>
                                <p>
                                    - <?= $v_packet->in_facilitas_5 ?>
                                </p><br>
                                <p>
                                    - <?= $v_packet->in_facilitas_6 ?>
                                </p><br>
                                <p>
                                    - <?= $v_packet->in_facilitas_7 ?>
                                </p><br>
                                <p>
                                    - <?= $v_packet->in_facilitas_8 ?>
                                </p>
                        </div>
                        <div class="col_product1">
                            <h4>Tidak Termasuk</h4><br>
                            <p>
                            - <?= $v_packet->out_facilitas ?>
                            </p><br>
                            <p>
                            - <?= $v_packet->out_facilitas_1 ?>
                            </p><br>
                            <p>
                            - <?= $v_packet->out_facilitas_2 ?>
                            </p><br>
                            <p>
                            - <?= $v_packet->out_facilitas_3 ?>
                            </p><br>
                            <p>
                            - <?= $v_packet->out_facilitas_4 ?>
                            </p>
                        </div>
                    </div>
                </div>
            <?php }else if($v_packet->in_facilitas != null && $v_packet->in_facilitas_1 != null && $v_packet->in_facilitas_2 != null && $v_packet->in_facilitas_3 != null && $v_packet->in_facilitas_4 != null && $v_packet->in_facilitas_5 != null && $v_packet->in_facilitas_6 != null && $v_packet->in_facilitas_7 != null && $v_packet->in_facilitas_8 != null && $v_packet->in_facilitas_9 == null && $v_packet->out_facilitas != null && $v_packet->out_facilitas_1 != null && $v_packet->out_facilitas_2 != null && $v_packet->out_facilitas_3 != null && $v_packet->out_facilitas_4 != null && $v_packet->out_facilitas_5 != null && $v_packet->out_facilitas_6 == null && $v_packet->out_facilitas_7 == null && $v_packet->out_facilitas_8 == null && $v_packet->out_facilitas_9 == null){ ?>
                <div class="card1_9">
                    <h3>Fasilitas</h3><br>
                    <div class="row_product1">
                        <div class="col_product1">
                            <h4>Termasuk</h4><br>
                                <p>
                                    - <?= $v_packet->in_facilitas ?>
                                </p><br>
                                <p>
                                    - <?= $v_packet->in_facilitas_1 ?>
                                </p><br>
                                <p>
                                    - <?= $v_packet->in_facilitas_2 ?>
                                </p><br>
                                <p>
                                    - <?= $v_packet->in_facilitas_3 ?>
                                </p><br>
                                <p>
                                    - <?= $v_packet->in_facilitas_4 ?>
                                </p><br>
                                <p>
                                    - <?= $v_packet->in_facilitas_5 ?>
                                </p><br>
                                <p>
                                    - <?= $v_packet->in_facilitas_6 ?>
                                </p><br>
                                <p>
                                    - <?= $v_packet->in_facilitas_7 ?>
                                </p><br>
                                <p>
                                    - <?= $v_packet->in_facilitas_8 ?>
                                </p>
                        </div>
                        <div class="col_product1">
                            <h4>Tidak Termasuk</h4><br>
                            <p>
                            - <?= $v_packet->out_facilitas ?>
                            </p><br>
                            <p>
                            - <?= $v_packet->out_facilitas_1 ?>
                            </p><br>
                            <p>
                            - <?= $v_packet->out_facilitas_2 ?>
                            </p><br>
                            <p>
                            - <?= $v_packet->out_facilitas_3 ?>
                            </p><br>
                            <p>
                            - <?= $v_packet->out_facilitas_4 ?>
                            </p><br>
                            <p>
                            - <?= $v_packet->out_facilitas_5 ?>
                            </p>
                        </div>
                    </div>
                </div>
            <?php }else if($v_packet->in_facilitas != null && $v_packet->in_facilitas_1 != null && $v_packet->in_facilitas_2 != null && $v_packet->in_facilitas_3 != null && $v_packet->in_facilitas_4 != null && $v_packet->in_facilitas_5 != null && $v_packet->in_facilitas_6 != null && $v_packet->in_facilitas_7 != null && $v_packet->in_facilitas_8 != null && $v_packet->in_facilitas_9 == null && $v_packet->out_facilitas != null && $v_packet->out_facilitas_1 != null && $v_packet->out_facilitas_2 != null && $v_packet->out_facilitas_3 != null && $v_packet->out_facilitas_4 != null && $v_packet->out_facilitas_5 != null && $v_packet->out_facilitas_6 != null && $v_packet->out_facilitas_7 == null && $v_packet->out_facilitas_8 == null && $v_packet->out_facilitas_9 == null){ ?>
                <div class="card1_9">
                    <h3>Fasilitas</h3><br>
                    <div class="row_product1">
                        <div class="col_product1">
                            <h4>Termasuk</h4><br>
                                <p>
                                    - <?= $v_packet->in_facilitas ?>
                                </p><br>
                                <p>
                                    - <?= $v_packet->in_facilitas_1 ?>
                                </p><br>
                                <p>
                                    - <?= $v_packet->in_facilitas_2 ?>
                                </p><br>
                                <p>
                                    - <?= $v_packet->in_facilitas_3 ?>
                                </p><br>
                                <p>
                                    - <?= $v_packet->in_facilitas_4 ?>
                                </p><br>
                                <p>
                                    - <?= $v_packet->in_facilitas_5 ?>
                                </p><br>
                                <p>
                                    - <?= $v_packet->in_facilitas_6 ?>
                                </p><br>
                                <p>
                                    - <?= $v_packet->in_facilitas_7 ?>
                                </p><br>
                                <p>
                                    - <?= $v_packet->in_facilitas_8 ?>
                                </p>
                        </div>
                        <div class="col_product1">
                            <h4>Tidak Termasuk</h4><br>
                            <p>
                            - <?= $v_packet->out_facilitas ?>
                            </p><br>
                            <p>
                            - <?= $v_packet->out_facilitas_1 ?>
                            </p><br>
                            <p>
                            - <?= $v_packet->out_facilitas_2 ?>
                            </p><br>
                            <p>
                            - <?= $v_packet->out_facilitas_3 ?>
                            </p><br>
                            <p>
                            - <?= $v_packet->out_facilitas_4 ?>
                            </p><br>
                            <p>
                            - <?= $v_packet->out_facilitas_5 ?>
                            </p><br>
                            <p>
                            - <?= $v_packet->out_facilitas_6 ?>
                            </p>
                        </div>
                    </div>
                </div>
            <?php }else if($v_packet->in_facilitas != null && $v_packet->in_facilitas_1 != null && $v_packet->in_facilitas_2 != null && $v_packet->in_facilitas_3 != null && $v_packet->in_facilitas_4 != null && $v_packet->in_facilitas_5 != null && $v_packet->in_facilitas_6 != null && $v_packet->in_facilitas_7 != null && $v_packet->in_facilitas_8 != null && $v_packet->in_facilitas_9 == null && $v_packet->out_facilitas != null && $v_packet->out_facilitas_1 != null && $v_packet->out_facilitas_2 != null && $v_packet->out_facilitas_3 != null && $v_packet->out_facilitas_4 != null && $v_packet->out_facilitas_5 != null && $v_packet->out_facilitas_6 != null && $v_packet->out_facilitas_7 != null && $v_packet->out_facilitas_8 == null && $v_packet->out_facilitas_9 == null){ ?>
                <div class="card1_9">
                    <h3>Fasilitas</h3><br>
                    <div class="row_product1">
                        <div class="col_product1">
                            <h4>Termasuk</h4><br>
                                <p>
                                    - <?= $v_packet->in_facilitas ?>
                                </p><br>
                                <p>
                                    - <?= $v_packet->in_facilitas_1 ?>
                                </p><br>
                                <p>
                                    - <?= $v_packet->in_facilitas_2 ?>
                                </p><br>
                                <p>
                                    - <?= $v_packet->in_facilitas_3 ?>
                                </p><br>
                                <p>
                                    - <?= $v_packet->in_facilitas_4 ?>
                                </p><br>
                                <p>
                                    - <?= $v_packet->in_facilitas_5 ?>
                                </p><br>
                                <p>
                                    - <?= $v_packet->in_facilitas_6 ?>
                                </p><br>
                                <p>
                                    - <?= $v_packet->in_facilitas_7 ?>
                                </p><br>
                                <p>
                                    - <?= $v_packet->in_facilitas_8 ?>
                                </p>
                        </div>
                        <div class="col_product1">
                            <h4>Tidak Termasuk</h4><br>
                            <p>
                            - <?= $v_packet->out_facilitas ?>
                            </p><br>
                            <p>
                            - <?= $v_packet->out_facilitas_1 ?>
                            </p><br>
                            <p>
                            - <?= $v_packet->out_facilitas_2 ?>
                            </p><br>
                            <p>
                            - <?= $v_packet->out_facilitas_3 ?>
                            </p><br>
                            <p>
                            - <?= $v_packet->out_facilitas_4 ?>
                            </p><br>
                            <p>
                            - <?= $v_packet->out_facilitas_5 ?>
                            </p><br>
                            <p>
                            - <?= $v_packet->out_facilitas_6 ?>
                            </p><br>
                            <p>
                            - <?= $v_packet->out_facilitas_7 ?>
                            </p>
                        </div>
                    </div>
                </div>
            <?php }else if($v_packet->in_facilitas != null && $v_packet->in_facilitas_1 != null && $v_packet->in_facilitas_2 != null && $v_packet->in_facilitas_3 != null && $v_packet->in_facilitas_4 != null && $v_packet->in_facilitas_5 != null && $v_packet->in_facilitas_6 != null && $v_packet->in_facilitas_7 != null && $v_packet->in_facilitas_8 != null && $v_packet->in_facilitas_9 == null && $v_packet->out_facilitas != null && $v_packet->out_facilitas_1 != null && $v_packet->out_facilitas_2 != null && $v_packet->out_facilitas_3 != null && $v_packet->out_facilitas_4 != null && $v_packet->out_facilitas_5 != null && $v_packet->out_facilitas_6 != null && $v_packet->out_facilitas_7 != null && $v_packet->out_facilitas_8 != null && $v_packet->out_facilitas_9 == null){ ?>
                <div class="card1_9">
                    <h3>Fasilitas</h3><br>
                    <div class="row_product1">
                        <div class="col_product1">
                            <h4>Termasuk</h4><br>
                                <p>
                                    - <?= $v_packet->in_facilitas ?>
                                </p><br>
                                <p>
                                    - <?= $v_packet->in_facilitas_1 ?>
                                </p><br>
                                <p>
                                    - <?= $v_packet->in_facilitas_2 ?>
                                </p><br>
                                <p>
                                    - <?= $v_packet->in_facilitas_3 ?>
                                </p><br>
                                <p>
                                    - <?= $v_packet->in_facilitas_4 ?>
                                </p><br>
                                <p>
                                    - <?= $v_packet->in_facilitas_5 ?>
                                </p><br>
                                <p>
                                    - <?= $v_packet->in_facilitas_6 ?>
                                </p><br>
                                <p>
                                    - <?= $v_packet->in_facilitas_7 ?>
                                </p><br>
                                <p>
                                    - <?= $v_packet->in_facilitas_8 ?>
                                </p>
                        </div>
                        <div class="col_product1">
                            <h4>Tidak Termasuk</h4><br>
                            <p>
                            - <?= $v_packet->out_facilitas ?>
                            </p><br>
                            <p>
                            - <?= $v_packet->out_facilitas_1 ?>
                            </p><br>
                            <p>
                            - <?= $v_packet->out_facilitas_2 ?>
                            </p><br>
                            <p>
                            - <?= $v_packet->out_facilitas_3 ?>
                            </p><br>
                            <p>
                            - <?= $v_packet->out_facilitas_4 ?>
                            </p><br>
                            <p>
                            - <?= $v_packet->out_facilitas_5 ?>
                            </p><br>
                            <p>
                            - <?= $v_packet->out_facilitas_6 ?>
                            </p><br>
                            <p>
                            - <?= $v_packet->out_facilitas_7 ?>
                            </p><br>
                            <p>
                            - <?= $v_packet->out_facilitas_8 ?>
                            </p>
                        </div>
                    </div>
                </div>
            <?php }else if($v_packet->in_facilitas != null && $v_packet->in_facilitas_1 != null && $v_packet->in_facilitas_2 != null && $v_packet->in_facilitas_3 != null && $v_packet->in_facilitas_4 != null && $v_packet->in_facilitas_5 != null && $v_packet->in_facilitas_6 != null && $v_packet->in_facilitas_7 != null && $v_packet->in_facilitas_8 != null && $v_packet->in_facilitas_9 == null && $v_packet->out_facilitas != null && $v_packet->out_facilitas_1 != null && $v_packet->out_facilitas_2 != null && $v_packet->out_facilitas_3 != null && $v_packet->out_facilitas_4 != null && $v_packet->out_facilitas_5 != null && $v_packet->out_facilitas_6 != null && $v_packet->out_facilitas_7 != null && $v_packet->out_facilitas_8 != null && $v_packet->out_facilitas_9 != null){ ?>
                <div class="card1_9">
                    <h3>Fasilitas</h3><br>
                    <div class="row_product1">
                        <div class="col_product1">
                            <h4>Termasuk</h4><br>
                                <p>
                                    - <?= $v_packet->in_facilitas ?>
                                </p><br>
                                <p>
                                    - <?= $v_packet->in_facilitas_1 ?>
                                </p><br>
                                <p>
                                    - <?= $v_packet->in_facilitas_2 ?>
                                </p><br>
                                <p>
                                    - <?= $v_packet->in_facilitas_3 ?>
                                </p><br>
                                <p>
                                    - <?= $v_packet->in_facilitas_4 ?>
                                </p><br>
                                <p>
                                    - <?= $v_packet->in_facilitas_5 ?>
                                </p><br>
                                <p>
                                    - <?= $v_packet->in_facilitas_6 ?>
                                </p><br>
                                <p>
                                    - <?= $v_packet->in_facilitas_7 ?>
                                </p><br>
                                <p>
                                    - <?= $v_packet->in_facilitas_8 ?>
                                </p>
                        </div>
                        <div class="col_product1">
                            <h4>Tidak Termasuk</h4><br>
                            <p>
                            - <?= $v_packet->out_facilitas ?>
                            </p><br>
                            <p>
                            - <?= $v_packet->out_facilitas_1 ?>
                            </p><br>
                            <p>
                            - <?= $v_packet->out_facilitas_2 ?>
                            </p><br>
                            <p>
                            - <?= $v_packet->out_facilitas_3 ?>
                            </p><br>
                            <p>
                            - <?= $v_packet->out_facilitas_4 ?>
                            </p><br>
                            <p>
                            - <?= $v_packet->out_facilitas_5 ?>
                            </p><br>
                            <p>
                            - <?= $v_packet->out_facilitas_6 ?>
                            </p><br>
                            <p>
                            - <?= $v_packet->out_facilitas_7 ?>
                            </p><br>
                            <p>
                            - <?= $v_packet->out_facilitas_8 ?>
                            </p><br>
                            <p>
                            - <?= $v_packet->out_facilitas_9 ?>
                            </p>
                        </div>
                    </div>
                </div>
            <?php }else if($v_packet->in_facilitas != null && $v_packet->in_facilitas_1 != null && $v_packet->in_facilitas_2 != null && $v_packet->in_facilitas_3 != null && $v_packet->in_facilitas_4 != null && $v_packet->in_facilitas_5 != null && $v_packet->in_facilitas_6 != null && $v_packet->in_facilitas_7 == null && $v_packet->in_facilitas_8 == null && $v_packet->in_facilitas_9 == null && $v_packet->out_facilitas != null && $v_packet->out_facilitas_1 != null && $v_packet->out_facilitas_2 != null && $v_packet->out_facilitas_3 != null && $v_packet->out_facilitas_4 != null && $v_packet->out_facilitas_5 != null && $v_packet->out_facilitas_6 != null && $v_packet->out_facilitas_7 != null && $v_packet->out_facilitas_8 != null && $v_packet->out_facilitas_9 != null){ ?>
                <div class="card1_9">
                    <h3>Fasilitas</h3><br>
                    <div class="row_product1">
                        <div class="col_product1">
                            <h4>Termasuk</h4><br>
                                <p>
                                    - <?= $v_packet->in_facilitas ?>
                                </p><br>
                                <p>
                                    - <?= $v_packet->in_facilitas_1 ?>
                                </p><br>
                                <p>
                                    - <?= $v_packet->in_facilitas_2 ?>
                                </p><br>
                                <p>
                                    - <?= $v_packet->in_facilitas_3 ?>
                                </p><br>
                                <p>
                                    - <?= $v_packet->in_facilitas_4 ?>
                                </p><br>
                                <p>
                                    - <?= $v_packet->in_facilitas_5 ?>
                                </p><br>
                                <p>
                                    - <?= $v_packet->in_facilitas_6 ?>
                                </p>
                        </div>
                        <div class="col_product1">
                            <h4>Tidak Termasuk</h4><br>
                            <p>
                            - <?= $v_packet->out_facilitas ?>
                            </p><br>
                            <p>
                            - <?= $v_packet->out_facilitas_1 ?>
                            </p><br>
                            <p>
                            - <?= $v_packet->out_facilitas_2 ?>
                            </p><br>
                            <p>
                            - <?= $v_packet->out_facilitas_3 ?>
                            </p><br>
                            <p>
                            - <?= $v_packet->out_facilitas_4 ?>
                            </p><br>
                            <p>
                            - <?= $v_packet->out_facilitas_5 ?>
                            </p><br>
                            <p>
                            - <?= $v_packet->out_facilitas_6 ?>
                            </p><br>
                            <p>
                            - <?= $v_packet->out_facilitas_7 ?>
                            </p><br>
                            <p>
                            - <?= $v_packet->out_facilitas_8 ?>
                            </p><br>
                            <p>
                            - <?= $v_packet->out_facilitas_9 ?>
                            </p>
                        </div>
                    </div>
                </div>
            <?php }else if($v_packet->in_facilitas != null && $v_packet->in_facilitas_1 != null && $v_packet->in_facilitas_2 == null && $v_packet->in_facilitas_3 == null && $v_packet->in_facilitas_4 == null && $v_packet->in_facilitas_5 == null && $v_packet->in_facilitas_6 == null && $v_packet->in_facilitas_7 == null && $v_packet->in_facilitas_8 == null && $v_packet->in_facilitas_9 == null && $v_packet->out_facilitas != null && $v_packet->out_facilitas_1 != null && $v_packet->out_facilitas_2 != null && $v_packet->out_facilitas_3 != null && $v_packet->out_facilitas_4 != null && $v_packet->out_facilitas_5 != null && $v_packet->out_facilitas_6 != null && $v_packet->out_facilitas_7 != null && $v_packet->out_facilitas_8 != null && $v_packet->out_facilitas_9 != null){ ?>
                <div class="card1_9">
                    <h3>Fasilitas</h3><br>
                    <div class="row_product1">
                        <div class="col_product1">
                            <h4>Termasuk</h4><br>
                                <p>
                                    - <?= $v_packet->in_facilitas ?>
                                </p><br>
                                <p>
                                    - <?= $v_packet->in_facilitas_1 ?>
                                </p>
                        </div>
                        <div class="col_product1">
                            <h4>Tidak Termasuk</h4><br>
                            <p>
                            - <?= $v_packet->out_facilitas ?>
                            </p><br>
                            <p>
                            - <?= $v_packet->out_facilitas_1 ?>
                            </p><br>
                            <p>
                            - <?= $v_packet->out_facilitas_2 ?>
                            </p><br>
                            <p>
                            - <?= $v_packet->out_facilitas_3 ?>
                            </p><br>
                            <p>
                            - <?= $v_packet->out_facilitas_4 ?>
                            </p><br>
                            <p>
                            - <?= $v_packet->out_facilitas_5 ?>
                            </p><br>
                            <p>
                            - <?= $v_packet->out_facilitas_6 ?>
                            </p><br>
                            <p>
                            - <?= $v_packet->out_facilitas_7 ?>
                            </p><br>
                            <p>
                            - <?= $v_packet->out_facilitas_8 ?>
                            </p><br>
                            <p>
                            - <?= $v_packet->out_facilitas_9 ?>
                            </p>
                        </div>
                    </div>
                </div>
            <?php }else if($v_packet->in_facilitas != null && $v_packet->in_facilitas_1 != null && $v_packet->in_facilitas_2 != null && $v_packet->in_facilitas_3 == null && $v_packet->in_facilitas_4 == null && $v_packet->in_facilitas_5 == null && $v_packet->in_facilitas_6 == null && $v_packet->in_facilitas_7 == null && $v_packet->in_facilitas_8 == null && $v_packet->in_facilitas_9 == null && $v_packet->out_facilitas != null && $v_packet->out_facilitas_1 != null && $v_packet->out_facilitas_2 != null && $v_packet->out_facilitas_3 != null && $v_packet->out_facilitas_4 != null && $v_packet->out_facilitas_5 != null && $v_packet->out_facilitas_6 != null && $v_packet->out_facilitas_7 != null && $v_packet->out_facilitas_8 != null && $v_packet->out_facilitas_9 != null){ ?>
                <div class="card1_9">
                    <h3>Fasilitas</h3><br>
                    <div class="row_product1">
                        <div class="col_product1">
                            <h4>Termasuk</h4><br>
                                <p>
                                    - <?= $v_packet->in_facilitas ?>
                                </p><br>
                                <p>
                                    - <?= $v_packet->in_facilitas_1 ?>
                                </p><br>
                                <p>
                                    - <?= $v_packet->in_facilitas_2 ?>
                                </p>
                        </div>
                        <div class="col_product1">
                            <h4>Tidak Termasuk</h4><br>
                            <p>
                            - <?= $v_packet->out_facilitas ?>
                            </p><br>
                            <p>
                            - <?= $v_packet->out_facilitas_1 ?>
                            </p><br>
                            <p>
                            - <?= $v_packet->out_facilitas_2 ?>
                            </p><br>
                            <p>
                            - <?= $v_packet->out_facilitas_3 ?>
                            </p><br>
                            <p>
                            - <?= $v_packet->out_facilitas_4 ?>
                            </p><br>
                            <p>
                            - <?= $v_packet->out_facilitas_5 ?>
                            </p><br>
                            <p>
                            - <?= $v_packet->out_facilitas_6 ?>
                            </p><br>
                            <p>
                            - <?= $v_packet->out_facilitas_7 ?>
                            </p><br>
                            <p>
                            - <?= $v_packet->out_facilitas_8 ?>
                            </p><br>
                            <p>
                            - <?= $v_packet->out_facilitas_9 ?>
                            </p>
                        </div>
                    </div>
                </div>
            <?php }else if($v_packet->in_facilitas != null && $v_packet->in_facilitas_1 != null && $v_packet->in_facilitas_2 != null && $v_packet->in_facilitas_3 != null && $v_packet->in_facilitas_4 == null && $v_packet->in_facilitas_5 == null && $v_packet->in_facilitas_6 == null && $v_packet->in_facilitas_7 == null && $v_packet->in_facilitas_8 == null && $v_packet->in_facilitas_9 == null && $v_packet->out_facilitas != null && $v_packet->out_facilitas_1 != null && $v_packet->out_facilitas_2 != null && $v_packet->out_facilitas_3 != null && $v_packet->out_facilitas_4 != null && $v_packet->out_facilitas_5 != null && $v_packet->out_facilitas_6 != null && $v_packet->out_facilitas_7 != null && $v_packet->out_facilitas_8 != null && $v_packet->out_facilitas_9 != null){ ?>
                <div class="card1_9">
                    <h3>Fasilitas</h3><br>
                    <div class="row_product1">
                        <div class="col_product1">
                            <h4>Termasuk</h4><br>
                                <p>
                                    - <?= $v_packet->in_facilitas ?>
                                </p><br>
                                <p>
                                    - <?= $v_packet->in_facilitas_1 ?>
                                </p><br>
                                <p>
                                    - <?= $v_packet->in_facilitas_2 ?>
                                </p><br>
                                <p>
                                    - <?= $v_packet->in_facilitas_3 ?>
                                </p>
                        </div>
                        <div class="col_product1">
                            <h4>Tidak Termasuk</h4><br>
                            <p>
                            - <?= $v_packet->out_facilitas ?>
                            </p><br>
                            <p>
                            - <?= $v_packet->out_facilitas_1 ?>
                            </p><br>
                            <p>
                            - <?= $v_packet->out_facilitas_2 ?>
                            </p><br>
                            <p>
                            - <?= $v_packet->out_facilitas_3 ?>
                            </p><br>
                            <p>
                            - <?= $v_packet->out_facilitas_4 ?>
                            </p><br>
                            <p>
                            - <?= $v_packet->out_facilitas_5 ?>
                            </p><br>
                            <p>
                            - <?= $v_packet->out_facilitas_6 ?>
                            </p><br>
                            <p>
                            - <?= $v_packet->out_facilitas_7 ?>
                            </p><br>
                            <p>
                            - <?= $v_packet->out_facilitas_8 ?>
                            </p><br>
                            <p>
                            - <?= $v_packet->out_facilitas_9 ?>
                            </p>
                        </div>
                    </div>
                </div>
            <?php }else if($v_packet->in_facilitas != null && $v_packet->in_facilitas_1 != null && $v_packet->in_facilitas_2 != null && $v_packet->in_facilitas_3 != null && $v_packet->in_facilitas_4 != null && $v_packet->in_facilitas_5 == null && $v_packet->in_facilitas_6 == null && $v_packet->in_facilitas_7 == null && $v_packet->in_facilitas_8 == null && $v_packet->in_facilitas_9 == null && $v_packet->out_facilitas != null && $v_packet->out_facilitas_1 != null && $v_packet->out_facilitas_2 != null && $v_packet->out_facilitas_3 != null && $v_packet->out_facilitas_4 != null && $v_packet->out_facilitas_5 != null && $v_packet->out_facilitas_6 != null && $v_packet->out_facilitas_7 != null && $v_packet->out_facilitas_8 != null && $v_packet->out_facilitas_9 != null){ ?>
                <div class="card1_9">
                    <h3>Fasilitas</h3><br>
                    <div class="row_product1">
                        <div class="col_product1">
                            <h4>Termasuk</h4><br>
                                <p>
                                    - <?= $v_packet->in_facilitas ?>
                                </p><br>
                                <p>
                                    - <?= $v_packet->in_facilitas_1 ?>
                                </p><br>
                                <p>
                                    - <?= $v_packet->in_facilitas_2 ?>
                                </p><br>
                                <p>
                                    - <?= $v_packet->in_facilitas_3 ?>
                                </p><br>
                                <p>
                                    - <?= $v_packet->in_facilitas_4 ?>
                                </p>
                        </div>
                        <div class="col_product1">
                            <h4>Tidak Termasuk</h4><br>
                            <p>
                            - <?= $v_packet->out_facilitas ?>
                            </p><br>
                            <p>
                            - <?= $v_packet->out_facilitas_1 ?>
                            </p><br>
                            <p>
                            - <?= $v_packet->out_facilitas_2 ?>
                            </p><br>
                            <p>
                            - <?= $v_packet->out_facilitas_3 ?>
                            </p><br>
                            <p>
                            - <?= $v_packet->out_facilitas_4 ?>
                            </p><br>
                            <p>
                            - <?= $v_packet->out_facilitas_5 ?>
                            </p><br>
                            <p>
                            - <?= $v_packet->out_facilitas_6 ?>
                            </p><br>
                            <p>
                            - <?= $v_packet->out_facilitas_7 ?>
                            </p><br>
                            <p>
                            - <?= $v_packet->out_facilitas_8 ?>
                            </p><br>
                            <p>
                            - <?= $v_packet->out_facilitas_9 ?>
                            </p>
                        </div>
                    </div>
                </div>
            <?php }else if($v_packet->in_facilitas != null && $v_packet->in_facilitas_1 != null && $v_packet->in_facilitas_2 != null && $v_packet->in_facilitas_3 != null && $v_packet->in_facilitas_4 != null && $v_packet->in_facilitas_5 != null && $v_packet->in_facilitas_6 == null && $v_packet->in_facilitas_7 == null && $v_packet->in_facilitas_8 == null && $v_packet->in_facilitas_9 == null && $v_packet->out_facilitas != null && $v_packet->out_facilitas_1 != null && $v_packet->out_facilitas_2 != null && $v_packet->out_facilitas_3 != null && $v_packet->out_facilitas_4 != null && $v_packet->out_facilitas_5 != null && $v_packet->out_facilitas_6 != null && $v_packet->out_facilitas_7 != null && $v_packet->out_facilitas_8 != null && $v_packet->out_facilitas_9 != null){ ?>
                <div class="card1_9">
                    <h3>Fasilitas</h3><br>
                    <div class="row_product1">
                        <div class="col_product1">
                            <h4>Termasuk</h4><br>
                                <p>
                                    - <?= $v_packet->in_facilitas ?>
                                </p><br>
                                <p>
                                    - <?= $v_packet->in_facilitas_1 ?>
                                </p><br>
                                <p>
                                    - <?= $v_packet->in_facilitas_2 ?>
                                </p><br>
                                <p>
                                    - <?= $v_packet->in_facilitas_3 ?>
                                </p><br>
                                <p>
                                    - <?= $v_packet->in_facilitas_4 ?>
                                </p><br>
                                <p>
                                    - <?= $v_packet->in_facilitas_5 ?>
                                </p>
                        </div>
                        <div class="col_product1">
                            <h4>Tidak Termasuk</h4><br>
                            <p>
                            - <?= $v_packet->out_facilitas ?>
                            </p><br>
                            <p>
                            - <?= $v_packet->out_facilitas_1 ?>
                            </p><br>
                            <p>
                            - <?= $v_packet->out_facilitas_2 ?>
                            </p><br>
                            <p>
                            - <?= $v_packet->out_facilitas_3 ?>
                            </p><br>
                            <p>
                            - <?= $v_packet->out_facilitas_4 ?>
                            </p><br>
                            <p>
                            - <?= $v_packet->out_facilitas_5 ?>
                            </p><br>
                            <p>
                            - <?= $v_packet->out_facilitas_6 ?>
                            </p><br>
                            <p>
                            - <?= $v_packet->out_facilitas_7 ?>
                            </p><br>
                            <p>
                            - <?= $v_packet->out_facilitas_8 ?>
                            </p><br>
                            <p>
                            - <?= $v_packet->out_facilitas_9 ?>
                            </p>
                        </div>
                    </div>
                </div>
                <?php }else if($v_packet->in_facilitas != null && $v_packet->in_facilitas_1 != null && $v_packet->in_facilitas_2 != null && $v_packet->in_facilitas_3 != null && $v_packet->in_facilitas_4 != null && $v_packet->in_facilitas_5 != null && $v_packet->in_facilitas_6 != null && $v_packet->in_facilitas_7 != null && $v_packet->in_facilitas_8 == null && $v_packet->in_facilitas_9 == null && $v_packet->out_facilitas != null && $v_packet->out_facilitas_1 != null && $v_packet->out_facilitas_2 != null && $v_packet->out_facilitas_3 != null && $v_packet->out_facilitas_4 != null && $v_packet->out_facilitas_5 != null && $v_packet->out_facilitas_6 != null && $v_packet->out_facilitas_7 != null && $v_packet->out_facilitas_8 != null && $v_packet->out_facilitas_9 != null){ ?>
                <div class="card1_9">
                    <h3>Fasilitas</h3><br>
                    <div class="row_product1">
                        <div class="col_product1">
                            <h4>Termasuk</h4><br>
                                <p>
                                    - <?= $v_packet->in_facilitas ?>
                                </p><br>
                                <p>
                                    - <?= $v_packet->in_facilitas_1 ?>
                                </p><br>
                                <p>
                                    - <?= $v_packet->in_facilitas_2 ?>
                                </p><br>
                                <p>
                                    - <?= $v_packet->in_facilitas_3 ?>
                                </p><br>
                                <p>
                                    - <?= $v_packet->in_facilitas_4 ?>
                                </p><br>
                                <p>
                                    - <?= $v_packet->in_facilitas_5 ?>
                                </p><br>
                                <p>
                                    - <?= $v_packet->in_facilitas_6 ?>
                                </p><br>
                                <p>
                                    - <?= $v_packet->in_facilitas_7 ?>
                                </p>
                        </div>
                        <div class="col_product1">
                            <h4>Tidak Termasuk</h4><br>
                            <p>
                            - <?= $v_packet->out_facilitas ?>
                            </p><br>
                            <p>
                            - <?= $v_packet->out_facilitas_1 ?>
                            </p><br>
                            <p>
                            - <?= $v_packet->out_facilitas_2 ?>
                            </p><br>
                            <p>
                            - <?= $v_packet->out_facilitas_3 ?>
                            </p><br>
                            <p>
                            - <?= $v_packet->out_facilitas_4 ?>
                            </p><br>
                            <p>
                            - <?= $v_packet->out_facilitas_5 ?>
                            </p><br>
                            <p>
                            - <?= $v_packet->out_facilitas_6 ?>
                            </p><br>
                            <p>
                            - <?= $v_packet->out_facilitas_7 ?>
                            </p><br>
                            <p>
                            - <?= $v_packet->out_facilitas_8 ?>
                            </p><br>
                            <p>
                            - <?= $v_packet->out_facilitas_9 ?>
                            </p>
                        </div>
                    </div>
                </div>
            <?php }else if($v_packet->in_facilitas != null && $v_packet->in_facilitas_1 != null && $v_packet->in_facilitas_2 != null && $v_packet->in_facilitas_3 != null && $v_packet->in_facilitas_4 != null && $v_packet->in_facilitas_5 != null && $v_packet->in_facilitas_6 != null && $v_packet->in_facilitas_7 != null && $v_packet->in_facilitas_8 != null && $v_packet->in_facilitas_9 != null && $v_packet->out_facilitas != null && $v_packet->out_facilitas_1 == null && $v_packet->out_facilitas_2 == null && $v_packet->out_facilitas_3 == null && $v_packet->out_facilitas_4 == null && $v_packet->out_facilitas_5 == null && $v_packet->out_facilitas_6 == null && $v_packet->out_facilitas_7 == null && $v_packet->out_facilitas_8 == null && $v_packet->out_facilitas_9 == null){ ?>
                <div class="card1_10">
                    <h3>Fasilitas</h3><br>
                    <div class="row_product1">
                        <div class="col_product1">
                            <h4>Termasuk</h4><br>
                                <p>
                                    - <?= $v_packet->in_facilitas ?>
                                </p><br>
                                <p>
                                    - <?= $v_packet->in_facilitas_1 ?>
                                </p><br>
                                <p>
                                    - <?= $v_packet->in_facilitas_2 ?>
                                </p><br>
                                <p>
                                    - <?= $v_packet->in_facilitas_3 ?>
                                </p><br>
                                <p>
                                    - <?= $v_packet->in_facilitas_4 ?>
                                </p><br>
                                <p>
                                    - <?= $v_packet->in_facilitas_5 ?>
                                </p><br>
                                <p>
                                    - <?= $v_packet->in_facilitas_6 ?>
                                </p><br>
                                <p>
                                    - <?= $v_packet->in_facilitas_7 ?>
                                </p><br>
                                <p>
                                    - <?= $v_packet->in_facilitas_8 ?>
                                </p><br>
                                <p>
                                    - <?= $v_packet->in_facilitas_9 ?>
                                </p>
                        </div>
                        <div class="col_product1">
                            <h4>Tidak Termasuk</h4><br>
                            <p>
                            - <?= $v_packet->out_facilitas ?>
                        </div>
                    </div>
                </div>
            <?php }else if($v_packet->in_facilitas != null && $v_packet->in_facilitas_1 != null && $v_packet->in_facilitas_2 != null && $v_packet->in_facilitas_3 != null && $v_packet->in_facilitas_4 != null && $v_packet->in_facilitas_5 != null && $v_packet->in_facilitas_6 != null && $v_packet->in_facilitas_7 != null && $v_packet->in_facilitas_8 != null && $v_packet->in_facilitas_9 != null && $v_packet->out_facilitas != null && $v_packet->out_facilitas_1 != null && $v_packet->out_facilitas_2 == null && $v_packet->out_facilitas_3 == null && $v_packet->out_facilitas_4 == null && $v_packet->out_facilitas_5 == null && $v_packet->out_facilitas_6 == null && $v_packet->out_facilitas_7 == null && $v_packet->out_facilitas_8 == null && $v_packet->out_facilitas_9 == null){ ?>
                <div class="card1_10">
                    <h3>Fasilitas</h3><br>
                    <div class="row_product1">
                        <div class="col_product1">
                            <h4>Termasuk</h4><br>
                                <p>
                                    - <?= $v_packet->in_facilitas ?>
                                </p><br>
                                <p>
                                    - <?= $v_packet->in_facilitas_1 ?>
                                </p><br>
                                <p>
                                    - <?= $v_packet->in_facilitas_2 ?>
                                </p><br>
                                <p>
                                    - <?= $v_packet->in_facilitas_3 ?>
                                </p><br>
                                <p>
                                    - <?= $v_packet->in_facilitas_4 ?>
                                </p><br>
                                <p>
                                    - <?= $v_packet->in_facilitas_5 ?>
                                </p><br>
                                <p>
                                    - <?= $v_packet->in_facilitas_6 ?>
                                </p><br>
                                <p>
                                    - <?= $v_packet->in_facilitas_7 ?>
                                </p><br>
                                <p>
                                    - <?= $v_packet->in_facilitas_8 ?>
                                </p><br>
                                <p>
                                    - <?= $v_packet->in_facilitas_9 ?>
                                </p>
                        </div>
                        <div class="col_product1">
                            <h4>Tidak Termasuk</h4><br>
                            <p>
                            - <?= $v_packet->out_facilitas ?>
                            </p><br>
                            <p>
                            - <?= $v_packet->out_facilitas_1 ?>
                            </p>
                        </div>
                    </div>
                </div>
            <?php }else if($v_packet->in_facilitas != null && $v_packet->in_facilitas_1 != null && $v_packet->in_facilitas_2 != null && $v_packet->in_facilitas_3 != null && $v_packet->in_facilitas_4 != null && $v_packet->in_facilitas_5 != null && $v_packet->in_facilitas_6 != null && $v_packet->in_facilitas_7 != null && $v_packet->in_facilitas_8 != null && $v_packet->in_facilitas_9 != null && $v_packet->out_facilitas != null && $v_packet->out_facilitas_1 != null && $v_packet->out_facilitas_2 != null && $v_packet->out_facilitas_3 == null && $v_packet->out_facilitas_4 == null && $v_packet->out_facilitas_5 == null && $v_packet->out_facilitas_6 == null && $v_packet->out_facilitas_7 == null && $v_packet->out_facilitas_8 == null && $v_packet->out_facilitas_9 == null){ ?>
                <div class="card1_10">
                    <h3>Fasilitas</h3><br>
                    <div class="row_product1">
                        <div class="col_product1">
                            <h4>Termasuk</h4><br>
                                <p>
                                    - <?= $v_packet->in_facilitas ?>
                                </p><br>
                                <p>
                                    - <?= $v_packet->in_facilitas_1 ?>
                                </p><br>
                                <p>
                                    - <?= $v_packet->in_facilitas_2 ?>
                                </p><br>
                                <p>
                                    - <?= $v_packet->in_facilitas_3 ?>
                                </p><br>
                                <p>
                                    - <?= $v_packet->in_facilitas_4 ?>
                                </p><br>
                                <p>
                                    - <?= $v_packet->in_facilitas_5 ?>
                                </p><br>
                                <p>
                                    - <?= $v_packet->in_facilitas_6 ?>
                                </p><br>
                                <p>
                                    - <?= $v_packet->in_facilitas_7 ?>
                                </p><br>
                                <p>
                                    - <?= $v_packet->in_facilitas_8 ?>
                                </p><br>
                                <p>
                                    - <?= $v_packet->in_facilitas_9 ?>
                                </p>
                        </div>
                        <div class="col_product1">
                            <h4>Tidak Termasuk</h4><br>
                            <p>
                            - <?= $v_packet->out_facilitas ?>
                            </p><br>
                            <p>
                            - <?= $v_packet->out_facilitas_1 ?>
                            </p><br>
                            <p>
                            - <?= $v_packet->out_facilitas_2 ?>
                            </p>
                        </div>
                    </div>
                </div>
            <?php }else if($v_packet->in_facilitas != null && $v_packet->in_facilitas_1 != null && $v_packet->in_facilitas_2 != null && $v_packet->in_facilitas_3 != null && $v_packet->in_facilitas_4 != null && $v_packet->in_facilitas_5 != null && $v_packet->in_facilitas_6 != null && $v_packet->in_facilitas_7 != null && $v_packet->in_facilitas_8 != null && $v_packet->in_facilitas_9 != null && $v_packet->out_facilitas != null && $v_packet->out_facilitas_1 != null && $v_packet->out_facilitas_2 != null && $v_packet->out_facilitas_3 != null && $v_packet->out_facilitas_4 == null && $v_packet->out_facilitas_5 == null && $v_packet->out_facilitas_6 == null && $v_packet->out_facilitas_7 == null && $v_packet->out_facilitas_8 == null && $v_packet->out_facilitas_9 == null){ ?>
                <div class="card1_10">
                    <h3>Fasilitas</h3><br>
                    <div class="row_product1">
                        <div class="col_product1">
                            <h4>Termasuk</h4><br>
                                <p>
                                    - <?= $v_packet->in_facilitas ?>
                                </p><br>
                                <p>
                                    - <?= $v_packet->in_facilitas_1 ?>
                                </p><br>
                                <p>
                                    - <?= $v_packet->in_facilitas_2 ?>
                                </p><br>
                                <p>
                                    - <?= $v_packet->in_facilitas_3 ?>
                                </p><br>
                                <p>
                                    - <?= $v_packet->in_facilitas_4 ?>
                                </p><br>
                                <p>
                                    - <?= $v_packet->in_facilitas_5 ?>
                                </p><br>
                                <p>
                                    - <?= $v_packet->in_facilitas_6 ?>
                                </p><br>
                                <p>
                                    - <?= $v_packet->in_facilitas_7 ?>
                                </p><br>
                                <p>
                                    - <?= $v_packet->in_facilitas_8 ?>
                                </p><br>
                                <p>
                                    - <?= $v_packet->in_facilitas_9 ?>
                                </p>
                        </div>
                        <div class="col_product1">
                            <h4>Tidak Termasuk</h4><br>
                            <p>
                            - <?= $v_packet->out_facilitas ?>
                            </p><br>
                            <p>
                            - <?= $v_packet->out_facilitas_1 ?>
                            </p><br>
                            <p>
                            - <?= $v_packet->out_facilitas_2 ?>
                            </p><br>
                            <p>
                            - <?= $v_packet->out_facilitas_3 ?>
                            </p>
                        </div>
                    </div>
                </div>
            <?php }else if($v_packet->in_facilitas != null && $v_packet->in_facilitas_1 != null && $v_packet->in_facilitas_2 != null && $v_packet->in_facilitas_3 != null && $v_packet->in_facilitas_4 != null && $v_packet->in_facilitas_5 != null && $v_packet->in_facilitas_6 != null && $v_packet->in_facilitas_7 != null && $v_packet->in_facilitas_8 != null && $v_packet->in_facilitas_9 != null && $v_packet->out_facilitas != null && $v_packet->out_facilitas_1 != null && $v_packet->out_facilitas_2 != null && $v_packet->out_facilitas_3 != null && $v_packet->out_facilitas_4 != null && $v_packet->out_facilitas_5 == null && $v_packet->out_facilitas_6 == null && $v_packet->out_facilitas_7 == null && $v_packet->out_facilitas_8 == null && $v_packet->out_facilitas_9 == null){ ?>
                <div class="card1_10">
                    <h3>Fasilitas</h3><br>
                    <div class="row_product1">
                        <div class="col_product1">
                            <h4>Termasuk</h4><br>
                                <p>
                                    - <?= $v_packet->in_facilitas ?>
                                </p><br>
                                <p>
                                    - <?= $v_packet->in_facilitas_1 ?>
                                </p><br>
                                <p>
                                    - <?= $v_packet->in_facilitas_2 ?>
                                </p><br>
                                <p>
                                    - <?= $v_packet->in_facilitas_3 ?>
                                </p><br>
                                <p>
                                    - <?= $v_packet->in_facilitas_4 ?>
                                </p><br>
                                <p>
                                    - <?= $v_packet->in_facilitas_5 ?>
                                </p><br>
                                <p>
                                    - <?= $v_packet->in_facilitas_6 ?>
                                </p><br>
                                <p>
                                    - <?= $v_packet->in_facilitas_7 ?>
                                </p><br>
                                <p>
                                    - <?= $v_packet->in_facilitas_8 ?>
                                </p><br>
                                <p>
                                    - <?= $v_packet->in_facilitas_9 ?>
                                </p>
                        </div>
                        <div class="col_product1">
                            <h4>Tidak Termasuk</h4><br>
                            <p>
                            - <?= $v_packet->out_facilitas ?>
                            </p><br>
                            <p>
                            - <?= $v_packet->out_facilitas_1 ?>
                            </p><br>
                            <p>
                            - <?= $v_packet->out_facilitas_2 ?>
                            </p><br>
                            <p>
                            - <?= $v_packet->out_facilitas_3 ?>
                            </p><br>
                            <p>
                            - <?= $v_packet->out_facilitas_4 ?>
                            </p>
                        </div>
                    </div>
                </div>
            <?php }else if($v_packet->in_facilitas != null && $v_packet->in_facilitas_1 != null && $v_packet->in_facilitas_2 != null && $v_packet->in_facilitas_3 != null && $v_packet->in_facilitas_4 != null && $v_packet->in_facilitas_5 != null && $v_packet->in_facilitas_6 != null && $v_packet->in_facilitas_7 != null && $v_packet->in_facilitas_8 != null && $v_packet->in_facilitas_9 != null && $v_packet->out_facilitas != null && $v_packet->out_facilitas_1 != null && $v_packet->out_facilitas_2 != null && $v_packet->out_facilitas_3 != null && $v_packet->out_facilitas_4 != null && $v_packet->out_facilitas_5 != null && $v_packet->out_facilitas_6 == null && $v_packet->out_facilitas_7 == null && $v_packet->out_facilitas_8 == null && $v_packet->out_facilitas_9 == null){ ?>
                <div class="card1_10">
                    <h3>Fasilitas</h3><br>
                    <div class="row_product1">
                        <div class="col_product1">
                            <h4>Termasuk</h4><br>
                                <p>
                                    - <?= $v_packet->in_facilitas ?>
                                </p><br>
                                <p>
                                    - <?= $v_packet->in_facilitas_1 ?>
                                </p><br>
                                <p>
                                    - <?= $v_packet->in_facilitas_2 ?>
                                </p><br>
                                <p>
                                    - <?= $v_packet->in_facilitas_3 ?>
                                </p><br>
                                <p>
                                    - <?= $v_packet->in_facilitas_4 ?>
                                </p><br>
                                <p>
                                    - <?= $v_packet->in_facilitas_5 ?>
                                </p><br>
                                <p>
                                    - <?= $v_packet->in_facilitas_6 ?>
                                </p><br>
                                <p>
                                    - <?= $v_packet->in_facilitas_7 ?>
                                </p><br>
                                <p>
                                    - <?= $v_packet->in_facilitas_8 ?>
                                </p><br>
                                <p>
                                    - <?= $v_packet->in_facilitas_9 ?>
                                </p>
                        </div>
                        <div class="col_product1">
                            <h4>Tidak Termasuk</h4><br>
                            <p>
                            - <?= $v_packet->out_facilitas ?>
                            </p><br>
                            <p>
                            - <?= $v_packet->out_facilitas_1 ?>
                            </p><br>
                            <p>
                            - <?= $v_packet->out_facilitas_2 ?>
                            </p><br>
                            <p>
                            - <?= $v_packet->out_facilitas_3 ?>
                            </p><br>
                            <p>
                            - <?= $v_packet->out_facilitas_4 ?>
                            </p><br>
                            <p>
                            - <?= $v_packet->out_facilitas_5 ?>
                            </p>
                        </div>
                    </div>
                </div>
            <?php }else if($v_packet->in_facilitas != null && $v_packet->in_facilitas_1 != null && $v_packet->in_facilitas_2 != null && $v_packet->in_facilitas_3 != null && $v_packet->in_facilitas_4 != null && $v_packet->in_facilitas_5 != null && $v_packet->in_facilitas_6 != null && $v_packet->in_facilitas_7 != null && $v_packet->in_facilitas_8 != null && $v_packet->in_facilitas_9 != null && $v_packet->out_facilitas != null && $v_packet->out_facilitas_1 != null && $v_packet->out_facilitas_2 != null && $v_packet->out_facilitas_3 != null && $v_packet->out_facilitas_4 != null && $v_packet->out_facilitas_5 != null && $v_packet->out_facilitas_6 != null && $v_packet->out_facilitas_7 == null && $v_packet->out_facilitas_8 == null && $v_packet->out_facilitas_9 == null){ ?>
                <div class="card1_10">
                    <h3>Fasilitas</h3><br>
                    <div class="row_product1">
                        <div class="col_product1">
                            <h4>Termasuk</h4><br>
                                <p>
                                    - <?= $v_packet->in_facilitas ?>
                                </p><br>
                                <p>
                                    - <?= $v_packet->in_facilitas_1 ?>
                                </p><br>
                                <p>
                                    - <?= $v_packet->in_facilitas_2 ?>
                                </p><br>
                                <p>
                                    - <?= $v_packet->in_facilitas_3 ?>
                                </p><br>
                                <p>
                                    - <?= $v_packet->in_facilitas_4 ?>
                                </p><br>
                                <p>
                                    - <?= $v_packet->in_facilitas_5 ?>
                                </p><br>
                                <p>
                                    - <?= $v_packet->in_facilitas_6 ?>
                                </p><br>
                                <p>
                                    - <?= $v_packet->in_facilitas_7 ?>
                                </p><br>
                                <p>
                                    - <?= $v_packet->in_facilitas_8 ?>
                                </p><br>
                                <p>
                                    - <?= $v_packet->in_facilitas_9 ?>
                                </p>
                        </div>
                        <div class="col_product1">
                            <h4>Tidak Termasuk</h4><br>
                            <p>
                            - <?= $v_packet->out_facilitas ?>
                            </p><br>
                            <p>
                            - <?= $v_packet->out_facilitas_1 ?>
                            </p><br>
                            <p>
                            - <?= $v_packet->out_facilitas_2 ?>
                            </p><br>
                            <p>
                            - <?= $v_packet->out_facilitas_3 ?>
                            </p><br>
                            <p>
                            - <?= $v_packet->out_facilitas_4 ?>
                            </p><br>
                            <p>
                            - <?= $v_packet->out_facilitas_5 ?>
                            </p><br>
                            <p>
                            - <?= $v_packet->out_facilitas_6 ?>
                            </p>
                        </div>
                    </div>
                </div>
            <?php }else if($v_packet->in_facilitas != null && $v_packet->in_facilitas_1 != null && $v_packet->in_facilitas_2 != null && $v_packet->in_facilitas_3 != null && $v_packet->in_facilitas_4 != null && $v_packet->in_facilitas_5 != null && $v_packet->in_facilitas_6 != null && $v_packet->in_facilitas_7 != null && $v_packet->in_facilitas_8 != null && $v_packet->in_facilitas_9 != null && $v_packet->out_facilitas != null && $v_packet->out_facilitas_1 != null && $v_packet->out_facilitas_2 != null && $v_packet->out_facilitas_3 != null && $v_packet->out_facilitas_4 != null && $v_packet->out_facilitas_5 != null && $v_packet->out_facilitas_6 != null && $v_packet->out_facilitas_7 != null && $v_packet->out_facilitas_8 == null && $v_packet->out_facilitas_9 == null){ ?>
                <div class="card1_10">
                    <h3>Fasilitas</h3><br>
                    <div class="row_product1">
                        <div class="col_product1">
                            <h4>Termasuk</h4><br>
                                <p>
                                    - <?= $v_packet->in_facilitas ?>
                                </p><br>
                                <p>
                                    - <?= $v_packet->in_facilitas_1 ?>
                                </p><br>
                                <p>
                                    - <?= $v_packet->in_facilitas_2 ?>
                                </p><br>
                                <p>
                                    - <?= $v_packet->in_facilitas_3 ?>
                                </p><br>
                                <p>
                                    - <?= $v_packet->in_facilitas_4 ?>
                                </p><br>
                                <p>
                                    - <?= $v_packet->in_facilitas_5 ?>
                                </p><br>
                                <p>
                                    - <?= $v_packet->in_facilitas_6 ?>
                                </p><br>
                                <p>
                                    - <?= $v_packet->in_facilitas_7 ?>
                                </p><br>
                                <p>
                                    - <?= $v_packet->in_facilitas_8 ?>
                                </p><br>
                                <p>
                                    - <?= $v_packet->in_facilitas_9 ?>
                                </p>
                        </div>
                        <div class="col_product1">
                            <h4>Tidak Termasuk</h4><br>
                            <p>
                            - <?= $v_packet->out_facilitas ?>
                            </p><br>
                            <p>
                            - <?= $v_packet->out_facilitas_1 ?>
                            </p><br>
                            <p>
                            - <?= $v_packet->out_facilitas_2 ?>
                            </p><br>
                            <p>
                            - <?= $v_packet->out_facilitas_3 ?>
                            </p><br>
                            <p>
                            - <?= $v_packet->out_facilitas_4 ?>
                            </p><br>
                            <p>
                            - <?= $v_packet->out_facilitas_5 ?>
                            </p><br>
                            <p>
                            - <?= $v_packet->out_facilitas_6 ?>
                            </p><br>
                            <p>
                            - <?= $v_packet->out_facilitas_7 ?>
                            </p>
                        </div>
                    </div>
                </div>
            <?php }else if($v_packet->in_facilitas != null && $v_packet->in_facilitas_1 != null && $v_packet->in_facilitas_2 != null && $v_packet->in_facilitas_3 != null && $v_packet->in_facilitas_4 != null && $v_packet->in_facilitas_5 != null && $v_packet->in_facilitas_6 != null && $v_packet->in_facilitas_7 != null && $v_packet->in_facilitas_8 != null && $v_packet->in_facilitas_9 != null && $v_packet->out_facilitas != null && $v_packet->out_facilitas_1 != null && $v_packet->out_facilitas_2 != null && $v_packet->out_facilitas_3 != null && $v_packet->out_facilitas_4 != null && $v_packet->out_facilitas_5 != null && $v_packet->out_facilitas_6 != null && $v_packet->out_facilitas_7 != null && $v_packet->out_facilitas_8 != null && $v_packet->out_facilitas_9 == null){ ?>
                <div class="card1_10">
                    <h3>Fasilitas</h3><br>
                    <div class="row_product1">
                        <div class="col_product1">
                            <h4>Termasuk</h4><br>
                                <p>
                                    - <?= $v_packet->in_facilitas ?>
                                </p><br>
                                <p>
                                    - <?= $v_packet->in_facilitas_1 ?>
                                </p><br>
                                <p>
                                    - <?= $v_packet->in_facilitas_2 ?>
                                </p><br>
                                <p>
                                    - <?= $v_packet->in_facilitas_3 ?>
                                </p><br>
                                <p>
                                    - <?= $v_packet->in_facilitas_4 ?>
                                </p><br>
                                <p>
                                    - <?= $v_packet->in_facilitas_5 ?>
                                </p><br>
                                <p>
                                    - <?= $v_packet->in_facilitas_6 ?>
                                </p><br>
                                <p>
                                    - <?= $v_packet->in_facilitas_7 ?>
                                </p><br>
                                <p>
                                    - <?= $v_packet->in_facilitas_8 ?>
                                </p><br>
                                <p>
                                    - <?= $v_packet->in_facilitas_9 ?>
                                </p>
                        </div>
                        <div class="col_product1">
                            <h4>Tidak Termasuk</h4><br>
                            <p>
                            - <?= $v_packet->out_facilitas ?>
                            </p><br>
                            <p>
                            - <?= $v_packet->out_facilitas_1 ?>
                            </p><br>
                            <p>
                            - <?= $v_packet->out_facilitas_2 ?>
                            </p><br>
                            <p>
                            - <?= $v_packet->out_facilitas_3 ?>
                            </p><br>
                            <p>
                            - <?= $v_packet->out_facilitas_4 ?>
                            </p><br>
                            <p>
                            - <?= $v_packet->out_facilitas_5 ?>
                            </p><br>
                            <p>
                            - <?= $v_packet->out_facilitas_6 ?>
                            </p><br>
                            <p>
                            - <?= $v_packet->out_facilitas_7 ?>
                            </p><br>
                            <p>
                            - <?= $v_packet->out_facilitas_8 ?>
                            </p>
                        </div>
                    </div>
                </div>
            <?php }else if($v_packet->in_facilitas != null && $v_packet->in_facilitas_1 != null && $v_packet->in_facilitas_2 != null && $v_packet->in_facilitas_3 != null && $v_packet->in_facilitas_4 != null && $v_packet->in_facilitas_5 != null && $v_packet->in_facilitas_6 != null && $v_packet->in_facilitas_7 != null && $v_packet->in_facilitas_8 != null && $v_packet->in_facilitas_9 != null && $v_packet->out_facilitas != null && $v_packet->out_facilitas_1 != null && $v_packet->out_facilitas_2 != null && $v_packet->out_facilitas_3 != null && $v_packet->out_facilitas_4 != null && $v_packet->out_facilitas_5 != null && $v_packet->out_facilitas_6 != null && $v_packet->out_facilitas_7 != null && $v_packet->out_facilitas_8 != null && $v_packet->out_facilitas_9 != null){ ?>
                <div class="card1_10">
                    <h3>Fasilitas</h3><br>
                    <div class="row_product1">
                        <div class="col_product1">
                            <h4>Termasuk</h4><br>
                                <p>
                                    - <?= $v_packet->in_facilitas ?>
                                </p><br>
                                <p>
                                    - <?= $v_packet->in_facilitas_1 ?>
                                </p><br>
                                <p>
                                    - <?= $v_packet->in_facilitas_2 ?>
                                </p><br>
                                <p>
                                    - <?= $v_packet->in_facilitas_3 ?>
                                </p><br>
                                <p>
                                    - <?= $v_packet->in_facilitas_4 ?>
                                </p><br>
                                <p>
                                    - <?= $v_packet->in_facilitas_5 ?>
                                </p><br>
                                <p>
                                    - <?= $v_packet->in_facilitas_6 ?>
                                </p><br>
                                <p>
                                    - <?= $v_packet->in_facilitas_7 ?>
                                </p><br>
                                <p>
                                    - <?= $v_packet->in_facilitas_8 ?>
                                </p><br>
                                <p>
                                    - <?= $v_packet->in_facilitas_9 ?>
                                </p>
                        </div>
                        <div class="col_product1">
                            <h4>Tidak Termasuk</h4><br>
                            <p>
                            - <?= $v_packet->out_facilitas ?>
                            </p><br>
                            <p>
                            - <?= $v_packet->out_facilitas_1 ?>
                            </p><br>
                            <p>
                            - <?= $v_packet->out_facilitas_2 ?>
                            </p><br>
                            <p>
                            - <?= $v_packet->out_facilitas_3 ?>
                            </p><br>
                            <p>
                            - <?= $v_packet->out_facilitas_4 ?>
                            </p><br>
                            <p>
                            - <?= $v_packet->out_facilitas_5 ?>
                            </p><br>
                            <p>
                            - <?= $v_packet->out_facilitas_6 ?>
                            </p><br>
                            <p>
                            - <?= $v_packet->out_facilitas_7 ?>
                            </p><br>
                            <p>
                            - <?= $v_packet->out_facilitas_8 ?>
                            </p><br>
                            <p>
                            - <?= $v_packet->out_facilitas_9 ?>
                            </p>
                        </div>
                    </div>
                </div>
            <?php } ?>
            <div class="card4">
                
            </div>
        </div>
        <div class="card-container">
                <?php
                    $data_packets = DB::table('hotels')->where('id_packet', $v_packet->idpacket)->get();
                    foreach ($data_packets as $v_data_packets){
                    }
                    if($v_data_packets->name_hotel != null && $v_data_packets->name_hotel_2 == null){
                ?>
                <div class="card1">
                    <h3>Hotel</h3><br><br><br>
                    <h4><?= $v_data_packets->name_hotel; ?></h4>
                    <h4><i class='bx bx-current-location'></i> <?= $v_data_packets->address_hotel; ?></h4><br>
                    <div class="gallery-wrap">
                        <i class='bx bx-left-arrow-alt' id="backBtn"></i>
                        <div class="gallery">
                            <div>
                                <span><img src="{!! asset('assets/image_travel/'.$v_data_packets->image_hotel1) !!}"></span>
                                <span><img src="{!! asset('assets/image_travel/'.$v_data_packets->image_hotel1_2) !!}"></span>
                                <span><img src="{!! asset('assets/image_travel/'.$v_data_packets->image_hotel1_3) !!}"></span>
                            </div>
                            <div>
                                <span><img src="{!! asset('assets/image_travel/'.$v_data_packets->image_hotel1_4) !!}"></span>
                            </div>
                        </div>
                        <i class='bx bx-right-arrow-alt' id="nextBtn"></i>
                    </div><br>
                    <h3>Fasilitas Populer</h3>
                    <i class='bx bx-wifi'></i>Free Wifi&nbsp;
                    <i class='bx bx-group' ></i> Ruang Keluarga&nbsp;
                    <i class='bx bx-accessibility'></i> Disabilitas<br>
                    <i class='bx bx-bowl-hot' ></i> Tempat Makan&nbsp;
                    <i class='bx bxs-bus' ></i> Shuttle Bandara<br>
                    <i class='bx bxs-bell'></i> Pelayanan Kamar
                </div>
                <?php }else if($v_data_packets->name_hotel != null && $v_data_packets->name_hotel_2 != null){?>
                    <?php if($v_data_packets->image_hotel2 == null && $v_data_packets->image_hotel2_2 == null && $v_data_packets->image_hotel2_3 == null && $v_data_packets->image_hotel2_4 == null){ ?>
                        <div class="card_hotel">
                            <h3>Hotel</h3><br>
                            <h4><?= $v_data_packets->name_hotel; ?></h4><br>
                            <h4><i class='bx bxs-map'></i> <?= $v_data_packets->address_hotel; ?></h4><br>
                            <div class="gallery-wrap">
                                <i class='bx bx-left-arrow-alt' id="backBtn"></i>
                                <div class="gallery">
                                    <div>
                                        <span><img src="{!! asset('assets/image_travel/'.$v_data_packets->image_hotel1) !!}"></span>
                                        <span><img src="{!! asset('assets/image_travel/'.$v_data_packets->image_hotel1_2) !!}"></span>
                                        <span><img src="{!! asset('assets/image_travel/'.$v_data_packets->image_hotel1_3) !!}"></span>
                                    </div>
                                    <div>
                                        <span><img src="{!! asset('assets/image_travel/'.$v_data_packets->image_hotel1_4) !!}"></span>
                                    </div>
                                </div>
                                <i class='bx bx-right-arrow-alt' id="nextBtn"></i>
                            </div><br>
                            <h3>Fasilitas Populer</h3>
                            <i class='bx bx-wifi'></i>Free Wifi&nbsp;
                            <i class='bx bx-group' ></i> Ruang Keluarga&nbsp;
                            <i class='bx bx-accessibility'></i> Disabilitas<br>
                            <i class='bx bx-bowl-hot' ></i> Tempat Makan&nbsp;
                            <i class='bx bxs-bus' ></i> Shuttle Bandara<br>
                            <i class='bx bxs-bell'></i> Pelayanan Kamar
                            <br><hr><br>
                            <h4><?= $v_data_packets->name_hotel_2; ?></h4><br>
                            <h4><i class='bx bxs-map'></i> <?= $v_data_packets->address_hotel_2; ?></h4><br>
                            <h3>Fasilitas Populer</h3>
                            <i class='bx bx-wifi'></i>Free Wifi&nbsp;
                            <i class='bx bx-group' ></i> Ruang Keluarga&nbsp;
                            <i class='bx bx-accessibility'></i> Disabilitas<br>
                            <i class='bx bx-bowl-hot' ></i> Tempat Makan&nbsp;
                            <i class='bx bxs-bus' ></i> Shuttle Bandara<br>
                            <i class='bx bxs-bell'></i> Pelayanan Kamar
                        </div>
                    <?php }else if ($v_data_packets->image_hotel2 != null && $v_data_packets->image_hotel2_2 == null && $v_data_packets->image_hotel2_3 == null && $v_data_packets->image_hotel2_4 == null){ ?>
                        <div class="card_hotel_2">
                            <h3>Hotel</h3><br>
                            <h4><?= $v_data_packets->name_hotel; ?></h4><br>
                            <h4><i class='bx bxs-map'></i> <?= $v_data_packets->address_hotel; ?></h4><br>
                            <div class="gallery-wrap">
                                <i class='bx bx-left-arrow-alt' id="backBtn"></i>
                                <div class="gallery">
                                    <div>
                                        <span><img src="{!! asset('assets/image_travel/'.$v_data_packets->image_hotel1) !!}"></span>
                                        <span><img src="{!! asset('assets/image_travel/'.$v_data_packets->image_hotel1_2) !!}"></span>
                                        <span><img src="{!! asset('assets/image_travel/'.$v_data_packets->image_hotel1_3) !!}"></span>
                                    </div>
                                    <div>
                                        <span><img src="{!! asset('assets/image_travel/'.$v_data_packets->image_hotel1_4) !!}"></span>
                                    </div>
                                </div>
                                <i class='bx bx-right-arrow-alt' id="nextBtn"></i>
                            </div><br>
                            <h3>Fasilitas Populer</h3>
                            <i class='bx bx-wifi'></i>Free Wifi&nbsp;
                            <i class='bx bx-group' ></i> Ruang Keluarga&nbsp;
                            <i class='bx bx-accessibility'></i> Disabilitas<br>
                            <i class='bx bx-bowl-hot' ></i> Tempat Makan&nbsp;
                            <i class='bx bxs-bus' ></i> Shuttle Bandara<br>
                            <i class='bx bxs-bell'></i> Pelayanan Kamar
                            <br><hr><br>
                            <h4><?= $v_data_packets->name_hotel_2; ?></h4><br>
                            <h4><i class='bx bxs-map'></i> <?= $v_data_packets->address_hotel_2; ?></h4><br>
                            <div class="gallery-wrap">
                                <i class='bx bx-left-arrow-alt' id="backBtn"></i>
                                <div class="gallery">
                                    <div>
                                        <span><img src="{!! asset('assets/image_travel/'.$v_data_packets->image_hotel2) !!}"></span>
                                    </div>
                                </div>
                                <i class='bx bx-right-arrow-alt' id="nextBtn"></i>
                            </div><br>
                            <h3>Fasilitas Populer</h3>
                            <i class='bx bx-wifi'></i>Free Wifi&nbsp;
                            <i class='bx bx-group' ></i> Ruang Keluarga&nbsp;
                            <i class='bx bx-accessibility'></i> Disabilitas<br>
                            <i class='bx bx-bowl-hot' ></i> Tempat Makan&nbsp;
                            <i class='bx bxs-bus' ></i> Shuttle Bandara<br>
                            <i class='bx bxs-bell'></i> Pelayanan Kamar
                        </div>
                    <?php }else if ($v_data_packets->image_hotel2 != null && $v_data_packets->image_hotel2_2 != null && $v_data_packets->image_hotel2_3 == null && $v_data_packets->image_hotel2_4 == null){ ?>
                        <div class="card_hotel_2">
                            <h3>Hotel</h3><br>
                            <h4><?= $v_data_packets->name_hotel; ?></h4><br>
                            <h4><i class='bx bxs-map'></i> <?= $v_data_packets->address_hotel; ?></h4><br>
                            <div class="gallery-wrap">
                                <i class='bx bx-left-arrow-alt' id="backBtn"></i>
                                <div class="gallery">
                                    <div>
                                        <span><img src="{!! asset('assets/image_travel/'.$v_data_packets->image_hotel1) !!}"></span>
                                        <span><img src="{!! asset('assets/image_travel/'.$v_data_packets->image_hotel1_2) !!}"></span>
                                        <span><img src="{!! asset('assets/image_travel/'.$v_data_packets->image_hotel1_3) !!}"></span>
                                    </div>
                                    <div>
                                        <span><img src="{!! asset('assets/image_travel/'.$v_data_packets->image_hotel1_4) !!}"></span>
                                    </div>
                                </div>
                                <i class='bx bx-right-arrow-alt' id="nextBtn"></i>
                            </div><br>
                            <h3>Fasilitas Populer</h3>
                            <i class='bx bx-wifi'></i>Free Wifi&nbsp;
                            <i class='bx bx-group' ></i> Ruang Keluarga&nbsp;
                            <i class='bx bx-accessibility'></i> Disabilitas<br>
                            <i class='bx bx-bowl-hot' ></i> Tempat Makan&nbsp;
                            <i class='bx bxs-bus' ></i> Shuttle Bandara<br>
                            <i class='bx bxs-bell'></i> Pelayanan Kamar
                            <br><hr><br>
                            <h4><?= $v_data_packets->name_hotel_2; ?></h4><br>
                            <h4><i class='bx bxs-map'></i> <?= $v_data_packets->address_hotel_2; ?></h4><br>
                            <div class="gallery-wrap">
                                <i class='bx bx-left-arrow-alt' id="backBtn"></i>
                                <div class="gallery">
                                    <div>
                                        <span><img src="{!! asset('assets/image_travel/'.$v_data_packets->image_hotel2) !!}"></span>
                                        <span><img src="{!! asset('assets/image_travel/'.$v_data_packets->image_hotel2_2) !!}"></span>
                                    </div>
                                </div>
                                <i class='bx bx-right-arrow-alt' id="nextBtn"></i>
                            </div><br>
                            <h3>Fasilitas Populer</h3>
                            <i class='bx bx-wifi'></i>Free Wifi&nbsp;
                            <i class='bx bx-group' ></i> Ruang Keluarga&nbsp;
                            <i class='bx bx-accessibility'></i> Disabilitas<br>
                            <i class='bx bx-bowl-hot' ></i> Tempat Makan&nbsp;
                            <i class='bx bxs-bus' ></i> Shuttle Bandara<br>
                            <i class='bx bxs-bell'></i> Pelayanan Kamar
                        </div>
                    <?php }else if ($v_data_packets->image_hotel2 != null && $v_data_packets->image_hotel2_2 != null && $v_data_packets->image_hotel2_3 != null && $v_data_packets->image_hotel2_4 == null){ ?>
                        <div class="card_hotel_2">
                            <h3>Hotel</h3><br>
                            <h4><?= $v_data_packets->name_hotel; ?></h4><br>
                            <h4><i class='bx bxs-map'></i> <?= $v_data_packets->address_hotel; ?></h4><br>
                            <div class="gallery-wrap">
                                <i class='bx bx-left-arrow-alt' id="backBtn"></i>
                                <div class="gallery">
                                    <div>
                                        <span><img src="{!! asset('assets/image_travel/'.$v_data_packets->image_hotel1) !!}"></span>
                                        <span><img src="{!! asset('assets/image_travel/'.$v_data_packets->image_hotel1_2) !!}"></span>
                                        <span><img src="{!! asset('assets/image_travel/'.$v_data_packets->image_hotel1_3) !!}"></span>
                                    </div>
                                    <div>
                                        <span><img src="{!! asset('assets/image_travel/'.$v_data_packets->image_hotel1_4) !!}"></span>
                                    </div>
                                </div>
                                <i class='bx bx-right-arrow-alt' id="nextBtn"></i>
                            </div><br>
                            <h3>Fasilitas Populer</h3>
                            <i class='bx bx-wifi'></i>Free Wifi&nbsp;
                            <i class='bx bx-group' ></i> Ruang Keluarga&nbsp;
                            <i class='bx bx-accessibility'></i> Disabilitas<br>
                            <i class='bx bx-bowl-hot' ></i> Tempat Makan&nbsp;
                            <i class='bx bxs-bus' ></i> Shuttle Bandara<br>
                            <i class='bx bxs-bell'></i> Pelayanan Kamar
                            <br><hr><br>
                            <h4><?= $v_data_packets->name_hotel_2; ?></h4><br>
                            <h4><i class='bx bxs-map'></i> <?= $v_data_packets->address_hotel_2; ?></h4><br>
                            <div class="gallery-wrap">
                                <i class='bx bx-left-arrow-alt' id="backBtn"></i>
                                <div class="gallery">
                                    <div>
                                        <span><img src="{!! asset('assets/image_travel/'.$v_data_packets->image_hotel2) !!}"></span>
                                        <span><img src="{!! asset('assets/image_travel/'.$v_data_packets->image_hotel2_2) !!}"></span>
                                        <span><img src="{!! asset('assets/image_travel/'.$v_data_packets->image_hotel2_3) !!}"></span>
                                    </div>
                                </div>
                                <i class='bx bx-right-arrow-alt' id="nextBtn"></i>
                            </div><br>
                            <h3>Fasilitas Populer</h3>
                            <i class='bx bx-wifi'></i>Free Wifi&nbsp;
                            <i class='bx bx-group' ></i> Ruang Keluarga&nbsp;
                            <i class='bx bx-accessibility'></i> Disabilitas<br>
                            <i class='bx bx-bowl-hot' ></i> Tempat Makan&nbsp;
                            <i class='bx bxs-bus' ></i> Shuttle Bandara<br>
                            <i class='bx bxs-bell'></i> Pelayanan Kamar
                        </div>
                    <?php }else if ($v_data_packets->image_hotel2 != null && $v_data_packets->image_hotel2_2 != null && $v_data_packets->image_hotel2_3 != null && $v_data_packets->image_hotel2_4 != null){ ?>
                        <div class="card_hotel_2">
                            <h3>Hotel</h3><br>
                            <h4><?= $v_data_packets->name_hotel; ?></h4><br>
                            <h4><i class='bx bxs-map'></i> <?= $v_data_packets->address_hotel; ?></h4><br>
                            <div class="gallery-wrap">
                                <i class='bx bx-left-arrow-alt' id="backBtn"></i>
                                <div class="gallery">
                                    <div>
                                        <span><img src="{!! asset('assets/image_travel/'.$v_data_packets->image_hotel1) !!}"></span>
                                        <span><img src="{!! asset('assets/image_travel/'.$v_data_packets->image_hotel1_2) !!}"></span>
                                        <span><img src="{!! asset('assets/image_travel/'.$v_data_packets->image_hotel1_3) !!}"></span>
                                    </div>
                                    <div>
                                        <span><img src="{!! asset('assets/image_travel/'.$v_data_packets->image_hotel1_4) !!}"></span>
                                    </div>
                                </div>
                                <i class='bx bx-right-arrow-alt' id="nextBtn"></i>
                            </div><br>
                            <h3>Fasilitas Populer</h3>
                            <i class='bx bx-wifi'></i>Free Wifi&nbsp;
                            <i class='bx bx-group' ></i> Ruang Keluarga&nbsp;
                            <i class='bx bx-accessibility'></i> Disabilitas<br>
                            <i class='bx bx-bowl-hot' ></i> Tempat Makan&nbsp;
                            <i class='bx bxs-bus' ></i> Shuttle Bandara<br>
                            <i class='bx bxs-bell'></i> Pelayanan Kamar
                            <br><hr><br>
                            <h4><?= $v_data_packets->name_hotel_2; ?></h4><br>
                            <h4><i class='bx bxs-map'></i> <?= $v_data_packets->address_hotel_2; ?></h4><br>
                            <div class="gallery-wrap">
                                <i class='bx bx-left-arrow-alt' id="backBtn"></i>
                                <div class="gallery">
                                    <div>
                                        <span><img src="{!! asset('assets/image_travel/'.$v_data_packets->image_hotel2) !!}"></span>
                                        <span><img src="{!! asset('assets/image_travel/'.$v_data_packets->image_hotel2_2) !!}"></span>
                                        <span><img src="{!! asset('assets/image_travel/'.$v_data_packets->image_hotel2_3) !!}"></span>
                                    </div>
                                    <div>
                                        <span><img src="{!! asset('assets/image_travel/'.$v_data_packets->image_hotel2_4) !!}"></span>
                                    </div>
                                </div>
                                <i class='bx bx-right-arrow-alt' id="nextBtn"></i>
                            </div><br>
                            <h3>Fasilitas Populer</h3>
                            <i class='bx bx-wifi'></i>Free Wifi&nbsp;
                            <i class='bx bx-group' ></i> Ruang Keluarga&nbsp;
                            <i class='bx bx-accessibility'></i> Disabilitas<br>
                            <i class='bx bx-bowl-hot' ></i> Tempat Makan&nbsp;
                            <i class='bx bxs-bus' ></i> Shuttle Bandara<br>
                            <i class='bx bxs-bell'></i> Pelayanan Kamar
                        </div>
                    <?php } ?>
                <?php 
                    } 
                ?>
        </div>
        <div class="card4">
        </div>
        </div>
        <div class="card-container">
                <?php if($v_packet->activity != null && $v_packet->activity_2 == null && $v_packet->activity_3 == null && $v_packet->activity_4 == null && $v_packet->activity_5 == null && $v_packet->activity_6 == null && $v_packet->activity_7 == null && $v_packet->activity_8 == null && $v_packet->activity_9 == null && $v_packet->activity_10 == null && $v_packet->activity_11 == null && $v_packet->activity_12 == null && $v_packet->activity_13 == null && $v_packet->activity_14 == null){ ?>
                    <div class="card_perjalanan">
                        <h3>Rencana Perjalanan</h3><br><hr><br>
                        <h4>Hari 1</h4>
                        <p> <?= $v_packet->activity; ?> </p>
                    </div>
                <?php }else if($v_packet->activity != null && $v_packet->activity_2 != null && $v_packet->activity_3 == null && $v_packet->activity_4 == null && $v_packet->activity_5 == null && $v_packet->activity_6 == null && $v_packet->activity_7 == null && $v_packet->activity_8 == null && $v_packet->activity_9 == null && $v_packet->activity_10 == null && $v_packet->activity_11 == null && $v_packet->activity_12 == null && $v_packet->activity_13 == null && $v_packet->activity_14 == null){ ?>
                    <div class="card_perjalanan_2">
                        <h3>Rencana Perjalanan</h3><br><hr><br>
                        <h4>Hari 1</h4>
                        <p> <?= $v_packet->activity; ?> </p><br>
                        <h4>Hari 2</h4>
                        <p> <?= $v_packet->activity_2; ?> </p>
                    </div>
                <?php }else if($v_packet->activity != null && $v_packet->activity_2 != null && $v_packet->activity_3 != null && $v_packet->activity_4 == null && $v_packet->activity_5 == null && $v_packet->activity_6 == null && $v_packet->activity_7 == null && $v_packet->activity_8 == null && $v_packet->activity_9 == null && $v_packet->activity_10 == null && $v_packet->activity_11 == null && $v_packet->activity_12 == null && $v_packet->activity_13 == null && $v_packet->activity_14 == null){ ?>
                    <div class="card_perjalanan_3">
                        <h3>Rencana Perjalanan</h3><br><hr><br>
                        <h4>Hari 1</h4>
                        <p> <?= $v_packet->activity; ?> </p><br>
                        <h4>Hari 2</h4>
                        <p> <?= $v_packet->activity_2; ?> </p> <br>
                        <h4>Hari 3</h4>
                        <p> <?= $v_packet->activity_3; ?> </p>
                    </div>
                <?php }else if($v_packet->activity != null && $v_packet->activity_2 != null && $v_packet->activity_3 != null && $v_packet->activity_4 != null && $v_packet->activity_5 == null && $v_packet->activity_6 == null && $v_packet->activity_7 == null && $v_packet->activity_8 == null && $v_packet->activity_9 == null && $v_packet->activity_10 == null && $v_packet->activity_11 == null && $v_packet->activity_12 == null && $v_packet->activity_13 == null && $v_packet->activity_14 == null){ ?>
                    <div class="card_perjalanan_4">
                        <h3>Rencana Perjalanan</h3><br><hr><br>
                        <h4>Hari 1</h4>
                        <p> <?= $v_packet->activity; ?> </p><br>
                        <h4>Hari 2</h4>
                        <p> <?= $v_packet->activity_2; ?> </p> <br>
                        <h4>Hari 3</h4>
                        <p> <?= $v_packet->activity_3; ?> </p><br>
                        <h4>Hari 4</h4>
                        <p> <?= $v_packet->activity_4; ?> </p>
                    </div>
                <?php }else if($v_packet->activity != null && $v_packet->activity_2 != null && $v_packet->activity_3 != null && $v_packet->activity_4 != null && $v_packet->activity_5 != null && $v_packet->activity_6 == null && $v_packet->activity_7 == null && $v_packet->activity_8 == null && $v_packet->activity_9 == null && $v_packet->activity_10 == null && $v_packet->activity_11 == null && $v_packet->activity_12 == null && $v_packet->activity_13 == null && $v_packet->activity_14 == null){ ?>
                    <div class="card_perjalanan_5">
                        <h3>Rencana Perjalanan</h3><br><hr><br>
                        <h4>Hari 1</h4>
                        <p> <?= $v_packet->activity; ?> </p><br>
                        <h4>Hari 2</h4>
                        <p> <?= $v_packet->activity_2; ?> </p> <br>
                        <h4>Hari 3</h4>
                        <p> <?= $v_packet->activity_3; ?> </p><br>
                        <h4>Hari 4</h4>
                        <p> <?= $v_packet->activity_4; ?> </p><br>
                        <h4>Hari 5</h4>
                        <p> <?= $v_packet->activity_5; ?> </p>
                    </div>
                <?php }else if($v_packet->activity != null && $v_packet->activity_2 != null && $v_packet->activity_3 != null && $v_packet->activity_4 != null && $v_packet->activity_5 != null && $v_packet->activity_6 != null && $v_packet->activity_7 == null && $v_packet->activity_8 == null && $v_packet->activity_9 == null && $v_packet->activity_10 == null && $v_packet->activity_11 == null && $v_packet->activity_12 == null && $v_packet->activity_13 == null && $v_packet->activity_14 == null){ ?>
                    <div class="card_perjalanan_6">
                        <h3>Rencana Perjalanan</h3><br><hr><br>
                        <h4>Hari 1</h4>
                        <p> <?= $v_packet->activity; ?> </p><br>
                        <h4>Hari 2</h4>
                        <p> <?= $v_packet->activity_2; ?> </p> <br>
                        <h4>Hari 3</h4>
                        <p> <?= $v_packet->activity_3; ?> </p><br>
                        <h4>Hari 4</h4>
                        <p> <?= $v_packet->activity_4; ?> </p><br>
                        <h4>Hari 5</h4>
                        <p> <?= $v_packet->activity_5; ?> </p><br>
                        <h4>Hari 6</h4>
                        <p> <?= $v_packet->activity_6; ?> </p>
                    </div>
                <?php }else if($v_packet->activity != null && $v_packet->activity_2 != null && $v_packet->activity_3 != null && $v_packet->activity_4 != null && $v_packet->activity_5 != null && $v_packet->activity_6 != null && $v_packet->activity_7 != null && $v_packet->activity_8 == null && $v_packet->activity_9 == null && $v_packet->activity_10 == null && $v_packet->activity_11 == null && $v_packet->activity_12 == null && $v_packet->activity_13 == null && $v_packet->activity_14 == null){ ?>
                    <div class="card_perjalanan_7">
                        <h3>Rencana Perjalanan</h3><br><hr><br>
                        <h4>Hari 1</h4>
                        <p> <?= $v_packet->activity; ?> </p><br>
                        <h4>Hari 2</h4>
                        <p> <?= $v_packet->activity_2; ?> </p> <br>
                        <h4>Hari 3</h4>
                        <p> <?= $v_packet->activity_3; ?> </p><br>
                        <h4>Hari 4</h4>
                        <p> <?= $v_packet->activity_4; ?> </p><br>
                        <h4>Hari 5</h4>
                        <p> <?= $v_packet->activity_5; ?> </p><br>
                        <h4>Hari 6</h4>
                        <p> <?= $v_packet->activity_6; ?> </p><br>
                        <h4>Hari 7</h4>
                        <p> <?= $v_packet->activity_7; ?> </p>
                    </div>
                <?php }else if($v_packet->activity != null && $v_packet->activity_2 != null && $v_packet->activity_3 != null && $v_packet->activity_4 != null && $v_packet->activity_5 != null && $v_packet->activity_6 != null && $v_packet->activity_7 != null && $v_packet->activity_8 != null && $v_packet->activity_9 == null && $v_packet->activity_10 == null && $v_packet->activity_11 == null && $v_packet->activity_12 == null && $v_packet->activity_13 == null && $v_packet->activity_14 == null){ ?>
                    <div class="card_perjalanan_8">
                        <h3>Rencana Perjalanan</h3><br><hr><br>
                        <h4>Hari 1</h4>
                        <p> <?= $v_packet->activity; ?> </p><br>
                        <h4>Hari 2</h4>
                        <p> <?= $v_packet->activity_2; ?> </p> <br>
                        <h4>Hari 3</h4>
                        <p> <?= $v_packet->activity_3; ?> </p><br>
                        <h4>Hari 4</h4>
                        <p> <?= $v_packet->activity_4; ?> </p><br>
                        <h4>Hari 5</h4>
                        <p> <?= $v_packet->activity_5; ?> </p><br>
                        <h4>Hari 6</h4>
                        <p> <?= $v_packet->activity_6; ?> </p><br>
                        <h4>Hari 7</h4>
                        <p> <?= $v_packet->activity_7; ?> </p><br>
                        <h4>Hari 8</h4>
                        <p> <?= $v_packet->activity_8; ?> </p>
                    </div>
                <?php }else if($v_packet->activity != null && $v_packet->activity_2 != null && $v_packet->activity_3 != null && $v_packet->activity_4 != null && $v_packet->activity_5 != null && $v_packet->activity_6 != null && $v_packet->activity_7 != null && $v_packet->activity_8 != null && $v_packet->activity_9 != null && $v_packet->activity_10 == null && $v_packet->activity_11 == null && $v_packet->activity_12 == null && $v_packet->activity_13 == null && $v_packet->activity_14 == null){ ?>
                    <div class="card_perjalanan_9">
                        <h3>Rencana Perjalanan</h3><br><hr><br>
                        <h4>Hari 1</h4>
                        <p> <?= $v_packet->activity; ?> </p><br>
                        <h4>Hari 2</h4>
                        <p> <?= $v_packet->activity_2; ?> </p> <br>
                        <h4>Hari 3</h4>
                        <p> <?= $v_packet->activity_3; ?> </p><br>
                        <h4>Hari 4</h4>
                        <p> <?= $v_packet->activity_4; ?> </p><br>
                        <h4>Hari 5</h4>
                        <p> <?= $v_packet->activity_5; ?> </p><br>
                        <h4>Hari 6</h4>
                        <p> <?= $v_packet->activity_6; ?> </p><br>
                        <h4>Hari 7</h4>
                        <p> <?= $v_packet->activity_7; ?> </p><br>
                        <h4>Hari 8</h4>
                        <p> <?= $v_packet->activity_8; ?> </p><br>
                        <h4>Hari 9</h4>
                        <p> <?= $v_packet->activity_9; ?> </p>
                    </div>
                <?php }else if($v_packet->activity != null && $v_packet->activity_2 != null && $v_packet->activity_3 != null && $v_packet->activity_4 != null && $v_packet->activity_5 != null && $v_packet->activity_6 != null && $v_packet->activity_7 != null && $v_packet->activity_8 != null && $v_packet->activity_9 != null && $v_packet->activity_10 != null && $v_packet->activity_11 == null && $v_packet->activity_12 == null && $v_packet->activity_13 == null && $v_packet->activity_14 == null){ ?>
                    <div class="card_perjalanan_10">
                        <h3>Rencana Perjalanan</h3><br><hr><br>
                        <h4>Hari 1</h4>
                        <p> <?= $v_packet->activity; ?> </p><br>
                        <h4>Hari 2</h4>
                        <p> <?= $v_packet->activity_2; ?> </p> <br>
                        <h4>Hari 3</h4>
                        <p> <?= $v_packet->activity_3; ?> </p><br>
                        <h4>Hari 4</h4>
                        <p> <?= $v_packet->activity_4; ?> </p><br>
                        <h4>Hari 5</h4>
                        <p> <?= $v_packet->activity_5; ?> </p><br>
                        <h4>Hari 6</h4>
                        <p> <?= $v_packet->activity_6; ?> </p><br>
                        <h4>Hari 7</h4>
                        <p> <?= $v_packet->activity_7; ?> </p><br>
                        <h4>Hari 8</h4>
                        <p> <?= $v_packet->activity_8; ?> </p><br>
                        <h4>Hari 9</h4>
                        <p> <?= $v_packet->activity_9; ?> </p><br>
                        <h4>Hari 10</h4>
                        <p> <?= $v_packet->activity_10; ?> </p>
                    </div>
                <?php }else if($v_packet->activity != null && $v_packet->activity_2 != null && $v_packet->activity_3 != null && $v_packet->activity_4 != null && $v_packet->activity_5 != null && $v_packet->activity_6 != null && $v_packet->activity_7 != null && $v_packet->activity_8 != null && $v_packet->activity_9 != null && $v_packet->activity_10 != null && $v_packet->activity_11 != null && $v_packet->activity_12 == null && $v_packet->activity_13 == null && $v_packet->activity_14 == null){ ?>
                    <div class="card_perjalanan_11">
                        <h3>Rencana Perjalanan</h3><br><hr><br>
                        <h4>Hari 1</h4>
                        <p> <?= $v_packet->activity; ?> </p><br>
                        <h4>Hari 2</h4>
                        <p> <?= $v_packet->activity_2; ?> </p> <br>
                        <h4>Hari 3</h4>
                        <p> <?= $v_packet->activity_3; ?> </p><br>
                        <h4>Hari 4</h4>
                        <p> <?= $v_packet->activity_4; ?> </p><br>
                        <h4>Hari 5</h4>
                        <p> <?= $v_packet->activity_5; ?> </p><br>
                        <h4>Hari 6</h4>
                        <p> <?= $v_packet->activity_6; ?> </p><br>
                        <h4>Hari 7</h4>
                        <p> <?= $v_packet->activity_7; ?> </p><br>
                        <h4>Hari 8</h4>
                        <p> <?= $v_packet->activity_8; ?> </p><br>
                        <h4>Hari 9</h4>
                        <p> <?= $v_packet->activity_9; ?> </p><br>
                        <h4>Hari 10</h4>
                        <p> <?= $v_packet->activity_10; ?> </p><br>
                        <h4>Hari 11</h4>
                        <p> <?= $v_packet->activity_11; ?> </p>
                    </div>
                <?php }else if($v_packet->activity != null && $v_packet->activity_2 != null && $v_packet->activity_3 != null && $v_packet->activity_4 != null && $v_packet->activity_5 != null && $v_packet->activity_6 != null && $v_packet->activity_7 != null && $v_packet->activity_8 != null && $v_packet->activity_9 != null && $v_packet->activity_10 != null && $v_packet->activity_11 != null && $v_packet->activity_12 != null && $v_packet->activity_13 == null && $v_packet->activity_14 == null){ ?>
                    <div class="card_perjalanan_12">
                        <h3>Rencana Perjalanan</h3><br><hr><br>
                        <h4>Hari 1</h4>
                        <p> <?= $v_packet->activity; ?> </p><br>
                        <h4>Hari 2</h4>
                        <p> <?= $v_packet->activity_2; ?> </p> <br>
                        <h4>Hari 3</h4>
                        <p> <?= $v_packet->activity_3; ?> </p><br>
                        <h4>Hari 4</h4>
                        <p> <?= $v_packet->activity_4; ?> </p><br>
                        <h4>Hari 5</h4>
                        <p> <?= $v_packet->activity_5; ?> </p><br>
                        <h4>Hari 6</h4>
                        <p> <?= $v_packet->activity_6; ?> </p><br>
                        <h4>Hari 7</h4>
                        <p> <?= $v_packet->activity_7; ?> </p><br>
                        <h4>Hari 8</h4>
                        <p> <?= $v_packet->activity_8; ?> </p><br>
                        <h4>Hari 9</h4>
                        <p> <?= $v_packet->activity_9; ?> </p><br>
                        <h4>Hari 10</h4>
                        <p> <?= $v_packet->activity_10; ?> </p><br>
                        <h4>Hari 11</h4>
                        <p> <?= $v_packet->activity_11; ?> </p><br>
                        <h4>Hari 12</h4>
                        <p> <?= $v_packet->activity_12; ?> </p>
                    </div>
                <?php }else if($v_packet->activity != null && $v_packet->activity_2 != null && $v_packet->activity_3 != null && $v_packet->activity_4 != null && $v_packet->activity_5 != null && $v_packet->activity_6 != null && $v_packet->activity_7 != null && $v_packet->activity_8 != null && $v_packet->activity_9 != null && $v_packet->activity_10 != null && $v_packet->activity_11 != null && $v_packet->activity_12 != null && $v_packet->activity_13 != null && $v_packet->activity_14 == null){ ?>
                    <div class="card_perjalanan_13">
                        <h3>Rencana Perjalanan</h3><br><hr><br>
                        <h4>Hari 1</h4>
                        <p> <?= $v_packet->activity; ?> </p><br>
                        <h4>Hari 2</h4>
                        <p> <?= $v_packet->activity_2; ?> </p> <br>
                        <h4>Hari 3</h4>
                        <p> <?= $v_packet->activity_3; ?> </p><br>
                        <h4>Hari 4</h4>
                        <p> <?= $v_packet->activity_4; ?> </p><br>
                        <h4>Hari 5</h4>
                        <p> <?= $v_packet->activity_5; ?> </p><br>
                        <h4>Hari 6</h4>
                        <p> <?= $v_packet->activity_6; ?> </p><br>
                        <h4>Hari 7</h4>
                        <p> <?= $v_packet->activity_7; ?> </p><br>
                        <h4>Hari 8</h4>
                        <p> <?= $v_packet->activity_8; ?> </p><br>
                        <h4>Hari 9</h4>
                        <p> <?= $v_packet->activity_9; ?> </p><br>
                        <h4>Hari 10</h4>
                        <p> <?= $v_packet->activity_10; ?> </p><br>
                        <h4>Hari 11</h4>
                        <p> <?= $v_packet->activity_11; ?> </p><br>
                        <h4>Hari 12</h4>
                        <p> <?= $v_packet->activity_12; ?> </p><br>
                        <h4>Hari 13</h4>
                        <p> <?= $v_packet->activity_13; ?> </p>
                    </div>
                <?php }else if($v_packet->activity != null && $v_packet->activity_2 != null && $v_packet->activity_3 != null && $v_packet->activity_4 != null && $v_packet->activity_5 != null && $v_packet->activity_6 != null && $v_packet->activity_7 != null && $v_packet->activity_8 != null && $v_packet->activity_9 != null && $v_packet->activity_10 != null && $v_packet->activity_11 != null && $v_packet->activity_12 != null && $v_packet->activity_13 != null && $v_packet->activity_14 != null){ ?>
                    <div class="card_perjalanan_14">
                        <h3>Rencana Perjalanan</h3><br><hr><br>
                        <h4>Hari 1</h4>
                        <p> <?= $v_packet->activity; ?> </p><br>
                        <h4>Hari 2</h4>
                        <p> <?= $v_packet->activity_2; ?> </p> <br>
                        <h4>Hari 3</h4>
                        <p> <?= $v_packet->activity_3; ?> </p><br>
                        <h4>Hari 4</h4>
                        <p> <?= $v_packet->activity_4; ?> </p><br>
                        <h4>Hari 5</h4>
                        <p> <?= $v_packet->activity_5; ?> </p><br>
                        <h4>Hari 6</h4>
                        <p> <?= $v_packet->activity_6; ?> </p><br>
                        <h4>Hari 7</h4>
                        <p> <?= $v_packet->activity_7; ?> </p><br>
                        <h4>Hari 8</h4>
                        <p> <?= $v_packet->activity_8; ?> </p><br>
                        <h4>Hari 9</h4>
                        <p> <?= $v_packet->activity_9; ?> </p><br>
                        <h4>Hari 10</h4>
                        <p> <?= $v_packet->activity_10; ?> </p><br>
                        <h4>Hari 11</h4>
                        <p> <?= $v_packet->activity_11; ?> </p><br>
                        <h4>Hari 12</h4>
                        <p> <?= $v_packet->activity_12; ?> </p><br>
                        <h4>Hari 13</h4>
                        <p> <?= $v_packet->activity_13; ?> </p><br>
                        <h4>Hari 14</h4>
                        <p> <?= $v_packet->activity_14; ?> </p>
                    </div>
                <?php } ?>
            <div class="card4">
            </div>
        </div><br>

        <h4 class="h4_paket_product">Paket Umroh Lainnya</h4><br>
            <div class="row_paket1">
                <?php foreach ($product as $v_product) {
                    $total_order = DB::table('order_packets')->where('id_packet', $v_product->id_data_packet)->where('status', 'Paid')->count();
                    $total_seat = $v_product->total_seat;
                    $total_data_seat = (($total_seat - $total_order) / $total_seat) * 100;    
                    $total_data_seat2 = $total_seat - $total_order; 
                ?>
                <a href="/product/{{ $v_product->id }}" style="color: black">
                    <div class="column_paket1">
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

            <button type="button" class="info_lanjut">Tampilkan Lebih Banyak</button><br><br>
    </section>

    @include('template.footer')

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script>

        function pesan_paket() {
            document.getElementById('data_pesan_paket').style.display = 'block';
            document.getElementById('informasi_paket').style.display = 'none';
        }

        function pesan_paket_triple() {
            document.getElementById('data_pesan_paket_triple').style.display = 'block';
            document.getElementById('informasi_paket').style.display = 'none';
        }

        function pesan_paket_double() {
            document.getElementById('data_pesan_paket_double').style.display = 'block';
            document.getElementById('informasi_paket').style.display = 'none';
        }

        //-------------------------harga quad-----------------------------------
        let valueCount          = 1;
        let valueCount_child    = 0;
        let valueCount_baby     = 0;
        let count               = document.querySelector("#quantity");
        let count_child         = document.querySelector("#quantity_child");
        let count_baby          = document.querySelector("#quantity_baby");
        let count_quad_1        = document.querySelector("#quantity_quad_1");
        let count_child_quad_1  = document.querySelector("#quantity_child_quad_1");
        let count_baby_quad_1   = document.querySelector("#quantity_baby_quad_1");
        let count_quad_2        = document.querySelector("#quantity_quad_2");
        let count_child_quad_2  = document.querySelector("#quantity_child_quad_2");
        let count_baby_quad_2   = document.querySelector("#quantity_baby_quad_2");
        let count_quad_3        = document.querySelector("#quantity_quad_3");
        let count_child_quad_3  = document.querySelector("#quantity_child_quad_3");
        let count_baby_quad_3   = document.querySelector("#quantity_baby_quad_3");
        let count_quad_4        = document.querySelector("#quantity_quad_4");
        let count_child_quad_4  = document.querySelector("#quantity_child_quad_4");
        let count_baby_quad_4   = document.querySelector("#quantity_baby_quad_4");
        let count_quad_5        = document.querySelector("#quantity_quad_5");
        let count_child_quad_5  = document.querySelector("#quantity_child_quad_5");
        let count_baby_quad_5   = document.querySelector("#quantity_baby_quad_5");
        let count_quad_6        = document.querySelector("#quantity_quad_6");
        let count_child_quad_6  = document.querySelector("#quantity_child_quad_6");
        let count_baby_quad_6   = document.querySelector("#quantity_baby_quad_6");
        let count_quad_7        = document.querySelector("#quantity_quad_7");
        let count_child_quad_7  = document.querySelector("#quantity_child_quad_7");
        let count_baby_quad_7   = document.querySelector("#quantity_baby_quad_7");
        let count_quad_8        = document.querySelector("#quantity_quad_8");
        let count_child_quad_8  = document.querySelector("#quantity_child_quad_8");
        let count_baby_quad_8   = document.querySelector("#quantity_baby_quad_8");
        let count_quad_9        = document.querySelector("#quantity_quad_9");
        let count_child_quad_9  = document.querySelector("#quantity_child_quad_9");
        let count_baby_quad_9   = document.querySelector("#quantity_baby_quad_9");
        let harga               = document.getElementById('price_total_jamaah');

        function tambah_adult() {
            let add = ++valueCount;
            console.log(add);
            count.value=add;
            harga.value = parseInt(harga.value) + <?= $harga_adult ?>;
            let formattedAmount = new Intl.NumberFormat('id-ID', { style: 'currency', currency: 'IDR' }).format(harga.value);
            document.getElementById('moneyDisplay').innerText = formattedAmount;
        }

        function kurang_adult() {
            if(valueCount >= 2){
                let sub =--valueCount;
                console.log(sub);
                count.value=sub;
                harga.value = parseInt(harga.value) - <?= $harga_adult ?>;
                let formattedAmount = new Intl.NumberFormat('id-ID', { style: 'currency', currency: 'IDR' }).format(harga.value);
                document.getElementById('moneyDisplay').innerText = formattedAmount;
            }
        }

        function tambah_child() {
            let add_child = ++valueCount_child;
            count_child.value=add_child;
            harga.value = parseInt(harga.value) + <?= $harga_child ?>;
            let formattedAmount = new Intl.NumberFormat('id-ID', { style: 'currency', currency: 'IDR' }).format(harga.value);
            document.getElementById('moneyDisplay').innerText = formattedAmount;
        }

        function kurang_child() {
            if(valueCount_child >= 1){
                let sub =--valueCount_child;
                count_child.value=sub;
                harga.value = parseInt(harga.value) - <?= $harga_child ?>;
                let formattedAmount = new Intl.NumberFormat('id-ID', { style: 'currency', currency: 'IDR' }).format(harga.value);
                document.getElementById('moneyDisplay').innerText = formattedAmount;
            }
        }

        function tambah_baby() {
            let add_baby = ++valueCount_baby;
            count_baby.value=add_baby;
            harga.value = parseInt(harga.value) + <?= $harga_baby ?>;
            let formattedAmount = new Intl.NumberFormat('id-ID', { style: 'currency', currency: 'IDR' }).format(harga.value);
            document.getElementById('moneyDisplay').innerText = formattedAmount;
        }

        function kurang_baby() {
            if(valueCount_baby >= 1){
                let sub =--valueCount_baby;
                count_baby.value=sub;
                harga.value = parseInt(harga.value) - <?= $harga_baby ?>;
                let formattedAmount = new Intl.NumberFormat('id-ID', { style: 'currency', currency: 'IDR' }).format(harga.value);
                document.getElementById('moneyDisplay').innerText = formattedAmount;
            }
        }

        function tambah_adult_quad_1() {
            let add_quad_1 = ++valueCount;
            console.log(add_quad_1);
            count_quad_1.value=add_quad_1;
            harga.value = parseInt(harga.value) + <?= $harga_adult ?>;
            let formattedAmount = new Intl.NumberFormat('id-ID', { style: 'currency', currency: 'IDR' }).format(harga.value);
            document.getElementById('moneyDisplay').innerText = formattedAmount;
        }

        function kurang_adult_quad_1() {
            if(valueCount >= 2){
                let sub_quad_1 =--valueCount;
                console.log(sub_quad_1);
                count_quad_1.value=sub_quad_1;
                harga.value = parseInt(harga.value) - <?= $harga_adult ?>;
                let formattedAmount = new Intl.NumberFormat('id-ID', { style: 'currency', currency: 'IDR' }).format(harga.value);
                document.getElementById('moneyDisplay').innerText = formattedAmount;
            }
        }

        function tambah_child_quad_1() {
            let add_child_quad_1 = ++valueCount_child;
            count_child_quad_1.value=add_child_quad_1;
            harga.value = parseInt(harga.value) + <?= $harga_child ?>;
            let formattedAmount = new Intl.NumberFormat('id-ID', { style: 'currency', currency: 'IDR' }).format(harga.value);
            document.getElementById('moneyDisplay').innerText = formattedAmount;
        }

        function kurang_child_quad_1() {
            if(valueCount_child >= 1){
                let sub_quad_1 =--valueCount_child;
                count_child_quad_1.value=sub_quad_1;
                harga.value = parseInt(harga.value) - <?= $harga_child ?>;
                let formattedAmount = new Intl.NumberFormat('id-ID', { style: 'currency', currency: 'IDR' }).format(harga.value);
                document.getElementById('moneyDisplay').innerText = formattedAmount;
            }
        }

        function tambah_baby_quad_1() {
            let add_baby_quad_1 = ++valueCount_baby;
            count_baby_quad_1.value=add_baby_quad_1;
            harga.value = parseInt(harga.value) + <?= $harga_baby ?>;
            let formattedAmount = new Intl.NumberFormat('id-ID', { style: 'currency', currency: 'IDR' }).format(harga.value);
            document.getElementById('moneyDisplay').innerText = formattedAmount;
        }

        function kurang_baby_quad_1() {
            if(valueCount_baby >= 1){
                let sub_quad_1 =--valueCount_baby;
                count_baby_quad_1.value=sub_quad_1;
                harga.value = parseInt(harga.value) - <?= $harga_baby ?>;
                let formattedAmount = new Intl.NumberFormat('id-ID', { style: 'currency', currency: 'IDR' }).format(harga.value);
                document.getElementById('moneyDisplay').innerText = formattedAmount;
            }
        }

        function tambah_adult_quad_2() {
            let add_quad_2 = ++valueCount;
            console.log(add_quad_2);
            count_quad_2.value=add_quad_2;
            harga.value = parseInt(harga.value) + <?= $harga_adult ?>;
            let formattedAmount = new Intl.NumberFormat('id-ID', { style: 'currency', currency: 'IDR' }).format(harga.value);
            document.getElementById('moneyDisplay').innerText = formattedAmount;
        }

        function kurang_adult_quad_2() {
            if(valueCount >= 2){
                let sub_quad_2 =--valueCount;
                console.log(sub_quad_2);
                count_quad_2.value=sub_quad_2;
                harga.value = parseInt(harga.value) - <?= $harga_adult ?>;
                let formattedAmount = new Intl.NumberFormat('id-ID', { style: 'currency', currency: 'IDR' }).format(harga.value);
                document.getElementById('moneyDisplay').innerText = formattedAmount;
            }
        }

        function tambah_child_quad_2() {
            let add_child_quad_2 = ++valueCount_child;
            count_child_quad_2.value=add_child_quad_2;
            harga.value = parseInt(harga.value) + <?= $harga_child ?>;
            let formattedAmount = new Intl.NumberFormat('id-ID', { style: 'currency', currency: 'IDR' }).format(harga.value);
            document.getElementById('moneyDisplay').innerText = formattedAmount;
        }

        function kurang_child_quad_2() {
            if(valueCount_child >= 1){
                let sub_quad_2 =--valueCount_child;
                count_child_quad_2.value=sub_quad_2;
                harga.value = parseInt(harga.value) - <?= $harga_child ?>;
                let formattedAmount = new Intl.NumberFormat('id-ID', { style: 'currency', currency: 'IDR' }).format(harga.value);
                document.getElementById('moneyDisplay').innerText = formattedAmount;
            }
        }

        function tambah_baby_quad_2() {
            let add_baby_quad_2 = ++valueCount_baby;
            count_baby_quad_2.value=add_baby_quad_2;
            harga.value = parseInt(harga.value) + <?= $harga_baby ?>;
            let formattedAmount = new Intl.NumberFormat('id-ID', { style: 'currency', currency: 'IDR' }).format(harga.value);
            document.getElementById('moneyDisplay').innerText = formattedAmount;
        }

        function kurang_baby_quad_2() {
            if(valueCount_baby >= 1){
                let sub_quad_2 =--valueCount_baby;
                count_baby_quad_2.value=sub_quad_2;
                harga.value = parseInt(harga.value) - <?= $harga_baby ?>;
                let formattedAmount = new Intl.NumberFormat('id-ID', { style: 'currency', currency: 'IDR' }).format(harga.value);
                document.getElementById('moneyDisplay').innerText = formattedAmount;
            }
        }

        function tambah_adult_quad_3() {
            let add_quad_3 = ++valueCount;
            console.log(add_quad_3);
            count_quad_3.value=add_quad_3;
            harga.value = parseInt(harga.value) + <?= $harga_adult ?>;
            let formattedAmount = new Intl.NumberFormat('id-ID', { style: 'currency', currency: 'IDR' }).format(harga.value);
            document.getElementById('moneyDisplay').innerText = formattedAmount;
        }

        function kurang_adult_quad_3() {
            if(valueCount >= 2){
                let sub_quad_3 =--valueCount;
                console.log(sub_quad_3);
                count_quad_3.value=sub_quad_3;
                harga.value = parseInt(harga.value) - <?= $harga_adult ?>;
                let formattedAmount = new Intl.NumberFormat('id-ID', { style: 'currency', currency: 'IDR' }).format(harga.value);
                document.getElementById('moneyDisplay').innerText = formattedAmount;
            }
        }

        function tambah_child_quad_3() {
            let add_child_quad_3 = ++valueCount_child;
            count_child_quad_3.value=add_child_quad_3;
            harga.value = parseInt(harga.value) + <?= $harga_child ?>;
            let formattedAmount = new Intl.NumberFormat('id-ID', { style: 'currency', currency: 'IDR' }).format(harga.value);
            document.getElementById('moneyDisplay').innerText = formattedAmount;
        }

        function kurang_child_quad_3() {
            if(valueCount_child >= 1){
                let sub_quad_3 =--valueCount_child;
                count_child_quad_3.value=sub_quad_3;
                harga.value = parseInt(harga.value) - <?= $harga_child ?>;
                let formattedAmount = new Intl.NumberFormat('id-ID', { style: 'currency', currency: 'IDR' }).format(harga.value);
                document.getElementById('moneyDisplay').innerText = formattedAmount;
            }
        }

        function tambah_baby_quad_3() {
            let add_baby_quad_3 = ++valueCount_baby;
            count_baby_quad_3.value=add_baby_quad_3;
            harga.value = parseInt(harga.value) + <?= $harga_baby ?>;
            let formattedAmount = new Intl.NumberFormat('id-ID', { style: 'currency', currency: 'IDR' }).format(harga.value);
            document.getElementById('moneyDisplay').innerText = formattedAmount;
        }

        function kurang_baby_quad_3() {
            if(valueCount_baby >= 1){
                let sub_quad_3 =--valueCount_baby;
                count_baby_quad_3.value=sub_quad_3;
                harga.value = parseInt(harga.value) - <?= $harga_baby ?>;
                let formattedAmount = new Intl.NumberFormat('id-ID', { style: 'currency', currency: 'IDR' }).format(harga.value);
                document.getElementById('moneyDisplay').innerText = formattedAmount;
            }
        }

        function tambah_adult_quad_4() {
            let add_quad_4 = ++valueCount;
            console.log(add_quad_4);
            count_quad_4.value=add_quad_4;
            harga.value = parseInt(harga.value) + <?= $harga_adult ?>;
            let formattedAmount = new Intl.NumberFormat('id-ID', { style: 'currency', currency: 'IDR' }).format(harga.value);
            document.getElementById('moneyDisplay').innerText = formattedAmount;
        }

        function kurang_adult_quad_4() {
            if(valueCount >= 2){
                let sub_quad_4 =--valueCount;
                console.log(sub_quad_4);
                count_quad_4.value=sub_quad_4;
                harga.value = parseInt(harga.value) - <?= $harga_adult ?>;
                let formattedAmount = new Intl.NumberFormat('id-ID', { style: 'currency', currency: 'IDR' }).format(harga.value);
                document.getElementById('moneyDisplay').innerText = formattedAmount;
            }
        }

        function tambah_child_quad_4() {
            let add_child_quad_4 = ++valueCount_child;
            count_child_quad_4.value=add_child_quad_4;
            harga.value = parseInt(harga.value) + <?= $harga_child ?>;
            let formattedAmount = new Intl.NumberFormat('id-ID', { style: 'currency', currency: 'IDR' }).format(harga.value);
            document.getElementById('moneyDisplay').innerText = formattedAmount;
        }

        function kurang_child_quad_4() {
            if(valueCount_child >= 1){
                let sub_quad_4 =--valueCount_child;
                count_child_quad_4.value=sub_quad_4;
                harga.value = parseInt(harga.value) - <?= $harga_child ?>;
                let formattedAmount = new Intl.NumberFormat('id-ID', { style: 'currency', currency: 'IDR' }).format(harga.value);
                document.getElementById('moneyDisplay').innerText = formattedAmount;
            }
        }

        function tambah_baby_quad_4() {
            let add_baby_quad_4 = ++valueCount_baby;
            count_baby_quad_4.value=add_baby_quad_4;
            harga.value = parseInt(harga.value) + <?= $harga_baby ?>;
            let formattedAmount = new Intl.NumberFormat('id-ID', { style: 'currency', currency: 'IDR' }).format(harga.value);
            document.getElementById('moneyDisplay').innerText = formattedAmount;
        }

        function kurang_baby_quad_4() {
            if(valueCount_baby >= 1){
                let sub_quad_4 =--valueCount_baby;
                count_baby_quad_4.value=sub_quad_4;
                harga.value = parseInt(harga.value) - <?= $harga_baby ?>;
                let formattedAmount = new Intl.NumberFormat('id-ID', { style: 'currency', currency: 'IDR' }).format(harga.value);
                document.getElementById('moneyDisplay').innerText = formattedAmount;
            }
        }

        function tambah_adult_quad_5() {
            let add_quad_5 = ++valueCount;
            console.log(add_quad_5);
            count_quad_5.value=add_quad_5;
            harga.value = parseInt(harga.value) + <?= $harga_adult ?>;
            let formattedAmount = new Intl.NumberFormat('id-ID', { style: 'currency', currency: 'IDR' }).format(harga.value);
            document.getElementById('moneyDisplay').innerText = formattedAmount;
        }

        function kurang_adult_quad_5() {
            if(valueCount >= 2){
                let sub_quad_5 =--valueCount;
                console.log(sub_quad_5);
                count_quad_5.value=sub_quad_5;
                harga.value = parseInt(harga.value) - <?= $harga_adult ?>;
                let formattedAmount = new Intl.NumberFormat('id-ID', { style: 'currency', currency: 'IDR' }).format(harga.value);
                document.getElementById('moneyDisplay').innerText = formattedAmount;
            }
        }

        function tambah_child_quad_5() {
            let add_child_quad_5 = ++valueCount_child;
            count_child_quad_5.value=add_child_quad_5;
            harga.value = parseInt(harga.value) + <?= $harga_child ?>;
            let formattedAmount = new Intl.NumberFormat('id-ID', { style: 'currency', currency: 'IDR' }).format(harga.value);
            document.getElementById('moneyDisplay').innerText = formattedAmount;
        }

        function kurang_child_quad_5() {
            if(valueCount_child >= 1){
                let sub_quad_5 =--valueCount_child;
                count_child_quad_5.value=sub_quad_5;
                harga.value = parseInt(harga.value) - <?= $harga_child ?>;
                let formattedAmount = new Intl.NumberFormat('id-ID', { style: 'currency', currency: 'IDR' }).format(harga.value);
                document.getElementById('moneyDisplay').innerText = formattedAmount;
            }
        }

        function tambah_baby_quad_5() {
            let add_baby_quad_5 = ++valueCount_baby;
            count_baby_quad_5.value=add_baby_quad_5;
            harga.value = parseInt(harga.value) + <?= $harga_baby ?>;
            let formattedAmount = new Intl.NumberFormat('id-ID', { style: 'currency', currency: 'IDR' }).format(harga.value);
            document.getElementById('moneyDisplay').innerText = formattedAmount;
        }

        function kurang_baby_quad_5() {
            if(valueCount_baby >= 1){
                let sub_quad_5 =--valueCount_baby;
                count_baby_quad_5.value=sub_quad_5;
                harga.value = parseInt(harga.value) - <?= $harga_baby ?>;
                let formattedAmount = new Intl.NumberFormat('id-ID', { style: 'currency', currency: 'IDR' }).format(harga.value);
                document.getElementById('moneyDisplay').innerText = formattedAmount;
            }
        }

        function tambah_adult_quad_6() {
            let add_quad_6 = ++valueCount;
            console.log(add_quad_6);
            count_quad_6.value=add_quad_6;
            harga.value = parseInt(harga.value) + <?= $harga_adult ?>;
            let formattedAmount = new Intl.NumberFormat('id-ID', { style: 'currency', currency: 'IDR' }).format(harga.value);
            document.getElementById('moneyDisplay').innerText = formattedAmount;
        }

        function kurang_adult_quad_6() {
            if(valueCount >= 2){
                let sub_quad_6 =--valueCount;
                console.log(sub_quad_6);
                count_quad_6.value=sub_quad_6;
                harga.value = parseInt(harga.value) - <?= $harga_adult ?>;
                let formattedAmount = new Intl.NumberFormat('id-ID', { style: 'currency', currency: 'IDR' }).format(harga.value);
                document.getElementById('moneyDisplay').innerText = formattedAmount;
            }
        }

        function tambah_child_quad_6() {
            let add_child_quad_6 = ++valueCount_child;
            count_child_quad_6.value=add_child_quad_6;
            harga.value = parseInt(harga.value) + <?= $harga_child ?>;
            let formattedAmount = new Intl.NumberFormat('id-ID', { style: 'currency', currency: 'IDR' }).format(harga.value);
            document.getElementById('moneyDisplay').innerText = formattedAmount;
        }

        function kurang_child_quad_6() {
            if(valueCount_child >= 1){
                let sub_quad_6 =--valueCount_child;
                count_child_quad_6.value=sub_quad_6;
                harga.value = parseInt(harga.value) - <?= $harga_child ?>;
                let formattedAmount = new Intl.NumberFormat('id-ID', { style: 'currency', currency: 'IDR' }).format(harga.value);
                document.getElementById('moneyDisplay').innerText = formattedAmount;
            }
        }

        function tambah_baby_quad_6() {
            let add_baby_quad_6 = ++valueCount_baby;
            count_baby_quad_6.value=add_baby_quad_6;
            harga.value = parseInt(harga.value) + <?= $harga_baby ?>;
            let formattedAmount = new Intl.NumberFormat('id-ID', { style: 'currency', currency: 'IDR' }).format(harga.value);
            document.getElementById('moneyDisplay').innerText = formattedAmount;
        }

        function kurang_baby_quad_6() {
            if(valueCount_baby >= 1){
                let sub_quad_6 =--valueCount_baby;
                count_baby_quad_6.value=sub_quad_6;
                harga.value = parseInt(harga.value) - <?= $harga_baby ?>;
                let formattedAmount = new Intl.NumberFormat('id-ID', { style: 'currency', currency: 'IDR' }).format(harga.value);
                document.getElementById('moneyDisplay').innerText = formattedAmount;
            }
        }

        function tambah_adult_quad_7() {
            let add_quad_7 = ++valueCount;
            console.log(add_quad_7);
            count_quad_7.value=add_quad_7;
            harga.value = parseInt(harga.value) + <?= $harga_adult ?>;
            let formattedAmount = new Intl.NumberFormat('id-ID', { style: 'currency', currency: 'IDR' }).format(harga.value);
            document.getElementById('moneyDisplay').innerText = formattedAmount;
        }

        function kurang_adult_quad_7() {
            if(valueCount >= 2){
                let sub_quad_7 =--valueCount;
                console.log(sub_quad_7);
                count_quad_7.value=sub_quad_7;
                harga.value = parseInt(harga.value) - <?= $harga_adult ?>;
                let formattedAmount = new Intl.NumberFormat('id-ID', { style: 'currency', currency: 'IDR' }).format(harga.value);
                document.getElementById('moneyDisplay').innerText = formattedAmount;
            }
        }

        function tambah_child_quad_7() {
            let add_child_quad_7 = ++valueCount_child;
            count_child_quad_7.value=add_child_quad_7;
            harga.value = parseInt(harga.value) + <?= $harga_child ?>;
            let formattedAmount = new Intl.NumberFormat('id-ID', { style: 'currency', currency: 'IDR' }).format(harga.value);
            document.getElementById('moneyDisplay').innerText = formattedAmount;
        }

        function kurang_child_quad_7() {
            if(valueCount_child >= 1){
                let sub_quad_7 =--valueCount_child;
                count_child_quad_7.value=sub_quad_7;
                harga.value = parseInt(harga.value) - <?= $harga_child ?>;
                let formattedAmount = new Intl.NumberFormat('id-ID', { style: 'currency', currency: 'IDR' }).format(harga.value);
                document.getElementById('moneyDisplay').innerText = formattedAmount;
            }
        }

        function tambah_baby_quad_7() {
            let add_baby_quad_7 = ++valueCount_baby;
            count_baby_quad_7.value=add_baby_quad_7;
            harga.value = parseInt(harga.value) + <?= $harga_baby ?>;
            let formattedAmount = new Intl.NumberFormat('id-ID', { style: 'currency', currency: 'IDR' }).format(harga.value);
            document.getElementById('moneyDisplay').innerText = formattedAmount;
        }

        function kurang_baby_quad_7() {
            if(valueCount_baby >= 1){
                let sub_quad_7 =--valueCount_baby;
                count_baby_quad_7.value=sub_quad_7;
                harga.value = parseInt(harga.value) - <?= $harga_baby ?>;
                let formattedAmount = new Intl.NumberFormat('id-ID', { style: 'currency', currency: 'IDR' }).format(harga.value);
                document.getElementById('moneyDisplay').innerText = formattedAmount;
            }
        }

        function tambah_adult_quad_8() {
            let add_quad_8 = ++valueCount;
            console.log(add_quad_8);
            count_quad_8.value=add_quad_8;
            harga.value = parseInt(harga.value) + <?= $harga_adult ?>;
            let formattedAmount = new Intl.NumberFormat('id-ID', { style: 'currency', currency: 'IDR' }).format(harga.value);
            document.getElementById('moneyDisplay').innerText = formattedAmount;
        }

        function kurang_adult_quad_8() {
            if(valueCount >= 2){
                let sub_quad_8 =--valueCount;
                console.log(sub_quad_8);
                count_quad_8.value=sub_quad_8;
                harga.value = parseInt(harga.value) - <?= $harga_adult ?>;
                let formattedAmount = new Intl.NumberFormat('id-ID', { style: 'currency', currency: 'IDR' }).format(harga.value);
                document.getElementById('moneyDisplay').innerText = formattedAmount;
            }
        }

        function tambah_child_quad_8() {
            let add_child_quad_8 = ++valueCount_child;
            count_child_quad_8.value=add_child_quad_8;
            harga.value = parseInt(harga.value) + <?= $harga_child ?>;
            let formattedAmount = new Intl.NumberFormat('id-ID', { style: 'currency', currency: 'IDR' }).format(harga.value);
            document.getElementById('moneyDisplay').innerText = formattedAmount;
        }

        function kurang_child_quad_8() {
            if(valueCount_child >= 1){
                let sub_quad_8 =--valueCount_child;
                count_child_quad_8.value=sub_quad_8;
                harga.value = parseInt(harga.value) - <?= $harga_child ?>;
                let formattedAmount = new Intl.NumberFormat('id-ID', { style: 'currency', currency: 'IDR' }).format(harga.value);
                document.getElementById('moneyDisplay').innerText = formattedAmount;
            }
        }

        function tambah_baby_quad_8() {
            let add_baby_quad_8 = ++valueCount_baby;
            count_baby_quad_8.value=add_baby_quad_8;
            harga.value = parseInt(harga.value) + <?= $harga_baby ?>;
            let formattedAmount = new Intl.NumberFormat('id-ID', { style: 'currency', currency: 'IDR' }).format(harga.value);
            document.getElementById('moneyDisplay').innerText = formattedAmount;
        }

        function kurang_baby_quad_8() {
            if(valueCount_baby >= 1){
                let sub_quad_8 =--valueCount_baby;
                count_baby_quad_8.value=sub_quad_8;
                harga.value = parseInt(harga.value) - <?= $harga_baby ?>;
                let formattedAmount = new Intl.NumberFormat('id-ID', { style: 'currency', currency: 'IDR' }).format(harga.value);
                document.getElementById('moneyDisplay').innerText = formattedAmount;
            }
        }

        function tambah_adult_quad_9() {
            let add_quad_9 = ++valueCount;
            console.log(add_quad_9);
            count_quad_9.value=add_quad_9;
            harga.value = parseInt(harga.value) + <?= $harga_adult ?>;
            let formattedAmount = new Intl.NumberFormat('id-ID', { style: 'currency', currency: 'IDR' }).format(harga.value);
            document.getElementById('moneyDisplay').innerText = formattedAmount;
        }

        function kurang_adult_quad_9() {
            if(valueCount >= 2){
                let sub_quad_9 =--valueCount;
                console.log(sub_quad_9);
                count_quad_9.value=sub_quad_9;
                harga.value = parseInt(harga.value) - <?= $harga_adult ?>;
                let formattedAmount = new Intl.NumberFormat('id-ID', { style: 'currency', currency: 'IDR' }).format(harga.value);
                document.getElementById('moneyDisplay').innerText = formattedAmount;
            }
        }

        function tambah_child_quad_9() {
            let add_child_quad_9 = ++valueCount_child;
            count_child_quad_9.value=add_child_quad_9;
            harga.value = parseInt(harga.value) + <?= $harga_child ?>;
            let formattedAmount = new Intl.NumberFormat('id-ID', { style: 'currency', currency: 'IDR' }).format(harga.value);
            document.getElementById('moneyDisplay').innerText = formattedAmount;
        }

        function kurang_child_quad_9() {
            if(valueCount_child >= 1){
                let sub_quad_9 =--valueCount_child;
                count_child_quad_9.value=sub_quad_9;
                harga.value = parseInt(harga.value) - <?= $harga_child ?>;
                let formattedAmount = new Intl.NumberFormat('id-ID', { style: 'currency', currency: 'IDR' }).format(harga.value);
                document.getElementById('moneyDisplay').innerText = formattedAmount;
            }
        }

        function tambah_baby_quad_9() {
            let add_baby_quad_9 = ++valueCount_baby;
            count_baby_quad_9.value=add_baby_quad_9;
            harga.value = parseInt(harga.value) + <?= $harga_baby ?>;
            let formattedAmount = new Intl.NumberFormat('id-ID', { style: 'currency', currency: 'IDR' }).format(harga.value);
            document.getElementById('moneyDisplay').innerText = formattedAmount;
        }

        function kurang_baby_quad_9() {
            if(valueCount_baby >= 1){
                let sub_quad_9 =--valueCount_baby;
                count_baby_quad_9.value=sub_quad_9;
                harga.value = parseInt(harga.value) - <?= $harga_baby ?>;
                let formattedAmount = new Intl.NumberFormat('id-ID', { style: 'currency', currency: 'IDR' }).format(harga.value);
                document.getElementById('moneyDisplay').innerText = formattedAmount;
            }
        }

        //------------------------------------------------------------------------------

        //-------------------------harga triple-----------------------------------
        let valueCount_triple           = 1;
        let valueCount_child_triple     = 0;
        let valueCount_baby_triple      = 0;
        let count_triple                = document.querySelector("#quantity_triple");
        let count_child_triple          = document.querySelector("#quantity_child_triple");
        let count_baby_triple           = document.querySelector("#quantity_baby_triple");
        let count_triple_1              = document.querySelector("#quantity_triple_1");
        let count_child_triple_1        = document.querySelector("#quantity_child_triple_1");
        let count_baby_triple_1         = document.querySelector("#quantity_baby_triple_1");
        let count_triple_2              = document.querySelector("#quantity_triple_2");
        let count_child_triple_2        = document.querySelector("#quantity_child_triple_2");
        let count_baby_triple_2         = document.querySelector("#quantity_baby_triple_2");
        let count_triple_3              = document.querySelector("#quantity_triple_3");
        let count_child_triple_3        = document.querySelector("#quantity_child_triple_3");
        let count_baby_triple_3         = document.querySelector("#quantity_baby_triple_3");
        let count_triple_4              = document.querySelector("#quantity_triple_4");
        let count_child_triple_4        = document.querySelector("#quantity_child_triple_4");
        let count_baby_triple_4         = document.querySelector("#quantity_baby_triple_4");
        let count_triple_5              = document.querySelector("#quantity_triple_5");
        let count_child_triple_5        = document.querySelector("#quantity_child_triple_5");
        let count_baby_triple_5         = document.querySelector("#quantity_baby_triple_5");
        let count_triple_6              = document.querySelector("#quantity_triple_6");
        let count_child_triple_6        = document.querySelector("#quantity_child_triple_6");
        let count_baby_triple_6         = document.querySelector("#quantity_baby_triple_6");
        let count_triple_7              = document.querySelector("#quantity_triple_7");
        let count_child_triple_7        = document.querySelector("#quantity_child_triple_7");
        let count_baby_triple_7         = document.querySelector("#quantity_baby_triple_7");
        let count_triple_8              = document.querySelector("#quantity_triple_8");
        let count_child_triple_8        = document.querySelector("#quantity_child_triple_8");
        let count_baby_triple_8         = document.querySelector("#quantity_baby_triple_8");
        let count_triple_9              = document.querySelector("#quantity_triple_9");
        let count_child_triple_9        = document.querySelector("#quantity_child_triple_9");
        let count_baby_triple_9         = document.querySelector("#quantity_baby_triple_9");
        let harga_triple                = document.getElementById('price_total_jamaah_triple');

        function tambah_adult_triple() {
            let add_triple = ++valueCount_triple;
            console.log(add_triple);
            count_triple.value=add_triple;
            harga_triple.value = parseInt(harga_triple.value) + <?= $harga_adult ?>;
            console.log(harga_triple.value);
            let formattedAmount_triple = new Intl.NumberFormat('id-ID', { style: 'currency', currency: 'IDR' }).format(harga_triple.value);
            document.getElementById('moneyDisplay_triple').innerText = formattedAmount_triple;
        }

        function kurang_adult_triple() {
            if(valueCount_triple >= 2){
                let sub_triple =--valueCount_triple;
                console.log(sub_triple);
                count_triple.value=sub_triple;
                harga_triple.value = parseInt(harga_triple.value) - <?= $harga_adult ?>;
                let formattedAmount_triple = new Intl.NumberFormat('id-ID', { style: 'currency', currency: 'IDR' }).format(harga_triple.value);
                document.getElementById('moneyDisplay_triple').innerText = formattedAmount_triple;
            }
        }

        function tambah_child_triple() {
            let add_child_triple = ++valueCount_child_triple;
            count_child_triple.value=add_child_triple;
            harga_triple.value = parseInt(harga_triple.value) + <?= $harga_child ?>;
            let formattedAmount_triple = new Intl.NumberFormat('id-ID', { style: 'currency', currency: 'IDR' }).format(harga_triple.value);
            document.getElementById('moneyDisplay_triple').innerText = formattedAmount_triple;
        }

        function kurang_child_triple() {
            if(valueCount_child_triple >= 1){
                let sub_triple =--valueCount_child_triple;
                count_child_triple.value=sub_triple;
                harga_triple.value = parseInt(harga_triple.value) - <?= $harga_child ?>;
                let formattedAmount_triple = new Intl.NumberFormat('id-ID', { style: 'currency', currency: 'IDR' }).format(harga_triple.value);
                document.getElementById('moneyDisplay_triple').innerText = formattedAmount_triple;
            }
        }

        function tambah_baby_triple() {
            let add_baby_triple_1 = ++valueCount_baby_triple;
            count_baby_triple_1.value=add_baby_triple_1;
            harga_triple_1.value = parseInt(harga_triple_1.value) + <?= $harga_baby ?>;
            let formattedAmount_triple = new Intl.NumberFormat('id-ID', { style: 'currency', currency: 'IDR' }).format(harga_triple_1.value);
            document.getElementById('moneyDisplay_triple').innerText = formattedAmount_triple;
        }

        function kurang_baby_triple() {
            if(valueCount_baby_triple >= 1){
                let sub_triple =--valueCount_baby_triple;
                count_baby_triple.value=sub_triple;
                harga_triple_1.value = parseInt(harga_triple_1.value) - <?= $harga_baby ?>;
                let formattedAmount_triple = new Intl.NumberFormat('id-ID', { style: 'currency', currency: 'IDR' }).format(harga_triple_1.value);
                document.getElementById('moneyDisplay_triple').innerText = formattedAmount_triple;
            }
        }

        function tambah_adult_triple_1() {
            let add_triple_1 = ++valueCount_triple;
            console.log(add_triple_1);
            count_triple_1.value=add_triple_1;
            harga_triple.value = parseInt(harga_triple.value) + <?= $harga_adult ?>;
            let formattedAmount_triple = new Intl.NumberFormat('id-ID', { style: 'currency', currency: 'IDR' }).format(harga_triple.value);
            document.getElementById('moneyDisplay_triple').innerText = formattedAmount_triple;
        }

        function kurang_adult_triple_1() {
            if(valueCount_triple >= 2){
                let sub_triple_1 =--valueCount_triple;
                console.log(sub_triple_1);
                count_triple_1.value=sub_triple_1;
                harga_triple.value = parseInt(harga_triple.value) - <?= $harga_adult ?>;
                let formattedAmount_triple = new Intl.NumberFormat('id-ID', { style: 'currency', currency: 'IDR' }).format(harga_triple.value);
                document.getElementById('moneyDisplay_triple').innerText = formattedAmount_triple;
            }
        }

        function tambah_child_triple_1() {
            let add_child_triple_1 = ++valueCount_child_triple;
            count_child_triple_1.value=add_child_triple_1;
            harga_triple.value = parseInt(harga_triple.value) + <?= $harga_child ?>;
            let formattedAmount_triple = new Intl.NumberFormat('id-ID', { style: 'currency', currency: 'IDR' }).format(harga_triple.value);
            document.getElementById('moneyDisplay_triple').innerText = formattedAmount_triple;
        }

        function kurang_child_triple_1() {
            if(valueCount_child_triple >= 1){
                let sub_triple_1 =--valueCount_child_triple;
                count_child_triple_1.value=sub_triple_1;
                harga_triple.value = parseInt(harga_triple.value) - <?= $harga_child ?>;
                let formattedAmount_triple = new Intl.NumberFormat('id-ID', { style: 'currency', currency: 'IDR' }).format(harga_triple.value);
                document.getElementById('moneyDisplay_triple').innerText = formattedAmount_triple;
            }
        }

        function tambah_baby_triple_1() {
            let add_baby_triple_1 = ++valueCount_baby_triple;
            count_baby_triple.value=add_baby_triple_1;
            harga_triple.value = parseInt(harga_triple.value) + <?= $harga_baby ?>;
            let formattedAmount_triple = new Intl.NumberFormat('id-ID', { style: 'currency', currency: 'IDR' }).format(harga_triple.value);
            document.getElementById('moneyDisplay_triple').innerText = formattedAmount_triple;
        }

        function kurang_baby_triple_1() {
            if(valueCount_baby_triple >= 1){
                let sub_triple =--valueCount_baby_triple;
                count_baby_triple_1.value=sub_triple;
                harga_triple.value = parseInt(harga_triple.value) - <?= $harga_baby ?>;
                let formattedAmount_triple = new Intl.NumberFormat('id-ID', { style: 'currency', currency: 'IDR' }).format(harga_triple.value);
                document.getElementById('moneyDisplay_triple').innerText = formattedAmount_triple;
            }
        }
        //------------------------------------------------------------------------------

        //-------------------------harga double-----------------------------------
        let valueCount_double          = 1;
        let valueCount_child_double    = 0;
        let valueCount_baby_double     = 0;
        let count_double               = document.querySelector("#quantity_double");
        let count_child_double         = document.querySelector("#quantity_child_double");
        let count_baby_double          = document.querySelector("#quantity_baby_double");
        let harga_double               = document.getElementById('price_total_jamaah_double');

        function tambah_adult_double() {
            let add_double = ++valueCount_double;
            console.log(add_double);
            count_double.value=add_double;
            harga_double.value = parseInt(harga_double.value) + <?= $harga_adult ?>;
            let formattedAmount_double = new Intl.NumberFormat('id-ID', { style: 'currency', currency: 'IDR' }).format(harga_double.value);
            document.getElementById('moneyDisplay_double').innerText = formattedAmount_double;
        }

        function kurang_adult_double() {
            if(valueCount_double >= 2){
                let sub_double =--valueCount_double;
                console.log(sub_double);
                count_double.value=sub_double;
                harga_double.value = parseInt(harga_double.value) - <?= $harga_adult ?>;
                let formattedAmount_double = new Intl.NumberFormat('id-ID', { style: 'currency', currency: 'IDR' }).format(harga_double.value);
                document.getElementById('moneyDisplay_double').innerText = formattedAmount_double;
            }
        }

        function tambah_child_double() {
            let add_child_double = ++valueCount_child_double;
            count_child_double.value=add_child_double;
            harga_double.value = parseInt(harga_double.value) + <?= $harga_child ?>;
            let formattedAmount_double = new Intl.NumberFormat('id-ID', { style: 'currency', currency: 'IDR' }).format(harga_double.value);
            document.getElementById('moneyDisplay_double').innerText = formattedAmount_double;
        }

        function kurang_child_double() {
            if(valueCount_child_double >= 1){
                let sub_double =--valueCount_child_double;
                count_child_double.value=sub_double;
                harga_double.value = parseInt(harga_double.value) - <?= $harga_child ?>;
                let formattedAmount_double = new Intl.NumberFormat('id-ID', { style: 'currency', currency: 'IDR' }).format(harga_double.value);
                document.getElementById('moneyDisplay_double').innerText = formattedAmount_double;
            }
        }

        function tambah_baby_double() {
            let add_baby_double = ++valueCount_baby_double;
            count_baby_double.value=add_baby_double;
            harga_double.value = parseInt(harga_double.value) + <?= $harga_baby ?>;
            let formattedAmount_double = new Intl.NumberFormat('id-ID', { style: 'currency', currency: 'IDR' }).format(harga_double.value);
            document.getElementById('moneyDisplay_double').innerText = formattedAmount_double;
        }

        function kurang_baby_double() {
            if(valueCount_baby_double >= 1){
                let sub_double =--valueCount_baby_double;
                count_baby_double.value=sub_double;
                harga_double.value = parseInt(harga_double.value) - <?= $harga_baby ?>;
                let formattedAmount_double = new Intl.NumberFormat('id-ID', { style: 'currency', currency: 'IDR' }).format(harga_double.value);
                document.getElementById('moneyDisplay_double').innerText = formattedAmount_double;
            }
        }
        //------------------------------------------------------------------------------

        $(document).ready(function(){
            
            //quad------------------------------------------------------------------
            $("#plane_button").click(function(){
                let harga = document.getElementById('price_total_jamaah');
                harga.value = parseInt(<?= $harga_paket ?>);
                let formattedAmount = new Intl.NumberFormat('id-ID', { style: 'currency', currency: 'IDR' }).format(harga.value);
                document.getElementById('moneyDisplay').innerText = formattedAmount;
            });
            <?php if($v_packet->id_ticket_1 == null){ ?>

            <?php }else{ ?>
            $("#plane_button_2").click(function(){
                let harga_button2 = document.getElementById('price_total_jamaah');
                harga_button2.value = parseInt(<?= $harga_paket_2 ?>);
                let formattedAmount_2 = new Intl.NumberFormat('id-ID', { style: 'currency', currency: 'IDR' }).format(harga_button2.value);
                document.getElementById('moneyDisplay').innerText = formattedAmount_2;
            });
            <?php } ?>

            <?php if($v_packet->id_ticket_2 == null){ ?>

            <?php }else{ ?>
            $("#plane_button_3").click(function(){
                let harga = document.getElementById('price_total_jamaah');
                    harga.value = parseInt(<?= $harga_paket_3 ?>);
                    let formattedAmount = new Intl.NumberFormat('id-ID', { style: 'currency', currency: 'IDR' }).format(harga.value);
                    document.getElementById('moneyDisplay').innerText = formattedAmount;
                });
            <?php } ?>

            <?php if($v_packet->id_ticket_3 == null){ ?>

            <?php }else{ ?>
            $("#plane_button_4").click(function(){
                let harga = document.getElementById('price_total_jamaah');
                harga.value = parseInt(<?= $harga_paket_4 ?>);
                let formattedAmount = new Intl.NumberFormat('id-ID', { style: 'currency', currency: 'IDR' }).format(harga.value);
                document.getElementById('moneyDisplay').innerText = formattedAmount;
            });
            <?php } ?>

            <?php if($v_packet->id_ticket_4 == null){ ?>

            <?php }else{ ?>
            $("#plane_button_5").click(function(){
                let harga = document.getElementById('price_total_jamaah');
                harga.value = parseInt(<?= $harga_paket_5 ?>);
                let formattedAmount = new Intl.NumberFormat('id-ID', { style: 'currency', currency: 'IDR' }).format(harga.value);
                document.getElementById('moneyDisplay').innerText = formattedAmount;
            });
            <?php } ?>

            <?php if($v_packet->id_ticket_5 == null){ ?>

            <?php }else{ ?>
            $("#plane_button_6").click(function(){
                let harga = document.getElementById('price_total_jamaah');
                harga.value = parseInt(<?= $harga_paket_6 ?>);
                let formattedAmount = new Intl.NumberFormat('id-ID', { style: 'currency', currency: 'IDR' }).format(harga.value);
                document.getElementById('moneyDisplay').innerText = formattedAmount;
            });
            <?php } ?>

            <?php if($v_packet->id_ticket_6 == null){ ?>

            <?php }else{ ?>
            $("#plane_button_7").click(function(){
                let harga = document.getElementById('price_total_jamaah');
                harga.value = parseInt(<?= $harga_paket_7 ?>);
                let formattedAmount = new Intl.NumberFormat('id-ID', { style: 'currency', currency: 'IDR' }).format(harga.value);
                document.getElementById('moneyDisplay').innerText = formattedAmount;
            });
            <?php } ?>

            <?php if($v_packet->id_ticket_7 == null){ ?>

            <?php }else{ ?>
            $("#plane_button_8").click(function(){
                let harga = document.getElementById('price_total_jamaah');
                harga.value = parseInt(<?= $harga_paket_8 ?>);
                let formattedAmount = new Intl.NumberFormat('id-ID', { style: 'currency', currency: 'IDR' }).format(harga.value);
                document.getElementById('moneyDisplay').innerText = formattedAmount;
            });
            <?php } ?>

            <?php if($v_packet->id_ticket_8 == null){ ?>

            <?php }else{ ?>
            $("#plane_button_9").click(function(){
                let harga = document.getElementById('price_total_jamaah');
                harga.value = parseInt(<?= $harga_paket_9 ?>);
                let formattedAmount = new Intl.NumberFormat('id-ID', { style: 'currency', currency: 'IDR' }).format(harga.value);
                document.getElementById('moneyDisplay').innerText = formattedAmount;
            });
            <?php } ?>

            <?php if($v_packet->id_ticket_9 == null){ ?>

            <?php }else{ ?>
            $("#plane_button_10").click(function(){
                let harga = document.getElementById('price_total_jamaah');
                harga.value = parseInt(<?= $harga_paket_10 ?>);
                let formattedAmount = new Intl.NumberFormat('id-ID', { style: 'currency', currency: 'IDR' }).format(harga.value);
                document.getElementById('moneyDisplay').innerText = formattedAmount;
            });
            <?php } ?>
            //-----------------------------------------------------------------------

            //triple------------------------------------------------------------------
            $("#plane_button_triple").click(function(){
                let harga_triple = document.getElementById('price_total_jamaah_triple');
                harga_triple.value = parseInt(<?= $harga_paket ?>);
                let formattedAmount_triple = new Intl.NumberFormat('id-ID', { style: 'currency', currency: 'IDR' }).format(harga_triple.value);
                document.getElementById('moneyDisplay_triple').innerText = formattedAmount_triple;
            });
            <?php if($v_packet->id_ticket_1 == null){ ?>

            <?php }else{ ?>
            $("#plane_button_triple_2").click(function(){
                let harga_triple = document.getElementById('price_total_jamaah_triple');
                harga_triple.value = parseInt(<?= $harga_paket_2 ?>);
                let formattedAmount_triple = new Intl.NumberFormat('id-ID', { style: 'currency', currency: 'IDR' }).format(harga_triple.value);
                document.getElementById('moneyDisplay_triple').innerText = formattedAmount_triple;
            });
            <?php } ?>

            <?php if($v_packet->id_ticket_2 == null){ ?>

            <?php }else{ ?>
            $("#plane_button_triple_3").click(function(){
                let harga_triple = document.getElementById('price_total_jamaah_triple');
                    harga_triple.value = parseInt(<?= $harga_paket_3 ?>);
                    let formattedAmount_triple = new Intl.NumberFormat('id-ID', { style: 'currency', currency: 'IDR' }).format(harga_triple.value);
                    document.getElementById('moneyDisplay_triple').innerText = formattedAmount_triple;
                });
            <?php } ?>

            <?php if($v_packet->id_ticket_3 == null){ ?>

            <?php }else{ ?>
            $("#plane_button_triple_4").click(function(){
                let harga_triple = document.getElementById('price_total_jamaah_triple');
                harga_triple.value = parseInt(<?= $harga_paket_4 ?>);
                let formattedAmount_triple = new Intl.NumberFormat('id-ID', { style: 'currency', currency: 'IDR' }).format(harga_triple.value);
                document.getElementById('moneyDisplay_triple').innerText = formattedAmount_triple;
            });
            <?php } ?>

            <?php if($v_packet->id_ticket_4 == null){ ?>

            <?php }else{ ?>
            $("#plane_button_triple_5").click(function(){
                let harga_triple = document.getElementById('price_total_jamaah_triple');
                harga_triple.value = parseInt(<?= $harga_paket_5 ?>);
                let formattedAmount_triple = new Intl.NumberFormat('id-ID', { style: 'currency', currency: 'IDR' }).format(harga_triple.value);
                document.getElementById('moneyDisplay_triple').innerText = formattedAmount_triple;
            });
            <?php } ?>

            <?php if($v_packet->id_ticket_5 == null){ ?>

            <?php }else{ ?>
            $("#plane_button_triple_6").click(function(){
                let harga_triple = document.getElementById('price_total_jamaah_triple');
                harga_triple.value = parseInt(<?= $harga_paket_6 ?>);
                let formattedAmount_triple = new Intl.NumberFormat('id-ID', { style: 'currency', currency: 'IDR' }).format(harga_triple.value);
                document.getElementById('moneyDisplay_triple').innerText = formattedAmount_triple;
            });
            <?php } ?>

            <?php if($v_packet->id_ticket_6 == null){ ?>

            <?php }else{ ?>
            $("#plane_button_triple_7").click(function(){
                let harga_triple = document.getElementById('price_total_jamaah_triple');
                harga_triple.value = parseInt(<?= $harga_paket_7 ?>);
                let formattedAmount_triple = new Intl.NumberFormat('id-ID', { style: 'currency', currency: 'IDR' }).format(harga_triple.value);
                document.getElementById('moneyDisplay_triple').innerText = formattedAmount_triple;
            });
            <?php } ?>

            <?php if($v_packet->id_ticket_7 == null){ ?>

            <?php }else{ ?>
            $("#plane_button_triple_8").click(function(){
                let harga_triple = document.getElementById('price_total_jamaah_triple');
                harga_triple.value = parseInt(<?= $harga_paket_8 ?>);
                let formattedAmount_triple = new Intl.NumberFormat('id-ID', { style: 'currency', currency: 'IDR' }).format(harga_triple.value);
                document.getElementById('moneyDisplay_triple').innerText = formattedAmount_triple;
            });
            <?php } ?>

            <?php if($v_packet->id_ticket_8 == null){ ?>

            <?php }else{ ?>
            $("#plane_button_triple_9").click(function(){
                let harga_triple = document.getElementById('price_total_jamaah_triple');
                harga_triple.value = parseInt(<?= $harga_paket_9 ?>);
                let formattedAmount_triple = new Intl.NumberFormat('id-ID', { style: 'currency', currency: 'IDR' }).format(harga_triple.value);
                document.getElementById('moneyDisplay_triple').innerText = formattedAmount_triple;
            });
            <?php } ?>

            <?php if($v_packet->id_ticket_9 == null){ ?>

            <?php }else{ ?>
            $("#plane_button_triple_10").click(function(){
                let harga_triple = document.getElementById('price_total_jamaah_triple');
                harga_triple.value = parseInt(<?= $harga_triple_paket_10 ?>);
                let formattedAmount_triple = new Intl.NumberFormat('id-ID', { style: 'currency', currency: 'IDR' }).format(harga_triple.value);
                document.getElementById('moneyDisplay_triple').innerText = formattedAmount_triple;
            });
            <?php } ?>
            //-----------------------------------------------------------------------
            
            
        });

        //quad--------------------------------------------------------------------
        
        function plane_button_1(){
            document.getElementById('btn_total_jamaah_1').style.display = 'block';
            document.getElementById('btn_total_jamaah_2').style.display = 'none';
            document.getElementById('btn_total_jamaah_3').style.display = 'none';
            document.getElementById('btn_total_jamaah_4').style.display = 'none';
            document.getElementById('btn_total_jamaah_5').style.display = 'none';
            document.getElementById('btn_total_jamaah_6').style.display = 'none';
            document.getElementById('btn_total_jamaah_7').style.display = 'none';
            document.getElementById('btn_total_jamaah_8').style.display = 'none';
            document.getElementById('btn_total_jamaah_9').style.display = 'none';
            document.getElementById('btn_total_jamaah_10').style.display = 'none';
        }

        function plane_button_quad_2(){
            document.getElementById('btn_total_jamaah_1').style.display = 'none';
            document.getElementById('btn_total_jamaah_2').style.display = 'block';
            document.getElementById('btn_total_jamaah_3').style.display = 'none';
            document.getElementById('btn_total_jamaah_4').style.display = 'none';
            document.getElementById('btn_total_jamaah_5').style.display = 'none';
            document.getElementById('btn_total_jamaah_6').style.display = 'none';
            document.getElementById('btn_total_jamaah_7').style.display = 'none';
            document.getElementById('btn_total_jamaah_8').style.display = 'none';
            document.getElementById('btn_total_jamaah_9').style.display = 'none';
            document.getElementById('btn_total_jamaah_10').style.display = 'none';
        }

        function plane_button_quad_3(){
            document.getElementById('btn_total_jamaah_1').style.display = 'none';
            document.getElementById('btn_total_jamaah_2').style.display = 'none';
            document.getElementById('btn_total_jamaah_3').style.display = 'block';
            document.getElementById('btn_total_jamaah_4').style.display = 'none';
            document.getElementById('btn_total_jamaah_5').style.display = 'none';
            document.getElementById('btn_total_jamaah_6').style.display = 'none';
            document.getElementById('btn_total_jamaah_7').style.display = 'none';
            document.getElementById('btn_total_jamaah_8').style.display = 'none';
            document.getElementById('btn_total_jamaah_9').style.display = 'none';
            document.getElementById('btn_total_jamaah_10').style.display = 'none';
        }

        function plane_button_quad_4(){
            document.getElementById('btn_total_jamaah_1').style.display = 'none';
            document.getElementById('btn_total_jamaah_2').style.display = 'none';
            document.getElementById('btn_total_jamaah_3').style.display = 'none';
            document.getElementById('btn_total_jamaah_4').style.display = 'block';
            document.getElementById('btn_total_jamaah_5').style.display = 'none';
            document.getElementById('btn_total_jamaah_6').style.display = 'none';
            document.getElementById('btn_total_jamaah_7').style.display = 'none';
            document.getElementById('btn_total_jamaah_8').style.display = 'none';
            document.getElementById('btn_total_jamaah_9').style.display = 'none';
            document.getElementById('btn_total_jamaah_10').style.display = 'none';
        }

        function plane_button_quad_5(){
            document.getElementById('btn_total_jamaah_1').style.display = 'none';
            document.getElementById('btn_total_jamaah_2').style.display = 'none';
            document.getElementById('btn_total_jamaah_3').style.display = 'none';
            document.getElementById('btn_total_jamaah_4').style.display = 'none';
            document.getElementById('btn_total_jamaah_5').style.display = 'block';
            document.getElementById('btn_total_jamaah_6').style.display = 'none';
            document.getElementById('btn_total_jamaah_7').style.display = 'none';
            document.getElementById('btn_total_jamaah_8').style.display = 'none';
            document.getElementById('btn_total_jamaah_9').style.display = 'none';
            document.getElementById('btn_total_jamaah_10').style.display = 'none';
        }

        function plane_button_quad_6(){
            document.getElementById('btn_total_jamaah_1').style.display = 'none';
            document.getElementById('btn_total_jamaah_2').style.display = 'none';
            document.getElementById('btn_total_jamaah_3').style.display = 'none';
            document.getElementById('btn_total_jamaah_4').style.display = 'none';
            document.getElementById('btn_total_jamaah_5').style.display = 'none';
            document.getElementById('btn_total_jamaah_6').style.display = 'block';
            document.getElementById('btn_total_jamaah_7').style.display = 'none';
            document.getElementById('btn_total_jamaah_8').style.display = 'none';
            document.getElementById('btn_total_jamaah_9').style.display = 'none';
            document.getElementById('btn_total_jamaah_10').style.display = 'none';
        }

        function plane_button_quad_7(){
            document.getElementById('btn_total_jamaah_1').style.display = 'none';
            document.getElementById('btn_total_jamaah_2').style.display = 'none';
            document.getElementById('btn_total_jamaah_3').style.display = 'none';
            document.getElementById('btn_total_jamaah_4').style.display = 'none';
            document.getElementById('btn_total_jamaah_5').style.display = 'none';
            document.getElementById('btn_total_jamaah_6').style.display = 'none';
            document.getElementById('btn_total_jamaah_7').style.display = 'block';
            document.getElementById('btn_total_jamaah_8').style.display = 'none';
            document.getElementById('btn_total_jamaah_9').style.display = 'none';
            document.getElementById('btn_total_jamaah_10').style.display = 'none';
        }

        function plane_button_quad_8(){
            document.getElementById('btn_total_jamaah_1').style.display = 'none';
            document.getElementById('btn_total_jamaah_2').style.display = 'none';
            document.getElementById('btn_total_jamaah_3').style.display = 'none';
            document.getElementById('btn_total_jamaah_4').style.display = 'none';
            document.getElementById('btn_total_jamaah_5').style.display = 'none';
            document.getElementById('btn_total_jamaah_6').style.display = 'none';
            document.getElementById('btn_total_jamaah_7').style.display = 'none';
            document.getElementById('btn_total_jamaah_8').style.display = 'block';
            document.getElementById('btn_total_jamaah_9').style.display = 'none';
            document.getElementById('btn_total_jamaah_10').style.display = 'none';
        }

        function plane_button_quad_9(){
            document.getElementById('btn_total_jamaah_1').style.display = 'none';
            document.getElementById('btn_total_jamaah_2').style.display = 'none';
            document.getElementById('btn_total_jamaah_3').style.display = 'none';
            document.getElementById('btn_total_jamaah_4').style.display = 'none';
            document.getElementById('btn_total_jamaah_5').style.display = 'none';
            document.getElementById('btn_total_jamaah_6').style.display = 'none';
            document.getElementById('btn_total_jamaah_7').style.display = 'none';
            document.getElementById('btn_total_jamaah_8').style.display = 'none';
            document.getElementById('btn_total_jamaah_9').style.display = 'block';
            document.getElementById('btn_total_jamaah_10').style.display = 'none';
        }

        function plane_button_quad_10(){
            document.getElementById('btn_total_jamaah_1').style.display = 'none';
            document.getElementById('btn_total_jamaah_2').style.display = 'none';
            document.getElementById('btn_total_jamaah_3').style.display = 'none';
            document.getElementById('btn_total_jamaah_4').style.display = 'none';
            document.getElementById('btn_total_jamaah_5').style.display = 'none';
            document.getElementById('btn_total_jamaah_6').style.display = 'none';
            document.getElementById('btn_total_jamaah_7').style.display = 'none';
            document.getElementById('btn_total_jamaah_8').style.display = 'none';
            document.getElementById('btn_total_jamaah_9').style.display = 'none';
            document.getElementById('btn_total_jamaah_10').style.display = 'block';
        }

        //------------------------------------------------------------------------

        //triple--------------------------------------------------------------------
        
        function plane_button_data_triple_1(){
            document.getElementById('btn_total_jamaah_triple_1').style.display = 'block';
            document.getElementById('btn_total_jamaah_triple_2').style.display = 'none';
            document.getElementById('btn_total_jamaah_triple_3').style.display = 'none';
            document.getElementById('btn_total_jamaah_triple_4').style.display = 'none';
            document.getElementById('btn_total_jamaah_triple_5').style.display = 'none';
            document.getElementById('btn_total_jamaah_triple_6').style.display = 'none';
            document.getElementById('btn_total_jamaah_triple_7').style.display = 'none';
            document.getElementById('btn_total_jamaah_triple_8').style.display = 'none';
            document.getElementById('btn_total_jamaah_triple_9').style.display = 'none';
            document.getElementById('btn_total_jamaah_triple_10').style.display = 'none';
        }

        function plane_button_data_triple_2(){
            document.getElementById('btn_total_jamaah_triple_1').style.display = 'none';
            document.getElementById('btn_total_jamaah_triple_2').style.display = 'block';
            document.getElementById('btn_total_jamaah_triple_3').style.display = 'none';
            document.getElementById('btn_total_jamaah_triple_4').style.display = 'none';
            document.getElementById('btn_total_jamaah_triple_5').style.display = 'none';
            document.getElementById('btn_total_jamaah_triple_6').style.display = 'none';
            document.getElementById('btn_total_jamaah_triple_7').style.display = 'none';
            document.getElementById('btn_total_jamaah_triple_8').style.display = 'none';
            document.getElementById('btn_total_jamaah_triple_9').style.display = 'none';
            document.getElementById('btn_total_jamaah_triple_10').style.display = 'none';
        }

        function plane_button_data_triple_3(){
            document.getElementById('btn_total_jamaah_triple_1').style.display = 'none';
            document.getElementById('btn_total_jamaah_triple_2').style.display = 'none';
            document.getElementById('btn_total_jamaah_triple_3').style.display = 'block';
            document.getElementById('btn_total_jamaah_triple_4').style.display = 'none';
            document.getElementById('btn_total_jamaah_triple_5').style.display = 'none';
            document.getElementById('btn_total_jamaah_triple_6').style.display = 'none';
            document.getElementById('btn_total_jamaah_triple_7').style.display = 'none';
            document.getElementById('btn_total_jamaah_triple_8').style.display = 'none';
            document.getElementById('btn_total_jamaah_triple_9').style.display = 'none';
            document.getElementById('btn_total_jamaah_triple_10').style.display = 'none';
        }

        function plane_button_data_triple_4(){
            document.getElementById('btn_total_jamaah_triple_1').style.display = 'none';
            document.getElementById('btn_total_jamaah_triple_2').style.display = 'none';
            document.getElementById('btn_total_jamaah_triple_3').style.display = 'none';
            document.getElementById('btn_total_jamaah_triple_4').style.display = 'block';
            document.getElementById('btn_total_jamaah_triple_5').style.display = 'none';
            document.getElementById('btn_total_jamaah_triple_6').style.display = 'none';
            document.getElementById('btn_total_jamaah_triple_7').style.display = 'none';
            document.getElementById('btn_total_jamaah_triple_8').style.display = 'none';
            document.getElementById('btn_total_jamaah_triple_9').style.display = 'none';
            document.getElementById('btn_total_jamaah_triple_10').style.display = 'none';
        }

        function plane_button_data_triple_5(){
            document.getElementById('btn_total_jamaah_triple_1').style.display = 'none';
            document.getElementById('btn_total_jamaah_triple_2').style.display = 'none';
            document.getElementById('btn_total_jamaah_triple_3').style.display = 'none';
            document.getElementById('btn_total_jamaah_triple_4').style.display = 'none';
            document.getElementById('btn_total_jamaah_triple_5').style.display = 'block';
            document.getElementById('btn_total_jamaah_triple_6').style.display = 'none';
            document.getElementById('btn_total_jamaah_triple_7').style.display = 'none';
            document.getElementById('btn_total_jamaah_triple_8').style.display = 'none';
            document.getElementById('btn_total_jamaah_triple_9').style.display = 'none';
            document.getElementById('btn_total_jamaah_triple_10').style.display = 'none';
        }

        function plane_button_data_triple_6(){
            document.getElementById('btn_total_jamaah_triple_1').style.display = 'none';
            document.getElementById('btn_total_jamaah_triple_2').style.display = 'none';
            document.getElementById('btn_total_jamaah_triple_3').style.display = 'none';
            document.getElementById('btn_total_jamaah_triple_4').style.display = 'none';
            document.getElementById('btn_total_jamaah_triple_5').style.display = 'none';
            document.getElementById('btn_total_jamaah_triple_6').style.display = 'block';
            document.getElementById('btn_total_jamaah_triple_7').style.display = 'none';
            document.getElementById('btn_total_jamaah_triple_8').style.display = 'none';
            document.getElementById('btn_total_jamaah_triple_9').style.display = 'none';
            document.getElementById('btn_total_jamaah_triple_10').style.display = 'none';
        }

        function plane_button_data_triple_7(){
            document.getElementById('btn_total_jamaah_triple_1').style.display = 'none';
            document.getElementById('btn_total_jamaah_triple_2').style.display = 'none';
            document.getElementById('btn_total_jamaah_triple_3').style.display = 'none';
            document.getElementById('btn_total_jamaah_triple_4').style.display = 'none';
            document.getElementById('btn_total_jamaah_triple_5').style.display = 'none';
            document.getElementById('btn_total_jamaah_triple_6').style.display = 'none';
            document.getElementById('btn_total_jamaah_triple_7').style.display = 'block';
            document.getElementById('btn_total_jamaah_triple_8').style.display = 'none';
            document.getElementById('btn_total_jamaah_triple_9').style.display = 'none';
            document.getElementById('btn_total_jamaah_triple_10').style.display = 'none';
        }

        function plane_button_data_triple_8(){
            document.getElementById('btn_total_jamaah_triple_1').style.display = 'none';
            document.getElementById('btn_total_jamaah_triple_2').style.display = 'none';
            document.getElementById('btn_total_jamaah_triple_3').style.display = 'none';
            document.getElementById('btn_total_jamaah_triple_4').style.display = 'none';
            document.getElementById('btn_total_jamaah_triple_5').style.display = 'none';
            document.getElementById('btn_total_jamaah_triple_6').style.display = 'none';
            document.getElementById('btn_total_jamaah_triple_7').style.display = 'none';
            document.getElementById('btn_total_jamaah_triple_8').style.display = 'block';
            document.getElementById('btn_total_jamaah_triple_9').style.display = 'none';
            document.getElementById('btn_total_jamaah_triple_10').style.display = 'none';
        }

        function plane_button_data_triple_9(){
            document.getElementById('btn_total_jamaah_triple_1').style.display = 'none';
            document.getElementById('btn_total_jamaah_triple_2').style.display = 'none';
            document.getElementById('btn_total_jamaah_triple_3').style.display = 'none';
            document.getElementById('btn_total_jamaah_triple_4').style.display = 'none';
            document.getElementById('btn_total_jamaah_triple_5').style.display = 'none';
            document.getElementById('btn_total_jamaah_triple_6').style.display = 'none';
            document.getElementById('btn_total_jamaah_triple_7').style.display = 'none';
            document.getElementById('btn_total_jamaah_triple_8').style.display = 'none';
            document.getElementById('btn_total_jamaah_triple_9').style.display = 'block';
            document.getElementById('btn_total_jamaah_triple_10').style.display = 'none';
        }

        function plane_button_data_triple_10(){
            document.getElementById('btn_total_jamaah_triple_1').style.display = 'none';
            document.getElementById('btn_total_jamaah_triple_2').style.display = 'none';
            document.getElementById('btn_total_jamaah_triple_3').style.display = 'none';
            document.getElementById('btn_total_jamaah_triple_4').style.display = 'none';
            document.getElementById('btn_total_jamaah_triple_5').style.display = 'none';
            document.getElementById('btn_total_jamaah_triple_6').style.display = 'none';
            document.getElementById('btn_total_jamaah_triple_7').style.display = 'none';
            document.getElementById('btn_total_jamaah_triple_8').style.display = 'none';
            document.getElementById('btn_total_jamaah_triple_9').style.display = 'none';
            document.getElementById('btn_total_jamaah_triple_10').style.display = 'block';
        }

        //------------------------------------------------------------------------

    </script>
</body>
</html>