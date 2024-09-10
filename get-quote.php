<?php include("include/header.php"); ?>

<!--Fonts Online-->
    
    <link rel="stylesheet" href="css/quote.css">
	<script src="../code.jquery.com/jquery-1.12.4.js"></script>
    <script src="../code.jquery.com/ui/1.12.0/jquery-ui.js"></script>
    <script src='../www.google.com/recaptcha/api.js'></script>
    
    
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

        <div class="inner-banner5">
            <div class="tittle">

                <h1>Request a Quote</h1>

            </div>
        </div>


  <?php
$message = '';
if(isset($_POST['submit'])){
	$email_message = '';
	$to = 'sumit.rmit@gmail.com';
        
	$subject = 'GET-QUOTE'; 
	$services = $_POST['services'];
	$name = $_POST['name'];
    $email = $_POST['email'];
	$phone = $_POST['phone'];
	$message = $_POST['message'];
	//$subject = $_POST['subject'];
	//$remarks = $_POST['remarks'];


        $email_message .="<b>GET-QUOTE-</b> <br><br>";
		$email_message .="Services - " . $services. "<br>";
        $email_message .="Name - " . $name. "<br>";
        $email_message .="Email - " . $email . "<br>";
        $email_message .="Phone - " . $phone . "<br>";
        $email_message .="Message - " . $message . "<br>";
        
        
		$headers = "From: contact@tangleidea.com \r\n";
        $headers .= "MIME-Version: 1.0\r\n";
        $headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
        if(mail($to, $subject, $email_message, $headers))
			$message= '<span style="color:green; background-color:yellow"><b>Your Information Has Been Submitted Successfully</b></span>';
		
}
?>

        <section id="intro" class="no-bottom">
            <div class="container">
            <h2>Share your project scope</h2>
        <p class="text-center">We would love to hear from you, discuss with you and understand your business idea. Fill up the below form & we will get back to you with the best quotation within best possible time.</p>
                
                </div>
        <div id="quotation" class="quotation-form">

         <div class="payment-online-form-left container">
<p class="text-center"><?php echo $message;?> </p>
           <form name="getquote" id="getquote" action="" method="post" >


            <fieldset>

             <div class="form-area">
              <div class="MargBP col-md-12">
               <div class="form-group">
                <label class="col-md-2 col-sm-2">
                <i class="fa fa-desktop" aria-hidden="true"></i> Type of Services  <span>*</span></label>

                  <div class="col-md-10 col-sm-7">
    	
       											 <input type="text" class="form-control required" name="services" id="" style='text-transform:uppercase' required="" />
        
                                            </div>
                                        </div>
                                    </div>

                                    <div class="MargBP col-md-6">
                                        <div class="form-group">
                                            <label class="col-md-5 col-sm-5"><i class="fa fa-user" aria-hidden="true"></i> Name <span>*</span></label>
                                            <div class="col-md-7 col-sm-7">
                                                <input type="text" class="form-control required" name="name" id="name" required >
                                            </div>
                                        </div>
                                    </div>
                                    <div class="MargBP col-md-6">
                                        <div class="form-group">
                                            <label class="col-md-5 col-sm-5"><i class="fa fa-envelope-o" aria-hidden="true"></i> Email <span>*</span></label>
                                            <div class="col-md-7 col-sm-7">
                                                <input type="text" class="form-control required email" name="email" id="email" required >
                                            </div>
                                        </div>
                                    </div>

                                    <div class="MargBP col-md-6">
                                        <div class="form-group">
                                            <label class="col-md-5 col-sm-5"><i class="fa fa-mobile" aria-hidden="true"></i> Phone <span>*</span></label>
                                            <div class="col-md-7 col-sm-7">
                                                <input type="text" class="form-control required" name="phone" id="phone" required >
                                            </div>
                                        </div>
                                    </div>
                   
                                    <div class="MargBP col-md-12">
                                        <div class="form-group">
                                            <label class="col-md-2 col-sm-2"><i class="fa fa-comments-o" aria-hidden="true"></i> Message</label>
                                            <div class="col-md-10 col-sm-10">
                                                <textarea class="form-control" rows="7" name="message" id="message" required ></textarea>
                                            </div>

                                        </div>
                                    </div>




                                  <div class="MargBP col-md-12">
                  <div class="form-group">
                   <!-- <div class="g-recaptcha" data-sitekey="6LeCtwoUAAAAAItTICrNDuAybqki5jsQ5SHYCQHy"></div> --> <!-- LOCALHOST -->
                   <div class="g-recaptcha" data-sitekey="6LeOuAoUAAAAAPKFjoYRFkbULWBnTqcYB-oXc_h-"></div>
                   <!-- LIVE -->
                  </div>
                  <span style="color: red" id="captcha_error_span"></span>
                </div>

                                </div>
                            </fieldset>



                            <div class="below_div">


                                <div class="col-md-12 n_sub_mit">
                                    <button id="" type="submit" class="btn btn-info btn-lg" name="submit" >Submit</button>
                                </div>
                            </div>
                        </form>
                                </div>

                        </div>
        </section>

        <!--======= RIGHTS =========-->
    <?php include("include/footer_botom.php"); ?>
        <a href="http://gazpo.com/downloads/tutorials/jquery/scrolltop/#" class="scrollup" style="display: none;">Scroll</a>



     <script src="js/jquery-1.9.1.min.js"></script>
