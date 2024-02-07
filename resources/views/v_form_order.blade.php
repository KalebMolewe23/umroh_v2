<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel</title>
    <link rel="stylesheet" href="{!! asset('assets/home/style.css') !!}">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@3.5.0/fonts/remixicon.css" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@600&display=swap" rel="stylesheet">
    <style>
        table {
        border-collapse: collapse;
        border-spacing: 0;
        width: 100%;
        border: 1px solid #ddd;
        }

        th, td {
        text-align: left;
        padding: 8px;
        }

        tr:nth-child(even){background-color: #f2f2f2}
    </style>
</head>
<body>
    @include('template.header')
    <section class="home containers">
    <div class="card-container">
        <?php 
            foreach($paket as $v_paket){ 
        ?>
            <div class="card_order_1">
                <h3><i class='bx bxs-user-circle' style="color: rgb(63, 173, 236);"></i> Data Pemesanan</h3>
                <p><?= $v_paket->name; ?></p>
                <p><?= $v_paket->email; ?></p>
                <p>No. Handphone Akun Yang Pesan</p><br><hr><br>
                <h3><i class='bx bxs-right-arrow-circle' style="color: rgb(63, 173, 236);"></i> Tipe Pembayaran</h3>
                <button style="background-color: rgb(63, 173, 236); width:200px; height:30px; border-radius:10px" onclick="dp()">Pembayaran DP</button>
                <button style="background-color: rgb(63, 173, 236); width:200px; height:30px; border-radius:10px" onclick="pelunasan()">Pelunasan 100%</button>
                <br><br>
                <div id="pembayaran_dp">
                    <form action="/product/proses_save_order_packet" method="post">
                        Transaksi aman, ibadah nyaman. Pembayaran hanya diproses apabila tiket pesawat telah confirm.
                        <br><br>
                        <div style="overflow-x:auto;">
                            <table>
                                <tr>
                                    <th>Tahapan</th>
                                    <th>Jatuh Tempo</th>
                                    <th>Biaya</th>
                                </tr>
                                <tr>
                                    <td>DP</td>
                                    <td><?= date('d-m-Y', strtotime($dp)) ?></td>
                                    <td>Rp. <?= number_format($v_paket->dp,2,',','.') ?></td>
                                </tr>
                                <?php
                                    $pelunasan = $v_paket->price_total - $v_paket->dp;
                                ?>
                                <tr>
                                    <td>Pelunasan</td>
                                    <td><?= date('d-m-Y', strtotime($uang_pelunasan)) ?></td>
                                    <td>Rp. <?= number_format($pelunasan,2,',','.') ?></td>
                                </tr>
                            </table>
                        </div><br><br>
                        <p style="font-size:10px;">Pastikan anda mengecek kembali paket umroh anda, jika sudah silahkan klik tombol "Ajukan Pembiayaan" untuk menuju ke pembayaran.</p>
                        <br>
                        <div align="right">
                            <button style="background-color: rgb(63, 173, 236); width:200px; height:40px; border-radius:10px">Ajukan Pembiayaan</button>
                        </div>
                    </form>
                </div>
                <div id="pembayaran_lunas">
                    <form action="/product/proses_save_order_packet" method="post">
                        @csrf
                        <input type="hidden" name="id_order" value="<?= $v_paket->id_order ?>">
                        <input type="hidden" name="id_user" value="<?= $v_paket->id_user ?>">
                        <input type="hidden" name="id_packet" value="<?= $v_paket->id_packet ?>">
                        <input type="hidden" name="name_order" value="<?= $v_paket->name ?>">
                        <input type="hidden" name="date_transaction" value="<?= $uang_pelunasan ?>">
                        <input type="hidden" name="total_transaction" value="<?= $v_paket->price_total ?>">
                        <input type="hidden" name="amount" value="3">
                        <input type="hidden" name="payment_type" value="Pelunasan 100%">
                            Pembayaran lunas 100%
                            <br><br>
                            <table>
                                <tr>
                                    <th>Jatuh Tempo</th>
                                    <th>Total Biaya</th>
                                </tr>
                                <tr>
                                    <td><?= date('d-m-Y', strtotime($uang_pelunasan)) ?></td>
                                    <td>Rp. <?= number_format($v_paket->price_total,2,',','.') ?></td>
                                </tr>
                            </table><br>
                            <p style="font-size:10px;">Pastikan anda mengecek kembali paket umroh anda, jika sudah silahkan klik tombol "Ajukan Pembiayaan" untuk menuju ke pembayaran.</p>
                            <br>
                            <div align="right">
                                <button style="background-color: rgb(63, 173, 236); width:200px; height:40px; border-radius:10px">Ajukan Pembiayaan</button>
                            </div>
                    </form>
                </div>
            </div>
            <div class="card_order_2">
                <h3><i class='bx bxs-receipt' style="color: rgb(63, 173, 236);"></i> Detail Pemesanan</h3><br>
                <p><?= $v_paket->name_packet ?></p><br><hr><br>
                <p>Total Jamaah Dewasa </p>
                <p>(1x) Rp. 1.000.000</p><br>
                <p>Total Anak(2 - 5 Tahun) </p>
                <p>(1x) Rp. 1.000.000</p><br>
                <p>Total Bayi ( dibawah 2 Tahun)</p>
                <p>(1x) Rp. 1.000.000</p><br><hr><br>
                <p style="color:rgb(63, 173, 236); font-size:20px;" id="moneyDisplay_double">Total Biaya Rp <?= number_format($v_paket->price_total,2,',','.') ?></p>
            </div>
        <?php } ?>
    </div>
    </section>
    <br><br>
    @include('template.footer')

    <script>

        function dp(){
            document.getElementById('pembayaran_dp').style.display = 'block';
            document.getElementById('pembayaran_lunas').style.display = 'none';
        }

        function pelunasan(){
            document.getElementById('pembayaran_dp').style.display = 'none';
            document.getElementById('pembayaran_lunas').style.display = 'block';
        }

    </script>
</body>
</html>