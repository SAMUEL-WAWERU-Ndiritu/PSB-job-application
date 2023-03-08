<?php  include('./app/includes/header.php')?>
<?php include('./app/includes/navbar.php')?>
<?php include('./controllers/log.php')?>

    
<div class="container">
    <div class="jumbotron">
        <h3 class="text-dark text-center">
            Login In Your Account Now!!
        </h3>
        <div class="text-center text-dark">
            <p>Login Today and get a chance to apply jobs.</p>
        </div>
    </div>



    <div class="form-section my-5">
        <div class="form-header">
            <h5 class="text-center text-dark">Your Login Detials</h5>
        </div>
        <form action="login.php" method="post" class="my-5">
        
        
             <div class="form-group">
                <label for="email">Enter your Email ID:</label><br/>
                <input id="email" type="email" name="email" value="<?php echo (isset($_POST['email']) ? $_POST['email'] : '')?>" class="form-control" placeholder="Your E-mail"/>
            </div>

            <div class="form-group">
                <label for="password">Your Password:</label><br/>
                <input id="password" type="password" name="password" value="<?php echo (isset($_POST['password']) ? $_POST['password'] : '')?>" class="form-control" placeholder="New Password"/>
            </div>


        <button type="submit" name="submit" class="btn btn-success btn-md mx-2 my-2 mb-5">Login</button>
        <p class="my-2">To create an account <a href="./register.php">Register here</a></p>        
        </form>
        
    
    </div>
</div>





    <?php include('./app/includes/footer.php')?>