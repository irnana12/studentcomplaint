<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <title>Form Pengaduan - Aplikasi Pengaduan Siswa</title>
    @vite(['resources/sass/app.scss'])
</head>
<body>
    <div class="container d-flex justify-content-center align-items-center" style="min-height: 100vh;">
        <div class="card shadow-sm p-4" style="max-width: 500px; width: 100%;">

            <h4 class="fw-bold">FORM PENGADUAN</h4>
            <p class="text-muted">Sampaikan keluhan atau masukanmu ke pihak sekolah</p>

            <form action="{{ route('complaint.store') }}" method="POST">
                @csrf

                <input type="hidden" name="student_id" value="{{ request('student_id') }}">

                <div class="mb-3">
                    <label for="isi_pengaduan" class="form-label">Isi pengaduan</label>
                    <textarea name="isi_pengaduan" id="isi_pengaduan" rows="5"
                        class="form-control @error('isi_pengaduan') is-invalid @enderror">{{ old('isi_pengaduan') }}</textarea>
                    @error('isi_pengaduan')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <button type="submit" class="btn btn-dark w-100 mt-3">Kirim pengaduan</button>

            </form>

        </div>
    </div>
</body>
</html>