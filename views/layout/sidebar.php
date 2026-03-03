<?php
$current = basename($_SERVER['PHP_SELF']);
?>

<div class="sidebar">

    <h2>CMS Panel</h2>

    <a href="DashboardController.php"
       class="<?= $current == 'DashboardController.php' ? 'active' : '' ?>">
        <i class="fa-solid fa-chart-line"></i> Dashboard
    </a>

    <a href="DepartmentController.php"
       class="<?= $current == 'DepartmentController.php' ? 'active' : '' ?>">
        <i class="fa-solid fa-building"></i> Departments
    </a>

    <a href="FacultyController.php"
       class="<?= $current == 'FacultyController.php' ? 'active' : '' ?>">
        <i class="fa-solid fa-chalkboard-user"></i> Faculty
    </a>

    <a href="StudentController.php"
       class="<?= $current == 'StudentController.php' ? 'active' : '' ?>">
        <i class="fa-solid fa-user-graduate"></i> Students
    </a>

    <a href="SubjectController.php"
       class="<?= $current == 'SubjectController.php' ? 'active' : '' ?>">
        <i class="fa-solid fa-book"></i> Subjects
    </a>

    <a href="FacultySubjectController.php"
       class="<?= $current == 'FacultySubjectController.php' ? 'active' : '' ?>">
        <i class="fa-solid fa-link"></i> Faculty Subject
    </a>

    <a href="SyllabusController.php"
       class="<?= $current == 'SyllabusController.php' ? 'active' : '' ?>">
        <i class="fa-solid fa-file-lines"></i> Syllabus
    </a>

    <a href="NotesController.php"
       class="<?= $current == 'NotesController.php' ? 'active' : '' ?>">
        <i class="fa-solid fa-note-sticky"></i> Notes
    </a>

    <a href="AttendanceController.php"
       class="<?= $current == 'AttendanceController.php' ? 'active' : '' ?>">
        <i class="fa-solid fa-calendar-check"></i> Attendance
    </a>

    <a href="FacultyLeaveController.php"
       class="<?= $current == 'FacultyLeaveController.php' ? 'active' : '' ?>">
        <i class="fa-solid fa-plane-departure"></i> Leave
    </a>

    <a href="../logout.php">
        <i class="fa-solid fa-right-from-bracket"></i> Logout
    </a>

</div>

<div class="main">