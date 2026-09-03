@extends('layouts.app')

@section('title', 'Kelola Admin')

@section('content')

    <div class="d-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0">Data Admin</h1>
        <a href="{{ route('admin.admin.create') }}" class="btn btn-primary">+ Tambah Admin</a>
    </div>

    <div class="card">
        <div class="card-body">
            <table class="table table-striped table-hover">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>Email</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($users as $user)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->email }}</td>
                            <td>
                                <a href="{{ route('admin.admin.show', encrypt($user->id)) }}" class="btn btn-sm btn-outline-secondary">Detail</a>
                                <a href="{{ route('admin.admin.edit', encrypt($user->id)) }}" class="btn btn-sm btn-outline-primary">Edit</a>
                                <form action="{{ route('admin.admin.destroy', encrypt($user->id)) }}" method="POST" class="d-inline" onsubmit="return confirm('Yakin ingin menghapus admin ini?')">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-sm btn-outline-danger">Hapus</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

@endsection