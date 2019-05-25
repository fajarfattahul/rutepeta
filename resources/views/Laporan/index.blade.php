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

    <a href="{{ route('laporan_create') }}">Tambah Data</a>

    <table border="1" cellpadding="1" cellspacing="0">
        <tr>
            <td>No</td>
            <td>Pemasaran</td>
            <td>Keterangan</td>
            <td>Action</td>
        </tr>

            <?php
                $no = 1;
            ?>

        @foreach ($laporan as $lpr)
            <tr>
                <td>{{$no++}}</td>
                <td>{{$lpr->id_pemasaran}}</td>
                <td>{{$lpr->keterangan}}</td>
                <td>
                    <a href="{{ route('laporan_edit', ['id' => $lpr->id]) }}">Edit</a>
                    <a href="{{ route('laporan_delete', ['id' => $lpr->id]) }}">Hapus</a>
                </td>
            </tr>
        @endforeach
    </table>
</body>
</html>