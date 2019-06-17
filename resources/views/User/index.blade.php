<div class="containe">
  <div class="row">
      <div class="container">
          <a href="{{ route('user_create') }}" class="btn btn-primary mb-2">Tambah Data</a>
          <table class="table">
              <thead class="thead-dark">
                  <tr>
                      <th scope="col">No</th>
                      <th scope="col">Nama</th>
                      <th scope="col">Email</th>
                      <th scope="col">Jabatan</th>
                      <th scope="col">Jenis Kelamin</th>
                      <th scope="col">Aksi</th>
                  </tr>
              </thead>

                  <?php
                      $no = 1;
                  ?>

              @foreach ($users as $us)
                  <tbody>
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
                  </tbody> 
              @endforeach
          </table>
      </div>
  </div>
</div>