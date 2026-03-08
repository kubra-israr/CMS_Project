<link rel="stylesheet" href="/CMS_project/Assets/css/modules.css">

<div class="main">

<h2 class="page-title center-title">Department List</h2>



<div class="table-wrapper">
<div class="top-bar">
<a href="../controllers/DepartmentController.php?action=add" class="btn btn-add">
Add Department
</a>
</div>
<table class="table">

<thead>
<tr>
<th>ID</th>
<th>Department Name</th>
<th>Actions</th>
</tr>
</thead>

<tbody>

<?php foreach($departments as $row){ ?>

<tr>

<td><?= $row['department_id'] ?></td>
<td><?= $row['department_name'] ?></td>

<td>

<a href="../controllers/DepartmentController.php?action=edit&id=<?= $row['department_id'] ?>" class="btn btn-edit">
Edit
</a>

<a href="../controllers/DepartmentController.php?action=delete&id=<?= $row['department_id'] ?>" 
class="btn btn-delete"
onclick="return confirm('Are you sure?')">
Delete
</a>

</td>

</tr>

<?php } ?>

</tbody>

</table>

</div>

</div>