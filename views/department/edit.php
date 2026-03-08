<link rel="stylesheet" href="/CMS_project/Assets/css/modules.css">

<div class="main">

<h2 class="page-title">Edit Department</h2>

<div class="form-wrapper">

<div class="form-card">

<form method="POST" action="../controllers/DepartmentController.php?action=update">

<input type="hidden" name="department_id" value="<?= $department['department_id'] ?>">

<input 
type="text"
name="department_name"
value="<?= $department['department_name'] ?>"
required
>

<button type="submit" class="btn btn-submit">
Update Department
</button>

</form>

</div>

</div>

<div class="center-btn">

<a href="../controllers/DepartmentController.php" class="btn btn-add">
Back to Departments
</a>

</div>

</div>