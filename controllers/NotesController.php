<?php
require_once __DIR__ . '/../models/NotesModel.php';
require_once __DIR__ . '/../models/SubjectModel.php';
require_once __DIR__ . '/../models/FacultyModel.php';

$notesModel = new NotesModel();
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

        $notesModel->insert(
            $_POST['subject_id'],
            $_POST['faculty_id'],
            $fileName,
            $_POST['upload_date']
        );

        header("Location: NotesController.php");
        exit();
    }

    $subjects = $subjectModel->getAll();
    $faculties = $facultyModel->getAll();
    require __DIR__ . '/../views/notes/add.php';

} elseif ($action == 'edit') {

    $id = $_GET['id'];

    if ($_POST) {

        $targetDir = __DIR__ . "/../uploads/";

        if (!is_dir($targetDir)) {
            mkdir($targetDir, 0777, true);
        }

        $fileName = $_FILES["file"]["name"];

        if ($fileName != "") {
            $fileName = basename($fileName);
            $targetFile = $targetDir . $fileName;
            move_uploaded_file($_FILES["file"]["tmp_name"], $targetFile);
        } else {
            $old = $notesModel->getById($id);
            $fileName = $old['file_path'];
        }

        $notesModel->update(
            $id,
            $_POST['subject_id'],
            $_POST['faculty_id'],
            $fileName,
            $_POST['upload_date']
        );

        header("Location: NotesController.php");
        exit();
    }

    $note = $notesModel->getById($id);
    $subjects = $subjectModel->getAll();
    $faculties = $facultyModel->getAll();
    require __DIR__ . '/../views/notes/edit.php';

} elseif ($action == 'delete') {

    $notesModel->delete($_GET['id']);
    header("Location: NotesController.php");
    exit();

} else {

    $records = $notesModel->getAll();
    require __DIR__ . '/../views/notes/list.php';
}
?>