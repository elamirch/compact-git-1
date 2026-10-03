<?php
session_start();
require_once "modules/db.php";

if(!empty($_POST)) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $statement = $pdo->prepare("SELECT password FROM users WHERE username = :username");
    $statement->execute(['username' => $username]);

    $result = $statement->fetchAll();
    $passwordHash = $result[0][0];
    
    if(password_verify($password, $passwordHash)) {
        $_SESSION['username'] = $username;
        header("Location: index.php");
    } else {
        echo "Invalid credentials";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Login</title>
<style>
    * {
        box-sizing: border-box;
        margin: 0;
        padding: 0;
    }

    body {
        font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Arial, sans-serif;
        background: #f0f2f5;
        display: flex;
        align-items: center;
        justify-content: center;
        min-height: 100vh;
        padding: 20px;
    }

    .login-card {
        background: #fff;
        width: 100%;
        max-width: 360px;
        padding: 32px 28px;
        border-radius: 10px;
        box-shadow: 0 4px 20px rgba(0, 0, 0, 0.08);
    }

    .login-card h1 {
        font-size: 22px;
        text-align: center;
        margin-bottom: 6px;
        color: #1a1a1a;
    }

    .login-card p.subtitle {
        text-align: center;
        color: #888;
        font-size: 14px;
        margin-bottom: 24px;
    }

    .form-group {
        margin-bottom: 16px;
    }

    .form-group label {
        display: block;
        font-size: 14px;
        font-weight: 600;
        color: #333;
        margin-bottom: 6px;
    }

    .form-group input {
        width: 100%;
        padding: 11px 13px;
        border: 1px solid #ccc;
        border-radius: 6px;
        font-size: 15px;
        outline: none;
        transition: border-color 0.2s, box-shadow 0.2s;
    }

    .form-group input:focus {
        border-color: #007bff;
        box-shadow: 0 0 0 3px rgba(0, 123, 255, 0.15);
    }

    .btn {
        width: 100%;
        padding: 12px;
        background: #007bff;
        color: #fff;
        border: none;
        border-radius: 6px;
        font-size: 16px;
        font-weight: 600;
        cursor: pointer;
        margin-top: 8px;
        transition: background 0.2s;
    }

    .btn:hover {
        background: #0069d9;
    }

    .btn:active {
        background: #005cbf;
    }
</style>
</head>
<body>

<form class="login-card" method="post" action="login.php">
    <h1>Sign In</h1>
    <p class="subtitle">Welcome back</p>

    <div class="form-group">
        <label for="username">Username</label>
        <input type="text" id="username" name="username" required autocomplete="username">
    </div>

    <div class="form-group">
        <label for="password">Password</label>
        <input type="password" id="password" name="password" required autocomplete="current-password">
    </div>

    <button type="submit" class="btn">Log In</button>

    <p class="form-footer">Don't have an account? <a href="register.php">Register</a></p>
</form>

</body>
</html>