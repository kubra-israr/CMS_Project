<?php
require_once __DIR__ . '/../config/database.php';

class SyllabusModel {

    private $conn;

    public function __construct() {
        global $conn;
        $this->conn = $conn;
    }

    public function getAll() {
    $sql = "SELECT s.*, 
               sub.subject_name,
               f.first_name,
               f.last_name
        FROM syllabus s
        LEFT JOIN subject sub ON s.subject_id = sub.subject_id
        LEFT JOIN faculty f ON s.faculty_id = f.faculty_id
        ORDER BY s.syllabus_id DESC";
    $result = $this->conn->query($sql);

    if (!$result) {
        die("Query Error: " . $this->conn->error);
    }

    return $result;
}
    public function insert($subject_id, $faculty_id, $file_path, $upload_date) {
        $stmt = $this->conn->prepare(
            "INSERT INTO syllabus (subject_id, faculty_id, file_path, upload_date)
             VALUES (?, ?, ?, ?)"
        );

        $stmt->bind_param("iiss", $subject_id, $faculty_id, $file_path, $upload_date);
        return $stmt->execute();
    }

    public function delete($id) {
        $stmt = $this->conn->prepare(
            "DELETE FROM syllabus WHERE syllabus_id=?"
        );

        $stmt->bind_param("i", $id);
        return $stmt->execute();
    }

    public function getById($id) {
        $stmt = $this->conn->prepare(
            "SELECT * FROM syllabus WHERE syllabus_id=?"
        );

        $stmt->bind_param("i", $id);
        $stmt->execute();
        return $stmt->get_result()->fetch_assoc();
    }

    public function update($id, $subject_id, $faculty_id, $file_path, $upload_date) {
        $stmt = $this->conn->prepare(
            "UPDATE syllabus
             SET subject_id=?, faculty_id=?, file_path=?, upload_date=?
             WHERE syllabus_id=?"
        );

        $stmt->bind_param("iissi", $subject_id, $faculty_id, $file_path, $upload_date, $id);
        return $stmt->execute();
    }
}
?>