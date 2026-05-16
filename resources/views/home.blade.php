<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portofolio - RindiAlv</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link href="https://fonts.googleapis.com/css2?family=Space+Grotesk:wght@300;500;700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body { background-color: var(--bg-main); color: var(--text); }
        .img-thumbnail { background-color: #1a1a1a; border: 1px solid var(--accent); }
    </style>
</head>
<body>

    <nav class="side-nav">
        <div class="nav-logo">
            <h2 style="color: var(--accent);">R.</h2>
        </div>
        <div class="nav-links">
            <a href="{{ route('home') }}" class="nav-item-link active">HOME</a>
            <a href="{{ route('detail') }}" class="nav-item-link">PROJECT</a>
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
        <div class="container py-5">
            <h1 class="p-3 mb-1" style="background-color: #111; color: white; border-left: 5px solid var(--accent);">
                Saya <span style="color: var(--accent);">RindiAlv</span>
            </h1>
            <h2 class="p-2 mb-4" style="background-color: #222; color: #888; font-size: 1.5rem;">
                Web/Mobile Developer & UI/UX Designer
            </h2>

            <div class="mb-5">
                <img src="{{ asset('img/foto_rindi.jpeg') }}" alt="Foto RindiAlv" 
                     class="img-thumbnail shadow" style="max-width: 220px; border-radius: 15px;">
            </div>

            <div class="p-4 shadow-sm" style="background-color: #1a1a1a; color: #ccc; line-height: 1.8; border-left: 5px solid var(--accent); border-radius: 0 15px 15px 0;">
                <p class="mb-0" style="font-size: 1.2rem;">
                    Saya adalah Mahasiswa <strong>Teknik Informatika</strong>. 
                    Berpengalaman dalam mengolah visual sebagai <span style="color: var(--accent);">Web Designer</span> 
                    dan membangun sistem sebagai <span style="color: var(--accent);">Developer</span>. 
                    Fokus saya adalah menciptakan pengalaman digital yang interaktif dan fungsional, serta aesthetic.
                </p>
            </div>
            
            <div class="mt-5">
                <a href="{{ route('detail') }}" class="btn btn-outline-light px-4 py-2" style="border-color: var(--accent); color: var(--accent); border-radius: 30px;">
                    View My Projects →
                </a>
            </div>
        </div>
    </main>

</body>
</html>