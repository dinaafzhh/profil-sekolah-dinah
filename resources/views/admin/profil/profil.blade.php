@extends('layouts.admin')

@section('content')

<style>
    .profil-page {
        background: #f5f6f8;
        min-height: 100vh;
        padding: 30px 20px 60px;
    }

    .profil-container {
        max-width: 1150px;
        margin: auto;
    }

    .profil-header {
        margin-bottom: 25px;
    }

    .profil-header h1 {
        margin: 0;
        color: #374151;
        font-size: 28px;
    }

    .profil-header p {
        margin-top: 6px;
        color: #6b7280;
    }

    .alert-success {
        background: #ecfdf5;
        color: #166534;
        border: 1px solid #bbf7d0;
        padding: 13px 16px;
        border-radius: 8px;
        margin-bottom: 20px;
    }

    .profil-card {
        background: white;
        border: 1px solid #e5e7eb;
        border-radius: 12px;
        padding: 28px;
        box-shadow: 0 3px 12px rgba(0, 0, 0, .05);
    }

    .profil-card h2 {
        margin: 0 0 25px;
        color: #374151;
        font-size: 20px;
    }

    .form-grid {
        display: grid;
        grid-template-columns: repeat(2, 1fr);
        gap: 20px;
    }

    .form-group {
        display: flex;
        flex-direction: column;
    }

    .form-group.full {
        grid-column: 1 / -1;
    }

    .form-group label {
        margin-bottom: 7px;
        color: #374151;
        font-weight: 600;
        font-size: 14px;
    }

    .form-group input,
    .form-group textarea {
        width: 100%;
        border: 1px solid #d1d5db;
        border-radius: 7px;
        padding: 11px 13px;
        font-size: 14px;
        outline: none;
        box-sizing: border-box;
    }

    .form-group input:focus,
    .form-group textarea:focus {
        border-color: #6b7280;
    }

    .form-group textarea {
        min-height: 130px;
        resize: vertical;
    }

    .photo-preview {
        margin-top: 12px;
    }

    .photo-preview img {
        width: 150px;
        height: 190px;
        object-fit: cover;
        border-radius: 8px;
        border: 1px solid #d1d5db;
        display: block;
    }

    .form-error {
        color: #dc2626;
        font-size: 13px;
        margin-top: 5px;
    }

    .button-group {
        display: flex;
        gap: 10px;
        margin-top: 25px;
    }

    .btn {
        border: none;
        border-radius: 7px;
        padding: 11px 18px;
        font-size: 14px;
        font-weight: 600;
        cursor: pointer;
        text-decoration: none;
        display: inline-flex;
        align-items: center;
        gap: 7px;
    }

    .btn-primary {
        background: #374151;
        color: white;
    }

    .btn-secondary {
        background: #e5e7eb;
        color: #374151;
    }

    .info-grid {
        display: grid;
        grid-template-columns: repeat(2, 1fr);
        gap: 15px;
    }

    .info-box {
        background: #f8f9fa;
        border: 1px solid #e5e7eb;
        border-radius: 8px;
        padding: 16px;
    }

    .info-box strong {
        display: block;
        color: #374151;
        font-size: 13px;
        margin-bottom: 6px;
    }

    .info-box span {
        color: #555;
        font-size: 14px;
        line-height: 1.6;
    }

    .empty-data {
        text-align: center;
        padding: 50px 20px;
        color: #6b7280;
    }

    .action-buttons {
        display: flex;
        gap: 10px;
        margin-top: 20px;
    }

    .btn-edit {
        background: #4b5563;
        color: white;
    }

    .btn-delete {
        background: #dc2626;
        color: white;
    }

    @media (max-width: 700px) {
        .form-grid,
        .info-grid {
            grid-template-columns: 1fr;
        }

        .form-group.full {
            grid-column: auto;
        }

        .profil-card {
            padding: 20px;
        }
    }
</style>

