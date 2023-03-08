
     <h4 class="text-center text-info p-3">Submission:</h4>
     <p>Upload Any Supportive Documents: <br>
     <form action="../controllers/file.php" method="post" enctype="multipart/form-data">
         <input type="text" name="name" value="<?php echo $_SESSION["name"]?>" class="form-control"/>
         <p>Hello <?php echo $_SESSION["name"]?> kindly download the document for chief declaration and school declation then upload the document together with other supportive documents here</p>
         <a href="./Top.pdf" class="btn btn-danger btn-sm">Download Declaration document here</a><br/><br/>
        <input type="file" name="name_files"  value="<?php echo (isset($_POST['name_file']) ? $_POST['name_file'] : '')?>">
       </p>
       <button type="submit" name="submit" class="btn btn-success btn-lg" value="submit" >Submit</button>
         
</form>
           
           
    