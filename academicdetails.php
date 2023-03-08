<?php  include('./app/includes/header.php')?>
<?php include('./app/includes/servernavbar.php')?>
<?php include('./admin.php')?>
<?php include("./controllers/connect.php")?>





<div class="col-md-10 ">


                <div class="view_body bg-secondary">
                    <div class="view_body_header my-2">
                        <h4 class="text-left text-dark my-2">Applicants Academic Details</h4>
                    </div>

                    <div class="view_body_body bg-light my-2">
                     
                      <div class="bg-light">
                      <?php



                                  $sql = "SELECT academic_details.id, academic_details.institution_name, academic_details.Grade,academic_details.Graduation,academic_details.school,academic_details.KCSE,academic_details.other_q,academic_details.vacancy, FROM academic_details  INNER JOIN personal_details on academic_details.id=personal_details.id";
                                  $stmt = $conn->prepare($sql);
                                  $stmt->execute(); 
                            ?>
                     <div class="d-flex">
                            <p> <button onclick="window.printpart()">Print this page</button></p>
                          
                           <p > <form action="./csv/academic_csv.php" method="post">
                              <button type="submit" name="submit"class="btn btn-sm btn-primary text-white">EXPORT TO CSV</button>
                            </form></p>
                            </div>
                            

                            <div id="top_print">
                          <table class="table table-striped  table-responsive table-condensed table-hover table-bordered" id="table" style="width:25%">
                         
                              <tr>
                                  <th>id</th>
                                  <th>Full Name</th>
                                  <th>Highest Institution Name</th>
                                  <th>Course Name</th>
                                  <th>Grade</th>
                                  <th>Year of Gradution</th>
                                  <th>Name of High school</th>
                                  <th>KCSE grade</th>
                                  <th>Other qualifications</th>
                                  <th>Vacancy</th>
                                
                                  

                             </tr>
                                <?php
                                 $result= mysqli_stmt_get_result($stmt);
                                 $num= mysqli_num_rows($result);
                                 if($num > 0){
                                      while($rows=mysqli_fetch_assoc($result)){?>
                                        <tr>
                                        <td><?php echo $rows['id']?></td>
                                        <td><?php echo $rows['full_name']?></td>
                                        <td><?php echo $rows['institution_name']?></td>
                                        <td><?php echo $rows['course_name']?></td>
                                        <td><?php echo $rows['Grade']?></td>
                                        <td><?php echo $rows['Graduation']?></td>
                                        <td><?php echo $rows['school']?></td>
                                        <td><?php echo $rows['KCSE']?></td>
                                        <td><?php echo $rows['other_q']?></td>
                                        <td><?php echo $rows['vacancy']?></td>
                                        
                                        
                                    
                                        

                                       
                                      
                                    </tr>
                                    <?php
                                    }
 
                                 }else{
                                     header('location:manageUsers.php?error=norecord');
                                     exit();
                                 }
                                 
                                ?>
                               
                            </table>
                                </div>
                      </div>

                    
                    </div>
  </div>       
 </div>

 <script>
    function printpart () {
      var printwin = window.open("");
      printwin.document.write(document.getElementById("top_print").innerHTML);
      printwin.stop();
      printwin.print();
      printwin.close();
    }
       </script>

 <?php include('./adminfooter.php')?>

   
