


<?php
include 'header.php';
require 'dbconnect.php';


// to delete patient information....
if (isset($_GET['delete'])) {
    $id = $_GET['delete'];
    $del = "DELETE FROM `register_patient` WHERE id =".$id;
    mysqli_query( $dbcon , $del);
    
}

$query ="SELECT * FROM `register_patient` ";
$query_run = mysqli_query($dbcon, $query);
$query_num_rows = mysqli_num_rows($query_run);

        
        

          
?>




         <input class="form-control mr-sm-2" type="text" placeholder="search" name="search" >
         <button class="btn btn-info my-2 my-sm-0" type="submit"><span class="fas fa-search-plus">search</span></button>


     
      <div class="container">
            <div class='view_wrapper'>
             <div class="row">
                 <div class="col-lg-12">
                 <table class="table table-responsive table-hover">
            
            <tbody>
                <th>ID</th>
                <th>First Name </th>
               <th>Last Name</th>
               <th>Street 1</th>
               <th>City</th>
               <th>Email</th>
               <th>Gender</th>
               <th>Home Phone</th>
               <th> Mobile Phone</th>
               <th> View</th>  
               <th> Update</th>
               <th> Delete</th>
               <?php
               while($view = mysqli_fetch_assoc($query_run)) {
                               $id= $view['id'];
                              $first_name= $view['first_name'];
                              $last_name =  $view['last_name'];
                              $street1= $view['street1'] ;
                             $city = $view['city'] ;
                              $email=$view['email'];                        
                              $gender= $view['gender'];
                               $home_phone=$view['home_phone']; 
                               $mobile_phone=$view['mobile_phone'];
                           ?>
                <tr>
                   <td>  <?php echo @$id ?> </td>
                    <td>  <?php echo @$first_name ?> </td>
                    <td>  <?php echo @$last_name ?>  </td>
                    <td>   <?php echo @$street1 ?></td>
                    <td>  <?php echo @$city ?> </td>
                    <td>    <?php echo @$email ?>     </td>
                    <td>    <?php echo @$gender ?>  </td>
                    <td>    <?php echo @$home_phone  ?>  </td>
                    <td>    <?php echo @$mobile_phone ?></td>
                    <td > 
                      <a href ="view.php?id=<?php echo $id ?>">
                      <button class="btn btn-dark my-2 my-sm-0" type="submit"><span class="fas fa-eye"> </span></button></a>  <!--viewpatient record -->
                  </td>
                   
                  <td > 
                      <a href ="update_pa.php?id=<?php echo $id ?>">
                      <button class="btn btn-dark my-2 my-sm-0" type="submit"><span class="fas fa-edit"> </span></button></a>  <!--update patient record -->
                  </td>
                  <td > 
                      <a href ="view_pa.php?delete=<?php echo $id ?>"
                     onclick ="return confirm ('Are you sure?');">  
                      <button class="btn btn-danger my-2 my-sm-0" type="submit"><span class="fas fa-trash-alt"> </span></button>
                      </a>  <!--delete patient record-->
                  </td>
                 
                </tr>
                <?php
               }
   
                          
   
   ?>
                <tr>
                <td>  <a class="btn btn-dark" href="staff.php" role="button">Go back</a></td>
                </tr>
              
   
               
                  
            </tbody>
        </table>
                   
           
                 </div>
             </div>
            
            </div>
    
                  
      </div>
      

<?php include 'footer.php' ?>