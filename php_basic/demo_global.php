<?php
//print_r($_SERVER);
//print_r($_POST);
if (isset($_GET['name'])) {
    echo($_GET['name']."<br>");
}
$name=$_GET['name']??'không có gì';
echo "$name";
