<!-- resources/views/layouts/header.blade.php -->
<header>
    <nav class="navbar">
        <div class="logo">
            <img src="{{ asset('images/logo.png') }}" alt="Parlor Logo">
        </div>
        <ul>
            <li><a href="{{ route('home') }}">Home</a></li>
            {{-- <li><a href="{{ route('services') }}">Services</a></li>
            <li><a href="{{ route('about') }}">About Us</a></li>
            <li><a href="{{ route('gallery') }}">Gallery</a></li> --}}
            <li><a href="{{ route('contact') }}">Contact</a></li>
            <li><a href="{{ route('admin.home') }}">Admin</a></li>
        </ul>
    </nav>
</header>
