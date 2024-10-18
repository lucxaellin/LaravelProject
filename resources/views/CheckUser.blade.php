<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Select Your Role</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-image: url('../images/Username_Background.png');
            color: #ce717c; 
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            text-align: center;
        }
        .container {
            background-color: #F3BABA; 
            color: brown;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            max-width: 500px;
            width: 100%;
        }

        h1 {
            margin-bottom: 10px;
            font-size: 2rem;
        }
        p {
            font-size: 1.2rem;
            margin-bottom: 20px;
        }
        select {
            width: 100%;
            padding: 8px; /* Increased padding for a bigger select */
            margin: 15px 0;
            border: 2px solid #004d40;
            border-radius: 5px;
            box-sizing: border-box;
            font-size: 1rem; /* Increased font size for better visibility */
        }
        button {
            background-color: #ce717c;
            color: #fff;
            border: none;
            padding: 10px 20px;
            cursor: pointer;
            font-size: 1.1rem;
            border-radius: 5px;
            width: 100%;
        }
        button:hover {
            background-color: #e08c96;
        }
    </style>
</head>
<body>

<div class="container">
    <h1>Select Your Role</h1>
    <p>Please choose your role to continue:</p>
    <form action="{{ route('set.role') }}" method="POST">
        @csrf
        <label for="role">Select Role:</label>
        <select name="role" id="role" required>
            <option value="" disabled selected>Select your role</option>
            <option value="teacher">Teacher</option>
            <option value="student">Student</option>
            <option value="anonymous">Anonymous</option>
        </select>
        <button type="submit">Continue</button>
    </form>
</div>

</body>
</html>
