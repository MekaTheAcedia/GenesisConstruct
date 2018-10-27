@extends('layouts.master')
@section('content')
<hr>
<div class="container bootstrap snippet">
	<div class="row">
		<div class="col-sm-10"><h1>{{Auth::user()->name}}</h1></div>
		<div class="col-sm-2"><img title="profile image" class="img-circle img-responsive" src="http://www.gravatar.com/avatar/28fd20ccec6865e2d5f0e1f4446eb7bf?s=100" style="opacity: 0;"></a></div>
	</div>
	<div class="row">
		<form class="form" action="{{route('updateprofile')}}" method="post" enctype="multipart/form-data">
			{{csrf_field()}}
			<div class="col-sm-3"><!--left col-->
				<div class="text-center">
					<img src="{{asset('img/'.Auth::user()->avatar)}}" class="avatar img-circle img-thumbnail img-fluid">
					<h6>Upload a different photo...</h6>
					<input type="file" class="text-center center-block file-upload" name="avatar">
				</div>
				<hr>
				<br>
				<div class="panel panel-default">
					<div class="panel-heading">Social Media</div>
					<div class="panel-body">
						<i class="fa fa-facebook fa-2x"></i> <i class="fa fa-github fa-2x"></i> <i class="fa fa-twitter fa-2x"></i> <i class="fa fa-pinterest fa-2x"></i> <i class="fa fa-google-plus fa-2x"></i>
					</div>
				</div>
				<div class="panel panel-default" style="opacity: 0;">
					<div class="panel-heading">Website <i class="fa fa-link fa-1x"></i></div>
					<div class="panel-body"><a>bootnipets.com</a></div>
				</div>
			</div><!--/col-3-->
			<div class="col-sm-9">
				<div class="tab-content">
					<div class="tab-pane active" id="home">
						<hr>
						<div class="form-group">
							<div class="col-xs-6">
								<label for="username"><h4>Username</h4></label>
								<input type="text" class="form-control" name="username" id="username">
							</div>
						</div>
						<div class="form-group">
							<div class="col-xs-6">
								<label for="email"><h4>Email</h4></label>
								<input type="email" class="form-control" name="email" id="email">
							</div>
						</div>
						<div class="form-group">
							<div class="col-xs-6">
								<label for="location"><h4>Location</h4></label>
								<input type="location" class="form-control" name="location" id="location">
							</div>
						</div>
						<div class="form-group">
							<div class="col-xs-6">
								<label for="password"><h4>Password</h4></label>
								<input type="password" class="form-control" name="password" id="password">
							</div>
						</div>
						<div class="form-group">
							<div class="col-xs-6">
								<label for="dob"><h4>Date of Birth</h4></label>
								<input type="date" class="form-control" name="dob" id="dob">
							</div>
						</div>
						<div class="form-group">
							<div class="col-xs-6">
								<label for="gender"><h4>Gender</h4></label>
								<select class="form-control" name="gender">
									<option value="" selected="" disabled="">Choose</option>
									<option value="Other">Other</option>
									<option value="Male" >Male</option>
									<option value="Female">Female</option>
								</select>
							</div>
						</div>
						<div class="form-group">
							<div class="col-xs-12">
								<label for="about"><h4>About</h4></label>
								<textarea type="text" class="form-control" name="about" id="about"></textarea>
							</div>
						</div>
						<div class="form-group">
							<div class="col-xs-12">
								<br>
								<button class="btn btn-lg btn-success" type="submit"><i class="glyphicon glyphicon-ok-sign"></i> Save</button>
								<button class="btn btn-lg" type="reset"><i class="glyphicon glyphicon-repeat"></i> Reset</button>
							</div>
						</div>
						<hr>
					</div><!--/tab-pane-->
				</div><!--/tab-content-->
			</div><!--/col-9-->
		</form>
	</div><!--/row-->
</div>
<hr style="opacity: 0">
<div class="clearfix"></div>
@stop