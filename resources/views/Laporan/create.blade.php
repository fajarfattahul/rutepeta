<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laporan Create</title>
</head>
<body>
    
    <h1>Tambah Data</h1>
    
    <form action="{{ route('laporan_store') }}" method="POST">
        {{ csrf_field() }}
        <input type="text" name="id_pemasaran" placeholder="Pemasaran">
        <input type="text" name="keterangan" placeholder="Keterangan">

        <button>Simpan</button>
    </form>

</body>
</html>