<?php
require_once __DIR__ . '/../models/AttendanceModel.php';
require_once __DIR__ . '/../models/FacultyModel.php';
require_once __DIR__ . '/../models/SubjectModel.php';

$attendanceModel = new AttendanceModel();
$facultyModel = new FacultyModel();
$subjectModel = new SubjectModel();

$action = $_GET['action'] ?? 'list';

if ($action == 'add') {

    if ($_POST) {
        $attendanceModel->insert(
            $_POST['faculty_id'],
            $_POST['subject_id'],
            $_POST['attendance_date'],
            $_POST['total_classes'],
            $_POST['attended_classes']
        );

        header("Location: AttendanceController.php");
        exit();
    }

    $faculties = $facultyModel->getAll();
    $subjects = $subjectModel->getAll();
    require __DIR__ . '/../views/attendance/add.php';

} elseif ($action == 'edit') {

    $id = $_GET['id'];

    if ($_POST) {
        $attendanceModel->update(
            $id,
            $_POST['faculty_id'],
            $_POST['subject_id'],
            $_POST['attendance_date'],
            $_POST['total_classes'],
            $_POST['attended_classes']
        );

        header("Location: AttendanceController.php");
        exit();
    }

    $attendance = $attendanceModel->getById($id);
    $faculties = $facultyModel->getAll();
    $subjects = $subjectModel->getAll();
    require __DIR__ . '/../views/attendance/edit.php';

} elseif ($action == 'delete') {

    $attendanceModel->delete($_GET['id']);
    header("Location: AttendanceController.php");
    exit();

} else {

    $records = $attendanceModel->getAll();
    require __DIR__ . '/../views/attendance/list.php';
}
?>