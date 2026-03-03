<h2>Add Subject</h2>

<form method="POST">
    Subject Name:
    <input type="text" name="subject_name" required><br><br>

    Department:
    <select name="department_id" required>
        <?php while($row = $departments->fetch_assoc()) { ?>
            <option value="<?= $row['department_id'] ?>">
                <?= $row['department_name'] ?>
            </option>
        <?php } ?>
    </select><br><br>

    Semester:
    <input type="number" name="semester" required><br><br>

    <button type="submit">Add</button>
</form>

<a href="SubjectController.php">Back</a>