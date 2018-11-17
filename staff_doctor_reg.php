
<?php ob_start(); ?>
<?php
require 'core.php';
include 'header.php';
require 'dbconnect.php';

?>

<?php

    if (loggedin()) {
        if (isset($_POST['reg_doctor'])) {
            if (isset($_POST['username']) && isset($_POST['password'])&& isset($_POST['first_name'])&& isset($_POST['last_name'])) {
                $username1 = strtolower($_POST['username']);
                $username = str_replace(' ','', $username1);
                $password = md5(strtolower($_POST['password']));
                $first_name1 = strtolower($_POST['first_name']);
                $first_name = str_replace(' ','', $first_name1);
                $last_name1 = strtolower($_POST['last_name']);
                $last_name = str_replace(' ','', $last_name1);
        
                 if (!empty($username) && !empty($password) && !empty($first_name)&& !empty($last_name)) {
        
                    
                   
        
                    $query= "SELECT `doctor_username` FROM `doctor` WHERE `doctor_username`='$username'";
                    $query_run= mysqli_query($dbcon, $query);
                    $count = mysqli_num_rows($query_run);
                    if ( $count==1 ) {
                            echo 'Username already exists';
                    } else {
        
                    $query1 = "INSERT INTO `doctor`(`doctor_username`, `password`, `first_name`, `last_name`) 
                                 VALUES ('$username', '$password', '$first_name', '$last_name')";
        
                        $query_run1  =  mysqli_query($dbcon, $query1);
                        if ($query_run1) {
                            echo 'Registeration Successful';
                        } else {
                            echo'Unsucessful registeration';
                        }
                    }
                    
                 } else {
                     echo 'all fields required';
                 }
                 
            } else {
                
            }
            
        } else {
            
        }
        
        //For the staff registeration
        
        if (isset($_POST['reg_staff'])) {
            if (isset($_POST['username']) && isset($_POST['password'])&& isset($_POST['first_name'])&& isset($_POST['last_name'])) {
                $username1 = strtolower($_POST['username']);
                $username = str_replace(' ','', $username1);
                $password = md5(strtolower($_POST['password']));
                $first_name1 = strtolower($_POST['first_name']);
                $first_name = str_replace(' ','', $first_name1);
                $last_name1 = strtolower($_POST['last_name']);
                $last_name = str_replace(' ','', $last_name1);
        
                 if (!empty($username) && !empty($password) && !empty($first_name)&& !empty($last_name)) {
        
                    
                    
                        $query= "SELECT `staff_username` FROM `staff` WHERE `staff_username`='".mysqli_real_escape_string($dbcon, $username)."'";
                        $query_run= mysqli_query($dbcon, $query);
                        $count = mysqli_num_rows($query_run);
                        if ( $count==1 ) {
                                echo 'Username already exists';
                        } else {
                        $query2 = "INSERT INTO `staff`( `staff_username`, `password`, `first_name`, `last_name`) 
                                 VALUES ('$username', '$password','$first_name', '$last_name')";
        
                         $query_run2  =  mysqli_query($dbcon, $query2);
                                 if ($query_run2) {
                                     echo 'Registeration Successful';
                                 } else {
                                     echo'Unsucessful registeration';
                                 }
                                }
                                 
                 } else {
                     echo 'all fields required';
                 }
                 
            } else {
                
            }
            
        } else {
            
        }
        
        
        ob_flush();
        
    } else {
        echo "ERROR!!! You are not Authorized to view this page ";
    }
    

?>


<form action="" method="post">

<div class="form-group">
  
    <input id="my-input" name='username'class="form-control" type="text" maxlength='11' placeholder='username' 
                value=<?php if(isset($username)){echo $username ; } ?> >
    <input type="password" name="password" id="" class="form-control" maxlength='11' placeholder='password'  >
    <input id="my-input" name='first_name'class="form-control" type="text" maxlength='20' placeholder='First name' 
                value=<?php if(isset($first_name)){echo $first_name ; } ?> >
    <input id="my-input" name='last_name'class="form-control" type="text" maxlength='20' placeholder='Last name' 
                value=<?php if(isset($last_name)){echo $last_name ; } ?> >

</div>

<div class="form-group">
<button type="submit" name='reg_doctor' class='btn btn-primary'>Register Doctor</button>
<button type="submit" name='reg_staff'  class='btn btn-success'>Register Staff</button>
</div>

</form>


<? include 'footer.php'?>