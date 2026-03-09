<?php

require_once __DIR__ . '/config/database.php';

if($conn->connect_error){
    die("Database connection failed: " . $conn->connect_error);
}

// agar connection successful hai
header("Location: views/auth/login.php");
exit();

?>