@extends('layouts.master')
@section('content')
<style type="text/css">
.emp-profile{
	padding: 3%;
	margin-top: 3%;
	margin-bottom: 3%;
	border-radius: 0.5rem;
	background: #fff;
}
.profile-img{
	text-align: center;
}
.profile-img img{
	width: 70%;
	height: 100%;
}
.profile-img .file {
	position: relative;
	overflow: hidden;
	margin-top: -20%;
	width: 70%;
	border: none;
	border-radius: 0;
	font-size: 15px;
	background: #212529b8;
}
.profile-img .file input {
	position: absolute;
	opacity: 0;
	right: 0;
	top: 0;
}
.profile-head h5{
	color: #333;
}
.profile-head h6{
color: #0062cc;
}
.profile-edit-btn{
	border: none;
	border-radius: 1.5rem;
	width: 70%;
	padding: 2%;
	font-weight: 600;
	color: #6c757d;
	cursor: pointer;
}
.proile-rating{
	font-size: 12px;
	color: #818182;
	margin-top: 5%;
}
.proile-rating span{
	color: #495057;
	font-size: 15px;
	font-weight: 600;
}
.profile-head .nav-tabs{
	margin-bottom:5%;
}
.profile-head .nav-tabs .nav-link{
	font-weight:600;
	border: none;
}
.profile-head .nav-tabs .nav-link.active{
	border: none;
}
.profile-work{
	padding: 14%;
	margin-top: -15%;
}
.profile-work p{
	font-size: 12px;
	color: #818182;
	font-weight: 600;
	margin-top: 10%;
}
.profile-work a{
	text-decoration: none;
	color: #495057;
	font-weight: 600;
	font-size: 14px;
}
.profile-work ul{
	list-style: none;
}
.profile-tab label{
	font-weight: 600;
}
.profile-tab p{
	font-weight: 600;
	color: #0062cc;
}
</style>
<div class="container emp-profile">
	<form method="post">
		<div class="row">
			<div class="col-md-4">
				@foreach ($producer as $item)
				<div class="profile-img">
					<img src="{{$item->avatar}}">
				</div>
				@endforeach
				<div class="profile-work">
					<p>Sites</p>
					@foreach ($producer as $item)
					<a href="#" style="word-break: break-word;">{{$item->sites}}</a>
					@endforeach
				</div>
			</div>
			<div class="col-md-8" style="word-break: break-word;">
				<div class="profile-head">
					@foreach ($producer as $item)
					<h2>{{$item->name}}</h2>
					<h4>Producer</h4>
					@endforeach
					<ul class="nav nav-tabs">
						<li class="nav-item">
							<a class="nav-link">General</a>
						</li>
					</ul>
				</div>
				@foreach ($producer as $item)
				<div class="tab-content profile-tab">
					<div class="row">
						<div class="col-md-6">
							<label>Name</label>
						</div>
						<div class="col-md-6" style="word-break: break-word;">
							<p>{{$item->name}}</p>
						</div>
					</div>
					<div class="row">
						<div class="col-md-6">
							<label>Date of Birth</label>
						</div>
						<div class="col-md-6" style="word-break: break-word;">
							<p>{{$item->dob}}</p>
						</div>
					</div>
					<div class="row">
						<div class="col-md-6">
							<label>Gender</label>
						</div>
						<div class="col-md-6" style="word-break: break-word;">
							<p>{{$item->gender}}</p>
						</div>
					</div>
					<div class="row">
						<div class="col-md-6">
							<label>Status</label>
						</div>
						<div class="col-md-6" style="word-break: break-word;">
							<p>{{$item->status}}</p>
						</div>
					</div>
					<div class="row">
						<div class="col-md-6">
							<label>Genre</label>
						</div>
						<div class="col-md-6" style="word-break: break-word;">
							<p>{{$item->genre}}</p>
						</div>
					</div>
					<div class="row">
						<div class="col-md-6">
							<label>Associations</label>
						</div>
						<div class="col-md-6" style="word-break: break-word;">
							<p>{{$item->associations}}</p>
						</div>
					</div>
					<div class="row">
						@foreach ($works as $item)
						<div class="col-md-12">
							<label>Works</label>
						</div>
						@php
							$count = 1;
							break;
						@endphp
						@endforeach
						<div class="col-md-12 pre-scrollable" style="word-break: break-word; max-height: 200px; background-color: #eeeeee">
							@foreach ($works as $item)
							<a href="{{URL::route('songs', $item->songid)}}"><p>{{$count}}. {{$item->title}}</p></a>
							@php
								$count++;
							@endphp
							@endforeach
						</div>
					</div>
					<div class="row">
						@foreach ($discography as $item)
						<div class="col-md-12">
							<label>Discography</label>
						</div>
						@php
							$count = 1;
							break;
						@endphp
						@endforeach
						<div class="col-md-12 pre-scrollable" style="word-break: break-word; max-height: 200px; background-color: #eeeeee">
							@foreach ($discography as $item)
							<a href="{{URL::route('albums', $item->albumid)}}"><p>{{$count}}. {{$item->title}}</p></a>
							@php
								$count++;
							@endphp
							@endforeach
						</div>
					</div>
					<div class="row">
						<div class="col-md-6">
							<label>About</label>
						</div>
						<div class="col-md-12 description" style="word-break: break-word;">
							{!!$item->about!!}
						</div>
					</div>
				</div>
				@endforeach
			</div>
		</div>
	</form>
</div>
@stop
@section('js')
<script type="text/javascript">
$(".description > a").shorten({
		"chars" : 170,
		"more"  : "More",
		"less"  : " Less",
	});
	$(".description > b").shorten({
		"chars" : 170,
		"more"  : "More",
		"less"  : " Less",
	});
	$(".description > i").shorten({
		"chars" : 170,
		"more"  : "More",
		"less"  : " Less",
	});
	$(".description > p").shorten({
		"chars" : 170,
		"more"  : "More",
		"less"  : " Less",
	});
	$(".description > ul").shorten({
		"chars" : 170,
		"more"  : "More",
		"less"  : " Less",
	});
	$(".description > ol").shorten({
		"chars" : 170,
		"more"  : "More",
		"less"  : " Less",
	});
</script>
@stop