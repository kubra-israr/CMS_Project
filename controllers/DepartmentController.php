<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

require_once __DIR__ . '/../models/DepartmentModel.php';

$model = new DepartmentModel();

$action = $_GET['action'] ?? 'list';

if ($action === 'create' && $_SERVER['REQUEST_METHOD'] === 'POST') {

    $department_name = $_POST['department_name'];
    $model->create($department_name);
    header("Location: DepartmentController.php");
    exit();

} elseif ($action === 'update' && $_SERVER['REQUEST_METHOD'] === 'POST') {

    $id = $_POST['department_id'];
    $department_name = $_POST['department_name'];
    $model->update($id, $department_name);
    header("Location: DepartmentController.php");
    exit();

} elseif ($action === 'delete') {

    $id = $_GET['id'];
    $model->delete($id);
    header("Location: DepartmentController.php");
    exit();

} elseif ($action === 'edit') {

    $id = $_GET['id'];
    $department = $model->getById($id);
    require __DIR__ . '/../views/department/edit.php';

} elseif ($action === 'add') {

    require __DIR__ . '/../views/department/add.php';

} else {

    $departments = $model->getAll();
    require __DIR__ . '/../views/department/list.php';
}
?>