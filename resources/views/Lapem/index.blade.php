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
                            </tr>

                            <?php
                                $no = 1;
                            ?>

                            @foreach ($pemesanan as $pms)
                            <tr>
                                <td>{{$no++}}</td>
                                <td>{{$pms->user->name}}</td>                    
                                <td>{{$pms->lokasi->nama_lokasi}}</td>
                                <td>{{$pms->barang->nama_barang}}</td>
                                <td>{{$pms->ket}}</td>
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