<?php

$db_host = "localhost";
$db_user = "root";
$db_password = "root";
$db_db = "my_databasse";
$db_port = 8889;

$conn = new mysqli($db_host, $db_user, $db_password, $db_db, $db_port);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$conn->set_charset("utf8mb4");

?>