<?php

namespace App\Http\Controllers;

use App\Models\Profil;
use App\Models\Berita;
use App\Models\Galeri;
use App\Models\Guru;
use App\Models\Siswa;
use App\Models\Ekstrakurikuler;

class LandingController extends Controller
{
    public function index()
    {
        $profil = Profil::first();

        $berita = Berita::where('status', 'Publish')
            ->orderByDesc('tanggal')
            ->orderByDesc('id_berita')
            ->first();

        $galeri = Galeri::orderBy('tanggal', 'desc')->get();

        $guru = Guru::orderBy('nama_guru', 'asc')->take(4)->get();

        $siswa = Siswa::orderBy('nama_siswa', 'asc')->get();

        $ekstrakurikuler = Ekstrakurikuler::all();

        $totalSiswa = Siswa::count();
        $totalGuru = Guru::count();
        $totalBerita = Berita::count();
        $totalEkstrakurikuler = Ekstrakurikuler::count();

        return view('landing', [
            'profil' => $profil,
            'berita' => $berita,
            'galeri' => $galeri,
            'guru' => $guru,
            'siswa' => $siswa,
            'ekstrakurikuler' => $ekstrakurikuler,
            'totalSiswa' => $totalSiswa,
            'totalGuru' => $totalGuru,
            'totalBerita' => $totalBerita,
            'totalEkstrakurikuler' => $totalEkstrakurikuler,
        ]);
    }
}