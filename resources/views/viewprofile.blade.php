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
border-bottom:2px solid #0062cc;
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
				@foreach ($user as $item)
				<div class="profile-img">
					<img src="{{asset('img/'.$item->avatar)}}">
				</div>
				@endforeach
			</div>
			<div class="col-md-6">
				<div class="profile-head">
					<ul class="nav nav-tabs" id="myTab" role="tablist">
						<li class="nav-item">
							<a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" >General</a>
						</li>
					</ul>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-4">
				<div class="profile-work">
					<p>Social</p>
					<a href="">Facebook Profile</a><br/>
					<a href="">Twitter Profile</a><br/>
					<a href="">Youtube Profile</a>
				</div>
			</div>
			@foreach ($user as $item)
			<div class="col-md-8">
				<div class="tab-content profile-tab" id="myTabContent">
					<div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
						<div class="row">
							<div class="col-md-6">
								<label>Name</label>
							</div>
							<div class="col-md-6">
								<p>{{$item->name}}</p>
							</div>
						</div>
						<div class="row">
							<div class="col-md-6">
								<label>Email</label>
							</div>
							<div class="col-md-6">
								<p>{{$item->email}}</p>
							</div>
						</div>
						<div class="row">
							<div class="col-md-6">
								<label>Date of Birth</label>
							</div>
							<div class="col-md-6">
								<p>{{$item->dob}}</p>
							</div>
						</div>
						<div class="row">
							<div class="col-md-6">
								<label>Gender</label>
							</div>
							<div class="col-md-6">
								<p>{{$item->gender}}</p>
							</div>
						</div>
						<div class="row">
							<div class="col-md-6">
								<label>Location</label>
							</div>
							<div class="col-md-6">
								<p>{{$item->location}}</p>
							</div>
						</div>
						<div class="row">
							<div class="col-md-6">
								<label>About</label>
							</div>
							<div class="col-md-12">
								<p>{{$item->about}}</p>
							</div>
						</div>
					</div>
				</div>
			</div>
			@endforeach
		</div>
	</form>
</div>
@stop