<script src="js/wow.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.stellar.min.js"></script>
<script src="js/jquery.sticky.js"></script>
<script src="js/jquery.isotope.min.js"></script>
<script src="js/isotope.pkgd.min.js"></script>
<script src="js/modernizr.js"></script>
<script src="js/jquery.flexslider-min.js"></script>
<script src="js/color-switcher.js"></script>
<script src="js/waypoints.min.js"></script>
<script src="js/counter.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="js/smooth-scroll.html"></script>
<script src="js/prefixfree.min.html"></script>
<script src="js/index.html"></script>
<script src="js/jquery.jcarousel.min.html"></script>
<script src="js/jquery.superslides.min.html"></script>
<script src="js/bootstrap-hover-dropdown.min.js"></script>

<!-- External libraries: jQuery & GreenSock -->
<script src="layerslider/js/greensock.js" type="text/javascript"></script>

<!-- LayerSlider script files -->
<script src="layerslider/js/layerslider.transitions.js" type="text/javascript"></script>
<script src="layerslider/js/layerslider.kreaturamedia.jquery.js" type="text/javascript"></script>
<script src="js/main.html"></script>
        <script type="text/javascript">
            $(document).ready(function() {

                $(window).scroll(function() {
                    if ($(this).scrollTop() > 100) {
                        $('.scrollup').fadeIn();
                    } else {
                        $('.scrollup').fadeOut();
                    }
                });

                $('.scrollup').click(function() {
                    $("html, body").animate({
                        scrollTop: 0
                    }, 600);
                    return false;
                });

            });
        </script>


<script type="text/javascript">
    $(".select-all2").on("click", function() {
        if ($(this).is(':checked')) {
            $(this).closest("div.fpblocks").find(":checkbox").prop('checked',true);

        } else {
           $(this).closest("div.fpblocks").find(":checkbox").prop('checked',false);
        }
    });
</script>

<script type="text/javascript">
    $(".select-all2").on("click", function() {
        if ($(this).is(':checked')) {
            $(this).closest("div.fpblocks2").find(":checkbox").prop('checked',true);

        } else {
           $(this).closest("div.fpblocks2").find(":checkbox").prop('checked',false);
        }
    });
</script>

<script type="text/javascript">
    $(".select-all2").on("click", function() {
        if ($(this).is(':checked')) {
            $(this).closest("div.fpblocks3").find(":checkbox").prop('checked',true);

        } else {
           $(this).closest("div.fpblocks3").find(":checkbox").prop('checked',false);
        }
    });
</script>

<script type="text/javascript">
    $(".select-all2").on("click", function() {
        if ($(this).is(':checked')) {
            $(this).closest("div.fpblocks4").find(":checkbox").prop('checked',true);

        } else {
           $(this).closest("div.fpblocks4").find(":checkbox").prop('checked',false);
        }
    });
</script>
<script>
        function validate() {

        var checkboxValue=[];
        $.each($("input[name='services[]']:checked"), function()
        {
            checkboxValue.push($(this).val());
        });
        //alert(checkboxValue);
            if (checkboxValue == "") {
                    $("dl.dropdown").addClass("glowing-border-red");
                    return false;
            }
            else {
                $("dl.dropdown").removeClass("glowing-border-red");
            }
            if (document.getElementById("name").value.trim() == "") {
                    $("#name").addClass("glowing-border-red");
                    return false;
            }
            else {
                $("#name").removeClass("glowing-border-red");
            }

            var emailid =document.getElementById("email").value.trim();
            atpos = emailid.indexOf("@");
            dotpos = emailid.lastIndexOf(".");
            if (document.getElementById("email").value.trim() == "") {
                $("#email").addClass("glowing-border-red");

                return false;
            }
            else if (atpos < 1 || ( dotpos - atpos < 2 )) {
                 $("#email").addClass("glowing-border-red");
                return false;
            }
            else {
                $("#email").removeClass("glowing-border-red");
            }
            if (document.getElementById("phone").value.trim() == "") {
                    $("#phone").addClass("glowing-border-red");
                    return false;
            }
            else {
                $("#phone").removeClass("glowing-border-red");
            }

            if (document.getElementById("g-recaptcha-response").value.trim() == "") {

                    $("#captcha_error_span").html('Please Fill The Captcha !');
                    return false;
            }
            else {
                 $("#captcha_error_span").html('');
            }



        }


</script>
<script language="Javascript" type="text/javascript">
    function onlyNos(e, t)
    {

        try
        {
            if (window.event)
            {
                var charCode = window.event.keyCode;
            }
            else if (e)
            {
                var charCode = e.which;
            }
            else
            {
                return true;
            }
            if (charCode > 31 && (charCode < 48 || charCode > 57))
            {
                //alert('Please Enter Only Number');
                // $("#flight").css("borderColor", "red");
                return false;
            }
            return true;
        }
        catch (err) {
            alert(err.Description);
        }
    }
</script>

</body>


<!-- Mirrored from www.exprolab.com/get-quote.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 21 Mar 2017 19:00:35 GMT -->
</html>
