@extends('partials.master')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-xs-11">
                <!-- general form elements -->
                <div class="box box-primary">
                    <div class="box-header with-border">
                        <h3 class="box-title">Tambah Data Pemasaran</h3>
                    </div>
                    <!-- /.box-header -->
                    <!-- form start -->
                    <form action="{{ route('pemasaran_store') }}" method="POST">
                        @csrf
                        <div class="box-body">
                            <div class="form-group">
                                <label for="id_user">Nama User</label>
                                <select class="form-control select2" name="id_user" id="id_user">
                                    @foreach ($users as $d)
                                        <option value="{{$d->id}}">{{$d->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="id_lokasi">Lokasi</label>
                                <select class="form-control select2" name="id_lokasi" id="id_lokasi">
                                    @foreach ($lokasi as $d)
                                        <option value="{{$d->id}}">{{$d->nama_lokasi}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="waktu">Waktu Pemasaran</label>
                                <input class="form-control" type="date" name="waktu_pemasaran" placeholder="waktu" id="waktu">                                
                            </div>
                        </div>
                        <div class="box-footer">
                            <button type="submit" class="btn btn-primary">Submit</button>
                            <a href="{{ route('pemasaran_home') }}" class="btn btn-light">Kembali</a>                            
                        </div>                        
                    </form>
                </div>
                <!-- /.box -->     
            </div>
            <!--/.col (left) -->
        </div>
    </div>
@endsection