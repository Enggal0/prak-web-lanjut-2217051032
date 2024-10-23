@extends('layouts.app')

@section('content')
<div> 
  <div class="form-container">
    <h1>Edit Biodata Mahasiswa</h1>
    <form action="{{ route('user.update', $user->id) }}" method="POST" enctype="multipart/form-data">
      @csrf
      @method('PUT') <!-- Menggunakan PUT untuk update data -->

      <label for="nama">Nama:</label>
      @foreach($errors->get('nama') as $msg)
      <p class="error-msg">{{$msg}}</p>
      @endforeach
      <input type="text" id="nama" name="nama" value="{{ old('nama', $user->nama) }}"> <!-- Isi dengan data yang ada -->

      <label for="ipk">IPK:</label>
      @foreach($errors->get('ipk') as $msg)
      <p class="error-msg">{{$msg}}</p>
      @endforeach
      <input type="text" id="ipk" name="ipk" value="{{ old('ipk', $user->ipk) }}"> <!-- Isi dengan data yang ada -->

      <label for="kelas_id">Kelas</label>
        <select class="form-select" name="kelas_id" id="kelas_id" required>
            @foreach ($kelas as $kelasItem)
            <option value="{{ $kelasItem->id }}"
                {{ $kelasItem->id == $user->kelas_id ? 'selected' : '' }}>
                {{ $kelasItem->nama_kelas }}
            </option>
            @endforeach
        </select>

        <label for="foto">Foto</label>
        <input type="file" name="foto" class="form-control">
            @if($user->foto)
            <img src="{{ asset($user->foto) }}" alt="User Photo" width="100" class="mt-2">
        @endif

      <input type="submit" value="Update">
    </form>
  </div>
</div>
@endsection
