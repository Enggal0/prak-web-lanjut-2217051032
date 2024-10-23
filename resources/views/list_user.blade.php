@extends('layouts.app')

@section('content')
<div class="container my-4">
    <a href="{{ route('user.create') }}" class="btn btn-primary mb-3">Tambah Pengguna Baru</a>

    <div class="table-responsive">
        <table class="table table-striped table-bordered">
            <thead class="table-dark">
                <tr>
                    <th>ID</th>
                    <th>Nama</th>
                    <th>NPM</th>
                    <th>Kelas</th>
                    <th>Foto</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
            @foreach ($users as $user)
                <tr>
                    <td>{{ $user['id'] }}</td>
                    <td>{{ $user['nama'] }}</td>
                    <td>{{ $user['npm'] }}</td>
                    <td>{{ $user['nama_kelas'] }}</td>
                    <td>
                        <img src="{{ asset('' . $user->foto) }}" alt="Foto User" class="img-thumbnail" width="100">
                    </td>
                    <td>
                        <!-- View -->
                        <a href="{{ route('users.show', $user['id']) }}" class="btn btn-info btn-sm">View</a>
                        <!-- Edit -->
                        <a href="{{ route('user.edit', $user['id']) }}" class="btn btn-warning btn-sm">Edit</a>
                        <!-- Delete -->
                        <form action="{{ route('user.destroy', $user['id']) }}" method="POST" class="d-inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm"
                                onclick="return confirm('Apakah Anda yakin ingin menghapus user ini?')">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
