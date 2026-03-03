<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

require_once __DIR__ . '/../models/SyllabusModel.php';
require_once __DIR__ . '/../models/SubjectModel.php';
require_once __DIR__ . '/../models/FacultyModel.php';

$syllabusModel = new SyllabusModel();
$subjectModel = new SubjectModel();
$facultyModel = new FacultyModel();

$action = $_GET['action'] ?? 'list';

if ($action == 'add') {

    if ($_POST) {

        $targetDir = __DIR__ . "/../uploads/";

        if (!is_dir($targetDir)) {
            mkdir($targetDir, 0777, true);
        }

        $fileName = basename($_FILES["file"]["name"]);
        $targetFile = $targetDir . $fileName;

        move_uploaded_file($_FILES["file"]["tmp_name"], $targetFile);

        $syllabusModel->insert(
            $_POST['subject_id'],
            $_POST['faculty_id'],
            $fileName,
            $_POST['upload_date']
        );

        header("Location: SyllabusController.php");
        exit();
    }

    $subjects = $subjectModel->getAll();
    $faculties = $facultyModel->getAll();
    require __DIR__ . '/../views/syllabus/add.php';
    
} elseif ($action == 'edit') {

    $id = $_GET['id'];

    if ($_POST) {
        $syllabusModel->update(
            $id,
            $_POST['subject_id'],
            $_POST['faculty_id'],
            $_POST['file_path'],
            $_POST['upload_date']
        );
        header("Location: SyllabusController.php");
        exit();
    }

    $syllabus = $syllabusModel->getById($id);
    $subjects = $subjectModel->getAll();
    $faculties = $facultyModel->getAll();
    require __DIR__ . '/../views/syllabus/edit.php';

} elseif ($action == 'delete') {

    $syllabusModel->delete($_GET['id']);
    header("Location: SyllabusController.php");
    exit();

} else {

    $records = $syllabusModel->getAll();
    require __DIR__ . '/../views/syllabus/list.php';
}
?>