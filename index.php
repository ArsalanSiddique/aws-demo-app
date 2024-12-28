<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to PHP App</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f5f5f5;
            color: #333;
            text-align: center;
            margin: 0;
            padding: 0;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
        }

        h1 {
            color: #3498db;
            font-size: 50px;
            margin-bottom: 20px;
        }

        .message {
            font-size: 24px;
            font-weight: bold;
            color: #2ecc71;
            margin-bottom: 20px;
        }

        .php-info {
            background-color: #ffffff;
            border-radius: 10px;
            padding: 20px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            width: 80%;
            margin-top: 30px;
            overflow-y: scroll;
            max-height: 400px;
        }

        footer {
            margin-top: 30px;
            color: #888;
            font-size: 14px;
        }

        footer a {
            color: #3498db;
            text-decoration: none;
        }

        footer a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <h1>Welcome to My Awesome PHP App</h1>
    <div class="message">PHP ka Pakistan - Feeling Proud!</div>
    <div class="php-info">
        <?php
            echo "<p><b>PHP Version: " . phpversion() . "</b></p>";
            echo "<p><b>Current Date and Time: </b>" . date("Y-m-d H:i:s") . "</p>";
            echo "<p><b>Your Server Info:</b></p>";
            echo "<pre>" . phpinfo() . "</pre>";
        ?>
    </div>
    <footer>
        <p>Made with ❤️ by <a href="#" target="_blank">ARSALAN</a></p>
    </footer>
</body>
</html>
