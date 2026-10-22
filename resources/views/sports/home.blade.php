@extends('layouts.app')

@section('title', 'Beranda')

@section('content')
<!-- Banner Utama -->
<div class="container mb-5">
    <div class="p-5 rounded-4 bg-dark border border-orange shadow-lg text-white text-center position-relative overflow-hidden">
        <div class="py-4">
            <span class="badge bg-orange px-3 py-2 mb-3">UTS Rekayasa Web</span>
            <h1 class="display-5 fw-bold mb-3">Jelajahi Dunia <span class="text-orange">Olahraga & Kegiatan</span></h1>
            <p class="lead text-secondary mx-auto mb-4" style="max-width: 700px;">
                Temukan berbagai ragam cabang olahraga, aturan permainan, peralatan yang dibutuhkan, hingga asal-usul sejarahnya dalam satu tempat.
            </p>
            <a href="{{ route('sports.index') }}" class="btn fw-bold px-4 py-3 rounded-pill shadow text-white" style="background-color: #ff6600; border: none;">
                 <i class="bi bi-grid-3x3-gap-fill me-2"></i>Lihat Semua Katalog
            </a>
        </div>
    </div>
</div>

<!-- Sorotan Pilihan -->
<div class="container mb-5">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <div>
            <h3 class="fw-bold text-white mb-1"><i class="bi bi-star-fill text-orange me-2"></i>Sorotan Pilihan</h3>
            <p class="text-secondary small mb-0">Beberapa aktivitas olahraga populer dari database kami</p>
        </div>
        <a href="{{ route('sports.index') }}" class="text-orange text-decoration-none fw-semibold">
            Lihat Semua <i class="bi bi-arrow-right ms-1"></i>
        </a>
    </div>

    <div class="row g-4">
        @foreach($featuredSports as $sport)
        <div class="col-md-4">
            <div class="card card-custom bg-dark text-light h-100 border-secondary shadow">
                <img src="{{ asset('image/' . $sport->image) }}" class="card-img-top" alt="{{ $sport->name }}" style="height: 200px; object-fit: cover;" onerror="this.src='https://via.placeholder.com/400x200/1e1e1e/ff6600?text=Sport+Image'">
                <div class="card-body d-flex flex-column">
                    <div class="d-flex justify-content-between align-items-center mb-2">
                        <span class="badge bg-orange">{{ $sport->category }}</span>
                        <small class="text-secondary"><i class="bi bi-globe me-1"></i>{{ $sport->origin_country }}</small>
                    </div>
                    <h5 class="card-title text-white fw-bold mb-2">{{ $sport->name }}</h5>
                    <p class="card-text text-secondary small flex-grow-1 mb-3">{{ Str::limit($sport->description, 80) }}</p>
                    
                    <div class="pt-2 border-top border-secondary">
                        <a href="{{ route('sports.show', $sport->id) }}" class="btn fw-bold w-100 rounded-3 shadow-sm py-2 text-white" style="background-color: #ff6600; border: none;">
                            <i class="bi bi-info-circle me-1"></i>Detail Selengkapnya
                        </a>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection