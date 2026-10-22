<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Katalog Olahraga & Kegiatan')</title>

    <!-- Bootstrap 5 & Vite -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <style>
        body {
            background-color: #121212;
            color: #e0e0e0;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            min-height: 100vh;
            display: flex;
            flex-direction: column;
        }
        main { flex: 1; }
        
        .text-orange { color: #ff6600 !important; }
        .bg-orange { background-color: #ff6600 !important; color: #fff; }
        .border-orange { border-color: #ff6600 !important; }
        
        .btn-orange {
            background-color: #ff6600;
            color: #ffffff;
            font-weight: 600;
            border: none;
            transition: all 0.3s ease;
        }
        .btn-orange:hover {
            background-color: #e55c00;
            color: #ffffff;
            box-shadow: 0 0 15px rgba(255, 102, 0, 0.4);
        }
        
        .card-custom {
            background-color: #1e1e1e;
            border: 1px solid rgba(255, 102, 0, 0.2);
            border-radius: 12px;
            overflow: hidden;
            transition: all 0.3s ease;
        }
        .card-custom:hover {
            transform: translateY(-6px);
            border-color: #ff6600;
            box-shadow: 0 8px 24px rgba(255, 102, 0, 0.25);
        }

        .nav-link {
            color: #cccccc !important;
            font-weight: 500;
            transition: color 0.2s ease;
        }
        .nav-link:hover, .nav-link.active {
            color: #ff6600 !important;
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