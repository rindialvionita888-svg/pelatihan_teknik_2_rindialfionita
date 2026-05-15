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
            <a href="#" class="nav-item-link">ABOUT</a>
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
                
                <div class="col-md-4">
                    <div class="detail-card h-100">
                        <div class="portfolio-mockup">
                            <img src="{{ asset('img/porto1.png') }}" alt="UI UX Design" class="portfolio-image">
                        </div>
                        <h5 class="project-title">LoveVoy Bouquete</h5>
                        <p class="project-desc">
                          Tampilan High-Fidely beserta prototype yang sudah di sambungkan tiapp halaman. Bertema warna pink dan putih agar user merasa nyaman dan ceria ketika menggunakan aplikasi ini. Memiliki fitur yang lengkap yaitu Login page, Homepage, Produk, Our Place, Custom Order, Contact, About Us, dan Our place (alamat).Menggunakan Figma sebagai tools untuk mendesain dan membuat prototype.
                        </p>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="detail-card h-100">
                        <div class="portfolio-mockup">
                            <img src="{{ asset('img/porto2.png') }}" alt="Web Dev" class="portfolio-image">
                        </div>
                        <h5 class="project-title">DONUT BE-SHY</h5>
                        <p class="project-desc">
                            Tampilan High-Fidelty beserta prototype yang sudah disambungkan di setiap halaman. Hanya menampikan bagian Login page dan homepage saja, dimana ditampilkan berbagai menu donat, dan akan berubah warna sesuai varian rasa donat nya. 
                        </p>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="detail-card h-100">
                        <div class="portfolio-mockup">
                            <img src="{{ asset('img/porto3.png') }}" alt="Final Product" class="portfolio-image">
                        </div>
                        <h5 class="project-title">TaniJiwo App</h5>
                        <p class="project-desc">
                            Tampilan High-Fidelity beserta prototype yang sudah disambungkan di setiap halaman.Bertema warna hijau dan putih karena konsep aplikasi yang dibuat untuk memangtau perkembangan  tanaman.Berisi Fitur Trend atau berita pertanian, Tips, serta reminder "siram dan pupuk", analisis cuaca, Buku Tani, Deteksi hama menggunakan pencarian Kamera, Info harga pasaran. Terdapat Login page, Home page, Profile, Video tutorial, Dirrect Message sesama User, diperuntukkan agar dapat sharing experience masing-masing user. Menggunakan Figma sebagai tools untuk mendesain dan membuat prototype.
                        </p>
                    </div>
                </div>

            </div>
        </div>
    </main>

</body>
</html>