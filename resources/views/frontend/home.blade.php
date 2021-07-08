<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="discribtion" content="welecome">
    <!-- start IE combability meta -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- start viewport mobile -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My website is my project</title>
    <!-- google fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@500&family=Poppins:wght@500&display=swap"
          rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Alegreya+Sans&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Alegreya+Sans&family=Alegreya:wght@500&display=swap"
          rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Alegreya+Sans:wght@300&display=swap" rel="stylesheet">
    <!-- end google fonts -->
    <!-- start normalization -->
    <link rel="stylesheet" href="{{asset('assets/frontend/css/normalize.css')}}">
    <!-- start webfonts -->
    <link rel="stylesheet" href="{{asset('assets/frontend/css/all.min.css')}}">
    <!-- start bootstrap -->
    <link rel="stylesheet" href="{{asset('assets/frontend/css/bootstrap.min.css')}}">
    <!-- start style css -->
    <link rel="stylesheet" href="{{asset('assets/frontend/css/pro.css')}}">
    <script>
    </script>
</head>

<body>
@toastr_css
<!-- start navbar -->
<nav class="navbar navbar-expand-lg  p-0 shadow">
    <div class="container-fluid p-0">
        <div class="content">
            <div class="logo">
                <a class="navbar-brand" href="#"><img src="{{asset('assets/frontend/images/logo.png')}}" title="logo"
                                                      alt="logo elford"></a>
            </div>

            <div class="item">
                <div class="information">
                    <ul class="list-unstyled d-flex  m-0">
                        <li><i class="fas fa-map-marker-alt p-2"></i> 145.street road new Zag</li>
                        <li><i class="fas fa-phone p-2"></i> +71 5678954378</li>
                        <li><i class="far fa-envelope p-2"></i> Demo@hmail.com</li>
                    </ul>
                    <!-- start search box -->
                    <div class="search-box">
                        <form action="{{ route('search') }}" method="get">

                            <input type="text" placeholder="Reservation Code" name="reservation_code" class="input">

                            <button class="btn ">
                                <i class="fa fa-search" aria-hidden="true"></i>
                            </button>
                        </form>
                    </div>
                    <!-- end search box -->
                </div>
                <button class="navbar-toggler" type="button" data-toggle="collapse"
                        data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                    <span><i class="fas fa-bars fa-2x text-white"></i></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="#home">Home <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#about">About</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                               data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Travel
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{route('booking.index')}}">Emarates Airline</a>
                                <a class="dropdown-item" href="{{route('booking.index')}}">EgyptAir</a>
                                <a class="dropdown-item" href="{{route('booking.index')}}">ElArabia Airline</a>
                                <a class="dropdown-item" href="{{route('booking.index')}}">Book by Low Price</a>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#temp">Temp</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#team">Team</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#contact">Contact Us</a>
                        </li>
                    </ul>
                    <ul class="sochial list-unstyled d-flex align-items-center mr-4 my-0 ">
                        <li><a href="#"><i class="fab fa-twitter mx-2"></i></a></li>
                        <li><a href="#"><i class="fab fa-facebook-f mx-2"></i></a></li>
                        <li><a href="#"><i class="fab fa-instagram mx-2"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</nav>
