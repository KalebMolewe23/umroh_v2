<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>

    <title>Informasi Travel</title>
    <meta charset="UTF-8">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <!-- <link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css"> -->
    <link href="https://unpkg.com/gridjs/dist/theme/mermaid.min.css"  rel="stylesheet" />
    <!-- DATATABLES BS 4-->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.23/css/dataTables.bootstrap4.min.css" />
    <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.2.7/css/responsive.bootstrap4.min.css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="https://unpkg.com/gridjs/dist/gridjs.production.min.js"></script>
    <!--<title> Drop Down Sidebar Menu | CodingLab </title>-->
    <link rel="stylesheet" href="{{ asset('/assets/css_admin/style.css') }}">
    <!-- Boxiocns CDN Link -->
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>

    <!-- Library leaflet maps -->
    <link rel="shortcut icon" type="image/x-icon" href="docs/images/favicon.ico" />
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.3/dist/leaflet.css" integrity="sha256-kLaT2GOSpHechhsozzB+flnD+zUyjE2LlfWPgU04xyI=" crossorigin=""/>
    <script src="https://unpkg.com/leaflet@1.9.3/dist/leaflet.js" integrity="sha256-WBkoXOwTeyKclOHuWtc+i2uENFpDZ9YPdf5Hf+D7ewM=" crossorigin=""></script>
    <!-- library google chart -->
    <script src="https://www.gstatic.com/charts/loader.js"></script>

    <!-- Select2 -->
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

    <!-- Datatables -->
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.3/css/jquery.dataTables.min.css">
    <script type="text/javascript" language="javascript" src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css" integrity="sha512-3pIirOrwegjM6erE5gPSwkUzO+3cTjpnV9lexlNZqvupR64iZBnOOTiiLPb9M36zpMScbmUNIcHUqKD47M719g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <?php
        $data_bg = DB::table('cms')->get();
        foreach($data_bg as $v_bg){
            $logo           = $v_bg->logo;
            $name_website   = $v_bg->name_website;
            $bg1            = $v_bg->bg1;
            $bg2            = $v_bg->bg2;
        }
        ?>

    <link rel="icon" type="image/x-icon" href="{{ asset('assets/img/'.$logo) }}">

    <style>
    .sidebar {
        position: fixed;
        top: 0;
        left: 0;
        height: 100%;
        width: 260px;
        background: <?= $bg1 ?>;
        z-index: 100;
        transition: all 0.5s ease;
    }

    .sidebar.close {
        width: 78px;
    }

    .sidebar .logo-details {
        height: 95px;
        width: 100%;
        display: flex;
        align-items: center;
    }

    .sidebar .logo-details i {
        font-size: 30px;
        color: #fff;
        height: 50px;
        min-width: 78px;
        text-align: center;
        line-height: 50px;
    }

    .sidebar .logo-details .logo_name {
        font-size: 22px;
        color: #fff;
        font-weight: 600;
        transition: 0.3s ease;
        transition-delay: 0.1s;
    }

    .sidebar.close .logo-details .logo_name {
        transition-delay: 0s;
        opacity: 0;
        pointer-events: none;
    }

    .sidebar .nav-links {
        height: 100%;
        padding: 30px 0 150px 0;
        overflow: auto;
    }

    .sidebar.close .nav-links {
        overflow: visible;
    }

    .sidebar .nav-links::-webkit-scrollbar {
        display: none;
    }

    .sidebar .nav-links li {
        position: relative;
        list-style: none;
        transition: all 0.4s ease;
    }

    .sidebar .nav-links li:hover {
        background: <?= $bg1 ?>;
    }

    .sidebar .nav-links li .iocn-link {
        display: flex;
        align-items: center;
        justify-content: space-between;
    }

    .sidebar.close .nav-links li .iocn-link {
        display: block
    }

    .sidebar .nav-links li i {
        height: 50px;
        min-width: 78px;
        text-align: center;
        line-height: 50px;
        color: #fff;
        font-size: 20px;
        cursor: pointer;
        transition: all 0.3s ease;
    }

    .sidebar .nav-links li.showMenu i.arrow {
        transform: rotate(-180deg);
    }

    .sidebar.close .nav-links i.arrow {
        display: none;
    }

    .sidebar .nav-links li a {
        display: flex;
        align-items: center;
        text-decoration: none;
    }

    .sidebar .nav-links li a .link_name {
        font-size: 18px;
        font-weight: 400;
        color: #fff;
        transition: all 0.4s ease;
    }

    .sidebar.close .nav-links li a .link_name {
        opacity: 0;
        pointer-events: none;
    }

    .sidebar .nav-links li .sub-menu {
        padding: 6px 6px 14px 80px;
        margin-top: -10px;
        background: <?= $bg1 ?>;
        display: none;
    }

    .sidebar .nav-links li.showMenu .sub-menu {
        display: block;
    }

    .sidebar .nav-links li .sub-menu a {
        color: #fff;
        font-size: 15px;
        padding: 5px 0;
        white-space: nowrap;
        opacity: 0.6;
        transition: all 0.3s ease;
    }

    .sidebar .nav-links li .sub-menu a:hover {
        opacity: 1;
    }

    .sidebar.close .nav-links li .sub-menu {
        position: absolute;
        left: 100%;
        top: -10px;
        margin-top: 0;
        padding: 10px 20px;
        border-radius: 0 6px 6px 0;
        opacity: 0;
        display: block;
        pointer-events: none;
        transition: 0s;
    }

    .sidebar.close .nav-links li:hover .sub-menu {
        top: 0;
        opacity: 1;
        pointer-events: auto;
        transition: all 0.4s ease;
    }

    .sidebar .nav-links li .sub-menu .link_name {
        display: none;
    }

    .sidebar.close .nav-links li .sub-menu .link_name {
        font-size: 18px;
        opacity: 1;
        display: block;
    }

    .sidebar .nav-links li .sub-menu.blank {
        opacity: 1;
        pointer-events: auto;
        padding: 3px 20px 6px 16px;
        opacity: 0;
        pointer-events: none;
    }

    .sidebar .nav-links li:hover .sub-menu.blank {
        top: 50%;
        transform: translateY(-50%);
    }

    .sidebar .profile-details {
        position: fixed;
        bottom: 0;
        width: 260px;
        display: flex;
        align-items: center;
        justify-content: space-between;
        background: <?= $bg1 ?>;
        padding: 12px 0;
        transition: all 0.5s ease;
    }

    .sidebar.close .profile-details {
        background: none;
    }

    .sidebar.close .profile-details {
        width: 78px;
    }

    .sidebar .profile-details .profile-content {
        display: flex;
        align-items: center;
    }

    .sidebar .profile-details img {
        height: 52px;
        width: 52px;
        object-fit: cover;
        border-radius: 16px;
        margin: 0 14px 0 12px;
        background: #7f3e98;
        transition: all 0.5s ease;
    }

    .sidebar.close .profile-details img {
        padding: 10px;
    }

    .sidebar .profile-details .profile_name,
    .sidebar .profile-details .job {
        color: #fff;
        font-size: 18px;
        font-weight: 500;
        white-space: nowrap;
    }

    .sidebar.close .profile-details i,
    .sidebar.close .profile-details .profile_name,
    .sidebar.close .profile-details .job {
        display: none;
    }

    .sidebar .profile-details .job {
        font-size: 12px;
    }
        .preloader {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: 9999;
            background-color: #fff;
        }

        .preloader .loading {
            position: absolute;
            left: 50%;
            top: 50%;
            transform: translate(-50%, -50%);
            font: 14px arial;
        }

        #map { 
            height: 180px; 
        }
    </style>

