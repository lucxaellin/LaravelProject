<style>
        #profileButton, #aboutMeButton, #personalInfoButton {
            display: inline-block;
            padding: 10px 20px;
            color: rgb(76, 75, 75);
            background-color: #ffd4d4;
            border: none;
            border-radius: 5px;
            text-decoration: none;
            text-align: center;
            margin: 10px;
        }

        #profileButton:hover, #aboutMeButton:hover, #personalInfoButton:hover {
            background-color:  #ffd4d4;
        }

        .contact-form {
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
            border-radius: 10px;
        }

        .contact-form h2 {
            text-align: center;
            color: rgb(76, 75, 75);
        }

        .contact-form label {
            display: block;
            margin: 10px 0 5px;
            color: rgb(76, 75, 75); 
            font-weight: bold; 
        }

        .contact-form input, .contact-form textarea {
            width: 100%;
            padding: 10px;
            border: 1px solid #dfa5ac;
            border-radius: 5px;
            margin-bottom: 10px;
            background-color:#ffd4d4;
        }

        .contact-form input[type="submit"] {
            background-color: #f4acb7;
            color: rgb(76, 75, 75);
            border: none;
            padding: 12px;
            cursor: pointer;
            width: 16.5cm;
        }

        .contact-form input[type="submit"]:hover {
            background-color: #ffcad4; 
        }

        .notification {
            display: none;
            margin-top: 10px;
            background-color: #dfa5ac;
            color: rgb(76, 75, 75);
            padding: 15px;
            border-radius: 5px;
            text-align: center;
            font-size: 15px;
            width: 15.7cm;
        }
    </style>
    
<section id="personal-info">
        <br><h1 style="text-align: center; color: rgb(181, 99, 117); font-size: 45px; margin-top: 25px;">CONTACT LAINEY</h1> <br>
        <h2 style="text-align: center; color: rgb(76, 75, 75); font-size: 20px; margin-top: 5px; margin-bottom: 20px;"> ~ Drop me a message—I’m excited to hear from you! ~</h2>
        
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