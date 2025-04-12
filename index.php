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

<body class="header-fixed main home1 ">
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
		
        <?php include('include/slider.php');?>

        <section class="about">
            <div class="shape"></div>
            <div class="container">
                <div class="row">
                    <div class="col-xl-6 col-md-12">
                        <div class="about-img" data-aos-duration="1000" data-aos="fade-right">
                            <img src="assets/images/section/about.jpg" alt="">
                        </div>
                    </div>
                    <div class="col-xl-6 col-md-12">
                        <div class="about-content">
                            <div class="block-text">
                                <p class="subtitle " data-aos-duration="1000" data-aos="fade-up">About Restaurant</p>
                                <h3 class="title" data-aos-duration="1000" data-aos="fade-up">Discover the Art of Fine Dining</h3>
                                <p class="text" data-aos-duration="1000" data-aos="fade-up">Our buzzy food-hall style concept is inspired by international dining
                                    styles, especially in Asia. Explore the following fast-action food stations as busy
                                    chefs perform.</p>
                                <p class="text" data-aos-duration="1000" data-aos="fade-up">Enjoy a verdant Garden to Glass experience. It’s in the view, it’s
                                    reflected in the design, and it infuses many drinks. In fact, all our delicious
                                    fresh ingredients are sustainably picked from our Jemima’s Kitchen Garden. Our
                                    flourishing range of cocktails, spirits, beers and wines are all made with integrity
                                    and offer something for every guest.</p>

                                <a href="about.php" class="tf-button style3">read more about us</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="opening">
            <div class="shape"></div>
            <div class="container">
                <div class="row">
                    <div class="col-xl-7 col-md-12">
                        <div class="opening-content">
                            <div class="block-text">
                                <h3 class="title" data-aos-duration="1000" data-aos="fade-up">Opening time Hours</h3>
                                <ul>
                                    <li data-aos-duration="1000" data-aos="fade-up"><span>Monday - Friday :</span> 7:00 am - 22:00 pm</li>
                                    <li data-aos-duration="1000" data-aos="fade-up"><span>Saturday:</span> 8:00 am - 23:00 pm</li>
                                    <li data-aos-duration="1000" data-aos="fade-up"><span>Sunday:</span> 6:30 pm - 23:00 pm</li>
                                    <li data-aos-duration="1000" data-aos="fade-up"><span>Holidays:</span> Closed</li>
                                </ul>

                                <div class="d-flex">
                                    <ul>
                                        <h5 data-aos-duration="1000" data-aos="fade-up">Breakfast</h5>
                                        <li data-aos-duration="1000" data-aos="fade-up"><span>Monday - Friday :</span> 7:00 am - 11:30 am</li>
                                        <li data-aos-duration="1000" data-aos="fade-up"><span>Saturday:</span> 8:00 am - 11:30 am</li>
                                        <li data-aos-duration="1000" data-aos="fade-up"><span>Sunday:</span> 6:30 am - 11:30 am</li>
                                        <li data-aos-duration="1000" data-aos="fade-up"><span>Holidays:</span> Closed</li>
                                    </ul>

                                    <ul>
                                        <h5 data-aos-duration="1000" data-aos="fade-up">Lunch and Dinner</h5>
                                        <li data-aos-duration="1000" data-aos="fade-up"><span>Monday - Friday :</span> 11:30 am - 22:00 pm</li>
                                        <li data-aos-duration="1000" data-aos="fade-up"><span>Saturday:</span> 10:30 am - 23:00 pm</li>
                                        <li data-aos-duration="1000" data-aos="fade-up"><span>Sunday:</span> 10:00 am - 23:00 am</li>
                                        <li data-aos-duration="1000" data-aos="fade-up"><span>Holidays:</span> Closed</li>
                                    </ul>
                                </div>
                                <a href="#" class="tf-button style3" >book a table</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-5 col-md-12">
                        <div class="opening-img" data-aos-duration="1000" data-aos="fade-left">
                            <img src="assets/images/section/opening.jpg" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="s-menu">
            <div class="shape" data-aos-duration="1000" data-aos="fade-right">
                <img src="assets/images/section/shape-menu.png" alt="">
            </div>
            <div class="container">
                <div class="row">
                    <div class="menu-content">
                        <div class="block-text center style-2">
                            <p class="subtitle" data-aos-duration="1000" data-aos="fade-up">Taste the Best that Surprise you</p>
                            <h3 class="title" data-aos-duration="1000" data-aos="fade-up">our special menu</h3>
                            <p class="text" data-aos-duration="1000" data-aos="fade-up">We always give our customers a feeling of peace of mind and comfort when
                                dining at our restaurant <br />
                                Sed ut perspiciatis unde omnis iste natus error voluptate accusantium
                            </p>

                        </div>
                        <div class="flat-tabs" data-aos-duration="1000" data-aos="fade-up" >
                            <ul class="menu-tab">
                                <li class="active">
                                    <h5>DINE IN  MENU</h5>
                                </li>
                                <li>
                                    <h5>STARTERS</h5>
                                </li>
                                <li>
                                    <h5>MAIN COURSE</h5>
                                </li>
                                <li>
                                    <h5>Garnitures</h5>
                                </li>
                            </ul>

                            <div class="content-tab">
                                <div class="content-inner">
                                    <div class="container_inner">
                                        <div class="left-img">
                                            <img src="assets/images/section/menu.jpg" alt="">
                                        </div>
                                        <div class="right-img">
                                            <img src="assets/images/section/menu1.jpg" alt="">
                                        </div>
                                        <ul class="menu-list">
											<li>
												<h5 class="name"><span class="txt">Omelette</span><span class="price">$15.90</span></h5>
												<p>Emmental cheese, lardon and toast</p>
											</li>
											<li>
												<h5 class="name"><span class="txt">French Toast (VG) (Pain Perdu)</span><span class="price">$17.90</span></h5>
												<p>French toast, fresh berries and Honey</p>
											</li>
											<li>
												<h5 class="name"><span class="txt">Salmon Benedict</span><span class="price">$17.90</span></h5>
												<p>Smoked salmon royale, poached eggs, tamato, hollandaise and sourdough</p>
											</li>
											<li>
												<h5 class="name"><span class="txt">Egg Benedict</span><span class="price">$17.90</span></h5>
												<p>Eggs benedict, bayonne ham, poached eggs, tamato, hollandaise and sourdough</p>
											</li>
											<li>
												<h5 class="name"><span class="txt">Egg Benedict Mushrooms (VG) (Portobello Bentoit)</span><span class="price">$19.90</span></h5>
												<p>Portobello benedict, wilted spinach, tamato, poached eggs & hollandaise</p>
											</li>
											
											<li>
												<h5 class="name"><span class="txt">Breakfast Platter (Jules Petit Dejeuner)</span><span class="price">$24.90</span></h5>
												<p>Choice style of egg: sunny side up, over easy, scramble or poached egg, toulousesauage, mushroom, lardon “bacon”, white bean stew and toast</p>
											</li>
											<li>
												<h5 class="name"><span class="txt">Egg Platter</span><span class="price">$22.90</span></h5>
												<p>Choice style of egg: sunny side up, over easy, scramble or poached egg, spinach, mushroom, cauliflower, white bean stew and toast</p>
											</li>
											<li>
												<a href="menu_list.php" class="tf-button style1 mt-39">view all menu</a>
											</li>
										</ul>


                                    </div>
                                </div>
                                <div class="content-inner">
                                    <div class="container_inner">
                                        <div class="left-img">
                                            <img src="assets/images/section/menu.jpg" alt="">
                                        </div>
                                        <div class="right-img">
                                            <img src="assets/images/section/menu1.jpg" alt="">
                                        </div>
                                        <ul class="menu-list">
                                           <li>
												<h5 class="name"><span class="txt">French Onion Soup (Soupe A L'oignon) (VG)</span><span class="price">$17.90</span></h5>
												<p>Traditional French soup with caramelized onions, vegetable stock, & croutons topped with melted cheese.</p>
											</li>

											<li>
												<h5 class="name"><span class="txt">Hummus Salad (Salade De Tomates Et Concombres) (VG)</span><span class="price">$17.90</span></h5>
												<p>Tomato, cucumber, hummus, parsley, fried chickpeas and extra virgin olive oil.</p>
											</li>

											<li>
												<h5 class="name"><span class="txt">ESCARGOT DE BOURGOGNE (6Pcs)</span><span class="price">$19.90</span></h5>
												<p>Burgundy snails in garlic herbs butter.</p>
											</li>

											<li>
												<h5 class="name"><span class="txt">Smoked Salmon Salad (Nicoa de Saumon Fume)</span><span class="price">$21.90</span></h5>
												<p>Smoked salmon nicoise, potato, green bean, tomato, olive, egg and house dressing.</p>
											</li>

											<li>
												<h5 class="name"><span class="txt">Camembert Cheese (VG) (Camembert Au Four)</span><span class="price">$27.90</span></h5>
												<p>Baked camembert cheese with garlic and white wine, served with crouton and salad.</p>
											</li>

											<li>
												<h5 class="name"><span class="txt">Octopus Salad (Salade De Cussie Pouple Grille)</span><span class="price">$33.90</span></h5>
												<p>Grilled octopus leg, parsley and dill salad, potato, orange segment and extra virgin olive oil.</p>
											</li>

											<li>
												<h5 class="name"><span class="txt">Foie Gras (Foie Gras Terrine)</span><span class="price">$35.90</span></h5>
												<p>Foie gras terrine, fig compote and brioche.</p>
											</li>

											<li>
												<h5 class="name"><span class="txt">Cold Cut (Charcuteries)</span><span class="price">$39.90</span></h5>
												<p>Rosette, bayonne ham, coppa ham, dry sausage, cornichon, and walnut.</p>
											</li>

											<li>
												<h5 class="name"><span class="txt">Tender Octopus and Fennel</span><span class="price">$25.00</span></h5>
												<p>Citrus, wild rocket condiment.</p>
											</li>


                                            <a href="menu_list.php" class="tf-button style1 mt-39">view all menu</a>
                                        </ul>

                                    </div>
                                </div>
                                <div class="content-inner">
                                    <div class="container_inner">
                                        <div class="left-img">
                                            <img src="assets/images/section/menu.jpg" alt="">
                                        </div>
                                        <div class="right-img">
                                            <img src="assets/images/section/menu1.jpg" alt="">
                                        </div>
                                        <ul class="menu-list">
                                           <li>
												<h5 class="name"><span class="txt">Cauliflower Steak (VG) (Steak de chou-fleur)</span><span class="price">$17.90</span></h5>
												<p>Cauliflower steak, homemade jalapeno hummus, crispy chickpeas and sauce vierge.</p>
											</li>

											<li>
												<h5 class="name"><span class="txt">Portobello Schnitzel (VG) (Escalope Portobello)</span><span class="price">$23.90</span></h5>
												<p>Portobello schnitzel, potato duchesses, parsley salad and tomato sauce.</p>
											</li>

											<li>
												<h5 class="name"><span class="txt">Cottage Cheese Ratatouille (Tarte A La Ratatouille)</span><span class="price">$21.90</span></h5>
												<p>Courgettes, eggplant, tomato, capsicum, puff pastry and salad.</p>
											</li>

											<li>
												<h5 class="name"><span class="txt">Ratatouille (VG) (Tarte A La Ratatouille)</span><span class="price">$21.90</span></h5>
												<p>Courgettes, eggplant, tomato, capsicum, puff pastry and salad.</p>
											</li>

											<li>
												<h5 class="name"><span class="txt">Stuffed Chicken Breast (Poulet Cordon Bleu)</span><span class="price">$25.90</span></h5>
												<p>Breaded and stuffed chicken breast with bayonne ham and emmental cheese, served with whole grain mustard cream sauce, fries and salad.</p>
											</li>

											<li>
												<h5 class="name"><span class="txt">Red Wine Chicken (Coq Au Vin)</span><span class="price">$31.90</span></h5>
												<p>Red wine braised chicken leg, lardon, mushroom, pearl onion and mashed potato.</p>
											</li>

											<li>
												<h5 class="name"><span class="txt">Duck Confit (Cuisse De Canard Confite)</span><span class="price">$37.90</span></h5>
												<p>Duck leg confit, white bean stews, lardon, and veal jus.</p>
											</li>

											<li>
												<h5 class="name"><span class="txt">Lamb Shank (Jarret D' Agneau)</span><span class="price">$39.90</span></h5>
												<p>Braised lamb shank, haricots vert, and saffron pilaf rice.</p>
											</li>

											<li>
												<h5 class="name"><span class="txt">Seafood Bouillabaisse (Bouillabaisse Traditionnelle)</span><span class="price">$47.90</span></h5>
												<p>Traditional bouillabaisse, red mullet, prawn, scallop, mussel, saffron potato, sourdough and rouille sauce.</p>
											</li>

											<li>
												<h5 class="name"><span class="txt">Ribeye Steak (Steak de faux-filet angus d’australie) (250gm)</span><span class="price">$59.90</span></h5>
												<p>Australia angus ribeye steak, fries, salad and choice of red wine sauce or bearnaise.</p>
											</li>

											<li>
												<h5 class="name"><span class="txt">French Cheese Fondue With White Wine, Croutons And Salad (Fondue De Fromage De France Au Vin Blanc, Croutons Et Salade)</span><span class="price">$27.90/pax</span></h5>
												<p>Classic cheese fondue, crouton & salad (minimum order for 2 pax).</p>
											</li>


                                            <a href="menu_list.php" class="tf-button style1 mt-39">view all menu</a>
                                        </ul>

                                    </div>
                                </div>
                                <div class="content-inner">
                                    <div class="container_inner">
                                        <div class="left-img">
                                            <img src="assets/images/section/menu.jpg" alt="">
                                        </div>
                                        <div class="right-img">
                                            <img src="assets/images/section/menu1.jpg" alt="">
                                        </div>
                                        <ul class="menu-list">
                                            <li>
												<h5 class="name"><span class="txt">Bayconne Ham</span><span class="price">$17.90</span></h5>
											</li>

											<li>
												<h5 class="name"><span class="txt">Potato</span><span class="price">$9.90</span></h5>
											</li>

											<li>
												<h5 class="name"><span class="txt">Salad</span><span class="price">$7.90</span></h5>
											</li>

											<li>
												<h5 class="name"><span class="txt">Crouton</span><span class="price">$4.90</span></h5>
											</li>

                                            <a href="menu_list.php" class="tf-button style1 mt-39">view all menu</a>
                                        </ul>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
       
        <section class="choose">
            <div class="shape"></div>
            <div class="container">
                <div class="row">
                    <div class="col-xl-6 col-md-12">
                        <div class="choose-content">
                            <div class="block-text">
                                <p class="subtitle" data-aos-duration="1000" data-aos="fade-up">why choose us</p>
                                <h3 class="title" data-aos-duration="1000" data-aos="fade-up">We always want our customers to be satisfied </h3>

                                <div class="flat-tabs" data-aos-duration="1000" data-aos="fade-up" >
                                    <ul class="menu-tab">
                                        <li>
                                            <h5>your private event</h5>
                                        </li>
                                        <li>
                                            <h5>food safety</h5>
                                        </li>
                                        <li class="active">
                                            <h5>luxury space</h5>
                                        </li>

                                    </ul>

                                    <div class="content-tab">
                                        <div class="content-inner">
                                            <div class="container_inner">
                                                <p>The restaurant has a luxurious and elegant space, ensuring that
                                                    utensils, tables and chairs and other items are always clean.
                                                    Customers will feel secure and comfortable at home when dining at
                                                    our restaurant. Donec ullamcorper justo ac dolor sagittis mattis.
                                                </p>
                                                <ul class="list">
                                                    <li>music and space </li>
                                                    <li>atmosphere of fun </li>
                                                    <li>Experience the cozy space</li>
                                                    <li>everything is always clean and tidy </li>
                                                </ul>
                                                <a href="#" class="tf-button style3">read more</a>
                                            </div>
                                        </div>
                                        <div class="content-inner">
                                            <div class="container_inner">
                                                <p>The restaurant has a luxurious and elegant space, ensuring that
                                                    utensils, tables and chairs and other items are always clean.
                                                    Customers will feel secure and comfortable at home when dining at
                                                    our restaurant. Donec ullamcorper justo ac dolor sagittis mattis.
                                                </p>
                                                <ul class="list">
                                                    <li>music and space </li>
                                                    <li>atmosphere of fun </li>
                                                    <li>Experience the cozy space</li>
                                                    <li>everything is always clean and tidy </li>
                                                </ul>
                                                <a href="#" class="tf-button style3">read more</a>
                                            </div>
                                        </div>
                                        <div class="content-inner">
                                            <div class="container_inner">
                                                <p>The restaurant has a luxurious and elegant space, ensuring that
                                                    utensils, tables and chairs and other items are always clean.
                                                    Customers will feel secure and comfortable at home when dining at
                                                    our restaurant. Donec ullamcorper justo ac dolor sagittis mattis.
                                                </p>
                                                <ul class="list">
                                                    <li>music and space </li>
                                                    <li>atmosphere of fun </li>
                                                    <li>Experience the cozy space</li>
                                                    <li>everything is always clean and tidy </li>
                                                </ul>
                                                <a href="#" class="tf-button style3">read more</a>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-md-12">
                        <div class="choose-image" data-aos-duration="1000" data-aos="fade-left">
                            <div class="swiper swiperchoose">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide"><img src="assets/images/section/choose.jpg" alt=""></div>
                                    <div class="swiper-slide"><img src="assets/images/section/choose-1.jpg" alt="">
                                    </div>
                                </div>
                                <div class="swiper-button-next">next <br /> image</div>

                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="testimonials">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="swiper testimonialSwiper">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <div class="testimonials-content">
                                        <img src="assets/images/icon/quote.png" alt="" data-aos-duration="1000" data-aos="fade-up">
                                        <h4 data-aos-duration="1000" data-aos="fade-up">Good restaurant, delicious food, classy atmosphere
                                        </h4>
                                        <p data-aos-duration="1000" data-aos="fade-up">Please thank your team for their professional, efficient and friendly service
                                            on Sat night. The chefs smashed it <br /> and the drinks flowed freely!
                                            Everyone was impressed and were quite taken with how cost effective it was
                                            to <br /> have Ochre do what you did.</p>
                                        <ul class="rating" data-aos-duration="1000" data-aos="fade-up">
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                        </ul>

                                        <h5 data-aos-duration="1000" data-aos="fade-up">Margaret - Food critic</h5>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="testimonials-content">
                                        <img src="assets/images/icon/quote.png" alt="">
                                        <h4>Good restaurant, delicious food, classy atmosphere
                                        </h4>
                                        <p>Please thank your team for their professional, efficient and friendly service
                                            on Sat night. The chefs smashed it <br /> and the drinks flowed freely!
                                            Everyone was impressed and were quite taken with how cost effective it was
                                            to <br /> have Ochre do what you did.</p>
                                        <ul class="rating">
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                        </ul>

                                        <h5>Margaret - Food critic</h5>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="testimonials-content">
                                        <img src="assets/images/icon/quote.png" alt="">
                                        <h4>Good restaurant, delicious food, classy atmosphere
                                        </h4>
                                        <p>Please thank your team for their professional, efficient and friendly service
                                            on Sat night. The chefs smashed it <br /> and the drinks flowed freely!
                                            Everyone was impressed and were quite taken with how cost effective it was
                                            to <br /> have Ochre do what you did.</p>
                                        <ul class="rating">
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                        </ul>

                                        <h5>Margaret - Food critic</h5>
                                    </div>
                                </div>


                            </div>

                        </div>

                    </div>
                </div>
            </div>
        </section>

        <section class="vouchers">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="vouchers-content">
                            <div class="item image" data-aos-duration="1000" data-aos="fade-right">
                                <img src="assets/images/section/menu2.jpg" alt="">
                            </div>
                            <div class="item content">
                                <img src="assets/images/icon/shopping-bag.png" alt="" data-aos-duration="1000" data-aos="fade-up">
                                <h4 data-aos-duration="1000" data-aos="fade-up">order online</h4>
                                <p data-aos-duration="1000" data-aos="fade-up">Why to wait in line, When you can order online. <br />
                                    Suspendisse mattis tincidunt ornare. Suspendisse potent</p>
                                <a href="#" class="tf-button style3">order now</a>
                            </div>
                            <div class="item content">
                                <img src="assets/images/icon/gift-card.png" alt="" data-aos-duration="1000" data-aos="fade-up">
                                <h4 data-aos-duration="1000" data-aos="fade-up">Gift vouchers</h4>
                                <p data-aos-duration="1000" data-aos="fade-up">Offer an unforgettable experience at our restaurant <br />
                                    to your dear ones. Suspendisse mattis tincidunt ornare.
                                </p>
                                <a href="#" class="tf-button style3" >buy now</a>
                            </div>
                            <div class="item image" data-aos-duration="1000" data-aos="fade-left">
                                <img src="assets/images/section/menu3.jpg" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="s-blog">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="block-text center">
                            <p class="subtitle" data-aos-duration="1000" data-aos="fade-up">latest new</p>
                            <h3 class="title" data-aos-duration="1000" data-aos="fade-up">What's new in our blog? </h3>
                            <p class="text" data-aos-duration="1000" data-aos="fade-up">Read the latest news from our restaurant. Mauris condimentum ultrices arcu
                                in condimentum. <br />
                                Sed ante nunc, sodales quis laoreet eget
                            </p>

                        </div>

                        <div class="swiper blogSwiper">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <div class="blog-box">
                                        <div class="top-content">
                                            <div class="image">
                                                <img src="assets/images/section/blog-01.jpg" alt="">
                                            </div>
                                            <div class="meta">
                                                <h4>25</h4>
                                                <p>Jun 23</p>
                                            </div>
                                            <a href="blog_single.php" class="h5 title">How to Design a Small
                                                Restaurant</a>
                                        </div>
                                        <div class="bottom-content">
                                            <ul>
                                                <li class="author"><a href="#">by Jhon Matter</a></li>
                                                <li class="category"><a href="#">Restaurant, Food</a></li>
                                            </ul>
                                            <div class="line"></div>
                                            <p class="text">Bigger certainly doesn’t mean better when giving your guests
                                                a memorable dining experience and a tasty meal...</p>
                                            <a href="blog_single.php" class="btn-read">read more <i
                                                    class="fa fa-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="blog-box">
                                        <div class="top-content">
                                            <div class="image">
                                                <img src="assets/images/section/blog-02.jpg" alt="">
                                            </div>
                                            <div class="meta">
                                                <h4>25</h4>
                                                <p>Jun 23</p>
                                            </div>
                                            <a href="blog_single.php" class="h5 title">How Real Restaurants Approach
                                                Benefits</a>
                                        </div>
                                        <div class="bottom-content">
                                            <ul>
                                                <li class="author"><a href="#">by Jhon Matter</a></li>
                                                <li class="category"><a href="#">Restaurant, Food</a></li>
                                            </ul>
                                            <div class="line"></div>
                                            <p class="text">Bigger certainly doesn’t mean better when giving your guests
                                                a memorable dining experience and a tasty meal...</p>
                                            <a href="blog_single.php" class="btn-read">read more <i
                                                    class="fa fa-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="blog-box">
                                        <div class="top-content">
                                            <div class="image">
                                                <img src="assets/images/section/blog-03.jpg" alt="">
                                            </div>
                                            <div class="meta">
                                                <h4>25</h4>
                                                <p>Jun 23</p>
                                            </div>
                                            <a href="blog_single.php" class="h5 title">The Impact of The New Steps of
                                                Service</a>
                                        </div>
                                        <div class="bottom-content">
                                            <ul>
                                                <li class="author"><a href="#">by Jhon Matter</a></li>
                                                <li class="category"><a href="#">Restaurant, Food</a></li>
                                            </ul>
                                            <div class="line"></div>
                                            <p class="text">Bigger certainly doesn’t mean better when giving your guests
                                                a memorable dining experience and a tasty meal...</p>
                                            <a href="blog_single.php" class="btn-read">read more <i
                                                    class="fa fa-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="blog-box">
                                        <div class="top-content">
                                            <div class="image">
                                                <img src="assets/images/section/blog-01.jpg" alt="">
                                            </div>
                                            <div class="meta">
                                                <h4>25</h4>
                                                <p>Jun 23</p>
                                            </div>
                                            <a href="blog_single.php" class="h5 title">How to Design a Small
                                                Restaurant</a>
                                        </div>
                                        <div class="bottom-content">
                                            <ul>
                                                <li class="author"><a href="#">by Jhon Matter</a></li>
                                                <li class="category"><a href="#">Restaurant, Food</a></li>
                                            </ul>
                                            <div class="line"></div>
                                            <p class="text">Bigger certainly doesn’t mean better when giving your guests
                                                a memorable dining experience and a tasty meal...</p>
                                            <a href="blog_single.php" class="btn-read">read more <i
                                                    class="fa fa-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="blog-box">
                                        <div class="top-content">
                                            <div class="image">
                                                <img src="assets/images/section/blog-02.jpg" alt="">
                                            </div>
                                            <div class="meta">
                                                <h4>25</h4>
                                                <p>Jun 23</p>
                                            </div>
                                            <a href="blog_single.php" class="h5 title">How Real Restaurants Approach
                                                Benefits</a>
                                        </div>
                                        <div class="bottom-content">
                                            <ul>
                                                <li class="author"><a href="#">by Jhon Matter</a></li>
                                                <li class="category"><a href="#">Restaurant, Food</a></li>
                                            </ul>
                                            <div class="line"></div>
                                            <p class="text">Bigger certainly doesn’t mean better when giving your guests
                                                a memorable dining experience and a tasty meal...</p>
                                            <a href="blog_single.php" class="btn-read">read more <i
                                                    class="fa fa-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="blog-box">
                                        <div class="top-content">
                                            <div class="image">
                                                <img src="assets/images/section/blog-03.jpg" alt="">
                                            </div>
                                            <div class="meta">
                                                <h4>25</h4>
                                                <p>Jun 23</p>
                                            </div>
                                            <a href="blog_single.php" class="h5 title">The Impact of The New Steps of
                                                Service</a>
                                        </div>
                                        <div class="bottom-content">
                                            <ul>
                                                <li class="author"><a href="#">by Jhon Matter</a></li>
                                                <li class="category"><a href="#">Restaurant, Food</a></li>
                                            </ul>
                                            <div class="line"></div>
                                            <p class="text">Bigger certainly doesn’t mean better when giving your guests
                                                a memorable dining experience and a tasty meal...</p>
                                            <a href="blog_single.php" class="btn-read">read more <i
                                                    class="fa fa-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>



                </div>
            </div>
        </section>

        <section class="gallery">
			<div class="container-fluid">
				<div class="row">
					<div class="gallery-main">
						<!-- Gallery Box 1 -->
						<div class="gallery-box">
							<div class="image"><img src="assets/images/section/gallery-1.jpg" alt="Grilled Salmon with Herb Sauce"></div>
							<div class="content">
								<h5 class="name">Grilled Salmon with Herb Sauce</h5>
								<p class="cate">New Addition - Seasonal Menu</p>
								<div class="line"></div>
								<p class="text">Experience the freshness of our new seasonal menu! This grilled salmon is paired with a zesty herb sauce and roasted vegetables for a light yet flavorful dish.</p>
								<a href="#" class="action"><i class="fa fa-arrow-right"></i></a>
							</div>
						</div>

						<!-- Gallery Box 2 -->
						<div class="gallery-box">
							<div class="image"><img src="assets/images/section/gallery-2.jpg" alt="Truffle Mushroom Risotto"></div>
							<div class="content">
								<h5 class="name">Truffle Mushroom Risotto</h5>
								<p class="cate">Chef's Special - Vegetarian Delight</p>
								<div class="line"></div>
								<p class="text">Indulge in our creamy truffle mushroom risotto, crafted with premium ingredients and topped with shaved Parmesan. A must-try for vegetarians and foodies alike!</p>
								<a href="#" class="action"><i class="fa fa-arrow-right"></i></a>
							</div>
						</div>

						<!-- Gallery Box 3 -->
						<div class="gallery-box">
							<div class="image"><img src="assets/images/section/gallery-3.jpg" alt="Summer Berry Dessert Platter"></div>
							<div class="content">
								<h5 class="name">Summer Berry Dessert Platter</h5>
								<p class="cate">Dessert - Limited Time Offer</p>
								<div class="line"></div>
								<p class="text">Celebrate the season with our Summer Berry Dessert Platter, featuring handcrafted macarons, tarts, and sorbets made with fresh, ripe berries.</p>
								<a href="#" class="action"><i class="fa fa-arrow-right"></i></a>
							</div>
						</div>

						<!-- Gallery Box 4 -->
						<div class="gallery-box">
							<div class="image"><img src="assets/images/section/gallery-4.jpg" alt="Live Music Night at the Restaurant"></div>
							<div class="content">
								<h5 class="name">Live Music Night</h5>
								<p class="cate">Event - Every Friday</p>
								<div class="line"></div>
								<p class="text">Join us every Friday for an enchanting evening of live music, delicious food, and handcrafted cocktails. Perfect for unwinding after a long week!</p>
								<a href="#" class="action"><i class="fa fa-arrow-right"></i></a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>

        <section class="location">
            <div class="container">
                <div class="row">
                    <div class="col-xl-4 col-md-12">
                        <div class="image left" data-aos-duration="1000" data-aos="fade-right"><img src="assets/images/section/map1.jpg" alt=""></div>
                    </div>
                    <div class="col-xl-4 col-md-12">
                        <div class="content">
                            <div class="block-text center">
                                <p class="subtitle" data-aos-duration="1000" data-aos="fade-up">location</p>
                                <h3 class="title" data-aos-duration="1000" data-aos="fade-up">how to find us? </h3>
                                <p class="text" data-aos-duration="1000" data-aos="fade-up">It is inconvenient to not know the address, below is the address and
                                    <br /> contact of the Basilico restaurant
                                </p>
                                <h6 data-aos-duration="1000" data-aos="fade-up">call us book a table & delivery:</h6>
                                <h3 class="phone" data-aos-duration="1000" data-aos="fade-up"><?php echo PHONE_NUMBER; ?></h3>
                                <h6 data-aos-duration="1000" data-aos="fade-up">information restaurant:</h6>
                                <p class="mb-6" data-aos-duration="1000" data-aos="fade-up"><span>Address:</span> 4517 Washington Ave. Manchester, Kentucky 39495,
                                    USA</p>
                                <p class="mb-6" data-aos-duration="1000" data-aos="fade-up"><span>Mail:</span> Basilicofood123@gmail.com</p>
                                <p class="mb-6" data-aos-duration="1000" data-aos="fade-up"><span>Opening Hour:</span> Mon - Fri : 9.00am - 22.00pm, Holidays :
                                    Close</p>
                                <a href="#" class="tf-button style3" >get directons</a>

                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-12" data-aos-duration="1000" data-aos="fade-left">
                        <div class="image right">
                            <img src="assets/images/section/map2.jpg" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <?php include('include/footer.php'); ?>

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
	  var swiper = new Swiper(".mySwiper", {
		loop: true,
		speed: 2000, // transition duration in ms (1000 = 1 second)
		autoplay: {
		  delay: 3000, // 3 seconds between slides
		  disableOnInteraction: false,
		},
		pagination: {
		  el: ".swiper-pagination",
		  clickable: true,
		},
	  });
	</script>


</body>

</html>