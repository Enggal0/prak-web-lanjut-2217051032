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
    <img src="https://i0.wp.com/headshots-inc.com/wp-content/uploads/2020/11/Professional-Headshot-Poses-Blog-Post.jpg?w=720&ssl=1" alt="profile picture">
        <table>
            <tr> 
                <td><?= $nama ?></td> 
            </tr> 
            <tr>   
                <td><?= $nama_kelas ?? 'Kelas tidak ditemukan' ?></td> 
            </tr> 
            <tr> 
                <td><?= $npm ?></td> 
            </tr> 
        </table>
    </div>
</body>
</html>
