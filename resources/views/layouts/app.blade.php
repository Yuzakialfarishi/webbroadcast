<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Broadcast SMKN 1 Garut')</title>

    {{-- CSS Khusus per halaman --}}
    @yield('css')

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Poppins', sans-serif;
            background: #f5f7fb;
            color: #333;
            line-height: 1.6;
        }

    @stack('scripts')

        /* Navbar */
        .navbar {
            background: #1e1e1e;
            padding: 15px 30px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            position: fixed; /* fixed so it always sits above the banner */
            left: 0;
            top: 0;
            width: 100%;
            z-index: 9999;
            box-shadow: 0 2px 8px rgba(0,0,0,0.12);
        }

        .navbar .logo {
            color: white;
            font-size: 20px;
            font-weight: 700;
            margin: 0;
        }

        .navbar .nav-links {
            display: flex;
            gap: 30px;
            list-style: none;
            align-items: center;
        }

        .navbar .nav-links li {
            list-style: none;
        }

        .navbar .nav-links a {
            color: #fff;
            text-decoration: none;
            font-weight: 500;
            padding: 8px 12px;
            border-radius: 6px;
            transition: all 0.3s ease;
            position: relative;
        }

        .navbar .nav-links a:hover {
            color: #ffd43b;
            background: rgba(255, 212, 59, 0.1);
        }

        .navbar .nav-links .btn-login {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            padding: 10px 20px;
            border-radius: 8px;
            color: white;
        }

        .navbar .nav-links .btn-login:hover {
            background: linear-gradient(135deg, #5568d3 0%, #653a8a 100%);
        }

        .navbar .nav-links .btn-logout {
            background: linear-gradient(135deg, #f44336 0%, #d32f2f 100%);
            padding: 10px 20px;
            border-radius: 8px;
            color: white;
            border: none;
            cursor: pointer;
            font-family: 'Poppins', sans-serif;
            font-size: 14px;
            font-weight: 500;
            margin: 0;
        }

        .navbar .nav-links .btn-logout:hover {
            background: linear-gradient(135deg, #d32f2f 0%, #b71c1c 100%);
        }

        .content {
            min-height: calc(100vh - 160px);
            padding-top: 72px; /* ensure content starts below sticky navbar */
        }

        .container {
            max-width: 1100px;
            margin: 0 auto;
            padding: 0 20px;
        }

        footer {
            background: #1e1e1e;
            color: white;
            text-align: center;
            padding: 30px 20px;
            margin-top: 50px;
        }

        /* Responsive */
        @media (max-width: 768px) {
            .navbar {
                flex-direction: column;
                gap: 15px;
            }

            .navbar .nav-links {
                flex-direction: column;
                gap: 10px;
                width: 100%;
                text-align: center;
            }

            .navbar .nav-links a {
                display: block;
                padding: 10px;
            }
        }
    </style>
</head>
<body>

    {{-- NAV --}}
    <nav class="navbar">
        <h2 class="logo">Broadcast SMKN 1 Garut</h2>
        <ul class="nav-links">
            <li><a href="/">Beranda</a></li>
            <li><a href="/tentang">Tentang</a></li>
            <li><a href="/kegiatan">Kegiatan</a></li>
            <li><a href="/pengurus">Pengurus</a></li>
            <li><a href="/kontak">Kontak</a></li>
            @auth
                <li>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: inline;">
                        @csrf
                        <button type="submit" class="btn-logout">Logout</button>
                    </form>
                </li>
            @else
                <li><a href="/login" class="btn-login">Login</a></li>
            @endauth
        </ul>
    </nav>

    {{-- Main Content --}}
    <div class="content">
        @yield('content')
    </div>

    {{-- Footer --}}
    <footer>
        <p>&copy; 2025 Broadcast SMKN 1 Garut. All rights reserved.</p>
    </footer>

    <script>
        (function(){
            var nav = document.querySelector('.navbar');
            var content = document.querySelector('.content');
            if(nav && content){
                function syncPadding(){
                    content.style.paddingTop = nav.offsetHeight + 'px';
                }
                syncPadding();
                window.addEventListener('resize', syncPadding);
            }
        })();
    </script>

</body>
</html>