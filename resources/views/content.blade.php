<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    <title>Content</title>
    <style>
        #profileButton, #aboutMeButton, #personalInfoButton {
            display: inline-block;
            padding: 10px 20px;
            color: white;
            background-color: #007bff;
            border: none;
            border-radius: 5px;
            text-decoration: none;
            text-align: center;
            margin: 10px;
        }

        #profileButton:hover, #aboutMeButton:hover, #personalInfoButton:hover {
            background-color: #0056b3;
        }

        .table2 {
            width: 100%;
            border-collapse: collapse;
        }

        .table2 th, .table2 td {
            padding: 10px;
            text-align: center;
        }

        .table2 th {
            font-size: 18px;
        }

        .table2 img {
            width: 100%;
        }

        .hobbiespictures {
            max-width: 310px;
        }

    </style>
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
    <section id="personal-info">
        <h1 style="text-align: center; color: rgb(181, 99, 117); font-size: 45px; margin-top: 25px;">CONTENT</h1> <br>
        <h2 style="text-align: center; color: rgb(76, 75, 75); font-size: 20px; margin-top: 5px; margin-bottom: 20px;"> ~ Every activity has been a stepping stone in my learning journey! Join me as I showcase my progress in this course ~</h2> <br>
        <table class="table2">
            <tr>
                <th><a href="{{ url('Lab1') }}"><img class="hobbiespictures" src="{{ asset('images/Setup.png') }}" alt="SetUp"></a></th>
                <th><a href="{{ url('Lab2') }}"><img class="hobbiespictures" src="{{ asset('images/Routes.png') }}" alt="Routes"></a></th>
                <th><a href="{{ url('Lab3') }}"><img class="hobbiespictures" src="{{ asset('images/Layout.png') }}" alt="Layout"></a></th>
                <th><a href="{{ url('Lab4') }}"><img class="hobbiespictures" src="{{ asset('images/Middleware.png') }}" alt="Middleware"></a></th>
            </tr>
            <tr style="margin-top: 5px;">
                <td style="font-size: 18px;"><b>~ LAB 1 ~</b></td>
                <td style="font-size: 18px;"><b>~ LAB 2 ~</b></td>
                <td style="font-size: 18px;"><b>~ LAB 3 ~</b></td>
                <td style="font-size: 18px;"><b>~ LAB 4 ~</b></td>
            </tr>
        </table>
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
