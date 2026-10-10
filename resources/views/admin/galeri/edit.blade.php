@extends('layouts.admin')

@section('content')

<div class="container-fluid py-4">

    <div class="mb-4">
        <h4 class="fw-bold mb-1">Edit Galeri</h4>
        <p class="text-muted mb-0">
            Ubah data galeri foto sekolah
        </p>
    </div>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul class="mb-0">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <div class="card border-0 shadow-sm">

        <div class="card-body p-4">

            <form
                action="{{ route('admin.galeri.update', $galeri->id_galeri) }}"
                method="POST"
                enctype="multipart/form-data"
            >

                @csrf
                @method('PUT')

                <div class="mb-3">

                    <label class="form-label fw-semibold">
                        Judul Galeri
                    </label>

                    <input
                        type="text"
                        name="judul"
                        class="form-control"
                        value="{{ old('judul', $galeri->judul) }}"
                        maxlength="50"
                        placeholder="Masukkan judul galeri"
                        required
                    >

                    @error('judul')
                        <small class="text-danger">
                            {{ $message }}
                        </small>
                    @enderror

                </div>

                <div class="mb-3">

                    <label class="form-label fw-semibold">
                        Keterangan
                    </label>

                    <textarea
                        name="keterangan"
                        rows="5"
                        class="form-control"
                        placeholder="Masukkan keterangan foto"
                        required
                    >{{ old('keterangan', $galeri->keterangan) }}</textarea>

                    @error('keterangan')
                        <small class="text-danger">
                            {{ $message }}
                        </small>
                    @enderror

                </div>

                <div class="mb-3">

                    <label class="form-label fw-semibold">
                        Kategori
                    </label>

                    <select
                        name="kategori"
                        class="form-select"
                        required
                    >

                        <option value="">
                            -- Pilih Kategori --
                        </option>

                        <option
                            value="Kegiatan Sekolah"
                            {{ old('kategori', $galeri->kategori) == 'Kegiatan Sekolah' ? 'selected' : '' }}
                        >
                            Kegiatan Sekolah
                        </option>

                        <option
                            value="Prestasi"
                            {{ old('kategori', $galeri->kategori) == 'Prestasi' ? 'selected' : '' }}
                        >
                            Prestasi
                        </option>

                        <option
                            value="Fasilitas"
                            {{ old('kategori', $galeri->kategori) == 'Fasilitas' ? 'selected' : '' }}
                        >
                            Fasilitas
                        </option>

                        <option
                            value="Lainnya"
                            {{ old('kategori', $galeri->kategori) == 'Lainnya' ? 'selected' : '' }}
                        >
                            Lainnya
                        </option>

                    </select>

                    @error('kategori')
                        <small class="text-danger">
                            {{ $message }}
                        </small>
                    @enderror

                </div>

                <div class="mb-3">

                    <label class="form-label fw-semibold">
                        Foto Saat Ini
                    </label>

                    @if ($galeri->file)

                        <div class="mb-2">

                            <img
                                src="{{ asset('storage/' . ltrim($galeri->file, '/')) }}"
                                width="250"
                                height="160"
                                style="object-fit: cover;"
                                class="img-thumbnail"
                                alt="{{ $galeri->judul }}"
                            >

                        </div>

                    @else

                        <p class="text-muted">
                            Belum ada foto.
                        </p>

                    @endif

                </div>

                <div class="mb-3">

                    <label class="form-label fw-semibold">
                        Ganti Foto
                    </label>

                    <input
                        type="file"
                        name="file"
                        class="form-control"
                        accept=".jpg,.jpeg,.png,.webp"
                    >

                    <small class="text-muted d-block mt-2">
                        Kosongkan jika tidak ingin mengganti foto.
                    </small>

                    <small class="text-muted d-block">
                        Format yang diperbolehkan: JPG, JPEG, PNG, WEBP.
                    </small>

                    <small class="text-muted d-block">
                        Ukuran maksimal 5 MB.
                    </small>

                    @error('file')
                        <small class="text-danger d-block mt-1">
                            {{ $message }}
                        </small>
                    @enderror

                </div>

                <div class="mb-4">

                    <label class="form-label fw-semibold">
                        Tanggal
                    </label>

                    <input
                        type="date"
                        name="tanggal"
                        class="form-control"
                        value="{{ old('tanggal', \Carbon\Carbon::parse($galeri->tanggal)->format('Y-m-d')) }}"
                        required
                    >

                    @error('tanggal')
                        <small class="text-danger">
                            {{ $message }}
                        </small>
                    @enderror

                </div>

                <div class="d-flex gap-2">

                    <button
                        type="submit"
                        class="btn btn-primary"
                    >
                        <i class="bi bi-save me-1"></i>
                        Simpan Perubahan
                    </button>

                    <a
                        href="{{ route('admin.galeri.galeri') }}"
                        class="btn btn-secondary"
                    >
                        Kembali
                    </a>

                </div>

            </form>

        </div>

    </div>

</div>

@endsection