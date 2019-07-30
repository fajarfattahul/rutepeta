@extends('partials.master')

@section('content')
    <div class="row">
        <div class="col-xs-11">
            <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title">Edit Data Barang</h3>
                </div>

                <form action="{{ route('barang_update', ['id' => $barang->id]) }}" method="POST">
                    @csrf
                    <div class="box-body">
                        <div class="form-group">
                            <label for="namalokasi">Nama Barang</label>
                            <input type="text" class="form-control" name="nama_barang" id="namabarang" placeholder="Nama Barang" value="{{$barang->nama_barang}}">
                        </div>
                        <div class="form-group">
                            <label for="namalokasi">Kode Barang</label>
                            <input type="text" class="form-control" name="kd_barang" id="kodebarang" placeholder="Kode Barang" value="{{$barang->kd_barang}}">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Harga Barang</label>
                            <input class="form-control" type="text" name="harga" placeholder="Harga Barang" value="{{$barang->harga}}">
                        </div>
                    </div>
                    
                    <div class="box-footer">
                        <button class="btn btn-primary">Simpan</button>
                        <a href="{{ route('barang_home') }}" class="btn btn-light">Kembali</a>
                    </div>

                </form>

            </div>
        </div>
    </div>
@endsection
