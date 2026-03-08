<link rel="stylesheet" href="/CMS_project/Assets/css/modules.css">

<h2 class="page-title">Faculty Leave Applications</h2>

<div class="table-wrapper">
<div class="top-bar">

<a href="FacultyLeaveController.php?action=add" class="btn btn-add">
Apply Leave
</a>

</div>



<table class="table">

<tr>
<th>ID</th>
<th>Faculty</th>
<th>Type</th>
<th>From</th>
<th>To</th>
<th>Status</th>
<th>Actions</th>
</tr>

<?php while($row = $records->fetch_assoc()) { ?>

<tr>

<td><?= $row['leave_id'] ?></td>

<td><?= $row['first_name'] . " " . $row['last_name'] ?></td>

<td><?= $row['leave_type'] ?></td>

<td><?= $row['from_date'] ?></td>

<td><?= $row['to_date'] ?></td>

<td>
<span class="status <?= strtolower($row['status']) ?>">
<?= $row['status'] ?>
</span>
</td>

<td>

<a href="FacultyLeaveController.php?action=edit&id=<?= $row['leave_id'] ?>"
class="btn btn-edit">
Edit
</a>

<a href="FacultyLeaveController.php?action=delete&id=<?= $row['leave_id'] ?>"
class="btn btn-delete"
onclick="return confirm('Are you sure?')">
Delete
</a>

</td>



</tr>

<?php } ?>

</table>