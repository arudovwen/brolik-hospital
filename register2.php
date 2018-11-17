<?php

include 'core.php';
require 'dbconnect.php';

include "header.php";

 if (loggedin()) {
        include 'register_form.php';
         


         
 } else {
         include 'staff-login.php';
        

}

?>



 <?php include 'footer.php' ?>