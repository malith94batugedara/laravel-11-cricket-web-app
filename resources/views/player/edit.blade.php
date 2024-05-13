<x-app-layout>
    <link href="{{ asset('assets/css/bootstrap.min.css')}}" rel="stylesheet" />
    <div class="hidden space-x-8 sm:-my-px sm:ms-10 sm:flex py-10" >
        <h1>Edit Player</h1><br/><br/>
        <form action="{{ route('player.update',$player->id) }}" method="post">
            @csrf
            <label>Player Name</label>
            <input type="text" name="player_name" value="{{ $player->player_name }}" class="form-control" required/>
            <label>Cap Number</label>
            <input type="text" name="cap_number" value="{{ $player->cap_number }}" class="form-control" required/>
            <label>Debut Date</label>
            <input type="date" name="player_debut_date" value="{{ $player->debut_date }}" class="form-control"/>
            <label>Matches Played</label>
            <input type="text" name="player_match_played" value="{{ $player->matches_played }}" class="form-control" required/>
            <label>Player Age</label>
            <input type="text" name="player_age" value="{{ $player->player_age }}" class="form-control" required/><br/>

            <input type="submit" value="Update" class="btn btn-success"/>
        </form>
    </div>
</x-app-layout>
