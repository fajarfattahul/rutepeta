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
    <form action="{{ route('user_update', ['id' => $users->id]) }}" method="POST">
        @csrf
        <input type="text" name="name" placeholder="Nama Pegawai" value="{{$users->name}}">
        <input type="text" name="username" placeholder="Username Pegawai" value="{{$users->username}}">
        <input type="text" name="email" placeholder="Email Pegawai" value="{{$users->email}}">
        <input type="password" name="password" placeholder="Password" value="{{$users->password}}">
        <select name="jabatan" id="">
            <option value="sales">Sales</option>
            <option value="kurir">Kurir</option>
        </select>
        <select name="jk" id="">
            <option value="laki-laki">Laki Laki</option>
            <option value="perempuan">Perempuan</option>
        </select>

        <button>Simpan</button>
    </form>

</body>
</html>