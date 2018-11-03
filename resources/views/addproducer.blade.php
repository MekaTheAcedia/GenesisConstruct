@extends('layouts.master')
@section('content')
<style type="text/css">
	.note-toolbar{
		position: relative !important;
		z-index: 1;
	}
	.btn-fullscreen,.btn-codeview,.note-table,.note-insert{display: none;}
</style>
<hr>
<div class="container bootstrap snippet">
	<div class="row">
		<div class="col-sm-10"><h1></h1></div>
		<div class="col-sm-2"><img title="profile image" class="img-circle img-responsive" src="http://www.gravatar.com/avatar/28fd20ccec6865e2d5f0e1f4446eb7bf?s=100" style="opacity: 0;"></a></div>
	</div>
	<div class="row">
		<form class="form" action="{{route('produceruploader')}}" method="post" enctype="multipart/form-data">
			{{csrf_field()}}
			<div class="col-sm-3">
				<!--left col-->
				<div class="text-center">
					<img src="	http://ssl.gstatic.com/accounts/ui/avatar_2x.png" class="avatar img-circle img-thumbnail img-fluid">
					<h6>Upload a producer's logo...</h6>
					<input type="file" class="text-center center-block file-upload" name="avatar">
				</div>
				<hr>
				<br>
				<div class="panel panel-default" style="opacity: 0">
					<div class="panel-heading">Website <i class="fa fa-link fa-1x"></i></div>
					<div class="panel-body"><a></a></div>
				</div>
			</div>
			<!--/col-3-->
			<div class="col-sm-9">
				@if (session('error'))
					{!!session('error')!!}
				@endif
				<div class="tab-content">
					<div class="tab-pane active" id="home">
						<hr>
						<div class="form-group">
							<div class="col-xs-6">
								<label for="title"><h4>Name</h4></label>
								<input type="text" class="form-control" name="name" id="name" required="">
							</div>
						</div>
						<div class="form-group">
							<div class="col-xs-6">
								<label for="gender"><h4>Gender</h4></label>
								<select class="form-control" name="gender">
									<option value="" selected="" disabled=""></option>
									<option value="Other">Other</option>
									<option value="Male" >Male</option>
									<option value="Female">Female</option>
								</select>
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
								<label for="status"><h4>Status</h4></label>
								<select class="form-control" name="status">
									<option value="" selected="" disabled=""></option>
									<option value="Working" >Working</option>
									<option value="Retired">Retired</option>
								</select>
							</div>
						</div>
						<div class="form-group">
							<div class="col-xs-6">
								<label for="genre"><h4>Genre</h4></label>
								<input type="text" class="form-control" name="genre" id="genre" placeholder="Multiple genres should be seperated with a '/'">
							</div>
						</div>
						<div class="form-group">
							<div class="col-xs-6">
								<label for="songaddress"><h4>Associations</h4></label>
								<input type="text" class="form-control" name="songaddress">
							</div>
						</div>
						<div class="form-group">
							<div class="col-xs-6">
								<label for="sites"><h4>Sites</h4></label>
								<input type="text" class="form-control" name="sites">
							</div>
						</div>
						<div class="form-group">
							<div class="col-xs-12">
								<label for="about"><h4>About</h4></label>
								<textarea name="about" class="summernote" style=""></textarea>
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
					</div>
					<!--/tab-pane-->
				</div>
				<!--/tab-content-->
			</div>
			<!--/col-9-->
		</form>
	</div>
	<!--/row-->
</div>
<hr style="opacity: 0">
<div class="clearfix"></div>
@stop