<?php
$serverName = "localhost:3306";
$userName="root";
$password="123456789";
$dbName="demo_opz";

$conn=new mysqli($serverName,$userName,$password,$dbName);
if($conn->connect_error){
    echo("Ket noi that bai: ".$conn->connect_error);
}

$stmt=$conn->prepare("INSERT INTO `demo_opz`.`opz_vn` (`name`, `age`, `gender`, `address`, `position`) VALUES (?,?,?,?,?);
");

//co bao nhien bien thi co chung do chu s
$stmt->bind_param("sssss",$name,$age,$gender,$address,$position);

$name="trung";
$age=26;
$gender="Nam";
$address="daklak";
$position="nhan vien";
$stmt->execute();

echo "da them du lieu thanh cong";

$stmt->close();
$conn->close();

