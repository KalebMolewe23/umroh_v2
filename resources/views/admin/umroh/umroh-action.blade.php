<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal{{ $id }}">
    <i class='bx bxs-info-circle' ></i> Information
</button>

<div class="modal fade" id="exampleModal{{ $id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Informasi Paket</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <h4><i class="bx bxs-info-circle"></i>Data Packet</h4>
                <?php $packet = DB::table('packets')->join('packet_categories', 'packet_categories.id', '=', 'packets.id_category_packet')->join('ticket_groups', 'ticket_groups.id', '=', 'packets.id_ticket')->where('packets.id', $id)->first(); ?>
                Nama Paket : <?= $packet->name_packet ?><br>
                Kategori : <?= $packet->categorie_name ?><br>
                Kode Maskapai : <?= $packet->maskapai_code ?><br>
                Nama Maskapai : <?= $packet->maskapai_name ?><br>
                Kota Keberangkatan : <?= $packet->departure_city ?><br>
                Tanggal Keberangkatan : <?= DATE($packet->departure_date) ?><br>
                Total Seat : <?= $packet->seat_capasitas ?><br>
                Total DP : Rp. <?= number_format($packet->dp) ?><br>
                <br><br>
                <div class="row">
                    <div class="col">
                        <h4><i class="bx bxs-buildings"></i>Hotel</h4>
                        <?php $hotel_mekkah = DB::table('hotels')->join('list_hotels', 'list_hotels.id', '=', 'hotels.id_hotel_mekah')->where('id_packet', $id)->get(); ?>
                        <?php foreach($hotel_mekkah as $v_mekkah){ ?>
                            <h5>Hotel Mekkah</h5>
                            Nama Hotel : <?= $v_mekkah->name_hotel ?><br>
                            Alamat Hotel : <?= $v_mekkah->address ?><br>
                            <br> 
                        <?php } ?>
                        <?php $hotel_madinah = DB::table('hotels')->join('list_hotels', 'list_hotels.id', '=', 'hotels.id_hotel_madinah')->where('id_packet', $id)->get(); ?>
                        <?php foreach($hotel_madinah as $v_madinah){ ?>
                            <h5>Hotel madinah</h5>
                            Nama Hotel : <?= $v_madinah->name_hotel ?><br>
                            Alamat Hotel : <?= $v_madinah->address ?><br>
                        <br> 
                        <?php } ?>
                        <?php foreach($hotel_mekkah as $v_mekkah){ ?>
                            <?php if($v_mekkah->type_hotel_1 != null && $v_mekkah->type_hotel_2 == null && $v_mekkah->type_hotel_3 == null){ ?>
                                Type Hotel : <i style="color:orange" class='bx bxs-star'></i><?= $v_mekkah->type_hotel_1 ?><br>
                                Harga Quad : Rp. <?= number_format($v_mekkah->quad_1) ?><br>
                                Harga Triple : Rp. <?= number_format($v_mekkah->triple_1) ?><br>
                                Harga Double : Rp. <?= number_format($v_mekkah->double_1) ?><br>
                            <?php }else if($v_mekkah->type_hotel_1 != null && $v_mekkah->type_hotel_2 != null && $v_mekkah->type_hotel_3 == null){ ?>
                                Type Hotel : <i style="color:orange" class='bx bxs-star'></i><?= $v_mekkah->type_hotel_1 ?><br>
                                Harga Quad : Rp. <?= number_format($v_mekkah->quad_1) ?><br>
                                Harga Triple : Rp. <?= number_format($v_mekkah->triple_1) ?><br>
                                Harga Double : Rp. <?= number_format($v_mekkah->double_1) ?><br><br>

                                Type Hotel : <i style="color:orange" class='bx bxs-star'></i><?= $v_mekkah->type_hotel_2 ?><br>
                                Harga Quad : Rp. <?= number_format($v_mekkah->quad_2) ?><br>
                                Harga Triple : Rp. <?= number_format($v_mekkah->triple_2) ?><br>
                                Harga Double : Rp. <?= number_format($v_mekkah->double_2) ?><br>
                            <?php }else if($v_mekkah->type_hotel_1 != null && $v_mekkah->type_hotel_2 != null && $v_mekkah->type_hotel_3 != null){ ?>
                                Type Hotel : <i style="color:orange" class='bx bxs-star'></i><?= $v_mekkah->type_hotel_1 ?><br>
                                Harga Quad : Rp. <?= number_format($v_mekkah->quad_1) ?><br>
                                Harga Triple : Rp. <?= number_format($v_mekkah->triple_1) ?><br>
                                Harga Double : Rp. <?= number_format($v_mekkah->double_1) ?><br><br>
                                
                                Type Hotel : <i style="color:orange" class='bx bxs-star'></i><?= $v_mekkah->type_hotel_2 ?><br>
                                Harga Quad : Rp. <?= number_format($v_mekkah->quad_2) ?><br>
                                Harga Triple : Rp. <?= number_format($v_mekkah->triple_2) ?><br>
                                Harga Double : Rp. <?= number_format($v_mekkah->double_2) ?><br><br>
                                
                                Type Hotel : <i style="color:orange" class='bx bxs-star'></i><?= $v_mekkah->type_hotel_3 ?><br>
                                Harga Quad : Rp. <?= number_format($v_mekkah->quad_3) ?><br>
                                Harga Triple : Rp. <?= number_format($v_mekkah->triple_3) ?><br>
                                Harga Double : Rp. <?= number_format($v_mekkah->double_3) ?><br>
                            <?php } ?>
                        <?php } ?>
                    </div>
                    <div class="col">
                        <h4><i class="bx bx-money"></i>Harga</h4>
                        <?php $money = DB::table('money_packets')->where('id_packet', $id)->get(); ?>
                        <?php foreach($money as $v_money){ ?>
                            Harga Dewasa : Rp. <?= number_format($v_money->price_adult) ?><br>
                            Harga Anak : Rp. <?= number_format($v_money->price_child) ?><br>
                            Harga Bayi : Rp. <?= number_format($v_money->price_baby) ?><br>
                        <?php } ?>
                    </div>
                </div><br><br>
                <h4><i class="bx bxs-hand-up"></i>Fasilitas</h4>
                <?php $fasilitas = DB::table('facilitas')->where('id_packet', $id)->get(); ?>
                <?php foreach($fasilitas as $v_fasilitas){ ?>
                    <div class="row">
                        <div class="col">
                            <h5>Yang Termasuk</h5>
                            <?php if($v_fasilitas->in_facilitas != null && $v_fasilitas->in_facilitas_1 == null && $v_fasilitas->in_facilitas_2 == null && $v_fasilitas->in_facilitas_3 == null && $v_fasilitas->in_facilitas_4 == null && $v_fasilitas->in_facilitas_5 == null && $v_fasilitas->in_facilitas_6 == null && $v_fasilitas->in_facilitas_7 == null && $v_fasilitas->in_facilitas_8 == null && $v_fasilitas->in_facilitas_9 == null){ ?>
                                <i class='bx bxs-circle' ></i><?= $v_fasilitas->in_facilitas ?>
                            <?php }else if($v_fasilitas->in_facilitas != null && $v_fasilitas->in_facilitas_1 != null && $v_fasilitas->in_facilitas_2 == null && $v_fasilitas->in_facilitas_3 == null && $v_fasilitas->in_facilitas_4 == null && $v_fasilitas->in_facilitas_5 == null && $v_fasilitas->in_facilitas_6 == null && $v_fasilitas->in_facilitas_7 == null && $v_fasilitas->in_facilitas_8 == null && $v_fasilitas->in_facilitas_9 == null){ ?>
                                <i class='bx bxs-circle' ></i><?= $v_fasilitas->in_facilitas ?><br>
                                <i class='bx bxs-circle' ></i><?= $v_fasilitas->in_facilitas_1 ?>
                            <?php }else if($v_fasilitas->in_facilitas != null && $v_fasilitas->in_facilitas_1 != null && $v_fasilitas->in_facilitas_2 != null && $v_fasilitas->in_facilitas_3 == null && $v_fasilitas->in_facilitas_4 == null && $v_fasilitas->in_facilitas_5 == null && $v_fasilitas->in_facilitas_6 == null && $v_fasilitas->in_facilitas_7 == null && $v_fasilitas->in_facilitas_8 == null && $v_fasilitas->in_facilitas_9 == null){ ?>
                                <i class='bx bxs-circle' ></i><?= $v_fasilitas->in_facilitas ?><br>
                                <i class='bx bxs-circle' ></i><?= $v_fasilitas->in_facilitas_1 ?><br>
                                <i class='bx bxs-circle' ></i><?= $v_fasilitas->in_facilitas_2 ?>
                            <?php }else if($v_fasilitas->in_facilitas != null && $v_fasilitas->in_facilitas_1 != null && $v_fasilitas->in_facilitas_2 != null && $v_fasilitas->in_facilitas_3 != null && $v_fasilitas->in_facilitas_4 == null && $v_fasilitas->in_facilitas_5 == null && $v_fasilitas->in_facilitas_6 == null && $v_fasilitas->in_facilitas_7 == null && $v_fasilitas->in_facilitas_8 == null && $v_fasilitas->in_facilitas_9 == null){ ?>
                                <i class='bx bxs-circle' ></i><?= $v_fasilitas->in_facilitas ?><br>
                                <i class='bx bxs-circle' ></i><?= $v_fasilitas->in_facilitas_1 ?><br>
                                <i class='bx bxs-circle' ></i><?= $v_fasilitas->in_facilitas_2 ?><br>
                                <i class='bx bxs-circle' ></i><?= $v_fasilitas->in_facilitas_3 ?>
                            <?php }else if($v_fasilitas->in_facilitas != null && $v_fasilitas->in_facilitas_1 != null && $v_fasilitas->in_facilitas_2 != null && $v_fasilitas->in_facilitas_3 != null && $v_fasilitas->in_facilitas_4 != null && $v_fasilitas->in_facilitas_5 == null && $v_fasilitas->in_facilitas_6 == null && $v_fasilitas->in_facilitas_7 == null && $v_fasilitas->in_facilitas_8 == null && $v_fasilitas->in_facilitas_9 == null){ ?>
                                <i class='bx bxs-circle' ></i><?= $v_fasilitas->in_facilitas ?><br>
                                <i class='bx bxs-circle' ></i><?= $v_fasilitas->in_facilitas_1 ?><br>
                                <i class='bx bxs-circle' ></i><?= $v_fasilitas->in_facilitas_2 ?><br>
                                <i class='bx bxs-circle' ></i><?= $v_fasilitas->in_facilitas_3 ?><br>
                                <i class='bx bxs-circle' ></i><?= $v_fasilitas->in_facilitas_4 ?>
                            <?php }else if($v_fasilitas->in_facilitas != null && $v_fasilitas->in_facilitas_1 != null && $v_fasilitas->in_facilitas_2 != null && $v_fasilitas->in_facilitas_3 != null && $v_fasilitas->in_facilitas_4 != null && $v_fasilitas->in_facilitas_5 != null && $v_fasilitas->in_facilitas_6 == null && $v_fasilitas->in_facilitas_7 == null && $v_fasilitas->in_facilitas_8 == null && $v_fasilitas->in_facilitas_9 == null){ ?>
                                <i class='bx bxs-circle' ></i><?= $v_fasilitas->in_facilitas ?><br>
                                <i class='bx bxs-circle' ></i><?= $v_fasilitas->in_facilitas_1 ?><br>
                                <i class='bx bxs-circle' ></i><?= $v_fasilitas->in_facilitas_2 ?><br>
                                <i class='bx bxs-circle' ></i><?= $v_fasilitas->in_facilitas_3 ?><br>
                                <i class='bx bxs-circle' ></i><?= $v_fasilitas->in_facilitas_4 ?><br>
                                <i class='bx bxs-circle' ></i><?= $v_fasilitas->in_facilitas_5 ?>
                            <?php }else if($v_fasilitas->in_facilitas != null && $v_fasilitas->in_facilitas_1 != null && $v_fasilitas->in_facilitas_2 != null && $v_fasilitas->in_facilitas_3 != null && $v_fasilitas->in_facilitas_4 != null && $v_fasilitas->in_facilitas_5 != null && $v_fasilitas->in_facilitas_6 != null && $v_fasilitas->in_facilitas_7 == null && $v_fasilitas->in_facilitas_8 == null && $v_fasilitas->in_facilitas_9 == null){ ?>
                                <i class='bx bxs-circle' ></i><?= $v_fasilitas->in_facilitas ?><br>
                                <i class='bx bxs-circle' ></i><?= $v_fasilitas->in_facilitas_1 ?><br>
                                <i class='bx bxs-circle' ></i><?= $v_fasilitas->in_facilitas_2 ?><br>
                                <i class='bx bxs-circle' ></i><?= $v_fasilitas->in_facilitas_3 ?><br>
                                <i class='bx bxs-circle' ></i><?= $v_fasilitas->in_facilitas_4 ?><br>
                                <i class='bx bxs-circle' ></i><?= $v_fasilitas->in_facilitas_5 ?><br>
                                <i class='bx bxs-circle' ></i><?= $v_fasilitas->in_facilitas_6 ?>
                            <?php }else if($v_fasilitas->in_facilitas != null && $v_fasilitas->in_facilitas_1 != null && $v_fasilitas->in_facilitas_2 != null && $v_fasilitas->in_facilitas_3 != null && $v_fasilitas->in_facilitas_4 != null && $v_fasilitas->in_facilitas_5 != null && $v_fasilitas->in_facilitas_6 != null && $v_fasilitas->in_facilitas_7 != null && $v_fasilitas->in_facilitas_8 == null && $v_fasilitas->in_facilitas_9 == null){ ?>
                                <i class='bx bxs-circle' ></i><?= $v_fasilitas->in_facilitas ?><br>
                                <i class='bx bxs-circle' ></i><?= $v_fasilitas->in_facilitas_1 ?><br>
                                <i class='bx bxs-circle' ></i><?= $v_fasilitas->in_facilitas_2 ?><br>
                                <i class='bx bxs-circle' ></i><?= $v_fasilitas->in_facilitas_3 ?><br>
                                <i class='bx bxs-circle' ></i><?= $v_fasilitas->in_facilitas_4 ?><br>
                                <i class='bx bxs-circle' ></i><?= $v_fasilitas->in_facilitas_5 ?><br>
                                <i class='bx bxs-circle' ></i><?= $v_fasilitas->in_facilitas_6 ?><br>
                                <i class='bx bxs-circle' ></i><?= $v_fasilitas->in_facilitas_7 ?>
                            <?php }else if($v_fasilitas->in_facilitas != null && $v_fasilitas->in_facilitas_1 != null && $v_fasilitas->in_facilitas_2 != null && $v_fasilitas->in_facilitas_3 != null && $v_fasilitas->in_facilitas_4 != null && $v_fasilitas->in_facilitas_5 != null && $v_fasilitas->in_facilitas_6 != null && $v_fasilitas->in_facilitas_7 != null && $v_fasilitas->in_facilitas_8 != null && $v_fasilitas->in_facilitas_9 == null){ ?>
                                <i class='bx bxs-circle' ></i><?= $v_fasilitas->in_facilitas ?><br>
                                <i class='bx bxs-circle' ></i><?= $v_fasilitas->in_facilitas_1 ?><br>
                                <i class='bx bxs-circle' ></i><?= $v_fasilitas->in_facilitas_2 ?><br>
                                <i class='bx bxs-circle' ></i><?= $v_fasilitas->in_facilitas_3 ?><br>
                                <i class='bx bxs-circle' ></i><?= $v_fasilitas->in_facilitas_4 ?><br>
                                <i class='bx bxs-circle' ></i><?= $v_fasilitas->in_facilitas_5 ?><br>
                                <i class='bx bxs-circle' ></i><?= $v_fasilitas->in_facilitas_6 ?><br>
                                <i class='bx bxs-circle' ></i><?= $v_fasilitas->in_facilitas_7 ?><br>
                                <i class='bx bxs-circle' ></i><?= $v_fasilitas->in_facilitas_8 ?>
                            <?php }else if($v_fasilitas->in_facilitas != null && $v_fasilitas->in_facilitas_1 != null && $v_fasilitas->in_facilitas_2 != null && $v_fasilitas->in_facilitas_3 != null && $v_fasilitas->in_facilitas_4 != null && $v_fasilitas->in_facilitas_5 != null && $v_fasilitas->in_facilitas_6 != null && $v_fasilitas->in_facilitas_7 != null && $v_fasilitas->in_facilitas_8 != null && $v_fasilitas->in_facilitas_9 != null){ ?>
                                <i class='bx bxs-circle' ></i><?= $v_fasilitas->in_facilitas ?><br>
                                <i class='bx bxs-circle' ></i><?= $v_fasilitas->in_facilitas_1 ?><br>
                                <i class='bx bxs-circle' ></i><?= $v_fasilitas->in_facilitas_2 ?><br>
                                <i class='bx bxs-circle' ></i><?= $v_fasilitas->in_facilitas_3 ?><br>
                                <i class='bx bxs-circle' ></i><?= $v_fasilitas->in_facilitas_4 ?><br>
                                <i class='bx bxs-circle' ></i><?= $v_fasilitas->in_facilitas_5 ?><br>
                                <i class='bx bxs-circle' ></i><?= $v_fasilitas->in_facilitas_6 ?><br>
                                <i class='bx bxs-circle' ></i><?= $v_fasilitas->in_facilitas_7 ?><br>
                                <i class='bx bxs-circle' ></i><?= $v_fasilitas->in_facilitas_8 ?><br>
                                <i class='bx bxs-circle' ></i><?= $v_fasilitas->in_facilitas_9 ?>
                            <?php } ?>
                        </div>
                        <div class="col">
                            <h5>Yang Tidak Termasuk</h5>
                            <?php if($v_fasilitas->out_facilitas != null && $v_fasilitas->out_facilitas_1 == null && $v_fasilitas->out_facilitas_2 == null && $v_fasilitas->out_facilitas_3 == null && $v_fasilitas->out_facilitas_4 == null && $v_fasilitas->out_facilitas_5 == null && $v_fasilitas->out_facilitas_6 == null && $v_fasilitas->out_facilitas_7 == null && $v_fasilitas->out_facilitas_8 == null && $v_fasilitas->out_facilitas_9 == null){ ?>
                                <i class='bx bxs-circle' ></i><?= $v_fasilitas->out_facilitas ?>
                            <?php }else if($v_fasilitas->out_facilitas != null && $v_fasilitas->out_facilitas_1 != null && $v_fasilitas->out_facilitas_2 == null && $v_fasilitas->out_facilitas_3 == null && $v_fasilitas->out_facilitas_4 == null && $v_fasilitas->out_facilitas_5 == null && $v_fasilitas->out_facilitas_6 == null && $v_fasilitas->out_facilitas_7 == null && $v_fasilitas->out_facilitas_8 == null && $v_fasilitas->out_facilitas_9 == null){ ?>
                                <i class='bx bxs-circle' ></i><?= $v_fasilitas->out_facilitas ?><br>
                                <i class='bx bxs-circle' ></i><?= $v_fasilitas->out_facilitas_1 ?>
                            <?php }else if($v_fasilitas->out_facilitas != null && $v_fasilitas->out_facilitas_1 != null && $v_fasilitas->out_facilitas_2 != null && $v_fasilitas->out_facilitas_3 == null && $v_fasilitas->out_facilitas_4 == null && $v_fasilitas->out_facilitas_5 == null && $v_fasilitas->out_facilitas_6 == null && $v_fasilitas->out_facilitas_7 == null && $v_fasilitas->out_facilitas_8 == null && $v_fasilitas->out_facilitas_9 == null){ ?>
                                <i class='bx bxs-circle' ></i><?= $v_fasilitas->out_facilitas ?><br>
                                <i class='bx bxs-circle' ></i><?= $v_fasilitas->out_facilitas_1 ?><br>
                                <i class='bx bxs-circle' ></i><?= $v_fasilitas->out_facilitas_2 ?>
                            <?php }else if($v_fasilitas->out_facilitas != null && $v_fasilitas->out_facilitas_1 != null && $v_fasilitas->out_facilitas_2 != null && $v_fasilitas->out_facilitas_3 != null && $v_fasilitas->out_facilitas_4 == null && $v_fasilitas->out_facilitas_5 == null && $v_fasilitas->out_facilitas_6 == null && $v_fasilitas->out_facilitas_7 == null && $v_fasilitas->out_facilitas_8 == null && $v_fasilitas->out_facilitas_9 == null){ ?>
                                <i class='bx bxs-circle' ></i><?= $v_fasilitas->out_facilitas ?><br>
                                <i class='bx bxs-circle' ></i><?= $v_fasilitas->out_facilitas_1 ?><br>
                                <i class='bx bxs-circle' ></i><?= $v_fasilitas->out_facilitas_2 ?><br>
                                <i class='bx bxs-circle' ></i><?= $v_fasilitas->out_facilitas_3 ?>
                            <?php }else if($v_fasilitas->out_facilitas != null && $v_fasilitas->out_facilitas_1 != null && $v_fasilitas->out_facilitas_2 != null && $v_fasilitas->out_facilitas_3 != null && $v_fasilitas->out_facilitas_4 != null && $v_fasilitas->out_facilitas_5 == null && $v_fasilitas->out_facilitas_6 == null && $v_fasilitas->out_facilitas_7 == null && $v_fasilitas->out_facilitas_8 == null && $v_fasilitas->out_facilitas_9 == null){ ?>
                                <i class='bx bxs-circle' ></i><?= $v_fasilitas->out_facilitas ?><br>
                                <i class='bx bxs-circle' ></i><?= $v_fasilitas->out_facilitas_1 ?><br>
                                <i class='bx bxs-circle' ></i><?= $v_fasilitas->out_facilitas_2 ?><br>
                                <i class='bx bxs-circle' ></i><?= $v_fasilitas->out_facilitas_3 ?><br>
                                <i class='bx bxs-circle' ></i><?= $v_fasilitas->out_facilitas_4 ?>
                            <?php }else if($v_fasilitas->out_facilitas != null && $v_fasilitas->out_facilitas_1 != null && $v_fasilitas->out_facilitas_2 != null && $v_fasilitas->out_facilitas_3 != null && $v_fasilitas->out_facilitas_4 != null && $v_fasilitas->out_facilitas_5 != null && $v_fasilitas->out_facilitas_6 == null && $v_fasilitas->out_facilitas_7 == null && $v_fasilitas->out_facilitas_8 == null && $v_fasilitas->out_facilitas_9 == null){ ?>
                                <i class='bx bxs-circle' ></i><?= $v_fasilitas->out_facilitas ?><br>
                                <i class='bx bxs-circle' ></i><?= $v_fasilitas->out_facilitas_1 ?><br>
                                <i class='bx bxs-circle' ></i><?= $v_fasilitas->out_facilitas_2 ?><br>
                                <i class='bx bxs-circle' ></i><?= $v_fasilitas->out_facilitas_3 ?><br>
                                <i class='bx bxs-circle' ></i><?= $v_fasilitas->out_facilitas_4 ?><br>
                                <i class='bx bxs-circle' ></i><?= $v_fasilitas->out_facilitas_5 ?>
                            <?php }else if($v_fasilitas->out_facilitas != null && $v_fasilitas->out_facilitas_1 != null && $v_fasilitas->out_facilitas_2 != null && $v_fasilitas->out_facilitas_3 != null && $v_fasilitas->out_facilitas_4 != null && $v_fasilitas->out_facilitas_5 != null && $v_fasilitas->out_facilitas_6 != null && $v_fasilitas->out_facilitas_7 == null && $v_fasilitas->out_facilitas_8 == null && $v_fasilitas->out_facilitas_9 == null){ ?>
                                <i class='bx bxs-circle' ></i><?= $v_fasilitas->out_facilitas ?><br>
                                <i class='bx bxs-circle' ></i><?= $v_fasilitas->out_facilitas_1 ?><br>
                                <i class='bx bxs-circle' ></i><?= $v_fasilitas->out_facilitas_2 ?><br>
                                <i class='bx bxs-circle' ></i><?= $v_fasilitas->out_facilitas_3 ?><br>
                                <i class='bx bxs-circle' ></i><?= $v_fasilitas->out_facilitas_4 ?><br>
                                <i class='bx bxs-circle' ></i><?= $v_fasilitas->out_facilitas_5 ?><br>
                                <i class='bx bxs-circle' ></i><?= $v_fasilitas->out_facilitas_6 ?>
                            <?php }else if($v_fasilitas->out_facilitas != null && $v_fasilitas->out_facilitas_1 != null && $v_fasilitas->out_facilitas_2 != null && $v_fasilitas->out_facilitas_3 != null && $v_fasilitas->out_facilitas_4 != null && $v_fasilitas->out_facilitas_5 != null && $v_fasilitas->out_facilitas_6 != null && $v_fasilitas->out_facilitas_7 != null && $v_fasilitas->out_facilitas_8 == null && $v_fasilitas->out_facilitas_9 == null){ ?>
                                <i class='bx bxs-circle' ></i><?= $v_fasilitas->out_facilitas ?><br>
                                <i class='bx bxs-circle' ></i><?= $v_fasilitas->out_facilitas_1 ?><br>
                                <i class='bx bxs-circle' ></i><?= $v_fasilitas->out_facilitas_2 ?><br>
                                <i class='bx bxs-circle' ></i><?= $v_fasilitas->out_facilitas_3 ?><br>
                                <i class='bx bxs-circle' ></i><?= $v_fasilitas->out_facilitas_4 ?><br>
                                <i class='bx bxs-circle' ></i><?= $v_fasilitas->out_facilitas_5 ?><br>
                                <i class='bx bxs-circle' ></i><?= $v_fasilitas->out_facilitas_6 ?><br>
                                <i class='bx bxs-circle' ></i><?= $v_fasilitas->out_facilitas_7 ?>
                            <?php }else if($v_fasilitas->out_facilitas != null && $v_fasilitas->out_facilitas_1 != null && $v_fasilitas->out_facilitas_2 != null && $v_fasilitas->out_facilitas_3 != null && $v_fasilitas->out_facilitas_4 != null && $v_fasilitas->out_facilitas_5 != null && $v_fasilitas->out_facilitas_6 != null && $v_fasilitas->out_facilitas_7 != null && $v_fasilitas->out_facilitas_8 != null && $v_fasilitas->out_facilitas_9 == null){ ?>
                                <i class='bx bxs-circle' ></i><?= $v_fasilitas->out_facilitas ?><br>
                                <i class='bx bxs-circle' ></i><?= $v_fasilitas->out_facilitas_1 ?><br>
                                <i class='bx bxs-circle' ></i><?= $v_fasilitas->out_facilitas_2 ?><br>
                                <i class='bx bxs-circle' ></i><?= $v_fasilitas->out_facilitas_3 ?><br>
                                <i class='bx bxs-circle' ></i><?= $v_fasilitas->out_facilitas_4 ?><br>
                                <i class='bx bxs-circle' ></i><?= $v_fasilitas->out_facilitas_5 ?><br>
                                <i class='bx bxs-circle' ></i><?= $v_fasilitas->out_facilitas_6 ?><br>
                                <i class='bx bxs-circle' ></i><?= $v_fasilitas->out_facilitas_7 ?><br>
                                <i class='bx bxs-circle' ></i><?= $v_fasilitas->out_facilitas_8 ?>
                            <?php }else if($v_fasilitas->out_facilitas != null && $v_fasilitas->out_facilitas_1 != null && $v_fasilitas->out_facilitas_2 != null && $v_fasilitas->out_facilitas_3 != null && $v_fasilitas->out_facilitas_4 != null && $v_fasilitas->out_facilitas_5 != null && $v_fasilitas->out_facilitas_6 != null && $v_fasilitas->out_facilitas_7 != null && $v_fasilitas->out_facilitas_8 != null && $v_fasilitas->out_facilitas_9 != null){ ?>
                                <i class='bx bxs-circle' ></i><?= $v_fasilitas->out_facilitas ?><br>
                                <i class='bx bxs-circle' ></i><?= $v_fasilitas->out_facilitas_1 ?><br>
                                <i class='bx bxs-circle' ></i><?= $v_fasilitas->out_facilitas_2 ?><br>
                                <i class='bx bxs-circle' ></i><?= $v_fasilitas->out_facilitas_3 ?><br>
                                <i class='bx bxs-circle' ></i><?= $v_fasilitas->out_facilitas_4 ?><br>
                                <i class='bx bxs-circle' ></i><?= $v_fasilitas->out_facilitas_5 ?><br>
                                <i class='bx bxs-circle' ></i><?= $v_fasilitas->out_facilitas_6 ?><br>
                                <i class='bx bxs-circle' ></i><?= $v_fasilitas->out_facilitas_7 ?><br>
                                <i class='bx bxs-circle' ></i><?= $v_fasilitas->out_facilitas_8 ?><br>
                                <i class='bx bxs-circle' ></i><?= $v_fasilitas->out_facilitas_9 ?>
                            <?php } ?>
                        </div>
                    </div><br>
                <?php } ?>
                <div class="row">
                    <div class="col">
                        <h4><i class="bx bx-list-check"></i>Syarat Dan Ketentuan</h4>
                        <?php $kondisi = DB::table('conditions')->where('id_packet', $id)->get() ?>
                        <?php foreach($kondisi as $v_kondisi){ ?>
                            <?php if($v_kondisi->in_condition != null && $v_kondisi->in_condition_1 == null && $v_kondisi->in_condition_2 == null && $v_kondisi->in_condition_3 == null && $v_kondisi->in_condition_4 == null && $v_kondisi->in_condition_5 == null && $v_kondisi->in_condition_6 == null && $v_kondisi->in_condition_7 == null && $v_kondisi->in_condition_8 == null && $v_kondisi->in_condition_9 == null && $v_kondisi->in_condition_10 == null && $v_kondisi->in_condition_11 == null && $v_kondisi->in_condition_12 == null && $v_kondisi->in_condition_13 == null && $v_kondisi->in_condition_14 == null && $v_kondisi->in_condition_15 == null && $v_kondisi->in_condition_16 == null && $v_kondisi->in_condition_17 == null && $v_kondisi->in_condition_18 == null && $v_kondisi->in_condition_19 == null){ ?>
                                <i class='bx bxs-circle' ></i><?= $v_kondisi->in_condition ?>
                            <?php }else if($v_kondisi->in_condition != null && $v_kondisi->in_condition_1 != null && $v_kondisi->in_condition_2 == null && $v_kondisi->in_condition_3 == null && $v_kondisi->in_condition_4 == null && $v_kondisi->in_condition_5 == null && $v_kondisi->in_condition_6 == null && $v_kondisi->in_condition_7 == null && $v_kondisi->in_condition_8 == null && $v_kondisi->in_condition_9 == null && $v_kondisi->in_condition_10 == null && $v_kondisi->in_condition_11 == null && $v_kondisi->in_condition_12 == null && $v_kondisi->in_condition_13 == null && $v_kondisi->in_condition_14 == null && $v_kondisi->in_condition_15 == null && $v_kondisi->in_condition_16 == null && $v_kondisi->in_condition_17 == null && $v_kondisi->in_condition_18 == null && $v_kondisi->in_condition_19 == null){ ?>
                                <i class='bx bxs-circle' ></i><?= $v_kondisi->in_condition ?><br>
                                <i class='bx bxs-circle' ></i><?= $v_kondisi->in_condition_1 ?>
                            <?php }else if($v_kondisi->in_condition != null && $v_kondisi->in_condition_1 != null && $v_kondisi->in_condition_2 != null && $v_kondisi->in_condition_3 == null && $v_kondisi->in_condition_4 == null && $v_kondisi->in_condition_5 == null && $v_kondisi->in_condition_6 == null && $v_kondisi->in_condition_7 == null && $v_kondisi->in_condition_8 == null && $v_kondisi->in_condition_9 == null && $v_kondisi->in_condition_10 == null && $v_kondisi->in_condition_11 == null && $v_kondisi->in_condition_12 == null && $v_kondisi->in_condition_13 == null && $v_kondisi->in_condition_14 == null && $v_kondisi->in_condition_15 == null && $v_kondisi->in_condition_16 == null && $v_kondisi->in_condition_17 == null && $v_kondisi->in_condition_18 == null && $v_kondisi->in_condition_19 == null){ ?>
                                <i class='bx bxs-circle' ></i><?= $v_kondisi->in_condition ?><br>
                                <i class='bx bxs-circle' ></i><?= $v_kondisi->in_condition_1 ?><br>
                                <i class='bx bxs-circle' ></i><?= $v_kondisi->in_condition_2 ?>
                            <?php }else if($v_kondisi->in_condition != null && $v_kondisi->in_condition_1 != null && $v_kondisi->in_condition_2 != null && $v_kondisi->in_condition_3 != null && $v_kondisi->in_condition_4 == null && $v_kondisi->in_condition_5 == null && $v_kondisi->in_condition_6 == null && $v_kondisi->in_condition_7 == null && $v_kondisi->in_condition_8 == null && $v_kondisi->in_condition_9 == null && $v_kondisi->in_condition_10 == null && $v_kondisi->in_condition_11 == null && $v_kondisi->in_condition_12 == null && $v_kondisi->in_condition_13 == null && $v_kondisi->in_condition_14 == null && $v_kondisi->in_condition_15 == null && $v_kondisi->in_condition_16 == null && $v_kondisi->in_condition_17 == null && $v_kondisi->in_condition_18 == null && $v_kondisi->in_condition_19 == null){ ?>
                                <i class='bx bxs-circle' ></i><?= $v_kondisi->in_condition ?><br>
                                <i class='bx bxs-circle' ></i><?= $v_kondisi->in_condition_1 ?><br>
                                <i class='bx bxs-circle' ></i><?= $v_kondisi->in_condition_2 ?><br>
                                <i class='bx bxs-circle' ></i><?= $v_kondisi->in_condition_3 ?>
                            <?php }else if($v_kondisi->in_condition != null && $v_kondisi->in_condition_1 != null && $v_kondisi->in_condition_2 != null && $v_kondisi->in_condition_3 != null && $v_kondisi->in_condition_4 != null && $v_kondisi->in_condition_5 == null && $v_kondisi->in_condition_6 == null && $v_kondisi->in_condition_7 == null && $v_kondisi->in_condition_8 == null && $v_kondisi->in_condition_9 == null && $v_kondisi->in_condition_10 == null && $v_kondisi->in_condition_11 == null && $v_kondisi->in_condition_12 == null && $v_kondisi->in_condition_13 == null && $v_kondisi->in_condition_14 == null && $v_kondisi->in_condition_15 == null && $v_kondisi->in_condition_16 == null && $v_kondisi->in_condition_17 == null && $v_kondisi->in_condition_18 == null && $v_kondisi->in_condition_19 == null){ ?>
                                <i class='bx bxs-circle' ></i><?= $v_kondisi->in_condition ?><br>
                                <i class='bx bxs-circle' ></i><?= $v_kondisi->in_condition_1 ?><br>
                                <i class='bx bxs-circle' ></i><?= $v_kondisi->in_condition_2 ?><br>
                                <i class='bx bxs-circle' ></i><?= $v_kondisi->in_condition_3 ?><br>
                                <i class='bx bxs-circle' ></i><?= $v_kondisi->in_condition_4 ?>
                            <?php }else if($v_kondisi->in_condition != null && $v_kondisi->in_condition_1 != null && $v_kondisi->in_condition_2 != null && $v_kondisi->in_condition_3 != null && $v_kondisi->in_condition_4 != null && $v_kondisi->in_condition_5 != null && $v_kondisi->in_condition_6 == null && $v_kondisi->in_condition_7 == null && $v_kondisi->in_condition_8 == null && $v_kondisi->in_condition_9 == null && $v_kondisi->in_condition_10 == null && $v_kondisi->in_condition_11 == null && $v_kondisi->in_condition_12 == null && $v_kondisi->in_condition_13 == null && $v_kondisi->in_condition_14 == null && $v_kondisi->in_condition_15 == null && $v_kondisi->in_condition_16 == null && $v_kondisi->in_condition_17 == null && $v_kondisi->in_condition_18 == null && $v_kondisi->in_condition_19 == null){ ?>
                                <i class='bx bxs-circle' ></i><?= $v_kondisi->in_condition ?><br>
                                <i class='bx bxs-circle' ></i><?= $v_kondisi->in_condition_1 ?><br>
                                <i class='bx bxs-circle' ></i><?= $v_kondisi->in_condition_2 ?><br>
                                <i class='bx bxs-circle' ></i><?= $v_kondisi->in_condition_3 ?><br>
                                <i class='bx bxs-circle' ></i><?= $v_kondisi->in_condition_4 ?><br>
                                <i class='bx bxs-circle' ></i><?= $v_kondisi->in_condition_5 ?>
                            <?php }else if($v_kondisi->in_condition != null && $v_kondisi->in_condition_1 != null && $v_kondisi->in_condition_2 != null && $v_kondisi->in_condition_3 != null && $v_kondisi->in_condition_4 != null && $v_kondisi->in_condition_5 != null && $v_kondisi->in_condition_6 != null && $v_kondisi->in_condition_7 == null && $v_kondisi->in_condition_8 == null && $v_kondisi->in_condition_9 == null && $v_kondisi->in_condition_10 == null && $v_kondisi->in_condition_11 == null && $v_kondisi->in_condition_12 == null && $v_kondisi->in_condition_13 == null && $v_kondisi->in_condition_14 == null && $v_kondisi->in_condition_15 == null && $v_kondisi->in_condition_16 == null && $v_kondisi->in_condition_17 == null && $v_kondisi->in_condition_18 == null && $v_kondisi->in_condition_19 == null){ ?>
                                <i class='bx bxs-circle' ></i><?= $v_kondisi->in_condition ?><br>
                                <i class='bx bxs-circle' ></i><?= $v_kondisi->in_condition_1 ?><br>
                                <i class='bx bxs-circle' ></i><?= $v_kondisi->in_condition_2 ?><br>
                                <i class='bx bxs-circle' ></i><?= $v_kondisi->in_condition_3 ?><br>
                                <i class='bx bxs-circle' ></i><?= $v_kondisi->in_condition_4 ?><br>
                                <i class='bx bxs-circle' ></i><?= $v_kondisi->in_condition_5 ?><br>
                                <i class='bx bxs-circle' ></i><?= $v_kondisi->in_condition_6 ?>
                            <?php }else if($v_kondisi->in_condition != null && $v_kondisi->in_condition_1 != null && $v_kondisi->in_condition_2 != null && $v_kondisi->in_condition_3 != null && $v_kondisi->in_condition_4 != null && $v_kondisi->in_condition_5 != null && $v_kondisi->in_condition_6 != null && $v_kondisi->in_condition_7 != null && $v_kondisi->in_condition_8 == null && $v_kondisi->in_condition_9 == null && $v_kondisi->in_condition_10 == null && $v_kondisi->in_condition_11 == null && $v_kondisi->in_condition_12 == null && $v_kondisi->in_condition_13 == null && $v_kondisi->in_condition_14 == null && $v_kondisi->in_condition_15 == null && $v_kondisi->in_condition_16 == null && $v_kondisi->in_condition_17 == null && $v_kondisi->in_condition_18 == null && $v_kondisi->in_condition_19 == null){ ?>
                                <i class='bx bxs-circle' ></i><?= $v_kondisi->in_condition ?><br>
                                <i class='bx bxs-circle' ></i><?= $v_kondisi->in_condition_1 ?><br>
                                <i class='bx bxs-circle' ></i><?= $v_kondisi->in_condition_2 ?><br>
                                <i class='bx bxs-circle' ></i><?= $v_kondisi->in_condition_3 ?><br>
                                <i class='bx bxs-circle' ></i><?= $v_kondisi->in_condition_4 ?><br>
                                <i class='bx bxs-circle' ></i><?= $v_kondisi->in_condition_5 ?><br>
                                <i class='bx bxs-circle' ></i><?= $v_kondisi->in_condition_6 ?><br>
                                <i class='bx bxs-circle' ></i><?= $v_kondisi->in_condition_7 ?>
                            <?php }else if($v_kondisi->in_condition != null && $v_kondisi->in_condition_1 != null && $v_kondisi->in_condition_2 != null && $v_kondisi->in_condition_3 != null && $v_kondisi->in_condition_4 != null && $v_kondisi->in_condition_5 != null && $v_kondisi->in_condition_6 != null && $v_kondisi->in_condition_7 != null && $v_kondisi->in_condition_8 != null && $v_kondisi->in_condition_9 == null && $v_kondisi->in_condition_10 == null && $v_kondisi->in_condition_11 == null && $v_kondisi->in_condition_12 == null && $v_kondisi->in_condition_13 == null && $v_kondisi->in_condition_14 == null && $v_kondisi->in_condition_15 == null && $v_kondisi->in_condition_16 == null && $v_kondisi->in_condition_17 == null && $v_kondisi->in_condition_18 == null && $v_kondisi->in_condition_19 == null){ ?>
                                <i class='bx bxs-circle' ></i><?= $v_kondisi->in_condition ?><br>
                                <i class='bx bxs-circle' ></i><?= $v_kondisi->in_condition_1 ?><br>
                                <i class='bx bxs-circle' ></i><?= $v_kondisi->in_condition_2 ?><br>
                                <i class='bx bxs-circle' ></i><?= $v_kondisi->in_condition_3 ?><br>
                                <i class='bx bxs-circle' ></i><?= $v_kondisi->in_condition_4 ?><br>
                                <i class='bx bxs-circle' ></i><?= $v_kondisi->in_condition_5 ?><br>
                                <i class='bx bxs-circle' ></i><?= $v_kondisi->in_condition_6 ?><br>
                                <i class='bx bxs-circle' ></i><?= $v_kondisi->in_condition_7 ?><br>
                                <i class='bx bxs-circle' ></i><?= $v_kondisi->in_condition_8 ?>
                            <?php }else if($v_kondisi->in_condition != null && $v_kondisi->in_condition_1 != null && $v_kondisi->in_condition_2 != null && $v_kondisi->in_condition_3 != null && $v_kondisi->in_condition_4 != null && $v_kondisi->in_condition_5 != null && $v_kondisi->in_condition_6 != null && $v_kondisi->in_condition_7 != null && $v_kondisi->in_condition_8 != null && $v_kondisi->in_condition_9 != null && $v_kondisi->in_condition_10 == null && $v_kondisi->in_condition_11 == null && $v_kondisi->in_condition_12 == null && $v_kondisi->in_condition_13 == null && $v_kondisi->in_condition_14 == null && $v_kondisi->in_condition_15 == null && $v_kondisi->in_condition_16 == null && $v_kondisi->in_condition_17 == null && $v_kondisi->in_condition_18 == null && $v_kondisi->in_condition_19 == null){ ?>
                                <i class='bx bxs-circle' ></i><?= $v_kondisi->in_condition ?><br>
                                <i class='bx bxs-circle' ></i><?= $v_kondisi->in_condition_1 ?><br>
                                <i class='bx bxs-circle' ></i><?= $v_kondisi->in_condition_2 ?><br>
                                <i class='bx bxs-circle' ></i><?= $v_kondisi->in_condition_3 ?><br>
                                <i class='bx bxs-circle' ></i><?= $v_kondisi->in_condition_4 ?><br>
                                <i class='bx bxs-circle' ></i><?= $v_kondisi->in_condition_5 ?><br>
                                <i class='bx bxs-circle' ></i><?= $v_kondisi->in_condition_6 ?><br>
                                <i class='bx bxs-circle' ></i><?= $v_kondisi->in_condition_7 ?><br>
                                <i class='bx bxs-circle' ></i><?= $v_kondisi->in_condition_8 ?><br>
                                <i class='bx bxs-circle' ></i><?= $v_kondisi->in_condition_9 ?>
                            <?php }else if($v_kondisi->in_condition != null && $v_kondisi->in_condition_1 != null && $v_kondisi->in_condition_2 != null && $v_kondisi->in_condition_3 != null && $v_kondisi->in_condition_4 != null && $v_kondisi->in_condition_5 != null && $v_kondisi->in_condition_6 != null && $v_kondisi->in_condition_7 != null && $v_kondisi->in_condition_8 != null && $v_kondisi->in_condition_9 != null && $v_kondisi->in_condition_10 != null && $v_kondisi->in_condition_11 == null && $v_kondisi->in_condition_12 == null && $v_kondisi->in_condition_13 == null && $v_kondisi->in_condition_14 == null && $v_kondisi->in_condition_15 == null && $v_kondisi->in_condition_16 == null && $v_kondisi->in_condition_17 == null && $v_kondisi->in_condition_18 == null && $v_kondisi->in_condition_19 == null){ ?>
                                <i class='bx bxs-circle' ></i><?= $v_kondisi->in_condition ?><br>
                                <i class='bx bxs-circle' ></i><?= $v_kondisi->in_condition_1 ?><br>
                                <i class='bx bxs-circle' ></i><?= $v_kondisi->in_condition_2 ?><br>
                                <i class='bx bxs-circle' ></i><?= $v_kondisi->in_condition_3 ?><br>
                                <i class='bx bxs-circle' ></i><?= $v_kondisi->in_condition_4 ?><br>
                                <i class='bx bxs-circle' ></i><?= $v_kondisi->in_condition_5 ?><br>
                                <i class='bx bxs-circle' ></i><?= $v_kondisi->in_condition_6 ?><br>
                                <i class='bx bxs-circle' ></i><?= $v_kondisi->in_condition_7 ?><br>
                                <i class='bx bxs-circle' ></i><?= $v_kondisi->in_condition_8 ?><br>
                                <i class='bx bxs-circle' ></i><?= $v_kondisi->in_condition_9 ?><br>
                                <i class='bx bxs-circle' ></i><?= $v_kondisi->in_condition_10 ?>
                            <?php }else if($v_kondisi->in_condition != null && $v_kondisi->in_condition_1 != null && $v_kondisi->in_condition_2 != null && $v_kondisi->in_condition_3 != null && $v_kondisi->in_condition_4 != null && $v_kondisi->in_condition_5 != null && $v_kondisi->in_condition_6 != null && $v_kondisi->in_condition_7 != null && $v_kondisi->in_condition_8 != null && $v_kondisi->in_condition_9 != null && $v_kondisi->in_condition_10 != null && $v_kondisi->in_condition_11 != null && $v_kondisi->in_condition_12 == null && $v_kondisi->in_condition_13 == null && $v_kondisi->in_condition_14 == null && $v_kondisi->in_condition_15 == null && $v_kondisi->in_condition_16 == null && $v_kondisi->in_condition_17 == null && $v_kondisi->in_condition_18 == null && $v_kondisi->in_condition_19 == null){ ?>
                                <i class='bx bxs-circle' ></i><?= $v_kondisi->in_condition ?><br>
                                <i class='bx bxs-circle' ></i><?= $v_kondisi->in_condition_1 ?><br>
                                <i class='bx bxs-circle' ></i><?= $v_kondisi->in_condition_2 ?><br>
                                <i class='bx bxs-circle' ></i><?= $v_kondisi->in_condition_3 ?><br>
                                <i class='bx bxs-circle' ></i><?= $v_kondisi->in_condition_4 ?><br>
                                <i class='bx bxs-circle' ></i><?= $v_kondisi->in_condition_5 ?><br>
                                <i class='bx bxs-circle' ></i><?= $v_kondisi->in_condition_6 ?><br>
                                <i class='bx bxs-circle' ></i><?= $v_kondisi->in_condition_7 ?><br>
                                <i class='bx bxs-circle' ></i><?= $v_kondisi->in_condition_8 ?><br>
                                <i class='bx bxs-circle' ></i><?= $v_kondisi->in_condition_9 ?><br>
                                <i class='bx bxs-circle' ></i><?= $v_kondisi->in_condition_10 ?><br>
                                <i class='bx bxs-circle' ></i><?= $v_kondisi->in_condition_11 ?>
                            <?php }else if($v_kondisi->in_condition != null && $v_kondisi->in_condition_1 != null && $v_kondisi->in_condition_2 != null && $v_kondisi->in_condition_3 != null && $v_kondisi->in_condition_4 != null && $v_kondisi->in_condition_5 != null && $v_kondisi->in_condition_6 != null && $v_kondisi->in_condition_7 != null && $v_kondisi->in_condition_8 != null && $v_kondisi->in_condition_9 != null && $v_kondisi->in_condition_10 != null && $v_kondisi->in_condition_11 != null && $v_kondisi->in_condition_12 != null && $v_kondisi->in_condition_13 == null && $v_kondisi->in_condition_14 == null && $v_kondisi->in_condition_15 == null && $v_kondisi->in_condition_16 == null && $v_kondisi->in_condition_17 == null && $v_kondisi->in_condition_18 == null && $v_kondisi->in_condition_19 == null){ ?>
                                <i class='bx bxs-circle' ></i><?= $v_kondisi->in_condition ?><br>
                                <i class='bx bxs-circle' ></i><?= $v_kondisi->in_condition_1 ?><br>
                                <i class='bx bxs-circle' ></i><?= $v_kondisi->in_condition_2 ?><br>
                                <i class='bx bxs-circle' ></i><?= $v_kondisi->in_condition_3 ?><br>
                                <i class='bx bxs-circle' ></i><?= $v_kondisi->in_condition_4 ?><br>
                                <i class='bx bxs-circle' ></i><?= $v_kondisi->in_condition_5 ?><br>
                                <i class='bx bxs-circle' ></i><?= $v_kondisi->in_condition_6 ?><br>
                                <i class='bx bxs-circle' ></i><?= $v_kondisi->in_condition_7 ?><br>
                                <i class='bx bxs-circle' ></i><?= $v_kondisi->in_condition_8 ?><br>
                                <i class='bx bxs-circle' ></i><?= $v_kondisi->in_condition_9 ?><br>
                                <i class='bx bxs-circle' ></i><?= $v_kondisi->in_condition_10 ?><br>
                                <i class='bx bxs-circle' ></i><?= $v_kondisi->in_condition_11 ?><br>
                                <i class='bx bxs-circle' ></i><?= $v_kondisi->in_condition_12 ?>
                            <?php }else if($v_kondisi->in_condition != null && $v_kondisi->in_condition_1 != null && $v_kondisi->in_condition_2 != null && $v_kondisi->in_condition_3 != null && $v_kondisi->in_condition_4 != null && $v_kondisi->in_condition_5 != null && $v_kondisi->in_condition_6 != null && $v_kondisi->in_condition_7 != null && $v_kondisi->in_condition_8 != null && $v_kondisi->in_condition_9 != null && $v_kondisi->in_condition_10 != null && $v_kondisi->in_condition_11 != null && $v_kondisi->in_condition_12 != null && $v_kondisi->in_condition_13 != null && $v_kondisi->in_condition_14 == null && $v_kondisi->in_condition_15 == null && $v_kondisi->in_condition_16 == null && $v_kondisi->in_condition_17 == null && $v_kondisi->in_condition_18 == null && $v_kondisi->in_condition_19 == null){ ?>
                                <i class='bx bxs-circle' ></i><?= $v_kondisi->in_condition ?><br>
                                <i class='bx bxs-circle' ></i><?= $v_kondisi->in_condition_1 ?><br>
                                <i class='bx bxs-circle' ></i><?= $v_kondisi->in_condition_2 ?><br>
                                <i class='bx bxs-circle' ></i><?= $v_kondisi->in_condition_3 ?><br>
                                <i class='bx bxs-circle' ></i><?= $v_kondisi->in_condition_4 ?><br>
                                <i class='bx bxs-circle' ></i><?= $v_kondisi->in_condition_5 ?><br>
                                <i class='bx bxs-circle' ></i><?= $v_kondisi->in_condition_6 ?><br>
                                <i class='bx bxs-circle' ></i><?= $v_kondisi->in_condition_7 ?><br>
                                <i class='bx bxs-circle' ></i><?= $v_kondisi->in_condition_8 ?><br>
                                <i class='bx bxs-circle' ></i><?= $v_kondisi->in_condition_9 ?><br>
                                <i class='bx bxs-circle' ></i><?= $v_kondisi->in_condition_10 ?><br>
                                <i class='bx bxs-circle' ></i><?= $v_kondisi->in_condition_11 ?><br>
                                <i class='bx bxs-circle' ></i><?= $v_kondisi->in_condition_12 ?><br>
                                <i class='bx bxs-circle' ></i><?= $v_kondisi->in_condition_13 ?>
                            <?php }else if($v_kondisi->in_condition != null && $v_kondisi->in_condition_1 != null && $v_kondisi->in_condition_2 != null && $v_kondisi->in_condition_3 != null && $v_kondisi->in_condition_4 != null && $v_kondisi->in_condition_5 != null && $v_kondisi->in_condition_6 != null && $v_kondisi->in_condition_7 != null && $v_kondisi->in_condition_8 != null && $v_kondisi->in_condition_9 != null && $v_kondisi->in_condition_10 != null && $v_kondisi->in_condition_11 != null && $v_kondisi->in_condition_12 != null && $v_kondisi->in_condition_13 != null && $v_kondisi->in_condition_14 != null && $v_kondisi->in_condition_15 == null && $v_kondisi->in_condition_16 == null && $v_kondisi->in_condition_17 == null && $v_kondisi->in_condition_18 == null && $v_kondisi->in_condition_19 == null){ ?>
                                <i class='bx bxs-circle' ></i><?= $v_kondisi->in_condition ?><br>
                                <i class='bx bxs-circle' ></i><?= $v_kondisi->in_condition_1 ?><br>
                                <i class='bx bxs-circle' ></i><?= $v_kondisi->in_condition_2 ?><br>
                                <i class='bx bxs-circle' ></i><?= $v_kondisi->in_condition_3 ?><br>
                                <i class='bx bxs-circle' ></i><?= $v_kondisi->in_condition_4 ?><br>
                                <i class='bx bxs-circle' ></i><?= $v_kondisi->in_condition_5 ?><br>
                                <i class='bx bxs-circle' ></i><?= $v_kondisi->in_condition_6 ?><br>
                                <i class='bx bxs-circle' ></i><?= $v_kondisi->in_condition_7 ?><br>
                                <i class='bx bxs-circle' ></i><?= $v_kondisi->in_condition_8 ?><br>
                                <i class='bx bxs-circle' ></i><?= $v_kondisi->in_condition_9 ?><br>
                                <i class='bx bxs-circle' ></i><?= $v_kondisi->in_condition_10 ?><br>
                                <i class='bx bxs-circle' ></i><?= $v_kondisi->in_condition_11 ?><br>
                                <i class='bx bxs-circle' ></i><?= $v_kondisi->in_condition_12 ?><br>
                                <i class='bx bxs-circle' ></i><?= $v_kondisi->in_condition_13 ?><br>
                                <i class='bx bxs-circle' ></i><?= $v_kondisi->in_condition_14 ?>
                            <?php }else if($v_kondisi->in_condition != null && $v_kondisi->in_condition_1 != null && $v_kondisi->in_condition_2 != null && $v_kondisi->in_condition_3 != null && $v_kondisi->in_condition_4 != null && $v_kondisi->in_condition_5 != null && $v_kondisi->in_condition_6 != null && $v_kondisi->in_condition_7 != null && $v_kondisi->in_condition_8 != null && $v_kondisi->in_condition_9 != null && $v_kondisi->in_condition_10 != null && $v_kondisi->in_condition_11 != null && $v_kondisi->in_condition_12 != null && $v_kondisi->in_condition_13 != null && $v_kondisi->in_condition_14 != null && $v_kondisi->in_condition_15 != null && $v_kondisi->in_condition_16 == null && $v_kondisi->in_condition_17 == null && $v_kondisi->in_condition_18 == null && $v_kondisi->in_condition_19 == null){ ?>
                                <i class='bx bxs-circle' ></i><?= $v_kondisi->in_condition ?><br>
                                <i class='bx bxs-circle' ></i><?= $v_kondisi->in_condition_1 ?><br>
                                <i class='bx bxs-circle' ></i><?= $v_kondisi->in_condition_2 ?><br>
                                <i class='bx bxs-circle' ></i><?= $v_kondisi->in_condition_3 ?><br>
                                <i class='bx bxs-circle' ></i><?= $v_kondisi->in_condition_4 ?><br>
                                <i class='bx bxs-circle' ></i><?= $v_kondisi->in_condition_5 ?><br>
                                <i class='bx bxs-circle' ></i><?= $v_kondisi->in_condition_6 ?><br>
                                <i class='bx bxs-circle' ></i><?= $v_kondisi->in_condition_7 ?><br>
                                <i class='bx bxs-circle' ></i><?= $v_kondisi->in_condition_8 ?><br>
                                <i class='bx bxs-circle' ></i><?= $v_kondisi->in_condition_9 ?><br>
                                <i class='bx bxs-circle' ></i><?= $v_kondisi->in_condition_10 ?><br>
                                <i class='bx bxs-circle' ></i><?= $v_kondisi->in_condition_11 ?><br>
                                <i class='bx bxs-circle' ></i><?= $v_kondisi->in_condition_12 ?><br>
                                <i class='bx bxs-circle' ></i><?= $v_kondisi->in_condition_13 ?><br>
                                <i class='bx bxs-circle' ></i><?= $v_kondisi->in_condition_14 ?><br>
                                <i class='bx bxs-circle' ></i><?= $v_kondisi->in_condition_15 ?>
                            <?php }else if($v_kondisi->in_condition != null && $v_kondisi->in_condition_1 != null && $v_kondisi->in_condition_2 != null && $v_kondisi->in_condition_3 != null && $v_kondisi->in_condition_4 != null && $v_kondisi->in_condition_5 != null && $v_kondisi->in_condition_6 != null && $v_kondisi->in_condition_7 != null && $v_kondisi->in_condition_8 != null && $v_kondisi->in_condition_9 != null && $v_kondisi->in_condition_10 != null && $v_kondisi->in_condition_11 != null && $v_kondisi->in_condition_12 != null && $v_kondisi->in_condition_13 != null && $v_kondisi->in_condition_14 != null && $v_kondisi->in_condition_15 != null && $v_kondisi->in_condition_16 != null && $v_kondisi->in_condition_17 == null && $v_kondisi->in_condition_18 == null && $v_kondisi->in_condition_19 == null){ ?>
                                <i class='bx bxs-circle' ></i><?= $v_kondisi->in_condition ?><br>
                                <i class='bx bxs-circle' ></i><?= $v_kondisi->in_condition_1 ?><br>
                                <i class='bx bxs-circle' ></i><?= $v_kondisi->in_condition_2 ?><br>
                                <i class='bx bxs-circle' ></i><?= $v_kondisi->in_condition_3 ?><br>
                                <i class='bx bxs-circle' ></i><?= $v_kondisi->in_condition_4 ?><br>
                                <i class='bx bxs-circle' ></i><?= $v_kondisi->in_condition_5 ?><br>
                                <i class='bx bxs-circle' ></i><?= $v_kondisi->in_condition_6 ?><br>
                                <i class='bx bxs-circle' ></i><?= $v_kondisi->in_condition_7 ?><br>
                                <i class='bx bxs-circle' ></i><?= $v_kondisi->in_condition_8 ?><br>
                                <i class='bx bxs-circle' ></i><?= $v_kondisi->in_condition_9 ?><br>
                                <i class='bx bxs-circle' ></i><?= $v_kondisi->in_condition_10 ?><br>
                                <i class='bx bxs-circle' ></i><?= $v_kondisi->in_condition_11 ?><br>
                                <i class='bx bxs-circle' ></i><?= $v_kondisi->in_condition_12 ?><br>
                                <i class='bx bxs-circle' ></i><?= $v_kondisi->in_condition_13 ?><br>
                                <i class='bx bxs-circle' ></i><?= $v_kondisi->in_condition_14 ?><br>
                                <i class='bx bxs-circle' ></i><?= $v_kondisi->in_condition_15 ?><br>
                                <i class='bx bxs-circle' ></i><?= $v_kondisi->in_condition_16 ?>
                            <?php }else if($v_kondisi->in_condition != null && $v_kondisi->in_condition_1 != null && $v_kondisi->in_condition_2 != null && $v_kondisi->in_condition_3 != null && $v_kondisi->in_condition_4 != null && $v_kondisi->in_condition_5 != null && $v_kondisi->in_condition_6 != null && $v_kondisi->in_condition_7 != null && $v_kondisi->in_condition_8 != null && $v_kondisi->in_condition_9 != null && $v_kondisi->in_condition_10 != null && $v_kondisi->in_condition_11 != null && $v_kondisi->in_condition_12 != null && $v_kondisi->in_condition_13 != null && $v_kondisi->in_condition_14 != null && $v_kondisi->in_condition_15 != null && $v_kondisi->in_condition_16 != null && $v_kondisi->in_condition_17 != null && $v_kondisi->in_condition_18 == null && $v_kondisi->in_condition_19 == null){ ?>
                                <i class='bx bxs-circle' ></i><?= $v_kondisi->in_condition ?><br>
                                <i class='bx bxs-circle' ></i><?= $v_kondisi->in_condition_1 ?><br>
                                <i class='bx bxs-circle' ></i><?= $v_kondisi->in_condition_2 ?><br>
                                <i class='bx bxs-circle' ></i><?= $v_kondisi->in_condition_3 ?><br>
                                <i class='bx bxs-circle' ></i><?= $v_kondisi->in_condition_4 ?><br>
                                <i class='bx bxs-circle' ></i><?= $v_kondisi->in_condition_5 ?><br>
                                <i class='bx bxs-circle' ></i><?= $v_kondisi->in_condition_6 ?><br>
                                <i class='bx bxs-circle' ></i><?= $v_kondisi->in_condition_7 ?><br>
                                <i class='bx bxs-circle' ></i><?= $v_kondisi->in_condition_8 ?><br>
                                <i class='bx bxs-circle' ></i><?= $v_kondisi->in_condition_9 ?><br>
                                <i class='bx bxs-circle' ></i><?= $v_kondisi->in_condition_10 ?><br>
                                <i class='bx bxs-circle' ></i><?= $v_kondisi->in_condition_11 ?><br>
                                <i class='bx bxs-circle' ></i><?= $v_kondisi->in_condition_12 ?><br>
                                <i class='bx bxs-circle' ></i><?= $v_kondisi->in_condition_13 ?><br>
                                <i class='bx bxs-circle' ></i><?= $v_kondisi->in_condition_14 ?><br>
                                <i class='bx bxs-circle' ></i><?= $v_kondisi->in_condition_15 ?><br>
                                <i class='bx bxs-circle' ></i><?= $v_kondisi->in_condition_16 ?><br>
                                <i class='bx bxs-circle' ></i><?= $v_kondisi->in_condition_17 ?>
                            <?php }else if($v_kondisi->in_condition != null && $v_kondisi->in_condition_1 != null && $v_kondisi->in_condition_2 != null && $v_kondisi->in_condition_3 != null && $v_kondisi->in_condition_4 != null && $v_kondisi->in_condition_5 != null && $v_kondisi->in_condition_6 != null && $v_kondisi->in_condition_7 != null && $v_kondisi->in_condition_8 != null && $v_kondisi->in_condition_9 != null && $v_kondisi->in_condition_10 != null && $v_kondisi->in_condition_11 != null && $v_kondisi->in_condition_12 != null && $v_kondisi->in_condition_13 != null && $v_kondisi->in_condition_14 != null && $v_kondisi->in_condition_15 != null && $v_kondisi->in_condition_16 != null && $v_kondisi->in_condition_17 != null && $v_kondisi->in_condition_18 != null && $v_kondisi->in_condition_19 == null){ ?>
                                <i class='bx bxs-circle' ></i><?= $v_kondisi->in_condition ?><br>
                                <i class='bx bxs-circle' ></i><?= $v_kondisi->in_condition_1 ?><br>
                                <i class='bx bxs-circle' ></i><?= $v_kondisi->in_condition_2 ?><br>
                                <i class='bx bxs-circle' ></i><?= $v_kondisi->in_condition_3 ?><br>
                                <i class='bx bxs-circle' ></i><?= $v_kondisi->in_condition_4 ?><br>
                                <i class='bx bxs-circle' ></i><?= $v_kondisi->in_condition_5 ?><br>
                                <i class='bx bxs-circle' ></i><?= $v_kondisi->in_condition_6 ?><br>
                                <i class='bx bxs-circle' ></i><?= $v_kondisi->in_condition_7 ?><br>
                                <i class='bx bxs-circle' ></i><?= $v_kondisi->in_condition_8 ?><br>
                                <i class='bx bxs-circle' ></i><?= $v_kondisi->in_condition_9 ?><br>
                                <i class='bx bxs-circle' ></i><?= $v_kondisi->in_condition_10 ?><br>
                                <i class='bx bxs-circle' ></i><?= $v_kondisi->in_condition_11 ?><br>
                                <i class='bx bxs-circle' ></i><?= $v_kondisi->in_condition_12 ?><br>
                                <i class='bx bxs-circle' ></i><?= $v_kondisi->in_condition_13 ?><br>
                                <i class='bx bxs-circle' ></i><?= $v_kondisi->in_condition_14 ?><br>
                                <i class='bx bxs-circle' ></i><?= $v_kondisi->in_condition_15 ?><br>
                                <i class='bx bxs-circle' ></i><?= $v_kondisi->in_condition_16 ?><br>
                                <i class='bx bxs-circle' ></i><?= $v_kondisi->in_condition_17 ?><br>
                                <i class='bx bxs-circle' ></i><?= $v_kondisi->in_condition_18 ?>
                            <?php }else if($v_kondisi->in_condition != null && $v_kondisi->in_condition_1 != null && $v_kondisi->in_condition_2 != null && $v_kondisi->in_condition_3 != null && $v_kondisi->in_condition_4 != null && $v_kondisi->in_condition_5 != null && $v_kondisi->in_condition_6 != null && $v_kondisi->in_condition_7 != null && $v_kondisi->in_condition_8 != null && $v_kondisi->in_condition_9 != null && $v_kondisi->in_condition_10 != null && $v_kondisi->in_condition_11 != null && $v_kondisi->in_condition_12 != null && $v_kondisi->in_condition_13 != null && $v_kondisi->in_condition_14 != null && $v_kondisi->in_condition_15 != null && $v_kondisi->in_condition_16 != null && $v_kondisi->in_condition_17 != null && $v_kondisi->in_condition_18 != null && $v_kondisi->in_condition_19 != null){ ?>
                                <i class='bx bxs-circle' ></i><?= $v_kondisi->in_condition ?><br>
                                <i class='bx bxs-circle' ></i><?= $v_kondisi->in_condition_1 ?><br>
                                <i class='bx bxs-circle' ></i><?= $v_kondisi->in_condition_2 ?><br>
                                <i class='bx bxs-circle' ></i><?= $v_kondisi->in_condition_3 ?><br>
                                <i class='bx bxs-circle' ></i><?= $v_kondisi->in_condition_4 ?><br>
                                <i class='bx bxs-circle' ></i><?= $v_kondisi->in_condition_5 ?><br>
                                <i class='bx bxs-circle' ></i><?= $v_kondisi->in_condition_6 ?><br>
                                <i class='bx bxs-circle' ></i><?= $v_kondisi->in_condition_7 ?><br>
                                <i class='bx bxs-circle' ></i><?= $v_kondisi->in_condition_8 ?><br>
                                <i class='bx bxs-circle' ></i><?= $v_kondisi->in_condition_9 ?><br>
                                <i class='bx bxs-circle' ></i><?= $v_kondisi->in_condition_10 ?><br>
                                <i class='bx bxs-circle' ></i><?= $v_kondisi->in_condition_11 ?><br>
                                <i class='bx bxs-circle' ></i><?= $v_kondisi->in_condition_12 ?><br>
                                <i class='bx bxs-circle' ></i><?= $v_kondisi->in_condition_13 ?><br>
                                <i class='bx bxs-circle' ></i><?= $v_kondisi->in_condition_14 ?><br>
                                <i class='bx bxs-circle' ></i><?= $v_kondisi->in_condition_15 ?><br>
                                <i class='bx bxs-circle' ></i><?= $v_kondisi->in_condition_16 ?><br>
                                <i class='bx bxs-circle' ></i><?= $v_kondisi->in_condition_17 ?><br>
                                <i class='bx bxs-circle' ></i><?= $v_kondisi->in_condition_18 ?><br>
                                <i class='bx bxs-circle' ></i><?= $v_kondisi->in_condition_19 ?>
                            <?php } ?>
                        <?php } ?>
                    </div>
                    <div class="col">
                        <h4><i class="bx bx-list-check"></i>Jadwal Kegiatan</h4>
                        <?php $kegiatan = DB::table('itineries')->join('photos', 'photos.id', '=', 'itineries.id_photo')->where('id_packet', $id)->get() ?>
                        <?php foreach($kegiatan as $v_kegiatan){ ?>
                            <?php if($v_kegiatan->activity != null && $v_kegiatan->activity_2 == null && $v_kegiatan->activity_3 == null && $v_kegiatan->activity_4 == null && $v_kegiatan->activity_5 == null && $v_kegiatan->activity_6 == null && $v_kegiatan->activity_7 == null && $v_kegiatan->activity_8 == null && $v_kegiatan->activity_9 == null && $v_kegiatan->activity_10 == null && $v_kegiatan->activity_11 == null && $v_kegiatan->activity_12 == null && $v_kegiatan->activity_13 == null && $v_kegiatan->activity_14 == null){ ?>
                                <i class='bx bxs-circle' ></i><?= $v_kegiatan->activity ?>
                            <?php }else if($v_kegiatan->activity != null && $v_kegiatan->activity_2 != null && $v_kegiatan->activity_3 == null && $v_kegiatan->activity_4 == null && $v_kegiatan->activity_5 == null && $v_kegiatan->activity_6 == null && $v_kegiatan->activity_7 == null && $v_kegiatan->activity_8 == null && $v_kegiatan->activity_9 == null && $v_kegiatan->activity_10 == null && $v_kegiatan->activity_11 == null && $v_kegiatan->activity_12 == null && $v_kegiatan->activity_13 == null && $v_kegiatan->activity_14 == null){ ?>
                                <i class='bx bxs-circle' ></i><?= $v_kegiatan->activity ?><br>
                                <i class='bx bxs-circle' ></i><?= $v_kegiatan->activity_2 ?>
                            <?php }else if($v_kegiatan->activity != null && $v_kegiatan->activity_2 != null && $v_kegiatan->activity_3 != null && $v_kegiatan->activity_4 == null && $v_kegiatan->activity_5 == null && $v_kegiatan->activity_6 == null && $v_kegiatan->activity_7 == null && $v_kegiatan->activity_8 == null && $v_kegiatan->activity_9 == null && $v_kegiatan->activity_10 == null && $v_kegiatan->activity_11 == null && $v_kegiatan->activity_12 == null && $v_kegiatan->activity_13 == null && $v_kegiatan->activity_14 == null){ ?>
                                <i class='bx bxs-circle' ></i><?= $v_kegiatan->activity ?><br>
                                <i class='bx bxs-circle' ></i><?= $v_kegiatan->activity_2 ?><br>
                                <i class='bx bxs-circle' ></i><?= $v_kegiatan->activity_3 ?>
                            <?php }else if($v_kegiatan->activity != null && $v_kegiatan->activity_2 != null && $v_kegiatan->activity_3 != null && $v_kegiatan->activity_4 != null && $v_kegiatan->activity_5 == null && $v_kegiatan->activity_6 == null && $v_kegiatan->activity_7 == null && $v_kegiatan->activity_8 == null && $v_kegiatan->activity_9 == null && $v_kegiatan->activity_10 == null && $v_kegiatan->activity_11 == null && $v_kegiatan->activity_12 == null && $v_kegiatan->activity_13 == null && $v_kegiatan->activity_14 == null){ ?>
                                <i class='bx bxs-circle' ></i><?= $v_kegiatan->activity ?><br>
                                <i class='bx bxs-circle' ></i><?= $v_kegiatan->activity_2 ?><br>
                                <i class='bx bxs-circle' ></i><?= $v_kegiatan->activity_3 ?><br>
                                <i class='bx bxs-circle' ></i><?= $v_kegiatan->activity_4 ?>
                            <?php }else if($v_kegiatan->activity != null && $v_kegiatan->activity_2 != null && $v_kegiatan->activity_3 != null && $v_kegiatan->activity_4 != null && $v_kegiatan->activity_5 != null && $v_kegiatan->activity_6 == null && $v_kegiatan->activity_7 == null && $v_kegiatan->activity_8 == null && $v_kegiatan->activity_9 == null && $v_kegiatan->activity_10 == null && $v_kegiatan->activity_11 == null && $v_kegiatan->activity_12 == null && $v_kegiatan->activity_13 == null && $v_kegiatan->activity_14 == null){ ?>
                                <i class='bx bxs-circle' ></i><?= $v_kegiatan->activity ?><br>
                                <i class='bx bxs-circle' ></i><?= $v_kegiatan->activity_2 ?><br>
                                <i class='bx bxs-circle' ></i><?= $v_kegiatan->activity_3 ?><br>
                                <i class='bx bxs-circle' ></i><?= $v_kegiatan->activity_4 ?><br>
                                <i class='bx bxs-circle' ></i><?= $v_kegiatan->activity_5 ?>
                            <?php }else if($v_kegiatan->activity != null && $v_kegiatan->activity_2 != null && $v_kegiatan->activity_3 != null && $v_kegiatan->activity_4 != null && $v_kegiatan->activity_5 != null && $v_kegiatan->activity_6 != null && $v_kegiatan->activity_7 == null && $v_kegiatan->activity_8 == null && $v_kegiatan->activity_9 == null && $v_kegiatan->activity_10 == null && $v_kegiatan->activity_11 == null && $v_kegiatan->activity_12 == null && $v_kegiatan->activity_13 == null && $v_kegiatan->activity_14 == null){ ?>
                                <i class='bx bxs-circle' ></i><?= $v_kegiatan->activity ?><br>
                                <i class='bx bxs-circle' ></i><?= $v_kegiatan->activity_2 ?><br>
                                <i class='bx bxs-circle' ></i><?= $v_kegiatan->activity_3 ?><br>
                                <i class='bx bxs-circle' ></i><?= $v_kegiatan->activity_4 ?><br>
                                <i class='bx bxs-circle' ></i><?= $v_kegiatan->activity_5 ?><br>
                                <i class='bx bxs-circle' ></i><?= $v_kegiatan->activity_6 ?>
                            <?php }else if($v_kegiatan->activity != null && $v_kegiatan->activity_2 != null && $v_kegiatan->activity_3 != null && $v_kegiatan->activity_4 != null && $v_kegiatan->activity_5 != null && $v_kegiatan->activity_6 != null && $v_kegiatan->activity_7 != null && $v_kegiatan->activity_8 == null && $v_kegiatan->activity_9 == null && $v_kegiatan->activity_10 == null && $v_kegiatan->activity_11 == null && $v_kegiatan->activity_12 == null && $v_kegiatan->activity_13 == null && $v_kegiatan->activity_14 == null){ ?>
                                <i class='bx bxs-circle' ></i><?= $v_kegiatan->activity ?><br>
                                <i class='bx bxs-circle' ></i><?= $v_kegiatan->activity_2 ?><br>
                                <i class='bx bxs-circle' ></i><?= $v_kegiatan->activity_3 ?><br>
                                <i class='bx bxs-circle' ></i><?= $v_kegiatan->activity_4 ?><br>
                                <i class='bx bxs-circle' ></i><?= $v_kegiatan->activity_5 ?><br>
                                <i class='bx bxs-circle' ></i><?= $v_kegiatan->activity_6 ?><br>
                                <i class='bx bxs-circle' ></i><?= $v_kegiatan->activity_7 ?>
                            <?php }else if($v_kegiatan->activity != null && $v_kegiatan->activity_2 != null && $v_kegiatan->activity_3 != null && $v_kegiatan->activity_4 != null && $v_kegiatan->activity_5 != null && $v_kegiatan->activity_6 != null && $v_kegiatan->activity_7 != null && $v_kegiatan->activity_8 != null && $v_kegiatan->activity_9 == null && $v_kegiatan->activity_10 == null && $v_kegiatan->activity_11 == null && $v_kegiatan->activity_12 == null && $v_kegiatan->activity_13 == null && $v_kegiatan->activity_14 == null){ ?>
                                <i class='bx bxs-circle' ></i><?= $v_kegiatan->activity ?><br>
                                <i class='bx bxs-circle' ></i><?= $v_kegiatan->activity_2 ?><br>
                                <i class='bx bxs-circle' ></i><?= $v_kegiatan->activity_3 ?><br>
                                <i class='bx bxs-circle' ></i><?= $v_kegiatan->activity_4 ?><br>
                                <i class='bx bxs-circle' ></i><?= $v_kegiatan->activity_5 ?><br>
                                <i class='bx bxs-circle' ></i><?= $v_kegiatan->activity_6 ?><br>
                                <i class='bx bxs-circle' ></i><?= $v_kegiatan->activity_7 ?><br>
                                <i class='bx bxs-circle' ></i><?= $v_kegiatan->activity_8 ?>
                            <?php }else if($v_kegiatan->activity != null && $v_kegiatan->activity_2 != null && $v_kegiatan->activity_3 != null && $v_kegiatan->activity_4 != null && $v_kegiatan->activity_5 != null && $v_kegiatan->activity_6 != null && $v_kegiatan->activity_7 != null && $v_kegiatan->activity_8 != null && $v_kegiatan->activity_9 != null && $v_kegiatan->activity_10 == null && $v_kegiatan->activity_11 == null && $v_kegiatan->activity_12 == null && $v_kegiatan->activity_13 == null && $v_kegiatan->activity_14 == null){ ?>
                                <i class='bx bxs-circle' ></i><?= $v_kegiatan->activity ?><br>
                                <i class='bx bxs-circle' ></i><?= $v_kegiatan->activity_2 ?><br>
                                <i class='bx bxs-circle' ></i><?= $v_kegiatan->activity_3 ?><br>
                                <i class='bx bxs-circle' ></i><?= $v_kegiatan->activity_4 ?><br>
                                <i class='bx bxs-circle' ></i><?= $v_kegiatan->activity_5 ?><br>
                                <i class='bx bxs-circle' ></i><?= $v_kegiatan->activity_6 ?><br>
                                <i class='bx bxs-circle' ></i><?= $v_kegiatan->activity_7 ?><br>
                                <i class='bx bxs-circle' ></i><?= $v_kegiatan->activity_8 ?><br>
                                <i class='bx bxs-circle' ></i><?= $v_kegiatan->activity_9 ?>
                            <?php }else if($v_kegiatan->activity != null && $v_kegiatan->activity_2 != null && $v_kegiatan->activity_3 != null && $v_kegiatan->activity_4 != null && $v_kegiatan->activity_5 != null && $v_kegiatan->activity_6 != null && $v_kegiatan->activity_7 != null && $v_kegiatan->activity_8 != null && $v_kegiatan->activity_9 != null && $v_kegiatan->activity_10 != null && $v_kegiatan->activity_11 == null && $v_kegiatan->activity_12 == null && $v_kegiatan->activity_13 == null && $v_kegiatan->activity_14 == null){ ?>
                                <i class='bx bxs-circle' ></i><?= $v_kegiatan->activity ?><br>
                                <i class='bx bxs-circle' ></i><?= $v_kegiatan->activity_2 ?><br>
                                <i class='bx bxs-circle' ></i><?= $v_kegiatan->activity_3 ?><br>
                                <i class='bx bxs-circle' ></i><?= $v_kegiatan->activity_4 ?><br>
                                <i class='bx bxs-circle' ></i><?= $v_kegiatan->activity_5 ?><br>
                                <i class='bx bxs-circle' ></i><?= $v_kegiatan->activity_6 ?><br>
                                <i class='bx bxs-circle' ></i><?= $v_kegiatan->activity_7 ?><br>
                                <i class='bx bxs-circle' ></i><?= $v_kegiatan->activity_8 ?><br>
                                <i class='bx bxs-circle' ></i><?= $v_kegiatan->activity_9 ?><br>
                                <i class='bx bxs-circle' ></i><?= $v_kegiatan->activity_10 ?>
                            <?php }else if($v_kegiatan->activity != null && $v_kegiatan->activity_2 != null && $v_kegiatan->activity_3 != null && $v_kegiatan->activity_4 != null && $v_kegiatan->activity_5 != null && $v_kegiatan->activity_6 != null && $v_kegiatan->activity_7 != null && $v_kegiatan->activity_8 != null && $v_kegiatan->activity_9 != null && $v_kegiatan->activity_10 != null && $v_kegiatan->activity_11 != null && $v_kegiatan->activity_12 == null && $v_kegiatan->activity_13 == null && $v_kegiatan->activity_14 == null){ ?>
                                <i class='bx bxs-circle' ></i><?= $v_kegiatan->activity ?><br>
                                <i class='bx bxs-circle' ></i><?= $v_kegiatan->activity_2 ?><br>
                                <i class='bx bxs-circle' ></i><?= $v_kegiatan->activity_3 ?><br>
                                <i class='bx bxs-circle' ></i><?= $v_kegiatan->activity_4 ?><br>
                                <i class='bx bxs-circle' ></i><?= $v_kegiatan->activity_5 ?><br>
                                <i class='bx bxs-circle' ></i><?= $v_kegiatan->activity_6 ?><br>
                                <i class='bx bxs-circle' ></i><?= $v_kegiatan->activity_7 ?><br>
                                <i class='bx bxs-circle' ></i><?= $v_kegiatan->activity_8 ?><br>
                                <i class='bx bxs-circle' ></i><?= $v_kegiatan->activity_9 ?><br>
                                <i class='bx bxs-circle' ></i><?= $v_kegiatan->activity_10 ?><br>
                                <i class='bx bxs-circle' ></i><?= $v_kegiatan->activity_11 ?>
                            <?php }else if($v_kegiatan->activity != null && $v_kegiatan->activity_2 != null && $v_kegiatan->activity_3 != null && $v_kegiatan->activity_4 != null && $v_kegiatan->activity_5 != null && $v_kegiatan->activity_6 != null && $v_kegiatan->activity_7 != null && $v_kegiatan->activity_8 != null && $v_kegiatan->activity_9 != null && $v_kegiatan->activity_10 != null && $v_kegiatan->activity_11 != null && $v_kegiatan->activity_12 != null && $v_kegiatan->activity_13 == null && $v_kegiatan->activity_14 == null){ ?>
                                <i class='bx bxs-circle' ></i><?= $v_kegiatan->activity ?><br>
                                <i class='bx bxs-circle' ></i><?= $v_kegiatan->activity_2 ?><br>
                                <i class='bx bxs-circle' ></i><?= $v_kegiatan->activity_3 ?><br>
                                <i class='bx bxs-circle' ></i><?= $v_kegiatan->activity_4 ?><br>
                                <i class='bx bxs-circle' ></i><?= $v_kegiatan->activity_5 ?><br>
                                <i class='bx bxs-circle' ></i><?= $v_kegiatan->activity_6 ?><br>
                                <i class='bx bxs-circle' ></i><?= $v_kegiatan->activity_7 ?><br>
                                <i class='bx bxs-circle' ></i><?= $v_kegiatan->activity_8 ?><br>
                                <i class='bx bxs-circle' ></i><?= $v_kegiatan->activity_9 ?><br>
                                <i class='bx bxs-circle' ></i><?= $v_kegiatan->activity_10 ?><br>
                                <i class='bx bxs-circle' ></i><?= $v_kegiatan->activity_11 ?><br>
                                <i class='bx bxs-circle' ></i><?= $v_kegiatan->activity_12 ?>
                            <?php }else if($v_kegiatan->activity != null && $v_kegiatan->activity_2 != null && $v_kegiatan->activity_3 != null && $v_kegiatan->activity_4 != null && $v_kegiatan->activity_5 != null && $v_kegiatan->activity_6 != null && $v_kegiatan->activity_7 != null && $v_kegiatan->activity_8 != null && $v_kegiatan->activity_9 != null && $v_kegiatan->activity_10 != null && $v_kegiatan->activity_11 != null && $v_kegiatan->activity_12 != null && $v_kegiatan->activity_13 != null && $v_kegiatan->activity_14 == null){ ?>
                                <i class='bx bxs-circle' ></i><?= $v_kegiatan->activity ?><br>
                                <i class='bx bxs-circle' ></i><?= $v_kegiatan->activity_2 ?><br>
                                <i class='bx bxs-circle' ></i><?= $v_kegiatan->activity_3 ?><br>
                                <i class='bx bxs-circle' ></i><?= $v_kegiatan->activity_4 ?><br>
                                <i class='bx bxs-circle' ></i><?= $v_kegiatan->activity_5 ?><br>
                                <i class='bx bxs-circle' ></i><?= $v_kegiatan->activity_6 ?><br>
                                <i class='bx bxs-circle' ></i><?= $v_kegiatan->activity_7 ?><br>
                                <i class='bx bxs-circle' ></i><?= $v_kegiatan->activity_8 ?><br>
                                <i class='bx bxs-circle' ></i><?= $v_kegiatan->activity_9 ?><br>
                                <i class='bx bxs-circle' ></i><?= $v_kegiatan->activity_10 ?><br>
                                <i class='bx bxs-circle' ></i><?= $v_kegiatan->activity_11 ?><br>
                                <i class='bx bxs-circle' ></i><?= $v_kegiatan->activity_12 ?><br>
                                <i class='bx bxs-circle' ></i><?= $v_kegiatan->activity_13 ?>
                            <?php }else if($v_kegiatan->activity != null && $v_kegiatan->activity_2 != null && $v_kegiatan->activity_3 != null && $v_kegiatan->activity_4 != null && $v_kegiatan->activity_5 != null && $v_kegiatan->activity_6 != null && $v_kegiatan->activity_7 != null && $v_kegiatan->activity_8 != null && $v_kegiatan->activity_9 != null && $v_kegiatan->activity_10 != null && $v_kegiatan->activity_11 != null && $v_kegiatan->activity_12 != null && $v_kegiatan->activity_13 != null && $v_kegiatan->activity_14 != null){ ?>
                                <i class='bx bxs-circle' ></i><?= $v_kegiatan->activity ?><br>
                                <i class='bx bxs-circle' ></i><?= $v_kegiatan->activity_2 ?><br>
                                <i class='bx bxs-circle' ></i><?= $v_kegiatan->activity_3 ?><br>
                                <i class='bx bxs-circle' ></i><?= $v_kegiatan->activity_4 ?><br>
                                <i class='bx bxs-circle' ></i><?= $v_kegiatan->activity_5 ?><br>
                                <i class='bx bxs-circle' ></i><?= $v_kegiatan->activity_6 ?><br>
                                <i class='bx bxs-circle' ></i><?= $v_kegiatan->activity_7 ?><br>
                                <i class='bx bxs-circle' ></i><?= $v_kegiatan->activity_8 ?><br>
                                <i class='bx bxs-circle' ></i><?= $v_kegiatan->activity_9 ?><br>
                                <i class='bx bxs-circle' ></i><?= $v_kegiatan->activity_10 ?><br>
                                <i class='bx bxs-circle' ></i><?= $v_kegiatan->activity_11 ?><br>
                                <i class='bx bxs-circle' ></i><?= $v_kegiatan->activity_12 ?><br>
                                <i class='bx bxs-circle' ></i><?= $v_kegiatan->activity_13 ?><br>
                                <i class='bx bxs-circle' ></i><?= $v_kegiatan->activity_14 ?>
                            <?php } ?>
                        <?php } ?>
                        </div>
                    </div>
                </div>
        </div>
    </div>
</div>