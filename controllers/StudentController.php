<?php
require_once __DIR__ . '/../models/StudentModel.php';
require_once __DIR__ . '/../models/DepartmentModel.php';

$studentModel = new StudentModel();
$departmentModel = new DepartmentModel();

$action = $_GET['action'] ?? 'list';

if ($action === 'add') {

    if ($_POST) {
        $studentModel->insert(
            $_POST['first_name'],
            $_POST['last_name'],
            $_POST['email'],
            $_POST['phone'],
            $_POST['department_id'],
            $_POST['semester'],
            $_POST['join_date']
        );

        header("Location: StudentController.php");
        exit();
    }

    $departments = $departmentModel->getAll();
    require __DIR__ . '/../views/student/add.php';

} elseif ($action === 'edit') {

    $id = $_GET['id'];

    if ($_POST) {
        $studentModel->update(
            $id,
            $_POST['first_name'],
            $_POST['last_name'],
            $_POST['email'],
            $_POST['phone'],
            $_POST['department_id'],
            $_POST['semester'],
            $_POST['join_date']
        );

        header("Location: StudentController.php");
        exit();
    }

    $student = $studentModel->getById($id);
    $departments = $departmentModel->getAll();
    require __DIR__ . '/../views/student/edit.php';

} elseif ($action === 'delete') {

    $studentModel->delete($_GET['id']);
    header("Location: StudentController.php");
    exit();

} else {

    $records = $studentModel->getAll();
    require __DIR__ . '/../views/student/list.php';
}
?>