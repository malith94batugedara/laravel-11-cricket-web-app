<x-app-layout>
    <link href="{{ asset('assets/css/bootstrap.min.css')}}" rel="stylesheet" />
    <div class="hidden space-x-8 sm:-my-px sm:ms-10 sm:flex py-10" >
        <h1 style="color: red">Add New Ground</h1><br/><br/>
        <form action="{{ route('ground.store') }}" method="post">
            @csrf
            <label style="color: yellow">Ground Name</label>
            <input type="text" name="ground_name" class="form-control" required/>
            <label style="color: yellow">Ground Location</label>
            <input type="text" name="ground_location" class="form-control" required/>
            <label style="color: yellow">Capacity(Number Of Apperance)</label>
            <input type="text" name="capacity" class="form-control" required/>
            <label style="color: yellow">Number Of Gates</label>
            <input type="text" name="num_of_gate" class="form-control" required/>
            <label style="color: yellow">Number Of Matches Played</label>
            <input type="text" name="num_of_match_played" class="form-control" required/><br/>

            <input type="submit" value="Save" class="btn btn-success"/>
        </form>
    </div>
</x-app-layout>