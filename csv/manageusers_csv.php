<?php
include('../controllers/connect.php');


if(isset($_POST['submit'])){


    $filename = "User Registration List.csv";
    $fp = fopen('php://output', 'w');
    
    $query = "SELECT COLUMN_NAME FROM INFORMATION_SCHEMA.COLUMNS WHERE TABLE_SCHEMA='school_big_project' AND TABLE_NAME='user_registration'";
    $result = mysqli_query($conn,$query);
    while ($row = mysqli_fetch_row($result)) {
        $header[] = $row[0];
    }	
    
    header('Content-type: application/csv');
    header('Content-Disposition: attachment; filename='.$filename);
    fputcsv($fp, $header);
    
    $query ="SELECT id, name, sex, email FROM user_registration";
    $result = mysqli_query($conn, $query);
    while($row = mysqli_fetch_row($result)) {
        fputcsv($fp, $row);
    }
    exit();
}
?>