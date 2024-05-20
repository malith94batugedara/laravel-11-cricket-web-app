<x-app-layout>
    <link href="{{ asset('assets/css/bootstrap.min.css')}}" rel="stylesheet" />
    <div class="hidden space-x-8 sm:-my-px sm:ms-10 sm:flex py-10" >
        <h1 style="color: red">Edit Schedule</h1><br/><br/>
        <form action="{{ route('schedule.update',$schedule->id) }}" method="post">
            @csrf
            <label style="color: yellow">Schedule Name</label>
            <input type="text" name="schedule_name" value="{{ $schedule->sch_name }}" class="form-control" required/>
            <label style="color: yellow">Time Period</label>
            <input type="text" name="time" value="{{ $schedule->time_period }}" class="form-control" required/>
            <label style="color: yellow">Country</label>
            <select name="country" class="form-control">
                 <option>---choose country---</option>
                 @foreach ($countries as $country)
                 <option value="{{$country->name}}" {{$country->name == $schedule->country ? "selected" : "" ;}}>{{$country->name}}</option>
                 @endforeach
            </select>
            <label style="color: yellow">Number of staff</label>
            <input type="text" name="num_of_staff" value="{{ $schedule->num_of_staff }}" class="form-control" required/>
            <label style="color: yellow">Departure Date</label>
            <input type="date" name="deprt_date" value="{{ $schedule->depart_date }}" class="form-control" required/><br/>
            <label style="color: yellow">Arrival Date</label>
            <input type="date" name="arrive_date" value="{{ $schedule->arrive_date }}" class="form-control" required/><br/>

            <input type="submit" value="Update" class="btn btn-success"/>
        </form>
    </div>
</x-app-layout>
