@extends('layouts.app')

@section('title', 'Kelola Pengaduan')

@section('content')

    <div class="d-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0">Data Pengaduan</h1>
    </div>

    <div class="card">
        <div class="card-body">
            <table class="table table-striped table-hover">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>Pengaduan</th>
                        <th>Tanggal</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($complaints as $complaint)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $complaint->name }}</td>
                            <td>{{ $complaint->pengaduan }}</td>
                            <td>{{ $complaint->created_at->format('d/m/y') }}</td>
                            <td>
                                <a href="{{ route('admin.complaint.show', encrypt($complaint->id)) }}" class="btn btn-sm btn-outline-secondary">Detail</a>
                                <form action="{{ route('admin.complaint.destroy', encrypt($complaint->id)) }}" method="POST" class="d-inline" onsubmit="return confirm('Yakin ingin menghapus Pengaduan ini?')">
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