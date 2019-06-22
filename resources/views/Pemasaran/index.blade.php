@extends('partials.master')

@section('content')
    
    <div class="row">
        <div class="col-xs-12">
            <a class="btn btn-primary" href="{{ route('pemasaran_create') }}">Tambah Data</a>            
            <br><br>
            <div class="box">
                <div class="box-header">
                    <h3 class="box-title">Data Pemasaran</h3>
            
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
                                <th>Nama</th>
                                <th>Lokasi</th>
                                <th>Waktu Pemasaran</th>
                                <th>Keterangan</th>
                                <th>Action</th>
                            </tr>

                            <?php
                                $no = 1;
                            ?>

                            @foreach ($pemasaran as $pms)
                            <tr>
                                <td>{{$no++}}</td>
                                <td>{{$pms->user->name}}</td>                    
                                <td>{{$pms->lokasi->nama_lokasi}}</td>
                                <td>{{$pms->waktu_pemasaran}}</td>
                                <td>{{$pms->ket}}</td>
                                <td>
                                    <a class="btn btn-light" href="{{ route('pemasaran_edit', ['id' => $pms->id]) }}">Edit</a>
                                    <a class="btn btn-danger" href="{{ route('pemasaran_delete', ['id' => $pms->id]) }}">Hapus</a>
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