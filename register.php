<?php
require_once "modules/db.php";

if(!empty($_POST)) {
    $username = $_POST['username'];
    $phone = $_POST['phone'];
    $password = $_POST['password'];
    $confirm = $_POST['confirm'];

    if($confirm != $password) {
        echo "Password mismatch!";
    } else {
        $passwordHash = password_hash($password, PASSWORD_DEFAULT);

        $statement = $pdo->prepare("INSERT INTO users (username, phone, password) VALUES (:username, :phone, :passwordHash);");
        $statement->execute([
            "username" => $username,
            "phone" => $phone,
            "passwordHash" => $passwordHash,
            ]);
        header("Location: login.php");
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Register</title>
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

    .register-card {
        background: #fff;
        width: 100%;
        max-width: 360px;
        padding: 32px 28px;
        border-radius: 10px;
        box-shadow: 0 4px 20px rgba(0, 0, 0, 0.08);
    }

    .register-card h1 {
        font-size: 22px;
        text-align: center;
        margin-bottom: 6px;
        color: #1a1a1a;
    }

    .register-card p.subtitle {
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
        border-color: #28a745;
        box-shadow: 0 0 0 3px rgba(40, 167, 69, 0.15);
    }

    .btn {
        width: 100%;
        padding: 12px;
        background: #28a745;
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
        background: #218838;
    }

    .btn:active {
        background: #1e7e34;
    }

    .form-footer {
        text-align: center;
        font-size: 14px;
        color: #666;
        margin-top: 18px;
    }

    .form-footer a {
        color: #007bff;
        text-decoration: none;
    }

    .form-footer a:hover {
        text-decoration: underline;
    }
</style>
</head>
<body>

<form class="register-card" method="post" action="">
    <h1>Create Account</h1>
    <p class="subtitle">Sign up to get started</p>

    <div class="form-group">
        <label for="username">Username</label>
        <input type="text" id="username" name="username" required autocomplete="username">
    </div>

    <div class="form-group">
        <label for="phone">Phone</label>
        <input type="text" id="phone" name="phone" required autocomplete="phone">
    </div>

    <div class="form-group">
        <label for="password">Password</label>
        <input type="password" id="password" name="password" required autocomplete="new-password">
    </div>

    <div class="form-group">
        <label for="confirm">Confirm Password</label>
        <input type="password" id="confirm" name="confirm" required autocomplete="new-password">
    </div>

    <button type="submit" class="btn">Sign Up</button>

    <p class="form-footer">Already have an account? <a href="login.php">Log in</a></p>
</form>

</body>
</html>
