{{-- 
PENJELASAN:
1. Pakai @auth → tampilkan tombol Logout kalau user login.
2. Pakai @else → tampilkan Login & Register kalau belum login.
3. Logout dibuat dengan form POST (Laravel standar).
4. Tambahin ms-auto biar tombol ada di kanan navbar.
5. Tambah margin-top: 80px; di <main> biar konten nggak ketutupan navbar fixed-top. 

    --}}

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

            <div class="collapse navbar-collapse">
                <ul class="navbar-nav ms-auto">
                    @auth
                        <li class="nav-item">
                            <form action="{{ route('logout') }}" method="POST">
                                @csrf
                                <button type="submit" class="btn btn-outline-light btn-sm">
                                    Logout
                                </button>
                            </form>
                        </li>
                    @else
                        <li class="nav-item">
                            <a href="{{ route('login') }}" class="btn btn-outline-light btn-sm me-2">Login</a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('register') }}" class="btn btn-primary btn-sm">Register</a>
                        </li>
                    @endauth
                </ul>
            </div>
        </div>
    </nav>

    <main class="container pt-6" style="margin-top: 80px;">
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
