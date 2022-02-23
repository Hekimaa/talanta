<!doctype html>
<html class="no-js" lang="zxx">
    
<head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Talanta International Limited - Fresh Ideas</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="shortcut icon" type="image/x-icon" href="<?= base_url()?>/talanta/assets/img/logo/logo.png">
        <!-- Place favicon.ico in the root directory -->
         <!-- include the site stylesheet -->
         <link href="https://fonts.googleapis.com/css?family=Lato:300,300i,400,400i,700,700i%7COpen+Sans:300,300i,400,400i,600,600i,700,700i" rel="stylesheet">
		<!-- CSS here -->
        <link rel="stylesheet" href="<?= base_url()?>/talanta/assets/css/bootstrap.min.css">
        <link rel="stylesheet" href="<?= base_url()?>/talanta/assets/css/owl.carousel.min.css">
        <link rel="stylesheet" href="<?= base_url()?>/talanta/assets/css/animate.min.css">
        <link rel="stylesheet" href="<?= base_url()?>/talanta/assets/css/magnific-popup.css">
        <link rel="stylesheet" href="<?= base_url()?>/talanta/assets/css/fontawesome-all.min.css">
        <link rel="stylesheet" href="<?= base_url()?>/talanta/assets/css/themify-icons.css">
        <link rel="stylesheet" href="<?= base_url()?>/talanta/assets/css/meanmenu.css">
        <link rel="stylesheet" href="<?= base_url()?>/talanta/assets/css/flaticon.css">
        <link rel="stylesheet" href="<?= base_url()?>/talanta/assets/css/slick.css">
        <link rel="stylesheet" href="<?= base_url()?>/talanta/assets/css/default.html">
        <link rel="stylesheet" href="<?= base_url()?>/talanta/assets/css/main.css">
        <link rel="stylesheet" href="<?= base_url()?>/talanta/assets/css/responsive.css">
        <link rel="stylesheet" href="<?= base_url() ?>/front_template/css/bootstrap.css">
        <link rel="stylesheet" href="<?=  base_url() ?>/front_template/css/plugins.css">
        <link rel="stylesheet" href="<?=  base_url() ?>/front_template/css/colors.css">
        <!-- include the site stylesheet -->
        <link rel="stylesheet" href="<?= base_url() ?>/front_template/style.css">
        <!-- include the site responsive stylesheet -->
        <link rel="stylesheet" href="<?=  base_url() ?>/front_template/css/responsive.css">

        <!-- Slider Revolution CSS Files -->
        <link rel="stylesheet" type="text/css" href="<?= base_url()?>/talanta/assets/rs/css/settings.css">
        <link rel="stylesheet" type="text/css" href="<?= base_url()?>/talanta/assets/rs/css/layers.css">
        <link rel="stylesheet" type="text/css" href="<?= base_url()?>/talanta/assets/rs/css/navigation.css">
        <style>
            /*.fa-phone-square {*/
            /*  background-color: white;*/
             
            /*}*/
            
            /*.fa-envelope-square {*/
            /*  background-color:white;*/
            /*}*/
            
            
        
            #scroll-container {
            border: 3px solid white;
            border-radius: 5px;
            overflow-x: scroll;
            overflow-y: hidden;
            display: flex;
            flex-direction:row;
            }

#scroll {
  text-align: right;

  /* animation properties */
  -moz-transform: translateX(100%);
  -webkit-transform: translateX(100%);
  transform: translateX(100%);
  
  -moz-animation: my-animation 15s linear infinite;
  -webkit-animation: my-animation 15s linear infinite;
  animation: my-animation 15s linear infinite;
}

#scrolls {
  text-align: right;

  /* animation properties */
  -moz-transform: translateX(100%);
  -webkit-transform: translateX(100%);
  transform: translateX(100%);
  
  -moz-animation: my-animation 16s linear infinite;
  -webkit-animation: my-animation 16s linear infinite;
  animation: my-animation 16s linear infinite;
}

/* for Firefox */
@-moz-keyframes my-animation {
  from { -moz-transform: translateX(100%); }
  to { -moz-transform: translateX(-100%); }
}

/* for Chrome */
@-webkit-keyframes my-animation {
  from { -webkit-transform: translateX(100%); }
  to { -webkit-transform: translateX(-100%); }
}

