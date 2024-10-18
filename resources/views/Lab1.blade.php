<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    <title>Lab 2</title>
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
        <h1 style="text-align: center; color: rgb(181, 99, 117); font-size: 40px; margin-top: 35px; margin-bottom: 15px;">LAB 1: SETUP</h1>
        <h2 class="subtitle">~ Task: Setting Up Laravel, Creating 3 Views, and Uploading to GitHub ~</h2>

        <table class="table4">
            <tr>
                <th><a href="{{ url('contactus') }}" target="_blank"><img class="hobbiespictures1" src="{{ asset('images/Lab1.png') }}" alt="Single" width="300" height="300"></th>
            </tr>
        </table>
        <div class="narrative">
        <p> In Lab 1, I began my learning journey with Laravel by installing the framework and creating three web pages. The installation process was challenging for me because I encountered many errors along the way. Each error made me feel frustrated, but I didn’t give up. I researched the issues and kept trying different solutions until I finally got it to work. After successfully installing Laravel, I moved on to designing the web pages. My goal was to make them look nice, so I decided to give them a portfolio-style layout.
            Creating the three web pages was easier than the installation, but I still had to pay attention to detail to ensure everything looked good. I added text and images, making sure each page had a consistent style. However, I faced another challenge when it was time to upload my work to GitHub. Since I was new to GitHub, I didn’t know how to use it properly. I spent several hours trying to understand how to commit my changes and push them to my repository. It was a bit confusing, but I eventually figured it out, and I felt relieved when I successfully uploaded my project.
            Reflecting on this experience, I realized that even though the task seemed simple, the challenges I faced were valuable learning opportunities. I learned how to troubleshoot installation issues, design web pages, and use GitHub. This lab helped me gain confidence in my web development skills and taught me the importance of persistence. Overall, I am glad I faced these challenges because they made me a better learner.
</p>
</div>
    </main>
</body>
</html>
