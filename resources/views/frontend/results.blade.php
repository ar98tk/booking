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
    <link rel="stylesheet" href="{{asset('assets/frontend/css/all.min.css')}}">
    <!-- start bootstrap -->
    <link rel="stylesheet" href="{{asset('assets/frontend/css/bootstrap.min.css')}}">
    <!-- start style css -->
    <link rel="stylesheet" href="{{asset('assets/frontend/css/proticket.css')}}">

</head>

<body>
@toastr_css
<div class="container-fluid d-flex justify-content-center flex-wrap ">
    <!-- start ticket -->
    @foreach($results as $result)
    <div class="ticket mb-2">
        <div class="ticket-left">
            <!-- start row -->
            <div class="row">
                <!-- start col -->
                <div class="col-4 text-center">
                    <p class="p-0 m-0 text-muted">From</p>
                    <h2 class="p-0 m-0">{{$result->from_airport->name}}</h2>
                    <p class="py-1 m-0 text-muted" >Economy Seats Remaining : <span class="text-danger">{{$result->economy_seats}}</span></p>
                    <p class="py-1 m-0 text-muted" >Economy Price : <span class="text-danger">{{$result->economy_price}}</span></p>
                </div>
                <!-- end col -->
                <!-- start col -->
                <div class="col-3 d-flex justify-content-center align-items-center">
                    <p class="date p-0 m-0"> Date : {{$result->trip_date}}</p>
                </div>
                <!-- end col -->
                <!-- start col -->
                <div class="col-5 text-center">
                    <p class="p-0 m-0 text-muted">To</p>
                    <h2 class="p-0 m-0">{{$result->to_airport->name}}</h2>
                    <p class="py-1 m-0 text-muted" >Business Seats Remaining : <span class="text-danger">{{$result->business_seats}}</span></p>
                    <p class="py-1 m-0 text-muted" >Business Price : <span class="text-danger">{{$result->business_price}}</span></p>
                </div>
                <!-- end col -->
                <!-- start col -->
                <!-- end col -->
                <!-- start col -->
                <div class="col-lg-12 py-2">
                    <a href="{{ route('complete.edit', $result->id) }}" class="btn btn-outline-danger w-100 " >Book</a>
                </div>
                <!-- end col -->


            </div>
            <!-- end row -->
        </div>

    </div>
    @endforeach
    <!-- end ticket -->
</div>




<!-- start jqueery -->
<script src="{{asset('assets/frontend/js/jquery-3.5.1.slim.min.js')}}"></script>
<script src="{{asset('assets/frontend/js/popper.min.js')}}"></script>
<script src="{{asset('assets/frontend/js/bootstrap.js')}}"></script>
<script src="{{asset('assets/frontend/js/proj.js')}}"></script>
</body>
@jquery
@toastr_js
@toastr_render
</html>
