<link rel="stylesheet" href="/CMS_project/assets/css/modules.css">

<h2 class="page-title">Notes</h2>

<div class="table-wrapper">

<div class="top-bar">
<a href="NotesController.php?action=add" class="btn btn-add">
Upload Notes
</a>
</div>

<table class="table">

<tr>
<th>ID</th>
<th>Subject</th>
<th>Title</th>
<th>File</th>
<th>Actions</th>
</tr>

<?php while($row = $records->fetch_assoc()) { ?>

<tr>

<td><?= $row['notes_id'] ?></td>

<td><?= $row['subject_name'] ?></td>

<td><?= $row['title'] ?></td>

<td>
<a href="/CMS_project/uploads/notes/<?= $row['file_path'] ?>" target="_blank">
View
</a>
</td>

<td>

<a href="NotesController.php?action=edit&id=<?= $row['notes_id'] ?>"
class="btn btn-edit">
Edit
</a>

<a href="NotesController.php?action=delete&id=<?= $row['notes_id'] ?>"
class="btn btn-delete"
onclick="return confirm('Are you sure?')">
Delete
</a>

</td>

</tr>

<?php } ?>

</table>

</div>