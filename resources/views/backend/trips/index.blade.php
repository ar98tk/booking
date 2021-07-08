@extends('layouts.admin')

@section('content')
    <div class="container-fluid">
        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3 d-flex">
                <h3 class="m-0 font-weight-bold text-primary">Trips</h3>
                <div class="ml-auto">
                    <a href="{{ route('trips.create') }}" class="btn btn-primary">
                    <span class="icon text-white-50">
                        <i class="fa fa-plus"></i>
                    </span>
                        <span class="text">Trips</span>
                    </a>
                </div>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                        <tr>
                            <th class="text-center">From</th>
                            <th class="text-center">To</th>
                            <th class="text-center">Trip Date</th>
                            <th class="text-center">No. Economy</th>
                            <th class="text-center">Economy Price</th>
                            <th class="text-center">No. Business</th>
                            <th class="text-center">Business Price</th>
                            <th class="text-center">Operations</th>
                        </tr>
                        </thead>
                        @forelse($trips as $trip)
                        <tbody>
                        <tr>
                            <td class="text-center">{{@$trip->from_airport->name}}</td>
                            <td class="text-center">{{@$trip->to_airport->name}}</td>
                            <td class="text-center">{{$trip->trip_date}}</td>
                            <td class="text-center">{{$trip->economy_seats}}</td>
                            <td class="text-center">{{$trip->economy_price}} $</td>
                            <td class="text-center">{{$trip->business_seats}}</td>
                            <td class="text-center">{{$trip->business_price}} $</td>
                            <td>
                                <div class="text-center" >
                                    <a href="javascript:void(0)" onclick="if (confirm('Are you sure to delete this record?') ) { document.getElementById('message-delete-{{ $trip->id }}').submit(); } else { return false; }" class="btn btn-danger"><i class="fa fa-trash"> Delete</i></a>
                                    <form action="{{ route('trips.destroy', $trip->id) }}" method="post" id="message-delete-{{ $trip->id }}" style="display: none;">
                                        @csrf
                                        @method('DELETE')
                                    </form>
                                </div>
                            </td>
                        </tr>
                        @empty
                            <tr>
                                <td colspan="8" class="text-center">No trips found</td>
                            </tr>
                        @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
