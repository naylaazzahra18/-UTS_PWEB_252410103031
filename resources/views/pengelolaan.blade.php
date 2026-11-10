@extends('layouts.app')

@section('title', 'Pengelolaan')

@section('content')

    <div class="pengelolaan-header">
    <h1>Pengelolaan Peternakan</h1>
        <p>
            Kelola dan Pantau Informasi Aktivitas Peternakan Telur Ayam 
        </p>
    </div>

    <hr>

    <h2>Pengelolaan Data Peternakan</h2>

    <div class="pengelolaan-grid">

    <div class="pengelolaan-card">
        <div class="pengelolaan-icon">🥚</div>
        <h3>Hasil Panen Telur</h3>
        <p>
            Pencatatan hasil panen berdasarkan tanggal,
            jumlah telur, dan keterangan panen
        </p>
    </div>

    <div class="pengelolaan-card">
        <div class="pengelolaan-icon">🐔</div>
        <h3>Kondisi Ayam</h3>
        <p>
            Pencatatan kondisi ayam berdasarkan jumlah
            ayam sehat, ayam sakit, dan keterangan kondisi
        </p>
    </div>

    <div class="pengelolaan-card">
        <div class="pengelolaan-icon">📈</div>
        <h3>Prediksi Hasil Panen</h3>
        <p>
            Informasi perkiraan jumlah hasil panen
            telur berdasarkan data peternakan
        </p>
    </div>

    <div class="pengelolaan-card">
        <div class="pengelolaan-icon">🩺</div>
        <h3>Prediksi Ayam Sakit</h3>
        <p>
            Informasi perkiraan jumlah ayam sakit
            untuk membantu pemantauan kesehatan
        </p>
    </div>

</div>

<div class="tahapan-card">
    <h2>Tahapan Pengelolaan Data</h2>

    <ol>
        <li>
            <strong>Pencatatan:</strong>
            Memasukkan informasi hasil panen dan kondisi ayam
        </li>
        <li>
            <strong>Pemeriksaan:</strong>
            Memastikan informasi yang dicatat sesuai
        </li>
        <li>
            <strong>Pemantauan:</strong>
            Mengamati perkembangan hasil panen dan kondisi ayam
        </li>
    </ol>
</div>

@endsection