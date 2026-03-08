
<link rel="stylesheet" href="/CMS_project/assets/css/modules.css">

<h2 class="page-title">Faculty - Subject Mapping</h2>



<div class="table-wrapper">
    <div class="top-bar">

<a href="FacultySubjectController.php?action=add" class="btn btn-add">
<i class="fa-solid fa-user"></i> Assign New
</a>
</div>
<table class="table">

<tr>
<th>ID</th>
<th>Faculty</th>
<th>Subject</th>
<th>Actions</th>
</tr>

<?php while($row = $records->fetch_assoc()) { ?>

<tr>

<td><?= $row['fs_id'] ?></td>

<td><?= $row['first_name'] . " " . $row['last_name'] ?></td>

<td><?= $row['subject_name'] ?></td>

<td>

<a href="FacultySubjectController.php?action=edit&id=<?= $row['fs_id'] ?>"
class="btn btn-edit">
Edit
</a>

<a href="FacultySubjectController.php?action=delete&id=<?= $row['fs_id'] ?>"
class="btn btn-delete"
onclick="return confirm('Are you sure?')">
Delete
</a>

</td>

</tr>

<?php } ?>

</table>

</div>
