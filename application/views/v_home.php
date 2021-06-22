<!DOCTYPE html>
<html class="no-js">

<head>

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Welcome To Cipta Solusi Pratama</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="" />
	<meta name="keywords" content="" />

	<link rel="shorcut icon" type="text/css" href="<?php echo base_url() . 'assets/images/favicon.png' ?>">

	<!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
	<link rel="shortcut icon" href="<?php echo base_url() . 'theme/favicon.ico' ?>">

	<!-- Animate.css -->
	<link rel="stylesheet" href="<?php echo base_url() . 'theme/css/animate.css' ?>">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="<?php echo base_url() . 'theme/css/icomoon.css' ?>">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="<?php echo base_url() . 'theme/css/bootstrap.css' ?>">
	<!-- Flexslider  -->
	<link rel="stylesheet" href="<?php echo base_url() . 'theme/css/flexslider.css' ?>">
	<!-- Theme style  -->
	<link rel="stylesheet" href="<?php echo base_url() . 'theme/css/style.css' ?>">

	<!-- Modernizr JS -->
	<script src="<?php echo base_url() . 'theme/js/modernizr-2.6.2.min.js' ?>"></script>
	<?php
	error_reporting(0);
	function limit_words($string, $word_limit)
	{
		$words = explode(" ", $string);
		return implode(" ", array_splice($words, 0, $word_limit));
	}

	?>

</head>

<body>
	<div id="fh5co-page">
		<?php $this->load->view('v_header'); ?>

		<aside id="fh5co-hero" class="js-fullheight">
			<div class="flexslider js-fullheight">
				<ul class="slides">
					<li style="background-image: url(<?php echo base_url() . 'theme/images/slide_1.jpeg' ?>);">
						<div class="overlay-gradient"></div>
						<div class="container">
							<div class="col-md-10 col-md-offset-1 text-center js-fullheight slider-text">
								<div class="slider-text-inner">
									<h2>Start Your Business With This Source</h2>

								</div>
							</div>
						</div>
					</li>
					<li style="background-image: url(<?php echo base_url() . 'theme/images/slide_2.jpg' ?>);">
						<div class="container">
							<div class="col-md-10 col-md-offset-1 text-center js-fullheight slider-text">
								<div class="slider-text-inner">
									<h2>Take Your Business To The Next Level</h2>

								</div>
							</div>
						</div>
					</li>
					<li style="background-image: url(<?php echo base_url() . 'theme/images/slide_3.jpg' ?>);">
						<div class="container">
							<div class="col-md-10 col-md-offset-1 text-center js-fullheight slider-text">
								<div class="slider-text-inner">
									<h2>We Think Different That Others Can't</h2>

								</div>
							</div>
						</div>
					</li>
				</ul>
			</div>
		</aside>

		<div id="fh5co-why-us" class="animate-box">
			<div class="container">
				<div class="row">

					<div class="col-md-4 text-center item-block">
						<span class="icon"><img src="<?php echo base_url() . 'theme/images/aa.png' ?>" class="img-responsive"></span>
						<h3>WELDING</h3>
						<p>Penyambungan berbagai logam untuk keperluan apapun.</p>
					</div>
					<div class="col-md-4 text-center item-block">
						<span class="icon"><img src="<?php echo base_url() . 'theme/images/1.png' ?>" class="img-responsive"></span>
						<h3>STEEL WORK</h3>
						<p>Segala pekerjaan yang berhubungan dengan besi, metal, konstruksi, dan pengelasan.</p>
					</div>
					<div class="col-md-4 text-center item-block">
						<span class="icon"><img src="<?php echo base_url() . 'theme/images/2.png' ?>" class="img-responsive"></span>
						<h3>VALVE INSTALATION</h3>
						<p>Melakukan instalasi perpipaan yang berfungsi untuk menghentikan dan meneruskan aliran (flow).</p>
					</div>
					<div class="col-md-4 text-center item-block">
						<span class="icon"><img src="<?php echo base_url() . 'theme/images/4.png' ?>" class="img-responsive"></span>
						<h3>CIVIL MAINTENANCE</h3>
						<p> Melakukan maintenance dan pengerjaan gedung, pabrik, gudang, kantor, rumah.</p>
					</div>
					<div class="col-md-4 text-center item-block">
						<span class="icon"><img src="<?php echo base_url() . 'theme/images/7.png' ?>" class="img-responsive"></span>
						<h3>MACHINERY INSTALLATION</h3>
						<p>Melakukan instalasi terhadap mesin.</p>
					</div>
					<div class="col-md-4 text-center item-block">
						<span class="icon"><img src="<?php echo base_url() . 'theme/images/6.png' ?>" class="img-responsive"></span>
						<h3>FABRICATION HOPPER</h3>
						<p>Perancangan dan pembuatan Hopper feed yang kompleks untuk memenuhi kebutuhan Anda.</p>
					</div>
				</div>
			</div>
		</div>

		<?php $this->load->view('v_footer'); ?>
	</div>


	<!-- jQuery -->
	<script src="<?php echo base_url() . 'theme/js/jquery.min.js' ?>"></script>
	<!-- jQuery Easing -->
	<script src="<?php echo base_url() . 'theme/js/jquery.easing.1.3.js' ?>"></script>
	<!-- Bootstrap -->
	<script src="<?php echo base_url() . 'theme/js/bootstrap.min.js' ?>"></script>
	<!-- Waypoints -->
	<script src="<?php echo base_url() . 'theme/js/jquery.waypoints.min.js' ?>"></script>
	<!-- Flexslider -->
	<script src="<?php echo base_url() . 'theme/js/jquery.flexslider-min.js' ?>"></script>

	<!-- MAIN JS -->
	<script src="<?php echo base_url() . 'theme/js/main.js' ?>"></script>

</body>

</html>