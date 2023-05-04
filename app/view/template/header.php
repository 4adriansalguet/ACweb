<?php $this->suspensionRedirect($view); ?>
<!DOCTYPE html>
<html lang="en" <?php $this->helpers->htmlClasses(); ?>>

<head>
	<meta charset="utf-8">
	<!-- <meta name="viewport" content="width=device-width, initial-scale=1.0" /> -->
	<meta name="apple-mobile-web-app-capable" content="yes" />
	<meta name="apple-mobile-web-app-status-bar-style" content="black" />
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link
		href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;800&family=Montserrat:wght@100;400;500;600&family=Playfair+Display&family=Poppins:ital@1&display=swap"
		rel="stylesheet">
	<link rel="preload" href="ChargeVectorBold.woff2" as="font" type="font/woff2" crossorigin>
	<link rel="preload" href="ChargeVector.woff2" as="font" type="font/woff2" crossorigin>
	<?php $this->helpers->seo($view); ?>
	<link rel="icon" href="public/images/favicon.png" type="image/x-icon">
	<link href="<?php echo URL; ?>public/styles/style.css" rel="stylesheet">
	<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/cookieconsent2/3.0.3/cookieconsent.min.css" />
	<link rel="stylesheet" href="<?php echo URL; ?>public/fancybox/source/jquery.fancybox.css" media="screen" />
	<link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
	<?php $this->helpers->analytics(); ?>
	<link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
	<script src="./public/scripts/responsive-menu.js"></script>
	<!-- SLICK ASS -->
	<link rel="stylesheet" type="text/css" href="./public/styles/slick.css" />
	<link rel="stylesheet" type="text/css" href="./public/styles/slick-theme.css" />

</head>

<body <?php $this->helpers->bodyClasses($view); ?>>
	<?php $this->checkSuspensionHeader(); ?>


	<!-- <li <?php $this->helpers->isActiveMenu("home"); ?> class="btn"><a  href="home#content">HOME</a></li>
	<li <?php $this->helpers->isActiveMenu("about"); ?>><a href="about#content">ABOUT US</a></li> -->
	<header>
		<div class="slider">
		<div class="slide">
			</div>
		<div class="slide">
			</div>
		<div class="slide">
			</div>
		</div>
		<div id="nav-container">
			<nav>
				<h2 class="fear">
					WE ARE <span class="gone">ASSASSINS<span>
				</h2>
				<img src="./public/images/common/main_logo.png" alt="logo">
				<ul>
					<li <?php $this->helpers->isActiveMenu("home"); ?> class="btn"><a href="home#content">HOME</a></li>
					<li <?php $this->helpers->isActiveMenu("about"); ?>><a href="about#content">ABOUT US</a></li>
					<li <?php $this->helpers->isActiveMenu("gallery"); ?>><a href="gallery#content">GALLERY</a></li>
				</ul>
			</nav>
		</div>

		<div class="belief">
			<h3>
				NOTHING IS TRUE <span class="quote">EVERTHING IS PERMITTED.</span>
			</h3>

			<a href="gallery#content" class="homeBTN">
				LEARN MORE
			</a>

		</div>

	




		<?php if ($view == "home"): ?>

		<?php endif; ?>
	</header>