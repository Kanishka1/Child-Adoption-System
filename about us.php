<!DOCTYPE html><html lang="en">
	<head>
		<title>About Us</title>
		<meta charset="utf-8">
		<meta name = "format-detection" content = "telephone=no" />
		<link rel="icon" href="images/favicon.ico">
		<link rel="shortcut icon" href="images/favicon.ico" />
		<link rel="stylesheet" href="css/owl.carousel.css">
		<link rel="stylesheet" href="css/slide.css">
		<link rel="stylesheet" href="css/style.css">
		<link rel="stylesheet" href="css/superfish.css">

		<script src="js/jquery.js"></script>
		<script src="js/jquery-migrate-1.1.1.js"></script>
		<script src="js/script.js"></script>
		<script src="js/jquery.ui.totop.js"></script>
		<script src="js/superfish.js"></script>
		<script src="js/jquery.equalheights.js"></script>
		<script src="js/jquery.mobilemenu.js"></script>
		<script src="js/jquery.easing.1.3.js"></script>
		<script src="js/owl.carousel.js"></script>
		<script src="js/jquery.flexslider-min.js"></script>
		<script src="js/kwiks.js"></script>
		<script>
			$(document).ready(function(){
				$().UItoTop({ easingType: 'easeOutQuart' });
				var owl = $("#owl");
				owl.owlCarousel({
					items : 4, //10 items above 1000px browser width
					itemsDesktop : [995,3], //5 items between 1000px and 901px
					itemsDesktopSmall : [767, 2], // betweem 900px and 601px
					itemsTablet: [700, 2], //2 items between 600 and 0
					itemsMobile : [479, 1], // itemsMobile disabled - inherit from itemsTablet option
					navigation : true,
				});
			})
			var Main = Main || {};
			jQuery(window).load(function() {
				window.responsiveFlag = jQuery('#responsiveFlag').css('display');
				Main.gallery = new Gallery();
				jQuery(window).resize(function() {
					Main.gallery.update();
				});
			});
			function Gallery(){
				var self = this,
					container = jQuery('.flexslider'),
					clone = container.clone( false );
					this.init = function (){
						if( responsiveFlag == 'block' ){
						var slides = container.find('.slides');
						slides.kwicks({
							max : 500,
							spacing : 0
						}).find('li > a').click(function (){
							return false;
						});
						} else {
							container.flexslider();
						}
					}
					this.update = function () {
						var currentState = jQuery('#responsiveFlag').css('display');
						if(responsiveFlag != currentState) {
							responsiveFlag = currentState;
							container.replaceWith(clone);
							container = clone;
							clone = container.clone( false );
							this.init();
						}
					}
				this.init();
			}
		</script>
		<!--[if lt IE 9]>
		<script src="js/html5shiv.js"></script>
		<link rel="stylesheet" media="screen" href="css/ie.css">
		<![endif]-->
	</head>
	<body class="page1" id="top"><html>
    <head>
        <title>Welcome!!!!</title>
        <style>
         body {font-family:"Verdana";font-weight:normal;font-size: .7em;color:black;} 
         p {font-family:"Verdana";font-weight:normal;color:black;margin-top: -5px}
         b {font-family:"Verdana";font-weight:bold;color:black;margin-top: -5px}
         h1 { font-family:"Verdana";font-weight:normal;font-size:18pt;color:red }
         h2 { font-family:"Verdana";font-weight:normal;font-size:14pt;color:maroon }
         pre {font-family:"Lucida Console";font-size: .9em}
         .marker {font-weight: bold; color: black;text-decoration: none;}
         .version {color: Lime;}
         .error {margin-bottom: 10px;}
         .expandable { text-decoration:underline; font-weight:bold; color:navy; cursor:hand; }
            .style2
            {
                text-decoration: underline;
                color: #0066CC;
                font-family: Verdana;
                font-weight: 700;
                text-align: center;
            }
            .style3
            {
                font-size: smaller;
                font-family: Verdana;
            }
            .style4
            {
                color: red;
            }
            .style5
            {
                text-align: center;
            }
            body
            {
            	background-color: skyblue;
            }
            .menu_block
            {
            	float:right;
            	
            	
            }


        </style>
    </head>

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
									<a href="Default.php">Home</a>
									
								</li>
									
								<li class="current"><a href="about us.php">About Us</a></li>
								<li><a href="Gallery.php">Gallery</a></li>
								
                                
                                <li><a href="Registration Form.php">Register</a></li>
								<li ><a href="contacts.php">Contacts</a></li>
							</ul>
						</nav>
						<div class="clear"></div>
					</div>

            <span><h1>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
            <p></p>
                </span>
                <span><h1>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </h1></span>
                 <hr width=100% size=50 color=lightgreen>
                <span><h1 style="font-weight: bold;font-size: 30px">ABOUT US</h1></span>
                <span><h1>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </h1></span>
                <img alt="Image result for help" 
                    src="images/page1_img2.jpg" align=center width="50%" height="300px" /><span><img 
                    alt="Image result for hope" 
                    src="https://alteristic.org/wp-content/uploads/2018/01/hope-hand-e1515602011651.jpg" width="50%" height="300px" /></span>

                    <hr width=100% size=50 color=lightgreen>
          
            
                <span><span class="style2"></span></h2>
            <h2 class="style5" style="color: red"> This is a small initiative by us to help the orphans
            </h2>
            <div class="style5">
            <strong><span class="style4"><span class="style3"><h2 style="color: red">Life In colours is an organisation which has</h2></span><span><font face="Arial, Helvetica, Geneva, SunSans-Regular, sans-serif "><span class="style4"><span class="style3"><strong class="style3"><h2 style="color: red">put a step forward to help the orphans live the best life possible!!!!<br></h2>
                <br><h2 style="color: red">The Organisation helps both the orphans as well as people who want to have a family.</h2>
                <h2 style="color: red">Join us and be a part of our organisation and spread love and peace.<br /></h2>
                </strong></span></span>
            <br>
                <img src="images/page1_img3.jpg" width="50%" /><img src="images/page1_img1.jpg" width="50%" /><br>

                <hr width=100% size=50 color=lightgreen>

            </div>

            <strong style="text-size-adjust: none; background: rgb(255, 255, 255); font-size: 18px; margin: 0px 0px 3px; padding: 1px 0px 0px; border: 0px; outline: 0px; vertical-align: top; font-weight: 700; line-height: 24px; display: block; color: rgb(0, 82, 218); font-family: &quot;Open Sans&quot;, sans-serif; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; letter-spacing: normal; orphans: 2; text-align: left; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; text-decoration-style: initial; text-decoration-color: initial;">
            Life in Color</strong><span 
                style="color: rgb(98, 95, 95); font-family: &quot;Open Sans&quot;, sans-serif; font-size: 12px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: normal; letter-spacing: normal; orphans: 2; text-align: left; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-style: initial; text-decoration-color: initial; display: inline !important; float: none;">©<span 
                class="Apple-converted-space">&nbsp;</span></span><span id="copyright-year" 
                style="text-size-adjust: none; background: rgb(255, 255, 255); font-size: 12px; margin: 0px; padding: 0px; border: 0px; outline: 0px; vertical-align: top; color: rgb(98, 95, 95); font-family: &quot;Open Sans&quot;, sans-serif; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: normal; letter-spacing: normal; orphans: 2; text-align: left; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; text-decoration-style: initial; text-decoration-color: initial;">2017</span><span 
                style="color: rgb(98, 95, 95); font-family: &quot;Open Sans&quot;, sans-serif; font-size: 12px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: normal; letter-spacing: normal; orphans: 2; text-align: left; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-style: initial; text-decoration-color: initial; display: inline !important; float: none;"><span 
                class="Apple-converted-space">&nbsp;</span>|<span class="Apple-converted-space">&nbsp;</span></span><a 
                href="Default.aspx#" 
                style="text-size-adjust: none; background: rgb(255, 255, 255); font-size: 12px; margin: 0px; padding: 0px; border: 0px; outline: none; vertical-align: top; text-decoration: none; color: inherit; transition: 0.5s ease; font-family: &quot;Open Sans&quot;, sans-serif; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: normal; letter-spacing: normal; orphans: 2; text-align: left; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px;">Privacy 
            Policy</a><br 
                style="text-size-adjust: none; color: rgb(98, 95, 95); font-family: &quot;Open Sans&quot;, sans-serif; font-size: 12px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: normal; letter-spacing: normal; orphans: 2; text-align: left; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-style: initial; text-decoration-color: initial;" />
            <span style="color: rgb(98, 95, 95); font-family: &quot;Open Sans&quot;, sans-serif; font-size: 12px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: normal; letter-spacing: normal; orphans: 2; text-align: left; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-style: initial; text-decoration-color: initial; display: inline !important; float: none;">
            Website designed by<span class="Apple-converted-space">&nbsp;</span></span><a 
                href="http://www.google.com/" rel="nofollow" 
                style="text-size-adjust: none; background: rgb(255, 255, 255); font-size: 12px; margin: 0px; padding: 0px; border: 0px; outline: none; vertical-align: top; text-decoration: none; color: inherit; transition: 0.5s ease; font-family: &quot;Open Sans&quot;, sans-serif; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: normal; letter-spacing: normal; orphans: 2; text-align: left; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px;">Google</a><br />

            </font>

            </strong><font face="Arial, Helvetica, Geneva, SunSans-Regular, sans-serif ">
            </font>

    </body>
</html>
