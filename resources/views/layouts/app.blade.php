<!doctype html>
<html lang="id">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>@yield('title', 'My Blog')</title>

    <!-- Bootstrap 5 (CDN) -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark mb-4 fixed-top">
        <div class="container">
            <a class="navbar-brand" href="{{ url('/') }}">My Blog</a>
        </div>
    </nav>

    <main class="container pt-6">
        @if (session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif

        @yield('content')
    </main>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

    {{-- @yield('scripts') → cuma bisa diisi sekali per halaman. --}}

    {{-- @stack('scripts') → bisa diisi berkali-kali pakai @push, semua dikumpulin lalu ditaruh di tempat @stack. --}}
    @stack('scripts')
</body>

</html>
