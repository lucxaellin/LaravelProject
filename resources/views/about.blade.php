<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    <title>About Me</title>
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

    <section id="about">
        <h1 class="title">About Me</h1>
        <br>
        <h2 class="subtitle"> ~ Allow me to Introduce Myself ~</h2>
        <br>

        <img class="aboutme" src="{{ asset('images/profile.jpg') }}" width="300" height="350" alt="Profile Image">

        <p class="introduction">
            Hello, I am Elaine, also known as Lainey or Laine. I bring forth a vibrant and positive energy to both my personal and professional life. As an extroverted individual, I find joy in interacting with people and establishing connections.
            Currently pursuing a Bachelor of Science in Information Technology at Bicol University, I am not only dedicated to academic excellence but also committed to developing practical skills in the ever-evolving field of technology.
            What sets me apart is my ability to seamlessly transition between leadership roles and collaborative team environments. I consider myself both a capable leader and an enthusiastic team player, valuing the strength that diversity brings to any group. My communication skills and adaptability contribute to effective collaboration, fostering a positive and productive team dynamic.
            I am particularly eager to learn and gain valuable experiences at every opportunity. This drive for continuous improvement motivates me to embrace challenges and seek innovative solutions. I am confident that my blend of leadership, teamwork, and a perpetual eagerness to learn will make a positive impact in any professional setting. I am a dynamic individual who effortlessly effortlessly transitions between leadership and  teamwork,  driven  by  an
        </p>
        <p class="introduction2">
            unwavering enthusiasm for learning and growth. Eager to contribute my skills to any team, I possess a strong profile and a passion for creating positive work experiences. I am open to new opportunities and envision being a valuable asset to any company's success story. I am seeking a meaningful and impactful role where my skills and enthusiasm align with a shared vision for success.
        </p>
    </section>
</body>
</html>
