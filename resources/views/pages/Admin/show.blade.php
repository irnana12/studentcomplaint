@extends('layouts.app')

@section('title', 'Detail Admin')

@section('content')

    <h1 class="h3 mb-4">Detail Admin</h1>

    <div class="card" style="max-width: 500px;">
        <div class="card-body">

            <div class="mb-3">
                <label class="fw-bold">Nama</label>
                <input type="text" class="form-control" value="{{ $user->name }}" readonly>
            </div>

            <div class="mb-3">
                <label class="fw-bold">Email</label>
                <input type="text" class="form-control" value="{{ $user->email }}" readonly>
            </div>

            <div class="mb-3">
                <label class="fw-bold">Dibuat pada tanggal</label>
                <input type="text" class="form-control" value="{{ $user->created_at->format('d/m/Y') }}" readonly>
            </div>

            <a href="{{ route('admin.admin.index') }}" class="btn btn-dark">Kembali</a>

        </div>
    </div>

@endsection