@keyframes my-animation {
  from {
    -moz-transform: translateX(100%);
    -webkit-transform: translateX(100%);
    transform: translateX(100%);
  }
  to {
    -moz-transform: translateX(-100%);
    -webkit-transform: translateX(-100%);
    transform: translateX(-100%);
  }
}
        </style>
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
                                                <li><a href="<?= base_url('policy-research')?>">Policy Research </a>
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

        <main>
           <!-- slider start -->
            <div class="hero-slider-area">
                <div id="rs_slider_wrapper_01" class="rev_slider_wrapper fullwidthbanner-container" data-alias="home-02"
                    data-source="gallery"
                    style="margin:0px auto;background:transparent;padding:0px;margin-top:0px;margin-bottom:0px;">
                    <!-- START REVOLUTION SLIDER 5.4.7 fullwidth mode -->
                    <div id="rs_slider_01" class="rev_slider fullwidthabanner" style="display:none;" data-version="5.4.7">
                        <ul>
                            <!-- SLIDE 01 -->
                            <li data-index="rs-01" data-transition="random" data-slotamount="default" data-hideafterloop="0"
                                data-hideslideonmobile="off" data-easein="default" data-easeout="default" data-masterspeed="default"
                                data-thumb="<?= base_url()?>/talanta/assets/img/slider/bos.jpg" data-rotate="0" data-saveperformance="off"
                                data-title="Slide" data-param1="" data-param2="" data-param3="" data-param4="" data-param5=""
                                data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="">
                               
                                <!-- MAIN IMAGE -->
                                <img src="<?= base_url()?>/talanta/assets/img/slider/s3.JPG" alt="" data-bgposition="center center" data-bgfit="cover"
                                    data-bgrepeat="no-repeat" class="rev-slidebg" data-no-retina>
                                <!-- LAYERS -->
                                <marquee behavior="scroll" direction="left" scrollamount="8"><p style="text-transform:uppercase; color:#f6732e;"><a href="https://talanta.co.tz/softskills/home"><b>We  have  recently  launched  impactful  soft  skills  training  services  #TalantaSoftSkills  offered   through  our  Virtual  Learning  Management  System  (VLMS),  please  click  here    to  register. Thank  you!!</b></a></p>

