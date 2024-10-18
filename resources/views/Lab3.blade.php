<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    <title>Lab 1</title>
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
        <h1 style="text-align: center; color: rgb(181, 99, 117); font-size: 40px; margin-top: 35px; margin-bottom: 15px;">LAB 3: LAYOUT</h1>
        <h2 class="subtitle">~ Task: Create a Component, a Layout File, and 3 New Blade Files ~</h2>

        <table class="table4">
            <tr>
                <th><a href="{{ url('contactus') }}" target="_blank"><img class="hobbiespictures1" src="{{ asset('images/Lab3.png') }}" alt="Single" width="300" height="300"></th>
            </tr>
        </table>
        <div class="narrative">
        <p> In Lab 3, I finally felt like I was getting the hang of things. At first, I was unsure where to begin, and the instructions were a bit confusing, which made it challenging to start. However, after taking some time to carefully read through everything, I was able to understand the task and knew what needed to be done. This lab required creating a component, layout file, and three new Blade files, which really pushed me to tap into my creativity.
            For this project, I decided to build a hotel-themed webpage with three different layouts. One of the main features I added was a system for checking room availability. I used different colors and labels to show whether a room was available or not, which made the design both functional and visually appealing. It was rewarding to see how the layout and design came together to create a clean and easy-to-use interface.
            In addition to that, I included an AI-like feature on the page, which allowed users to ask questions and send messages to the hotel’s customer service. This added an interactive element to the webpage, making it more engaging for users. I also created a simple footer that provided some brief information about the hotel, giving the page a complete and professional feel.
            Overall, I really enjoyed working on this lab because it gave me a chance to be creative while applying the technical skills I’ve been learning. Although the task initially seemed overwhelming, once I understood it, I had a lot of fun designing the layout and features. This activity helped me see how I could bring together both creativity and technical skills to build something functional and visually appealing.
</p>
</div>
    </main>
</body>
</html>
