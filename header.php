<!doctype html>
<!--[if IE 9]><html class="ie9" lang="en"><![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--><html lang="en"><!--<![endif]-->
	<head>
		<title><?php echo $pageTitle; ?></title>
		<!--meta info-->
		<meta charset="utf-8">
		<meta name="viewport" content="initial-scale=1.0,maximum-scale=1.0,user-scalable=no">
		<meta name="author" content="">
		<meta name="keywords" content="">
		<meta name="description" content="">
		<link rel="shortcut icon" type="image/x-icon" href="images/mcvicon.jpg">
		<!--web fonts-->
		<!-- <link href='http://fonts.googleapis.com/css?family=Lato:100,300,400,700,900,100italic,300italic,400italic' rel='stylesheet' type='text/css'> -->
		<link href='http://fonts.googleapis.com/css?family=Lato:100,300,400,700,900,100italic,300italic,400italic' rel='stylesheet' type='text/css'>
		<link href='http://fonts.googleapis.com/css?family=Acme|Lusitana:400,700' rel='stylesheet' type='text/css'>
		<!--libs css-->
		<link rel="stylesheet" type="text/css" media="all" href="plugins/owl-carousel/owl.carousel.css">
		<link rel="stylesheet" type="text/css" media="all" href="plugins/owl-carousel/owl.transitions.css">
		<link rel="stylesheet" type="text/css" media="all" href="plugins/jackbox/css/jackbox.min.css">
		<link rel="stylesheet" type="text/css" media="screen" href="plugins/rs-plugin/css/settings.css">

		<!--theme css-->
		<link rel="stylesheet" type="text/css" media="all" href="css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" media="all" href="css/theme-animate.css">
		<link rel="stylesheet" type="text/css" media="all" href="css/style.css">
	</head>
		<body style="background: rgba(14,118,188,1);
				background: -moz-linear-gradient(top, rgba(14,118,188,1) 0%, rgba(14,118,188,1) 7%, rgba(247,249,249,1) 92%, rgba(254,254,254,1) 100%);
				background: -webkit-gradient(left top, left bottom, color-stop(0%, rgba(14,118,188,1)), color-stop(7%, rgba(14,118,188,1)), color-stop(92%, rgba(247,249,249,1)), color-stop(100%, rgba(254,254,254,1)));
				background: -webkit-linear-gradient(top, rgba(14,118,188,1) 0%, rgba(14,118,188,1) 7%, rgba(247,249,249,1) 92%, rgba(254,254,254,1) 100%);
				background: -o-linear-gradient(top, rgba(14,118,188,1) 0%, rgba(14,118,188,1) 7%, rgba(247,249,249,1) 92%, rgba(254,254,254,1) 100%);
				background: -ms-linear-gradient(top, rgba(14,118,188,1) 0%, rgba(14,118,188,1) 7%, rgba(247,249,249,1) 92%, rgba(254,254,254,1) 100%);
				background: linear-gradient(to bottom, rgba(14,118,188,1) 0%, rgba(14,118,188,1) 7%, rgba(247,249,249,1) 92%, rgba(254,254,254,1) 100%);">
					
	<script src="js/jquery-2.1.0.min.js"></script>
	<script src="plugins/jquery.queryloader2.min.js"></script>
	<script src="plugins/modernizr.js"></script>
	<script>
		$('html').addClass('d_none');
		$(document).ready(function(){
			$('html').show();
			$("body").queryLoader2({
				backgroundColor: '#fff',
				barColor : '#35eef6',
				barHeight: 4,
				percentage:true,
				deepSearch:true,
				minimumTime:1000
			});
		});
	</script>


		<!--layout-->
		<div class="boxed_layout bg_light">
			<!--header markup-->
			<header role="banner" class="relative">
				<!-- <span class="gradient_line"></span> -->
				<!--top part-->
				<!--header bottom part-->
				<section class="header_bottom_part bg_light">
					<div class="container">
						<div class="d_table w_full d_xs_block">
							<!--logo-->
							<div class="col-lg-2 col-md-2 col-sm-2 d_table_cell d_xs_block f_none v_align_m logo t_xs_align_c">
								<a href="index.html" class="d_inline_m m_xs_top_20 m_xs_bottom_20">
									<img src="images/mcv-logo.png" alt="" style="padding:10px">
								</a>
							</div>
							<div class="col-lg-10 col-md-10 col-sm-10 t_align_r d_table_cell d_xs_block f_none">
								<div class="relative clearfix t_align_r">
									<button id="menu_button" class="r_corners tr_all color_blue db_centered m_bottom_20 d_none d_xs_block">
										<i class="icon-menu"></i>
									</button>
									<!--main navigation-->
									<nav role="navigation" class="d_inline_m d_xs_none m_xs_right_0 m_right_15 t_align_l m_xs_bottom_15">
										<ul class="hr_list main_menu fw_light">
											<li class="current container3d relative f_xs_none m_xs_bottom_5">
												<a class="color_dark fs_large relative r_xs_corners" href="index.php">Home
												</a>
											</li>
											<li class="container3d relative f_xs_none m_xs_bottom_5">
												<a class="color_dark fs_large relative r_xs_corners" href="gulf-shores.php">Gulf Shores
												</a>
											</li>
											<li class="container3d relative f_xs_none m_xs_bottom_5">
												<a class="color_dark fs_large relative r_xs_corners" href="orange-beach.php">Orange Beach
												</a>
												
											</li>
											<li class="container3d relative f_xs_none m_xs_bottom_5">
												<a class="color_dark fs_large relative r_xs_corners" href="bayfront.php">Bayfront
												</a>
												
											</li>
										</ul>
									</nav>
									<!--searchform button-->
									<!-- <div class="relative d_inline_m search_buttons d_xs_none">
										<button class="icon_wrap_size_2 circle color_grey_light_2 tr_all color_blue_hover"><i class="icon-cancel"></i></button>
										<button class="icon_wrap_size_2 active circle color_grey_light_2 tr_all color_blue_hover"><i class="icon-search"></i></button>
									</div> -->
									<!--searchform-->
									<!-- <form role="search" class="bg_light animate_ vc_child t_align_r fw_light tr_all trf_xs_none">
										<input type="text" name="search" placeholder="Search" class="r_corners d_inline_m">
									</form> -->
								</div>
							</div>
						</div>
					</div>
				</section>
			</header>
			