</head>

<body>
    @include('agen.layout.header')
    <section class="home-section">

        <div class="home-content">
            <i class='bx bx-menu'></i>
            <span class="text"><i class='bx bxs-book-bookmark'></i> Tambah Paket</span>
        </div>

        <main>
            <div class="container-fluid">
                <br>
                <div class="card"><br>
                    <div class="row">
                        <div class="col">
                            1. <a style="color:black;" href="{{ url('/agen/edit_paket/'.$packet->id) }}"><i class='bx bxs-info-circle' ></i> Informasi Paket</a>
                        </div>
                        <div class="col">
                            2. <a style="color:black;" href="{{ url('/agen/edit_hotel/'.$packet->id) }}"><i class='bx bxs-buildings'></i> Hotel</a>
                        </div>
                        <div class="col">
                            3. <a style="color:black;" href="{{ url('/agen/edit_money/'.$packet->id) }}"><i class='bx bx-money' ></i> Harga</a>
                        </div>
                        <div class="col">
                            4. <a style="color:black;" href="{{ url('/agen/edit_fasilitas/'.$packet->id) }}"><i class='bx bxs-hand-up'></i> Fasilitas</a>
                        </div>
                        <div class="col">
                            5. <a style="color:black;" href="{{ url('/agen/edit_condition/'.$packet->id) }}"><i class='bx bx-list-check'></i> Syarat & Ketentuan</a>
                        </div>
                        <div class="col">
                            6. <a style="color:black;" href="{{ url('/agen/edit_photo/'.$packet->id) }}"><i class='bx bxs-camera-movie'></i> Foto & Video</a>
                        </div>
                    </div><br>
                    <form action="{{ url('/agen/proccess_update_packet/'.$packet->id) }}" method="post" enctype="multipart/form-data" id="input_paket">
                        @csrf
                        <input type="hidden" name="id" value="<?= $packet->id; ?>"><br>
                        <input type="hidden" name="id_user" value="<?= $packet->id_user; ?>"><br>
                        <strong>Informasi Paket</strong><br><br>
                        <strong>Nama Paket</strong><br>
                        <input class="travel_input_2" maxlength="50" name="name_packet" type="text" value="<?= $packet->name_packet; ?>" placeholder="Masukkan Nama Paket" required><br><br>
                        <strong>Tiket Group</strong><br>
                        <div class="row">
                            <div class="col">
                                <select class="ticket_option" name="id_ticket" id="maskapai" required>
                                <option value="<?= $packet->id_ticket ?>"><?= $packet->maskapai_code ?></option>
                                    @foreach($tiket as $v_tiket)
                                        <option value="<?= $v_tiket->id ?>" data-penerbangan="<?= $v_tiket->name_maskapai ?>" data-kota_save="<?= $v_tiket->cityName ?>" data-kota="<?= $v_tiket->cityName ?> - <?= $v_tiket->name ?>" data-jadwal="<?= $v_tiket->departure_date ?>" data-seat="<?= $v_tiket->seat_capasitas ?>"><?= $v_tiket->maskapai_code ?></option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col">
                                <select class="ticket_option" name="id_category_packet" id="maskapai" required>
                                    <?php $kategori = DB::table('packets')->join('packet_categories', 'packet_categories.id', '=', 'packets.id_category_packet')->where('packets.id', $packet->id)->first(); ?>
                                    <option value="<?= $kategori->id_category_packet ?>"><?= $kategori->categorie_name ?></option>
                                    @foreach($kategori as $v_kategori)
                                        <option value="<?= $v_kategori->id ?>"><?= $v_kategori->categorie_name ?></option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <br><br>
                        <div class="row">
                            <div class="col">
                                <strong>Maskapai Penerbangan Keberangkatan</strong><br>
                                <input class="travel_input" name="maskapai_name" type="text" placeholder="Maskapai Penerbangan" value="<?= $packet->maskapai_name; ?>" id="penerbangan" required readonly>
                            </div>
                            <div class="col">
                                <strong>Kota Keberangkatan</strong><br>
                                <input class="travel_input" name="departure_city" type="hidden" placeholder="Kota Keberangkatan" value="<?= $packet->departure_city; ?>" id="kota_save" required>
                                <input class="travel_input" type="text" placeholder="Kota Keberangkatan" value="<?= $packet->departure_city; ?>" id="kota" required readonly>
                            </div>
                        </div><br>
                        <div class="row">
                            <div class="col">
                                <strong>Jadwal Keberangkatan</strong><br>
                                <input class="travel_input" name="departure_date" type="text" value="<?= $packet->departure_date; ?>" placeholder="Jadwal Keberangkatan" id="jadwal" required readonly>
                            </div>
                            <div class="col">
                                <strong>Kapasitas Seat</strong><br>
                                <input class="travel_input" name="seat_capasitas" type="text" value="<?= $packet->seat_capasitas; ?>" placeholder="Kapasitas Seat" id="seat" required readonly>
                            </div>
                        </div><br>
                        <div class="row">
                            <div class="col">
                                <strong>Maskapai Penerbangan Kepulangan</strong><br>
                                <select class="ticket_option" name="id_maskapai" id="maskapai" required>
                                    <option value="<?= $packet->id_maskapai; ?>"><?= $packet->name_maskapai; ?></option>
                                    @foreach($maskapai as $v_maskapai)
                                        <option value="<?= $v_maskapai->id ?>"><?= $v_maskapai->name_maskapai ?></option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col">
                                <strong>Set Uang Muka</strong><br>
                                <input class="travel_input" name="dp" type="text" placeholder="Uang Muka" id="dp" value="<?= $packet->dp; ?>" required>
                            </div>
                        </div><br>
                        <div align="right">
                            <button type="submit" class="btn btn-primary"><i class='bx bxs-memory-card'></i> Simpan</button>
                        </div><br>
                    </form>
            </div>
        </main>
        </section>
      
    

    <section class="section-p1">
        <div class="preloader">
            <div class="loading">
                <img src="{{ asset('assets/image/loading.gif'); }}" width="120">
                <p><strong>Harap Tunggu</strong></p>
            </div>
        </div>
    </section>

    @include('agen.layout.footer')
</body>
</html>