.</marquee>

                                <!-- LAYER NR. 1 -->
                                <div class="tp-caption rev_group" id="rs-layer-01" data-x="['left','left','left','left']"
                                    data-hoffset="['370','80','97','20']" data-y="['top','top','top','top']"
                                    data-voffset="['250','180','226','150']" data-width="['800', '800', '800', '800']" data-height="220"
                                    data-whitespace="nowrap" data-type="group" data-responsive_offset="on"
                                    data-frames='[{"delay":20,"speed":100,"frame":"0","from":"y:-50px;opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":500,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                                    data-margintop="[0,0,0,0]" data-marginright="[0,0,0,0]" data-marginbottom="[0,0,0,0]"
                                    data-marginleft="[0,0,0,0]" data-textAlign="['inherit','inherit','inherit','inherit']"
                                    data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]"
                                    data-paddingleft="[0,0,0,0]"
                                    style="z-index: 6; white-space: nowrap; font-size: 20px; line-height: 22px; font-weight: 400; color: #222; letter-spacing: 0px;">

                                    <!-- LAYER NR. 2 -->
                                    <div class="tp-caption NotGeneric-Title  tp-resizeme" id="rs-layer-02"
                                        data-x="['left','left','left','left']" data-hoffset="['-2','-2','-2','-2']"
                                        data-y="['middle','middle','middle','middle']" data-voffset="['-70','-70','-70','-70']"
                                        data-width="['800', '750', '695', '400']" data-height="none" data-whitespace="normal"
                                        data-type="text" data-responsive_offset="on"
                                        data-transform_in="x:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;s:1500;e:Power3.easeInOut;"
                                        data-transform_out="s:700;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;"
                                        data-mask_in="x:0px;y:0px;s:inherit;e:inherit;" data-start="500" data-splitin="none"
                                        data-splitout="none" data-margintop="[0,0,0,0]" data-marginright="[0,0,0,0]"
                                        data-marginbottom="[0,0,0,0]" data-marginleft="[0,0,0,0]"
                                        data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop="[0,0,0,0]"
                                        data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]"
                                        data-fontsize="['30', '30', '30', '25']" data-lineheight="['70', '70', '60', '45']"
                                        p style="font-size:60px; font-color:black;">
                                       
                                         </p>
                                       <br>
                                    </div>

                                    <!-- LAYER NR. 3 -->
                                    <div class="tp-caption   tp-resizeme" id="rs-layer-03"
                                        data-x="['left','left','left','left']"
                                        data-hoffset="['0','0','0','0']"
                                        data-y="['middle','middle','middle','middle']"
                                        data-voffset="['60','50','60','60']"
                                        data-width="['625', '650', '550', '400']" data-height="none" data-whitespace="normal"
                                        data-type="text" data-responsive_offset="on" data-start="800"
                                        data-frames='[{"delay":"+0","speed":1000,"frame":"0","from":"opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                                        data-margintop="[0,0,0,0]" data-marginright="[0,0,0,0]" data-marginbottom="[0,0,0,0]"
                                        data-marginleft="[0,0,0,0]" data-textAlign="['inherit','inherit','inherit','inherit']"
                                        data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]"
                                        data-paddingleft="[0,0,0,0]" data-fontsize="['18', '19', '20', '16']"
                                        style="z-index: 9; white-space: normal; font-size: 800px; line-height: 30px; color:#ff8c00;font-family:'Montserrat', sans-serif;font-weight: 600;">
                                        <br>
                                        <br>
                                        <br>
                                        <br>
                                        <br>
                                       <p style=" font-size: 60px;color:#ff8c00;"></p>
 <div class="bd-slider-button">
                                        <a class="btn-icon" href="https://talanta.co.tz/softskills/home">View More <i class="far fa-long-arrow-right"></i></a>
                                    </div>
                                    </div>
                                </div>
                                <!-- LAYER NR. 1 -->

                                <!-- LAYER NR. 2 -->
                                <div class="tp-caption  " id="rs-layer-04" data-x="['left','left','left','left']"
                                    data-hoffset="['370','80','101','20']"
                                    data-y="['middle','middle','middle','middle']"
                                    data-voffset="['100','80','120','130']"
                                    data-width="250" data-height="none" data-whitespace="normal" data-type="text" data-responsive_offset="on"
                                    data-responsive="off"
                                    data-frames='[{"delay":10,"speed":100,"frame":"0","from":"y:50px;opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                                    data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]"
                                    data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]"
                                    style="z-index: 5; white-space: normal; font-size: 20px; line-height: 22px; font-weight: 400; color: #444; letter-spacing: 0px;font-family:'Montserrat', sans-serif;">
                                   
                                </div>
                            </li>

                            <!-- SLIDE 02 -->
                            <li data-index="rs-02" data-transition="random" data-slotamount="default" data-hideafterloop="0"
                                data-hideslideonmobile="off" data-easein="default" data-easeout="default" data-masterspeed="default"
                                data-thumb="<?= base_url()?>/talanta/assets/img/slider/s3.jfif" data-rotate="0" data-saveperformance="off" data-title="Slide"
                                data-param1="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7=""
                                data-param8="" data-param9="" data-param10="" data-description="">
                                <!-- MAIN IMAGE -->
                                <img src="<?= base_url()?>/talanta/assets/img/slider/s1.jpg" alt="" data-bgposition="center center" data-bgfit="cover"
                                    data-bgrepeat="no-repeat" class="rev-slidebg" data-no-retina>
                                <!-- LAYERS -->
                                <marquee behavior="scroll" direction="left" scrollamount="8"><p style="text-transform:uppercase; color:#f55442;"><a href="https://talanta.co.tz/softskills/home"><b>We  have  recently  launched  impactful  soft  skills  training  services  #TalantaSoftSkills  offered   through  our  Virtual  Learning  Management  System  (VLMS),  please  click  here    to  register. Thank  you!!</b></a></p>

