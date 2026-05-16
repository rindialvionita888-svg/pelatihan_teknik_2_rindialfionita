<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Me - RindiAlv</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link href="https://fonts.googleapis.com/css2?family=Space+Grotesk:wght@300;500;700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body { background-color: var(--bg-main); color: var(--text); }
        .about-image-container {
            position: relative;
            display: inline-block;
        }
        .about-image-container::before {
            content: '';
            position: absolute;
            top: 20px;
            left: 20px;
            width: 100%;
            height: 100%;
            border: 2px solid var(--accent);
            border-radius: 15px;
            z-index: -1;
        }
        .skill-badge {
            background: rgba(187, 134, 252, 0.1);
            color: var(--accent);
            border: 1px solid var(--accent);
            padding: 8px 20px;
            border-radius: 30px;
            display: inline-block;
            margin: 5px;
            font-size: 0.9rem;
            font-weight: 500;
        }
        .experience-card {
            border-left: 2px solid #333;
            padding-left: 25px;
            position: relative;
            margin-bottom: 30px;
        }
        .experience-card::before {
            content: '';
            position: absolute;
            left: -6px;
            top: 0;
            width: 10px;
            height: 10px;
            background: var(--accent);
            border-radius: 50%;
        }
    </style>
</head>
<body>

    <nav class="side-nav">
        <div class="nav-logo"><h2 style="color: var(--accent);">R.</h2></div>
        <div class="nav-links">
            <a href="{{ route('home') }}" class="nav-item-link">HOME</a>
            <a href="{{ route('detail') }}" class="nav-item-link">PROJECT</a>
            <a href="{{ route('about') }}" class="nav-item-link active">ABOUT</a>
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
            <div class="row align-items-center g-5">
                <div class="col-lg-4 text-center">
                    <div class="about-image-container">
                        <img src="{{ asset('img/foto_rindi.jpeg') }}" alt="RindiAlv" 
                             style="width: 100%; max-width: 300px; border-radius: 15px; filter: grayscale(20%);">
                    </div>
                </div>

                <div class="col-lg-8">
                    <h1 style="font-size: 3.5rem; font-weight: 700;">ABOUT <span style="color: var(--accent);">ME.</span></h1>
                    <p class="mt-4" style="font-size: 1.2rem; color: #ccc; line-height: 1.8;">
                        Halo! Saya <strong>Rindi Alfionita</strong>. Saya adalah MahasiswaTeknik Informatika yang memiliki passion besar dalam menjembatani ide bisnis dengan solusi digital yang estetik dan fungsional.
                    </p>
                    <p style="color: #888; line-height: 1.8;">
                        Keahlian Saya: User Research, Information Architecture, Wireframing, High-Fidelity UI Design, Interactive Prototyping, Usability Testing.
                    </p>
                    <p style="color: #888; line-height: 1.8;">
                        Dengan pengalaman dalam menggunakan berbagai tools desain seperti Figma, serta kemampuan coding yang solid dengan Laravel dan PHP, saya siap untuk membawa proyek Anda ke level berikutnya.

                    <div class="mt-5">
                        <h4 style="color: white; margin-bottom: 20px; font-size: 1.1rem; letter-spacing: 2px; text-transform: uppercase;">Tech Stack & Tools</h4>
                        <div class="skills-container">
                            <span class="skill-badge">Laravel 11</span>
                            <span class="skill-badge">PHP</span>
                            <span class="skill-badge">Figma (UI/UX)</span>
                            <span class="skill-badge">Bootstrap 5</span>
                            <span class="skill-badge">CSS3 / HTML5</span>
                            <span class="skill-badge">Git & GitHub</span>
                            <span class="skill-badge">MySQL</span>
                        </div>
                    </div>
                </div>
            </div>

            <hr style="border-color: #333; margin: 60px 0;">

            <div class="row">
                <div class="col-md-6">
                    <h4 style="color: var(--accent); margin-bottom: 30px;">EDUCATION</h4>
                    <div class="experience-card">
                        <h5 style="color: white;">Teknik Informatika UMNU Kebumen</h5>
                        <p style="color: #666; margin-bottom: 5px;">Mahasiswa</p>
                        <small style="color: #888;">Fokus pada pengembangan aplikasi berbasis web dan manajemen database serta tampilan UI/UX.</small>
                    </div>
                </div>
                <div class="col-md-6">
                    <h4 style="color: var(--accent); margin-bottom: 30px;">PHILOSOPHY</h4>
                    <p style="color: #ccc; font-style: italic; line-height: 1.8;">
                        "Design is not just what it looks like and feels like. Design is how it works."
                        <br><span style="color: #555;">— Steve Jobs</span>
                    </p>
                </div>
            </div>
        </div>
    </main>

</body>
</html>