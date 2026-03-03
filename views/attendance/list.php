<h2>Attendance List</h2>

<a href="AttendanceController.php?action=add">Add New</a>
<br><br>

<table border="1" cellpadding="10">
<tr>
    <th>ID</th>
    <th>Faculty</th>
    <th>Subject</th>
    <th>Date</th>
    <th>Total</th>
    <th>Attended</th>
    <th>Percentage</th>
    <th>Action</th>
</tr>

<?php while($row = $records->fetch_assoc()) { ?>
<tr>
    <td><?= $row['attendance_id'] ?></td>
    <td><?= $row['first_name'] . " " . $row['last_name'] ?></td>
    <td><?= $row['subject_name'] ?></td>
    <td><?= $row['attendance_date'] ?></td>
    <td><?= $row['total_classes'] ?></td>
    <td><?= $row['attended_classes'] ?></td>
    <td><?= number_format($row['percentage'], 2) ?>%</td>
    <td>
        <a href="AttendanceController.php?action=edit&id=<?= $row['attendance_id'] ?>">Edit</a> |
        <a href="AttendanceController.php?action=delete&id=<?= $row['attendance_id'] ?>"
           onclick="return confirm('Are you sure?')">Delete</a>
    </td>
</tr>
<?php } ?>

</table>