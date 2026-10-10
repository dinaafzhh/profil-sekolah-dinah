<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\File;

class BeritaController extends Controller
{
    public function index()
    {
        $berita = Berita::with('user')
            ->orderBy('id_berita', 'desc')
            ->get();

        return view('admin.berita.berita', compact('berita'));
    }

    public function landing()
    {
        $berita = Berita::where('status', 'Publish')
            ->orderBy('tanggal', 'desc')
            ->orderBy('id_berita', 'desc')
            ->first();

        return view('landing', compact('berita'));
    }

    public function detail(string $id)
    {
        $berita = Berita::with('user')
            ->where('id_berita', $id)
            ->where('status', 'Publish')
            ->firstOrFail();

        $beritaLain = Berita::with('user')
            ->where('status', 'Publish')
            ->where('id_berita', '!=', $id)
            ->orderBy('tanggal', 'desc')
            ->get();

        return view(
            'admin.berita.detail',
            compact('berita', 'beritaLain')
        );
    }

    public function create()
    {
        $users = User::all();

        return view(
            'admin.berita.create',
            compact('users')
        );
    }

    public function store(Request $request)
    {
        $request->validate([
            'judul' => 'required|string|max:50',
            'isi' => 'required|string',
            'tanggal' => 'required|date',
            'gambar' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
            'status' => 'required|in:Publish,Draft',
            'id_user' => 'required|exists:user,id_user',
        ]);

        $data = [
            'judul' => $request->judul,
            'slug' => Str::slug($request->judul),
            'isi' => $request->isi,
            'tanggal' => $request->tanggal,
            'status' => $request->status,
            'id_user' => $request->id_user,
        ];

        if ($request->hasFile('gambar')) {

            $folder = public_path('storage/berita');

            if (!File::exists($folder)) {
                File::makeDirectory($folder, 0755, true);
            }

            $gambar = $request->file('gambar');

            $namaGambar = $gambar->hashName();

            $gambar->move(
                $folder,
                $namaGambar
            );

            $data['gambar'] = 'berita/' . $namaGambar;
        }

        Berita::create($data);

        return redirect()
            ->route('admin.berita.berita')
            ->with('success', 'Berita berhasil ditambahkan!');
    }

    public function edit(string $id)
    {
        $berita = Berita::where('id_berita', $id)
            ->firstOrFail();

        $users = User::all();

        return view(
            'admin.berita.edit',
            compact('berita', 'users')
        );
    }

    public function update(Request $request, string $id)
    {
        $berita = Berita::where('id_berita', $id)
            ->firstOrFail();

        $request->validate([
            'judul' => 'required|string|max:50',
            'isi' => 'required|string',
            'tanggal' => 'required|date',
            'gambar' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
            'status' => 'required|in:Publish,Draft',
            'id_user' => 'required|exists:user,id_user',
        ]);

        $berita->judul = $request->judul;
        $berita->slug = Str::slug($request->judul);
        $berita->isi = $request->isi;
        $berita->tanggal = $request->tanggal;
        $berita->status = $request->status;
        $berita->id_user = $request->id_user;

        if ($request->hasFile('gambar')) {

            if ($berita->gambar) {

                $gambarLama = public_path(
                    'storage/' . $berita->gambar
                );

                if (file_exists($gambarLama)) {
                    unlink($gambarLama);
                }
            }

            $folder = public_path('storage/berita');

            if (!File::exists($folder)) {
                File::makeDirectory($folder, 0755, true);
            }

            $gambar = $request->file('gambar');

            $namaGambar = $gambar->hashName();

            $gambar->move(
                $folder,
                $namaGambar
            );

            $berita->gambar = 'berita/' . $namaGambar;
        }

        $berita->save();

        return redirect()
            ->route('admin.berita.berita')
            ->with('success', 'Berita berhasil diperbarui!');
    }

    public function destroy(string $id)
    {
        $berita = Berita::where('id_berita', $id)
            ->firstOrFail();

        if ($berita->gambar) {

            $gambar = public_path(
                'storage/' . $berita->gambar
            );

            if (file_exists($gambar)) {
                unlink($gambar);
            }
        }

        $berita->delete();

        return redirect()
            ->route('admin.berita.berita')
            ->with('success', 'Berita berhasil dihapus!');
    }
}