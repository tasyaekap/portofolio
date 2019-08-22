<!DOCTYPE html>
<html lang="en">
<head>
@include('layout.topnavbar')
<link rel="stylesheet" type="text/css" href={{asset("styles/post_nosidebar.css")}}>
<link rel="stylesheet" type="text/css" href={{asset("styles/post_nosidebar_responsive.css")}}>
</head>
<body>

<div class="super_container">

	
	
	<!-- Home -->
<form action="{{route('article.destroy', $article->id)}}" method="POST">
	{{csrf_field()}} {{method_field('delete')}}

	<div class="home">
	
	<div class="home_background parallax-window" data-parallax="scroll" data-image-src={{asset("images/post_nosidebar.jpg")}} data-speed="0.8"></div>
		<div class="home_content">
			
				
					<div class="post_title">{!!$article->title!!}</div>
					<div class="post_author d-flex flex-row align-items-center justify-content-center">
					<div class="post_meta">{{ date('M j, Y H:i', strtotime($article->created_at)) }}</div>
					
				</div>
			
		</div>
	</div>
	
	<!-- Page Content -->

	<div class="page_content">
		<div class="container">
			<div class="row">

				<!-- Post Content -->

				<div class="col-lg-10 offset-lg-1">
					<div class="post_content">

						<!-- Post Body -->

						<div class="post_body">
								<p class="post_p">{{$article->content}}</p>

							<!-- Post Tags and Share-->
							<div class="tags_share d-flex flex-row align-items-center justify-content-start">
								<div class="post_tags">
									
									<a href="{{ route('article.edit', $article->id) }}" class="comment_button">Edit Article</a>
									<button class="delete_button" onclick="return confirm('Are you sure? ')">Delete Article</button>
								</div>
							</form>
								<div class="post_share ml-sm-auto">
									<span>share</span>
									<ul class="post_share_list">
										<li class="post_share_item"><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
										<li class="post_share_item"><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
										<li class="post_share_item"><a href="#"><i class="fa fa-google" aria-hidden="true"></i></a></li>
									</ul>

								</div>

									
							</div>

								
						</div>
					</div>

				</div>

			</div>
	


			<div class="row">
				<div class="col-lg-6 offset-lg-3">

					<!-- Post Comment -->
					<div class="post_comment">
						<div class="post_comment_title">Post Comment</div>
						<div class="post_comment_form_container">
							<form action={{route('comments.store')}} method="POST">
							{{csrf_field()}}
								<input type="hidden" name="article_id" value="{!!$article->id!!}" class="form-control" readonly>
								<input type="text" name="user" id="name"class="comment_input comment_input_name" placeholder="Your Name" required="required">
								<textarea class="comment_text" name="content" id="content" placeholder="Your Comment" required="required"></textarea>
								<button type="submit" class="comment_button">Post Comment</button>
							</form>
						</div>
					</div>

					<!-- Comments -->
					<div class="comments">
						<div class="comments_title">Comments Section</div>
						<div class="comments_container">
							@foreach ($comments as $comment)
								<ul class="comment_list">
									<li class="comment">
										<div class="comment_body">
											<div class="comment_panel d-flex flex-row align-items-center justify-content-start">
											
											<small class="post_meta"><a href="#">{!!$comment->user!!}</a><span>{{ date('M j, Y H:i', strtotime($comment->created_at)) }}</span></small>
											</div>
											<div class="comment_content">
												<p>{!!$comment->content!!}.</p>
											</div>
										</div>
									</li>
								</ul>
							@endforeach
						</div>
					</div>
					<div class="load_more">
						<div id="load_more" class="load_more_button text-center trans_200">Load More</div>
					</div>
				</div>
			</div>
		</div>

	</div>

	<!-- Footer -->

	
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