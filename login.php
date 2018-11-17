
<?php 
include "header.php";
    


   
    if (isset($_POST['submit'])) {
        if (isset($_POST['username']) && isset($_POST['password'])) {
            
            $username1 = strtolower($_POST['username']);
           $username = str_replace(' ','', $username1); ;
           $password= md5(strtolower($_POST['password']));

             if (!empty($username) && !empty($password)) {
                 echo 'OK';
             } else {
                 echo 'not ok';
             }
             
        } else {
            # code...
        }
        
    } else {
        # code...
    }
    





?>


<div class = 'container'>
    <div class='row'>
        <div class="login-wrapper">
        <div class="loginform">
        <form action="login.php" method="POST">
            <fieldset class="input-container">
            <div class='form-group'><legend><strong>Login MyChart<strong></legend></div>
                <div class ='form-group'>
                    <label for="username">Username</label>
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
                            <li class="list-inline-item"><a href="register.php">Create account</a></li>
                        </ul>
                      
                    </div>
               
            </fieldset>
          
        </form>
        </div>
        </div>

    </div>

</div>





<?php 
include "footer.php";
?>