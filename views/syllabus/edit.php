<link rel="stylesheet" href="/CMS_project/assets/css/modules.css">

<h2 class="page-title">Edit Syllabus</h2>

<div class="form-card">

<form method="POST" enctype="multipart/form-data">

<label>Subject</label>
<select name="subject_id" required>

<?php while($row = $subjects->fetch_assoc()) { ?>

<option value="<?= $row['subject_id'] ?>"
<?= ($row['subject_id'] == ($record['subject_id'] ?? '')) ? 'selected' : '' ?>>

<?= $row['subject_name'] ?>

</option>

<?php } ?>

</select>

<label>Upload New File</label>
<input type="file" name="file">

<p>Current File:
<?php if (!empty($record['file_path'])) { ?>
    <a href="/CMS_project/uploads/syllabus/<?= htmlspecialchars($record['file_path']) ?>" target="_blank">
        View
    </a>
<?php } else { ?>
    No File
<?php } ?>
</p>

<button type="submit" class="btn btn-submit">
Update Syllabus
</button>

</form>

</div>

<div class="center-btn">
<a href="SyllabusController.php" class="btn btn-add">
Back
</a>
</div>