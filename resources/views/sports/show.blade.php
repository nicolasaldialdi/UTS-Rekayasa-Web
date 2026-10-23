@extends('layouts.app')

@section('title', $sport->name)

@section('content')
<div class="container py-4">
    <!-- Tombol Kembali dengan Animasi Fade In -->
    <div class="mb-4 animate-fade-in">
        <a href="{{ route('sports.index') }}" class="btn btn-outline-warning btn-sm rounded-pill px-3 shadow-sm btn-social">
            <i class="bi bi-arrow-left me-1"></i>Kembali ke Katalog
        </a>
    </div>

    <!-- Card Utama Detail (Background Gelap & Animasi Slide Up) -->
    <div class="card card-custom bg-dark text-light border-orange shadow-lg rounded-4 overflow-hidden animate-fade-in animate-delay-1">
        <div class="row g-0">
            <!-- Kolom Gambar dengan Zoom saat Hover -->
            <div class="col-md-6 bg-black d-flex align-items-center justify-content-center p-3 overflow-hidden">
                <img src="{{ asset('image/' . $sport->image) }}" class="img-fluid rounded-3 w-100 shadow-sm" alt="{{ $sport->name }}" style="max-height: 420px; object-fit: cover; transition: transform 0.5s ease;" onerror="this.src='https://via.placeholder.com/600x400/1e1e1e/ff6600?text=Sport+Image'">
            </div>
            
            <!-- Kolom Informasi -->
            <div class="col-md-6 p-4 p-lg-5 d-flex flex-column justify-content-between">
                <div>
                    <!-- Badge Kategori & Asal Negara -->
                    <div class="d-flex flex-wrap gap-2 mb-3">
                        <span class="badge bg-orange px-3 py-2 fs-6 shadow-sm">{{ $sport->category }}</span>
                        <span class="badge bg-secondary px-3 py-2 fs-6 shadow-sm"><i class="bi bi-globe me-1"></i>{{ $sport->origin_country }}</span>
                    </div>

                    <!-- Nama Olahraga -->
                    <h1 class="fw-bold text-white mb-3">{{ $sport->name }}</h1>

                    <!-- Deskripsi -->
                    <p class="text-secondary mb-4" style="line-height: 1.8;">{{ $sport->description }}</p>

                    <!-- Peralatan & Aturan -->
                    <div class="row g-3 mb-4">
                        <div class="col-12">
                            <div class="p-3 bg-black rounded-3 border border-secondary shadow-sm">
                                <h6 class="text-orange fw-bold mb-1"><i class="bi bi-tools me-2"></i>Peralatan Utama:</h6>
                                <p class="text-light mb-0 small">{{ $sport->equipment }}</p>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="p-3 bg-black rounded-3 border border-secondary shadow-sm">
                                <h6 class="text-orange fw-bold mb-1"><i class="bi bi-journal-text me-2"></i>Aturan Singkat:</h6>
                                <p class="text-light mb-0 small">{{ $sport->rules }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection