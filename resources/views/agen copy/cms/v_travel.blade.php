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
        <span class="text"><i class='bx bxs-cog' ></i> Informasi Travel</span>
      </div>

      <main>
        <div class="container-fluid">
        <br>
            <?php if($information->is_verifition == 0){ ?>
                <div class="card"><br>
                    <strong>Ikuti langkah berikut untuk mengaktifkan akun Anda</strong><br>
                    <div class="row">
                        <div class="col">
                            1. <i class='bx bx-id-card'></i> Melengkapi Profil Travel
                        </div>
                        <div class="col">
                            2. <i class='bx bxs-user-circle' ></i> Data Penanggung Jawab
                        </div>
                        <div class="col">
                            3. <i class='bx bx-money' ></i> Data Keuangan
                        </div>
                        <div class="col">
                            4. <i class='bx bxs-check-square' ></i> Verifikasi Akun
                        </div>
                    </div><br>
                </div><br>

                <?php
                    $data_user = DB::table('informasi_travels')->where('id_user', $id)->get();
                    $count = $data_user->count();

                    if($count == 0){
                ?>

                <form action="/agen/proses_save_travel" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="card"><br>
                        <strong>Lengkapi Data Profil Travel Anda</strong><br>
                        <strong>Logo</strong>
                        <input type="hidden" name="id_user" value="<?= $id; ?>">
                        <div class="row">
                            <div class="col">
                                <img class="main-logo" src="{!! asset('assets/img/default.png') !!}" width="60px" alt="" />
                            </div>
                            <div class="col">
                                <p>Ekstensi file yang diperbolehkan: .JPG .JPEG .PNG</p>
                                <input type="file" name="image" required>
                            </div>
                            <div class="col">
                            </div>
                        </div><br><br>
                        <strong>Profile Travel</strong>
                        <p>Informasi profil travel umroh kamu. Meliputi logo, nama travel, nama PT, nomor PPIU, alamat kantor,dsb</p><br>
                        <div class="row">
                            <div class="col">
                                <strong>Nama Travel</strong><br>
                                <input class="travel_input" name="travel_name" type="text" placeholder="Masukkan Nama Travel" required>
                            </div>
                            <div class="col">
                                <strong>Nama Perusahaan (Nama PT)</strong><br>
                                <input class="travel_input" name="employee_name" type="text" placeholder="Masukkan Nama Perusahaan (Nama PT)" required>
                            </div>
                        </div><br>
                        <div class="row">
                            <div class="col">
                                <strong>Nomor Ijin Umroh</strong><br>
                                <input class="travel_input" name="number_umroh" type="text" placeholder="Masukkan Nomor Ijin Umroh" required>
                            </div>
                            <div class="col">
                                <strong>Nomor Ijin Haji (Opsional)</strong><br>
                                <input class="travel_input" name="number_haji" type="text" placeholder="Masukkan Ijin Haji (Opsional)">
                            </div>
                        </div><br>
                        <div class="row">
                            <div class="col">
                                <strong>Provinsi</strong><br>
                                <select class="travel_option" id="provinsi" name="id_province" required>
                                    <option value="">Pilih Provinsi</option>
                                    @foreach($provinsi as $v_provinsi)
                                        <option value="<?= $v_provinsi->id ?>"><?= $v_provinsi->name ?></option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col">
                                <strong>Daerah / Kota / Kabupaten</strong><br>
                                <select class="travel_option" id="kota" name="id_regencies" required>
                                </select>
                            </div>
                        </div><br>
                        <strong>Alamat Lengkap</strong>
                        <input class="travel_input_2" name="address" type="text" placeholder="Masukkan Nama Jalan, Gedung, Nomor Rumah, Dan Lainnya" required><br>
                        <strong>Email Travel</strong>
                        <input class="travel_input" name="email" type="email" placeholder="iniemailanda@gmail.com" required><br>
                        <div align="right">
                            <button type="submit" class="btn btn-primary"><i class='bx bxs-memory-card'></i> Selanjutnya</button>
                        </div><br>
                    </div><br><br><br>
                </form>

                <?php }else{ 
                        $data_travel = DB::table('informasi_travels')->where('id_user', $id)->get();

                        foreach($data_travel as $v_travel){
                            $id_travel          = $v_travel->id;
                            $id_province        = $v_travel->id_province;
                            $id_regencies       = $v_travel->id_regencies;
                            $id_user            = $v_travel->id_user;
                            $travel_name        = $v_travel->travel_name;
                            $image              = $v_travel->image;
                            $employee_name      = $v_travel->employee_name;
                            $number_umroh       = $v_travel->number_umroh;
                            $number_haji        = $v_travel->number_haji;
                            $address            = $v_travel->address;
                            $email              = $v_travel->email;
                        }
                    ?>
                    
                    <form action="{{ url('/agen/proses_update_travel/'.$id_travel) }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="card"><br>
                        <strong>Lengkapi Data Profil Travel Anda</strong><br>
                        <strong>Logo</strong>
                        <input type="hidden" name="id" value="<?= $id_travel; ?>">
                        <input type="hidden" name="id_user" value="<?= $id_user; ?>">
                        <div class="row">
                            <div class="col">
                                <img class="main-logo" src="{!! asset('assets/img/default.png') !!}" width="60px" alt="" />
                            </div>
                            <div class="col">
                                <p>Ekstensi file yang diperbolehkan: .JPG .JPEG .PNG</p>
                                <input type="file" name="image">
                            </div>
                            <div class="col">
                            </div>
                        </div><br><br>
                        <strong>Profile Travel</strong>
                        <p>Informasi profil travel umroh kamu. Meliputi logo, nama travel, nama PT, nomor PPIU, alamat kantor,dsb</p><br>
                        <div class="row">
                            <div class="col">
                                <strong>Nama Travel</strong><br>
                                <input class="travel_input" name="travel_name" type="text" placeholder="Masukkan Nama Travel" value="<?= $travel_name ?>" required>
                            </div>
                            <div class="col">
                                <strong>Nama Perusahaan (Nama PT)</strong><br>
                                <input class="travel_input" name="employee_name" type="text" placeholder="Masukkan Nama Perusahaan (Nama PT)" value="<?= $employee_name ?>" required>
                            </div>
                        </div><br>
                        <div class="row">
                            <div class="col">
                                <strong>Nomor Ijin Umroh</strong><br>
                                <input class="travel_input" name="number_umroh" type="text" placeholder="Masukkan Nomor Ijin Umroh" value="<?= $number_umroh ?>" required>
                            </div>
                            <div class="col">
                                <strong>Nomor Ijin Haji (Opsional)</strong><br>
                                <input class="travel_input" name="number_haji" type="text" placeholder="Masukkan Ijin Haji (Opsional)" value="<?= $number_haji ?>">
                            </div>
                        </div><br>
                        <div class="row">
                            <div class="col">
                                <strong>Provinsi</strong><br>
                                <select class="travel_option" id="provinsi" name="id_province" required>
                                    <option value="">Pilih Provinsi</option>
                                    @foreach($provinsi as $v_provinsi)
                                        <option value="<?= $v_provinsi->id ?>"><?= $v_provinsi->name ?></option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col">
                                <strong>Daerah / Kota / Kabupaten</strong><br>
                                <select class="travel_option" id="kota" name="id_regencies" required>
                                </select>
                            </div>
                        </div><br>
                        <strong>Alamat Lengkap</strong>
                        <input class="travel_input" name="address" type="text" placeholder="Masukkan Nama Jalan, Gedung, Nomor Rumah, Dan Lainnya" value="<?= $address ?>" required><br>
                        <strong>Email Travel</strong>
                        <input class="travel_input" name="email" type="email" placeholder="iniemailanda@gmail.com" value="<?= $email ?>" required><br>
                        <div align="right">
                            <button type="submit" class="btn btn-primary"><i class='bx bxs-memory-card'></i> Selanjutnya</button>
                        </div><br>
                    </div>                
                    <br><br><br>
                </form>
                
                <?php } ?>
            <?php }else{ ?>
                <div class="card"><br>
                    <strong>Ikuti langkah berikut untuk mengaktifkan akun Anda</strong><br>
                    <div class="row">
                        <div class="col">
                            1. <a style="color:black" href="{{ url('/agen/travel_information/'.$information->id_user) }}"><i class='bx bx-id-card'></i> Melengkapi Profil Travel</a>
                        </div>
                        <div class="col">
                            2. <a style="color:black" href="{{ url('/agen/person_responsible/'.$information->id_user) }}"><i class='bx bxs-user-circle' ></i> Data Penanggung Jawab</a>
                        </div>
                        <div class="col">
                            3. <a style="color:black" href="{{ url('/agen/money/'.$information->id_user) }}"><i class='bx bx-money' ></i> Data Keuangan</a>
                        </div>
                    </div><br>
                </div><br>

                    <form action="{{ url('/agen/proses_update_travel/'.$information->id) }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="card"><br>
                        <strong>Lengkapi Data Profil Travel Anda</strong><br>
                        <strong>Logo</strong>
                        <input type="hidden" name="id" value="<?= $information->id; ?>">
                        <input type="hidden" name="id_user" value="<?= $information->id_user; ?>">
                        <div class="row">
                            <div class="col">
                                <img class="main-logo" src="{!! asset('assets/image_travel/'.$information->image) !!}" width="60px" alt="" />
                            </div>
                            <div class="col">
                                <p>Ekstensi file yang diperbolehkan: .JPG .JPEG .PNG</p>
                                <input type="file" name="image">
                            </div>
                            <div class="col">
                            </div>
                        </div><br><br>
                        <strong>Profile Travel</strong>
                        <p>Informasi profil travel umroh kamu. Meliputi logo, nama travel, nama PT, nomor PPIU, alamat kantor,dsb</p><br>
                        <div class="row">
                            <div class="col">
                                <strong>Nama Travel</strong><br>
                                <input class="travel_input" name="travel_name" type="text" placeholder="Masukkan Nama Travel" value="<?= $information->travel_name ?>" required>
                            </div>
                            <div class="col">
                                <strong>Nama Perusahaan (Nama PT)</strong><br>
                                <input class="travel_input" name="employee_name" type="text" placeholder="Masukkan Nama Perusahaan (Nama PT)" value="<?= $information->employee_name ?>" required>
                            </div>
                        </div><br>
                        <div class="row">
                            <div class="col">
                                <strong>Nomor Ijin Umroh</strong><br>
                                <input class="travel_input" name="number_umroh" type="text" placeholder="Masukkan Nomor Ijin Umroh" value="<?= $information->number_umroh ?>" required>
                            </div>
                            <div class="col">
                                <strong>Nomor Ijin Haji (Opsional)</strong><br>
                                <input class="travel_input" name="number_haji" type="text" placeholder="Masukkan Ijin Haji (Opsional)" value="<?= $information->number_haji ?>">
                            </div>
                        </div><br>
                        <div class="row">
                            <div class="col">
                                <strong>Provinsi</strong><br>
                                <select class="travel_option" id="provinsi" name="id_province" required>
                                    <?php $data_provinsi = DB::table('provinces')->where('id', $information->id_province)->first(); ?>
                                    <option value="<?= $data_provinsi->id ?>"><?= $data_provinsi->name ?></option>
                                    @foreach($provinsi as $v_provinsi)
                                        <option value="<?= $v_provinsi->id ?>"><?= $v_provinsi->name ?></option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col">
                                <strong>Daerah / Kota / Kabupaten</strong><br>
                                <select class="travel_option" id="kota" name="id_regencies" required>
                                    <?php $regencies = DB::table('regencies')->where('id', $information->id_regencies)->first(); ?>
                                    <option value="<?= $regencies->id ?>"><?= $regencies->name ?></option>
                                </select>
                            </div>
                        </div><br>
                        <strong>Alamat Lengkap</strong>
                        <input class="travel_input" name="address" type="text" placeholder="Masukkan Nama Jalan, Gedung, Nomor Rumah, Dan Lainnya" value="<?= $information->address ?>" required><br>
                        <strong>Email Travel</strong>
                        <input class="travel_input" name="email" type="email" placeholder="iniemailanda@gmail.com" value="<?= $information->email ?>" required><br>
                        <div align="right">
                            <button type="submit" class="btn btn-primary"><i class='bx bxs-memory-card'></i> Simpan</button>
                        </div><br>
                    </div>                
                    <br><br><br>
                </form>
                
            <?php 
                }
            ?>

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