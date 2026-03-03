<h2>Edit Subject</h2>

<form method="POST">
    Subject Name:
    <input type="text" name="subject_name" 
           value="<?= $subject['subject_name'] ?>" required>
    <br><br>

    Department:
    <select name="department_id" required>
        <?php while($row = $departments->fetch_assoc()) { ?>
            <option value="<?= $row['department_id'] ?>"
                <?= ($row['department_id'] == $subject['department_id']) ? 'selected' : '' ?>>
                <?= $row['department_name'] ?>
            </option>
        <?php } ?>
    </select>
    <br><br>

    Semester:
    <input type="number" name="semester" 
           value="<?= $subject['semester'] ?>" required>
    <br><br>

    <button type="submit">Update</button>
</form>

<a href="SubjectController.php">Back</a>