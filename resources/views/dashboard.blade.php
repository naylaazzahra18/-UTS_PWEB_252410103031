@extends('layouts.app')

@section('title', 'Dashboard')

@section('content')

   
<div class="dashboard-header">
    <h1>Dashboard</h1>
    <p>Selamat Datang di Sistem Informasi Peternakan Telur Ayam</p>
</div>

<hr>

<h2>Ringkasan Fitur</h2>

<div class="fitur-grid">
    @foreach ($informasi as $item)
        <div class="fitur-card">
            <div class="fitur-icon">
                @if ($loop->index == 0)
                    🥚
                @elseif ($loop->index == 1)
                    🐔
                @elseif ($loop->index == 2)
                    📈
                @else
                    🩺
                @endif
            </div>

            <h3>{{ $item }}</h3>

            <p>
                @if ($loop->index == 0)
                    Pemantauan jumlah dan pencatatan hasil panen.
                @elseif ($loop->index == 1)
                    Informasi kondisi dan jumlah ayam sakit.
                @elseif ($loop->index == 2)
                    Informasi perkiraan hasil panen telur.
                @else
                    Informasi perkiraan jumlah ayam sakit.
                @endif
            </p>
        </div>
    @endforeach
</div>

<hr>

<div class="informasi-peternakan">
    <h2>Informasi Peternakan</h2>
    <p>
        Website ini membantu pengguna melakukan pencatatan,
        pengelolaan, dan pemantauan aktivitas peternakan telur ayam.
    </p>
</div>

@endsection