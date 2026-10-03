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

  <!-- Header / Navbar -->
  <header style="display:flex; justify-content:space-between; align-items:center; padding:16px 40px; background:#111; color:#fff;">
    <div style="font-size:22px; font-weight:bold;">🛍️ ShopEasy</div>
    <nav style="display:flex; gap:24px;">
      <a href="#" style="color:#fff; text-decoration:none;">Home</a>
      <a href="#" style="color:#fff; text-decoration:none;">Products</a>
      <a href="#" style="color:#fff; text-decoration:none;">Deals</a>
      <a href="#" style="color:#fff; text-decoration:none;">Contact</a>
    </nav>
    <div>
      <a href="#" style="color:#fff; text-decoration:none;">🛒 Cart (0)</a>
    </div>
  </header>

  <!-- Hero Section -->
  <section style="text-align:center; padding:80px 20px; background:linear-gradient(135deg,#f5f7fa,#c3cfe2);">
    <h1 style="font-size:48px; margin-bottom:16px;">Big Summer Sale</h1>
    <p style="font-size:18px; color:#555; margin-bottom:24px;">Up to 50% off on all products. Limited time only!</p>
    <a href="#" style="display:inline-block; padding:14px 32px; background:#111; color:#fff; text-decoration:none; border-radius:6px; font-weight:bold;">Shop Now</a>
  </section>

  <!-- Product Grid -->
  <section style="padding:60px 40px;">
    <h2 style="text-align:center; margin-bottom:40px;">Featured Products</h2>
    <div style="display:grid; grid-template-columns:repeat(auto-fit, minmax(220px, 1fr)); gap:24px; max-width:1100px; margin:0 auto;">

      <!-- Product Card -->
      <div style="border:1px solid #eee; border-radius:8px; padding:16px; text-align:center; box-shadow:0 2px 6px rgba(0,0,0,0.05);">
        <img src="https://via.placeholder.com/200" alt="Product" style="width:100%; border-radius:6px; margin-bottom:12px;">
        <h3 style="margin:8px 0;">Wireless Headphones</h3>
        <p style="color:#888; margin:4px 0;">High-quality sound</p>
        <p style="font-weight:bold; color:#111;">$59.99</p>
        <button style="margin-top:8px; padding:10px 20px; background:#111; color:#fff; border:none; border-radius:6px; cursor:pointer;">Add to Cart</button>
      </div>

      <div style="border:1px solid #eee; border-radius:8px; padding:16px; text-align:center; box-shadow:0 2px 6px rgba(0,0,0,0.05);">
        <img src="https://via.placeholder.com/200" alt="Product" style="width:100%; border-radius:6px; margin-bottom:12px;">
        <h3 style="margin:8px 0;">Smart Watch</h3>
        <p style="color:#888; margin:4px 0;">Track your fitness</p>
        <p style="font-weight:bold; color:#111;">$99.99</p>
        <button style="margin-top:8px; padding:10px 20px; background:#111; color:#fff; border:none; border-radius:6px; cursor:pointer;">Add to Cart</button>
      </div>

      <div style="border:1px solid #eee; border-radius:8px; padding:16px; text-align:center; box-shadow:0 2px 6px rgba(0,0,0,0.05);">
        <img src="https://via.placeholder.com/200" alt="Product" style="width:100%; border-radius:6px; margin-bottom:12px;">
        <h3 style="margin:8px 0;">Backpack</h3>
        <p style="color:#888; margin:4px 0;">Durable & stylish</p>
        <p style="font-weight:bold; color:#111;">$39.99</p>
        <button style="margin-top:8px; padding:10px 20px; background:#111; color:#fff; border:none; border-radius:6px; cursor:pointer;">Add to Cart</button>
      </div>

      <div style="border:1px solid #eee; border-radius:8px; padding:16px; text-align:center; box-shadow:0 2px 6px rgba(0,0,0,0.05);">
        <img src="https://via.placeholder.com/200" alt="Product" style="width:100%; border-radius:6px; margin-bottom:12px;">
        <h3 style="margin:8px 0;">Sunglasses</h3>
        <p style="color:#888; margin:4px 0;">UV protection</p>
        <p style="font-weight:bold; color:#111;">$24.99</p>
        <button style="margin-top:8px; padding:10px 20px; background:#111; color:#fff; border:none; border-radius:6px; cursor:pointer;">Add to Cart</button>
      </div>

    </div>
  </section>

  <!-- Footer -->
  <footer style="text-align:center; padding:24px; background:#111; color:#aaa; margin-top:40px;">
    <p>&copy; 2025 ShopEasy. All rights reserved.</p>
  </footer>

</body>
</html>