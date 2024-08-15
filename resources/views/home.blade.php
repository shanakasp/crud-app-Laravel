<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            background-color: #f0f0f0;
        }

        h1 {
            text-align: center;
            margin-bottom: 20px;
        }

        .container {
            border: 1px solid black;
            width: 300px;
            padding: 20px;
            background-color: blue;
            position: relative;
            top: 50px;
            left: 50px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            color: white;
        }

        form {
            display: flex;
            flex-direction: column;
        }

        input[type="text"],
        input[type="password"] {
            padding: 10px;
            margin-bottom: 15px;
            border-radius: 4px;
            border: 1px solid #ccc;
            font-size: 16px;
        }

        input[type="text"]::placeholder,
        input[type="password"]::placeholder {
            color: #999;
        }

        button {
            padding: 10px;
            background-color: #4CAF50;
            border: none;
            border-radius: 4px;
            color: white;
            font-size: 16px;
            cursor: pointer;
        }

        button:hover {
            background-color: #45a049;
        }
    </style>
</head>

<body>

    @auth

    <p>Congrats you have logged in!</p>

    @else
    <div class="container" id="box2">
        <h1>Register</h1>

        <form action="/register" method="POST">
    @csrf
    <input type="text" name="name" placeholder="Name" >
    <input type="text" name="email" placeholder="Email" >
    <input type="password" name="password" placeholder="Password" >
    <button type="submit">Register</button>
</form>

    </div>

    @endauth

</body>

</html>
