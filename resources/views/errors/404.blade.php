@extends('layouts.master')
@section('content')
<div id="page-wrapper">
	<div class="inner-content">

		<!-- /error_page -->
		<div class="error-top">
			<img src="{{asset('img/pic_error.png')}}" alt="" />
			<h3>Page Not Found...<h3>
			<div class="clearfix"></div>

			<div class="error">
				<a class="not" href="{{URL::route('index')}}">Back To Home</a>
			</div>
			<!-- //error_page -->
		</div>

		<div class="clearfix"></div>
		<!--body wrapper end-->
	</div>
</div>
<!-- /agileinfo -->
<!--body wrapper end-->
@stop