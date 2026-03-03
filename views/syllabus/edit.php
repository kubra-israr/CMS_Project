<h2>Edit Syllabus</h2>

<form method="POST">

Subject:
<select name="subject_id">
<?php while($row = $subjects->fetch_assoc()) { ?>
    <option value="<?= $row['subject_id'] ?>"
        <?= $row['subject_id'] == $syllabus['subject_id'] ? 'selected' : '' ?>>
        <?= $row['subject_name'] ?>
    </option>
<?php } ?>
</select><br><br>

Faculty:
<select name="faculty_id">
<?php while($row = $faculties->fetch_assoc()) { ?>
    <option value="<?= $row['faculty_id'] ?>"
        <?= $row['faculty_id'] == $syllabus['faculty_id'] ? 'selected' : '' ?>>
        <?= $row['first_name'] . " " . $row['last_name'] ?>
    </option>
<?php } ?>
</select><br><br>

File Path:
<input type="text" name="file_path" value="<?= $syllabus['file_path'] ?>"><br><br>

Upload Date:
<input type="date" name="upload_date" value="<?= $syllabus['upload_date'] ?>"><br><br>

<button type="submit">Update</button>

</form>

<a href="SyllabusController.php">Back</a>