
<?php  include('./app/includes/header.php')?>
<?php include('./app/includes/servernavbar.php')?>
<?php include('./controllers/adminreg.php')?>
<?php include('./admin.php')?>
<?php include("./controllers/connect.php")?>


<div class="col-md-10">


                <div class="view_body bg-info">
                    <div class="view_body_header my-2">
                        <h4 class="text-center text-light my-2"> Add Users</h4>
                    </div>





                    <div class="form-section">
        <div class="form-header">
            <h5 class="text-center text-dark">Login Details</h5>
        </div>
        <form action="adduser.php" method="post" style="width:50%" >
        
            <div class="form-group">
                <label for="name">Enter your Username:</label><br/>
                <input id="name" type="text" value="<?php echo (isset($_POST['name']) ? $_POST['name'] : '')?>" name="name" class="form-control" placeholder="Name/Username"/>
            </div>
        
             <div class="form-group">
                    <label for="sex">Sex:</label><br/>
                    <select id="sex" class="form-control" name="sex" value="<?php echo (isset($_POST['sex']) ? $_POST['sex'] : '')?>">
                        <option value="male">Male</option>
                        <option value="female">Female</option>
                        <option valu="other">Other</option>
                    </select>
             </div>

             <div class="form-group">
                <label for="email">Enter your Email ID:</label><br/>
                <input id="email" type="email" value="<?php echo (isset($_POST['email']) ? $_POST['email'] : '')?>" name="email" class="form-control" placeholder="Your E-mail"/>
            </div>

            <div class="form-group">
                <label for="password">Create new Password:</label><br/>
                <input id="password" type="password" value="<?php echo (isset($_POST['password']) ? $_POST['password'] : '')?>" name="password" class="form-control" placeholder="New Password"/>
            </div>
            <div class="form-group my-2">
                <label for="con_password">Confirm the Password:</label><br/>
                <input id="con_password" type="password" name="con_password" value="<?php echo (isset($_POST['con_password']) ? $_POST['con_password'] : '')?>" class="form-control" placeholder="Confirm Password"/>
            </div>

        <button type="submit" name="submit" class="btn btn-success btn-md mx-2 my-2">Register</button>
        <button type="Reset" name="submit" class="btn btn-primary btn-md mx-2 my-2">Reset</button>
      
                
        </form>
    </div>
</div>



  </div>       
 </div>

 <?php include('./adminfooter.php')?>

   





























































