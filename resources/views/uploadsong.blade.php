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
		<form class="form" action="{{route('songuploader')}}" method="post" enctype="multipart/form-data">
			{{csrf_field()}}
			<div class="col-sm-3">
				<!--left col-->
				<div class="text-center">
					<img src="https://png.pngtree.com/element_origin_min_pic/16/08/08/0957a7e677c6791.jpg" class="avatar img-thumbnail img-fluid">
					<h6>Upload a song photo...</h6>
					<input type="file" class="text-center center-block file-upload" name="avatar" required="">
				</div>
				<hr>
				<br>
				<div class="panel panel-default">
					<div class="panel-heading"><a href="#" class="glyphicon glyphicon-plus" style="text-decoration: none;"></a><a href="#">  Add a Producer</a></div>
					<div class="panel-heading"><a href="#" class="glyphicon glyphicon-plus" style="text-decoration: none;"></a><a href="#">  Add a Singer</a></div>
				</div>
				<div class="panel panel-default" style="opacity: 0;">
					<div class="panel-heading">Website <i class="fa fa-link fa-1x"></i></div>
					<div class="panel-body"><a>bootnipets.com</a></div>
				</div>
			</div>
			<!--/col-3-->
			<div class="col-sm-9">
				<div class="tab-content">
					<div class="tab-pane active" id="home">
						<hr>
						<div class="form-group">
							<div class="col-xs-6">
								<label for="title"><h4>Title</h4></label>
								<input type="text" class="form-control" name="title" id="title" required="">
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
								<label for="producer"><h4>Producer</h4></label>
								<select class="form-control" name="producer" id="producer" required="">
									<option value="" disabled="" selected="">Can't find your producer? Try adding one.</option>
									<option value="">N/A</option>
									@foreach ($producer as $item)
									<option value="{{$item->producerid}}">{{$item->name}}</option>
									@endforeach
								</select>
							</div>
						</div>
						<div class="form-group">
							<div class="col-xs-6">
								<label for="vocal"><h4>Vocal</h4></label>
								<select class="form-control" name="vocal" id="vocal">
									<option value="" disabled="" selected="">Can't find your singer? Try adding one.</option>
									<option value="">N/A</option>
									@foreach ($vocal as $item)
									<option value="{{$item->vocalid}}">{{$item->name}}</option>
									@endforeach
								</select>
							</div>
						</div>
						<div class="form-group">
							<div class="col-xs-6">
								<label for="country"><h4>Country</h4></label>
								<input type="text" class="form-control" name="country" id="country">
							</div>
						</div>
						<div class="form-group">
							<div class="col-xs-12">
								<label for="description"><h4>Description</h4></label>
								<textarea name="description" class="summernote" style=""></textarea>
							</div>
						</div>
						<div class="form-group">
							<div class="col-xs-12">
								<label for="lyric"><h4>Lyrics</h4></label>
								<textarea name="lyric" class="summernote"></textarea>
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