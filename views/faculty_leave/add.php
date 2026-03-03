<h2>Apply Leave</h2>

<form method="POST">

Faculty:
<select name="faculty_id" required>
<?php while($row = $faculties->fetch_assoc()) { ?>
    <option value="<?= $row['faculty_id'] ?>">
        <?= $row['first_name'] . " " . $row['last_name'] ?>
    </option>
<?php } ?>
</select><br><br>

Leave Type:
<input type="text" name="leave_type" required><br><br>

From Date:
<input type="date" name="from_date" required><br><br>

To Date:
<input type="date" name="to_date" required><br><br>

Reason:
<textarea name="reason"></textarea><br><br>

<button type="submit">Submit Leave</button>

</form>

<br>
<a href="FacultyLeaveController.php">Back</a>