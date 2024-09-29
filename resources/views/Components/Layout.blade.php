 <!-- resources/views/Components/layout.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{ asset('style.css') }}">
</head>
<body>
    <!-- Conditionally exclude the header for specific routes (e.g., username input form) -->
    @unless (Request::is('/'))
    <!-- Header -->
    <header>
        <section id="header">
            <div class="header container">
                <div class="nav-bar">
                    <div class="brand">
                        <a href="{{ url('/') }}">
                            <h1><span>WEB</span>DEV</h1>
                        </a>
                    </div>
                    <div class="nav-list">
                        <div class="hamburger">
                            <div class="bar"></div>
                        </div>
                        <ul>
                            <li><a href="{{ url('/welcome') }}">Home</a></li>
                            <li><a href="{{ url('/about') }}">About</a></li>  
                            <li><a href="{{ url('/contact') }}">Contact</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
    </header>
    <!-- End Header -->
    @endunless

    <!-- Main Content Section -->
    <main>
        @yield('content')
    </main>

    <!-- Conditionally exclude the footer for specific routes -->
    @unless (Request::is('welcome') || Request::is('/'))
    <footer>
        <section id="footer">
            <div class="footer container">
                <div class="brand">
                    <h1><span>WEB</span>DEV</h1>
                </div>
                <h2>MALLO | LLEVA | LLONA</h2>
                <div class="social-icon">
                    <div class="social-item">
                        <a href="https://www.facebook.com/preciousgwynth.avilamallo">
                            <img src="https://img.icons8.com/bubbles/100/000000/facebook-new.png" />
                        </a>
                    </div>
                    <div class="social-item">
                        <a href="https://www.instagram.com/qwayynyth/">
                            <img src="https://img.icons8.com/bubbles/100/000000/instagram-new.png" />
                        </a>
                    </div>
                    <div class="social-item">
                        <img src="{{ asset('img/logo.JPG') }}" alt="img">
                    </div>
                </div>
                <p>All rights reserved</p>
            </div>
        </section>
    </footer>
    @endunless    
</body>
</html>
