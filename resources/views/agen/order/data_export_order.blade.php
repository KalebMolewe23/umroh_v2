<?php
    use Carbon\Carbon;
?>

    <table style="border: 3px solid black;border-collapse: collapse;">
        <thead>
            <tr>
                <th style="border: 1px solid black;width:200px;background-color:#15baef;color:black;font-align:center">No. </th>
                <th style="border: 1px solid black;width:200px;background-color:#15baef;color:black;font-align:center">Kode Transaksi</th>
                <th style="border: 1px solid black;width:200px;background-color:#15baef;color:black;font-align:center">Tipe Kamar</th>
                <th style="border: 1px solid black;width:200px;background-color:#15baef;color:black;font-align:center">Keberangkatan</th>
                <th style="border: 1px solid black;width:200px;background-color:#15baef;color:black;font-align:center">DP</th>
                <th style="border: 1px solid black;width:200px;background-color:#15baef;color:black;font-align:center">Total Harga</th>
                <th style="border: 1px solid black;width:200px;background-color:#15baef;color:black;font-align:center">Status Transaksi</th>
                <th style="border: 1px solid black;width:200px;background-color:#15baef;color:black;font-align:center">Customer</th>
            </tr>
        </thead>
        <tbody>
            @php
                $no=1;
            @endphp
            @foreach($data as $item => $value)
                <tr>
                    <td style="font-align:center;border: 1px solid black;">{{ $no++; }}</td>
                    <td style="font-align:center;border: 1px solid black;">{{ $value->transaction_code }}</td>
                    <td style="font-align:center;border: 1px solid black;">
                        <?php $date = Carbon::parse($value->created_at); ?>
                        {{ $date->format('d F Y'); }}
                    </td>
                    <td style="font-align:center;border: 1px solid black;">{{ $value->room_type }}</td>
                    <td style="font-align:center;border: 1px solid black;">{{ $value->departing_from }}</td>
                    <td style="font-align:center;border: 1px solid black;">Rp. {{ number_format($value->dp) }}</td>
                    <td style="font-align:center;border: 1px solid black;">Rp. {{ number_format($value->grand_total) }}</td>
                    <td style="font-align:center;border: 1px solid black;">{{ $value->transaction_status }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</html>