<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact & Inquiry - RindiAlv</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link href="https://fonts.googleapis.com/css2?family=Space+Grotesk:wght@300;500;700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body { background-color: var(--bg-main); color: var(--text); }
        .contact-card { 
            background: #151515; 
            border: 1px solid rgba(187, 134, 252, 0.1); 
            border-radius: 20px; 
            padding: 30px;
            height: 100%;
        }
        .info-item { margin-bottom: 25px; }
        .info-label { color: var(--accent); font-weight: 700; text-transform: uppercase; font-size: 0.8rem; letter-spacing: 2px; }
        .info-text { font-size: 1.1rem; color: #eee; margin-top: 5px; }
        .format-box { 
            background: #000; 
            padding: 20px; 
            border-radius: 10px; 
            border: 1px dashed var(--accent);
            font-family: 'Courier New', Courier, monospace;
            color: #bbb;
            font-size: 0.9rem;
        }
    </style>
</head>
<body>

    <nav class="side-nav">
        <div class="nav-logo"><h2 style="color: var(--accent);">R.</h2></div>
        <div class="nav-links">
            <a href="{{ route('home') }}" class="nav-item-link">HOME</a>
            <a href="{{ route('detail') }}" class="nav-item-link">PROJECT</a>
            <a href="#" class="nav-item-link active">CONTACT</a>
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
            <div class="mb-5">
                <h1 style="font-size: 3.5rem; font-weight: 700;">GET IN <span style="color: var(--accent);">TOUCH.</span></h1>
                <p style="color: #666; letter-spacing: 3px;">READY TO BRING YOUR IDEAS TO LIFE</p>
            </div>

            <div class="row g-4">
                <div class="col-md-5">
                    <div class="contact-card">
                        <h4 class="mb-4" style="color: white;">Contact Info</h4>
                        
                        <div class="info-item">
                            <div class="info-label">Email Me</div>
                            <div class="info-text">rindialvionita888@email.com</div> </div>

                        <div class="info-item">
                            <div class="info-label">WhatsApp</div>
                            <div class="info-text">+62 -12 345- 78-0</div> </div>

                        <div class="info-item">
                            <div class="info-label">Location</div>
                            <div class="info-text">Indonesia (Available for Remote Work)</div>
                        </div>
                    </div>
                </div>

                <div class="col-md-7">
                    <div class="contact-card">
                        <h4 class="mb-4" style="color: white;">Order Format</h4>
                        <p style="color: #888;">Silakan kirimkan email atau pesan dengan format berikut untuk mempercepat proses penawaran:</p>
                        
                        <div class="format-box mt-3">
                         
                        </div>

                        <div class="mt-4">
                            <a href="mailto:rindialvionita888@email.com" class="btn btn-outline-light w-100 py-3" style="border-color: var(--accent); color: var(--accent); border-radius: 10px;">
                                Send Email Now
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

</body>
</html>