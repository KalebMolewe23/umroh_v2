@extends('template.main')

<style>

    .card-body > h6:hover{
        cursor: pointer;
        background-color: #f5f5f5;
        border-radius: 10px;
    }

    .active-menu{
        background-color: #f5f5f5;
        border-radius: 10px;
    }

    .container{
        min-height: 50%;
    }

    th{
        font-size: 13px
    }

    .copyfield{
        display: flex;
        border-radius: 5px;
    }

    #link{
        width: 100px;
        /* padding: 12px 10px; */
        border: 1px solid #212121;
        background-color: #fff;
        font-size: 15px;
        border: none;
    }

    #copy-btn{
        background-color: black;
        color: #fff;
        padding: 0 20px;
        font-size: 15px;
        cursor: pointer;
    }

    .img-area{
        position: relative;
        width: 100%;
        height: 240px;
        background: var(--gray);
        border-radius: 15px;
        overflow: hidden;
        display: flex;
        justify-content: center;
        align-items: center;
        flex-direction: column;
    }

    .img-area .icon{
        font-size: 100px;
    }

    .img-area h3{
        font-size: 20px;
        font-weight: 500;
        margin-bottom: 6px;
    }

    .img-area p{
        color: #999;
    }

    .img-area p span{
        font-weight: 600;
    }

    .img-area img{
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        object-fit: cover;
        object-position: center;
        z-index: 100;
    }

    .img-area::before{
        content: attr(data-img);
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: rgba(0, 0, 0, .5);
        color: #fff;
        font-weight: 500;
        text-align: center;
        display: flex;
        justify-content: center;
        align-items: center;
        pointer-events: none;
        opacity: 0;
        transition: all .3s ease;
        z-index: 200;
    }

    .img-area.active:hover::before{
        opacity: 1;
    }

    .select-image{
        display: block;
        width: 100%;
        padding: 16px 0;
        border-radius: 15px;
        background: #15baef;
        color: #fff;
        font-weight: 500;
        font-size: 16px;
        border: none;
        cursor: pointer;
        transition: all .3s ease;
    }

    .select-image:hover{
        background: blue;
    }

    .img-area-money{
        position: relative;
        width: 100%;
        height: 240px;
        background: var(--gray);
        border-radius: 15px;
        overflow: hidden;
        display: flex;
        justify-content: center;
        align-items: center;
        flex-direction: column;
    }

    .img-area-money .icon{
        font-size: 100px;
    }

    .img-area-money h3{
        font-size: 20px;
        font-weight: 500;
        margin-bottom: 6px;
    }

    .img-area-money p{
        color: #999;
    }

    .img-area-money p span{
        font-weight: 600;
    }

    .img-area-money img{
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        object-fit: cover;
        object-position: center;
        z-index: 100;
    }

    .img-area-money::before{
        content: attr(data-img);
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: rgba(0, 0, 0, .5);
        color: #fff;
        font-weight: 500;
        text-align: center;
        display: flex;
        justify-content: center;
        align-items: center;
        pointer-events: none;
        opacity: 0;
        transition: all .3s ease;
        z-index: 200;
    }

    .img-area-money.active:hover::before{
        opacity: 1;
    }

    .select-image-money{
        display: block;
        width: 100%;
        padding: 16px 0;
        border-radius: 15px;
        background: #15baef;
        color: #fff;
        font-weight: 500;
        font-size: 16px;
        border: none;
        cursor: pointer;
        transition: all .3s ease;
    }

    .select-image:hover{
        background: blue;
    }

</style>

