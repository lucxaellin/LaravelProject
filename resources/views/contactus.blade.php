<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    <title>Contact Us</title>
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

        .contact-form {
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
            border-radius: 10px;
        }

        .contact-form h2 {
            text-align: center;
            color: #333;
        }

        .contact-form label {
            display: block;
            margin: 10px 0 5px;
            color: white; 
            font-weight: bold; 
        }

        .contact-form input, .contact-form textarea {
            width: 100%;
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 5px;
            margin-bottom: 10px;
            background-color: #D6EBF2;
        }

        .contact-form input[type="submit"] {
            background-color: #0056b3;
            color: white;
            border: none;
            padding: 10px;
            cursor: pointer;
        }

        .contact-form input[type="submit"]:hover {
            background-color: #004494; 
        }

        .notification {
            display: none;
            margin-top: 10px;
            background-color: #28a745;
            color: white;
            padding: 15px;
            border-radius: 5px;
            text-align: center;
            font-size: 16px;
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
                <a href="{{ url('contactus') }}" class="nav-button">CONTACT US</a>
            </nav>
        </section>
    </header>

    <section id="personal-info">
        <h1 style="text-align: center; color: white; font-size: 45px; margin-top: 25px;">CONTACT US</h1> <br>
        <h2 style="text-align: center; color: white; font-size: 20px; margin-top: 5px; margin-bottom: 20px;"> ~ Lets get this conversation started. Tell me a bit about yourself, and I'll get in touch as soon as I can ~</h2>
        
        <div class="contact-form">
            <form id="contactForm" action="{{ url('contact/submit') }}" method="POST">
                @csrf
                <label for="name">Name:</label>
                <input type="text" id="name" name="name" required>

                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>

                <label for="subject">Subject:</label>
                <input type="text" id="subject" name="subject" required>

                <label for="message">Message:</label>
                <textarea id="message" name="message" rows="5" required></textarea>

                <input type="submit" value="Send Message">

                <div id="notification" class="notification">Message sent!</div>
            </form>
        </div>
    </section>

    <script>
        document.getElementById('contactForm').addEventListener('submit', function(event) {
            event.preventDefault(); 

            var notification = document.getElementById('notification');
            notification.style.display = 'block';

            setTimeout(function() {
                notification.style.display = 'none';
            }, 3000);

            
        });
    </script>
</body>
</html>
