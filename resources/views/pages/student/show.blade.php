@extends('layouts.app')

@section('title', 'Detail Siswa')

@section('content')

    <h1 class="h3 mb-4">Detail Siswa</h1>

    <div class="card" style="max-width: 500px;">
        <div class="card-body">

            <div class="mb-3">
                <label class="fw-bold">Nis</label>
                <input type="text" class="form-control" value="{{ $student->nis }}" readonly>
            </div>

            <div class="mb-3">
                <label class="fw-bold">Nama Lengkap</label>
                <input type="text" class="form-control" value="{{ $student->nama }}" readonly>
            </div>

            <div class="mb-3">
                <label class="fw-bold">Kelas</label>
                <input type="text" class="form-control" value="{{ $student->kelas }}" readonly>
            </div>

            <div class="mb-3">
                <label class="fw-bold">Email</label>
                <input type="text" class="form-control" value="{{ $student->email }}" readonly>
            </div>

            <div class="mb-3">
                <label class="fw-bold">tanggal</label>
                <input type="text" class="form-control" value="{{ $student->created_at->format('d/m/Y') }}" readonly>
            </div>

            

            <a href="{{ route('admin.student.index') }}" class="btn btn-dark">Kembali</a>

        </div>
    </div>

@endsection