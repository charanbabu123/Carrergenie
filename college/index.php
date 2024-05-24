<?php
include("../includes/connect.php");
include("../includes/data.php");
session_start();
if (!isset($_SESSION["college_id"])) {
    header("Location: ./authentication.php");
    die();
}

$college = getById("colleges", $_SESSION["college_id"]);
// echo $_SESSION["college_id"];

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title><?php echo $college['name']?></title>

    <meta name="description" content="N.Agency - Responisve Landing Page for Agency">
    <meta name="keywords" content="">
    <meta name="author" content="Belovance">

    <!-- Favicons -->
    <link rel="shortcut icon" href="../img/favicon.png">
    <link rel="apple-touch-icon" sizes="57x57" href="../img/apple-touch-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="72x72" href="../img/apple-touch-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="114x114" href="../img/apple-touch-icon-114x114.png">

    <!-- Google Web Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700" rel="stylesheet">

    <!-- Bootstrap CSS -->
    <link href="../bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- CSS Files For Plugin -->
    <link href="../css/animate.css" rel="stylesheet">
    <link href="../css/font-awesome/font-awesome.min.css" rel="stylesheet">
    <link href="../css/magnific-popup.css" rel="stylesheet" />
    <link href="../css/YTPlayer.css" rel="stylesheet" />
    <link rel="stylesheet" href="../inc/owlcarousel/css/owl.carousel.min.css">
    <link rel="stylesheet" href="../inc/owlcarousel/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="../inc/revolution/css/settings.css" />
    <link rel="stylesheet" href="../inc/revolution/css/layers.css" />
    <link rel="stylesheet" href="../inc/revolution/css/navigation.css" />

    <!-- Custom CSS -->
    <link href="../css/style.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body class="homepage_parallax" data-spy="scroll" data-target=".navbar-fixed-top" data-offset="100">

    <!-- Preloader -->
    <div id="preloader">
        <div id="spinner"></div>
    </div>
    <!-- End Preloader-->

    <!-- Start Navigation -->
    <header class="nav-transparent" id="home">
        <nav class="navbar navbar-fixed-top">
            <div class="navigation">
                <div class="container-fluid">
                    <div class="row">

                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>

                            <!-- Logo -->
                            <div class="logo-container">
                                <div class="logo-wrap local-scroll">
                                    <a href="#home">
                                        <img class="logo" src="../img/logo_light.png" alt="logo" data-rjs="2">
                                    </a>
                                </div>
                            </div>
                        </div> <!-- end navbar-header -->

                        <div class="col-md-8 col-xs-12 nav-wrap">
                            <div class="collapse navbar-collapse" id="navbar-collapse">

                                <ul class="nav navbar-nav navbar-right">
                                    <li><a data-scroll href="#home">Home</a></li>
                                    <li><a data-scroll href="#about">About</a></li>
                                    <li><a data-scroll href="#contact">Students</a></li>
                                    <li><a  href="./edit-college.php">Settings</a></li>
                                    <li><a href="./authentication.php?logout=1" style="color: white !important;"><span style="background: red; padding: 10px; border-radius: 5px;">LOG OUT</span></a></li>

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
    <section class="parallax-bg" style="background-image:url(../img/slider/s3.jpg)" data-stellar-background-ratio="0.5">
        <!-- Section Title -->
        <div class="js-height-full container">
            <div class="intro-content white-color text-center vertical-section">
                <div class="vertical-content ">
                    <h4 class="wow fadeInDown " data-wow-duration="1s" data-wow-delay="0.8s">Welcome Back</h4>
                    <h1 class="wow zoomIn m-bottom-20" data-wow-duration="1s" data-wow-delay="0.6s"><?php echo $college['name']?></h1>
                </div>
            </div>
            <!-- Scroll Down -->
            <div class="scroll-next">
                <a data-scroll href="#about" class="scroll-down"><i class="fa fa-angle-down scroll-down-icon"></i></a>
            </div>
            <!-- End Scroll Down -->
        </div>
    </section>
    <!-- End Intro -->


    <!-- Start About -->
    <section id="about" class="light-bg p-top-80 p-bottom-40">
        <div class="container">
            <div class="row">

                <div class="col-md-6 m-bottom-30">
                    <img src="..<?php echo $college['profile_photo'];?>" style="object-fit: contain; border-radius: 10px; aspect-ratio: 4/3;" alt="About Image" class="img-responsive wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0.6s" />
                </div> <!-- /.col -->

                <div class="col-md-6">
                    <!-- Section Title -->
                    <div class="m-bottom-30">
                        <h2 class="wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.6s">About</h2>
                        <div class="divider-small wow zoomIn" data-wow-duration="1s" data-wow-delay="0.7s"></div>
                    </div>
                    <div class="wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.6s">
                        <p><?php echo $college['about_us']?></p>
                    </div>
                    <a data-scroll href="#contact" class="m-top-30 btn btn-main btn-theme wow fadeInUp" data-wow-delay="0.7s">View Students</a>
                </div> <!-- /.col -->

            </div> <!-- /.row -->
        </div> <!-- /.container -->
    </section>
    <!-- End About -->


    <section id="contact" class="dark-bg p-top-80 p-bottom-80">
        <div class="container ">
            <div class="section-title text-center m-bottom-30">
                <h2 class="white-color wow fadeInDown" data-wow-duration="1s" data-wow-delay="0.6s">Students</h2>
                <div class="divider-center-small divider-white wow zoomIn" data-wow-duration="1s" data-wow-delay="0.6s"></div>
                <p class="section-subtitle wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.6s"><em>VERIFY STUDENTS OF <?php echo $college['name']?> .</em></p>
            </div>
            <div style="background: white; height: 75vh; border-radius: 10px;">
                <iframe src="./verify-students.php?id=<?php echo $college['id']?>" frameborder="0" style="width: 100%; height: 100%; border-radius: 10px;"></iframe>
            </div>
        </div>
    </section>

    <!-- Start Footer -->
    <footer class="site-footer">
        <div class="container">
        <small class="copyright pull-left">Copyrights © 2021 All Rights Reserved By <a
                        href="/" target="_blank">HIRERIGHT</a>.</small>            <div class="social-icon pull-right">
                <a href="#"><i class="fa fa-facebook"></i></a>
                <a href="#"><i class="fa fa-twitter"></i></a>
                <a href="#"><i class="fa fa-pinterest"></i></a>
                <a href="#"><i class="fa fa-google"></i></a>
                <a href="#"><i class="fa fa-rss"></i></a>
                <a href="#"><i class="fa fa-globe"></i></a>
            </div>
            <!-- /social-icon -->
        </div>
        <!-- /container -->
    </footer>
    <!-- End Footer -->


    <!-- Back to top -->
    <a href="#" id="back-to-top" title="Back to top"><i class="fa fa-angle-up"></i></a>
    <!-- /Back to top -->


    <!-- jQuery -->
    <script src="../js/jquery.min.js"></script>

    <!-- Bootstrap -->
    <script src="../bootstrap/js/bootstrap.min.js"></script>

    <!-- Components Plugin -->
    <script src="../js/jquery.easing.1.3.js"></script>
    <script src="../js/smooth-scroll.js"></script>
    <script src="../js/jquery.appear.js"></script>
    <script src="../js/jquery.countTo.js"></script>
    <script src="../js/jquery.stellar.min.js"></script>
    <script src="../js/jquery.magnific-popup.min.js"></script>
    <script src="../js/imagesloaded.pkgd.min.js"></script>
    <script src="../js/isotope.pkgd.min.js"></script>
    <script src="../js/jquery.mb.YTPlayer.js"></script>
    <script src="../js/retina.min.js"></script>
    <script src="../js/wow.min.js"></script>
    <script src="../inc/owlcarousel/js/owl.carousel.min.js"></script>
    <script src="../inc/revolution/js/jquery.themepunch.tools.min.js"></script>
    <script src="../inc/revolution/js/jquery.themepunch.revolution.min.js"></script>

    <!-- Contact Form -->
    <script src="../js/contact.js"></script>

    <!-- Custom Plugin -->
    <script src="../js/custom.js"></script>

    <!-- RS Plugin Extensions -->
    <script src="../inc/revolution/js/extensions/revolution.extension.video.min.js"></script>
    <script src="../inc/revolution/js/extensions/revolution.extension.carousel.min.js"></script>
    <script src="../inc/revolution/js/extensions/revolution.extension.slideanims.min.js"></script>
    <script src="../inc/revolution/js/extensions/revolution.extension.actions.min.js"></script>
    <script src="../inc/revolution/js/extensions/revolution.extension.layeranimation.min.js"></script>
    <script src="../inc/revolution/js/extensions/revolution.extension.kenburn.min.js"></script>
    <script src="../inc/revolution/js/extensions/revolution.extension.navigation.min.js"></script>
    <script src="../inc/revolution/js/extensions/revolution.extension.migration.min.js"></script>
    <script src="../inc/revolution/js/extensions/revolution.extension.parallax.min.js"></script>


    <script>
        var tpj = jQuery;

        var revapi280;
        tpj(document).ready(function() {
            if (tpj("#rev_slider_280_1").revolution == undefined) {
                revslider_showDoubleJqueryError("#rev_slider_280_1");
            } else {
                revapi280 = tpj("#rev_slider_280_1").show().revolution({
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