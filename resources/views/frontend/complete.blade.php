<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="discribtion" content="welecome">
    <!-- start IE combability meta -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- start viewport mobile -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Eforlad Airlines</title>
    @toastr_css
    <!-- google fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Amaranth:ital,wght@0,400;0,700;1,400;1,700&family=Karantina:wght@300;400;700&display=swap" rel="stylesheet">
    <!-- end google fonts -->
    <!-- start for date dropper -->
    <link href="{{asset('assets/frontend/css/datedropper.css')}}" rel="stylesheet"/>
    <link href="{{asset('assets/frontend/css/my-style.css')}}" rel="stylesheet"/>
    <script src="{{asset('assets/frontend/js/jquery-1.10.2.min.js')}}"></script>
    <script src="{{asset('assets/frontend/js/datedropper.js')}}"></script>
    <!-- end for date dropper -->
    <!-- start normalization -->
    <link rel="stylesheet" href="{{asset('assets/frontend/css/normalize.css')}}">
    <!-- start webfonts -->
    <link rel="stylesheet" href="{{asset('assets/frontend/./css/all.min.css')}}">
    <!-- start bootstrap -->
    <link rel="stylesheet" href="{{asset('assets/frontend/./css/bootstrap.min.css')}}">
    <!-- start style css -->
    <link rel="stylesheet" href="{{asset('assets/frontend/./css/proticketform.css')}}">

</head>

<body>
@toastr_css
<!-- start navbar -->
<nav class="navbar navbar-dark bg-dark">
    <div class="container">
        <a class="navbar-brand" href="#">
            <img src="{{asset('assets/frontend/./images/logo.png')}}" alt="" width="" height="">
        </a>
    </div>
</nav>
<!-- end navbar -->
<!-- start container -->
<div class="main-container">
    <div class="content">
        <form action="{{ route('complete.store')}}" method="post" enctype="multipart/form-data" name="passengerDetails" class="px-2 text-center">
            @csrf
            <div class="header">
                <h5 class="text-center"> <span><i class="fas fa-user-check"></i></span> Passenger Details</h5>
            </div>
            <input class="form-control my-1" name="trip_id" type="text" value="{{$flight->id}}" hidden>
            <input class="form-control my-1" name="name" type="text" placeholder="  type your name:">
            <input class="form-control my-1" name="email" type="email" placeholder="  type your email:">
            <input class="form-control my-1" name="mobile" type="tel" placeholder="  type your mobile: " maxlength="15">
            <!-- start selector nationality -->
            <!-- end selector nationality -->
            <input class="form-control my-1" name="passport" type="tel" placeholder="Passport Number">
            <!-- start counter input -->
            <div class="show-counter" id="showCounter">
                <div class="counter-inside text-center">
                    <div class="left">
                        <span class="align-self-center"><i class="fas fa-male mx-2 "></i>  Adults &gt; 12 </span>
                    </div>
                    <div class="right">
                        <span id="sub" class="btn-count">-</span>
                        <input type="text" id="qtyBox" readonly="" name="no_adults" value="1" class="counter">
                        <span id="add" class="btn-count">+</span>
                    </div>
                    <!-- second childern -->
                    <div class="left">
                        <span class="align-self-center"><i class="fas fa-male mx-2 "></i>  Child &lt; 12 </span>
                    </div>
                    <div class="right">
                        <span id="sub1" class="btn-count">-</span>
                        <input type="text" id="qtyBox1" readonly="" name="no_children" value="0" class="counter">
                        <span id="add1" class="btn-count">+</span>
                    </div>
                    <!-- second childern -->
                    <div class="left">
                        <span class="align-self-center"><i class="fas fa-male mx-2 "></i>  Infants &lt; 2 </span>
                    </div>
                    <div class="right">
                        <span id="sub2" class="btn-count">-</span>
                        <input type="text" id="qtyBox2" readonly="" name="no_infants" value="0" class="counter">
                        <span id="add2" class="btn-count">+</span>
                    </div>
                </div>
            </div>

            <div class="btn-group btn-group-toggle w-100 my-1" data-toggle="buttons">
                <label class="btn btn-secondary active">
                    <input type="radio" name="class" id="option1" value="Economy" checked> <span><i class="fas fa-check m-2 text-danger"></i></span> Economy
                </label>
                <label class="btn btn-secondary">
                    <input type="radio" name="class" id="option3" value="Business"> <i class="fas fa-check m-2 text-success"></i> Business
                </label>
            </div>
            <!-- end economy -->
            <br><br>
            <button type="submit" class="btn btn-lg btn-success"> Complete Booking</button>
            <br><br>
        </form>
    </div>
    <div class="sidebar">
        <div class="summary">
            <h6 class="text-center text-light ">Flight Summary</h6>
            <!-- start row -->
            <div class="row">
                <!-- start col -->
                <div class="col-4">
                    <p class="text-muted text-center">From</p>
                    <p class="text-center">{{$flight->from_airport->name}}</p>
                    <p class="text-center text-muted">{{$flight->from_airport->country_name}}</p>
                </div>
                <!-- end col -->
                <!-- start col -->
                <div class="col-4 d-flex justify-content-center align-items-center">
                    <img class="plane-icon" src="{{asset('assets/frontend/images/airplane.png')}}" width="25px" height="25px">
                </div>
                <!-- end col -->
                <!-- start col -->
                <div class="col-4">
                    <p class="text-muted text-center">To</p>
                    <p class="text-center">{{$flight->to_airport->name}}</p>
                    <p class="text-center text-muted">{{$flight->to_airport->country_name}}</p>
                </div>
                <!-- end col -->
                <!-- start col -->
                <div class="col-6">
                    <p class="text-muted text-center">Total Remaining Seats</p>
                </div>
                <!-- end col -->
                <!-- start col -->
                <div class="col-6">
                    <p class="text-muted text-center">{{$flight->economy_seats + $flight->business_seats}}</p>
                </div>
                <!-- end col -->
                <!-- start col -->
                <div class="col-6">
                    <p class="text-muted text-center">Flight Date</p>
                </div>
                <!-- end col -->
                <!-- start col -->
                <div class="col-6">
                    <p class="text-muted text-center">{{$flight->trip_date}}</p>
                </div>
                <!-- end col -->
                <!-- start col -->
                <div class="col-12">
                    <img  src="{{asset('assets/frontend/./images/logo.png')}}" alt="img" style="margin: 25px;">
                </div>
                <!-- end col -->
            </div>
            <!-- end row -->
        </div>
    </div>
</div>
<!-- end container -->


<!-- start jqueery -->
<script src="{{asset('assets/frontend/js/jquery-3.5.1.slim.min.js')}}"></script>
<script src="{{asset('assets/frontend/js/popper.min.js')}}"></script>
<script src="{{asset('assets/frontend/js/bootstrap.js')}}"></script>
<script src="{{asset('assets/frontend/js/projtwo.js')}}"></script>
</body>
@jquery
@toastr_js
@toastr_render
</html>