@section('content')
    <div class="container mt-4 content">
        <div class="row">
            <div class="col-2-profile">
                <div class="card" data-aos="zoom-out-right">
                    <div class="card-body">
                        <h6 class="p-2 menu-list active-menu account-menu"><i class='bx bxs-user-circle'></i> Akun</h6>
                        <h6 class="p-2 menu-list order-menu"><i class='bx bxs-cart-add'></i> Pesanan Saya</h6>
                        <h6 class="p-2 menu-list logout-menu"><i class='bx bx-log-out'></i> Keluar</h6>
                    </div>
                </div>
            </div>
            <div class="col-10-profile">
                <div class="card account-section" data-aos="zoom-out-left">
                    <div class="card-header">
                        <h6 class="card-title mt-2">Ubah Profile</h6>
                    </div>
                    <form action="{{ url('/user_profile/proses_edit_user/'. $id) }}" method="post" enctype="multipart/form-data">
                    @csrf
                        <input class="form-control" type="hidden" name="id" value="<?= $id ?>">
                        <div class="card-body">
                            <div class="row">
                                <div class="col">
                                    <div class="form-group">
                                        <label>Nama Lengkap</label>
                                        
                                        <input class="form-control" name="name" value="<?= $profile->name ?>">
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-group">
                                        <label>No. KTP</label>
                                        <input class="form-control" name="ktp" value="<?= $profile->ktp ?>">
                                    </div>
                                </div>
                            </div><br>
                            <div class="row">
                                <div class="col">
                                    <div class="form-group">
                                        <label>Email</label>
                                        <input class="form-control" maxlength="255" name="email" value="<?= $profile->email ?>" readonly>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-group">
                                        <label>No. Telp</label>
                                        <input class="form-control" maxlength="20" name="phone" value="<?= $profile->ktp ?>">
                                    </div>
                                </div>
                            </div><br>
                            <div class="row">
                                <div class="col">
                                    <div class="form-group">
                                        <label>Nama Ayah Kandung</label>
                                        <input class="form-control" maxlength="200" name="father_name" value="<?= $profile->father_name ?>">
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-group">
                                        <label>Golongan Darah</label>
                                        <select name="blood_groub" class="form-control" required>
                                            <option value="<?= $profile->blood_groub ?>"><?= $profile->blood_groub ?></option>
                                            <option value="A">A</option>
                                            <option value="B">B</option>
                                            <option value="AB">AB</option>
                                            <option value="O">O</option>
                                        </select>
                                    </div>
                                </div>
                            </div><br>
                            <div class="row">
                                <div class="col">
                                    <div class="form-group">
                                        <label>Tempat Lahir</label>
                                        <input class="form-control" maxlength="200" name="born_place" value="<?= $profile->born_place ?>">
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-group">
                                        <label>Tanggal Lahir</label>
                                        <input class="form-control" type="date" name="date_of_birth" value="<?= $profile->date_of_birth ?>">
                                    </div>
                                </div>
                            </div><br>
                            <div class="row">
                                <div class="col">
                                    <div class="form-group">
                                        <label>Status Perkawinan</label>
                                        <select name="marital_status" class="form-control" required>
                                            <option value="<?= $profile->marital_status ?>"><?= $profile->marital_status ?></option>
                                            <option value="Kawin">Kawin</option>
                                            <option value="Belum Kawin">Belum Kawin</option>
                                            <option value="Cerai">Cerai</option>
                                            <option value="Cerai Mari">Cerai Mati</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-group">
                                        <label>Title</label>
                                        <select name="title" class="form-control" required>
                                            <option value="<?= $profile->title ?>"><?= $profile->title ?></option>
                                            <option value="MR">MR</option>
                                            <option value="MRS">MRS</option>
                                        </select>
                                    </div>
                                </div>
                            </div><br>
                            <div class="row">
                                <div class="col">
                                    <div class="form-group">
                                        <label>Jenis Kelamin</label>
                                        <select name="gender" class="form-control" required>
                                            <option value="<?= $profile->gender ?>"><?= $profile->gender ?></option>
                                            <option value="Male">Laki-laki</option>
                                            <option value="Female">Perempuan</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-group">
                                        <label>Kewarganegaraan</label>
                                        <input class="form-control" maxlength="200" name="citizenship" value="<?= $profile->citizenship ?>">
                                    </div>
                                </div>
                            </div><br>
                            <div class="row">
                                <div class="col">
                                    <div class="form-group">
                                        <label>Provinsi</label>
                                        <select name="id_province" id="provinsi" class="form-control" required>
                                            <?php $provinsi = DB::table('provinces')->where('id', $profile->id_province)->first(); ?>
                                            <option value="<?= $provinsi->id ?>"><?= $provinsi->name ?></option>
                                            <?php $provinsi = DB::table('provinces')->get(); ?>
                                            @foreach($provinsi as $v_provinsi)
                                                <option value="<?= $v_provinsi->id ?>"><?= $v_provinsi->name ?></option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-group">
                                        <label>Kota</label>
                                        <select class="form-control" id="kota" name="id_regencies" required>
                                            <?php $kota = DB::table('regencies')->where('id', $profile->id_regencies)->first(); ?>
                                            <option value="<?= $kota->id ?>"><?= $kota->name ?></option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group mt-2">
                                <label>Alamat</label>
                                <input class="form-control" maxlength="200" name="address" value="<?= $profile->address ?>">
                            </div><br>
                            <div class="row">
                                <div class="col">
                                    <div class="form-group">
                                        <label>Pendidikan Terakhir</label>
                                        <input class="form-control" maxlength="200" name="education" value="<?= $profile->education ?>">
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-group">
                                        <label>Kota</label>
                                        <input class="form-control" maxlength="200" name="job" value="<?= $profile->job ?>">
                                    </div>
                                </div>
                            </div><br>
                            <div class="row">
                                <div class="col">
                                    <div class="form-group">
                                        <label>Umroh/Haji</label>
                                        <select name="status_umroh" id="status_umroh" class="form-control" required>
                                            <option value="<?= $profile->status_umroh ?>"><?= $profile->status_umroh ?></option>
                                            <option value="UMROH">Umroh</option>
                                            <option value="HAJI">Haji</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-group">
                                        <label>Nama Passport</label>
                                        <input class="form-control" maxlength="200" name="passport_name" value="<?= $profile->passport_name ?>">
                                    </div>
                                </div>
                            </div><br>
                            <div class="row">
                                <div class="col">
                                    <div class="form-group">
                                        <label>Nomor Passport</label>
                                        <input class="form-control" maxlength="200" name="passport_number" value="<?= $profile->passport_number ?>">
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-group">
                                        <label>Tempat Pembuatan Passport</label>
                                        <input class="form-control" maxlength="200" name="passport_place" value="<?= $profile->passport_place ?>">
                                    </div>
                                </div>
                            </div><br>
                            <div class="row">
                                <div class="col">
                                    <div class="form-group">
                                        <label>Tanggal Pembuatan Passport</label>
                                        <input class="form-control" type="date" name="passport_date" value="<?= $profile->passport_date ?>">
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-group">
                                        <label>Tanggal Habis Masa Berlaku Passport</label>
                                        <input class="form-control" type="date" name="expired" value="<?= $profile->expired ?>">
                                    </div>
                                </div>
                            </div><br>
                            <div class="row">
                                <div class="col">
                                    <div class="form-group">
                                        <label>Penanggung Jawab</label>
                                        <input class="form-control" type="text" name="companion_name" value="<?= $profile->companion_name ?>">
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-group">
                                        <label>Hubungan Penanggung Jawab</label>
                                        <input class="form-control" type="text" name="connection" value="<?= $profile->connection ?>">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group mt-2">
                                <label>Password</label>
                                <input class="form-control" type="password" name="password">
                            </div><br>
                            <div class="form-group mt-2">
                                <button type="submit" class="btn btn-sm text-white btn-block bg-blue"><i
                                        class='bx bxs-memory-card'></i> Simpan</button>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="card order-section" style="display: none" data-aos="zoom-out-right">
                    <div class="card-header">
                        <h6 class="card-title mt-2">Pesanan Saya</h6>
                    </div>
                    <div class="card-body">
                        <ul class="nav nav-tabs" id="myTab" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home" type="button" role="tab" aria-controls="home" aria-selected="true">Belum Bayar</button>
                            </li>

                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="dp-tab" data-bs-toggle="tab" data-bs-target="#dp" type="button" role="tab" aria-controls="dp" aria-selected="false">Berhasil DP</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile" type="button" role="tab" aria-controls="profile" aria-selected="false">Dalam Proses</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#contact" type="button" role="tab" aria-controls="contact" aria-selected="false">Sudah Bayar</button>
                            </li>
                        </ul>
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                <table class="table table-bordered table-striped mt-3">
                                    <thead>
                                        <tr>
                                            <th>Kode</th>
                                            <th>Tipe Kamar</th>
                                            <th>Tipe Hotel</th>
                                            <th>Berangkat Dari</th>
                                            <th>Status</th>
                                            <th style="width:225px">Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($transaction as $item)
                                            <tr>
                                                <td>{{ $item->transaction_code }}</td>
                                                <td>{{ $item->room_type }}</td>
                                                <td>{{ $item->hotel_type }}</td>
                                                <td>{{ $item->departing_from }}</td>
                                                <td>{{ $item->transaction_status }}</td>
                                                <td>
                                                    <div class="row">
                                                        <div class="col">
                                                            <button class="btn btn-sm btn-success pay" data-id="{{ $item->id }}">Bayar</button>
                                                        </div>
                                                        <div class="col">
                                                            <form action="{{ url('/user_profile/batal_order/'.$item->id) }}" method="post" enctype="multipart/form-data">
                                                                @csrf
                                                                <button style="width:130px;height:30px;display:flex;justify-content:center;align-items:center;" type="submit" class="btn btn-danger"><i class='bx bx-x'></i> Batal Order</button>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                            <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                                <table class="table table-bordered table-striped mt-3">
                                    <thead>
                                        <tr>
                                            <th>Kode</th>
                                            <th>Batas Pembayaran</th>
                                            <th>Tipe Kamar</th>
                                            <th>Tipe Hotel</th>
                                            <th>Berangkat Dari</th>
                                            <th>Status</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($transaction_pending as $item_pending)
                                            <tr>
                                                <td>{{ $item_pending->transaction_code }}</td>
                                                <td>{{ $item_pending->due_date }}</td>
                                                <td>{{ $item_pending->room_type }}</td>
                                                <td>{{ $item_pending->hotel_type }}</td>
                                                <td>{{ $item_pending->departing_from }}</td>
                                                <td>{{ $item_pending->transaction_status }}</td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                            <div class="tab-pane fade" id="dp" role="tabpanel" aria-labelledby="dp-tab">
                                <table class="table table-bordered table-striped mt-3">
                                    <thead>
                                        <tr>
                                            <th>Kode</th>
                                            <th>Batas Pembayaran</th>
                                            <th>Tipe Kamar</th>
                                            <th>Tipe Hotel</th>
                                            <th>Berangkat Dari</th>
                                            <th>Nominal DP</th>
                                            <th>Total Kekurangan</th>
                                            <th>Status</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($transaction_dp as $item_dp)
                                            <tr>
                                                <td>{{ $item_dp->transaction_code }}</td>
                                                <td>{{ $item_dp->due_date }}</td>
                                                <td>{{ $item_dp->room_type }}</td>
                                                <td>{{ $item_dp->hotel_type }}</td>
                                                <td>{{ $item_dp->departing_from }}</td>
                                                <td>{{ number_format($item_dp->paymentDetail->payment_amount, 0) }}</td>
                                                <td>{{ number_format($item_dp->grand_total - $item_dp->paymentDetail->payment_amount, 0) }}</td>
                                                <td>{{ $item_dp->transaction_status }}</td>
                                                <td>
                                                    @if ($item_dp->transaction_status == 'menunggu pelunasan')    
                                                        <button class="btn btn-sm btn-success lunasi" data-nominal="{{ $item_dp->grand_total - $item_dp->paymentDetail->payment_amount }}" data-id-transaction="{{ $item_dp->id }}" data-id="{{ $item_dp->paymentDetail->id }}">Lunasi</button>
                                                    @endif
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                            <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
                                <table class="table table-bordered table-striped mt-3">
                                    <thead>
                                        <tr>
                                            <th>Kode</th>
                                            <th>Tipe Kamar</th>
                                            <th>Tipe Hotel</th>
                                            <th>Berangkat Dari</th>
                                            <th>Total Biaya</th>
                                            <th>Status</th>
                                            <th>Rating</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($transaction_sudah_bayar as $item_sudah_bayar)
                                            <tr>
                                                <td>{{ $item_sudah_bayar->transaction_code }}</td>
                                                <td>{{ $item_sudah_bayar->room_type }}</td>
                                                <td>{{ $item_sudah_bayar->hotel_type }}</td>
                                                <td>{{ $item_sudah_bayar->departing_from }}</td>
                                                <td>{{ $item_sudah_bayar->grand_total }}</td>
                                                <td>{{ $item_sudah_bayar->transaction_status }}</td>
                                                <?php
                                                    $data_packets = DB::table('packets')->where('id', $item_sudah_bayar->id_packet)->first();
                                                    $travel = DB::table('informasi_travels')->where('id_user', $data_packets->id_user)->first();
                                                    $rating = DB::table('ratings')->where('id_transaction', $item_sudah_bayar->id)->count();

                                                    if($rating){
                                                ?>
                                                    <td></td>
                                                <?php }else{ ?>
                                                    <td>
                                                        <button class="btn btn-sm btn-primary beri-penilaian-btn" data-id-data-travel="{{ $item_sudah_bayar->id }}" data-id-travel="{{ $travel->id }}" data-id-packet="{{ $travel->travel_name }}" data-bs-toggle="modal" data-bs-target="#staticBackdrop">Beri Penilaian</button>
                                                    </td>
                                                <?php } ?>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div> 
            </div>
        </div>
    </div>

    <!-- Modal penilaian-->
    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <form action="/user_profile/save_rating" method="post" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" value="{{ $id }}" name="id_user">
                    <div class="modal-header" id="modalBodyContent">
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body" >
                        <p>Berikan masukkan terhadap kami disini...</p>
                        <div class="rating">
                            <input type="number" name="rating" hidden>
                            <i class='bx bx-star star' style="--i: 0;"></i>
                            <i class='bx bx-star star' style="--i: 1;"></i>
                            <i class='bx bx-star star' style="--i: 2;"></i>
                            <i class='bx bx-star star' style="--i: 3;"></i>
                            <i class='bx bx-star star' style="--i: 4;"></i>
                        </div>
                        <textarea name="opinion" cols="30" rows="5" placeholder="Tulis Masukkan Untuk Kami"></textarea>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <div class="modal fade" id="paymentMethod" tabindex="-1" role="dialog" aria-labelledby="paymentMethodLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="paymentMethodLabel">Pembayaran</h5>
                    <button type="button" class="btn btn-sm close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-7">
                            <h6>Data Pemesanan</h6>
                            <span>{{ Auth::user()->name }}</span><br>
                            <span>{{ Auth::user()->email }}</span>
                            <hr>
                            <h6>Tipe Pembayaran</h6>
                            <button class="btn pembayaran-dp btn-sm btn-warning text-dark">Pembayaran DP</button>
                            <button class="btn pembayaran-lunas btn-sm btn-success text-light">Pelunasan 100%</button>

                            <!-- Detail DP -->
                            <div class="row mt-2 view-dp" style="display: none">
                                <div class="col">
                                    <span>Transaksi aman, ibadah nyaman. Pembayaran hanya diproses apabila tiket pesawat telah confirm.</span>
                                    <table class="table table-striped table-bordered mt-2">
                                        <thead>
                                            <tr>
                                                <th>Tahapan</th>
                                                <th>Jatuh Tempo</th>
                                                <th>Biaya</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($transaction as $v_item)
                                            <tr>
                                                <td>DP</td>
                                                    <td>{{ $v_item->due_date }}</td>
                                                <td class="price-dp"></td>
                                            </tr>
                                            <tr>
                                                <td>Pelunasan</td>
                                                <td>{{ $v_item->due_date }}</td>
                                                <td class="acumulate-from-dp"></td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                                <small>
                                    Pastikan anda mengecek kembali paket umroh Anda, jika sudah silahkan klik tombol "Ajukan Pembayaran" untuk menuju ke pembayaran.
                                </small>
                                <button style="float: right;display: none" class="btn btn-success btn-sm mt-5 btn-ajukan">Ajukan Pembayaran</button>
                                 <!-- Metode Pembayaran -->
                                 <br><div class="view-metode-pembayaran" style="display:none">
                                    <h6>Pilih Metode Pembayaran</h6>
                                    <button id="pay-button-dp" class="btn btn-primary">Virtual Account</button>
                                    <button class="btn btn-primary pay-mandiri-dp">Pembayaran mandiri</button>
                                </div>
                                <div class="view-mandiri-dp" style="display: none">
                                    <br>
                                    <?php
                                        foreach($transaction as $v_trans){
                                            $packet = DB::table('packets')->where('id', $v_trans->id_packet)->first();
                                            $money = DB::table('money')->where('id_user', $packet->id_user)->first();
                                    ?>
                                        <form action="{{ url('/user_profile/process_transaction_not_paid_dp/'.$v_trans->id) }}" method="post" enctype="multipart/form-data">
                                            @csrf
                                                <input type="hidden" name="id" value="<?= $v_trans->id; ?>">
                                                Rekening : {{ $money->bank_name }}<br>
                                                <div class="copyfield">
                                                    No. Rekening :&nbsp&nbsp 
                                                    <span id="link">{{ $money->number_rek }}</span>
                                                    <span id="copy-btn">Copy</span>
                                                </div>
                                                Atas Nama : {{ $money->owner_rek }}<br>
                                                <input type="file" id="file" class="form-control" name="payment_image" accept="image/*" required>
                                                <div class="img-area" data-img="">
                                                    <i class="bx bxs-cloud-upload icon"></i>
                                                    <h3>Upload Bukti Pembayaran</h3>
                                                    <p>Batas Size Gambar Maksimal <span>2MB</span></p>
                                                </div><br>
                                                <button class="select-image">Pilih Gambar</button>
                                                <br>
                                                <!-- Bukti Pembayaran <br><br> -->
                                                <button type="submit" class="btn btn-success">Bayar</button>
                                        </form>
                                    <?php
                                        }
                                    ?>
                                </div>
                            </div>

                            <!-- Detail Pelunasan 100% -->
                            <div class="row mt-2 view-pelunasan" style="display: none">
                                <div class="col">
                                    <table class="table table-striped table-bordered mt-2">
                                        <thead>
                                            <tr>
                                                <th>Jatuh Tempo</th>
                                                <th>Biaya</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        @foreach ($transaction as $v_item)
                                            <tr>
                                                <td>{{ $v_item->due_date }}</td>
                                                <td class="total-biaya"></td>
                                            </tr>
                                        @endforeach
                                        </tbody>
                                    </table>
                                </div>
                                <small>
                                    Pastikan anda mengecek kembali paket umroh Anda, jika sudah silahkan klik tombol "Ajukan Pembayaran" untuk menuju ke pembayaran.
                                </small>
                                <button style="float: right;display: none" class="btn btn-success btn-sm mt-5 btn-ajukan">Ajukan Pembayaran</button>
                                <!-- Metode Pembayaran -->
                                <br><div class="view-metode-pembayaran" style="display:none">
                                    <h6>Pilih Metode Pembayaran</h6>
                                    <button id="pay-button" class="btn btn-primary">Virtual Account</button>
                                    <button class="btn btn-primary pay-mandiri">Pembayaran mandiri</button>
                                </div>
                                <div class="view-mandiri" style="display: none">
                                    <br>
                                    <?php
                                        foreach($transaction as $v_trans){
                                            $packet = DB::table('packets')->where('id', $v_trans->id_packet)->first();
                                            $money = DB::table('money')->where('id_user', $packet->id_user)->first();
                                    ?>
                                        <form action="{{ url('/user_profile/process_transaction_not_paid/'.$v_trans->id) }}" method="post" enctype="multipart/form-data">
                                            @csrf
                                                <input type="hidden" name="id" value="<?= $v_trans->id; ?>">
                                                Rekening : {{ $money->bank_name }}<br>
                                                <div class="copyfield">
                                                    No. Rekening :&nbsp&nbsp 
                                                    <span id="link">{{ $money->number_rek }}</span>
                                                    <span id="copy-btn">Copy</span>
                                                </div>
                                                Atas Nama : {{ $money->owner_rek }}<br>
                                                <input type="file" id="file-money" class="form-control" name="payment_image" accept="image/*" required>
                                                <div class="img-area-money" data-img="">
                                                    <i class="bx bxs-cloud-upload icon"></i>
                                                    <h3>Upload Bukti Pembayaran</h3>
                                                    <p>Batas Size Gambar Maksimal <span>2MB</span></p>
                                                </div><br>
                                                <button class="select-image-money">Pilih Gambar</button>
                                                <br>
                                                <!-- Bukti Pembayaran <br><br> -->
                                                <button type="submit" class="btn btn-success">Bayar</button>
                                        </form>
                                    <?php
                                        }
                                    ?>
                                </div>
                            </div>
                        </div>
                        <div class="col-5">
                            <h6>Detail Pemesanan</h6>
                            <!-- Detail DP -->
                            <div class="row mt-2">
                                <input type="hidden" class="transaction-id">
                                <input type="hidden" class="grand-total-transaction">
                                <input type="hidden" class="is-dp" value="0">
                                <input type="hidden" class="price-dp-post" value="0">
                                <h5 class="name-packet"></h5>
                                <hr>
                                <div class="area-detail" style="padding-top:-20px;margin-top:-10px;margin-bottom:20px"></div>
                                <hr>
                                <h5>Total Biaya <b class="total-biaya"></b></h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="modal-pembayaran-manual" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <form id="form-pembayaran-manual" enctype="multipart/form-data">
                        <input type="hidden" name="id_transaction" class="id_transaction_post">
                        <input type="file" id="file" class="form-control payment_image" name="payment_image" accept="image/*" hidden required>
                        <div class="img-area" data-img="">
                            <i class="bx bxs-cloud-upload icon"></i>
                            <h3>Upload Bukti Pembayaran</h3>
                            <p>Batas Size Gambar Maksimal <span>2MB</span></p>
                        </div><br>
                        <button class="select-image">Pilih Gambar</button>
                        <br>
                        <!-- Bukti Pembayaran <br><br> -->
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-success">Bayar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('js')

    <script>
        const allStar = document.querySelectorAll('.rating .star')
        const ratingValue = document.querySelector('.rating input')

        allStar.forEach((item, idx)=> {
            item.addEventListener('click', function () {
                let click = 0
                ratingValue.value = idx + 1

                allStar.forEach(i=> {
                    i.classList.replace('bxs-star', 'bx-star')
                    i.classList.remove('active')
                })
                for(let i=0; i<allStar.length; i++) {
                    if(i <= idx) {
                        allStar[i].classList.replace('bx-star', 'bxs-star')
                        allStar[i].classList.add('active')
                    } else {
                        allStar[i].style.setProperty('--i', click)
                        click++
                    }
                }
            })
        })
    </script>

    <script>

        document.addEventListener('DOMContentLoaded', function () {
            var beriPenilaianBtns = document.querySelectorAll('.beri-penilaian-btn');
            var modalBody = document.getElementById('modalBodyContent');

            beriPenilaianBtns.forEach(function (btn) {
                btn.addEventListener('click', function () {
                    var idPacket = this.getAttribute('data-id-packet');
                    var iddataPacket = this.getAttribute('data-id-data-travel');
                    var iddataTravel = this.getAttribute('data-id-travel');
                    var inputElement = document.createElement('input');
                    var inputElementPacket = document.createElement('input');
                    var inputElementTravel = document.createElement('input');
                    inputElement.setAttribute('type', 'hidden');
                    inputElement.setAttribute('name', 'id_transaction');
                    inputElement.setAttribute('value', iddataPacket);
                    inputElement.classList.add('form-control');

                    inputElementPacket.setAttribute('type', 'hidden');
                    inputElementPacket.setAttribute('name', 'id_packet');
                    inputElementPacket.setAttribute('value', iddataPacket);
                    inputElementPacket.classList.add('form-control');
                    
                    inputElementTravel.setAttribute('type', 'hidden');
                    inputElementTravel.setAttribute('name', 'id_travel');
                    inputElementTravel.setAttribute('value', iddataTravel);
                    inputElementTravel.classList.add('form-control');

                    modalBody.innerHTML = '<h3>' + idPacket + '</h3></center>';
                    modalBody.appendChild(inputElement);
                    modalBody.appendChild(inputElementPacket);
                    modalBody.appendChild(inputElementTravel);
                });
            });
        });

        var copybtn = document.getElementById("copy-btn");
        var link = document.getElementById("link");

        $(document).ready(function(){
            copybtn.onclick = function(){
                navigator.clipboard.writeText(link.innerHTML);
                copybtn.innerHTML = "Copied!"
                setTimeout(function (){
                    copybtn.innerHTML = "Copy"
                }, 2000)
            }
        });

        let flag_url = "{{ @$_GET['flag'] }}";
        let response = null;

        $(document).ready(function(){
            if (flag_url == "true") {
                $('.order-menu').trigger('click');
            }
        })

        $('.order-menu').click(function() {
            $('.menu-list').removeClass('active-menu');
            $(this).addClass('active-menu');
            $('.account-section').hide();
            $('.order-section').show();
        });

        $('.account-menu').click(function() {
            $('.menu-list').removeClass('active-menu');
            $(this).addClass('active-menu');
            $('.order-section').hide();
            $('.account-section').show();
        });

        $('.logout-menu').click(function() {
            window.location.href = '/auth_user/logout';
        });

        $('.pay').click(function() {
            let id = $(this).data('id');
            let html = "";

            $('.transaction-id').val(id);

            $.ajax({
                url : "/get-data-transaction/" + id,
                type : "GET",
                success:function(res){
                    console.log(res);
                    $('.name-packet').html(res.data.data_packet.name_packet);
                    let detail = res.data.transaction_detail;

                    response = res;

                    $.each(detail, function(k, v){
                        html += `<div class="card card-body p-2 mt-2">
                                    <span>Total ${v.jamaah_type}</span>
                                    <span>(${v.qty}x) <b>Rp ${formatNumberWithCommas(v.sub_total)}</b></span>
                                </div>`;
                    });

                    $('.total-biaya').html('Rp ' + formatNumberWithCommas(res.data.grand_total));
                    $('.grand-total-transaction').val(res.data.grand_total);
                    $('.area-detail').html(html);
                }
            });
            $('#paymentMethod').modal('show');
        });

        $('#pay-button').click(function() {
            let id = $('.transaction-id').val();
            let grand_total = $('.grand-total-transaction').val();
            let html = "";

            console.log(grand_total);

            $.ajax({
                url : "/execute-payment/",
                type : "POST",
                data : {
                    id : id,
                    grand_total : grand_total,
                    is_dp : $('.is-dp').val(),
                    price_dp : $('.price-dp-post').val()
                },
                success:function(res){
                    window.snap.pay(res.snap, {
                        onSuccess: function(result){
                            window.location.href = '/user_profile?flag=true';
                            alert("payment success!"); console.log(result);
                        },
                        onPending: function(result){
                            alert("wating your payment!"); console.log(result);
                        },
                        onError: function(result){
                            alert("payment failed!"); console.log(result);
                        },
                        onClose: function(){
                            alert('you closed the popup without finishing the payment');
                        }
                    })
                }
            });
        });

        $('#pay-button-dp').click(function() {
            let id = $('.transaction-id').val();
            let grand_total = $('.grand-total-transaction').val();
            let html = "";

            console.log(grand_total);

            $.ajax({
                url : "/execute-payment/",
                type : "POST",
                data : {
                    id : id,
                    grand_total : grand_total,
                    is_dp : $('.is-dp').val(),
                    price_dp : $('.price-dp-post').val()
                },
                success:function(res){
                    window.snap.pay(res.snap, {
                        onSuccess: function(result){
                            window.location.href = '/user_profile?flag=true';
                            alert("payment success!"); console.log(result);
                        },
                        onPending: function(result){
                            alert("wating your payment!"); console.log(result);
                        },
                        onError: function(result){
                            alert("payment failed!"); console.log(result);
                        },
                        onClose: function(){
                            alert('you closed the popup without finishing the payment');
                        }
                    })
                }
            });
        });

        $('.close').click(function() {
            $('#paymentMethod').modal('hide');
        });

        $('.pembayaran-dp').click(function() {
            $('.price-dp').html('Rp ' + formatNumberWithCommas(response.data.data_packet.dp));
            $('.price-dp-post').val(response.data.data_packet.dp);
            $('.acumulate-from-dp').html('Rp ' + formatNumberWithCommas(Number(response.data.grand_total) - Number(response.data.data_packet.dp)));
            $('.view-dp').show();
            $('.is-dp').val(1);
            $('.view-pelunasan').hide();
            $('.btn-ajukan').show();
            $('.view-metode-pembayaran').hide();
        });

        $('.pembayaran-lunas').click(function() {
            $('.view-dp').hide();
            $('.view-pelunasan').show();
            $('.btn-ajukan').show();
            $('.is-dp').val(0);
            $('.view-metode-pembayaran').hide();
        });
        
        $('.pay-mandiri').click(function(){
            $('.view-mandiri').show();
        });

        $('.pay-mandiri-dp').click(function(){
            $('.view-mandiri-dp').show();
        });

        $('.btn-ajukan').click(function(){
            $('.view-metode-pembayaran').show();
            $('.btn-ajukan').hide();
        });

        $('.lunasi').click(function(){
            let id = $(this).data('id');
            let id_transaction = $(this).data('id-transaction');
            let nominal = $(this).data('nominal');
            Swal.fire({
                title: `Lunasi kekurangan sejumlah ${nominal}?`,
                showDenyButton: true,
                showCancelButton: false,
                confirmButtonText: "Virtual Account",
                denyButtonText: `Pembayaran Manual`
            }).then((result) => {
                if (result.isConfirmed) {
                    $.ajax({
                        url : "/pay-off",
                        type : "POST",
                        data : {
                            id : id,
                            id_transaction : id_transaction,
                            grand_total : nominal
                        },
                        success:function(res){
                            window.snap.pay(res.snap, {
                            onSuccess: function(result){
                                window.location.href = '/user_profile?flag=true';
                                alert("payment success!"); console.log(result);
                            },
                            onPending: function(result){
                                alert("wating your payment!"); console.log(result);
                            },
                            onError: function(result){
                                alert("payment failed!"); console.log(result);
                            },
                            onClose: function(){
                                alert('you closed the popup without finishing the payment');
                            }
                        })
                        }
                    })
                } else if (result.isDenied) {
                    $('#modal-pembayaran-manual').modal('show');
                    $('.id_transaction_post').val(id_transaction);
                }
            });
        });

        function formatNumberWithCommas(number) {
            // Format number with commas
            return number.toString().replace(/\B(?=(\d{3})+(?!\d))/g, '.');
        }

        const selectImage = document.querySelector('.select-image');
        const inputFile = document.querySelector('#file');
        const imgArea = document.querySelector('.img-area');

        selectImage.addEventListener('click', function (){
            inputFile.click();
        })

        inputFile.addEventListener('change', function(){
            const image = this.files[0]
            if(image.size < 2000000){
                const reader = new FileReader();
                reader.onload = ()=> {
                    const allImg = imgArea.querySelectorAll('img');
                    allImg.forEach(item=> item.remove());
                    const imgUrl = reader.result;
                    const img = document.createElement('img');
                    img.src = imgUrl;
                    imgArea.appendChild(img);
                    imgArea.classList.add('active');
                    imgArea.dataset.img = image.name;
                }
                reader.readAsDataURL(image);
            } else {
                alert("Maaf ukuran size terlalu besar");
            }
        });

        $('#form-pembayaran-manual').submit(function(e){
            e.preventDefault();

            var formData = new FormData(this);

            $.ajax({
                url: '/data_transaction_paid_dp',
                type: 'POST',
                data: formData,
                contentType: false,
                processData: false,
                success: function(response){
                    console.log(response);
                    window.location.reload(true);
                },
                error: function(xhr, status, error){
                    console.error(xhr.responseText);
                    $('#response').html('Error occurred while uploading the image.');
                }
            });
        });

        const selectImageMoney = document.querySelector('.select-image-money');
        const inputFileMoney = document.querySelector('#file-money');
        const imgAreaMoney = document.querySelector('.img-area-money');

        selectImageMoney.addEventListener('click', function (){
            inputFileMoney.click();
        })

        inputFileMoney.addEventListener('change', function(){
            const image_money = this.files[0]
            if(image_money.size < 2000000){
                const reader = new FileReader();
                reader.onload = ()=> {
                    const allImg_money = imgAreaMoney.querySelectorAll('img');
                    allImg_money.forEach(item=> item.remove());
                    const imgUrl_money = reader.result;
                    const img_money = document.createElement('img');
                    img_money.src = imgUrl_money;
                    imgAreaMoney.appendChild(img_money);
                    imgAreaMoney.classList.add('active');
                    imgAreaMoney.dataset.img_money = image_money.name;
                }
                reader.readAsDataURL(image_money);
            } else {
                alert("Maaf ukuran size terlalu besar");
            }
        });
    </script>
@endpush
