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
   
</head>

<body class="main header-fixed p-contact p-menu home-3 ">
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

        <section class="page-title">
            <div class="container">
                <div class="row">
                    <div class="col-12">

                        <div class="page-title-main">
                            <h2 class="title">menu list </h2>

                            <ul class="breacrumd">
                                <li><a href="index.php">home </a></li>
                                <li>/</li>
                                <li>menu list </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>


		<section class="s-menu p-list">
		  <div class="container">
			<div class="row">
			  <!-- Tab Navigation -->
			  <ul class="allmenu-filtering">
				<li class="all_items active" data-filter="*">ALL CATEGORIES</li>
				<li class="all_items" data-filter=".dinein">DINE IN MENU</li>
				<li class="all_items" data-filter=".starters">STARTERS</li>
			  </ul>

			  <!-- Tab Content -->
			  <div class="tab-content" style="margin-top: 30px;">

				<!-- DINE IN MENU -->
				<div class="tab-pane dinein" id="dinein">
				  <div class="menu-content">
					<div class="block-text center">
					  <h3 class="title" data-aos-duration="1000" data-aos="fade-up">DINE IN MENU</h3>
					</div>
					<div class="menu-main">
					  <ul class="menu-list">
						<li data-aos="fade-up" data-aos-duration="1000" data-aos-delay="100">
						  <h5 class="name"><span class="txt">Omelette</span><span class="price">$15.90</span></h5>
						  <p>Emmental cheese, lardon and toast</p>
						</li>
						<li data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200">
						  <h5 class="name"><span class="txt">French Toast (VG) (Pain Perdu)</span><span class="price">$17.90</span></h5>
						  <p>French toast, fresh berries and Honey</p>
						</li>
						<li data-aos="fade-up" data-aos-duration="1000" data-aos-delay="300">
						  <h5 class="name"><span class="txt">Salmon Bènèdict</span><span class="price">$17.90</span></h5>
						  <p>Smoked salmon royale, poached eggs, tamato, hollandaise and sourdough</p>
						</li>
						<li data-aos="fade-up" data-aos-duration="1000" data-aos-delay="400">
						  <h5 class="name"><span class="txt">Egg Bènèdict</span><span class="price">$17.90</span></h5>
						  <p>Eggs benedict, bayonne ham, poached eggs, tamato, hollandaise and sourdough</p>
						</li>
					  </ul>

					  <ul class="menu-list pl-30">
						<li data-aos="fade-up" data-aos-duration="1000" data-aos-delay="500">
						  <h5 class="name"><span class="txt">Egg Benedict Mushrooms (VG) (Portobello Bentoit)</span><span class="price">$19.90</span></h5>
						  <p>Portobello benedict, wilted spinach, tamato, poached eggs & hollandaise</p>
						</li>
						<li data-aos="fade-up" data-aos-duration="1000" data-aos-delay="600">
						  <h5 class="name"><span class="txt">Breakfast Platter (Jules Petit Dejeuner)</span><span class="price">$24.90</span></h5>
						  <p>Choice style of egg: sunny side up, over easy, scramble or poached egg, toulouse sauage, mushroom, lardon “bacon”, white bean stew and toast</p>
						</li>
						<li data-aos="fade-up" data-aos-duration="1000" data-aos-delay="700">
						  <h5 class="name"><span class="txt">Egg Platter</span><span class="price">$22.90</span></h5>
						  <p>Choice style of egg: sunny side up, over easy, scramble or poached egg, spinach, mushroom, cauliflower, white bean stew and toast</p>
						</li>
					  </ul>
					</div>
				  </div>
				</div>

				<!-- STARTERS -->
				<div class="tab-pane starters" id="starters">
                <div class="menu-container">
                                <h1 class="menu-title text-center">DRINK MENU</h1>

                                <!-- Desktop View -->
                                <div class="container desktop-view">
                                    <div class="row">
                                        <!-- Combined Column: Menu Items and Prices -->
                                        <div class="col-6">
                                            <div class="menu-items">
                                                <!-- Price Headings -->
                                                <div class="price-heading">
                                                    <div class="item-column">
                                                        <span class="heading-column">Item</span>
                                                    </div>
                                                    <div class="price-columns">
                                                        <span class="heading-column">Single</span>
                                                        <span class="heading-column">Double</span>
                                                        <span class="heading-column">Bottle</span>
                                                    </div>
                                                </div>

                                                <!-- Menu Item 1 -->
                                                <div class="menu-item">
                                                    <p class="item-name">BALLENTINE'S FINEST</p>
                                                    <div class="price-row">
                                                        <span class="price-des">$12.00</span>
                                                        <span class="price-des">$20.00</span>
                                                        <span class="price-des">$14.00</span>
                                                    </div>
                                                </div>

                                                <!-- Menu Item 2 -->
                                                <div class="menu-item">
                                                    <p class="item-name">CHIVAS REGAL 12 YRS</p>
                                                    <div class="price-row">
                                                        <span class="price-des">$14.00</span>
                                                        <span class="price-des">$26.00</span>
                                                        <span class="price-des">$140.00</span>
                                                    </div>
                                                </div>

                                                <!-- Menu Item 3 -->
                                                <div class="menu-item">
                                                    <p class="item-name">CHIVAS REGAL 18 YRS</p>
                                                    <div class="price-row">
                                                        <span class="price-des">$18.00</span>
                                                        <span class="price-des">$32.00</span>
                                                        <span class="price-des">$220.00</span>
                                                    </div>
                                                </div>

                                                <!-- Menu Item 4 -->
                                                <div class="menu-item">
                                                    <p class="item-name">MONKEY SHOULDER</p>
                                                    <div class="price-row">
                                                        <span class="price-des">$14.00</span>
                                                        <span class="price-des">$26.00</span>
                                                        <span class="price-des">$140.00</span>
                                                    </div>
                                                </div>

                                                <!-- Menu Item 5 -->
                                                <div class="menu-item">
                                                    <p class="item-name">JW BLACK LABEL 12 YRS</p>
                                                    <div class="price-row">
                                                        <span class="price-des">$14.00</span>
                                                        <span class="price-des">$26.00</span>
                                                        <span class="price-des">$140.00</span>
                                                    </div>
                                                </div>

                                                <!-- Menu Item 6 -->
                                                <div class="menu-item">
                                                    <p class="item-name">JW RED LABEL</p>
                                                    <div class="price-row">
                                                        <span class="price-des">$12.00</span>
                                                        <span class="price-des">$20.00</span>
                                                        <span class="price-des">$110.00</span>
                                                    </div>
                                                </div>

                                                <!-- Menu Item 7 -->
                                                <div class="menu-item">
                                                    <p class="item-name">JW DOUBLE BLACK LABEL</p>
                                                    <div class="price-row">
                                                        <span class="price-des">$15.00</span>
                                                        <span class="price-des">$28.00</span>
                                                        <span class="price-des">$180.00</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Mobile View -->
                                <div class="container mobile-view">
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="menu-item">
                                                <p class="item-name">BALLENTINE'S FINEST</p>
                                                <div class="price-row">
                                                    <span class="price-drink">Single: $12.00</span>
                                                    <span class="price-drink">Double: $20.00</span>
                                                    <span class="price-drink">Bottle: $14.00</span>
                                                </div>
                                            </div>
                                            <div class="menu-item">
                                                <p class="item-name">CHIVAS REGAL 12 YRS</p>
                                                <div class="price-row">
                                                    <span class="price-drink">Single: $14.00</span>
                                                    <span class="price-drink">Double: $26.00</span>
                                                    <span class="price-drink">Bottle: $140.00</span>
                                                </div>
                                            </div>
                                            <div class="menu-item">
                                                <p class="item-name">CHIVAS REGAL 18 YRS</p>
                                                <div class="price-row">
                                                    <span class="price-drink">Single: $18.00</span>
                                                    <span class="price-drink">Double: $32.00</span>
                                                    <span class="price-drink">Bottle: $220.00</span>
                                                </div>
                                            </div>
                                            <div class="menu-item">
                                                <p class="item-name">MONKEY SHOULDER</p>
                                                <div class="price-row">
                                                    <span class="price-drink">Single: $14.00</span>
                                                    <span class="price-drink">Double: $26.00</span>
                                                    <span class="price-drink">Bottle: $140.00</span>
                                                </div>
                                            </div>
                                            <div class="menu-item">
                                                <p class="item-name">JW BLACK LABEL 12 YRS</p>
                                                <div class="price-row">
                                                    <span class="price-drink">Single: $14.00</span>
                                                    <span class="price-drink">Double: $26.00</span>
                                                    <span class="price-drink">Bottle: $140.00</span>
                                                </div>
                                            </div>
                                            <div class="menu-item">
                                                <p class="item-name">JW RED LABEL</p>
                                                <div class="price-row">
                                                    <span class="price-drink">Single: $12.00</span>
                                                    <span class="price-drink">Double: $20.00</span>
                                                    <span class="price-drink">Bottle: $110.00</span>
                                                </div>
                                            </div>
                                            <div class="menu-item">
                                                <p class="item-name">JW DOUBLE BLACK LABEL</p>
                                                <div class="price-row">
                                                    <span class="price-drink">Single: $15.00</span>
                                                    <span class="price-drink">Double: $28.00</span>
                                                    <span class="price-drink">Bottle: $180.00</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

			  </div> <!-- tab-content -->
			</div> <!-- row -->
		  </div> <!-- container -->
		</section>

        
        <?php include("include/footer.php");?>



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
	<script>
	  $(document).ready(function() {
		// Show all by default
		$(".tab-pane").show();

		$(".all_items").on("click", function() {
		  var filterValue = $(this).data("filter");

		  $(".all_items").removeClass("active");
		  $(this).addClass("active");

		  if (filterValue === "*") {
			$(".tab-pane").fadeIn();
		  } else {
			$(".tab-pane").hide();
			$(filterValue).fadeIn();
		  }
		});
	  });
	</script>

</body>

</html>