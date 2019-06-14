<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <title>User Create</title>
</head>
<body>

    <div class="container">
        <div class="container">
            <h1>Edit Data</h1>
        </div>
        <div class="container">
            <form action="{{ route('user_update', ['id' => $users->id]) }}" method="POST">
                @csrf
                <div class="form-row">
                    <div class="form-group col-md-9">
                        <label for="inputnamapegawai">Nama Pegawai</label>
                        <input class="form-control" type="text" name="name" placeholder="Nama Pegawai" id="inputnamapegawai" value="{{$users->name}}">
                    </div>
                </div>
                <div class="form-row">
                        <div class="form-group col-md-3">
                            <label for="inputusernamepegawai">Username</label>
                            <input class="form-control" type="text" name="username" placeholder="Username Pegawai" id="inputusernamepegawai" value="{{$users->username}}">
                        </div>
                        <div class="form-group col-md-3">
                            <label for="inputemailpegawai">Email</label>
                            <input class="form-control" type="text" name="email" placeholder="Email Pegawai" id="inputemailpegawai" value="{{$users->email}}">
                        </div>
                        <div class="form-group col-md-3">
                            <label for="inputpasswordpegawai">Password</label>
                            <input class="form-control" type="password" name="password" placeholder="Password" id="inputpasswordpegawai" value="{{$users->password}}">
                        </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-3">
                        <label for="inputjabatanpegawai">Jabatan</label>
                        <select class="form-control" name="jabatan" id="inputjabatanpegawai">
                            <option selected>Pilih..</option>
                            <option value="sales">Sales</option>
                            <option value="kurir">Kurir</option>
                        </select>
                    </div>
                    <div class="form-group col-md-3">
                        <label for="inputjkpegawai">Jenis Kelamin</label>
                        <select class="form-control" name="jk" id="inputjkpegawai">
                            <option selected>Pilih..</option>                                
                            <option value="laki-laki">Laki Laki</option>
                            <option value="perempuan">Perempuan</option>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <button class="btn btn-primary">Simpan</button>
                    <a href="{{ route('user_home') }}" class="btn btn-light">Kembali</a>
                </div>
            </form>
        </div>
    </div>

</body>
</html>