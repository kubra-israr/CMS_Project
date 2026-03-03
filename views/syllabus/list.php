<h2>Syllabus List</h2>

<a href="SyllabusController.php?action=add">Add New</a>
<br><br>

<?php if ($records && $records->num_rows > 0) { ?>

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
    <td><?= $row['syllabus_id'] ?></td>
    <td><?= $row['subject_name'] ?></td>
    <td><?= $row['first_name'] . " " . $row['last_name'] ?></td>
    <td><?= $row['file_path'] ?></td>
    <td><?= $row['upload_date'] ?></td>
    <td>
        <a href="SyllabusController.php?action=edit&id=<?= $row['syllabus_id'] ?>">Edit</a> |
        <a href="SyllabusController.php?action=delete&id=<?= $row['syllabus_id'] ?>"
           onclick="return confirm('Are you sure?')">Delete</a>
    </td>
</tr>
<?php } ?>

</table>

<?php } else { ?>

<p>No syllabus records found.</p>

<?php } ?>