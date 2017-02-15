<?php
if(isset($_POST['submit']))
{
	//print_r($_POST); 
	
	$to = "vidit.consul@adglobal360.com";
	$subject = "Magic Bus -";
	$subject .= "- Lead Details (Landing Page)";
	// To send HTML mail, the Content-type header must be set
	$headers  = 'MIME-Version: 1.0' . "\r\n";
	$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
	$from = "admin@magic-bus.com";
	$emailList ="nitin.singhal@adglobal360.com";
	// Create email headers
	$headers .= 'From: '.$from."\r\n".
    'Reply-To: '.$from."\r\n" .
	'Bcc: '.$emailList."\r\n" .
    'X-Mailer: PHP/' . phpversion();
 
	// Compose a simple HTML email message
	$message = '<html><body>';
	$message .= '<p style="color:#080;font-size:18px;">Hi Team,</p>';
	$message .= '<p style="color:#080;font-size:18px;">Please find below the new lead details</p>';
	$message .= '<p style="color:#080;font-size:18px;"><strong>Name : </strong>'. $_POST['name'] .'<br /><strong>Email : </strong>'. $_POST['email'] .'<br /><strong>Contact No. : </strong>'. $_POST['phone'] .'<br /><strong>City : </strong>'. $_POST['city'] .'<br /><strong>Contacted : </strong>'. $_POST['contacted'] .'</p>';
	$message .= '<p></p><p style="color:#080;font-size:18px;"><strong>Thanking You,</strong></p>';
	$message .= '<p style="color:#080;font-size:18px;"><strong>Team Magic Bus.</strong></p>';
	$message .= '</body></html>';
	mail($to,$subject, $message, $headers);
	
header('location:thankyou.html');	
}
?>
<!DOCTYPE html>
<html>
<head>
<title>Magic Bus</title>
<meta name=viewport content="width=device-width, minimum-scale=1.0, maximum-scale=1.0">
<link href="css/layout.css" rel="stylesheet"  />
<link href="css/screen.css" rel="stylesheet"  />
<link href="css/fonts.css" rel="stylesheet"  />
<script type="text/javascript" src="js/jquery-1.7.2.min.js"></script> 
<script type="text/javascript" src="js/client_agltracking_common.js"></script>
</head>

<body onload="call();">

<header>
<div class="wrapper">
<div class="logo"><img src="images/logo.png"></div>
</div>
</header>

<div class="banner">
<div class="wrapper">
<img src="images/banner.jpg">
</div>
</div>


<div class="bg">
<div class="wrapper">
<div class="text_container">
<div class="container1">
<div class="wrapper1">
<div class="clip">
<div class="clip_content">
<h1>Looking to do something exciting?</h1>
<p>Here is your chance to win a free ticket to a private screening of the Oscar Nominated movie
LION starting Dev patel and Nicole Kidman. Organized by Magic Bus, this special screening will be held at the NDFC Preview Theatre, Mumbai</p>

<h3>22nd February   <span>7:30 pm.</span></h3>

<p>Just drop in your details with us and 4 Lucky winntes will get a chance to watch the movie with Mumbai's glitterati, absolutely FREE! </p>

</div>
</div>
<div class="form">
<div class="form_inner">
<h3>Ready for your free ticket</h3>
<div class="form_block">
<form method="post" name="enquire" action="<?php echo $_SERVER['PHP_SELF']; ?>" onsubmit="return(validate());">
<div class="block2">
<div class="textclass">
<input name="name" type="text" value="" placeholder="Name">
</div>
</div>


<div class="block3">
<div class="textclass">
<input  name="phone"  type="text" value="" placeholder="Number">
</div>
</div>


<div class="block4">
<div class="textclass">
<input  name="email" type="email" value="" placeholder="Email">
</div>
</div>


<div class="block5">
<div class="textclass">
<input  name="city" type="text" value="" placeholder="City">
</div>
</div>
</div>

<div class="block6">
<div class="textclass">
<input type="checkbox" name="contacted" value="yes"> I am interested  in getting contacted by Magic Bus team.<br>
</div>
</div>


<div class="submitclass">
<input  name="submit" type="submit" value="SUBMIT">
</div>
</form>
</div>
</div>
</div>
</div>

<div class="footer">
<ul>
<li><a href="https://www.facebook.com/magicbusindia/?ref=hl" target="_blank"><img src="images/fb.png"></a></li>
<li><a href="https://twitter.com/MagicBusIndia" target="_blank"><img src="images/twitter.png"></a></li>
<li><a href="https://www.instagram.com/magic.bus/" target="_blank"><img src="images/instagram.png"></a></li>
<li><a href="http://www.youtube.com/user/magicbusin" target="_blank"><img src="images/youtube.png"></a></li>
<li><a href="https://www.linkedin.com/company/magic-bus?trk=biz-companies-cym" target="_blank"><img src="images/linkedin.png"></a></li>
<li><a href="https://www.linkedin.com/company/magic-bus?trk=biz-companies-cym" target="_blank"><img src="images/gplus.png"></a></li>
</ul>
</div>

</div>



</div>



<script type="text/javascript">
   
      function validate()
      {
      
         if( document.enquire.name.value == "" )
         {
            alert( "Please provide your name!" );
            document.enquire.name.focus() ;
            return false;
         }
          if( document.enquire.phone.value == "" ||
         isNaN( document.enquire.phone.value ) ||
         document.enquire.phone.length < 5 )
         {
            alert( "Please share the contact number." );
            document.enquire.phone.focus() ;
            return false;
         }
		 
         if( document.enquire.email.value == "" )
         {
            alert( "Please provide your Email!" );
            document.enquire.email.focus() ;
            return false;
         }
         
        
         
         if( document.enquire.city.value == "" )
         {
            alert( "Please select your city!" );
            return false;
         }
         return( true );
      }
	  

</script>

</body>
</html>
