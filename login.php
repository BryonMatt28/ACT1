<?php 
session_start();

$welcomeMessage = '';
if(isset($_SESSION['welcomeMessage']) && !isset($_SESSION['username'])) {
    $welcomeMessage = $_SESSION['welcomeMessage'];
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
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
        .login-container {
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
        .welcome-message {
            text-align: center;
            color: #42b72a;
            margin-bottom: 1rem;
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
        #loginBtn {
            width: 100%;
            padding: 0.5rem;
            background-color: #1877f2;
            color: white;
            border: none;
            border-radius: 6px;
            font-size: 1.1rem;
            cursor: pointer;
            transition: background-color 0.3s;
        }
        #loginBtn:hover {
            background-color: #166fe5;
        }
        .register-link {
            text-align: center;
            margin-top: 1rem;
        }
        .register-link a {
            color: #1877f2;
            text-decoration: none;
        }
        .register-link a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <div class="login-container">
        <h1>Login</h1>
        <?php if ($welcomeMessage): ?>
            <p class="welcome-message"><?php echo htmlspecialchars($welcomeMessage); ?></p>
        <?php endif; ?>
        <form action="handleForm.php" method="POST">
            <div class="fields">
                <input type="text" placeholder="Username" name="username" required>
                <input type="password" placeholder="Password" name="password" required>
                <input type="submit" value="Login" id="loginBtn" name="loginBtn">
            </div>
        </form>
        <div class="register-link">
            <a href="register.php">Register</a>
        </div>
    </div>
</body>
</html>