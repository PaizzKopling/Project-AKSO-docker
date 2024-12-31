<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f9;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .login-container {
            background: #ffffff;
            padding: 2rem;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 400px;
        }

        .login-container h1 {
            text-align: center;
            margin-bottom: 1.5rem;
            color: #333;
        }

        .login-container label {
            font-size: 14px;
            color: #555;
        }

        .login-container input {
            width: 100%;
            padding: 10px;
            margin: 8px 0 16px;
            border: 1px solid #ddd;
            border-radius: 4px;
            font-size: 14px;
        }

        .login-container button {
            width: 100%;
            padding: 10px;
            background-color: #4CAF50;
            border: none;
            color: #fff;
            font-size: 16px;
            border-radius: 4px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .login-container button:hover {
            background-color: #45a049;
        }

        .login-container .error {
            color: red;
            font-size: 14px;
            text-align: center;
            margin-bottom: 1rem;
        }

        .login-container .success {
            color: green;
            font-size: 14px;
            text-align: center;
            margin-bottom: 1rem;
        }
    </style>
</head>
<body>
    <div class="login-container">
        <h1>Login</h1>
        <?php
        if (isset($_GET['error'])) {
            echo "<div class='error'>" . htmlspecialchars($_GET['error']) . "</div>";
        }
        if (isset($_GET['success'])) {
            echo "<div class='success'>" . htmlspecialchars($_GET['success']) . "</div>";
        }
        ?>
        <form action="login.php" method="post">
            <label for="username">Username:</label>
            <input type="text" id="username" name="username" placeholder="Enter your username" required>

            <label for="password">Password:</label>
            <input type="password" id="password" name="password" placeholder="Enter your password" required>

            <button type="submit">Login</button>
        </form>
    </div>
</body>
</html>
