<nav class="side-nav d-flex flex-column justify-content-between py-4 px-3 bg-black border-end border-secondary" style="width: 100px; min-height: 100vh; position: sticky; top: 0;">
    <div class="nav-logo text-center mb-5">
        <h2 class="fw-bold m-0 text-white">R<span class="text-accent">A</span></h2>
    </div>
    
   <div class="nav-links d-flex flex-column align-items-center gap-4 my-auto">
        <a href="{{ route('home') }}" class="text-decoration-none text-uppercase small fw-bold text-muted rotate-text" style="writing-mode: vertical-lr; transform: rotate(180deg);">Intro</a>
        
        <a href="{{ route('portofolio.index') }}" class="text-decoration-none text-uppercase small fw-bold text-white rotate-text" style="writing-mode: vertical-lr; transform: rotate(180deg); color: #bc13fe !important;">Works</a>
        
        <a href="/#services" class="text-decoration-none text-uppercase small fw-bold text-muted rotate-text" style="writing-mode: vertical-lr; transform: rotate(180deg);">Services</a>
        
        <a href="{{ route('detail') }}" class="text-decoration-none text-uppercase small fw-bold text-muted rotate-text" style="writing-mode: vertical-lr; transform: rotate(180deg);">Archive</a>
        
        <a href="{{ route('portofolio.index') }}" class="text-decoration-none text-uppercase small fw-bold text-muted rotate-text" style="writing-mode: vertical-lr; transform: rotate(180deg);">PROJECT</a>
    </div>
    
    <div class="nav-footer text-center mt-5">
        <a href="{{ route('portofolio.create') }}" class="btn border-0 p-0 text-decoration-none" title="Tambah Project Baru">
            <span style="font-size: 1.5rem;">⚙️</span>
        </a>
    </div>
</nav>