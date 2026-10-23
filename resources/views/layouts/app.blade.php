<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Katalog Olahraga & Kegiatan')</title>

    <!-- Bootstrap 5 & Vite -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <style>
    /* 1. Animasi Masuk (Fade In & Slide Up) */
    @keyframes fadeInUp {
        from {
            opacity: 0;
            transform: translateY(25px);
        }
        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    .animate-fade-in {
        animation: fadeInUp 0.8s cubic-bezier(0.16, 1, 0.3, 1) forwards;
    }

    .animate-delay-1 { animation-delay: 0.15s; }
    .animate-delay-2 { animation-delay: 0.3s; }

    /* 2. Animasi Hover Efek pada Card */
    .card-custom {
        transition: transform 0.3s ease, box-shadow 0.3s ease, border-color 0.3s ease !important;
    }

    .card-custom:hover {
        transform: translateY(-8px) scale(1.01);
        box-shadow: 0 12px 25px rgba(255, 102, 0, 0.25) !important;
        border-color: #ff6600 !important;
    }

    /* 3. Animasi Zoom pada Gambar Card */
    .card-custom .card-img-top, 
    .card-custom img {
        transition: transform 0.5s ease;
    }

    .card-custom:hover .card-img-top,
    .card-custom:hover img {
        transform: scale(1.05);
    }

    .card-custom .overflow-hidden {
        overflow: hidden;
    }

    /* 4. Animasi Tombol saat Hover */
    .btn-orange-glow {
        background-color: #ff6600 !important;
        color: #ffffff !important;
        border: none !important;
        transition: all 0.3s ease !important;
    }

    .btn-orange-glow:hover {
        background-color: #e65c00 !important;
        transform: translateY(-2px);
        box-shadow: 0 6px 20px rgba(255, 102, 0, 0.4) !important;
    }
</style>
</head>
<body>

    <!-- Header Partial -->
    @include('layouts.partials.header')

    <!-- Main Content -->
    <main class="py-4">
        @yield('content')
    </main>

    <!-- Footer Partial -->
    @include('layouts.partials.footer')

</body>
</html>