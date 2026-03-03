<?php
require_once __DIR__ . '/../config/database.php';

class StudentModel {

    private $conn;

    public function __construct() {
        global $conn;
        $this->conn = $conn;
    }

    public function getAll() {
        $sql = "SELECT s.*, d.department_name
                FROM student s
                LEFT JOIN department d ON s.department_id = d.department_id
                ORDER BY s.student_id DESC";

        return $this->conn->query($sql);
    }

    public function insert($first, $last, $email, $phone, $dept, $sem, $join) {
        $stmt = $this->conn->prepare(
            "INSERT INTO student 
            (first_name, last_name, email, phone, department_id, semester, join_date)
             VALUES (?, ?, ?, ?, ?, ?, ?)"
        );

        $stmt->bind_param("ssssiss", $first, $last, $email, $phone, $dept, $sem, $join);
        return $stmt->execute();
    }

    public function delete($id) {
        $stmt = $this->conn->prepare(
            "DELETE FROM student WHERE student_id=?"
        );
        $stmt->bind_param("i", $id);
        return $stmt->execute();
    }

    public function getById($id) {
        $stmt = $this->conn->prepare(
            "SELECT * FROM student WHERE student_id=?"
        );
        $stmt->bind_param("i", $id);
        $stmt->execute();
        return $stmt->get_result()->fetch_assoc();
    }

    public function update($id, $first, $last, $email, $phone, $dept, $sem, $join) {
        $stmt = $this->conn->prepare(
            "UPDATE student
             SET first_name=?, last_name=?, email=?, phone=?, department_id=?, semester=?, join_date=?
             WHERE student_id=?"
        );

        $stmt->bind_param("ssssissi", $first, $last, $email, $phone, $dept, $sem, $join, $id);
        return $stmt->execute();
    }
}
?>