<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<table class="table table-bordered">
	<tr>
		<th>Id</th>
		<th>Name</th>
		<th>Company</th>
		<th>Status</th>
	</tr>
	<tr>
		@foreach($customers as $customer)
		<td><div class="col-md-2">{{$customer->id}}</div></td>
		<td><div class="col-md-4">{{$customer->name}}</div></td>
		<td><div class="col-md-4">{{$customer->company->name}}</div></td>
		<td><div class="col-md-2">{{$customer->active}}</div></td>
		@endforeach
	</tr>
</table>
</body>
</html>