<div class="sidebar close">
    <div class="logo-details">
        <i class='bx bx-user-pin'></i>
        <span class="logo_name">Login Agen</span>
    </div>
    <ul class="nav-links">
        <?php
            $data_user = DB::table('informasi_travels')->where('id_user', $id)->where('is_verifition', 1)->get();
            $count = $data_user->count();

            if($count == 0){
        ?>
        <li>
            <div class="iocn-link">
                <a href="/agen/dashboard">
                    <i class='bx bxs-home'></i>
                    <span class="link_name">Dashboard</span>
                </a>
            </div>
        </li>
        <li>
            <div class="iocn-link">
                <a href="">
                    <i class='bx bxs-cog' ></i>
                    <span class="link_name">Pengaturan</span>
                </a>
                <i class='bx bxs-chevron-down arrow'></i>
            </div>
            <ul class="sub-menu">
                <li><a class="link_name" href="#">Pengaturan</a></li>
                <li><a href="/agen/travel_information">Informasi Travel</a></li>
                <li><a href="/product">Akun</a></li>
            </ul>
        </li>
        <li>
            <div class="profile-details">
                <div class="profile-content">
                    <i class='bx bx-user-pin'></i>
                </div>
                <div class="name-job">
                    <div class="profile_name"></div>
                    <div class="job">
                        <font color='#ffffff'>Log Out</font>
                    </div>
                </div>
                <a href="{{ route('logout_agen') }}"><i class='bx bx-log-out'></i></a>
            </div>
        </li>
        <?php
            }else{
        ?>
        <li>
            <div class="iocn-link">
                <a href="/agen/dashboard">
                    <i class='bx bxs-home'></i>
                    <span class="link_name">Dashboard</span>
                </a>
            </div>
        </li>
        <li>
            <div class="iocn-link">
                <a href="">
                    <i class='bx bxs-plane'></i>
                    <span class="link_name">Tiket Umroh</span>
                </a>
                <i class='bx bxs-chevron-down arrow'></i>
            </div>
            <ul class="sub-menu">
                <li><a class="link_name" href="#">Tiket Umroh</a></li>
                <li><a href="/agen/add_ticket_group">Tambah Tiket Group</a></li>
                <li><a href="/agen/data_ticket_group">Data Tiket Group</a></li>
                <li><a href="/developer">Bursa Tiket</a></li>
            </ul>
        </li>
        <li>
            <div class="iocn-link">
                <a href="">
                    <i class='bx bxs-book-bookmark'></i>
                    <span class="link_name">Paket Umroh</span>
                </a>
                <i class='bx bxs-chevron-down arrow'></i>
            </div>
            <ul class="sub-menu">
                <li><a class="link_name" href="#">Paket Umroh</a></li>
                <li><a href="/agen/add_packet">Tambah Paket</a></li>
                <li><a href="/agen/add_itinerary">Tambah Itinerary</a></li>
                <li><a href="/agen/get_itinerary">Data Itinerary</a></li>
                <li><a href="/agen/data_packet">Data Paket</a></li>
            </ul>
        </li>
        <li>
            <div class="iocn-link">
                <a href="">
                    <i class='bx bxs-cart'></i>
                    <span class="link_name">Pesanan</span>
                </a>
                <i class='bx bxs-chevron-down arrow'></i>
            </div>
            <ul class="sub-menu">
                <li><a class="link_name" href="#">Pesanan</a></li>
                <li><a href="/developer">Tambah Pesanan</a></li>
                <li><a href="/product">Data Pesanan</a></li>
                <li><a href="/price">Penawaran Group</a></li>
            </ul>
        </li>
        <li>
            <div class="iocn-link">
                <a href="">
                    <i class='bx bxs-briefcase'></i>
                    <span class="link_name">Manajemen</span>
                </a>
                <i class='bx bxs-chevron-down arrow'></i>
            </div>
            <ul class="sub-menu">
                <li><a class="link_name" href="#">Manajemen</a></li>
                <li><a href="/agen/add_agen">Tambah Agen</a></li>
                <li><a href="/agen/get_agen">Data Agen</a></li>
                <li><a href="/agen/add_partner_branch">Tambah Cabang</a></li>
                <li><a href="/agen/get_partner_branch">Data Cabang</a></li>
            </ul>
        </li>
        <li>
            <div class="iocn-link">
                <a href="">
                    <i class='bx bxs-wallet'></i>
                    <span class="link_name">Keuangan</span>
                </a>
                <i class='bx bxs-chevron-down arrow'></i>
            </div>
            <ul class="sub-menu">
                <li><a class="link_name" href="#">Keuangan</a></li>
                <li><a href="/developer">Penjualan</a></li>
                <li><a href="/product">Komisi Agen</a></li>
            </ul>
        </li>
        <li>
            <div class="iocn-link">
                <a href="">
                    <i class='bx bxs-cog' ></i>
                    <span class="link_name">Pengaturan</span>
                </a>
                <i class='bx bxs-chevron-down arrow'></i>
            </div>
            <ul class="sub-menu">
                <li><a class="link_name" href="#">Pengaturan</a></li>
                <li><a href="{{ url('/agen/travel_information/'.$id) }}" >Informasi Travel</a></li>
                <li><a href="/product">Akun</a></li>
            </ul>
        </li>
        <li>
            <div class="profile-details">
                <div class="profile-content">
                    <i class='bx bx-user-pin'></i>
                </div>
                <div class="name-job">
                    <div class="profile_name"></div>
                    <div class="job">
                        <font color='#ffffff'>Log Out</font>
                    </div>
                </div>
                <a href="{{ route('logout_agen') }}"><i class='bx bx-log-out'></i></a>
            </div>
        </li>
        <?php
            }
        ?>
        <!-- <li>
            <div class="iocn-link">
                <a href="">
                    <i class='bx bxs-book-content' ></i>
                    <span class="link_name">Ringkasan</span>
                </a>
            </div>
        </li> -->
        <!-- <li>
            <div class="iocn-link">
                <a href="">
                    <i class='bx bx-book-open' ></i>
                    <span class="link_name">Laporan</span>
                </a>
            </div>
        </li> -->
        
    </ul>
</div>
