<?php
$servername = "localhost:3306";
$username = "root";
$password = "123456789";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql="create database demo_opz";
if ($conn->query($sql)===true){
    echo "database da duoc tao";
}else{
    echo "tao database that bai".$conn->error;
}
$conn->close();

