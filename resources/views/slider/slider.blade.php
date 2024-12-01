@extends('layout.app')

@section('title', 'Admin dashboard')

@section('content')

    <div class="wrapper">
        <!-- Sidebar -->




        <div class="container">
            <div class="page-inner">
                
                <div class="page-header">
                    <h3 class="fw-bold mb-3">Slider Image</h3>
                    <ul class="breadcrumbs mb-3">
                        <li class="nav-home">
                            <a href="#">
                                <i class="icon-home"></i>
                            </a>
                        </li>
                        <li class="separator">
                            <i class="icon-arrow-right"></i>
                        </li>
                        <li class="nav-item">
                            <a href="#">User</a>
                        </li>
                        <li class="separator">
                            <i class="icon-arrow-right"></i>
                        </li>
                        <li class="nav-item">
                            <a href="#">User Lists</a>
                        </li>
                    </ul>
                </div>
               
                <div class="row">
                    
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <div class="d-flex justify-content-between">
                                    <h4 class="card-title">Slider images</h4>
                                    <a href="{{url('/newslider')}}" class="btn btn-primary m-1 mb-2" >Add Image</a>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table id="basic-datatables" class="display table table-striped table-hover">
                                        <thead>

                                            <tr>
                                                <th>Heading</th>
                                                <th>Description</th>
                                                <th>Image</th>
                                                <th>Delete</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($sliders as  $slider)
                                                
                                                <tr>
                                                    <td>{{ $slider->heading }}</td>
                                                    <td>{{ $slider->description }}</td>
                                                    <td><img height="200px" width="200px" src="{{ asset('storage/' . $slider->image) }}" alt=""></td>
                                                    <td>
                                                        <form action="{{ route('delete', $slider->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this record?');">
                                                            @csrf
                                                            @method('DELETE')
                                                            <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                                                        </form>
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
            </div>
        </div>


    </div>


@endsection
