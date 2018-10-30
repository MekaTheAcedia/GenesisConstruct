@extends('layouts.master')
@section('content')
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
					<h3 class="tittle">New Releses <span class="new">New</span></h3>
					<div class="clearfix"> </div>
				</div>
				<div class="bs-example bs-example-tabs" role="tabpanel" data-example-id="togglable-tabs">
					<div id="myTabContent" class="tab-content">
						<div role="tabpanel" class="tab-pane fade active in" id="home" aria-labelledby="home-tab">
							<div class="browse-inner">
								<!-- /agileits -->
								@foreach ($songs as $item)
								<div class="col-md-3 artist-grid">
									<a  href="{{URL::route('songs', $item->songid)}}">
										<img src="{{asset($item->avatar)}}" title="{{$item->title}}">
									</a>
									<a href="{{URL::route('songs', $item->songid)}}">
									</a>
									<a class="art" href="{{URL::route('songs', $item->songid)}}">{{$item->title}}</a>
								</div>
								@endforeach
								<div class="clearfix"></div>
								{{$songs->links()}}
							</div>
						</div>
					</div>
				</div>
				<!-- /agileinfo -->
			</div>
			<!--//End-albums-->
			<!--//discover-view-->
			<div class="albums fourth">
				<div class="tittle-head two">
					<h3 class="tittle">Discover <span class="new">View</span></h3>
					<div class="clearfix"> </div>
				</div>
				@foreach ($discover as $item)
				<div class="col-md-3 artist-grid">
					<a href="{{URL::route('songs', $item->songid)}}"><img src="{{asset($item->avatar)}}" title="{{$item->title}}"></a>
					<div class="inner-info"><h5>{{$item->title}}</h5></div>
				</div>
				@endforeach
				<div class="clearfix"> </div>
			</div>
		</div>
		<!--//discover-view-->
		<!--//music-left-->
	</div>
	<!--body wrapper start-->
</div>
<div class="clearfix"></div>
<!--body wrapper end-->
<!-- /w3layouts-agile -->
</div>
<!--body wrapper end-->
@stop