<h2>Edit Student</h2>

<form method="POST">

First Name:
<input type="text" name="first_name"
       value="<?= $student['first_name'] ?>" required><br><br>

Last Name:
<input type="text" name="last_name"
       value="<?= $student['last_name'] ?>" required><br><br>

Email:
<input type="email" name="email"
       value="<?= $student['email'] ?>"><br><br>

Phone:
<input type="text" name="phone"
       value="<?= $student['phone'] ?>"><br><br>

Department:
<select name="department_id">
<?php while($row = $departments->fetch_assoc()) { ?>
    <option value="<?= $row['department_id'] ?>"
        <?= $row['department_id'] == $student['department_id'] ? 'selected' : '' ?>>
        <?= $row['department_name'] ?>
    </option>
<?php } ?>
</select><br><br>

Semester:
<input type="number" name="semester"
       value="<?= $student['semester'] ?>"><br><br>

Join Date:
<input type="date" name="join_date"
       value="<?= $student['join_date'] ?>"><br><br>

<button type="submit">Update Student</button>

</form>

<br>
<a href="StudentController.php">Back</a>