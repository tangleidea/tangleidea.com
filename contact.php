<?php include("include/header.php"); ?>
<style>
.glowing-border-red{ 
    outline: none;
    border-color: #ff3333;
    box-shadow: 0 0 10px #ff3333;
}
.glowing-border-green{ 
    outline: none;
    border-color: #4dff4d;
    box-shadow: 0 0 10px #4dff4d;
}
</style>
  <!--HOME START===========================================-->
  <?php
$message = '';
if(isset($_POST['submit'])){
	$email_message = '';
	$to = 'sumit.rmit@gmail.com';
        
	$subject = 'CONTACT'; 
	$name = $_POST['name'];
    $email = $_POST['email'];
	$phone = $_POST['phone'];
	$message = $_POST['message'];
	//$subject = $_POST['subject'];
	//$remarks = $_POST['remarks'];
	
	
        $email_message .="<b>CONTACT-</b> <br><br>";
        $email_message .="Name - " . $name. "<br>";
        $email_message .="Email - " . $email . "<br>";
        $email_message .="Phone - " . $phone . "<br>";
        $email_message .="Message - " . $message . "<br>";
        
        
		$headers = "From: contact@tangleidea.com \r\n";
        $headers .= "MIME-Version: 1.0\r\n";
        $headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
        if(mail($to, $subject, $email_message, $headers)){
			$messaget= '<span style="color:green; background-color:yellow"><b>Your Information Has Been Submitted Successfully</b></span>';
		
}else{
	
	$messaget= '<span style="color:green; background-color:red"><b>Your Information Has Been Submitted Failed</b></span>';
}
}
?>


 <div class="inner-banner5">
            <div class="tittle">

                    <h1>CONTACT</h1>

            </div>
        </div>
  
  <!-------------------------contact_us-------------------------------->
  


<!--======= PASSION =========--> 

<!--======= How we work=========--> 

<!--======= CONTACT US =========-->
<section id="web">

    <div class="container"> 

    
      
      <!--======= TITTLE =========--> 
      
      <!--======= CONTACT INFO =========-->
      
      <div class="container">
        <div class="col-lg-12-col-md-12 col-sm-12 col-xs-12">
          <div class="col-lg-8 col-md-12  col-sm-12 col-xs-12 ">
  <div class="col-md-6 contact">

       <a class="btn" href="get-quote">Request Quotation</a> 
       </div>
       <div class="col-md-6 contact">
       <a class="btn" href="">Career / Job</a>
       </div>
       
      
            <div class="contactForm"> 
             <?php $messaget;?>
              <!-- Start Contact Form -->
                <div class="col-md-12">
                <p>For General Query Please fill up the form below</p>
                </div>
              <form id="contactForm" action="" name="contact" method="post" role="form">

                <div class="col-md-12">
                  <div class="form-group">
                    <input id="name" type="text" class="input required" name="name" placeholder="Your Name" required >
                  </div>
                </div>
                <div class="col-md-12">
                  <div class="form-group">
                    <input id="email" type="email" class="input required " name="email" placeholder="Email Address" required>
                  </div>
                </div>
                <div class="col-md-12">
                  <div class="form-group">
                    <input id="phone" type="text" class="input required "  onKeyPress="return onlyNos(event,this);" autocomplete="off" name="phone" placeholder="Phone" required>
                  </div>
                </div>
      
                <div class="col-xs-12">
                  <div class="form-group">
                    <textarea id="message" class="textarea required text_ar" name="message" rows="5" cols="40" placeholder="Your Question" required></textarea>
                  </div>
                  </div>

                <div class="col-md-12">
                  <div class="form-group">
                   &nbsp;
                  </div>
                </div>
                <div class="col-md-12">
                  <div class="form-group">
                   <!-- <div class="g-recaptcha" data-sitekey="6LeCtwoUAAAAAItTICrNDuAybqki5jsQ5SHYCQHy"></div> --> <!-- LOCALHOST -->
                   <div class="g-recaptcha" data-sitekey="6LeOuAoUAAAAAPKFjoYRFkbULWBnTqcYB-oXc_h-"></div>
                   <!-- LIVE -->
                  </div>
                  <span style="color: red" id="captcha_error_span"></span>
                </div>
                <div class="col-xs-12">
               <!--  <div class="g-recaptcha" data-sitekey="6LcU4ygTAAAAAOP1-CiIuvNKhiGbTiTeyW0rZ5gx"></div> -->
                
                
                  <button id="" class="btn btn-green-border btn-lg" type="submit" name="submit" onclick="return validate()">SUBMIT</button>
                </div>
              </form>
              
              <!-- End Contact Form --> 
            </div>
            <div class="map col-md-12">
           
            
            </div>
          </div>
          <div class="col-md-4 address">
          <div class="mainaddress">
          
          <div class="col-md-12">

   <h4>
             <img src="images/usa.png" alt=""> USA Office
            </h4>
   
                <i class="fa fa-map-marker e-mail"></i> 32 Main Street   <br>
                Salt Lake City 84101 <br>
                <i class="fa fa-envelope-o e-mail"></i> : <a href="#" style="color:#7b7b7b;">tangleidea@gmail.com</a><br>
   
             <!---   <i class="fa fa-phone e-mail"></i> : +12132488744		--->
              </div>
<!---	<div class="col-md-12">

   <h4>
             <img src="images/ind.png" alt=""> India Office
            </h4>
   <strong>Tangle Idea Infotech Pvt. Ltd. </strong><br>
               <i class="fa fa-map-marker e-mail"></i> 2nd floor, Lalani Bauilding,<br>
                Chinarpark, Kolkata-700136. <br>
        <b>Landmark :</b> Opposite of "Pipal Tree Hotel". <br>
        <i class="fa fa-envelope-o e-mail"></i> : <a href="#" target="_blank" style="color:#7b7b7b;">contact@tangleidea.com</a><br>
                <i class="fa fa-phone e-mail"></i> : 9831300550
              </div>		--->
            </div>

<div class="otheraddress">
<div class="col-md-12">

   <h4>
             <img src="images/uk-flag.jpg" alt=""> UK Office
            </h4>
   
               <i class="fa fa-map-marker e-mail"></i> 4th Floor, London,<br>
                11 Belgrave Road<br>
        <i class="fa fa-envelope-o e-mail"></i> : <a href="#" style="color:#7b7b7b;">tangleidea@gmail.com</a><br>
        <!---        <i class="fa fa-phone e-mail"></i> : 07875105076		--->
              </div>
            </div>
<div class="otheraddress">
<div class="col-md-12">

   <h4>
             <img src="images/ind.png" alt=""> Kolkata Office
            </h4>
   
                <i class="fa fa-map-marker e-mail"></i> Halisahar Nabanagar <br>
                West bengal, 743136, India<br>
                <i class="fa fa-envelope-o e-mail"></i> : <a href="#" style="color:#7b7b7b;">tangleidea@gmail.com</a><br>
        <!---        <i class="fa fa-phone e-mail"></i> : +34 646 356 224		--->
              </div>
            </div>

            <div class="otheraddress">

            </div>



          </div>
          
        </div>
      </div>
    </div>

</section>
<!--======= RIGHTS =========-->





    <!--======= RIGHTS =========-->
          <?php include("include/footer_botom.php"); ?>

</div>


</body>

</html>
