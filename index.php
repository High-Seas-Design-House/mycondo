<?php
	$pageTitle = "My Condo Value | Home";
	$description = "You deserve to get the most you can out of your investment. My Condo Value is here to make sure you do.";
	include('inc/header.php'); ?>
		<!--head libs-->

			<!--revolution slider-->
			<section class="relative w_full m_bottom_15">
				<div class="r_slider">
					<ul>
						<li data-transition="fade" data-slotamount="10">
						   <img src="images/heron.jpg" alt="Alabama Gulf Coast" data-bgfit="cover" data-bgposition="center center">
						   <div class="caption str" data-x="left" data-y="108" data-speed="700"><h1 class="slider_title_2 color_light fw_light">Welcome to<!-- </h1> -->
						   		<!-- <p class="title_size_1 fw_ex_bold color_light tt_uppercase m_bottom_25"> --><span class="tt_uppercase"> YOUR </span><br>
						   		<span class="fw_ex_bold"> Alabama Condo Value Directory</span></h1></div>
						</li>
						<li data-transition="fade" data-slotamount="10">
						   <img src="images/ob.jpg" alt="Alabama Gulf Coast Condo Value Finder" data-bgfit="cover" data-bgposition="center center">

						   <div class="caption sfl str" data-x="110" data-y="160" data-speed="700" ><!--  -->
						   		<h1 class="slider_title_2 color_light fw_ex_bold">Get Your Investment</h1>
						   </div>

						   <div class="caption sfl str" data-x="490" data-y="250" data-hoffset="-118" data-speed="800" data-start="1500">
						   		<h1 class="slider_title_2 color_light fw_ex_bold"> Working for You!</h1>
						   </div>
						</li>
					</ul>
				</div>
			</section>
			<!--content-->


			<!--our featured projects-->
			<section class="section_offset">
				<div class="container">
					<h3 class="color_dark fw_light m_bottom_15 t_align_c" data-appear-animation="bounceInLeft">Select an Area to Discover Your Value Information</h3>
					<br>
					<div class="row" data-appear-animation="fadeInUp" data-appear-animation-delay="800">
							<!--project-->
							<div class="row t_align_c">
								<div class="col-lg-4 col-md-4 col-sm-4 m_xs_bottom_30">
									<a href="orange-beach.php">
										<div class="popup_wrap relative wrapper m_bottom_20 d_xs_inline_b d_mxs_block">
												<figure data-appear-animation="fadeInUp">
													<img class="m_bottom_10" src="images/beach.jpg" alt="Orange Beach Photo" style="box-shadow:8px 5px #b6bbbe">
												</figure>
										</div>
									</a>
										<figcaption class="t_align_c">
											<h4 class="fw_light fs_middle"><a href="orange-beach.php" class="color_dark">Orange Beach Areas</a></h4>
										</figcaption>
								</div>
							<!--project-->
								<div class="col-lg-4 col-md-4 col-sm-4 m_xs_bottom_30">
									<a href="gulf-shores.php">
										<div class="popup_wrap relative wrapper m_bottom_20 d_xs_inline_b d_mxs_block">
												<figure data-appear-animation="fadeInUp">
													<img class="m_bottom_10" src="images/gs-beach.jpg" alt="Gulf Shores Beaches" style="box-shadow:8px 5px #b6bbbe">
												</figure>
										</div>
									</a>
											<figcaption class="t_align_c">
												<h4 class="fw_light fs_middle"><a href="gulf-shores.php" class="color_dark">Gulf Shores Areas</a></h4>
											</figcaption>
								</div>
							<!--project-->
								<div class="col-lg-4 col-md-4 col-sm-4 m_xs_bottom_30">
									<a href="bayfront.php">
										<div class="popup_wrap relative wrapper m_bottom_20 d_xs_inline_b d_mxs_block">
												<figure data-appear-animation="fadeInUp">
													<img class="m_bottom_10" src="images/reflect.jpg" alt="Orange Beach Bay Area" style="box-shadow:8px 5px #b6bbbe">
												</figure>
										</div>
									</a>
											<figcaption class="t_align_c">
												<h4 class="fw_light fs_middle"><a href="bayfront.php" class="color_dark">Bayfront Condos</a></h4>
											</figcaption>
								</div>

							</div>
					</div>
				</div>
			</section>


			<!-- <hr class="divider_type_2"> -->
			<?php include('inc/footer.php'); ?>
