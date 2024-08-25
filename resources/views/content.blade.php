<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    <title>Personal Information</title>
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
                <a href="{{ url('/') }}" class="nav-button">HOME</a>
                <a href="{{ url('about') }}" class="nav-button">ABOUT ME</a>
                <a href="{{ url('content') }}" class="nav-button">CONTENT</a>
            </nav>
        </section>
    </header>

    <section id="personal-info">
        <h1 style="text-align: center; color: white; font-size: 45px; margin-top: 25px;">CONTENT</h1> <br>
        <h2 style="text-align: center; color: white; font-size: 20px; margin-top: 5px; margin-bottom: 20px;"> ~ Get to know more about Lainey ~</h2>

        <table class="table2">
            <tr>
                <th><a href="{{ url('education') }}"><img class="hobbiespictures" src="{{ asset('images/Education.jpeg') }}" alt="Education"></a></th>
                <th><a href="{{ url('relationship') }}"><img class="hobbiespictures" src="{{ asset('images/Relationship.jpeg') }}" alt="Relationship"></a></th>
                <th><a href="{{ url('hobbies') }}"><img class="hobbiespictures" src="{{ asset('images/Hobbies.jpeg') }}" alt="Hobbies"></a></th>
            </tr>
            <tr style="margin-top: 5px;">
                <td style="font-size: 18px;"><b>EDUCATION</b></td>
                <td style="font-size: 18px;"><b>RELATIONSHIP</b></td>
                <td style="font-size: 18px;"><b>HOBBIES</b></td>
            </tr>
        </table>
    </section>
</body>
</html>
