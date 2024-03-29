@include('agen.layout.header')
<?php
    $data_bg = DB::table('cms')->get();
    foreach($data_bg as $v_bg){
        $logo           = $v_bg->logo;
        $name_website   = $v_bg->name_website;
        $bg1            = $v_bg->bg1;
        $bg2            = $v_bg->bg2;
    }
?>
    <!-- Layout wrapper -->
    <div class="layout-wrapper layout-content-navbar">
        <div class="layout-container">
        <!-- Menu -->
            <aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
                <div class="app-brand demo">
                    <a href="/agen/dashboard" class="app-brand-link">
                    <span class="app-brand-logo demo">
                        <img src="{{ asset('assets/img/'.$logo) }}" style="width:100px;margin-left:-30px">
                        <defs>
                            <path
                            d="M13.7918663,0.358365126 L3.39788168,7.44174259 C0.566865006,9.69408886 -0.379795268,12.4788597 0.557900856,15.7960551 C0.68998853,16.2305145 1.09562888,17.7872135 3.12357076,19.2293357 C3.8146334,19.7207684 5.32369333,20.3834223 7.65075054,21.2172976 L7.59773219,21.2525164 L2.63468769,24.5493413 C0.445452254,26.3002124 0.0884951797,28.5083815 1.56381646,31.1738486 C2.83770406,32.8170431 5.20850219,33.2640127 7.09180128,32.5391577 C8.347334,32.0559211 11.4559176,30.0011079 16.4175519,26.3747182 C18.0338572,24.4997857 18.6973423,22.4544883 18.4080071,20.2388261 C17.963753,17.5346866 16.1776345,15.5799961 13.0496516,14.3747546 L10.9194936,13.4715819 L18.6192054,7.984237 L13.7918663,0.358365126 Z"
                            id="path-1"
                            ></path>
                            <path
                            d="M5.47320593,6.00457225 C4.05321814,8.216144 4.36334763,10.0722806 6.40359441,11.5729822 C8.61520715,12.571656 10.0999176,13.2171421 10.8577257,13.5094407 L15.5088241,14.433041 L18.6192054,7.984237 C15.5364148,3.11535317 13.9273018,0.573395879 13.7918663,0.358365126 C13.5790555,0.511491653 10.8061687,2.3935607 5.47320593,6.00457225 Z"
                            id="path-3"
                            ></path>
                            <path
                            d="M7.50063644,21.2294429 L12.3234468,23.3159332 C14.1688022,24.7579751 14.397098,26.4880487 13.008334,28.506154 C11.6195701,30.5242593 10.3099883,31.790241 9.07958868,32.3040991 C5.78142938,33.4346997 4.13234973,34 4.13234973,34 C4.13234973,34 2.75489982,33.0538207 2.37032616e-14,31.1614621 C-0.55822714,27.8186216 -0.55822714,26.0572515 -4.05231404e-15,25.8773518 C0.83734071,25.6075023 2.77988457,22.8248993 3.3049379,22.52991 C3.65497346,22.3332504 5.05353963,21.8997614 7.50063644,21.2294429 Z"
                            id="path-4"
                            ></path>
                            <path
                            d="M20.6,7.13333333 L25.6,13.8 C26.2627417,14.6836556 26.0836556,15.9372583 25.2,16.6 C24.8538077,16.8596443 24.4327404,17 24,17 L14,17 C12.8954305,17 12,16.1045695 12,15 C12,14.5672596 12.1403557,14.1461923 12.4,13.8 L17.4,7.13333333 C18.0627417,6.24967773 19.3163444,6.07059163 20.2,6.73333333 C20.3516113,6.84704183 20.4862915,6.981722 20.6,7.13333333 Z"
                            id="path-5"
                            ></path>
                        </defs>
                        <g id="g-app-brand" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                            <g id="Brand-Logo" transform="translate(-27.000000, -15.000000)">
                            <g id="Icon" transform="translate(27.000000, 15.000000)">
                                <g id="Mask" transform="translate(0.000000, 8.000000)">
                                <mask id="mask-2" fill="white">
                                    <use xlink:href="#path-1"></use>
                                </mask>
                                <use fill="#696cff" xlink:href="#path-1"></use>
                                <g id="Path-3" mask="url(#mask-2)">
                                    <use fill="#696cff" xlink:href="#path-3"></use>
                                    <use fill-opacity="0.2" fill="#FFFFFF" xlink:href="#path-3"></use>
                                </g>
                                <g id="Path-4" mask="url(#mask-2)">
                                    <use fill="#696cff" xlink:href="#path-4"></use>
                                    <use fill-opacity="0.2" fill="#FFFFFF" xlink:href="#path-4"></use>
                                </g>
                                </g>
                                <g
                                id="Triangle"
                                transform="translate(19.000000, 11.000000) rotate(-300.000000) translate(-19.000000, -11.000000) "
                                >
                                <use fill="#696cff" xlink:href="#path-5"></use>
                                <use fill-opacity="0.2" fill="#FFFFFF" xlink:href="#path-5"></use>
                                </g>
                            </g>
                            </g>
                        </g>
                        </svg>
                    </span>
                    <?php 
                        $travel = DB::table('informasi_travels')
                        ->where('id_user', $id)
                        ->first();
                    ?>
                    <span class="app-brand-text demo menu-text fw-bolder ms-2"><?= $travel->travel_name ?></span>
                    </a>

                    <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto d-block d-xl-none">
                    <i class="bx bx-chevron-left bx-sm align-middle"></i>
                    </a>
                </div>
                <div class="menu-inner-shadow"></div>
                <ul class="menu-inner py-1">
           <!-- Dashboard -->
           <li class="menu-item">
              <a href="/agen/dashboard" class="menu-link">
                <i class="menu-icon tf-icons bx bx-home-circle"></i>
                <div data-i18n="Analytics">Dashboard</div>
              </a>
            </li>

            <!-- Layouts -->
            <li class="menu-item">

              <ul class="menu-sub">
                <li class="menu-item">
                  <a href="layouts-without-menu.html" class="menu-link">
                    <div data-i18n="Without menu">Without menu</div>
                  </a>
                </li>
                <li class="menu-item">
                  <a href="layouts-without-navbar.html" class="menu-link">
                    <div data-i18n="Without navbar">Without navbar</div>
                  </a>
                </li>
                <li class="menu-item">
                  <a href="layouts-container.html" class="menu-link">
                    <div data-i18n="Container">Container</div>
                  </a>
                </li>
                <li class="menu-item">
                  <a href="layouts-fluid.html" class="menu-link">
                    <div data-i18n="Fluid">Fluid</div>
                  </a>
                </li>
                <li class="menu-item">
                  <a href="layouts-blank.html" class="menu-link">
                    <div data-i18n="Blank">Blank</div>
                  </a>
                </li>
              </ul>
            </li>

            <li class="menu-header small text-uppercase">
              <span class="menu-header-text">Product</span>
            </li>
            <li class="menu-item active">
              <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons bx bxs-plane"></i>
                <div data-i18n="Account Settings">Tiket Umroh</div>
              </a>
              <ul class="menu-sub">
                <li class="menu-item active">
                  <a href="/agen/add_ticket_group" class="menu-link">
                    <div data-i18n="Account">Tambah Tiket Umroh</div>
                  </a>
                </li>
                <li class="menu-item">
                  <a href="/agen/data_ticket_group" class="menu-link">
                    <div data-i18n="Notifications">Data Tiket Umroh</div>
                  </a>
                </li>
                <li class="menu-item">
                  <a href="/agen/data_bursa_ticket" class="menu-link">
                    <div data-i18n="Connections">Bursa Tiket</div>
                  </a>
                </li>
              </ul>
            </li>
            <li class="menu-item">
              <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons bx bxs-book-bookmark"></i>
                <div data-i18n="Account Settings">Paket Umroh</div>
              </a>
              <ul class="menu-sub">
                <li class="menu-item">
                  <a href="/agen/add_packet" class="menu-link" target="_blank">
                    <div data-i18n="Account">Tambah Paket</div>
                  </a>
                </li>
                <li class="menu-item">
                  <a href="/agen/add_itinerary" class="menu-link" target="_blank">
                    <div data-i18n="Account">Tambah Itinerary</div>
                  </a>
                </li>
                <li class="menu-item">
                  <a href="/agen/get_itinerary" class="menu-link" target="_blank">
                    <div data-i18n="Account">Data Itinerary</div>
                  </a>
                </li>
                <li class="menu-item">
                  <a href="/agen/data_packet" class="menu-link" target="_blank">
                    <div data-i18n="Account">Data Paket</div>
                  </a>
                </li>
              </ul>
            </li>
            <li class="menu-item">
              <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons bx bxs-cart"></i>
                <div data-i18n="Authentications">Pesanan</div>
              </a>
              <ul class="menu-sub">
                <li class="menu-item">
                  <a href="/agen/add_order" class="menu-link" target="_blank">
                    <div data-i18n="Basic">Tambah Pesanan</div>
                  </a>
                </li>
                <li class="menu-item">
                  <a href="/agen/get_order" class="menu-link" target="_blank">
                    <div data-i18n="Basic">Data Pesanan</div>
                  </a>
                </li>
              </ul>
            </li>
            <!-- Manajemen -->
            <li class="menu-header small text-uppercase"><span class="menu-header-text">Manajemen</span></li>
            
            <!-- Agen -->
            <li class="menu-item">
              <a href="javascript:void(0)" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons bx bxs-briefcase"></i>
                <div data-i18n="Extended UI">Agen</div>
              </a>
              <ul class="menu-sub">
                <li class="menu-item">
                  <a href="/agen/add_agen" class="menu-link">
                    <div data-i18n="Perfect Scrollbar">Tambah Agen</div>
                  </a>
                </li>
                <li class="menu-item">
                  <a href="/agen/get_agen" class="menu-link">
                    <div data-i18n="Perfect Scrollbar">Data Agen</div>
                  </a>
                </li>
                <li class="menu-item">
                  <a href="/agen/add_partner_branch" class="menu-link">
                    <div data-i18n="Text Divider">Tambah Cabang</div>
                  </a>
                </li>
                <li class="menu-item">
                  <a href="/agen/get_partner_branch" class="menu-link">
                    <div data-i18n="Text Divider">Data Cabang</div>
                  </a>
                </li>
              </ul>
            </li>

            <!-- Keuangan -->
            <li class="menu-item">
              <a href="javascript:void(0)" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons bx bxs-wallet"></i>
                <div data-i18n="Extended UI">Keuangan</div>
              </a>
              <ul class="menu-sub">
                <li class="menu-item">
                  <a href="/agen/get_sale" class="menu-link">
                    <div data-i18n="Perfect Scrollbar">Penjualan</div>
                  </a>
                </li>
                <li class="menu-item">
                  <a href="/agen/get_commision" class="menu-link">
                    <div data-i18n="Perfect Scrollbar">Komisi Agen</div>
                  </a>
                </li>
                <li class="menu-item">
                  <a href="/agen/setting_deadline" class="menu-link">
                    <div data-i18n="Perfect Scrollbar">Setting Deadline</div>
                  </a>
                </li>
                <li class="menu-item">
                  <a href="/agen/travel_scoring" class="menu-link">
                    <div data-i18n="Perfect Scrollbar">Penilaian Travel</div>
                  </a>
                </li>
              </ul>
            </li>

          </ul>
            </aside>
             <!-- Layout container -->
        <div class="layout-page">
          <!-- Navbar -->
          <nav
            class="layout-navbar container-xxl navbar navbar-expand-xl navbar-detached align-items-center bg-navbar-theme"
            id="layout-navbar"
          >
            <div class="layout-menu-toggle navbar-nav align-items-xl-center me-3 me-xl-0 d-xl-none">
              <a class="nav-item nav-link px-0 me-xl-4" href="javascript:void(0)">
                <i class="bx bx-menu bx-sm"></i>
              </a>
            </div>

            <div class="navbar-nav-right d-flex align-items-center" id="navbar-collapse">

              <ul class="navbar-nav flex-row align-items-center ms-auto">

                <!-- User -->
                <li class="nav-item navbar-dropdown dropdown-user dropdown">
                  <a class="nav-link dropdown-toggle hide-arrow" href="javascript:void(0);" data-bs-toggle="dropdown">
                    <div class="avatar avatar-online">
                      <img src="{{ asset('/assets/image_travel/'.$travel->image) }}" alt class="w-px-40 h-auto rounded-circle" />
                    </div>
                  </a>
                  <ul class="dropdown-menu dropdown-menu-end">
                    <li>
                      <a class="dropdown-item" href="#">
                        <div class="d-flex">
                          <div class="flex-shrink-0 me-3">
                            <div class="avatar avatar-online">
                              <img src="{{ asset('/assets/image_travel/'.$travel->image) }}" alt class="w-px-40 h-auto rounded-circle" />
                            </div>
                          </div>
                          <div class="flex-grow-1">
                            <span class="fw-semibold d-block"><?= $travel->travel_name ?></span>
                            <small class="text-muted">Agen</small>
                          </div>
                        </div>
                      </a>
                    </li>
                    <li>
                      <div class="dropdown-divider"></div>
                    </li>
                    <li>
                      <a class="dropdown-item" href="/agen/profile/<?= $id ?>">
                        <i class="bx bx-user me-2"></i>
                        <span class="align-middle">My Profile</span>
                      </a>
                    </li>
                    <li>
                      <a class="dropdown-item" href="/agen/travel_information/<?= $id ?>">
                        <i class="bx bx-cog me-2"></i>
                        <span class="align-middle">Informasi Travel</span>
                      </a>
                    </li>
                    <li>
                      <div class="dropdown-divider"></div>
                    </li>
                    <li>
                      <a class="dropdown-item" href="/logout_agen">
                        <i class="bx bx-power-off me-2"></i>
                        <span class="align-middle">Log Out</span>
                      </a>
                    </li>
                  </ul>
                </li>
                <!--/ User -->
              </ul>
            </div>
          </nav>

          <!-- / Navbar -->

    <!-- Content wrapper -->
    
    <!-- start content -->
    <div class="content-wrapper">
        <div class="container-xxl flex-grow-1 container-p-y">
        <form action="{{ url('/agen/proccess_update_ticket/'.$ticket_packet->id) }}" method="post" enctype="multipart/form-data" id="input_ticket">
            <div class="card">
                @csrf
                <input type="hidden" name="id" value="<?= $ticket_packet->id; ?>">
                <input type="hidden" name="id_user" value="<?= $ticket_packet->id_user; ?>">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6 col-lg-4 col-xl-4 order-0 mb-4">
                                <h5 class="m-0 me-2">Maskapai Penerbangan Keberangkatan</h5>
                                <select class="form-control" name="id_maskapai" required>
                                    <?php $maskapai_keberangkatan = DB::table('ticket_groups')->join('maskapais','maskapais.id','=','ticket_groups.id_maskapai')->where('ticket_groups.id', $ticket_packet->id)->first(); ?>
                                    <option value="<?= $maskapai_keberangkatan->id_maskapai ?>"><?= $maskapai_keberangkatan->name_maskapai ?></option>
                                    @foreach($tiket as $v_tiket)
                                        <option value="<?= $v_tiket->id ?>"><?= $v_tiket->name_maskapai ?></option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-md-6 col-lg-4 col-xl-4 order-0 mb-4">
                                <h5 class="m-0 me-2">Maskapai Penerbangan Kepulangan</h5>
                                <select class="form-control" name="id_maskapai_homecoming" required>
                                <?php $maskapai_kepulangan = DB::table('ticket_groups')->join('maskapais','maskapais.id','=','ticket_groups.id_maskapai_homecoming')->where('ticket_groups.id', $ticket_packet->id)->first(); ?>
                                    <option value="<?= $maskapai_kepulangan->id_maskapai_homecoming ?>"><?= $maskapai_kepulangan->name_maskapai ?></option>
                                    @foreach($tiket as $v_tiket)
                                        <option value="<?= $v_tiket->id ?>"><?= $v_tiket->name_maskapai ?></option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-md-6 col-lg-4 col-xl-4 order-0 mb-4">
                                <h5 class="m-0 me-2">Kode PNR Maskapai</h5>
                                <input class="form-control" maxlength="6" name="maskapai_code" type="text" placeholder="XYZAB" value="<?= $ticket_packet->maskapai_code ?>" required>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <h5 class="m-0 me-2">Provider Tiket</h5>
                                <select class="form-control" name="id_provider">
                                <?php $data_provider = DB::table('ticket_groups')->join('provider_tickets','provider_tickets.id','=','ticket_groups.id_provider')->where('ticket_groups.id', $ticket_packet->id)->first(); ?>
                                    <option value="<?= $data_provider->id_provider ?>"><?= $data_provider->name_provider ?></option>
                                    @foreach($provider as $v_provider)
                                        <option value="<?= $v_provider->id ?>"><?= $v_provider->name_provider ?></option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col">
                                <h5 class="m-0 me-2">Harga Tiket</h5>
                                <input class="form-control" name="price_ticket" type="text" id="price_ticket" value="<?= $ticket_packet->price_ticket ?>" placeholder="Contoh: 12.000.000" required>
                            </div>
                            <div class="col-md-6 col-lg-4 col-xl-4 order-0 mb-4">
                                <h5 class="m-0 me-2">Kapasitas Seat</h5>
                                <input class="form-control" name="seat_capasitas" type="number" value="<?= $ticket_packet->seat_capasitas ?>" placeholder="Pax" required>
                            </div>
                        </div>
                        <h4 class="m-0 me-2">Rute Keberangkatan</h4><br>
                        <h5 class="m-0 me-2">Kode penerbangan</h5>
                        <input class="form-control" maxlength="6" name="departure_flight_code" type="text" value="<?= $ticket_packet->departure_flight_code ?>" placeholder="WY 50" required>
                        <div class="row">
                            <div class="col">
                                <strong>Kota Keberangkatan</strong><br>
                                <select class="form-control" name="id_departure_city">
                                    <?php $kota_keberangkatan_1 = DB::table('ticket_groups')->join('airports','airports.code','=','ticket_groups.id_departure_city')->where('ticket_groups.id', $ticket_packet->id)->first(); ?>
                                    <option value="<?= $kota_keberangkatan_1->id_departure_city ?>"><?= $kota_keberangkatan_1->cityName; ?> - <?= $kota_keberangkatan_1->name ?></option>
                                    @foreach ($airport as $v_airport)
                                        <option value="<?= $v_airport->code ?>"> <?= $v_airport->cityName ?> - <?= $v_airport->name ?> </option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col">
                                <strong>Tanggal Keberangkatan</strong><br>
                                <input class="form-control" name="departure_date" type="date" value="<?= $ticket_packet->departure_date ?>" placeholder="Waktu Keberangkatan" required>
                            </div>
                            <div class="col">
                                <strong>Jam Keberangkatan</strong><br>
                                <input class="form-control" name="departure_time" type="time" value="<?= $ticket_packet->departure_time ?>" placeholder="Local Time" required>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <strong>Kota Kedatangan</strong><br>
                                <select class="form-control" name="id_departure_city_arrival">
                                    <?php $kota_keberangkatan_2 = DB::table('ticket_groups')->join('airports','airports.code','=','ticket_groups.id_departure_city_arrival')->where('ticket_groups.id', $ticket_packet->id)->first(); ?>
                                    <option value="<?= $kota_keberangkatan_2->id_departure_city_arrival ?>"><?= $kota_keberangkatan_2->cityName; ?> - <?= $kota_keberangkatan_2->name ?></option>
                                    @foreach ($airport as $v_airport2)
                                        <option value="<?= $v_airport2->code ?>"> <?= $v_airport2->cityName ?> - <?= $v_airport2->name ?> </option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col">
                                <strong>Tanggal Kedatangan</strong><br>
                                <input class="form-control" name="departure_date_arrival" type="date" value="<?= $ticket_packet->departure_date_arrival ?>" placeholder="Waktu Keberangkatan" required>
                            </div>
                            <div class="col">
                                <strong>Jam Kedatangan</strong><br>
                                <input class="form-control" name="departure_time_arrival" type="time" value="<?= $ticket_packet->departure_time_arrival ?>" placeholder="Local Time" required>
                            </div>
                        </div>
                        <div id="transit_departure">
                            <div class="row">
                                <div class="col">
                                    <strong>Kota Kedatangan Transit</strong><br>
                                    <select class="form-control" name="id_departure_city_transit">
                                            <option value=""> -Silahkan Pilih Kota Kedatangan Transit-</option>
                                        @foreach ($airport as $v_airport3)
                                            <option value="<?= $v_airport3->code ?>"> <?= $v_airport3->cityName ?> - <?= $v_airport3->name ?> </option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="col">
                                    <strong>Tanggal Kedatangan Transit</strong><br>
                                    <input class="form-control" name="departure_date_transit" value="<?= $ticket_packet->departure_date_transit ?>" type="date" placeholder="Waktu Transit" >
                                </div>
                                <div class="col">
                                    <strong>Jam Kedatangan Transit</strong><br>
                                    <input class="form-control" name="departure_time_transit" value="<?= $ticket_packet->departure_time_transit ?>" type="time" placeholder="Local Time" >
                                </div>
                            </div><br>
                        </div><br>
                        <button type="button" class="btn btn-primary" onclick="button_departure()" id="button_departure_click"><i class='bx bx-plus'></i> Tambah Rute Transit</button><br><br>
                        <h4 class="m-0 me-2">Rute Kepulangan</h4><br>
                        <h5 class="m-0 me-2">Kode Penerbangan</h5>
                        <input class="form-control" maxlength="6" name="homecoming_flight_code" value="<?= $ticket_packet->homecoming_flight_code ?>" type="text" placeholder="WY 50" required><br>
                        <div class="row">
                            <div class="col">
                                <strong>Kota Keberangkatan</strong><br>
                                <select class="form-control" name="id_homecoming_city" required>
                                    <?php $kota_kepulangan_1 = DB::table('ticket_groups')->join('airports','airports.code','=','ticket_groups.id_homecoming_city')->where('ticket_groups.id', $ticket_packet->id)->first(); ?>
                                    <option value="<?= $kota_kepulangan_1->id_homecoming_city ?>"><?= $kota_kepulangan_1->cityName; ?> - <?= $kota_kepulangan_1->name ?></option>
                                    @foreach ($airport as $v_airport4)
                                        <option value="<?= $v_airport4->code ?>"> <?= $v_airport4->cityName ?> - <?= $v_airport4->name ?> </option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col">
                                <strong>Tanggal Keberangkatan</strong><br>
                                <input class="form-control" name="homecoming_date" value="<?= $ticket_packet->homecoming_date ?>" type="date" placeholder="Waktu Keberangkatan" required>
                            </div>
                            <div class="col">
                                <strong>Jam Keberangkatan</strong><br>
                                <input class="form-control" name="homecoming_time" value="<?= $ticket_packet->homecoming_time ?>" type="time" placeholder="Local Time" required>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <strong>Kota Kedatangan</strong><br>
                                <select class="form-control" name="id_homecoming_city_arrival" required>
                                    <?php $kota_kepulangan_2 = DB::table('ticket_groups')->join('airports','airports.code','=','ticket_groups.id_homecoming_city_arrival')->where('ticket_groups.id', $ticket_packet->id)->first(); ?>
                                    <option value="<?= $kota_kepulangan_2->id_homecoming_city_arrival ?>"><?= $kota_kepulangan_2->cityName; ?> - <?= $kota_kepulangan_2->name ?></option>
                                    @foreach ($airport as $v_airport5)
                                        <option value="<?= $v_airport5->code ?>"> <?= $v_airport5->cityName ?> - <?= $v_airport5->name ?> </option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col">
                                <strong>Tanggal Kedatangan</strong><br>
                                <input class="form-control" name="homecoming_date_arrival" value="<?= $ticket_packet->homecoming_date_arrival ?>" type="date" placeholder="Waktu Keberangkatan" required>
                            </div>
                            <div class="col">
                                <strong>Jam Kedatangan</strong><br>
                                <input class="form-control" name="homecoming_time_arrival" value="<?= $ticket_packet->homecoming_time_arrival ?>" type="time" placeholder="Local Time" required>
                            </div>
                        </div>
                        <div id="transit_homecoming">
                        <div class="row">
                            <div class="col">
                                <strong>Kota Kedatangan Transit</strong><br>
                                <select class="form-control" name="id_homecoming_city_transit" required>
                                    @foreach ($airport as $v_airport6)
                                        <option value="<?= $v_airport6->code ?>"> <?= $v_airport6->cityName ?> - <?= $v_airport6->name ?> </option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col">
                                <strong>Tanggal Kedatangan Transit</strong><br>
                                <input class="form-control" name="homecoming_date_transit" type="date" placeholder="Waktu Transit" >
                            </div>
                            <div class="col">
                                <strong>Jam Kedatangan Transit</strong><br>
                                <input class="form-control" name="homecoming_time_transit" type="time" placeholder="Local Time" >
                            </div>
                        </div><br>
                    </div><br>
                    <button type="button" class="btn btn-primary" onclick="button_homecoming()" id="button_homecoming_click"><i class='bx bx-plus'></i> Tambah Rute Transit</button>
                    </div>
            </div><br>
            <div align="right">
                <button type="submit" class="btn btn-primary"><i class='bx bxs-memory-card'></i> Simpan</button>
            </div>
            </form>
            <br>
        </div>
    </div>
@include('agen.layout.footer')