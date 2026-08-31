<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>APLIKASI PENGADUANN SISWA</title>
    @vite(['resources/sass/app.scss'])
</head>
<body>
    <div class="container d-flex justify-content-center align-items-center" style="min-height: 100vh">
        <div class="card shadow-sm p-4" style="max-width: 600px; width: 100%;">
            <div class="text-center mb-4">
                <h1 class="fw-bold">APLIKASI PENGADUAN SISWA</h1>
                <p class='text-muted'>Selamat datang di aplikasi pengaduan siswa. Silakan pilih akses sesuai peran Anda.</p>
            </div>

            <div class="row g-3">
                <div class="col-6">
                    <div class="bordered rounded p-3 text-center h-100 d-flex flex-column justify-content-between">
                        <div>
                            <h2>SISWA</h2>
                            <p class="text-muted small"> Isi data dan sampaikan pengduan</p>
                        </div>
                        <a href="{{ route('student.create')}}" class="btn btn-dark">Mulai isi data</a>
                    </div>
                </div>

                <div class="col-6">
                    <div class="bordered rounded p-3 text-center h-100 d-flex flex-column justify-content-between">
                        <div>
                            <h2>ADMIN</h2>
                            <p class="text-muted small"> Kelola Data Siswa Dan Pengaduan </p>
                        </div>
                        <a href="{{ route('login')}}" class="btn btn-dark"> Login Sebagai Admin </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>