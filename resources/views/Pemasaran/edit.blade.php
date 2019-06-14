<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pemasaran Create</title>
</head>
<body>
    
    <h1>Edit Data</h1>
    
    <form action="{{ route('pemasaran_update', ['id' => $pemasaran->id]) }}" method="POST">
        @csrf
        <select name="id_user" id="id_user">
            @foreach ($user as $d)
                <option value="{{$d->id}}">{{$d->name}}</option>
            @endforeach
        </select>
        <select name="id_lokasi" id="id_lokasi">
            @foreach ($lokasi as $d)
                <option value="{{$d->id}}">{{$d->nama_lokasi}}</option>
            @endforeach
        </select>
        <input type="date" name="waktu_pemasaran" placeholder="waktu" value="{{$pemasaran->waktu_pemasaran}}">
        
        <button>Simpan</button>
    </form>

</body>
</html>