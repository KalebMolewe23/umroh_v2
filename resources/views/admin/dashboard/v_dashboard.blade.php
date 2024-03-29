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
                      <span class="app-brand-text demo menu-text fw-bolder ms-2">Hallo Admin</span>
                    </a>

                    <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto d-block d-xl-none">
                    <i class="bx bx-chevron-left bx-sm align-middle"></i>
                    </a>
                </div>
                <div class="menu-inner-shadow"></div>
                <ul class="menu-inner py-1">
            
                <!-- Dashboard -->
<li class="menu-item active">
              <a href="/admin/dashboard" class="menu-link">
                <i class="menu-icon tf-icons bx bx-home-circle"></i>
                <div data-i18n="Analytics">Dashboard</div>
              </a>
            </li>
            <!-- tiket -->
            <li class="menu-header small text-uppercase"><span class="menu-header-text">Ticket</span></li>
            <li class="menu-item">
              <a href="javascript:void(0)" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons bx bxs-plane"></i>
                <div data-i18n="Extended UI">Data Ticket Umroh</div>
              </a>
              <ul class="menu-sub">
                <li class="menu-item">
                  <a href="/admin/add_bursa_ticket" class="menu-link">
                    <div data-i18n="Perfect Scrollbar">Add Bursa Ticket</div>
                  </a>
                </li>
                <li class="menu-item">
                  <a href="/admin/ticket_group" class="menu-link">
                    <div data-i18n="Text Divider">Data Tiket Group</div>
                  </a>
                </li>
                <li class="menu-item">
                  <a href="/admin/bursa_ticket" class="menu-link">
                    <div data-i18n="Text Divider">Data Bursa Ticket</div>
                  </a>
                </li>
              </ul>
            </li>
            <li class="menu-item">
              <a href="/admin/provider" class="menu-link">
                <i class="menu-icon tf-icons bx bxs-user-voice"></i>
                <div data-i18n="Basic">Provider</div>
              </a>
            </li>
            <!-- umroh -->
            <li class="menu-header small text-uppercase"><span class="menu-header-text">Umroh</span></li>
            <li class="menu-item">
              <a href="/admin/data_packet_umroh" class="menu-link">
                <i class="menu-icon tf-icons bx bxs-package"></i>
                <div data-i18n="Basic">Data Packet Umroh</div>
              </a>
            </li>
            <li class="menu-item">
              <a href="javascript:void(0)" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons bx bxs-building"></i>
                <div data-i18n="Extended UI">Data Hotel</div>
              </a>
              <ul class="menu-sub">
                <li class="menu-item">
                  <a href="/admin/jeddah_hotel" class="menu-link">
                    <div data-i18n="Perfect Scrollbar">Jeddah</div>
                  </a>
                </li>
                <li class="menu-item">
                  <a href="/admin/madinah_hotel" class="menu-link">
                    <div data-i18n="Text Divider">Madinah</div>
                  </a>
                </li>
              </ul>
            </li>
            <li class="menu-item">
              <a href="/admin/category_umroh" class="menu-link">
                <i class="menu-icon tf-icons bx bxs-category"></i>
                <div data-i18n="Basic">Category</div>
              </a>
            </li>
            <!-- customer -->
            <li class="menu-header small text-uppercase"><span class="menu-header-text">Customer</span></li>
            <li class="menu-item">
              <a href="/admin/data_customer" class="menu-link">
                <i class="menu-icon tf-icons bx bxs-user-rectangle"></i>
                <div data-i18n="Basic">Data Member</div>
              </a>
            </li>
            <li class="menu-item">
              <a href="javascript:void(0)" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons bx bxs-briefcase-alt"></i>
                <div data-i18n="Extended UI">Data Travel</div>
              </a>
              <ul class="menu-sub">
                <li class="menu-item">
                  <a href="/admin/travel_information" class="menu-link">
                    <div data-i18n="Perfect Scrollbar">Information Travel</div>
                  </a>
                </li>
                <li class="menu-item">
                  <a href="/admin/information_branch" class="menu-link">
                    <div data-i18n="Text Divider">Information Branch</div>
                  </a>
                </li>
                <li class="menu-item">
                  <a href="/admin/information_worsiphers" class="menu-link">
                    <div data-i18n="Text Divider">Data Jamaah</div>
                  </a>
                </li>
              </ul>
            </li>
            <!-- CMS -->
            <li class="menu-header small text-uppercase"><span class="menu-header-text">CMS</span></li>
            <li class="menu-item">
              <a href="/admin/bg_color/1" class="menu-link">
                <i class="menu-icon tf-icons bx bx-palette"></i>
                <div data-i18n="Basic">Background Color</div>
              </a>
            </li>
            <li class="menu-item">
              <a href="/admin/information/1" class="menu-link">
                <i class="menu-icon tf-icons bx bxs-info-circle"></i>
                <div data-i18n="Basic">Information</div>
              </a>
            </li>
            <li class="menu-item">
              <a href="/admin/sosmed/" class="menu-link">
                <i class="menu-icon tf-icons bx bxl-stripe"></i>
                <div data-i18n="Basic">Social Media</div>
              </a>
            </li>
            <li class="menu-item">
              <a href="/admin/blog/" class="menu-link">
                <i class="menu-icon tf-icons bx bxl-blogger"></i>
                <div data-i18n="Basic">Blog</div>
              </a>
            </li>
            <li class="menu-item">
              <a href="/admin/covereds/" class="menu-link">
                <i class="menu-icon tf-icons bx bxs-book-content"></i>
                <div data-i18n="Basic">Data Peliput</div>
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
                <li class="nav-item lh-1 me-3">
                  <?php
                    $total = DB::table('users')->where('idrole', 2)->count();
                  ?>
                  <i class='bx bxs-user'></i> Total Pengguna : <?= number_format($total) ?>
                </li>

                <!-- User -->
                <li class="nav-item navbar-dropdown dropdown-user dropdown">
                  <a class="nav-link dropdown-toggle hide-arrow" href="javascript:void(0);" data-bs-toggle="dropdown">
                    <div class="avatar avatar-online">
                        <img src="{{ asset('/assets/img/logo.png') }}" alt class="w-px-40 h-auto rounded-circle" />
                    </div>
                  </a>
                  <ul class="dropdown-menu dropdown-menu-end">
                    <li>
                      <a class="dropdown-item" href="#">
                        <div class="d-flex">
                          <div class="flex-shrink-0 me-3">
                            <div class="avatar avatar-online">
                              <img src="{{ asset('/assets/img/logo.png') }}" alt class="w-px-40 h-auto rounded-circle" />
                            </div>
                          </div>
                          <div class="flex-grow-1">
                            <span class="fw-semibold d-block">Superadmin</span>
                          </div>
                        </div>
                      </a>
                    </li>
                    <li>
                      <div class="dropdown-divider"></div>
                    </li>
                    <li>
                      <a class="dropdown-item" href="/admin/profile/<?= $id ?>">
                        <i class="bx bx-user me-2"></i>
                        <span class="align-middle">My Profile</span>
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
            <!-- Content -->


            <div class="container-xxl flex-grow-1 container-p-y">
              <div class="row">
                <div class="col mb-4 order-0">
                  <div class="card">
                    <div class="d-flex align-items-end row">
                      <div class="col-sm-7">
                        <div class="card-body">
                          <h5 class="card-title text-primary">Selamat Admin! 🎉</h5>
                          <p class="mb-4">
                            Kamu memiliki jumlah pengguna sebanyak <span class="fw-bold"><?= number_format($total) ?></span> pelanggan, Cek data pelanggan melalui tombol dibawah ini.
                          </p>

                          <a href="/admin/data_customer" class="btn btn-sm btn-outline-primary">Informasi Pelanggan</a>
                        </div>
                      </div>
                      <div class="col-sm-5 text-center text-sm-left">
                        <div class="card-body pb-0 px-0 px-md-4">
                          <img
                            src="{{ asset('/assets/admin/img/illustrations/man-with-laptop-light.png') }}"
                            height="140"
                            alt="View Badge User"
                            data-app-dark-img="illustrations/man-with-laptop-dark.png"
                            data-app-light-img="illustrations/man-with-laptop-light.png"
                          />
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!--/ Total Revenue -->
              </div>
              <div class="row">
                <!-- Order Statistics -->
                <div class="col-md-6 col-lg-4 col-xl-4 order-0 mb-4">
                  <div class="card h-100">
                    <div class="card-header d-flex align-items-center justify-content-between pb-0">
                      <div class="card-title mb-0">
                        <h5 class="m-0 me-2">Informasi Total Transaksi Travel Per-Bulan</h5><br>
                        <?php
                          $transaction = DB::table('transactions')
                          ->whereYear('transactions.created_at', date('Y'))
                          ->whereMonth('transactions.created_at', date('m'))
                          ->count();
                        ?>
                        <small class="text-muted"></small>
                      </div>
                    </div>
                    <div class="card-body">
                      <div class="d-flex justify-content-between align-items-center mb-3">
                        <div class="d-flex flex-column align-items-center gap-1">
                          <h2 class="mb-2">{{ $transaction }}</h2>
                          <span>Total Transaksi</span>
                        </div>
                      </div>
                      <?php
                        $informasi_travel = DB::table('informasi_travels')->take(5)->get();
                      ?>
                      @foreach($informasi_travel as $v_infor_travel)
                        <?php
                          $data_transaction = DB::table('transactions')
                          ->join('packets', 'packets.id', '=', 'transactions.id_packet')
                          ->where('packets.id_user', $v_infor_travel->id_user)
                          ->whereYear('transactions.created_at', date('Y'))
                          ->whereMonth('transactions.created_at', date('m'))
                          ->count();
                          $ceo = DB::table('users')->where('id', $v_infor_travel->id_user)->first();
                        ?>

                        <ul class="p-0 m-0">
                          <li class="d-flex mb-4 pb-1">
                            <div class="avatar flex-shrink-0 me-3">
                              <img src="{{ asset('assets/image_travel/'.$v_infor_travel->image) }}" width="50px">
                            </div>
                            <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                              <div class="me-2">
                                <h6 class="mb-0">{{ $v_infor_travel->travel_name }}</h6>
                                <small class="text-muted">{{ $ceo->name }}</small>
                              </div>
                              <div class="user-progress">
                                <small class="fw-semibold">{{ $data_transaction }}</small>
                              </div>
                            </div>
                          </li>
                        </ul>
                        
                        @endforeach
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                          Detail Selengkapnya!
                        </button>
                    </div>
                  </div>
                </div>
                <!--/ Order Statistics -->

                <!-- Modal All Travel -->
                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                  <div class="modal-dialog">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Data Transaksi Travel Per-Bulan</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                      </div>
                      <div class="modal-body">
                        <?php
                          $informasi_travel = DB::table('informasi_travels')->get();
                        ?>
                        @foreach($informasi_travel as $v_infor_travel)
                          <?php
                            $data_transaction = DB::table('transactions')
                            ->join('packets', 'packets.id', '=', 'transactions.id_packet')
                            ->where('packets.id_user', $v_infor_travel->id_user)
                            ->whereYear('transactions.created_at', date('Y'))
                            ->whereMonth('transactions.created_at', date('m'))
                            ->count();
                            $ceo = DB::table('users')->where('id', $v_infor_travel->id_user)->first();
                          ?>

                          <ul class="p-0 m-0">
                            <li class="d-flex mb-4 pb-1">
                              <div class="avatar flex-shrink-0 me-3">
                                <img src="{{ asset('assets/image_travel/'.$v_infor_travel->image) }}" width="50px">
                              </div>
                              <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                                <div class="me-2">
                                  <h6 class="mb-0">{{ $v_infor_travel->travel_name }}</h6>
                                  <small class="text-muted">{{ $ceo->name }}</small>
                                </div>
                                <div class="user-progress">
                                  <small class="fw-semibold">{{ $data_transaction }}</small>
                                </div>
                              </div>
                            </li>
                          </ul>
                        @endforeach

                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                      </div>
                    </div>
                  </div>
                </div>

                <!-- Expense Overview -->
                <div class="col-md-6 col-lg-4 order-1 mb-4">
                  <div class="card h-100">
                    <div class="card-body px-0">
                      <div class="tab-content p-0">
                        <div class="tab-pane fade show active" id="navs-tabs-line-card-income" role="tabpanel">
                          <div class="d-flex p-4 pt-3">
                            <div>
                              <small class="text-muted d-block">Total Transaksi Dalam 1 Tahun</small>
                              <div class="d-flex align-items-center">
                                <?php
                                  $total_transaction = DB::table('transactions')
                                  ->select(DB::raw('SUM(grand_total) as total_grand_total'))
                                  ->whereYear('transactions.created_at', date('Y'))
                                  ->where('transaction_status', 'success')
                                  ->first();
                                ?>
                                <h6 class="mb-0 me-1">Rp {{ number_format($total_transaction->total_grand_total) }}</h6>
                              </div>
                            </div>
                          </div>
                          <canvas id="chart"></canvas>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!--/ Expense Overview -->

                <!-- Transactions -->
                <div class="col-md-6 col-lg-4 order-2 mb-4">
                  <div class="card h-100">
                    <div class="card-header d-flex align-items-center justify-content-between">
                      <h5 class="card-title m-0 me-2">Data Transaction</h5>
                    </div>
                    <div class="card-body">

                      <?php
                        $user_transaction = DB::table('users')->where('idrole', '=', 2)->take(5)->get();
                        foreach($user_transaction as $v_user_transaction){ 
                          $data_all_transaction = DB::table('transactions')
                          ->select(DB::raw('SUM(grand_total) as total_grand_total'))
                          ->join('users', 'users.id', '=', 'transactions.id_user')
                          ->where('id_user', $v_user_transaction->id)
                          ->where('transaction_status', 'success')
                          ->first();
                      ?>
                      <ul class="p-0 m-0">
                        <li class="d-flex mb-4 pb-1">
                          <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                            <div class="me-2">
                              <small class="text-muted d-block mb-1">{{ $v_user_transaction->name }}</small>
                              <h6 class="mb-0">{{ $v_user_transaction->email  }}</h6>
                            </div>
                            <div class="user-progress d-flex align-items-center gap-1">
                              <span class="text-muted">Rp. </span>
                              <h6 class="mb-0">{{ number_format($data_all_transaction->total_grand_total) }}</h6>
                            </div>
                          </div>
                        </li>
                      </ul>
                      <?php } ?>

                    </div>
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModalTransaction">
                      Detail Selengkapnya!
                    </button>
                  </div>
                </div>
                <!--/ Transactions -->
              </div>
            </div>

            <!-- Modal Transaction -->
            <div class="modal fade" id="exampleModalTransaction" tabindex="-1" aria-labelledby="exampleModalLabelTrans" aria-hidden="true">
                  <div class="modal-dialog">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabelTrans">Data Transaction</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                      </div>
                      <div class="modal-body">
                      <?php
                        $user_transaction = DB::table('users')->where('idrole', '=', 2)->get();
                        foreach($user_transaction as $v_user_transaction){ 
                          $data_all_transaction = DB::table('transactions')
                          ->select(DB::raw('SUM(grand_total) as total_grand_total'))
                          ->join('users', 'users.id', '=', 'transactions.id_user')
                          ->where('id_user', $v_user_transaction->id)
                          ->where('transaction_status', 'success')
                          ->first();
                        ?>
                        <ul class="p-0 m-0">
                          <li class="d-flex mb-4 pb-1">
                            <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                              <div class="me-2">
                                <small class="text-muted d-block mb-1">{{ $v_user_transaction->name }}</small>
                                <h6 class="mb-0">{{ $v_user_transaction->email  }}</h6>
                              </div>
                              <div class="user-progress d-flex align-items-center gap-1">
                                <span class="text-muted">Rp. </span>
                                <h6 class="mb-0">{{ number_format($data_all_transaction->total_grand_total) }}</h6>
                              </div>
                            </div>
                          </li>
                        </ul>

                      <?php } ?>

                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                      </div>
                    </div>
                  </div>
                </div>

        </div>
            <!-- / Content -->

            <script>
              var ctx = document.getElementById('chart').getContext('2d');
              var userChart = new Chart(ctx,{
                  type:'bar',
                  data:{
                      labels: {!! json_encode($labels) !!},
                      datasets: {!! json_encode($datasets) !!}
                  },
              });
            </script>

@include('agen.layout.footer')
