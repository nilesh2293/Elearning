<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Video</title>
	<meta name="viewport" content="initial-scale=1.0, width=device-width" />
	
	<!-- Style Sheets -->
	{{ Html::style('css/bootstrap.min.css')}}

	{{ Html::style('css/hover-min.css')}}
	{{ Html::style('css/animate.css')}}
	{{ Html::style('css/css-menu.css') }}
	{{ Html::style('css/owl.carousel.css') }}
	{{ Html::style('css/loader.css') }}
	{{ Html::style('css/custom.css') }}
	{{ Html::style('css/styles.css') }}
	{{ Html::style('css/responsive.css') }}

	<!-- Font Icons -->
	{{ Html::style('css/font-awesome.min.css') }}
	{{ Html::style('css/ionicons.min.css')}}
	{{ Html::style('css/socicon-styles.css') }}

	<!-- Font Icons -->

	<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body>

    	<!-- Loader -->
    	<div id="loader-container">
    		<div id="loader">
    			<ul>
    				<li></li>
    				<li></li>
    				<li></li>
    				<li></li>
    				<li></li>
    				<li></li>
    			</ul>
    		</div>
    	</div>
    	<!-- Loader -->

    	<div id="wrapper">
    		<div id="main-content">
    			<!-- Main Bar-->
    			<div id="main-bar">
    				<div class="container">
    					<div class="row">
    						<div class="col-md-2 col-sm-5 col-xs-6 border-right">
    							<div class="logo">
    								<a href="index.html">
    									<img class="img-responsive" src="images/logo.png" alt="Logo">	
    								</a>
    							</div>					
    						</div>
    						<div class="col-sm-7 col-xs-6 hidden-md hidden-lg text-right">
    							<button type="button" class="btn btn-default btn-create-album">
    								Create Album
    							</button>
    						</div>
				<!-- <div class="clearfix visible-sm"></div>
				<div class="clearfix visible-xs"></div>
				<div class="col-md-6 col-sm-4 border-right sm-border-top">
					<div class="search-box">
						<form method="post">
							<input type="text" name="search" id="search" class="form-control" placeholder="Search Albums" required>
							<button type="submit" class="search-icon">
								<i class="fa fa-search"></i>
							</button>
						</form>						
					</div>
				</div> -->
