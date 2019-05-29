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

    <a href="{{ route('pemasaran_create') }}">Tambah Data</a>

    <table border="1" cellpadding="1" cellspacing="0">
        <tr>
            <td>No</td>
            <td>Nama</td>
            <td>Lokasi</td>
            <td>Waktu Pemasaran</td>
            <td>Action</td>
        </tr>

            <?php
                $no = 1;
            ?>

        @foreach ($pemasaran as $pms)
            <tr>
                <td>{{$no++}}</td>
                <td>{{$pms->id_user}}</td>                    
                <td>{{$pms->id_lokasi}}</td>
                <td>{{$pms->waktu_pemasaran}}</td>
                <td>
                    <a href="{{ route('pemasaran_edit', ['id' => $pms->id]) }}">Edit</a>
                    <a href="{{ route('pemasaran_delete', ['id' => $pms->id]) }}">Hapus</a>
                </td>
            </tr>
        @endforeach
    </table>
</body>
</html>