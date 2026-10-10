<?php

namespace App\Http\Controllers;

use App\Models\Galeri;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class GaleriController extends Controller
{
    public function index()
    {
        $galeri = Galeri::orderBy('id_galeri', 'desc')->get();

        return view('admin.galeri.galeri', compact('galeri'));
    }

    public function create()
    {
        return view('admin.galeri.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'judul' => 'required|string|max:50',
            'keterangan' => 'required|string',
            'file' => 'required|image|mimes:jpg,jpeg,png,webp|max:5120',
            'kategori' => [
                'required',
                'in:Kegiatan Sekolah,Prestasi,Fasilitas,Lainnya',
            ],
            'tanggal' => 'required|date',
        ]);

        $data = $request->except('file');

        if ($request->hasFile('file')) {
            $file = $request->file('file');

            $namaFile = uniqid() . '_' . $file->getClientOriginalName();

            $folder = public_path('storage/galeri');

            if (!File::exists($folder)) {
                File::makeDirectory($folder, 0755, true);
            }

            $file->move($folder, $namaFile);

            $data['file'] = 'galeri/' . $namaFile;
        }

        Galeri::create($data);

        return redirect()
            ->route('admin.galeri.galeri')
            ->with('success', 'Data galeri foto berhasil ditambahkan!');
    }

    public function show(string $id)
    {
        $galeri = Galeri::findOrFail($id);

        return view('admin.galeri.show', compact('galeri'));
    }

    public function edit(string $id)
    {
        $galeri = Galeri::findOrFail($id);

        return view('admin.galeri.edit', compact('galeri'));
    }

    public function update(Request $request, string $id)
    {
        $galeri = Galeri::findOrFail($id);

        $request->validate([
            'judul' => 'required|string|max:50',
            'keterangan' => 'required|string',
            'file' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:5120',
            'kategori' => [
                'required',
                'in:Kegiatan Sekolah,Prestasi,Fasilitas,Lainnya',
            ],
            'tanggal' => 'required|date',
        ]);

        $data = $request->except('file');

        if ($request->hasFile('file')) {

            if ($galeri->file) {
                $fileLama = public_path('storage/' . $galeri->file);

                if (File::exists($fileLama)) {
                    File::delete($fileLama);
                }
            }

            $file = $request->file('file');

            $namaFile = uniqid() . '_' . $file->getClientOriginalName();

            $folder = public_path('storage/galeri');

            if (!File::exists($folder)) {
                File::makeDirectory($folder, 0755, true);
            }

            $file->move($folder, $namaFile);

            $data['file'] = 'galeri/' . $namaFile;
        }

        $galeri->update($data);

        return redirect()
            ->route('admin.galeri.galeri')
            ->with('success', 'Data galeri foto berhasil diperbarui!');
    }

    public function destroy(string $id)
    {
        $galeri = Galeri::findOrFail($id);

        if ($galeri->file) {
            $file = public_path('storage/' . $galeri->file);

            if (File::exists($file)) {
                File::delete($file);
            }
        }

        $galeri->delete();

        return redirect()
            ->route('admin.galeri.galeri')
            ->with('success', 'Data galeri foto berhasil dihapus!');
    }
}