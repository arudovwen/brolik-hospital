


<?php
include 'header.php';
require 'includes/dbconnect.php';


// to delete guest information....
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    
}


$query = "SELECT * FROM `register_patient` WHERE id =".$id;
$query_run = mysqli_query($dbcon, $query);
$query_num_rows = mysqli_num_rows($query_run);

        
    
          
?>

     
      <div class="container">
      <br>
      <table class="table table-bordered table-responsive table-hover">
            
         <tbody>
           
            
            
           
            
        
           
            <?php
            while($view = mysqli_fetch_assoc($query_run)) {
                            $id= $view['id'];
                           $first_name= $view['first_name'];
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
                        ?>
             <tr>
             <th>ID</th>
                <td>  <?php echo @$id ?> </td>
            </tr>
            <tr>
            <th>First Name </th>
                 <td>  <?php echo @$first_name ?> </td>
            </tr>
            <tr>  
                <th> Middle Name</th>
                 <td>  <?php echo @$middle_name ?>  </td>
            </tr>
                 <tr> <th>Last Name</th>
                 <td>  <?php echo @$last_name ?>  </td>
            </tr>

                <tr>
                <th>Street 1</th>
                 <td>   <?php echo @$street1 ?></td>

                </tr>
                <tr> <th> Street 2</th>
                 <td>   <?php echo @$street2 ?> </td></tr>

                <tr>  
                        <th>City</th>
                 <td>  <?php echo @$city ?> </td></tr>

               <tr> <th>State</th>
                 <td>  <?php echo @$state ?>  </td></tr>

                <tr> <th>Zipcode</th>
                 <td>  <?php echo  @$zipcode ?>   </td></tr>

                <tr> <th>DOB</th>
                 <td> <?php echo @$dob ?>    </td></tr>

                <tr> <th>Email</th>
                 <td>    <?php echo @$email ?>     </td></tr>

                <tr>  <th>Gender</th>
                 <td>    <?php echo @$gender ?>  </td></tr>

                <tr> <th>Home Phone</th>
                 <td>    <?php echo @$home_phone  ?>  </td></tr>

                <tr>  <th> Mobile Phone</th>
                 <td>    <?php echo @$mobile_phone ?></td></tr>
                 
            
             <?php
            }

?>
             <tr>
             <td>  <a class="btn btn-dark" href="view_pa.php" role="button">Go back</a></td>
             </tr>
 
               
         </tbody>
     </table>
                
        
                  
      </div>
      

<?php include 'footer.php' ?>