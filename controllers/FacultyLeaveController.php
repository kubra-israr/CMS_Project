<?php
require_once __DIR__ . '/../models/FacultyLeaveModel.php';
require_once __DIR__ . '/../models/FacultyModel.php';

$leaveModel = new FacultyLeaveModel();
$facultyModel = new FacultyModel();

$action = $_GET['action'] ?? 'list';

if ($action === 'add') {

    if ($_POST) {
        $leaveModel->insert(
            $_POST['faculty_id'],
            $_POST['leave_type'],
            $_POST['from_date'],
            $_POST['to_date'],
            $_POST['reason']
        );

        header("Location: FacultyLeaveController.php");
        exit();
    }

    $faculties = $facultyModel->getAll();
    require __DIR__ . '/../views/faculty_leave/add.php';

} elseif ($action === 'edit') {

    $id = $_GET['id'];

    if ($_POST) {
        $leaveModel->update(
            $id,
            $_POST['leave_type'],
            $_POST['from_date'],
            $_POST['to_date'],
            $_POST['reason'],
            $_POST['status']
        );

        header("Location: FacultyLeaveController.php");
        exit();
    }

    $leave = $leaveModel->getById($id);
    require __DIR__ . '/../views/faculty_leave/edit.php';

} elseif ($action === 'delete') {

    $leaveModel->delete($_GET['id']);
    header("Location: FacultyLeaveController.php");
    exit();

} else {

    $records = $leaveModel->getAll();
    require __DIR__ . '/../views/faculty_leave/list.php';
}
?>