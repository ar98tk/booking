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
    <link rel="stylesheet" href="{{asset('assets/frontend/css/probook.css')}}">

</head>

<body>

<!--<div class="loader-main" id="loadingMain">
    <div class="loader2"><img src="{{asset('assets/frontend/images/Settings (1).gif')}}" alt="#" /></div>
</div>-->
<section id="booking">
    <div class="container" id="overHidden">
        <div class="check-form" id="checkForm">
            <div class="heading">
                <p>where <br> do you want to</p>
                <h1>Explore.</h1>
            </div>
            <form action="{{ route('booking.store') }}" class="form-book" method="post" name="selection" enctype="multipart/form-data">
                @csrf
                <div class="container-fluid">
                    <!-- start row -->
                    <div class="row">
                        <!-- start col -->
                        <div class="col-12 px-1">
                            <div class="btn-group btn-group-toggle rounded-pill mb-2" data-toggle="buttons">
                                <label class="btn btn-secondary px-4 active btn-radio">
                                    <input type="radio" name="options" id="option1" checked> Round trip
                                </label>
                                <label class="btn btn-secondary px-4 btn-radio">
                                    <input type="radio" name="options" id="option2"> One way
                                </label>
                            </div>
                        </div>
                        <!-- end col -->
                        <!-- start col -->
                        <div class="col-12 col-lg-10 px-1">
                            <div class="inputs-form">
                                <div class="top">
                                    <!-- start input airport in -->
                                    <input id="airportIn" class="airport rounded" type= "text" placeholder="   Airport in" required>
                                    <span class="icon-air"><i class="fas fa-plane-departure"></i></span>
                                    <div class="show" id="showIn">
                                        <input list="airporto" id="airportInsideIn" name="from_airport_id" class="air-inside" type= "text" placeholder="   Airport in">
                                        <h5 class="my-2">The nearest airport </h5>
                                        <ul class="list-group list-group-flush" id="airportListIn">
                                            @foreach( $airports as $airport)
                                                <option class="list-group-item" value="{{$airport->id}}">{{$airport->name}}</option>
                                            @endforeach
                                        </ul>
                                    </div>
                                    <!-- end input airport in -->
                                    <!-- start input airport out -->
                                    <input id="airportOut" class="airport rounded" type= "text" placeholder="   Airport out" required>
                                    <span class="icon-air icon-out"><i class="fas fa-plane-departure"></i></span>
                                    <div class="show showOut" id="showOut">
                                        <input id="airportInsideOut" class="air-inside" name="to_airport_id" type= "text" placeholder="   Airport in">
                                        <h5 class="my-2">The nearest airport </h5>
                                        <ul class="list-group list-group-flush" id="airportListOut">
                                            @foreach( $airports as $airport)
                                                <option class="list-group-item" value="{{$airport->id}}">{{$airport->name}}</option>
                                            @endforeach
                                        </ul>
                                    </div>
                                    <!-- end input airport out -->
                                </div>
                                <!-- end top div -->
                                <!-- start bottom div -->
                                <!-- end bottom div -->
                            </div>
                        </div>
                        <!-- end col -->
                        <!-- start col -->
                        <div class="col-12 col-lg-2 px-1">
                            <div class="submit" id=search>
                                <button type="submit"  class="search-planes rounded">
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                    Search
                                </button>
                            </div>
                        </div>
                        <!-- end col -->
                    </div>
                    <!-- end row -->
                </div>
            </form>
        </div>
    </div>
</section>
<script>
    $('#timeIn').dateDropper();
    $('#timeOut').dateDropper();
</script>


<!-- start jqueery -->
<script src="{{asset('assets/frontend/js/jquery-3.5.1.slim.min.js')}}"></script>
<script src="{{asset('assets/frontend/js/popper.min.js')}}"></script>
<script src="{{asset('assets/frontend/js/bootstrap.js')}}"></script>
<script src="{{asset('assets/frontend/js/proj.js')}}"></script>
</body>

</html>


