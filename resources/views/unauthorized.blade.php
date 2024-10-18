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
        <h1>Access Denied!</h1>
        <h2>This portfolio is exclusive to my professors. If you’re not one of them, please step back—you're not on the guest list!</h2>
        <form action="{{ route('CheckUser') }}" method="GET">
            @csrf
            <button type="submit">Verify Your Role Again</button>
        </form>
    </div>
</body>
</html>
