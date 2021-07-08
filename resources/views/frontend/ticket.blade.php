<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="discribtion" content="welecome">
    <!-- start IE combability meta -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- start viewport mobile -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My website booking now our flight</title>
    <!-- google fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link
        href="https://fonts.googleapis.com/css2?family=Amaranth:ital,wght@0,400;0,700;1,400;1,700&family=Karantina:wght@300;400;700&display=swap"
        rel="stylesheet">
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
    <link rel="stylesheet" href="{{asset('assets/frontend/./css/traveldetails.css')}}">

</head>

<body>

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

<div class="container py-5">
    <div class="booking-summary">
        <h6 class="text-center text-light heading">Booking Summary</h6>
        <!-- start row -->
        <div class="row">
            <!-- start col -->
            <div class="col-4">
                <p class="text-muted text-center">From</p>
                <p class="text-center">{{$ticket->trip->from_airport->name}}</p>
                <p class="text-center text-muted">Trip Date : {{$ticket->trip->trip_date}}</p>
            </div>
            <!-- end col -->
            <!-- start col -->
            <div class="col-4 d-flex justify-content-center align-items-center">
                <img class="plane-icon" src="{{asset('assets/frontend/images/airplane.png')}}" width="25px"
                     height="25px">
            </div>
            <!-- end col -->
            <!-- start col -->
            <div class="col-4">
                <p class="text-muted text-center">To</p>
                <p class="text-center">{{$ticket->trip->to_airport->name}}</p>
                <p class="text-center text-muted">Date of reservation : {{$ticket->created_at}}</p>
            </div>
            <!-- end col -->
            <div class="col-12">
            <!--                <table class="table ">
                    <thead class="thead-dark">
                    <tr>
                        <th scope="col" class="text-center">No.Adults</th>
                        <th scope="col" class="text-center">No.Children</th>
                        <th scope="col" class="text-center">No.Infants</th>
                        <th scope="col" class="text-center">Class</th>
                        <th scope="col" class="text-center">Status</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td class="text-center">{{$ticket->no_adults}}</td>
                        <td class="text-center">{{$ticket->no_children}}</td>
                        <td class="text-center">{{$ticket->no_infants}}</td>
                        <td class="text-center">{{$ticket->class}}</td>
                        <td class="text-center">{{$ticket->status == 0 ? 'Not paid yet' : 'Paid'}}</td>
                    </tr>

                    </tbody>
                </table>-->
                <!-- Container (Pricing Section) -->
                <table class="table table-bordered table-striped">

                    <tbody style="">
                    <tr>
                        <td class="text-center">No. Adults</td>
                        <td class="text-center">{{$ticket->no_adults}}</td>
                        <td class="text-center">Adult Seat Price</td>
                        @if($ticket->class == 'Economy')
                            <td class="text-center">{{$ticket->trip->economy_price}} $</td>
                        @else
                            <td class="text-center">{{$ticket->trip->business_price}} $</td>
                        @endif
                        <td class="text-center">Total Adults Price</td>
                        @if($ticket->class == 'Economy')
                            <td class="text-center">{{$ticket->trip->economy_price * $ticket->no_adults}} $</td>
                        @else
                            <td class="text-center">{{$ticket->trip->business_price * $ticket->no_adults}} $</td>
                        @endif
                    </tr>
                    <tr>
                        <td class="text-center">No. Children</td>
                        <td class="text-center">{{$ticket->no_children}}</td>
                        <td class="text-center">Children Seat Price</td>
                        @if($ticket->class == 'Economy')
                            <td class="text-center">{{$ticket->trip->economy_price * 0.7}} $</td>
                        @else
                            <td class="text-center">{{$ticket->trip->business_price * 0.7}} $</td>
                        @endif
                        <td class="text-center">Total Children Price</td>
                        @if($ticket->class == 'Economy')
                            <td class="text-center">{{$ticket->trip->economy_price * $ticket->no_children * 0.7}} $</td>
                        @else
                            <td class="text-center">{{$ticket->trip->business_price * $ticket->no_children * 0.7}} $</td>
                        @endif
                    </tr>
                    <tr>
                        <td class="text-center">No. Infants</td>
                        <td class="text-center">{{$ticket->no_infants}}</td>
                        <td class="text-center">Infants Price</td>
                        @if($ticket->class == 'Economy')
                            <td class="text-center">{{$ticket->trip->economy_price * 0.5}} $</td>
                        @else
                            <td class="text-center">{{$ticket->trip->business_price * 0.5}} $</td>
                        @endif
                        <td class="text-center">Total Infants Price</td>
                        @if($ticket->class == 'Economy')
                            <td class="text-center">{{$ticket->trip->economy_price * $ticket->no_infants * 0.5}} $</td>
                        @else
                            <td class="text-center">{{$ticket->trip->business_price * $ticket->no_infants * 0.5}} $</td>
                        @endif
                    </tr>
                    <tr>
                        <td class="text-center">Reservation Status</td>
                        @if($ticket->class == 0)
                            <td class="text-center" style="color: red;">Not Paid Yet</td>
                        @else
                            <td class="text-center" style="color: green;">Paid</td>
                        @endif
                        <td class="text-center">Seats Class</td>
                        @if($ticket->class == 'Economy')
                            <td class="text-center" style="color: red;">{{$ticket->class}}</td>
                        @else
                            <td class="text-center" style="color: green;">{{$ticket->class}}</td>
                        @endif
                        <td class="text-center">Total Price</td>
                        <td class="text-center" style="color: darkblue;">{{$ticket->total_price}} $</td>
                    </tr>

                    </tbody>
                </table>
            </div>
            <!-- start col -->
            <div class="col-12">
                <p class="p-0 m-0 text-center py-3 price">Total Price: <span> {{$ticket->total_price}} $</span></p>
            </div>
            <!-- end col -->
            <!-- start col -->
            <div class="col-12">
                <p class="p-0 m-0 text-center py-3 done text-success">Booking is Done</p>
            </div>
            <!-- end col -->

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

</html>