<!-- end navbar -->
<!-- start section home -->
<section id="home">
    <!-- start slider -->
    <div id="main-slider" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#main-slider" data-slide-to="0" class="active"></li>
            <li data-target="#main-slider" data-slide-to="1"></li>
            <li data-target="#main-slider" data-slide-to="2"></li>
            <li data-target="#main-slider" data-slide-to="3"></li>
        </ol>
        <div class="carousel-inner">
            <div class="slide-item carousel-item active">
                <div class="caption">
                    <h1>Eforlad <b>Air ,</b></h1>
                    <p>We offer the world of easy flying Book and fly with us
                        <br> We try our best for your <span>convenience.</span></p>
                </div>
            </div>
            <div class="slide-item carousel-item">
                <div class="caption">
                    <h1>Eforlad <b>Air</b></h1>
                    <p>We offer the world of easy flying Book and fly with us
                        <br> We try our best for your <span>convenience.</span></p>
                </div>
            </div>
            <div class="slide-item carousel-item">
                <div class="caption">
                    <h1>Eforlad <b>Air</b></h1>
                    <p>We offer the world of easy flying Book and fly with us
                        <br> We try our best for your <span>convenience.</span></p>
                </div>
            </div>
            <div class="slide-item carousel-item">
                <div class="caption">
                    <h1>Eforlad <b>Air</b></h1>
                    <p>We offer the world of easy flying Book and fly with us
                        <br> We try our best for your <span>convenience.</span></p>
                </div>
            </div>

        </div>
        <a class=" arrow prev-control" href="#main-slider" role="button" data-slide="prev">
            <span class="prev-control-icon"><i class="fas fa-chevron-left"></i></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="arrow next-control" href="#main-slider" role="button" data-slide="next">
            <span class="next-control-icon"><i class="fas fa-chevron-right"></i></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
    <!-- end slider -->
    <span class="setting-icon"><i class="fas fa-cogs"></i></span>
</section>
<!-- end section home -->
<!-- start section subscribe -->
<section id="subscribe">
    <div class="subscribe-text text-center">
        <h2> We are here to help you? </h2>
        <p class="lead">Follow on Facebook to get Our Price Tickets And to get Our News</p>
        <a href="https://www.facebook.com" class="btn btn-outline-light px-5 rounded-pill" target="_blank">Facebook</a>
    </div>
    <img class="bottom-img" src="{{asset('assets/frontend/images/wavesOpacity (6).svg')}}" alt="svg">
</section>
<!-- end section subscribe -->
<!-- start section about -->
<section id="about">
    <div class="container">
        <div class="sec-text text-center">
            <h2>Learn More <span>About Us</span></h2>
            <p class="text-muted"> Briefly, our site is the best and easiest around the world. Discover the world now
                through us</p>
        </div>
        <!-- start row -->
        <div class="row">
            <!-- start col -->
            <div class="col-lg-6">
                <div class="text-one">
                    <p>
                        Our progress from others lies in our difference and the secret of success in the existing staff
                        that strives with every effort to provide the best fit for the user..</p>
                    <ul class="list-unstyled">
                        <li>
                            <i class="fas fa-plane-departure m-2 "></i>
                            The speed in the implementation of the user's request.
                        </li>
                        <li>
                            <i class="fas fa-plane-departure m-2"></i>
                            Providing less expensive shopping than others.
                        </li>
                        <li>
                            <i class="fas fa-plane-departure m-2"></i>
                            Quality of service and contracting with modern aircraft.
                        </li>
                    </ul>
                </div>
            </div>
            <!-- end col -->
            <!-- start col -->
            <div class="col-lg-6">
                <div class="text-two">
                    <p>We contract with the largest number of international airlines that exist, and we contract with
                        modern aircraft only and provide the lowest price for the plane. Our customers are reliable,
                        booking and payment methods are reliable and multiple payment options. Learn about our company
                        system from here.
                    </p>
                    <a href="#" class="btn btn-outline-danger px-4 rounded-pill">Learn more</a>
                </div>
            </div>
            <!-- end col -->
        </div>
        <!-- end row -->
    </div>
