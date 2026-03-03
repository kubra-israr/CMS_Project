<h2>Department List</h2>

<a href="DepartmentController.php?action=add">
    Add New Department
</a>

<br><br>

<table border="1" cellpadding="8">
<tr>
    <th>ID</th>
    <th>Department Name</th>
    <th>Actions</th>
</tr>

<?php while($row = $departments->fetch_assoc()) { ?>
<tr>
    <td><?= $row['department_id'] ?></td>
    <td><?= $row['department_name'] ?></td>
    <td>
        <a href="DepartmentController.php?action=edit&id=<?= $row['department_id'] ?>">Edit</a> |
        <a href="DepartmentController.php?action=delete&id=<?= $row['department_id'] ?>"
           onclick="return confirm('Are you sure?')">Delete</a>
    </td>
</tr>
<?php } ?>

</table>