@extends('layouts.frontend')

@section('title','Sri Lanka Cricket | About Us')

@section('content')

<div class="container mt-4">

    <h1 class="text-center" style="color: red ;font-size: 50px">Contact Sri Lanka Cricket</h1><br/>

<br/>
<div>
    @if(session('message'))
                            <div class="alert alert-success">
                                  {{ session('message') }}
                            </div>
    @endif
</div>
      <form action="{{ route('contact.register') }}" method="post">
       @csrf
       <div class="row">
          <div class="col-md-6">
            <label class="label">Your Name</label>
            <input type="text" name="name" class="form-control" placeholder="Enter Your Name" required/>
          </div>
          <div class="col-md-6">
            <label class="label">Your Contact Number</label>
            <input type="text" name="phone_number" class="form-control" placeholder="Enter Your Phone Number" required/>
          </div>
       </div><br/>
       <label class="label">Your Message</label>
       <textarea class="form-control" rows="4" name="message" placeholder="Enter Your Message Here" required></textarea><br/>
       <input type="submit" value="Submit" class="btn btn-success"/>
      </form>
                
@endsection
