<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    <title>My Profile</title>
    <style>
        #emailButton, #phoneButton, #facebookButton, #instagramButton {
            display: none;
        }

        .image-button {
            background: none;
            border: none;
            cursor: pointer;
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

    <div class="Main">
        <img class="profile" src="{{ asset('images/Profile.jpg') }}" alt="Profile Image" width="500" height="500">
        <p class="SmallIntro"><br><br><br><br>| Web System and Technologies |</p>
        <p class="Name"><b>ELAINE MAE A.BERTIZ</b></p>
        <p class="Description">A Bachelor of Science in Information Technology Student<br></p>
        <p class="Description2">
            "Any sufficiently advanced technology is equivalent to magic." <br> 
            &nbsp; &nbsp; - Arthur C. Clarke (Author)<br><br><br>
        </p>

        <button class="button a" id="ResumeButton" role="button" 
        style="margin-left: 7.5cm;">
        <a href="{{ url('resume') }}" 
       style="color: white; text-decoration: none; font-size: 16px; display: inline-block; text-align: center;">View Resume
        </a>
        </button>

        <button class="button" id="contactsButton" role="button" style="margin-left: 45px;">Show Contacts</button>

        <button id="emailButton" class="image-button" onclick="alert('Email button clicked')">
            <img src="{{ asset('images/Gmail.png') }}" alt="Email Icon" width="30" height="30">
        </button>
        <button id="phoneButton" class="image-button" onclick="alert('Phone button clicked')">
            <img src="{{ asset('images/Phone.png') }}" alt="Phone Icon" width="30" height="30">
        </button>
        <button id="facebookButton" class="image-button" onclick="alert('Facebook button clicked')">
            <img src="{{ asset('images/Facebook.png') }}" alt="Facebook Icon" width="30" height="30">
        </button>
        <button id="instagramButton" class="image-button" onclick="alert('Instagram button clicked')">
            <img src="{{ asset('images/Instagram.webp') }}" alt="Instagram Icon" width="30" height="30">
        </button>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            function navigateTo(link) {
                window.location.href = link;
            }

            function toggleContactButtons() {
                var emailButton = document.getElementById('emailButton');
                var phoneButton = document.getElementById('phoneButton');
                var facebookButton = document.getElementById('facebookButton');
                var instagramButton = document.getElementById('instagramButton');

                var isHidden = emailButton.style.display === 'none';

                emailButton.style.display = isHidden ? 'block' : 'none';
                phoneButton.style.display = isHidden ? 'block' : 'none';
                facebookButton.style.display = isHidden ? 'block' : 'none';
                instagramButton.style.display = isHidden ? 'block' : 'none';

                var contactsButtonText = document.getElementById('contactsButton');
                contactsButtonText.innerHTML = isHidden ? 'Hide Contacts' : 'Show Contacts';
            }

            document.getElementById('contactsButton').addEventListener('click', toggleContactButtons);

            document.getElementById('aboutMeButton').addEventListener('click', function() {
                navigateTo('{{ url('aboutme') }}');
            });

            document.getElementById('personalInfoButton').addEventListener('click', function() {
                navigateTo('{{ url('personal-information') }}');
            });

            document.getElementById('ResumeButton').addEventListener('click', function() {
                navigateTo('{{ url('resume') }}');
            });
        });
    </script>
</body>
</html>
