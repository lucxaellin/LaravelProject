<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    <title>About Us</title>
</head>
<body>
    <header>
    <section id="about">
    <nav class="navbar">
            <h1 class="welcome-text">Welcome, {{ $username }}!</h1>
            <div class="nav-links">
                <a href="{{ url('homepage') }}" class="nav-button">HOME</a>
                <a href="{{ url('about') }}" class="nav-button">ABOUT ME</a>
                <a href="{{ url('content') }}" class="nav-button">CONTENT</a>
                <a href="{{ url('Layout')}}" class="nav-button">CONTACT ME</a>
            </div>
        </nav>
    </section>
    </header>

    <section id="about">
        <h1 class="title">ABOUT LAINEY </h1>
        <br>
        <h2 class="subtitle"> ~ Just Lainey – Dreaming Big, Staying Simple ~</h2>
        <br>
        <br>
        <img class="aboutme" src="{{ asset('images/Bertiz.png') }}" width="400" height="350" alt="Profile Image">

        <p class="introduction">
        Hi, I’m Elaine Mae A. Bertiz, a BSIT 3C student at Bicol University. I have a passion for exploration and creativity, especially when it comes to designing websites. I believe that a well-designed website should not only be functional but also visually appealing. 
        <br><br>In my previous projects, I've enjoyed experimenting with different styles and layouts, always aiming to create a user-friendly experience. I love using bright colors in my designs because they bring a sense of joy and warmth, making users feel welcomed and engaged. 
        <br><br>When it comes to this course, I’m loving it so far! While I’ve faced some challenges during the lab activities, I’m proud to say that I’ve resolved them and grown from the experience. I’m excited about the opportunity to learn even more and enhance my skills in web development. Join me on my journey as I continue to explore the intersection of creativity and technology!
        </p>
        <br>
        <p class="introduction2">
        <br>Join me on my journey as I continue to explore the world of web development, where creativity meets technology!
        </p>
    </section>
    <footer class="footer">
    <div class="footer-content">
        <div class="footer-section">
        <h4>Web Development Midterm Portfolio</h4>
        </div>

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
