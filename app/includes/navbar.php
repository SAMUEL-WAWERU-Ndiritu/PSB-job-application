<div class="container-fluid">
        <div class="row">
        <nav class="navbar  navbar-expand-lg navbar-light bg-info">
            <a class="navbar-brand text-danger px-3" href='<?php echo BASE_URL."/index.php"?>'>Online recruitment system<br/> <small class="text-white mx-5"> <?php echo isset($_SESSION['name']) ? $_SESSION['name'] : "" ?></small></a>
 
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
         
            <div class="collapse navbar-collapse " id="navbarNav">
              <ul class="navbar-nav  m-auto">
                <li class="nav-item active">
                  <a class="nav-link text-light" href='<?php echo BASE_URL."/index.php"?>'>Home</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link text-light" href="#recent_jobs">Available Jobs</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link text-light" href="#employer">County executives</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link text-light" href="#contact">Contact Us</a>
                </li>
                
                <li class="nav-item pull-right mx-5">
                  <ul>
                    <li>
                    <a class="nav-link text-light" href='<?php echo BASE_URL."/register.php"?>'>Register</a>
                    </li>
                    <li>
                    <a class="nav-link text-light" href='<?php echo BASE_URL."/login.php"?>'>Login</a>
                    </li>

                  </ul>
                </li>
              </ul>
            </div>
        </nav>
        </div>
    </div>