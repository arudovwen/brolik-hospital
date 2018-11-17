<?php

require 'core.php';
require 'dbconnect.php';
include "header.php";

 if (loggedin()) {
         echo 'Welcome Dr'.' '.strtoupper($_SESSION['user_id']);
 } else {
         include 'doctor-login.php';

}

?>

<div id='staff_wrapper'>
<div class="container">
        <div class="row">
        
                         
                <div class="col-lg-12 col-md-12 col-sm-12">
                       
                        <a name="" id="" class="btn btn-dark btn-lg btn-block" href="patient_diagnosis.php" role="button"  >New Patient Diagnosis</a>
                </div>
                <br>  <br> <br><br>
                <div class="col-lg-12 col-md-12 col-sm-12">
                        <a name="" id="" class="btn btn-dark btn-lg btn-block" href="doctor_refer.php" role="button"  >Refer Patient</a>
                </div>
                <br>  <br> <br><br>
                <div class="col-lg-12 col-md-12 col-sm-12">
                        <a name="" id="" class="btn btn-dark btn-lg btn-block" href="view_diagnosis.php" role="button" >Retrieve/Update/Delete Diagnosis</a>
                </div>
                <br>  <br> <br><br>

                <div class="col-lg-12 col-md-12 col-sm-12">
                        <a name="" id="" class="btn btn-dark btn-lg btn-block" href="medication.php" role="button" >Refer For Medication</a>
                </div>
                <br>  <br> <br><br>
                <div class="col-lg-12 col-md-12 col-sm-12">
                        <a name="" id="" class="btn btn-danger btn-lg btn-block" href="logout.php" role="button"  >Log out</a>
                </div>
                <br>  <br> 
                
              
        </div>
</div>
</div>

<?php include 'footer.php' ?>