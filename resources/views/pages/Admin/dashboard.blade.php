@extends('layouts.app')

@section('title', 'Dashboard')

@section('content')

    <h2>Selamat Datang, {{ Auth::user()->name }}!!</h2>
    <p class="text-muted">Ini halaman untuk mengelola aplikasi pengaduan siswa.</p>

    <div class="card mt-4">
        <div class="card-body">
            <h5 class="card-title">Jumlah Pengaduan</h5>

                <div style="height: 300px; width: 100%;" >
                <canvas id="pengaduanChart"></canvas>
                </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

    <script>
        const labels = ['Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September',  'Oktober', 'November', 'Desember'];

        const data = {
            labels: labels,
            datasets: [{
                label: 'Jumlah Pengaduan',
                data: [10, 20, 15, 30, 25, 35, 40, 45,50, 55, 60, 65],
                fill: false,
                tension: 0.1
            }]
        };

        const config = {
            type: 'line',
            data: data,
            options: {
                responsive: true,
                maintainAspectRatio: false
            }
        };

        new Chart(
            document.getElementById('pengaduanChart'),
            config
        );
    </script>

@endsection