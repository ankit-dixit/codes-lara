			<div class="form-group">
		      <label for="name">Name:</label>
		      <input type="text" class="form-control" placeholder="Enter Name" name="name" value="{{old('name') ?? $customer->name}}">
		      <div>{{$errors->first('name')}}</div>
		    </div>
		    <div class="form-group">
		      <label for="email">Email:</label>
		      <input type="text" class="form-control" placeholder="Enter Email" name="email" value="{{old('email') ?? $customer->email}}">
		      <div>{{$errors->first('email')}}</div>
		    </div>
		    <div class="form-group">
		      <label for="active">Status:</label>
		      <select class="form-control" name="active" id="active">
		      	<option value="" disabled>Select Status</option>
		      	@foreach($customer->activeOptions() as $activeOptionKey=>$activeOptionValue)
		      	<option value="{{$activeOptionKey}}" {{$customer->active == $activeOptionValue ? 'selected' : ''}}>{{$activeOptionValue}}</option>
		      	@endforeach
		      </select>
		    </div>
		    <div class="form-group">
		      <label for="company_id">Company:</label>
		      <select class="form-control" name="company_id" id="company_id">
		      	@foreach($companies as $company)
		      	<option value="{{$company->id}}" {{$company->id == $customer->company_id ? 'selected' : ''}}>{{$company->name}}</option>
		      	@endforeach
		      </select>
		    </div>
		    <div class="form-group d-flex flex-column">
		    	<label for="image">Profile Image:</label>
		    	<input type="file" name="image">
		    	<div>{{$errors->first('image')}}</div>
		    </div>
		 	@csrf