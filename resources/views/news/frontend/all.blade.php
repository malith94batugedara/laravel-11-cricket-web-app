@extends('layouts.frontend')

@section('title','Sri Lanka Cricket | All News')

@section('content')

<div class="container mt-4">

    <h1 class="text-center" style="color: red ;font-size: 50px">All News</h1><br/>

    <table class="table">

        <tr style="color: yellow">
            <th>News Heading</th>
            <th>News Content</th>
            <th>News Created Date</th>
        </tr>
      @foreach ($news as $new)
        
        <tr style="color: blue">
            <td>{{$new->news_heading}}</td>
            <td>{{$new->news_body}}</td>
            <td>{{$new->created_at}}</td>
        </tr>

        @endforeach

    </table>



</div>
                
@endsection