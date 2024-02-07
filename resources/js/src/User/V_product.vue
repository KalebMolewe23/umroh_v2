<template>
    <section class="home containers" v-for="v_packet in packet">
        <div class="card-container">
            <div class="card1">
                <h3>{{ v_packet.name_packet }}</h3><br><hr><br>
                <img :src="'/assets/image_travel/'+v_packet.image_packet" class="img_data_paket"><br><br><hr><br>
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
                        <p>{{ v_packet.departure_date }}</p>
                    </div>
                    <div class="col_product">
                        <p>&nbsp;&nbsp;&nbsp;&nbsp;{{ v_packet.departure_city }}</p>
                    </div>
                    <div class="col_product">
                        <p>9 Hari</p>
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
                        <p>{{ v_packet.maskapai_name }}</p>
                    </div>
                    <div class="col_product">
                        <p>&nbsp;&nbsp;&nbsp;&nbsp;<i class='bx bxs-star' style="color:orange;"></i> {{ v_packet.star }}</p>
                    </div>
                    <div class="col_product">
                        <p></p>
                    </div>
                </div>
            </div>
            <div id="informasi_paket">
                <div class="card2">
                    <h3 style="color:orange">Rp 30.000.000</h3>
                    <br>
                    <p>Quad - Sekamar Ber-4: Rp 30jt</p>
                    <p>Triple - Sekamar Ber-3: Rp 31.5jt</p>
                    <p>Double - Sekamar Ber-2: Rp 33.5jt</p><br>
                    <div class="processing">
                        <div class="processing-bar" data-bar="75">
                            Processing 85%
                        </div>
                    </div><br>
                    <p style="color: green;">Amankan seat dengan uang muka 5jt /Jamaah. Transaksi aman, ibadah nyaman. Pembayaran hanya diproses apabila tiket pesawat telah confirm.</p>
                    <br><hr><br>
                    <button class="button" onclick="pesan_paket()" style="background-color: orange;"><i class='bx bx-user' ></i> Pesan Paket</button><br><br>
                    <button style="background-color: orange;"><i class='bx bxs-user-account'></i> Pesan Group</button><br><br>
                    <button><i class='bx bxs-share' ></i> Bagikan</button>
                </div>    
            </div>
            <div class="data_pesan_paket" id="data_pesan_paket">
                <div class="card_pesan_paket">
                        <h4 id="harga">{{ nilaiAwal = v_packet.price_money }}</h4>
                        <br>
                        <p>Quad - Sekamar Ber-4: Rp {{ v_packet.quad }}</p>
                        <p>Triple - Sekamar Ber-3: Rp {{ v_packet.triple }}</p>
                        <p>Double - Sekamar Ber-2: Rp {{ v_packet.double }}</p><br>
                        <div class="processing">
                            <div class="processing-bar" data-bar="75">
                                Processing 85%
                            </div>
                        </div><br><hr>
                        <p>Jumlah Jamaah Dewasa<button @click="kurang" class="button_pengguna">-</button><button @click="tambah" class="button_pengguna">+</button></p>
                        <p>Jumlah Anak ( 2 - 5 Tahun)<button @click="kurang" class="button_pengguna">-</button><button @click="tambah" class="button_pengguna">+</button></p>
                        <p>Jumlah Bayi ( diatas 2 Tahun)<button @click="kurang" class="button_pengguna">-</button><button @click="tambah" class="button_pengguna">+</button></p>
                </div>
            </div>
        </div>
        <div class="card-container">
            <div class="card3">
                <h3>Travel Umroh</h3><br><hr><br>
                <div class="row_data_travel">
                    <div class="col_data_travel">
                        <img :src="'/assets/image_travel/'+v_packet.image_travel" class="logo_data_paket">
                    </div>
                    <div class="col_data_travel">
                        <h4>{{ v_packet.employee_name }}</h4>
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
            <div class="card1">
                <h3>Fasilitas</h3><br><hr><br>
                <div class="row_product1">
                    <div class="col_product1">
                        <h4>Termasuk</h4>
                        <p>
                            {{ v_packet.in_facilitas }}
                        </p>
                        <p>
                            {{ v_packet.in_facilitas_1 }}
                        </p>
                        <p>
                            {{ v_packet.in_facilitas_2 }}
                        </p>
                        <p>
                            {{ v_packet.in_facilitas_3 }}
                        </p>
                        <p>
                            {{ v_packet.in_facilitas_4 }}
                        </p>
                        <p>
                            {{ v_packet.in_facilitas_5 }}
                        </p>
                        <p>
                            {{ v_packet.in_facilitas_6 }}
                        </p>
                        <p>
                            {{ v_packet.in_facilitas_7 }}
                        </p>
                        <p>
                            {{ v_packet.in_facilitas_8 }}
                        </p>
                        <p>
                            {{ v_packet.in_facilitas_9 }}
                        </p>
                        <p>
                            {{ v_packet.in_facilitas_10 }}
                        </p>
                        <p>
                            {{ v_packet.in_facilitas_11 }}
                        </p>
                        <p>
                            {{ v_packet.in_facilitas_12 }}
                        </p>
                        <p>
                            {{ v_packet.in_facilitas_13 }}
                        </p>
                        <p>
                            {{ v_packet.in_facilitas_14 }}
                        </p>
                        <p>
                            {{ v_packet.in_facilitas_15 }}
                        </p>
                        <p>
                            {{ v_packet.in_facilitas_16 }}
                        </p>
                        <p>
                            {{ v_packet.in_facilitas_17 }}
                        </p>
                        <p>
                            {{ v_packet.in_facilitas_18 }}
                        </p>
                        <p>
                            {{ v_packet.in_facilitas_19 }}
                        </p>
                    </div>
                    <div class="col_product1">
                        <h4>Tidak Termasuk</h4>
                        <p>
                            {{ v_packet.out_facilitas }}
                        </p>
                        <p>
                            {{ v_packet.out_facilitas_1 }}
                        </p>
                        <p>
                            {{ v_packet.out_facilitas_2 }}
                        </p>
                        <p>
                            {{ v_packet.out_facilitas_3 }}
                        </p>
                        <p>
                            {{ v_packet.out_facilitas_4 }}
                        </p>
                        <p>
                            {{ v_packet.out_facilitas_5 }}
                        </p>
                        <p>
                            {{ v_packet.out_facilitas_6 }}
                        </p>
                        <p>
                            {{ v_packet.out_facilitas_7 }}
                        </p>
                        <p>
                            {{ v_packet.out_facilitas_8 }}
                        </p>
                        <p>
                            {{ v_packet.out_facilitas_9 }}
                        </p>
                        <p>
                            {{ v_packet.out_facilitas_10 }}
                        </p>
                        <p>
                            {{ v_packet.out_facilitas_11 }}
                        </p>
                        <p>
                            {{ v_packet.out_facilitas_12 }}
                        </p>
                        <p>
                            {{ v_packet.out_facilitas_13 }}
                        </p>
                        <p>
                            {{ v_packet.out_facilitas_14 }}
                        </p>
                        <p>
                            {{ v_packet.out_facilitas_15 }}
                        </p>
                        <p>
                            {{ v_packet.out_facilitas_16 }}
                        </p>
                        <p>
                            {{ v_packet.out_facilitas_17 }}
                        </p>
                        <p>
                            {{ v_packet.out_facilitas_18 }}
                        </p>
                        <p>
                            {{ v_packet.out_facilitas_19 }}
                        </p>
                    </div>
                </div>
            </div>
            <div class="card4">
                
            </div>
        </div><br>

        <h4>Paket Umroh Lainnya</h4><br>
            <div class="row_paket1">
                <div class="column_paket1">
                    <a href="/product" style="color: black">
                        <div class="card_paket">
                            <div class="row_isi_paket"><br>
                                <div class="column_isi_paket">
                                    <img src="https://cloud.umroh.com/images/upload/c_contain,f_auto,g_face,b_rgb:000000,dpr_2.0,h_391,w_627,q_80,fl_progressive/jamaah%20hamsa.jpeg" width="90px">
                                </div>
                                <div class="column_isi_paket">
                                    <h4>Paket Kareem</h4>
                                </div>
                                <div class="column_isi_paket">
                                    <h4>Free 1 Bronze</h4>
                                </div>
                            </div><br><br>
                            <div class="row_isi_paket"><br>
                                <div class="column_isi_paket">
                                    <h4>Free 1 Bronze</h4>
                                </div>
                                <div class="column_isi_paket">
                                    <h5>Rp 30.000.000</h5>
                                </div>
                            </div><br>
                            <p>Quad, Sekamar ber-4</p>
                            <div class="processing">
                                <div class="processing-bar" data-bar="75">
                                    Processing 85%
                                </div>
                            </div><br>
                            <hr><br>
                            <div class="row_isi_paket">
                                <div class="column_isi_paket">
                                    <h4><i class='bx bxs-calendar' ></i> 08 Nov 2023</h4>
                                </div>
                                <div class="column_isi_paket">
                                    <h4><i class='bx bxs-hotel' ></i><i class='bx bxs-star' ></i> 4</h4>
                                </div>
                            </div>
                            <div class="row_isi_paket">
                                <div class="column_isi_paket">
                                    <h4><i class='bx bxs-plane-alt' ></i> Emirates</h4>
                                </div>
                                <div class="column_isi_paket">
                                    <h4><i class='bx bxs-time'></i> 9 Hari</h4>
                                </div>
                            </div>
                            <div class="row_isi_paket">
                                <div class="column_isi_paket">
                                    <h4><i class='bx bxs-map' ></i> Jakarta</h4>
                                </div>
                                <!-- <div class="column_isi_paket">
                                    <h4><i class='bx bxs-hotel' ></i><i class='bx bxs-star' ></i> 4</h4>
                                </div> -->
                            </div>
                        </div>
                    </a>
                </div>
                <div class="column_paket1">
                    <a href="/product" style="color: black">
                        <div class="card_paket">
                            <div class="row_isi_paket"><br>
                                <div class="column_isi_paket">
                                    <img src="https://cloud.umroh.com/images/upload/c_contain,f_auto,g_face,b_rgb:000000,dpr_2.0,h_391,w_627,q_80,fl_progressive/jamaah%20hamsa.jpeg" width="90px">
                                </div>
                                <div class="column_isi_paket">
                                    <h4>Paket Kareem</h4>
                                </div>
                                <div class="column_isi_paket">
                                    <h4>Free 1 Bronze</h4>
                                </div>
                            </div><br><br>
                            <div class="row_isi_paket"><br>
                                <div class="column_isi_paket">
                                    <h4>Free 1 Bronze</h4>
                                </div>
                                <div class="column_isi_paket">
                                    <h5>Rp 30.000.000</h5>
                                </div>
                            </div><br>
                            <p>Quad, Sekamar ber-4</p>
                            <div class="processing">
                                <div class="processing-bar" data-bar="75">
                                    Processing 85%
                                </div>
                            </div><br>
                            <hr><br>
                            <div class="row_isi_paket">
                                <div class="column_isi_paket">
                                    <h4><i class='bx bxs-calendar' ></i> 08 Nov 2023</h4>
                                </div>
                                <div class="column_isi_paket">
                                    <h4><i class='bx bxs-hotel' ></i><i class='bx bxs-star' ></i> 4</h4>
                                </div>
                            </div>
                            <div class="row_isi_paket">
                                <div class="column_isi_paket">
                                    <h4><i class='bx bxs-plane-alt' ></i> Emirates</h4>
                                </div>
                                <div class="column_isi_paket">
                                    <h4><i class='bx bxs-time'></i> 9 Hari</h4>
                                </div>
                            </div>
                            <div class="row_isi_paket">
                                <div class="column_isi_paket">
                                    <h4><i class='bx bxs-map' ></i> Jakarta</h4>
                                </div>
                                <!-- <div class="column_isi_paket">
                                    <h4><i class='bx bxs-hotel' ></i><i class='bx bxs-star' ></i> 4</h4>
                                </div> -->
                            </div>
                        </div>
                    </a>
                </div>
                <div class="column_paket1">
                    <a href="/product" style="color: black">
                        <div class="card_paket">
                            <div class="row_isi_paket"><br>
                                <div class="column_isi_paket">
                                    <img src="https://cloud.umroh.com/images/upload/c_contain,f_auto,g_face,b_rgb:000000,dpr_2.0,h_391,w_627,q_80,fl_progressive/jamaah%20hamsa.jpeg" width="90px">
                                </div>
                                <div class="column_isi_paket">
                                    <h4>Paket Kareem</h4>
                                </div>
                                <div class="column_isi_paket">
                                    <h4>Free 1 Bronze</h4>
                                </div>
                            </div><br><br>
                            <div class="row_isi_paket"><br>
                                <div class="column_isi_paket">
                                    <h4>Free 1 Bronze</h4>
                                </div>
                                <div class="column_isi_paket">
                                    <h5>Rp 30.000.000</h5>
                                </div>
                            </div><br>
                            <p>Quad, Sekamar ber-4</p>
                            <div class="processing">
                                <div class="processing-bar" data-bar="75">
                                    Processing 85%
                                </div>
                            </div><br>
                            <hr><br>
                            <div class="row_isi_paket">
                                <div class="column_isi_paket">
                                    <h4><i class='bx bxs-calendar' ></i> 08 Nov 2023</h4>
                                </div>
                                <div class="column_isi_paket">
                                    <h4><i class='bx bxs-hotel' ></i><i class='bx bxs-star' ></i> 4</h4>
                                </div>
                            </div>
                            <div class="row_isi_paket">
                                <div class="column_isi_paket">
                                    <h4><i class='bx bxs-plane-alt' ></i> Emirates</h4>
                                </div>
                                <div class="column_isi_paket">
                                    <h4><i class='bx bxs-time'></i> 9 Hari</h4>
                                </div>
                            </div>
                            <div class="row_isi_paket">
                                <div class="column_isi_paket">
                                    <h4><i class='bx bxs-map' ></i> Jakarta</h4>
                                </div>
                                <!-- <div class="column_isi_paket">
                                    <h4><i class='bx bxs-hotel' ></i><i class='bx bxs-star' ></i> 4</h4>
                                </div> -->
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            <div class="row_paket1">
                <div class="column_paket1">
                    <a href="/product" style="color: black">
                        <div class="card_paket">
                            <div class="row_isi_paket"><br>
                                <div class="column_isi_paket">
                                    <img src="https://cloud.umroh.com/images/upload/c_contain,f_auto,g_face,b_rgb:000000,dpr_2.0,h_391,w_627,q_80,fl_progressive/jamaah%20hamsa.jpeg" width="90px">
                                </div>
                                <div class="column_isi_paket">
                                    <h4>Paket Kareem</h4>
                                </div>
                                <div class="column_isi_paket">
                                    <h4>Free 1 Bronze</h4>
                                </div>
                            </div><br><br>
                            <div class="row_isi_paket"><br>
                                <div class="column_isi_paket">
                                    <h4>Free 1 Bronze</h4>
                                </div>
                                <div class="column_isi_paket">
                                    <h5>Rp 30.000.000</h5>
                                </div>
                            </div><br>
                            <p>Quad, Sekamar ber-4</p>
                            <div class="processing">
                                <div class="processing-bar" data-bar="75">
                                    Processing 85%
                                </div>
                            </div><br>
                            <hr><br>
                            <div class="row_isi_paket">
                                <div class="column_isi_paket">
                                    <h4><i class='bx bxs-calendar' ></i> 08 Nov 2023</h4>
                                </div>
                                <div class="column_isi_paket">
                                    <h4><i class='bx bxs-hotel' ></i><i class='bx bxs-star' ></i> 4</h4>
                                </div>
                            </div>
                            <div class="row_isi_paket">
                                <div class="column_isi_paket">
                                    <h4><i class='bx bxs-plane-alt' ></i> Emirates</h4>
                                </div>
                                <div class="column_isi_paket">
                                    <h4><i class='bx bxs-time'></i> 9 Hari</h4>
                                </div>
                            </div>
                            <div class="row_isi_paket">
                                <div class="column_isi_paket">
                                    <h4><i class='bx bxs-map' ></i> Jakarta</h4>
                                </div>
                                <!-- <div class="column_isi_paket">
                                    <h4><i class='bx bxs-hotel' ></i><i class='bx bxs-star' ></i> 4</h4>
                                </div> -->
                            </div>
                        </div>
                    </a>
                </div>
                <div class="column_paket1">
                    <a href="/product" style="color: black">
                        <div class="card_paket">
                            <div class="row_isi_paket"><br>
                                <div class="column_isi_paket">
                                    <img src="https://cloud.umroh.com/images/upload/c_contain,f_auto,g_face,b_rgb:000000,dpr_2.0,h_391,w_627,q_80,fl_progressive/jamaah%20hamsa.jpeg" width="90px">
                                </div>
                                <div class="column_isi_paket">
                                    <h4>Paket Kareem</h4>
                                </div>
                                <div class="column_isi_paket">
                                    <h4>Free 1 Bronze</h4>
                                </div>
                            </div><br><br>
                            <div class="row_isi_paket"><br>
                                <div class="column_isi_paket">
                                    <h4>Free 1 Bronze</h4>
                                </div>
                                <div class="column_isi_paket">
                                    <h5>Rp 30.000.000</h5>
                                </div>
                            </div><br>
                            <p>Quad, Sekamar ber-4</p>
                            <div class="processing">
                                <div class="processing-bar" data-bar="75">
                                    Processing 85%
                                </div>
                            </div><br>
                            <hr><br>
                            <div class="row_isi_paket">
                                <div class="column_isi_paket">
                                    <h4><i class='bx bxs-calendar' ></i> 08 Nov 2023</h4>
                                </div>
                                <div class="column_isi_paket">
                                    <h4><i class='bx bxs-hotel' ></i><i class='bx bxs-star' ></i> 4</h4>
                                </div>
                            </div>
                            <div class="row_isi_paket">
                                <div class="column_isi_paket">
                                    <h4><i class='bx bxs-plane-alt' ></i> Emirates</h4>
                                </div>
                                <div class="column_isi_paket">
                                    <h4><i class='bx bxs-time'></i> 9 Hari</h4>
                                </div>
                            </div>
                            <div class="row_isi_paket">
                                <div class="column_isi_paket">
                                    <h4><i class='bx bxs-map' ></i> Jakarta</h4>
                                </div>
                                <!-- <div class="column_isi_paket">
                                    <h4><i class='bx bxs-hotel' ></i><i class='bx bxs-star' ></i> 4</h4>
                                </div> -->
                            </div>
                        </div>
                    </a>
                </div>
                <div class="column_paket1">
                    <a href="/product" style="color: black">
                        <div class="card_paket">
                            <div class="row_isi_paket"><br>
                                <div class="column_isi_paket">
                                    <img src="https://cloud.umroh.com/images/upload/c_contain,f_auto,g_face,b_rgb:000000,dpr_2.0,h_391,w_627,q_80,fl_progressive/jamaah%20hamsa.jpeg" width="90px">
                                </div>
                                <div class="column_isi_paket">
                                    <h4>Paket Kareem</h4>
                                </div>
                                <div class="column_isi_paket">
                                    <h4>Free 1 Bronze</h4>
                                </div>
                            </div><br><br>
                            <div class="row_isi_paket"><br>
                                <div class="column_isi_paket">
                                    <h4>Free 1 Bronze</h4>
                                </div>
                                <div class="column_isi_paket">
                                    <h5>Rp 30.000.000</h5>
                                </div>
                            </div><br>
                            <p>Quad, Sekamar ber-4</p>
                            <div class="processing">
                                <div class="processing-bar" data-bar="75">
                                    Processing 85%
                                </div>
                            </div><br>
                            <hr><br>
                            <div class="row_isi_paket">
                                <div class="column_isi_paket">
                                    <h4><i class='bx bxs-calendar' ></i> 08 Nov 2023</h4>
                                </div>
                                <div class="column_isi_paket">
                                    <h4><i class='bx bxs-hotel' ></i><i class='bx bxs-star' ></i> 4</h4>
                                </div>
                            </div>
                            <div class="row_isi_paket">
                                <div class="column_isi_paket">
                                    <h4><i class='bx bxs-plane-alt' ></i> Emirates</h4>
                                </div>
                                <div class="column_isi_paket">
                                    <h4><i class='bx bxs-time'></i> 9 Hari</h4>
                                </div>
                            </div>
                            <div class="row_isi_paket">
                                <div class="column_isi_paket">
                                    <h4><i class='bx bxs-map' ></i> Jakarta</h4>
                                </div>
                                <!-- <div class="column_isi_paket">
                                    <h4><i class='bx bxs-hotel' ></i><i class='bx bxs-star' ></i> 4</h4>
                                </div> -->
                            </div>
                        </div>
                    </a>
                </div>
            </div><br>

            <button type="button" class="info_lanjut">Tampilkan Lebih Banyak</button><br><br>
    </section>
</template>

<script>
    export default {
        props:{
            packet: Array
        },
        data() {
            return {
                nilaiAwal: nilaiAwal
            }
        },
        methods: {
            tambah() {
            this.nilaiAwal  += 5; // Melakukan penambahan
            },
            kurang() {
            this.nilaiAwal  -= 3; // Melakukan pengurangan
            }
        },
        computed: {
            tambahNilai() {
                return this.nilaiAwal  + 5; // Hasil penambahan dihitung di computed property
            },
            kurangNilai() {
                return this.nilaiAwal  - 3; // Hasil pengurangan dihitung di computed property
            }
        }
    }
    
</script>

<style scoped>
    
</style>
