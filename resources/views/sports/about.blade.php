@extends('layouts.app')

@section('title', 'Tentang Pembuat')

@section('content')
<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-md-8 col-lg-6">
            <!-- Card Profil Pembuat dengan Animasi Fade In & Hover Glow -->
            <div class="card card-custom bg-dark text-light border-orange shadow-lg rounded-4 p-4 text-center animate-fade-in">
                <div class="card-body">
                    <!-- Avatar dengan Efek Hover Scale -->
                    <div class="mb-3 position-relative d-inline-block">
                        <div class="rounded-circle bg-black border border-orange border-3 d-flex align-items-center justify-content-center mx-auto shadow" style="width: 110px; height: 110px; transition: transform 0.3s ease;">
                            <i class="bi bi-person-fill text-orange display-3"></i>
                        </div>
                    </div>

                    <!-- Nama Lengkap & Status -->
                    <h2 class="fw-bold text-white mb-1">Nicolas Aldi Pratama</h2>
                    <p class="text-orange fw-semibold mb-3">Mahasiswa Universitas Pamulang</p>
                    <span class="badge bg-orange px-3 py-2 rounded-pill mb-4 shadow-sm">
                        <i class="bi bi-mortarboard-fill me-1"></i> Pengembang Web
                    </span>

                    <!-- Informasi Akademik / Project -->
                    <div class="p-3 bg-black rounded-3 border border-secondary text-start mb-4">
                        <div class="row mb-2">
                            <div class="col-5 text-secondary fw-semibold">Mata Kuliah:</div>
                            <div class="col-7 text-white fw-bold">Rekayasa Web (UTS)</div>
                        </div>
                        <div class="row mb-2">
                            <div class="col-5 text-secondary fw-semibold">Program Studi:</div>
                            <div class="col-7 text-white fw-bold">Sistem Informasi</div>
                        </div>
                        <div class="row">
                            <div class="col-5 text-secondary fw-semibold">Tema Project:</div>
                            <div class="col-7 text-orange fw-bold">Katalog Olahraga & Kegiatan</div>
                        </div>
                    </div>

                    <!-- Sosial Media / Kontak dengan Tombol Glow -->
                    <h6 class="text-secondary fw-bold mb-3">Hubungi Saya / Sosial Media</h6>
                    <div class="d-flex justify-content-center gap-3">
                        <a href="https://github.com" target="_blank" class="btn btn-outline-warning rounded-circle d-flex align-items-center justify-content-center btn-social" style="width: 45px; height: 45px; transition: all 0.3s ease;">
                            <i class="bi bi-github fs-5"></i>
                        </a>
                        <a href="https://linkedin.com" target="_blank" class="btn btn-outline-warning rounded-circle d-flex align-items-center justify-content-center btn-social" style="width: 45px; height: 45px; transition: all 0.3s ease;">
                            <i class="bi bi-linkedin fs-5"></i>
                        </a>
                        <a href="https://instagram.com" target="_blank" class="btn btn-outline-warning rounded-circle d-flex align-items-center justify-content-center btn-social" style="width: 45px; height: 45px; transition: all 0.3s ease;">
                            <i class="bi bi-instagram fs-5"></i>
                        </a>
                        <a href="mailto:nicolasaldi@example.com" class="btn btn-outline-warning rounded-circle d-flex align-items-center justify-content-center btn-social" style="width: 45px; height: 45px; transition: all 0.3s ease;">
                            <i class="bi bi-envelope-fill fs-5"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection