@extends('layouts.app')

@section('title', 'Kelola Admin')

@section('content')

    <div class="d-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0">Data Siswa</h1>
        <a href="{{ route('admin.student.create') }}" class="btn btn-primary">+ Tambah Siswa</a>
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
                    @foreach ($students as $student)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $student->name }}</td>
                            <td>{{ $student->email }}</td>
                            <td>
                                <a href="{{ route('admin.student.show', encrypt($student->id)) }}" class="btn btn-sm btn-outline-secondary">Detail</a>
                                <a href="{{ route('admin.student.edit', encrypt($student->id)) }}" class="btn btn-sm btn-outline-primary">Edit</a>
                                <form action="{{ route('admin.student.destroy', encrypt($student->id)) }}" method="POST" class="d-inline" onsubmit="return confirm('Yakin ingin menghapus Data siswa ini?')">
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