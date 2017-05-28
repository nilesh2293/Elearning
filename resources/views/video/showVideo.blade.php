@extends('template.master')

@section('content')
	<!-- Inner page Bar -->
	<div id="page-bar">
		<div class="container">
			<div class="row">
				<div class="col-md-9 col-sm-8 col-xs-12">
					<div class="page-title">
						<h1 class="text-uppercase">Video Detail</h1>
					</div>
				</div>
				<div class="col-md-3 col-sm-4 col-xs-12 text-right">
					<ul class="breadcrumb">
					    <li>
					    	<a href="index.html"><i class="fi ion-ios-home"></i>Home</a>
					    </li>
					    <li class="active">Video Detail</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
	<!-- Inner page Bar -->

	<!-- Secondary Section -->

	<div id="video-detail">
		<div class="container">
			<div class="row">
				<div class="col-md-9 col-sm-8">
					<div class="vid-detail-container">
						<div class="row">
							<div class="col-sm-12">
								<div class="vid-player">
									<div class="embed-responsive embed-responsive-16by9">
			                            <iframe class="embed-responsive-item" src="https://player.vimeo.com/video/88627743"></iframe>
			                        </div>
								</div>
								<div class="vid-text">
									<p><span>By</span> <a href="#">Admin</a></p>
									<h1>How to Make a Mountain Bike Film</h1>
								</div>
								<div class="video-info-bar">
									<ul class="list-inline list-unstyled info-ul">
										<li><i class="fa fa-calendar"></i>May 08, 2016</li>
										<li><i class="fa fa-eye"></i>457689</li>
										<li><i class="fa fa-thumbs-up"></i>457689</li>
									</ul>
									<ul class="list-unstyled list-inline pull-right text-right sharing-bar">
										<li><a href="#"><i class="fa fa-facebook"></i></a></li>
										<li><a href="#"><i class="fa fa-twitter"></i></a></li>
										<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
										<li><a href="#"><i class="fa fa-instagram"></i></a></li>
										<li><a href="#"><i class="fa fa-dribbble"></i></a></li>
									</ul>
								</div>
								<div class="video-detail-text">
									<p>
										Donec rutrum varius quam non euismod. Nullam arcu urna, dignissim accumsan bibendum ut, fermentum a quam. Suspendisse fermentum augue vel nulla iaculis id tempus massa consequat. Donec venenatis leo eu felis condimentum in feugiat dui vulputate. Morbi vel quam lorem, sed tempor nibh. Sed elementum nunc tellus. Vivamus in orci vel risus dapibus imperdiet eu et nisl.
									</p>
									<p>
										Aliquam urna sapien, rhoncus eu eleifend ut, consectetur non purus. Proin mollis tortor vitae nisi egestas auctor. Nunc lacinia, diam sed vehicula convallis, lacus sem mattis risus, ac tincidunt quam dolor ut neque. Ut ut euismod sapien. Morbi volutpat, libero vel volutpat tristique, lectus orci auctor leo, eget adipiscing odio massa et mauris. Sed varius viverra urna sed venenatis. Nunc sit amet velit nec urna aliquam sollicitudin. Vestibulum condimentum, quam et aliquet ultrices, odio enim tempus ipsum, in facilisis dui nisi ut enim. Ut quis risus quis ante dictum auctor a sed turpis. Nulla vitae risus ut odio accumsan accumsan sollicitudin sit amet metus. Morbi ut urna at est posuere porta ac eu leo. Vivamus mollis sollicitudin varius. Pellentesque viverra, ligula id tincidunt ultrices, nunc nulla porttitor justo, sed varius risus urna et augue. Etiam et lectus lectus. Quisque vitae erat lorem, a mattis lectus.
									</p>
								</div>
<!-- 								<div id="comment-frm-container">
									<div class="vid-heading overflow-hidden">
										<span class="wow fadeInUp" data-wow-duration="0.8s">Leave a comment</span>
										<div class="hding-bottm-line wow zoomIn" data-wow-duration="0.8s"></div>
									</div>
									<form class="comment-form">
										<div class="row">
											<div class="col-sm-6">
												<div class="form-group">
													<input type="text" name="comment-user-name" class="form-control" id="cmnt-user-name" placeholder="NAME" required>
													<div class="input-top-line"></div>
													<div class="input-bottom-line"></div>
												</div>
											</div>
											<div class="col-sm-6">
												<div class="form-group">
													<input type="email" name="comment-user-email" class="form-control" id="cmnt-user-email" placeholder="EMAIL" required>
													<div class="input-top-line"></div>
													<div class="input-bottom-line"></div>
												</div>
											</div>
											<div class="col-sm-12">
												<div class="form-group">
													<textarea name="comment-user-message" id="cmnt-user-msg" rows="4" class="form-control" placeholder="MESSAGE" required></textarea>
													<div class="input-top-line"></div>
													<div class="input-bottom-line"></div>
												</div>
											</div>
											<div class="col-sm-12">
												<button type="submit" class="btn btn-snd">
													Post Comment
												</button>	
											</div>
											
										</div>
									</form>
								</div> -->
