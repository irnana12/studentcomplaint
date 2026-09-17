<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <title>Isi Data Siswa - Aplikasi Pengaduan Siswa</title>
    @vite(['resources/sass/app.scss'])
</head>
<body>
    <div class="container d-flex justify-content-center align-items-center" style="min-height: 100vh;">
        <div class="card shadow-sm p-4" style="max-width: 500px; width: 100%;">

            <h4 class="fw-bold">ISI DATA SISWA</h4>
            <p class="text-muted">Lengkapi data dirimu sebelum menyampaikan pengaduan</p>

            <form action="{{ route('student.store') }}" method="POST">
                @csrf

                <div class="mb-3">
                    <label for="nis" class="form-label">Nis</label>
                    <input type="text" name="nis" id="nis" value="{{ old('nis') }}"
                        class="form-control @error('nis') is-invalid @enderror">
                    @error('nis')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="nama" class="form-label">Nama Lengkap</label>
                    <input type="text" name="nama" id="nama" value="{{ old('nama') }}"
                        class="form-control @error('nama') is-invalid @enderror">
                    @error('nama')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="kelas" class="form-label">Kelas</label>
                    <input type="text" name="kelas" id="kelas" value="{{ old('kelas') }}"
                        class="form-control @error('kelas') is-invalid @enderror">
                    @error('kelas')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" name="email" id="email" value="{{ old('email') }}"
                        class="form-control @error('email') is-invalid @enderror">
                    @error('email')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="d-flex gap-2 mt-4">
                    <button type="submit" class="btn btn-dark">Lanjut</button>
                    <a href="{{ url('/') }}" class="btn btn-outline-dark">Kembali</a>
                </div>

            </form>

        </div>
    </div>
</body>
</html>