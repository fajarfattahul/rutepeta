<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Index Laporan</title>
</head>
<body>
    <h1>Selamat Datang</h1>

    <table border="1" cellpadding="1" cellspacing="0">
        <tr>
            <td>No</td>
            <td>Nama Sales</td>
            <td>Lokasi</td>
            <td>Wilayah</td>
            <td>Waktu Pemasaran</td>
            <td>Keterangan</td>
        </tr>

            <?php
                $no = 1;
            ?>

        @foreach ($pemasaran_lap as $lap)
            <tr>
                <td>{{$no++}}</td>
                <td>{{$lap->pemasaran->user->name}}</td>
                <td>{{$lap->pemasaran->lokasi->nama_lokasi}}</td>
                <td>{{$lap->pemasaran->lokasi->wilayah}}</td>
                <td>{{$lap->pemasaran->waktu_pemasaran}}</td>
                <td>{{$lap->ket}}</td>
            </tr>
        @endforeach
    </table>
</body>
</html>