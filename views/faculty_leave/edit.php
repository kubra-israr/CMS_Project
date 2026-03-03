<h2>Edit Leave</h2>

<form method="POST">

Leave Type:
<input type="text" name="leave_type" value="<?= $leave['leave_type'] ?>" required><br><br>

From Date:
<input type="date" name="from_date" value="<?= $leave['from_date'] ?>" required><br><br>

To Date:
<input type="date" name="to_date" value="<?= $leave['to_date'] ?>" required><br><br>

Reason:
<textarea name="reason"><?= $leave['reason'] ?></textarea><br><br>

Status:
<select name="status">
    <option value="Pending" <?= $leave['status']=='Pending'?'selected':'' ?>>Pending</option>
    <option value="Approved" <?= $leave['status']=='Approved'?'selected':'' ?>>Approved</option>
    <option value="Rejected" <?= $leave['status']=='Rejected'?'selected':'' ?>>Rejected</option>
</select><br><br>

<button type="submit">Update</button>

</form>

<br>
<a href="FacultyLeaveController.php">Back</a>