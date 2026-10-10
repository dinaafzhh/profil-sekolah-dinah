<?php

namespace App\Http\Controllers;

use App\Models\Ekstrakurikuler;
use App\Models\Profil;

class LandingEkstrakurikulerController extends Controller
{
    public function index()
    {
        $profil = Profil::first();

        $ekstrakurikuler = Ekstrakurikuler::orderBy(
            'nama_ekskul',
            'asc'
        )->get();

        return view(
            'landing.ekstrakurikuler',
            compact(
                'profil',
                'ekstrakurikuler'
            )
        );
    }

    public function detail($id)
    {
        $profil = Profil::first();

        $ekstrakurikuler = Ekstrakurikuler::where(
            'id_ekskul',
            $id
        )->firstOrFail();

        $eskulLainnya = Ekstrakurikuler::where(
            'id_ekskul',
            '!=',
            $id
        )
        ->orderBy('nama_ekskul', 'asc')
        ->get();

        return view(
            'landing.ekstrakurikuler-detail',
            compact(
                'profil',
                'ekstrakurikuler',
                'eskulLainnya'
            )
        );
    }
}