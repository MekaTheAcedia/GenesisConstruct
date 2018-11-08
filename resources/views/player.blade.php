@extends('layouts/master')
@section('content')
<style type="text/css">
html, body, div, span, applet, object, iframe, h1, h2, h3, h4, h5, h6, p, blockquote, pre, a, abbr, acronym, address, big, cite, code, del, dfn, em, img, ins, kbd, q, s, samp, small, strike, strong, sub, sup, tt, var, b, u, i, center, dl, dt, dd, ol, ul, li, fieldset, form, label, legend, table, caption, tbody, tfoot, thead, tr, th, td, article, aside, canvas, details, embed, figure, figcaption, footer, header, hgroup, menu, nav, output, ruby, section, summary, time, mark, audio, video {
	margin: 0;
	padding: 0;
	border: 0;
	font-size: 100%;
	vertical-align: baseline;
}
article,
aside,
details,
figcaption,
figure,
footer,
header,
hgroup,
menu,
nav,
section {
	display: block;
}
body {
	line-height: 1.3;
	font-family: Open Sans,segoe ui,Helvetica,Arial,sans-serif;
	-webkit-font-smoothing: antialiased!important;
	font-stretch: condensed;
	box-sizing: border-box;
	font-style: normal!important;
}
.description p{
	font-family: Open Sans,segoe ui,Helvetica,Arial,sans-serif;
}
.lyric p{
	font-family: Open Sans,segoe ui,Helvetica,Arial,sans-serif;
}
ol,
ul {
	list-style: none;
}
blockquote,
q {
	quotes: none;
}
blockquote:before,
blockquote:after,
q:before,
q:after {
	content: '';
	content: none;
}
table {
	border-collapse: collapse;
	border-spacing: 0;
}
.song-title{
	line-height: 1.3;
	font-weight: 600;
	font-size: 27px;
	display: inline-block;
	margin: 0;
	padding: 0;
	margin-block-start: 0.67em;
	margin-block-end: 0.67em;
	margin-inline-start: 0px;
	margin-inline-end: 0px;
	box-sizing: border-box;
	color: #0c0c0c;
}
.vocal{
	display: inline;
	margin: 0;
	padding: 0;
	box-sizing: border-box;
	line-height: 1.3;
	font-weight: 400;
	font-size: 26px;
	text-decoration: none !important;
	color: #721799;
}
.producer{
	color: #888;
	box-sizing: border-box;
	font-weight: 400;
	font-style: normal!important;
	font-size: 16px;
}
.producer a{
	font-size: 16px;
	font-style: normal;
	text-decoration: none !important;
	color: #721799;
}
.album{
	display: inline;
}
.album span{
	display: inline;
	color: #888;
	margin: 0 5px;
}
.album span a{
	font-size: 16px;
	font-style: normal;
	text-decoration: none !important;
	color: #721799;
}
.album-name{
	font-size: 16px;
	font-style: normal;
	text-decoration: none !important;
	color: #721799;
}
.genre{
	color: #888;
	font-weight: 400;font-size: 16px;
}
.genre a{
	font-size: 16px;
	font-style: normal;
	text-decoration: none !important;
	color: #721799;
}
.producer-info{
	width: 100%;
	overflow: hidden;
	margin-bottom: 30px;
	position: relative;
	margin: 0;
	padding: 0;
	display: block;
}
.producer-info a img{
	width:100px;
	height:100px;
	/*border-radius:50%;-moz-border-radius:50%;-webkit-border-radius:50%;*/
	margin-right: 20px;
	position: relative;
	max-width: 100%;
	vertical-align: middle;
	border: 0;
}
.producer-name h2{
	margin-right: 10px;
	position: relative;
	z-index: 1;
	font-size: 22px;
	color: #333;
	font-weight: 600;
}
.producer-name h2 a{
	text-decoration: none !important;
	color: #333;
}
.recommend-song{
	margin: 0;
	padding: 0;
	color: #000;
	font-weight: 400;
	font-style: normal!important;
	font-size: 14px;
}
.next-song{
	margin-bottom: 20px;
	margin: 0;
	box-sizing: border-box;
	padding: 0;
	position: relative;
}
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
*{
	font-family: Roboto,segoe ui,Helvetica,Arial,sans-serif;
	line-height: 1.42857;
	-webkit-font-smoothing: antialiased!important;
	font-stretch: condensed;
}
.box-content{
	overflow: hidden;
	border: 0 none!important;
	padding: 0!important;
	margin: 0;
	box-sizing: border-box;
	color: #000;
	font-weight: 400;
	font-style: normal!important;
	font-size: 14px;
}
.list-element{
	margin: 0;
	box-sizing: border-box;
	display: block;
	list-style-type: disc;
	margin-block-start: 1em;
	margin-block-end: 1em;
	margin-inline-start: 0px;
	margin-inline-end: 0px;
	padding-inline-start: 40px;
	padding: 0;
	color: #000;
	font-weight: 400;
	font-style: normal!important;
	font-size: 14px;
}
.song-element{
	margin-top: 0;
	padding-top: 0;
	border-top: 0;
	margin-left: 0;
	margin-right: 0;
	overflow: hidden;
	margin: 0 0 15px;
	padding: 0 10px 15px 0;
	border-bottom: 1px solid #f2f2f2;
	position: relative;
	min-height: 41px;
	list-style: none;
	color: #000;
	font-weight: 400;
	font-style: normal!important;
	font-size: 14px;
}
.image-link{
	position: relative;
	display: block;
	float: left;
	margin-right: 15px;
	margin-bottom: 0;
	background-color: #000;
	text-decoration: none !important;
	color: #000;
	outline: 0;
	box-sizing: border-box;
	list-style: none;
	font-weight: 400;
	font-style: normal!important;
	font-size: 14px;
}
.image{
	width: 50px;
	height: 50px;
	transition: all .3s ease-in;
	max-width: 100%;
	vertical-align: middle;
	border: 0;
	box-sizing: border-box;
	width: 50px;
	height: 50px;
	color: #000;
	cursor: pointer;
	list-style: none;
}
.hover-image{
	margin: -13px 0 0 -13px;
	position: absolute;
	top: 50%;
	left: 50%;
	opacity: 0;
	transform: scale(0);
	transition: all .3s ease-in;
	width: 25px;
	height: 25px;
	background-position: 0 -1509px;
	display: block;
	background-repeat: no-repeat;
	background-image: url({{asset('img/icon.png')}});
box-sizing: border-box;
cursor: pointer;
list-style: none;
}
.next-song-name{
	display: inherit;
	max-height: 3em;
	overflow: hidden;
	-webkit-line-clamp: 2;
	-webkit-box-orient: vertical;
	font-weight: 400;
	margin: 0;
	box-sizing: border-box;
	margin-inline-start: 0px;
	margin-inline-end: 0px;
	padding: 0;font-size: 100%;
	list-style: none;
	color: #000;
	font-style: normal!important;
}
.song-link{
	font-size: 18px;
	color: #000;
	text-decoration: none !important;
	outline: 0;
	box-sizing: border-box;
	cursor: pointer;
	font-weight: 400;
	list-style: none;
	text-align: -webkit-match-parent;
	font-style: normal!important;
}
.next-idol{
	white-space: nowrap;
	text-overflow: ellipsis;
	overflow: hidden;
	margin: 0;
	box-sizing: border-box;
	list-style: none;
	color: #000;
	font-weight: 400;
	font-style: normal!important;
	font-size: 14px;
}
.idol-title{
	display: inline;
	font-style: normal;
	font-size: 14px;
	color: #888;
	font-weight: 400;
	margin: 0;
	box-sizing: border-box;
	margin-block-start: 1.33em;
	margin-block-end: 1.33em;
	margin-inline-start: 0px;
	margin-inline-end: 0px;
	padding: 0;
	white-space: nowrap;
	list-style: none;
}
.idol-link{
	font-size: 12px;
	color: #888;
	outline: 0;
	font-style: normal;
	font-weight: 400;
	white-space: nowrap;
	list-style: none;
	font-stretch: condensed;
	text-decoration: none !important;
}
.box-comment{
	margin-top: 30px;
}
.title-section{
	text-transform: uppercase;
	font-weight: 300;
	margin-bottom: 15px;
	font-size: 26px;
	font-family: "Open Sans","segoe ui",Helvetica,Arial,sans-serif;
	color: purple;
	margin: 0;
	padding: 0;
	margin-block-start: 1em;
	margin-block-end: 1em;
	margin-inline-start: 0px;
	margin-inline-end: 0px;
}
.title-section span#commentCounter{
		color: #000;
		font-weight: 300;
}
.form-comment{
		background: 0 0;
		margin-bottom: 20px;
		padding: 0 0 26px;
		border: none;
		border-bottom: 1px solid #ddd;
		width: 100%;
		margin: 0;
}
.comment-avatar{
		width: 50px;
		height: 50px;
		float: left;
		margin: 0;
		padding: 0;
}
.useravatar{
		width: 50px;
		height: 50px;
		max-width: 100%;
		vertical-align: middle;
		border: 0;
		margin-right:10px;
}
.wrap-comment{
		position: relative;
		margin-left: 65px;
		overflow: hidden;
		margin: 0;
		padding: 0;
		padding-left: 15px;
}
.wrap-comment textarea{
	height: 50px;
	padding: 5px 25px 5px 8px;
	color: #333;
	font-size: 14px;
	width: 100%;
	border: 1px solid #dedede;
	margin-bottom: 10px;
	overflow: auto;
	vertical-align: top;
	margin: 0;
	font-weight: inherit;
	font-style: inherit;
	font-family: inherit;
	margin-bottom: 12px;
}
.frm-checkbox{
	margin-top: 0;
	margin-left: 0;
	color: #333;
	font-size: 12px;
	float: left;
	margin-right: 10px;
	margin: 0;
	padding: 0;
}
.disabled{
	opacity: .3!important;
	pointer-events: none;
}
.frm-checkbox input{
	margin-right: 5px;
	margin: 0;
	font-size: 100%;
	vertical-align: middle;
	line-height: normal;
	border-radius: 0;
	font-weight: inherit;
	font-style: inherit;
	font-family: inherit;
	padding: 0;
}
.button-submit{
	padding-top: 8px;
	padding-bottom: 8px;
	display: inline-block;
	padding: 10px 20px;
	color: #fff!important;
	border: 0 none;
	cursor: pointer;
	margin: 0;
	vertical-align: middle;
	line-height: normal;
	border-radius: 0;
	font-weight: inherit;
	font-style: inherit;
	font-family: inherit;
	border-radius: 2px;
}
.button-submit.btn-dark-blue {
	background: #721799;
	font-size: 14px;
}
.pull-right {
	float: right !important;
}
.list-comment{
	padding-top: 15px;
	margin-bottom: 20px;
	margin: 0;
	padding: 0;
}
.item-comment{
	border-bottom: none;
	padding: 10px 0;
	overflow: hidden;
	position: relative;
	list-style: none;
	margin: 0;
}
.thumb-user{
	float: left;
	text-decoration: none !important;
	color: #000;
	outline: 0;
	list-style: none;
	padding-right: 15px;
}
.user-avatar{
	max-width: 100%;
	vertical-align: middle;
	border: 0;
	width: 50px;
	height: 50px;
	list-style: none;
}
.post-comment{
	margin-left: 65px;
	position: relative;
	margin: 0;
	padding: 0;
	list-style: none;
}
.username{
	color: #333;
	display: inline-block;
	text-decoration: none !important;
	margin-bottom: 5px;
	outline: 0;
	list-style: none;
}
.fn-content{
	font-family: Roboto,segoe ui,Helvetica,Arial,sans-serif;
	white-space: pre-line;
	color: #666;
	font-size: 14px;
	margin: 0;
	padding: 0;
}
.func-comment{
	margin: 12px 0 5px;
	padding: 0;
	list-style: none;
}
.reply{
	color: #333;
	display: inline-block;
	margin-bottom: 5px;
	text-decoration: none !important;
	outline: 0;
	list-style: none;
	margin-left: 65px;
	font-size:13px;
}
.time-comment{
	visibility: visible;
	opacity: 1;
	position: absolute;
	top: 2px;
	right: 0;
	font-size: 12px;
	color: #666;
	list-style: none;
}
#volume-bar{
	width: 120px;
	height: 4px;
	background: #151518;
	border-radius: 2px;
	cursor: pointer;
}
#volume-bar div{
	width: 4px;
	height: 4px;
	margin-top: 1px;
	background: #EF6DBC;
	border-radius: 2px;
}
</style>
<link rel="stylesheet" type="text/css" href="{{ asset('shorten/shorten.min.css') }}">
<script type="text/javascript" src="{{ asset('shorten/shorten.min.js') }}"></script>
<link rel='stylesheet prefetch' href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700'>
<link rel="stylesheet" type="text/css" href="{{ asset('css/playerstyle.css') }}">
@foreach ($song as $item)
<div class="clearfix"></div>
<div class="page-wrapper">
	<div class="inner-content single">
		<div class="container" style="margin-top: 20px;">
			<div class="song-content col-md-8">
				<div class="row">
					<div class="song-info row">
						<div class="song-name" style="word-break: break-word;">
							<h1 class="song-title">
								{{$item->title}} -
								@foreach ($producer as $item2)
								<a href="{{URL::route('producer', $item2->producerid)}}" class="vocal">{{$item2->name}}</a>
								@endforeach
							</h1>
						</div>
						<div class="row" style="margin-right: 0; margin-left: 0">
							<div class="col-sm-4" style="word-break: break-word;">
								<span class="producer">
									Vocal :  {{$item->vocal}}
									<br>
									Genre :  {{$item->genre}}
									<br>
								</span>
							</div>
							<div class="col-sm-1" style="word-break: break-word;">
								<div class="album">
									<span>.</span>
								</div>
								<br>
								<div class="album">
									<span>.</span>
								</div>
								<br>
							</div>
							<div class="col-md-7" style="word-break: break-word;">
								<span class="genre" style="">
									@foreach ($album as $item2)
									<div class="album">
										<span>Album : </span><a href="{{URL::route('albums', $item2->albumid)}}" class="album-name">{{$item2->title}}</a>
									</div>
									@endforeach
									<br>
									<div class="album">
										<span>Country : {{$item->country}}</span>
									</div>
									<br>
								</span>
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="playertheme row col-md-10" style="margin-bottom: 25px;">
						<ul>
							<li class="cover"><img src="{{$item->avatar}}"/></li>
							<li class="info">
								<h1>{{$item->title}}</h1>
								<h4>Feat.</h4>
								<br>
								@foreach ($producer as $item2)
								<h2>{{$item2->name}}</h2>
								@endforeach
								<br>
								<div class="button-items">
									<audio id="music" preload="auto" loop="false">
										<source src="{{asset($item->songaddress)}}" type="audio/mp3">
									</audio>
									<div id="slider"><div id="elapsed"></div></div>
									<p id="timer">0:00</p>
									<div class="controls">
										<span class="expend">
											<svg class="step-backward" viewBox="0 0 25 25" xml:space="preserve">
											<g><polygon points="4.9,4.3 9,4.3 9,11.6 21.4,4.3 21.4,20.7 9,13.4 9,20.7 4.9,20.7"/></g>
										</svg>
									</span>
									<svg id="play" viewBox="0 0 25 25" xml:space="preserve">
										<defs>
										<rect x="-49.5" y="-132.9" width="446.4" height="366.4"/>
										</defs>
										<g>
											<circle fill="none" cx="12.5" cy="12.5" r="10.8"/>
											<path fill-rule="evenodd" clip-rule="evenodd" d="M8.7,6.9V18c0,0,0.2,1.4,1.8,0l8.1-4.8c0,0,1.2-1.1-1-2L9.8,6.5 C9.8,6.5,9.1,6,8.7,6.9z"/>
										</g>
									</svg>
									<svg id="pause" viewBox="0 0 25 25" xml:space="preserve">
										<g>
											<rect x="6" y="4.6" width="3.8" height="15.7"/>
											<rect x="14" y="4.6" width="3.9" height="15.7"/>
										</g>
									</svg>
									<span class="expend">
										<svg class="step-foreward" viewBox="0 0 25 25" xml:space="preserve">
											<g>
												<polygon points="20.7,4.3 16.6,4.3 16.6,11.6 4.3,4.3 4.3,20.7 16.7,13.4 16.6,20.7 20.7,20.7"/>
												</g>
											</svg>
										</span>
									</div>
								</div>
							</li>
						</ul>
					</div>
				</div>
				<div class="row" style="margin: -30px;">
					<div class="producer-info row" style="margin-bottom: 20px">
						@foreach ($producer as $item2)
						<a href="{{URL::route('producer', $item2->producerid)}}"><img src="{{$item2->avatar}}" alt="avatar" style="">
							<div class="producer-name" style="margin: -100px 130px 100px;padding: 0;word-break: break-word;">
								<h2>
								<a href="{{URL::route('producer', $item2->producerid)}}">{{$item2->name}}</a>
								</h2>
							</div>
						</a>
						<div class="producer-description" style="margin: -90px 130px 100px;">
							<div class="description" style="color: #666; word-break: break-word;">{!!$item->description!!}</div>
						</div>
						@php
						break;
						@endphp
						@endforeach
					</div>
					<div class="song-lyric col-md-11 pre-scrollable" style="margin: -55px 0px 20px; background-color: #eeeeee;">
						<h3 style="font-size: 20px;font-family: Open Sans,segoe ui,Helvetica,Arial,sans-serif;">
						Lyrics:
						</h3>
						<br>
						<div class="lyric" style="word-break: break-word;">
							{!!$item->lyric!!}
							<p style="font-weight:600;float: right;font-size: 13px;">
								Upload by:
								@foreach ($user as $item2)
								<a href="{{URL::route('user', $item2->id)}}" style="text-decoration: none;color: #721799">{{$item2->name}}</a>
								@php
								break;
								@endphp
								@endforeach
							</p>
							<hr>
						</div>
					</div>
					<div class="row col-md-11" style="margin-left: 0px;">
						<div class="box-comment">
							<h3 class="title-section">
								Comment ({{count($comments)}})
							</h3>
							<form action="{{URL::route('comment')}}" method="POST" class="form-comment">
								{{csrf_field()}}
								<p class="comment-avatar">
									<img src="{{Auth::user()->avatar}}" class="useravatar">
								</p>
								<div class="wrap-comment">
									<textarea cols="25" rows="10"></textarea>
									<button name="btn-submit" type="submit" class="button-submit btn-dark-blue pull-right">Submit</button>
								</div>
							</form>
							<ul class="list-comment">
								@foreach ($comments as $item2)
								<li class="item-comment">
									<a href="{{URL::route('user', $item2->id)}}" class="thumb-user">
										<img src="{{$item2->avatar}}" class="user-avatar">
									</a>
									<div class="post-comment comment" style="word-break: break-word;">
										<a href="{{URL::route('user', $item2->id)}}" target="blank" class="username">{{$item2->name}}</a>
										<p class="fn-content">{{$item2->message}}</p>
										<div class="func-comment">
											<div class="reply"><i class="glyphicon glyphicon-ban-circle"></i> Report</div>
										</div>
										<span class="time-comment">{{$item2->uploaddate}}</span>
									</div>
								</li>
								@endforeach
							</ul>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-4 recommend-song" style="">
				<!-- next song -->
				@foreach ($nextsong as $item2)
				<div class="row next-song">
					<h3 class="title-song">Next</h3>
					<div class="box-content">
						<ul class="list-element">
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
										@foreach ($nextproducer as $item3)
										<a href="{{URL::route('producer', $item3->producerid)}}" class="idol-link">{{$item3->name}}</a>
										@endforeach
									</h4>
								</div>
							</li>
						</ul>
					</div>
				</div>
				@php
				break;
				@endphp
				@endforeach
				<!-- previous song -->
				@foreach ($prevsong as $item2)
				<div class="row next-song" style="margin-bottom: 20px;margin: 0;box-sizing: border-box;padding: 0;position: relative;">
					<h3 class="title-song">Previous</h3>
					<div class="box-content">
						<ul class="list-element">
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
										@foreach ($prevproducer as $item3)
										<a href="{{URL::route('producer', $item3->producerid)}}" class="idol-link">{{$item3->name}}</a>
										@endforeach
									</h4>
								</div>
							</li>
						</ul>
					</div>
				</div>
				@php
				break;
				@endphp
				@endforeach
				<!-- new songs -->
				@foreach ($newsongs as $item2)
				<div class="row next-song" style="margin-bottom: 20px;margin: 0;box-sizing: border-box;padding: 0;position: relative;">
					<h3 class="title-song">New</h3>
				@php
				break;
				@endphp
				@endforeach
					@foreach ($newsongs as $item2)
					<div class="box-content">
						<ul class="list-element">
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
						</ul>
					</div>
					@endforeach
				</div>
				<!-- discover songs -->
				@foreach ($discover as $item2)
				<div class="row next-song" style="margin-bottom: 20px;margin: 0;box-sizing: border-box;padding: 0;position: relative;">
					<h3 class="title-song">Discover</h3>
				@php
				break;
				@endphp
				@endforeach
					@foreach ($discover as $item2)
					<div class="box-content">
						<ul class="list-element">
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
						</ul>
					</div>
					@endforeach
				</div>
			</div>
		</div>
		<!-- Container -->
	</div>
	<!-- Inner-content -->
</div>
<!-- page-wrapper -->
<hr>
<div class="clearfix"></div>
@php
break;
@endphp
@endforeach
@stop
@section('js')
<script src="{{ asset('js/player.js') }}"></script>
<script type="text/javascript">
$(".description").shorten({
	"chars" : 170,
	"more"  : "More",
	"less"  : " Less",
});
$(".comment").shorten({
	"chars" : 150,
	"more"  : "More",
	"less"  : " Less"
})
</script>
@stop