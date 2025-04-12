<header id="header_main" class="header style-1">
	<div class="container">
		<div id="site-header-inner">
			<div class="header__logo">
				<a href="index.html"><img src="assets/images/logo/foot-logo.png" alt=""></a>
			</div>
			<!-- /#main-nav -->

			<a href="https://ordernow.sg/jules/reservation/" class="tf-button style1 ">BOOK A TABLE</a>
			<div class="sidebar-btn">
				<a class="btn-side">
					<span></span>
				</a>
				<div class="sidebar-content">
					<img src="assets/images/logo/logo.png" alt="">
					<p>
						Welcome to Jules Restaurant, where flavors meet tradition. Enjoy a cozy ambiance and mouthwatering dishes freshly prepared with love.
					</p>
					<h4><?php echo PHONE_NUMBER; ?></h4>
					<p><?php echo ADDRESS; ?></p>
					<p><a href="mailto:<?php echo EMAIL_ADDRESS; ?>"><?php echo EMAIL_ADDRESS; ?></a></p>
					<div class="line"></div>
					<p>Opening Hour: <br>
						Saturday - Sunday : 11.00am - 12.00pm, Holidays : Close</p>
					<div class="line"></div>
					<ul class="list-social">
						<li><a href="#"><i class="fa-brands fa-facebook-f"></i></a></li>
						<li><a href="#"><i class="fa-brands fa-twitter"></i></a></li>
						<li><a href="#"><i class="fa-solid fa-envelope"></i></a></li>
						<li><a href="#"><i class="fa-brands fa-instagram"></i></a></li>
					</ul>
				</div>
			</div>
			<div class="mobile-button"><span></span></div><!-- /.mobile-button -->
		</div>
	</div>
	<nav id="main-nav-mobi" class="main-nav" style="display: none;">
		<?php
		$current_page = basename($_SERVER['PHP_SELF']);
		?>

		<ul id="menu-primary-menu" class="menu">
			<li class="menu-item menu-item-has-children <?= $current_page == 'index.php' ? 'current-menu-item' : '' ?>">
				<a href="index.php">Home</a>
			</li>
			<li class="menu-item menu-item-has-children <?= $current_page == 'about.php' ? 'current-menu-item' : '' ?>">
				<a href="about.php">About Us</a>
			</li>
			<li class="menu-item menu-item-has-children <?= $current_page == 'menu_list.php' ? 'current-menu-item' : '' ?>">
				<a href="menu_list-1.php">Menu</a>
			</li>
			<li class="menu-item menu-item-has-children <?= $current_page == 'gallery.php' ? 'current-menu-item' : '' ?>">
				<a href="gallery.php">Gallery</a>
			</li>
			<li class="menu-item menu-item-has-children <?= $current_page == 'blog_list.php' ? 'current-menu-item' : '' ?>">
				<a href="blog_list.php">Blog</a>
			</li>
			<li class="menu-item menu-item-has-children <?= $current_page == 'reviews.php' ? 'current-menu-item' : '' ?>">
				<a href="reviews.php">Review</a>
			</li>
			<li class="menu-item menu-item-has-children <?= $current_page == 'contact.php' ? 'current-menu-item' : '' ?>">
				<a href="contact.php">Contact</a>
			</li>
		</ul>

	</nav>
</header>