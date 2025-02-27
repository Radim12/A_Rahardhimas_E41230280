{{-- <!DOCTYPE html>
<html>
<head>
  <title>Ayo Ngoding - Request Data Laravel</title>
</head>
<body>
   <h3>Form Pendaftaran</h3>
  <form action="pendaftaran/proses" method="post">
        {{csrf_field()}}
        Nama :
    <input type="text" name="nama">
    <br/>
    <br/>
    Alamat :
    <input type="text" name="alamat">
    <br/>
    <hr/>
    <input type="submit" value="Simpan">
  </form>
</body>
</html> --}}

<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Ayo Ngoding - Request Data Laravel</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background-color: #f0f8ff;
      color: #333;
      margin: 0;
      padding: 20px;
    }
    h3 {
      text-align: center;
      color: #4a90e2;
    }
    form {
      max-width: 400px;
      margin: auto;
      padding: 20px;
      border: 1px solid #ccc;
      border-radius: 10px;
      background-color: #ffffff;
      box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
    }
    label {
      display: block;
      margin-bottom: 5px;
      font-weight: bold;
    }
    input[type="text"] {
      width: calc(100% - 20px);
      padding: 10px;
      margin-bottom: 15px;
      border: 1px solid #ccc;
      border-radius: 5px;
    }
    input[type="submit"] {
      background-color: #4a90e2;
      color: white;
      border: none;
      padding: 10px;
      border-radius: 5px;
      cursor: pointer;
      font-size: 16px;
    }
    input[type="submit"]:hover {
      background-color: #357ab8;
    }
    hr {
      margin-top: 20px;
      margin-bottom: 20px;
    }
  </style>
</head>
<body>
   <h3>Form Pendaftaran</h3>
   <form action="pendaftaran/proses" method="post">
        {{csrf_field()}}
        <label for="nama">Nama:</label>
        <input type="text" id="nama" name="nama" required>

        <label for="alamat">Alamat:</label>
        <input type="text" id="alamat" name="alamat" required>

        <hr/>
        <input type="submit" value="Simpan">
   </form>
</body>
</html>
