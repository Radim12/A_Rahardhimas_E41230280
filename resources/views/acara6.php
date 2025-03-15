<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f9;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .container {
            background: white;
            padding: 2rem;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            width: 400px;
            text-align: left;
        }

        h1 {
            margin-bottom: 1rem;
            color: #333;
            text-align: center;
        }

        .home-text {
            margin-bottom: 1.5rem;
            color: #555;
            text-align: center;
        }

        .data-group {
            margin-bottom: 1rem;
        }

        .data-group label {
            display: block;
            margin-bottom: 0.5rem;
            color: #555;
            font-weight: bold;
        }

        .data-group span {
            display: block;
            padding: 0.5rem;
            background-color: #f9f9f9;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 1rem;
            color: #333;
        }

        .mata-pelajaran-list {
            list-style-type: disc;
            padding-left: 1.5rem;
            margin-top: 0.5rem;
        }

        .mata-pelajaran-list li {
            margin-bottom: 0.5rem;
            color: #333;
        }
    </style>
</head>

<body>
    <div class="container">
        <!-- Judul Halaman -->
        <h1>HALAMAN UTAMA</h1>

        <!-- Menampilkan data nama -->
        <div class="data-group">
            <label>Nama:</label>
            <span>RAHARDHIMAS CAHYO H</span>
        </div>

        <!-- Menampilkan data mata pelajaran -->
        <div class="data-group">
            <label>Mata Pelajaran:</label>
            <ul class="mata-pelajaran-list">
                <li>Algoritma & Pemrograman</li>
                <li>Kalkulus</li>
                <li>Pemrograman Web</li>
            </ul>
        </div>
    </div>
</body>

</html>