</section>
<!-- end section about -->
<!-- start section travel -->
<section id="travel">
    <img class="top-img" src="{{asset('assets/frontend/images/wavesOpacity (4).svg')}}" alt="svg">
    <div class="container">
        <div class="sec-text text-center">
            <h2>Book Your <span>Travel Now</span></h2>
            <p class="text-light"> Briefly, our site is the best and easiest around the world. Discover the world now
                through us</p>
        </div>
        <!-- start row -->
        <div class="row">
            <!-- start col -->
            <div class=" col-6 col-lg-3">
                <div class="card bg-dark text-light mb-2" style="width: 100%;">
                    <div class="card-img w-100 ">
                        <img src="{{asset('assets/frontend/images/comp logo/emarates.logo.png')}}"
                             class="card-img-top rounded-circle img-thumbnail" alt="egyptAir">
                    </div>
                    <div class="card-body text-center">
                        <h5 class="card-title font-weight-bold">Emirates</h5>
                        <p class="card-text">Emirates is an international airline. It is the largest airline in, and
                            also the flag carrier of, the United Arab Emirates. </p>
                        <a href="{{route('booking.index')}}" class="link-go rounded-pill"> <span
                                class="link">BOOK NOW</span>
                            <span class="pass rounded-pill"><i class="fas fa-plane"></i>
                                             <span class="triangle"></span>
                                        </span>
                        </a>
                    </div>
                </div>
            </div>
            <!-- end col -->
            <!-- start col -->
            <div class="col-6 col-lg-3">
                <div class="card bg-dark text-light mb-2" style="width: 100%;">
                    <div class="card-img w-100 ">
                        <img src="{{asset('assets/frontend/images/comp logo/Egypt_air_logo.jpg')}}"
                             class="card-img-top rounded-circle img-thumbnail" alt="egyptAir">
                    </div>
                    <div class="card-body text-center ">
                        <h5 class="card-title font-weight-bold">Egypt Air</h5>
                        <p class="card-text">EgyptAir is an international airline. It is the largest airline in, and
                            also the flag carrier of, the United Arab Egypt.</p>
                        <a href="{{route('booking.index')}}" class="link-go rounded-pill"> <span
                                class="link">BOOK NOW</span>
                            <span class="pass rounded-pill"><i class="fas fa-plane"></i>
                                             <span class="triangle"></span>
                                        </span>
                        </a>
                    </div>
                </div>
            </div>
            <!-- end col -->
            <!-- start col -->
            <div class="col-6 col-lg-3">
                <div class="card bg-dark text-light mb-2" style="width: 100%;">
                    <div class="card-img w-100">
                        <img src="{{asset('assets/frontend/images/comp logo/Arabia.logo.png')}}"
                             class="card-img-top rounded-circle img-thumbnail" alt="egyptAir">
                    </div>
                    <div class="card-body text-center">
                        <h5 class="card-title font-weight-bold">Arabia Airline</h5>
                        <p class="card-text">Arabia Airline is an international airline. It is the largest airline in,
                            and also the flag carrier of, the United Arab Egypt.</p>
                        <a href="{{route('booking.index')}}" class="link-go rounded-pill"> <span
                                class="link">BOOK NOW</span>
                            <span class="pass rounded-pill"><i class="fas fa-plane"></i>
                                             <span class="triangle"></span>
                                        </span>
                        </a>
                    </div>
                </div>
            </div>
            <!-- end col -->
            <!-- start col -->
            <div class="col-6 col-lg-3">
                <div class="card bg-dark text-light mb-2" style="width: 100%;">
                    <div class="card-img w-100">
                        <img src="{{asset('assets/frontend/images/comp logo/istockphoto-1182243050-612x612.jpg')}}"
                             class="card-img-top rounded-circle img-thumbnail" alt="egyptAir">
                    </div>
                    <div class="card-body text-center">
                        <h5 class="card-title font-weight-bold">Low Price</h5>
                        <p class="card-text">
                            Look for signs to get the qualification that works for you on your flight. The search
                            process is done by several airlines.</p>
                        <a href="{{route('booking.index')}}" class="link-go rounded-pill"> <span
                                class="link">BOOK NOW</span>
                            <span class="pass rounded-pill"><i class="fas fa-plane"></i>
                                                  <span class="triangle"></span>
                                             </span>
                        </a>
                    </div>
                </div>
            </div>
            <!-- end col -->
        </div>

        <!-- end row -->
    </div>