.</marquee>

                                <!-- LAYER NR. 1 -->
                                <div class="tp-caption rev_group" id="rs-layer-01-2" data-x="['left','left','left','left']"
                                    data-hoffset="['370','80','97','20']" data-y="['top','top','top','top']"
                                    data-voffset="['250','180','226','150']" data-width="['800', '800', '800', '800']" data-height="220"
                                    data-whitespace="nowrap" data-type="group" data-responsive_offset="on"
                                    data-frames='[{"delay":10,"speed":1500,"frame":"0","from":"y:-50px;opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                                    data-margintop="[0,0,0,0]" data-marginright="[0,0,0,0]" data-marginbottom="[0,0,0,0]"
                                    data-marginleft="[0,0,0,0]" data-textAlign="['inherit','inherit','inherit','inherit']"
                                    data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]"
                                    data-paddingleft="[0,0,0,0]"
                                    style="z-index: 6; white-space: nowrap; font-size: 20px; line-height: 22px; font-weight: 400; color: #222; letter-spacing: 0px;">

                                    <!-- LAYER NR. 2 -->
                                    <div class="tp-caption NotGeneric-Title  tp-resizeme" id="rs-layer-02-2" data-x="['left','left','left','left']"
                                        data-hoffset="['-2','-2','-2','-2']" data-y="['middle','middle','middle','middle']"
                                        data-voffset="['-70','-70','-70','-70']" data-width="['800', '750', '695', '400']" data-height="none"
                                        data-whitespace="normal" data-type="text" data-responsive_offset="on"
                                        data-transform_in="x:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;s:1500;e:Power3.easeInOut;"
                                        data-transform_out="s:700;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;"
                                        data-mask_in="x:0px;y:0px;s:inherit;e:inherit;" data-start="500" data-splitin="none" data-splitout="none"
                                        data-margintop="[0,0,0,0]" data-marginright="[0,0,0,0]" data-marginbottom="[0,0,0,0]"
                                        data-marginleft="[0,0,0,0]" data-textAlign="['inherit','inherit','inherit','inherit']"
                                        data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]"
                                        data-paddingleft="[0,0,0,0]" data-fontsize="['60', '60', '50', '35']"
                                        data-lineheight="['70', '70', '60', '45']"
                                        style="z-index: 7;white-space: normal; font-size: 60px; line-height: 60px; font-weight: 800; color:#ff8c00; letter-spacing: 0px;font-family:'Montserrat', sans-serif;">
                                        VIRTUAL TRAINING
                                    </div>

                                    <!-- LAYER NR. 3 -->
                                    <div class="tp-caption   tp-resizeme" id="rs-layer-03-2" data-x="['left','left','left','left']"
                                        data-hoffset="['0','0','0','0']" data-y="['middle','middle','middle','middle']"
                                        data-voffset="['60','50','60','60']"
                                        data-width="['625', '650', '550', '400']" data-height="none"
                                        data-whitespace="normal" data-type="text" data-responsive_offset="on" data-start="800"
                                        data-frames='[{"delay":"+0","speed":1000,"frame":"0","from":"opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                                        data-margintop="[0,0,0,0]" data-marginright="[0,0,0,0]" data-marginbottom="[0,0,0,0]"
                                        data-marginleft="[0,0,0,0]" data-textAlign="['inherit','inherit','inherit','inherit']"
                                        data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]"
                                        data-paddingleft="[0,0,0,0]" data-fontsize="['18', '19', '20', '16']"
                                        style="z-index: 9; white-space: normal; font-size: 25px; line-height: 30px; color:#ff8c00;font-family:'Montserrat', sans-serif;font-weight: 600;">
                                       <p style="font-size: 25px;color:#ff8c00;">Talanta International promotes development and growth of small businesses.</p>
                                    </div>
                                </div>
                                <!-- LAYER NR. 1 -->

                                <!-- LAYER NR. 2 -->
                                <div class="tp-caption  " id="rs-layer-04-2" data-x="['left','left','left','left']"
                                    data-hoffset="['370','80','101','20']" data-y="['middle','middle','middle','middle']"
                                    data-voffset="['100','80','120','130']" data-width="250" data-height="none" data-whitespace="normal"
                                    data-type="text" data-responsive_offset="on" data-responsive="off"
                                    data-frames='[{"delay":10,"speed":1500,"frame":"0","from":"y:50px;opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                                    data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop="[0,0,0,0]"
                                    data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]"
                                    style="z-index: 5; white-space: normal; font-size: 20px; line-height: 22px; font-weight: 400; color: #444; letter-spacing: 0px;font-family:'Montserrat', sans-serif;">
           
                                </div>
                            </li>

                            <!-- SLIDE 03 -->
                            <li data-index="rs-03" data-transition="random" data-slotamount="default" data-hideafterloop="0"
                                data-hideslideonmobile="off" data-easein="default" data-easeout="default" data-masterspeed="default"
                                data-thumb="<?= base_url()?>/talanta/assets/img/slider/s3.jfif" data-rotate="0" data-saveperformance="off" data-title="Slide"
                                data-param1="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7=""
                                data-param8="" data-param9="" data-param10="" data-description="">
                                <!-- MAIN IMAGE -->
                                <img src="<?= base_url()?>/talanta/assets/img/slider/bos.jpg" alt="" data-bgposition="center center" data-bgfit="cover"
                                    data-bgrepeat="no-repeat" class="rev-slidebg" data-no-retina>
                                    <marquee behavior="scroll" direction="left" scrollamount="8"><p style="text-transform:uppercase; color:#f55442;"><a href="https://talanta.co.tz/softskills/home"><b>We  have  recently  launched  impactful  soft  skills  training  services  #TalantaSoftSkills  offered   through  our  Virtual  Learning  Management  System  (VLMS),  please  click  here    to  register. Thank  you!!</b></a></p>

