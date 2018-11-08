@extends('layouts.master')
@section('content')
<style type="text/css">
.title-song{
	margin-bottom: 20px;
	font-size: 26px;
	text-transform: uppercase;
	font-weight: 300;
	color: purple;
	margin-block-start: 0.70em;
	margin-block-end: 0.70em;
	margin-inline-start: 0px;
	margin-inline-end: 0px;
	display: block;
	box-sizing: border-box;
	font-style: normal!important;
	line-height: 1.42857;
}
.producer-description{
	margin: 95px 0px 0px -245px;
}
.description p{
	font-size:16px;
	color: #666;
	font-family: Open Sans,segoe ui,Helvetica,Arial,sans-serif;
}
.title-song span{
	font-style: normal;
	text-transform: none;
	color: black;
}
.fb-profile-text h1{
	font-family: "Roboto",'Open Sans',"segoe ui",Helvetica,Arial,sans-serif;
}
</style>
<link rel="stylesheet" type="text/css" href="{{asset('css/albumstyle.css')}}">
<link rel="stylesheet" type="text/css" href="{{ asset('shorten/shorten.min.css') }}">
<script type="text/javascript" src="{{ asset('shorten/shorten.min.js') }}"></script>
@foreach ($album as $item)
@php
$cover = rand(1, 23);
@endphp
<div class="clearfix"></div>
<div class="container">
	<div class="col-md-12">
		<div class="fb-profile">
			<img align="left" class="fb-image-lg" src="{{asset('img/cover/'.$cover.'.jpg')}}" alt="Profile image example">
			<img align="left" class="fb-image-profile thumbnail" src="{{$item->thumbnail}}">
			<div class="fb-profile-text col-md-7">
				<h1>{{$item->title}}</h1>
				@foreach ($producer as $item2)
				<p>{{$item2->name}}</p>
				@endforeach
			</div>
			<div class="col-md-5" style="float: right;margin-top: -30px;">
				<div class="song-list">
					<!-- <h3 class="title-song">song list</h3> -->
					<div class="box-content">
						<h3 class="title-song">Track List</h3>
						<ul class="list-element">
							@foreach ($songs as $item2)
							<li class="song-element">
								<a href="{{URL::route('songs', $item2->songid)}}" class="image-link">
									<img class="image" src="{{$item2->avatar}}">
									<span class="hover-image"></span>
								</a>
								<h3 class="next-song-name">
									<a href="{{URL::route('songs', $item2->songid)}}" class="song-link">{{$item2->title}}</a>
								</h3>
								<div class="next-idol">
									<h4 class="idol-title">
										<a href="{{URL::route('producer', $item2->producerid)}}" class="idol-link">{{$item2->name}}</a>
									</h4>
								</div>
							</li>
							@endforeach
						</ul>
						{!!$songs->links()!!}
					</div>
				</div>
			</div>
		</div>
		<div class="producer-description col-md-6" style="word-break: break-word;">
			<h3 class="title-song">Label:<span> {{$item->label}}</span></h3>
			<h3 class="title-song">Price:<span> {{$item->price}}$</span></h3>
			<h3 class="title-song">Description</h3>
			<div class="description">{!!$item->description!!}</div>
		</div>
	</div>
</div>
<!-- /container -->
<hr style="opacity: 0">
<div class="clearfix"></div>
@php
	break;
@endphp
@endforeach
@stop
@section('js')
<script type="text/javascript">
	$(".description").shorten({
		"chars" : 500,
		"more"  : "More",
		"less"  : " Less",
	});
</script>
@stop