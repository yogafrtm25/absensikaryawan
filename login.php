<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Admin</title>
    <link rel="icon" href="img/logokaryawan.png" type="image/png">
    <style>
        body {
            font-family: 'Roboto', sans-serif;
            background: linear-gradient(to right, #4caf50, #2196f3);
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .wrapper {
            background: rgba(255, 255, 255, 0.9);
            padding: 40px;
            border-radius: 10px;
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
            text-align: center;
        }
        h1 {
            margin-bottom: 30px;
            font-size: 2.5em;
            color: #333;
        }
        .main-agileinfo {
            width: 100%;
        }
        .agileits-top {
            margin: 0 auto;
        }
        .agileits-top form {
            margin: 20px 0;
        }
        input[type="text"], input[type="password"] {
            width: 80%;
            padding: 15px;
            margin: 10px 0;
            border: none;
            border-radius: 5px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            font-size: 1em;
        }
        input[type="submit"] {
            width: 85%;
            padding: 15px;
            margin-top: 20px;
            background: #4caf50;
            border: none;
            border-radius: 5px;
            color: white;
            font-size: 1.2em;
            cursor: pointer;
            transition: background 0.3s ease;
        }
        input[type="submit"]:hover {
            background: #2196f3;
        }
        .colorlibcopy-agile {
            margin-top: 20px;
        }
        .colorlibcopy-agile p {
            color: #333;
        }
    </style>
</head>
<body>
    <div class="main-w3layouts wrapper">
        <h1>Login Admin</h1>
        <div class="main-agileinfo">
            <div class="agileits-top">
                <form action="proses_login.php" method="post">
                    <input class="text" type="text" name="username" placeholder="Username" required="">
                    <input class="text" type="password" name="password" placeholder="Password" required="">
                    <input type="submit" value="Login">
                </form>
            </div>
        </div>
        <div class="colorlibcopy-agile">
            <p>© 2024 Trio CYB</p>
        </div>
    </div>
</body>
</html>
