<nav class="side-nav">
    <div class="nav-logo">
        <h2 class="fw-bold">R<span class="text-accent">A</span></h2>
    </div>
    <div class="nav-links">
       <a href="{{ route('home') }}" class="nav-item-link">Intro</a>
        <a href="#projects" class="nav-item-link">Works</a>
        <a href="#services" class="nav-item-link">Services</a>
       <a href="{{ route('detail') }}" class="nav-item-link">Archive</a>
    </div>
    <div class="nav-footer">
        <button class="btn-admin" data-bs-toggle="modal" data-bs-target="#crudModal">
            <span style="font-size: 1.5rem;">⚙️</span>
        </button>
    </div>
</nav>