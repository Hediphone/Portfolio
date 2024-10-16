<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ $title ?? 'Laiza\'s Personal Portfolio' }}</title>
    <link href="{{ asset('css/Home.css') }}" rel="stylesheet">
    @stack('styles')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>

<body class="@yield('body-class')">
    @if($title !== 'Landing Page' && $title !== 'Welcome')
        <header>
            <div class="header-container">
                <nav class="navbar">
                    <ul>
                        <li><a href="{{ url('/Home') }}">Home</a></li>
                        <li><a href="{{ url('/About') }}">About Me</a></li>
                        <li><a href="{{ url('/Verify') }}">Projects</a></li>
                        <li><a href="{{ url('/Contact') }}">Contact Me</a></li>
                    </ul>
                </nav>
            </div>
        </header>
    @endif

    <main>
        @yield('content')
    </main>

    @if($title !== 'Landing Page' && $title !== 'Welcome' && $title !== 'Home' && $title !== 'Contact' && $title !== 'Verify Age' && $title !== 'Access Denied')
        <footer>
            <p>&copy; 2024 Laiza's Personal Portfolio. All rights reserved.</p>
        </footer>
    @endif

    @stack('scripts')

    <script>
        // navbar scroll
        const navEl = document.querySelector('.navbar');
        window.addEventListener('scroll', () => {
            if (window.scrollY >= 56) {
                navEl.classList.add('navbar_scrolled');
            } else if (window.scrollY < 56) {
                navEl.classList.remove('navbar_scrolled');
            }
        });
    </script>
</body>


</html>