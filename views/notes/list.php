<h2>Notes List</h2>

<a href="NotesController.php?action=add">Add New</a>
<br><br>

<table border="1" cellpadding="10">
<tr>
    <th>ID</th>
    <th>Subject</th>
    <th>Faculty</th>
    <th>File</th>
    <th>Date</th>
    <th>Action</th>
</tr>

<?php while($row = $records->fetch_assoc()) { ?>
<tr>
    <td><?= $row['notes_id'] ?></td>
    <td><?= $row['subject_name'] ?></td>
    <td><?= $row['first_name'] . " " . $row['last_name'] ?></td>
    <td>
        <a href="../uploads/<?= $row['file_path'] ?>" target="_blank">
            View File
        </a>
    </td>
    <td><?= $row['upload_date'] ?></td>
    <td>
        <a href="NotesController.php?action=edit&id=<?= $row['notes_id'] ?>">Edit</a> |
        <a href="NotesController.php?action=delete&id=<?= $row['notes_id'] ?>"
           onclick="return confirm('Are you sure?')">Delete</a>
    </td>
</tr>
<?php } ?>

</table>