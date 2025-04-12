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
				  <div class="menu-content">
					<div class="block-text center">
					  <h3 class="title" data-aos-duration="1000" data-aos="fade-up">STARTERS</h3>
					</div>
					<div class="menu-main">
					  <ul class="menu-list">
						<li data-aos="fade-up" data-aos-duration="1000" data-aos-delay="100">
						  <h5 class="name"><span class="txt">French Onion Soup (Soupe A L' oignon) (VG)</span><span class="price">$17.90</span></h5>
						  <p>Traditional French soup with caramelized onions, vegetable stock, & croutons topped with melted cheese.</p>
						</li>
						<li data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200">
						  <h5 class="name"><span class="txt">Hummus Salad (Salade De Tomates Et Concombres) (VG)</span><span class="price">$17.90</span></h5>
						  <p>Tomato, cucumber, hummus, parsley, fried chickpeas and extra virgin olive oil</p>
						</li>
						<li data-aos="fade-up" data-aos-duration="1000" data-aos-delay="300">
						  <h5 class="name"><span class="txt">ESCARGOT DE BOURGOGNE (6Pcs)</span><span class="price">$19.90</span></h5>
						  <p>Burgundy snails in garlic herbs butter.</p>
						</li>
						<li data-aos="fade-up" data-aos-duration="1000" data-aos-delay="400">
						  <h5 class="name"><span class="txt">Smoked Salmon Salad (Nicoa de Saumon Fume)</span><span class="price">$21.90</span></h5>
						  <p>Smoked salmon nicoise, potato, green bean, tomato, olive, egg and house dressing</p>
						</li>
					  </ul>

					  <ul class="menu-list pl-30">
						<li data-aos="fade-up" data-aos-duration="1000" data-aos-delay="500">
						  <h5 class="name"><span class="txt">Camembert Cheese (VG) (Camembert Au Four)</span><span class="price">$27.90</span></h5>
						  <p>Baked camembert cheese with garlic and white wine, served with crouton and salad</p>
						</li>
						<li data-aos="fade-up" data-aos-duration="1000" data-aos-delay="600">
						  <h5 class="name"><span class="txt">Octopus Salad (Salade De Cussie Pouple Grille)</span><span class="price">$33.90</span></h5>
						  <p>Grilled octopus leg, parsley and dill salad, potato, orange segment and extra virgin olive oil</p>
						</li>
						<li data-aos="fade-up" data-aos-duration="1000" data-aos-delay="700">
						  <h5 class="name"><span class="txt">Foie Gras (Foie Gras Terrine)</span><span class="price">$35.90</span></h5>
						  <p>Foie gras terrine, fig compote and brioche</p>
						</li>
						<li data-aos="fade-up" data-aos-duration="1000" data-aos-delay="800">
						  <h5 class="name"><span class="txt">Cold Cut (Charcuteries)</span><span class="price">$39.90</span></h5>
						  <p>Rosette, bayonne ham, coppa ham, dry sausage, cornichon, and walnut</p>
						</li>
					  </ul>
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