@extends('layouts.app')
 
@section('title', 'Page Title')
 
@section('sidebar')
    @parent
 
    <p>This is appended to the master sidebar.</p>
@endsection
 
@section('content')
<form action="">
    @csrf
  <div class="form-group">
    <label for="name">Club Name:</label>
    <input type="text" class="@error('name') is-invalid @enderror form-control" id="name">
    @error('name')
        <div class="alert alert-danger">{{ $message }}</div>
    @enderror
  </div>
   
   
  <button type="submit" class="btn btn-default">Submit</button>
</form>
@endsection