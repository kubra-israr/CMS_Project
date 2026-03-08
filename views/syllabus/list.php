<link rel="stylesheet" href="/CMS_project/assets/css/modules.css">

<h2 class="page-title">Syllabus</h2>

<div class="table-wrapper">

<div class="top-bar">
<a href="SyllabusController.php?action=add" class="btn btn-add">
Upload Syllabus
</a>
</div>

<table class="table">

<tr>
<th>ID</th>
<th>Subject</th>
<th>File</th>
<th>Actions</th>
</tr>

<?php while($row = $records->fetch_assoc()) { ?>

<tr>

<td><?= $row['syllabus_id'] ?></td>

<td><?= $row['subject_name'] ?></td>

<td>
<?php if (!empty($row['file_path'])) { ?>
    <a href="/CMS_project/uploads/syllabus/<?= htmlspecialchars($row['file_path']) ?>" target="_blank">
        View
    </a>
<?php } else { ?>
    No File
<?php } ?>
</td>

<td>

<a href="SyllabusController.php?action=edit&id=<?= $row['syllabus_id'] ?>"
class="btn btn-edit">
Edit
</a>

<a href="SyllabusController.php?action=delete&id=<?= $row['syllabus_id'] ?>"
class="btn btn-delete"
onclick="return confirm('Are you sure?')">
Delete
</a>

</td>

</tr>

<?php } ?>

</table>

</div>