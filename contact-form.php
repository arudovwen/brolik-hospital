<?php
include "header.php";

if (isset($_POST['contact_name']) && isset($_POST['contact_email'])&& isset($_POST['contact_message'])) {
       $contact_name= $_POST['contact_name'];
       $contact_email = $_POST['contact_email'];
       $contact_message = $_POST['contact_message'];

       if (!empty($contact_name)&& !empty($contact_email)&&!empty($contact_message)) {
                $to="succy2010@gmail.com";
                $subject="contact form submitted";
                $body=$contact_name."/n".$contact_message;
                $header="From:".$contact_email;

                
                if (mail($to, $subject, $body, $header)
                ) {
                    echo"Thanks for contacting us, We\'ll be in touch as soon as possible";
                } else {
                    echo"Your message wasn\'t sent";
                }
                
                
       } else {
           echo 'All fields required..';
       }
       
} else {
    
}



?>



<div class="container">
 <div class="contact_wrap">
 <form action="contact-form.php" method="post">
    <fieldset>
        <div class="form-group">
            
            <input id="name" class="form-control" type="text" name="contact_name"  placeholder="Name">
        </div>

        <div class="form-group">
          
          <input type="email" name="contact_email" id="email" class="form-control" placeholder="Email address">
         
        </div>

        <div class="form-group">
          <label for="message" class='animated infinite zoomInUp delay-1s'>Message:</label> <br>
          <textarea name="contact_message" id="message" cols="30" rows="10" class="form-control"></textarea>
        </div>

        <button class="btn btn-primary" name="submit" type="submit">Send</button>
    </fieldset>
    <br>
    <br>


</form>
 </div>
</div>



<?php include "footer.php" ;?>