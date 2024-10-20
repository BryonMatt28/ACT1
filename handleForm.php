<?php 
session_start();

// Function to safely redirect
function safeRedirect($url) {
    header('Location: ' . $url);
    exit();
}

// Check if someone is already logged in
if (isset($_SESSION['firstName']) && isset($_POST['submitBtn'])) {
    $_SESSION['error'] = "You need to logout first in order to login with another account.";
    safeRedirect('indexs.php');
}

// Handle login form submission
if (isset($_POST['submitBtn'])) {
    $firstName = trim($_POST['firstName']);
    $password = $_POST['password'];

    // Basic validation
    if (empty($firstName) || empty($password)) {
        $_SESSION['error'] = "Both first name and password are required.";
        safeRedirect('index.php');
    }

    // Here you would typically check against a database
    // For demonstration, we'll just set the session variables
    $_SESSION['firstName'] = htmlspecialchars($firstName);
    $_SESSION['password'] = password_hash($password, PASSWORD_DEFAULT);

    safeRedirect('index.php');
}

// Handle registration form submission
if (isset($_POST['regBtn'])) {
    $username = trim($_POST['username']);
    $password = $_POST['password'];

    // Basic validation
    if (empty($username) || empty($password)) {
        $_SESSION['error'] = "Both username and password are required.";
        safeRedirect('register.php');
    }

    // Here you would typically insert the new user into a database
    // For demonstration, we'll just set the session variables
    $_SESSION['firstName'] = htmlspecialchars($username);
    $_SESSION['password'] = password_hash($password, PASSWORD_DEFAULT);

    $_SESSION['success'] = "Registration successful! You are now logged in.";
    safeRedirect('index.php');
}

// If no form was submitted, redirect to index
safeRedirect('index.php');