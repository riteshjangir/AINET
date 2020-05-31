<?php
 $API_KEY= 'AIzaSyBvG7xUocyTB69J78O5LbpjkxrRxw_UVuk';
 $channelID ='UCvbmNPwEyeF5gj5vx_Ttimw';
 $maxResults=10;   
?>
<!DOCTYPE html>
<html lang="en">

<!-- Basic -->
<meta charset="utf-8">
<meta https-equiv="X-UA-Compatible" content="IE=edge">

<!-- Mobile Metas -->
<meta name="viewport" content="width=device-width, initial-scale=1">

<!-- Site Metas -->
<title>AINET - All India Network Of English Teachers</title>
<meta name="keywords" content="">
<meta name="description" content="">
<meta name="author" content="">

<!-- Site Icons -->
<link rel="shortcut icon" href="images/AINET logo fb.png" type="image/x-icon" />
<link rel="apple-touch-icon" href="images/apple-touch-icon.png">

<!-- Bootstrap CSS -->
<link rel="stylesheet" href="css/bootstrap.min.css">
<!-- Site CSS -->
<link rel="stylesheet" href="css/style.css">
<!-- ALL VERSION CSS -->
<link rel="stylesheet" href="css/versions.css">
<!-- Responsive CSS -->
<link rel="stylesheet" href="css/responsive.css">
<!-- Custom CSS -->
<link rel="stylesheet" href="css/custom.css">

<!-- Modernizer for Portfolio -->
<script src="js/modernizer.js"></script>

<link rel="stylesheet" href="css/w3.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">

<style>
    .nav-item a {
        font-size: 14px !important;
    }
</style>


