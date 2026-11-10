
@extends('layouts.app')

@section('title', 'Profile')

@section('content')

<div class="profile-header">
    <h1>Profile Sistem</h1>
    <p>Kenali lebih dekat sistem informasi peternakan telur ayam FarmMonitor</p>
</div>

<div class="profile-grid">

    <div class="profile-card">
        <div class="profile-icon">🐔</div>
        <h3>Tentang FarmMonitor</h3>
        <p>
            FarmMonitor merupakan sistem informasi yang dirancang
            untuk membantu pencatatan dan pemantauan aktivitas
            peternakan telur ayam
        </p>
    </div>

    <div class="profile-card">
        <div class="profile-icon">🎯</div>
        <h3>Tujuan Sistem</h3>
        <p>
            Mempermudah pengelolaan informasi hasil panen telur
            dan kondisi kesehatan ayam agar data lebih terorganisir
        </p>
    </div>

    <div class="profile-card">
        <div class="profile-icon">📊</div>
        <h3>Manfaat Sistem</h3>
        <p>
            Membantu pengguna melakukan pencatatan, pemeriksaan,
            dan pemantauan produktivitas peternakan
        </p>
    </div>

    <div class="profile-card">
        <div class="profile-icon">👥</div>
        <h3>Pengguna Sistem</h3>
        <p>
            FarmMonitor ditujukan untuk owner dan karyawan
            dalam membantu kegiatan pengelolaan peternakan
        </p>
    </div>

</div>

@endsection
