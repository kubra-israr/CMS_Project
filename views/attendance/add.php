<h2>Add Attendance</h2>

<form method="POST">

Faculty:
<select name="faculty_id" required>
<?php while($row = $faculties->fetch_assoc()) { ?>
    <option value="<?= $row['faculty_id'] ?>">
        <?= $row['first_name'] . " " . $row['last_name'] ?>
    </option>
<?php } ?>
</select><br><br>

Subject:
<select name="subject_id" required>
<?php while($row = $subjects->fetch_assoc()) { ?>
    <option value="<?= $row['subject_id'] ?>">
        <?= $row['subject_name'] ?>
    </option>
<?php } ?>
</select><br><br>

Date:
<input type="date" name="attendance_date" required><br><br>

Total Classes:
<input type="number" name="total_classes" required><br><br>

Attended Classes:
<input type="number" name="attended_classes" required><br><br>

<button type="submit">Add</button>

</form>

<a href="AttendanceController.php">Back</a>