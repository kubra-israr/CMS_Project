<link rel="stylesheet" href="/CMS_project/Assets/css/modules.css">

<h2 class="page-title">Apply Leave</h2>

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


<label>Leave Type</label>
<input type="text" name="leave_type" placeholder="Sick Leave / Casual Leave" required>


<label>From Date</label>
<input type="date" name="from_date" required>


<label>To Date</label>
<input type="date" name="to_date" required>


<label>Reason</label>
<textarea name="reason" rows="4" placeholder="Enter reason"></textarea>


<button type="submit" class="btn btn-submit">
Submit Leave
</button>

</form>

</div>

<div class="center-btn">
<a href="FacultyLeaveController.php" class="btn btn-add">
Back
</a>
</div>