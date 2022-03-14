@extends('layouts.app')
 
@section('title', 'Page Title')
 
@section('sidebar')
    @parent
 
    <p>This is appended to the master sidebar.</p>
@endsection
 
@section('content')
<form action="">
  <div class="form-group">
    <label for="name">Club Name:</label>
    <input type="text" class="form-control" id="name">
  </div>
   
   
  <button type="submit" class="btn btn-default">Submit</button>
</form>
@endsection