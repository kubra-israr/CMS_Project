<link rel="stylesheet" href="/CMS_project/assets/css/modules.css">

<h2 class="page-title">Add Subject</h2>

<div class="form-card">

<form method="POST">

<label>Subject Name</label>
<input type="text" name="subject_name" required>

<label>Department</label>
<select name="department_id" required>

<?php while($row = $departments->fetch_assoc()) { ?>

<option value="<?= $row['department_id'] ?>">
<?= $row['department_name'] ?>
</option>

<?php } ?>

</select>

<label>Semester</label>
<input type="number" name="semester" required>

<button type="submit" class="btn btn-submit">
Add Subject
</button>

</form>

</div>

<div class="center-btn">

<a href="SubjectController.php" class="btn btn-add">
Back to Subject List
</a>

</div>