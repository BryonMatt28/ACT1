<?php 
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
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
        .register-container {
            background-color: white;
            padding: 2rem;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 350px;
        }
        h1 {
            text-align: center;
            color: #1877f2;
            margin-bottom: 1.5rem;
        }
        .fields {
            margin-bottom: 1rem;
        }
        .fields input {
            width: 100%;
            padding: 0.5rem;
            margin-bottom: 0.5rem;
            border: 1px solid #dddfe2;
            border-radius: 6px;
            font-size: 1rem;
        }
        #submitBtn {
            width: 100%;
            padding: 0.5rem;
            background-color: #42b72a;
            color: white;
            border: none;
            border-radius: 6px;
            font-size: 1.1rem;
            cursor: pointer;
            transition: background-color 0.3s;
        }
        #submitBtn:hover {
            background-color: #36a420;
        }
        .login-link {
            text-align: center;
            margin-top: 1rem;
        }
        .login-link a {
            color: #1877f2;
            text-decoration: none;
        }
        .login-link a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <div class="register-container">
        <h1>Register</h1>
        <form action="handleForm.php" method="POST">
            <div class="fields">
                <input type="text" placeholder="Username" name="username" required>
                <input type="password" placeholder="Password" name="password" required>
                <input type="submit" value="Register" id="submitBtn" name="regBtn">
            </div>
        </form>
        <div class="login-link">
            Already have an account? <a href="login.php">Login</a>
        </div>
    </div>
</body>
</html>