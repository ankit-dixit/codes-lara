@extends('layouts.app')
@section('title','Customers List')
@section('content')
<div class="row">
	<div class="col-md-12">
		<h1>Customers List</h1>
		<p><a href="customers/create">Add New Customer</a></p>
	</div>
</div>

<div class="row">
	@foreach($customers as $customer)
	<div class="col-md-2">{{$customer->id}}</div>
	<div class="col-md-4">
		<a href="/customers/{{$customer->id}}">{{$customer->name}}</a>
	</div>
	<div class="col-md-4">{{$customer->company->name}}</div>
	<div class="col-md-1">{{$customer->active}}</div>
	<div class="col-md-1">
		<a href="{{route('generate-pdf', ['id'=>$customer->id])}}">Download</a>
	</div>
	@endforeach
</div>

@endsection