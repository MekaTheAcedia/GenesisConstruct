@extends('layouts.master')
@section('content')
<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
<style type="text/css">

body
{
    font-family: 'Open Sans', sans-serif;
}

.fb-profile img.fb-image-lg{
    z-index: 0;
    width: 90%;  
    margin-bottom: 10px;
}

.fb-image-profile
{
    margin: -90px 10px 0px 50px;
    z-index: 9;
    width: 20%; 
}

@media (max-width:768px)
{
    
.fb-profile-text>h1{
    font-weight: 700;
    font-size:16px;
}

.fb-image-profile
{
    margin: -45px 10px 0px 25px;
    z-index: 9;
    width: 20%; 
}
}
</style>
<div class="container">
	<div class="col-md-12">
		
			<div class="fb-profile">
		        <img align="left" class="fb-image-lg" src="{{ asset('images/album.png.jpg') }}" alt="Profile image example"/>
		        <img align="left" class="fb-image-profile thumbnail" src="{{ asset('images/a12.jpg') }}" alt="Profile image example"/>
		        <div class="fb-profile-text">
		            <h1>Eli Macy</h1>
		            <p>Girls just wanna go fun.</p>
		        </div>
		    </div>
		
	</div>
</div> <!-- /container -->  
@stop