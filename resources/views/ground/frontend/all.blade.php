@extends('layouts.frontend')

@section('title','Sri Lanka Cricket | All Grounds')

@section('content')

<div class="container mt-4">

    <h1 class="text-center" style="color: red ;font-size: 50px">All Grounds</h1><br/>

    <table class="table">

        <tr style="color: yellow">
            <th>Ground Name</th>
            <th>Loaction</th>
            <th>Capacity</th>
            <th>Num Of Gates</th>
            <th>Num Of Match played</th>
        </tr>
      @foreach ($grounds as $ground)
        
        <tr style="color: blue">
            <td>{{$ground->ground_name}}</td>
            <td>{{$ground->ground_location}}</td>
            <td>{{$ground->capacity}}</td>
            <td>{{$ground->number_of_gates}}</td>
            <td>{{$ground->number_of_matches_played}}</td>
        </tr>

        @endforeach

    </table>



</div>
                
@endsection
