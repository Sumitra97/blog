@extends('layouts.master')

@section('title', 'Contact Us')



@section('content')
    <h1> Contact Us </h1>
     <a href="/" class="btn btn-primary">Home</a>
    <a href="/about" class="btn btn-primary">About</a>
     <a href="/contact" class="btn btn-default">Contact</a>
      <a href="/employees" class="btn btn-primary">Employees</a>

      <form method="post" action="/submit-contact" name="
      frmcontact" id="frmcontact">
      @csrf

      <div class="row">
      	<div class="col-md-12">
      		<div class="form-group">
      			<label>Name:</label>
      			<input required="" type="text" name="text" id="name" class="form-control">
      		</div>

      		<div class="form-group">
      			<label>Email:</label>
      			<input required=""  type="text" name="email" id="email" class="form-control">
      		</div>

      		<div class="form-group">
      			<label>Message:</label>
      			<textarea required="" name="message" id="message" rows="5" cols="30" class="form-control"></textarea>
      		</div>


      		<a href="/" class="btn btn-default"><span class="fa fa-close"></span>Cancel</a>
      		<button type="submit" class="btn btn-primary"><span class="fa fa-send"></span>Send </button>



      	</div>
      </div>
  </form>
@endsection