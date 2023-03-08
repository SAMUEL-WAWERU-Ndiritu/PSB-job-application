<?php
include('connect.php');


if(isset($_POST['submit'])){

 function test_input($data){
     $data = trim($data);
     $data=  stripslashes($data);
     $data= htmlspecialchars($data);
     return($data);
 }


 $email= test_input($_POST['email']);
 $password= test_input($_POST['password']);



 if(empty($email) || empty($password) ){
     $error= "Kindly input all the fields";
     header("location:login.php?error=inputnotfilled");
     exit();
     
 }elseif(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $error ="Invalid email format"; 
    header("location:login.php?error=invalidamil");
    exit();

}else{
    $sql = "SELECT * FROM  user_registration WHERE email=?";
    $stmt=mysqli_stmt_init($conn);
    $error="SQL error";
    if(!mysqli_stmt_prepare($stmt,$sql)){
     header("location:login.php?error=sqlerror");
     
     exit();
    }else{
       mysqli_stmt_bind_param($stmt,"s",$email);
       mysqli_stmt_execute($stmt);
       $result=mysqli_stmt_get_result($stmt);
       if($row= mysqli_fetch_assoc($result)){
          $comparePass= password_verify($password,$row["password"]);
          if($comparePass==false){
            $error="Password don't match";
             header("location:login.php?error=wrongpassword");
          
             exit();
          }elseif($comparePass==true){
           
                 if($row['type']){
                   $_SESSION['admin'] = $row['id'];
                   $_SESSION['name'] = $row['name'];
                   $_SESSION['email'] = $row['email'];
                  header("location:adduser.php?loginsuccessfully");
                  
                  exit();
                 }else{
                   $_SESSION['user'] = $row['id'];
                   $_SESSION['name'] = $row['name'];
                   $_SESSION['email'] = $row['email'];
                  header("location:job_application.php?loginsuccessfully");
                  
                exit();
                 }
            
          }else{
            $error="Password don't match";
             header("location:login.php?error=wrongpassword");
             exit();
          }
       }else{
       $error="email don't exit";
         header("location:login.php?error=emaildoesnotexist");
         exit();
       }

    }
}


}


?>