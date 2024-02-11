<table>
    <thead>
        <tr>
            <th>No.</th>
            <th>ID. MITRA/AGEN</th>
            <th>NAMA MITRA/AGEN</th>
            <th>HP. MITRA/AGEN</th>
            <th>NAMA SESUAI KTP/KK</th>
            <th>NAMA KTP/KK</th>
            <th>NAMA AYAH KANDUNG</th>
            <th>TEMPAT LAHIR</th>
            <th>TANGGAL LAHIR</th>
            <th>STATUS PERNIKAHAN</th>
            <th>TITLE</th>
            <th>JENIS KELAMIN</th>
            <th>KEWARGANEGARAAN</th>
            <th>ALAMAT</th>
            <th>PROVINSI</th>
            <th>KOTA</th>
            <th>HANDPHONE</th>
            <th>EMAIL</th>
            <th>PENDIDIKAN</th>
            <th>PEKERJAAN</th>
            <th>GOL.DARAH</th>
            <th>PERGI UMROH/HAJI</th>
            <th>NAMA PASPOR</th>
            <th>NO. PASPOR</th>
            <th>TEMPAT DIKELUARKAN</th>
            <th>TANGGAL DIKELUARKAN</th>
            <th>HABIS MASA BERLAKU</th>
            <th>NAMA PENDAMPING</th>
            <th>HUBUNGAN</th>
            <th>NAMA PAKET UMROH</th>
            <th>JENIS KAMAR</th>
            <th>TANGGAL KEBERANGKATAN</th>
            <th>HARGA PAKET</th>
        </tr>
    </thead>
    <tbody>
        @php
            $no=1;
        @endphp
        @foreach($data as $item => $value)
        <tr>
            <td>{{ $no++; }}</td>
            <td>-</td>
            <td>{{ $value->name_agen }}</td>
            <td>{{ $value->phone_agen }}</td>
            <td>{{ $value->name }}</td>
            <td>{{ $value->ktp }}</td>
            <td>{{ $value->father_name }}</td>
            <td>{{ $value->born_place }}</td>
            <td>{{ $value->date_of_birth }}</td>
            <td>{{ $value->marital_status }}</td>
            <td>{{ $value->title }}</td>
            <td>{{ $value->gender }}</td>
            <td>{{ $value->citizenship }}</td>
            <td>{{ $value->address }}</td>
            <td>{{ $value->province_name }}</td>
            <td>{{ $value->regencies_name }}</td>
            <td>{{ $value->phone }}</td>
            <td>{{ $value->email }}</td>
            <td>{{ $value->education }}</td>
            <td>{{ $value->job }}</td>
            <td>{{ $value->blood_groub }}</td>
            <td>{{ $value->status_umroh }}</td>
            <td>{{ $value->passport_name }}</td>
            <td>{{ $value->passport_number }}</td>
            <td>{{ $value->passport_place }}</td>
            <td>{{ $value->passport_date }}</td>
            <td>{{ $value->expired }}</td>
            <td>{{ $value->companion_name }}</td>
            <td>{{ $value->connection }}</td>
            <td>{{ $value->name_packet }}</td>
            <td>{{ $value->room_type }}</td>
            <td>{{ $value->departure_date }}</td>
            <td>{{ $value->grand_total }}</td>
        </tr>
        @endforeach
    </tbody>
</table>