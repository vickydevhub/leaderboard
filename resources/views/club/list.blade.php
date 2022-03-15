
@extends('layouts.app')
 
 @section('title', 'Player Lists')
  
 @section('sidebar')
     @parent
  
     <p>This is appended to the master sidebar.</p>
 @endsection
  
 @section('content')
 <div class="container">
  <h2>Clubs</h2>
  <p>Contextual classes can be used to color table rows or table cells. The classes that can be used are: .active, .success, .info, .warning, and .danger.</p>
  <table class="table">
    <thead>
      <tr>
        <th>Name</th>
        
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
    @forelse ($clubs as $club)
    <tr>
        <td>{{$club->name}}</td> 
       
        <td><a href="{{route('club.read',['id' => $club->id])}}">View</a></td>
      </tr>
    @empty
    <tr colspan="1">
        <td>No Players</td> 
      </tr>
    @endforelse
            
      
       
    </tbody>
  </table>
</div>
  @endsection