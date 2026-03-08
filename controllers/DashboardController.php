<?php
session_start();

if(!isset($_SESSION['admin'])){
    header("Location: ../index.php");
    exit();
}


require_once __DIR__.'/../config/database.php';

/* COUNT QUERIES */

$departmentCount = $conn->query("SELECT COUNT(*) as total FROM department")->fetch_assoc()['total'];

$facultyCount = $conn->query("SELECT COUNT(*) as total FROM faculty")->fetch_assoc()['total'];

$studentCount = $conn->query("SELECT COUNT(*) as total FROM student")->fetch_assoc()['total'];

$subjectCount = $conn->query("SELECT COUNT(*) as total FROM subject")->fetch_assoc()['total'];

$leaveCount = $conn->query("SELECT COUNT(*) as total FROM faculty_leave")->fetch_assoc()['total'];


/* LOAD VIEW */

require __DIR__.'/../views/layout/header.php';
require __DIR__.'/../views/layout/sidebar.php';
require __DIR__.'/../views/dashboard.php';
require __DIR__.'/../views/layout/footer.php';