<link rel="stylesheet" href="/CMS_project/assets/css/modules.css">

<h2 class="page-title">Subject List</h2>



</div>

<div class="table-wrapper">
    <div class="top-bar">

<a href="SubjectController.php?action=add" class="btn btn-add">
Add Subject
</a>
</div>
<table class="table">

<tr>
<th>ID</th>
<th>Subject Name</th>
<th>Department</th>
<th>Semester</th>
<th>Actions</th>
</tr>

<?php while($row = $subjects->fetch_assoc()) { ?>

<tr>

<td><?= $row['subject_id'] ?></td>

<td><?= $row['subject_name'] ?></td>

<td><?= $row['department_name'] ?></td>

<td><?= $row['semester'] ?></td>

<td>

<a href="SubjectController.php?action=edit&id=<?= $row['subject_id'] ?>"
class="btn btn-edit">
Edit
</a>

<a href="SubjectController.php?action=delete&id=<?= $row['subject_id'] ?>"
class="btn btn-delete"
onclick="return confirm('Are you sure?')">
Delete
</a>

</td>

</tr>

<?php } ?>

</table>

</div>