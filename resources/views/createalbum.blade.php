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
<link rel="stylesheet" type="text/css" href="{{asset('plugins/crop/croppie.css')}}">
<script type="text/javascript" src="{{asset('plugins/crop/croppie.min.js')}}"></script>
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
					<img src="https://png.pngtree.com/element_origin_min_pic/16/08/08/0957a7e677c6791.jpg" class="avatar img-thumbnail img-fluid">
					<h6>Upload a album thumbnail...</h6>
					<input type="file"  id="tb_change">
					<input type="text" style="display: none;" name="thumbnail">
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
								<label for="price"><h4>Price ($)</h4></label>
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
<div class="modal" id="crop">
	<div class="modal-content card" style="width: 86%;max-width: 500px;margin: 1.75rem auto;">
		<div class="modal-header">
			<h5 class="modal-title" id="exampleModalLabel">Cropping Profile Picture</h5>
			<button type="button" class="close close_crop" data-dismiss="modal" aria-label="Close">
				<span aria-hidden="true">&times;</span>
			</button>
		</div>
		<div class="modal-body">
			<div class="row">
				<div class="col">
					<div id="preview"></div>
				</div>
			</div>
		</div>
		<div class="modal-footer">
			<button type="button" class="btn btn-secondary" data-dismiss="modal" id="close_crop">Close</button>
			<button type="button" class="btn btn-primary mr-4" id="save_crop">Save</button>
		</div>
	</div>
</div>
@stop
@section('js')
<script type="text/javascript">
	$(document).ready(function(e){
		var basic, imageName;
		var pre = document.getElementById('preview');
		basic =  new Croppie(pre, {
			enableExif: true,
			viewport: {
				width: 250,
				height: 250,
				type: 'square'
			},
			boundary: {
				width: 300,
				height: 300
			}
		});

		$("#tb_change").change(function(e){
			e.preventDefault();
			if ($(this).val() != "") {
				if (e.target.files[0].type != "image/jpeg" && e.target.files[0].type != "image/jpg" && e.target.files[0].type != "image/png" && e.target.files[0].type != "image/ico") {
					alert('Invalid type of file');
					return;
				}
				imageName = e.target.files[0].name;
				imageName = imageName.substring(0, imageName.indexOf(".")) + new Date().getTime() + ".png";
				pathAvatar = URL.createObjectURL(e.target.files[0]);
				basic.bind({
					url: pathAvatar,
				});
				$("#crop").fadeIn();
			}
		})
		$("#save_crop").click(function(){
			basic.result({type: 'blob'}).then(function(blob) {
				var file = new File([blob], imageName, {type: blob.type, lastModified: Date.now()});
				console.log(file);
				var form_data = new FormData();
				form_data.append('file', file);
				form_data.append('upload_preset', 'quoc_trong');
				$.ajax({
					url: "https://api.cloudinary.com/v1_1/silentlove995/image/upload",
					type: "POST",
					data: form_data,
					processData: false,
					contentType: false,
					success: function(data){
						var url = data.secure_url;

						url = url.substring(0, url.indexOf('upload/') + 7) + "c_scale,o_100,q_auto:eco,w_658,z_0.4/"
						+ url.substring(url.indexOf('upload/') + 7, url.length) ;
						$(".img-thumbnail").attr('src', url);
						$("#tb_change").val('');
						$("input[name='thumbnail']").val(url);
						$("#crop").fadeOut();

					}
				})
			});
		})
		$(".close_crop, #close_crop").click(function(){
			$("#crop").fadeOut();
		})
	})
</script>
@stop