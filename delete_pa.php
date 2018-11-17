


<?php
include 'header.php';
require 'dbconnect.php';





if (isset($_POST['search'])) {
      $search = strtolower($_POST['search']);
      if(!empty($search)){

    
        
         $query ="SELECT * FROM `register_patient` WHERE `first_name` LIKE '%".$search."%'";
         $query_run = mysqli_query($dbcon, $query);
         $query_num_rows = mysqli_num_rows($query_run);

                if ($query_num_rows==0) {
                    echo 'No record found';
                    
                } else if($query_num_rows>=1) {
                  
                         $view = mysqli_fetch_assoc($query_run);
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
                
    
     } else {
         echo 'Enter patient name';
     }
    } else {
        
        
    }

    // if (isset($_GET['delete'])) {
    //     $id= isset($_GET['delete']);
    //             $query="DELETE FROM `register_patient` WHERE `id`= '.$id'";
    //             $query_run = mysqli_query($dbcon, $query);
                
            
    // } 


    

?>



<form action="" method="POST" class="form-inline my-2 my-lg-0">
         
         <input class="form-control mr-sm-2" type="text" placeholder="search" name="search">
         <button class="btn btn-info my-2 my-sm-0" type="submit"><span class="fas fa-search-plus">search</span></button>

</form>
     
      <div class="container">

    
      <br>
      <table class="table table-striped table-hover">

      
         <tbody>
         <th>ID</th>
             <th>First Name </th>
             <th> Middle Name</th>
            <th>Last Name</th>
            <th>Street 1</th>
            <th> Street 2</th>
            <th>City</th>
            <th>State</th>
            <th>Zipcode</th>
            <th>DOB</th>
            <th>Email</th>
            <th>Gender</th>
            <th>Home Phone</th>
            <th> Mobile Phone</th>
             <tr>
             <td>  <?php echo @$id_del ?> </td>
                 <td>  <?php echo @$first_name ?> </td>
                 <td>  <?php echo @$middle_name ?>  </td>
                 <td>  <?php echo @$last_name ?>  </td>
                 <td>   <?php echo @$street1 ?></td>
                 <td>   <?php echo @$street2 ?> </td>
                 <td>  <?php echo @$city ?> </td>
                 <td>  <?php echo @$state ?>  </td>
                 <td>  <?php echo  @$zipcode ?>   </td>
                 <td> <?php echo @$dob ?>    </td>
                 <td>    <?php echo @$email ?>     </td>
                 <td>    <?php echo @$gender ?>  </td>
                 <td>    <?php echo @$home_phone  ?>  </td>
                 <td>    <?php echo @$mobile_phone ?></td>
             </tr>
            
             <tr>
                 <td>   
                 <a href ="delete_pa.php?delete=<?php echo $view['id'] ?>" >
                   <input type="submit" value="Delete" class="btn btn-danger"></a>
                </td>
             </tr>

            
               
         </tbody>
     </table>
                
     <a class="btn btn-dark" href="staff.php" role="button">Go back</a>
                  
      </div>

 <?php


?>




<?php include 'footer.php' ?>