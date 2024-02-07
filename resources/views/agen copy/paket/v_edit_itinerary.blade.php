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
            <span class="text"><i class='bx bxs-book-bookmark'></i> Tambah Itinerary</span>
        </div>

        <main>
            <div class="container-fluid">
                <br>
                <div class="card"><br>
                    <form action="{{ url('/agen/procces_update_itinerary/'.$itinerary->id) }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" name="id" value="<?= $itinerary->id; ?>">
                        <input type="hidden" name="id_user" value="<?= $itinerary->id_user; ?>">
                        <strong>Jadwal Perjalanan</strong><br><br>
                        <strong>Pilih Paket Umroh</strong><br>
                        <select class="ticket_option_2" name="id_photo" required>
                            <option value="<?= $itinerary->id_photo ?>"><?= $itinerary->name_packet ?></option>
                            @foreach($data_paket as $v_data_packet)
                                <option value="<?= $v_data_packet->id ?>"><?= $v_data_packet->name_packet ?></option>
                            @endforeach
                        </select><br><br>
                        <strong>Hari Ke-1</strong><br>
                        <input class="travel_input" name="activity" type="text" value="<?= $itinerary->activity ?>" maxlength="255" placeholder="Masukkan Kegiatan Hari Pertama" id="activity" required><br><br>
                        <strong>Hari Ke-2</strong><br>
                        <input class="travel_input" name="activity_2" type="text" value="<?= $itinerary->activity_2 ?>" maxlength="255" placeholder="Masukkan Kegiatan Hari Ke-dua" id="activity"><br><br>
                        <strong>Hari Ke-3</strong><br>
                        <input class="travel_input" name="activity_3" type="text" value="<?= $itinerary->activity_3 ?>" maxlength="255" placeholder="Masukkan Kegiatan Hari Ke-tiga" id="activity"><br><br>
                        <strong>Hari Ke-4</strong><br>
                        <input class="travel_input" name="activity_4" type="text" value="<?= $itinerary->activity_4 ?>" maxlength="255" placeholder="Masukkan Kegiatan Hari Ke-keempat" id="activity"><br><br>
                        <strong>Hari Ke-5</strong><br>
                        <input class="travel_input" name="activity_5" type="text" value="<?= $itinerary->activity_5 ?>" maxlength="255" placeholder="Masukkan Kegiatan Hari Ke-kelima" id="activity"><br><br>
                        <strong>Hari Ke-6</strong><br>
                        <input class="travel_input" name="activity_6" type="text" value="<?= $itinerary->activity_6 ?>" maxlength="255" placeholder="Masukkan Kegiatan Hari Ke-keenam" id="activity"><br><br>
                        <strong>Hari Ke-7</strong><br>
                        <input class="travel_input" name="activity_7" type="text" value="<?= $itinerary->activity_7 ?>" maxlength="255" placeholder="Masukkan Kegiatan Hari Ke-ketujuh" id="activity"><br><br>
                        <strong>Hari Ke-8</strong><br>
                        <input class="travel_input" name="activity_8" type="text" value="<?= $itinerary->activity_8 ?>" maxlength="255" placeholder="Masukkan Kegiatan Hari Ke-delapan" id="activity"><br><br>
                        <strong>Hari Ke-9</strong><br>
                        <input class="travel_input" name="activity_9" type="text" value="<?= $itinerary->activity_9 ?>" maxlength="255" placeholder="Masukkan Kegiatan Hari Ke-sembilan" id="activity"><br><br>
                        <button type="button" class="btn btn-primary" onclick="button_activity()" id="button_paket_activity"><i class='bx bx-plus'></i> Tambah Kegiatan</button>
                        <div id="activity_10">
                            <strong>Hari Ke-10</strong><br>
                            <input class="travel_input" name="activity_10" type="text" value="<?= $itinerary->activity_10 ?>" maxlength="255" placeholder="Masukkan Kegiatan Hari Ke-sembilan" id="activity"><br><br>
                            <button type="button" class="btn btn-primary" onclick="button_activity_10()" id="button_paket_activity_10"><i class='bx bx-plus'></i> Tambah Kegiatan</button>
                        </div>                
                        <div id="activity_11">
                            <strong>Hari Ke-11</strong><br>
                            <input class="travel_input" name="activity_11" type="text" value="<?= $itinerary->activity_11 ?>" maxlength="255" placeholder="Masukkan Kegiatan Hari Ke-sembilan" id="activity"><br><br>
                            <button type="button" class="btn btn-primary" onclick="button_activity_11()" id="button_paket_activity_11"><i class='bx bx-plus'></i> Tambah Kegiatan</button>
                        </div>                
                        <div id="activity_12">
                            <strong>Hari Ke-12</strong><br>
                            <input class="travel_input" name="activity_12" type="text" value="<?= $itinerary->activity_12 ?>" maxlength="255" placeholder="Masukkan Kegiatan Hari Ke-sembilan" id="activity"><br><br>
                            <button type="button" class="btn btn-primary" onclick="button_activity_12()" id="button_paket_activity_12"><i class='bx bx-plus'></i> Tambah Kegiatan</button>
                        </div>                
                        <div id="activity_13">
                            <strong>Hari Ke-13</strong><br>
                            <input class="travel_input" name="activity_13" type="text" value="<?= $itinerary->activity_13 ?>" maxlength="255" placeholder="Masukkan Kegiatan Hari Ke-sembilan" id="activity"><br><br>
                            <button type="button" class="btn btn-primary" onclick="button_activity_13()" id="button_paket_activity_13"><i class='bx bx-plus'></i> Tambah Kegiatan</button>
                        </div>                
                        <div id="activity_14">
                            <strong>Hari Ke-14</strong><br>
                            <input class="travel_input" name="activity_14" type="text" value="<?= $itinerary->activity_14 ?>" maxlength="255" placeholder="Masukkan Kegiatan Hari Ke-sembilan" id="activity"><br><br>
                        </div>                
                <br><br></div><br>
                <div align="right">
                    <button type="submit" class="btn btn-primary"><i class='bx bxs-memory-card'></i> Selanjutnya</button>
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