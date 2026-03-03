<?php
require_once __DIR__ . '/../config/database.php';

class FacultyModel {

    private $conn;

    public function __construct() {
        global $conn;
        $this->conn = $conn;
    }

    public function getAll() {
        $sql = "SELECT faculty.*, department.department_name
                FROM faculty
                JOIN department ON faculty.department_id = department.department_id
                ORDER BY faculty_id DESC";
        return $this->conn->query($sql);
    }
    
    public function insert($first_name, $last_name, $email, $phone, $department_id, $designation, $join_date, $password) {

    $sql = "INSERT INTO faculty 
            (first_name, last_name, email, phone, department_id, designation, join_date, password) 
            VALUES (?, ?, ?, ?, ?, ?, ?, ?)";

    $stmt = $this->conn->prepare($sql);

    $stmt->bind_param(
        "ssssisss",
        $first_name,
        $last_name,
        $email,
        $phone,
        $department_id,
        $designation,
        $join_date,
        $password
    );

    return $stmt->execute();
}

    public function getById($id) {
        $stmt = $this->conn->prepare("SELECT * FROM faculty WHERE faculty_id = ?");
        $stmt->bind_param("i", $id);
        $stmt->execute();
        return $stmt->get_result()->fetch_assoc();
    }

   public function update($id, $first_name, $last_name, $email, $phone, $department_id, $designation, $join_date, $password) {

    $sql = "UPDATE faculty SET
            first_name=?,
            last_name=?,
            email=?,
            phone=?,
            department_id=?,
            designation=?,
            join_date=?,
            password=?
            WHERE faculty_id=?";

    $stmt = $this->conn->prepare($sql);

    $stmt->bind_param(
        "ssssisssi",
        $first_name,
        $last_name,
        $email,
        $phone,
        $department_id,
        $designation,
        $join_date,
        $password,
        $id
    );

    return $stmt->execute();
}
    public function delete($id) {
        $stmt = $this->conn->prepare("DELETE FROM faculty WHERE faculty_id=?");
        $stmt->bind_param("i", $id);
        return $stmt->execute();
    }
}
?>