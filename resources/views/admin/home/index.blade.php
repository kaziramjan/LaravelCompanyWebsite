@extends('admin.admin_master')
@section('admin')
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        <b>About Section</b>
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="container">
            <div class="row">
            <a href="{{ route('add.about') }}"><button class="btn btn-info">Add About</button></a>
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

                        <div class="card-header">About Section</div>

                            <table class="table table-light table-striped">
                                <thead>
                                    <tr>
                                    <th scope="col" width="15%">Title</th>
                                    <th scope="col" width="15%">Short Description</th>
                                    <th scope="col" width="15%">Long Description</th>
                                    <th scope="col" width="5%">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($homeabout as $about)
                                    <tr>
                                    <td>{{ $about->title }}</td>
                                    <td>{{ $about->short_dis }}</td>
                                    <td>{{ $about->long_dis }}</td>
                                    <td>
                                        <a href="{{ url('about/edit/'.$about->id) }}" class="btn btn-info">Edit</a>
                                        <a href="{{ url('about/delete/'.$about->id) }}" onclick="return confirm('Are you sure to delete?')" class="btn btn-danger">Delete</a>
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


