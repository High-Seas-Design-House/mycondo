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
		<meta name="description" content=<?php echo $description; ?>>
		<link rel="shortcut icon" type="image/x-icon" href="../images/mcvicon.jpg">
		<!--web fonts-->
		<link href='http://fonts.googleapis.com/css?family=Lato:100,300,400,700,900,100italic,300italic,400italic' rel='stylesheet' type='text/css'>
		<link href='http://fonts.googleapis.com/css?family=Acme|Lusitana:400,700' rel='stylesheet' type='text/css'>
		<!--libs css-->
		<link rel="stylesheet" type="text/css" media="all" href="../plugins/owl-carousel/owl.carousel.css">
		<link rel="stylesheet" type="text/css" media="all" href="../plugins/owl-carousel/owl.transitions.css">
		<link rel="stylesheet" type="text/css" media="all" href="../plugins/jackbox/css/jackbox.min.css">
		<link rel="stylesheet" type="text/css" media="screen" href="../plugins/rs-plugin/css/settings.css">

		<!--theme css-->
		<link rel="stylesheet" type="text/css" media="all" href="../css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" media="all" href="../css/theme-animate.css">
		<link rel="stylesheet" type="text/css" media="all" href="../css/style.css">
	</head>
	<!-- <body class="sticky_menu"> -->
		<body>
			<script src="../js/jquery-2.1.0.min.js"></script>
			<script src="../plugins/jquery.queryloader2.min.js"></script>
			<script src="../plugins/modernizr.js"></script>
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
				<!--header bottom part-->
				<section class="header_bottom_part bg_light">
					<div class="container">
						<div class="d_table w_full d_xs_block">
							<!--logo-->
							<div class="col-lg-2 col-md-2 col-sm-2 d_table_cell d_xs_block f_none v_align_m logo t_xs_align_c">
								<a href="../index.php" class="d_inline_m m_xs_top_20 m_xs_bottom_20">
									<img src="../images/mcv-logo.png" alt="My Condo Value Logo" style="padding:10px">
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
											<li class="container3d relative f_xs_none m_xs_bottom_5">
												<a class="color_dark fs_large relative r_xs_corners" href="../index.php">Home
												</a>
											</li>
											<li class="container3d relative f_xs_none m_xs_bottom_5">
												<a class="color_dark fs_large relative r_xs_corners" href="../gulf-shores.php">Gulf Shores
												</a>
											</li>
											<li class="container3d relative f_xs_none m_xs_bottom_5">
												<a class="color_dark fs_large relative r_xs_corners" href="../orange-beach.php">Orange Beach
												</a>

											</li>
											<li class="container3d relative f_xs_none m_xs_bottom_5">
												<a class="color_dark fs_large relative r_xs_corners" href="../bayfront.php">Bayfront
												</a>

											</li>
										</ul>
									</nav>

								</div>
							</div>
						</div>
					</div>
				</section>
			</header>


			<section class="page_title_3 bg_gradient t_align_c relative wrapper">
				<div class="container">
					<h1 class="color_light fw_light "> <?php echo $pageTitle; ?> </h1>
				</div>
			</section>

			<div class="section_offset" style="background-color:#ececec;">
				<div class="container clearfix">
					<div class="row relative">

						<!-- <div class="mobile-show">
									<aside class="col-lg-5 col-md-5 col-sm-5 m_top_5" id="scroll_sidebar">
										<figure class="m_bottom_40 m_xs_bottom_30">
											<div class="d_table_cell d_xs_block v_align_m">
												<div class="create_account_form_wrap r_corners d_inline_b w_xs_full">
													<h4 class="fw_light color_dark t_align_c m_bottom_23"><strong>Sign Up Now</strong><br><br> It's Time To Get Your Investment Working For You.</h4>
													<form class="create_account_form">
														<ul>
															<li class="m_bottom_10 m_xs_bottom_15 relative">
																<i class="icon-mail-alt login_icon fs_medium color_grey_light_2"></i>
																<input type="email" name="" placeholder="Email" class="r_corners bg_light w_full border_none">
															</li>
															<li class="m_bottom_10 m_xs_bottom_15 relative">
																<i class="icon-user login_icon fs_medium color_grey_light_2"></i>
																<input type="text" name="" placeholder="Name" class="r_corners bg_light w_full border_none">
															</li>
															<li class="t_align_c">
																<button class="button_type_3 d_inline_b color_blue r_corners tr_all fw_light">Submit</button>
															</li>
														</ul>
													</form>
													<br>
														<div class="t_align_c">
															<h4 class="color_dark m_bottom_20">Call Today<br> For a Special Offer:</h4>
																<div class="d_inline_m icon_wrap_size_1 color_blue circle m_right_10">
																	<i class="icon-phone-1"></i>
																</div>
																855-LISTN4U(547-8648)
														</div>
												</div>
											</div>
										</figure>
									</aside>
								</div> -->
								
								<!--images-->
								<section class="col-lg-7 col-md-7 col-sm-7 m_xs_bottom_30" style="padding-top:15px">
									<img src=<?php echo $imgSrc; ?> style=<?php echo $imgCls; ?>>
								</section>
								<!--description-->
								<!-- <div class="mobile-hide"> -->
									<aside class="col-lg-5 col-md-5 col-sm-5 m_top_5">
										<figure class="m_bottom_40 m_xs_bottom_30">
											<div class="d_table_cell d_xs_block v_align_m"><!-- t_align_c f_none -->
												<div class="create_account_form_wrap r_corners d_inline_b w_xs_full">
													<h4 class="fw_light color_dark t_align_c m_bottom_23"><strong>Sign Up Now</strong><br><br> It's Time To Get Your Investment Working For You.</h4>
														<div class="form_p_l">
															<div id="wufoo-z1n0frd7199sm5r">
																Fill out my <a href="https://dgrantham.wufoo.com/forms/z1n0frd7199sm5r">online form</a>.
															</div>

															<script type="text/javascript">
															var zc0liki1blnysh;
															(function(d, t) {
															    {
															       var s = d.createElement(t),
															           options = {
															               'userName': 'dgrantham',
															               'formHash': 'z1n0frd7199sm5r',
															               'autoResize': true,
															               'height': '400',
															               'async': true,
															               'host': 'wufoo.com',
															               'header': 'hide',
															               'ssl': true,
															               'defaultValues': 'field4=' + document.title 
															             	 

															           };
															       s.src = ('https:' == d.location.protocol ? 'https://' : 'http://') + 'wufoo.com/scripts/embed/form.js';
															       s.onload = s.onreadystatechange = function() {
															           var rs = this.readyState;
															           if (rs)
															               if (rs != 'complete')
															                   if (rs != 'loaded') return;
															           try {
															               zc0liki1blnysh = new WufooForm();
															               zc0liki1blnysh.initialize(options);
															               zc0liki1blnysh.display();
															           } catch (e) {}
															       };
															       var scr = d.getElementsByTagName(t)[0],
															           par = scr.parentNode;
															       par.insertBefore(s, scr);
															   }
															})(document, 'script')

															 </script>

														</div>
													
														<div class="t_align_c">
															<h5 class="color_dark m_bottom_20">Call Today<br> For a Special Offer:</h5>
																<div class="d_inline_m icon_wrap_size_1 color_blue circle m_right_10">
																	<i class="icon-phone-1"></i>
																</div>
																855-LISTN4U(547-8648)
														</div>
												</div>
											</div>
										</figure>
									</aside>
								<!-- </div> -->

					</div>
				</div>
			</div>


			<section class="section_offset">
				<div class="container t_align_c">
					<h4 class="color_dark fw_light m_bottom_15" data-appear-animation="bounceInLeft">Want To Find Out What Your <?echo $pageTitle; ?> Unit is Worth?</h4>
						<h4 class="m_bottom_35" data-appear-animation="bounceInLeft" data-appear-animation-delay="150">Let Us Do It For You</h4>
					<!-- <p class="m_bottom_35" data-appear-animation="bounceInLeft" data-appear-animation-delay="150">Donec eget tellus non erat lacinia fermentum. Donec in velit vel ipsum auctor pulvinar. </p> -->

					<br><br>
					<div class="row t_align_c">
						<div class="col-lg-4 col-md-4 col-sm-4 m_xs_bottom_30">
							<figure data-appear-animation="fadeInUp">
								<!-- <div class="icon_wrap_size_6 type_2 circle color_blue d_inline_m animation_fill relative m_bottom_20">
									<i class="icon-thumbs-up tr_all"></i>
								</div> -->
								<figcaption>
									<h5 class="color_dark m_bottom_15">Provide Accurate Values</h5>
									<p class="m_bottom_23">Alot of Real Estate Websites have Inaccurate Values. Not Us.
										We Can Also Provide Tips on What You Can Do To Increase Your Condo's Value.
									</p>
									<!-- <a href="#" class="button_type_2 color_dark r_corners fs_medium color_blue_hover tr_all d_inline_b">Read More</a> -->
								</figcaption>
							</figure>
						</div>
						<div class="col-lg-4 col-md-4 col-sm-4 m_xs_bottom_30">
							<figure data-appear-animation="fadeInUp" data-appear-animation-delay="200">
								<!-- <div class="icon_wrap_size_6 type_2 circle color_pink d_inline_m animation_fill relative m_bottom_20">
									<i class="icon-mobile tr_all"></i>
								</div> -->
								<figcaption>
									<h5 class="color_dark m_bottom_15">Stay Up To Date</h5>
									<p class="m_bottom_23">We Will Make Sure You Stay Informed On What Is Listed and Sold at <?echo $pageTitle; ?></p>
									<!-- <a href="#" class="button_type_2 color_dark r_corners fs_medium color_pink_hover tr_all d_inline_b">Read More</a> -->
								</figcaption>
							</figure>
						</div>
						<div class="col-lg-4 col-md-4 col-sm-4">
							<figure data-appear-animation="fadeInUp" data-appear-animation-delay="400">
								<!-- <div class="icon_wrap_size_6 type_2 circle color_purple d_inline_m animation_fill relative m_bottom_20">
									<i class="icon-infinity tr_all"></i>
								</div> -->
								<figcaption>
									<h5 class="color_dark m_bottom_15">Increase Your Rental Income</h5>
									<p class="m_bottom_23">Do You Rent Out Your Condo? We Provide Tips To Help Increase Your Rental Income from Local Rental Companies.</p>
									<!-- <a href="#" class="button_type_2 color_dark r_corners fs_medium color_purple_hover tr_all d_inline_b">Read More</a> -->
								</figcaption>
							</figure>
						</div>
					</div>
				</div>
			</section>
