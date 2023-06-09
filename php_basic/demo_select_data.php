<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <style>
        table,th,tr,td{
           border-collapse: collapse;
            border: 1px solid;
        }
    </style>
</head>
<body>

<?php
$servername = "localhost:3306";
$username = "root";
$password = "123456789";
$dbname = "demo_opz";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM opz_vn";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<table ><tr><th>ID</th><th>Name</th><th>Age</th><th>Gender</th><th>Address</th><th>Position</th></tr>";
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>".$row["id"]."</td><td>".$row["name"]."</td><td> ".$row["age"]."</td><td>".$row["gender"]."</td><td>".$row["address"]."</td><td>".$row["position"]."</td></tr>";
    }
    echo "</table>";
} else {
    echo "0 results";
}
$conn->close();
?>
</body>
</html>