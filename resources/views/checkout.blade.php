<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <!-- @TODO: replace SET_YOUR_CLIENT_KEY_HERE with your client key -->
     <script type="text/javascript"
    src="https://app.sandbox.midtrans.com/snap/snap.js"
    data-client-key="{{ config('midtrans.client_key') }}"></script>
    <!-- Note: replace with src="https://app.midtrans.com/snap/snap.js" for Production environment -->
    <title>Laravel</title>
    <link rel="stylesheet" href="{!! asset('assets/home/style.css') !!}">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@3.5.0/fonts/remixicon.css" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@600&display=swap" rel="stylesheet">
</head>
<body>
    @include('template.header')

    <section class="home containers">
        <div class="card-container">
            <div class="card_order_1">
            <?php 
                foreach($paket as $v_paket){ 
            ?>
                <h3><i class='bx bx-money' style="color: rgb(63, 173, 236);"></i> Total Pembayaran</h3>
                <p style="color:rgb(63, 173, 236); font-size:15px;">Rp. <?= number_format($v_paket->price_total,2,',','.') ?></p><br><hr><br>
                <h3><i class='bx bxs-right-arrow-circle' style="color: rgb(63, 173, 236);"></i> Tahapan Pembayaran</h3>
                <p style="font-size:15px;">Pelunasan 100%</p><br><hr><br>
                <h3><i class='bx bxs-bank' style="color: rgb(63, 173, 236);"></i> Metode Pembayaran</h3>
                <p style="font-size:13px;">Transaksi aman, ibadah nyaman. Pembayaran hanya diproses apabila tiket pesawat telah confirm, pembatalan refund 100%.</p><br>
                <center>
                    <button style="background-color: rgb(63, 173, 236); width:200px; height:40px; border-radius:10px" id="pay-button" onclick="pay_virtual()">Virtual Account</button>
                    <button style="background-color: rgb(63, 173, 236); width:200px; height:40px; border-radius:10px" onclick="pay_manual()">Pembayaran Manual</button>
                </center>
                <br>
                <div id="manual">
                    <center><p style="font-size:13px;">Klik bayar sekarang untuk melakukan proses pembayaran</p></center><br>
                    <p style="font-size:15px;">Nama Bank : BCA</p>
                    <p style="font-size:15px;">Nomor Rekening : <input style="width:100px" type="text" value="5260867786" id="mycode" disabled></input><button style="width:50px;background-color: rgb(63, 173, 236);color: white;" class="btn-copy" onclick="copy()"><i class='bx bxs-copy-alt'></i></button></p>
                    <p style="font-size:15px;">Nama Pemilik Rekening : PT. Amanah Umroh Handal</p><br>
                    <div align="right">
                        <a href="{{ route('send_email') }}">
                            <button style="background-color: rgb(63, 173, 236); width:200px; height:40px; border-radius:10px">Bayar Sekarang</button>
                        </a>
                    </div>
                </div>
            </div>

            <div class="card_order_2">
                <h3><i class='bx bxs-receipt' style="color: rgb(63, 173, 236);"></i> Detail Pemesan</h3>
                <p style="font-size:15px;">Nama    : <?= $v_paket->name ?></p>
                <p style="font-size:15px;">No.Telp : 0852323233445</p><br><hr><br>

                <h3><i class='bx bxs-receipt' style="color: rgb(63, 173, 236);"></i> Detail Pesanan</h3><br>
                <?php foreach($travel as $v_travel) { ?>
                    <div class="row_data_travel_2">
                        <div class="col_data_travel_2">
                            <img src="{!! asset('assets/image_travel/'.$v_travel->image) !!}" style="width:50px; border-radius:10%">
                        </div>
                        <div class="col_data_travel_2">
                            <p style="font-size:15px;"><?= $v_travel->employee_name ?></p>
                            <p style="font-size:15px;"><?= $v_travel->number_umroh ?></p>
                        </div>
                    </div>
                    <?php } ?>
                <br><br><hr>
                <p style="font-size:15px;"><?= $v_paket->name_packet ?></p><br>
                <p style="font-size:15px;">Total Jamaah Dewasa = (1x)</p>
                <p style="font-size:15px;">Total Anak(2 - 5 Tahun) = (1x)</p>
                <p style="font-size:15px;">Total Bayi ( dibawah 2 Tahun) = (1x)</p>
            </div>
        <?php
            }
        ?>
        </div>
    </section>

    @include('template.footer')

    <script>
        function copy(){
            var copyText = document.getElementById('mycode');
            copyText.select();
            copyText.setSelectionRange(0, 99999);
            navigator.clipboard.writeText(copyText.value);
        }

        function pay_manual(){
            document.getElementById('manual').style.display = 'block';
        }

        function pay_virtual(){
            document.getElementById('manual').style.display = 'none';
        }

    </script>

    <script type="text/javascript">
        // For example trigger on button clicked, or any time you need
        var payButton = document.getElementById('pay-button');
        payButton.addEventListener('click', function () {
            // Trigger snap popup. @TODO: Replace TRANSACTION_TOKEN_HERE with your transaction token
            window.snap.pay('{{ $snapToken }}', {
            onSuccess: function(result){
                /* You may add your own implementation here */
                window.location.href = '/user_profile';
                alert("payment success!"); console.log(result);
            },
            onPending: function(result){
                /* You may add your own implementation here */
                alert("wating your payment!"); console.log(result);
            },
            onError: function(result){
                /* You may add your own implementation here */
                alert("payment failed!"); console.log(result);
            },
            onClose: function(){
                /* You may add your own implementation here */
                alert('you closed the popup without finishing the payment');
            }
            })
        });
    </script>
</body>
</html>