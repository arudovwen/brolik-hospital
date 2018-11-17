<?php
require 'includes/core.php';
include 'header.php';

?>
<?php

if (isset($_POST['date'])&&isset($_POST['full_name'])&&isset($_POST['age'])
       && isset($_POST['sex'])&&isset($_POST['weight'])&&isset($_POST['symptoms'])&&isset($_POST['allergies'])
       &&isset($_POST['diagnosis'])) {
            $date=$_POST['date'];
            $full_name=$_POST['full_name'];
            $age=$_POST['age'];
            $sex=$_POST['sex'];
            $weight=$_POST['weight'];
            $symptoms=$_POST['symptoms'];
            $allergies=$_POST['allergies'];
            $diagnosis=$_POST['diagnosis'];

            if (!empty($date)&&!empty($full_name)&&!empty($age)&&!empty($sex)&&!empty($weight)&&!empty($symptoms)
                &&!empty($allergies)&&!empty($diagnosis)) {
               
                    $query="INSERT INTO `patient_diagnosis`( `date`, `full_name`, `age`, `sex`, `weight`, `symptoms`, `allergies`, `diagnosis`)
                            VALUES ('$date', '$full_name', '$age', '$sex', '$weight', '$symptoms', '$allergies', '$diagnosis')";
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
    
    <input id="my-input" class="form-control" type="date" name='date'  placeholder='Date'>
</div>

<div class="form-group">
    
    <input id="my-input" class="form-control" type="text" name='full_name'  placeholder='Full Name'>
</div>
<div class="form-group">
    
    <input id="my-input" class="form-control" type="text" name='age' placeholder='Age'>
</div>
<div class="form-group">
Gender:
    <select name="sex" id="">Gender:
        <option value="male">Male</option>
        <option value="female">Female</option>
    </select>
</div>

<div class="form-group">
    
    <input id="my-input" class="form-control" type="text" name='weight' placeholder='Weight'>
</div>
<div class="form-group">
        <textarea id="my-input" class="form-control" rows="3" name='symptoms' placeholder='Symptoms'></textarea>
    </div>
<div class="form-group">
    
    <input id="my-input" class="form-control" type="text" name='allergies' placeholder='Allergies'>
</div>
    
    <div class="form-group">
        <textarea id="my-input" class="form-control" rows="3" name='diagnosis' placeholder='Diagnosis'></textarea>
    </div>
    <button type="submit" class="btn btn-dark">Submit</button>


</form>

<?php  include 'footer.php'; ?>