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
    
    <form action="{{ route('laporan_update', ['id' => $laporan->id]) }}" method="POST">
        @csrf        
        <input type="text" name="id_pemasaran" placeholder="Pemasaran" value="{{$laporan->id_pemasaran}}">
        <input type="text" name="keterangan" placeholder="Keterangan" value="{{$laporan->keterangan}}">

        <button>Simpan</button>
    </form>

</body>
</html>