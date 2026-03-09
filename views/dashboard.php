<link rel="stylesheet" href="/CMS_project/assets/css/dashboard.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">

<div class="dashboard-page">
    <div class="dashboard-header">
        <div>
            <h2 class="dashboard-title">Dashboard Overview</h2>
            <p class="dashboard-subtitle">Welcome back! Here's what's happening in your college management system.</p>
        </div>

        <div class="dashboard-date">
            <i class="fa-regular fa-calendar-days"></i>
            <span><?= date("d M Y") ?></span>
        </div>
    </div>

    <div class="stats-grid">

<a href="/CMS_project/controllers/DepartmentController.php" class="stat-card-link">
<div class="stat-card card-department">
<div class="stat-icon">
<i class="fa-solid fa-building"></i>
</div>
<div class="stat-content">
<h3><?= $departmentCount ?></h3>
<p>Total Departments</p>
</div>
</div>
</a>

<a href="/CMS_project/controllers/FacultyController.php" class="stat-card-link">
<div class="stat-card card-faculty">
<div class="stat-icon">
<i class="fa-solid fa-chalkboard-user"></i>
</div>
<div class="stat-content">
<h3><?= $facultyCount ?></h3>
<p>Total Faculty</p>
</div>
</div>
</a>

<a href="/CMS_project/controllers/StudentController.php" class="stat-card-link">
<div class="stat-card card-student">
<div class="stat-icon">
<i class="fa-solid fa-user-graduate"></i>
</div>
<div class="stat-content">
<h3><?= $studentCount ?></h3>
<p>Total Students</p>
</div>
</div>
</a>

<a href="/CMS_project/controllers/SubjectController.php" class="stat-card-link">
<div class="stat-card card-subject">
<div class="stat-icon">
<i class="fa-solid fa-book-open"></i>
</div>
<div class="stat-content">
<h3><?= $subjectCount ?></h3>
<p>Total Subjects</p>
</div>
</div>
</a>

<a href="/CMS_project/controllers/FacultyLeaveController.php" class="stat-card-link">
<div class="stat-card card-leave">
<div class="stat-icon">
<i class="fa-solid fa-calendar-xmark"></i>
</div>
<div class="stat-content">
<h3><?= $leaveCount ?></h3>
<p>Leave Requests</p>
</div>
</div>
</a>

</div>

    <div class="dashboard-panels">
        <div class="panel panel-large">
            <div class="panel-header">
                <h3>Quick Access</h3>
                <span>Manage core modules</span>
            </div>

            <div class="quick-links">
                <a href="/CMS_project/controllers/DepartmentController.php" class="quick-link">
                    <i class="fa-solid fa-building"></i>
                    <span>Departments</span>
                </a>

                <a href="/CMS_project/controllers/FacultyController.php" class="quick-link">
                    <i class="fa-solid fa-chalkboard-user"></i>
                    <span>Faculty</span>
                </a>

                <a href="/CMS_project/controllers/StudentController.php" class="quick-link">
                    <i class="fa-solid fa-user-graduate"></i>
                    <span>Students</span>
                </a>

                <a href="/CMS_project/controllers/SubjectController.php" class="quick-link">
                    <i class="fa-solid fa-book"></i>
                    <span>Subjects</span>
                </a>

                <a href="/CMS_project/controllers/NotesController.php" class="quick-link">
                    <i class="fa-solid fa-note-sticky"></i>
                    <span>Notes</span>
                </a>

                <a href="/CMS_project/controllers/SyllabusController.php" class="quick-link">
                    <i class="fa-solid fa-file-lines"></i>
                    <span>Syllabus</span>
                </a>
            </div>
        </div>

        <div class="panel panel-small">
            <div class="panel-header">
                <h3>System Summary</h3>
                <span>Current records</span>
            </div>

            <div class="summary-list">
                <div class="summary-item">
                    <span>Departments</span>
                    <strong><?= $departmentCount ?></strong>
                </div>
                <div class="summary-item">
                    <span>Faculty Members</span>
                    <strong><?= $facultyCount ?></strong>
                </div>
                <div class="summary-item">
                    <span>Students</span>
                    <strong><?= $studentCount ?></strong>
                </div>
                <div class="summary-item">
                    <span>Subjects</span>
                    <strong><?= $subjectCount ?></strong>
                </div>
                <div class="summary-item">
                    <span>Leave Requests</span>
                    <strong><?= $leaveCount ?></strong>
                </div>
            </div>
        </div>
    </div>
</div>