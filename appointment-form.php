<?php ob_start();?>
<?php
require "includes/dbconnect.php";
include "header.php";




    if ( isset($_POST['fname']) && isset($_POST['mname'])&& isset($_POST['lname'])&& isset($_POST['street1'])
      && isset($_POST['city']) && isset($_POST['state'])&& isset($_POST['zipcode']) && isset($_POST['dob']) && isset($_POST['email'])
       && isset($_POST['gender']) && isset($_POST['hphone'])&& isset($_POST['mphone']) 
      && isset($_POST['physicianType']) && isset($_POST['pgender']) && isset($_POST['pname']) 
       && isset($_POST['appointment_reason']) && isset($_POST['appointment_day']) && isset($_POST['appointment_time']) 
       && isset($_POST['appointmentCommunicationPref'])  && isset($_POST['selfInsured'])  && isset($_POST['healthInsurancePlan'])
       && isset($_POST['policyID'])  && isset($_POST['groupID'])  && isset($_POST['subscriberName'])  && isset($_POST['subscriberDOB_day'])
       && isset($_POST['subscriberDOB_month'])  && isset($_POST['subscriberDOB_year']) && isset($_POST['relationshipToPatient']) 
       && isset($_POST['relationshipToPatientCustom'])
       ) {
            
            $fname =$_POST['fname'];
            $mname=$_POST['mname' ];
            $lname=$_POST['lname'];
            $street1=$_POST['street1'] ;
            $city=$_POST['city'] ;
            $state=$_POST['state'] ;
            $zipcode= $_POST['zipcode'];
            $dob=$_POST['dob'];
            $email=$_POST['email'] ;
            $gender=$_POST['gender'] ;
            $hphone=$_POST['hphone'] ;
            $mphone=$_POST['mphone'];
            $physicianType=$_POST['physicianType'];
            $pgender=$_POST['pgender'];
            $pname=$_POST['pname'];
            $appointment_reason=$_POST['appointment_reason'];
            $appointment_day=$_POST['appointment_day'];
            $appointment_time=$_POST['appointment_time']; 
            $appointmentCommunicationPref=$_POST['appointmentCommunicationPref'];
            $selfInsured=$_POST['selfInsured'];
            $healthInsurancePlan =$_POST['healthInsurancePlan'];
            $policyId=$_POST['policyID'];
            $groupId=$_POST['groupID'];
            $subscriberName= $_POST['subscriberName'];
            $subscriberDOB_day= $_POST['subscriberDOB_day'];
            $subscriberDOB_month=$_POST['subscriberDOB_month'];
            $subscriberDOB_year=$_POST['subscriberDOB_year'];
            $relationshipToPatient=$_POST['relationshipToPatient'];
            $relationshipToPatientCustom=$_POST['relationshipToPatientCustom'];

            if (!empty($fname) && !empty($mname) && !empty($lname)&& !empty($street1)
            && !empty($city) && !empty($state)&& !empty($zipcode)&& !empty($dob)&& !empty($email)
             && !empty($gender)&& !empty($hphone)&& !empty($mphone)
            && !empty($physicianType) && !empty($pgender)
            && !empty($pname) && !empty($appointment_reason)&& !empty($appointment_day)&& !empty($appointment_time)
            && !empty($appointmentCommunicationPref)
            && !empty($selfInsured)&& !empty($healthInsurancePlan)&& !empty($policyId)&& !empty($groupId)
            && !empty($subscriberName)&& !empty($subscriberDOB_day)&& !empty($subscriberDOB_month)&& !empty($subscriberDOB_year)
            && !empty($relationshipToPatient)&& !empty($relationshipToPatientCustom)
            ) {

                $query= "INSERT INTO `appointment`( `first_name`, `middle_name`, `last_name`, `street1`, 
                            `city`, `state`, `zipcode`, `dob`, `email`, `gender`, `home_phone`, `mobile_phone`, 
                            `physician_type`, `physician_gender`,`physician_name`,  `appointment_reason`, `appointment_day`,
                            `appointment_time`, `appointment_comm`, `self_insured`, `healthInsurancePlan`, `policyID`, `groupID`,
                            `subscriberName`, `subscriberDOB_day`, `subscriberDOB_month`, `subscriberDOB_year`, `relationshipToPatient`, 
                            `relationshipToPatientCustom`)
                   VALUES ('$fname','$mname','$lname','$street1','$city','$state','$zipcode',
                            '$dob','$email','$gender','$hphone','$mphone','$physicianType','$pgender','$pname','$appointment_reason',
                            '$appointment_day','$appointment_time','$appointmentCommunicationPref','$selfInsured','$healthInsurancePlan'
                            ,'$policyId','$groupId','$subscriberName','$subscriberDOB_day','$subscriberDOB_month','$subscriberDOB_year',
                            '$relationshipToPatient','$relationshipToPatientCustom'
                         )";

                     $query_run = mysqli_query( $dbcon, $query);
                     header('location:appointment_success.php');
                    
                    
                     
                    
                
                

        } else {
            echo 'Please fill all the necessary fields';
        }
        

           
    } else {
        
    }
    


