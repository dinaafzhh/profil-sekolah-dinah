@extends('layouts.admin')

@section('content')

<div class="container-fluid py-4">

    <div class="d-flex justify-content-between align-items-center mb-4">

        <div>
            <h4 class="fw-bold mb-1">Data Galeri</h4>
            <p class="text-muted mb-0">
                Kelola foto kegiatan sekolah
            </p>
        </div>

        <a
            href="{{ route('admin.galeri.create') }}"
            class="btn btn-primary"
        >
            <i class="bi bi-plus-lg me-1"></i>
            Tambah Galeri
        </a>

    </div>

    @if(session('success'))

        <div class="alert alert-success alert-dismissible fade show">

            {{ session('success') }}

            <button
                type="button"
                class="btn-close"
                data-bs-dismiss="alert"
            ></button>

        </div>

    @endif

    <div class="card border-0 shadow-sm">

        <div class="card-header bg-white py-3">

            <h6 class="fw-bold mb-0">
                Daftar Galeri Foto
            </h6>

        </div>

        <div class="card-body">

            <div class="table-responsive">

                <table class="table table-bordered table-hover align-middle">

                    <thead class="table-light">

                        <tr>

                            <th width="60">
                                No
                            </th>

                            <th width="140">
                                Foto
                            </th>

                            <th>
                                Judul
                            </th>

                            <th>
                                Kategori
                            </th>

                            <th>
                                Tanggal
                            </th>

                            <th>
                                Keterangan
                            </th>

                            <th width="130">
                                Aksi
                            </th>

                        </tr>

                    </thead>

                    <tbody>

                        @forelse($galeri as $item)

                            <tr>

                                <td class="text-center">
                                    {{ $loop->iteration }}
                                </td>

                                <td class="text-center">

                                    @if($item->file)

                                        <img
                                            src="{{ asset('storage/' . ltrim($item->file, '/')) }}"
                                            width="100"
                                            height="70"
                                            class="rounded border"
                                            style="object-fit: cover;"
                                            alt="{{ $item->judul }}"
                                        >

                                    @else

                                        <span class="text-muted small">
                                            Tidak ada foto
                                        </span>

                                    @endif

                                </td>

                                <td>
                                    {{ $item->judul }}
                                </td>

                                <td>

                                    <span class="badge bg-primary">
                                        {{ $item->kategori }}
                                    </span>

                                </td>

                                <td>
                                    {{ \Carbon\Carbon::parse($item->tanggal)->format('d-m-Y') }}
                                </td>

                                <td>
                                    {{ $item->keterangan }}
                                </td>

                                <td>

                                    <div class="d-flex gap-2">

                                        <a
                                            href="{{ route('admin.galeri.edit', $item->id_galeri) }}"
                                            class="btn btn-warning btn-sm"
                                            title="Edit"
                                        >
                                            <i class="bi bi-pencil-square"></i>
                                        </a>

                                        <form
                                            action="{{ route('admin.galeri.destroy', $item->id_galeri) }}"
                                            method="POST"
                                            onsubmit="return confirm('Yakin ingin menghapus data ini?')"
                                        >

                                            @csrf
                                            @method('DELETE')

                                            <button
                                                type="submit"
                                                class="btn btn-danger btn-sm"
                                                title="Hapus"
                                            >
                                                <i class="bi bi-trash"></i>
                                            </button>

                                        </form>

                                    </div>

                                </td>

                            </tr>

                        @empty

                            <tr>

                                <td
                                    colspan="7"
                                    class="text-center py-4 text-muted"
                                >
                                    Belum ada data galeri.
                                </td>

                            </tr>

                        @endforelse

                    </tbody>

                </table>

            </div>

        </div>

    </div>

</div>

@endsection