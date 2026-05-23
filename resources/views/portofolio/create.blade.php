@extends('master')
@section('content')
<div class="container py-5 text-white" style="background-color:#121212; min-height: 80vh;">
    <div class="mb-4">
        <h2 class="fw-bold" style="color: #bc13fe;">Tambah Project Baru</h2>
        <p class="text-muted small">Masukkan detail project Portofolio ke data.</p>
    </div>

    @if ($errors->any())
        <div class="alert alert-danger bg-dark text-danger border-danger mb-4">
            <ul class="mb-0">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <div class="card bg-black text-white border border-secondary p-4" style="border-radius: 12px;">
        <form action="{{ route('portofolio.store') }}" method="POST" enctype="multipart/form-data">
            @csrf 
            
            <div class="mb-3">
                <label class="form-label fw-bold">Judul Project <span class="text-danger">*</span></label>
                <input type="text" name="judul" class="form-control bg-dark text-white border-secondary" placeholder="Contoh: Aplikasi Order Bouquete" value="{{ old('judul') }}">
            </div>
            
            <div class="mb-3">
                <label class="form-label fw-bold">Deskripsi Project <span class="text-danger">*</span></label>
                <textarea name="deskripsi" rows="4" class="form-control bg-dark text-white border-secondary" placeholder="Deskripsikan project-mu disini...">{{ old('deskripsi') }}</textarea>
            </div>
            
            <div class="mb-3">
                <label for="gambar" class="form-label fw-bold">Upload Gambar Project</label>
                <input type="file" class="form-control bg-dark text-white border-secondary" id="gambar" name="gambar" accept="image/*">
                <div class="form-text text-muted">Format: JPG, JPEG, PNG (Maksimal 2MB)</div>
            </div>

            <div class="mb-4">
                <label class="form-label fw-bold">Link Project (Opsional)</label>
                <input type="url" name="link_project" class="form-control bg-dark text-white border-secondary" placeholder="Link figma atau live website..." value="{{ old('link_project') }}">
            </div> 

            <div class="d-flex gap-2">
                <button type="submit" class="btn text-white fw-bold px-4" style="background-color: #bc13fe;">Simpan Project</button>
                <a href="/portofolio" class="btn btn-outline-secondary px-4">Batal</a>
            </div>
        </form>
    </div>
</div>
@endsection