<h2>Edit Notes</h2>

<form method="POST" enctype="multipart/form-data">

Subject:
<select name="subject_id">
<?php while($row = $subjects->fetch_assoc()) { ?>
    <option value="<?= $row['subject_id'] ?>"
        <?= $row['subject_id'] == $note['subject_id'] ? 'selected' : '' ?>>
        <?= $row['subject_name'] ?>
    </option>
<?php } ?>
</select><br><br>

Faculty:
<select name="faculty_id">
<?php while($row = $faculties->fetch_assoc()) { ?>
    <option value="<?= $row['faculty_id'] ?>"
        <?= $row['faculty_id'] == $note['faculty_id'] ? 'selected' : '' ?>>
        <?= $row['first_name'] . " " . $row['last_name'] ?>
    </option>
<?php } ?>
</select><br><br>

Current File:
<?= $note['file_path'] ?><br><br>

Upload New File:
<input type="file" name="file"><br><br>

Upload Date:
<input type="date" name="upload_date" value="<?= $note['upload_date'] ?>"><br><br>

<button type="submit">Update</button>

</form>

<a href="NotesController.php">Back</a>