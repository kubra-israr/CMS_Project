<link rel="stylesheet" href="/CMS_project/Assets/css/modules.css">

<div class="main">

<h2 class="page-title">Add Faculty</h2>

<div class="form-card">

<form method="POST" action="FacultyController.php?action=create">

<input type="text"
name="first_name"
placeholder="First Name"
required>

<input type="text"
name="last_name"
placeholder="Last Name"
required>

<input type="email"
name="email"
placeholder="Email"
required>

<input type="text"
name="phone"
placeholder="Phone Number"
required>

<select name="department_id" required>

<option value="">Select Department</option>

<?php while($row = $departments->fetch_assoc()) { ?>

<option value="<?= $row['department_id'] ?>">
<?= $row['department_name'] ?>
</option>

<?php } ?>

</select>

<input type="text"
name="designation"
placeholder="Designation"
required>

<label>Join Date</label>

<input type="date"
name="join_date"
required>

<input type="password"
name="password"
placeholder="Create Password"
required>

<button type="submit" class="btn btn-submit">
Add Faculty
</button>

</form>

</div>

<div class="center-btn">

<a href="FacultyController.php" class="btn btn-add">
Back to Faculty List
</a>

</div>

</div>