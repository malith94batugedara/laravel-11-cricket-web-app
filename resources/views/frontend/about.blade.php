@extends('layouts.frontend')

@section('title','Sri Lanka Cricket | About Us')

@section('content')

<div class="container mt-4">

    <h1 class="text-center" style="color: red ;font-size: 50px">About Sri Lanka Cricket</h1><br/>

    <p>Sri Lanka Cricket as formally known now, was first registered with Ministry of Sports on 30th June 1975 as a national sports body. It was initially called Board of Cricket for Sri Lanka (BCCSL) until it came to be named as Sri Lanka Cricket (SLC) in 2003.
        Cricket began to develop in Sri Lanka once the process of British colonisation was completed in the early 1800s. The earliest reference to the game in Sri Lanka was reported in the "Colombo Journal" on 5 September 1832 which was when the formation of a cricket club was recorded.Sri Lanka has registered more wins against Pakistan and Bangladesh than any other team, with 14. In ODI matches, Sri Lanka have played against 17 teams; they have played against India most frequently, with a winning percentage of 39.49 in 149 matches.</p>
<br/>
    <div class="row">
        <div class="col-md-3">
            <img src="{{ asset('assets/images/2.jpeg')}}" height="300px" alt="Team images"/>
        </div>
        <div class="col-md-3">
            <img src="{{ asset('assets/images/3.jpeg')}}" height="100px" alt="Team images"/>
        </div>
        <div class="col-md-3">
            <img src="{{ asset('assets/images/4.jpeg')}}" height="300px" alt="Team images"/>
        </div>
        <div class="col-md-3">
            <img src="{{ asset('assets/images/5.jpeg')}}" height="300px" alt="Team images"/>
        </div>
    </div>

</div>
                
@endsection