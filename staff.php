<?php

include 'includes/core.php';
require 'includes/dbconnect.php';

include "header.php";

 if (loggedin()) {
         echo 'Welcome'.' '.$_SESSION['user_id'];
         


         


?>


<div class="container">
<div id='staff_wrapper'>
        <div class="row">
        
                         
                <div class="col-sm-12 col-md-12  col-lg-12">
                       
                        <a name="" id="" class="btn btn-dark btn-lg btn-block" href="staff_doctor_reg.php" role="button"  >Register Staff/Doctor</a>
                </div>
                <br>  <br> <br>
                
                <div class="col-lg-12 col-md-12 col-sm-12">
                        <a name="" id="" class="btn btn-dark btn-lg btn-block" href="register.php" role="button"  >Register New Patient</a>
                </div>
                <br>  <br> <br>
                <div class="col-lg-12 col-md-12 col-sm-12">
                        <a name="" id="" class="btn btn-dark btn-lg btn-block" href="view_pa.php" role="button" >View/Update/Delete Patient Record</a>
                </div>
                <br>  <br> <br>
              
                <div class="col-lg-12 col-md-12 col-sm-12">
                        <a name="" id="" class="btn btn-danger btn-lg btn-block" href="logout.php" role="button"  >Log out</a>
                </div>
                <br>  <br> 
                
              
        </div>
</div>
</div>

<?php
 } else {
        include 'staff-login.php';

}

?>

 <?php include 'footer.php'; ?>