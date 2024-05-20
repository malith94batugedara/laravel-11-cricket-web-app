<x-app-layout>
    <link href="{{ asset('assets/css/bootstrap.min.css')}}" rel="stylesheet" />
    <div class="modal fade" tabindex="-1" id="deleteModal">
        <div class="modal-dialog">
          <div class="modal-content">
      
         <form action="{{ route('schedule.delete') }}" method="post">
            @csrf
            <div class="modal-header">
              <h5 class="modal-title">Delete schedule</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              <input type="hidden" name="schedule_delete_id" id="schedule_delete_id"/>
              <h3>Are you sure want to delete this schedule</h3>
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
        <h1 style="color: red">All Schedules</h1><br/><br/>

        <table class="table">

            <thead>
                <tr style="color: yellow">
                    <th>Schdule Name</th>
                    <th>Time Period</th>
                    <th>Country</th>
                    <th>Num Of Staff</th>
                    <th>Departure Date</th>
                    <th>Arrival Date</th>
                    <th>Action</th>
                </tr>
            </thead>

            <tbody>
                @foreach ($schedules as $schedule)
                <tr style="color: blue">
                    <td>{{$schedule->sch_name}}</td>
                    <td>{{$schedule->time_period}}</td>
                    <td>{{$schedule->country}}</td>
                    <td>{{$schedule->num_of_staff}}</td>
                    <td>{{$schedule->depart_date}}</td>
                    <td>{{$schedule->arrive_date}}</td>
                    <td>
                        <a href="{{ route('schedule.edit',$schedule->id) }}" class="btn btn-success">Edit</a>
                        <button type="button" value="{{ $schedule->id }}" class="btn btn-danger deleteScheduleBtn">Delete</button>
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
        $(document).on('click','.deleteScheduleBtn',function() {
          let schedule_id = $(this).val();
          $('#schedule_delete_id').val(schedule_id);
          $('#deleteModal').modal('show');
       });
    });
</script>

