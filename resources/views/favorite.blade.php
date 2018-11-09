@extends('layouts.master')
@section('content')
@if (count($favorite) != 0)
<div id="page-wrapper">
	<div class="inner-content">
		<div class="music-browse">
			<!--albums-->
			<!-- pop-up-box -->
			<link href="css/popuo-box.css" rel="stylesheet" type="text/css" media="all">
			<script src="js/jquery.magnific-popup.js" type="text/javascript"></script>
			<script>
					$(document).ready(function() {
					$('.popup-with-zoom-anim').magnificPopup({
						type: 'inline',
						fixedContentPos: false,
						fixedBgPos: true,
						overflowY: 'auto',
						closeBtnInside: true,
						preloader: false,
						midClick: true,
						removalDelay: 300,
						mainClass: 'my-mfp-zoom-in'
					});
					});
			</script>
			<!--//pop-up-box -->
			<div class="browse">
				<div class="tittle-head two">
					<h3 class="tittle">My Favorites</h3>
					<div class="clearfix"> </div>
				</div>
				<div class="bs-example bs-example-tabs" role="tabpanel" data-example-id="togglable-tabs">
					<div id="myTabContent" class="tab-content">
						<div role="tabpanel" class="tab-pane fade active in" id="home" aria-labelledby="home-tab">
							<div class="browse-inner">
								<!-- /agileits -->
								@php
								$songCount = 1;
								@endphp
								@foreach ($favorite as $item)
								@if ($songCount == 1 || $songCount == 7 || $songCount == 13 || $songCount == 19 || $songCount == 25)
								<div class="row" style="margin-left: 0;margin-right: 0">
									<div class="col-md-3 artist-grid" style="word-break: break-word">
										<a  href="{{URL::route('songs', $item->songid)}}">
											<img src="{{$item->avatar}}" title="{{$item->title}}">
										</a>
										<a href="{{URL::route('songs', $item->songid)}}"></a>
										<a class="art"
											style="font-size: 0.9em !important;font-family: Open Sans,segoe ui,Helvetica,Arial,sans-serif !important;"
											href="{{URL::route('songs', $item->songid)}}">
											{{$item->title}}
										</a>
									</div>
								@elseif ($songCount % 6 != 0)
									<div class="col-md-3 artist-grid" style="word-break: break-word">
										<a  href="{{URL::route('songs', $item->songid)}}">
											<img src="{{$item->avatar}}" title="{{$item->title}}">
										</a>
										<a href="{{URL::route('songs', $item->songid)}}"></a>
										<a class="art"
											style="font-size: 0.9em !important;font-family: Open Sans,segoe ui,Helvetica,Arial,sans-serif !important;"
											href="{{URL::route('songs', $item->songid)}}">
											{{$item->title}}
										</a>
									</div>
								@else
									<div class="col-md-3 artist-grid" style="word-break: break-word">
										<a  href="{{URL::route('songs', $item->songid)}}">
											<img src="{{$item->avatar}}" title="{{$item->title}}">
										</a>
										<a href="{{URL::route('songs', $item->songid)}}"></a>
										<a class="art"
											style="font-size: 0.9em !important;font-family: Open Sans,segoe ui,Helvetica,Arial,sans-serif !important;"
											href="{{URL::route('songs', $item->songid)}}">
											{{$item->title}}
										</a>
									</div>
								</div>
								@endif
								@endforeach
								@if ($songCount % 6 != 0)
								</div>
								@endif
								<div class="clearfix"></div>
							</div>
						</div>
					</div>
				</div>
				<!-- /agileinfo -->
			</div>
			<!--//End-albums-->
			<!--//music-left-->
		</div>
		<!--body wrapper start-->
	</div>
	<div class="clearfix"></div>
	<!--body wrapper end-->
	<!-- /w3layouts-agile -->
</div>
<!--body wrapper end-->
@elseif(!Auth::check())
<div id="page-wrapper">
	<div class="inner-content">
		<!-- /error_page -->
		<div class="error-top">
			<h3>You Have To Login To Use This Feature...<h3>
			<div class="clearfix"></div>
			<div class="error">
				<a class="not" href="{{route('login')}}">Login</a>
			</div>
			<!-- //error_page -->
		</div>
		<div class="clearfix"></div>
		<!--body wrapper end-->
	</div>
</div>
@else
<div id="page-wrapper">
	<div class="inner-content">
		<!-- /error_page -->
		<div class="error-top">
			<img src="{{asset('images/pic_error.png')}}" alt="" />
			<h3>You Don't Have Any Favorite Song...<h3>
			<div class="clearfix"></div>
			<div class="error">
				<a class="not" href="{{URL::route('index')}}">Back To Home</a>
			</div>
			<!-- //error_page -->
		</div>
		<div class="clearfix"></div>
		<!--body wrapper end-->
	</div>
</div>
<!-- /agileinfo -->
<!--body wrapper end-->
@endif
@stop