.</marquee>


                                <!-- LAYERS -->

                                <!-- LAYER NR. 1 -->
                                <div class="tp-caption rev_group" id="rs-layer-01-3" data-x="['left','left','left','left']"
                                    data-hoffset="['370','80','97','20']" data-y="['top','top','top','top']"
                                    data-voffset="['250','180','226','150']" data-width="['800', '800', '800', '800']" data-height="220"
                                    data-whitespace="nowrap" data-type="group" data-responsive_offset="on"
                                    data-frames='[{"delay":10,"speed":1500,"frame":"0","from":"y:-50px;opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                                    data-margintop="[0,0,0,0]" data-marginright="[0,0,0,0]" data-marginbottom="[0,0,0,0]"
                                    data-marginleft="[0,0,0,0]" data-textAlign="['inherit','inherit','inherit','inherit']"
                                    data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]"
                                    data-paddingleft="[0,0,0,0]"
                                    style="z-index: 6; white-space: nowrap; font-size: 20px; line-height: 22px; font-weight: 400; color: #222; letter-spacing: 0px;">

                                    <!-- LAYER NR. 2 -->
                                    <div class="tp-caption NotGeneric-Title  tp-resizeme" id="rs-layer-02-3" data-x="['left','left','left','left']"
                                        data-hoffset="['-2','-2','-2','-2']" data-y="['middle','middle','middle','middle']"
                                        data-voffset="['-70','-70','-70','-70']" data-width="['800', '750', '695', '400']" data-height="none"
                                        data-whitespace="normal" data-type="text" data-responsive_offset="on"
                                        data-transform_in="x:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;s:1500;e:Power3.easeInOut;"
                                        data-transform_out="s:700;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;"
                                        data-mask_in="x:0px;y:0px;s:inherit;e:inherit;" data-start="500" data-splitin="none" data-splitout="none"
                                        data-margintop="[0,0,0,0]" data-marginright="[0,0,0,0]" data-marginbottom="[0,0,0,0]"
                                        data-marginleft="[0,0,0,0]" data-textAlign="['inherit','inherit','inherit','inherit']"
                                        data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]"
                                        data-paddingleft="[0,0,0,0]" data-fontsize="['60', '60', '50', '35']"
                                        data-lineheight="['70', '70', '60', '45']"
                                        style="z-index: 7;white-space: normal; font-size: 60px; line-height: 60px; font-weight: 800; color:#ff8c00; letter-spacing: 0px;font-family:'Montserrat', sans-serif;">
                                        POLICY RESEARCH
                                    </div>

                                    <!-- LAYER NR. 3 -->
                                    <div class="tp-caption   tp-resizeme" id="rs-layer-03-3" data-x="['left','left','left','left']"
                                        data-hoffset="['0','0','0','0']" data-y="['middle','middle','middle','middle']"
                                        data-voffset="['60','50','60','60']"
                                        data-width="['625', '650', '550', '400']" data-height="none"
                                        data-whitespace="normal" data-type="text" data-responsive_offset="on" data-start="800"
                                        data-frames='[{"delay":"+0","speed":1000,"frame":"0","from":"opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                                        data-margintop="[0,0,0,0]" data-marginright="[0,0,0,0]" data-marginbottom="[0,0,0,0]"
                                        data-marginleft="[0,0,0,0]" data-textAlign="['inherit','inherit','inherit','inherit']"
                                        data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]"
                                        data-paddingleft="[0,0,0,0]" data-fontsize="['18', '19', '20', '16']"
                                        style="z-index: 9; white-space: normal; font-size: 18px; line-height: 30px; color:#ff8c00;font-family:'Montserrat', sans-serif;font-weight: 600;">
                                        <p style="font-size: 25px;color:#ff8c00;">Were experts on designing, managing and undertaking economic development.</p>
                                    </div>
                                </div>
                                <!-- LAYER NR. 1 -->

                                <!-- LAYER NR. 2 -->
                                <div class="tp-caption  " id="rs-layer-04-3" data-x="['left','left','left','left']"
                                    data-hoffset="['370','80','101','20']" data-y="['middle','middle','middle','middle']"
                                    data-voffset="['100','80','120','130']" data-width="250" data-height="none" data-whitespace="normal"
                                    data-type="text" data-responsive_offset="on" data-responsive="off"
                                    data-frames='[{"delay":10,"speed":1500,"frame":"0","from":"y:50px;opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                                    data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop="[0,0,0,0]"
                                    data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]"
                                    style="z-index: 5; white-space: normal; font-size: 20px; line-height: 22px; font-weight: 400; color: #444; letter-spacing: 0px;font-family:'Montserrat', sans-serif;">
                                    <div class="bd-slider-button">
                                        <a class="btn-icon" href="<?= base_url('policy-research')?>">View More <i class="far fa-long-arrow-right"></i></a>
                                    </div>
                                </div>
                            </li>
                            <!-- SLIDE 04 -->
                            <li data-index="rs-04" data-transition="random" data-slotamount="default" data-hideafterloop="0"
                                data-hideslideonmobile="off" data-easein="default" data-easeout="default" data-masterspeed="default"
                                data-thumb="<?= base_url()?>/talanta/assets/img/slider/s3.jfif" data-rotate="0" data-saveperformance="off" data-title="Slide"
                                data-param1="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7=""
                                data-param8="" data-param9="" data-param10="" data-description="">
                                <!-- MAIN IMAGE -->
                                <img src="<?= base_url()?>/talanta/assets/img/slider/advisory.jpg" alt="" data-bgposition="center center" data-bgfit="cover"
                                    data-bgrepeat="no-repeat" class="rev-slidebg" data-no-retina>
                                    <marquee behavior="scroll" direction="left" scrollamount="8"><p style="text-transform:uppercase; color:#f55442;"><a href="https://talanta.co.tz/softskills/home"><b>We  have  recently  launched  impactful  soft  skills  training  services  #TalantaSoftSkills  offered   through  our  Virtual  Learning  Management  System  (VLMS),  please  click  here    to  register. Thank  you!!</b></a></p>

