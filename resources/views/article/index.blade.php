<!DOCTYPE html>
<html lang="en">
<head>
	@include('layout.topnavbar')
</head>
<body>


	<!-- Menu -->

	<div class="menu d-flex flex-column align-items-end justify-content-start text-right menu_mm trans_400">
		<div class="menu_close_container"><div class="menu_close"><div></div><div></div></div></div>
		<div class="logo menu_mm"><a href="#">Avision</a></div>
		
		<nav class="menu_nav">
			<ul class="menu_mm">
					<li class="{{ Request::is('/') ? 'active' : '' }}"><a href={{url('/')}}>Home</a></li>
					<li class="{{ Request::is('create') ? 'active' : '' }}"><a href={{url('create')}}>create</a></li>	
			</ul>
		</nav>
	</div>
	
	<!-- Home -->

	<div class="home">
		
		<!-- Home Slider -->

		<div class="home_slider_container">
			<div class="owl-carousel owl-theme home_slider">
				
				<!-- Slider Item -->
				<div class="owl-item">
					<div class="home_slider_background" style="background-image:url(images/home_slider.jpg)"></div>
					<div class="home_slider_content_container">
						<div class="container">
							<div class="row">
								<div class="col">
									<div class="home_slider_content">
										
										<div class="home_slider_item_title">
											<a>Whats on your mind? Write 'em with us!</a>
										</div>
										<div class="home_slider_item_link">
											<a href={{route('article.create')}} class="trans_200">Make it into an article!
												<svg version="1.1" id="link_arrow_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
													 width="19px" height="13px" viewBox="0 0 19 13" enable-background="new 0 0 19 13" xml:space="preserve">
													<polygon fill="#FFFFFF" points="12.475,0 11.061,0 17.081,6.021 0,6.021 0,7.021 17.038,7.021 11.06,13 12.474,13 18.974,6.5 "/>
												</svg>
											</a>
                                        </div>
                                        
									</div>
								</div>
							</div>
						</div>
					</div>

					<!-- Similar Posts -->
					
						
						

					</div>
				</div>

				<!-- Slider Item -->

					
						

					
			</div>

			

		</div>
	</div>
	
	<!-- Page Content -->

	<div class="page_content">
		<div class="container">
			<div class="row row-lg-eq-height">

				<!-- Main Content -->

				<div class="col-lg-9">
					<div class="main_content">

						<!-- Blog Section - Don't Miss -->

						

						<div class="blog_section">
							<div class="section_panel d-flex flex-row align-items-center justify-content-start">
								
							</div>
							<div class="section_content">
								<div class="grid clearfix">

									<!-- Largest Card With Image -->
									@foreach ($articles as $article)
										<div class="card card_largest_with_image grid-item">
											<img class="card-img-top" src="images/post_1.jpg" alt="https://unsplash.com/@cjtagupa">
											<div class="card-body">
												<div class="card-title">{!!$article->title!!}</div>
												<p class="card-text">
														{{ str_limit(strip_tags($article->content), 50) }}
														
														  <a href={{route('article.show', $article)}} class="btn btn-info btn-sm">Read More</a>
														
												</p>
												<small class="post_meta"><a href="#">Katy Liu</a><span>Sep 29, 2017 at 9:48 am</span></small>
											</div>
										</div>
									@endforeach
									

									

									<div class="card card_default card_default_no_image grid-item">
										<div class="card-body">
											
										</div>
									</div>

									<!-- Default Card No Image -->

									

								</div>
							</div>
						</div>

						

					</div>
					
				</div>

			

			</div>
		</div>
	</div>

	<!-- Footer -->

	
</div>

<script src="js/jquery-3.2.1.min.js"></script>
<script src="styles/bootstrap4/popper.js"></script>
<script src="styles/bootstrap4/bootstrap.min.js"></script>
<script src="plugins/OwlCarousel2-2.2.1/owl.carousel.js"></script>
<script src="plugins/jquery.mb.YTPlayer-3.1.12/jquery.mb.YTPlayer.js"></script>
<script src="plugins/easing/easing.js"></script>
<script src="plugins/masonry/masonry.js"></script>
<script src="plugins/masonry/images_loaded.js"></script>
<script src="js/custom.js"></script>
</body>
</html>