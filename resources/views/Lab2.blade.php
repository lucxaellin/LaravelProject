<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    <title>Lab 3</title>
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
        <nav class="right-aligned-nav">
        <div class="nav-links">
                <a href="{{ url('homepage') }}" class="nav-button">HOME</a>
                <a href="{{ url('about') }}" class="nav-button">ABOUT ME</a>
                <a href="{{ url('content') }}" class="nav-button">CONTENT</a>
                <a href="{{ url('Layout')}}" class="nav-button">CONTACT ME</a>
            </div>
        </nav>
    </section>
    </header>

    <main>
        <h1 style="text-align: center; color: rgb(181, 99, 117); font-size: 40px; margin-top: 35px; margin-bottom: 15px;">LAB 2: ROUTES</h1>
        <h2 class="subtitle">~ Task: Create a Welcome Display, Username Form, Contact Form, and an Additional Route with a Required Parameter ~</h2>

        <table class="table4">
            <tr>
                <th><a href="{{ url('contactus') }}" target="_blank"><img class="hobbiespictures1" src="{{ asset('images/Lab2.png') }}" alt="Single" width="300" height="300"></th>
            </tr>
        </table>
        <div class="narrative">
        <p> In Lab 2, I encountered a lot of difficulties. Initially, I planned a simple layout where entering a username would display a welcome page for that user with a button for the homepage. However, I decided to challenge myself by creating a more complex design. I made it so that the username would display on the homepage, which turned out to be more difficult than expected, especially since I decided to change the layout into a hotel-themed webpage. This required me to start from scratch, but I enjoyed the process, especially when I got the parameters to work properly.
        Creating the contact form was easier for me, as it involved building another webpage where users could input their name, along with a button to notify them that their message was sent. The hardest part was passing the username parameter correctly, as it wasn’t being read properly at first. I had to track down where I went wrong and ensure I was using the correct route. After some troubleshooting, I managed to fix it. The task became more challenging because I completely changed the design of the pages, but in the end, everything turned out well.
</p>
</div>
    </main>
</body>
</html>
