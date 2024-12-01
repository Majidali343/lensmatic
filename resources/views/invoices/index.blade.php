@extends('layout.app')

@section('title', 'Admin dashboard')

@section('content')

    <div class="wrapper">
        <!-- Sidebar -->




        <div class="container">
            <div class="page-inner">
                <div class="page-header">
                    <h3 class="fw-bold mb-3">My invoies</h3>
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
                      
                    </ul>
                </div>
                @if (session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <div class="d-flex justify-content-between">
                                    <h4 class="card-title">Invoices</h4>
                                    <a href="{{url('/newinvoice')}}" class="btn btn-primary m-1 mb-2" >Add Invoice</a>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table id="basic-datatables" class="display table table-striped table-hover">
                                        <thead>

                                            <tr>
                                                <th>optician</th>
                                                {{-- <th>Last name</th> --}}
                                                <th>Invoice number</th>
                                                <th>clerk</th>
                                                <th>date</th>
                                                <th>Add Items</th>
                                            
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($invoices as $invoice)
                                                <tr>
                                                    <td>{{ $invoice->optician }}</td>
                                                    {{-- <td>{{ $user->last_name }}</td> --}}
                                                    <td>{{ $invoice->invoice }}</td>
                                                    <td>{{ $invoice->clerk }}</td>
                                                    <td>{{ $invoice->created_at }}</td>
                                                    <td><a href="#" class="btn btn-primary m-1 mb-2" >Add Invoice Items</a></td>
                                                   
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
