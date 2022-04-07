@extends('admin.admin_master')
@section('admin')
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        <b>Contact Page</b>
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="container">
            <div class="row">
            <a href="{{ route('add.contact') }}"><button class="btn btn-info">Add Contact</button></a>
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

                        <div class="card-header">All Contact Data</div>

                            <table class="table table-light table-striped">
                                <thead>
                                    <tr>
                                    <th scope="col" width="15%">Contact Address</th>
                                    <th scope="col" width="15%">Contact Email</th>
                                    <th scope="col" width="15%">Contact Phone</th>
                                    <th scope="col" width="5%">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($contacts as $con)
                                    <tr>
                                    <td>{{ $con->address }}</td>
                                    <td>{{ $con->email }}</td>
                                    <td>{{ $con->phone }}</td>
                                    <td>
                                        <a href="{{ url('contact/edit/'.$con->id) }}" class="btn btn-info">Edit</a>
                                        <a href="{{ url('contact/delete/'.$con->id) }}" onclick="return confirm('Are you sure to delete?')" class="btn btn-danger">Delete</a>
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


