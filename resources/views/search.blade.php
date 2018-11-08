@extends('layouts.master')
@section('content')
<style type="text/css">
@import "http://fonts.googleapis.com/css?family=Roboto:300,400,500,700";
.container { margin-top: 20px; }
.mb20 { margin-bottom: 20px; }
hgroup { padding-left: 15px; border-bottom: 1px solid #ccc; }
hgroup h1 { font: 500 normal 1.625em "Roboto",Arial,Verdana,sans-serif; color: #2a3644; margin-top: 0; line-height: 1.15; }
hgroup h2.lead { font: normal normal 1.125em "Roboto",Arial,Verdana,sans-serif; color: #2a3644; margin: 0; padding-bottom: 10px; }
.search-result .thumbnail { border-radius: 0 !important;}
.search-result:first-child { margin-top: 0 !important; }
.search-result { margin-top: 20px; }
.search-result .col-md-2 { border-right: 1px dotted #ccc; min-height: 140px; }
.search-result ul { padding-left: 0 !important; list-style: none;  }
.search-result ul li { font: 400 normal .85em "Roboto",Arial,Verdana,sans-serif;  line-height: 30px; }
.search-result ul li i { padding-right: 5px; }
.search-result .col-md-7 { position: relative; }
.search-result h3 { font: 500 normal 1.375em "Roboto",Arial,Verdana,sans-serif; margin-top: 0 !important; margin-bottom: 10px !important; }
.search-result h3 > a, .search-result i { color: #248dc1 !important; }
.search-result p { font: normal normal 1.125em "Roboto",Arial,Verdana,sans-serif; }
.search-result span.plus { position: absolute; right: 0; top: 126px; }
.search-result span.plus a { background-color: #248dc1; padding: 5px 5px 3px 5px; }
.search-result span.plus a:hover { background-color: #414141; }
.search-result span.plus a i { color: #fff !important; }
.search-result span.border { display: block; width: 97%; margin: 0 15px; border-bottom: 1px dotted #ccc; }
</style>
<link rel="stylesheet" type="text/css" href="{{ asset('shorten/shorten.min.css') }}">
<script type="text/javascript" src="{{ asset('shorten/shorten.min.js') }}"></script>
<div class="container">
	<hgroup class="mb20">
	<h1>Search results for {{$search}}</h1>
	</hgroup>
	@foreach ($songs as $item)
	<hgroup class="mb20">
	<h1>Songs</h1>
	</hgroup>
	@php
		break
	@endphp
	@endforeach
	<section class="col-xs-12 col-sm-6 col-md-12">
		@foreach ($songs as $item)
		<article class="search-result row">
			<div class="col-xs-12 col-sm-12 col-md-2">
				<a href="{{URL::route('songs', $item->songid)}}" title="{{$item->title}}" class="thumbnail"><img src="{{$item->avatar}}"/></a>
			</div>
			<div class="col-xs-12 col-sm-12 col-md-2">
				<ul class="meta-search">
					<li><i class="glyphicon glyphicon-user"></i> <span>{{$item->name}}</span></li>
					<li><i class="glyphicon glyphicon-calendar"></i> <span>{{$item->uploaddate}}</span></li>
					<li><i class="glyphicon glyphicon-tags"></i> <span>{{$item->genre}}</span></li>
				</ul>
			</div>
			<div class="col-xs-12 col-sm-12 col-md-7 excerpet" style="word-break: break-all;">
				<h3><a href="{{URL::route('songs', $item->songid)}}" title="">{{$item->title}}</a></h3>
				{!!$item->description!!}
			</div>
			<span class="clearfix borda"></span>
		</article>
		@endforeach
	</section>
	@foreach ($producer as $item)
	<hgroup class="mb20">
	<h1>Producers</h1>
	</hgroup>
	@php
		break
	@endphp
	@endforeach
	<section class="col-xs-12 col-sm-6 col-md-12">
		@foreach ($producer as $item)
		<article class="search-result row">
			<div class="col-xs-12 col-sm-12 col-md-2">
				<a href="{{URL::route('producer', $item->producerid)}}" title="{{$item->name}}" class="thumbnail"><img src="{{$item->avatar}}"/></a>
			</div>
			<div class="col-xs-12 col-sm-12 col-md-2">
				<ul class="meta-search">
					<li><i class="glyphicon glyphicon-calendar"></i> <span>{{$item->dob}}</span></li>
					<li><i class="glyphicon glyphicon-time"></i> <span>{{$item->status}}</span></li>
					<li><i class="glyphicon glyphicon-tags"></i> <span>{{$item->genre}}</span></li>
				</ul>
			</div>
			<div class="col-xs-12 col-sm-12 col-md-7 excerpet" style="word-break: break-all;">
				<h3><a href="{{URL::route('producer', $item->producerid)}}" title="">{{$item->name}}</a></h3>
				{!!$item->about!!}
			</div>
			<span class="clearfix borda"></span>
		</article>
		@endforeach
	</section>
	@foreach ($album as $item)
	<hgroup class="mb20">
	<h1>Albums</h1>
	</hgroup>
	@php
		break
	@endphp
	@endforeach
	<section class="col-xs-12 col-sm-6 col-md-12">
		@foreach ($album as $item)
		<article class="search-result row">
			<div class="col-xs-12 col-sm-12 col-md-2">
				<a href="{{URL::route('albums', $item->albumid)}}" title="{{$item->title}}" class="thumbnail"><img src="{{$item->thumbnail}}"/></a>
			</div>
			<div class="col-xs-12 col-sm-12 col-md-2">
				<ul class="meta-search">
					<li><i class="glyphicon glyphicon-calendar"></i> <span>{{$item->releasedate}}</span></li>
					<li><i class="glyphicon glyphicon-user"></i> <span>{{$item->name}}</span></li>
					<li><i class="glyphicon glyphicon-tag"></i> <span>{{$item->price}}</span></li>
				</ul>
			</div>
			<div class="col-xs-12 col-sm-12 col-md-7 excerpet" style="word-break: break-all;">
				<h3><a href="{{URL::route('albums', $item->albumid)}}" title="">{{$item->title}}</a></h3>
				{!!$item->description!!}
			</div>
			<span class="clearfix borda"></span>
		</article>
		@endforeach
	</section>
	@foreach ($user as $item)
	<hgroup class="mb20">
	<h1>Users</h1>
	</hgroup>
	@php
		break
	@endphp
	@endforeach
	<section class="col-xs-12 col-sm-6 col-md-12">
		@foreach ($user as $item)
		<article class="search-result row">
			<div class="col-xs-12 col-sm-12 col-md-2">
				<a href="{{URL::route('user', $item->id)}}" title="{{$item->name}}" class="thumbnail"><img src="{{$item->avatar}}"/></a>
			</div>
			<div class="col-xs-12 col-sm-12 col-md-2">
				<ul class="meta-search">
					<li><i class="glyphicon glyphicon-calendar"></i> <span>{{$item->dob}}</span></li>
					<li><i class="glyphicon glyphicon-home"></i> <span>{{$item->location}}</span></li>
					<li><i class="glyphicon glyphicon-tag"></i> <span>{{$item->email}}</span></li>
				</ul>
			</div>
			<div class="col-xs-12 col-sm-12 col-md-7 excerpet" style="word-break: break-all;">
				<h3><a href="{{URL::route('user', $item->id)}}" title="">{{$item->name}}</a></h3>
				{!!$item->about!!}
			</div>
			<span class="clearfix borda"></span>
		</article>
		@endforeach
	</section>
</div>
<hr style="opacity: 0">
<div class="clearfix"></div>
@stop
@section('js')
<script type="text/javascript">
	$("p").shorten({
		"chars" : 230,
		"more" : ' More',
		"less" : ' Less',
	});
</script>
@stop