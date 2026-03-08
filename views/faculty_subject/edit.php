<link rel="stylesheet" href="/CMS_project/assets/css/modules.css">

<h2 class="page-title">Edit Faculty Subject</h2>

<div class="form-card">

<form method="POST">

<label>Faculty</label>
<select name="faculty_id" required>

<?php while($row = $faculties->fetch_assoc()) { ?>

<option value="<?= $row['faculty_id'] ?>"
<?= ($row['faculty_id'] == $record['faculty_id']) ? 'selected' : '' ?>>

<?= $row['first_name'] . " " . $row['last_name'] ?>

</option>

<?php } ?>

</select>


<label>Subject</label>
<select name="subject_id" required>

<?php while($row = $subjects->fetch_assoc()) { ?>

<option value="<?= $row['subject_id'] ?>"
<?= ($row['subject_id'] == $record['subject_id']) ? 'selected' : '' ?>>

<?= $row['subject_name'] ?>

</option>

<?php } ?>

</select>

<button type="submit" class="btn btn-submit">
Update
</button>

</form>

</div>

<div class="center-btn">
<a href="FacultySubjectController.php" class="btn btn-add">
Back
</a>
</div>