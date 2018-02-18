@extends('layouts.master')

@section('title')
<title> Gallery </title>
@endsection

@section('content')
<form method="post" action="/admin/gallery">
<div class="container-gallery">
    <div class="header-gallery">
        <h3> Gallery </h3>
    </div>
    <div class=" col-md-12">
        <input type="text" name="gallery_name" class="form-control" placeholder="Nama Gallery"></br>
        <textarea type="text" name="gallery_description" class="form-control" placeholder="Deskripsi Gallery"></textarea> </br>
        <input type="submit" name="simpan" value="Save" class="form-control" style="background-color : #4169a2;color : #fff;">
       {{ csrf_field() }}
    </div>
</div>
</form>
<div class="container-gallery">
    <div class="header-gallery">
        <h3> Gallery photo </h3>
    </div>
    <div class="col-xs-12">
        <div class="card-body table-responsive">
          <table class="datatable table table-striped " id="myTable" cellspacing="0" width="100%">
            <thead>
        <tr>
            <th>ID</th>
            <th>Gallery Name</th>
            <th>Description</th>
            <th>Photo Count</th>
            <th>Edit ||  Delete</th>
        </tr>
    </thead>
    <tbody>
    @foreach ($views as $view)
    <tr>
        <td>{{$view->id_gallery}} </td>
        <td>{{$view->name}}</td>
        <td>{{$view->description}}</td>
        <td>{{$view->singles->count()}}</td>
        <td><a href="/admin/gallery/{{$view->id_gallery}}">Edit</a> <a href="/admin/gallery/delete/{{$view->id_gallery}}">Delete</a></td>
    </tr>
    @endforeach
          </tbody>
        </table>
        </div>
      </div>
  </div>
</div>
</div>
@endsection