ob_flush();
?>
<div class="container">

    <div class="aform-wrapper">
        <div class="aform">
                <h2 >Request an Appointment</h2>
            <ul>
                <strong>
                <li>Please use this form only if you are a new patient or want to select a new provider. If you require assistance sooner 
                than 1-2 business days please call 1-844-344-6663.</li>
            <li>
                If this is a medical emergency, please call 911. For urgent visits please note our immediate care locations.    </li>
            <li>If you are already a patient at Northwestern Medicine, please call your physician's office directly or visit mynm.org.</li>
                </strong>
           
            </ul>


            <p>The appointment request form requires you to provide confidential health information that will be utilized only for the 
            purpose of helping you secure an office visit with a Northwestern Medicine affiliated physician. By completing and submitting 
            this form, you consent to your information being disclosed to the physician and his/her office staff. For more information about 
            how your information is collected, used and protected by Northwestern Medicine, please visit our Website Terms of Use and Privacy Policy.</p>
           
            <form action="" method="post">
            <fieldset>
         <legend>Patient Details</legend>
        <div class="form-group">
        
       <input class="form-control" type="text" name="fname" maxlength='20' id="fname" placeholder='First name'>
        </div>
        <div class="form-group">
        
       <input class="form-control" type="text" name="mname" maxlength='20' id="mname" placeholder='Middle name'>
        </div>
        <div class="form-group">
       
       <input class="form-control" type="text" name="lname" maxlength='20' id="lname" placeholder='Last name'>
        </div>

    </fieldset>
    <fieldset class="input-container">
        <legend>Address:</legend>
        <div class="form-group">
        
       <input class="form-control" type="text" name="street1" maxlength='50'id="street1" placeholder='Street 1'>
        </div>
        <div class="form-group">
        
       <input class="form-control" type="text" name="city" maxlength='20'id="city" placeholder='City'>
        </div>
        <div class="form-group">
        
       <input class="form-control" type="text" name="state" maxlength='20' id="state" placeholder='State'>
        </div>
        <div class="form-group">
        
       <input class="form-control" type="number" name="zipcode" maxlength='5'id="zipcode" placeholder='Zipcode'>
        </div>
        
    </fieldset>
    <fieldset>
        <legend>Other information</legend>
        <div class="form-group">
        
       <input class="form-control" type="date" name="dob" id="dob" placeholder='DOB'>
        </div>
        <div class="form-group">
        
       <input class="form-control" type="email" name="email" maxlength='30' id="email" placeholder='Email'>
        </div>
        <div class="form-group">
        <label for="gender">Gender:</label>
       <select name="gender" id="gender" placeholder='Gender'>
           <option value="male">Male</option>
           <option value="female">Female</option>
       </select>
        </div>
        <div class="form-group">
        
       <input class="form-control" type="tel" name="hphone" maxlength='11'id="hphone" placeholder='Home Phone'>
        </div>
        <div class="form-group">
        
       <input class="form-control" type="tel" name="mphone" maxlength='11' id="mphone" placeholder='Mobile phone'>
        </div>
    </fieldset>

    <fieldset>
        <legend>Appointment Details</legend>
        <div class="form-group">
       
        <div class="input-group">
               <span class="input-group-addon">
                <input type="radio" name="physicianType" checked="checked" value="adult"> Adult
                            </span>
                <span class="input-group-addon">
                <input type="radio" name="physicianType" value="pediatrics"> Pediatrics
                            </span>
                        

                    </div>
        </div>
        <div class="form-group">
        <label for="pgender">Physician Gender:</label>
        <select name="pgender" id="gender">
        <option value="none">No Preference</option>
           <option value="male">Male</option>
           <option value="female">Female</option>
       </select>
        </div>

         <div class="form-group">
       
       <input class="form-control" type="text" name="pname" maxlength='20' id="pname" placeholder='Physician Name(optional)'>
        </div>
        
        <div class="form-group">
        <label for="appointment_reasons"></label>
        Reason For Appointment: <br><textarea name="appointment_reason" maxlength='50'id="appointment_reasons" cols="30" rows="10"></textarea>
        </div>

        <div class="form-group">
        <label for="appointment_day">Appointment Day:</label>
        <select name="appointment_day" id="appointment_day">
        <option value="none">No Preference</option>
           <option value="monday">Monday</option>
           <option value="tuesday">Tuesday</option>
           <option value="wednesday">Wednesday</option>
           <option value="thursday">Thursday</option>
           <option value="friday">Friday</option>
           <option value="saturday">Saturday</option>
           <option value="sunday">Sunday</option>
       </select>
        </div>

          <div class="form-group">
        <label for="appointment_time">Appointment Time</label>
       <input class="form-control" type="time" name="appointment_time" id="appointment_time">
        </div>
        
        <div class="input-group">
            How would you like to receive your appointment information?
              <span class="input-group-addon  ">
                 <input type="radio" name="appointmentCommunicationPref" checked="checked" value="email">E-Mail
                                </span>
             <span class="input-group-addon">
                 <input type="radio"  name="appointmentCommunicationPref" value="phone">Phone
                    </span>
                    
        </div>
    </fieldset>

    <fieldset>
        <legend>Health Insurance Information</legend>
        <div class="form-group">
                    <label class="control-label" for="selfInsured">Self Pay or Insurance?</label>
                    
                        <span class="input-group-addon">
                            <input type="radio" name="selfInsured" checked="checked" value="insured"> Insured
                        </span>

                        <span class="input-group-addon">
                            <input type="radio" name="selfInsured" value="selfpay/other"> Self Pay/Other
                        </span> 

                </div>

        <div class="form-group ">
                    <label class="control-label" for="healthInsurancePlan">Health Insurance Plan:<span class="form-required" title="This field is required.">*</span>
                    </label><br>
                    <select name="healthInsurancePlan" id="healthInsurancePlan">
                    <option value=""></option>
                    <option value="Other">Other</option>
                    <option value="Aetna HMO">Aetna HMO</option>
                    <option value="Aetna POS">Aetna POS</option>
                    <option value="Aetna PPO">Aetna PPO</option>
                    <option value="Aetna Better Health">Aetna Better Health</option>
                    <option value="Assurant Health Bronze 001">Assurant Health Bronze 001</option>
                    <option value="Assurant Health Bronze 002">Assurant Health Bronze 002</option>
                    <option value="Assurant Health Gold 002">Assurant Health Gold 002</option>
                    <option value="Assurant Health Platinum 002">Assurant Health Platinum 002</option>
                    <option value="Assurant Health Silver 001">Assurant Health Silver 001</option>
                    <option value="Assurant Health Silver 002">Assurant Health Silver 002</option>
                    <option value="Beech Street PPO ">Beech Street PPO </option>
                    <option value="Blue Advantage PPO">Blue Advantage PPO</option>
                    <option value="Blue Choice Options (city of Chicago employees)">Blue Choice Options (city of Chicago employees)</option>
                    <option value="Blue Choice Supervalu PPO (SuperValu/Albertson/Jewel/Osco employees)">Blue Choice Supervalu PPO (SuperValu/Albertson/Jewel/Osco employees)</option>
                    <option value="Blue Cross BlueShield PPO">Blue Cross BlueShield PPO</option>
                    <option value="Blue Cross Blue Shield PPO Gold 001">Blue Cross Blue Shield PPO Gold 001</option>
                    <option value="Blue Cross Blue Shield PPO Gold 002">Blue Cross Blue Shield PPO Gold 002</option>
                    <option value="Blue Cross Blue Shield PPO Gold 012">Blue Cross Blue Shield PPO Gold 012</option>
                    <option value="Blue Cross Blue Shield PPO Gold 013">Blue Cross Blue Shield PPO Gold 013</option>
                    <option value="Blue Cross Blue Shield PPO Silver 003">Blue Cross Blue Shield PPO Silver 003</option>
                    <option value="Blue Cross Blue Shield PPO Silver 004">Blue Cross Blue Shield PPO Silver 004</option>
                    <option value="Blue Cross Blue Shield PPO Bronze 005">Blue Cross Blue Shield PPO Bronze 005</option>
                    <option value="Blue Cross Blue Shield PPO Bronze 006">Blue Cross Blue Shield PPO Bronze 006</option>
                    <option value="Blue Cross Blue Shield PPO Blue Security 010">Blue Cross Blue Shield PPO Blue Security 010</option>
                    <option value="Blue Cross Blue Shield PPO Gold Premier 1">Blue Cross Blue Shield PPO Gold Premier 1</option>
                    <option value="Blue Cross Blue Shield PPO Gold Premier 2 ">Blue Cross Blue Shield PPO Gold Premier 2 </option>
                    <option value="Blue Cross Blue Shield PPO Silver Solution 3">Blue Cross Blue Shield PPO Silver Solution 3</option>
                    <option value="Blue Cross Blue Shield PPO Silver Solution 4">Blue Cross Blue Shield PPO Silver Solution 4</option>
                    <option value="Blue Cross Blue Shield PPO Basic Bronze 5">Blue Cross Blue Shield PPO Basic Bronze 5</option>
                    <option value="Blue Cross Classic Blue (for specific employers)">Blue Cross Classic Blue (for specific employers)</option>
                    <option value="Blue Cross Community MMAI (existing patients)">Blue Cross Community MMAI (existing patients)</option>
                    <option value="Blue Cross Medical Advantage PPO #80840">Blue Cross Medical Advantage PPO #80840</option>
                    <option value="CIGNA HMO">CIGNA HMO</option>
                    <option value="CIGNA POS">CIGNA POS</option>
                    <option value="CIGNA PPO">CIGNA PPO</option>
                    <option value="County Care (specialty care thru specific clinics)">County Care (specialty care thru specific clinics)</option>
                    <option value="Coventry/First Health">Coventry/First Health</option>
                    <option value="Great West Health-CIGNA ">Great West Health-CIGNA </option>
                    <option value="Healthcare’s Finest Network (HFN)-PPO/EPO/POS">Healthcare’s Finest Network (HFN)-PPO/EPO/POS</option>
                    <option value="Healthlink PPO/Open Access I, II &amp; III (Wellpoint network)">Healthlink PPO/Open Access I, II &amp; III (Wellpoint network)</option>
                    <option value="Humana HMO">Humana HMO</option>
                    <option value="Humana POS">Humana POS</option>
                    <option value="Humana EPO">Humana EPO</option>
                    <option value="Humana PPO">Humana PPO</option>
                    <option value="Medicaid">Medicaid</option>
                    <option value="Medicare">Medicare</option>
                    <option value="MultiPlan PPO">MultiPlan PPO</option>
                    <option value="NM Aetna PPO">NM Aetna PPO</option>
                    <option value="NM BCBS of IL PPO">NM BCBS of IL PPO</option>
                    <option value="Preferred Network Access">Preferred Network Access</option>
                    <option value="Preferred Plan/Interplan/HealthSmart PPO">Preferred Plan/Interplan/HealthSmart PPO</option>
                    <option value="Private Healthcare Systems (PHCS) PPO ">Private Healthcare Systems (PHCS) PPO </option>
                    <option value="TriCare Standard">TriCare Standard</option>
                    <option value="Unicare PPO (Wellpoint network)">Unicare PPO (Wellpoint network)</option>
                    <option value="UnitedHealthcare Choice">UnitedHealthcare Choice</option>
                    <option value="UnitedHealthcare Choice Plus">UnitedHealthcare Choice Plus</option>
                    <option value="UnitedHeathcare Select">UnitedHeathcare Select</option>
                    <option value="UnitedHealthcare Select Plus">UnitedHealthcare Select Plus</option>
                    <option value="UnitedHealthcare Options PPO">UnitedHealthcare Options PPO</option>
                </select>
                </div>
                <div class="form-group ">
                    
                    <input type="text" class="" name="policyID" value="" maxlength='6' id="policyID" placeholder='Policy # or ID #'>
                </div>
                <div class="form-group ">
                   
                    <input type="text" class="" name="groupID" value="" maxlength='6'id="groupID" placeholder='Group #'>
                </div>
                <div class="form-group ">
                    
                    <input type="text" name="subscriberName" value="" maxlength='20' id="subscriberName" placeholder='Subscriber Name'>
                </div>
                <div class="form-group ">
                    <label class="control-label" for="subscriberDOB">Subscriber Date of Birth:<span class="form-required" title="This field is required.">*</span>
                    </label>
                    <input type="hidden" name="subscriberDOB" value="date.struct">
                <select name="subscriberDOB_day" id="subscriberDOB_day"><option value="" selected="selected"></option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
                        <option value="7">7</option>
                        <option value="8">8</option>
                        <option value="9">9</option>
                        <option value="10">10</option>
                        <option value="11">11</option>
                        <option value="12">12</option>
                        <option value="13">13</option>
                        <option value="14">14</option>
                        <option value="15">15</option>
                        <option value="16">16</option>
                        <option value="17">17</option>
                        <option value="18">18</option>
                        <option value="19">19</option>
                        <option value="20">20</option>
                        <option value="21">21</option>
                        <option value="22">22</option>
                        <option value="23">23</option>
                        <option value="24">24</option>
                        <option value="25">25</option>
                        <option value="26">26</option>
                        <option value="27">27</option>
                        <option value="28">28</option>
                        <option value="29">29</option>
                        <option value="30">30</option>
                        <option value="31">31</option>
                        </select>
                        <select name="subscriberDOB_month" id="subscriberDOB_month"><option value="" selected="selected"></option>
                        <option value="1">January</option>
                        <option value="2">February</option>
                        <option value="3">March</option>
                        <option value="4">April</option>
                        <option value="5">May</option>
                        <option value="6">June</option>
                        <option value="7">July</option>
                        <option value="8">August</option>
                        <option value="9">September</option>
                        <option value="10">October</option>
                        <option value="11">November</option>
                        <option value="12">December</option>
                        </select>
                        <select name="subscriberDOB_year" id="subscriberDOB_year"><option value="" selected="selected"></option>
                        <option value="2018">2018</option>
                        <option value="2017">2017</option>
                        <option value="2016">2016</option>
                        <option value="2015">2015</option>
                        <option value="2014">2014</option>
                        <option value="2013">2013</option>
                        <option value="2012">2012</option>
                        <option value="2011">2011</option>
                        <option value="2010">2010</option>
                        <option value="2009">2009</option>
                        <option value="2008">2008</option>
                        <option value="2007">2007</option>
                        <option value="2006">2006</option>
                        <option value="2005">2005</option>
                        <option value="2004">2004</option>
                        <option value="2003">2003</option>
                        <option value="2002">2002</option>
                        <option value="2001">2001</option>
                        <option value="2000">2000</option>
                        <option value="1999">1999</option>
                        <option value="1998">1998</option>
                        <option value="1997">1997</option>
                        <option value="1996">1996</option>
                        <option value="1995">1995</option>
                        <option value="1994">1994</option>
                        <option value="1993">1993</option>
                        <option value="1992">1992</option>
                        <option value="1991">1991</option>
                        <option value="1990">1990</option>
                        <option value="1989">1989</option>
                        <option value="1988">1988</option>
                        <option value="1987">1987</option>
                        <option value="1986">1986</option>
                        <option value="1985">1985</option>
                        <option value="1984">1984</option>
                        <option value="1983">1983</option>
                        <option value="1982">1982</option>
                        <option value="1981">1981</option>
                        <option value="1980">1980</option>
                        <option value="1979">1979</option>
                        <option value="1978">1978</option>
                        <option value="1977">1977</option>
                        <option value="1976">1976</option>
                        <option value="1975">1975</option>
                        <option value="1974">1974</option>
                        <option value="1973">1973</option>
                        <option value="1972">1972</option>
                        <option value="1971">1971</option>
                        <option value="1970">1970</option>
                        <option value="1969">1969</option>
                        <option value="1968">1968</option>
                        <option value="1967">1967</option>
                        <option value="1966">1966</option>
                        <option value="1965">1965</option>
                        <option value="1964">1964</option>
                        <option value="1963">1963</option>
                        <option value="1962">1962</option>
                        <option value="1961">1961</option>
                        <option value="1960">1960</option>
                        <option value="1959">1959</option>
                        <option value="1958">1958</option>
                        <option value="1957">1957</option>
                        <option value="1956">1956</option>
                        <option value="1955">1955</option>
                        <option value="1954">1954</option>
                        <option value="1953">1953</option>
                        <option value="1952">1952</option>
                        <option value="1951">1951</option>
                        <option value="1950">1950</option>
                        <option value="1949">1949</option>
                        <option value="1948">1948</option>
                        <option value="1947">1947</option>
                        <option value="1946">1946</option>
                        <option value="1945">1945</option>
                        <option value="1944">1944</option>
                        <option value="1943">1943</option>
                        <option value="1942">1942</option>
                        <option value="1941">1941</option>
                        <option value="1940">1940</option>
                        <option value="1939">1939</option>
                        <option value="1938">1938</option>
                        <option value="1937">1937</option>
                        <option value="1936">1936</option>
                        <option value="1935">1935</option>
                        <option value="1934">1934</option>
                        <option value="1933">1933</option>
                        <option value="1932">1932</option>
                        <option value="1931">1931</option>
                        <option value="1930">1930</option>
                        <option value="1929">1929</option>
                        <option value="1928">1928</option>
                        <option value="1927">1927</option>
                        <option value="1926">1926</option>
                        <option value="1925">1925</option>
                        <option value="1924">1924</option>
                        <option value="1923">1923</option>
                        <option value="1922">1922</option>
                        <option value="1921">1921</option>
                        <option value="1920">1920</option>
                        <option value="1919">1919</option>
                        <option value="1918">1918</option>
                        <option value="1917">1917</option>
                        <option value="1916">1916</option>
                        <option value="1915">1915</option>
                        <option value="1914">1914</option>
                        <option value="1913">1913</option>
                        <option value="1912">1912</option>
                        <option value="1911">1911</option>
                        <option value="1910">1910</option>
                        <option value="1909">1909</option>
                        <option value="1908">1908</option>
                </select>

                </div>

                <div class="form-group">
                    <label class="control-label" for="relationshipToPatient">Subscriber's Relationship to Patient:<span class="form-required" title="This field is required.">*</span>
                    </label>
                    <select name="relationshipToPatient" id="relationshipToPatient">
                        <option value="Self">Self</option>
                        <option value="Spouse">Spouse</option>
                        <option value="Parent">Parent</option>
                        <option value="Other">Other</option>
                </select>
                    <input type="text" name="relationshipToPatientCustom"
                              value="" id="relationshipToPatientCustom" placeholder='Other please specify'>
                </div>


    </fieldset>

    <fieldset>
        <br>
    <input class='btn btn-primary form-control 'type="submit" name='submit' value="Request Appointment" >
    </fieldset>
   

       
            </form>
        </div>
    </div>

</div>


<?php include "footer.php" ?>;