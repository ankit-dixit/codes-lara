@extends('layouts.app')
@section('title','Edit Details For ' . $customer->name)
@section('content')
<div class="row">
	<div class="col-md-12">
		<h1>Edit Details For {{$customer->name}}</h1>
	</div>
</div>
<div class="row">
	<div class="col-md-12">
		<form action="/customers/{{$customer->id}}" method="POST" enctype="multipart/form-data">
			@method('PATCH')
		    @include('customers.form')
		    <button type="submit" class="btn btn-primary">Update</button>
  		</form>
	</div>
</div>

@endsection