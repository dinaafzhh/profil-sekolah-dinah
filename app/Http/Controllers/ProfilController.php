<?php

namespace App\Http\Controllers;

use App\Models\Profil;
use Illuminate\Http\Request;

class ProfilController extends Controller
{
    public function index()
    {
        $profil = Profil::first();

        return view('admin.profil.profil', [
            'profil' => $profil
        ]);
    }

    public function create()
    {
        return view('admin.profil.profil', [
            'profil' => new Profil(),
            'editMode' => true,
            'createMode' => true
        ]);
    }

    public function store(Request $request)
    {
        $data = $this->validateData($request);

        if ($request->hasFile('foto')) {
            $data['foto'] = $request->file('foto')
                ->store('profil_sekolah', 'public');
        }

        Profil::create($data);

        return redirect()
            ->route('admin.profil.profil')
            ->with('success', 'Profil sekolah berhasil ditambahkan.');
    }

    public function edit($id)
    {
        $profil = Profil::findOrFail($id);

        return view('admin.profil.profil', [
            'profil' => $profil,
            'editMode' => true,
            'createMode' => false
        ]);
    }

    public function update(Request $request, $id)
    {
        $profil = Profil::findOrFail($id);

        $data = $this->validateData($request);

        if ($request->hasFile('foto')) {
            $data['foto'] = $request->file('foto')
                ->store('profil_sekolah', 'public');
        }

        $profil->update($data);

        return redirect()
            ->route('admin.profil.profil')
            ->with('success', 'Profil sekolah berhasil diperbarui.');
    }

    public function destroy($id)
    {
        $profil = Profil::findOrFail($id);

        $profil->delete();

        return redirect()
            ->route('admin.profil.profil')
            ->with('success', 'Profil sekolah berhasil dihapus.');
    }

    private function validateData(Request $request)
    {
        return $request->validate([
            'nama_sekolah' => 'required|string|max:255',
            'tahun_berdiri' => 'nullable|integer',
            'npsn' => 'nullable|string|max:50',
            'alamat' => 'nullable|string',
            'kontak' => 'nullable|string|max:100',
            'deskripsi' => 'nullable|string',
            'visi_misi' => 'nullable|string',
            'kepala_sekolah' => 'nullable|string|max:255',
            'foto' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:5120',
        ]);
    }
}