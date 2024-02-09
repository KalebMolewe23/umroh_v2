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

                        $travels = DB::table('informasi_travels')->where('id_user', $id)->get();
                        $count = $travels->count();
                    ?>
                    <?php if($count == 0) { ?>
                      <span class="app-brand-text demo menu-text fw-bolder ms-2">Nama Travel</span>
                    <?php }else{ ?>
                      <span class="app-brand-text demo menu-text fw-bolder ms-2"><?= $travel->travel_name ?></span>
                    <?php } ?>
                    </a>

                    <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto d-block d-xl-none">
                    <i class="bx bx-chevron-left bx-sm align-middle"></i>
                    </a>
                </div>
                <div class="menu-inner-shadow"></div>
                <ul class="menu-inner py-1">

            <?php if($count == 0) { ?>
              
                <!-- Dashboard -->
                <li class="menu-item active">
                  <a href="/agen/dashboard" class="menu-link">
                    <i class="menu-icon tf-icons bx bx-home-circle"></i>
                    <div data-i18n="Analytics">Dashboard</div>
                  </a>
                </li>

            <?php }else{ ?>

              <?php if($travel->is_verifition == 0 ){ ?>
                <!-- Dashboard -->
                <li class="menu-item active">
                  <a href="/agen/dashboard" class="menu-link">
                    <i class="menu-icon tf-icons bx bx-home-circle"></i>
                    <div data-i18n="Analytics">Dashboard</div>
                  </a>
                </li>
              <?php }else{ ?>

            <!-- Dashboard -->
            <li class="menu-item active">
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
            <li class="menu-item">
              <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons bx bxs-plane"></i>
                <div data-i18n="Account Settings">Tiket Umroh</div>
              </a>
              <ul class="menu-sub">
                <li class="menu-item">
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
                <li class="menu-item">
                  <a href="/agen/order_group" class="menu-link" target="_blank">
                    <div data-i18n="Basic">Penawaran Group</div>
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
              </ul>
            </li>
            <?php 
              }         
            } 
            ?>

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
                      <?php if($count == 0) { ?>
                        <img src="{{ asset('/assets/img/logo.png') }}" alt class="w-px-40 h-auto rounded-circle" />
                      <?php }else{ ?>
                        <img src="{{ asset('/assets/image_travel/'.$travel->image) }}" alt class="w-px-40 h-auto rounded-circle" />
                      <?php } ?>
                    </div>
                  </a>
                  <ul class="dropdown-menu dropdown-menu-end">
                    <li>
                      <a class="dropdown-item" href="#">
                        <div class="d-flex">
                          <?php if($count == 0) { ?>
                          <div class="flex-shrink-0 me-3">
                            <div class="avatar avatar-online">
                              <img src="{{ asset('/assets/img/logo.png') }}" alt class="w-px-40 h-auto rounded-circle" />
                            </div>
                          </div>
                          <?php }else{ ?>
                            <div class="flex-shrink-0 me-3">
                              <div class="avatar avatar-online">
                                <img src="{{ asset('/assets/image_travel/'.$travel->image) }}" alt class="w-px-40 h-auto rounded-circle" />
                              </div>
                            </div>
                          <?php } ?>
                          <div class="flex-grow-1">
                          <?php if($count == 0) { ?>
                            <span class="fw-semibold d-block">Nama Travel</span>
                          <?php }else{ ?>
                            <span class="fw-semibold d-block"><?= $travel->travel_name ?></span>
                            <small class="text-muted">Agen</small>
                          <?php } ?>
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
            <!-- Content -->
            
            <?php if($count == 0) { ?>
              <div class="container-xxl flex-grow-1 container-p-y">
                <div class="card">
                  <div class="d-flex align-items-end row">
                      <div class="card-body">
                        <center>
                            <p>Silahkan Lengkapi Data Anda</p>
                            <p>Untuk Menggunakan Semua Fitur Yang Kami Sediakan</p>
                            <a href="/agen/travel_information/<?= $id ?>"><button class="btn btn-primary"><i class='bx bx-plus'></i> Klik Disini</button></a>
                        </center><br>
                      </div><br>
                  </div>
                </div>
              </div>
            <?php }else{ ?>

              <?php if($travel->is_verifition == 0 ){ ?>
                <div class="container-xxl flex-grow-1 container-p-y">
                  <div class="card">
                    <div class="d-flex align-items-end row">
                        <div class="card-body">
                          <center>
                              <p>Silahkan Tunggu</p>
                              <p>Akun Anda Dalam Proses Verifikasi</p>
                              <a href="/agen/travel_information/<?= $id ?>"><button class="btn btn-primary"><i class='bx bx-plus'></i> Klik Disini Untuk Update Akun Anda</button></a>
                          </center><br>
                        </div><br>
                    </div>
                  </div>
                </div>
              <?php }else{ ?>


            <div class="container-xxl flex-grow-1 container-p-y">
            <div class="row">
                <div class="col-md-6 col-lg-4 col-xl-4 order-0 mb-4">
                  <div class="card h-30">
                    <div class="card-header d-flex align-items-center justify-content-between pb-0">
                      <div class="card-title mb-0">
                        <h5 class="m-0 me-2">Total Komisi</h5>
                      </div>
                    </div>
                    <div class="card-body">
                      <div class="d-flex justify-content-between align-items-center mb-3">
                        <div class="d-flex flex-column align-items-center gap-1">
                          <br>
                          <?php
                            //perhitungan total transaksi berdasarkan travel yang login 
                            $total_komisi = DB::table('transactions')->join('packets', 'packets.id', '=', 'transactions.id_packet')->whereYear('transactions.created_at', date('Y'))->where('packets.id_user', $id)->get(); 
                            $count_komisi = $total_komisi->count();
                            $komisi = DB::table('money')->where('id_user', $id)->first();
                            //get data komisi travel
                            if($count_komisi == 0){
                              $nilai_komisi = 0;
                            }else{
                              $nilai_komisi = $komisi->commision;
                            }
                            $data_komisi = $nilai_komisi * $count_komisi;
                          ?>
                          <h2 class="mb-2">Rp. <?= number_format($data_komisi,2,',','.'); ?></h2>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="col-md-6 col-lg-4 order-1 mb-4">
                  <div class="card h-30">
                    <div class="card-header d-flex align-items-center justify-content-between pb-0">
                        <div class="card-title mb-0">
                          <?php
                            $total_transaksi_komisi = DB::table('commision_transactions')->join('agens', 'agens.id', '=', 'commision_transactions.id_agens')->join('transactions', 'transactions.id', '=', 'commision_transactions.id_transaction')->join('packets', 'packets.id', '=', 'transactions.id_packet')->whereYear('commision_transactions.created_at', date('Y'))->where('packets.id_user', $id)->get();
                            $count_transaksi_komisi = $total_transaksi_komisi->count();
                            $data_transaksi_komisi = 0;
                            if($count == 0){
                              $data_transaksi_komisi;
                            }else{
                              $data_transaksi_komisi = $count_transaksi_komisi * $komisi->commision;
                            }  
                          ?>
                            <h5 class="m-0 me-2">Komisi Siap Bayar</h5>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="d-flex justify-content-between align-items-center mb-3">
                            <div class="d-flex flex-column align-items-center gap-1">
                            <br><h2 class="mb-2">Rp. <?= number_format($data_transaksi_komisi,2,',','.'); ?></h2>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="col-md-6 col-lg-4 order-2 mb-4">
                    <div class="card h-30">
                        <div class="card-header d-flex align-items-center justify-content-between pb-0">
                            <div class="card-title mb-0">
                                <?php
                                  $total_belum_bayar = $data_komisi - $data_transaksi_komisi;
                                ?>
                                <h5 class="m-0 me-2">Komisi Belum Dibayar</h5>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="d-flex justify-content-between align-items-center mb-3">
                                <div class="d-flex flex-column align-items-center gap-1">
                                <br><h2 class="mb-2">Rp. <?= number_format($total_belum_bayar,2,',','.'); ?></h2>
                            </div>
                        </div>
                        </div>
                  </div>
                </div>
              </div>
              <div class="card">
                <div class="scroll-item">
                  <canvas id="chart"></canvas>
                </div>
              </div><br>
              <div class="card">
                <div class="d-flex align-items-end row">
                    <div class="card-body">
                        <?php
                            $data_user = DB::table('photos')->where('id_user', $id)->get();
                            $count = $data_user->count();

                            if($count == 0){
                        ?>

                        <center>
                            <p>Data Paket Belum Ada</p>
                            <a href="/agen/add_packet"><button class="btn btn-primary"><i class='bx bx-plus'></i> Tambah Tiket</button></a>
                        </center><br>

                        <?php }else{ ?>
                          <div class="table-responsive">
                            <table id="ajax-data-packet">
                                <thead>
                                    <tr>
                                        <th scope="col">Nama Paket</th>
                                        <th scope="col">Nama Maskapai</th>
                                        <th scope="col">Kota Keberangkatan</th>
                                        <th scope="col">Tanggal Keberangkatan</th>
                                        <th scope="col">Jumlah Seat</th>
                                        <th scope="col">DP</th>
                                        <th scope="col">Harga</th>
                                        <th scope="col">Aksi</th>
                                    </tr>
                                </thead>
                            </table>
                          </div>
                        <?php } ?>
                    </div>
                </div>
              </div><br>
        
              </div>

            <?php 
                } 
              }    
            ?>
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