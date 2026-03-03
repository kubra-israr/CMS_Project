<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
    <title>Admin Login</title>
    <link rel="stylesheet" href="../../assets/style.css">
</head>
<body>

<div class="login-box">
    <h2>Admin Login</h2>

    <?php if(isset($_GET['error'])) echo "<p class='error'>Invalid Credentials</p>"; ?>

    <form method="POST" action="../../controllers/AuthController.php">
        <input type="text" name="username" placeholder="Username" required><br><br>
        <input type="password" name="password" placeholder="Password" required><br><br>
        <button type="submit">Login</button>
    </form>
</div>

</body>
</html>