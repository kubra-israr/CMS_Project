<link rel="stylesheet" href="/CMS_project/Assets/css/modules.css">

<h2 class="page-title">Edit Leave</h2>

<div class="form-card">

<form method="POST">

<label>Leave Type</label>
<input type="text"
name="leave_type"
value="<?= $leave['leave_type'] ?>"
required>

<label>From Date</label>
<input type="date"
name="from_date"
value="<?= $leave['from_date'] ?>"
required>

<label>To Date</label>
<input type="date"
name="to_date"
value="<?= $leave['to_date'] ?>"
required>

<label>Reason</label>
<textarea name="reason" rows="4">
<?= $leave['reason'] ?>
</textarea>

<label>Status</label>

<select name="status">

<option value="Pending"
<?= $leave['status']=='Pending'?'selected':'' ?>>
Pending
</option>

<option value="Approved"
<?= $leave['status']=='Approved'?'selected':'' ?>>
Approved
</option>

<option value="Rejected"
<?= $leave['status']=='Rejected'?'selected':'' ?>>
Rejected
</option>

</select>

<button type="submit" class="btn btn-submit">
Update Leave
</button>

</form>

</div>

<div class="center-btn">
<a href="FacultyLeaveController.php" class="btn btn-add">
Back
</a>
</div>