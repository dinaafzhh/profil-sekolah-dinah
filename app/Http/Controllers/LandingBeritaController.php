<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use App\Models\Profil;

class LandingBeritaController extends Controller
{
    public function index()
    {
        $profil = Profil::first();

        $berita = Berita::where('status', 'Publish')
            ->orderBy('tanggal', 'desc')
            ->get();

        return view('landing.berita', [
            'profil' => $profil,
            'berita' => $berita
        ]);
    }

    public function detail($slug)
    {
        $profil = Profil::first();

        $berita = Berita::where('status', 'Publish')
            ->where('slug', $slug)
            ->firstOrFail();

        $beritaLainnya = Berita::where('status', 'Publish')
            ->where('id_berita', '!=', $berita->id_berita)
            ->orderBy('tanggal', 'desc')
            ->get();

        return view('landing.berita-detail', [
            'profil' => $profil,
            'berita' => $berita,
            'beritaLainnya' => $beritaLainnya
        ]);
    }
}