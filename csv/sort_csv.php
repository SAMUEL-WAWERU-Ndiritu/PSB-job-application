<?php
include('../controllers/connect.php');


if(isset($_POST['submit'])){


$filename = "sort_details.csv";
$fp = fopen('php://output', 'w');

$sql = "SELECT COLUMN_NAME FROM INFORMATION_SCHEMA.COLUMNS WHERE TABLE_SCHEMA='school_big_project'";
$result = mysqli_query($conn,$sql);
while ($row = mysqli_fetch_row($result)) {
    $header[] = $row[0];
}	

header('Content-type: application/csv');
header('Content-Disposition: attachment; filename='.$filename);
fputcsv($fp, $header);

$query  = "SELECT personal_details.id,personal_details.full_name,personal_details.sex,personal_details.date_of_birth,personal_details.disability,academic_details.Secondary_Qualification,academic_details.Secondary_year,academic_details.Tertaily,academic_details.Tertaily_institution,academic_details.Tertaily_Qualification,academic_details.Tertaily_year,academic_details.vacancy FROM personal_details INNER JOIN academic_details on personal_details.id = academic_details.id";
$result = mysqli_query($conn, $query);
while($row = mysqli_fetch_row($result)) {
    fputcsv($fp, $row);
}
exit();
}