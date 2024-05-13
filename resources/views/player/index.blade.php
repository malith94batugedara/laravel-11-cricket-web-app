<x-app-layout>
    <link href="{{ asset('assets/css/bootstrap.min.css')}}" rel="stylesheet" />
    <div class="modal fade" tabindex="-1" id="deleteModal">
        <div class="modal-dialog">
          <div class="modal-content">
      
         <form action="{{ route('player.delete') }}" method="post">
            @csrf
            <div class="modal-header">
              <h5 class="modal-title">Delete Player</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              <input type="hidden" name="player_delete_id" id="player_delete_id"/>
              <h3>Are you sure want to delete this Player</h3>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
              <button type="submit" class="btn btn-danger">Yes Delete</button>
            </div>
         </form>
      
          </div>
        </div>
      </div>
    <div class="hidden space-x-8 sm:-my-px sm:ms-10 sm:flex py-10" >
        <h1>All Players</h1><br/><br/>

        <table class="table">

            <thead>
                <tr>
                    <th>Player Name</th>
                    <th>Cap number</th>
                    <th>Matches Played</th>
                    <th>Player Age</th>
                    <th>Action</th>
                </tr>
            </thead>

            <tbody>
                @foreach ($players as $player)
                <tr>
                    <td>{{$player->player_name}}</td>
                    <td>{{$player->cap_number}}</td>
                    <td>{{$player->matches_played}}</td>
                    <td>{{$player->player_age}}</td>
                    <td>
                        <a href="{{ route('player.edit',$player->id) }}" class="btn btn-success">Edit</a>
                        <button type="button" value="{{ $player->id }}" class="btn btn-danger deletePlayerBtn">Delete</button>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</x-app-layout>
<script src="{{ asset('assets/js/jquery-3.6.0.min.js') }}"></script> 
<script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>
<script>
    $(document).ready(function() {
      //  $('.deleteCategoryBtn').click(function() {
        $(document).on('click','.deletePlayerBtn',function() {
          let player_id = $(this).val();
          $('#player_delete_id').val(player_id);
          $('#deleteModal').modal('show');
       });
    });
</script>