</section>
<!-- end section travel -->
<!-- start section temp -->
<section class="weather">
    <div class="container">
        <div class="sec-text text-center">
            <h2>Check <span> Weather</span></h2>
            <p class="text-light"> Now Check the Temperature to know The Weather</p>
        </div>
        <form id="searchForm" class="container py-4">
            <input class="form-control" placeholder="Find Your Location...." name="search" id="search">
            <label>
                <button class="btn btn-primary" type="submit" disabled>Find</button>
            </label>
        </form>
        <!-- start row -->
        <div class="row">
            <!-- start col -->
            <div class="card col-md-4 text-center px-0 mb-2">
                <div class="card-header d-flex justify-content-between">
                    <span class="day"></span>
                    <span class="date"> </span>
                </div>
                <div class="card-body ">
                    <h5 class="card-title"></h5>
                    <p></p>
                    <div><img class="img-fluid" alt="" src=""></div>
                    <div class="card-text">
                        <h2 class="d-inline-block"></h2>
                        <span><sup>o</sup>C </span>

                    </div>

                </div>

                <div class="card-footer text-muted d-flex ">
                    <div class="ml-1">
                        <i class="fas fa-umbrella"></i>
                        <span>20%</span>
                    </div>
                    <div class="ml-3">
                        <i class="fas fa-wind"></i>
                        <span class="wind-speed"></span> <span>km/h</span>
                    </div>
                    <div class="ml-3">
                        <i class="fas fa-compass"></i>
                        <span class="wind-dir"></span>
                    </div>
                </div>
            </div>
            <!-- end col -->
            <!-- start col -->
            <div class="card col-md-4 text-center px-0 mb-2 forecast">
                <div class="card-header">
                    <span class="day"></span>
                </div>
                <div class="card-body d-flex flex-column align-items-center">
                    <h2 class="mt-3"></h2>
                    <h3 class="mb-5"></h3>
                    <p></p>
                </div>
            </div>
            <!-- end col -->
            <!-- start col -->
            <div class="card col-md-4 text-center  px-0 mb-2 forecast">
                <div class="card-header">
                    <span class="day"></span>
                </div>
                <div class="card-body d-flex flex-column align-items-center">
                    <img class="icon my-4 img-fluid" alt="" src="">
                    <h2 class="mt-3"></h2>
                    <h3 class="mb-5"></h3>
                    <p></p>
                </div>
            </div>
            <!-- end col -->
        </div>
        <!-- end row -->
    </div>
</section>
<!-- end section temp -->
<!-- start section team -->
<section id="team">
    <div class="container">
        <div class="sec-text text-center py-3">
            <h2> Our <span>Team</span></h2>
            <p style="color: #888"> The team carried out by the project is a specialized team, students of the Faculty
                of Science in Zagazig,,<br> Department of Chemistry and Computer Science</p>
        </div>
        <div class="team-project">
            <div id="team-slider" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="{{asset('assets/frontend/images/Team/avatar1.png')}}" class="d-block img-thumbnail"
                             alt="...">
                        <div class="caption-team">
                            <h5>Omar Abd Elmoniem</h5>
                            <p>front end developer design the part of front design & javascript</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="{{asset('assets/frontend/images/Team/avatar2.jpg')}}" class="d-block img-thumbnail"
                             alt="...">
                        <div class="caption-team">
                            <h5>Esraa Mohamed Elsebaey</h5>
                            <p> back End developer design the part of Data base</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="{{asset('assets/frontend/images/Team/avatar8.png')}}" class="d-block img-thumbnail"
                             alt="...">
                        <div class="caption-team">
                            <h5>Ahmed Ashraf Shaker</h5>
                            <p> front End developer design the part of html</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="{{asset('assets/frontend/images/Team/avatar7.png')}}" class="d-block img-thumbnail"
                             alt="...">
                        <div class="caption-team">
                            <h5>Mohamed Hedaey</h5>
                            <p> Back End developer design the part of php</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="{{asset('assets/frontend/images/Team/avatar5.jpg')}}" class="d-block img-thumbnail"
                             alt="...">
                        <div class="caption-team">
                            <h5>Mohamed Sophy</h5>
                            <p> Back End developer design the part of php</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="{{asset('assets/frontend/images/Team/avatar6.png')}}" class="d-block img-thumbnail"
                             alt="...">
                        <div class="caption-team">
                            <h5>Samira Mohamed</h5>
                            <p> Back End developer design the part of Data base</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="{{asset('assets/frontend/images/Team/avatar9.png')}}" class="d-block img-thumbnail"
                             alt="...">
                        <div class="caption-team">
                            <h5>Abd Elrahman Shahban</h5>
                            <p> Back End developer design the part of php</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="{{asset('assets/frontend/images/Team/avatar11.jpg')}}" class="d-block img-thumbnail"
                             alt="...">
                        <div class="caption-team">
                            <h5>Mohamed Shalash</h5>
                            <p> front End developer design the part of data base</p>
                        </div>
                    </div>
                </div>
                <a class=" arrow prev-control" href="#team-slider" role="button" data-slide="prev">
                    <span class="prev-control-icon"><i class="fas fa-chevron-left"></i></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="arrow next-control" href="#team-slider" role="button" data-slide="next">
                    <span class="next-control-icon"><i class="fas fa-chevron-right"></i></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
    </div>
