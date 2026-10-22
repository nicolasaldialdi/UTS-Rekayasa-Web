@extends('layouts.app')

@section('title', 'Tentang Pembuat')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8 col-lg-6">
            <!-- Tambahkan background gelap langsung di style inline / class card -->
            <div class="card card-custom text-center p-4 shadow-lg border-orange bg-dark text-light">
                <div class="card-body">
                    <div class="mb-3">
                        <div class="d-inline-flex align-items-center justify-content-center bg-orange text-white rounded-circle shadow" style="width: 100px; height: 100px; font-size: 2.5rem;">
                            <i class="bi bi-person-fill"></i>
                        </div>
                    </div>
                    
                    <h3 class="fw-bold text-white mb-1">Nicolas Aldi Pratama</h3>
                    <p class="text-orange fw-semibold mb-3">Mahasiswa Universitas Pamulang</p>
                    
                    <div class="p-3 bg-black rounded-3 border border-secondary mb-4 text-start">
                        <div class="row g-2 text-secondary small">
                            <div class="col-4 fw-bold text-white">Mata Kuliah:</div>
                            <div class="col-8 text-light">Rekayasa Web (UTS)</div>
                            <div class="col-4 fw-bold text-white">Program Studi:</div>
                            <div class="col-8 text-light">Sistem Informasi</div>
                            <div class="col-4 fw-bold text-white">Tema Project:</div>
                            <div class="col-8 text-orange fw-semibold">Katalog Olahraga & Kegiatan</div>
                        </div>
                    </div>

                    <h6 class="fw-bold text-white mb-3">Hubungi Saya / Sosial Media</h6>
                    <div class="d-flex justify-content-center gap-3">
                        <a href="#" class="btn btn-outline-warning rounded-circle px-3 py-2"><i class="bi bi-github"></i></a>
                        <a href="#" class="btn btn-outline-warning rounded-circle px-3 py-2"><i class="bi bi-linkedin"></i></a>
                        <a href="#" class="btn btn-outline-warning rounded-circle px-3 py-2"><i class="bi bi-instagram"></i></a>
                        <a href="#" class="btn btn-outline-warning rounded-circle px-3 py-2"><i class="bi bi-envelope"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection