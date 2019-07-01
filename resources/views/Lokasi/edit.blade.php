@extends('partials.master')

@section('content')
    <div class="row">
        <div class="col-xs-11">
            <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title">Edit Data Pegawai</h3>
                </div>

                <form action="{{ route('lokasi_update', ['id' => $lokasi->id]) }}" method="POST">
                    @csrf
                    <div class="box-body">
                        <div class="form-group">
                            <label for="namalokasi">Nama lokasi_update</label>
                            <input type="text" class="form-control" name="nama_lokasi" id="namalokasi" placeholder="Nama Lokasi" value="{{$lokasi->nama_lokasi}}">
                        </div>
                        <div class="form-group">
                            <label for="namawilayah">Wilayah</label>
                            <select class="form-control select2" name="wilayah" id="namawilayah" value="{{$lokasi->wilayah}}">
                                    <option value="utara">UTARA</option>
                                    <option value="selatan">SELATAN</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="latitudelokasi">Latitude</label>
                            <input type="text" class="form-control" id="latitude" name="latitude" placeholder="Latitude" value="{{$lokasi->latitude}}">
                        </div>
                        <div class="form-group">
                            <label for="longitudelokasi">Longitude</label>
                            <input type="text" class="form-control" id="longitude" name="longitude" placeholder="Longitude" value="{{$lokasi->longitude}}">
                        </div>
                        <div class="form-group" id="locationPicker" style="width: auto; height: 300px;"></div>
                    </div>
                    
                    <div class="box-footer">
                        <button class="btn btn-primary">Simpan</button>
                        <a href="{{ route('lokasi_home') }}" class="btn btn-light">Kembali</a>
                    </div>

                </form>

            </div>
        </div>
    </div>
@endsection
