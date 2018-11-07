@extends('layouts.master')
@section('content')
<div id="page-wrapper">
	<div class="inner-content">
		<div class="music-left">
			<!--banner-section-->
			<div class="banner-section">
				<div class="banner">
					<div class="callbacks_container">
						<ul class="rslides callbacks callbacks1" id="slider4">
							<li>
								<div class="banner-img">
									<img src="img/11.jpg" class="img-responsive" alt="">
								</div>
								<div class="banner-info">
									<a class="trend" href="single">TRENDING</a>
									<h3>Let Your Home</h3>
									<p>Album by <span>Rock star</span></p>
								</div>
							</li>
							<li>
								<div class="banner-img">
									<img src="img/22.jpg" class="img-responsive" alt="">
								</div>
								<div class="banner-info">
									<a class="trend" href="single">TRENDING</a>
									<h3>Charis Brown feet</h3>
									<p>Album by <span>Rock star</span></p>
								</div>
							</li>
							<li>
								<div class="banner-img">
									<img src="img/33.jpg" class="img-responsive" alt="">
								</div>
								<div class="banner-info">
									<a class="trend" href="single">TRENDING</a>
									<h3>Let Your Home</h3>
									<p>Album by <span>Rock star</span></p>
								</div>
								<!-- /w3layouts-agileits -->
							</li>
						</ul>
					</div>
					<!--banner-->
					<script src="{{asset('js/responsiveslides.min.js')}}"></script>
					<script>
						// You can also use "$(window).load(function() {"
						$(function () {
						// Slideshow 4
						$("#slider4").responsiveSlides({
							auto: true,
							pager:true,
							nav:true,
							speed: 500,
							namespace: "callbacks",
							before: function () {
							$('.events').append("<li>before event fired.</li>");
							},
							after: function () {
							$('.events').append("<li>after event fired.</li>");
							}
						});

						});
					</script>
					<div class="clearfix"> </div>
				</div>
			</div>
			<!--//End-banner-->
			<!--albums-->
			<div class="albums">
				<?php $songCount = 1?>
				<div class="tittle-head">
					<h3 class="tittle">New Releases <span class="new">New</span></h3>
					<div class="clearfix"> </div>
				</div>
				@foreach($newsongs as $item)
				@if ($songCount % 4 != 0)
				<div class="col-md-3 content-grid">
					<a class="play-icon popup-with-zoom-anim" href="{{URL::route('songs', $item->songid)}}"><img src="{{$item->avatar}}" title="{{$item->title}}"></a>
					<a class="button play-icon popup-with-zoom-anim" href="{{URL::route('songs', $item->songid)}}">Listen now</a>
				</div>
				@else
				<div class="col-md-3 content-grid last-grid">
					<a class="play-icon popup-with-zoom-anim" href="{{URL::route('songs', $item->songid)}}"><img src="{{$item->avatar}}" title="{{$item->title}}"></a>
					<a class="button play-icon popup-with-zoom-anim" href="{{URL::route('songs', $item->songid)}}">Listen now</a>
				</div>
				@endif
				<?php $songCount++?>
				@endforeach
				<div class="clearfix"> </div>
			</div>
			<!--//End-albums-->
			<!--//discover-view-->
			<div class="albums second">
				<?php $songCount = 1?>
				<div class="tittle-head">
					<h3 class="tittle">Discover <span class="new">View</span></h3>
					<div class="clearfix"> </div>
				</div>
				@foreach($discover as $item)
				@if ($songCount % 4 != 0)
				<div class="col-md-3 content-grid">
					<a href="songs/{{$item->songid}}"><img src="{{$item->avatar}}" title="{{$item->title}}"></a>
				</div>
				@else
				<div class="col-md-3 content-grid last-grid">
					<a href="songs/{{$item->songid}}"><img src="{{$item->avatar}}" title="{{$item->title}}"></a>
				</div>
				@endif
				<?php $songCount++?>
				@endforeach
				<div class="clearfix"> </div>
			</div>
			<!--//discover-view-->
		</div>
		<!--//music-left-->
		<!--/music-right-->
		<div class="music-right">
			<!--/video-main-->
			<div class="video-main">
				<div class="video-record-list">
					<div id="jp_container_1" class="jp-video jp-video-270p" role="application" aria-label="media player">
						<div class="jp-type-playlist">
							<div id="jquery_jplayer_1" class="jp-jplayer" style="width: 480px; height: 270px;">
								<img id="jp_poster_0" src="video/play1.png" style="width: 480px; height: 270px; display: inline;">
								<video id="jp_video_0" preload="metadata" src="http://192.168.30.9/vijayaa/2015/Dec/mosaic/web/video/Ellie-Goulding.webm" title="1. Ellie-Goulding" style="width: 0px; height: 0px;"></video>
							</div>
							<div class="jp-gui">
								<div class="jp-video-play" style="display: block;">
									<button class="jp-video-play-icon" role="button" tabindex="0">play</button>
								</div>
								<div class="jp-interface">
									<div class="jp-progress">
										<div class="jp-seek-bar" style="width: 100%;">
											<div class="jp-play-bar" style="width: 0%;"></div>
										</div>
									</div>
									<div class="jp-current-time" role="timer" aria-label="time">00:00</div>
									<div class="jp-duration" role="timer" aria-label="duration">00:18</div>
									<div class="jp-controls-holder">
										<div class="jp-controls">
											<button class="jp-previous" role="button" tabindex="0">previous</button>
											<button class="jp-play" role="button" tabindex="0">play</button>
										</div>
										<div class="jp-volume-controls">
											<button class="jp-mute" role="button" tabindex="0">mute</button>
											<button class="jp-volume-max" role="button" tabindex="0">max volume</button>
											<div class="jp-volume-bar">
												<div class="jp-volume-bar-value" style="width: 100%;"></div>
											</div>
										</div>
										<div class="jp-toggles">
											<button class="jp-full-screen" role="button" tabindex="0">full screen</button>
										</div>
									</div>
									<div class="jp-details" style="display: none;">
										<div class="jp-title" aria-label="title">1. Ellie-Goulding</div>
									</div>
								</div>
							</div>
							<div class="jp-playlist">
								<ul style="display: block;">
									<li class="jp-playlist-current">
										<div>
											<a href="javascript:;" class="jp-playlist-item-remove" style="display: none;">×</a>
											<a href="javascript:;" class="jp-playlist-item jp-playlist-current" tabindex="0">
												1. Ellie-Goulding
												<span class="jp-artist">by Pixar</span>
											</a>
										</div>
									</li>
									<li>
										<div>
											<a href="javascript:;" class="jp-playlist-item-remove" style="display: none;">×</a>
											<a href="javascript:;" class="jp-playlist-item" tabindex="0">
												2. Mark-Ronson-Uptown
												<span class="jp-artist">by Pixar</span>
											</a>
										</div>
									</li>
									<li>
										<div>
											<a href="javascript:;" class="jp-playlist-item-remove" style="display: none;">×</a>
											<a href="javascript:;" class="jp-playlist-item" tabindex="0">
												3. Ellie-Goulding
												<span class="jp-artist">by Pixar</span>
											</a>
										</div>
									</li>
									<li>
										<div>
											<a href="javascript:;" class="jp-playlist-item-remove" style="display: none;">×</a>
											<a href="javascript:;" class="jp-playlist-item" tabindex="0">
												4. Maroon-Sugar
												<span class="jp-artist">by Pixar</span>
											</a>
										</div>
									</li>
									<li>
										<div>
											<a href="javascript:;" class="jp-playlist-item-remove" style="display: none;">×</a>
											<a href="javascript:;" class="jp-playlist-item" tabindex="0">
												5. Pharrell-Williams
												<span class="jp-artist">by Pixar</span>
											</a>
										</div>
									</li>
									<li>
										<div>
											<a href="javascript:;" class="jp-playlist-item-remove" style="display: none;">×</a>
											<a href="javascript:;" class="jp-playlist-item" tabindex="0">
												6. Ellie-Goulding
												<span class="jp-artist">by Pixar</span>
											</a>
										</div>
									</li>
									<li>
										<div>
											<a href="javascript:;" class="jp-playlist-item-remove" style="display: none;">×</a>
											<a href="javascript:;" class="jp-playlist-item" tabindex="0">
												7. Pharrell-Williams
												<span class="jp-artist">by Pixar</span>
											</a>
										</div>
									</li>
								</ul>
							</div>
							<div class="jp-no-solution" style="display: none;">
								<span>Update Required</span>
								To play the media you will need to either update your browser to a recent version or update your <a href="http://get.adobe.com/flashplayer/" target="_blank">Flash plugin</a>.
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- script for play-list -->
			<link href="{{asset('css/jplayer.blue.monday.min.css')}}" rel="stylesheet" type="text/css">
			<script type="text/javascript" src="{{asset('js/jquery.jplayer.min.js')}}"></script>
			<script type="text/javascript" src="{{asset('js/jplayer.playlist.min.js')}}"></script>
			<script type="text/javascript">
			//<![CDATA[
			$(document).ready(function(){
				new jPlayerPlaylist({
					jPlayer: "#jquery_jplayer_1",
					cssSelectorAncestor: "#jp_container_1"
				}, [

					{
						title:"1. Ellie-Goulding",
						artist:"",
						mp4: "video/Ellie-Goulding.mp4",
						ogv: "video/Ellie-Goulding.ogv",
						webmv: "video/Ellie-Goulding.webm",
						poster:"video/play1.png"
					},
					{
						title:"2. Mark-Ronson-Uptown",
						artist:"",
						mp4: "video/Mark-Ronson-Uptown.mp4",
						ogv: "video/Mark-Ronson-Uptown.ogv",
						webmv: "video/Mark-Ronson-Uptown.webm",
						poster:"video/play2.png"
					},
					{
						title:"3. Ellie-Goulding",
						artist:"",
						mp4: "video/Ellie-Goulding.mp4",
						ogv: "video/Ellie-Goulding.ogv",
						webmv: "video/Ellie-Goulding.webm",
						poster:"video/play1.png"
					},
					{
						title:"4. Maroon-Sugar",
						artist:"",
						mp4: "video/Maroon-Sugar.mp4",
						ogv: "video/Maroon-Sugar.ogv",
						webmv: "video/Maroon-Sugar.webm",
						poster:"video/play4.png"
					},
					{
						title:"5. Pharrell-Williams",
						artist:"",
						mp4: "video/Pharrell-Williams.mp4",
						ogv: "video/Pharrell-Williams.ogv",
						webmv: "video/Pharrell-Williams.webm",
						poster:"video/play5.png"
					},
					{
						title:"6. Ellie-Goulding",
						artist:"",
						mp4: "video/Ellie-Goulding.mp4",
						ogv: "video/Ellie-Goulding.ogv",
						webmv: "video/Ellie-Goulding.webm",
						poster:"video/play1.png"
					},
					{
						title:"7. Pharrell-Williams",
						artist:"",
						mp4: "video/Pharrell-Williams.mp4",
						ogv: "video/Pharrell-Williams.ogv",
						webmv: "video/Pharrell-Williams.webm",
						poster:"video/play5.png"
					}
				], {
					swfPath: "../../dist/jplayer",
					supplied: "webmv,ogv,mp4",
					useStateClassSkin: true,
					autoBlur: false,
					smoothPlayBar: true,
					keyEnabled: true
				});
			});
			//]]>
			</script>
			<!-- //script for play-list -->
			<!--//video-main-->
			<!--/app_store-->
			<div class="apps">
				<h3 class="hd-tittle">Mosaic now available in</h3>
				<div class="banner-button">
					<a href="#"><img src="img/1.png" alt=""></a>
				</div>
				<div class="banner-button green-button">
					<a href="#"><img src="img/2.png" alt=""></a>
				</div>
				<div class="clearfix"></div>
			</div>
			<!--//app_store-->
			<!--/start-paricing-tables-->
			<div class="price-section">
				<div class="pricing-inner">
					<h3 class="hd-tittle">Upgrade your Plan</h3>
					<div class="pricing">
						<div class="price-top">
							<h3><span>$20</span></h3>
							<h4>per year</h4>
						</div>
						<div class="price-bottom">
							<ul>
								<li>
									<a class="icon" href="#">
										<i class="glyphicon glyphicon-ok"></i>
									</a>
									<a class="text" href="#">Download unlimited songs</a>
									<div class="clearfix"></div>
								</li>
								<li>
									<a class="icon" href="#">
										<i class="glyphicon glyphicon-ok"></i>
									</a>
									<a class="text" href="#">Stream songs in High Definition</a>
									<div class="clearfix"></div>
								</li>
								<li>
									<a class="icon" href="#">
										<i class="glyphicon glyphicon-ok"></i>
									</a>
									<a class="text" href="#">No ads unlimited Devices</a>
									<div class="clearfix"></div>
								</li>
								<li>
									<a class="icon" href="#">
										<i class="glyphicon glyphicon-ok"></i>
									</a>
									<a class="text" href="#">Stream songs in High Definition</a>
									<div class="clearfix"></div>
								</li>
							</ul>
							<a href="single" class="price">Upgrade</a>
						</div>
					</div>
					<div class="pricing two">
						<div class="price-top">
							<h3><span>$30</span></h3>
							<h4>per year</h4>
						</div>
						<div class="price-bottom">
							<ul>
								<li>
									<a class="icon" href="#">
										<i class="glyphicon glyphicon-ok"></i>
									</a>
									<a class="text" href="#">Download unlimited songs</a>
									<div class="clearfix"></div>
								</li>
								<li>
									<a class="icon" href="#">
										<i class="glyphicon glyphicon-ok"></i>
									</a>
									<a class="text" href="#">Stream songs in High Definition</a>
									<div class="clearfix"></div>
								</li>
								<li>
									<a class="icon" href="#">
										<i class="glyphicon glyphicon-ok"></i>
									</a>
									<a class="text" href="#">No ads unlimited Devices</a>
									<div class="clearfix"></div>
								</li>
								<li>
									<a class="icon" href="#"><i class="glyphicon glyphicon-ok"></i></a><a class="text" href="#">Stream songs in High Definition</a>
									<div class="clearfix"></div>
								</li>
							</ul>
							<a href="single" class="price">Upgrade</a>
						</div>
					</div>
					<div class="clearfix"></div>
				</div>
				<!--//end-pricing-tables-->
			</div>
		</div>
		<!--//music-right-->
		<div class="clearfix"></div>
		<!-- /w3l-agile-its -->
	</div>
	<!--body wrapper start-->
	<div class="review-slider">
		<div class="tittle-head">
			<h3 class="tittle">Featured Albums<span class="new">New</span></h3>
			<div class="clearfix"></div>
		</div>
		<ul id="flexiselDemo1">
			@foreach($newalbums as $item)
			<li>
				<a href="{{URL::route('albums', $item->albumid)}}"><img src="{{$item->thumbnail}}" alt=""/></a>
				<div class="slide-title"><h4>{{$item->title}}</h4></div>
				<div class="date-city">
					<h5>{{$item->releasedate}}</h5>
					<div class="buy-tickets">
						<a href="{{URL::route('albums', $item->albumid)}}">READ MORE</a>
					</div>
				</div>
			</li>
			@endforeach
		</ul>
		<script type="text/javascript">
		$(window).load(function() {

		$("#flexiselDemo1").flexisel({
			visibleItems: 5,
			animationSpeed: 1000,
			autoPlay: true,
					autoPlaySpeed: 1000,
			pauseOnHover: false,
			enableResponsiveBreakpoints: true,
			responsiveBreakpoints: {
				portrait: {
					changePoint:480,
					visibleItems: 2
				},
				landscape: {
					changePoint:640,
					visibleItems: 3
				},
				tablet: {
					changePoint:800,
					visibleItems: 4
				}
			}
		});
		});
		</script>
		<script type="text/javascript" src="{{asset('js/jquery.flexisel.js')}}"></script>
	</div>
</div>
<div class="clearfix"></div>
<!--body wrapper end-->
<!-- /w3l-agile -->
</div>
<!--body wrapper end-->
@stop