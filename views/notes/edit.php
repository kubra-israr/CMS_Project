<link rel="stylesheet" href="/CMS_project/assets/css/modules.css">

<h2 class="page-title">Edit Notes</h2>

<div class="form-card">

<form method="POST" enctype="multipart/form-data">

<label>Subject</label>

<select name="subject_id">

<?php while($row = $subjects->fetch_assoc()) { ?>

<option value="<?= $row['subject_id'] ?>"
<?= ($row['subject_id'] == $record['subject_id']) ? 'selected' : '' ?>>

<?= $row['subject_name'] ?>

</option>

<?php } ?>

</select>


<label>Upload New File</label>

<input type="file" name="file" accept=".pdf,.doc,.docx">

<input type="hidden" name="old_file" value="<?= $record['file_path'] ?>">


<p>Current File:
<a href="/CMS_project/uploads/notes/<?= $record['file_path'] ?>" target="_blank">
View
</a>
</p>

<button type="submit" class="btn btn-submit">
Update Notes
</button>

</form>

</div>


<div class="center-btn">
<a href="NotesController.php" class="btn btn-add">
Back
</a>
</div>