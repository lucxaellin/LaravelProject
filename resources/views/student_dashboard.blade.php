<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Access Denied</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-image: url('../images/Username_Background.png');
            color: brown;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            text-align: center;
        }
        h1 {
            font-size: 2.5rem;
            margin-bottom: 20px;
        }
        h2 {
            font-size: 1rem;
            margin-bottom: 20px;
        }
        p {
            font-size: 1.2rem;
            margin-bottom: 30px;
        }
        a {
            text-decoration: none;
        }
        button {
            background-color: #f5c6cb;
            color: #721c24;
            border: 2px solid #721c24;
            padding: 10px 20px;
            font-size: 1rem;
            cursor: pointer;
            border-radius: 5px;
        }
        button:hover {
            background-color: #721c24;
            color: #fff;
        }
    </style>
</head>
<body>
    <div>
        <h1>Access Granted-With Permission First!</h1>
        <h2>I see you want to check out my portfolio! You’re welcome to look, but please let me know first. Thank you! </h2>
        <form action="{{ route('CheckUser') }}" method="GET">
            @csrf
            <button type="submit">Verify Role Again</button>
        </form> <br>
        <form action="{{ route('username_form') }}" method="GET">
            @csrf
            <button type="submit">Let Me Know First Who You Are</button>
        </form>
    </div>
</body>
</html>
