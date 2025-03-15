<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload PDF</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.9.3/dropzone.min.css" rel="stylesheet">
    <style>
        /* Animasi untuk tombol dan container */
        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(-20px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f9;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        .container {
            background: white;
            padding: 2rem;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            animation: fadeIn 0.5s ease-in-out;
            text-align: center;
        }

        h1 {
            margin-bottom: 1.5rem;
            color: #333;
        }

        .dropzone {
            border: 2px dashed #007bff;
            border-radius: 10px;
            padding: 2rem;
            background: #f9f9f9;
            cursor: pointer;
            transition: background 0.3s ease;
        }

        .dropzone:hover {
            background: #e9f5ff;
        }

        .dz-message {
            color: #007bff;
            font-size: 1.2rem;
        }

        .buttons {
            margin-top: 1.5rem;
        }

        .buttons button {
            background: #007bff;
            color: white;
            border: none;
            padding: 0.75rem 1.5rem;
            border-radius: 5px;
            cursor: pointer;
            font-size: 1rem;
            margin: 0 0.5rem;
            transition: background 0.3s ease;
        }

        .buttons button:hover {
            background: #0056b3;
        }

        .buttons button:active {
            transform: scale(0.95);
        }

        .success-message {
            color: #28a745;
            margin-top: 1rem;
            font-weight: bold;
            display: none;
        }

        .error-message {
            color: #dc3545;
            margin-top: 1rem;
            font-weight: bold;
            display: none;
        }
    </style>
</head>

<body>
    <div class="container">
        <h1>Upload PDF</h1>

        <!-- Form Upload PDF -->
        <form action="{{ route('pdf.store') }}" method="POST" class="dropzone" id="pdf-upload">
            @csrf
            <div class="fallback">
                <input name="file" type="file" />
            </div>
        </form>

        <!-- Pesan Sukses dan Error -->
        <div class="success-message" id="success-message">File berhasil diupload!</div>
        <div class="error-message" id="error-message">File gagal diupload!</div>

        <!-- Tombol Tambahan -->
        <div class="buttons">
            <button onclick="window.location.reload()">Refresh</button>
            <button onclick="window.location.href = '/'">Kembali ke Beranda</button>
        </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.9.3/dropzone.min.js"></script>
    <script>
        // Konfigurasi Dropzone
        Dropzone.options.pdfUpload = {
            paramName: "file", // Nama file yang dikirim
            maxFilesize: 10, // Ukuran maksimal file dalam MB
            acceptedFiles: ".pdf", // Hanya menerima file PDF
            init: function () {
                this.on("success", function (file, response) {
                    // Tampilkan pesan sukses
                    document.getElementById('success-message').style.display = 'block';
                    document.getElementById('error-message').style.display = 'none';
                });
                this.on("error", function (file, message) {
                    // Tampilkan pesan error
                    document.getElementById('error-message').style.display = 'block';
                    document.getElementById('success-message').style.display = 'none';
                });
            }
        };
    </script>
</body>

</html>