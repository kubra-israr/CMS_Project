<link rel="stylesheet" href="/CMS_project/assets/css/modules.css">

<h2 class="page-title">Attendance List</h2>

<div class="table-wrapper">

<div class="top-bar">
<a href="AttendanceController.php?action=add" class="btn btn-add">
Add Attendance
</a>
</div>

<table class="table">

<tr>
<th>ID</th>
<th>Faculty</th>
<th>Subject</th>
<th>Date</th>
<th>Total</th>
<th>Attended</th>
<th>Percentage</th>
<th>Actions</th>
</tr>

<?php if ($records && $records->num_rows > 0) { ?>
<?php while($row = $records->fetch_assoc()) { 
    $percentage = $row['total_classes'] > 0 ? round(($row['attended_classes'] / $row['total_classes']) * 100, 2) : 0;
?>
<tr>
<td><?= $row['attendance_id'] ?></td>
<td><?= $row['first_name'] . " " . $row['last_name'] ?></td>
<td><?= $row['subject_name'] ?></td>
<td><?= $row['attendance_date'] ?></td>
<td><?= $row['total_classes'] ?></td>
<td><?= $row['attended_classes'] ?></td>
<td><?= $percentage ?>%</td>
<td>
<a href="AttendanceController.php?action=edit&id=<?= $row['attendance_id'] ?>" class="btn btn-edit">Edit</a>
<a href="AttendanceController.php?action=delete&id=<?= $row['attendance_id'] ?>" class="btn btn-delete"
onclick="return confirm('Are you sure?')">Delete</a>
</td>
</tr>
<?php } ?>
<?php } else { ?>
<tr>
<td colspan="8">No attendance records found.</td>
</tr>
<?php } ?> 
</table>
</div>