</section>
<!-- end section team -->
<!-- start section contact us -->
<section id="contact">
    <div class="container">
        <div class="sec-text text-center">
            <h2> Contact <span>US</span></h2>
            <p class="text-muted"> Contact us if you have a problem. Contact us by e-mail, call us, or visit the headquarters
        </div>
        <!-- start row -->
        <div class="row">
        </div>
        <!-- end row -->
        <!-- start row -->
        <div class="row my-5">
            <!-- start col -->
            <div class="col-lg-4 d-flex flex-column ">
                <div class="info d-flex  ">
                    <span class="icon m-2"><i class="fas fa-map-marker-alt"></i></span>
                    <div class="information-info text-center text-md-left">
                        <h5>Location: </h5>
                        <p class="text-muted">A108 Adam Street, Zagazig, NY 535022</p>
                    </div>
                </div>
                <div class="info d-flex">
                    <span class="icon m-2"><i class="fas fa-map-marker-alt"></i></span>
                    <div class="information-info text-center text-md-left">
                        <h5>email: </h5>
                        <p class="text-muted">m121facmo@gmail.com</p>
                    </div>
                </div>
                <div class="info d-flex">
                    <span class="icon m-2"><i class="fas fa-map-marker-alt"></i></span>
                    <div class="information-info text-center text-md-left">
                        <h5>call:</h5>
                        <p class="text-muted">+151505526594</p>
                    </div>
                </div>
            </div>
            <!-- end col -->
            <!-- start col -->
            <div class="col-lg-8">
                {!! Form::open(['route'=>'contacts.store', 'method' => 'post']) !!}
                <div class="php-email-form">
                    <div class="form-row">
                        <div class="col-md-6 form-group">
                            {!!  Form::text('name',old('name'),['class' => 'form-control' ,'placeholder'=>'Name *'])  !!}
                            @error('name')<span class="text-danger">{{$message}}</span>@enderror
                        </div>
                        <div class="col-md-6 form-group">
                            {!!  Form::email('email',old('email'),['class' => 'form-control' ,'placeholder'=>'E-mail *'])  !!}
                            @error('email')<span class="text-danger">{{$message}}</span>@enderror
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col-md-6 form-group">
                            {!!  Form::text('title',old('title'),['class' => 'form-control' ,'placeholder'=>'Subject *'])  !!}
                            @error('title')<span class="text-danger">{{$message}}</span>@enderror
                        </div>
                        <div class="col-md-6 form-group">
                            {!!  Form::text('mobile',old('mobile'),['class' => 'form-control' ,'placeholder'=>'Mobile'])  !!}
                            @error('mobile')<span class="text-danger">{{$message}}</span>@enderror
                        </div>
                    </div>
                    <div class="form-group">
                        {!!  Form::textarea('message',old('message'),['class' => 'form-control' ,'placeholder'=>'Your Message *'])  !!}
                        @error('message')<span class="text-danger">{{$message}}</span>@enderror
                    </div>
                    <div class="form-row justify-content-center">
                        {!!Form::button('Send Message', ['type', 'submit','class'=>'btn btn-outline-danger rounded-pill mx-auto my-2'])!!}
                    </div>
                </div>
                {!! Form::close() !!}
            </div>
            <!-- end col -->
        </div>
        <!-- end row -->

    </div>
