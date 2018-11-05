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

</style>
<link rel="stylesheet" type="text/css" href="{{ asset('js/shorten/shorten.min.css') }}">
<!-- <script type="text/javascript" src="http://code.jquery.com/jquery-latest.js"></script> -->
<script type="text/javascript" src="{{ asset('js/shorten/shorten.min.js') }}"></script>
<link rel='stylesheet prefetch' href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700'>
<link rel="stylesheet" type="text/css" href="{{ asset('css/playerstyle.css') }}">
<div class="clearfix"></div>
<div class="page-wrapper">
	<div class="inner-content single">
		<div class="container" style="margin-top: 20px;">
			<div class="song-content col-md-7">
				<div class="row">
					<div class="song-info row">
						<div class="song-name">
							<h1 style="line-height: 1.3;font-weight: 600;font-size: 27px;display: inline-block;margin: 0;padding: 0;margin-block-start: 0.67em;margin-block-end: 0.67em;margin-inline-start: 0px;margin-inline-end: 0px;box-sizing: border-box;-webkit-font-smoothing: antialiased!important;font-stretch: condensed;box-sizing: border-box;color: #0c0c0c;">Em gái mưa - <a href="#" style="display: inline;margin: 0;padding: 0;box-sizing: border-box;line-height: 1.3;font-weight: 400;font-size: 26px;font-family: Open Sans,segoe ui,Helvetica,Arial,sans-serif;-webkit-font-smoothing: antialiased!important;font-stretch: condensed;box-sizing: border-box;text-decoration: none;color: #721799;">Hương Tràm</a></h1>
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
				</div>
				<div class="row">
					<div class="playertheme row col-md-10" style="margin-bottom: 25px;">
						<ul>
							<li class="cover"><img src="http://i1285.photobucket.com/albums/a583/TheGreatOzz1/Hosted-Images/Noisy-Freeks-Image_zps4kilrxml.png"/></li>
							<li class="info">
								<h1>The Noisy Freaks</h1>
								<h4>Premiere</h4>
								<br>
								<h2>I Need You Back</h2>
								<br>

								<div class="button-items">
									<audio id="music" preload="auto" loop="false">
										<source src="{{ asset('media/edm.mp3') }}" type="audio/mp3">
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
					</div>
					<div class="row" style="margin: -30px;">
						<div class="producer-info" style="width: 100%;overflow: hidden;margin-bottom: 30px;position: relative;margin: 0;padding: 0;display: block;-webkit-font-smoothing: antialiased!important;font-stretch: condensed;">
							<a href="#"><img src="{{ asset('img/a12.jpg') }}" alt="avatar" style="width:100px;height:100px;/*border-radius:50%;-moz-border-radius:50%;-webkit-border-radius:50%;*/margin-right: 20px;position: relative;max-width: 100%;vertical-align: middle;border: 0;">

							<div class="producer-name" style="margin: -100px 130px 100px;padding: 0;">
								<h2 style="margin-right: 10px;position: relative;z-index: 1;font-size: 22px;color: #333; font-weight: 600;"> <a href="#" style="text-decoration: none; color: #333;"> Hương Tràm </a></h2>
							</div>
							</a>

							<div class="producer-description" style="margin: -90px 130px 100px;">
								<p class="description" style="font-family: Roboto,segoe ui,Helvetica,Arial,sans-serif;color: #666;"> <a href="#" style="text-decoration: none;color: #222 !important;">Hương Tràm</a>  là con nhà nòi. Cô có ba là NSƯT Tiến Dũng và anh trai là thí sinh Sao Mai điểm hẹn 2010 Phạm Tiến Mạnh. Hương Tràm đã gây cơn sốt trong buổi lên sóng đầu tiên ở vòng Giấu Mặt của "The Voice 2012" khi cô chọn ca khúc kinh điển I Will Always Love You của Whitney Houston và đã được cả 4 vị huấn luyện viên xoay ghế chọn vào đội của mình. Tuy nhiên, Hương Tràm quyết định chọn ca sỹ Thu Minh là vị huấn luyện viên cho giọng ca của mình. Ngày 13/01/2013, Hương Tràm chính thức trở thành quán quân đầu tiên của Giọng Hát Việt. Với ngôi vị quán quân, cô gái Nghệ An sẽ nhận được giải thưởng 500 triệu đồng tiền mặt, 200 triệu tiền sản phẩm của nhà tài trợ và một chuyến du lịch Hàn Quốc 7 ngày. Ngoài ra, cô còn được sở hữu một hợp đồng ghi âm khủng với hãng đĩa quốc tế. Với ngôi vị này, sẽ là bàn đạp rất tốt để cô gái đến từ xứ Nghệ bước vào làng nhạc Việt Nam với nhiều chông gai và đầy thách thức. Những bài hát tiêu biểu làm nên tên tuổi ca sĩ Hương Tràm: Năm phát hành 2013: Ngại Ngùng Với Em Là Mãi Mãi Xa Sẽ Có Người Cần Anh – song ca với Cao Thái Sơn Trăng dưới chân mình Vẫn yêu từng phút giây – song ca với Cao Thái Sơn. Năm phát hành 2015: I’m still loving you. Năm phát hành 2016: Ngốc Cho Em Gần Anh Thêm Chút Nữa (Nhạc phim cùng tên). Năm phát hành 2017: Ta Còn Thuộc Về Nhau. Em Gái Mưa</p>
							</div>
						</div>
						<div class="song-lyric col-md-11 pre-scrollable" style="margin: -55px 0px 0px; background-color: #eeeeee;">
							<h3 style="font-size: 20px;font-family: Roboto,segoe ui,Helvetica,Arial,sans-serif;">Lời bài hát: <span style="font-weight: 600;font-size: 21px;font-family: Roboto,segoe ui,Helvetica,Arial,sans-serif;"> Em gái Mưa</span></h3><br>
							<p style="font-family: Roboto,segoe ui,Helvetica,Arial,sans-serif;"> 
								Mưa trôi cả bầu trời nắng, trượt theo những nỗi buồn. <br>
								Thấm ướt lệ sầu môi đắng vì đánh mất hy vọng. <br>
								Lần đầu gặp nhau dưới mưa, trái tim rộn ràng bởi ánh nhìn. <br>
								Tình cảm dầm mưa thấm lâu, anh nào ngờ. <br><br>

								Mình hợp nhau đến như vậy, thế nhưng không phải là yêu. <br>
								Và anh muốn hỏi em rằng: Chúng ta là thế nào? <br>
								Rồi lặng người đến vô tận, trách sao được sự tàn nhẫn. <br>
								Em trót vô tình, thương anh như là anh trai. <br><br>

								Đừng lo lắng về anh khi mà anh vẫn còn yêu em. <br> 
								Càng xa lánh, càng trống vắng, tim cứ đau và nhớ lắm! <br>
								Đành phải buông hết tất cả thôi. <br>
								Nụ cười mỉm sau bờ môi. <br>
								Ấm áp dịu dàng bên em, anh đã bao lần yên giấc. <br><br>

								Nhìn trên cao, khoảng trời yêu mà anh lỡ dành cho em. <br>
								Giờ mây đen quyện thành bão, giông tố đang dần kéo đến. <br>
								Chồi non háo hức đang đợi mưa, rất giống anh ngày xưa. <br>
								Mưa trôi để lại kí ức, trong giấc mơ buốt lạnh. <hr> </p>
								<p style="font-weight:600; font-family: Roboto,segoe ui,Helvetica,Arial,sans-serif; float: right;font-size: 13px;">Upload by: Trọng</p>
								<hr>
						</div>
						<div class="comment">
							
						</div>
					</div>
				</div>
			
				<div class="col-md-5" style="box-sizing: border-box;margin: 0;padding: 0;color: #000;font-weight: 400;font-style: normal!important;font-size: 14px;font-family: Roboto,segoe ui,Helvetica,Arial,sans-serif;line-height: 1.42857;-webkit-font-smoothing: antialiased!important;font-stretch: condensed;">
					<div class="row" style="margin-bottom: 20px;margin: 0;box-sizing: border-box;padding: 0;position: relative;">
						<h3 style="margin-bottom: 20px;font-size: 26px;text-transform: uppercase;font-weight: 300;font-family: Open Sans,segoe ui,Helvetica,Arial,sans-serif;color: purple;margin-block-start: 0.83em;margin-block-end: 0.83em;margin-inline-start: 0px;margin-inline-end: 0px;display: block;box-sizing: border-box;font-style: normal!important;line-height: 1.42857;-webkit-font-smoothing: antialiased!important;font-stretch: condensed;">Next</h3>
						<div style="overflow: hidden;border: 0 none!important;padding: 0!important;margin: 0;box-sizing: border-box;color: #000;font-weight: 400;font-style: normal!important;font-size: 14px;font-family: Roboto,segoe ui,Helvetica,Arial,sans-serif;line-height: 1.42857;-webkit-font-smoothing: antialiased!important;font-stretch: condensed;">
							<ul style="margin: 0;box-sizing: border-box;display: block;list-style-type: disc;margin-block-start: 1em;margin-block-end: 1em;margin-inline-start: 0px;margin-inline-end: 0px;padding-inline-start: 40px;padding: 0;color: #000;font-weight: 400;font-style: normal!important;font-size: 14px;font-family: Roboto,segoe ui,Helvetica,Arial,sans-serif;line-height: 1.42857;-webkit-font-smoothing: antialiased!important;font-stretch: condensed;">
								<li style="margin-top: 0;padding-top: 0;border-top: 0;margin-left: 0;margin-right: 0;overflow: hidden;margin: 0 0 15px;padding: 0 10px 15px 0;border-bottom: 1px solid #f2f2f2;position: relative;min-height: 41px;list-style: none;color: #000;font-weight: 400;font-style: normal!important;font-size: 14px;font-family: Roboto,segoe ui,Helvetica,Arial,sans-serif;line-height: 1.42857;-webkit-font-smoothing: antialiased!important;box-sizing: border-box;font-stretch: condensed;">
									<a href="#" style="position: relative;display: block;float: left;margin-right: 15px;margin-bottom: 0;background-color: #000;text-decoration: none;color: #000;outline: 0;box-sizing: border-box;list-style: none;font-weight: 400;font-style: normal!important;font-size: 14px;font-family: Roboto,segoe ui,Helvetica,Arial,sans-serif;line-height: 1.42857;-webkit-font-smoothing: antialiased!important;font-stretch: condensed;"><img src="{{ asset('img/a12.jpg') }}" style="width: 50px;height: 50px;transition: all .3s ease-in;max-width: 100%;vertical-align: middle;border: 0;box-sizing: border-box;width: 50px;height: 50px;color: #000;cursor: pointer;list-style: none;"><span style="margin: -13px 0 0 -13px;position: absolute;top: 50%;left: 50%;opacity: 0;transform: scale(0);transition: all .3s ease-in;width: 25px;height: 25px;background-position: 0 -1509px;display: block;background-repeat: no-repeat;background-image: url({{asset('img/icon.png')}});box-sizing: border-box;cursor: pointer;list-style: none;"></span></a>
									<h3 style="display: inherit;max-height: 3em;overflow: hidden;-webkit-line-clamp: 2;-webkit-box-orient: vertical;font-weight: 400;margin: 0;box-sizing: border-box;margin-inline-start: 0px;margin-inline-end: 0px;padding: 0;font-size: 100%;list-style: none;color: #000;font-style: normal!important;font-family: Roboto,segoe ui,Helvetica,Arial,sans-serif;line-height: 1.42857;-webkit-font-smoothing: antialiased!important;box-sizing: border-box;font-stretch: condensed;"><a href="#" style="font-size: 18px;color: #000;    text-decoration: none;outline: 0;box-sizing: border-box;cursor: pointer;font-weight: 400;list-style: none;text-align: -webkit-match-parent;font-style: normal!important;font-family: Roboto,segoe ui,Helvetica,Arial,sans-serif;line-height: 1.42857;-webkit-font-smoothing: antialiased!important;font-stretch: condensed;">Dấu mưa</a></h3>
									<div style="white-space: nowrap;text-overflow: ellipsis;overflow: hidden;margin: 0;box-sizing: border-box;list-style: none;color: #000;font-weight: 400;font-style: normal!important;font-size: 14px;font-family: Roboto,segoe ui,Helvetica,Arial,sans-serif;line-height: 1.42857;padding: 0;-webkit-font-smoothing: antialiased!important;font-stretch: condensed;"><h4 style="display: inline;font-style: normal;font-size: 14px;color: #888;font-weight: 400;margin: 0;box-sizing: border-box;margin-block-start: 1.33em;margin-block-end: 1.33em;margin-inline-start: 0px;margin-inline-end: 0px;padding: 0;white-space: nowrap;list-style: none;font-family: Roboto,segoe ui,Helvetica,Arial,sans-serif;line-height: 1.42857;"><a href="#" style="font-size: 12px;color: #888;outline: 0;font-style: normal;font-weight: 400;white-space: nowrap;list-style: none;font-family: Roboto,segoe ui-webkit-font-smoothing: antialiased!important;box-sizing: border-box;font-stretch: condensed;,Helvetica,Arial,sans-serif;line-height: 1.42857;text-decoration: none;">Trung Quân Idol</a></h4></div>
								</li>
							</ul>
						</div>
					</div>
					
					<div class="row">
						<div class="hot-and-new-song">

						</div>
					</div>
				</div>
			</div><!-- Container -->
		</div><!-- Inner-content -->
	</div><!-- page-wrapper -->

	<hr>
	<div class="clearfix"></div>
	<script src="{{ asset('js/player.js') }}"></script>
	<script type="text/javascript">
   $(".description").shorten({
    "chars" : 150,
    "more"  : "Xem thêm",
    "less"  : "Rút gọn",
});
</script>

	@stop