<?php
session_start();


?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title -->
    <title>DIU HMS | Online Hotel Management System</title>

    <!-- Favicon -->
    <link rel="icon" href="img/core-img/favicon.ico">

    <!-- Core Stylesheet -->
    <link rel="stylesheet" href="style.css">

</head>

<body>
    <!-- Preloader -->
    <div class="preloader d-flex align-items-center justify-content-center">
        <div class="cssload-container">
            <div class="cssload-loading"><i></i><i></i><i></i><i></i></div>
        </div>
    </div>

    <!-- ##### Header Area Start ##### -->
    <header class="header-area">
        <!-- Navbar Area -->
        <div class="palatin-main-menu">
            <div class="classy-nav-container breakpoint-off">
                <div class="container">
                    <!-- Menu -->
                    <nav class="classy-navbar justify-content-between" id="palatinNav">

                        <!-- Nav brand -->
                        <a href="index.html" class="nav-brand"><img src="img/core-img/logo.png" alt=""></a>

                        <!-- Navbar Toggler -->
                        <div class="classy-navbar-toggler">
                            <span class="navbarToggler"><span></span><span></span><span></span></span>
                        </div>

                        <!-- Menu -->
                        <div class="classy-menu">

                            <!-- close btn -->
                            <div class="classycloseIcon">
                                <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
                            </div>

                            <!-- Nav Start -->
                            <div class="classynav">
                                <ul>
                                    <li class="active"><a href="index.html">Home</a></li>
                                    

                                    <li><a href="news.html">News</a></li>
                                    <li><a href="about-us.html">About Us</a></li>
                                    <li><a href="contact.php">Contact</a></li>
                                </ul>

                                <!-- Button -->
                                <div class="menu-btn">
                                    <a href="registration.php" class="btn palatin-btn">Sign Up</a>
                                    <a href="login.php" class="btn palatin-btn">Sign In</a>                                    
                                </div>

                            </div>
                            <!-- Nav End -->
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- ##### Header Area End ##### -->

    <!-- ##### Hero Area Start ##### -->
    <section class="hero-area">
        <div>

            <!-- Single Hero Slide -->
            <div class="single-hero-slide d-flex align-items-center justify-content-center">
                <!-- Slide Img -->
                <div class="slide-img bg-img" style="background-image: url(img/bg-img/bg-1.jpg);"></div>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-12 col-lg-9">
                            <!-- Slide Content -->
                            <div class="hero-slides-content" data-animation="fadeInUp" data-delay="100ms">
                                <div class="line" data-animation="fadeInUp" data-delay="300ms"></div>
                                <h2 style="font-size:50px;" data-animation="fadeInUp" data-delay="500ms"><?php echo $_SESSION['welcomeMsg'] ?></h2>
                                <p data-animation="fadeInUp" data-delay="700ms">
                                    
                                
                                <?php echo $_SESSION['message'] ?>
                                
                                <span><strong> <?php echo $_SESSION['userEmail'] ?> </strong></span>    
                                
                                <?php echo $_SESSION['message2'] ?>
                                
                                
                                
                                </p>
                              
                                <a href="readmore01.html" class="btn palatin-btn mt-50" data-animation="fadeInUp" data-delay="900ms">Read About Us</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>



        </div>
    </section>
    <!-- ##### Hero Area End ##### -->  


    <!-- ##### About Us Area End ##### -->

        <!-- ##### Contact Area Start ##### -->
    <section class="contact-area d-flex flex-wrap align-items-center" id="DIU_Hostel_GMap">
        <div class="home-map-area">
            <a href="https://goo.gl/maps/FcxaALeG6Hgks3h9A"><img src="img/DIU_Map.jpg" alt="Dhaka International University Location"> </a> 
         </div>
        <!-- Contact Info -->
        <div class="contact-info">
            <div class="section-heading wow fadeInUp" data-wow-delay="100ms">
                <div class="line-"></div>
                <h2><i class="fa fa-address-book"></i> Contact Info</h2>
            </div>
            <h4 class="wow fadeInUp" data-wow-delay="300ms"> <i class="fa fa-location-arrow"></i> Shatarkul, Badda, Dhaka-1212. Bangladesh.</h4>
            <h5 class="wow fadeInUp" data-wow-delay="400ms"><i class="fa fa-phone"></i> 55040891-7</h5>
            <h5 class="wow fadeInUp" data-wow-delay="500ms"><i class="fa fa-envelope"></i> admission@diu.net.bd</h5>
            <a href="https://admission.diu.ac/register"><h5 class="wow fadeInUp" data-wow-delay="500ms"><i class="fa fa-globe"></i> https://admission.diu.ac/register</h5></a>
            
            <!-- Social Info -->
            <div class="social-info mt-50 wow fadeInUp" data-wow-delay="600ms">
                <a href="https://www.facebook.com/diu.net.bd"><i class="fa fa-facebook" aria-hidden="true" style="font-size: 30px;"></i></a>
                <a href="https://twitter.com/diubd"><i class="fa fa-twitter" aria-hidden="true" style="font-size: 30px;"></i></a>
                <a href="https://www.linkedin.com/school/dhaka-international-university"><i class="fa fa-linkedin" aria-hidden="true" style="font-size: 30px;"></i></a>    

            </div>
        </div>
    </section>
    <!-- ##### Contact Area End ##### -->

    <!-- ##### Footer Area Start ##### -->
    <footer class="footer-area">
        <div class="container">
            <div class="row">

                <!-- Footer Widget Area Logo with Text-->
                <div class="col-12 col-lg-4">
                    <div class="footer-widget-area mt-50">
                        <a href="#" class="d-block mb-5"><img src="img/core-img/logo.png" alt=""></a>
                        <p>Dhaka International University is one of the Top University in Bangladesh. DIU offers great education opportunity within affordable cost. Apllicable for all types of students.</p>
                    </div>
                </div>

                <!-- Footer Widget Area Position on World Map-->
                <div class="col-12 col-md-6 col-lg-3">
                    <div class="footer-widget-area mt-50">
                        <h6 class="widget-title mb-5">Find us on the map</h6>
                        <a href="https://goo.gl/maps/e1g3MjBimBntQMpe7"><img src="img/bg-img/footer-map.jpg" alt=""></a>
                    </div>
                </div>
                


            <!-- Footer Widget Area APP -->
            <div class="col-12 col-md-6 col-lg-2">
                <div class="footer-widget-area mt-50">
                    <h6 class="widget-title mb-5">Download Our App</h6>
                    <img src="img/DIU_Hoste_QR.svg" alt="QR code for DIU Hostel App">
                        
                    <button type="button" class="btn btn-success" style="margin-left: 35px;margin-top: 10px;"><a href="https://github.com/shuvongkor-barman/ohms_app/raw/master/app/release/DIU_Hostel_v0.4.apk">Download</a></button>
                </div>
            </div>

                <!-- Footer Widget Area  Newsletter -->
                <div class="col-12 col-md-6 col-lg-3">
                    <div class="footer-widget-area mt-50">
                        <h6 class="widget-title mb-5">Subscribe to our newsletter</h6>
                        <form action="subscribe.php" method="post" class="subscribe-form">
						    <input type="text" name="subscriber-name" id="subscribename" placeholder="Your Name" required>
                            <input type="email" name="subscriber-email" id="subscribeemail" placeholder="Your E-mail" required>
                            <button type="submit" name="subscribe">Subscribe</button>
                        </form>
                    </div>
                </div>

                <!-- Copywrite Text -->
                <div class="col-12">
                    <div class="copywrite-text mt-30">
                        <p><a href="#">Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | Made by <a href="#top" target="_blank" style="margin-left:0px;">OHMS</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- ##### Footer Area End ##### -->

    <!-- ##### All Javascript Script ##### -->
    <!-- jQuery-2.2.4 js -->
    <script src="js/jquery/jquery-2.2.4.min.js"></script>
    <!-- Popper js -->
    <script src="js/bootstrap/popper.min.js"></script>
    <!-- Bootstrap js -->
    <script src="js/bootstrap/bootstrap.min.js"></script>
    <!-- All Plugins js -->
    <script src="js/plugins/plugins.js"></script>
    <!-- Active js -->
    <script src="js/active.js"></script>
</body>

</html>