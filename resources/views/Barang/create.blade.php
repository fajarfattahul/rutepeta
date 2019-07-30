@extends('partials.master')

@section('content')

    <div class="container">
            <div class="row">
                <div class="col-xs-11">
                    <!-- general form elements -->
                    <div class="box box-primary">
                        <div class="box-header with-border">
                            <h3 class="box-title">Tambah Data Barang</h3>
                        </div>
                        <!-- /.box-header -->
                        <!-- form start -->
                        <form role="form" action="{{ route('barang_store') }}" method="POST">
                            @csrf
                            <div class="box-body">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Nama Barang</label>
                                    <input class="form-control" type="text" name="nama_barang" placeholder="Nama Barang">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Kode Barang</label>
                                    <input class="form-control" type="text" name="kd_barang" placeholder="Kode Barang">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Harga Barang</label>
                                    <div class="input-group">
                                        <span class="input-group-addon">Rp. </span>
                                        <input class="form-control" type="text" name="harga" placeholder="Harga Barang Satuan">
                                    </div>
                                </div>
                            </div>
                            <!-- /.box-body -->
                            <div class="box-footer">
                                <button type="submit" class="btn btn-primary">Submit</button>
                                <a href="{{ route('barang_home') }}" class="btn btn-light">Kembali</a>
                            </div>
                        </form>
                    </div>
                    <!-- /.box -->     
                </div>
                <!--/.col (left) -->
            </div>
        </div>
@endsection
