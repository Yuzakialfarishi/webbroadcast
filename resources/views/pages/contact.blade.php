@extends('layouts.app')

@section('title', 'Kontak')

@section('css')
<link rel="stylesheet" href="{{ asset('css/kontak.css') }}">
@endsection

@section('content')

<!-- Contact hero -->
<div class="contact-hero">
    <img class="contact-hero-img" src="/img/hero-contact.svg" alt="Contact Hero">
    <div class="contact-hero-overlay">
        <h1>Kontak Kami</h1>
        <p>Hubungi tim Broadcast — kami siap membantu dan menerima informasi kerja sama.</p>
    </div>
    
</div>

<!-- Contact cards (only Address and Instagram) -->
<div class="contact-cards">
    <div class="contact-card">
        <div class="contact-icon">
            <svg width="36" height="36" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M12 2C8.13 2 5 5.13 5 9c0 5.25 7 13 7 13s7-7.75 7-13c0-3.87-3.13-7-7-7z" stroke="#d9534f" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg>
        </div>
        <h3>Visit Us</h3>
        <p>SMKN 1 Garut<br>Jl. Cimanuk No.309A, Sukagalih, Tarogong Kidul, Garut, Jawa Barat 44151</p>
    </div>

    <div class="contact-card">
        <div class="contact-icon">
            <svg width="36" height="36" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M21 7.5c-.63.28-1.3.47-2 .55.72-.43 1.28-1.11 1.54-1.92-.68.4-1.43.69-2.23.85C18.4 5.7 17.57 5.25 16.6 5.25c-1.56 0-2.82 1.26-2.82 2.82 0 .22.02.43.07.63C10.9 8.6 8.22 7.2 6.56 5.08c-.24.42-.38.91-.38 1.44 0 .98.5 1.84 1.25 2.35-.58-.02-1.12-.18-1.59-.44v.04c0 1.38.98 2.54 2.28 2.8-.24.06-.5.09-.76.09-.19 0-.38-.02-.56-.05.38 1.18 1.48 2.04 2.78 2.07-1.02.8-2.3 1.27-3.7 1.27-.24 0-.48-.01-.71-.04 1.32.84 2.88 1.33 4.57 1.33 5.48 0 8.48-4.54 8.48-8.48v-.39c.58-.42 1.08-.95 1.48-1.56-.54.24-1.12.4-1.72.47z" stroke="#E1306C" stroke-width="0.6" stroke-linecap="round" stroke-linejoin="round"/></svg>
        </div>
        <h3>Instagram</h3>
        <p><a href="https://www.instagram.com/broadcast_smkn1garut" target="_blank">@broadcast_smkn1garut</a></p>
    </div>
</div>

@endsection