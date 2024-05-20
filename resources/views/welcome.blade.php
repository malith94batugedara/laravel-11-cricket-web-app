@extends('layouts.frontend')

@section('title','Sri Lanka Cricket | Home')

@section('content')
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">         
  <div class="container" style="margin-top: 70px">

    <body>

        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
            </ol>
    
            <!-- Inner Content (Slides) -->
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="{{ asset('assets/images/6.jpeg') }}" class="d-block w-100" alt="First slide">
                    <div class="carousel-caption d-none d-md-block">
                        <h5 class="label">Asia Cup Final 2022</h5>
                        <p>We are the 6th time asia cup winners become in 2022</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="{{ asset('assets/images/7.jpeg') }}" class="d-block w-100" alt="Second slide">
                    <div class="carousel-caption d-none d-md-block">
                        <h5 class="label">T20 World Cup 2014</h5>
                        <p>We are the 1st time world T20 winners become in 2014</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="{{ asset('assets/images/8.jpeg') }}" class="d-block w-100" alt="Third slide">
                    <div class="carousel-caption d-none d-md-block">
                        <h5 class="label">T20 World Cup 2014</h5>
                        <p>We are the 1st time world T20 winners become in 2014</p>
                    </div>
                </div>

                <div class="carousel-item">
                    <img src="{{ asset('assets/images/9.jpeg') }}" class="d-block w-100" alt="Third slide">
                    <div class="carousel-caption d-none d-md-block">
                        <h5 class="label">World Cup 1996</h5>
                        <p>We are the 1st time world Cup winners become in 1996</p>
                    </div>
                </div>
            </div>
    
            <!-- Controls -->
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    </body>
    


  </div>

@endsection