<?php
require_once __DIR__ . '/../models/SubjectModel.php';
require_once __DIR__ . '/../models/DepartmentModel.php';

$subjectModel = new SubjectModel();
$departmentModel = new DepartmentModel();

$action = $_GET['action'] ?? 'list';

if ($action == 'add') {

    if ($_POST) {
        $subjectModel->insert($_POST['subject_name'], $_POST['department_id'], $_POST['semester']);
        header("Location: SubjectController.php");
        exit();
    }

    $departments = $departmentModel->getAll();
    require __DIR__ . '/../views/subject/add.php';

} elseif ($action == 'edit') {

    $id = $_GET['id'];

    if ($_POST) {
        $subjectModel->update($id, $_POST['subject_name'], $_POST['department_id'], $_POST['semester']);
        header("Location: SubjectController.php");
        exit();
    }

    $subject = $subjectModel->getById($id);
    $departments = $departmentModel->getAll();
    require __DIR__ . '/../views/subject/edit.php';

} elseif ($action == 'delete') {

    $subjectModel->delete($_GET['id']);
    header("Location: SubjectController.php");
    exit();

} else {

    $subjects = $subjectModel->getAll();
    require __DIR__ . '/../views/subject/list.php';
}
?>