<?php
include('connect.php');

if(isset($_POST['submit'])){

 function test_input($data){
     $data = trim($data);
     $data=  stripslashes($data);
     $data= htmlspecialchars($data);
     return($data);
 }

 $name = test_input($_POST['name']);
 $sex = test_input($_POST['sex']);
 $email= test_input($_POST['email']);
 $password= test_input($_POST['password']);
 $con_password= test_input($_POST['con_password']);


 if(empty($name) || empty($sex) || empty($email) || empty($password) || empty($con_password)){
     $error= "Kindly input all the fields";
     header("location:register.php?error=emptyfields");
     exit();
     
 }elseif(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $error = "Invalid email format"; 
}elseif(!preg_match("/^[a-zA-Z ]*$/",$name)){
    $error= "Only letters and white space allowed";
    header("location:register.php?error=invelidname");
    exit();

}elseif($password !== $con_password){
    $error= "Password don't match";
    header("location:register.php?error=passworddon'tmatch");
    exit();
}else{

    $sql = "SELECT email FROM user_registration WHERE email=$email";
    $result = $conn->query($sql);
    if($result->num_rows > 0 ){
        $error= "The email already exit try another one";
        header("location:register.php?error=emailexit");
        exit();

    }else{
        $sql= "INSERT INTO user_registration(name,sex,email,password)VALUES(?,?,?,?)";
        $stmt= $conn->prepare($sql);
        $hash_pass= password_hash($password,PASSWORD_DEFAULT);
        $stmt->bind_param('ssss',$name,$sex,$email,$hash_pass);
        $stmt->execute();
        $_SESSION['name'] = $name;
        header("location:job_application.php");
        exit();
    }
}
}

?>