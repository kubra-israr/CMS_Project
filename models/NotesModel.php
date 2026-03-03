<?php
require_once __DIR__ . '/../config/database.php';

class NotesModel {

    private $conn;

    public function __construct() {
        global $conn;
        $this->conn = $conn;
    }

    public function getAll() {
        $sql = "SELECT n.*, 
                       sub.subject_name,
                       f.first_name,
                       f.last_name
                FROM notes n
                LEFT JOIN subject sub ON n.subject_id = sub.subject_id
                LEFT JOIN faculty f ON n.faculty_id = f.faculty_id
                ORDER BY n.notes_id DESC";

        return $this->conn->query($sql);
    }

    public function insert($subject_id, $faculty_id, $file_path, $upload_date) {
        $stmt = $this->conn->prepare(
            "INSERT INTO notes (subject_id, faculty_id, file_path, upload_date)
             VALUES (?, ?, ?, ?)"
        );

        $stmt->bind_param("iiss", $subject_id, $faculty_id, $file_path, $upload_date);
        return $stmt->execute();
    }

    public function delete($id) {
        $stmt = $this->conn->prepare(
            "DELETE FROM notes WHERE note_id=?"
        );

        $stmt->bind_param("i", $id);
        return $stmt->execute();
    }

    public function getById($id) {
        $stmt = $this->conn->prepare(
            "SELECT * FROM notes WHERE note_id=?"
        );

        $stmt->bind_param("i", $id);
        $stmt->execute();
        return $stmt->get_result()->fetch_assoc();
    }

    public function update($id, $subject_id, $faculty_id, $file_path, $upload_date) {
        $stmt = $this->conn->prepare(
            "UPDATE notes
             SET subject_id=?, faculty_id=?, file_path=?, upload_date=?
             WHERE note_id=?"
        );

        $stmt->bind_param("iissi", $subject_id, $faculty_id, $file_path, $upload_date, $id);
        return $stmt->execute();
    }
}
?>