<h2>Edit Department</h2>

<form method="POST" action="DepartmentController.php?action=update">
    <input type="hidden" name="department_id" value="<?= $department['department_id'] ?>">

    <input type="text" name="department_name"
           value="<?= $department['department_name'] ?>" required>

    <button type="submit">Update Department</button>
</form>

<br>

<a href="DepartmentController.php">Back</a>