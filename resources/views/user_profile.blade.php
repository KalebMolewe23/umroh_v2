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
        height: 50%;
    }

    th{
        font-size: 13px
    }
</style>

@section('content')
    <div class="container mt-4 content">
        <div class="row">
            <div class="col-2">
                <div class="card">
                    <div class="card-body">
                        <h6 class="p-2 menu-list active-menu account-menu"><i class='bx bxs-user-circle'></i> Akun</h6>
                        <h6 class="p-2 menu-list order-menu"><i class='bx bxs-cart-add'></i> Pesanan Saya</h6>
                        <h6 class="p-2 menu-list logout-menu"><i class='bx bx-log-out'></i> Keluar</h6>
                    </div>
                </div>
            </div>
            <div class="col-10">
                <div class="card account-section">
                    <div class="card-header">
                        <h6 class="card-title mt-2">Ubah Profile</h6>
                    </div>
                    <div class="card-body">
                        <div class="form-group">
                            <label>Nama Lengkap</label>
                            <input class="form-control" value="<?= $profile->name ?>">
                        </div>
                        <div class="form-group mt-2">
                            <label>Email</label>
                            <input class="form-control" value="<?= $profile->email ?>" readonly>
                        </div>
                        <div class="form-group mt-2">
                            <label>Password</label>
                            <input class="form-control">
                        </div>
                        <div class="form-group mt-2">
                            <button type="submit" class="btn btn-sm text-white btn-block bg-blue"><i
                                    class='bx bxs-memory-card'></i> Simpan</button>
                        </div>
                    </div>
                </div>
                <div class="card order-section" style="display: none">
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
                                            <th>Tipe Pembayaran</th>
                                            <th>Metode Pembayaran</th>
                                            <th>Tipe Kamar</th>
                                            <th>Tipe Hotel</th>
                                            <th>Berangkat Dari</th>
                                            <th>Biaya Keberangkatan</th>
                                            <th>Status</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($transaction as $item)
                                            <tr>
                                                <td>{{ $item->transaction_code }}</td>
                                                <td>{{ $item->payment_type }}</td>
                                                <td>{{ $item->payment_metode }}</td>
                                                <td>{{ $item->room_type }}</td>
                                                <td>{{ $item->hotel_type }}</td>
                                                <td>{{ $item->departing_from }}</td>
                                                <td>{{ $item->departing_price }}</td>
                                                <td>{{ $item->transaction_status }}</td>
                                                <td>
                                                    <button class="btn btn-sm btn-success pay" data-id="{{ $item->id }}">Bayar</button>
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
                                            <th>Tipe Pembayaran</th>
                                            <th>Metode Pembayaran</th>
                                            <th>Tipe Kamar</th>
                                            <th>Tipe Hotel</th>
                                            <th>Berangkat Dari</th>
                                            <th>Biaya Keberangkatan</th>
                                            <th>Status</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($transaction_pending as $item_pending)
                                            <tr>
                                                <td>{{ $item_pending->transaction_code }}</td>
                                                <td>{{ $item_pending->payment_type }}</td>
                                                <td>{{ $item_pending->payment_metode }}</td>
                                                <td>{{ $item_pending->room_type }}</td>
                                                <td>{{ $item_pending->hotel_type }}</td>
                                                <td>{{ $item_pending->departing_from }}</td>
                                                <td>{{ $item_pending->departing_price }}</td>
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
                                            <th>Tipe Pembayaran</th>
                                            <th>Metode Pembayaran</th>
                                            <th>Tipe Kamar</th>
                                            <th>Tipe Hotel</th>
                                            <th>Berangkat Dari</th>
                                            <th>Biaya Keberangkatan</th>
                                            <th>Nominal DP</th>
                                            <th>Total Kekurangan</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($transaction_dp as $item_dp)
                                            <tr>
                                                <td>{{ $item_dp->transaction_code }}</td>
                                                <td>{{ $item_dp->payment_type }}</td>
                                                <td>{{ $item_dp->payment_metode }}</td>
                                                <td>{{ $item_dp->room_type }}</td>
                                                <td>{{ $item_dp->hotel_type }}</td>
                                                <td>{{ $item_dp->departing_from }}</td>
                                                <td>{{ $item_dp->departing_price }}</td>
                                                <td>{{ number_format($item_dp->paymentDetail->payment_amount, 0) }}</td>
                                                <td>{{ number_format($item_dp->grand_total - $item_dp->paymentDetail->payment_amount, 0) }}</td>
                                                <td>
                                                    <button class="btn btn-sm btn-success lunasi" data-id="{{ $item_dp->id }}">Lunasi</button>
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
                                            <th>Tipe Pembayaran</th>
                                            <th>Metode Pembayaran</th>
                                            <th>Tipe Kamar</th>
                                            <th>Tipe Hotel</th>
                                            <th>Berangkat Dari</th>
                                            <th>Biaya Keberangkatan</th>
                                            <th>Status</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($transaction_sudah_bayar as $item_sudah_bayar)
                                            <tr>
                                                <td>{{ $item_sudah_bayar->transaction_code }}</td>
                                                <td>{{ $item_sudah_bayar->payment_type }}</td>
                                                <td>{{ $item_sudah_bayar->payment_metode }}</td>
                                                <td>{{ $item_sudah_bayar->room_type }}</td>
                                                <td>{{ $item_sudah_bayar->hotel_type }}</td>
                                                <td>{{ $item_sudah_bayar->departing_from }}</td>
                                                <td>{{ $item_sudah_bayar->departing_price }}</td>
                                                <td>{{ $item_sudah_bayar->transaction_status }}</td>
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
                                            <tr>
                                                <td>DP</td>
                                                <td>24-x-xxxx</td>
                                                <td class="price-dp"></td>
                                            </tr>
                                            <tr>
                                                <td>Pelunasan</td>
                                                <td>24-x-xxxx</td>
                                                <td class="acumulate-from-dp"></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <small>
                                    Pastikan anda mengecek kembali paket umroh Anda, jika sudah silahkan klik tombol "Ajukan Pembayaran" untuk menuju ke pembayaran.
                                </small>
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
                                            <tr>
                                                <td>24-x-xxxx</td>
                                                <td class="total-biaya"></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <small>
                                    Pastikan anda mengecek kembali paket umroh Anda, jika sudah silahkan klik tombol "Ajukan Pembayaran" untuk menuju ke pembayaran.
                                </small>
                            </div>
                            <button style="float: right;display: none" class="btn btn-success btn-sm mt-5 btn-ajukan">Ajukan Pembayaran</button>
                            <!-- Metode Pembayaran -->
                            <br><div class="view-metode-pembayaran" style="display:none">
                                <h6>Pilih Metode Pembayaran</h6>
                                <button id="pay-button" class="btn btn-primary">Virtual Account</button>
                                <button class="btn btn-primary pay-mandiri">Pembayaran mandiri</button>
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
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary"><i class='bx bxs-memory-card'></i> Simpan</button>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('js')

    <script>
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

        $('.btn-ajukan').click(function(){
            $('.view-metode-pembayaran').show();
            $('.btn-ajukan').hide();
        });

        $('.lunasi').click(function(){
            let id = $(this).data('id');

        });

        function formatNumberWithCommas(number) {
            // Format number with commas
            return number.toString().replace(/\B(?=(\d{3})+(?!\d))/g, '.');
        }
    </script>
@endpush
