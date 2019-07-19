@extends('partials.master')

@section('content')
    
    <div class="row">
        <div class="col-xs-12">
            <a href="{{ route('pemesanan_create') }}" class="btn btn-primary">Tambah Data</a>
            <br><br>
            <div class="box">
                <div class="box-header">
                    <h3 class="box-title">Data Lokasi</h3>
            
                    <div class="box-tools">
                        <div class="input-group input-group-sm" style="width: 150px;">
                            <input type="text" name="table_search" class="form-control pull-right" placeholder="Cari">
                
                            <div class="input-group-btn">
                                    <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
                            </div>
                        </div>
                    </div>
                </div>
                        <!-- /.box-header -->
                <div class="box-body table-responsive no-padding">
                    <table class="table table-hover"> 
                        <tr>
                            <th>No</th>
                            <th>Nama Barang</th>
                            <th>Jumlah</th>
                            <th>Lokasi</th>
                            <th>Keterangan</th>
                            <th>Action</th>
                        </tr>

                            <?php
                                $no = 1;
                            ?>

                        {{-- @foreach ($lokasi as $lks)
                        <tr>
                            <td>{{$no++}}</td>
                            <td>{{$lks->nama_lokasi}}</td>
                            <td>{{$lks->wilayah}}</td>
                            <td>{{$lks->latitude}}</td>
                            <td>{{$lks->longitude}}</td>
                            <td>
                                <a class="btn btn-light" href="{{ route('lokasi_edit', ['id' => $lks->id]) }}">Edit</a>
                                <a class="btn btn-danger" href="{{ route('lokasi_delete', ['id' => $lks->id]) }}">Hapus</a>
                            </td>
                        </tr>
                        @endforeach --}}
                    </table>
                </div>
                <!-- /.box-body -->
            </div>
            <!-- /.box -->
        </div>
    </div>

@endsection