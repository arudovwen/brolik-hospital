 <?php
require 'core.php';
include 'header.php';

?>
<?php

if (isset($_POST['patient_name'])
       && isset($_POST['sex'])&&isset($_POST['refer_from'])&&isset($_POST['refer_to'])&&isset($_POST['diagnosis'])
       &&isset($_POST['refer_reasons'])) {
            
            $patient_name=$_POST['patient_name'];
            $sex=$_POST['sex'];
            $refer_from=$_POST['refer_from'];
            $refer_to=$_POST['refer_to'];
            $diagnosis=$_POST['diagnosis'];
            $refer_reasons=$_POST['refer_reasons'];

            if (!empty($patient_name)&&!empty($sex)&&!empty($refer_from)&&!empty($refer_to)
                &&!empty($diagnosis)&&!empty($refer_reasons)) {
               
                    $query="INSERT INTO `doctor_refer`( `patient_name`, `sex`, `refer_from`, `refer_to`, `diagnosis`, `reason`)
                            VALUES ('$patient_name', '$sex', '$refer_from', '$refer_to', '$diagnosis', '$refer_reasons')";
                    $query_run=mysqli_query($dbcon, $query);
                    if ($query_run) {
                       echo'data registered';
                    } else {
                       die().mysqli_error($query_run); 
                    }
                    
            } else {
                
                echo
                 'all fields are required';
            }
            

} 


?>

<form action="" method="post">


<div class="form-group">
    
    <input id="my-input" class="form-control" type="text" name='patient_name'  placeholder='Patient Name'>
</div>

<div class="form-group">
Gender:
    <select name="sex" id="">Gender:
        <option value="male">Male</option>
        <option value="female">Female</option>
    </select>
</div>

<div class="form-group">
    
    <input id="my-input" class="form-control" type="text" name='refer_from' placeholder='Refer From'>
</div>
<div class="form-group">
    
    <input id="my-input" class="form-control" type="text" name='refer_to' placeholder='Refer To'>
</div>
    

    <div class="form-group">
        <textarea id="my-input" class="form-control" rows="3" name='diagnosis' placeholder='Diagnosis'></textarea>
    </div>
    <div class="form-group">
        <textarea id="my-input" class="form-control" rows="3" name='refer_reasons' placeholder='Refer Reasons'></textarea>
    </div>
    <button type="submit" class="btn btn-dark">Submit</button>


</form>

<?php  include 'footer.php'; ?>