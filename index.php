<?php 
	$pageTitle = "My Condo Value | Home";
	$description = "";
	include('inc/header.php'); ?>
		<!--head libs-->
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
			<!--revolution slider-->
			<section class="relative w_full m_bottom_15">
				<div class="r_slider">
					<ul>
						<li data-transition="fade" data-slotamount="10">
						   <img src="images/heron.jpg" alt="" data-bgfit="cover" data-bgposition="center center">
						   <div class="caption str" data-x="left" data-y="108" data-speed="700"><h1 class="color_light fw_light">Welcome to </h1>
						   		<p class="title_size_1 fw_ex_bold color_light tt_uppercase m_bottom_25">YOUR Alabama Condo Value Directory</p></div>
						   <!-- <div class="caption sfl str" data-x="left" data-y="243" data-speed="700" data-start="1200">Ut pharetra augue nec augue. Nam elit agna,endrerit<br>sit amet, tincidunt ac, viverra sed, nulla. Donec porta<br>diam eu massa. Quisque diam lorem, interdum. </div> -->
						   <!-- <div class="caption sfl str" data-x="left" data-y="339" data-speed="700" data-start="1400">
						   		<a href="#" role="button" class="tt_uppercase button_type_3 transparent color_purple r_corners fs_medium d_block tr_all">Learn More</a>
						   </div> -->
						</li>
						<li data-transition="fade" data-slotamount="10">
						   <img src="images/ob.jpg" alt="" data-bgfit="cover" data-bgposition="center center">
						   <!-- <div class="caption lfb ltb" data-x="left" data-y="bottom" data-hoffset="-118" data-speed="600"><img src="images/slide_caption_01.png" alt=""></div> -->
						   <div class="caption sfl str" data-x="left" data-y="109" data-speed="700" data-start="1500">
						   		<h1 class="color_light fw_light">Welcome to </h1>
						   		<p class="title_size_1 fw_ex_bold color_light tt_uppercase m_bottom_25">YOUR Alabama Condo Value Directory</p>
						   </div>
						   <!-- <div class="caption sfl str color_light" data-x="755" data-y="244" data-speed="700" data-start="1700">Vestibulum ante ipsum primis in faucibus orci luctus<br>et ultrices posuere cubilia Curae; Suspendisse<br>sollicitudin velit sed leo. Ut pharetra augue nec.</div> -->
						   <!-- <div class="caption sfl str" data-x="755" data-y="339" data-speed="700" data-start="1900">
						   		<a href="#" role="button" class="tt_uppercase button_type_3 color_purple r_corners fs_medium d_block tr_all">Buy Now!</a>
						   </div> -->
						</li>
						<!-- <li data-transition="fade" data-slotamount="10">
						   <img src="images/slide_03.jpg" alt="" data-bgfit="cover" data-bgposition="center center">
						   <div class="caption lft ltt" data-autoplay="false" data-autoplayonlyfirsttime="false" data-nextslideatend="false" data-x="529" data-y="55" data-speed="1200" data-easing="easeOutBounce">
								<iframe src="https://www.youtube.com/embed/Du8ld5hrqN0?enablejsapi=1&amp;html5=1&amp;hd=1&amp;wmode=opaque&amp;controls=1&amp;showinfo=0;rel=0" width="640" height="390"></iframe>
							</div>


								<div class="col-lg-6 col-md-6 col-sm-6 f_none d_table_cell v_align_m d_xs_block m_xs_bottom_30 form_description">
									<h1 class="color_light fw_light tt_uppercase lh_medium">Welcome to Your Alabama Condo Value Directory</h1>
									<p class="title_size_1 fw_ex_bold color_light tt_uppercase m_bottom_25">Your Business Now!</p>
									<p class="m_bottom_30 color_grey_light_3">Quisque diam lorem, interdum. vitae,dapibus ac, scelerisque vitae, pede. Donec eget tellus non erat lacinia fermentum. Donec in velit vel ipsum auctor pulvinar. </p> 
								</div>



		

						   <div class="caption sfl str" data-x="left" data-y="108" data-speed="700" data-start="1650"><h1 class="color_light fw_light">Think outside<br>the box!</h1></div>
						   <div class="caption sfl str color_grey_light_3" data-x="left" data-y="243" data-speed="700" data-start="1850">Vestibulum libero nisl, porta vel, scelerisque eget,<br>malesuada at, neque. Etiam cursus leo vel metus.<br>Nulla facilisi. Aenean nec eros. </div>
						   <div class="caption sfl str clearfix" data-x="left" data-y="339" data-speed="700" data-start="2050">
						   		<a href="#" role="button" class="tt_uppercase button_type_3 color_purple r_corners fs_medium d_block f_left m_right_10 tr_all">Get Started</a>
						   		<a href="#" role="button" class="tt_uppercase button_type_3 transparent color_purple r_corners fs_medium d_block f_left m_right_10 tr_all d_mxs_none">Take A Tour</a>
						   </div>
						</li> -->
					</ul>
				</div>
			</section>
			<!--content-->
			
			<!--our featured projects-->
			<section class="section_offset relative">
				<div class="container">
					<!-- <h3 class="color_dark fw_light m_bottom_15 t_align_c" data-appear-animation="bounceInLeft">Our Featured Projects</h3> -->
					<!-- <p class="m_bottom_35 t_align_c" data-appear-animation="bounceInLeft" data-appear-animation-delay="150">Suspendisse sollicitudin velit sed leo. Ut pharetra augue nec augue. Nam elit agna,endrerit sit amet, tincidunt ac, viverra sed, nulla.</p> -->
					<div class="row" data-appear-animation="fadeInUp" data-appear-animation-delay="800">
						<!--projects carousel-->
						<div class="owl-carousel" data-nav="fp_nav_" data-plugin-options='{"itemsCustom" : [[992,3],[768,2],[100,1]], "singleItem" : false}'>
							<!--project-->
							<div class="col-lg-12">
								<div class="popup_wrap relative wrapper m_bottom_20 d_xs_inline_b d_mxs_block">
									<img src="images/oba.jpg" alt="">
									<div class="popup_buttons tr_all_long">
										<a href="orange-beach.php" class="icon_wrap_size_3 color_light n_sc_hover d_block circle f_left">
											<i class="icon-angle-right"></i>
										</a>
									</div>
								</div>
								<figcaption class="t_align_c">
									<h4 class="fw_light fs_middle"><a href="#" class="color_dark">Orange Beach Areas</a></h4>
											
								</figcaption> 
							</div>
							<!--project-->
							<div class="col-lg-12">
								<div class="popup_wrap relative wrapper m_bottom_20 d_xs_inline_b d_mxs_block">
									<img src="images/gs.jpg" alt="">
									<div class="popup_buttons tr_all_long">
										<a href="gulf-shores.php" class="icon_wrap_size_3 color_light n_sc_hover d_block circle f_left">
											<i class="icon-angle-right"></i>
										</a>
									</div>
								</div>
								<figcaption class="t_align_c">
									<h4 class="fw_light fs_middle"><a href="#" class="color_dark">Gulf Shores Areas</a></h4>
								</figcaption> 
							</div>
							<!--project-->
							<div class="col-lg-12">
								<div class="popup_wrap relative wrapper m_bottom_20 d_xs_inline_b d_mxs_block">
									<img src="images/bay.jpg" alt="">
									<div class="popup_buttons tr_all_long">
										<a href="bayfront.php" class="icon_wrap_size_3 color_light n_sc_hover d_block circle f_left">
											<i class="icon-angle-right"></i>
										</a>
									</div>
								</div>
								<figcaption class="t_align_c">
									<h4 class="fw_light fs_middle"><a href="#" class="color_dark">Bayfront Condos</a></h4>
								</figcaption> 
							</div>
							
						</div>
					</div>
				</div>
				<!--carousel nav-->
				<button class="icon_wrap_size_4 circle color_grey_light tr_all color_blue_hover fp_nav_prev d_md_none">
					<i class="icon-left-open-big"></i>
				</button>
				<button class="icon_wrap_size_4 circle color_grey_light tr_all color_blue_hover fp_nav_next d_md_none">
					<i class="icon-right-open-big"></i>
				</button>
			</section>
			
			
			<hr class="divider_type_2">
			<?php include('inc/footer.php'); ?>

