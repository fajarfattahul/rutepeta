@extends('partials.master')

@section('content')
    
    <div class="row">
        <div class="col-xs-12">
            <a href="{{ route('barang_create') }}" class="btn btn-primary">Tambah Data</a>
            <br><br>
            <div class="box">
                <div class="box-header">
                    <h3 class="box-title">Data Barang</h3>
            
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
                            <th>Kode Barang</th>
                            <th>Harga</th>
                            <th>Action</th>
                        </tr>

                            <?php
                                $no = 1;
                            ?>

                        @foreach ($barang as $brg)
                        <tr>
                            <td>{{$no++}}</td>
                            <td>{{$brg->nama_barang}}</td>
                            <td>{{$brg->kd_barang}}</td>
                            <td>Rp. {{$brg->harga}}</td>
                            <td>
                                <a class="btn btn-light" href="{{ route('barang_edit', ['id' => $brg->id]) }}">Edit</a>
                                <a class="btn btn-danger" href="{{ route('barang_delete', ['id' => $brg->id]) }}">Hapus</a>
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