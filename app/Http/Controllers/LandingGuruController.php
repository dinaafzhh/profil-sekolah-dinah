<?php

namespace App\Http\Controllers;

use App\Models\Guru;
use App\Models\Profil;

class LandingGuruController extends Controller
{
    public function index()
    {
        $profil = Profil::first();

        $guru = Guru::orderBy(
            'nama_guru',
            'asc'
        )->get();

        return view('landing.guru', [
            'profil' => $profil,
            'guru' => $guru
        ]);
    }

    public function detail($id)
    {
        $profil = Profil::first();

        $guru = Guru::where(
            'id_guru',
            $id
        )->firstOrFail();

        $guruLainnya = Guru::where(
            'id_guru',
            '!=',
            $id
        )
        ->orderBy(
            'nama_guru',
            'asc'
        )
        ->get();

        return view('landing.guru-detail', [
            'profil' => $profil,
            'guru' => $guru,
            'guruLainnya' => $guruLainnya
        ]);
    }
}