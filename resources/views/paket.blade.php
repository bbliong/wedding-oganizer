@extends ('layouts.single')

@section ('title')
{{$paket->name}}
@endsection

@section ('header_text')
<h1>{{$view->title_page}}</h1>
<p>{{$view->jumbotron}}</p>
@endsection


@section('header_image')
{{ $paket->featured_img }}
@endsection

@section('header_image_text')
<div class="header">
	<h1>{{$paket->name}}</h2>
	<p>{{$paket->description}}Harga : {{$paket->price}}</p>
	@php
		$date = date_format($paket->created_at, "F d,Y");
	@endphp
	&nbsp<p class="fa-inline"><i class="fa fa-user" aria-hidden="true"></i>&nbspAdmin</p>&nbsp&nbsp&nbsp <p class="fa-inline"><i class="fa fa-clock-o" aria-hidden="true"></i>&nbsp{{$date}}</p>
</div>

@endsection


@section('leftSide')
<div class="content">
{!!$paket->detail!!}

</div>
@endsection

@section('rightSide')

<div class="col-md-10  profile">
	<div class="col-md-12 title-user">
		<p>-About Us-</p>
	</div>
	<div class="col-md-12 desc">
		<img src="/img/user.png" class="user_photo">
		<p> Nama saya aria samudera elhamidy, ya ini sih salah satu hobi saya untuk ngebuat website </p>
		<p class="fa-inline">
			<a href=""><i class="fa .fa-inline fa-facebook-square" aria-hidden="true"></i><a>&nbsp&nbsp
			<a href=""><i class="fa .fa-inline fa-twitter-square" aria-hidden="true"></i><a>
			&nbsp&nbsp
			<a href=""><i class="fa .fa-inline fa-instagram" aria-hidden="true"></i><a>
			&nbsp&nbsp
			<a href=""><i class="fa .fa-inline fa-linkedin" aria-hidden="true"></a></i>
		</p>	
	</div>
</div>

<div class="col-md-10 newslater">
	<fieldset class="border-fieldset">
		<h3> ~ Subscribe Our Team ~ </h3>
		<input type="text" class="form-control" name="email">
		<input type="submit"  class="form-control" name="submit">
	</fieldset>
</div>
@endsection


