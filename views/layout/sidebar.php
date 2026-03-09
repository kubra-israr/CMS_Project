<?php
$current = basename($_SERVER['PHP_SELF']);
?>

<div class="sidebar">

    <h2>CMS Panel</h2>

    <a href="DashboardController.php" class="<?= $current == 'DashboardController.php' ? 'active' : '' ?>">
        <i class="fa-solid fa-chart-line"></i>
        <span>Dashboard</span>
    </a>

    <a href="DepartmentController.php" class="<?= $current == 'DepartmentController.php' ? 'active' : '' ?>">
        <i class="fa-solid fa-building"></i>
        <span>Departments</span>
    </a>

    <a href="FacultyController.php" class="<?= $current == 'FacultyController.php' ? 'active' : '' ?>">
        <i class="fa-solid fa-chalkboard-user"></i>
        <span>Faculty</span>
    </a>

    <a href="StudentController.php" class="<?= $current == 'StudentController.php' ? 'active' : '' ?>">
        <i class="fa-solid fa-user-graduate"></i>
        <span>Students</span>
    </a>

    <a href="SubjectController.php" class="<?= $current == 'SubjectController.php' ? 'active' : '' ?>">
        <i class="fa-solid fa-book"></i>
        <span>Subjects</span>
    </a>

    <a href="FacultySubjectController.php" class="<?= $current == 'FacultySubjectController.php' ? 'active' : '' ?>">
        <i class="fa-solid fa-diagram-project"></i>
        <span>Faculty Subject</span>
    </a>

    <a href="SyllabusController.php" class="<?= $current == 'SyllabusController.php' ? 'active' : '' ?>">
        <i class="fa-solid fa-file-lines"></i>
        <span>Syllabus</span>
    </a>

    <a href="NotesController.php" class="<?= $current == 'NotesController.php' ? 'active' : '' ?>">
        <i class="fa-solid fa-note-sticky"></i>
        <span>Notes</span>
    </a>

    <a href="AttendanceController.php" class="<?= $current == 'AttendanceController.php' ? 'active' : '' ?>">
        <i class="fa-solid fa-calendar-check"></i>
        <span>Attendance</span>
    </a>

    <a href="FacultyLeaveController.php" class="<?= $current == 'FacultyLeaveController.php' ? 'active' : '' ?>">
        <i class="fa-solid fa-calendar-xmark"></i>
        <span>Leave</span>
    </a>

    <a href="../logout.php">
        <i class="fa-solid fa-right-from-bracket"></i>
        <span>Logout</span>
    </a>

</div>

<div class="main">