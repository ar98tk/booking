@extends('layouts.admin')

@section('content')
    <div class="container-fluid">
        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3 d-flex">
                <h3 class="m-0 font-weight-bold text-primary">Airports</h3>
                <div class="ml-auto">
                    <a href="{{ route('airports.create') }}" class="btn btn-primary">
                    <span class="icon text-white-50">
                        <i class="fa fa-plus"></i>
                    </span>
                        <span class="text">Airports</span>
                    </a>
                </div>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                        <tr>
                            <th class="text-center">Name</th>
                            <th class="text-center">Country Name</th>
                        </tr>
                        </thead>
                        @forelse($airports as $airport)
                        <tbody>
                        <tr>
                            <td class="text-center">{{$airport->name}}</td>
                            <td class="text-center">{{$airport->country_name}}</td>

                        </tr>
                        @empty
                            <tr>
                                <td colspan="5" class="text-center">No airports found</td>
                            </tr>
                        @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
