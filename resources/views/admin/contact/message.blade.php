@extends('admin.admin_master')
@section('admin')
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        <b>Contact Message</b>
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="container">
            <div class="row">
                <div class="col-md-12"> 
                    <div class="card"> 

                    @if(session('success'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <strong>{{ session('success') }}</strong>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    </div>
                    @endif

                        <div class="card-header">All Contact Message</div>

                            <table class="table table-light table-striped">
                                <thead>
                                    <tr>
                                    <th scope="col" width="5%">SL</th>
                                    <th scope="col" width="15%">Contact Name</th>
                                    <th scope="col" width="15%">Contact Email</th>
                                    <th scope="col" width="15%">Contact Subject</th>
                                    <th scope="col" width="15%">Contact Message</th>
                                    <th scope="col" width="5%">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php($i=1)
                                    @foreach($message as $msg)
                                    <tr>
                                    <td>{{ $i++ }}</td>
                                    <td>{{ $msg->name }}</td>
                                    <td>{{ $msg->email }}</td>
                                    <td>{{ $msg->subject }}</td>
                                    <td>{{ $msg->message }}</td>
                                    <td>
                                        <a href="{{ url('contact/message/delete/'.$msg->id) }}" onclick="return confirm('Are you sure to delete?')" class="btn btn-danger">Delete</a>
                                    </td>
                                    </tr>
                                    @endforeach

                                </tbody>
                            </table>
                        </div>
                    </div>
                    


                </div>
            </div>
        </div>

          
@endsection


