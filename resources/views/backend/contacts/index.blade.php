@extends('layouts.admin')

@section('content')
    <div class="container-fluid">
        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Messages</h6>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                        <tr>
                            <th class="text-center">Name</th>
                            <th class="text-center">Email</th>
                            <th class="text-center">Phone</th>
                            <th class="text-center">Status</th>
                            <th class="text-center">Operations</th>
                        </tr>
                        </thead>
                        @forelse($contacts as $contact)
                        <tbody>
                        <tr>
                            <td class="text-center">{{$contact->name}}</td>
                            <td class="text-center">{{$contact->email}}</td>
                            <td class="text-center">{{$contact->phone !== null ? $contact->phone : 'No Phone'}}</td>
                            <td class="text-center">{{$contact->status == 1 ? 'Unread' : 'Read'}}</td>
                            <td>
                                <div class="text-center" >
                                    <a href="{{ route('contacts.show', $contact->id) }}" class="btn btn-warning"><i class="fa fa-eye"> Show</i></a>
                                    <a href="javascript:void(0)" onclick="if (confirm('Are you sure to delete this message?') ) { document.getElementById('message-delete-{{ $contact->id }}').submit(); } else { return false; }" class="btn btn-danger"><i class="fa fa-trash"> Delete</i></a>
                                    <form action="{{ route('contacts.destroy', $contact->id) }}" method="post" id="message-delete-{{ $contact->id }}" style="display: none;">
                                        @csrf
                                        @method('DELETE')
                                    </form>
                                </div>
                            </td>
                        </tr>
                        @empty
                            <tr>
                                <td colspan="5" class="text-center">No messages found</td>
                            </tr>
                        @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