<div class="profil-page">

    <div class="profil-container">

        <div class="profil-header">
            <h1>Profil Sekolah</h1>
            <p>Informasi utama dan identitas SMP Negeri 1 Kota Tasikmalaya</p>
        </div>

        @if(session('success'))
            <div class="alert-success">
                {{ session('success') }}
            </div>
        @endif

        @if($errors->any())
            <div class="alert-success" style="background:#fef2f2;color:#991b1b;border-color:#fecaca;">
                Periksa kembali data yang diisi.
            </div>
        @endif

        @if(isset($editMode) && $editMode)

            <div class="profil-card">

                <h2>
                    {{ isset($createMode) && $createMode ? 'Tambah Profil Sekolah' : 'Edit Profil Sekolah' }}
                </h2>

                <form
                    action="{{ isset($createMode) && $createMode ? route('admin.profil.store') : route('admin.profil.update', $profil->id_profil) }}"
                    method="POST"
                    enctype="multipart/form-data">

                    @csrf

                    @if(!isset($createMode) || !$createMode)
                        @method('PUT')
                    @endif

                    <div class="form-grid">

                        <div class="form-group">
                            <label>Nama Sekolah</label>
                            <input
                                type="text"
                                name="nama_sekolah"
                                value="{{ old('nama_sekolah', $profil->nama_sekolah) }}"
                                required>
                            @error('nama_sekolah')
                                <div class="form-error">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label>Tahun Berdiri</label>
                            <input
                                type="number"
                                name="tahun_berdiri"
                                value="{{ old('tahun_berdiri', $profil->tahun_berdiri) }}">
                        </div>

                        <div class="form-group">
                            <label>NPSN</label>
                            <input
                                type="text"
                                name="npsn"
                                value="{{ old('npsn', $profil->npsn) }}">
                        </div>

                        <div class="form-group">
                            <label>Kontak</label>
                            <input
                                type="text"
                                name="kontak"
                                value="{{ old('kontak', $profil->kontak) }}">
                        </div>

                        <div class="form-group full">
                            <label>Alamat</label>
                            <textarea name="alamat">{{ old('alamat', $profil->alamat) }}</textarea>
                        </div>

                        <div class="form-group full">
                            <label>Deskripsi</label>
                            <textarea name="deskripsi">{{ old('deskripsi', $profil->deskripsi) }}</textarea>
                        </div>

                        <div class="form-group full">
                            <label>Visi & Misi</label>
                            <textarea name="visi_misi">{{ old('visi_misi', $profil->visi_misi) }}</textarea>
                        </div>

                        <div class="form-group">
                            <label>Nama Kepala Sekolah</label>
                            <input
                                type="text"
                                name="kepala_sekolah"
                                value="{{ old('kepala_sekolah', $profil->kepala_sekolah) }}">
                        </div>

                        <div class="form-group">
                            <label>Foto Kepala Sekolah</label>

                            <input
                                type="file"
                                name="foto"
                                accept=".jpg,.jpeg,.png,.webp">

                            @if(!empty($profil->foto))
                                <div class="photo-preview">
                                    <img
                                        src="{{ asset('storage/' . ltrim($profil->foto, '/')) }}"
                                        alt="Foto Kepala Sekolah"
                                        onerror="this.style.display='none';">
                                </div>
                            @endif

                            @error('foto')
                                <div class="form-error">{{ $message }}</div>
                            @enderror
                        </div>

                    </div>

                    <div class="button-group">

                        <button type="submit" class="btn btn-primary">
                            <i class="fa-solid fa-save"></i>
                            Simpan
                        </button>

                        <a
                            href="{{ route('admin.profil.profil') }}"
                            class="btn btn-secondary">
                            Batal
                        </a>

                    </div>

                </form>

            </div>

        @else

            @if($profil)

                <div class="profil-card">

                    <h2>Data Profil Sekolah</h2>

                    <div class="info-grid">

                        <div class="info-box">
                            <strong>Nama Sekolah</strong>
                            <span>{{ $profil->nama_sekolah ?: '-' }}</span>
                        </div>

                        <div class="info-box">
                            <strong>Tahun Berdiri</strong>
                            <span>{{ $profil->tahun_berdiri ?: '-' }}</span>
                        </div>

                        <div class="info-box">
                            <strong>NPSN</strong>
                            <span>{{ $profil->npsn ?: '-' }}</span>
                        </div>

                        <div class="info-box">
                            <strong>Kontak</strong>
                            <span>{{ $profil->kontak ?: '-' }}</span>
                        </div>

                        <div class="info-box">
                            <strong>Alamat</strong>
                            <span>{{ $profil->alamat ?: '-' }}</span>
                        </div>

                        <div class="info-box">
                            <strong>Nama Kepala Sekolah</strong>
                            <span>{{ $profil->kepala_sekolah ?: '-' }}</span>
                        </div>

                        <div class="info-box">
                            <strong>Deskripsi</strong>
                            <span>{{ $profil->deskripsi ?: '-' }}</span>
                        </div>

                        <div class="info-box">
                            <strong>Visi & Misi</strong>
                            <span>{{ $profil->visi_misi ?: '-' }}</span>
                        </div>

                    </div>

                    @if(!empty($profil->foto))
                        <div style="margin-top:20px;">

                            <strong style="display:block;margin-bottom:10px;color:#374151;">
                                Foto Kepala Sekolah
                            </strong>

                            <img
                                src="{{ asset('storage/' . ltrim($profil->foto, '/')) }}"
                                alt="Foto Kepala Sekolah"
                                style="width:150px;height:190px;object-fit:cover;border-radius:8px;border:1px solid #d1d5db;">

                        </div>
                    @endif

                    <div class="action-buttons">

                        <a
                            href="{{ route('admin.profil.edit', $profil->id_profil) }}"
                            class="btn btn-edit">
                            <i class="fa-solid fa-pen"></i>
                            Edit
                        </a>

                        <form
                            action="{{ route('admin.profil.destroy', $profil->id_profil) }}"
                            method="POST"
                            onsubmit="return confirm('Yakin ingin menghapus profil sekolah?')">

                            @csrf
                            @method('DELETE')

                            <button type="submit" class="btn btn-delete">
                                <i class="fa-solid fa-trash"></i>
                                Hapus
                            </button>

                        </form>

                    </div>

                </div>

            @else

                <div class="profil-card">

                    <div class="empty-data">

                        <i class="fa-solid fa-school" style="font-size:50px;"></i>

                        <h3 style="margin:15px 0 8px;">
                            Profil Sekolah Belum Diisi
                        </h3>

                        <p>
                            Silakan tambahkan data profil sekolah.
                        </p>

                        <div style="margin-top:20px;">

                            <a
                                href="{{ route('admin.profil.create') }}"
                                class="btn btn-primary">
                                <i class="fa-solid fa-plus"></i>
                                Tambah Profil
                            </a>

                        </div>

                    </div>

                </div>

            @endif

        @endif

    </div>

</div>

@endsection