<!-- 				<div class="col-md-2 col-sm-4 sm-border-top">
					<div class="social-icon">
						<ul class="list-inline list-unstyled">
							<li><a href="#"><i class="fa fa-facebook"></i></a></li>
							<li><a href="#"><i class="fa fa-twitter"></i></a></li>
							<li><a href="#"><i class="fa fa-vimeo"></i></a></li>
							<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
							<li><a href="#"><i class="fa fa-youtube"></i></a></li>
						</ul>
					</div>
				</div> -->
				<div class="col-md-2 col-sm-4 border-left sm-border-top right-float">
					<div class="login">
						<div class="media">
							<div class="media-left">
								<img class="img-responsive play-svg svg" src="images/user.svg" alt="play" onerror="this.src='images/user.png'">
							</div>
							<div class="media-body">
								<p>
									Welcome Guest <a class="login-toggle" href="#">Login</a>
								</p>
							</div>
						</div>									
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- Main Bar -->
	<!-- Main Navigation -->
	<div id="main-navigation">
		<div class="container">
			<div class="row">
				<div class="col-md-10 col-sm-12">
					<div id='cssmenu'>
						<ul>
							<li><a href="#"><i class="fi ion-ios-home"></i>Home</a>
								<ul>
									<li><a href="index.html">Home V1</a>
										<ul>
											<li><a href="index.html">Home V1</a></li>
											<li><a href="index-left-sidebar.html">With Left Sidebar</a></li>
											<li><a href="index-without-sidebar.html">Without Sidebar</a></li>
										</ul>
									</li>
									<li><a href="../video-v2/index-v2.html">Home V2</a>
										<ul>
											<li><a href="../video-v2/index-v2.html">Home V2</a></li>
											<li><a href="../video-v2/index-left-sidebar.html">With Left Sidebar</a></li>
											<li><a href="../video-v2/index-without-sidebar.html">Without Sidebar</a></li>
										</ul>
									</li>
								</ul>
							</li>
							<li class="active"><a href='#'><i class="fi ion-ios-film-outline"></i>Video Styles</a>
								<ul>
									<li><a href="video-2-column.html">Video 2 Column</a></li>
									<li><a href="video-3-column.html">Video 3 Column</a></li>
									<li><a href="video-4-column.html">Video 4 Column</a></li>
								</ul>						      
							</li>
							<li><a href="#"><i class="fi ion-android-apps"></i>Category</a>
								<ul>
									<li><a href="categories.html">Categories</a></li>
									<li><a href="category-listing.html">Category Listing</a></li>
								</ul>
							</li>
							<li><a href="#"><i class="fi ion-compose"></i>Blog</a>
								<ul>
									<li><a href="blog-grid.html">Blog Grid Style</a></li>
									<li><a href="blog-listing.html">Blog Listing Style</a></li>
									<li><a href="blog-detail.html">Blog Detail</a></li>
								</ul>
							</li>
							<li><a href="tv.html"><i class="fi ion-android-desktop"></i>Tv</a></li>
							<li><a href="about.html"><i class="fi ion-person"></i>About</a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- Main Navigation -->

	<!-- Inner page Bar -->
	@yield('content')

	<!-- Secondary Section -->	
	<div id="footer">
		<div class="container">
			<div class="row">
				<div class="col-md-4 col-sm-6">
					<div class="footer-about wow fadeIn" data-wow-duration="0.5s">
						<div class="vid-heading">
							<span>About</span>
							<div class="hding-bottm-line"></div>
						</div>
						<img class="img-responsive" src="images/logo.png" alt="Logo">
						<p>
							Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor a ornare odio. Sed non  mauris vitae erat consequatauctor eu in elit.  Class aptent tac Duis sed odio s psum velit.
						</p>
						<ul class="bottom-social list-inline list-unstyled">
							<li><a href="#"><i class="fa fa-facebook"></i></a></li>
							<li><a href="#"><i class="fa fa-twitter"></i></a></li>							
							<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
						</ul>
					</div>
				</div>
				<div class="col-md-4 col-sm-6">
					<div class="bottom-post wow fadeIn" data-wow-duration="0.5s" data-wow-delay="0.2s">
						<div class="vid-heading">
							<span>Latest Posts</span>
							<div class="hding-bottm-line"></div>
						</div>
						<div class="latest-post">
							<div class="media">
								<div class="media-left">
									<img src="images/most-like-img-1.jpg" alt="video">
								</div>
								<div class="media-body">
									<h1><a href="blog-detail.html">Stalker Game</a></h1>
									<p>
										<span><i class="fa fa-comment"></i> 10</span>
										<span><i class="fa fa-eye"></i> 534</span>
									</p>
								</div>
							</div>
							<div class="media">
								<div class="media-left">
									<img src="images/most-like-img-2.jpg" alt="video">
								</div>
								<div class="media-body">
									<h1><a href="blog-detail.html">Martial Art</a></h1>
									<p>
										<span><i class="fa fa-comment"></i> 10</span>
										<span><i class="fa fa-eye"></i> 534</span>
									</p>
								</div>
							</div>
							<div class="media">
								<div class="media-left">
									<img src="images/most-like-img-3.jpg" alt="video">
								</div>
								<div class="media-body">
									<h1><a href="blog-detail.html">Streat Crime</a></h1>
									<p>
										<span><i class="fa fa-comment"></i> 10</span>
										<span><i class="fa fa-eye"></i> 534</span>
									</p>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-4 col-sm-6">
					<div class="bottom-categories wow fadeIn" data-wow-duration="0.5s" data-wow-delay="0.4s">
						<div class="vid-heading">
							<span>Categories</span>
							<div class="hding-bottm-line"></div>
						</div>
						<ul class="category-list list-unstyled">
							<li><a href="category-listing.html">Action</a></li>
							<li><a href="category-listing.html">Adventure</a></li>
							<li><a href="category-listing.html">War</a></li>
							<li><a href="category-listing.html">Romance</a></li>
							<li><a href="category-listing.html">Comedy</a></li>
							<li><a href="category-listing.html">Horror</a></li>
						</ul>
					</div>
				</div>
