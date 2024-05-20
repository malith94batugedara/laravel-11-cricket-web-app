@extends('layouts.frontend')

@section('title','Sri Lanka Cricket | All Schedules')

@section('content')

<div class="container mt-4">

    <h1 class="text-center" style="color: red ;font-size: 50px">All Schedules</h1><br/>

    <table class="table">

        <tr style="color: yellow">
                    <th>Schedule Name</th>
                    <th>Time Period</th>
                    <th>Country</th>
                    <th>Num Of Staff</th>
                    <th>Departure Date</th>
                    <th>Arrival Date</th>
        </tr>
      @foreach ($schedules as $schedule)
        
        <tr style="color: blue">
            <td>{{$schedule->sch_name}}</td>
            <td>{{$schedule->time_period}}</td>
            <td>{{$schedule->country}}</td>
            <td>{{$schedule->num_of_staff}}</td>
            <td>{{$schedule->depart_date}}</td>
            <td>{{$schedule->arrive_date}}</td>
        </tr>

        @endforeach

    </table>



</div>
                
@endsection
