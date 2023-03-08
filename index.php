<?php  include('./app/includes/header.php')?>
<?php include('./app/includes/navbar.php')?>

    
     <section class="body">
         <div class="container">
             <div class="panel">
                 <div class="panel-heading">
                     <h4 class="text-center text-success">Online Application</h4>
                 </div>
                 <div class="panel-body">
                     <p class="lead"> <small>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Commodi illo quas laudantium distinctio rem totam soluta voluptates numquam molestiae deleniti</small> </p>
                 </div>
             </div>
         </div>

         <div class="container-fluid bg-info" id="recent_jobs">
           <div class="main-body">

           <div class="body_header">
             <h4 class="text-center text-light"> Search for available Jobs</h4>
           </div>

           <div class="body_body">
             <form action="#" method="Post">
               <div class="form-group">
                 <input class="form-control" type="search" placeholder="Enter your Keyword" onkeyup="showHint(this.value)"/>
               </div>
               <div class="text-center my-2 py-2">
                 <button type="submit" name="submit" class="btn btn-lg btn-light text-dark"><i class="fa fa-search"></i> Search</button>

<p><span id="txtHint" class="text-light bg-warning"></span></p>





               </div>
             </form>
           </div>

           </div>
           
           
         </div>



         <article class="bg-light my-2 py-2" id="employer">
           <div class="container">
             <div class="my-2">
               <h3 class="text-center text-dark">OUR TEAM<h2>
             </div>
             <div class="row">
               <div class="col-md-4">
                   <div class="card">
                     <img class="img-fluid card-img-top img-circle" alt="sam" src="./images/image_3.png"  />
                  <div class="card-body">
                  <h5 class="card-title text-center">Dr DANIEL MATHERI</h5>
                  <p class="card-text text-center">
                  <i class="fab fa-facebook bg-primary text-white mx-1"></i>
                    <i class="fab fa-twitter bg-info text-white mx-1"></i>
                    <i class="fab fa-google-plus bg-danger text-white mx-1"></i>
                  </p>
                  </div>
                   </div>

               </div>


               <div class="col-md-4">

               <div class="card m-0">
                
                 <img class="img-fluid card-img-top img-rounded" alt="sam" src="./images/image_3.png" />
              
                     
                  <div class="card-body">
                  <h5 class="card-title text-center">Dr DANIEL MATHERI</h5>
                  <p class="card-text text-center">
                  <i class="fab fa-facebook bg-primary text-white mx-1"></i>
                    <i class="fab fa-twitter bg-info text-white mx-1"></i>
                    <i class="fab fa-google-plus bg-danger text-white mx-1"></i>
                  </p>
                  </div>
                   </div>
                 
               </div>


               <div class="col-md-4">

               <div class="card">
                     <img class="img-fluid card-img-top img-circle" alt="sam"  src="./images/image_3.png"  />
                  <div class="card-body">
                  <h5 class="card-title text-center">Dr DANIEL MATHERI</h5>
                  <p class="card-text text-center">
                  <i class="fab fa-facebook bg-primary text-white mx-1"></i>
                    <i class="fab fa-twitter bg-info text-white mx-1"></i>
                    <i class="fab fa-google-plus bg-danger text-white mx-1"></i>
                  </p>
                  </div>
                   </div>
                 
               </div>


             </div>
           </div>

         </article>


         <article id="contact">
             <div class="header my-3">
               <h3 class="text-center text-dark">CONTACT US</h3>
             </div>
             <div class="container">
             <div class="row">
               <div class="col-md-5 col-sm-6">
                 <p class="text-muted">Contact us & we'll get back to you within 48 hours.</p>
                 <p class="text-muted"><small> <i class="fas fa-map-pin"></i> Muranga,Kenya</samll></p>
                 <p class="text-muted"><small> <i class="fas fa-phone"></i> +254741515192</samll></p>
                 <p class="text-muted"><small> <i class="fab fa-google-wallet"></i> samuelnderitu495@gmail.com</samll></p>

               </div>



               <div class="col-md-7 col-sm-6">
               <form action="#" method="post">
                   <div class="form-group">
                     <input type="text" name="name" class="form-control" placeholder="Name"/>
                   </div>
                   <div class="form-group">
                     <input type="email" name="email" class="form-control" placeholder="Email"/>
                   </div>
                   <div class="form-group">
                     <textarea name="name" class="form-control" placeholder="Comment"></textarea>
                   </div>

                   <div class="text-left">
                     <button type="submit" class="btn btn-md text-dark bg-white">Send</button>
                   </div>

                 </form>
               </div>


             </div>
          </div>
         </article>

     </section>
    <?php include('./app/includes/footer.php')?>