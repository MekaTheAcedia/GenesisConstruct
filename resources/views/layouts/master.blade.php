<!DOCTYPE HTML>
<html>
	<head>
		<title>Mosaic a Entertainment Category Flat Bootstrap Responsive Website Template | Radio :: w3layouts</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta name="keywords" content="Mosaic Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template,
		Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
		<!-- Bootstrap Core CSS -->
		<link href="{{asset('css/bootstrap.css')}}" rel='stylesheet' type='text/css' />
		<!-- Custom CSS -->
		<link href="{{asset('css/style.css')}}" rel='stylesheet' type='text/css' />
		<!-- Graph CSS -->
		<link href="{{asset('css/font-awesome.css')}}" rel="stylesheet">
		<!-- jQuery -->
		<!-- lined-icons -->
		<link rel="stylesheet" href="{{asset('css/icon-font.css')}}" type='text/css' />
		<!-- //lined-icons -->
		<!-- Meters graphs -->
		<script src="{{asset('js/jquery-2.1.4.js')}}"></script>
		<link href="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.9/summernote.css" rel="stylesheet">
		<script src="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.9/summernote.js"></script>
	</head>
	<!-- /w3layouts-agile -->
	<body class="sticky-header left-side-collapsed">
		<section>
			<!-- left side start-->
			<div class="left-side sticky-left-side">
				<!--logo and iconic logo start-->
				<div class="logo-icon text-center">
					<a href="{{URL::route('index')}}" style="height: inherit; width: inherit;"><img src="{{asset('img/Guilty Crown.ico')}}" style="height: inherit; width: inherit;"></a>
				</div>
				<!--logo and iconic logo end-->
				<div class="left-side-inner">
					<!--sidebar nav start-->
					<ul class="nav nav-pills nav-stacked custom-nav">
						<li class="active">
							<a href="{{URL::route('index')}}">
								<i class="lnr lnr-home"></i>
								<span>Home</span>
							</a>
						</li>
						<li>
							<a href="{{URL::route('radio')}}">
								<i class="camera"></i>
								<span>Radio</span>
							</a>
						</li>
						<li>
							<a href="#" data-toggle="modal" data-target="#myModal1">
								<i class="fa fa-th"></i>
								<span>Apps</span>
							</a>
						</li>
						<li>
							<a href="{{URL::route('radio')}}">
								<i class="lnr lnr-users"></i>
								<span>Artists</span>
							</a>
						</li>
						<li>
							<a href="{{URL::route('browse')}}">
								<i class="lnr lnr-music-note"></i>
								<span>Albums</span>
							</a>
						</li>
						<li>
							<a href="{{URL::route('blog')}}">
								<i class="lnr lnr-book"></i>
								<span>Blog</span>
							</a>
						</li>
						<li>
							<a href="#">
								<i class="lnr lnr-heart"></i>
								<span>My Favourities</span>
							</a>
						</li>
						<li>
							<a href="{{URL::route('contact')}}">
								<i class="fa fa-thumb-tack"></i>
								<span>Contact</span>
							</a>
						</li>
					</ul>
					<!--sidebar nav end-->
				</div>
			</div>
			<!-- /w3l-agile -->
			<!-- left side end-->
			<!-- app-->
			<div class="modal fade" id="myModal1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
				<div class="modal-dialog facebook" role="document">
					<div class="modal-content">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
						</div>
						<div class="modal-body">
							<div class="app-grids">
								<div class="app">
									<div class="col-md-5 app-left mpl">
										<h3>Mosaic mobile app on your smartphone!</h3>
										<p>Download and Avail Special Songs Videos and Audios.</p>
										<div class="app-devices">
											<h5>Gets the app from</h5>
											<a href="#"><img src="img/1.png" alt=""></a>
											<a href="#"><img src="img/2.png" alt=""></a>
											<div class="clearfix"> </div>
										</div>
									</div>
									<div class="col-md-7 app-image">
										<img src="img/apps.png" alt="">
									</div>
									<div class="clearfix"></div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- //app-->
			<!-- /w3l-agile -->
			<!-- /w3layouts-agile -->
			<!-- main content start-->
			<div class="main-content">
				<!-- header-starts -->
				<div class="header-section">
					<!--notification menu start -->
					<div class="menu-right">
						<div class="profile_details">
							<div class="col-md-4 serch-part">
								<div id="sb-search" class="sb-search">
									<form method="post" action="{{route('search')}}">
										{{ csrf_field() }}
										<input class="sb-search-input" placeholder="Search" type="text" name="search" id="search">
										<input class="sb-search-submit" type="submit" value="">
										<span class="sb-icon-search"><button type="submit" style="opacity: 0; align-self: center;height: inherit;width: inherit;"></button></span>
									</form>
								</div>
							</div>
							<!-- search-scripts -->
							<script src="{{asset('js/classie.js')}}"></script>
							<script src="{{asset('js/uisearch.js')}}"></script>
							<script>
								new UISearch( document.getElementById( 'sb-search' ) );
							</script>
							<!-- //search-scripts -->
							<!---->
							<div class="col-md-4 player">
								<div class="audio-player">
								</div>
								<link rel="stylesheet" type="text/css" media="all" href="{{asset('css/audio.css')}}">
								<ul class="next-top">
									<li></li>
								</ul>
							</div>
							@if (Auth::check())
							<div class="col-md-4 login-pop">
								<div id="loginpop">
									<a href="#" id="loginButton">
										<span><i class="arrow glyphicon glyphicon-user"></i></span>
									</a>
									<div id="loginBox">
										<div id="loginForm">
											<fieldset id="body" style="padding: 0">
												<div class="col-xs-5" style="height: inherit; padding-right: 0">
													<br>
													<a href="{{URL::route('profiledetails')}}"><img src="{{asset(Auth::user()->avatar)}}" class="col-xs-12" style="padding: 0"></a>
												</div>
												<div class="col-xs-7" style="height: inherit; padding-right: 0">
													<br>
													<fieldset>
														<a href="{{URL::route('profiledetails')}}">
															<i class="glyphicon glyphicon-tag"></i>
															{{Auth::user()->name}}
														</a>
													</fieldset>
													<fieldset>
														<a href="{{route('logout')}}">
															<i class="glyphicon glyphicon-log-out"></i>
															Logout
														</a>
													</fieldset>
													<hr>
													<fieldset>
														<a href="{{URL::route('uploadsong')}}">
															<button class="btn btn-info" >
																<i class="glyphicon glyphicon-music"></i>
																Upload songs
															</button>
														</a>
													</fieldset>
												</div>
											</fieldset>
											<br>
										</div>
									</div>
									<a href="{{URL::route('logout')}}" id="loginButton">
										<span>Logout<i class="arrow glyphicon glyphicon-chevron-right"></i></span>
									</a>
								</div>
							</div>
							@else
							<div class="col-md-4 login-pop">
								<div id="loginpop">
									<a href="{{route('register')}}" id="loginButton">
										<span>Register<i class="arrow glyphicon glyphicon-chevron-right"></i></span>
									</a>
									<a href="{{route('login')}}" id="loginButton">
										<span><i class="arrow glyphicon glyphicon-log-in"></i></span>
									</a>
								</div>
							</div>
							@endif
							<div class="clearfix"></div>
						</div>
						<!-------->
					</div>
					<div class="clearfix"></div>
				</div>
				<!--notification menu end -->
				<!-- //header-ends -->
				<!-- /w3l-agile -->
				<!-- //header-ends -->
				@yield('content')
				<div class="footer">
					<div class="footer-grid">
						<h3>Navigation</h3>
						<ul class="list1">
							<li><a href="{{URL::route('index')}}">Home</a></li>
							<li><a href="{{URL::route('radio')}}">All Songs</a></li>
							<li><a href="{{URL::route('browse')}}">Albums</a></li>
							<li><a href="{{URL::route('radio')}}">New Collections</a></li>
							<li><a href="{{URL::route('blog')}}">Blog</a></li>
							<li><a href="{{URL::route('contact')}}">Contact</a></li>
						</ul>
					</div>
					<div class="footer-grid">
						<h3>Our Account</h3>
						<ul class="list1">
							<li><a href="#" data-toggle="modal" data-target="#myModal5">Your Account</a></li>
							<li><a href="#">Personal information</a></li>
							<li><a href="#">Addresses</a></li>
							<li><a href="#">Discount</a></li>
							<li><a href="#">Orders history</a></li>
							<li><a href="#">Addresses</a></li>
							<li><a href="#">Search Terms</a></li>
						</ul>
					</div>
					<div class="footer-grid">
						<h3>Our Support</h3>
						<ul class="list1">
							<li><a href="{{URL::route('contact')}}">Site Map</a></li>
							<li><a href="#">Search Terms</a></li>
							<li><a href="#">Advanced Search</a></li>
							<li><a href="#">Mobile</a></li>
							<li><a href="{{URL::route('contact')}}">Contact Us</a></li>
							<li><a href="#">Mobile</a></li>
							<li><a href="#">Addresses</a></li>
						</ul>
					</div>
					<div class="footer-grid">
						<h3>Newsletter</h3>
						<p class="footer_desc">Nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat</p>
						<div class="search_footer">
							<form>
								<input type="text" placeholder="Email...." required="">
								<input type="submit" value="Submit">
							</form>
						</div>
					</div>
					<div class="footer-grid footer-grid_last">
						<h3>About Us</h3>
						<p class="footer_desc">Diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat enim ad minim veniam,.</p>
						<p class="f_text">Phone:  &nbsp;&nbsp;&nbsp;00-250-2131</p>
						<p class="email">Email : &nbsp;<span><a href="mailto:mail@example.com">info(at)mailing.com</a></span></p>
					</div>
					<div class="clearfix"> </div>
				</div>
			</div>
			<!-- /w3l-agile -->
			<!-- main content end-->
		</section>
		<script src="{{asset('js/jquery.nicescroll.js')}}"></script>
		<script src="{{asset('js/scripts.js')}}"></script>
		<!-- Bootstrap Core JavaScript -->
		<script src="{{asset('js/bootstrap.js')}}"></script>
		<script>
		$(document).ready(function() {
			$('.summernote').summernote({
				height: '150',
			});
		});
		</script>
	</body>
</html>