<h2>Student List</h2>

<a href="StudentController.php?action=add">Add Student</a>

<br><br>

<table border="1" cellpadding="8">
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
    <td><?= $row['first_name'] . " " . $row['last_name'] ?></td>
    <td><?= $row['email'] ?></td>
    <td><?= $row['department_name'] ?></td>
    <td><?= $row['semester'] ?></td>
    <td>
        <a href="StudentController.php?action=edit&id=<?= $row['student_id'] ?>">Edit</a> |
        <a href="StudentController.php?action=delete&id=<?= $row['student_id'] ?>"
           onclick="return confirm('Are you sure?')">Delete</a>
    </td>
</tr>
<?php } ?>

</table>