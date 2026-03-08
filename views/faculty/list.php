<link rel="stylesheet" href="/CMS_project/Assets/css/modules.css">


<div class="main">

<h2 class="page-title">Faculty List</h2>


</div>

<div class="table-wrapper">
<div class="top-bar">
<a href="FacultyController.php?action=add" class="btn btn-add">
Add Faculty
</a>
</div>
<table class="table">

<thead>
<tr>
<th>ID</th>
<th>Name</th>
<th>Email</th>
<th>Department</th>
<th>Designation</th>
<th>Actions</th>
</tr>
</thead>

<tbody>

<?php while($row = $faculties->fetch_assoc()) { ?>

<tr>

<td><?= $row['faculty_id'] ?></td>

<td><?= $row['first_name'] . " " . $row['last_name'] ?></td>

<td><?= $row['email'] ?></td>

<td><?= $row['department_name'] ?></td>

<td><?= $row['designation'] ?></td>

<td>

<a href="FacultyController.php?action=edit&id=<?= $row['faculty_id'] ?>" 
class="btn btn-edit">
Edit
</a>

<a href="FacultyController.php?action=delete&id=<?= $row['faculty_id'] ?>" 
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