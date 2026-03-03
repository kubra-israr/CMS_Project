<?php
require_once __DIR__ . '/../config/database.php';

class SubjectModel {
    private $conn;

    public function __construct() {
        global $conn;
        $this->conn = $conn;
    }

    public function getAll() {
        $sql = "SELECT subject.*, department.department_name 
                FROM subject 
                JOIN department ON subject.department_id = department.department_id";
        return $this->conn->query($sql);
    }

    public function insert($name, $department_id, $semester) {
        $sql = "INSERT INTO subject (subject_name, department_id, semester) 
                VALUES ('$name', '$department_id', '$semester')";
        return $this->conn->query($sql);
    }

    public function getById($id) {
        $sql = "SELECT * FROM subject WHERE subject_id = $id";
        return $this->conn->query($sql)->fetch_assoc();
    }

    public function update($id, $name, $department_id, $semester) {
        $sql = "UPDATE subject 
                SET subject_name='$name', department_id='$department_id', semester='$semester' 
                WHERE subject_id=$id";
        return $this->conn->query($sql);
    }

    public function delete($id) {
        $sql = "DELETE FROM subject WHERE subject_id=$id";
        return $this->conn->query($sql);
    }
}
?>