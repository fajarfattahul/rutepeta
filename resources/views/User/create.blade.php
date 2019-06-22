@extends('partials.master')

@section('content')
    <div class="container">
        <div class="row">

            <div class="col-xs-11">
                <!-- general form elements -->
                <div class="box box-primary">
                    <div class="box-header with-border">
                        <h3 class="box-title">Tambah Data Pegawai</h3>
                    </div>
                    <!-- /.box-header -->
                    <!-- form start -->
                    <form role="form" action="{{ route('user_store') }}" method="POST">
                        @csrf
                        <div class="box-body">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Nama Pegawai</label>
                                <input type="text" name="name" class="form-control" id="inputnamapegawai" placeholder="Masukkan Nama Pegawai">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Email</label>
                                <input type="email" name="email" class="form-control" id="inputemailpegawai" placeholder="Masukkan Email">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Password</label>
                                <input type="password" name="password" class="form-control" id="inputpasswordpegawai" placeholder="Masukkan Password">
                            </div>
                            <div class="form-group">
                                <label for="inputjabatanpegawai">Jabatan</label>
                                <select class="form-control select2" style="width: 100%;" name="jabatan" id="inputjabatanpegawai">
                                    <option selected>Pilih..</option>
                                    <option value="sales">Sales</option>
                                    <option value="kurir">Kurir</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="inputjkpegawai">Jenis Kelamin</label>
                                <select class="form-control select2" style="width: 100%;" name="jk" id="inputjkpegawai">
                                    <option selected>Pilih..</option>                                
                                    <option value="laki-laki">Laki Laki</option>
                                    <option value="perempuan">Perempuan</option>
                                </select>
                            </div>
                            {{-- <div class="form-group">
                                <label for="exampleInputFile">File input</label>
                                <input type="file" id="exampleInputFile">
                                <p class="help-block">Example block-level help text here.</p>
                            </div> --}}
                        </div>
                        <!-- /.box-body -->
                        <div class="box-footer">
                            <button type="submit" class="btn btn-primary">Submit</button>
                            <a href="{{ route('user_home') }}" class="btn btn-light">Kembali</a>
                        </div>
                    </form>
                </div>
                <!-- /.box -->     
            </div>
            <!--/.col (left) -->
        </div>
    </div>
@endsection
