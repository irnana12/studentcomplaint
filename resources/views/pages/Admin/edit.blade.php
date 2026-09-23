@extends('layouts.app')

@section('title', 'Edit Admin')

@section('content')

    <div class="container py-4">
        <h1 class="page-title mb-3">Update Admin</h1>

        <div class="row">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <form action="{{ route('admin.admin.update', $user->id) }}" method="POST">
                            @csrf
                            @method('PUT')

                            <div class="form-group mb-3">
                                <label for="name">Name</label>
                                <input type="text" name="name" id="name" class="form-control @error('name') is-invalid @enderror" value="{{ old('name', $user->name) }}" required>
                                @error('name')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="form-group mb-3">
                                <label for="email">Email</label>
                                <input type="email" name="email" id="email" class="form-control @error('email') is-invalid @enderror" value="{{ old('email', $user->email) }}" required>
                                @error('email')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            @if($user->id == Auth::id())
                                <hr>
                                <p class="text-muted small">Isi bagian di bawah hanya jika ingin mengganti password.</p>

                                <div class="form-group mb-3">
                                    <label for="old_password">Password Lama</label>
                                    <input type="password" name="old_password" id="old_password" class="form-control @error('old_password') is-invalid @enderror" autocomplete="new-password">
                                    @error('old_password')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            @endif

                            <div class="form-group mb-3">
                                <label for="password">Password Baru</label>
                                <input type="password" name="password" id="password" class="form-control @error('password') is-invalid @enderror">
                                @error('password')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="form-group mb-3">
                                <label for="password_confirmation">Konfirmasi Password Baru</label>
                                <input type="password" name="password_confirmation" id="password_confirmation" class="form-control">
                            </div>

                            <button type="submit" class="btn btn-primary">Update</button>
                            <a href="{{ route('admin.admin.index') }}" class="btn btn-secondary">Batal</a>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection