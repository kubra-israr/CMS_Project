<?php
session_start();

if (!isset($_SESSION['admin'])) {
    header("Location: ../views/auth/login.php");
    exit();
}

require_once __DIR__ . '/../config/database.php';

$totalDepartments = $conn->query("SELECT COUNT(*) as total FROM department")->fetch_assoc()['total'];
$totalFaculty = $conn->query("SELECT COUNT(*) as total FROM faculty")->fetch_assoc()['total'];
$totalStudents = $conn->query("SELECT COUNT(*) as total FROM student")->fetch_assoc()['total'];
$totalSubjects = $conn->query("SELECT COUNT(*) as total FROM subject")->fetch_assoc()['total'];
$totalLeaves = $conn->query("SELECT COUNT(*) as total FROM faculty_leave")->fetch_assoc()['total'];

require __DIR__ . '/../views/layout/header.php';
require __DIR__ . '/../views/layout/sidebar.php';
require __DIR__ . '/../views/dashboard.php';
require __DIR__ . '/../views/layout/footer.php';

require_once __DIR__ . '/../models/DepartmentModel.php';
require_once __DIR__ . '/../models/FacultyModel.php';
require_once __DIR__ . '/../models/StudentModel.php';
require_once __DIR__ . '/../models/SubjectModel.php';
require_once __DIR__ . '/../models/FacultyLeaveModel.php';

$departmentModel = new DepartmentModel();
$facultyModel = new FacultyModel();
$studentModel = new StudentModel();
$subjectModel = new SubjectModel();
$leaveModel = new FacultyLeaveModel();

$departmentCount = $departmentModel->getAll()->num_rows;
$facultyCount = $facultyModel->getAll()->num_rows;
$studentCount = $studentModel->getAll()->num_rows;
$subjectCount = $subjectModel->getAll()->num_rows;
$leaveCount = $leaveModel->getAll()->num_rows;
?>