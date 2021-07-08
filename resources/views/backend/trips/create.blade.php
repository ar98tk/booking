@extends('layouts.admin')

@section('content')
    <div class="container-fluid">
        <div class="card shadow mb-4">
            <div class="card-header py-3 d-flex">
                <h3 class="m-0 font-weight-bold text-primary">Create trip</h3>
                <div class="ml-auto">
                    <a href="{{ route('trips.index') }}" class="btn btn-primary">
                    <span class="icon text-white-50">
                        <i class="fa fa-home"></i>
                    </span>
                        <span class="text">Trips</span>
                    </a>
                </div>
            </div>
            <div class="card-body">

                {!! Form::open(['route' => 'trips.store', 'method' => 'post']) !!}
                <div class="row">

                    <div class="col-6">
                        <div class="form-group">
                            <label for="exampleInputEmail1">From Airport<span class="tx-danger"></span> </label>
                            <select class="form-control brands_id" name="from_airport_id" id="from_airport_id">
                                <option value="">--- Choose From Airport ---</option>
                                @foreach( $airports as $airport)
                                    <option value="{{$airport->id}}">{{$airport->name}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="form-group">
                            <label for="exampleInputEmail1">To Airport<span class="tx-danger"></span> </label>
                            <select class="form-control brands_id" name="to_airport_id" id="to_airport_id">
                                <option value="">--- Choose To Airport ---</option>
                                @foreach( $airports as $airport)
                                    <option value="{{$airport->id}}">{{$airport->name}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <div class="col-6">
                        <div class="form-group">
                            {!! Form::label('economy_seats', 'Economy Seats') !!}
                            {!! Form::text('economy_seats', old('economy_seats'), ['class' => 'form-control']) !!}
                            @error('economy_seats')<span class="text-danger">{{ $message }}</span>@enderror
                        </div>
                    </div>

                    <div class="col-6">
                        <div class="form-group">
                            {!! Form::label('business_seats', 'Business Seats') !!}
                            {!! Form::text('business_seats', old('business_seats'), ['class' => 'form-control']) !!}
                            @error('business_seats')<span class="text-danger">{{ $message }}</span>@enderror
                        </div>
                    </div>

                    <div class="col-6">
                        <div class="form-group">
                            {!! Form::label('economy_price', 'Economy Prices') !!}
                            {!! Form::text('economy_price', old('economy_price'), ['class' => 'form-control']) !!}
                            @error('economy_price')<span class="text-danger">{{ $message }}</span>@enderror
                        </div>
                    </div>

                    <div class="col-6">
                        <div class="form-group">
                            {!! Form::label('business_price', 'Business Prices') !!}
                            {!! Form::text('business_price', old('business_price'), ['class' => 'form-control']) !!}
                            @error('business_price')<span class="text-danger">{{ $message }}</span>@enderror
                        </div>
                    </div>

                    <div class="col-6">
                        <div class="form-group">
                            {!! Form::label('trip_date', 'Trip Date & Time') !!}
                            <input type="datetime-local" id="trip_date" name="trip_date" class="form-control">
                            @error('trip_date')<span class="text-danger">{{ $message }}</span>@enderror
                        </div>
                    </div>
                </div>

                <div class="form-group pt-4">
                    {!! Form::submit('Submit', ['class' => 'btn btn-primary']) !!}
                </div>
                {!! Form::close() !!}
            </div>
        </div>
    </div>
@endsection
