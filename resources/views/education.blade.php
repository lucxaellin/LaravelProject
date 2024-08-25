<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    <title>Education</title>
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
    <h1 style="text-align: center; color: white; font-size: 40px; margin-top: 50px; margin-bottom: 20px;">EDUCATION</h1>
    <h2 class="subtitle"> ~ Get to know my alma mater ~</h2>
    <table class="table3">
        <tr>
            <th><a href="https://www.facebook.com/tnwcs8/" target="_blank"><img class="hobbiespictures" src="{{ asset('images/TNWCS.png') }}" alt="Northwest Central Elementary School" width="300" height="300"></a></th>
            <th><a href="https://www.facebook.com/p/Tabaco-National-High-School-School-ID-302285-100064154730624/" target="_blank"><img class="hobbiespictures" src="{{ asset('images/TNHS.png') }}" alt="Tabaco National High School" width="300" height="300"></a></th>
            <th><a href="https://www.marinerslegazpi.edu.ph/" target="_blank"><img class="hobbiespictures" src="{{ asset('images/Mariners.png') }}" alt="Mariners' Polytechnic Colleges Foundation" width="300" height="300"></a></th>
            <th><a href="https://bicol-u.edu.ph/" target="_blank"><img class="hobbiespictures" src="{{ asset('images/BU.png') }}" alt="Bicol University" width="300" height="300"></a></th>
        </tr>
        <tr>
            <td><b>Northwest Central Elementary School <br>(2015-2016)</b></td>
            <td><b>Tabaco National High School <br>(2015-2016)</b></td>
            <td><b>Mariners' Polytechnic Colleges Foundation of Legazpi City <br>(2019-2020)</b></td>
            <td><b>Bicol University <br>(2022-present)</b></td>
        </tr>
    </table>
</body>
</html>
