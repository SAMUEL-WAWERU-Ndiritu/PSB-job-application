<?php
include('../controllers/connect.php');
if(isset($_POST['submit'])){


$filename = "academic_details.csv";
$fp = fopen('php://output', 'w');

$query = "SELECT COLUMN_NAME FROM INFORMATION_SCHEMA.COLUMNS WHERE TABLE_SCHEMA='school_big_project'";
$result = mysqli_query($conn,$query);
while ($row = mysqli_fetch_row($result)) {
    $header[] = $row[0];
}	

header('Content-type: application/csv');
header('Content-Disposition: attachment; filename='.$filename);
fputcsv($fp, $header);

$query="SELECT academic_details.id, academic_details.primary_institution,academic_details.primary_year, academic_details.primary_Qualification,academic_details.Secondary_institution,academic_details.Secondary_year, academic_details.Secondary_Qualification,academic_details.Tertaily,academic_details.Tertaily_institution, academic_details.Tertaily_year, academic_details.Tertaily_Qualification,academic_details.vacancy,academic_details.name_file,academic_details.declaration_status, academic_details.time_stamp,personal_details.full_name FROM academic_details  INNER JOIN personal_details on academic_details.id=personal_details.id";
$result = mysqli_query($conn, $query);
while($row = mysqli_fetch_row($result)) {
    fputcsv($fp, $row);
}
exit();
}
?>