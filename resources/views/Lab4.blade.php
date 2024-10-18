<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    <title>Lab 4</title>
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
        <h1 style="text-align: center; color: rgb(181, 99, 117); font-size: 40px; margin-top: 35px; margin-bottom: 15px;">LAB 4: MIDDLEWARE</h1>
        <h2 class="subtitle">~ Task: Create and Register New Middleware, Assign Middleware to Routes, and Create Middleware with Parameters ~</h2>

        <table class="table4">
            <tr>
                <th><a href="{{ url('contactus') }}" target="_blank"><img class="hobbiespictures1" src="{{ asset('images/Lab4.png') }}" alt="Single" width="300" height="300"></th>
            </tr>
        </table>
        <div class="narrative">
        <p> In Lab 4, this was definitely the hardest lab I encountered during the midterm, mainly because it was my first time working with middleware. I followed the instructions from the LMS step by step, but I kept running into an issue where the age parameter wasn’t being passed correctly. No matter how many ways I tried to fix it, the same error kept showing up. I even restarted Laravel multiple times, hoping it might solve the problem, but it didn’t work. After spending a lot of time troubleshooting, I went back and reviewed the PowerPoint slides. That’s when I realized that I hadn’t added the necessary parameters to the route, and this was what was causing the issue the whole time.

While creating and registering middleware, as well as assigning it to routes, was fairly straightforward, I found working with middleware parameters particularly tricky. This lab was especially challenging because I wasn’t yet familiar with how middleware works, so I made a few mistakes along the way. Despite the difficulty, I feel grateful for the problems I encountered because they helped me understand the process better. Each error I faced forced me to dig deeper into the documentation and learn more about how parameters work with middleware.

Looking back, I think the lab wasn’t inherently difficult, but my lack of experience with middleware made it feel much harder. The challenges I faced with passing parameters were frustrating at times, but overcoming them gave me a sense of accomplishment. In the end, I’m glad I went through these struggles because they’ve increased my confidence in handling middleware, and I learned that sometimes the smallest details, like missing a parameter, can make a big difference.</p>
</div>
    </main>
</body>
</html>
