<?php

require_once __DIR__ . '/../config/database.php';

class NotesModel {

    private $conn;

    public function __construct() {
        global $conn;
        $this->conn = $conn;
    }

    public function getAll() {
        $sql = "SELECT notes.*, subject.subject_name 
                FROM notes 
                JOIN subject ON notes.subject_id = subject.subject_id";

        return $this->conn->query($sql);
    }

    public function getById($id) {
        $stmt = $this->conn->prepare("SELECT * FROM notes WHERE notes_id=?");
        $stmt->bind_param("i", $id);
        $stmt->execute();

        return $stmt->get_result()->fetch_assoc();
    }

    public function insert($subject_id, $title, $file_path, $upload_date) {
        $stmt = $this->conn->prepare(
            "INSERT INTO notes (subject_id, title, file_path, upload_date)
             VALUES (?, ?, ?, ?)"
        );

        $stmt->bind_param("isss", $subject_id, $title, $file_path, $upload_date);
        return $stmt->execute();
    }

    public function update($id, $subject_id, $title, $file_path) {
        $stmt = $this->conn->prepare(
            "UPDATE notes 
             SET subject_id=?, title=?, file_path=? 
             WHERE notes_id=?"
        );

        $stmt->bind_param("issi", $subject_id, $title, $file_path, $id);
        return $stmt->execute();
    }

    public function delete($id) {
        $stmt = $this->conn->prepare("DELETE FROM notes WHERE notes_id=?");
        $stmt->bind_param("i", $id);
        return $stmt->execute();
    }
}
?>