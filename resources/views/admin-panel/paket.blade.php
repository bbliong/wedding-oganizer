@extends('layouts.master')

@section('title')
<title> Paket Admin </title>
@endsection

@section('content')
<form method="post" action="/admin/paket" enctype="multipart/form-data">
{{ csrf_field() }}
<div class="container-gallery">
	<div class="header-gallery">
		<h3> Paket </h3>
	</div>
	<div class="body-right-gallery col-md-6">
		<input type="text" name="package_name" class="form-control" placeholder="Nama Paket"></br>
        <input type="text" name="package_description" class="form-control" placeholder="Deskripsi"></br>
		<textarea type="text" name="package_price" class="form-control" placeholder="Range Harga"></textarea> </br>
		<input type="submit" name="simpan" value="Save" class="form-control" style="background-color : #4169a2;color : #fff;">
	</div>
	<div class="body-left-gallery col-md-6">
		<div class="tooltips">
			<span class="tooltiptext">High resolution Please</span>
			<p> Feature Image</p></br>
		  	<input name="package_img" onchange="preview_image_logo()" id="preview_image" type="file"  >
			<div id="image_preview" class="img_preview_paket"><img></div>
		</div>
	</div>
	<div class="col-lg-12">
        <textarea id="mytextarea" name="package_detail"></textarea>
  	</div>
<div class="col-md-12" style="width : 100%;">
        <div class="card-body table-responsive" style="width: 100%;">
          <table class="datatable table table-striped " id="myTable" cellspacing="0" width="100%">
            <thead>
        <tr>
            <th>No</th>
            <th>Img</th>
            <th>Name</th>
            <th>Range</th>
            <th>Change </th>
        </tr>
    </thead>
    <tbody>
    	@foreach ($views as $view)
    	<tr>
            <td><a href="">{{$view->id_package}}</td>
            <td><img src="/uploads/{{$view->featured_img}}"</td>
            <td>{{$view->name}}</td>
            <td>{{$view->price}}</td>
            <td>
            <a href="/admin/paket/{{$view->id_package}}">Edit</a>
            <a href="/admin/paket/delete/{{$view->id_package}}">Delete</a>  
        </tr>
    	@endforeach		
          </tbody>
        </table>
        </div>
      </div>
</div>
@endsection