@extends('layouts.app')

@section('title', 'Detail Admin')

@section('content')

    <h1 class="h3 mb-4">Detail Pengaduan</h1>

    <div class="card" style="max-width: 500px;">
        <div class="card-body">

            <div class="mb-3">
                <label class="fw-bold">Nama Lengkap</label>
                <input type="text" class="form-control" value="{{ $user->name }}" readonly>
            </div>

            <div class="mb-3">
                <label class="fw-bold">Kelas</label>
                <input type="text" class="form-control" value="{{ $user->kelas }}" readonly>
            </div>

            <div class="mb-3">
                <label class="fw-bold">tanggal</label>
                <input type="text" class="form-control" value="{{ $user->created_at->format('d/m/Y') }}" readonly>
            </div>

            <div class="mb-3">
                <label class="fw-bold">Isi Pengaduan</label>
                <input type="text" class="form-control" value="{{ $user->isi_pengaduan }}" readonly>
            </div>

            <a href="{{ route('admin.complaint.index') }}" class="btn btn-dark">Kembali</a>

        </div>
    </div>

@endsection