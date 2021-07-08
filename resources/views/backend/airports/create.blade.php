@extends('layouts.admin')

@section('content')
    <div class="container-fluid">
    <div class="card shadow mb-4">
        <div class="card-header py-3 d-flex">
            <h3 class="m-0 font-weight-bold text-primary">Create airport</h3>
            <div class="ml-auto">
                <a href="{{ route('airports.index') }}" class="btn btn-primary">
                    <span class="icon text-white-50">
                        <i class="fa fa-home"></i>
                    </span>
                    <span class="text">Airports</span>
                </a>
            </div>
        </div>
        <div class="card-body">

            {!! Form::open(['route' => 'airports.store', 'method' => 'post']) !!}
            <div class="row">
                <div class="col-6">
                    <div class="form-group">
                        {!! Form::label('name', 'Name') !!}
                        {!! Form::text('name', old('name'), ['class' => 'form-control']) !!}
                        @error('name')<span class="text-danger">{{ $message }}</span>@enderror
                    </div>
                </div>

                <div class="col-6">
                    {!! Form::label('country_name', 'Country Name') !!}
                    {!! Form::text('country_name', old('country_name'), ['class' => 'form-control']) !!}
                    @error('country_name')<span class="text-danger">{{ $message }}</span>@enderror
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
