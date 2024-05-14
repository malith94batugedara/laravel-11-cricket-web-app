<x-app-layout>
    <link href="{{ asset('assets/css/bootstrap.min.css')}}" rel="stylesheet" />
    <div class="hidden space-x-8 sm:-my-px sm:ms-10 sm:flex py-10" >
        <h1>Edit Ground</h1><br/><br/>
        <form action="{{ route('ground.update',$ground->id) }}" method="post">
            @csrf
            <label>Ground Name</label>
            <input type="text" name="ground_name" value="{{$ground->ground_name}}" class="form-control" required/>
            <label>Ground Location</label>
            <input type="text" name="ground_location" value="{{$ground->ground_location}}" class="form-control" required/>
            <label>Capacity(Number Of Apperance)</label>
            <input type="text" name="capacity" value="{{$ground->capacity}}" class="form-control" required/>
            <label>Number Of Gates</label>
            <input type="text" name="num_of_gate" value="{{$ground->number_of_gates}}" class="form-control" required/>
            <label>Number Of Matches Played</label>
            <input type="text" name="num_of_match_played" value="{{$ground->number_of_matches_played}}" class="form-control" required/><br/>

            <input type="submit" value="Update" class="btn btn-success"/>
        </form>
    </div>
</x-app-layout>
