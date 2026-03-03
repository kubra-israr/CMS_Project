<h2>Edit Faculty</h2>

<form method="POST">

First Name:
<input type="text" name="first_name"
value="<?= $faculty['first_name'] ?>" required>
<br><br>

Last Name:
<input type="text" name="last_name"
value="<?= $faculty['last_name'] ?>" required>
<br><br>

Email:
<input type="email" name="email"
value="<?= $faculty['email'] ?>" required>
<br><br>

Phone:
<input type="text" name="phone"
value="<?= $faculty['phone'] ?>">
<br><br>

Department:
<select name="department_id" required>
<?php while($row = $departments->fetch_assoc()) { ?>
    <option value="<?= $row['department_id'] ?>"
        <?= ($row['department_id'] == $faculty['department_id']) ? 'selected' : '' ?>>
        <?= $row['department_name'] ?>
    </option>
<?php } ?>
</select>
<br><br>

Designation:
<input type="text" name="designation"
value="<?= $faculty['designation'] ?>">
<br><br>

Join Date:
<input type="date" name="join_date"
value="<?= $faculty['join_date'] ?>">
<br><br>

Password:
<input type="text" name="password"
value="<?= $faculty['password'] ?>">
<br><br>

<button type="submit">Update Faculty</button>

</form>

<a href="FacultyController.php">Back</a>