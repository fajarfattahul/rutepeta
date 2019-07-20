@extends('partials.master')

@section('content')
    
    <div class="row">
        <div class="col-xs-12">           
            <div class="box">
                <div class="box-header">
                    <h3 class="box-title">Data Laporan Pemesanan</h3>
            
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
                                <th>Nama Pegawai</th>
                                <th>Lokasi</th>
                                <th>Barang</th>
                                <th>Keterangan</th>
                                <th>Aksi</th>
                            </tr>

                            <?php
                                $no = 1;
                            ?>

                            @foreach ($lapkur as $lap)
                            <tr>
                                <td>{{$no++}}</td>
                                <td>{{$lap->user->name}}</td>                    
                                <td>{{$lap->lokasi->nama_lokasi}}</td>
                                <td>{{$lap->barang->nama_barang}}</td>
                                <td>{{$lap->ket}}</td>
                                <td>
                                    <a class="btn btn-primary" href="{{ route('lapkur_edit', ['id' => $lap->id]) }}">Edit</a>
                                </td>
                            </tr>
                            @endforeach
                    </table>
                </div>
                <!-- /.box-body -->
            </div>
            <!-- /.box -->
        </div>
    </div>

@endsection