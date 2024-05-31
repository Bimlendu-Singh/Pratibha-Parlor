<!-- resources/views/layouts/header.blade.php -->
<header>
    <style>
        .navbar {
            background-color: #333;
            position: relative;
            padding: 10px 20px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            overflow: hidden;
        }

        .navbar ul {
            list-style: none;
            display: flex;
            margin: 0;
            padding: 0;
            flex-grow: 1;
            justify-content: flex-end;
        }

        .navbar ul li {
            margin: 0 10px;
            position: relative;
        }

        .navbar ul li a {
            color: #fff;
            text-decoration: none;
            padding: 10px 15px;
            position: relative;
            z-index: 1;
        }

        .navbar .overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(120deg, #ff7e5f, #feb47b, #ff7e5f, #feb47b);
            transition: transform 0.5s ease;
            transform: translateX(-100%);
            z-index: 0;
            pointer-events: none;
        }

        .navbar:hover .overlay {
            transform: translateX(0);
        }

        .navbar ul li a:hover {
            color: #fff;
        }

        .navbar .logo img {
            height: 50px;
            border-radius: 50%;
        }

        .navbar-toggle {
            display: none;
        }
    </style>

    <nav class="navbar">
        <div class="logo">
            <img src="{{ asset('images/logo.png') }}" alt="Parlor Logo">
        </div>
        <button class="navbar-toggle" onclick="toggleNavbar()">☰</button>
        <ul>
            <li><a href="{{ route('home') }}">Home</a></li>
            <li><a href="#">Services</a></li>
            <li><a href="#">About Us</a></li>
            <li><a href="#">Gallery</a></li>
            <li><a href="{{ route('contact') }}">Contact</a></li>
            <li><a href="{{ route('admin.home') }}">Admin</a></li>
        </ul>
        <div class="overlay"></div>
    </nav>
</header>

<script>
    function toggleNavbar() {
        const ul = document.querySelector('.navbar ul');
        ul.classList.toggle('show');
    }
</script>
