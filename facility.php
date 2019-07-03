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
                                <li class="current"><a href="default.php">Home</a></li>
                                <li><a href="about us.php">About Us</a></li>
                                <li><a href="Gallery.php">Gallery</a></li>
                                
                              <li><a href="Registration Form.php">Register</a></li>
                                <li><a href="Contacts.php">Contact Us</a></li>
                                <li><a href="Login.html">Sign In</a></li>
                               

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
            font-family: Corbel;
            color: #FF3300;
            text-decoration: underline;
            background-color: #FFFFCC;
        }
        .style2
        {
            font-family: Corbel;
            color: #660033;
            text-align: center;
        }
        .style3
        {
            font-family: Corbel;
            color: #0000CC;
            font-size: large;
        }
    </style>
<body style="background-color:Silver";
    <p class="style2">
        &nbsp;</p>
    <p class="style2">
        <strong style="font-size: xx-large">REGISTRATION CONFIRMATION</strong></p>
    <p class="style1">
        &nbsp;</p>
    <p class="style3">
        <strong>Your request has been registered and is under process .........</strong></p>
    <p class="style1">
        &nbsp;</p>
    <p class="style3">
        <strong>Kindly wait while it is being processed...</strong></p>
    <p class="style1">
        &nbsp;</p>
    <p class="style1">
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <img alt="Image result for registered" 
            src="data:image/jpeg;base64,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" 
            style="height: 328px; margin-left: 0px" />&nbsp; </p>

