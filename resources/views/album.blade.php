@extends('layouts.master')
@section('content')
@foreach ($album as $item)
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
</style>
<link rel="stylesheet" type="text/css" href="{{asset('css/albumstyle.css')}}">
<div class="clearfix"></div>
<div class="container">
	<div class="col-md-12">
		<div class="fb-profile">
			<img align="left" class="fb-image-lg" src="{{asset('img/coverdemo.jpg')}}" alt="Profile image example">
			<img align="left" class="fb-image-profile thumbnail" src="{{asset($item->thumbnail)}}">
			<div class="fb-profile-text col-md-7">
				<h1>{{$item->title}}</h1>
				<p>{{$item->producer}}</p>
			</div>
			<div class="col-md-5" style="float: right;margin-top: -30px;">
				<div class="song-list">
					<!-- <h3 class="title-song">song list</h3> -->
					<div class="box-content">
						<h3 class="title-song">Track List</h3>
						<ul class="list-element">
							@foreach ($songs as $item)
							<li class="song-element">
								<a href="{{URL::route('songs', $item->songid)}}" class="image-link">
									<img class="image" src="{{asset($item->avatar)}}">
									<span class="hover-image"></span>
								</a>
								<h3 class="next-song-name">
									<a href="{{URL::route('songs', $item->songid)}}" class="song-link">{{$item->title}}</a>
								</h3>
								<div class="next-idol">
									<h4 class="idol-title">
										<a href="{{URL::route('producer', $item->producerid)}}" class="idol-link">{{$item->producer}}</a>
									</h4>
								</div>
							</li>
							@endforeach
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
</div> <!-- /container -->
<div class="clearfix"></div>
@php
	break;
@endphp
@endforeach
@stop