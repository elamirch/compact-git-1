<?php 
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Home</title>
<style>
    * {
        box-sizing: border-box;
        margin: 0;
        padding: 0;
    }

    body {
        font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Arial, sans-serif;
        background: #f0f2f5;
        color: #1a1a1a;
        min-height: 100vh;
    }

    nav {
        background: #fff;
        box-shadow: 0 2px 10px rgba(0, 0, 0, 0.06);
        padding: 16px 28px;
        display: flex;
        align-items: center;
        justify-content: space-between;
    }

    nav .brand {
        font-size: 18px;
        font-weight: 700;
        color: #007bff;
        text-decoration: none;
    }

    nav .links {
        display: flex;
        gap: 12px;
    }

    nav .links a {
        text-decoration: none;
        font-size: 15px;
        font-weight: 600;
        padding: 9px 16px;
        border-radius: 6px;
        transition: background 0.2s, color 0.2s;
    }

    nav .links a.login {
        color: #007bff;
        border: 1px solid #007bff;
    }

    nav .links a.login:hover {
        background: #007bff;
        color: #fff;
    }

    nav .links a.register {
        background: #28a745;
        color: #fff;
        border: 1px solid #28a745;
    }

    nav .links a.register:hover {
        background: #218838;
        border-color: #218838;
    }

    main {
        display: flex;
        align-items: center;
        justify-content: center;
        min-height: calc(100vh - 66px);
        text-align: center;
        padding: 20px;
    }

    main h1 {
        font-size: 28px;
        margin-bottom: 8px;
    }

    main p {
        color: #666;
        font-size: 15px;
    }
</style>
</head>
<body>

<nav>
    <a href="index.html" class="brand">MyApp</a>
    <div class="links">
        <?php if(!empty($_SESSION['username'])) {
            echo "Hi! " . $_SESSION['username'];
            echo '<a href="logout.php" class="login">Logout</a>';
        } else {
            echo '<a href="login.php" class="login">Login</a>';
            echo '<a href="register.php" class="register">Register</a>';
        }
        ?>
    </div>
</nav>

<main>
    <div>
        <h1>Welcome</h1>
        <p>Please log in or create an account to continue.</p>
    </div>
</main>

</body>
</html>