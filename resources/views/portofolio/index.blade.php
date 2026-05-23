@extends('master')

@section('content')
<div class="container py-5 text-white" style="background-color: #121212; min-height: 80vh;">
    <div class="d-flex justify-content-between align-items-center mb-5 border-bottom border-secondary pb-3">
        <div>
            <h2 class="fw-bold" style="color: #bc13fe;">Daftar Project</h2>
            <p class="text-muted small">Kumpulan karya dan sistem yang telah dikembangkan.</p>
        </div>
        <a href="/portofolio/create" class="btn text-white fw-bold px-4" style="background-color: #bc13fe; border-radius: 8px;">
            + Tambah Data
        </a>
    </div>

    @if(session('sukses'))
        <div class="alert alert-success bg-dark text-success border-success mb-4">
            {{ session('sukses') }}
        </div>
    @endif

    <div class="row">
        @forelse($data_portofolio as $item)
            <div class="col-md-6 mb-4">
                <div class="card h-100 bg-black text-white border border-secondary" style="border-radius: 12px;">
                    <div class="card-body p-4">
                        <h4 class="card-title fw-bold" style="color: #bc13fe;">{{ $item->judul }}</h4>
                        <p class="card-text text-muted" style="font-size: 0.95rem; line-height: 1.6;">
                            {{ $item->deskripsi }}
                        </p>
                        
                        @if($item->link_project)
                            <a href="{{ $item->link_project }}" target="_blank" class="text-decoration-none small" style="color: #bc13fe;">
                                Lihat Source Code →
                            </a>
                        @endif
                    </div>
                    
                    <div class="card-footer bg-transparent border-top border-secondary d-flex gap-2 p-3">
                        <a href="/portofolio/{{ $item->id }}/edit" class="btn btn-sm btn-outline-warning px-3">Edit</a>
                        
                        <form action="{{ route('portofolio.destroy', $item->id) }}" method="POST" onsubmit="return confirm('Apakah kamu yakin ingin menghapus project ini?')">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-sm btn-outline-danger px-3">Hapus</button>
                        </form>
                    </div>
                    </div>
            </div>
        @empty
            <div class="col-12 text-center py-5 border border-dashed border-secondary my-4" style="border-radius: 12px; border-style: dashed !important;">
                <p class="text-muted fs-5 mb-0">Belum ada project yang ditambahkan di database.</p>
            </div>
        @endforelse
    </div>
</div>
@endsection