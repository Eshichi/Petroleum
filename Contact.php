<?php
include 'header.php';
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
	<link rel="icon" type="image/png" sizes="96x96" href="../assets/img/favicon.png">

    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>Contact-us | Gaia - Bootstrap Template</title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <link href="../assets/css/bootstrap.css" rel="stylesheet" />
    <link href="../assets/css/gaia.css" rel="stylesheet"/>

    <!-- Canonical SEO -->
    <link rel="canonical" href="https://www.creative-tim.com/product/gaia-bootstrap-template-pro"/>

    <!--     Fonts and icons     -->
    <link href='https://fonts.googleapis.com/css?family=Cambo|Lato:400,700' rel='stylesheet' type='text/css'>
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
    <link href="../assets/css/fonts/pe-icon-7-stroke.css" rel="stylesheet">

    <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
    new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
    j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
    'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','GTM-NKDMSK6');</script>
    <!-- End Google Tag Manager -->
    </head>
    <body>
      <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NKDMSK6"
    height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->

    <nav class="navbar navbar-default navbar-fixed-top">
        <!-- if you want to keep the navbar hidden you can add this class to the navbar "navbar-burger"-->
        <div class="container">
            <div class="navbar-header">
                <button id="menu-toggle" type="button" class="navbar-toggle" data-toggle="collapse" data-target="#example">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar bar1"></span>
                    <span class="icon-bar bar2"></span>
                    <span class="icon-bar bar3"></span>
                </button>
                <a href="" class="navbar-brand">
                    FS Petroleum
                </a>
            </div>
            <div class="collapse navbar-collapse">
                <ul class="nav navbar-nav navbar-right navbar-uppercase">
                        <li>
                                <a href="http://localhost/Petroleum/">Products</a>
                        </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Business<span class="caret"></span></a>
                        <ul class="dropdown-menu dropdown-danger">
                            <li>
                                <a href="">Sample here</a>
                            </li>
                            <li>
                                <a href="">Sample here</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="http://localhost/Petroleum/About.php" >About Us</a>
                    </li>
                    <li>
                            <a href="http://localhost/Petroleum/">Careers</a>
                    </li>
                    <li>
                        <a href="http://localhost/Petroleum/Contact.php" class="btn btn-danger btn-fill">Contact Us</a>
                    </li>
                    
                    <li class="dropdown">
                        <a href="#gaia" class="dropdown-toggle" data-toggle="dropdown">
                            <i class="fa fa-share-alt"></i> Share
                        </a>
                        <ul class="dropdown-menu dropdown-danger">
                            <li>
                                <a id="facebookNav" href="#" class="sharrre"><i class="fa fa-facebook-square"></i> Facebook</a>
                            </li>
                            <li>
                                <a id="twitterNav" href="#" class="sharrre"><i class="fa fa-twitter"></i> Twitter</a>
                            </li>
                            <li>
                                <a id="googleNav" href="#" class="sharrre"><i class="fa fa-google-plus"></i> Google</a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
    </nav>


    <div class="wrapper">
        <div class="section section-contact-form">
            <div class="container">
                    <div class="title-area">
                        <h5 class="subtitle text-gray"> Talk To Us</h5>
                        <h2>Contact Us</h2>
                        <div class="separator separator-danger">✻</div>
                        <p class="description">Lorem Ipsum is simply dummy text of the printing and typesetting industry. </p>
                    </div>

                <div class="social-buttons">
                    <button class="btn btn-social btn-simple"><i class="fa fa-facebook-square"></i></button>
                    <button class="btn btn-social btn-simple"><i class="fa fa-twitter"></i></button>
                    <button class="btn btn-social btn-simple"><i class="fa fa-instagram"></i></button>
                    <button class="btn btn-social btn-simple"><i class="fa fa-google" ></i></button>
                </div>

                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <div class="contact-form">
                            <form action="" method="post">
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>Your Full Name</label>
                                            <input type="text" name="name" value="" placeholder="Michael Jordan" class="form-control form-control-plain">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>Your Email</label>
                                            <input type="text" name="email" value="" placeholder="michael.j@gmail.com" class="form-control form-control-plain">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>Subject</label>
                                            <input type="text" name="subject" value="" placeholder="Say hi to you" class="form-control form-control-plain">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <textarea name="content" class="form-control form-control-plain" placeholder="Here you can write your nice text" rows="8"></textarea>
                                        </div>
                                        <div>
                                            <div class="col-md-2 col-md-offset-5">
                                                <button type="button" class="btn btn-danger btn-fill">
                                                    Contact Us
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <footer class="footer footer-color-black" data-color="black">
        <div class="container">
            <nav class="pull-left">
                <ul>
                    <li>
                        <a href="#">Home</a>
                    </li>
                    <li>
                        <a href="#">Company</a>
                    </li>
                    <li>
                        <a href="#">Portfolio</a>
                    </li>
                    <li>
                        <a href="#">Blog</a>
                    </li>
                </ul>
            </nav>
            <div class="social-area pull-right">
                <a class="btn btn-social btn-facebook btn-simple">
                    <i class="fa fa-facebook-square"></i>
                </a>
                <a class="btn btn-social btn-twitter btn-simple">
                    <i class="fa fa-twitter"></i>
                </a>
                    <a class="btn btn-social btn-pinterest btn-simple">
                    <i class="fa fa-pinterest"></i>
                </a>
            </div>
            <div class="copyright">
                 © <script> document.write(new Date().getFullYear()) </script> FS Petroleum, Developed by N.Villanueva
            </div>
        </div>
    </footer>

</body>

<!--   core js files    -->
<script src="../assets/js/jquery.min.js" type="text/javascript"></script>
<script src="../assets/js/bootstrap.js" type="text/javascript"></script>

<!--  js library for devices recognition -->
<script type="text/javascript" src="../assets/js/modernizr.js"></script>

<!--  script for google maps   -->
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js"></script>

<!--   file where we handle all the script from the Gaia - Bootstrap Template   -->
<script type="text/javascript" src="../assets/js/gaia.js"></script>

</html>
