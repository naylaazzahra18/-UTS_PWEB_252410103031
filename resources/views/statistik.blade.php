@extends('layouts.app')

@section('title', 'Statistik Peternakan')

@section('content')

<div class="statistik-header">
    <h1>Statistik Peternakan</h1>
    <p>Informasi ringkasan dan perkembangan peternakan telur ayam</p>
</div>

<div class="statistik-grid">

    <div class="statistik-card">
        <h3>Total Hasil Panen</h3>
        <h2>500</h2>
        <p>Butir telur</p>
    </div>

    <div class="statistik-card">
        <h3>Jumlah Ayam Sehat</h3>
        <h2>450</h2>
        <p>Ekor ayam</p>
    </div>

    <div class="statistik-card">
        <h3>Jumlah Ayam Sakit</h3>
        <h2>15</h2>
        <p>Ekor ayam</p>
    </div>

    <div class="statistik-card">
        <h3>Persentase Hasil Panen Telur</h3>
        <h2>85%</h2>
        <p>Persentase produksi</p>
    </div>

    <div class="statistik-card">
        <h3>Persentase Hasil Kondisi Ayam</h3>
        <h2>67%</h2>
        <p>Persentase kondisi</p>
    </div>

</div>

@endsection