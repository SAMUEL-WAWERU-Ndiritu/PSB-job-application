<?php  include('./app/includes/header.php')?>
<?php include('./app/includes/servernavbar.php')?>
<?php include('./admin.php')?>
<?php include("./controllers/connect.php")?>


<div class="col-md-10 ">


                <div class="view_body bg-secondary">
                    <div class="view_body_header my-2">
                        <h4 class="text-left text-dark my-2"> Manage Users</h4>
                    </div>

                    <div class="view_body_body bg-light my-2">
                      <h6 ><button type="button" class="btn btn-sm btn-primary text-light"><a href="./adduser.php"class="text-light" >+New</a></button></h6>


                      <div class="bg-light">
                      <?php
                                  $sql = "SELECT id, name, sex, email FROM user_registration";
                                  $stmt = $conn->prepare($sql);
                                  $stmt->execute(); 
                            ?>

                          <div class="d-flex">
                            <p> <button onclick="window.printpart()">Print this page</button></p>
                          
                           <p > <form action="./csv/manageusers_csv.php" method="post">
                              <button type="submit" name="submit"class="btn btn-sm btn-primary text-white">EXPORT TO CSV</button>
                            </form></p>
                            </div>
                            
                            <div id="top_print">
                          <table class="table table-striped  table-responsive t/able-condenced table-bordered" style="width:80%">
                         
                              <tr>
                                 <th>Id</th>
                                  <th>Name</th>
                                  <th>Gender</th>
                                  <th>Email</th>
                             </tr>
                                <?php
                                 $result= mysqli_stmt_get_result($stmt);
                                 $num= mysqli_num_rows($result);
                                 if($num > 0){
                                      while($rows=mysqli_fetch_assoc($result)){?>
                                        <tr>
                                        <td><?php echo $rows['id']?></td>
                                        <td><?php echo $rows['name']?></td>
                                        <td><?php echo $rows['sex']?></td>
                                        <td><?php echo $rows['email']?></td>
                                       
                                      
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

   