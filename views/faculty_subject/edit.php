<h2>Edit Faculty - Subject Mapping</h2>

<form method="POST">

Faculty:
<select name="faculty_id" required>
<?php while($row = $faculties->fetch_assoc()) { ?>
    <option value="<?= $row['faculty_id'] ?>"
        <?= ($row['faculty_id'] == $record['faculty_id']) ? 'selected' : '' ?>>
        <?= $row['first_name'] . " " . $row['last_name'] ?>
    </option>
<?php } ?>
</select>
<br><br>

Subject:
<select name="subject_id" required>
<?php while($row = $subjects->fetch_assoc()) { ?>
    <option value="<?= $row['subject_id'] ?>"
        <?= ($row['subject_id'] == $record['subject_id']) ? 'selected' : '' ?>>
        <?= $row['subject_name'] ?>
    </option>
<?php } ?>
</select>
<br><br>

<button type="submit">Update</button>

</form>

<a href="FacultySubjectController.php">Back</a>