<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body class="host_version">

    <!-- LOADER -->
    <div id="preloader">
        <div class="loader-container">
            <div class="progress-br float shadow">
                <div class="progress__item"></div>
            </div>
        </div>
    </div>
    <!-- END LOADER -->

    <!-- Start header -->
    <header class="top-navbar">
        <nav class="navbar navbar-expand-lg navbar-light bg-light" style="background: white !important">
            <div class="container-fluid">
                <a class="navbar-brand" href="/">
                    <img src="images/logo12.png" alt="" />
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbars-host"
                    aria-controls="navbars-rs-food" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbars-host">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item active"><a class="nav-link w3-text-orange" href="/">Home</a></li>
                        <li class="nav-item"><a class="nav-link w3-text-orange" href="/about">FAQs </a></li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle w3-text-orange" href="#" id="dropdown-b"
                                data-toggle="dropdown">Annoucements</a>
                            <div class="dropdown-menu" aria-labelledby="dropdown-a">
                                <!-- <a class="dropdown-item" href="#">Publications </a> -->
                                <a class="dropdown-item" href="/ann">5th AINET International Conference 2020</a>

                            </div>
                        </li>


                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle w3-text-orange" href="#" id="dropdown-a"
                                data-toggle="dropdown">Publications </a>
                            <div class="dropdown-menu" aria-labelledby="dropdown-a">
                                <!-- <a class="dropdown-item" href="#">Publications </a> -->
                                <a class="dropdown-item" href="/publicationone">AINET Occational Papers </a>
                                <a class="dropdown-item" href="/publicationtwo">AINET CPD Posters </a>

                            </div>
                        </li>
                        <li class="nav-item"><a class="nav-link w3-text-orange" href="/resources">Resources</a></li>
                        <li class="nav-item"><a class="nav-link w3-text-orange" href="/conference">AINET Conferences</a>
                        </li>
						 <li class="nav-item"><a class="nav-link w3-text-orange" href="/about1">About Us</a></li>

                        <li class="nav-item"><a class="nav-link w3-text-orange" href="/contact">Contact</a></li>
                    </ul>
                    <ul class="nav navbar-nav navbar-right">
                        <li><a class="btn btn-lg w3-orange" href="#"><span>Membership</span></a></li>

                        <!-- 
                                <li><a class="hover-btn-new log orange" href="form.html" data-toggle="" data-target=""><span>Membership </span></a></li> -->
                    </ul>

                </div>
            </div>
        </nav>
    </header>
    <!-- End header -->


    @yield('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1 class="text-center mt-5 w3-text-orange"><b>Get Networked, Follow AINET</b></h1>
            </div>
            <div class="col-md-4 w3-card-2 w3-margin">
                <a class="twitter-timeline" data-height="600"
                    href="https://twitter.com/ainetindia?ref_src=twsrc%5Etfw">Tweets by ainetindia</a>
                <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
            </div>
            <div class="col-md-4 w3-padding w3-card-2 w3-margin">
                <iframe
                    src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2Fainetindia%2F&tabs=timeline&width=340&height=600&small_header=true&adapt_container_width=true&hide_cover=false&show_facepile=true&appId"
                    width="340" height="600" style="border:none;overflow:hidden" scrolling="no" frameborder="0"
                    allowTransparency="true" allow="encrypted-media"></iframe>
            </div>
		

        </div>
    </div>
    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-4 col-xs-12">
                    <div class="widget clearfix">
                        {{-- <div class="widget-title">
                            <h3>About US</h3>
                        </div>
                        <p> AINET is an online pan-India community of people interested in the teaching and learning of
                            English in India – teachers, trainers, teacher educators, publishers, policy makers,
                            educational authorities, researchers, students, private tutors and free-lancers. We welcome
                            anyone who wishes to promote the growth of the teachers and learners of English, including
                            their own, to be a part of this community. AINET is an associate of the International
                            Association of Teachers of English as a Foreign Language (IATEFL), UK. AINET evolved out of
                            a Hornby Alumni Project undertaken by Dr. Amol Padwad (amolpadwad@gmail.com) and Krishna
                            Dixit (krishnakdixit@gmail.com).</p>
                        <div class="footer-right">
                            <ul class="footer-links-soi">
                                <li><a href="https://www.facebook.com/ainetindia/"><i class="fa fa-facebook"></i></a>
                                </li>
                                <!-- <li><a href="#"><i class="fa fa-github"></i></a></li> -->
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-youtube"></i></a></li>
                                <!-- <li><a href="#"><i class="fa fa-pinterest"></i></a></li> -->
                            </ul><!-- end links -->
                        </div> --}}
                    </div><!-- end clearfix -->
                </div><!-- end col -->


                <div class="col-lg-4 col-md-4 col-xs-12">
                    <div class="widget clearfix">
                        <div class="widget-title">
                            <h3>Information Link</h3>
                        </div>
                        <ul class="footer-links">
                            <li><a href="https://www.theainet.net/">Home</a></li>
                            <li><a href="/ann">Announcement</a></li>
                            <li><a href="/publicationone">Publications</a></li>
                            <li><a href="/resources">Resources</a></li>
                            <li><a href="/conference">AINET Conferences</a></li>

                            <li><a href="/about">FAQs</a></li>
                            <li><a href="/contact">Contact</a></li>
                        </ul><!-- end links -->
                    </div><!-- end clearfix -->
                </div><!-- end col -->


                <div class="col-lg-4 col-md-4 col-xs-12">
                    <div class="widget clearfix">
                        <div class="widget-title">
                            <h3></h3>
                        </div>

                        <ul class="footer-links">
                            <li><a href="#"></a></li>
                            <li><a href="#"></a></li>
                            <!-- 
                                    <li><a href="#">www.yoursite.com</a></li>
                                    <li>PO Box 16122 Collins Street West Victoria 8007 Australia</li>
                                    <li>+61 3 8376 6284</li> -->
                        </ul><!-- end links -->
                    </div><!-- end clearfix -->
                </div><!-- end col -->

            </div><!-- end row -->
        </div><!-- end container -->
    </footer><!-- end footer -->


    </div>



    <div class="copyrights">
        <div class="container">
            <div class="footer-distributed">
                <div class="footer-center">
                    <p class="footer-company-name">All Rights Reserved. &copy; 2019 <a
                            href="https://www.google.com/search?sxsrf=ACYBGNSSyrWhA-SBkUJ4YnnV-J4i_TfdCA%3A1567958174285&source=hp&ei=niR1XbCcD4rSvAScwaX4BQ&q=prowiggle+data+solutions+pvt.ltd&oq=prowiggle&gs_l=psy-ab.3.1.35i39j0.3770.11518..13623...0.0..0.377.2395.0j3j5j2......0....1..gws-wiz.....10..35i362i39j0i131j0i10._JsoRd3mUJ0">ProWiggle
                            Pvt.Ltd.</a>
                </div>
            </div>
        </div><!-- end container -->
    </div><!-- end copyrights -->

    <a href="#" id="scroll-to-top" class="dmtop global-radius"><i class="fa fa-angle-up"></i></a>

    <!-- ALL JS FILES -->
    <script src="js/all.js"></script>
    <!-- ALL PLUGINS -->
    <script src="js/custom.js"></script>
    <script src="js/timeline.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>

    <script>
        timeline(document.querySelectorAll('.timeline'), {
            forceVerticalMode: 700,
            mode: 'horizontal',
            verticalStartPosition: 'left',
            visibleItems: 4
        });
    </script>
    @hasSection ('jscode')
        @yield('jscode')
    @endif
</body>

</html>
