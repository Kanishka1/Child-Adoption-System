
<!DOCTYPE html><html lang="en">
	<head>
		<title>Contacts</title>
		<meta charset="utf-8">
		<meta name = "format-detection" content = "telephone=no" />
		<link rel="icon" href="images/favicon.ico">
		<link rel="shortcut icon" href="images/favicon.ico" />
		<link rel="stylesheet" href="css/form.css">
		<link rel="stylesheet" href="css/style.css">
		<script src="js/jquery.js"></script>
		<script src="js/jquery-migrate-1.1.1.js"></script>
		<script src="js/script.js"></script> 
		<script src="js/jquery.ui.totop.js"></script>
		<script src="js/superfish.js"></script>
		<script src="js/jquery.equalheights.js"></script>
		<script src="js/jquery.mobilemenu.js"></script>
		<script src="js/jquery.easing.1.3.js"></script>
		<script src="js/TMForm.js"></script>
		<script>
		    $(document).ready(function () {
		        $().UItoTop({ easingType: 'easeOutQuart' });
		    }) 
		</script>
		<style type="text/css">
            .style2
            {
                color: #FF9999;
            }
            .style3
            {
                text-decoration: underline;
            }
        </style>
		<!--[if lt IE 8]>
		<div style=' clear: both; text-align:center; position: relative;'>
			<a href="http://windows.microsoft.com/en-US/internet-explorer/products/ie/home?ocid=ie6_countdown_bannercode">
				<img src="http://storage.ie6countdown.com/assets/100/images/banners/warning_bar_0000_us.jpg" border="0" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today." />
			</a>
		</div>
		<![endif]-->
		<!--[if lt IE 9]>
			<script src="js/html5shiv.js"></script>
			<link rel="stylesheet" media="screen" href="css/ie.css">
		<![endif]-->
	</head>
	<body class="" id="top">
<!--==============================header=================================-->
		<header>
			<div class="clear"></div>
			<div class="container_12">
				<div class="grid_12">
					<h1>
						<a href="index.html">
							<img src="images/logo.png" alt="Your Happy Family">
						</a>
					</h1>
					<div class="menu_block">
						<nav class="horizontal-nav full-width horizontalNav-notprocessed">
							<ul class="sf-menu">
								<li>
									<a href="index.html">Home</a>
									
								</li>
									</li>
								<li><a href="about us.php">About Us</a></li>
								<li><a href="Gallery.php">Gallery</a></li>
								
                              <li><a href="RegistrationForm.php">Register</a></li>
                              <li><a href="login.html">SignIn</a></li>
								<li class="current"><a href="Contacts.php">Contacts</a></li>
							</ul>
						</nav>
						<div class="clear"></div>
					</div>
					<div class="clear"></div>
				</div>
			</div>
		</header>
		<div class="main">
<!--==============================Content=================================-->
			<div class="content"><div class="ic"></div>
				<div class="container_12">
					<div class="grid_12">
						<div class="map">
							<figure class=" ">
							</figure>
						</div>
					</div>
					<div class="grid_4">
						<h3 class="style3">Address</h3>
						<div class="map">
							<address>
								<dl>
									<dt><span class="style2"><strong>Life In Color Organisation. <br>
									43/123 RK puram <br>
									Gandhi nagar New Delhi
									</strong>
									</dt>
									<dd><span><strong>Freephone:</strong></span><strong>8103935686</strong></dd>
									<dd><span><strong>Telephone:</strong></span><strong>9426547809</strong></dd>
									<dd><span><strong>FAX:</strong></span><strong> 07456- 2765889</strong></dd>
									<dd><strong>E-mail: </strong></span> <a href="#" class="style2"><strong>mail@lifecolor.org</strong></a></dd>
									<dd><span class="style2"><strong>Skype: </strong></span><a href="#" class="style2">
                                        <strong>@kanishka.lahori</strong></a></dd>
								</dl>
							</address>
							<p>&nbsp;</p>
						</div>
					</div>
					<div class="grid_8">
						<h3>Contact Form</h3>
						<form id="form">
							<div class="success_wrapper">
								<div class="success-message">Contact form submitted</div>
							</div>
							<label class="name">
								<input type="text" placeholder="Name:" data-constraints="@Required @JustLetters" />
								<span class="empty-message">*This field is required.</spaequired @Email" />
								<span class="empty-message">*This field is required.</span>
								<span class="error-message">*This is not a valid email.</span>
							</label>
							<label class="phone">
								<input type="text" placeholder="Phone:" data-constraints="@Requin>
								<span class="error-message">*This is not a valid name.</span>
							</label>
							
							<label class="message">
								<textarea placeholder="Message:" data-constraints='@Required @Length(min=20,max=999999)'></textarea>
								<span class="empty-message">*This field is required.</span>
								<span class="error-message">*The message is too short.</span>
							</label>
							<div>
                            </label>
							
							<label class="">
								&nbsp;<span class="empty-message">*This field is required.</span>
								<span class="error-message">*The message is too short.</span>
							</label>
							<div>
								<div class="clear"></div>
								<div class="btns">
									<a href="#" data-type="submit" class="btn">Send</a>
									<a href="#" data-type="reset" class="btn">Clear</a>
								</div>
							</div>
						</form>   
					</div>
				</div>
			</div>
<!--==============================footer=================================-->
			<footer>	
				<div class="hor bg3"></div>
				<div class="container_12">
					<div class="grid_12 ">  
						<div class="socials">
							<a href="#"></a>
							<a href="#"></a>
							<a href="#"></a>
							<div class="clear"></div>
						</div>
						<div class="copy">
							<strong>Life in Color</strong> &copy; <span id="copyright-year"></span> | <a href="#">Privacy Policy</a> <br>
							Website designed by <a href="http://www.google.com/" rel="nofollow">#CoderGirls</a>
						</div>  
					</div>
				</div>  
			</footer>
		</div>
	</body>
</html>


