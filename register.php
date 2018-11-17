<?php ob_start();?>


<?php
 require "includes/dbconnect.php"; 
 include "header.php";
 require 'includes/core.php';


if(loggedin())

{

    if ( isset($_POST['fname']) && isset($_POST['mname'])&& isset($_POST['lname'])&& isset($_POST['street1']) && isset($_POST['street2'])
        && isset($_POST['city']) && isset($_POST['state'])&& isset($_POST['zipcode']) && isset($_POST['dob']) && isset($_POST['email'])
        && isset($_POST['retype_email']) && isset($_POST['gender']) && isset($_POST['hphone'])&& isset($_POST['mphone'])) {
            
            $fname =$_POST['fname'];
            $mname=$_POST['mname' ];
            $lname=$_POST['lname'];
            $street1=$_POST['street1'] ;
            $street2=$_POST['street2'];
            $city=$_POST['city'] ;
            $state=$_POST['state'] ;
            $zipcode= $_POST['zipcode'];
            $dob=$_POST['dob'];
            $email=$_POST['email'] ;
            $retype_email=$_POST['retype_email'] ;
            $gender=$_POST['gender'] ;
            $hphone=$_POST['hphone'] ;
            $mphone=$_POST['mphone'];

            if (!empty($fname) && !empty($mname) && !empty($lname)&& !empty($street1)&& !empty($street2)
                && !empty($city) && !empty($state)&& !empty($zipcode)&& !empty($dob)&& !empty($email)
                && !empty($retype_email) && !empty($gender)&& !empty($hphone)&& !empty($mname)) {

                        $query = "INSERT INTO `register_patient` ( `first_name`, `middle_name`, `last_name`, 
                                                `street1`, `street2`, `city`, `state`, `zipcode`, `dob`, `email`, `retype_email`,
                                                 `gender`, `home_phone`, `mobile_phone`) 
                                   VALUES ('$fname', '$mname', '$lname', '$street1','$street2', '$city', '$state','$zipcode',
                                           '$dob','$email','$retype_email','$gender','$hphone','$mphone' )";
                        $query_run = mysqli_query($dbcon, $query);
                        header("location: register_success.php");
                        
                        
          
            } else {
                echo 'All fields required';
            }
            

    } else {
        # code...
    }
    
    ob_end_flush();

?>
<div class="container">
    
<div class="row">
   <div class="rform-wrapper">
      <div class="rform">
          <h2>Create MyChart Account</h2>
    <form action="register.php" method="post" >
    <fieldset>
        <div class="form-group">
        <label for="fname">First Name</label>
       <input class="form-control" type="text" name="fname" maxlength='20' id="fname">
        </div>
        <div class="form-group">
        <label for="mname">Middle Name</label>
       <input class="form-control" type="text" name="mname" maxlength='20' id="mname">
        </div>
        <div class="form-group">
        <label for="lname">Last Name</label>
       <input class="form-control" type="text" name="lname" maxlength='20' id="lname">
        </div>

    </fieldset>
    <fieldset class="input-container">
        <legend>Address</legend>
        <div class="form-group">
        <label for="street1">Street 1</label>
       <input class="form-control" type="text" name="street1" maxlength='50' id="street1">
        </div>
        <div class="form-group">
        <label for="street2">Street 2</label>
       <input class="form-control" type="text" name="street2" maxlength='50' id="street2">
        </div>
        <div class="form-group">
        <label for="city">City</label>
       <input class="form-control" type="text" name="city" maxlength='20'id="city">
        </div>
        <div class="form-group">
        <label for="state">State</label>
       <input class="form-control" type="text" name="state" maxlength='20'id="state">
        </div>
        <div class="form-group">
        <label for="zipcode">Zipcode</label>
       <input class="form-control" type="number" name="zipcode" maxlength='5' id="zipcode">
        </div>
        
    </fieldset>
    <fieldset>
        <legend>Other information</legend>
        <div class="form-group">
        <label for="dob">Date of Birth</label>
       <input class="form-control" type="date" name="dob" id="dob">
        </div>
        <div class="form-group">
        <label for="email">Email</label>
       <input class="form-control" type="email" name="email" maxlength='50' id="email">
        </div>
        <div class="form-group">
        <label for="retype_email">Retype Email</label>
       <input class="form-control" type="email" name="retype_email" maxlength='50'id="retype_email">
        </div>
        <div class="form-group">
        <label for="gender">Gender</label>
       <select name="gender" id="gender">
           <option value="male">Male</option>
           <option value="female">Female</option>
       </select>
        </div>
        <div class="form-group">
        <label for="hphone">Home Phone</label>
       <input class="form-control" type="number" name="hphone" maxlength='11'id="hphone">
        </div>
        <div class="form-group">
        <label for="mphone">Mobile Phone</label>
       <input class="form-control" type="number" name="mphone" maxlength='11' id="mphone">
        </div>
    </fieldset>
    <fieldset>
    <input class='btn btn-primary'type="submit" name=submit value="Create account">
    Already have an account?<a href="login.php"> Login</a>
    </fieldset>
   
</form>
    </div>

   </div>
</div>

</div>
<?php
}else{
    include 'staff-login.php';
}
?>

<?php include "footer.php" ?>;