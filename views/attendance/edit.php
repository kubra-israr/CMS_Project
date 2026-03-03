<h2>Edit Attendance</h2>

<form method="POST">

Faculty:
<select name="faculty_id">
<?php while($row = $faculties->fetch_assoc()) { ?>
    <option value="<?= $row['faculty_id'] ?>"
        <?= $row['faculty_id'] == $attendance['faculty_id'] ? 'selected' : '' ?>>
        <?= $row['first_name'] . " " . $row['last_name'] ?>
    </option>
<?php } ?>
</select><br><br>

Subject:
<select name="subject_id">
<?php while($row = $subjects->fetch_assoc()) { ?>
    <option value="<?= $row['subject_id'] ?>"
        <?= $row['subject_id'] == $attendance['subject_id'] ? 'selected' : '' ?>>
        <?= $row['subject_name'] ?>
    </option>
<?php } ?>
</select><br><br>

Date:
<input type="date" name="attendance_date"
       value="<?= $attendance['attendance_date'] ?>"><br><br>

Total Classes:
<input type="number" name="total_classes"
       value="<?= $attendance['total_classes'] ?>"><br><br>

Attended Classes:
<input type="number" name="attended_classes"
       value="<?= $attendance['attended_classes'] ?>"><br><br>

<button type="submit">Update</button>

</form>

<a href="AttendanceController.php">Back</a>