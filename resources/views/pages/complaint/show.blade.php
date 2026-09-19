@extends('layouts.app')

@section('title', 'Detail Pengaduan')

@section('content')

    <h1 class="h3 mb-4">Detail Pengaduan</h1>

    <div class="card" style="max-width: 500px;">
        <div class="card-body">

            <div class="mb-3">
                <label class="fw-bold">Nama Siswa</label>
                <input type="text" class="form-control" value="{{ $complaint->student->nama }}" readonly>
            </div>

            <div class="mb-3">
                <label class="fw-bold">Kelas</label>
                <input type="text" class="form-control" value="{{ $complaint->student->kelas }}" readonly>
            </div>

            <div class="mb-3">
                <label class="fw-bold">Tanggal</label>
                <input type="text" class="form-control" value="{{ $complaint->tanggal->format('d/m/Y') }}" readonly>
            </div>

            <div class="mb-3">
                <label class="fw-bold">Isi Pengaduan</label>
                <textarea class="form-control" rows="4" readonly>{{ $complaint->isi_pengaduan }}</textarea>
            </div>

            <a href="{{ route('admin.complaint.index') }}" class="btn btn-dark">Kembali</a>

        </div>
    </div>

@endsection