<link rel="stylesheet" href="/CMS_project/Assets/css/modules.css">

<h2 class="page-title">Edit Faculty</h2>

<div class="form-card">

<form method="POST" action="FacultyController.php?action=update">

<label>First Name</label>
<div class="input-group">
<i class="fa-solid fa-user"></i>
<input type="text" name="first_name" value="<?= $faculty['first_name'] ?>" required>
</div>

<label>Last Name</label>
<div class="input-group">
<i class="fa-solid fa-user"></i>
<input type="text" name="last_name" value="<?= $faculty['last_name'] ?>" required>
</div>

<label>Email</label>
<div class="input-group">
<i class="fa-solid fa-envelope"></i>
<input type="email" name="email" value="<?= $faculty['email'] ?>" required>
</div>

<label>Phone Number</label>
<div class="input-group">
<i class="fa-solid fa-phone"></i>
<input type="text" name="phone" value="<?= $faculty['phone'] ?>" required>
</div>

<label>Department</label>
<select name="department_id">

<?php while($row = $departments->fetch_assoc()) { ?>

<option value="<?= $row['department_id'] ?>"
<?= $row['department_id'] == $faculty['department_id'] ? 'selected' : '' ?>>

<?= $row['department_name'] ?>

</option>

<?php } ?>

</select>

<label>Designation</label>
<div class="input-group">
<i class="fa-solid fa-briefcase"></i>
<input type="text" name="designation" value="<?= $faculty['designation'] ?>">
</div>

<label>Join Date</label>
<div class="input-group">
<i class="fa-solid fa-calendar"></i>
<input type="date" name="join_date" value="<?= $faculty['join_date'] ?>">
</div>

<label>Password</label>
<div class="input-group password-box">
<i class="fa-solid fa-lock"></i>
<input type="password" id="password" name="password" value="<?= $faculty['password'] ?>">
<span onclick="togglePassword()" class="toggle-pass">
<i class="fa-solid fa-eye"></i>
</span>
</div>

<button type="submit" class="btn btn-submit">
Update Faculty
</button>

</form>

</div>

<div class="center-btn">
<a href="FacultyController.php" class="btn btn-add">
Back to Faculty List
</a>
</div>
</a>

