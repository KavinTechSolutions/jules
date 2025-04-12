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

<body class="main header-fixed p-about counter-scroll">
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

        <section class="page-title" style="background: url(assets/images/banner/about-us-banner.jpg);">
            <div class="container">
                <div class="row">
                    <div class="col-12">

                        <div class="page-title-main">
                            <h2 class="title">about us</h2>

                            <ul class="breacrumd">
                                <li><a href="index.html">home </a></li>
                                <li>/</li>
                                <li>about us</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="chef-restaurant">
            <img class="item-right" src="assets/images/about/about_corner/image1.png" alt="" data-aos-duration="1000" data-aos="fade-left">
            <img class="item-left" src="assets/images/about/about_corner/image2.png" alt="" data-aos-duration="1000" data-aos="fade-right">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="menu-content">
                            <div class="block-text center">
                                <p class="subtitle" data-aos-duration="1000" data-aos="fade-up">About Restaurant</p>
                                <h3 class="title" data-aos-duration="1000" data-aos="fade-up">Enjoy An Exceptional <br />
                                    Journey of Taste</h3>
                                <p class="text" data-aos-duration="1000" data-aos="fade-up">Our buzzy food-hall style concept is inspired by international dining
                                    styles, especially in Asia. Explore the following fast-action food stations as busy
                                    chefs perform.

                                </p>
                                <p data-aos-duration="1000" data-aos="fade-up">Enjoy a verdant Garden to Glass experience. It’s in the view, it’s reflected in the
                                    design, and it infuses many drinks. In fact, all our delicious fresh ingredients are
                                    sustainably picked from our Jemima’s Kitchen Garden. Our flourishing range of
                                    cocktails, spirits, beers and wines are all made with integrity and offer something
                                    for every guest.</p>
                                <a href="menu_list.html" class="tf-button style3">
                                    book a table
                                </a>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <div class="container-fluid">

            </div>
        </section>

        <section class="chef-img">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="list-img">
                            <div class="swiper imagesSwiper">
                                <div class="swiper-wrapper">
                                    
                                    <div class="swiper-slide">
                                        <img src="assets/images/about/about_center/image2.jpg" alt="">
                                    </div>
                                    <div class="swiper-slide">
                                        <img src="assets/images/about/about_center/image1.jpg" alt="">
                                    </div>
                                    <div class="swiper-slide">
                                        <img src="assets/images/about/about_center/image3.jpg" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="s-services">
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <div class="services-box" data-aos-duration="1000" data-aos="fade-up">
                            <div class="icon">
                                <img src="assets/images/icon/services-01.png" alt="">
                            </div>
                            <div class="content">
                                <a href="#" class="title h5">food is always fresh </a>
                                <p>The food we choose is always fresh and carefully checked before processing, Mauris et
                                    justo eros. </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="services-box" data-aos-duration="1000" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="100">
                            <div class="icon">
                                <img src="assets/images/icon/services-02.png" alt="">
                            </div>
                            <div class="content">
                                <a href="#" class="title h5">Luxury space & music </a>
                                <p>What's better than enjoying delicious food and music at the same time, Mauris et
                                    justo eros. Quisque consequat.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="services-box" data-aos-duration="1000" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200">
                            <div class="icon">
                                <img src="assets/images/icon/services-03.png" alt="">
                            </div>
                            <div class="content">
                                <a href="#" class="title h5">Diverse food menu </a>
                                <p>The food at the restaurant is delicious and varied, Suspendisse dapibus velit sit
                                    amet tortor aliquet accumsan. </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <div class="s-couter">
            <div class="container">
                <div class="row">
                    <div class="couter-content">
                        <div class="couter-box counter">
                            <div class="number-content">
                                <span class="count-number" data-to="240" data-speed="2000"
                                    data-inviewport="yes">240</span>
                            </div>
                            <p class="text">Clients Every Day</p>
                        </div>
                        <div class="couter-box counter">
                            <div class="number-content">
                                <span class="count-number" data-to="180" data-speed="2000"
                                    data-inviewport="yes">180</span>
                            </div>
                            <p class="text">Great Moments</p>
                        </div>
                        <div class="couter-box counter">
                            <div class="number-content">
                                <span class="count-number" data-to="05" data-speed="2000"
                                    data-inviewport="yes">05</span>
                            </div>
                            <p class="text"> prestigious award </p>
                        </div>
                        <div class="couter-box counter">
                            <div class="number-content">
                                <span class="count-number" data-to="23" data-speed="2000"
                                    data-inviewport="yes">23</span>
                            </div>
                            <p class="text">year of operation </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <section class="event">
			<div class="container-fluid">
				<div class="row">
					<div class="col-12">
						<div class="event-main">
							<div class="event-img">
								<img src="assets/images/section/event4.jpg" alt="Private Dining at Brochette Restaurant">
							</div>
							<div class="event-content">
								<div class="block-text center style-2">
									<p class="subtitle" data-aos-duration="1000" data-aos="fade-up">Private Dining & Celebrations</p>
									<h3 class="title" data-aos-duration="1000" data-aos="fade-up">
										A Perfect Spot <br /> For Your Special Moments
									</h3>

									<div class="flat-tabs" data-aos-duration="1000" data-aos="fade-up">
										<ul class="menu-tab">
											<li class="active">
												<h5>Private Gatherings</h5>
											</li>
											<li>
												<h5>Weddings</h5>
											</li>
											<li>
												<h5>Birthdays</h5>
											</li>
										</ul>
										<div class="content-tab">
											<!-- Private Gatherings -->
											<div class="content-inner">
												<div class="container_inner">
													<p>
														Host an intimate dinner, corporate meeting, or casual get-together in one of our cozy and elegant private dining rooms. Our restaurant offers the perfect ambiance, delicious menus, and personalized service to make your event unforgettable.
													</p>
													<a href="#" class="tf-button style1">Book Your Event</a>
												</div>
											</div>

											<!-- Weddings -->
											<div class="content-inner">
												<div class="container_inner">
													<p>
														Make your big day truly magical with a romantic dining setup at Brochette Restaurant. From elegant décor to custom menus, we’ll work with you to create a wedding celebration that reflects your love story — all in an intimate and stylish setting.
													</p>
													<a href="#" class="tf-button style1">Plan Your Wedding</a>
												</div>
											</div>

											<!-- Birthdays -->
											<div class="content-inner">
												<div class="container_inner">
													<p>
														Celebrate your birthday in style! Whether it's a cozy dinner with close friends or a lively party with your favorite dishes, our team is here to help make your celebration joyful, delicious, and stress-free.
													</p>
													<a href="#" class="tf-button style1">Celebrate With Us</a>
												</div>
											</div>
										</div> <!-- .content-tab -->
									</div> <!-- .flat-tabs -->
								</div> <!-- .block-text -->
							</div> <!-- .event-content -->
						</div> <!-- .event-main -->
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