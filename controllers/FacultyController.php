<?php
require_once __DIR__ . '/../models/FacultyModel.php';
require_once __DIR__ . '/../models/DepartmentModel.php';

$facultyModel = new FacultyModel();
$departmentModel = new DepartmentModel();

$action = $_GET['action'] ?? 'list';

if ($action == 'add') {

    if ($_POST) {

    $facultyModel->insert(
        $_POST['first_name'],
        $_POST['last_name'],
        $_POST['email'],
        $_POST['phone'],
        $_POST['department_id'],
        $_POST['designation'],
        $_POST['join_date'],
        $_POST['password']
    );

    header("Location: FacultyController.php");
    exit();
}

    $departments = $departmentModel->getAll();
    require __DIR__ . '/../views/faculty/add.php';

} elseif ($action == 'edit') {

    $id = $_GET['id'];

    if ($_POST) {

    $facultyModel->update(
        $id,
        $_POST['first_name'],
        $_POST['last_name'],
        $_POST['email'],
        $_POST['phone'],
        $_POST['department_id'],
        $_POST['designation'],
        $_POST['join_date'],
        $_POST['password']
   );

    header("Location: FacultyController.php");
    exit();
    }

    $faculty = $facultyModel->getById($id);
    $departments = $departmentModel->getAll();
    require __DIR__ . '/../views/faculty/edit.php';

} elseif ($action == 'delete') {

    $facultyModel->delete($_GET['id']);
    header("Location: FacultyController.php");
    exit();

} else {

    $faculties = $facultyModel->getAll();
    require __DIR__ . '/../views/faculty/list.php';
}
?>