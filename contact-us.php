<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/html">

<head>
    <meta charset="UTF-8">
    <title>Contact TechSpot - Computer Sales and Service</title>

    <!-- responsive meta -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- For IE -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Main stylesheet -->
    <link rel="stylesheet" href="css/style.css">
    <!-- Responsive stylesheet -->
    <link rel="stylesheet" href="css/responsive.css">
    <!-- Favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="images/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" href="images/favicon/favicon-32x32.png" sizes="32x32">
    <link rel="icon" type="image/png" href="images/favicon/favicon-16x16.png" sizes="16x16">
    <!-- Meta Information Tags -->
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <meta name="robots" content="index,follow" />
    <meta name="author" content="Sodiz Technologies, http://www.sodiztechnologies.com" />
    <!-- Fixing Internet Explorer-->
    <!--[if lt IE 9]>
    <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
    <script src="js/html5shiv.js"></script>
    <![endif]-->

</head>

<body>
<!-- PRELOADER -->
<div class="page-loader">
    <div class="loader">Loading...</div>
</div>
<!-- /PRELOADER -->

<div class="boxed_wrapper">
    <!--Start Top bar area -->
    <?php include 'includes/topbar.php'; ?>
    <!--End Top bar area -->

    <!--Start header area-->
    <?php include 'includes/header.php'; ?>
    <!--End header area-->

    <!--Start mainmenu area-->
    <?php include 'includes/mainmenu.php'; ?>
    <!--End mainmenu area-->

    <!-- Hero Slider Area Start -->
    <?php //include 'includes/slider.php'; ?>
    <!-- Hero Slider Area End -->

    <!--Start breadcrumb area-->
    <div class="breadcrumb-area" style="background-image: url(images/breadcrumb-bg.jpg);">
        <div class="container text-center">
            <h1>Contact Us</h1>
            <div class="breadcrumbs_path">
                <a href="http://www.techspot.ca">Home</a>&nbsp;&nbsp;-&nbsp;&nbsp; Contact
            </div>
        </div>
    </div>
    <!--End breadcrumb area-->

    <!--Start contact form area-->
    <div class="contact-form-area sec-padd-top">
        <div class="container">


            <div class="row">

                <div class="col-md-8">
                    <h2 class="m-b">Contact Form</h2>
                    <div class="contact-form">
                        <form id="contact-page-form" name="contact_form" class="default-form" action="mail.php" method="post">
                            <div class="row">
                                <div class="col-md-6">
                                    <input type="text" name="name" value="" placeholder="Your Name*" required="">
                                </div>
                                <div class="col-md-6">
                                    <input type="email" name="email" value="" placeholder="Your Mail*" required="">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <input type="text" name="phone" value="" placeholder="Phone">
                                </div>
                                <div class="col-md-6">
                                    <input type="text" name="Subject" value="" placeholder="Subject">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <textarea name="message" placeholder="Your Message.." required=""></textarea>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <input class="thm-btn bg-clr1" type="submit" value="Send">
                                </div>
                            </div>
                        </form>
                        <p class="form-messege"></p>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="footer-contact-info">
                        <div class="title">
                            <h4>Feel Free to Contact Us</h4>
                            <p></p>
                          <!--  <p>Feel free to Contact</p>-->
                        </div>
                        <ul class="clearfix">
                           <li>
                                <div class="iocn-holder">
                                    <span class="fa fa-home"></span>
                                </div>
                                <div class="text-holder">
                                    <h6>45 Overlea Blvd.</h6>
                                    <h6>Unit #122, East York </h6>
                                    <h6>Town Center, Toronto</h6>
                                    <h6>Ontario, Canada M4H 1C3</h6>
                                </div>
                            </li>
                            <li>
                                <div class="iocn-holder">
                                    <span class="icon-technology-1"></span>
                                </div>
                                <div class="text-holder">
                                    <h6>416-892-7778</h6>
                                    <h6>647-717-1432</h6>
                                </div>
                            </li>
                            <li>
                                <div class="iocn-holder">
                                    <span class="fa fa-fax"></span>
                                </div>
                                <div class="text-holder">
                                    <h6>Send FAX @</h6>
                                    <p>647-977-3786</p>
                                </div>
                            </li>
                            <li>
                                <div class="iocn-holder">
                                    <span class="icon-letter-1"></span>
                                </div>
                                <div class="text-holder">
                                    <h6>Mail Us @</h6>
                                    <a href="mailto:aziz@techspot.ca"><p>aziz@techspot.ca</p></a>
                                </div>
                            </li>
                        </ul>
                    </div>

                </div>

            </div>
        </div>
    </div>
    <!--End contact form area-->



    <div class="home-google-map">
        <iframe id="contact-google-map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2884.257762563546!2d-79.34900005511562!3d43.705192055105705!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89d4cce4ce379737%3A0x6aa96ed85afa4a7e!2sTECHSPOT+INC.!5e0!3m2!1sen!2sin!4v1528678944289" width="600" height="460" frameborder="0" style="border:0" allowfullscreen></iframe>
    </div>


    <!-- Call Out 2 Area Starts -->
    <?php include 'includes/callout2.php'; ?>
    <!-- Call Out 2 Area Ends -->

    <!-- Brand Logo Area Starts -->
    <?php include 'includes/brand-logo.php'; ?>
    <!-- Brand Logo Area Ends -->

    <!-- Footer Area Starts -->
    <?php include 'includes/footer.php'; ?>
    <!-- Footer Area Ends -->


    <!--Scroll to top-->
    <div class="scroll-to-top scroll-to-target" data-target="html"><span class="fa fa-angle-up"></span></div>
    <!-- main jQuery /-->
    <script src="js/jquery.js"></script>
    <!-- jQuery plugins /-->
    <script src="js/plugins.js"></script>
    <!-- jQuery meanmenu /-->
    <script src="js/jquery.meanmenu.js"></script>
    <!-- bootstrap /-->
    <script src="js/bootstrap.min.js"></script>
    <!-- bx slider /-->
    <script src="js/jquery.bxslider.min.js"></script>
    <!-- count to /-->
    <script src="js/jquery.countTo.js"></script>
    <!-- owl carousel /-->
    <script src="js/owl.carousel.min.js"></script>
    <!-- validate /-->
    <script src="js/validation.js"></script>
    <!-- mixit up /-->
    <script src="js/jquery.mixitup.min.js"></script>
    <!-- easing /-->
    <script src="js/jquery.easing.min.js"></script>
    <!-- gmap helper /-->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAHzPSV2jshbjI8fqnC_C4L08ffnj5EN3A"></script>
    <!--gmap script /-->
    <script src="js/gmaps.js"></script>
    <script src="js/map-helper.js"></script>
    <!-- fancy box /-->
    <script src="js/jquery.fancybox.pack.js"></script>
    <script src="js/jquery.appear.js"></script>
    <!-- isotope script /-->
    <script src="js/isotope.js"></script>
    <script src="js/jquery.prettyPhoto.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/jquery.bootstrap-touchspin.js"></script>

    <!-- jQuery ui js /-->
    <script src="js/jquery-ui.js"></script>
    <script src="js/SmoothScroll.js"></script>
    <script src="js/validation.js"></script>
    <script src="js/wow.min.js"></script>
    <!-- thm custom script /-->
    <script src="js/custom.js"></script>
</div>
</body>

</html>