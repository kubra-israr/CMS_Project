<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
    <title>Admin Login</title>

    <link rel="stylesheet" href="../../assets/css/style.css">

    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">

</head>
<body>

<div class="login-wrapper">

    <div class="login-left">

        <h1 class="logo">CMS</h1>

        <h2>College Management System</h2>

        <p>
            Manage departments, students, faculty, syllabus,
            notes and attendance through a centralized dashboard.
        </p>

    </div>

    <div class="login-box">

        <h2>Admin Login</h2>

        <?php if(isset($_GET['error'])) echo "<p class='error'>Invalid Credentials</p>"; ?>

        <form method="POST" action="../../controllers/AuthController.php">

            <input type="text" name="username" placeholder="Username" required>

            <input type="password" name="password" placeholder="Password" required>

            <button type="submit">Login</button>

        </form>

    </div>

</div>

</body>
</html>