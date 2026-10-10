<?php

namespace App\Http\Controllers;

use App\Models\Ekstrakurikuler;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class EkstrakurikulerController extends Controller
{
    public function index()
    {
        $ekstrakurikuler = Ekstrakurikuler::all();

        return view(
            'admin.ektrakurikuler.ektrakurikuler',
            compact('ekstrakurikuler')
        );
    }

    public function create()
    {
        return view('admin.ektrakurikuler.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_ekskul' => 'required|string|max:40',
            'pembina' => 'required|string|max:40',
            'jadwal_latihan' => 'required|string|max:40',
            'deskripsi' => 'required|string',
            'gambar' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
        ]);

        $data = [
            'nama_ekskul' => $request->nama_ekskul,
            'pembina' => $request->pembina,
            'jadwal_latihan' => $request->jadwal_latihan,
            'deskripsi' => $request->deskripsi,
        ];

        if ($request->hasFile('gambar')) {
            $file = $request->file('gambar');
            $namaFile = uniqid() . '_' . $file->getClientOriginalName();

            $folder = public_path('storage/ekstrakurikuler');

            if (!File::exists($folder)) {
                File::makeDirectory($folder, 0755, true);
            }

            $file->move($folder, $namaFile);

            $data['gambar'] = 'ekstrakurikuler/' . $namaFile;
        }

        Ekstrakurikuler::create($data);

        return redirect()
            ->route('admin.ektrakurikuler.ektrakurikuler')
            ->with('success', 'Data ekstrakurikuler berhasil ditambahkan!');
    }

    public function show($id)
    {
        $ekstrakurikuler = Ekstrakurikuler::where(
            'id_ekskul',
            $id
        )->firstOrFail();

        return view(
            'admin.ektrakurikuler.show',
            compact('ekstrakurikuler')
        );
    }

    public function edit($id)
    {
        $ekstrakurikuler = Ekstrakurikuler::where(
            'id_ekskul',
            $id
        )->firstOrFail();

        return view(
            'admin.ektrakurikuler.edit',
            compact('ekstrakurikuler')
        );
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nama_ekskul' => 'required|string|max:40',
            'pembina' => 'required|string|max:40',
            'jadwal_latihan' => 'required|string|max:40',
            'deskripsi' => 'required|string',
            'gambar' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
        ]);

        $ekstrakurikuler = Ekstrakurikuler::where(
            'id_ekskul',
            $id
        )->firstOrFail();

        $data = [
            'nama_ekskul' => $request->nama_ekskul,
            'pembina' => $request->pembina,
            'jadwal_latihan' => $request->jadwal_latihan,
            'deskripsi' => $request->deskripsi,
        ];

        if ($request->hasFile('gambar')) {
            if ($ekstrakurikuler->gambar) {
                $gambarLama = public_path(
                    'storage/' . $ekstrakurikuler->gambar
                );

                if (File::exists($gambarLama)) {
                    File::delete($gambarLama);
                }
            }

            $file = $request->file('gambar');
            $namaFile = uniqid() . '_' . $file->getClientOriginalName();

            $folder = public_path('storage/ekstrakurikuler');

            if (!File::exists($folder)) {
                File::makeDirectory($folder, 0755, true);
            }

            $file->move($folder, $namaFile);

            $data['gambar'] = 'ekstrakurikuler/' . $namaFile;
        }

        $ekstrakurikuler->update($data);

        return redirect()
            ->route('admin.ektrakurikuler.ektrakurikuler')
            ->with('success', 'Data ekstrakurikuler berhasil diperbarui!');
    }

    public function destroy($id)
    {
        $ekstrakurikuler = Ekstrakurikuler::where(
            'id_ekskul',
            $id
        )->firstOrFail();

        if ($ekstrakurikuler->gambar) {
            $gambar = public_path(
                'storage/' . $ekstrakurikuler->gambar
            );

            if (File::exists($gambar)) {
                File::delete($gambar);
            }
        }

        $ekstrakurikuler->delete();

        return redirect()
            ->route('admin.ektrakurikuler.ektrakurikuler')
            ->with('success', 'Data ekstrakurikuler berhasil dihapus!');
    }
}