<x-app-layout>
    <link href="{{ asset('assets/css/bootstrap.min.css')}}" rel="stylesheet" />
    <div class="hidden space-x-8 sm:-my-px sm:ms-10 sm:flex py-10" >
        <h1 style="color: red">Add New News</h1><br/><br/>
        <form action="{{ route('news.store') }}" method="post">
            @csrf
            <label style="color: yellow">News Heading</label>
            <input type="text" name="news_head" class="form-control" required/>
            <label style="color: yellow">News Content</label>
            <textarea name="news_body" class="form-control" rows="5"></textarea><br/>

            <input type="submit" value="Save" class="btn btn-success"/>
        </form>
    </div>
</x-app-layout>
