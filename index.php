<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login System</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f2f5;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
        }
        .container {
            background-color: white;
            padding: 2rem;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 350px;
        }
        h1, h2 {
            color: #1877f2;
            margin-bottom: 1rem;
        }
        .user-info {
            margin-bottom: 1rem;
            color: #606770;
        }
        .error-message {
            color: #ff0000;
            margin-bottom: 1rem;
        }
        form {
            margin-bottom: 1rem;
        }
        input[type="text"],
        input[type="password"] {
            width: 100%;
            padding: 0.5rem;
            margin-bottom: 0.5rem;
            border: 1px solid #dddfe2;
            border-radius: 6px;
            font-size: 1rem;
        }
        input[type="submit"] {
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
        input[type="submit"]:hover {
            background-color: #166fe5;
        }
        .links {
            text-align: center;
            margin-top: 1rem;
        }
        .links a {
            color: #1877f2;
            text-decoration: none;
            margin: 0 0.5rem;
        }
        .links a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Welcome</h1>

        <?php if(isset($_SESSION['firstName'])): ?>
            <div class="user-info">
                <h2>User logged in: <?php echo htmlspecialchars($_SESSION['firstName']); ?></h2>
            </div>
        <?php endif; ?>

        <?php
        if (isset($_SESSION['error'])) {
            echo "<p class='error-message'>" . htmlspecialchars($_SESSION['error']) . "</p>";
            unset($_SESSION['error']);
        }
        ?>

        <h2>Fill in the input fields below</h2>

        <form action="handleForm.php" method="POST">
            <input type="text" placeholder="First name here" name="firstName" required>
            <input type="password" placeholder="Password here" name="password" required>
            <input type="submit" value="Submit" name="submitBtn">
        </form>

        <div class="links">
            <?php if (isset($_SESSION['firstName'])): ?>
                <a href="unset.php">Logout</a>
            <?php else: ?>
                <a href="register.php">Register</a>
            <?php endif; ?>
        </div>
    </div>
</body>
</html>