<!-- 				<div class="col-md-3 col-sm-6">
					<div class="sendus wow fadeIn" data-wow-duration="0.5s" data-wow-delay="0.6s">
						<div class="vid-heading">
							<span>Send Us Message</span>
							<div class="hding-bottm-line"></div>
						</div>
						<div id="contact-form">
							<div class="expMessage"></div>
							<form class="send-form">
								<input type="text" name="formInput[name]" id="name" class="form-control half-wdth-field" placeholder="Name" required>
								<input type="email" name="formInput[email]" id="email" class="form-control half-wdth-field pull-right" placeholder="Email" required>

								<textarea name="formInput[message]" id="message" class="form-control" rows="4" placeholder="Message" required></textarea>
								<input type="hidden" name="action" value="submitform">
								<div>
									<button type="submit" value="submit" class="btn btn-send">
										Submit
									</button>
								</div>
							</form>
						</div>
					</div>
				</div> -->
			</div>
		</div>
	</div>

	<!-- copyright -->	
	<div id="copyright">
		<div class="container">
			<div class="row">
				<div class="col-sm-12 text-center">
					<p>
						&copy; 2017 by <a href="http://www.appnirman.com">Appnirman</a>. All rights reserved.
					</p>
				</div>
			</div>
		</div>
	</div>
	<!-- copyright -->

</div>

<div id="login-box">
	<i class="fa fa-remove login-toggle"></i>
	<!-- Login from -->
	<form class="user-form login-form form-active text-center">
		<h1 class="form-heading">Log in to your account</h1>
		<a href="#" class="btn btn-login w-facebook"><i class="fa fa-facebook"></i>Facebook</a>
		<a href="#" class="btn btn-login w-twitter"><i class="fa fa-twitter"></i>Twitter</a>
		<p class="or-login">or</p>
		<div class="form-group">
			<input type="email" name="email" class="form-control" id="login-email" required>
			<i class="fa fa-envelope input-icon"></i>
		</div>
		<div class="form-group">
			<input type="password" name="password" class="form-control" id="login-password" required>
			<i class="fa fa-key input-icon"></i>
		</div>			
		<button type="submit" value="login" class="btn btn-block btn-login text-uppercase">
			Login
		</button>
		<p class="forgot-password">
			Forgot your password? <a href="#">Click here</a>
		</p>
		<p class="no-account">
			Don't have an account yet? <a id="signUp-frm-button" href="#">Sign Up</a>
		</p>
	</form>

	<!-- SignUp form -->
	<form class="user-form signUp-form text-center">
		<h1 class="form-heading">Sign Up</h1>
		<a href="#" class="btn btn-login w-facebook"><i class="fa fa-facebook"></i>Facebook</a>
		<a href="#" class="btn btn-login w-twitter"><i class="fa fa-twitter"></i>Twitter</a>
		<p class="or-login">or</p>
		<div class="form-group">
			<input type="email" name="email" class="form-control" id="signUp-email" required>
			<i class="fa fa-envelope input-icon"></i>
		</div>
		<div class="form-group">
			<input type="password" name="password" class="form-control" id="signUp-password" required>
			<i class="fa fa-key input-icon"></i>
		</div>			
		<button type="submit" value="login" class="btn btn-block btn-login text-uppercase">
			Sign Up
		</button>
		<p class="forgot-password">
			Forgot your password? <a href="#">Click here</a>
		</p>
		<p class="no-account">
			You have an account allready? <a id="login-frm-button" href="#">Login</a>
		</p>
	</form>
</div>
</div>		

<!-- Scripts -->
{{ Html::script('js/wow.min.js')}}
{{ Html::script('js/jquery-1.12.3.min.js')}}
{{ Html::script('js/bootstrap.min.js') }}
{{ Html::script('js/css-menu.js') }}
{{ Html::script('js/jquery.validate.js') }}
{{ Html::script('js/owl.carousel.min.js')}}
{{ Html::script('js/custom.js') }}

<script type="text/javascript">

	$().ready(function(){
		$('.send-form').validate({
			submitHandler: function(){
				var curForm = $('.send-form');
				$("<div />").addClass("formOverlay").appendTo(curForm);  

				$.ajax({
					url: 'mail.php',
					type: 'POST',
					data: curForm.serialize(),
					success: function(data) {
						var res=data.split("::");
						curForm.find("div.formOverlay").remove();
						curForm.prev('.expMessage').html(res[1]);
						if(res[0]=='Success')
						{
							curForm.remove(); 
							curForm.prev('.expMessage').html('');
						}              
					}
				});
				return false;
			}	
		})	
	})		
</script>
</body>
</html>