<div class="form-header">
            <h5 class="text-center text-dark my-3">Highest Academic Qualification</h5>
           </div>

          

           <div class="form-group">
                <label for="institution_name">Institution Name:</label><br/>
                <input id="institution_name" type="text" name="institution_name" value="<?php echo (isset($_POST['institution_name']) ? $_POST['institution_name'] : '')?>" class="form-control"/>
            </div>
            <div class="form-group">
                <label for="course_name">Course Name:</label><br/>
                <input id="course_name" type="text" name="course_name" value="<?php echo (isset($_POST['course_name']) ? $_POST['course_name'] : '')?>" class="form-control"/>
            </div>


            <div class="form-group">
                <label for="institution_postal">Grade:</label><br/>
                <input id="institution_postal" type="text" name="Grade" value="<?php echo (isset($_POST['Grade']) ? $_POST['Grade'] : '')?>" class="form-control"/>
            </div>
            <div class="form-group">
                <label for="institution_tel">Year Of Graduation:</label><br/>
                <input id="institution_tel" type="date" name="Graduation" value="<?php echo (isset($_POST['Graduation']) ? $_POST['Graduation'] : '')?>" class="form-control"/>
            </div>



            <div class="form-header">
            <h6 class="text-center text-dark">Secondary Education Details </h6>
           </div>

           <div class="form-group">
                <label for="admission_no">School:</label><br/>
                <input id="admission_no" type="text" name="school"  value="<?php echo (isset($_POST['school']) ? $_POST['school'] : '')?>" class="form-control"/>
            </div>

            <div class="form-group">
                        <label for="KCSE">Grade:</label><br/>
                        <select id="KCSE" class="form-control" name="KCSE" value="<?php echo (isset($_POST['KCSE']) ? $_POST['KCSE'] : '')?>">
                            <option value="A">A</option>
                            <option value="A-">A-</option>
                            <option vale="B+">B+</option>
                            <option value="B">B</option>
                            <option value="B-">B-</option>
                            <option vale="C+">C+</option>
                            <option value="C">C</option>
                            <option value="C-">C-</option>
                            <option vale="D+">D+</option>
                            <option value="D">D</option>
                            <option value="D-">D-</option>
                            <option vale="F">F</option>
                        </select>
                 </div>
            <div class="form-group">
                <label for="other_q">Other Qualifications:</label><br/>
                <input id="other_q" type="text" name="other_q" value="<?php echo (isset($_POST['other_q']) ? $_POST['other_q'] : '')?>" class="form-control"/>
            </div>

        

           