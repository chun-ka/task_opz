<?php
$servername = "localhost:3306";
$username = "root";
$password = "123456789";
$dbname = "demo_opz";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
//Lấy ra id cuối cùng khi thêm giá trị vào bảng sao nah có thể thêm giá trị vào bảng
$last_id = $conn->insert_id;
echo $last_id;
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// sql to create table
$sql = "create table opz_vn(
    id int auto_increment primary key,
    name varchar(45) not null,
    age int not null,
    gender varchar(45) not null,
    address varchar(255) not null ,
    `position` varchar(45) not null
    )";

if ($conn->query($sql) === TRUE) {
    echo "tao bang thanh cong";
} else {
    echo "tao bang that bai" . $conn->error;
}

$conn->close();
