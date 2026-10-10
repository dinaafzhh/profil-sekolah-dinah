<?php

namespace App\Http\Controllers;

use App\Models\Galeri;
use App\Models\Profil;

class LandingGaleriController extends Controller
{
    public function index()
    {
        $profil = Profil::first();

        $galeri = Galeri::orderBy(
            'tanggal',
            'desc'
        )->get();

        return view(
            'landing.galeri',
            compact(
                'profil',
                'galeri'
            )
        );
    }

    public function detail($id)
    {
        $profil = Profil::first();

        $galeri = Galeri::where(
            'id_galeri',
            $id
        )->firstOrFail();

        $galeriLainnya = Galeri::where(
            'id_galeri',
            '!=',
            $id
        )
        ->orderBy(
            'tanggal',
            'desc'
        )
        ->get();

        return view(
            'landing.galeri-detail',
            compact(
                'profil',
                'galeri',
                'galeriLainnya'
            )
        );
    }
}

