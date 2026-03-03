<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="../assets/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
</head>
<body>

<div class="topbar">
    <div>College Management System</div>
    <div>
        Welcome, <?= $_SESSION['admin'] ?> |
        <a href="../logout.php">Logout</a>
    </div>
</div>

<div class="layout">