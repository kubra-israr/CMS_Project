<?php
if(session_status() === PHP_SESSION_NONE){
    session_start();
}
?>

<!DOCTYPE html>
<html>

<head>

<title>CMS</title>

<link rel="stylesheet" href="/CMS_project/assets/css/style.css">
<link rel="stylesheet" href="/CMS_project/assets/css/modules.css">

<link rel="stylesheet"
href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">

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

<?php include 'sidebar.php'; ?>

<div class="main">
    