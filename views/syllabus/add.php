<h2>Add Syllabus</h2>

<form method="POST" enctype="multipart/form-data">

Subject:
<select name="subject_id" required>
<?php while($row = $subjects->fetch_assoc()) { ?>
    <option value="<?= $row['subject_id'] ?>">
        <?= $row['subject_name'] ?>
    </option>
<?php } ?>
</select><br><br>

Faculty:
<select name="faculty_id" required>
<?php while($row = $faculties->fetch_assoc()) { ?>
    <option value="<?= $row['faculty_id'] ?>">
        <?= $row['first_name'] . " " . $row['last_name'] ?>
    </option>
<?php } ?>
</select><br><br>

Upload File:
<input type="file" name="file" required><br><br>

Upload Date:
<input type="date" name="upload_date" required><br><br>

<button type="submit">Add Syllabus</button>

</form>

<a href="SyllabusController.php">Back</a>