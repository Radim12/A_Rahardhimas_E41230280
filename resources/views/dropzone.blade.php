<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dropzone Image Upload in Laravel</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" rel="stylesheet">
    <!-- Dropzone CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/4.0.1/min/dropzone.min.css" rel="stylesheet">
    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <!-- Dropzone JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/4.2.0/min/dropzone.min.js"></script>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1 class="text-center">Dropzone Image Upload in Laravel</h1>
                <br>
                <!-- Form Dropzone -->
                <form action="{{ route('dropzone.store') }}" method="post" enctype="multipart/form-data"
                    class="dropzone" id="image-upload">
                    @csrf <!-- Token CSRF untuk keamanan -->
                    <div class="dz-message">
                        <h3 class="text-center">Drop files here or click to upload</h3>
                    </div>
                </form>
                <!-- Tombol Upload Manual -->
                <button type="button" id="upload-button" class="btn btn-primary mt-3">Upload</button>
            </div>
        </div>
    </div>

    <script>
        // Konfigurasi Dropzone
        Dropzone.options.imageUpload = {
            maxFilesize: 10, // Ukuran maksimal file (dalam MB)
            acceptedFiles: ".jpeg,.jpg,.png,.gif", // Format file yang diterima
            addRemoveLinks: true, // Tambahkan link hapus file
            autoProcessQueue: false, // Nonaktifkan proses upload otomatis
            parallelUploads: 5, // Jumlah file yang bisa diupload secara bersamaan
            init: function () {
                var myDropzone = this;

                // Aksi ketika tombol "Upload" diklik
                document.getElementById("upload-button").addEventListener("click", function (e) {
                    e.preventDefault();
                    e.stopPropagation();
                    myDropzone.processQueue(); // Mulai proses upload
                });

                // Event ketika file sedang dikirim
                this.on("sending", function (file, xhr, formData) {
                    // Tambahkan data form ke formData Dropzone
                    var data = $('#image-upload').serializeArray();
                    $.each(data, function (key, el) {
                        formData.append(el.name, el.value);
                    });
                });

                // Event ketika upload selesai
                this.on("success", function (file, response) {
                    console.log("File uploaded successfully:", response);
                    alert("File uploaded successfully: " + response.success);
                });

                // Event ketika terjadi error
                this.on("error", function (file, errorMessage) {
                    console.error("Error uploading file:", errorMessage);
                    alert("Error uploading file: " + errorMessage);
                });

                // Event ketika file dihapus
                this.on("removedfile", function (file) {
                    console.log("File removed:", file.name);
                });
            }
        };
    </script>
</body>

</html>