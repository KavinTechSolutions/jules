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
	<!--Custom CSS -->
    <link rel="stylesheet" href="assets/css/menu.css" />
	 <!-- Gallery -->
    <link rel="stylesheet" href="assets/css/vendor/remixicon.css">
    <link rel="stylesheet" href="assets/css/vendor/jquery.fancybox.min.css">
    <link rel="stylesheet" href="assets/css/vendor/style.css">
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

        <section class="s-gallery section-gallery padding-tb-100">
		  <div class="container">
			<!-- Tab Navigation -->
			<ul class="allmenu-filtering">
			  <li class="all_items active" data-filter="*">All Categories</li>
			  <li class="all_items" data-filter="food">Food</li>
			  <li class="all_items" data-filter="restaurant">Restaurant</li>
			  <li class="all_items" data-filter="video">Video</li>
			</ul>

			<div class="row mb-minus-24 mt-4">
			  <div class="col-lg-4 col-sm-6 col-12 gallery-item" data-category="food">
				<figure class="rx-gallery-card">
				  <a class="rx-gallery-img" href="assets/images/gallery/image1.jpg" data-fancybox="gallery">
					<img src="assets/images/gallery/image1.jpg" alt="gallery-1">
				  </a>
				</figure>
			  </div>
			  <div class="col-lg-4 col-sm-6 col-12 gallery-item" data-category="food">
				<figure class="rx-gallery-card">
				  <a class="rx-gallery-img" href="assets/images/gallery/image2.jpg" data-fancybox="gallery">
					<img src="assets/images/gallery/image2.jpg" alt="gallery-2">
				  </a>
				</figure>
			  </div>
			   <div class="col-lg-4 col-sm-6 col-12 gallery-item" data-category="food">
				<figure class="rx-gallery-card">
				  <a class="rx-gallery-img" href="assets/images/gallery/image3.jpg" data-fancybox="gallery">
					<img src="assets/images/gallery/image3.jpg" alt="gallery-2">
				  </a>
				</figure>
			  </div>
			   <div class="col-lg-4 col-sm-6 col-12 gallery-item" data-category="food">
				<figure class="rx-gallery-card">
				  <a class="rx-gallery-img" href="assets/images/gallery/image4.jpg" data-fancybox="gallery">
					<img src="assets/images/gallery/image4.jpg" alt="gallery-2">
				  </a>
				</figure>
			  </div>
			   <div class="col-lg-4 col-sm-6 col-12 gallery-item" data-category="food">
				<figure class="rx-gallery-card">
				  <a class="rx-gallery-img" href="assets/images/gallery/image5.jpg" data-fancybox="gallery">
					<img src="assets/images/gallery/image5.jpg" alt="gallery-2">
				  </a>
				</figure>
			  </div>
			   <!--<div class="col-lg-4 col-sm-6 col-12 gallery-item" data-category="food">
				<figure class="rx-gallery-card">
				  <a class="rx-gallery-img" href="assets/images/gallery/image6.jpg" data-fancybox="gallery">
					<img src="assets/images/gallery/image6.jpg" alt="gallery-2">
				  </a>
				</figure>
			  </div>-->
			  <div class="col-lg-4 col-sm-6 col-12 gallery-item" data-category="restaurant">
				<figure class="rx-gallery-card">
				  <a class="rx-gallery-img" href="assets/images/gallery/image2.jpg" data-fancybox="gallery">
					<img src="assets/images/gallery/image2.jpg" alt="gallery-2">
				  </a>
				</figure>
			  </div>
			<div class="col-lg-4 col-sm-6 col-12 gallery-item" data-category="video">
			  <figure class="rx-gallery-card">
				<a
				  class="rx-gallery-img"
				  href="assets/images/gallery/videos/video1.mp4"
				  data-fancybox="gallery"
				  data-type="video"
				>
				  <video width="100%" muted autoplay loop playsinline>
					<source src="assets/images/gallery/videos/video1.mp4" type="video/mp4">
					Your browser does not support the video tag.
				  </video>
				</a>
			  </figure>
			</div>


			  <!-- Add more gallery items as needed -->
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
	<!--Gallery Section--> 
    <script src="assets/js/vendor/jquery-3.7.1.min.js"></script>
    <script src="assets/js/vendor/jquery.fancybox.min.js"></script>
    <script>
	$(document).ready(function () {
	  // Initially show all items
	  $(".gallery-item").show();

	  $(".allmenu-filtering li").click(function () {
		var filter = $(this).data("filter");

		// Set active class
		$(".allmenu-filtering li").removeClass("active");
		$(this).addClass("active");

		if (filter === "*") {
		  $(".gallery-item").fadeIn();
		} else {
		  $(".gallery-item").hide();
		  $('.gallery-item[data-category="' + filter + '"]').fadeIn();
		}
	  });
	});
	</script>


</body>

</html>