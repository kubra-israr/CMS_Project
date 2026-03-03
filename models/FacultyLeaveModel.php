<?php
require_once __DIR__ . '/../config/database.php';

class FacultyLeaveModel {

    private $conn;

    public function __construct() {
        global $conn;
        $this->conn = $conn;
    }

    public function getAll() {
        $sql = "SELECT fl.*, f.first_name, f.last_name
                FROM faculty_leave fl
                JOIN faculty f ON fl.faculty_id = f.faculty_id
                ORDER BY fl.leave_id DESC";

        return $this->conn->query($sql);
    }

    public function insert($faculty_id, $leave_type, $from, $to, $reason) {
        $stmt = $this->conn->prepare(
            "INSERT INTO faculty_leave (faculty_id, leave_type, from_date, to_date, reason)
             VALUES (?, ?, ?, ?, ?)"
        );
        $stmt->bind_param("issss", $faculty_id, $leave_type, $from, $to, $reason);
        return $stmt->execute();
    }

    public function delete($id) {
        $stmt = $this->conn->prepare(
            "DELETE FROM faculty_leave WHERE leave_id=?"
        );
        $stmt->bind_param("i", $id);
        return $stmt->execute();
    }

    public function getById($id) {
        $stmt = $this->conn->prepare(
            "SELECT * FROM faculty_leave WHERE leave_id=?"
        );
        $stmt->bind_param("i", $id);
        $stmt->execute();
        return $stmt->get_result()->fetch_assoc();
    }

    public function update($id, $leave_type, $from, $to, $reason, $status) {
        $stmt = $this->conn->prepare(
            "UPDATE faculty_leave
             SET leave_type=?, from_date=?, to_date=?, reason=?, status=?
             WHERE leave_id=?"
        );
        $stmt->bind_param("sssssi", $leave_type, $from, $to, $reason, $status, $id);
        return $stmt->execute();
    }
}
?>