@extends('layouts.app')

@section('title', 'Create - Data Siswa ')

@section('content')
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Create New - Admin Page</h1>
    </div>

    <div class="row">
        <div class="col-md-6">
            <div class="card">
                <form action="{{ route('admin.student.store') }}" method="POST">
                    @csrf

                    <div class="card-header">
                        <h5 class="card-title">Create New Student</h5>
                    </div>

                    <div class="card-body">
                        <div class="form-group mb-3">
                            <label for="nis" class="form-label">Nis</label>
                            <input type="text" name="nis" id="nis" value="{{ old('nis') }}"
                                class="form-control @error('nis') is-invalid @enderror">
                            @error('nis')
                                <div class="invalid-feedback d-block">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group mb-3">
                            <label for="nama" class="form-label">Nama Lengkap</label>
                            <input type="text" name="nama" id="nama" value="{{ old('nama') }}"
                                class="form-control @error('nama') is-invalid @enderror">
                            @error('nama')
                                <div class="invalid-feedback d-block">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group mb-3">
                            <label for="kelas" class="form-label">Kelas</label>
                            <input type="text" name="kelas" id="kelas" value="{{ old('kelas') }}"
                                class="form-control @error('kelas') is-invalid @enderror">
                            @error('kelas')
                                <div class="invalid-feedback d-block">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" name="email" id="email" value="{{ old('email') }}"
                                class="form-control @error('email') is-invalid @enderror">
                            @error('email')
                                <div class="invalid-feedback d-block">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    <div class="card-footer">
                        <button type="submit" class="btn btn-dark">Simpan</button>
                        <a href="{{ route('admin.student.index') }}" class="btn btn-dark">Kembali</a>
                    </div>

                </form>
            </div>
        </div>
    </div>

@endsection