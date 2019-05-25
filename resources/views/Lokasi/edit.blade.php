<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>User Create</title>
</head>
<body>
    
    <h1>Tambah Data</h1>
    
    <form action="{{ route('lokasi_update', ['id' => $lokasi->id]) }}" method="POST">
        @csrf        
        <input type="text" name="nama_lokasi" placeholder="Nama Lokasi" value="{{$lokasi->nama_lokasi}}">
        <select name="wilayah" id="">
            <option value="utara">UTARA</option>
            <option value="selatan">SELATAN</option>
        </select>
        <input type="text" name="latitude" placeholder="Latitude" value="{{$lokasi->latitude}}">
        <input type="text" name="longitude" placeholder="Longitude" value="{{$lokasi->longitude}}">

        <button>Simpan</button>
    </form>

</body>
</html>