<table style="border: 3px solid black;border-collapse: collapse;">
    <thead>
        <tr>
            <th style="border: 1px solid black;width:200px;background-color:#15baef;color:black;font-align:center">No.</th>
            <th style="border: 1px solid black;width:200px;background-color:#15baef;color:black;font-align:center">ID. MITRA/AGEN</th>
            <th style="border: 1px solid black;width:200px;background-color:#15baef;color:black;font-align:center">NAMA MITRA/AGEN</th>
            <th style="border: 1px solid black;width:200px;background-color:#15baef;color:black;font-align:center">HP. MITRA/AGEN</th>
            <th style="border: 1px solid black;width:200px;background-color:#15baef;color:black;font-align:center">NAMA SESUAI KTP/KK</th>
            <th style="border: 1px solid black;width:200px;background-color:#15baef;color:black;font-align:center">NAMA KTP/KK</th>
            <th style="border: 1px solid black;width:200px;background-color:#15baef;color:black;font-align:center">NAMA AYAH KANDUNG</th>
            <th style="border: 1px solid black;width:200px;background-color:#15baef;color:black;font-align:center">TEMPAT LAHIR</th>
            <th style="border: 1px solid black;width:200px;background-color:#15baef;color:black;font-align:center">TANGGAL LAHIR</th>
            <th style="border: 1px solid black;width:200px;background-color:#15baef;color:black;font-align:center">STATUS PERNIKAHAN</th>
            <th style="border: 1px solid black;width:200px;background-color:#15baef;color:black;font-align:center">TITLE</th>
            <th style="border: 1px solid black;width:200px;background-color:#15baef;color:black;font-align:center">JENIS KELAMIN</th>
            <th style="border: 1px solid black;width:200px;background-color:#15baef;color:black;font-align:center">KEWARGANEGARAAN</th>
            <th style="border: 1px solid black;width:200px;background-color:#15baef;color:black;font-align:center">ALAMAT</th>
            <th style="border: 1px solid black;width:200px;background-color:#15baef;color:black;font-align:center">PROVINSI</th>
            <th style="border: 1px solid black;width:200px;background-color:#15baef;color:black;font-align:center">KOTA</th>
            <th style="border: 1px solid black;width:200px;background-color:#15baef;color:black;font-align:center">HANDPHONE</th>
            <th style="border: 1px solid black;width:200px;background-color:#15baef;color:black;font-align:center">EMAIL</th>
            <th style="border: 1px solid black;width:200px;background-color:#15baef;color:black;font-align:center">PENDIDIKAN</th>
            <th style="border: 1px solid black;width:200px;background-color:#15baef;color:black;font-align:center">PEKERJAAN</th>
            <th style="border: 1px solid black;width:200px;background-color:#15baef;color:black;font-align:center">GOL.DARAH</th>
            <th style="border: 1px solid black;width:200px;background-color:#15baef;color:black;font-align:center">PERGI UMROH/HAJI</th>
            <th style="border: 1px solid black;width:200px;background-color:#15baef;color:black;font-align:center">NAMA PASPOR</th>
            <th style="border: 1px solid black;width:200px;background-color:#15baef;color:black;font-align:center">NO. PASPOR</th>
            <th style="border: 1px solid black;width:200px;background-color:#15baef;color:black;font-align:center">TEMPAT DIKELUARKAN</th>
            <th style="border: 1px solid black;width:200px;background-color:#15baef;color:black;font-align:center">TANGGAL DIKELUARKAN</th>
            <th style="border: 1px solid black;width:200px;background-color:#15baef;color:black;font-align:center">HABIS MASA BERLAKU</th>
            <th style="border: 1px solid black;width:200px;background-color:#15baef;color:black;font-align:center">NAMA PENDAMPING</th>
            <th style="border: 1px solid black;width:200px;background-color:#15baef;color:black;font-align:center">HUBUNGAN</th>
            <th style="border: 1px solid black;width:200px;background-color:#15baef;color:black;font-align:center">NAMA PAKET UMROH</th>
            <th style="border: 1px solid black;width:200px;background-color:#15baef;color:black;font-align:center">JENIS KAMAR</th>
            <th style="border: 1px solid black;width:200px;background-color:#15baef;color:black;font-align:center">TANGGAL KEBERANGKATAN</th>
            <th style="border: 1px solid black;width:200px;background-color:#15baef;color:black;font-align:center">HARGA PAKET</th>
        </tr>
    </thead>
    <tbody>
        @php
            $no=1;
        @endphp
        @foreach($data as $item => $value)
        <tr>
            <td style="font-align:center;border: 1px solid black;">{{ $no++; }}</td>
            <td style="font-align:center;border: 1px solid black;">-</td>
            <td style="font-align:center;border: 1px solid black;">{{ $value->name_agen }}</td>
            <td style="font-align:center;border: 1px solid black;">{{ $value->phone_agen }}</td>
            <td style="font-align:center;border: 1px solid black;">{{ $value->name }}</td>
            <td style="font-align:center;border: 1px solid black;">{{ $value->ktp }}</td>
            <td style="font-align:center;border: 1px solid black;">{{ $value->father_name }}</td>
            <td style="font-align:center;border: 1px solid black;">{{ $value->born_place }}</td>
            <td style="font-align:center;border: 1px solid black;">{{ $value->date_of_birth }}</td>
            <td style="font-align:center;border: 1px solid black;">{{ $value->marital_status }}</td>
            <td style="font-align:center;border: 1px solid black;">{{ $value->title }}</td>
            <td style="font-align:center;border: 1px solid black;">{{ $value->gender }}</td>
            <td style="font-align:center;border: 1px solid black;">{{ $value->citizenship }}</td>
            <td style="font-align:center;border: 1px solid black;">{{ $value->address }}</td>
            <td style="font-align:center;border: 1px solid black;">{{ $value->province_name }}</td>
            <td style="font-align:center;border: 1px solid black;">{{ $value->regencies_name }}</td>
            <td style="font-align:center;border: 1px solid black;">{{ $value->phone }}</td>
            <td style="font-align:center;border: 1px solid black;">{{ $value->email }}</td>
            <td style="font-align:center;border: 1px solid black;">{{ $value->education }}</td>
            <td style="font-align:center;border: 1px solid black;">{{ $value->job }}</td>
            <td style="font-align:center;border: 1px solid black;">{{ $value->blood_groub }}</td>
            <td style="font-align:center;border: 1px solid black;">{{ $value->status_umroh }}</td>
            <td style="font-align:center;border: 1px solid black;">{{ $value->passport_name }}</td>
            <td style="font-align:center;border: 1px solid black;">{{ $value->passport_number }}</td>
            <td style="font-align:center;border: 1px solid black;">{{ $value->passport_place }}</td>
            <td style="font-align:center;border: 1px solid black;">{{ $value->passport_date }}</td>
            <td style="font-align:center;border: 1px solid black;">{{ $value->expired }}</td>
            <td style="font-align:center;border: 1px solid black;">{{ $value->companion_name }}</td>
            <td style="font-align:center;border: 1px solid black;">{{ $value->connection }}</td>
            <td style="font-align:center;border: 1px solid black;">{{ $value->name_packet }}</td>
            <td style="font-align:center;border: 1px solid black;">{{ $value->room_type }}</td>
            <td style="font-align:center;border: 1px solid black;">{{ $value->departure_date }}</td>
            <td style="font-align:center;border: 1px solid black;">Rp. {{ number_format($value->grand_total) }}</td>
        </tr>
        @endforeach
    </tbody>
</table>