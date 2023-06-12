<?php
class UserModel {
    private mysqli $db;

    public function __construct() {
        $this->db = new mysqli('localhost:3306', 'root', '123456789', 'demo_opz');
        if ($this->db->connect_error) {
            die('Connection failed: ' . $this->db->connect_error);
        }
    }

    public function getUsers(): array
    {
        $query = "SELECT * FROM `opz_vn`";
        $result = $this->db->query($query);
        $users = [];
        while ($row = $result->fetch_assoc()) {
            $users[] = $row;
        }
        return $users;
    }
    public function addUser($name, $age,$gender,$address,$position): bool
    {
        $query = "INSERT INTO opz_vn (name, age,gender,address,position) VALUES ('$name', '$age','$gender','$address','$position')";
        $result = $this->db->query($query);
        if ($result) {
            return true;
        } else {
            return false;
        }
    }

    public function updateUser($id, $name,$age,$gender,$address,$position): bool
    {
        $query = "UPDATE opz_vn SET name='$name', age='$age', gender='$gender', address='$address', position='$position' WHERE id=$id";
        $result = $this->db->query($query);
        if ($result) {
            return true;
        } else {
            return false;
        }
    }

    public function deleteUser($id): bool
    {
        $query = "DELETE FROM `opz_vn` WHERE id=$id";
        $result = $this->db->query($query);
        if ($result) {
            return true;
        } else {
            return false;
        }
    }
}
