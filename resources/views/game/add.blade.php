
@extends('layouts.app')
 
 @section('title', 'Page Title')
  
 @section('sidebar')
     @parent
  
     <p>This is appended to the master sidebar.</p>
 @endsection
  
 @section('content')
<div class="container-fluid">
		<div class="container">
			<div class="formBox">
				<form  action="{{route('game.store')}}" method="POST">
                @csrf
						<div class="row">
							<div class="col-sm-12">
								<h1>Add Game</h1>
							</div>
						</div>

						<div class="row">
							<div class="col-sm-6">
								<div class="inputBox ">
									<div class="inputText">Name</div>
									<input type="text" name="name" class="@error('name') is-invalid @enderror input">
								</div>
                                @error('name')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
							</div>

						 
						</div>

					 

						<div class="row">
							<div class="col-sm-12">
								<div class="inputBox">
									<div class="">Club</div>
									<select class="@error('club_id') is-invalid @enderror input" name="club_id">
                                        @forelse ($clubs as $club)
                                            <option  value="{{ $club->id }}">{{ $club->name }}</option>
                                        @empty
                                            <option value="">No Club</option>
                                        @endforelse
                                    </select>
                                    @error('club_id')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
								</div>
							</div>
						</div>

						<div class="row">
							<div class="col-sm-12">
								<div class="inputBox">
									<div class="">First Player</div>
									<select class="@error('first_player') is-invalid @enderror input" name="first_player">
                                        @forelse ($players as $player)
                                            <option  value="{{ $player->id }}">{{ $player->name }}</option>
                                        @empty
                                            <option value="">No Player</option>
                                        @endforelse
                                    </select>
                                    @error('first_player')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
								</div>
							</div>
						</div>

						<div class="row">
							<div class="col-sm-12">
								<div class="inputBox">
									<div class="">Second Player</div>
									<select class="@error('second_player') is-invalid @enderror input" name="second_player">
                                        @forelse ($players as $player)
                                            <option  value="{{ $player->id }}">{{ $player->name }}</option>
                                        @empty
                                            <option value="">No Player</option>
                                        @endforelse
                                    </select>
                                    @error('second_player')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
								</div>
							</div>
						</div>

						<div class="row">
							<div class="col-sm-12">
								<input type="submit" name="store" class="button" value="Create">
							</div>
						</div>
				</form>
			</div>
		</div>
	</div>
    <style>
        .formBox{
	margin-top: 90px;
	padding: 50px;
}
.formBox  h1{
	margin: 0;
	padding: 0;
	text-align: center;
	margin-bottom: 50px;
	text-transform: uppercase;
	font-size: 48px;
}
.inputBox{
	position: relative;
	box-sizing: border-box;
	margin-bottom: 50px;
}
.inputBox .inputText{
	position: absolute;
    font-size: 24px;
    line-height: 50px;
    transition: .5s;
    opacity: .5;
}
.inputBox .input{
	position: relative;
	width: 100%;
	height: 50px;
	background: transparent;
	border: none;
    outline: none;
    font-size: 24px;
    border-bottom: 1px solid rgba(0,0,0,.5);

}
.focus .inputText{
	transform: translateY(-30px);
	font-size: 18px;
	opacity: 1;
	color: #00bcd4;

}
textarea{
	height: 100px !important;
}
.button{
	width: 100%;
    height: 50px;
    border: none;
    outline: none;
    background: #03A9F4;
    color: #fff;
}</style>
    @endsection