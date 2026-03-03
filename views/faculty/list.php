<h2>Faculty List</h2>

<a href="FacultyController.php?action=add">Add Faculty</a>
<br><br>

<table border="1" cellpadding="10">
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Email</th>
        <th>Department</th>
        <th>Designation</th>
        <th>Actions</th>
    </tr>

    <?php while($row = $faculties->fetch_assoc()) { ?>
        <tr>
            <td><?= $row['faculty_id'] ?></td>
            <td><?= $row['first_name'] . " " . $row['last_name'] ?></td>
            <td><?= $row['email'] ?></td>
            <td><?= $row['department_name'] ?></td>
            <td><?= $row['designation'] ?></td>
            <td>
                <a href="FacultyController.php?action=edit&id=<?= $row['faculty_id'] ?>">Edit</a> |
                <a href="FacultyController.php?action=delete&id=<?= $row['faculty_id'] ?>" 
                   onclick="return confirm('Are you sure?')">Delete</a>
            </td>
        </tr>
    <?php } ?>

</table>