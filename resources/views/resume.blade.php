<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    <title>Terms and Conditions</title>
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
    <main>
    <br><h1 style="text-align: center; color: rgb(181, 99, 117); font-size: 30px; margin-top: 20px; margin-bottom: 15px;">INTRODUCTION TO WEB DEVELOPMENT</h1> 
    <h2> - Midterm Period -</h2>
            <ul style="text-align: center;">
                <br><p>In an era where digital presence is crucial, the ability to develop dynamic and user-friendly websites is a valuable skill. This project serves as a culmination of my learning in web <br><br>development, utilizing Laravel— a powerful PHP framework renowned for its elegant syntax and robust features. The primary objective is to create a portfolio website that
                not <br><br>only showcases my lab activities but also demonstrates my grasp of essential web development principles such as routing, middleware, views, and layout. The 
                portfolio will feature<br><br> distinct routes for each lab activity, emphasizing the importance of effective navigation in web applications. Each route will be carefully crafted to ensure seamless 
                user experience,<br> <br>including at least one parameterized route to illustrate dynamic content rendering. This will enable users to access specific lab details with ease, highlighting the 
                versatility of Laravel’s <br><br>routing capabilities. In addition to routing, I will implement a master layout that serves as a consistent design template across the entire website. This layout will 
                include essential components<br><br> such as a header, footer, and navigation menu, ensuring that users enjoy a cohesive and intuitive browsing experience. Each lab activity will be presented in its 
                own dedicated view,<br><br> complete with a clear title, description, and summary. This structure will not only enhance readability but also allow for a more organized presentation of information.
                To further enrich the<br><br> functionality of the site, I will incorporate middleware. This could range from access control mechanisms to ensure that certain pages are only accessible to authorized users, to request logging <br><br>that captures vital data for performance analysis. The use of middleware underscores the importance of security and efficiency in web development, showcasing my understanding of best<br> <br>practices in the field.
                Ultimately, this project is not just a demonstration of technical skills; it reflects my creative vision for building vibrant and engaging web applications. Through the <br><br>careful design and development of this portfolio, I aim to highlight my journey in web development and my commitment to continuous learning and improvement. I invite you to explore the site, <br><br>where each lab activity encapsulates my dedication to producing high-quality work that is both functional and visually appealing.</p>
            <br> <br> <br>
    </main>
</body>
</html>