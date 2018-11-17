<?php
require 'core.php';
include 'header.php';

?>
<?php

if (isset($_POST['date'])&&isset($_POST['patient_name'])&&isset($_POST['medication'])
       && isset($_POST['doctor_name'])) {
            $date=$_POST['date'];
            $patient_name=$_POST['patient_name'];
            $medication=$_POST['medication'];
            $doctor_name=$_POST['doctor_name'];
           

            if (!empty($date)&&!empty($patient_name)&&!empty($medication)&&!empty($doctor_name)) {
               
                    $query="INSERT INTO `medication_form`( `patient_name`, `date`, `prescribed_medication`, `doctor_name` )
                            VALUES ('$patient_name','$date', '$medication', '$doctor_name')";
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
    
    <input id="my-input" class="form-control" type="text" name='patient_name' placeholder='Patient Name'>
</div>
<div class="form-group">
<div class="form-group">
    
    <input id="my-input" class="form-control" type="date" name='date' placeholder=' Date'>
</div>

        <textarea id="my-input" class="form-control" rows="3" name='medication' placeholder='Medication'></textarea>
    </div>
<div class="form-group">
    
    <input id="my-input" class="form-control" type="text" name='doctor_name' placeholder='Doctor Name'>
</div>
<button type="submit" class="btn btn-dark">Submit</button>

</form>

<?php include 'footer.php'; ?>