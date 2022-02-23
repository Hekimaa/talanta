<!doctype html>
<html class="no-js" lang="zxx">

<head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Skills & Enterprise Development | Talanta International-Fresh Ideas</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="manifest" href="site.html">
		<link rel="shortcut icon" type="image/x-icon" href="<?= base_url()?>/talanta/assets/img/logo/logo.png">
        <!-- Place favicon.ico in the root directory -->

		<!-- CSS here -->
        <link rel="stylesheet" href="<?= base_url()?>/talanta/assets/css/bootstrap.min.css">
        <link rel="stylesheet" href="<?= base_url()?>/talanta/assets/css/owl.carousel.min.css">
        <link rel="stylesheet" href="<?= base_url()?>/talanta/assets/css/animate.min.css">
        <link rel="stylesheet" href="<?= base_url()?>/talanta/assets/css/magnific-popup.css">
        <link rel="stylesheet" href="<?= base_url()?>/talanta/assets/css/fontawesome-all.min.css">
        <link rel="stylesheet" href="<?= base_url()?>/talanta/assets/css/themify-icons.css">
        <link rel="stylesheet" href="<?= base_url()?>/talanta/assets/css/meanmenu.css">
        <link rel="stylesheet" href="<?= base_url()?>/talanta/assets/css/slick.css">
        <link rel="stylesheet" href="<?= base_url()?>/talanta/assets/css/flaticon.css">
        <link rel="stylesheet" href="<?= base_url()?>/talanta/assets/css/default.html">
        <link rel="stylesheet" href="<?= base_url()?>/talanta/assets/css/main.css">
        <link rel="stylesheet" href="<?= base_url()?>/talanta/assets/css/responsive.css">
    </head>
    <body>

    <!-- preloader -->
    <div id="preloader">
        <div class="preloader">
            <span></span>
            <span></span>
        </div>
    </div>
    <!-- preloader end  -->


          <!-- header-start -->
        <header>
            
            <div id="sticky-header" class="main-menu-area">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-3 col-lg-3 d-flex align-items-center">
                            <div class="logo">
                                <a href="<?= base_url('/')?>"><img src="<?= base_url()?>/talanta/assets/img/logo/logo.png" alt=""  style="width: 200px;"/></a>
                            </div>

                        </div>
                        <div class="col-xl-9 col-lg-9">
                            
                             <div class="main-menu text-right">
                                <nav id="mobile-menu">
                                    <ul>
                                        <li class="active"><a href="<?= base_url('/')?>">Home</a>
                                          
                                        </li>
                                        <li><a href="<?= base_url('aboutus')?>">About Us</a></li>
                                        <li><a href="<?= base_url('/')?>">Services <i class="far fa-angle-down"></i></a>
                                           <ul class="sub-menu text-left">
                                                <li><a href="<?= base_url('policy-research')?>">Policy Research Services</a>
                                                <li><a href="<?= base_url('advisory-services')?>">Advisory Services</a></li>
                                                <li><a href="<?= base_url('skills-and-enterprise-development')?>">Training Services</a></li>
                                            

                                                 </li>
                                                
                                            </ul>
                                        </li>
                                        <li><a href="<?= base_url('/contacts')?>">Contact Us</a></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                         <div class="col-12">
                            <div class="mobile-menu"></div>
                        </div>
                    </div>
                </div>
            </div>

        </header>
        <!-- header-start -->
        <!-- header-start -->
        <main>

            <!-- breadcrumb-area-start -->
            <div class="breadcrumb-area pt-70 pb-70"  style="height:5px; background-image:url(<?= base_url('talanta/assets/img/bg/brown.jpg')?>); ">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="text-color:white text-center">
                                <h1 style="color:white;"><?= $skills['title']?></h1>

                               
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- breadcrumb-area-start -->

            <!-- blog-area-start -->
            <div class="blog-area pt-130 pb-100">
                <div class="container">
                    <div class="row">

                        <div class="col-xl-9 col-lg-9 mb-30">
                            <div class="blog-wrapper mb-60">
                                <div class="blog-img">
                                    <img src="<?= base_url('uploads/services_image/'.$skills['image']) ?>" alt="" style="width:800px; height:400px;">
                                </div>
                                <div class="blog-text blog-02-text">
                                   
                                    <h4 class="text-center"><?= $skills['title']?></h4>
                                    <p style="text-align:justify;"><?= $skills['description']?></p>
                                </div>
                            
                            </div>

                                                
                        </div>
                    </div>
                </div>
            </div>
            <!-- blog-area-end -->

        </main>
    
 <!-- footer-area-start -->
            <footer>
                <div class="footer-area pt-130" style="background-image:url(<?= base_url()?>/talanta/assets/img/bg/bg-3.jpg)">
                    <div class="container">
                       
                        <div class="footer-middle-area pt-50 pb-50">
                            <div class="row">
                                <div class="col-xl-6 col-lg-6 col-md-6">
                                    <div class="footer-wrapper mb-30">
                                        
                                      
                                        <div class="footer-contact">
                                            <div class="footer-contact-address">
                                                <div class="footer-contact-icon">
                                                    <i class="far fa-envelope-open"></i>
                                                </div>
                                                <div class="footer-contact-text">
                                                    <span>info@talanta.co.tz</span>
                                                </div>
                                            </div>
                                            <div class="footer-contact-address">
                                                <div class="footer-contact-icon">
                                                    <i class="far fa-map-marker-alt"></i>
                                                </div>
                                                <div class="footer-contact-text">
                                                    <span>6th Floor, Ngome Holding House Mwenge, Africa Sana P.O. BOX 33161 Kijitonyama
                                                       Dar-Es-Salaam, TANZANIA</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-6 col-md-6">
                                    <div class="footer-wrapper ml-60 mb-30">
                                        <div class="footer-title">
                                            <h3>Quick Links</h3>
                                        </div>
                                   <div class="footer-menu">
                                            <ul>
                                                <li><a href="<?= base_url('aboutus')?>"><i class="far fa-angle-right"></i> About Us</a></li>
                                                <li><a href="<?= base_url('/contacts')?>"><i class="far fa-angle-right"></i> Contact Us</a></li>
                                                <li><a href="<?= base_url('policy-research')?>"><i class="far fa-angle-right"></i>Policy Research</a></li>
                                                <li><a href="<?= base_url('advisory-services')?>"><i class="far fa-angle-right"></i>Advisory Services</a></li>
                                                 <li><a href="<?= base_url('skills-and-enterprise-development')?>"><i class="far fa-angle-right"></i>Skills and Enterprise Development</a></li>
                                        
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                 
                          
                           
                            </div>
                        </div>
                        <div class="footer-bottom-area f-bottom-border pt-20 pb-20">
                            <div class="row">
                                <div class="col-xl-6 col-lg-6 col-md-6">
                                    <div class="copyright">
                                        <p> Copyright <i class="far fa-copyright"></i>2020 - 2021<a href="<?= base_url('/')?>">    Talanta International ~ Fresh Ideas</a> All Rights Reserved</p>
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-6 col-md-6">
                                    <div class="footer-icon text-center text-md-right">
                                        <a href="https://web.facebook.com/TalantaInternationaltz"><i class="fab fa-facebook-f"></i></a>
                                        <a href="<?= base_url('/')?>"><i class="fab fa-twitter"></i></a>
                                        <a href="https://www.instagram.com/talanta.international/"><i class="fab fa-instagram"></i></a>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </footer>
            <!-- footer-area-end -->


		<!-- JS here -->
        <script src="<?= base_url()?>/talanta/assets/js/vendor/modernizr-3.5.0.min.js"></script>
        <script src="<?= base_url()?>/talanta/assets/js/vendor/jquery-1.12.4.min.js"></script>
        <script src="<?= base_url()?>/talanta/assets/js/popper.min.js"></script>
        <script src="<?= base_url()?>/talanta/assets/js/bootstrap.min.js"></script>
        <script src="<?= base_url()?>/talanta/assets/js/owl.carousel.min.js"></script>
        <script src="<?= base_url()?>/talanta/assets/js/isotope.pkgd.min.js"></script>
        <script src="<?= base_url()?>/talanta/assets/js/slick.min.js"></script>
        <script src="<?= base_url()?>/talanta/assets/js/jquery.meanmenu.min.js"></script>
        <script src="<?= base_url()?>/talanta/assets/js/ajax-form.js"></script>
        <script src="<?= base_url()?>/talanta/assets/js/wow.min.js"></script>
        <script src="<?= base_url()?>/talanta/assets/js/jquery.scrollUp.min.js"></script>
        <script src="<?= base_url()?>/talanta/assets/js/imagesloaded.pkgd.min.js"></script>
        <script src="<?= base_url()?>/talanta/assets/js/jquery.magnific-popup.min.js"></script>
        <script src="<?= base_url()?>/talanta/assets/js/plugins.js"></script>
        <script src="<?= base_url()?>/talanta/assets/js/main.js"></script>
    </body>

</html>