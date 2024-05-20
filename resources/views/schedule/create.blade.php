<x-app-layout>
    <link href="{{ asset('assets/css/bootstrap.min.css')}}" rel="stylesheet" />
    <div class="hidden space-x-8 sm:-my-px sm:ms-10 sm:flex py-10" >
        <h1 style="color: red">Add New Schedule</h1><br/><br/>
        <form action="{{ route('schedule.store') }}" method="post">
            @csrf
            <label style="color: yellow">Schedule Name</label>
            <input type="text" name="schedule_name" class="form-control" required/>
            <label style="color: yellow">Time Period</label>
            <input type="text" name="time" class="form-control" required/>
            <label style="color: yellow">Country</label>
            <select name="country" class="form-control">
                 <option>---choose country---</option>
                 @foreach ($countries as $country)
                 <option value="{{$country->name}}">{{$country->name}}</option>
                 @endforeach
            </select>
            <label style="color: yellow">Number of staff</label>
            <input type="text" name="num_of_staff" class="form-control" required/>
            <label style="color: yellow">Departure Date</label>
            <input type="date" name="deprt_date" class="form-control" required/><br/>
            <label style="color: yellow">Arrival Date</label>
            <input type="date" name="arrive_date" class="form-control" required/><br/>

            <input type="submit" value="Save" class="btn btn-success"/>
        </form>
    </div>
</x-app-layout>
