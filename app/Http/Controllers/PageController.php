<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Peternakan;

class PageController extends Controller
{
    public function dashboard()
    {
        $cek = $this->cekLogin();

    if ($cek) {
        return $cek;
    }

        $informasi = Peternakan::daftarInformasi();

        return view('dashboard', compact('informasi'));
    }

    public function pengelolaan()
    {
        $cek = $this->cekLogin();

    if ($cek) {
        return $cek;
    }
        return view('pengelolaan');
    }

    public function statistik()
    {
        $cek = $this->cekLogin();

    if ($cek) {
        return $cek;
    }

        return view('statistik');
    }

    public function login()
    {
         if (session('login')) {
        return redirect('/dashboard');
    }
        return view('login');
    }

    public function prosesLogin(Request $request)
    {
    $username = $request->username;
    $password = $request->password;

    if ($username == 'admin' && $password == 'admin123') {

        session(['login' => true]);

        return redirect('/dashboard');

    } else {

        return redirect('/login')->with('error', 'Username atau password salah!');
    }
    }

    public function logout()
    {
    session()->forget('login');

    return redirect('/login');
    }

    private function cekLogin()
    {
    if (!session('login')) {
        return redirect('/login');
    }

    return null;
    }

    public function profile()
    {
        $cek = $this->cekLogin();

    if ($cek) {
        return $cek;
    }

    return view('profile');
    }
}
