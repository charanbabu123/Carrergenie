<?php

include("./includes/connect.php");
include("./includes/data.php");

$recruiter = getAll("recruiters");
$college = getAll("colleges");
$total = sizeof($recruiter);
for($i=0;$i<$total;$i++){
    $recruiter_id = $recruiter[$i];
    $photo[$i] = $recruiter_id["profilephoto"];
    // $college_id = $college[$i++];
    // $photo[$i++] = $college_id["profile_photo"];
}
$total1 = sizeof($college);
for($j=0;$j<$total1;$j++){
    // $recruiter_id = $recruiter[$i];
    // $photo[$i] = $recruiter_id["profilephoto"];
    $college_id = $college[$j];
    $photo1[$j] = $college_id["profile_photo"];
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Carrier genie</title>

    <meta name="description" content="N.Agency - Responisve Landing Page for Agency">
    <meta name="keywords" content="">
    <meta name="author" content="Belovance">

    <!-- Favicons -->
    <link rel="shortcut icon" href="img/favicon.png">
    <link rel="apple-touch-icon" sizes="57x57" href="img/apple-touch-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="72x72" href="img/apple-touch-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="114x114" href="img/apple-touch-icon-114x114.png">

    <!-- Google Web Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700" rel="stylesheet" />

    <!-- Bootstrap CSS -->
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" />

    <!-- CSS Files For Plugin -->
    <link href="css/animate.css" rel="stylesheet">
    <link href="css/font-awesome/font-awesome.min.css" rel="stylesheet">
    <link href="css/magnific-popup.css" rel="stylesheet" />
    <link href="css/YTPlayer.css" rel="stylesheet" />
    <link href="inc/owlcarousel/css/owl.carousel.min.css" rel="stylesheet" />
    <link href="inc/owlcarousel/css/owl.theme.default.min.css" rel="stylesheet" />
    <link href="inc/revolution/css/settings.css" rel="stylesheet" />
    <link href="inc/revolution/css/layers.css" rel="stylesheet" />
    <link href="inc/revolution/css/navigation.css" rel="stylesheet" />

    <!-- fontawsome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"
        integrity="sha512-Fo3rlrZj/k7ujTnHg4CGR2D7kSs0v4LLanw2qksYuRlEzO+tcaEPQogQ0KaoGN26/zrn20ImR1DfuLWnOo7aBA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- Custom CSS -->
    <link href="css/style.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body class="homepage_slider" data-spy="scroll" data-target=".navbar-fixed-top" data-offset="100">


    <!-- Preloader -->
    <div id="preloader">
        <div id="spinner"></div>
    </div>
    <!-- End Preloader-->


    <!-- Start Navigation -->
    <header class="nav-solid" id="home">

        <nav class="navbar navbar-fixed-top">
            <div class="navigation">
                <div class="container-fluid">
                    <div class="row">

                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle" data-toggle="collapse"
                                data-target="#navbar-collapse">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>

                            <!-- Logo -->
                            <div class="logo-container">
                                <div class="logo-wrap local-scroll">
                                    <a href="#home">
                                        <img class="logo" src="img/COSMOSw.png" alt="logo" data-rjs="2">
                                    </a>
                                </div>
                            </div>
                        </div> <!-- end navbar-header -->

                        <div class="col-md-8 col-xs-12 nav-wrap">
                            <div class="collapse navbar-collapse" id="navbar-collapse">

                                <ul class="nav navbar-nav navbar-right">
                                    <li><a data-scroll href="#home">Home</a></li>
                                    <li><a data-scroll href="#service">Service</a></li>
                                    <li><a data-scroll href="#team">Team</a></li>
                                    <li><a data-scroll href="#blog">blog</a></li>
                                    <li><a data-scroll href="#contact">Contact</a></li>
                                    <li class="dropdown">
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
                                            aria-haspopup="true" aria-expanded="false">Login<span
                                                class="caret"></span></a>
                                        <ul class="dropdown-menu bg-dark">
                                            <li><a href="student\index.php" style="color:black">Student</a></li>
                                            <li><a href="college\index.php" style="color:black">College</a></li>
                                            <li><a href="recruiter\index.php" style="color:black">Recruiter</a></li>

                                        </ul>
                                    </li>
                                </ul>

                            </div>
                        </div> <!-- /.col -->

                    </div> <!-- /.row -->
                </div>
                <!--/.container -->
            </div> <!-- /.navigation-overlay -->
        </nav> <!-- /.navbar -->

    </header>
    <!-- End Navigation -->


    <!-- Start Intro -->
    <section id="slider">
        <div class="rev_slider_wrapper fullscreen-container" data-alias="agency-website" id="rev_slider_280_1_wrapper"
            style="background-color:#fff;padding:0px;height:1080px;">
            <!-- START REVOLUTION SLIDER 5.1.4 fullscreen mode -->
            <div class="rev_slider fullscreenbanner" id="rev_slider_nagency" style="display:none;">
                <ul style="display:none;">

                    <!-- slider Item 1 -->
                    <li data-index="rs-1" data-transition="fadetotopfadefrombottom" data-slotamount="default"
                        data-easein="Power3.easeInOut" data-easeout="Power3.easeInOut" data-masterspeed="1500"
                        data-rotate="0" data-saveperformance="off" data-title="N.Agency" data-description="">
                        <img src="img/slider/s2.jpg" alt="" data-bgposition="center center" data-bgfit="cover"
                            data-bgrepeat="no-repeat" data-bgparallax="10" class="rev-slidebg" data-no-retina>
                        <!-- LAYER NR. 1 -->
                        <div class="tp-caption NotGeneric-Title tp-resizeme  rs-parallaxlevel-3" id="slide-2-layer-1"
                            data-x="['left','left','left','left']" data-hoffset="['0','50','0','0']"
                            data-y="['middle','middle','middle','middle']" data-voffset="['-100','-100','-100','-85']"
                            data-fontsize="['70','60','60','36']" data-lineheight="['70','60','60','50']"
                            data-width="none" data-height="none" data-whitespace="nowrap" data-transform_idle="o:1;"
                            data-transform_in="y:[100%];z:0;rx:0deg;sX:1;sY:1;skX:0;skY:0;s:2000;e:Power4.easeInOut;"
                            data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;"
                            data-mask_in="x:0px;y:0px;s:inherit;e:inherit;"
                            data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;" data-start="1000"
                            data-splitin="chars" data-splitout="none" data-responsive_offset="on"
                            data-elementdelay="0.05" style="z-index: 5; white-space: nowrap;">Welcome Students
                        </div>

                        <!-- LAYER NR. 2 -->
                        <div class="tp-caption tp-resizeme NotGeneric-Text   white-color rs-parallaxlevel-4"
                            id="slide-2-layer-2" data-x="['left','left','left','left']"
                            data-hoffset="['0','50','0','0']" data-y="['middle','middle','middle','middle']"
                            data-voffset="['0','0','0','-10']" data-fontsize="['18','18','20','14']"
                            data-lineheight="['28','28','32','24']" data-width="none" data-height="none"
                            data-whitespace="nowrap" data-transform_idle="o:1;"
                            data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;"
                            data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;"
                            data-mask_in="x:0px;y:[100%];s:inherit;e:inherit;"
                            data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;" data-start="1500"
                            data-splitin="none" data-splitout="none" data-responsive_offset="on" style="z-index: 6; ">
                            <h1>Find your Dream Role</h1>
                        </div>

                        <!-- LAYER NR. 3 -->
                        <div class="tp-caption rs-parallaxlevel-5" id="slide-2-layer-3"
                            data-x="['left','left','left','left']" data-hoffset="['0','50','0','0']"
                            data-y="['middle','middle','middle','middle']" data-voffset="['105','105','115','85']"
                            data-width="none" data-height="none" data-whitespace="nowrap" data-transform_idle="o:1;"
                            data-transform_hover="o:1;rX:0;rY:0;rZ:0;z:0;s:300;e:Power1.easeInOut;"
                            data-style_hover="c:rgba(255, 255, 255, 1.00);bc:rgba(255, 255, 255, 1.00);cursor:pointer;"
                            data-transform_in="y:50px;opacity:0;s:1500;e:Power4.easeInOut;"
                            data-transform_out="y:[175%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;"
                            data-mask_out="x:inherit;y:inherit;" data-start="2000" data-splitin="none"
                            data-splitout="none"
                            data-actions='[{"event":"click","action":"jumptoslide","slide":"next","delay":""}]'
                            data-responsive_offset="on" data-responsive="off" style=""><a href='student\index.php'
                                class='btn btn-main btn-white'>Explore <i class="fas fa-long-arrow-alt-right"></i> </a>
                        </div>



                    </li>

                    <!-- slider Item 2 -->
                    <li data-index="rs-3" data-transition="slideremoveright" data-slotamount="default"
                        data-easein="Power3.easeInOut" data-easeout="Power3.easeInOut" data-masterspeed="1500"
                        data-rotate="0" data-saveperformance="off">
                        <img src="img/slider/s3.jpg" alt="" data-bgposition="center center" data-bgfit="cover"
                            data-bgrepeat="no-repeat" data-bgparallax="10" class="rev-slidebg" data-no-retina>

                        <div class="tp-caption NotGeneric-Title tp-resizeme  rs-parallaxlevel-3" id="slide-2-layer-1"
                            data-x="['left','left','left','left']" data-hoffset="['0','50','0','0']"
                            data-y="['middle','middle','middle','middle']" data-voffset="['-100','-100','-100','-85']"
                            data-fontsize="['70','60','60','36']" data-lineheight="['70','60','60','50']"
                            data-width="none" data-height="none" data-whitespace="nowrap" data-transform_idle="o:1;"
                            data-transform_in="y:[100%];z:0;rx:0deg;sX:1;sY:1;skX:0;skY:0;s:2000;e:Power4.easeInOut;"
                            data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;"
                            data-mask_in="x:0px;y:0px;s:inherit;e:inherit;"
                            data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;" data-start="1000"
                            data-splitin="chars" data-splitout="none" data-responsive_offset="on"
                            data-elementdelay="0.05" style="z-index: 5; white-space: nowrap;">Welcome College
                        </div>

                        <!-- LAYER NR. 2 -->
                        <div class="tp-caption tp-resizeme NotGeneric-Text   white-color rs-parallaxlevel-4"
                            id="slide-2-layer-2" data-x="['left','left','left','left']"
                            data-hoffset="['0','50','0','0']" data-y="['middle','middle','middle','middle']"
                            data-voffset="['0','0','0','-10']" data-fontsize="['18','18','20','14']"
                            data-lineheight="['28','28','32','24']" data-width="none" data-height="none"
                            data-whitespace="nowrap" data-transform_idle="o:1;"
                            data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;"
                            data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;"
                            data-mask_in="x:0px;y:[100%];s:inherit;e:inherit;"
                            data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;" data-start="1500"
                            data-splitin="none" data-splitout="none" data-responsive_offset="on" style="z-index: 6; ">
                            <h1>Platform to Explore different Skills</h1>
                        </div>

                        <!-- LAYER NR. 3 -->
                        <div class="tp-caption rs-parallaxlevel-5" id="slide-2-layer-3"
                            data-x="['left','left','left','left']" data-hoffset="['0','50','0','0']"
                            data-y="['middle','middle','middle','middle']" data-voffset="['105','105','115','85']"
                            data-width="none" data-height="none" data-whitespace="nowrap" data-transform_idle="o:1;"
                            data-transform_hover="o:1;rX:0;rY:0;rZ:0;z:0;s:300;e:Power1.easeInOut;"
                            data-style_hover="c:rgba(255, 255, 255, 1.00);bc:rgba(255, 255, 255, 1.00);cursor:pointer;"
                            data-transform_in="y:50px;opacity:0;s:1500;e:Power4.easeInOut;"
                            data-transform_out="y:[175%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;"
                            data-mask_out="x:inherit;y:inherit;" data-start="2000" data-splitin="none"
                            data-splitout="none"
                            data-actions='[{"event":"click","action":"jumptoslide","slide":"next","delay":""}]'
                            data-responsive_offset="on" data-responsive="off" style=""><a href='student\index.php'
                                class='btn btn-main btn-white'>Explore <i class="fas fa-long-arrow-alt-right"></i> </a>
                        </div>

                    </li>

                    <!-- slider Item 3 -->
                    <li data-index="rs-2" data-slotamount="default" data-easein="Power3.easeInOut"
                        data-easeout="Power3.easeInOut" data-masterspeed="1500" data-rotate="0"
                        data-saveperformance="off">
                        <img alt="" class="rev-slidebg" data-bgparallax="3" data-bgposition="center center"
                            data-duration="5000" data-ease="Linear.easeNone" data-kenburns="on" data-no-retina=""
                            data-offsetend="0 0" data-offsetstart="0 0" data-rotateend="0" data-rotatestart="0"
                            data-scaleend="100" data-scalestart="110" src="img/slider/s1.jpg">

                        <div class="tp-caption NotGeneric-Title tp-resizeme   rs-parallaxlevel-3" id="slide-2-layer-1"
                            data-x="['left','left','left','left']" data-hoffset="['0','50','0','0']"
                            data-y="['middle','middle','middle','middle']" data-voffset="['-100','-100','-100','-85']"
                            data-fontsize="['70','60','60','36']" data-lineheight="['70','60','60','50']"
                            data-width="none" data-height="none" data-whitespace="nowrap" data-transform_idle="o:1;"
                            data-transform_in="y:[100%];z:0;rx:0deg;sX:1;sY:1;skX:0;skY:0;s:2000;e:Power4.easeInOut;"
                            data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;"
                            data-mask_in="x:0px;y:0px;s:inherit;e:inherit;"
                            data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;" data-start="1000"
                            data-splitin="chars" data-splitout="none" data-responsive_offset="on"
                            data-elementdelay="0.05" style="z-index: 5; white-space: nowrap; ">Welcome Recruiter
                        </div>

                        <!-- LAYER NR. 2 -->
                        <div class="tp-caption tp-resizeme NotGeneric-Text   white-color rs-parallaxlevel-4"
                            id="slide-2-layer-2" data-x="['left','left','left','left']"
                            data-hoffset="['0','50','0','0']" data-y="['middle','middle','middle','middle']"
                            data-voffset="['0','0','0','-10']" data-fontsize="['18','18','20','14']"
                            data-lineheight="['28','28','32','24']" data-width="none" data-height="none"
                            data-whitespace="nowrap" data-transform_idle="o:1;"
                            data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;"
                            data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;"
                            data-mask_in="x:0px;y:[100%];s:inherit;e:inherit;"
                            data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;" data-start="1500"
                            data-splitin="none" data-splitout="none" data-responsive_offset="on" style="z-index: 6; ">
                            <h1>Find your Employees</h1>
                        </div>

                        <!-- LAYER NR. 3 -->
                        <div class="tp-caption rs-parallaxlevel-5" id="slide-2-layer-3"
                            data-x="['left','left','left','left']" data-hoffset="['0','50','0','0']"
                            data-y="['middle','middle','middle','middle']" data-voffset="['105','105','115','85']"
                            data-width="none" data-height="none" data-whitespace="nowrap" data-transform_idle="o:1;"
                            data-transform_hover="o:1;rX:0;rY:0;rZ:0;z:0;s:300;e:Power1.easeInOut;"
                            data-style_hover="c:rgba(255, 255, 255, 1.00);bc:rgba(255, 255, 255, 1.00);cursor:pointer;"
                            data-transform_in="y:50px;opacity:0;s:1500;e:Power4.easeInOut;"
                            data-transform_out="y:[175%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;"
                            data-mask_out="x:inherit;y:inherit;" data-start="2000" data-splitin="none"
                            data-splitout="none"
                            data-actions='[{"event":"click","action":"jumptoslide","slide":"next","delay":""}]'
                            data-responsive_offset="on" data-responsive="off" style=""><a href='student\index.php'
                                class='btn btn-main btn-white'>Explore <i class="fas fa-long-arrow-alt-right"></i> </a>
                        </div>

                    </li>

                </ul>
                <div class="tp-bannertimer tp-bottom" style="visibility: hidden !important;"></div>
            </div>
        </div>
    </section>
    <!-- End Intro -->


    <!-- Start Service -->
    <section id="service" class="p-top-80 p-bottom-80">
        <div class="container">

            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <!-- Section Title -->
                    <div class="section-title text-center m-bottom-40">
                        <h2 class="wow fadeInDown" data-wow-duration="1s" data-wow-delay="0.6s"><strong>Service</strong>
                        </h2>
                        <div class="divider-center-small wow zoomIn" data-wow-duration="1s" data-wow-delay="0.6s"></div>
                        <p class="section-subtitle wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.6s"><em>We
                                provide following services for the betterment of User Experience.</em></p>
                    </div>
                </div> <!-- /.col -->
            </div> <!-- /.row -->


            <div class="row">

                <!-- Service Item 1 -->
                <div class="col-md-3 col-sm-6 m-bottom-20">
                    <div class="service wow zoomIn  sercard" data-wow-duration="1s" data-wow-delay="0.6s">
                        <div class="service-icon">
                            <i class="fa fa-user-graduate" aria-hidden="true"></i>
                        </div>
                        <h4>Recruitement</h4>
                        <div class="service-text">
                            <p>Share your thoughts, Upgrade your skills, Live your Dream.</p>
                        </div>
                    </div>
                </div> <!-- /.col -->

                <!-- Service Item 2 -->
                <div class="col-md-3 col-sm-6 m-bottom-20">
                    <div class="service wow zoomIn  sercard" data-wow-duration="1s" data-wow-delay="0.6s">
                        <div class="service-icon">
                            <i class="fas fa-user-check" aria-hidden="true"></i>
                        </div>
                        <h4>Verified Students</h4>
                        <div class="service-text">
                            <p>Students &#38; there details are verified by college administration to provide precise
                                details.</p>
                        </div>
                    </div>
                </div> <!-- /.col -->

                <!-- Service Item 3 -->
                <div class="col-md-3 col-sm-6 m-bottom-20">
                    <div class="service wow zoomIn  sercard" data-wow-duration="1s" data-wow-delay="0.6s">
                        <div class="service-icon">
                            <i class="fas fa-file" aria-hidden="true"></i>
                        </div>
                        <h4>Auto Resume-Generator</h4>
                        <div class="service-text">
                            <p>Resumes are generated automatically based on details provided &#38; verified by students
                                &amp; college.</p>
                        </div>
                    </div>
                </div> <!-- /.col -->

                <!-- Service Item 4 -->
                <div class="col-md-3 col-sm-6">
                    <div class="service wow zoomIn sercard" data-wow-duration="1s" data-wow-delay="0.6s">
                        <div class="service-icon">
                            <i class="fas fa-stopwatch" aria-hidden="true"></i>
                        </div>
                        <h4>Mocks</h4>
                        <div class="service-text">
                            <p>Help students to build thier logical ability &amp; perform better in thier Interviews .
                            </p>
                        </div>
                    </div>
                </div> <!-- /.col -->

            </div> <!-- /.row -->

        </div> <!-- /.container -->
    </section>
    <!-- End Service -->




    <!-- Start Regular Section -->
    <section class="p-top-80 p-bottom-80">
        <div class="container">
            <div class="row">

                <div class="col-md-6">
                    <!-- Section Title -->
                    <div class="m-bottom-30">
                        <h2 class="wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0.6s">We Help Grow Your
                            Business</h2>
                        <div class="divider-small wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0.7s"></div>
                    </div>

                    <div class="wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0.8s">
                        <p>We are always ready for accepting any queries &amp; help you in resolving them we always look
                            for betterment of user Experience in the applications as we are always avaliavle to resolve
                            the queries as soon as possible . </p>
                        <p>We accept all Bussiness &amp; help your Bussiness at affordable price by ensuring to meet
                            needs of applications at short period of time with efficiency .</p>
                    </div>

                    <a data-scroll href="#contact" class="m-top-30 m-bottom-30 btn btn-main wow fadeInUp"
                        data-wow-duration="1s" data-wow-delay="0.8s">Contact Us</a>


                </div> <!-- /.col -->

                <div class="col-md-6">

                    <div class="feature-image">
                        <img src="img/COSMOSw.jpg" alt="Feature Image" class=" img-responsive wow fadeInRight shadow-sm"
                            data-wow-duration="1s" data-wow-delay="0.6s" />
                    </div>

                </div> <!-- /.col -->

            </div> <!-- /.row -->
        </div> <!-- /.container -->
    </section>
    <!-- End Regular Section -->

    <!-- Start Team -->
    <section id="team" class="p-top-80 p-bottom-50">
        <div class="container">

            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <!-- Section Title -->
                    <div class="section-title text-center m-bottom-40">
                        <h2 class="wow fadeInDown" data-wow-duration="1s" data-wow-delay="0.6s">Team Members</h2>
                        <div class="divider-center-small wow zoomIn" data-wow-duration="1s" data-wow-delay="0.6s"></div>
                        <p class="section-subtitle wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.6s">
                            <em>We are passionate about the work we get regardless of the time and work.</em>
                        </p>
                    </div>
                </div> <!-- /.col -->
            </div> <!-- /.row -->

            <div class="row">

                <!-- === Team Item 1 === -->
                <div class="col-md-4 col-sm-6 col-xs-6 p-bottom-30">
                    <div class="team-item wow zoomIn" data-wow-duration="1s" data-wow-delay="0.9s">
                        <div class="team-item-image">
                            <img src="img/team/1.jpg" alt="charan" />
                        </div>
                        <div class="team-item-info">
                            <div class="team-item-name">
                                Charan Babu V
                            </div>
                        </div>
                    </div>
                </div> <!-- /.col -->

                <!-- === Team Item 2 === -->
                <div class="col-md-4 col-sm-6 col-xs-6 p-bottom-30">
                    <div class="team-item wow zoomIn" data-wow-duration="1s" data-wow-delay="0.9s">
                        <div class="team-item-image">
                            <img src="img/team/2.jpg" alt="vakula" />
                        </div>
                        <div class="team-item-info">
                            <div class="team-item-name">
                                Vakula Rani(Mentor)
                            </div>
                        </div>
                    </div>
                </div> <!-- /.col -->

                  
                <!-- === Team Item 2 === -->
                <div class="col-md-4 col-sm-6 col-xs-6 p-bottom-30">
                    <div class="team-item wow zoomIn" data-wow-duration="1s" data-wow-delay="0.9s">
                        <div class="team-item-image">
                            <img src="img/team/3.jpg" alt="" />
                        </div>
                        <div class="team-item-info">
                            <div class="team-item-name">
                                Gunasheela
                            </div>
                        </div>
                    </div>
                </div> <

                <!-- === Team Item 4 === -->
                <div class="col-md-4 col-sm-6 col-xs-6 p-bottom-30">
                    <div class="team-item wow zoomIn" data-wow-duration="1s" data-wow-delay="0.9s">
                        <div class="team-item-image">
                            <img src="img/team/4.jpg" alt="" />
                        </div>
                        <div class="team-item-info">
                            <div class="team-item-name">
                                Sahan s
                            </div>
                        </div>
                    </div>
                </div> <!-- /.col -->

            </div> <!-- /.row -->

        </div> <!-- /.container -->
    </section>
    <!-- End Team -->

    <!-- Start Stat -->
    


    <!-- Start Testimonial
    <section id="testimonials" class="parallax-bg overlay-dark p-top-80 p-bottom-80"
        style="background-image:url(img/testimonial-bg.jpg)" data-stellar-background-ratio="0.5">
        <div class="section-title text-center white-color m-bottom-40">
            <h2 class="wow fadeInDown" data-wow-duration="1s" data-wow-delay="0.6s">Testimonials</h2>
            <div class="divider-center-small divider-white wow zoomIn" data-wow-duration="1s" data-wow-delay="0.6s"></div>
        </div>

        
        <div id="owl-testimonials" class="owl-carousel owl-theme testimonial text-center white-color">

            
            <div class="testimonial-item text-center">
                <p class="testimonial-desc">Residence you satisfied and rapturous certainty two. Procured outweigh as outlived so so. On in bringing graceful proposal blessing of marriage outlived. Son rent face our loud near.</p>
                <div class="testimonial-thumb">
                    <img class="img-responsive" src="img/testimonial/1.jpg" alt="">
                </div>
                <h5 class="testimonial-author">Jenny Doe - Star Inc</h5>
            </div>

            <div class="testimonial-item text-center">
                <p class="testimonial-desc">Excellent so to no sincerity smallness. Removal request delight if on he we. Unaffected in we by apartments astonished to decisively themselves. Offended ten old consider speaking.</p>
                <div class="testimonial-thumb">
                    <img class="img-responsive" src="img/testimonial/2.jpg" alt="">
                </div>
                <h5 class="testimonial-author">Kathy Doe - Service Corp</h5>
            </div>

            <div class="testimonial-item text-center">
                <p class="testimonial-desc">Advanced and procured civility not absolute put continue. Overcame breeding or my concerns removing desirous so absolute. My melancholy unpleasing imprudence considered in advantages.</p>
                <div class="testimonial-thumb">
                    <img class="img-responsive" src="img/testimonial/3.jpg" alt="">
                </div>
                <h5 class="testimonial-author">Jack Doe - Inka Design</h5>
            </div>

        </div> 

    </section>
     End Testimonial -->


    <!-- Start blog -->
    <section id="blog" class="p-top-80 p-bottom-80">

        <div class="container ">

            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <!-- Section Title -->
                    <div class="section-title text-center m-bottom-40">
                        <h2 class="wow fadeInDown" data-wow-duration="1s" data-wow-delay="0.6s">Blog Posts</h2>
                        <div class="divider-center-small wow zoomIn" data-wow-duration="1s" data-wow-delay="0.6s">
                        </div>
                        <p class="section-subtitle wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.6s">
                            <em>Here are some of the interesting articles which helps you in knowing what's best for
                                you in your career.</em>
                        </p>
                    </div>
                </div> <!-- /.col -->
            </div> <!-- /.row -->

            <div class="row">
                <!-- === blog === -->
                <div id="owl-blog" class="owl-carousel owl-theme">

                    <!-- === Blog item 1 === -->
                    <div class="blog wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0.7s">
                        <div class="blog-media">
                            <a href="http://localhost/cosmos/blogs/carrer-development-blog.php"><img src="img/blog/career.jpg" alt=""></a>
                        </div>
                        <!--post media-->

                        <div class="blog-post-info clearfix">
                            <span class="time"><i class="fa fa-calendar"></i> 12 January 2017</span>
                            <span class="comments"><a href="#"><i class="fa fa-comments"></i> 4 Comments</a></span>
                        </div>
                        <!--post info-->

                        <div class="blog-post-body">
                            <h4><a class="title"href="blogs/carrer-development-blog.php" >Career Selection</a></h4>
                            <p class="p-bottom-20">It's just a matter of identifying the correct career path and
                                taking the first steps.</p>
                            <a href="blogs/carrer-development-blog.php" class="read-more">Read More >></a>
                        </div>
                        <!--post body-->
                    </div> <!-- /.blog -->

                    <!-- === Blog item 2 === -->
                    <div class="blog wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0.7s">
                        <div class="blog-media">
                            <a href="blogs/leadership-blog.php"><img src="img/blog/leadership.png" alt=""></a>
                        </div>
                        <!--post media-->

                        <div class="blog-post-info clearfix">
                            <span class="time"><i class="fa fa-calendar"></i> 06 January 2017</span>
                            <span class="comments"><a href="#"><i class="fa fa-comments"></i> 2 Comments</a></span>
                        </div>
                        <!--post info-->

                        <div class="blog-post-body">
                            <h4><a class="title" href="blogs/leadership-blog.php">Leadership Skills</a></h4>
                            <p class="p-bottom-20">True enthusiasm for a business, its products, and its mission
                                cannot be faked. Employees can
                                recognize insincere cheerleading from a mile away.</p>
                            <a href="blogs/leadership-blog.php" class="read-more">Read More >></a>
                        </div>
                        <!--post body-->
                    </div> <!-- /.blog -->

                    <!-- === Blog item 3 === -->
                    <div class="blog wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0.7s">
                        <div class="blog-media">
                            <a href="blogs/logical-thinking-blog.php"><img src="img/blog/logical-thinking.png"
                                    alt=""></a>
                        </div>
                        <!--post media-->

                        <div class="blog-post-info clearfix">
                            <span class="time"><i class="fa fa-calendar"></i> 02 January 2017</span>
                            <span class="comments"><a href="#"><i class="fa fa-comments"></i> 4 Comments</a></span>
                        </div>
                        <!--post info-->

                        <div class="blog-post-body">
                            <h4><a class="title" href="blogs/logical-thinking-blog.php">Logical Thinking</a></h4>
                            <p class="p-bottom-20">Logical thinking requires the use of reasoning skills to study
                                a problem objectively, which will allow you to make a rational conclusion about how
                                to
                                proceed.</p>
                            <a href="blogs/logical-thinking-blog.php" class="read-more">Read More >></a>
                        </div>
                        <!--post body-->
                    </div> <!-- /.blog -->

                    <!-- === Blog item 4 === -->
                    <div class="blog wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0.7s">
                        <div class="blog-media">
                            <a href="blogs/skill-development-blog.php"><img src="img/blog/skill-development.webp"
                                    alt=""></a>
                        </div>
                        <!--post media-->

                        <div class="blog-post-info clearfix">
                            <span class="time"><i class="fa fa-calendar"></i> 01 January 2017</span>
                            <span class="comments"><a href="#"><i class="fa fa-comments"></i> 7 Comments</a></span>
                        </div>
                        <!--post info-->

                        <div class="blog-post-body">
                            <h4><a class="title" href="blogs/skill-development-blog.php">Skill Development</a></h4>
                            <p class="p-bottom-20">Skills like multi tasking, leadership, flexibility, specialist
                                skills, inquisitiveness,
                                ability to handle pressure and many more such as these are what the employers look
                                for in a
                                potential employee.</p>
                            <a href="blogs/skill-development-blog.php" class="read-more">Read More >></a>
                        </div>
                        <!--post body-->
                    </div> <!-- /.blog -->

                    <!-- blog 5-->
                    <div class="blog wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0.7s">
                        <div class="blog-media">
                            <a href="blogs/workspace-blog.php"><img src="img/blog/workspace.jpg" alt=""></a>
                        </div>
                        <!--post media-->

                        <div class="blog-post-info clearfix">
                            <span class="time"><i class="fa fa-calendar"></i> 01 January 2017</span>
                            <span class="comments"><a href="#"><i class="fa fa-comments"></i> 7 Comments</a></span>
                        </div>
                        <!--post info-->

                        <div class="blog-post-body">
                            <h4><a class="title" href="blogs/workspace-blog.php">Workplace Fundamentals</a></h4>
                            <p class="p-bottom-20">Workplace Fundamentals combine soft skills, communication and
                                social intellignece, compliance, attention to detail, time management and more
                                skills that help your team excel in their roles.</p>
                            <a href="blogs/workspace-blog.php" class="read-more">Read More >></a>
                        </div>
                        <!--post body-->
                    </div> <!-- /.blog -->

                    <!-- blog 6-->
                    <div class="blog wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0.7s">
                        <div class="blog-media">
                            <a href="blogs/events-blog.php"><img src="img/blog/events.jpg" alt=""></a>
                        </div>
                        <!--post media-->

                        <div class="blog-post-info clearfix">
                            <span class="time"><i class="fa fa-calendar"></i> 01 January 2017</span>
                            <span class="comments"><a href="#"><i class="fa fa-comments"></i> 7 Comments</a></span>
                        </div>
                        <!--post info-->

                        <div class="blog-post-body">
                            <h4><a class="title" href="blogs/events-blog.php">Events Participation</a></h4>
                            <p class="p-bottom-20">Nonprofit followers are very passionate about their cause, and
                                events of this nature allow
                                them to simultaneously support an organization, plus network and develop
                                relationships they
                                may not otherwise have had access to.</p>
                            <a href="blogs/events-blog.php" class="read-more">Read More >></a>
                        </div>
                        <!--post body-->
                    </div><!-- /#owl-testimonials -->

                </div> <!-- /.row -->

            </div> <!-- /.container -->

    </section>


    <!-- Start client -->
    <section id="client" class="light-bg p-top-80 p-bottom-80">

<!-- Section Title -->
<div class="section-title text-center m-bottom-40">
    <h2>Our Clients</h2>
    <div class="divider-center-small"></div>
</div>

<!-- === Clients === -->
<div class="container ">
    
    <div class="row">

        <div id="owl-clients" class="owl-carousel owl-theme client text-center">

            <?php
            for($k=0;$k<$total;$k++){
                echo'
                    <div class="client-item text-center">
                    <img class="img-responsive" src=".'.$photo[$k].'" alt="">
                    </div>';
            }
            for($l=0;$l<$total1;$l++){
                echo'
                    <div class="client-item text-center">
                    <img class="img-responsive" src=".'.$photo1[$l].'" alt="">
                    </div>';
            }
            ?>
        </div>

    </div> <!-- /.row -->
    <!-- /.row -->
</div> <!-- /.container -->

</section>
    <!-- End client -->


    <!-- Start Contact -->
    <section id="contact" class="p-top-80 p-bottom-50">
        <div class="container">

            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <!-- Section Title -->
                    <div class="section-title text-center m-bottom-40">
                        <h2 class="wow fadeInDown" data-wow-duration="1s" data-wow-delay="0.6s">Contact</h2>
                        <div class="divider-center-small wow zoomIn" data-wow-duration="1s" data-wow-delay="0.6s">
                        </div>
                        <p class="section-subtitle wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.6s">
                            <em>For any queires contact us through the below form or visit the office.</em>
                        </p>
                    </div>
                </div> <!-- /.col -->
            </div> <!-- /.row -->

            <div class="row">

                <!-- === Contact Form === -->
                <div class="col-md-4 col-sm-4 p-bottom-30">
                    <div class="contact-form row">

                        <form name="ajax-form" id="ajax-form" action="contact.php" method="post">
                            <div class="col-sm-6 contact-form-item wow zoomIn">
                                <input name="name" id="name" type="text" placeholder="Your Name: *" />
                                <span class="error" id="err-name">please enter name</span>
                            </div>
                            <div class="col-sm-6 contact-form-item wow zoomIn">
                                <input name="email" id="email" type="text" placeholder="E-Mail: *" />
                                <span class="error" id="err-email">please enter e-mail</span>
                                <span class="error" id="err-emailvld">e-mail is not a valid format</span>
                            </div>
                            <div class="col-sm-12 contact-form-item wow zoomIn">
                                <textarea name="message" id="message" placeholder="Your Message"></textarea>
                            </div>
                            <div class="col-sm-12 contact-form-item">
                                <button class="send_message btn btn-main btn-theme wow fadeInUp" id="send"
                                    data-lang="en">submit</button>
                            </div>
                            <div class="clear"></div>
                            <div class="error text-align-center" id="err-form">There was a problem validating the
                                form please check!</div>
                            <div class="error text-align-center" id="err-timedout">The connection to the server
                                timed out!</div>
                            <div class="error" id="err-state"></div>
                        </form>

                        <div class="clearfix"></div>
                        <div id="ajaxsuccess">Successfully sent!!</div>
                        <div class="clear"></div>

                    </div> <!-- /.contacts-form & inner row -->
                </div> <!-- /.col -->

                <!-- === Contact Information === -->
                <div class="col-md-4 col-sm-4 p-bottom-30">
                    <address class="contact-info">

                        <!-- === Location === -->
                        <div class="m-top-20 wow slideInRight">
                            <div class="contact-info-icon">
                                <i class="fa fa-location-arrow"></i>
                            </div>
                            <div class="contact-info-title">
                                Address:
                            </div>
                            <div class="contact-info-text">
                            Sri Nivasa Reddy Layout, AECS Layout, Marathahalli, Bengaluru, Karnataka 560037
                            </div>
                        </div>

                        <!-- === Phone === -->
                        <div class="m-top-20 wow slideInRight">
                            <div class="contact-info-icon">
                                <i class="fa fa-phone"></i>
                            </div>
                            <div class="contact-info-title">
                                Phone number:
                            </div>
                            <div class="contact-info-text">
                                +91 93429 00666
                            </div>
                        </div>

                        <!-- === Mail === -->
                        <div class="m-top-20 wow slideInRight">
                            <div class="contact-info-icon">
                                <i class="fa fa-envelope"></i>
                            </div>
                            <div class="contact-info-title">
                                Email:
                            </div>
                            <div class="contact-info-text">
                            info@cmrit.ac.in
                            </div>
                        </div>

                    </address>
                </div> <!-- /.col -->
                <div class=" col-md-4 col-sm-4">
                <iframe
  src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3888.078832075577!2d77.71011867454651!3d12.966807314984408!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bae130f321b2b95%3A0x74b2c05bbc2aac8d!2sCMR%20Institute%20of%20Technology!5e0!3m2!1sen!2sin!4v1716456406262!5m2!1sen!2sin"
  width="500"
  height="300"
  frameborder="0"
  style="border:0"
  allowfullscreen
></iframe>
            </div> <!-- /.row -->
        </div> <!-- /.container -->
    </section>
    <!-- End Contact -->


    <!-- Start Footer -->
    <footer class="site-footer">
        <div class="container">
            <small class="copyright pull-left">Copyrights © 2021 All Rights Reserved By <a
                    href="/">HIRERIGHT</a>.</small>
            <!-- /social-icon -->
        </div>
        <!-- /container -->
    </footer>
    <!-- End Footer -->


    <!-- Back to top -->
    <a href="#" id="back-to-top" title="Back to top"><i class="fa fa-angle-up"></i></a>
    <!-- /Back to top -->


    <!-- jQuery -->
    <script src="js/jquery.min.js"></script>

    <!-- Bootstrap -->
    <script src="bootstrap/js/bootstrap.min.js"></script>

    <!-- Components Plugin -->
    <script src="js/jquery.easing.1.3.js"></script>
    <script src="js/smooth-scroll.js"></script>
    <script src="js/jquery.appear.js"></script>
    <script src="js/jquery.countTo.js"></script>
    <script src="js/jquery.stellar.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/imagesloaded.pkgd.min.js"></script>
    <script src="js/isotope.pkgd.min.js"></script>
    <script src="js/jquery.mb.YTPlayer.js"></script>
    <script src="js/retina.min.js"></script>
    <script src="js/wow.min.js"></script>
    <script src="inc/owlcarousel/js/owl.carousel.min.js"></script>
    <script src="inc/revolution/js/jquery.themepunch.tools.min.js"></script>
    <script src="inc/revolution/js/jquery.themepunch.revolution.min.js"></script>

    <!-- Contact Form -->
    <script src="js/contact.js"></script>

    <!-- Custom Plugin -->
    <script src="js/custom.js"></script>

    <!-- RS Plugin Extensions -->
    <script src="inc/revolution/js/extensions/revolution.extension.video.min.js"></script>
    <script src="inc/revolution/js/extensions/revolution.extension.carousel.min.js"></script>
    <script src="inc/revolution/js/extensions/revolution.extension.slideanims.min.js"></script>
    <script src="inc/revolution/js/extensions/revolution.extension.actions.min.js"></script>
    <script src="inc/revolution/js/extensions/revolution.extension.layeranimation.min.js"></script>
    <script src="inc/revolution/js/extensions/revolution.extension.kenburn.min.js"></script>
    <script src="inc/revolution/js/extensions/revolution.extension.navigation.min.js"></script>
    <script src="inc/revolution/js/extensions/revolution.extension.migration.min.js"></script>
    <script src="inc/revolution/js/extensions/revolution.extension.parallax.min.js"></script>


    <script>
        var tpj = jQuery;

        var revapi280;
        tpj(document).ready(function () {
            if (tpj("#rev_slider_nagency").revolution == undefined) {
                revslider_showDoubleJqueryError("#rev_slider_nagency");
            } else {
                revapi280 = tpj("#rev_slider_nagency").show().revolution({
                    sliderType: "standard",
                    sliderLayout: "fullscreen",
                    dottedOverlay: "none",
                    delay: 90000,
                    navigation: {
                        keyboardNavigation: "off",
                        keyboard_direction: "horizontal",
                        mouseScrollNavigation: "off",
                        onHoverStop: "off",
                        touch: {
                            touchenabled: "on",
                            swipe_threshold: 75,
                            swipe_min_touches: 1,
                            swipe_direction: "horizontal",
                            drag_block_vertical: false
                        },
                        arrows: {
                            style: "uranus",
                            enable: true,
                            hide_onmobile: true,
                            hide_under: 496,
                            hide_onleave: true,
                            hide_delay: 200,
                            hide_delay_mobile: 1200,
                            tmp: '',
                            left: {
                                h_align: "left",
                                v_align: "center",
                                h_offset: 20,
                                v_offset: 0
                            },
                            right: {
                                h_align: "right",
                                v_align: "center",
                                h_offset: 20,
                                v_offset: 0
                            }
                        }
                    },
                    responsiveLevels: [1200, 991, 767, 480],
                    visibilityLevels: [1200, 991, 767, 480],
                    gridwidth: [1200, 991, 767, 480],
                    gridheight: [868, 768, 960, 720],
                    lazyType: "none",
                    parallax: {
                        type: "mouse+scroll",
                        origo: "slidercenter",
                        speed: 2000,
                        levels: [2, 3, 4, 5, 6, 7, 12, 16, 10, 50],
                        disable_onmobile: "on"
                    },
                    shadow: 0,
                    spinner: "spinner2",
                    autoHeight: "off",
                    fullScreenAutoWidth: "off",
                    fullScreenAlignForce: "off",
                    fullScreenOffsetContainer: "",
                    fullScreenOffset: "0",
                    disableProgressBar: "on",
                    hideThumbsOnMobile: "off",
                    hideSliderAtLimit: 0,
                    hideCaptionAtLimit: 0,
                    hideAllCaptionAtLilmit: 0,
                    debugMode: false,
                    fallbacks: {
                        simplifyAll: "off",
                        disableFocusListener: false,
                    }
                });
            }
        }); /*ready*/
    </script>

</body>

</html>