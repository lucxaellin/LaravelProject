<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    <title>Hobbies</title>
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
            </nav>
        </section>
    </header>

    <main>
        <h1 style="text-align: center; color: white; font-size: 40px; margin-top: 35px; margin-bottom: 15px;">HOBBIES</h1>
        <h2 class="subtitle">~ Let's keep this a secret! ~</h2>

        <table class="table4">
            <tr>
                <th><img class="hobbiespictures" src="{{ asset('images/FRIENDS.jpeg') }}" alt="Friends" width="300" height="300"></th>
                <th><img class="hobbiespictures" src="{{ asset('images/Traveling.jpeg') }}" alt="Traveling" width="300" height="300"></th>
                <th><img class="hobbiespictures" src="{{ asset('images/Shopping.jpeg') }}" alt="Shopping" width="300" height="300"></th>
                <th><img class="hobbiespictures" src="{{ asset('images/Photography.jpeg') }}" alt="Photography" width="300" height="300"></th>
            </tr>
            <tr>
                <td><b>Watching Sitcom Series</b></td>
                <td><b>Traveling</b></td>
                <td><b>Shopping</b></td>
                <td><b>Photography</b></td>
            </tr>
            <tr>
                <th><img class="hobbiespictures" src="{{ asset('images/Swimming.jpeg') }}" alt="Swimming" width="300" height="300"></th>
                <th><img class="hobbiespictures" src="{{ asset('images/Music.jpeg') }}" alt="Music" width="300" height="300"></th>
                <th><img class="hobbiespictures" src="{{ asset('images/Dancing.jpeg') }}" alt="Dancing" width="300" height="300"></th>
                <th><img class="hobbiespictures" src="{{ asset('images/Vlogging.jpeg') }}" alt="Vlogging" width="300" height="300"></th>
            </tr>
            <tr>
                <td><b>Outdoor Activities</b></td>
                <td><b>Listening to Music</b></td>
                <td><b>Dancing</b></td>
                <td><b>Vlogging</b></td>
            </tr>
        </table>
    </main>
</body>
</html>
