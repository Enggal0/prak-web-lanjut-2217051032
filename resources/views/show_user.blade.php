@extends('layouts.app')

@section('content')
<div class="profile-container">
    @if ($user->foto) <!-- Cek jika ada foto -->
            <img src="{{ asset($user->foto) }}" alt="Profile Picture"> <!-- Tampilkan foto pengguna -->
        @else
            <img src="https://assets-a1.kompasiana.com/items/album/2021/03/24/blank-profile-picture-973460-1280-605aadc08ede4874e1153a12.png?t=o&v=780" alt="Default Profile Picture"> <!-- Gambar default -->
        @endif    
    <table>
    <tr> 
            <td>{{ $user->nama }}</td> 
        </tr> 
        <tr> 
            <td>{{ $user->ipk }}</td> 
        </tr>  
        </table>
    </div>
@endsection
