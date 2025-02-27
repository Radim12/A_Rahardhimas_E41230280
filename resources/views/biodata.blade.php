<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Passing Data Array pada Laravel - Ayo Ngoding</title>
</head>
<body>
  <h1>Tutorial Laravel - Ayo Ngoding</h1>
  <a href="https://www.dhimas.com/tutorial-laravel">www.dhimas.com</a>
  <br>
  <p>Nama : {{$nama}}</p>
  <p>Mata Pelajaran</p>
  <ul>
    @foreach($mapel as $m)
    <li>{{$m}}</li>
    @endforeach
  </ul>
</body>
</html>