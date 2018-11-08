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
</style>
<link rel="stylesheet" type="text/css" href="{{asset('css/albumstyle.css')}}">
<div class="clearfix"></div>
<div class="container">
	<div class="col-md-12">
		<div class="fb-profile">
			<img align="left" class="fb-image-lg" src="{{asset('img/coverdemo.jpg')}}" alt="Profile image example">
			<img align="left" class="fb-image-profile thumbnail" src="{{$item->thumbnail}}">
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
									<img class="image" src="{{$item->avatar}}">
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
						{!!$songs->links()!!}
					</div>
				</div>
			</div>
		</div>
		<div class="producer-description col-md-6">
			<h3 class="title-song">Label:<span> Genesis Construct Entertainment</span></h3>
			<h3 class="title-song">Price:<span> 2000$</span></h3>
			<h3 class="title-song">Description</h3>
			<div class="description"><p>Hương Tràm là con nhà nòi. Cô có ba là NSƯT Tiến Dũng và anh trai là thí sinh Sao Mai điểm hẹn 2010 Phạm Tiến Mạnh. Hương Tràm đã gây cơn sốt trong buổi lên sóng đầu tiên ở vòng Giấu Mặt của "The Voice 2012" khi cô chọn ca khúc kinh điển I Will Always Love You của Whitney Houston và đã được cả 4 vị huấn luyện viên xoay ghế chọn vào đội của mình. Tuy nhiên, Hương Tràm quyết định chọn ca sỹ Thu Minh là vị huấn luyện viên cho giọng ca của mình. Ngày 13/01/2013, Hương Tràm chính thức trở thành quán quân đầu tiên của Giọng Hát Việt. Với ngôi vị quán quân, cô gái Nghệ An sẽ nhận được giải thưởng 500 triệu đồng tiền mặt, 200 triệu tiền sản phẩm của nhà tài trợ và một chuyến du lịch Hàn Quốc 7 ngày. Ngoài ra, cô còn được sở hữu một hợp đồng ghi âm khủng với hãng đĩa quốc tế. Với ngôi vị này, sẽ là bàn đạp rất tốt để cô gái đến từ xứ Nghệ bước vào làng nhạc Việt Nam với nhiều chông gai và đầy thách thức. Những bài hát tiêu biểu làm nên tên tuổi ca sĩ Hương Tràm: Năm phát hành 2013: Ngại Ngùng Với Em Là Mãi Mãi Xa Sẽ Có Người Cần Anh – song ca với Cao Thái Sơn Trăng dưới chân mình Vẫn yêu từng phút giây – song ca với Cao Thái Sơn. Năm phát hành 2015: I’m still loving you. Năm phát hành 2016: Ngốc Cho Em Gần Anh Thêm Chút Nữa (Nhạc phim cùng tên). Năm phát hành 2017: Ta Còn Thuộc Về Nhau. Em Gái Mưa</p></div>
		</div>
	</div>
</div> <!-- /container -->
<div class="clearfix"></div>
@php
	break;
@endphp
@endforeach
@stop