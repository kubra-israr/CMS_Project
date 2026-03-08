<link rel="stylesheet" href="/CMS_project/assets/css/modules.css">

<h2 class="page-title">Add Attendance</h2>

<div class="form-wrapper">

<div class="form-card">

<form method="POST">

<label>Faculty</label>
<select name="faculty_id" required>
<?php while($row = $faculties->fetch_assoc()) { ?>
<option value="<?= $row['faculty_id'] ?>">
<?= $row['first_name'] . " " . $row['last_name'] ?>
</option>
<?php } ?>
</select>


<label>Subject</label>
<select name="subject_id" required>
<?php while($row = $subjects->fetch_assoc()) { ?>
<option value="<?= $row['subject_id'] ?>">
<?= $row['subject_name'] ?>
</option>
<?php } ?>
</select>


<label>Date</label>
<input type="date" name="attendance_date" required>


<label>Total Classes</label>
<input type="number" name="total_classes" required>


<label>Attended Classes</label>
<input type="number" name="attended_classes" required>


<button type="submit" class="btn btn-submit">
Add Attendance
</button>

</form>

</div>

</div>

<div class="center-btn">
<a href="AttendanceController.php" class="btn btn-add">
Back
</a>
</div>