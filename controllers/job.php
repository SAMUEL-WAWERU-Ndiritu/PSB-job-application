<?php
include('connect.php');

if(isset($_POST['submit'])){

 function test_input($data){
     $data = trim($data);
     $data=  stripslashes($data);
     $data= htmlspecialchars($data);
     return($data);
 }
#personal details
 $name = test_input($_POST['full_name']);
 $date_of_birth= test_input($_POST['date_of_birth']);
 $id_number = test_input($_POST['id_number']);
 $sex = test_input($_POST['sex']);
 $ethnicity = test_input($_POST['ethnicity']);
 $county = test_input($_POST['county']);
 $division = test_input($_POST['division']);
 $ward= test_input($_POST['ward']);
 $email = test_input($_POST['email']);
 $tel = test_input($_POST['tel']);
 $disability = test_input($_POST['disability']);
  # academic details

  $institution_name = test_input($_POST['institution_name']);
  $institution_name = test_input($_POST['course_name']);
  $Grade = test_input($_POST['Grade']);
  $Graduation= test_input($_POST['Graduation']);
  $school = test_input($_POST['school']);
  $KCSE= test_input($_POST['KCSE']);
  $other_q = test_input($_POST['other_q']);
  

  # perent info

  $vacancy = test_input($_POST['vacancy']);

 


  
  
 


 if(empty($name) || empty($date_of_birth) || empty($id_number) || empty($sex) || empty($ethnicity) || empty($county) || empty($division) || empty($ward) || empty($email) || empty($tel)||empty($disability) || empty($institution_name) ||empty($course_name) || empty($Grade) || empty($Graduation) || empty($school) || empty($KCSE) || empty($other_q) || empty($vacancy)){

     $error= "Kindly input all the fields";
     header("location:job_application.php?error=emptyfields");   

 }else{  

    $sql =  "INSERT INTO personal_details( full_name, date_of_birth, id_number, sex, ethnicity, county, division, ward, email, tel, disability) VALUES (?,?,?,?,?,?,?,?,?,?,?)";
     $sql_1 = "INSERT INTO academic_details(institution_name,course_name, Grade,Graduation,school,KCSE,other_q,vacancy, time_stamp) VALUES (?,?,?,?,?,?,?,?,?)";


    $stmt_1= $conn->prepare($sql);
    $stmt_2 = $conn->prepare($sql_1 );
    
       $stmt_1->bind_param('sssssssssss',$name,$date_of_birth,$id_number,$sex,$ethnicity,$county,$division,$ward,$email,$tel,$disability);
       $stmt_2->bind_param('ssssssss',$institution_name,$course_name, $Grade,$Graduation,$school,$KCSE,$other_q,$vacancy);
       $stmt_1->execute();
       $stmt_2->execute();
       
    
  
   
    }
 }





?>