<h2>Faculty - Subject Mapping</h2>

<a href="FacultySubjectController.php?action=add">Assign New</a>
<br><br>

<table border="1" cellpadding="10">
    <tr>
        <th>ID</th>
        <th>Faculty</th>
        <th>Subject</th>
        <th>Action</th>
    </tr>

<?php while($row = $records->fetch_assoc()) { ?>
<tr>
    <td><?= $row['fs_id'] ?></td>
    <td><?= $row['first_name'] . " " . $row['last_name'] ?></td>
    <td><?= $row['subject_name'] ?></td>
    <td>
        <a href="FacultySubjectController.php?action=edit&id=<?= $row['fs_id'] ?>">Edit</a> |
        <a href="FacultySubjectController.php?action=delete&id=<?= $row['fs_id'] ?>" 
       onclick="return confirm('Are you sure?')">Delete</a>
    </td>
</tr>
<?php } ?>

</table>