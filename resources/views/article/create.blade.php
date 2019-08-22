<!DOCTYPE html>
<html lang="en">
<head>
<title>Contact</title>
@include('layout.topnavbar')
<link rel="stylesheet" type="text/css" href={{asset("styles/contact.css")}}>
<link rel="stylesheet" type="text/css" href={{asset("styles/contact_responsive.css")}}>
</head>
<body>

<div class="super_container">

	
	<!-- Home -->

	<div class="home">
	<div class="home_background parallax-window" data-parallax="scroll" data-image-src={{asset("images/regular.jpg")}} data-speed="0.8"></div>
		<div class="home_content">
			<div class="container">
				<div class="row">
					<div class="col-lg-6 offset-lg-3">
						<!-- Post Comment -->
						<div class="post_comment">
							<div class="contact_form_container">
								<form action="{{route('article.store')}}" method="POST">
									{{ csrf_field() }}
									<input type="text" name="title" id="title" class="contact_input contact_input_name" placeholder="Title" required="required">
									<textarea class="contact_text" name="content" id="content "placeholder="Content" required="required"></textarea>
									<button type="submit" class="contact_button">Submit Article</button>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>		
		</div>
	</div>

	
</div>

<script src={{asset("js/jquery-3.2.1.min.js")}}></script>
<script src={{asset("styles/bootstrap4/popper.js")}}></script>
<script src={{asset("styles/bootstrap4/bootstrap.min.js")}}></script>
<script src={{asset("plugins/OwlCarousel2-2.2.1/owl.carousel.js")}}></script>
<script src={{asset("plugins/easing/easing.js")}}></script>
<script src={{asset("plugins/masonry/masonry.js")}}></script>
<script src={{asset("plugins/parallax-js-master/parallax.min.js")}}></script>
<script src={{asset("js/post_nosidebar.js")}}></script>
</body>
</html>