</section>
<!-- end section contact us -->
<!-- start section footer -->
<section id="footer">
    <div class="container py-5">
        <!-- start row -->
        <div class="row">
            <!-- start col -->
            <div class=" col-6 col-lg-3 text-light">
                <h5>Tempo</h5>
                <p>A108 Adam Street<br>
                    zagazig, NY 535022<br>
                    Egypt</p>
                <p><strong> Phone :</strong> +1 5589 55488 55</p>
                <p><strong> Email :</strong> info@example.com</p>
            </div>
            <!-- end col -->
            <!-- start col -->
            <div class=" col-6 col-lg-2 text-light">
                <h5>Our Services</h5>
                <ul class="list-unstyled">
                    <li><i class="fas fa-plane-arrival m-2"></i> Home</li>
                    <li><i class="fas fa-plane-arrival m-2"></i>About us</li>
                    <li><i class="fas fa-plane-arrival m-2"></i>Services</li>
                    <li><i class="fas fa-plane-arrival m-2"></i>Terms of service</li>
                    <li><i class="fas fa-plane-arrival m-2"></i>Privacy policy</li>
                </ul>
            </div>
            <!-- end col -->
            <!-- start col -->
            <div class=" col-6 col-lg-3 text-light">
                <h5>Useful Links</h5>
                <ul class="list-unstyled">
                    <li><i class="fas fa-plane-arrival m-2"></i> Web Design</li>
                    <li><i class="fas fa-plane-arrival m-2"></i>Web Development</li>
                    <li><i class="fas fa-plane-arrival m-2"></i>Product Manage</li>
                    <li><i class="fas fa-plane-arrival m-2"></i>Terms of service</li>
                    <li><i class="fas fa-plane-arrival m-2"></i>Marketing</li>
                    <li><i class="fas fa-plane-arrival m-2"></i>Graphic Design</li>
                </ul>
            </div>
            <!-- end col -->
            <div class=" col-6 col-lg-4 text-light">
                <h5>Join Our Newsletter</h5>
                <p>Tamen quem nulla quae legam multos aute sint culpa legam noster magna</p>
                <p><strong> Phone :</strong> +1 5589 55488 55</p>
                <p><strong> Email :</strong> info@example.com</p>
            </div>
            <!-- end col -->
        </div>
        <!-- end row -->
    </div>
    <div class="footer-bottom py-4">
        <div class="container">
            <!-- start row -->
            <div class="row justify-content-between ">
                <!-- start col -->
                <div class="col-12 col-lg-3 text-center text-lg-left ">
                    <p class="text-muted">&copy; Copyright Tempo. All Rights Reserved<br>
                        Designed by <span class="text-danger">BootstrapMade</span></p>
                </div>
                <!-- end col -->
                <!-- start col -->
                <div class="col-12 col-lg-3 d-flex justify-content-center justify-content-lg-start">
                    <ul class="list-unstyled d-flex align-items-center m-0">
                        <li><a href="#"><i class="fab fa-twitter"></i> </a></li>
                        <li><a href="#"><i class="fab fa-facebook-f"></i> </a></li>
                        <li><a href="#"><i class="fab fa-instagram"></i> </a></li>
                        <li><a href="#"><i class="fab fa-linkedin-in"></i> </a></li>
                    </ul>
                </div>
                <!-- end col -->
            </div>
            <!-- end row -->
        </div>

    </div>

</section>
<!-- end section footer -->


<!-- start jqueery -->
<script src="{{asset('assets/frontend/js/jquery-3.5.1.slim.min.js')}}"></script>
<script src="{{asset('assets/frontend/js/popper.min.js')}}"></script>
<script src="{{asset('assets/frontend/js/bootstrap.js')}}"></script>
<script src="{{asset('assets/frontend/js/proj.js')}}"></script>
<script src="{{asset('assets/frontend/js/main.js')}}"></script>

</body>
@jquery
@toastr_js
@toastr_render
</html>
