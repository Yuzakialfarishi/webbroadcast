<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>

    {{-- CSS Khusus per halaman --}}
    @yield('css')

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
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
            <li><a href="/login" class="btn-login">Login</a></li>
        </ul>
    </nav>

    {{-- Main Content --}}
    <div class="content">
        @yield('content')
    </div>

</body>
</html>
<html lang="id">
<head>
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1" />
<title>@yield('title', 'Broadcast SMKN 1 Garut')</title>


<!-- Font Awesome -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">


<!-- Simple CSS (you can replace with Tailwind/Bootstrap) -->
<style>
:root{--accent:#ff2e63;--dark:#111;--muted:#6b7280}
*{box-sizing:border-box}
body{font-family:Inter,ui-sans-serif,system-ui,-apple-system,"Segoe UI",Roboto,"Helvetica Neue",Arial;line-height:1.6;color:#111;background:#f5f7fb;margin:0}
.container{max-width:1100px;margin:0 auto;padding:20px}


/* Navbar */
.navbar{background:var(--dark);color:#fff;padding:14px 20px;display:flex;align-items:center;justify-content:space-between;position:sticky;top:0;z-index:40}
.nav-left{display:flex;align-items:center;gap:14px}
.brand{font-weight:700;font-size:18px}
.nav-links{display:flex;gap:12px}
.nav-links a{color:#fff;text-decoration:none;padding:6px 10px;border-radius:6px}
.nav-links a:hover{background:rgba(255,255,255,0.04)}


/* Hero */
.hero{background:linear-gradient(rgba(0,0,0,0.4),rgba(0,0,0,0.25)),url('https://images.unsplash.com/photo-1496307042754-b4aa456c4a2d?auto=format&fit=crop&w=1200&q=60') center/cover;padding:80px 0;color:#fff}
.hero .container{display:flex;gap:40px;align-items:center}
.hero h1{font-size:38px;margin:0 0 8px}
.hero p{max-width:650px;color:rgba(255,255,255,0.9)}
.btn{background:var(--accent);color:#fff;padding:10px 16px;border-radius:8px;border:none;cursor:pointer}


/* Cards & grid */
.grid{display:grid;grid-template-columns:repeat(auto-fit,minmax(240px,1fr));gap:16px}
.card{background:#fff;border-radius:10px;padding:16px;box-shadow:0 6px 18px rgba(24,24,24,0.06)}
.card img{width:100%;height:160px;object-fit:cover;border-radius:8px}


/* Profil section */
.profil{display:flex;gap:24px;align-items:flex-start}
.profil img{width:360px;border-radius:10px}


/* Table simple */
table{width:100%;border-collapse:collapse}
th,td{padding:10px;border-bottom:1px solid #eee;text-align:left}


/* Footer */
footer{background:#0f1724;color:#fff;padding:20px 0;margin-top:30px}
.footer-inner{display:flex;justify-content:space-between;align-items:center;gap:12px}


/* Forms */
input[type="text"],input[type="email"],input[type="password"],textarea,select{width:100%;padding:10px;border:1px solid #e5e7eb;border-radius:8px}
label{display:block;margin-bottom:6px;font-weight:600}
form .row{display:grid;grid-template-columns:1fr 1fr;gap:12px}


@media(max-width:800px){
.profil{flex-direction:column}
.hero .container{flex-direction:column}
nav .nav-links{display:none}
}