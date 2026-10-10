<?php

namespace App\Http\Controllers;

use App\Models\Profil;

class LandingProfilController extends Controller
{
    public function index()
    {
        $profil = Profil::first();

        return view('landing.profil', [
            'profil' => $profil
        ]);
    }
}