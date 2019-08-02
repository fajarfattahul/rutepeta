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

                        @foreach ($barang as $b)
                            @foreach ($lokasi as $l)
                                <tr>
                                    <td>{{$no++}}</td>
                                    <td>{{$b->nama_barang}}</td>
                                    <td>{{$b->pivot->jumlah_barang}}</td>
                                    <td>{{$l->nama_lokasi}}</td>
                                    <td>{{$b->pivot->ket}}</td>
                                    @foreach ($pemesanan as $p)
                                        <td>
                                            <a class="btn btn-light" href="{{ route('lokasi_edit', ['id' => $p->id]) }}">Edit</a>
                                            <a class="btn btn-danger" href="{{ route('lokasi_delete', ['id' => $p->id]) }}">Hapus</a>
                                        </td>
                                    @endforeach
                                </tr>
                            @endforeach
                        @endforeach
                    </table>
                </div>
                <!-- /.box-body -->
            </div>
            <!-- /.box -->
        </div>
    </div>

@endsection