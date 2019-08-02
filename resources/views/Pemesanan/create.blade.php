@extends('partials.master')

@section('content')

    <div class="container">
            <div class="row">
                <div class="col-xs-11">
                    <!-- general form elements -->
                    <div class="box box-primary">
                        <div class="box-header with-border">
                            <h3 class="box-title">Tambah Data Lokasi Pengiriman</h3>
                        </div>
                        <!-- /.box-header -->
                        <!-- form start -->
                        <form role="form" action="{{ route('pemesanan_store') }}" method="POST">
                            @csrf
                            <div class="box-body">
                                <div class="form-group">
                                    <label for="id_user">Nama Barang</label>
                                    <select class="form-control select2" name="id_barang" id="id_barang">
                                        @foreach ($barang as $d)
                                            <option value="{{$d->id}}">{{$d->nama_barang}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Jumlah Barang</label>
                                    <input class="form-control" type="number" name="jumlah_barang" placeholder="Jumlah Barang">
                                </div>
                                <div class="form-group">
                                    <label for="id_lokasi">Lokasi Pemesanan</label>
                                    <select class="form-control select2" name="id_lokasi" id="id_lokasi">
                                        @foreach ($lokasi as $d)
                                            <option value="{{$d->id}}">{{$d->nama_lokasi}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Latitude</label>
                                    <input class="form-control" type="text" id="latitude" name="latitude" placeholder="Nama Lokasi">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Longitude</label>
                                    <input class="form-control" type="text" id="longitude" name="longitude" placeholder="Nama Lokasi">
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
                                <a href="{{ route('pemesanan_home') }}" class="btn btn-light">Kembali</a>
                            </div>
                        </form>
                    </div>
                    <!-- /.box -->     
                </div>
                <!--/.col (left) -->
            </div>
        </div>
@endsection
