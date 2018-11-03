@extends('layouts/master')

@section('content')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">
<link rel='stylesheet prefetch' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.css'>
<link rel='stylesheet prefetch' href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700'>
<link rel="stylesheet" type="text/css" href="{{ asset('css/playerstyle.css') }}">
<div class="clearfix"></div>
<div class="page-wrapper">
	<div class="inner-content single">
		<div class="tittle-head" style="margin-left: 25px;">
			<h3 class="tittle">Player <span class="new">Page</span></h3>
		</div>
		<div class="container" style="margin-top: 20px;">
			<div class="main-content row">
				<div class="song-content col-md-8">
					<div class="row">
							<div class="song-info row">
								<div class="song-name">
									<h1 style="line-height: 1.3;font-weight: 500;font-size: 27px;display: inline-block;margin: 0;padding: 0;margin-block-start: 0.67em;margin-block-end: 0.67em;margin-inline-start: 0px;margin-inline-end: 0px;box-sizing: border-box;-webkit-font-smoothing: antialiased!important;font-stretch: condensed;box-sizing: border-box;color: #0c0c0c;">Em gái mưa - <a href="#" style="display: inline;margin: 0;padding: 0;box-sizing: border-box;line-height: 1.3;font-weight: 500;font-size: 26px;font-family: Open Sans,segoe ui,Helvetica,Arial,sans-serif;-webkit-font-smoothing: antialiased!important;font-stretch: condensed;box-sizing: border-box;text-decoration: none;color: #721799;">Hương Tràm</a></h1>
								</div>
								<div class="producer">
									<span style="color: #888;box-sizing: border-box;font-weight: 400;font-style: normal!important;font-size: 16px;font-family: Roboto,segoe ui,Helvetica,Arial,sans-serif;line-height: 1.42857;-webkit-font-smoothing: antialiased!important;font-stretch: condensed;box-sizing: border-box;">Producer :  <a href="#" style="font-size: 16px;font-style: normal;text-decoration: none;color: #721799;">Mr.Siro</a>
										<div class="album" style="display: inline;">
											<span style="display: inline; color: #888;margin: 0 5px;">.</span>
											<span style="display: inline; color: #888;margin: 0 5px;">Album : </span><a href="#" style="font-size: 16px;font-style: normal;text-decoration: none;color: #721799;">Em gái mưa</a>
										</div>
									</span>
								</div>
								<div class="genre">
									<span style="color: #888;box-sizing: border-box;font-weight: 400;font-style: normal!important;font-size: 16px;font-family: Roboto,segoe ui,Helvetica,Arial,sans-serif;line-height: 1.42857;-webkit-font-smoothing: antialiased!important;font-stretch: condensed;box-sizing: border-box;">Genre :  <a href="#" style="font-size: 16px;font-style: normal;text-decoration: none;color: #721799;">Nhạc trẻ</a>
										<div class="album" style="display: inline;">
											<span style="display: inline; color: #888;margin: 0 5px;">.</span>
											<span style="display: inline; color: #888;margin: 0 5px;">Country : </span><a href="#" style="font-size: 16px;font-style: normal;text-decoration: none;color: #721799;">Việt Nam</a>
										</div>
									</span>
								</div>
							</div>
							<div class="playertheme row" >
								<ul>
									<li class="cover"><img src="http://i1285.photobucket.com/albums/a583/TheGreatOzz1/Hosted-Images/Noisy-Freeks-Image_zps4kilrxml.png"/></li>
									<li class="info">
										<h1>The Noisy Freaks</h1>
										<h4>Premiere</h4>
										<h2>I Need You Back</h2>

										<div class="button-items">
											<audio id="music" preload="auto" loop="false">
												<source src="{{ asset('media/edm.mp3') }}" type="audio/mp3">
													<!-- <source src="https://dl.dropbox.com/s/75jpngrgnavyu7f/The-Noisy-Freaks.ogg?dl=1" type="audio/ogg"> -->
													</audio>
													<div id="slider"><div id="elapsed"></div></div>
													<p id="timer">0:00</p>
													<div class="controls">
														<span class="expend"><svg class="step-backward" viewBox="0 0 25 25" xml:space="preserve">
															<g><polygon points="4.9,4.3 9,4.3 9,11.6 21.4,4.3 21.4,20.7 9,13.4 9,20.7 4.9,20.7"/></g>
														</svg></span>

														<svg id="play" viewBox="0 0 25 25" xml:space="preserve">
															<defs><rect x="-49.5" y="-132.9" width="446.4" height="366.4"/></defs>
															<g><circle fill="none" cx="12.5" cy="12.5" r="10.8"/>
																<path fill-rule="evenodd" clip-rule="evenodd" d="M8.7,6.9V18c0,0,0.2,1.4,1.8,0l8.1-4.8c0,0,1.2-1.1-1-2L9.8,6.5 C9.8,6.5,9.1,6,8.7,6.9z"/>
															</g>
														</svg>
														<svg id="pause" viewBox="0 0 25 25" xml:space="preserve">
															<g>
																<rect x="6" y="4.6" width="3.8" height="15.7"/>
																<rect x="14" y="4.6" width="3.9" height="15.7"/>
															</g>
														</svg>

														<span class="expend"><svg class="step-foreward" viewBox="0 0 25 25" xml:space="preserve">
															<g><polygon points="20.7,4.3 16.6,4.3 16.6,11.6 4.3,4.3 4.3,20.7 16.7,13.4 16.6,20.7 20.7,20.7"/></g>
														</svg></span>

													</div>
												</div>
											</li>
										</ul>
									</div>
									<div class="producer-info" style="margin-top: 15px;">
										<div class="pro-avatar" >
											<img src="{{ asset('img/a12.jpg') }}" alt="avatar" style="width:100px;height:100px;border-radius:50%;-moz-border-radius:50%;-webkit-border-radius:50%;margin-left:-12px;">
										</div>
										<div class="producer-name">
										</div>
										<div class="producer-description">

										</div>
									</div>
									<div class="song-lyric">

									</div>
									<div class="comment">

									</div>
								</div>
						</div>

						<div class="col-md-4">
							<div class="relate-song">

							</div>
							<div class="hot-and-new-song">

							</div>
						</div>
					</div>
				</div><!-- Container -->
			</div>
		</div>
		<hr>
		<div class="clearfix"></div>
		<script src="{{ asset('js/player.js') }}"></script>

		@stop