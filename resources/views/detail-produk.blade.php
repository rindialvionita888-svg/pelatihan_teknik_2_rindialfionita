<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Project Showcase - RindiAlv</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link href="https://fonts.googleapis.com/css2?family=Space+Grotesk:wght@300;500;700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <style>
        body { 
            background-color: var(--bg-main); 
            color: var(--text); 
            overflow-x: hidden; 
        }

        .detail-card { 
            background: #151515; 
            border: 1px solid rgba(187, 134, 252, 0.1); 
            border-radius: 20px; 
            padding: 20px; 
            transition: transform 0.3s ease, border 0.3s ease;
        }

        .detail-card:hover {
            transform: translateY(-10px);
            border-color: var(--accent);
        }

        .portfolio-mockup {
            background: #000;
            border-radius: 12px;
            overflow: hidden;
            border: 1px solid rgba(255, 255, 255, 0.05);
        }

        .portfolio-image {
            width: 100%;
            height: 200px; /* Ukuran tinggi seragam */
            object-fit: cover; /* Biar gambar gak penyet */
            transition: opacity 0.3s ease;
        }

        .portfolio-image:hover {
            opacity: 0.8;
        }

        .project-title {
            color: var(--accent);
            font-weight: 700;
            margin-top: 15px;
            text-transform: uppercase;
            font-size: 1.1rem;
            letter-spacing: 1px;
        }

        .project-desc {
            color: #888;
            font-size: 0.9rem;
            line-height: 1.6;
        }
    </style>
</head>
<body>

    <nav class="side-nav">
        <div class="nav-logo">
            <h2 style="color: var(--accent);">R.</h2>
        </div>
        <div class="nav-links">
            <a href="{{ route('home') }}" class="nav-item-link">HOME</a>
            <a href="{{ route('detail') }}" class="nav-item-link active">PROJECT</a>
            <a href="{{ route('about') }}" class="nav-item-link">ABOUT</a>
            <a href="{{ route('contact') }}" class="nav-item-link">CONTACT</a>
        </div>
        <button class="btn-admin">
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#bb86fc" stroke-width="2">
                <rect x="3" y="3" width="18" height="18" rx="2" ry="2"></rect>
                <line x1="9" y1="3" x2="9" y2="21"></line>
            </svg>
        </button>
    </nav>

    <main class="main-wrapper">
        <div class="container py-4">
            <a href="{{ route('home') }}" class="text-decoration-none mb-4 d-inline-block" style="color: var(--accent);">
                ← Back to Overview
            </a>

            <div class="mb-5">
                <h1 style="font-size: 3.5rem; font-weight: 700;">PORTFOLIO <span style="color: var(--accent);">CASE.</span></h1>
                <p style="color: #666; letter-spacing: 3px; font-weight: 500;">UI/UX DESIGN & DESCRIPTION</p>
            </div>

            <div class="row g-4">
                
                @forelse($data_portofolio as $item)
                    <div class="col-md-4">
                        <div class="detail-card h-100">
                            
                            <div class="portfolio-mockup">
                                @if($item->gambar)
                                    <img src="{{ asset('img/' . $item->gambar) }}" alt="{{ $item->judul }}" class="portfolio-image">
                                @else
                                    <img src="{{ asset('img/porto1.png') }}" alt="{{ $item->judul }}" class="portfolio-image">
                                @endif
                            </div>
                            <h5 class="project-title">{{ $item->judul }}</h5>
                            <p class="project-desc">
                                {{ $item->deskripsi }}
                            </p>
                            
                            @if($item->link_project)
                                <a href="{{ $item->link_project }}" target="_blank" class="text-decoration-none small" style="color: var(--accent); font-size: 0.85rem;">
                                    View Live Project →
                                </a>
                            @endif
                        </div>
                    </div>
                @empty
                    <div class="col-12 text-center py-5 shadow-sm">
                        <p class="text-muted fs-5">Belum ada project portfolio yang dimasukkan.</p>
                    </div>
                @endforelse

            </div>
        </div>
    </main>

</body>
</html>