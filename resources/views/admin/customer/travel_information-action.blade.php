<?php $status = DB::table('informasi_travels')->select('informasi_travels.id as id', 'travel_name', 'provinces.name as province_name', 'regencies.name as regencies_name', 'employee_name', 'image', 'number_umroh', 'address', 'email', 'is_verifition', 'id_user')->join('provinces', 'provinces.id', '=', 'informasi_travels.id_province')->join('regencies', 'regencies.id', '=', 'informasi_travels.id_regencies')->where('informasi_travels.id', $id)->first(); ?>
<?php if($status->is_verifition == 0) {?>
    <form class="d-inline" action="{{ url('/admin/active_travel/'.$id) }}" method="post">
    @csrf
    <button style="height:40px;" type="submit" name="submit" class="btn btn-danger btn-sm"><i class='bx bx-x' ></i>Not Active</button>
</form>
<?php }else if($status->is_verifition == 1){ ?>
    <form class="d-inline" action="{{ url('/admin/not_active_travel/'.$id) }}" method="post">
        @csrf
        <button style="height:40px;" type="submit" name="submit" class="btn btn-success btn-sm"><i class='bx bx-check' ></i>Active</button>
    </form>
    <!-- <a href="{{ url('/admin/not_active_travel/'.$id) }}" data-toggle="tooltip" data-original-title="NotActive" class="edit btn btn-danger edit"><i class='bx bx-check' ></i>Not Active</a> -->
<?php } ?>
    <!-- <button style="height:40px;" type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#exampleModal"><i class='bx bxs-info-circle' ></i>Information</button> -->

    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal{{ $id }}">
        <i class='bx bxs-info-circle' ></i> Information
    </button>

    <div class="modal fade" id="exampleModal{{ $id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Data Travel</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <!-- Isi modal di sini -->
                <h4>Informasi Travel</h4><br>
                <p>Nama Travel : <?= $status->travel_name ?></p>
                <p>Nama Perusahaan : <?= $status->employee_name ?></p>
                <p>Logo Travel : <img src="{{ asset('assets/image_travel/'.$status->image) }}" style="width:100px;"></p>
                <p>Izin Umroh : <?= $status->number_umroh ?></p>
                <p>Alamat : <?= $status->address ?></p>
                <p>Provinsi : <?= $status->province_name ?></p>
                <p>Kota : <?= $status->regencies_name ?></p>
                <p>Email : <?= $status->email ?></p><br>
      
                <?php $data_regencies = DB::table('responsibles')->where('id_user', $status->id_user)->first(); ?>

                <h4>Penanggung Jawab</h4><br>
                <p>Nama Penanggung Jawab : <?= $data_regencies->name_responsibles ?></p>
                <p>Posisi : <?= $data_regencies->role_responsibles ?></p>
                <p>KTP : <?= $data_regencies->ktp ?></p>
                <p>NPWP : <?= $data_regencies->npwp ?></p>
                <p>Email : <?= $data_regencies->email ?></p>
                <p>No. Telp : <?= $data_regencies->phone ?></p>

                <?php $data_bank = DB::table('money')->where('id_user', $status->id_user)->first(); ?>

                <h4>Data Keuangan</h4><br>
                <p>Nama Bank : <?= $data_bank->bank_name ?></p>
                <p>Nomor Rekening : <?= $data_bank->number_rek ?></p>
                <p>Atas Nama : <?= $data_bank->owner_rek ?></p>
                <p>Komisi : Rp. <?= number_format($data_bank->commision) ?></p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal"><i class='bx bx-x' ></i> Close</button>
                <!-- <a href="{{ url('/admin/print_travel/'.$id) }}" class="btn btn-secondary"><i class='bx bxs-printer' ></i> Print</a> -->
                <!-- Tombol atau aksi lain di sini -->
            </div>
        </div>
    </div>
</div>