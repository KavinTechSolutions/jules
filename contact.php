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

<body class="main p-contact header-fixed">
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
		
        <section class="page-title p-contact">
            <div class="container">
                <div class="row">
                    <div class="col-12">

                        <div class="page-title-main">
                            <h2 class="title">contact us</h2>

                            <ul class="breacrumd">
                                <li><a href="index.php">home </a></li>
                                <li>/</li>
                                <li>contact us</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="s-contact">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="contact-main">
                            <div class="top-map">
									<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3988.806162973085!2d103.84389927581668!3d1.2906077617616436!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31da19a038007c9d%3A0x20e5acd1e8ccf02!2sClarke%20Quay!5e0!3m2!1sen!2sin!4v1744353560646!5m2!1sen!2sin" width="100%" height="533px" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                            </div>

                            <div class="contact-info">
                                <div class="item" data-aos-duration="1000" data-aos="fade-up">
                                    <div class="icon"><i class="fa fa-phone-volume"></i></div>
                                    <h5>Contact Us</h5>
                                    <p><?php echo PHONE_NUMBER; ?></p>
                                    <p><?php echo EMAIL_ADDRESS; ?></p>

                                </div>

                                <div class="item" data-aos-duration="1000" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="100">
                                    <div class="icon"><i class="fa fa-map"></i></div>
                                    <h5>Address here</h5>
                                    <p>Blk D River Valley Rd, #01-05A Clarke Quay, </p>
                                    <p>Singapore - 179023</p>

                                </div>

                                <div class="item" data-aos-duration="1000" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200">
                                    <div class="icon"><i class="fa fa-phone-volume"></i></div>
                                    <h5>open time</h5>
                                    <p>Mon - Fri : 9.00am - 22.00pm </p>
                                    <p>Saturday : 11.00 - 23.00 Sunday : close</p>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="location">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="block-text center">
                            <h3 class="title" data-aos-duration="1000" data-aos="fade-up">just drop a line!</h3>
                            <p class="text" data-aos-duration="1000" data-aos="fade-up">Give us a call or drop by anytime, we endeavour to answer all enquiries
                                within 24 hours on business <br /> days. We will be happy to answer your questions.
                            </p>
                        </div>
                    </div>

                    <div class="col-12">
                        <div class="location-main">
                            <div class="image left" data-aos-duration="1000" data-aos="zoom-in-right">
                                <img src="assets/images/section/contact-01.jpg" alt="">
                            </div>
                            <div class="content">
                                <form id="contactform" method="post" action="./contact/contact-process.php" class="s2">
                                    <div class="form-group">
                                        <input data-aos-duration="1000" data-aos="fade-up" type="text" class="form-control" id="name" name="name" placeholder="Name*">
                                        <input data-aos-duration="1000" data-aos="fade-up" type="text" class="form-control" id="phone" name="phone" placeholder="Phone*">
                                        <input data-aos-duration="1000" data-aos="fade-up" type="email" class="form-control" id="mail" name="mail" placeholder="Email*">
                                        <textarea data-aos-duration="1000" data-aos="fade-up" name="message" id="message" cols="30" rows="10"
                                            placeholder="Message"></textarea>
                                    </div>
                                    <div class="send-wrap">
                                        <button type="submit" class="tf-button style3" data-aos-duration="1000" data-aos="fade-up">send message</button>
                                    </div>
                                </form>
                            </div>
                            <div class="image right" data-aos-duration="1000" data-aos="zoom-in-left">
                                <img src="assets/images/section/contact-02.jpg" alt="">
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
    <script src="app/js/jquery-validate.js"></script>
    <script src="app/js/jquery.easing.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="app/js/parallax.js"></script>
    <script src="app/js/jquery.magnific-popup.min.js"></script>
    <script src="app/js/bootstrap.min.js"></script>

    <script src="app/js/count-down.js"></script>
    <script src="app/js/countto.js"></script>

</body>

</html>