@extends('layouts.master')
@section('content')
<link rel="stylesheet" type="text/css" href="{{asset('css/albumstyle.css')}}">
<div class="clearfix"></div>
<div class="container">
	<div class="col-md-12">
		<div class="fb-profile">
			<img align="left" class="fb-image-lg" src="{{asset('img/coverdemo.jpg')}}" alt="Profile image example"/>
			<img align="left" class="fb-image-profile thumbnail" src="{{asset('img/a7.jpg')}}" alt="Profile image example"/>
			<div class="fb-profile-text col-md-7">
				<h1>Eli Macy</h1>
				<p>Girls just wanna go fun.</p>
			</div>
			<div class="col-md-5" style="float: right;margin-top: -30px;">
				<div class="song-list">
					<!-- <h3 class="title-song">song list</h3> -->
					<div class="box-content">
						<ul class="list-element">
							<li class="song-element">
								<a href="#" class="image-link"><img class="image" src="{{ asset('img/a12.jpg') }}"><span class="hover-image"></span></a>
								<h3 class="next-song-name"><a href="#" class="song-link">Dấu mưa</a></h3>
								<div class="next-idol"><h4 class="idol-title"><a href="#" class="idol-link">Trung Quân Idol</a></h4></div>
							</li>

							<li class="song-element">
								<a href="#" class="image-link"><img class="image" src="{{ asset('img/a12.jpg') }}"><span class="hover-image"></span></a>
								<h3 class="next-song-name"><a href="#" class="song-link">Dấu mưa</a></h3>
								<div class="next-idol"><h4 class="idol-title"><a href="#" class="idol-link">Trung Quân Idol</a></h4></div>
							</li>

							<li class="song-element">
								<a href="#" class="image-link"><img class="image" src="{{ asset('img/a12.jpg') }}"><span class="hover-image"></span></a>
								<h3 class="next-song-name"><a href="#" class="song-link">Dấu mưa</a></h3>
								<div class="next-idol"><h4 class="idol-title"><a href="#" class="idol-link">Trung Quân Idol</a></h4></div>
							</li>

							<li class="song-element">
								<a href="#" class="image-link"><img class="image" src="{{ asset('img/a12.jpg') }}"><span class="hover-image"></span></a>
								<h3 class="next-song-name"><a href="#" class="song-link">Dấu mưa</a></h3>
								<div class="next-idol"><h4 class="idol-title"><a href="#" class="idol-link">Trung Quân Idol</a></h4></div>
							</li>

							<li class="song-element">
								<a href="#" class="image-link"><img class="image" src="{{ asset('img/a12.jpg') }}"><span class="hover-image"></span></a>
								<h3 class="next-song-name"><a href="#" class="song-link">Dấu mưa</a></h3>
								<div class="next-idol"><h4 class="idol-title"><a href="#" class="idol-link">Trung Quân Idol</a></h4></div>
							</li>

							<li class="song-element">
								<a href="#" class="image-link"><img class="image" src="{{ asset('img/a12.jpg') }}"><span class="hover-image"></span></a>
								<h3 class="next-song-name"><a href="#" class="song-link">Dấu mưa</a></h3>
								<div class="next-idol"><h4 class="idol-title"><a href="#" class="idol-link">Trung Quân Idol</a></h4></div>
							</li>

							<li class="song-element">
								<a href="#" class="image-link"><img class="image" src="{{ asset('img/a12.jpg') }}"><span class="hover-image"></span></a>
								<h3 class="next-song-name"><a href="#" class="song-link">Dấu mưa</a></h3>
								<div class="next-idol"><h4 class="idol-title"><a href="#" class="idol-link">Trung Quân Idol</a></h4></div>
							</li>

							<li class="song-element">
								<a href="#" class="image-link"><img class="image" src="{{ asset('img/a12.jpg') }}"><span class="hover-image"></span></a>
								<h3 class="next-song-name"><a href="#" class="song-link">Dấu mưa</a></h3>
								<div class="next-idol"><h4 class="idol-title"><a href="#" class="idol-link">Trung Quân Idol</a></h4></div>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
		<div>
			
		</div>
	</div>
</div> <!-- /container -->  
<div class="clearfix"></div>
@stop