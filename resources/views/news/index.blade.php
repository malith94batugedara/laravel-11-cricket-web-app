<x-app-layout>
    <link href="{{ asset('assets/css/bootstrap.min.css')}}" rel="stylesheet" />
    <div class="modal fade" tabindex="-1" id="deleteModal">
        <div class="modal-dialog">
          <div class="modal-content">
      
         <form action="{{ route('news.delete') }}" method="post">
            @csrf
            <div class="modal-header">
              <h5 class="modal-title">Delete News</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              <input type="hidden" name="new_delete_id" id="new_delete_id"/>
              <h3>Are you sure want to delete this News</h3>
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
        <h1 style="color: red">All News</h1><br/><br/>

        <table class="table">

            <thead>
                <tr style="color: yellow">
                    <th>News Heading</th>
                    <th>News Content</th>
                    <th>Action</th>
                </tr>
            </thead>

            <tbody>
                @foreach ($news as $new)
                <tr style="color: blue">
                    <td>{{$new->news_heading}}</td>
                    <td>{{$new->news_body}}</td>
                    <td>
                        <a href="{{ route('news.edit',$new->id) }}" class="btn btn-success">Edit</a>
                        <button type="button" value="{{ $new->id }}" class="btn btn-danger deletenewsBtn">Delete</button>
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
        $(document).on('click','.deletenewsBtn',function() {
          let new_id = $(this).val();
          $('#new_delete_id').val(new_id);
          $('#deleteModal').modal('show');
       });
    });
</script>