.</marquee>


                                 
                                <!-- LAYERS -->

                                <!-- LAYER NR. 1 -->
                                <div class="tp-caption rev_group" id="rs-layer-01-4" data-x="['left','left','left','left']"
                                    data-hoffset="['370','80','97','20']" data-y="['top','top','top','top']"
                                    data-voffset="['250','180','226','150']" data-width="['800', '800', '800', '800']" data-height="220"
                                    data-whitespace="nowrap" data-type="group" data-responsive_offset="on"
                                    data-frames='[{"delay":10,"speed":1500,"frame":"0","from":"y:-50px;opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                                    data-margintop="[0,0,0,0]" data-marginright="[0,0,0,0]" data-marginbottom="[0,0,0,0]"
                                    data-marginleft="[0,0,0,0]" data-textAlign="['inherit','inherit','inherit','inherit']"
                                    data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]"
                                    data-paddingleft="[0,0,0,0]"
                                    style="z-index: 6; white-space: nowrap; font-size: 20px; line-height: 22px; font-weight: 400; color: #222; letter-spacing: 0px;">

                                    <!-- LAYER NR. 2 -->
                                    <div class="tp-caption NotGeneric-Title  tp-resizeme" id="rs-layer-02-4" data-x="['left','left','left','left']"
                                        data-hoffset="['-2','-2','-2','-2']" data-y="['middle','middle','middle','middle']"
                                        data-voffset="['-70','-70','-70','-70']" data-width="['800', '750', '695', '400']" data-height="none"
                                        data-whitespace="normal" data-type="text" data-responsive_offset="on"
                                        data-transform_in="x:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;s:1500;e:Power3.easeInOut;"
                                        data-transform_out="s:700;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;"
                                        data-mask_in="x:0px;y:0px;s:inherit;e:inherit;" data-start="500" data-splitin="none" data-splitout="none"
                                        data-margintop="[0,0,0,0]" data-marginright="[0,0,0,0]" data-marginbottom="[0,0,0,0]"
                                        data-marginleft="[0,0,0,0]" data-textAlign="['inherit','inherit','inherit','inherit']"
                                        data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]"
                                        data-paddingleft="[0,0,0,0]" data-fontsize="['60', '60', '50', '35']"
                                        data-lineheight="['70', '70', '60', '45']"
                                        style="z-index: 7;white-space: normal; font-size: 60px; line-height: 60px; font-weight: 800; color:#ff8c00; letter-spacing: 0px;font-family:'Montserrat', sans-serif;">
                                        ADVISORY SERVICES 
                                    </div>

                                    <!-- LAYER NR. 3 -->
                                    <div class="tp-caption   tp-resizeme" id="rs-layer-03-4" data-x="['left','left','left','left']"
                                        data-hoffset="['0','0','0','0']" data-y="['middle','middle','middle','middle']"
                                        data-voffset="['60','50','60','60']"
                                        data-width="['625', '650', '550', '400']" data-height="none"
                                        data-whitespace="normal" data-type="text" data-responsive_offset="on" data-start="800"
                                        data-frames='[{"delay":"+0","speed":1000,"frame":"0","from":"opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                                        data-margintop="[0,0,0,0]" data-marginright="[0,0,0,0]" data-marginbottom="[0,0,0,0]"
                                        data-marginleft="[0,0,0,0]" data-textAlign="['inherit','inherit','inherit','inherit']"
                                        data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]"
                                        data-paddingleft="[0,0,0,0]" data-fontsize="['18', '19', '20', '16']"
                                        style="z-index: 9; white-space: normal; font-size: 18px; line-height: 30px; color:#ff8c00;font-family:'Montserrat', sans-serif;font-weight: 600;">
                                       <p style="font-size: 25px;color:#ff8c00;"> Were experts on designing, managing and undertaking economic development.</p>
                                    </div>
                                </div>
                                <!-- LAYER NR. 1 -->

                                <!-- LAYER NR. 2 -->
                                <div class="tp-caption  " id="rs-layer-04-3" data-x="['left','left','left','left']"
                                    data-hoffset="['370','80','101','20']" data-y="['middle','middle','middle','middle']"
                                    data-voffset="['100','80','120','130']" data-width="250" data-height="none" data-whitespace="normal"
                                    data-type="text" data-responsive_offset="on" data-responsive="off"
                                    data-frames='[{"delay":10,"speed":1500,"frame":"0","from":"y:50px;opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                                    data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop="[0,0,0,0]"
                                    data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]"
                                    style="z-index: 5; white-space: normal; font-size: 20px; line-height: 22px; font-weight: 400; color: #444; letter-spacing: 0px;font-family:'Montserrat', sans-serif;">
                                    <div class="bd-slider-button">
                                        <a class="btn-icon" href="<?= base_url('advisory-services')?>">View More <i class="far fa-long-arrow-right"></i></a>
                                    </div>
                                </div>
                            </li>


                        </ul>
                        <div class="tp-bannertimer tp-bottom" style="visibility: hidden !important;"></div>
                    </div>
                </div>
            </div>

            <!-- features-area-start -->
        <!-- services-area-start -->
        <?php if($trainings): ?>
            <div class="services-area pb-130 grey-bg pt-125">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-6 col-lg-6 offset-lg-3 offset-xl-3">
                            <div class="area-title text-center mb-75 wow fadeInUp" data-wow-delay=".3s" data-wow-duration=".3">
                                <h1>Our Online Training Courses</h1>
                                <p style="text-align:justify;">Talanta International designs and delivers training solutions to individuals, companies and organizations. Training services are available on a wide range of areas.</p>
                            </div>
                        </div>
                    </div>
                    <div class="row services-active wow fadeInUp" data-wow-delay=".5s" data-wow-duration=".3">

                          
                           <?php foreach($trainings as $cat): ?>
                        <div class="col-xl-12">
                            <div class="services-wrapper white-bg">
                                <div class="services-img pos-rel">
                                    <div class="fix">
                                       <img src="<?= base_url('uploads/trainings_image/'.$cat['training_image']) ?>" alt="image" width="500px" height="300px">
                                    </div>
                                    <div class="services-img-icon">
                                      <i class="flaticon-team-1"></i>
                                    </div>
                                </div>
                                <div class="services-text">
                                    <h4><?= $cat['training_title']?></h4>
                                  
                                </div>
                                <div class="services-button">
                                    <a href="<?= $cat['training_url']?>">Learn More <i class="far fa-long-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>                     
                         <?php endforeach; ?>

                    </div>
                </div>
            </div>
             <?php endif; ?>
            <!-- services-area-end -->
        
            <!-- team-area-start -->
            <div class="team-area pt-125 pb-215">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-6 col-lg-6 offset-lg-3 offset-xl-3">
                            <div class="area-title text-center mb-75 wow fadeInUp" data-wow-delay=".3s" data-wow-duration=".3">
                                <h1>OUR TEAM</h1>
                                <p style="text-align:justify;">Our team includes a lean technical specialists led by Dr Josaphat Kweka (Lead Consultant, Founder and CEO) and a range of Professional Associates with specific expertize for meeting our Clients needs. The team is supported by a small full time staff including:</p>
                            </div>
                        </div>
                    </div>
                            <div class="row team-active wow fadeInUp" data-wow-delay=".5s" data-wow-duration=".3">

                               <?php if($teammember): ?>
                                   <?php foreach($teammember as $cat): ?>
                  
                        <div class="col-xl-12">
                            <div class="team-wrapper text-center">
                                <div class="team-img">
                                          <img src="<?= base_url('uploads/teammembers/'.$cat['image']) ?>" alt="image" style="border-radius: 50%">
                                  
                                </div>
                                <div class="team-text">
                                    <h4><?= $cat['full_name']?></h4>
                                    <span><?= $cat['role']?></span>
                                </div>
                            </div>
                        </div>

                                <?php endforeach; ?>
                               <?php endif; ?>
                         </div>      
                </div>
            </div>
            <!-- team-area-end -->
            
     
             <!-- quote-area-start -->
            <div class="quote-area pt-20 quote-padding" >
                <div class="container">
                    <div class="row">
                        <div class="col-xl-8 col-lg-8 offset-lg-2 offset-xl-2">
                            <div class="area-title-blue area-title-white text-center ml-50 mr-50 mb-40 wow fadeInUp" data-wow-delay=".3s" data-wow-duration=".3" >
                    
                                <h2 style="color:#2f2f2f;">send us a message</h2>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="quote-wrapper">
                             <form id="quote-form" action="<?= base_url()?>/message"  method="post">
                                    <div class="row">
                                        <div class="col-lg-4">
                                            <div class="form-box user-icon  mb-20">
                                                <input type="text" name="name"  placeholder="Full Name" required="">
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="form-box email-icon mb-20">
                                                <input type="text" name="email"  placeholder="Email Address" required="true">
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="form-box date-icon mb-20">
                                                <input type="text" name="subject"  placeholder="Subject" required="">
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="form-box message-icon mb-20">
                                                <textarea name="message" id="message" cols="30" rows="10" placeholder="Write a Message" required=""></textarea>
                                            </div>
                                            <div class="quote-btn text-center">
                                                <button class="btn" type="submit">submit message <i class="far fa-long-arrow-right">
                                                </i></button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- quote-area-end -->
         <?=  $this->include('includes/footer.php')?>
            <!-- footer-area-end -->
        </main>
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
        <script src="<?=  base_url() ?>/front_template/js/jquery.js"></script>
 
        <!-- include jQuery -->
       <script src="<?=  base_url() ?>/front_template/js/plugins.js"></script>
       <!-- include jQuery -->
       <script src="<?=  base_url() ?>/front_template/js/jquery.main.js"></script>

        <!-- Slider Revolution core JavaScript files -->
        <script type="text/javascript" src="<?= base_url()?>/talanta/assets/rs/js/jquery.themepunch.tools.min.js"></script>
        <script type="text/javascript" src="<?= base_url()?>/talanta/assets/rs/js/jquery.themepunch.revolution.min.js"></script>
        <script src="<?= base_url()?>/talanta/assets/rs/js/revolution-active.js"></script>


    </body>

</html>