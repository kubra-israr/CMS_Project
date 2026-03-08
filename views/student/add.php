<link rel="stylesheet" href="/CMS_project/Assets/css/modules.css">

<h2 class="page-title">Add Student</h2>

<div class="form-card">

<form method="POST">

<label>First Name</label>
<input type="text" name="first_name" required>

<label>Last Name</label>
<input type="text" name="last_name" required>

<label>Email</label>
<input type="email" name="email">

<label>Phone</label>
<input type="text" name="phone">

<label>Department</label>

<select name="department_id">

<?php while($row = $departments->fetch_assoc()) { ?>

<option value="<?= $row['department_id'] ?>">
<?= $row['department_name'] ?>
</option>

<?php } ?>

</select>

<label>Semester</label>
<input type="number" name="semester">

<label>Join Date</label>
<input type="date" name="join_date">

<button type="submit" class="btn btn-submit">
Add Student
</button>

</form>

</div>

<div class="center-btn">
<a href="StudentController.php" class="btn btn-add">
Back
</a>
</div>