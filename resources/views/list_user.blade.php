@extends('layouts.app') 

@section('content') 
<div class="container">
<a href="{{ route('user.create') }}" class="btn-tambah">Tambah Pengguna Baru</a>

   <table> 
       <thead> 
          <tr> 
             <th>ID</th> 
             <th>Nama</th> 
             <th>NPM</th> 
             <th>Kelas</th> 
             <th>Aksi</th> 
          </tr> 
       </thead> 
       <tbody> 
       @foreach ($users as $user)
                <tr>
                  <td><?= $user['id'] ?></td> 
                  <td><?= $user['nama'] ?></td> 
                  <td><?= $user['npm'] ?></td> 
                  <td><?= $user['nama_kelas'] ?></td> 
                  <td>
                     <a href="{{ route('users.show', $user->id) }}" class="btn btn-warning mb-3">Detail</a>
                  </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
