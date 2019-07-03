<!DOCTYPE html>
<html lang="en">
<title>Home</title>
    <head>
        <style type="text/css">
            .sf-menu
            {
                float:center;
            }
        </style>
    </head>
        <meta charset="utf-8">
        <meta name = "format-detection" content = "telephone=no" />
        <link rel="icon" href="images/favicon.ico">
        <link rel="shortcut icon" href="images/favicon.ico" />
        <link rel="stylesheet" href="css/owl.carousel.css">
        <link rel="stylesheet" href="css/slider.css">
        <link rel="stylesheet" href="css/style.css">
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
                                <li class="current"><a href="default.php">Home</a></li>
                                <li><a href="about us.php">About Us</a></li>
                                <li><a href="Gallery.php">Gallery</a></li>
                                
                              <li><a href="Registration Form.php">Register</a></li>
                                <li><a href="Contacts.php">Contact Us</a></li>
                               

                            </ul>
                        </nav>
                        <div class="clear"></div>
                    </div>
                    <div class="clear"></div>
                </div>
            </div>
        </header>


<style type="text/css">
        .style1
        {
            text-align: center;
        }
        .style2
        {
            text-decoration: underline;
            color: #FF0000;
            font-size: larger;
            font-family: "Arial Black";
        }
        .style3
        {
            text-decoration: underline;
            color: #0000CC;
            font-family: "Arial Black";
        }
        .style4
        {
            font-family: "Arial Black";
            color: #0000CC;
        }
        .style5
        {
            font-weight: bold;
            font-family: "Arial Black";
            color: #0000CC;
        }
        .style6
        {
            font-family: "Arial Black";
            background-color: #FFFFCC;
        }
        .style7
        {
            color: Blue;
        }
        .style8
        {
            text-align: center;
            text-decoration: underline;
        }
    </style>
<body style="background-color: #FFFFCC">
    <form id="form1" style="text-align: left;" action="login.html">
<h3 class="style8">Registration Form</h3>
							<div class="style1">
								<strong><span class="style2">Register Here!!!!!!</span><br class="style2" />
                                </strong>
							</div>
							<label class="name">
                                <span class="style4"><strong>&nbsp;</strong></span><span class="style3"><strong>Name:--&nbsp;&nbsp;&nbsp;
                            </strong></span>
								<input type="text"  data-constraints="@Required @JustLetters" class="style5" style="width: 170px;margin-left: 6px; margin-bottom: 0px" /></strong>
								<span class="empty-message"><strong><span class="style6">
                            <span class="style7">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; *This field is required.<spanrequired @Email" /></span></span>
                            <strong>
                            <br />
                            <br class="style4" />
                            </strong><span class="style4"><strong>Date Of Birth:---</strong></span>
                            
                            <span class="style4"><strong>&nbsp;&nbsp;
                                </div>
                                </strong></span></span>
                                </label>
								<span class="empty-message">
							
								<strong>
								<input type="text"  data-constraints="@Requin>
								<span class="error-message" class="style5"><br />
                            </strong>
							</label>
                            </span>
                            
								<strong>
                            <br class="style4" />
                            </strong>
							</label>
                            <span class="style4"><strong>
                            </div>
							</strong></span>
							
								<span class="style3"><strong>Gender:---&nbsp; </strong></span><strong>
								<input type="text"  
                                data-constraints="@Rred @JustNumbers" class="style5"/>&nbsp; <br />
                            </strong><span class="empty-message"><strong>
                            <br class="style4" />
                            </strong><span class="style3"><strong>E-Mail:--&nbsp;&nbsp; </strong></span></span>
                            <span class="style4"><strong>&nbsp;</strong></span></label><label class="style4"><strong><input 
                                type="text"  data-constraints="@Requin>
								<span class="empty-message" class="style5"><span class="style6"><span 
                                class="style7">*This field is required.</span>
							<br>
                            <br>
							<label class=" Driving License Number">
								<span class="style4"><strong>Contact Number:--&nbsp;&nbsp; </strong></span>
                                <strong>
								<input type="text"  data-constraints="@Requin>
								<span class="empty-message" class="style5"><span class="style6"><span 
                                    class="style7">*This field is required.</span>&nbsp;
                               
                                </span>
							</label>
                            <br><br>
                            <label class=" Driving License Number">
							
                                <span class="style4"><strong>Permanent Address:--&nbsp;&nbsp; </strong></span>
                                <strong>
                                <input type="text"  data-constraints="@Requin>
                                <span class="empty-message" class="style5"><span class="style6"><span 
                                    class="style7">*This field is required.</span>&nbsp;
                               
                                </span>
                            </label>
                            <br>
                            <br>
                            <label class=" Driving License Number">
                            
                                <span class="style4"><strong>Aadhar Card Number:--&nbsp;&nbsp; </strong></span>
                                <strong>
                                <input type="text"  data-constraints="@Requin>
                                <span class="empty-message" class="style5"><span class="style6"><span 
                                    class="style7">*This field is required.</span>&nbsp;
                               
                                </span>
                            </label>
                            <br><br>
                            <label class=" Driving License Number">
                            
                                <span class="style4"><strong>Vehicle Registration Number:--&nbsp;&nbsp; </strong></span>
                                <strong>
                                <input type="text"  data-constraints="@Requin>
                                <span class="empty-message" class="style5"><span class="style6"><span 
                                    class="style7">*This field is required.</span>&nbsp;
                               
                                </span>
                            </label>
                            
							
                            <br><br>
							
                                    <label class=" <label class="Password:--">
								Driving License Number<input type="text"data-constraints="@Requin>
								<span class="empty-message">*This field is required.</span><br />
                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <br />
&nbsp;
							</label>
                            <label class=" Driving License Number">
                            
                                <span class="style4"><strong>Voter's ID :--&nbsp;&nbsp; </strong></span>
                                <strong>
                                <input type="text"  data-constraints="@Requin>
                                <span class="empty-message" class="style5"><span class="style6"><span 
                                    class="style7">*This field is required.</span>&nbsp;
                               
                                </span>
                            </label>
							<br><br>
                            <label class="style4">
                           
                                Password<input type="password"  data-constraints="@Requin">	<span class="empty-message">*This 
                                Field is required.<br />
                                <br>
                                <br>
                                Confirm Password&nbsp;&nbsp;&nbsp; 
                           
                             <input type="password" placeholder="" data-constraints="@Requin">	<span class="empty-message"*This field is required.</span><br />
                                <br />
							</label>
                            <input type="button" onclick="window.location.href='facility.php'" value="REGISTER" style="background-color: yellow;height:50px;width: 150px;font-weight: bold; text-align: center" />
                                    <br />
                                    
                                    <img alt="Image result for small children love" 
                                        src="https://s-media-cache-ak0.pinimg.com/736x/51/d6/c7/51d6c74b093f1a4d4a3ef7d6a8c07653.jpg" 
                                        style="height: 150px; width: 650px" align="center" />
                                    </span>
                                </span>
                            </label>
                        </strong>
                    </label>
                    </strong>
                </label>
            </strong>
        </label></strong>
    </label>
</form>