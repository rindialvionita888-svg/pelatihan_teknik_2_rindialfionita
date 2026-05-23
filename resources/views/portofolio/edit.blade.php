@extends('master')

@section('content')
<div class="container py-5 text-white" style="background-color: #121212; min-height: 80vh;">
    <div class="mb-4">
        <h2 class="fw-bold" style="color: #bc13fe;">Edit Project</h2>
        <p class="text-muted small">Perbarui informasi project portofolio kamu.</p>
    </div>

    <div class="card bg-black text-white border border-secondary p-4" style="border-radius: 12px;">
        <form action="/portofolio/{{ $portofolio->id }}" method="POST">
            @csrf
            @method('PUT') <div class="mb-3">
                <label class="form-label fw-bold">Judul Project</label>
                <input type="text" name="judul" class="form-control bg-dark text-white border-secondary" value="{{ $portofolio->judul }}">
            </div>

            <div class="mb-3">
                <label class="form-label fw-bold">Deskripsi Project</label>
                <textarea name="deskripsi" rows="4" class="form-control bg-dark text-white border-secondary">{{ $portofolio->deskripsi }}</textarea>
            </div>

            <div class="mb-4">
                <label class="form-label fw-bold">Link Project (Opsional)</label>
                <input type="url" name="link_project" class="form-control bg-dark text-white border-secondary" value="{{ $portofolio->link_project }}">
            </div>

            <div class="d-flex gap-2">
                <button type="submit" class="btn text-white fw-bold px-4" style="background-color: #bc13fe;">Update Project</button>
                <a href="/portofolio" class="btn btn-outline-secondary px-4">Batal</a>
            </div>
        </form>
    </div>
</div>
@endsection