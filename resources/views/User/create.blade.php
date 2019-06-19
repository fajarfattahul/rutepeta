@extends('partials.master')

@section('content')
    <div class="container">
        <div class="row">
            <div class="container">
                <h1>Tambah Data</h1>
            </div>

            <div class="container">
                <form action="{{ route('user_store') }}" method="POST">
                    {{ csrf_field() }}
                    <div class="form-row">
                        <div class="form-group col-md-9">
                            <label for="inputnamapegawai">Nama Pegawai</label>
                            <input class="form-control" type="text" name="name" placeholder="Nama Pegawai" id="inputnamapegawai">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-3">
                            <label for="inputusernamepegawai">Username</label>
                            <input class="form-control" type="text" name="username" placeholder="Username Pegawai" id="inputusernamepegawai">
                        </div>
                        <div class="form-group col-md-3">
                            <label for="inputemailpegawai">Email</label>
                            <input class="form-control" type="text" name="email" placeholder="Email Pegawai" id="inputemailpegawai">
                        </div>
                        <div class="form-group col-md-3">
                            <label for="inputpasswordpegawai">Password</label>
                            <input class="form-control" type="password" name="password" placeholder="Password" id="inputpasswordpegawai">
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
    </div>
@endsection
