<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>User Index</title>
</head>
<body>
    <h1>Selamat Datang</h1>

    <a href="{{ route('user_create') }}">Tambah Data</a>

    <table border="1" cellpadding="1" cellspacing="0">
        <tr>
            <td>No</td>
            <td>Nama</td>
            <td>Email</td>
            <td>Jabatan</td>
            <td>Jenis Kelamin</td>
            <td>Action</td>
        </tr>

            <?php
                $no = 1;
            ?>

        @foreach ($users as $us)
            <tr>
                <td>{{$no++}}</td>
                <td>{{$us->name}}</td>
                <td>{{$us->email}}</td>
                <td>{{$us->jabatan}}</td>
                <td>{{$us->jk}}</td>
                <td>
                    <a href="{{ route('user_edit', ['id' => $us->id]) }}">Edit</a>
                    <a href="{{ route('user_delete', ['id' => $us->id]) }}">Hapus</a>
                </td>
            </tr>
        @endforeach
    </table>
</body>
</html>