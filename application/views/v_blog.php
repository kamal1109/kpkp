<!DOCTYPE html>
<html class="no-js">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Blog</title>
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
	<style>
		a {
			color: #000000;
			-webkit-transition: 0.5s;
			-o-transition: 0.5s;
			transition: 0.5s;
		}
	</style>



	<div id="fh5co-page">
		<?php $this->load->view('v_header'); ?>

		<div class="fh5co-services">
			<div class="container">
				<div class="row">
					<div class="col-md-6 col-md-offset-3 text-center fh5co-heading animate-box">
						<h2>ARTIKEL TERBARU</h2>
					</div>
					<?php
					foreach ($data->result_array() as $j) :
						$post_id = $j['tulisan_id'];
						$post_judul = $j['tulisan_judul'];
						$post_isi = $j['tulisan_isi'];
						$post_author = $j['tulisan_author'];
						$post_image = $j['tulisan_gambar'];
						$post_tglpost = $j['tanggal'];
						$post_slug = $j['tulisan_slug'];
					?>
						<div class="col-md-4">
							<span class="icon"><img src="<?php echo base_url() . 'assets/images/' . $post_image; ?>" class="img-responsive"></span>

							<a href="<?php echo base_url() . 'artikel/' . $post_slug; ?>"><?php echo $post_judul; ?></a>
							<span><?php echo $post_tglpost . ' | ' . $post_author; ?></span>
							<p><?php echo limit_words($post_isi, 10) . '...'; ?></em></p>
							<p><a href="<?php echo base_url() . 'artikel/' . $post_slug; ?>" class="btn btn-outline">Selengkapnya <i class="icon-arrow-right"></i></a></p>
						</div>
					<?php endforeach; ?>

				</div>
			</div>
			<center><?php echo $page; ?></center>
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
	<!-- Easy PieChart -->
	<script src="<?php echo base_url() . 'theme/js/jquery.easypiechart.min.js' ?>"></script>
	<!-- Flexslider -->
	<script src="<?php echo base_url() . 'theme/js/jquery.flexslider-min.js' ?>"></script>
	<!-- Stellar -->
	<script src="<?php echo base_url() . 'theme/js/jquery.stellar.min.js' ?>"></script>

	<!-- MAIN JS -->
	<script src="<?php echo base_url() . 'theme/js/main.js' ?>"></script>

</body>

</html>