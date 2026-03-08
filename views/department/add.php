<link rel="stylesheet" href="/CMS_project/Assets/css/modules.css">

<h2 class="page-title">Add Department</h2>

<div class="form-wrapper">

<div class="form-card">

<form method="POST" action="../controllers/DepartmentController.php?action=create">

<label>Department Name</label>

<input type="text" name="department_name" placeholder="Enter Department Name" required>

<button type="submit" class="btn btn-submit">
Add Department
</button>

</form>

</div>

</div>

<div class="center-btn">
<a href="../controllers/DepartmentController.php" class="btn btn-add">
View Departments
</a>
</div>