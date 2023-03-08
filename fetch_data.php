<?php
require_once ('./controllers/connect.php');
if(isset($_POST['action'])){
    $query  = "SELECT personal_details.id,personal_details.full_name,personal_details.sex,personal_details.date_of_birth,academic_details.vacancy,academic_details.KCSE,academic_details.institution_name,academic_details.course_name  FROM personal_details INNER JOIN academic_details on personal_details.id = academic_details.id";
  

if(isset($_POST['date_of_birth'])){
  $date_of_birth_filter = implode("','",$_POST['date_of_birth']);
  $query .="
  AND date_of_birth IN('".$date_of_birth_filter."')
  ";
}
if(isset($_POST['sex'])){
    $sex_filter = implode("','",$_POST['sex']);
    $query .="
    AND sex IN('".$sex_filter."')
    ";
  }
if(isset($_POST['vacancy'])){
  $vacancy_filter = implode("','",$_POST['vacancy']);
  $query .="
  AND vacancy IN('".$vacancy_filter."')
  ";
}
if(isset($_POST['KCSE'])){
  $KCSE_filter = implode("','",$_POST['KCSE']);
  $query .="
  AND KCSE IN('".$KCSE_filter."')
  ";
}

if(isset($_POST['institution_name'])){
  $institution_name_filter = implode("','",$_POST['institution_name']);
  $query .="
  AND institution_name IN('".$institution_name_filter."')
  ";
}

if(isset($_POST['course_name'])){
  $course_name_filter = implode("','",$_POST['course_name']);
  $query .="
  AND course_name  IN('".$course_name_filter."')
  ";
}

  
    
$result= mysqli_query($conn,$query);
$rowCount= mysqli_num_rows($result);
$output= '';
                




?>
         
            <h3 class="text-center">APPLICANT RECORD</h3>
            <div class="table-responsive">
            <table class="table table-border table-striped">
                                  <th>id</th>
                                  <th>Full Name</th>
                                  <th>Gender</th>
                                  <th>DOB</th>
                                  <th>Vacancy</th>
                                  <th>Institution Name</th>
                                  <th>Course Name</th>
                                  <th>KCSE</th>
                                  
                                  
                                  


                             </tr>
                             <?php
    if($rowCount > 0){
      while($row= mysqli_fetch_assoc($result)){
           $output .= '
           <tr>
           <td>'.$row['id'].'</td>
           <td>'.$row['full_name'].'</td>
           <td>'.$row['sex'].'</td>
           <td>'.$row['date_of_birth'].'</td>
           <td>'.$row['vacancy'].'</td>
           <td>'.$row['institution_name'].'</td>
           <td>'.$row['course_name'].'</td>
           <td>'.$row['KCSE'].'</td>
          
          
          
            
          </tr>

           
           
           ';
    }
}
   else
   {
     $output = '<h3>No Date Found</h3>';
   }
   echo $output;
  }
   ?>
</table>
</div>



  
