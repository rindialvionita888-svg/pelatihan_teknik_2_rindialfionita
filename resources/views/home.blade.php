<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portofolio Rindi</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link href="https://fonts.googleapis.com/css2?family=Space+Grotesk:wght@300;500;700&display=swap" rel="stylesheet">
</head>
<body>

    <nav class="side-nav">
        <div class="nav-logo">
            <h2 style="color: var(--accent);">R.</h2>
        </div>

        <div class="nav-links">
            <a href="#" class="nav-item-link active">HOME</a>
            <a href="#" class="nav-item-link">PROJECTS</a>
            <a href="#" class="nav-item-link">ABOUT</a>
            <a href="#" class="nav-item-link">CONTACT</a>
        </div>

        <button class="btn-admin">
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#bb86fc" stroke-width="2">
                <rect x="3" y="3" width="18" height="18" rx="2" ry="2"></rect>
                <line x1="9" y1="3" x2="9" y2="21"></line>
            </svg>
        </button>
    </nav>

    <main class="main-wrapper">
        <section class="hero">
            <h1 style="font-size: 4rem; margin-bottom: 10px;">HELLO <span style="color: var(--accent);">THERE.</span></h1>
            <p style="font-size: 1.5rem; color: #888;">I am Rindi Alfionita. Welcome to my technical project.</p>
            
            <div style="margin-top: 50px; border-left: 2px solid var(--accent); padding-left: 20px;">
                <p>Projek ini adalah hasil pelatihan teknik 2.</p>
                <small style="color: #666;">Built with Laravel & Passion</small>
            </div>
        </section>
    </main>

</body>
</html>