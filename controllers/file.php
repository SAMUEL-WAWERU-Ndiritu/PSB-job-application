<?php   
if(isset($file)){
  $name= $_POST['name'];
  $fname = $_FILES['file']['name'];
  $size = $_FILES['file']['size'];
  $type= $_FILES['file']['type'];
  $tmp_name= $_FILES['file']['tmp_name'];
  $error = $_FILES['file']['error'];


  $file_extension = explode('.',$fname);
  $tmp_extension = strtolower(end($file_extension));
  $required = array('pdf','docx',"txt","csv",'jpeg',"jpg",'png',"xls");
   if(in_array($tmp_extension,$required)){
       if($error==0){

         if($size > 30000000){
             $newName = uniq('',true).".".$tmp_extension;
             $newFileLocation = '../uploadFiles/'.$newName;
             $sql =  "INSERT INTO upload_files( name,name_files) VALUES (?,?)";
            $stmt_1= $conn->prepare($sql);
             $stmt_1->bind_param('ss',$name,$newName);
            $stmt_1->execute();
            move_uploaded_file($tmp_name,$newFileLocation);
            header('location:job_application.php?success');
            exit();

       
       

             exit();
         }else{
            $error = "The file is too large";
            header('location:job_application.php?error=filetoolarge');
            exit();
         }
       }else{
        $error = "An error occured while uploading the file";
        header('location:job_application.php?error=fileuploaderror');
        exit();
       }

   }else{
       $error = "The file type is not acceptable";
       header('location:job_application.php?error=filetypeerror');
       exit();
   }


}


?>