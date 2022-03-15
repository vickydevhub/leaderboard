
@extends('layouts.app')
 
 @section('title', 'Player Lists')
  
 @section('sidebar')
     @parent
  
     <p>This is appended to the master sidebar.</p>
 @endsection
  
 @section('content')
 <div class="container">
  <h2>Games</h2>
  <p>Contextual classes can be used to color table rows or table cells. The classes that can be used are: .active, .success, .info, .warning, and .danger.</p>
  <table class="table">
    <thead>
      <tr>
        <th>Name</th>
        <th>First Player</th> 
        <th>Second Player</th> 
        <th>Club</th>
        <th>Status</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
    @forelse ($games as $game)
    <tr>
        <td>{{$game->name}}</td> 
        <td>{{$game->firstPlayer->name}}</td>
        <td>{{$game->secondPlayer->name}}</td>
        <td>{{$game->club->name}}</td>
        <td>{{ ucfirst($game->status)}}</td> 
        <td><a href="{{route('game.read',['id' => $game->id])}}">View</a></td>
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