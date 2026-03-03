<h2>Subject List</h2>

<a href="SubjectController.php?action=add">Add Subject</a>
<br><br>

<table border="1" cellpadding="10">
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
                <a href="SubjectController.php?action=edit&id=<?= $row['subject_id'] ?>">Edit</a> |
                <a href="SubjectController.php?action=delete&id=<?= $row['subject_id'] ?>" 
                   onclick="return confirm('Are you sure?')">Delete</a>
            </td>
        </tr>
    <?php } ?>

</table>