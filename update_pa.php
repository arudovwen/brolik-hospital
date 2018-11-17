<?php ob_start();?>


<?php
 require "dbconnect.php"; 
 include "header.php";
 require 'core.php';


if(loggedin())


{
    // to retreive the data sent from view page
    if (isset($_GET['id'])) {
        $id=$_GET['id'];
       
    }
    $query = "SELECT * FROM `register_patient` WHERE `id` = '$id'";
    $query_run = mysqli_query($dbcon, $query);
    if (!$query_run) {
        die('unable to execute query').mysqli_error($query_run);
    } else {
         while( $view = mysqli_fetch_assoc($query_run)){
                        $id = $view['id'];
                        $first_name = $view['first_name'];
                         $middle_name= $view['middle_name'];
                        $last_name =  $view['last_name'];
                        $street1= $view['street1'] ;
                        $street2= $view['street2'];
                       $city = $view['city'] ;
                       $state=$view['state'];
                      $zipcode =$view['zipcode'];
                        $dob=$view['dob']; 
                        $email=$view['email'];                        
                        $gender= $view['gender'];
                         $home_phone=$view['home_phone']; 
                         $mobile_phone=$view['mobile_phone'];
         }

    }
    //to search for a patient record
    if (isset($_POST['search'])) {
        $search = strtolower($_POST['search']);
        if(!empty($search)){
  
      
          
           $query ="SELECT * FROM `register_patient` WHERE `first_name` LIKE '%".$search."%'";
           $query_run = mysqli_query($dbcon, $query);
           $query_num_rows = mysqli_num_rows($query_run);
  
                  if ($query_num_rows==0) {
                      echo 'No record found';
                      
                  } else if($query_num_rows>=1) {
                    
                          while ($view = mysqli_fetch_assoc($query_run)){
                          $id = $view['id'];
                          $first_name = $view['first_name'];
                           $middle_name= $view['middle_name'];
                          $last_name =  $view['last_name'];
                          $street1= $view['street1'] ;
                          $street2= $view['street2'];
                         $city = $view['city'] ;
                         $state=$view['state'];
                        $zipcode =$view['zipcode'];
                          $dob=$view['dob']; 
                          $email=$view['email'];                        
                          $gender= $view['gender'];
                           $home_phone=$view['home_phone']; 
                           $mobile_phone=$view['mobile_phone'];
  
                          }
                         
                  }
                  
      
       } else {
           echo 'Enter patient name';
       }
      } else {
          
          
      }
    
  
//to update the records  

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

                        $query = "UPDATE `register_patient` SET `first_name`= '$fname', `middle_name` = '$mname', `last_name`='$lname', 
                                                `street1`='$street1', `street2`='$street2', `city`='$city', `state`='$state', `zipcode`='$zipcode', `dob`='$dob', 
                                                `email`='$email', `retype_email`='$retype_email' ,
                                                 `gender`='$gender', `home_phone`='$hphone', `mobile_phone`='$mphone' WHERE id = '$id' " ;
                                  
                        $query_run = mysqli_query($dbcon, $query);
                        if ($query_run) {
                            echo 'success';
                        } else {
                           echo 'nop';
                        }
                        
                        
                        
          
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
          <h2>Update Account</h2>
          <br>

          <form action="" method="POST" class="form-inline my-2 my-lg-0">
         
         <input class="form-control mr-sm-2" type="text" placeholder="search" name="search">
         <button class="btn btn-info my-2 my-sm-0" type="submit"><span class="fas fa-search-plus">search</span></button>
         <a class="btn btn-danger" href="staff.php">Back</a>

</form>

 <form action="" method="Post" class="form-block my-2 my-lg-0">
    
    <fieldset>
        <div class="form-group">
        <label for="fname">First Name</label>
       <input class="form-control" type="text" name="fname" maxlength='20' id="fname" value=' <?php echo @$first_name ?>'> 
        </div>
        <div class="form-group">
        <label for="mname">Middle Name</label>
       <input class="form-control" type="text" name="mname" maxlength='20' id="mname" value='<?php echo @$middle_name ?>'>
        </div>
        <div class="form-group">
        <label for="lname">Last Name</label>
       <input class="form-control" type="text" name="lname" maxlength='20' id="lname" value='<?php echo @$last_name ?>'>
        </div>

    </fieldset>
    <fieldset class="input-container">
        <legend>Address</legend>
        <div class="form-group">
        <label for="street1">Street 1</label>
       <input class="form-control" type="text" name="street1" maxlength='50' id="street1" value='<?php echo @$street1 ?>'>
        </div>
        <div class="form-group">
        <label for="street2">Street 2</label>
       <input class="form-control" type="text" name="street2" maxlength='50' id="street2" value='<?php echo @$street2 ?>'>
        </div>
        <div class="form-group">
        <label for="city">City</label>
       <input class="form-control" type="text" name="city" maxlength='20'id="city" value='<?php echo @$city ?>'>
        </div>
        <div class="form-group">
        <label for="state">State</label>
       <input class="form-control" type="text" name="state" maxlength='20'id="state" value='<?php echo @$state ?>'>
        </div>
        <div class="form-group">
        <label for="zipcode">Zipcode</label>
       <input class="form-control" type="number" name="zipcode" maxlength='5' id="zipcode" value='<?php echo  @$zipcode ?>'>
        </div>
        
    </fieldset>
    <fieldset>
        <legend>Other information</legend>
        <div class="form-group">
        <label for="dob">Date of Birth</label>
       <input class="form-control" type="date" name="dob" id="dob" value='<?php echo @$dob ?>'>
        </div>
        <div class="form-group">
        <label for="email">Email</label>
       <input class="form-control" type="email" name="email" maxlength='50' id="email" value='<?php echo @$email ?>'>
        </div>
        <div class="form-group">
        <label for="retype_email">Retype Email</label>
       <input class="form-control" type="email" name="retype_email" maxlength='50'id="retype_email" value='<?php echo @$email ?>'>
        </div>
        <div class="form-group">
        <label for="gender">Gender</label>
       <select name="gender" id="gender" value='<?php echo @$gender ?>'>
           <option value="male">Male</option>
           <option value="female">Female</option>
       </select>
        </div>
        <div class="form-group">
        <label for="hphone">Home Phone</label>
       <input class="form-control" type="tel" name="hphone" maxlength='11'id="hphone" value='<?php echo @$home_phone  ?>'>
        </div>
        <div class="form-group">
        <label for="mphone">Mobile Phone</label>
       <input class="form-control" type="tel" name="mphone" maxlength='11' id="mphone" value='<?php echo @$mobile_phone ?>'>
        </div>
    </fieldset>
    <fieldset>
    <input class='btn btn-primary'type="submit" name=submit value="Update">
     <a class="btn btn-danger" href="view_pa.php">Back</a>
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