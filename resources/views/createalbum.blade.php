@extends('layouts.master')
@section('content')
<style type="text/css">
	.note-toolbar{
		position: relative !important;
		z-index: 1;
	}
	.btn-fullscreen,.btn-codeview,.note-table,.note-insert{display: none;}
	::placeholder{
		opacity: 0.8;
	}
</style>
<hr>
<div class="container bootstrap snippet">
	<div class="row">
		<div class="col-sm-10"><h1></h1></div>
		<div class="col-sm-2"><img title="profile image" class="img-circle img-responsive" src="https://png.pngtree.com/element_origin_min_pic/17/04/19/f0657f5b68eb9d3c6e0076fbd897322a.jpg" style="opacity: 0;"></a></div>
	</div>
	<div class="row">
		<form class="form" action="{{route('albumuploader')}}" method="post" enctype="multipart/form-data">
			{{csrf_field()}}
			<div class="col-sm-3">
				<!--left col-->
				<div class="text-center">
					<img src="https://png.pngtree.com/element_origin_min_pic/17/04/19/f0657f5b68eb9d3c6e0076fbd897322a.jpg" class="avatar img-thumbnail img-fluid">
					<h6>Upload a album thumbnail...</h6>
					<input type="file" class="text-center center-block file-upload" name="thumbnail">
				</div>
				<hr>
				<br>
				<div class="panel panel-default">
					<div class="panel-heading">
						<a href="{{URL::route('addproducer')}}" class="glyphicon glyphicon-plus" style="text-decoration: none;"></a>
						<a href="{{URL::route('addproducer')}}"> Add a Producer</a>
					</div>
				</div>
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
								<label for="title"><h4>Title</h4></label>
								<input type="text" class="form-control" name="title" id="title" required="">
							</div>
						</div>
						<div class="form-group">
							<div class="col-xs-6">
								<label for="producer"><h4>Producer</h4></label>
								<select class="form-control" name="producer" id="producer" required="">
									<option value="" disabled="" selected="">Can't find your producer? Try adding one.</option>
									@foreach ($producer as $item)
									<option value="{{$item->producerid}}">{{$item->name}}</option>
									@endforeach
								</select>
							</div>
						</div>
						<div class="form-group">
							<div class="col-xs-6">
								<label for="label"><h4>Label</h4></label>
								<input type="text" class="form-control" name="label" id="label" required="">
							</div>
						</div>
						<div class="form-group">
							<div class="col-xs-6">
								<label for="price"><h4>Price</h4></label>
								<input type="number" class="form-control" name="price" id="price" required="">
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