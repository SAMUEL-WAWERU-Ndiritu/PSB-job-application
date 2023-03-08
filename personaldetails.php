<?php  include('./app/includes/header.php')?>
<?php include('./app/includes/servernavbar.php')?>
<?php include('./admin.php')?>
<?php include("./controllers/connect.php")?>


<div class="col-md-10 ">


                <div class="view_body bg-secondary">
                    <div class="view_body_header my-2">
                        <h4 class="text-left text-dark my-2">Applicants Personal Details</h4>
                    </div>

                    <div class="view_body_body bg-light my-2">
                     
                      <div class="bg-light">
                      <?php





                                  $sql = "SELECT id, full_name, date_of_birth, id_number, sex, ethnicity, county, division, ward, email, tel, disability FROM personal_details";
                                  $stmt = $conn->prepare($sql);
                                  $stmt->execute(); 
                            ?>
                            <div class="d-flex">
                            <p> <button onclick="window.printpart()">Print this page</button></p>
                          
                           <p > <form action="./csv/personaldetails_csv.php" method="post">
                              <button type="submit" name="submit"class="btn btn-sm btn-primary text-white">EXPORT TO CSV</button>
                            </form></p>
                            </div>
                          
                            <div id="top_print">
                          <table class="table table-striped  table-responsive table-condensed table-hover table-bordered" id="table" style="width:50%" name="test.csv">
                         
                              <tr>
                                  <th>id</th>
                                  <th>Full Name</th>
                                  <th>DOB</th>
                                  <th>Id No</th>
                                  <th>Gender</th>
                                  <th>Ethnicity</th>
                                  <th>County</th>
                                  <th>Division</th>
                                  <th>Ward</th>
                                  <th>Email</th>
                                  <th>Tel</th>
                                  <th>Disability</th>
                                  


                             </tr>
                                <?php
                                 $result= mysqli_stmt_get_result($stmt);
                                 $num= mysqli_num_rows($result);
                                 if($num > 0){
                                      while($rows=mysqli_fetch_assoc($result)){?>
                                        <tr>
                                        <td><?php echo $rows['id']?></td>
                                        <td><?php echo $rows['full_name']?></td>
                                        <td><?php echo $rows['date_of_birth']?></td>
                                        <td><?php echo $rows['id_number']?></td>
                                        <td><?php echo $rows['sex']?></td>
                                        <td><?php echo $rows['ethnicity']?></td>
                                        <td><?php echo $rows['county']?></td>
                                        <td><?php echo $rows['division']?></td>
                                        <td><?php echo $rows['ward']?></td>
                                        <td><?php echo $rows['email']?></td>
                                        <td><?php echo $rows['tel']?></td>
                                        <td><?php echo $rows['disability']?></td>
                                        

                                       
                                      
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

   
