<?php

$localhost= 'localhost';
$root = 'root';
$password = '';
$dbname = 'bursary_project';


$conn= new mysqli($localhost,$root,$password,$dbname);
if(mysqli_connect_error()){
    die("Error in connection".$conn->mysqli_connect_error());
    exit();
}




?>