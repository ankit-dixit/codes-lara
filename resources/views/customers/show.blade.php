@extends('layouts.app')
@section('title','Details For ' . $customer->name)
@section('content')
<div class="row">
	<div class="col-md-12">
		<h1>Details For {{$customer->name}}</h1>
		<p><a href="/customers/{{$customer->id}}/edit">EDIT</a></p>

		<form action="/customers/{{$customer->id}}" method="POST">
			@method('DELETE')
			@csrf
			<button type="submit" class="btn btn-danger">DELETE</button>
		</form>
	</div>
</div>

<div class="row">
	<div class="col-md-12">
		<p><strong>Name: </strong>{{$customer->name}}</p>
		<p><strong>Email: </strong>{{$customer->email}}</p>
		<p><strong>Company: </strong>{{$customer->company->name}}</p>
		<p><strong>Status: </strong>{{$customer->active}}</p>
	</div>
	
</div>


@if($customer->image)

<div class="row">
	<div class="col-md-12">
		<img src="{{asset('storage/' . $customer->image)}}">
	</div>
</div>

@endif

@endsection