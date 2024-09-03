<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    <title>Relationship</title>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            function navigateTo(link) {
                window.location.href = link;
            }

            document.getElementById('profileButton').addEventListener('click', function () {
                navigateTo('{{ url('profile') }}');
            });

            document.getElementById('aboutMeButton').addEventListener('click', function () {
                navigateTo('{{ url('aboutme') }}');
            });

            document.getElementById('personalInfoButton').addEventListener('click', function () {
                navigateTo('{{ url('personal-information') }}');
            });
        });
    </script>
</head>
<body>
    <header>
        <section id="about">
            <nav class="navbar">
                <a href="{{ url('/') }}" class="nav-button">HOME</a>
                <a href="{{ url('about') }}" class="nav-button">ABOUT ME</a>
                <a href="{{ url('content') }}" class="nav-button">CONTENT</a>
                <a href="{{ url('contactus') }}" class="nav-button">CONTACT US</a>
            </nav>
        </section>
    </header>

    <main>
        <h1 style="text-align: center; color: white; font-size: 40px; margin-top: 35px; margin-bottom: 15px;">RELATIONSHIP</h1>
        <h2 class="subtitle"> ~ Lainey's Family ~</h2>
        
        <img class="familypicture" src="{{ asset('images/Family.png') }}" width="700px" height="400px">
        <p style="text-align:center; font-size: 15px; color: white; text-align: justify; text-justify: inter-word; margin-left: 50px; margin-right: 50px;">
            <br><b>
                This photo shows my little family, including my boyfriend. These three people mean everything to me. We're really close, and they bring a lot of happiness to my life. In the picture, you can see the strong bond and love we share. Each person in the photo is like a piece of a puzzle that completes our family picture. We have lots of fun times together, and these moments make life feel special. Looking at this photo reminds me of the love and joy that come from being with the people I care about the most. It's a snapshot of the happy moments and the strong connections that make our family unique and special.
            </b><br><br>
        </p>
    </main>
</body>
</html>
