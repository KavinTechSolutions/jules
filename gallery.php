<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jules - Restaurant</title>
    <link rel="stylesheet" href="app/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="app/swiper/swiper-bundle.min.css">
    <link rel="stylesheet" href="app/dist/app.css">
    <link rel="stylesheet" href="assets/fontawesome-free-6.4.2-web/css/all.min.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <!-- Favicon and Touch Icons  -->
    <link rel="shortcut icon" href="assets/images/favicon.png">
    <link rel="apple-touch-icon-precomposed" href="assets/images/favicon.png">
    <script src="https://code.highcharts.com/highcharts.js"></script>
</head>

<body class="main header-fixed page-gallery ">
    <!-- preloade -->
    <div class="preloader">
        <div class="clear-loading loading-effect-2">
            <span></span>
        </div>
    </div>
    <!-- /preload -->
    <div id="wrapper">

        <!-- Top bar -->
        <?php include('include/top_bar.php');?>
        <!-- end Top bar -->
        <!-- Header -->
        <?php include('include/header.php');?>
        <!-- end Header -->

        <section class="page-title p-gallery">
            <div class="container">
                <div class="row">
                    <div class="col-12">

                        <div class="page-title-main">
                            <h2 class="title">gallery</h2>

                            <ul class="breacrumd">
                                <li><a href="index.php">home </a></li>
                                <li>/</li>
                                <li>gallery</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="s-gallery">
            <div class="container">
                <div class="row">
                    <div class="col-12">


                        <div class="gallery-main">
                            <div class="gallery-box">
                                <img src="assets/images/section/gallery-5.jpg" alt="">
                                <div class="content">
                                    <a href="#" class="ig"><i class="fa-brands fa-instagram"></i></a>
                                </div>
                            </div>
                            <div class="gallery-box">
                                <img src="assets/images/section/gallery-9.jpg" alt="">
                                <div class="content">
                                    <a href="#" class="ig"><i class="fa-brands fa-instagram"></i></a>
                                </div>
                            </div>
                            <div class="gallery-box">
                                <img src="assets/images/section/gallery-10.jpg" alt="">
                                <div class="content">
                                    <a href="#" class="ig"><i class="fa-brands fa-instagram"></i></a>
                                </div>
                            </div>
                            <div class="gallery-box">
                                <img src="assets/images/section/gallery-11.jpg" alt="">
                                <div class="content">
                                    <a href="#" class="ig"><i class="fa-brands fa-instagram"></i></a>
                                </div>
                            </div>

                            <div class="gallery-box">
                                <img src="assets/images/section/gallery-12.jpg" alt="">
                                <div class="content">
                                    <a href="#" class="ig"><i class="fa-brands fa-instagram"></i></a>
                                </div>
                            </div>
                            <div class="gallery-box">
                                <img src="assets/images/section/gallery-13.jpg" alt="">
                                <div class="content">
                                    <a href="#" class="ig"><i class="fa-brands fa-instagram"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>



         <?php include('include/footer.php');?>



    </div>
    <a id="scroll-top"></a>
    <script src="app/js/jquery.min.js"></script>
    <script src="app/js/swiper-bundle.min.js"></script>
    <script src="app/js/swiper.js"></script>
    <script src="app/js/app.js"></script>
    <script src="app/js/jquery.easing.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="app/js/parallax.js"></script>
    <script src="app/js/jquery.magnific-popup.min.js"></script>
    <script src="app/js/bootstrap.min.js"></script>

    <script src="app/js/count-down.js"></script>
    <script src="app/js/countto.js"></script>

</body>

</html>