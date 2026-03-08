<link rel="stylesheet" href="/CMS_project/Assets/css/modules.css">

<h2 class="page-title">Students List</h2>

<div class="table-wrapper">
<div class="top-bar">
<a href="StudentController.php?action=add" class="btn btn-add">
Add Student
</a>
</div>

<table class="table">

<tr>
<th>ID</th>
<th>Name</th>
<th>Email</th>
<th>Department</th>
<th>Semester</th>
<th>Actions</th>
</tr>

<?php while($row = $records->fetch_assoc()) { ?>

<tr>

<td><?= $row['student_id'] ?></td>

<td><?= $row['first_name']." ".$row['last_name'] ?></td>

<td><?= $row['email'] ?></td>

<td><?= $row['department_name'] ?></td>

<td><?= $row['semester'] ?></td>

<td>

<a href="StudentController.php?action=edit&id=<?= $row['student_id'] ?>"
class="btn btn-edit">
Edit
</a>

<a href="StudentController.php?action=delete&id=<?= $row['student_id'] ?>"
class="btn btn-delete"
onclick="return confirm('Are you sure?')">
Delete
</a>

</td>

</tr>

<?php } ?>

</table>