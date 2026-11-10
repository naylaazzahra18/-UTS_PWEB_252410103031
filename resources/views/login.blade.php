@extends('layouts.app')

@section('title', 'Login')

@section('content')

   <div class="login-container">
    <h1>Selamat Datang</h1>
    <p>Silahkan login untuk mengelola data peternakan Anda</p>

    @if (session('error'))
    <p style="color: red;">
        {{ session('error') }}
    </p>
    @endif

    <form action="/login" method="POST">
        @csrf
        <div class="form-group">
            <label>Username</label>
            <input type="text" name="username" placeholder="Masukkan username">
        </div>

        <div class="form-group">
            <label>Password</label>
            <input type="password" name="password" placeholder="Masukkan password">
        </div>

        <button type="submit">Masuk</button>
    </form>
</div>

@endsection