@extends('layouts.app')

@section('title', 'Katalog Olahraga & Kegiatan')

@section('content')
<div class="container py-4">
    <!-- Header Halaman dengan Animasi Fade In -->
    <div class="text-center mb-5 animate-fade-in">
        <h2 class="fw-bold text-white mb-2">
            <i class="bi bi-grid-3x3-gap-fill text-orange me-2"></i>Katalog Olahraga & Kegiatan
        </h2>
        <p class="text-secondary small">Daftar lengkap cabang olahraga dan aktivitas fisik interaktif</p>
    </div>

    <!-- Grid Cards dengan Animasi -->
    <div class="row g-4 animate-fade-in animate-delay-1 mb-5">
        @foreach($sports as $sport)
        <div class="col-md-6 col-lg-4">
            <div class="card card-custom bg-dark text-light h-100 border-secondary shadow rounded-4 overflow-hidden">
                <!-- Foto dengan Efek Smooth Zoom saat Hover -->
                <div class="overflow-hidden">
                    <img src="{{ asset('image/' . $sport->image) }}" class="card-img-top" alt="{{ $sport->name }}" style="height: 220px; object-fit: cover;" onerror="this.src='https://via.placeholder.com/400x200/1e1e1e/ff6600?text=Sport+Image'">
                </div>

                <div class="card-body d-flex flex-column p-4">
                    <!-- Badge Kategori & Asal -->
                    <div class="d-flex justify-content-between align-items-center mb-2">
                        <span class="badge bg-orange px-2 py-1">{{ $sport->category }}</span>
                        <small class="text-secondary"><i class="bi bi-globe me-1"></i>{{ $sport->origin_country }}</small>
                    </div>

                    <!-- Judul & Deskripsi -->
                    <h5 class="card-title text-white fw-bold mb-2">{{ $sport->name }}</h5>
                    <p class="card-text text-secondary small flex-grow-1 mb-3" style="line-height: 1.6;">
                        {{ Str::limit($sport->description, 90) }}
                    </p>

                    <!-- Informasi Peralatan Singkat -->
                    <div class="p-2 bg-black rounded-3 border border-secondary mb-3">
                        <small class="text-secondary d-block"><i class="bi bi-tools text-orange me-1"></i><strong>Alat:</strong> {{ Str::limit($sport->equipment, 35) }}</small>
                    </div>

                    <!-- Tombol Detail -->
                    <div class="pt-2 border-top border-secondary">
                        <a href="{{ route('sports.show', $sport->id) }}" class="btn btn-orange-glow fw-bold w-100 rounded-3 py-2">
                            <i class="bi bi-info-circle me-1"></i>Lihat Detail
                        </a>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>

    <!-- Pagination -->
    <div class="d-flex justify-content-center animate-fade-in animate-delay-2">
        {{ $sports->links() }}
    </div>
</div>
@endsection