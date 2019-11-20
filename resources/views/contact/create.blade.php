@extends('layouts.app')
@section('title','Contact Us')
@section('content')
<h1>Contact Us</h1>

@if(! session()->has('message'))
<form action="/contact" method="POST">
  <div class="form-group">
  <label for="name">Name:</label>
  <input type="text" class="form-control" placeholder="Enter Name" name="name" value="{{old('name')}}">
  <div>{{$errors->first('name')}}</div>
</div>
<div class="form-group">
  <label for="email">Email:</label>
  <input type="text" class="form-control" placeholder="Enter Email" name="email" value="{{old('email')}}">
  <div>{{$errors->first('email')}}</div>
</div>
<div class="form-group">
  <label for="message">Message:</label>
    <textarea class="form-control" name="message" id="message" cols="20" rows="5">
      {{old('message')}}
  </textarea>
  <div>{{$errors->first('message')}}</div>
</div>
<button class="btn btn-primary" type="submit">Send Message</button>
@csrf
</form>
@endif

@endsection