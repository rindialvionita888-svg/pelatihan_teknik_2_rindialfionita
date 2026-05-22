@extends('master')

@section('konten')
<div class="container mt-5">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h2>Daftar Portofolio Saya</h2>
        <a href="/portofolio/create" class="btn btn-primary">Tambah Data</a>
    </div>

    @if(session('sukses'))
        <div class="alert alert-success">
            {{ session('sukses') }}
        </div>
    @endif

    <div class="row">
        @forelse($data_portofolio as $item)
            <div class="col-md-4 mb-4">
                <div class="card h-100 shadow-sm">
                    <div class="card-body">
                        <h4 class="card-title fw-bold">{{ $item->judul }}</h4>
                        <p class="card-text text-muted">{{ $item->deskripsi }}</p>
                        
                        @if($item->link_project)
                            <a href="{{ $item->link_project }}" target="_blank" class="btn btn-sm btn-outline-secondary mb-2 d-block">Lihat Project</a>
                        @endif
                    </div>
                    <div class="card-footer bg-transparent border-top-0 d-flex gap-2">
                        <a href="/portofolio/{{ $item->id }}/edit" class="btn btn-sm btn-warning">Edit</a>
                        <button class="btn btn-sm btn-danger">Hapus</button>
                    </div>
                </div>
            </div>
        @empty
            <div class="col-12 text-center py-5">
                <p class="text-muted fs-5">Belum ada portofolio yang ditambahkan.</p>
            </div>
        @endforelse
    </div>
</div>
@endsection