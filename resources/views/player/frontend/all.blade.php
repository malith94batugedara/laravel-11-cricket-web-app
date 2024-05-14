@extends('layouts.frontend')

@section('title','Sri Lanka Cricket | All Players')

@section('content')

<div class="container mt-4">

    <h1 class="text-center" style="color: red ;font-size: 50px">All Players</h1><br/>

    <table class="table">

        <tr style="color: yellow">
            <th>Player Name</th>
            <th>Cap Number</th>
            <th>Player Age</th>
            <th>Debut Date</th>
        </tr>
      @foreach ($players as $player)
        
        <tr style="color: blue">
            <td>{{$player->player_name}}</td>
            <td>{{$player->cap_number}}</td>
            <td>{{$player->player_age}}</td>
            <td>{{$player->debut_date}}</td>
        </tr>

        @endforeach

    </table>



</div>
                
@endsection