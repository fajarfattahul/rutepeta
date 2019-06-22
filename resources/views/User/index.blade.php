@extends('partials.master')

@section('content')

        <div class="row">
            <div class="col-xs-12">
                <a href="{{ route('user_create') }}" class="btn btn-primary">Tambah Data</a>
                <br><br>
                <div class="box">
                    <div class="box-header">
                    <h3 class="box-title">Data User</h3>
        
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
                            <th>Email</th>
                            <th>Jabatan</th>
                            <th>Jenis Kelamin</th>
                            <th>Aksi</th>
                        </tr>

                        <?php
                            $no = 1;
                        ?>

                    @foreach ($users as $us)
                        <tr>
                            <th scope="row">{{$no++}}</th>
                            <td>{{$us->name}}</td>
                            <td>{{$us->email}}</td>
                            <td>{{$us->jabatan}}</td>
                            <td>{{$us->jk}}</td>
                            <td>
                                <a href="{{ route('user_edit', ['id' => $us->id]) }}" class="btn btn-light">Edit</a>
                                <a href="{{ route('user_delete', ['id' => $us->id]) }}" class="btn btn-danger">Hapus</a>
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
