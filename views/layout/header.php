<?php
if(session_status() === PHP_SESSION_NONE){
    session_start();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>CMS</title>
    <link rel="stylesheet" href="/CMS_project/assets/css/modules.css">
    <link rel="stylesheet" href="/CMS_project/assets/css/dashboard.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap" rel="stylesheet">
</head>
<body>

<div class="header">
    <h1>College Management System</h1>

    <div class="header-right">
        Welcome, <?= htmlspecialchars($_SESSION['admin']['username'] ?? 'Admin') ?>

        <?= date("d M Y") ?> |

        <span id="live-clock"></span>

        <a href="/CMS_project/logout.php">
            <i class="fa-solid fa-right-from-bracket"></i> Logout
        </a>
    </div>
</div>

<div class="wrapper">