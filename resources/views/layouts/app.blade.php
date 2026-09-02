<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <title>@yield('title') - Aplikasi Pengaduan Siswa</title>
    @vite(['resources/sass/app.scss'])
</head>
<body>

    <nav class="navbar navbar-dark bg-dark px-3">
        <span class="navbar-brand">Admin Pengaduan Siswa</span>

        @auth
        <div class="dropdown">
            <button class="btn btn-outline-light dropdown-toggle" type="button" data-bs-toggle="dropdown">
                {{ Auth::user()->name }}
            </button>
            <ul class="dropdown-menu dropdown-menu-end">
                <li><a class="dropdown-item" href="{{ route('admin.admin.index') }}">Profil Saya</a></li>
                <li>
                    <form action="{{ route('logout') }}" method="POST">
                        @csrf
                        <button type="submit" class="dropdown-item">Logout</button>
                    </form>
                </li>
            </ul>
        </div>
        @endauth
    </nav>

    <div class="d-flex" style="min-height: calc(100vh - 56px);">

        @auth
        <div class="bg-light border-end" style="width: 220px;">
            <div class="p-3">
                <div class="d-grid gap-2">
                    <a href="{{ route('admin.dashboard') }}" class="btn btn-outline-dark text-start">Dashboard</a>
                    <a href="{{ route('admin.student.index') }}" class="btn btn-outline-dark text-start">Hal. Siswa</a>
                    <a href="{{ route('admin.complaint.index') }}" class="btn btn-outline-dark text-start">Hal. Pengaduan</a>
                    <a href="{{ route('admin.admin.index') }}" class="btn btn-outline-dark text-start">Hal. Admin</a>
                    <form action="{{ route('logout') }}" method="POST">
                        @csrf
                        <button type="submit" class="btn btn-outline-dark text-start w-100">Logout</button>
                    </form>
                </div>
            </div>
        </div>
        @endauth

        <div class="flex-grow-1 p-4">

            @if(session('success'))
                <div class="alert alert-success">{{ session('success') }}</div>
            @endif

            @yield('content')

        </div>

    </div>

</body>
</html>