<button type="button" class="btn btn-success" data-toggle="modal" data-target="#exampleModal{{ $id }}">
    Edit
</button>
<form class="d-inline" action="{{ url('/admin/delete_hotel_jeddah/'.$id) }}" method="post">
    @csrf
    @method('DELETE')
    <button style="height:40px;" type="submit" name="submit" class="btn btn-danger btn-sm">Hapus</button>
</form>

<?php $hotel = DB::table('list_hotels')->where('id', $id)->first(); ?>

<div class="modal fade" id="exampleModal{{ $id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Edit Hotel Jeddah</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="{{ url('/admin/proses_update_hotel_jeddah/'.$hotel->id) }}" method="post" enctype="multipart/form-data">
            @csrf
                <input type="hidden" name="id" value="{{ $hotel->id }} ">
                <input type="hidden" name="id_area" value="{{ $hotel->id_area }}">
                <div class="modal-body">
                    <div class="row">
                        <div class="col">
                            <label>Nama Hotel</label>
                            <input class="form-control" name="name_hotel" type="text" maxlength="255" placeholder="Masukkan Nama Hotel" id="name_hotel" value="{{ $hotel->name_hotel }}" required><br>
                        </div>
                        <div class="col">
                            <label>Alamat Hotel</label>
                            <input class="form-control" name="address" type="text" maxlength="255" placeholder="Masukkan Alamat Hotel" id="address" value="{{ $hotel->address }}" required><br>
                        </div>
                    </div>                                            
                    <div class="row">
                        <div class="col">
                            <label>Gambar 1</label><br>
                            <img src="{{ asset('assets/images/'.$hotel->img_1); }}" style="width:100px;border-radius:10px"><br><br>
                            <input class="form-control" name="img_1" type="file" maxlength="255" id="img_1"><br>
                        </div>
                        <div class="col">
                            <label>Gambar 2</label><br>
                            <img src="{{ asset('assets/images/'.$hotel->img_2); }}" style="width:100px;border-radius:10px"><br><br>
                            <input class="form-control" name="img_2" type="file" maxlength="255" id="img_2"><br>
                        </div>
                    </div>                                            
                    <div class="row">
                        <div class="col">
                            <label>Gambar 3</label><br>
                            <img src="{{ asset('assets/images/'.$hotel->img_3); }}" style="width:100px;border-radius:10px"><br><br>
                            <input class="form-control" name="img_3" type="file" maxlength="255" id="img_3"><br>
                        </div>
                        <div class="col">
                            <label>Gambar 4</label><br>
                            <img src="{{ asset('assets/images/'.$hotel->img_4); }}" style="width:100px;border-radius:10px"><br><br>
                            <input class="form-control" name="img_4" type="file" maxlength="255" id="img_4"><br>
                        </div>
                    </div>
                    <select class="form-control" name="star">
                        <?php if($hotel->star == 3){ ?>
                            <option value="{{ $hotel->star }}">Bintang 3</option>
                        <?php }else if($hotel->star == 4){ ?>
                            <option value="{{ $hotel->star }}">Bintang 4</option>
                        <?php }else if($hotel->star == 5){ ?>
                            <option value="{{ $hotel->star }}">Bintang 5</option>
                        <?php } ?>
                        <option value="3">Bintang 3</option>
                        <option value="4">Bintang 4</option>
                        <option value="5">Bintang 5</option>
                    </select>
                </div>
                <div class="modal-footer">
                <button type="submit" class="btn btn-primary"><i class='bx bxs-memory-card'></i> Simpan</button>
                </div>
            </form>
        </div>
    </div>
</div>