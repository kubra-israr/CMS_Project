<?php
require_once __DIR__ . '/../config/database.php';

class DepartmentModel {

    private $conn;

    public function __construct() {
        global $conn;
        $this->conn = $conn;
    }

    // CREATE
    public function create($department_name) {
        $stmt = $this->conn->prepare("INSERT INTO department (department_name) VALUES (?)");
        $stmt->bind_param("s", $department_name);
        return $stmt->execute();
    }

    // READ (ALL)
    public function getAll() {
        $result = $this->conn->query("SELECT * FROM department ORDER BY department_id DESC");
        return $result;
    }

    // GET BY ID
    public function getById($id) {
        $stmt = $this->conn->prepare("SELECT * FROM department WHERE department_id = ?");
        $stmt->bind_param("i", $id);
        $stmt->execute();
        return $stmt->get_result()->fetch_assoc();
    }

    // UPDATE
    public function update($id, $department_name) {
        $stmt = $this->conn->prepare("UPDATE department SET department_name = ? WHERE department_id = ?");
        $stmt->bind_param("si", $department_name, $id);
        return $stmt->execute();
    }

    // DELETE
    public function delete($id){

        $conn = $this->conn;

        $stmt1 = $conn->prepare("DELETE FROM faculty WHERE department_id=?");
        $stmt1->bind_param("i",$id);
        $stmt1->execute();

        $stmt2 = $conn->prepare("DELETE FROM department WHERE department_id=?");
        $stmt2->bind_param("i",$id);
        $stmt2->execute();
    }

}   
?>