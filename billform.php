<?php 
require 'core.php';
include 'header.php'; ?>


<div class='container'>
<div class='biller'>
    <div class="row">
    
        <section class='col-lg-3 col-md-3 col-sm-12'>
            <div class='loginMychart'>
            <form action="login.php" method="POST">
            <fieldset class="input-container">
            <div class='form-group'><legend><strong>Login MyChart</strong></legend>
            MyChart account holders can pay online, view billing history and create 
            payment plans within MyChart. Login now.</div>
                <div class ='form-group'>
                    
                    <input class='form-control' type="text" name="username" id="username" placeholder='username'>
                </div>
                
                <div class ='form-group'>
                    <input class='form-control' type="password" name="password" id="pass" placeholder='password'>
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
        </section>

        <section class='col-lg-9 col-md-9 col-sm-12'>
            <div class="payBill">
                <form action="" method="post">
                <fieldset>
                <div class="form-group">
                <h2>PAY MY BILL</h2>
                One-time bill pay, please enter your Guarantor number located on your bill or statement.<br><br>
                <input class="form-control" type="text" name="" id="" placeholder='Guarantor Number'>
                    <input class="btn btn-primary form-control" type="button" value="Pay Now">
                </div>
                </fieldset>
                
                   
                </form>
            </div>
        </section>

    </div>
</div>

        <div class="container">
            <div class='row'>
        <section class='col-sm-12 col-md-12 col-lg-12'>

            <h2>GUIDING YOU THROUGH THE BILLING PROCESS</h2>
        <p>As a Vidant Health patient, you may receive more than one type of bill for services.
            Please note that some of the doctors you see while in a Vidant hospital are not employed by our system. You may get a separate bill from them. To pay your bill, enter your Guarantor number above for a one-time payment. To view billing history, create a payment plan and pay online through MyChart, sign up now or login. 
                If you have questions regarding our financial assistance policy, call us at 252-847-4472 or toll-free at 800-788-4473.</p>
        
        </section>
        <section class='col-sm-12 col-md-12 col-lg-12'>
                        <h2>OTHER WAYS TO PAY</h2>

                          </section>
        <section class='col-sm-12 col-md-4 col-lg-4'>
        <h4> Pay in person</h4>
           <p> Payments may be made by cash, check or money order at the Central Billing Office,
            1950 Venture Tower Drive, Greenville, NC. Hours are Monday through 
            Friday from 8:30 am to 5:00 pm.</p>
        </section>
        <section class ='col-sm-12 col-md-4 col-lg-4'>
       <h4> Pay by mail</h4>
            <p>Payments of check or money order can also be mailed to Vidant, PO Box 71095, Charlotte, NC 28272-1095</p>
        </section>
        <section class='col-sm-12 col-md-4 col-lg-4'>
       <h4> Pay by phone</h4>
            <p>Call us at 252-847-4472 or toll-free at 800-788-4473, Monday through Friday from 8:30 am to 5:00 pm.</p>
            </section>
            <section class='col-sm-12 col-md-12 col-lg-12'>
                        <h2>OUTER BANKS MEDICAL GROUP BILL</h2>

                          </section>
        <section class='col-sm-12 col-md-4 col-lg-4'>
        <h4>Pay in person</h4>
       <p> Payments may be made by cash, check or money order at the Central Billing Office, 2000 Venture Tower Drive, Greenville, 
        NC. Hours are Monday through Friday from 8:30 am to 5:00 pm.</p>
        </section>
        <section class='col-sm-12 col-md-4 col-lg-4'>
        <h4>  Pay by mail</h4>
       <p> Payments of check or money order can also be mailed to  
        Outer Banks Medical Group, PO Box 63019, Charlotte, NC 28263-3019.</p>
        </section>
        <section class='col-sm-12 col-md-4 col-lg-4'>
        <h4>Pay by phone</h4>
           <p> Call us at 855-249-2842, Monday through Friday from 8:00 am – 7:00 pm, and 
            on Saturday from 8:00 am until 12:00 pm.</p>
        </section>
    </div>
</div>



</div>

<?php include 'footer.php'?>