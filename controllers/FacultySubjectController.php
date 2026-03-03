<?php
require_once __DIR__ . '/../models/FacultySubjectModel.php';
require_once __DIR__ . '/../models/FacultyModel.php';
require_once __DIR__ . '/../models/SubjectModel.php';

$fsModel = new FacultySubjectModel();
$facultyModel = new FacultyModel();
$subjectModel = new SubjectModel();

$action = $_GET['action'] ?? 'list';

if ($action == 'add') {

    if ($_POST) {
        $fsModel->insert($_POST['faculty_id'], $_POST['subject_id']);
        header("Location: FacultySubjectController.php");
        exit();
    }

    $faculties = $facultyModel->getAll();
    $subjects = $subjectModel->getAll();
    require __DIR__ . '/../views/faculty_subject/add.php';

} elseif ($action == 'edit') {

    $id = $_GET['id'];

    if ($_POST) {
        $fsModel->update($id, $_POST['faculty_id'], $_POST['subject_id']);
        header("Location: FacultySubjectController.php");
        exit();
    }

    $record = $fsModel->getById($id);
    $faculties = $facultyModel->getAll();
    $subjects = $subjectModel->getAll();

    require __DIR__ . '/../views/faculty_subject/edit.php';

} elseif ($action == 'delete') {

    $fsModel->delete($_GET['id']);
    header("Location: FacultySubjectController.php");
    exit();

} else {

    $records = $fsModel->getAll();
    require __DIR__ . '/../views/faculty_subject/list.php';
}
?>