<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    <title>Resume</title>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            function navigateTo(link) {
                window.location.href = link;
            }

            document.getElementById('profileButton').addEventListener('click', function() {
                navigateTo('{{ url('/') }}'); 
            });
        });
    </script>
</head>
<body>
    <header>
        <section id="about">
            <button class="button" id="profileButton" role="button">BACK TO HOME</button>
        </section>
    </header>
    <main>
    <h1 style="text-align: center; color: white; font-size: 30px; margin-top: 20px; margin-bottom: 15px;">Lainey's Resume</h1> <br>
        <img class="resume-image" src="{{ asset('images/ElaineResume.png') }}" alt="Profile Image">
    </main>
</body>
</html>
