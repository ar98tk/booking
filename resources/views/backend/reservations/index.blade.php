@extends('layouts.admin')

@section('content')
    <div class="container-fluid">
        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3 d-flex">
                <h3 class="m-0 font-weight-bold text-primary">Reservations</h3>

            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                        <tr>
                            <th class="text-center">From</th>
                            <th class="text-center">To</th>
                            <th class="text-center">Trip Date</th>
                            <th class="text-center">Name</th>
                            <th class="text-center">Email</th>
                            <th class="text-center">Mobile</th>
                            <th class="text-center">Total Price</th>
                        </tr>
                        </thead>
                        @forelse($reservations as $reservation)
                        <tbody>
                        <tr>
                            <td class="text-center">{{@$reservation->trip->from_airport->name}}</td>
                            <td class="text-center">{{@$reservation->trip->to_airport->name}}</td>
                            <td class="text-center">{{$reservation->reservation_code}}</td>
                            <td class="text-center">{{$reservation->name}}</td>
                            <td class="text-center">{{$reservation->email}} </td>
                            <td class="text-center">{{$reservation->mobile}}</td>
                            <td class="text-center" style="color: #fd4741">{{$reservation->total_price}} $</td>

                        </tr>
                        @empty
                            <tr>
                                <td colspan="8" class="text-center">No reservations found</td>
                            </tr>
                        @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
