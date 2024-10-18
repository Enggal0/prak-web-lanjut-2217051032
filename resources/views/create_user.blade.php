@extends('layouts.app') 
 
@section('content') 
<div> 
  <div class="form-container">
    <h1>Formulir Biodata Mahasiswa</h1>
    <form action="{{ route('user.store') }}" method="POST" enctype="multipart/form-data">
      @csrf
      
      <label for="nama">Nama:</label>
      @foreach($errors->get('nama') as $msg)
      <p class="error-msg">{{$msg}}</p>
      @endforeach
      <input type="text" id="nama" name="nama">
      
      <label for="npm">NPM:</label>
      @foreach($errors->get('npm') as $msg)
      <p class="error-msg">{{$msg}}</p>
      @endforeach
      <input type="text" id="npm" name="npm">
      

      <label for="id_kelas">Kelas:</label>
      <select name="kelas_id" id="kelas_id" required>
        @foreach ($kelas as $kelasItem)
        <option value="{{$kelasItem->id}}">{{$kelasItem->nama_kelas}}</option>
        @endforeach
      </select><br>

      <label for="foto">Foto:</label>
      <input type="file" id="foto" name="foto"><br><br>

      <input type="submit" value="Submit">
    </form>
  </div>
</div> 
  @endsection