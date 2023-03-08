
    <?php  include('./app/includes/header.php')?>
    <?php include('./app/includes/navbar.php')?>
    <?php include('./controllers/job.php')?>
    
    <script>
          alert('<?php echo $_SESSION['name']?> Your have loged in');        
    </script>
        
    <div class="container">

        <div class="jumbotron">
            <h3 class="text-dark text-center">
                Apply for your job offer!!
            </h3>
            <div class="text-center text-dark">
                <p>Kindly before you apply for the job kindly first check whether the offer is still available.</p>
            </div>
        </div>
    
    
        <ul class="pagination pagination-sm">
                 <li><a id="get_first" style="cursor:pointer"  class="text-primary p-2"><i class="fa fa-angle-double-right"> </i> <small>1. Personal Details</small></a>
                </li>
                 <li> <a id="get_second" style="cursor:pointer" class="text-primary p-2"> <i class="fa fa-angle-double-right"></i><small>2. Vacancy </small></a></li>
                 <li><a id="get_third" style="cursor:pointer"  class="text-primary p-2"><i class="fa fa-angle-double-right"></i> <small>3. Academic Details</small></a></li>
                 <li>    <a id="get_fourth" style="cursor:pointer"  class="text-primary p-2"><i class="fa fa-angle-double-right"></i> <small>4. Submission</small></a></li>
         </ul>
          
        <div class="form-section my-5">
            
            <form action="job_application.php" method="post"  class="my-5">
          
                                 
    <div id="first">
      <?php include('./helpers/personaldetails.php')?>
       </div>

       <div id="second" style="display:none">
      <?php include('./helpers/vacancy.php')?>
       </div>

       <div id="third" style="display:none">
     <?php include("./helpers/education.php")?>
      <p>
               <button type="submit" name="submit" class="btn btn-success btn-lg" value="submit" >Submit</button>
               <button type="submit" name="reset" value="reset" class="btn btn-danger btn-lg">Reset</button>
              
         </p>
       </div>

       <div id="fourth" style="display:none">
      <?php include ('./helpers/submission.php')?>
       </div>






       
         </form>
    
            
        
        </div>
    </div>
    
    
    
    <ul class="pagination pagination-sm">
                 <li><a id="get_first" style="cursor:pointer"  class="text-primary p-2"><i class="fa fa-angle-double-right"> </i> <small>1. Personal Details</small></a>
                </li>
                 <li> <a id="get_second" style="cursor:pointer" class="text-primary p-2"> <i class="fa fa-angle-double-right"></i><small>2. Vacancy </small></a></li>
                 <li><a id="get_third" style="cursor:pointer"  class="text-primary p-2"><i class="fa fa-angle-double-right"></i> <small>3. Academic Details</small></a></li>
                 <li>    <a id="get_fourth" style="cursor:pointer"  class="text-primary p-2"><i class="fa fa-angle-double-right"></i> <small>4. Submission</small></a></li>
         </ul>
    
        <?php include('./app/includes/footer.php')?>
</body>
</html>