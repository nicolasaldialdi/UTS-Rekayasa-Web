<header>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark border-bottom border-secondary py-3 shadow-sm">
        <div class="container">
            <!-- Logo & Title -->
            <a class="navbar-brand fw-bold text-orange d-flex align-items-center gap-2" href="{{ route('sports.home') }}">
                <i class="bi bi-trophy-fill fs-4"></i>
                <span>SPORT & ACTIVITY</span>
            </a>
            
            <!-- Tombol Hamburger (Mobile) -->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <!-- Menu Navigasi Navbar -->
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto gap-2">
                    <li class="nav-item">
                        <a class="nav-link {{ request()->routeIs('sports.home') ? 'active fw-bold' : '' }}" href="{{ route('sports.home') }}">
                            <i class="bi bi-house-door me-1"></i>Beranda
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ request()->routeIs('sports.index') || request()->routeIs('sports.show') ? 'active fw-bold' : '' }}" href="{{ route('sports.index') }}">
                            <i class="bi bi-grid-fill me-1"></i>Katalog Olahraga & Kegiatan
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ request()->routeIs('sports.about') ? 'active fw-bold' : '' }}" href="{{ route('sports.about') }}">
                            <i class="bi bi-person-badge me-1"></i>Tentang Pembuat
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>