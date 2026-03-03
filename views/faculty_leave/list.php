<h2>Faculty Leave Applications</h2>

<a href="FacultyLeaveController.php?action=add">Apply Leave</a>

<br><br>

<table border="1" cellpadding="8">
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
    <td><?= $row['status'] ?></td>
    <td>
        <a href="FacultyLeaveController.php?action=edit&id=<?= $row['leave_id'] ?>">Edit</a> |
        <a href="FacultyLeaveController.php?action=delete&id=<?= $row['leave_id'] ?>"
           onclick="return confirm('Are you sure?')">Delete</a>
    </td>
</tr>
<?php } ?>

</table>