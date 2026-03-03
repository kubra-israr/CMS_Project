<?php
require_once __DIR__ . '/../config/database.php';

class FacultySubjectModel {

    private $conn;

    public function __construct() {
        global $conn;
        $this->conn = $conn;
    }

    public function getAll() {
        $sql = "SELECT fs.fs_id,
                       f.first_name,
                       f.last_name,
                       s.subject_name
                FROM faculty_subject fs
                JOIN faculty f ON fs.faculty_id = f.faculty_id
                JOIN subject s ON fs.subject_id = s.subject_id
                ORDER BY fs.fs_id DESC";

        return $this->conn->query($sql);
    }

    public function insert($faculty_id, $subject_id) {
        $stmt = $this->conn->prepare(
            "INSERT INTO faculty_subject (faculty_id, subject_id) VALUES (?, ?)"
        );

        $stmt->bind_param("ii", $faculty_id, $subject_id);
        return $stmt->execute();
    }

    public function delete($id) {
        $stmt = $this->conn->prepare(
            "DELETE FROM faculty_subject WHERE fs_id = ?"
        );

        $stmt->bind_param("i", $id);
        return $stmt->execute();
    }

    public function getById($id) {
        $stmt = $this->conn->prepare(
            "SELECT * FROM faculty_subject WHERE fs_id = ?"
        );

        $stmt->bind_param("i", $id);
        $stmt->execute();
        return $stmt->get_result()->fetch_assoc();
    }

    public function update($id, $faculty_id, $subject_id) {
        $stmt = $this->conn->prepare(
            "UPDATE faculty_subject 
             SET faculty_id=?, subject_id=? 
             WHERE fs_id=?"
        );

        $stmt->bind_param("iii", $faculty_id, $subject_id, $id);
        return $stmt->execute();
    }
}
?>