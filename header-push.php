<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
	<title>
		<?php wp_title(''); ?>
	</title>
	<meta charset="<?php bloginfo( 'charset' ); ?>"/>
	<meta name="description" content="<?php bloginfo('description'); ?>"/>
	<meta name="viewport" content="width=device-width"/>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="mobile-web-app-capable" content="yes">
	<meta name="apple-mobile-web-app-capable" content="yes">
	<meta name="apple-mobile-web-app-title" content="<?php bloginfo( 'name' ); ?> - <?php bloginfo( 'description' ); ?>">
	<link rel="alternate" href="https://sbobet.gclub-casino.com/" hreflang="th"/>
	<meta name="viewport" content="width=device-width"/>
	<?php wp_head(); ?>
	<style>
		#my-menu:not( .mm-menu) {
			display: none;
		}
	</style>
	<?php

	function mytheme_customize_css() {
		?>
	<style type="text/css">
		h1 {
			color: <?php echo get_theme_mod('text_color', '#000000');
			?>;
		}
	</style>
	<?php
	}
	add_action( 'wp_head', 'mytheme_customize_css' );
	?>
</head>


<body <?php body_class(); ?>>
	<div class="container" style="border:5px solid red;">
		<!-- Push Wrapper -->
		<div class="mp-pusher" id="mp-pusher">

			<!-- mp-menu -->
			<nav id="mp-menu" class="mp-menu">
				<div class="mp-level">
					<h2 class="icon icon-world">All Categories</h2>
					<ul>
						<li class="icon icon-arrow-left">
							<a class="icon icon-display" href="#">Devices1</a>
							<div class="mp-level">
								<h2 class="icon icon-display">Devices</h2>
								<a class="mp-back" href="#">back</a>
								<ul>
									<li class="icon icon-arrow-left">
										<a class="icon icon-phone" href="#">Mobile Phones</a>
										<div class="mp-level">
											<h2>Mobile Phones</h2>
											<a class="mp-back" href="#">back</a>
											<ul>
												<li><a href="#">Super Smart Phone</a>
												</li>
												<li><a href="#">Thin Magic Mobile</a>
												</li>
												<li><a href="#">Performance Crusher</a>
												</li>
												<li><a href="#">Futuristic Experience</a>
												</li>
											</ul>
										</div>
									</li>
									<li class="icon icon-arrow-left">
										<a class="icon icon-tv" href="#">Televisions</a>
										<div class="mp-level">
											<h2>Televisions</h2>
											<a class="mp-back" href="#">back</a>
											<ul>
												<li><a href="#">Flat Superscreen</a>
												</li>
												<li><a href="#">Gigantic LED</a>
												</li>
												<li><a href="#">Power Eater</a>
												</li>
												<li><a href="#">3D Experience</a>
												</li>
												<li><a href="#">Classic Comfort</a>
												</li>
											</ul>
										</div>
									</li>
									<li class="icon icon-arrow-left">
										<a class="icon icon-camera" href="#">Cameras</a>
										<div class="mp-level">
											<h2>Cameras</h2>
											<a class="mp-back" href="#">back</a>
											<ul>
												<li><a href="#">Smart Shot</a>
												</li>
												<li><a href="#">Power Shooter</a>
												</li>
												<li><a href="#">Easy Photo Maker</a>
												</li>
												<li><a href="#">Super Pixel</a>
												</li>
											</ul>
										</div>
									</li>
								</ul>
							</div>
						</li>
						<li class="icon icon-arrow-left">
							<a class="icon icon-news" href="#">Magazines1</a>
							<div class="mp-level">
								<h2 class="icon icon-news">Magazines</h2>
								<a class="mp-back" href="#">back</a>
								<ul>
									<li><a href="#">National Geographic</a>
									</li>
									<li><a href="#">Scientific American</a>
									</li>
									<li><a href="#">The Spectator</a>
									</li>
									<li><a href="#">The Rambler</a>
									</li>
									<li><a href="#">Physics World</a>
									</li>
									<li><a href="#">The New Scientist</a>
									</li>
								</ul>
							</div>
						</li>
						<li class="icon icon-arrow-left">
							<a class="icon icon-shop" href="#">Store1</a>
							<div class="mp-level">
								<h2 class="icon icon-shop">Store</h2>
								<a class="mp-back" href="#">back</a>
								<ul>
									<li class="icon icon-arrow-left">
										<a class="icon icon-t-shirt" href="#">Clothes</a>
										<div class="mp-level">
											<h2 class="icon icon-t-shirt">Clothes</h2>
											<a class="mp-back" href="#">back</a>
											<ul>
												<li class="icon icon-arrow-left">
													<a class="icon icon-female" href="#">Women's Clothing</a>
													<div class="mp-level">
														<h2 class="icon icon-female">Women's Clothing</h2>
														<a class="mp-back" href="#">back</a>
														<ul>
															<li><a href="#">Tops</a>
															</li>
															<li><a href="#">Dresses</a>
															</li>
															<li><a href="#">Trousers</a>
															</li>
															<li><a href="#">Shoes</a>
															</li>
															<li><a href="#">Sale</a>
															</li>
														</ul>
													</div>
												</li>
												<li class="icon icon-arrow-left">
													<a class="icon icon-male" href="#">Men's Clothing</a>
													<div class="mp-level">
														<h2 class="icon icon-male">Men's Clothing</h2>
														<a class="mp-back" href="#">back</a>
														<ul>
															<li><a href="#">Shirts</a>
															</li>
															<li><a href="#">Trousers</a>
															</li>
															<li><a href="#">Shoes</a>
															</li>
															<li><a href="#">Sale</a>
															</li>
														</ul>
													</div>
												</li>
											</ul>
										</div>
									</li>
									<li>
										<a class="icon icon-diamond" href="#">Jewelry</a>
									</li>
									<li>
										<a class="icon icon-music" href="#">Music</a>
									</li>
									<li>
										<a class="icon icon-food" href="#">Grocery</a>
									</li>
								</ul>
							</div>
						</li>
						<li><a class="icon icon-photo" href="#">Collections1</a>
						</li>
						<li><a class="icon icon-wallet" href="#">Credits1</a>
						</li>
					</ul>

				</div>
			</nav>

			<div class="scroller">
				<a href="#" id="trigger" class="menu-trigger"><span></span><span></span><span></span></a>
				<!-- this is for emulating position fixed of the nav -->
				<?php /*?>
				<div class="scroller-inner">
					<!-- Top Navigation -->
					<div class="codrops-top clearfix">
						<a class="codrops-icon codrops-icon-prev" href="http://tympanus.net/Tutorials/CircularNavigation/"><span>Previous Demo</span></a>
						<span class="right"><a class="codrops-icon codrops-icon-drop" href="http://tympanus.net/codrops/?p=16252"><span>Back to the Codrops Article</span>
						</a>
						</span>
					</div>
					<header class="codrops-header">
						<h1>Multi-Level Push Menu <span>Off-screen navigation with multiple levels</span></h1>
					</header>
					<div class="content clearfix">
						<div class="block block-40 clearfix">
							<p><a href="#" id="trigger" class="menu-trigger">Open/Close Menu</a>
							</p>
							<nav class="codrops-demos">
								<a href="index.html">Demo 1: Overlapping levels</a>
								<a href="index2.html">Demo 2: Covering levels</a>
								<a class="current-demo" href="index3.html">Demo 3: Overlapping levels with back links</a>
							</nav>
						</div>
						<div class="block block-60">
							<p><strong>Demo 3:</strong> Overlapping levels with back links</p>
							<p>This menu will open by pushing the website content to the right. It has multi-level functionality, allowing endless nesting of navigation elements.</p>
							<p>The next level can optionally overlap or cover the previous one.</p>
						</div>
						<div class="info">
							<p>If you enjoyed this you might also like:</p>
							<p><a href="http://goo.gl/JLJ4v5">Responsive Multi-Level Menu</a>
							</p>
							<p><a href="http://goo.gl/qjbq9Y">Google Nexus Website Menu</a>
							</p>
						</div>
					</div>
				</div>
				<!-- /scroller-inner -->
				<?php */?>
