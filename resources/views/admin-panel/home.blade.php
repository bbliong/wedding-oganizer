@extends('layouts.master')

@section('title')
<title> Home </title>
@endsection

@section('content')
<form action="/admin/home/store" method="post" enctype="multipart/form-data">
<div class="container-gallery">
	<div class="header-gallery">
		<h3> Home Page Setting </h3></br>
	</div>
</div>
<div class="container-gallery">
	<div class="col-xs-12">
		<div class="body-right-gallery col-md-6">
			<input type="hidden" name="_method" value="PUT">
			<input type="text" name="title_page" class="form-control" placeholder="Title Page" value="{{ $view->title_page }}"></br>
			<input type="text" name="jumbotron_page" class="form-control" placeholder="Jumbotron Page" value="{{ $view->jumbotron }}"></br>
			<textarea type="text" name="description_page" class="form-control" placeholder="Deskripsi Page"> {{ $view->description }} </textarea> </br>

			{{ csrf_field() }}
			<input type="submit" name="simpan" value="Save" class="form-control" style="background-color : #4169a2;color : #fff;">
		</div>
		<div class="body-left-gallery col-md-6">
			<div class="form-group">
				<span class="fa-stack fa-lg">
				  <i class="fa fa-circle-thin fa-stack-2x"></i>
				  <i class="fa fa-facebook fa-stack-1x"></i>
				</span>
				<input type="text" name="facebook" class="form-control" placeholder="Facebook Link" style="width : 100%;padding-left : 50px;" value="{{ $view->fb_link }}">
			</div>
			</br>
			<div class="form-group">
				<span class="fa-stack fa-lg">
				  <i class="fa fa-circle-thin fa-stack-2x"></i>
				  <i class="fa fa-twitter fa-stack-1x"></i>
				</span>
				<input type="text" name="twitter" class="form-control" placeholder="Twitter Link" style="width : 100%;padding-left : 50px;" value="{{ $view->twt_link }}">
				</div>
			</br>
			<div class="form-group">
				<span class="fa-stack fa-lg">
				  <i class="fa fa-circle-thin fa-stack-2x"></i>
				  <i class="fa fa-instagram fa-stack-1x"></i>
				</span>
				<input type="text" name="instagram" class="form-control" placeholder="Instagram Link" style="width : 100%;padding-left : 50px;" value="{{ $view->ins_link }}">
			</div>
			</br>
			<p> Upload Logo </p>

			
		  	<input name="brand_logo" onchange="preview_image_logo()" id="preview_image" type="file"  >
		  	 <div id="image_preview" class="img_preview"><img src="/uploads/{{$view->logo_img}}"></div>
	</div>
	</div>
</div>
</form>

@endsection