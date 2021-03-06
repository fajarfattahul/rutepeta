@extends('partials.master')

@section('content')

    <div class="container">
            <div class="row">
                <div class="col-xs-11">
                    <!-- general form elements -->
                    <div class="box box-primary">
                        <div class="box-header with-border">
                            <h3 class="box-title">Tambah Data Lokasi</h3>
                        </div>
                        <!-- /.box-header -->
                        <!-- form start -->
                        <form role="form" action="{{ route('lokasi_store') }}" method="POST">
                            @csrf
                            <div class="box">
                                <div class="box-body">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Nama Lokasi</label>
                                        <input class="form-control" type="text" name="nama_lokasi" placeholder="Nama Lokasi">
                                    </div>
                                    <div class="form-group">
                                        <label for="inputjabatanpegawai">Jabatan</label>
                                        <select class="form-control select2" name="wilayah" id="">
                                                <option value="utara">UTARA</option>
                                                <option value="selatan">SELATAN</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Latitude</label>
                                        <input class="form-control" type="text" id="latitude" name="latitude" placeholder="Nama Lokasi" value="">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Longitude</label>
                                        <input class="form-control" type="text" id="longitude" name="longitude" placeholder="Nama Lokasi" value="">
                                    </div>
                                    <div class="box-header with-border">
                                        <div id='map'></div>
                                        <pre id='info'></pre>
                                        <pre id='coordinates' class='coordinates'></pre>
                                    </div>
                                    {{-- <div class="form-group" id="locationPicker" style="width: auto; height: 300px;"></div> --}}
                                </div>
                                <!-- /.box-body -->
                                <div class="box-footer">
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                    <a href="{{ route('lokasi_home') }}" class="btn btn-light">Kembali</a>
                                </div>
                            </div>
                        </form>
                    </div>
                    <!-- /.box -->     
                </div>
                <!--/.col (left) -->
            </div>
        </div>
@endsection
