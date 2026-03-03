<h2>Add Student</h2>

<form method="POST">

First Name:
<input type="text" name="first_name" required><br><br>

Last Name:
<input type="text" name="last_name" required><br><br>

Email:
<input type="email" name="email"><br><br>

Phone:
<input type="text" name="phone"><br><br>

Department:
<select name="department_id">
<?php while($row = $departments->fetch_assoc()) { ?>
    <option value="<?= $row['department_id'] ?>">
        <?= $row['department_name'] ?>
    </option>
<?php } ?>
</select><br><br>

Semester:
<input type="number" name="semester"><br><br>

Join Date:
<input type="date" name="join_date"><br><br>

<button type="submit">Add Student</button>

</form>

<br>
<a href="StudentController.php">Back</a>