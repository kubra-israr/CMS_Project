<link rel="stylesheet" href="/CMS_project/assets/css/modules.css">

<h2 class="page-title">Upload Syllabus</h2>

<div class="form-card">

<form method="POST" enctype="multipart/form-data">

<label>Subject</label>
<select name="subject_id" required>
<?php while($row = $subjects->fetch_assoc()) { ?>
    <option value="<?= $row['subject_id'] ?>">
        <?= $row['subject_name'] ?>
    </option>
<?php } ?>
</select>

<label>Faculty</label>
<select name="faculty_id" required>
<?php while($row = $faculties->fetch_assoc()) { ?>
    <option value="<?= $row['faculty_id'] ?>">
        <?= $row['first_name'] . " " . $row['last_name'] ?>
    </option>
<?php } ?>
</select>

<label>Upload File</label>
<input type="file" name="file" accept=".pdf,.doc,.docx" required>

<button type="submit" class="btn btn-submit">
    Upload Syllabus
</button>

</form>

</div>

<div class="center-btn">
<a href="SyllabusController.php" class="btn btn-add">
    Back
</a>
</div>