<!-- 								<div class="related-item">
									<div class="vid-heading overflow-hidden">
										<span class="wow fadeInUp" data-wow-duration="0.8s">
											Related Videos
										</span>
										<div class="hding-bottm-line wow zoomIn" data-wow-duration="0.8s">
										</div>
									</div>
									<div class="row">
										<div class="vid-container">
											<div class="col-md-4 col-sm-6">
												<div class="latest-vid-img-container">		
													<div class="vid-img">
														<img class="img-responsive" src="images/2-column-vid-img_2.jpg" alt="video image">
														<a href="video-detail.html" class="play-icon play-small-icon">
										                	<img class="img-responsive play-svg svg" src="images/play-button.svg" alt="play" onerror="this.src='images/play-button.png'">	                	
										                </a>
														<div class="overlay-div"></div>
													</div>
													<div class="vid-text">
														<p><span>By</span> <a href="#">Jhon Doe</a></p>
														<h1><a href="video-detail.html">Sun Skating</a></h1>
														<p class="vid-info-text">
															<span>4 month ago</span>
															<span>&#47;</span>
															<span>
																From <a href="#"><i class="fa fa-youtube-play"></i></a>
															</span>
															<span>&#47;</span>
															<span>410 views</span>
														</p>
													</div>
												</div>
											</div>
											<div class="col-md-4 col-sm-6">
												<div class="latest-vid-img-container">		
													<div class="vid-img">
														<img class="img-responsive" src="images/2-column-vid-img_3.jpg" alt="video image">
														<a href="video-detail.html" class="play-icon play-small-icon">
										                	<img class="img-responsive play-svg svg" src="images/play-button.svg" alt="play" onerror="this.src='images/play-button.png'">	                	
										                </a>
														<div class="overlay-div"></div>
													</div>
													<div class="vid-text">
														<p><span>By</span> <a href="#">Jhon Doe</a></p>
														<h1><a href="video-detail.html">Tennis Night</a></h1>
														<p class="vid-info-text">
															<span>4 month ago</span>
															<span>&#47;</span>
															<span>
																From <a href="#"><i class="fa fa-youtube-play"></i></a>
															</span>
															<span>&#47;</span>
															<span>410 views</span>
														</p>
													</div>
												</div>
											</div>
											<div class="col-md-4 col-sm-6">
												<div class="latest-vid-img-container">		
													<div class="vid-img">
														<img class="img-responsive" src="images/2-column-vid-img_4.jpg" alt="video image">
														<a href="video-detail.html" class="play-icon play-small-icon">
										                	<img class="img-responsive play-svg svg" src="images/play-button.svg" alt="play" onerror="this.src='images/play-button.png'">	                	
										                </a>
														<div class="overlay-div"></div>
													</div>
													<div class="vid-text">
														<p><span>By</span> <a href="#">Jhon Doe</a></p>
														<h1><a href="video-detail.html">Wrestle Mania viii</a></h1>
														<p class="vid-info-text">
															<span>4 month ago</span>
															<span>&#47;</span>
															<span>
																From <a href="#"><i class="fa fa-youtube-play"></i></a>
															</span>
															<span>&#47;</span>
															<span>410 views</span>
														</p>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div> -->
							</div>							
						</div>
					</div>					
				</div>
				<div class="col-md-3 col-sm-4">
					<div class="sidebar">
						<div class="sidebar-vid most-liked">
							<h1 class="sidebar-heading">Playlist</h1>
							<?php
							foreach ($get_all_video as $key => $value) {
								?>
							<div class="media">
								<div class="media-left">
									<img src="images/most-liked-img-s1.jpg" alt="video">
								</div>
								<div class="media-body">
									<h1><a href="<?php echo public_path('video');?>/{{$value->video_url}}">{{$value->video_title}}</a></h1>
									<p>
										<span><i class="fa fa-comment"></i> 10</span>
										<span><i class="fa fa-eye"></i> 534</span>
									</p>
								</div>
							</div>
							<?php
						}
							?>
						</div>
						<div class="sidebar-vid most-viewd">
							<h1 class="sidebar-heading">Most Viewed</h1>
							<div class="most-viewd-container">
								<div class="most-viewd-img">
									<img class="img-responsive" src="images/most-viewd-1.jpg" alt="video">
								</div>
								<div class="most-viewd-text">
									<h1><a href="video-detail.html">Human Rights Violation</a></h1>
									<p>
										<span><i class="fa fa-comment"></i> 10</span>
										<span><i class="fa fa-eye"></i> 534</span>
									</p>
								</div>
							</div>
							<div class="most-viewd-container">
								<div class="most-viewd-img">
									<img class="img-responsive" src="images/most-viewd-2.jpg" alt="video">
								</div>
								<div class="most-viewd-text">
									<h1><a href="video-detail.html">War Video Compilation</a></h1>
									<p>
										<span><i class="fa fa-comment"></i> 10</span>
										<span><i class="fa fa-eye"></i> 534</span>
									</p>
								</div>
							</div>							
						</div>
<!-- 						<div class="tags">
							<h1 class="sidebar-heading">Tags</h1>
							<ul class="list-inline list-unstyled">
								<li><a href="#">3D</a></li>
								<li><a href="#">Animals &amp; Birds</a></li>
								<li><a href="#">HD</a></li>
								<li><a href="#">Horror</a></li>
								<li><a href="#">Art</a></li>
								<li><a href="#">Self</a></li>
								<li><a href="#">HD Songs</a></li>
								<li><a href="#">Comedy</a></li>
							</ul>
						</div> -->
					</div>
				</div>
			</div>
		</div>
	</div>

@endsection