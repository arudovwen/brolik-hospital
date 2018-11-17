<?php ob_start();?>
<?php
include "header.php";
require "includes/dbconnect.php";
if (isset($_POST['referral_name']) && isset($_POST['referral_number'])&& isset($_POST['referral_email']) && isset($_POST['referral_cardno'])
    && isset($_POST['patient_name']) && isset($_POST['patient_age']) && isset($_POST['patient_email'])&& isset($_POST['patient_address'])
    && isset($_POST['patient_gender']) && isset($_POST['patient_number']) && isset($_POST['patient_symptoms']) ) {
        
        $referral_name= $_POST['referral_name'];
        $referral_number = $_POST['referral_number'];
        $referral_email = $_POST['referral_email'];
        $referral_cardno = $_POST['referral_cardno'];
        $patient_name = $_POST['patient_name'];
        $patient_age = $_POST['patient_age'];
        $patient_email= $_POST['patient_email'];
        $patient_address = $_POST['patient_address'];
        $patient_gender = $_POST['patient_gender'];
        $patient_number = $_POST['patient_number'];
        $patient_symptoms = $_POST['patient_symptoms'];


        if (!empty($referral_name) && !empty($referral_number)&& !empty($referral_email) && !empty($referral_cardno) && !empty($patient_name)
            && !empty($patient_age)  && !empty($patient_email)&& !empty($patient_address)&& !empty($patient_gender) && !empty($patient_number)
            && !empty($patient_symptoms)) {
            
                $query= "INSERT INTO `refer_patient`(`referral_name`, `referral_phone`, `referral_email`, `referral_cardNo`, 
                        `patient_name`, `patient_age`, `patient_email`, `patient_address`, `patient_gender`, 
                         `patient_phone`, `patient_symptoms`) 
                          VALUES ('$referral_name', '$referral_number', '$referral_email', '$referral_cardno','$patient_name',
                                    '
                                    $patient_age','$patient_email','$patient_address','$patient_gender','$patient_number','$patient_symptoms')";

                mysqli_query($dbcon, $query);
                header("location:refer_success.php");
    } else {
             'all fields required';
        }
  
  
} else {
    
}

ob_flush();

?>

<div class="container">
<form action="" method="post">
<br><br>
    <fieldset>
    <legend class='animated infinite zoomInOut delay-1s'>Referral Information</legend>
    <div class="form-group">
        
        <input type="text" name="referral_name" id="" class="form-control" placeholder=" Referral Name" maxlength='50' aria-describedby="helpId"><br>
        <input type="tel" name="referral_number" id="" class="form-control" placeholder="Referral Phone No" maxlength='11' aria-describedby="helpId"><br>
        <input type="email" name="referral_email" id="" class="form-control" placeholder=" Referral Email" maxlength='30'aria-describedby="helpId"> <br>
      <input type="tel" name="referral_cardno" id="" class="form-control" placeholder=" Referral Card No (optional)" maxlength='8' aria-describedby="helpId">
  
    </div>

    </fieldset>

    <fieldset>
    <legend class='animated infinite zoomInUp delay-1s' >Patient Information</legend>
    <div class="form-group">
        <input type="text" name="patient_name" id="" class="form-control" placeholder="Patient Name" maxlength='50'aria-describedby="helpId"><br>
        <input type="age" name="patient_age" id="" class="form-control" placeholder="Patient Age" maxlength='3'aria-describedby="helpId"><br>
        <input type="email" name="patient_email" id="" class="form-control" placeholder="Patient Email" maxlength='30' aria-describedby="helpId"><br>
        <input type="text" name="patient_address" id="" class="form-control" placeholder="Patient Home Address" aria-describedby="helpId"><br>
        Patient Gender: <select name="patient_gender" id="gender"><br>
           <option value="male">Male</option>
           <option value="female">Female</option>
       </select>
       <br>
       <br><input class="form-control" type="tel" name="patient_number" id="" class="form-control" maxlength='11'placeholder="Patient Phone No" aria-describedby="helpId"><br>
        Patient Symptoms: <br><textarea name="patient_symptoms" id="" maxlength='50' cols="30" rows="10"></textarea>
        
    </div>

    </fieldset>
    <button type="submit" class="btn btn-primary">Submit</button> <br><br>


</form>
</div>


<?php include "footer.php" ?>