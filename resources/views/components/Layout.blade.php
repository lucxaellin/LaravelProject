<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    <title>Layout</title>
</head>
<body>
    <div class="wrapper">
        <header>
            <nav class="right-aligned-nav">
                <div class="nav-links">
                <a href="{{ url('homepage') }}" class="nav-button">HOME</a>
                <a href="{{ url('about') }}" class="nav-button">ABOUT ME</a>
                <a href="{{ url('content') }}" class="nav-button">CONTENT</a>
                <a href="{{ url('Layout')}}" class="nav-button">CONTACT ME</a>
            </div>
        </nav>
                </div>
            </nav>
        </header>

                @include('layout1')
            </div>
        </div>

        @include('layout2')
        @include('layout3')
    </div>

    <footer class="footer">
    <div class="footer-content">
        <div class="footer-section">
        <h4>Web Development Midterm Portfolio</h4>
        </div>
        <br>
        <div class="footer-section social-media">
            <h5>Submitted by</h5>
            <div class="social-icon">
                <p>Elaine Mae A.Bertiz | BSIT 3C</p>
        </div>

        <div class="footer-section">
            <br><p>&copy; 2024 Midterm Project. All rights reserved.</p>
        </div>
    </div>
</footer>
</body>
</html>
