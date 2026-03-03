<h2>Add Faculty</h2>

<form method="POST">

First Name:
<input type="text" name="first_name" required><br><br>

Last Name:
<input type="text" name="last_name" required><br><br>

Email:
<input type="email" name="email" required><br><br>

Phone:
<input type="text" name="phone"><br><br>

Department:
<select name="department_id" required>
    <?php while($row = $departments->fetch_assoc()) { ?>
        <option value="<?= $row['department_id'] ?>">
            <?= $row['department_name'] ?>
        </option>
    <?php } ?>
</select><br><br>

Designation:
<input type="text" name="designation"><br><br>

Join Date:
<input type="date" name="join_date"><br><br>

Password:
<input type="password" name="password"><br><br>

<button type="submit">Add Faculty</button>

</form>

<a href="FacultyController.php">Back</a>