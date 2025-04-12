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
    <style>
        .border-separator {
    border-left: 1px solid #ccc; /* Light gray line */
    padding-left: 20px; /* Optional: space between line and content */
}

    </style>
   
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
				<li class="all_items" data-filter=".brunch">BRUNCH</li>
                <li class="all_items" data-filter=".starters">STARTERS</li>
                <li class="all_items" data-filter=".maincourse">MAIN COURSE</li>
                <li class="all_items" data-filter=".acompagnements">ACOMPAGNEMENTS</li>
                <li class="all_items" data-filter=".sharing">SHARING PLATTER</li>
                <li class="all_items" data-filter=".garni">GARNITURES</li>
                <li class="all_items" data-filter=".burger">BURGER ET TARTE FLAMBEE</li>
                <li class="all_items" data-filter=".bar">BAR SNACKS</li>
                <li class="all_items" data-filter=".desserts">DESSERTS</li>
                <li class="all_items" data-filter=".kids">KIDS MENU</li>
                <li class="all_items" data-filter=".whitewine">WHITE WINE</li>
                <li class="all_items" data-filter=".roeswine">WHITE WINE</li>                
                
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
						
					  </ul>

					  <ul class="menu-list pl-30">
                      <li data-aos="fade-up" data-aos-duration="1000" data-aos-delay="400">
						  <h5 class="name"><span class="txt">Egg Bènèdict</span><span class="price">$17.90</span></h5>
						  <p>Eggs benedict, bayonne ham, poached eggs, tamato, hollandaise and sourdough</p>
						</li>
						<li data-aos="fade-up" data-aos-duration="1000" data-aos-delay="500">
						  <h5 class="name"><span class="txt">Egg Benedict Mushrooms (VG) (Portobello Bentoit)</span><span class="price">$19.90</span></h5>
						  <p>Portobello benedict, wilted spinach, tamato, poached eggs & hollandaise</p>
						</li>
						
					  </ul>
					</div>
				  </div>
				</div>

				<!-- brunch -->
				<div class="tab-pane brunch" id="brunch">
                    <div class="menu-content">
                        <div class="block-text center">
                        <h3 class="title" data-aos-duration="1000" data-aos="fade-up">BRUNCH</h3>
                        <p>12pm to 4pm</p>
                        <p>VG - Vegetarian | NF - Nut-Free | GF - Gluten-Free | DF - Dairy-Free</p>
                        </div>
                        <div class="menu-main">
                        <ul class="menu-list">
                            <li data-aos="fade-up" data-aos-duration="1000" data-aos-delay="100">
                            <h5 class="name"><span class="txt">Breakfast Platter (Jules Petit Dejeuner)</span><span class="price">$24.90</span></h5>
                            <p>Choice style of egg: sunny side up, over easy, scramble or poached egg, toulouse sausage, mushroom, lardon “bacon”, white bean stew and toast</p>
                            </li>
                            
                        </ul>
                        <ul class="menu-list pl-30">
                        <li data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200">
                            <h5 class="name"><span class="txt">Egg Platter</span><span class="price">$22.90</span></h5>
                            <p>Choice style of egg: sunny side up, over easy, scramble or poached egg, spinach, mushroom, cauliflower, white bean stew and toast</p>
                            </li>
						
					  </ul>
                        </div>
                    </div>
                </div><!-- tab-content -->
                <!---End brunch--->

                <!---STARTERS-->
                <div class="tab-pane starters" id="starters">
                    <div class="menu-content">
                        <div class="block-text center">
                        <h3 class="title" data-aos-duration="1000" data-aos="fade-up">STARTERS</h3>
                        </div>
                        <div class="menu-main">
                        <ul class="menu-list">
                            <li data-aos="fade-up" data-aos-duration="1000" data-aos-delay="100">
                            <h5 class="name"><span class="txt">French Onion Soup (Soupe A L'oignon) (VG)</span><span class="price">$17.90</span></h5>
                            <p>Traditional French soup with caramelized onions, Vegetable stock, & croutons topped with melted cheese.</p>
                            </li>
                            <li data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200">
                            <h5 class="name"><span class="txt">Hummus Salad (Salade De Tomates Et Concombres) (VG)</span><span class="price">$17.90</span></h5>
                            <p>Tomato, cucumber, hummus, parsley, fried chickpeas and extra virgin olive oil.</p>
                            </li>
                            <li data-aos="fade-up" data-aos-duration="1000" data-aos-delay="300">
                            <h5 class="name"><span class="txt">Escargot De Bourgogne (6pcs)</span><span class="price">$19.90</span></h5>
                            <p>Burgundy snails in garlic herbs butter.</p>
                            </li>
                            <li data-aos="fade-up" data-aos-duration="1000" data-aos-delay="400">
                            <h5 class="name"><span class="txt">Smoked Salmon Salad (Nicoa de Saumon Fume)</span><span class="price">$21.90</span></h5>
                            <p>Smoked salmon nicoise, potato, green bean, tomato, olive, egg and house dressing.</p>
                            </li>
                        </ul>

                        <ul class="menu-list pl-30">
                            <li data-aos="fade-up" data-aos-duration="1000" data-aos-delay="500">
                            <h5 class="name"><span class="txt">Camembert Cheese (VG) (Camembert Au Four)</span><span class="price">$27.90</span></h5>
                            <p>Baked camembert cheese with garlic and white wine, serve with crouton and salad.</p>
                            </li>
                            <li data-aos="fade-up" data-aos-duration="1000" data-aos-delay="600">
                            <h5 class="name"><span class="txt">Octopus Salad (Salade De Cussie Pouple Grille)</span><span class="price">$33.90</span></h5>
                            <p>Grilled octopus leg, parsley and dill salad, potato, orange segment and extra virgin olive oil.</p>
                            </li>
                            <li data-aos="fade-up" data-aos-duration="1000" data-aos-delay="700">
                            <h5 class="name"><span class="txt">Foie Gras (Foie Gras Terrine)</span><span class="price">$35.90</span></h5>
                            <p>Foie gras terrine, fig compote and brioche.</p>
                            </li>
                            <li data-aos="fade-up" data-aos-duration="1000" data-aos-delay="800">
                            <h5 class="name"><span class="txt">Cold Cut (Charcuteries)</span><span class="price">$39.90</span></h5>
                            <p>Rosette, bayonne ham, coppa ham, dry sausage, cornichon, and walnut.</p>
                            </li>
                        </ul>
                        </div>
                    </div>
                    </div>
                <!--End STARTERS-->
                <!--Main-->
                <div class="tab-pane maincourse" id="maincourse">
                    <div class="menu-content">
                        <div class="block-text center">
                        <h3 class="title" data-aos-duration="1000" data-aos="fade-up">MAIN COURSE</h3>
                        </div>
                        <div class="menu-main">
                        <ul class="menu-list">
                            <li data-aos="fade-up" data-aos-duration="1000" data-aos-delay="100">
                            <h5 class="name"><span class="txt">Cauliflower Steak (VG) (Steak de chou-fleur)</span><span class="price">$17.90</span></h5>
                            <p>Cauliflower steak, homemade jalapeno hummus, crispy chickpeas and sauce vierge.</p>
                            </li>
                            <li data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200">
                            <h5 class="name"><span class="txt">Cottage Cheese Ratatouille (Tarte A La Ratatouille)</span><span class="price">$21.90</span></h5>
                            <p>Courgettes, eggplant, tomato, capsicum, puff pastry and salad.</p>
                            </li>
                            <li data-aos="fade-up" data-aos-duration="1000" data-aos-delay="300">
                            <h5 class="name"><span class="txt">Ratatouille (VG) (Tarte A La Ratatouille)</span><span class="price">$21.90</span></h5>
                            <p>Courgettes, eggplant, tomato, capsicum, puff pastry and salad.</p>
                            </li>
                            <li data-aos="fade-up" data-aos-duration="1000" data-aos-delay="400">
                            <h5 class="name"><span class="txt">Portobello Schnitzel (VG) (Escalope Portobello)</span><span class="price">$23.90</span></h5>
                            <p>Portobello schnitzel, potato duchesses, parsley salad and tomato sauce.</p>
                            </li>
                            <li data-aos="fade-up" data-aos-duration="1000" data-aos-delay="500">
                            <h5 class="name"><span class="txt">Stuffed Chicken Breast (Poulet Cordon Bleu)</span><span class="price">$25.90</span></h5>
                            <p>Breaded and stuffed chicken breast with bayonne ham and emmental cheese, serve whole grain mustard cream sauce, fries and salad.</p>
                            </li>
                            <li data-aos="fade-up" data-aos-duration="1000" data-aos-delay="600">
                            <h5 class="name"><span class="txt">Duck Confit (Cuisse De Canard Confite)</span><span class="price">$37.90</span></h5>
                            <p>Duck leg confit, white bean stews, lardon, and Veal Jus.</p>
                            </li>
                        </ul>

                        <ul class="menu-list pl-30">
                            
                            <li data-aos="fade-up" data-aos-duration="1000" data-aos-delay="700">
                            <h5 class="name"><span class="txt">Red Wine Chicken (Coq Au Vin)</span><span class="price">$31.90</span></h5>
                            <p>Red wine braised chicken leg, lardon, mushroom, pearl onion and mashed potato.</p>
                            </li>
                            <li data-aos="fade-up" data-aos-duration="1000" data-aos-delay="800">
                            <h5 class="name"><span class="txt">Lamb Shank (Jarret D' Agneau)</span><span class="price">$39.90</span></h5>
                            <p>Braised lamb shank, haricots vert, and saffron pilaf rice.</p>
                            </li>
                            <li data-aos="fade-up" data-aos-duration="1000" data-aos-delay="900">
                            <h5 class="name"><span class="txt">Seafood Bouillabaise (Bouillabaise Traditionnelle)</span><span class="price">$47.90</span></h5>
                            <p>Traditional bouillabaise, red mullet, prawn, scallop, mussel, saffron potato, sourdough and rouille sauce.</p>
                            </li>
                            <li data-aos="fade-up" data-aos-duration="1000" data-aos-delay="1000">
                            <h5 class="name"><span class="txt">Ribeye Steak (Steak de faux-filet angus d’australie) (250gm)</span><span class="price">$59.90</span></h5>
                            <p>Australia angus ribeye steak, fries, salad and choice of red wine sauce or bearnaise.</p>
                            </li>
                            <li data-aos="fade-up" data-aos-duration="1000" data-aos-delay="1100">
                            <h5 class="name"><span class="txt">French Cheese Fondue With White Wine, Croutons And Salad (Fondue De Fromage De France Au Vin Blanc, Croutons Et Salade)</span><span class="price">$27.90/pax</span></h5>
                            <p>Classic cheese fondue, crouton & salad (minimum order for 2 pax).</p>
                            </li>
                        </ul>
                        </div>
                    </div>
                    </div>
                <!--Main End-->
                <!--Acompagnements-->
                <div class="tab-pane acompagnements" id="acompagnements">
                    <div class="menu-content">
                        <div class="block-text center">
                        <h3 class="title" data-aos-duration="1000" data-aos="fade-up">ACCOMPAGNEMENTS</h3>
                        </div>
                        <div class="menu-main">
                        <ul class="menu-list">
                            <li data-aos="fade-up" data-aos-duration="1000" data-aos-delay="100">
                            <h5 class="name"><span class="txt">Bayonne Ham</span><span class="price">$17.90</span></h5>
                            </li>
                            <li data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200">
                            <h5 class="name"><span class="txt">Potato</span><span class="price">$9.90</span></h5>
                            </li>
                           
                        </ul>

                        <ul class="menu-list pl-30">
                        <li data-aos="fade-up" data-aos-duration="1000" data-aos-delay="300">
                            <h5 class="name"><span class="txt">Salad</span><span class="price">$7.90</span></h5>
                            </li>
                            <li data-aos="fade-up" data-aos-duration="1000" data-aos-delay="400">
                            <h5 class="name"><span class="txt">Crouton</span><span class="price">$4.90</span></h5>
                            </li>
                        </ul>
                        </div>
                    </div>
                    </div>
                <!--End Acompagnements-->
                <!--sharing-->
                <div class="tab-pane sharing" id="sharing">
                        <div class="menu-content">
                            <div class="block-text center">
                            <h3 class="title" data-aos-duration="1000" data-aos="fade-up">SHARING PLATTER</h3>
                            </div>
                            <div class="menu-main">
                            <ul class="menu-list">
                                <li data-aos="fade-up" data-aos-duration="1000" data-aos-delay="100">
                                <h5 class="name"><span class="txt">Australle Angus Cote De Bouef 1KG+/- (For 2 Pax)</span></h5>
                                <p>Australle angus OP Rib, red wine sauce and bearnaise sauce, fries and salad.</p>
                                </li>
                                <li data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200">
                                <h5 class="name"><span class="txt">Mixed Grill Platter (Plateau Surf Et Gazon)</span></h5>
                                <p>Grill lamb leg and prawn serve with red wine sauce, bearnaise sauce, fries and salad.</p>
                                <p>For 2 ---------------------- $67.90</p>
                                <p>For 4 ---------------------- $131.90</p>
                                <p>For 6 ---------------------- $179.90</p>
                                </li>
                            </ul>

                            <ul class="menu-list pl-30">
                                <li data-aos="fade-up" data-aos-duration="1000" data-aos-delay="300">
                                <h5 class="name"><span class="txt">Skewer Platter (Plateau De Brochetters) (For 2 Pax)</span><span class="price">$57.90</span></h5>
                                <p>Wagyu beef skewer 3pcs, lamb skewer 3pcs & chicken skewer 3pcs.</p>
                                </li>
                            </ul>
                            </div>
                        </div>
                        </div>
                <!--End sharing-->

                <!--GARNITURES-->
                <div class="tab-pane garni" id="garni">
                <div class="menu-content">
                    <div class="block-text center">
                    <h3 class="title" data-aos-duration="1000" data-aos="fade-up">GARNITURES</h3>
                    </div>
                    <div class="menu-main">
                    <ul class="menu-list">
                        <li data-aos="fade-up" data-aos-duration="1000" data-aos-delay="100">
                        <h5 class="name"><span class="txt">Mashed Potato De Terre (VG)</span><span class="price">$7.90</span></h5>
                        </li>
                        <li data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200">
                        <h5 class="name"><span class="txt">Fries (French Fries) (VG)</span><span class="price">$9.90</span></h5>
                        </li>
                        <li data-aos="fade-up" data-aos-duration="1000" data-aos-delay="300">
                        <h5 class="name"><span class="txt">Cheese Fries</span><span class="price">$13.90</span></h5>
                        </li>
                        <li data-aos="fade-up" data-aos-duration="1000" data-aos-delay="400">
                        <h5 class="name"><span class="txt">Truffle Fries</span><span class="price">$13.90</span></h5>
                        </li>
                        <h5 class="name"><span class="txt">Herb Garlic Bread (VG) (Pain A L’Ail)</span><span class="price">$11.90</span></h5>
                        <p>Baguette, garlic herb butter (Option: Freshly baked Baguette with cheese).</p>
                        </li>                     
                        
                    </ul>

                    <ul class="menu-list pl-30">
                    <li data-aos="fade-up" data-aos-duration="1000" data-aos-delay="600">
                        <h5 class="name"><span class="txt">French Beans (VG) (Haricots Verts Sautes)</span><span class="price">$11.90</span></h5>
                        <p>Sauteed haricots verts, garlic herb butter, almond flake.</p>
                        </li>
                        <li data-aos="fade-up" data-aos-duration="1000" data-aos-delay="700">
                        <h5 class="name"><span class="txt">Ratatoille (VG)</span><span class="price">$12.90</span></h5>
                        <p>French Provençal dish of stewed vegetables.</p>
                        </li>
                        <li data-aos="fade-up" data-aos-duration="1000" data-aos-delay="800">
                        <h5 class="name"><span class="txt">Cottage Cheese Ratatoille</span><span class="price">$12.90</span></h5>
                        <p>French Provençal dish of stewed vegetables.</p>
                        </li>
                        <li data-aos="fade-up" data-aos-duration="1000" data-aos-delay="900">
                        <h5 class="name"><span class="txt">Chilli Cheese Fries</span><span class="price">$16.90</span></h5>
                        </li>
                    </ul>
                    </div>
                </div>
                </div>
                <!--End GARNITURES-->
                <!--BURGER ET TARTE FLAMBEE-->
                <div class="tab-pane burger" id="burger">
                        <div class="menu-content">
                            <div class="block-text center">
                            <h3 class="title" data-aos-duration="1000" data-aos="fade-up">BURGER ET TARTE FLAMBEE</h3>
                            </div>
                            <div class="menu-main">
                            <ul class="menu-list">
                                <li data-aos="fade-up" data-aos-duration="1000" data-aos-delay="100">
                                <h5 class="name"><span class="txt">Wagyu Beef Steak Burger (Burger Au Bceuf Wagyu)</span><span class="price">$27.90</span></h5>
                                <p>Wagyu beef burger, brioche bun, caramelized onion, tomato, lettuce, gherkin, fries and blue cheese mayo.</p>
                                </li>
                                <li data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200">
                                <h5 class="name"><span class="txt">Impossible Burger (VG) (Burger A Base De Plantes)</span><span class="price">$25.90</span></h5>
                                <p>Plant-based burger, brioche bun, tomato, lettuce, caramelized onion, fries and paprika mayo.</p>
                                </li>
                                <li data-aos="fade-up" data-aos-duration="1000" data-aos-delay="300">
                                <h5 class="name"><span class="txt">Chicken Burger (Burger Au Poulet Katsu)</span><span class="price">$19.90</span></h5>
                                <p>Chicken katsu burger, brioche bun, lettuce, tomato, caramelized onion, fries and espellette mayo.</p>
                                </li>
                                <li data-aos="fade-up" data-aos-duration="1000" data-aos-delay="400">
                                <h5 class="name"><span class="txt">French Hot Dog (Saucisse De Porc)</span><span class="price">$17.90</span></h5>
                                <p>Pork sausage, baguette, jalapeño, dijon mustard, onion marmalade, and fries.</p>
                                </li>
                                <li data-aos="fade-up" data-aos-duration="1000" data-aos-delay="500">
                                <h5 class="name"><span class="txt">Tandoori Chicken Burger</span><span class="price">$22.90</span></h5>
                                <p>Chicken burger loaded with tandoori spice, smothered with a cooling yogurt sauce and some crisp onions, cucumbers, and tomatoes.</p>
                                </li>
                            </ul>

                            <ul class="menu-list pl-30">
                                <li data-aos="fade-up" data-aos-duration="1000" data-aos-delay="600">
                                <h5 class="name"><span class="txt">French Veg Pizza (VG) (Tarte Flambee)</span><span class="price">$17.90</span></h5>
                                <p>Cherry tomato, olive, sliced onion, and tomato sauce.</p>
                                </li>
                                <li data-aos="fade-up" data-aos-duration="1000" data-aos-delay="700">
                                <h5 class="name"><span class="txt">French Chicken Pizza (Tarte Flambee)</span><span class="price">$19.90</span></h5>
                                <p>Smoked chicken, onion, and crème fraîche.</p>
                                </li>
                                <li data-aos="fade-up" data-aos-duration="1000" data-aos-delay="800">
                                <h5 class="name"><span class="txt">French Cheese Pizza (VG) (Tarte Flambee)</span><span class="price">$21.90</span></h5>
                                <p>Blue cheese, brie, emmental, camembert, and tomato sauce.</p>
                                </li>
                                <li data-aos="fade-up" data-aos-duration="1000" data-aos-delay="900">
                                <h5 class="name"><span class="txt">French Ham Pizza (Tarte Flambee)</span><span class="price">$22.90</span></h5>
                                <p>Crème fraîche, sliced onion, and coppa ham.</p>
                                </li>
                                <li data-aos="fade-up" data-aos-duration="1000" data-aos-delay="1000">
                                <h5 class="name"><span class="txt">Raviole Pasta Tomato Sauce (VG) (Raviole De Royan)</span><span class="price">$21.90</span></h5>
                                <p>Cherry tomato, olive, and tomato sauce.</p>
                                </li>
                                <li data-aos="fade-up" data-aos-duration="1000" data-aos-delay="1100">
                                <h5 class="name"><span class="txt">Raviole Pasta Cream Sauce (VG) (Raviole De Royan)</span><span class="price">$21.90</span></h5>
                                <p>Mushroom and cream sauce.</p>
                                </li>
                            </ul>
                            </div>
                        </div>
                </div>
                <!--End BURGER ET TARTE FLAMBEE-->
                <!--BAR SNACKS-->
                <div class="tab-pane bar" id="bar">
                        <div class="menu-content">
                            <div class="block-text center">
                            <h3 class="title" data-aos-duration="1000" data-aos="fade-up">BAR SNACKS</h3>
                            </div>
                            <div class="menu-main">
                            <ul class="menu-list">
                                <li data-aos="fade-up" data-aos-duration="1000" data-aos-delay="100">
                                <h5 class="name"><span class="txt">Chicken Skewer (Brochette De Poulet) (5pcs)</span><span class="price">$21.90</span></h5>
                                <p>Chicken skewer, green peppercorn mustard.</p>
                                </li>
                                <li data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200">
                                <h5 class="name"><span class="txt">Cauliflower Fritters (Beignets De Chou-Fleur)</span><span class="price">$21.90</span></h5>
                                <p>Cauliflower fritters, paprika mayo.</p>
                                </li>
                                <li data-aos="fade-up" data-aos-duration="1000" data-aos-delay="300">
                                <h5 class="name"><span class="txt">Chicken Wing (Ailes De Poulet Frites)</span><span class="price">$17.90</span></h5>
                                <p>Fried chicken wing, harissa sauce.</p>
                                </li>
                                <li data-aos="fade-up" data-aos-duration="1000" data-aos-delay="400">
                                <h5 class="name"><span class="txt">Cheese Fritters</span><span class="price">$15.90</span></h5>
                                </li>
                                <li data-aos="fade-up" data-aos-duration="1000" data-aos-delay="500">
                                <h5 class="name"><span class="txt">Fried Calamari (Cuisse De Calamar Frite)</span><span class="price">$21.90</span></h5>
                                <p>Fried squid leg, homemade mayo.</p>
                                </li>
                            </ul>

                            <ul class="menu-list pl-30">
                                <li data-aos="fade-up" data-aos-duration="1000" data-aos-delay="600">
                                <h5 class="name"><span class="txt">Grilled Octopus (Cuisse De Poulpe Grillee)</span><span class="price">$27.90</span></h5>
                                <p>Grilled octopus leg, espelette mayo.</p>
                                </li>
                                <li data-aos="fade-up" data-aos-duration="1000" data-aos-delay="700">
                                <h5 class="name"><span class="txt">Beef Skewer (Brochette De Boeuf Wagyu) (5pcs)</span><span class="price">$29.90</span></h5>
                                <p>Wagyu beef skewer, wholegrain mustard.</p>
                                </li>
                                <li data-aos="fade-up" data-aos-duration="1000" data-aos-delay="800">
                                <h5 class="name"><span class="txt">Lamb Skewer (Brochette D' Agneau) (5pcs)</span><span class="price">$25.90</span></h5>
                                <p>Lamb skewer, fireman mustard.</p>
                                </li>
                                <li data-aos="fade-up" data-aos-duration="1000" data-aos-delay="900">
                                <h5 class="name"><span class="txt">Plant Base Meat Ball (Bourlette De Viande A Base De Plante) (6pcs) (VG)</span><span class="price">$24.90</span></h5>
                                <p>Plant-based meat ball, smoked paprika tomato sauce and toast.</p>
                                </li>
                                <li data-aos="fade-up" data-aos-duration="1000" data-aos-delay="1000">
                                <h5 class="name"><span class="txt">Herb Grilled Tiger Prawns (Ail Herbes Beurre Crevettes Tigrees) (5pcs)</span><span class="price">$25.90</span></h5>
                                <p>Tiger prawns, garlic herbs butter, and sourdough.</p>
                                </li>
                            </ul>
                            </div>
                        </div>
                </div>
                <!--End BAR SNACKS-->
                <!--DESSERTS-->
                <div class="tab-pane desserts" id="desserts">
                    <div class="menu-content">
                        <div class="block-text center">
                        <h3 class="title" data-aos-duration="1000" data-aos="fade-up">DESSERTS</h3>
                        </div>
                        <div class="menu-main">
                        <ul class="menu-list">
                            <li data-aos="fade-up" data-aos-duration="1000" data-aos-delay="100">
                            <h5 class="name"><span class="txt">Classic Creme Brulee (VG, GF)</span><span class="price">$11.90</span></h5>
                            <p>Classic vanilla custard topped with a caramelized sugar crust.</p>
                            </li>
                            <li data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200">
                            <h5 class="name"><span class="txt">Chocolate Mousse (VG) (PF)</span><span class="price">$11.90</span></h5>
                            </li>
                            <li data-aos="fade-up" data-aos-duration="1000" data-aos-delay="300">
                            <h5 class="name"><span class="txt">French Toast Bites</span><span class="price">$19.90</span></h5>
                            </li>
                            <li data-aos="fade-up" data-aos-duration="1000" data-aos-delay="400">
                            <h5 class="name"><span class="txt">Lemon Tart (VG)</span><span class="price">$13.90</span></h5>
                            <p>Served with a scoop of vanilla ice cream.</p>
                            </li>
                        </ul>

                        <ul class="menu-list pl-30">
                            <li data-aos="fade-up" data-aos-duration="1000" data-aos-delay="500">
                            <h5 class="name"><span class="txt">Cheese Platter (VG)</span><span class="price">$37.90</span></h5>
                            <p>(Fromages Fermiers Affines) Brie de Meaux, Blue d'Auvergne, Comte, Camembert, fig jam & crackers.</p>
                            </li>
                            <li data-aos="fade-up" data-aos-duration="1000" data-aos-delay="600">
                            <h5 class="name"><span class="txt">Crepe & Ice Cream (VG)</span><span class="price">$15.90</span></h5>
                            <p>Choice of vanilla gelato or chocolate gelato salad, caramel sauce, chocolate sauce, and hazelnut.</p>
                            </li>
                        </ul>
                        </div>
                    </div>
                    </div>
                <!--End DESSERTS-->
                <!--Kids Menu-->
                <div class="tab-pane kids" id="kids">
                        <div class="menu-content">
                            <div class="block-text center">
                            <h3 class="title" data-aos-duration="1000" data-aos="fade-up">KIDS MENU</h3>
                            </div>
                            <div class="menu-main">
                            <ul class="menu-list">
                                <li data-aos="fade-up" data-aos-duration="1000" data-aos-delay="100">
                                <h5 class="name"><span class="txt">Chicken Burger</span><span class="price">$14</span></h5>
                                </li>
                                <li data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200">
                                <h5 class="name"><span class="txt">Grilled Teriyaki Chicken</span><span class="price">$12</span></h5>
                                </li>
                            </ul>

                            <ul class="menu-list pl-30">
                                <li data-aos="fade-up" data-aos-duration="1000" data-aos-delay="300">
                                <h5 class="name"><span class="txt">Veg French Pizza</span><span class="price">$12</span></h5>
                                </li>
                            </ul>
                            </div>
                        </div>
                </div>
                <!--End Jids Menu-->

                <!--White Wine-->
                <div class="tab-pane whitewine" id="whitewine">
                <div class="menu-container">
                <h1 class="menu-title text-center">WHITE WINE</h1>
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
                                    <span class="heading-column">Glass</span>
                                    <span class="heading-column">Carafe</span>
                                    <span class="heading-column">Bottle</span>
                                    </div>
                                </div>
                                <!-- Menu Item 1 -->
                                <div class="menu-item">
                                    <p class="item-name">Cloudy Bay 2022 - Sauvignon</p>
                                    <div class="price-row">
                                    <span class="price-des">$16</span>
                                    <span class="price-des">$45</span>
                                    <span class="price-des">$80</span>
                                    </div>
                                </div>
                                <!-- Menu Item 2 -->
                                <div class="menu-item">
                                    <p class="item-name">Finca La Solana, Carmina Luna 2022 - Macabeo, Airen</p>
                                    <div class="price-row">
                                    <span class="price-des">$14</span>
                                    <span class="price-des">$45</span>
                                    <span class="price-des">$0.00</span>
                                    </div>
                                </div>
                                
                                </div>
                            </div>
                            <div class="col-6 border-separator">
                           
                                <div class="menu-items">
                                <!-- Price Headings -->
                                <div class="price-heading">
                                    <div class="item-column">
                                    <span class="heading-column">Item</span>
                                    </div>
                                    <div class="price-columns">
                                    <span class="heading-column">Glass</span>
                                    <span class="heading-column">Carafe</span>
                                    <span class="heading-column">Bottle</span>
                                    </div>
                                </div>
                                
                                <!-- Menu Item 3 -->
                                <div class="menu-item">
                                    <p class="item-name">Château La Pénellerie, Bordeaux 2023 - Sauvignon, Semillon</p>
                                    <div class="price-row">
                                    <span class="price-des">$14</span>
                                    <span class="price-des">$45</span>
                                    <span class="price-des">$84</span>
                                    </div>
                                </div>
                                <!-- Menu Item 4 -->
                                <div class="menu-item">
                                    <p class="item-name">Louis Alix, Pays d’Oc 2022 - Chardonnay</p>
                                    <div class="price-row">
                                    <span class="price-des">$14</span>
                                    <span class="price-des">$45</span>
                                    <span class="price-des">$88</span>
                                    </div>
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
                                <p class="item-name">Cloudy Bay 2022 - Sauvignon</p>
                                <div class="price-row">
                                    <span class="price-drink">Glass: $16</span>
                                    <span class="price-drink">Carafe: $45</span>
                                    <span class="price-drink">Bottle: $80</span>
                                </div>
                                </div>
                                <div class="menu-item">
                                <p class="item-name">Finca La Solana, Carmina Luna 2022 - Macabeo, Airen</p>
                                <div class="price-row">
                                    <span class="price-drink">Glass: $14</span>
                                    <span class="price-drink">Carafe: $45</span>
                                    <span class="price-drink"></span>
                                </div>
                                </div>
                                <div class="menu-item">
                                <p class="item-name">Château La Pénellerie, Bordeaux 2023 - Sauvignon, Semillon</p>
                                <div class="price-row">
                                    <span class="price-drink">Glass: $14</span>
                                    <span class="price-drink">Carafe: $45</span>
                                    <span class="price-drink">Bottle: $84</span>
                                </div>
                                </div>
                                <div class="menu-item">
                                <p class="item-name">Louis Alix, Pays d’Oc 2022 - Chardonnay</p>
                                <div class="price-row">
                                    <span class="price-drink">Glass: $14</span>
                                    <span class="price-drink">Carafe: $45</span>
                                    <span class="price-drink">Bottle: $88</span>
                                </div>
                                </div>
                            </div>
                            </div>
                        </div>
                 </div>
                </div>

                <!--White wine End-->
                <!--Roes Wine-->
                <!--Rose Wine end-->



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
  $(document).ready(function () {
    // Show all by default
    $(".tab-pane").show();

    $(".all_items").on("click", function () {
      var filterValue = $(this).data("filter");

      // Remove active class from all tabs and add it to the clicked tab
      $(".all_items").removeClass("active");
      $(this).addClass("active");

      if (filterValue === "*") {
        // Show all tab panes if the filter is "*"
        $(".tab-pane").fadeIn();
      } else {
        // Hide all tab panes and show only the selected one
        $(".tab-pane").hide();
        $(filterValue).fadeIn();

        // Check if the screen width is less than or equal to a mobile breakpoint (e.g., 768px)
        if ($(window).width() <= 768) {
          // Scroll to the selected tab content with smooth animation
          $("html, body").animate(
            {
              scrollTop: $(filterValue).offset().top - 100, // Stop 100px above the tab content
            },
            500 // Duration of the scroll animation in milliseconds
          );
        }
      }
    });

    // Optional: Re-check window size on resize to handle dynamic changes
    $(window).resize(function () {
      // You can add logic here if needed, e.g., resetting states or reapplying styles
    });
  });
</script>

</body>

</html>