
@extends('layouts.app')
 
 @section('title', 'Player Lists')
  
 @section('sidebar')
     @parent
  
     <p>This is appended to the master sidebar.</p>
 @endsection
  
 @section('content')
 <div class="container">
  <h2>Players</h2>
  <p>Contextual classes can be used to color table rows or table cells. .</p>
  <table class="table">
    <thead>
      <tr>
        <th>Name</th>
        <th>Email</th> 
        <th>Contact Number</th> 
        <th>Club</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
    @forelse ($players as $player)
    <tr>
        <td>{{$player->name}}</td> 
        <td>{{$player->email}}</td>
        <td>{{$player->contact_number}}</td>
        <td>{{$player->club->name}}</td>
        <td><a href="{{route('player.read',['id' => $player->id])}}">View</a></td>
      </tr>
    @empty
    <tr colspan="5">
        <td>No Players</td> 
      </tr>
    @endforelse
            
      
       
    </tbody>
  </table>
</div>
  @endsection