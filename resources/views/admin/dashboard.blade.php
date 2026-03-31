<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Rumah Sakit</title>

    <!-- Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            background-color: #f8f9fa;
        }

        .card {
            border-radius: 18px;
        }

        .table img {
            object-fit: cover;
            width: 90px;
            height: 70px;
        }

        .form-title {
            font-weight: 700;
            color: #0d6efd;
        }

        .table thead th {
            vertical-align: middle;
        }

        .badge-status {
            font-size: 0.85rem;
            padding: 8px 12px;
            border-radius: 10px;
        }

        .preview-image {
            width: 120px;
            height: 90px;
            object-fit: cover;
            border-radius: 12px;
            border: 1px solid #ddd;
            margin-top: 10px;
        }
    </style>
</head>
<body>

<div class="container py-5">
    <div class="row">
        <div class="col-lg-11 mx-auto">

            <!-- FORM TAMBAH / EDIT -->
            <div class="card shadow-sm border-0 mb-4">
                <div class="card-body p-4">
                    <h2 class="mb-4 text-center form-title">
                        {{ isset($rumahSakit) ? 'Edit Data Rumah Sakit' : 'Tambah Data Kamar' }}
                    </h2>

                    {{-- Alert sukses --}}
                    @if(session('success'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            {{ session('success') }}
                            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                        </div>
                    @endif

                    {{-- Error validasi --}}
                    @if($errors->any())
                        <div class="alert alert-danger">
                            <strong>Terjadi kesalahan:</strong>
                            <ul class="mb-0 mt-2">
                                @foreach($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <form 
                        action="{{ isset($rumahSakit) ? route('rumah-sakit.update', $rumahSakit->id) : route('rumah-sakit.store') }}" 
                        method="POST" 
                        enctype="multipart/form-data"
                    >
                        @csrf
                        @if(isset($rumahSakit))
                            @method('PUT')
                        @endif

                        <div class="row">
                            <!-- Cover -->
                            <div class="col-md-6 mb-3">
                                <label class="form-label fw-semibold">Cover Rumah Sakit</label>
                                <input type="file" name="cover" class="form-control">

                                {{-- Preview gambar saat edit --}}
                                @if(isset($rumahSakit) && $rumahSakit->cover)
                                    <div>
                                        <img 
                                            src="{{ asset('storage/' . $rumahSakit->cover) }}" 
                                            alt="Cover Rumah Sakit" 
                                            class="preview-image shadow-sm"
                                        >
                                    </div>
                                @endif
                            </div>

                            <!-- Nama Rumah Sakit -->
                            <div class="col-md-6 mb-3">
                                <label class="form-label fw-semibold">Nama Rumah Sakit</label>
                                <input 
                                    type="text" 
                                    name="nama_rumah_sakit" 
                                    class="form-control" 
                                    placeholder="Masukkan nama rumah sakit"
                                    value="{{ old('nama_rumah_sakit', $rumahSakit->nama_rumah_sakit ?? '') }}"
                                >
                            </div>

                            <!-- Rating -->
                            <div class="col-md-4 mb-3">
                                <label class="form-label fw-semibold">Rating</label>
                                <input 
                                    type="number" 
                                    step="0.1" 
                                    name="rating" 
                                    class="form-control" 
                                    placeholder="Contoh: 4.5"
                                    value="{{ old('rating', $rumahSakit->rating ?? '') }}"
                                >
                            </div>

                            <!-- Nomor Kontak -->
                            <div class="col-md-4 mb-3">
                                <label class="form-label fw-semibold">Nomor Kontak</label>
                                <input 
                                    type="text" 
                                    name="nomor_kontak" 
                                    class="form-control" 
                                    placeholder="Masukkan nomor kontak"
                                    value="{{ old('nomor_kontak', $rumahSakit->nomor_kontak ?? '') }}"
                                >
                            </div>

                            <!-- Nomor Kamar -->
                            <div class="col-md-4 mb-3">
                                <label class="form-label fw-semibold">Nomor Kamar</label>
                                <input 
                                    type="text" 
                                    name="nomor_kamar" 
                                    class="form-control" 
                                    placeholder="Masukkan nomor kamar"
                                    value="{{ old('nomor_kamar', $rumahSakit->nomor_kamar ?? '') }}"
                                >
                            </div>

                            <!-- Alamat -->
                            <div class="col-md-12 mb-3">
                                <label class="form-label fw-semibold">Alamat</label>
                                <textarea 
                                    name="alamat" 
                                    class="form-control" 
                                    rows="3" 
                                    placeholder="Masukkan alamat rumah sakit"
                                >{{ old('alamat', $rumahSakit->alamat ?? '') }}</textarea>
                            </div>

                            <!-- Kategori -->
                            <div class="col-md-6 mb-3">
                                <label class="form-label fw-semibold">Kategori</label>
                                <select name="kategori" class="form-select">
                                    <option value="">-- Pilih Kategori --</option>
                                    <option value="Darurat" {{ old('kategori', $rumahSakit->kategori ?? '') == 'Darurat' ? 'selected' : '' }}>Darurat</option>
                                    <option value="Bedah" {{ old('kategori', $rumahSakit->kategori ?? '') == 'Bedah' ? 'selected' : '' }}>Bedah</option>
                                    <option value="Kardiologi" {{ old('kategori', $rumahSakit->kategori ?? '') == 'Kardiologi' ? 'selected' : '' }}>Kardiologi</option>
                                </select>
                            </div>

                            <!-- Status -->
                            <div class="col-md-6 mb-3">
                                <label class="form-label fw-semibold">Status</label>
                                <select name="status" class="form-select">
                                    <option value="">-- Pilih Status --</option>
                                    <option value="Buka" {{ old('status', $rumahSakit->status ?? '') == 'Buka' ? 'selected' : '' }}>Buka</option>
                                    <option value="Tutup" {{ old('status', $rumahSakit->status ?? '') == 'Tutup' ? 'selected' : '' }}>Tutup</option>
                                </select>
                            </div>
                        </div>

                        <!-- Tombol -->
                        <div class="d-flex gap-2 mt-3">
                            <button type="submit" class="btn btn-primary w-100 rounded-3">
                                {{ isset($rumahSakit) ? 'Update Data' : 'Simpan Data' }}
                            </button>

                            @if(isset($rumahSakit))
                                <a href="{{ route('admin.dashboard') }}" class="btn btn-secondary w-100 rounded-3">
                                    Batal
                                </a>
                            @endif
                        </div>
                    </form>
                </div>
            </div>

            <!-- TABEL DATA -->
            <div class="card shadow-sm border-0">
                <div class="card-body p-4">
                    <h3 class="mb-4 text-center text-primary fw-bold">Daftar Kamar</h3>

                    <div class="table-responsive">
                        <table class="table table-bordered table-hover align-middle text-center">
                            <thead class="table-primary">
                                <tr>
                                    <th>No</th>
                                    <th>Cover</th>
                                    <th>Nama RS</th>
                                    <th>Rating</th>
                                    <th>Alamat</th>
                                    <th>Kontak</th>
                                    <th>Kategori</th>
                                    <th>No Kamar</th>
                                    <th>Status</th>
                                    <th width="180">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse($rumahSakits ?? [] as $index => $rs)
                                    <tr>
                                        <td>{{ $index + 1 }}</td>

                                        <!-- Cover -->
                                        <td>
                                            @if($rs->cover && file_exists(public_path('storage/' . $rs->cover)))
                                                <img 
                                                    src="{{ asset('storage/' . $rs->cover) }}" 
                                                    alt="Cover Rumah Sakit" 
                                                    class="rounded border shadow-sm"
                                                >
                                            @else
                                                <span class="text-muted">Tidak ada</span>
                                            @endif
                                        </td>

                                        <td>{{ $rs->nama_rumah_sakit }}</td>
                                        <td>{{ $rs->rating }}</td>
                                        <td style="min-width: 180px;">{{ $rs->alamat }}</td>
                                        <td>{{ $rs->nomor_kontak }}</td>
                                        <td>{{ $rs->kategori }}</td>
                                        <td>{{ $rs->nomor_kamar }}</td>

                                        <!-- Status -->
                                        <td>
                                            @if($rs->status == 'Buka')
                                                <span class="badge bg-success badge-status">Buka</span>
                                            @else
                                                <span class="badge bg-danger badge-status">Tutup</span>
                                            @endif
                                        </td>

                                        <!-- Aksi -->
                                        <td>
                                            <div class="d-flex justify-content-center gap-2">
                                                <a href="{{ route('rumah-sakit.edit', $rs->id) }}" class="btn btn-warning btn-sm px-3">
                                                    Edit
                                                </a>

                                                <form action="{{ route('rumah-sakit.destroy', $rs->id) }}" method="POST" onsubmit="return confirm('Yakin ingin menghapus data ini?')">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm px-3">
                                                        Hapus
                                                    </button>
                                                </form>
                                            </div>
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="10" class="text-muted py-4">
                                            Belum ada data kamar
                                        </td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>

                </div>
            </div>

        </div>
    </div>
</div>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>