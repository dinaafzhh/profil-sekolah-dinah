<?php

namespace App\Http\Controllers;

use App\Models\Guru;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class GuruController extends Controller
{
    public function index()
    {
        $gurus = Guru::orderBy('nama_guru', 'asc')->get();

        return view('admin.guru.guru', compact('gurus'));
    }

    public function create()
    {
        return view('admin.guru.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_guru' => 'required|string|max:40',
            'nip' => 'required|string|max:50',
            'mapel' => 'required|string|max:40',
            'foto' => 'required|image|mimes:jpg,jpeg,png,webp|max:5120',
        ]);

        $data = [
            'nama_guru' => $request->nama_guru,
            'nip' => $request->nip,
            'mapel' => $request->mapel,
        ];

        if ($request->hasFile('foto')) {
            $file = $request->file('foto');
            $namaFile = uniqid() . '_' . $file->getClientOriginalName();

            $folder = public_path('storage/foto_guru');

            if (!File::exists($folder)) {
                File::makeDirectory($folder, 0755, true);
            }

           
            $file->move($folder, $namaFile);

            $data['foto'] = 'foto_guru/' . $namaFile;
        }

        Guru::create($data);

        return redirect()
            ->route('admin.guru.guru')
            ->with('success', 'Data guru berhasil ditambahkan!');
    }

    public function show(Guru $guru)
    {
        return view('admin.guru.show', compact('guru'));
    }

    public function edit(Guru $guru)
    {
        return view('admin.guru.edit', compact('guru'));
    }

    public function update(Request $request, Guru $guru)
    {
        $request->validate([
            'nama_guru' => 'required|string|max:40',
            'nip' => 'required|string|max:50',
            'mapel' => 'required|string|max:40',
            'foto' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:5120',
        ]);

        $data = [
            'nama_guru' => $request->nama_guru,
            'nip' => $request->nip,
            'mapel' => $request->mapel,
        ];

        if ($request->hasFile('foto')) {
            if ($guru->foto) {
                $fotoLama = public_path('storage/' . $guru->foto);

                if (File::exists($fotoLama)) {
                    File::delete($fotoLama);
                }
            }

            $file = $request->file('foto');
            $namaFile = uniqid() . '_' . $file->getClientOriginalName();

            $folder = public_path('storage/foto_guru');

            if (!File::exists($folder)) {
                File::makeDirectory($folder, 0755, true);
            }

            $file->move($folder, $namaFile);
       

            $data['foto'] = 'foto_guru/' . $namaFile;
        }

        $guru->update($data);

        return redirect()
            ->route('admin.guru.guru')
            ->with('success', 'Data guru berhasil diperbarui!');
    }

    public function destroy(Guru $guru)
    {
        if ($guru->foto) {
            $foto = public_path('storage/' . $guru->foto);

            if (File::exists($foto)) {
                File::delete($foto);
            }
        }

        $guru->delete();

        return redirect()
            ->route('admin.guru.guru')
            ->with('success', 'Data guru berhasil dihapus!');
    }
}