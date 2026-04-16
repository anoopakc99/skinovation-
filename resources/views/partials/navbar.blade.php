@php
    $uri = request()->getRequestUri();
@endphp

<nav id="navbar">
    <a class="nav-logo" href="/">Skinnovation</a>
    <ul class="nav-links" id="navLinks">
        <li><a data-page="home" href="/" class="{{ $uri === '/' ? 'active' : '' }}" onclick="if(typeof toggleMenu==='function'){toggleMenu()}">Home</a></li>
        <li><a data-page="salon" href="/?page=salon" class="{{ str_contains($uri, '?page=salon') ? 'active' : '' }}" onclick="if(typeof toggleMenu==='function'){toggleMenu()}">Salon</a></li>
        <li><a data-page="clinic" href="/clinic" class="{{ $uri === '/clinic' ? 'active' : '' }}" onclick="if(typeof toggleMenu==='function'){toggleMenu()}">Clinic</a></li>
        <li><a data-page="medifacials" href="/medifacials" class="{{ $uri === '/medifacials' ? 'active' : '' }}" onclick="if(typeof toggleMenu==='function'){toggleMenu()}">Medifacials</a></li>
        <li><a data-page="lhr" href="/lhr" class="{{ $uri === '/lhr' ? 'active' : '' }}" onclick="if(typeof toggleMenu==='function'){toggleMenu()}">LHR</a></li>
    </ul>
    <div class="nav-right">
        <div class="menu-toggle" id="menuToggle" onclick="if(typeof toggleMenu==='function'){toggleMenu()}">
            <span></span>
            <span></span>
            <span></span>
        </div>
    </div>
</nav>