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
	<style>
	
	  .review-card {
		background: #fff;
		border-radius: 12px;
		box-shadow: 0 0 15px rgba(0,0,0,0.08);
		padding: 20px;
		height: 100%;
	  }

	  .review-header {
		display: flex;
		align-items: center;
		justify-content: space-between;
	  }

	  .profile-pic {
		width: 50px;
		height: 50px;
		border-radius: 50%;
		object-fit: cover;
	  }

	  .user-info {
		flex: 1;
		margin-left: 10px;
	  }

	  .user-name {
		margin: 0;
		font-size: 16px;
		font-weight: 600;
	  }

	  .stars {
		color: #ffc107;
		font-size: 14px;
	  }

	  .google-info {
		text-align: right;
	  }

	  .google-logo {
		width: 50px;
	  }

	  .review-date {
		font-size: 14px;
		font-weight: 600;
	  }

	  .review-body {
		margin-top: 15px;
		font-size: 14px;
		line-height: 1.5;
		font-family: "DM Sans", serif;
		font-size: 16px;
	  }

	  .quote {
		position: relative;
		padding-left: 15px;
		color: #333;
		text-align: justify;
		font-size: 16px;
		font-family: "DM Sans", serif;
		line-height: 30px;
	  }

	  .quote::before {
		content: "❝";
		position: absolute;
		left: 0;
		top: 0;
		color: #f05a28;
		font-size: 20px;
		text-align: justify;
		font-size: 16px;
  }
  
</style>
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

        <section class="page-title p-blog-full"style="background: url(assets/images/banner/about-us-banner.jpg);">
            <div class="container">
                <div class="row">
                    <div class="col-12">

                        <div class="page-title-main">
                            <h2 class="title">Reviews</h2>

                            <ul class="breacrumd">
                                <li><a href="index.php">home </a></li>
                                <li>/</li>
                                <li>Reviews</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
		
		<section class="s-blog blog-list py-5">
		  <div class="container">
			<div class="row">

			  <!-- Review 1 -->
			  <div class="col-md-6 col-sm-6 col-12 mb-4">
				<div class="review-card">
				  <div class="review-header">
					<img class="profile-pic" src="assets/images/reviews/user4.png" alt="User Image">
					<div class="user-info">
					  <h5 class="user-name">Miki Tang</h5>
						<div class="stars">
						  <i class="fa fa-star"></i>
						  <i class="fa fa-star"></i>
						  <i class="fa fa-star"></i>
						  <i class="fa fa-star"></i>
						  <i class="fa fa-star"></i>
						</div>
					</div>
					<a href="https://maps.app.goo.gl/n7xzb8ScesjgQKL37"><div class="google-info">
					  <img src="assets/images/reviews/google_logo.png" class="google-logo" alt="Google Logo">
					  <div class="review-date">1 months ago</div>
					</div></a>
				  </div>
				  <div class="review-body">
					<p class="quote">Jules French Cuisine delivers authentic French dishes in an elegant setting. With attentive service and classic menu options like escargot and coq au vin, it’s perfect for any special occasion. Food is delicious and we had a good time dining here.</p>
				  </div>
				</div>
			  </div>

			  <!-- Review 2 -->
			  <div class="col-md-6 col-sm-6 col-12 mb-4">
				<div class="review-card">
				  <div class="review-header">
					<img class="profile-pic" src="assets/images/reviews/user5.png" alt="User Image">
					<div class="user-info">
					  <h5 class="user-name">Estine Morris</h5>
					  <div class="stars">
						<div class="stars">
						  <i class="fa fa-star"></i>
						  <i class="fa fa-star"></i>
						  <i class="fa fa-star"></i>
						  <i class="fa fa-star"></i>
						  <i class="fa fa-star"></i>
						</div>
					  </div>
					</div>
					<div class="google-info">
					  <a href="https://maps.app.goo.gl/rFPtxCA256BcXfJp9" ><img src="assets/images/reviews/google_logo.png" class="google-logo" alt="Google Logo">
					  <div class="review-date">2 months ago</div> </a>
					</div>
				  </div>
				  <div class="review-body">
					<p class="quote">OI recently had the pleasure of dining at Jules a brand-new French cuisine gem in Clarke Quay and former French chef from Les Amis. The restaurant had comfortable seating with chilled ambiance by the river.

					I opted for the cheese and meat board. Each cheese perfectly aged, and the meats were rich and flavourful, even the lettuce garnish was fresh plus nicely seasoned.

					The escargot with herbs were a highlight, with the snails tender and bursting with garlicky yummyiness.

					As the weather was hot, I treated myself to a wine cocktail—hmm I did have my reservations at first about the contents but it was indeed a refreshing and innovative concoction that added a cool twist to the evening. Move over Singapore sling?

					Overall, Jules is a must-visit for anyone who appreciates classic French cuisine in a relaxed setting. I’ll definitely be returning soon. In fact I’ve booked for again for an alumni mixer next week.</p>
				  </div>
				</div>
			  </div>

			  <!-- Review 3 -->
			  <div class="col-md-6 col-sm-6 col-12 mb-4">
				<div class="review-card">
				  <div class="review-header">
					<img class="profile-pic" src="assets/images/reviews/user6.png" alt="User Image">
					<div class="user-info">
					  <h5 class="user-name">Angel Elliott</h5>
					  <div class="stars">
						<div class="stars">
						  <i class="fa fa-star"></i>
						  <i class="fa fa-star"></i>
						  <i class="fa fa-star"></i>
						  <i class="fa fa-star"></i>
						  <i class="fa fa-star"></i>
						</div>
					  </div>
					</div>
					<div class="google-info">
					  <a href="https://maps.app.goo.gl/kZT69uQAndK9dTFr7"><img src="assets/images/reviews/google_logo.png" class="google-logo" alt="Google Logo">
					  <div class="review-date">2 months ago</div></a>
					</div>
				  </div>
				  <div class="review-body">
					<p class="quote">A lovely new restaurant next to the water . We had a stunning meal . The meat platter was delicious. Rajesh was our server , he was excellent . Great service . Very friendly and welcoming & excellent wine. The meat was cooked perfectly .</p>
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