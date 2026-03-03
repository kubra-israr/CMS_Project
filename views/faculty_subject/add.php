<h2>Assign Faculty to Subject</h2>

<form method="POST">

Faculty:
<select name="faculty_id" required>
<?php while($row = $faculties->fetch_assoc()) { ?>
    <option value="<?= $row['faculty_id'] ?>">
        <?= $row['first_name'] . " " . $row['last_name'] ?>
    </option>
<?php } ?>
</select>
<br><br>

Subject:
<select name="subject_id" required>
<?php while($row = $subjects->fetch_assoc()) { ?>
    <option value="<?= $row['subject_id'] ?>">
        <?= $row['subject_name'] ?>
    </option>
<?php } ?>
</select>
<br><br>

<button type="submit">Assign</button>

</form>

<a href="FacultySubjectController.php">Back</a>