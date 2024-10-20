<?php
session_start();
session_unset();
session_destroy();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Logout</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f2f5;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .logout-container {
            background-color: white;
            padding: 2rem;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 350px;
            text-align: center;
        }
        h1 {
            color: #1877f2;
            margin-bottom: 1rem;
        }
        p {
            color: #606770;
            margin-bottom: 1.5rem;
        }
        .login-button {
            background-color: #1877f2;
            color: white;
            border: none;
            padding: 10px 20px;
            border-radius: 6px;
            font-size: 1rem;
            cursor: pointer;
            transition: background-color 0.3s;
        }
        .login-button:hover {
            background-color: #166fe5;
        }
    </style>
</head>
<body>
    <div class="logout-container">
        <h1>Logged Out</h1>
        <p>You have been successfully logged out.</p>
        <a href="index.php" class="login-button">Go to Login Page</a>
    </div>
</body>
</html>