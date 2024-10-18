<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
    <link rel="stylesheet" href="{{ asset('assets/css/profile.css') }}">
</head>
<body>
    <div class="profile-container">
    @if ($user->foto) <!-- Cek jika ada foto -->
            <img src="{{ asset($user->foto) }}" alt="Profile Picture"> <!-- Tampilkan foto pengguna -->
        @else
            <img src="https://assets-a1.kompasiana.com/items/album/2021/03/24/blank-profile-picture-973460-1280-605aadc08ede4874e1153a12.png?t=o&v=780" alt="Default Profile Picture"> <!-- Gambar default -->
        @endif    
    <table>
            <tr> 
                <td>{{$user->nama}}</td> 
            </tr> 
            <tr>   
                <td>{{$user->nama_kelas ?? 'Kelas tidak ditemukan' }}</td> 
            </tr> 
            <tr> 
                <td>{{$user->npm}}</td> 
            </tr> 
        </table>
    </div>
</body>
</html>
