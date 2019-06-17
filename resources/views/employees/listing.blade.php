@extends('layouts.master')

@section('title', 'Home Page')



@section('content')
    <h1> Welcome !!! </h1>
     <a href="/" class="btn btn-primary">Home</a>
    <a href="/about" class="btn btn-primary">About</a>
     <a href="/contact" class="btn btn-primary">Contact</a>
      <a href="/employees" class="btn btn-default">Employees</a>


      <table class="table table-bordered">
      	<thead>
      		<tr>
      			<th>Id</th>
      			<th>Name</th>

      			
      		</tr>
      	</thead>
      	<tbody>
      		@foreach($items as $item)
      		<tr>
      			<td>{{ $item->id}}</td>
      			<td>{{ $item->name}}</td>
      		</tr>
      		@endforeach


      	</tbody>

      </table>
@endsection