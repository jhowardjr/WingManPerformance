<?php
$sendto = "wingmanperformance@yahoo.com";
$fname = $_POST['first_name'];
$lname = $_POST['last_name'];
$email = $_POST['email'];
$mobile_phone = $_POST['mobile_phone'];
$company = $_POST['company'];
$comments = $_POST['comments'];
mail($sendto, "Comments sent via the Website", "Somebody sent comments via the website. They are: \n \n Name: $fname $lname \n E-mail: $email \n
Mobile Phone: $mobile_phone \n
Company: $company \n
Comments: \n $comments", "From: \"$fname\" <$email>");
echo "<?xml version=\"1.0\" encoding=\"UTF-8\"?>
<!DOCTYPE html PUBLIC \"-//W3C//DTD XHTML 1.1//EN\"
	\"http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd\">


<html xmlns=\"http://www.w3.org/1999/xhtml\" xml:lang=\"en\">
<head>
<!--	<meta http-equiv=\"Page-Enter\" content=\"progid:DXImageTransform.Microsoft.ZigZag(Duration=2,gridSizeY=3,gridSizeX=3)\"> -->
	<meta http-equiv=\"Page-Enter\" content=\"progid:DXImageTransform.Microsoft.Spiral(Duration=2)\">
	<title>untitled</title>
<link rel=\"stylesheet\" type=\"text/css\" href=\"../scripts/wingmanperformance.css\">
</head>

<body class=\"body\">


	<div id=\"inner_body\">
	
		 <div id=\"navigate\">
			<a href=\"../index.html\" id=\"\" title=\"index\">Home</a> &#8226;
			<a href=\"../service/index.html\" id=\"\" title=\"index\">Services</a> &#8226;
			<a href=\"../used_part_store/index.html\" id=\"\" title=\"index\">Parts Store</a> &#8226;
			<a href=\"../testamonial/index.html\" id=\"\" title=\"index\">Testamonials</a> &#8226;
			<a href=\"../contactus/index.html\" id=\"\" title=\"index\">Contact Us</a>
			</div>    
	<div id=\"motto\">
	
		</div>
		 
		<div id=\"about_text\">
		Thank you! Your comments were sent!!
			</div>
		<div id=\"accepted_payments\">
			<img src=\"../images/logo_ccVisa.gif\" width=\"37\" height=\"23\" alt=\"Visa\"><img src=\"../images/logo_ccMC.gif\" width=\"37\" height=\"23\" alt=\"Master Card\"><img src=\"../images/logo_ccAmex.gif\" width=\"37\" height=\"23\" alt=\"American Express\"><img src=\"../images/logo_ccDiscover.gif\" width=\"37\" height=\"23\" alt=\"Discover\"><img src=\"../images/PayPal_mark_37x23.gif\" width=\"37\" height=\"23\" alt=\"PayPal\">
		</div>
			<hr  id=\"footer\">
			<div id=\"contact_info\">
				North Charleston, SC 29406 &#9674; Phone: 843-513-0662 &#9674; Email: <a
		href=\"mailto:wingmanperformance@yahoo.com\">wingmanperformance@yahoo.com</a>
			</div>
		<div id=\"copyright_info\">
			Copyright &#169; 2009 Wingman Performance, LLC. All rights reserved.
		</div>
	</div>
	
<!--	<div id=\"header\">
	<img src=\"header2.jpg\" width=\"650\" height=\"115\" alt=\"Header1\">
	</div> 
	<div id=\"motto\">
	Find comfort under our wings ...
	</div> -->

</body>
</html>";
?>