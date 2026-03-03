<?php
require_once __DIR__ . '/../config/database.php';

class AttendanceModel {

    private $conn;

    public function __construct() {
        global $conn;
        $this->conn = $conn;
    }

    public function getAll() {
        $sql = "SELECT a.*, 
                       f.first_name,
                       f.last_name,
                       s.subject_name,
                       (a.attended_classes / a.total_classes * 100) AS percentage
                FROM attendance a
                LEFT JOIN faculty f ON a.faculty_id = f.faculty_id
                LEFT JOIN subject s ON a.subject_id = s.subject_id
                ORDER BY a.attendance_id DESC";

        return $this->conn->query($sql);
    }

    public function insert($faculty_id, $subject_id, $date, $total, $attended) {
        $stmt = $this->conn->prepare(
            "INSERT INTO attendance (faculty_id, subject_id, attendance_date, total_classes, attended_classes)
             VALUES (?, ?, ?, ?, ?)"
        );

        $stmt->bind_param("iisii", $faculty_id, $subject_id, $date, $total, $attended);
        return $stmt->execute();
    }

    public function delete($id) {
        $stmt = $this->conn->prepare(
            "DELETE FROM attendance WHERE attendance_id=?"
        );

        $stmt->bind_param("i", $id);
        return $stmt->execute();
    }

    public function getById($id) {
        $stmt = $this->conn->prepare(
            "SELECT * FROM attendance WHERE attendance_id=?"
        );

        $stmt->bind_param("i", $id);
        $stmt->execute();
        return $stmt->get_result()->fetch_assoc();
    }

    public function update($id, $faculty_id, $subject_id, $date, $total, $attended) {
        $stmt = $this->conn->prepare(
            "UPDATE attendance
             SET faculty_id=?, subject_id=?, attendance_date=?, total_classes=?, attended_classes=?
             WHERE attendance_id=?"
        );

        $stmt->bind_param("iisiii", $faculty_id, $subject_id, $date, $total, $attended, $id);
        return $stmt->execute();
    }
}
?>