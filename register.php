<?php  include('./app/includes/header.php')?>
<?php include('./app/includes/navbar.php')?>
<?php include('./controllers/reg.php')?>

    
<div class="container">
    <div class="jumbotron">
        <h3 class="text-dark text-center">
            Register With Us Now!!
        </h3>
        <div class="text-center text-dark">
            <p>Register Today and get your Bursary offers.
Apply to them in just one click. </p>
        </div>
    </div>



    <div class="form-section">
        <div class="form-header">
            <h5 class="text-center text-dark">Your Login Detials</h5>
        </div>
        <form action="register.php" method="post">
      
            <div class="form-group">
                <label for="name">Enter your Username:</label><br/>
                <input id="name" type="text" name="name" value="<?php echo (isset($_POST['name']) ? $_POST['name'] : '')?>" class="form-control" placeholder="Name/Username"/>
            </div>
        
             <div class="form-group">
                    <label for="sex">Sex:</label><br/>
                    <select id="sex" class="form-control" name="sex"  value="<?php echo (isset($_POST['sex']) ? $_POST['sex'] : '')?>">
                        <option value="male">Male</option>
                        <option value="female">Female</option>
                        <option value="other">Other</option>
                    </select>
             </div>

             <div class="form-group">
                <label for="email">Enter your Email ID:</label><br/>
                <input id="email" type="email" name="email" value="<?php echo (isset($_POST['email']) ? $_POST['email'] : '')?>"class="form-control" placeholder="Your E-mail"/>
            </div>

            <div class="form-group">
                <label for="password">Create new Password:</label><br/>
                <input id="password" type="password" value="<?php echo (isset($_POST['password']) ? $_POST['password'] : '')?>" name="password" class="form-control" placeholder="New Password"/>
            </div>
            <div class="form-group my-2">
                <label for="con_password">Confirm the Password:</label><br/>
                <input id="con_password" type="password" value="<?php echo (isset($_POST['con_password']) ? $_POST['con_password'] : '')?>" name="con_password" class="form-control" placeholder="Confirm Password"/>
            </div>

        <button type="submit" name="submit" class="btn btn-success btn-md mx-2 my-2">Register</button>
        <button type="Reset" name="submit" class="btn btn-primary btn-md mx-2 my-2">Reset</button>
        <p>Already have an account <a href="./login.php">Login here</a></p>
                
        </form>
    </div>
</div>





    <?php include('./app/includes/footer.php')?>