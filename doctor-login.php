
<?php 

   

               if (isset($_POST['username']) && isset($_POST['password'])) {
            
           $username1 = strtolower($_POST['username']);
           $username = str_replace(' ','', $username1); ;
           $password= md5(strtolower($_POST['password']));

             if (!empty($username) && !empty($password)) {
                $query = "SELECT * FROM `doctor` WHERE `doctor_username` = '$username' AND `password` = '$password'";
                $query_run = mysqli_query( $dbcon, $query);

               $query_num_rows = mysqli_num_rows($query_run);

                if ($query_num_rows==0) {
                    echo 'Invalid Login credentials..';
                    
                } else if($query_num_rows==1) {
                  
                        $user= mysqli_fetch_assoc($query_run);

                        if (isset($_POST['check'])){
                            //set up cookie
                            setcookie("user", $user['doctor_username'], time() + (86400 * 30)); 
                            setcookie("pass", $user['password'], time() + (86400 * 30)); 
                        }

                                              
                       $_SESSION['user_id'] = $user['first_name'];
                        header('location:doctor.php');

                }
                

             } else {
              echo 'input username/password'; 
              }
             
        } else {
            # code...
        }
    




?>



<div class = 'container'>
    <div class='row'>
        <div class="login-wrapper">
        <div class="loginform">
        <form action="<?php echo $current_file ?>" method="POST">
            <fieldset class="input-container">
            <div class='form-group'><legend><strong>Doctor Login<strong></legend></div>
                <div class ='form-group'>
                    <label for="username">Doctor Username</label>
                    <input class='form-control' type="text" name="username" id="username">
                </div>
                
                <div class ='form-group'>
                    <label for="pass">Password</label>
                    <input class='form-control' type="password" name="password" id="pass">
                 </div>
                    <div class ="form-group">
                    <input class='btn btn-primary form-control' type="submit" name='submit' value="Login">
                    </div>
                    <div class ="form-group">
                        <ul class="list-inline btn-table">
                            <li class="list-inline-item"><label for="remember">Remember me</label>
                        <input type="checkbox" name="check" id="remember"></li>
                            <li class="list-inline-item"> <a href="http://">Forget password?</a></li>
                            
                        </ul>
                      
                    </div>
               
            </fieldset>
          
        </form>
        </div>
        </div>

    </div>

</div>


