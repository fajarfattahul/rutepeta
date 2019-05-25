<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Index Lokasi</title>
</head>
<body>
    <h1>Selamat Datang</h1>

    <a href="{{ route('lokasi_create') }}">Tambah Data</a>

    <table border="1" cellpadding="1" cellspacing="0">
        <tr>
            <td>No</td>
            <td>Nama</td>
            <td>Wilayah</td>
            <td>Latitude</td>
            <td>Longitude</td>
            <td>Action</td>
        </tr>

            <?php
                $no = 1;
            ?>

        @foreach ($lokasi as $lks)
            <tr>
                <td>{{$no++}}</td>
                <td>{{$lks->nama_lokasi}}</td>
                <td>{{$lks->wilayah}}</td>
                <td>{{$lks->latitude}}</td>
                <td>{{$lks->longitude}}</td>
                <td>
                    <a href="{{ route('lokasi_edit', ['id' => $lks->id]) }}">Edit</a>
                    <a href="{{ route('lokasi_delete', ['id' => $lks->id]) }}">Hapus</a>
                </td>
            </tr>
        @endforeach
    </table>
</body>
</html>