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

<body class="main header-fixed ">
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

        <section class="page-title p-blog-full">
            <div class="container">
                <div class="row">
                    <div class="col-12">

                        <div class="page-title-main">
                            <h2 class="title">blog list</h2>

                            <ul class="breacrumd">
                                <li><a href="index.php">home </a></li>
                                <li>/</li>
                                <li>blog list</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="s-blog blog-list">
			<div class="container">
				<div class="row">
					<div class="col-12">
						<div class="blog-form">
							<div class="block-text center">
								<p class="subtitle" data-aos-duration="1000" data-aos="fade-up">Delight your taste buds</p>
								<h3 class="title" data-aos-duration="1000" data-aos="fade-up">Get the latest recipes and food stories</h3>
								<p class="text" data-aos-duration="1000" data-aos="fade-up">
									Join our foodie family to receive freshly cooked updates on delicious dishes, seasonal menus, 
									and chef specials. Stay informed and inspired by our latest culinary creations.
								</p>
								<form class="s1" data-aos-duration="1000" data-aos="fade-up">
									<div class="form-group">
										<input type="email" class="form-control" placeholder="Your Email *">
									</div>
									<button type="submit" class="btn btn-primary"><i class="fa fa-paper-plane"></i></button>
								</form>
							</div>
						</div>
					</div>
				</div>

				<div class="row blog-main">
					<div class="col-12">
						<div class="block-text center">
							<h3 class="title" data-aos-duration="1000" data-aos="fade-up">Latest from Our Kitchen</h3>
							<p class="text" data-aos-duration="1000" data-aos="fade-up">Fresh stories, tips, and inspirations from the culinary world</p>
						</div>
					</div>

					<!-- Blog Post 1 -->
					<div class="col-xl-4 col-md-6">
						<div class="blog-box" data-aos="fade-up" data-aos-duration="1000">
							<div class="top-content">
								<div class="image">
									<img src="assets/images/section/blog-new-01.jpg" alt="">
								</div>
								<div class="meta">
									<h4>10</h4>
									<p>Apr 25</p>
								</div>
								<a href="blog_single.php" class="h5 title">Top 5 Must-Try Dishes This Spring</a>
							</div>
							<div class="bottom-content">
								<ul>
									<li class="author"><a href="#">by Chef Amelia Rose</a></li>
									<li class="category"><a href="#">Dishes, Seasonal</a></li>
								</ul>
								<div class="line"></div>
								<p class="text">Discover what’s blooming on our menu with these fresh and flavorful meals perfect for springtime cravings.</p>
								<a href="blog_single.php" class="btn-read">read more <i class="fa fa-arrow-right"></i></a>
							</div>
						</div>
					</div>

					<!-- Blog Post 2 -->
					<div class="col-xl-4 col-md-6">
						<div class="blog-box" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="100">
							<div class="top-content">
								<div class="image">
									<img src="assets/images/section/blog-new-02.jpg" alt="">
								</div>
								<div class="meta">
									<h4>22</h4>
									<p>Mar 25</p>
								</div>
								<a href="blog_single.php" class="h5 title">Secrets to a Perfect Pasta Night</a>
							</div>
							<div class="bottom-content">
								<ul>
									<li class="author"><a href="#">by Marco D’Angelo</a></li>
									<li class="category"><a href="#">Tips, Italian</a></li>
								</ul>
								<div class="line"></div>
								<p class="text">Bring Italy to your plate with our top pasta-making secrets straight from our kitchen to yours.</p>
								<a href="blog_single.php" class="btn-read">read more <i class="fa fa-arrow-right"></i></a>
							</div>
						</div>
					</div>

					<!-- Blog Post 3 -->
					<div class="col-xl-4 col-md-6">
						<div class="blog-box" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200">
							<div class="top-content">
								<div class="image">
									<img src="assets/images/section/blog-new-03.jpg" alt="">
								</div>
								<div class="meta">
									<h4>5</h4>
									<p>Feb 25</p>
								</div>
								<a href="blog_single.php" class="h5 title">Crafting the Ultimate Brunch Experience</a>
							</div>
							<div class="bottom-content">
								<ul>
									<li class="author"><a href="#">by Laura Smith</a></li>
									<li class="category"><a href="#">Brunch, Lifestyle</a></li>
								</ul>
								<div class="line"></div>
								<p class="text">We’ve reimagined brunch with bold flavors and beautiful presentation—see how we do it differently!</p>
								<a href="blog_single.php" class="btn-read">read more <i class="fa fa-arrow-right"></i></a>
							</div>
						</div>
					</div>

					<!-- You can continue adding more posts with the same format and change images and text -->
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