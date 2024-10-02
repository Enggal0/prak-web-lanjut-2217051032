<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Student Information Form</title>
  <style>
    body {
      background-image: url('https://wallpapercave.com/wp/wp2468660.jpg');
      background-size: cover; 
      background-position: center; 
      background-repeat: no-repeat;
      font-family: 'Montserrat', 'Poppins', sans-serif;
      /* background-color: #000072; */
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
      margin: 0;
      color: white;
    }

    .form-container {
      /* background-color: #1db954;  */
      background-color: #000072;
      padding: 30px;
      border-radius: 10px;
      box-shadow: 0 4px 15px rgba(0, 0, 0, 0.3);
      width: 350px;
    }

    h1 {
      text-align: center;
      /* color: #1db954; */
      color:white;
      margin-bottom: 25px;
      font-size: 24px;
    }

    label {
      display: block;
      margin-bottom: 14px;
      font-weight: bold;
      color: #fff;
      font-size: 14px;
    }

    input[type="text"] {
      font-family: 'Montserrat', 'Poppins', sans-serif;
      width: 91%;
      padding: 10px 15px;
      margin-bottom: 20px;
      border: none;
      border-radius: 4px;
      font-size: 16px;
      background-color: #fff;
      color: #333;
    }

    input[type="submit"] {
      font-family: 'Montserrat', 'Poppins', sans-serif;
      width: 100%;
      padding: 12px;
      background-color: #1db954;
      color: white;
      border: none;
      border-radius: 4px;
      cursor: pointer;
      font-size: 18px;
      transition: background-color 0.3s;
    }

    select{
      font-family: 'Montserrat', 'Poppins', sans-serif;
      margin-bottom:15px;
      border-radius: 4px;
    }

    input[type="submit"]:hover {
      font-family: 'Montserrat', 'Poppins', sans-serif;
      background-color: #0000a3;
      font-style: bold;
    }

    .error-msg {
      color: red;
      font-size: 12px;
      margin-top: -15px;
      margin-bottom: 10px;
    }

  </style>
</head>
<body>
  <div class="form-container">
    <h1>Formulir Biodata Mahasiswa</h1>
    <form action="{{ route('user.store') }}" method="POST">
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
  </select>

      <input type="submit" value="Submit">
    </form>
  </div>
</body>
</html>
