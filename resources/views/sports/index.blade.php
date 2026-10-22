@extends('layouts.app')

@section('title', 'Katalog Olahraga & Kegiatan')

@section('content')
<div class="container">
    <div class="text-center mb-5">
        <h2 class="fw-bold text-white"><i class="bi bi-grid-3x3-gap-fill text-orange me-2"></i>Katalog Olahraga & Kegiatan</h2>
        <p class="text-secondary">Daftar lengkap cabang olahraga dan aktivitas fisik interaktif</p>
    </div>

    <div class="row g-4">
        @forelse($sports as $sport)
        <div class="col-md-6 col-lg-4">
            <div class="card card-custom bg-dark text-light h-100 border-secondary">
                <img src="{{ asset('image/' . $sport->image) }}" class="card-img-top" alt="{{ $sport->name }}" style="height: 200px; object-fit: cover;" onerror="this.src='https://via.placeholder.com/400x200/1e1e1e/ff6600?text=Sport+Image'">
                <div class="card-body d-flex flex-column">
                    <div class="d-flex justify-content-between align-items-center mb-2">
                        <span class="badge bg-orange">{{ $sport->category }}</span>
                        <small class="text-secondary"><i class="bi bi-globe me-1"></i>{{ $sport->origin_country }}</small>
                    </div>
                    <h5 class="card-title text-white fw-bold mb-2">{{ $sport->name }}</h5>
                    <p class="card-text text-secondary small flex-grow-1 mb-3">{{ Str::limit($sport->description, 100) }}</p>
                    
                    <div class="pt-2 border-top border-secondary">
                        <small class="text-secondary d-block mb-2"><i class="bi bi-tools text-orange me-1"></i> <strong>Alat:</strong> {{ Str::limit($sport->equipment, 35) }}</small>
                        <a href="{{ route('sports.show', $sport->id) }}" class="btn fw-bold w-100 rounded-3 shadow py-2 text-white" style="background-color: #ff6600; border: none;">
                            <i class="bi bi-info-circle me-1"></i>Lihat Detail
                        </a>
                    </div>
                </div>
            </div>
        </div>
        @empty
        <div class="col-12 text-center py-5">
            <div class="p-5 bg-dark border border-secondary rounded-4">
                <i class="bi bi-inbox text-orange display-1 d-block mb-3"></i>
                <h4 class="text-white fw-bold">Belum Ada Data Olahraga</h4>
                <p class="text-secondary">Silakan jalankan database seeder terlebih dahulu.</p>
            </div>
        </div>
        @endforelse
    </div>
</div>

</div> <!-- Tutup row g-4 -->

    <!-- Tombol Pagination Bootstrap 5 -->
    <div class="d-flex justify-content-center mt-5">
        {{ $sports->links('pagination::bootstrap-5') }}
    </div>
</div>
@endsection