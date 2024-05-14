<x-app-layout>
    <link href="{{ asset('assets/css/bootstrap.min.css')}}" rel="stylesheet" />
    <div class="modal fade" tabindex="-1" id="deleteModal">
        <div class="modal-dialog">
          <div class="modal-content">
      
         <form action="{{ route('ground.delete') }}" method="post">
            @csrf
            <div class="modal-header">
              <h5 class="modal-title">Delete Ground</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              <input type="hidden" name="ground_delete_id" id="ground_delete_id"/>
              <h3>Are you sure want to delete this Ground</h3>
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
        <h1 style="color: red">All Grounds</h1><br/><br/>

        <table class="table">

            <thead>
                <tr style="color: yellow">
                    <th>Ground Name</th>
                    <th>Location</th>
                    <th>Capacity</th>
                    <th>Number Of Gates</th>
                    <th>Number Of Matches Played</th>
                    <th>Action</th>
                </tr>
            </thead>

            <tbody>
                @foreach ($grounds as $ground)
                <tr style="color: blue">
                    <td>{{$ground->ground_name}}</td>
                    <td>{{$ground->ground_location}}</td>
                    <td>{{$ground->capacity}}</td>
                    <td>{{$ground->number_of_gates}}</td>
                    <td>{{$ground->number_of_matches_played}}</td>
                    <td>
                        <a href="{{ route('ground.edit',$ground->id) }}" class="btn btn-success">Edit</a>
                        <button type="button" value="{{ $ground->id }}" class="btn btn-danger deleteGroundBtn">Delete</button>
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
        $(document).on('click','.deleteGroundBtn',function() {
          let ground_id = $(this).val();
          $('#ground_delete_id').val(ground_id);
          $('#deleteModal').modal('show');
       });
    });
</script>
