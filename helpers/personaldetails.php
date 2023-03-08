           <div class="form-header">
                <h5 class="text-center text-dark">Personal Details</h5>
            </div>
    
            <div class="form-group">
                    <label for="name">Name of Applicant:</label><br/>
                    <input id="name" type="text" name="full_name"  value="<?php echo (isset($_POST['full_name']) ? $_POST['full_name'] : '')?>" class="form-control" placeholder="Full Name"/>
                </div>
    
                <div class="form-group">
                    <label for="dob">Date of Birth:</label><br/>
                    <input id="dob" type="date" name="date_of_birth" value="<?php echo (isset($_POST['date_of_birth']) ? $_POST['date_of_birth'] : '')?>" class="form-control"/>
                </div>
                <div class="form-group">
                    <label for="id">ID Number/Passport Number:</label><br/>
                    <input id="id" type="text" name="id_number" class="form-control"  value="<?php echo (isset($_POST['id_number']) ? $_POST['id_number'] : '')?>"/>
                </div>
                <div class="form-group">
                        <label for="sex">Gender:</label><br/>
                        <select id="sex" class="form-control" name="sex" value="<?php echo (isset($_POST['sex']) ? $_POST['sex'] : '')?>">
                            <option value="male">Male</option>
                            <option value="female">Female</option>
                            <option vale="other">Other</option>
                        </select>
                 </div>
                 <div class="form-group">
                    <label for="ethinicty">Ethnicity:</label><br/>
                    <input id="ethnicity" type="text" name="ethnicity" class="form-control" value="<?php echo (isset($_POST['ethnicity']) ? $_POST['ethnicity'] : '')?>"/>
                </div>
    
                <div class="form-group">
                    <label for="county">Home County:</label><br/>
                    <input id="county" type="text" name="county" class="form-control" value="<?php echo (isset($_POST['county']) ? $_POST['county'] : '')?>"/>
                </div>
    
                <div class="form-group">
                    <label for="division">Division:</label><br/>
                    <input id="division" type="text" name="division" class="form-control" value="<?php echo (isset($_POST['division']) ? $_POST['division'] : '')?>"/>
                </div>
    
                <div class="form-group">
                    <label for="ward">Ward:</label><br/>
                    <input id="ward" type="text" name="ward" value="<?php echo (isset($_POST['ward']) ? $_POST['ward'] : '')?>"class="form-control"/>
                </div>
    
            
                 <div class="form-group">
                    <label for="email">Enter your Email ID:</label><br/>
                    <input id="email" type="email" name="email" class="form-control" value="<?php echo (isset($_POST['email']) ? $_POST['email'] : '')?>" placeholder="Your E-mail"/>
                </div>
    
                <div class="form-group">
                    <label for="tel">Mobile No:</label><br/>
                    <input id="tel" type="tel" name="tel" class="form-control" value="<?php echo (isset($_POST['tel']) ? $_POST['tel'] : '')?>"/>
                </div>
    
                <div class="form-group">
                        <label for="dis">Disability Status:</label><br/>
                        <select id="dis" class="form-control" name="disability" value="<?php echo (isset($_POST['disability']) ? $_POST['disability'] : '')?>">
                            <option value="yes">Yes</option>
                            <option value="no">No</option>
                        </select>
                </div>
    