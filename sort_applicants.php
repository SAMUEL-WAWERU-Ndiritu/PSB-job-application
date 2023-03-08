<?php
require_once("./controllers/connect.php");
require_once('./app/includes/header.php');
require_once('./fetch_data.php');



$count = 0;
?>
<?php include('./app/includes/servernavbar.php')?>

            <?php include("./admin.php") ?>

            <div class="col-md-8">

<div>

                       <div class="d-flex">
                       <p> <button onclick="window.printpart()">Print this page</button></p>
                          
                           <p > <form action="./csv/sort_csv.php" method="post">
                              <button type="submit" name="submit"class="btn btn-sm btn-primary text-white">EXPORT TO CSV</button>
                            </form></p>
                            </div>


    <div class="row"> 
        <div id="toprint">
        <div class="filter_data">

        </div>

   
</div>
    </div>
</div>

</div>



            <div class="col-md-2 bg-dark mx-0">

            <div class="list-group">
                    <h6 class="text-light">Date of Birth</h6>
                    <?php
                    $query="SELECT DISTINCT(date_of_birth) FROM personal_details  ORDER BY id DESC";
                    $result= mysqli_query($conn,$query);
                    $rowCount= mysqli_num_rows($result);
                    if($rowCount > 0){
                        while($row= mysqli_fetch_assoc($result)){
                        ?>
                        <div class="list-group-item checkbox bg-warning">
                            <label>
                                <input type="checkbox" class="common_selector date_of_birth " value="<?php echo $row['date_of_birth'];?>"><?php echo $row['date_of_birth'];?>  
                            </label> 
                        </div>
                        <?php
                    }
                }
                    ?>
                    </div>
            
                    <div class="list-group">
                    <h6 class="text-light">Gender</h6>
                    <?php
                    $query="SELECT DISTINCT(sex) FROM personal_details ORDER BY id DESC";
                    $result= mysqli_query($conn,$query);
                    $rowCount= mysqli_num_rows($result);
                    if($rowCount > 0){
                        while($row= mysqli_fetch_assoc($result)){
                        ?>
                        <div class="list-group-item checkbox bg-warning">
                            <label>
                                <input type="checkbox" class="common_selector sex" value="<?php echo $row['sex'];?>"><?php echo $row['sex'];?>  
                            </label> 
                        </div>
                        <?php
                    }
                }
                
                    ?>
                    </div>
            
            
                    <div class="list-group">
                    <h6 class="text-light">VACANCY</h6>
                    <?php
                    $query="SELECT DISTINCT(vacancy) FROM academic_details ORDER BY id DESC";
                    $result= mysqli_query($conn,$query);
                    $rowCount= mysqli_num_rows($result);
                    if($rowCount > 0){
                        while($row= mysqli_fetch_assoc($result)){
                        ?>
                        <div class="list-group-item checkbox bg-warning">
                            <label>
                                <input type="checkbox" class="common_selector vacancy " value="<?php echo $row['vacancy'];?>"><?php echo $row['vacancy'];?>  
                            </label> 
                        </div>
                        <?php
                    }
                }
                    ?>
                    </div>
            
            
            
                    <div class="list-group">
                    <h6 class="text-light">KCSE GRADE</h6>
                    <?php
                    $query="SELECT DISTINCT(KCSE) FROM 	academic_details ORDER BY id DESC";
                    $result= mysqli_query($conn,$query);
                    $rowCount= mysqli_num_rows($result);
                    if($rowCount > 0){
                        while($row= mysqli_fetch_assoc($result)){
                        ?>
                        <div class="list-group-item checkbox bg-warning">
                            <label>
                                <input type="checkbox" class="common_selector KCSE" value="<?php echo $row['KCSE'];?>"><?php echo $row['KCSE'];?>  
                            </label> 
                        </div>
                        <?php
                    }
                }
                    ?>
                    </div>
            
            
            
                    <div class="list-group">
                    <h6 class="text-light">Institution Name</h6>
                    <?php
                    $query="SELECT DISTINCT(institution_name) FROM academic_details ORDER BY id DESC";
                    $result= mysqli_query($conn,$query);
                    $rowCount= mysqli_num_rows($result);
                    if($rowCount > 0){
                        while($row= mysqli_fetch_assoc($result)){
                        ?>
                        <div class="list-group-item checkbox bg-warning">
                            <label>
                                <input type="checkbox" class="common_selector institution_name" value="<?php echo $row['institution_name'];?>"><?php echo $row['institution_name'];?>  
                            </label> 
                        </div>
                        <?php
                    }
                }
                    ?>
                    </div> 

                    
                    <div class="list-group">
                    <h6 class="text-light">Course Name</h6>
                    <?php
                    $query="SELECT DISTINCT(course_name) FROM academic_details ORDER BY id DESC";
                    $result= mysqli_query($conn,$query);
                    $rowCount= mysqli_num_rows($result);
                    if($rowCount > 0){
                        while($row= mysqli_fetch_assoc($result)){
                        ?>
                        <div class="list-group-item checkbox bg-warning">
                            <label>
                                <input type="checkbox" class="common_selector course_name" value="<?php echo $row['course_name'];?>"><?php echo $row['course_name'];?>  
                            </label> 
                        </div>
                        <?php
                    }
                }
                    ?>
                    </div> 
            
            
            
            
            
            
                  
            


            </div>
            









        </div>
    </div>

    
    <script>
    function printpart () {
      var printwin = window.open("");
      printwin.document.write(document.getElementById("toprint").innerHTML);
      printwin.stop();
      printwin.print();
      printwin.close();
    }
       </script>


<?php include('./app/includes/footer.php')?>