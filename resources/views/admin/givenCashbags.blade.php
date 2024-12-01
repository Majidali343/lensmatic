@extends('layout.app')

@section('title', 'Admin dashboard')

@section('content')

    <div class="wrapper">
        <!-- Sidebar -->




        <div class="container">
            <div class="page-inner">
                <div class="page-header">
                    <h3 class="fw-bold mb-3">User Lists</h3>
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
                @if (session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <div class="d-flex align-items-center">
                                    <h4 class="card-title">Given cashBack</h4>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table id="basic-datatables" class="display table table-striped table-hover">
                                        <thead>

                                            <tr>
                                                <th>Name</th>
                                                {{-- <th>Last name</th> --}}
                                                <th>email</th>
                                                <th>Institute</th>
                                                <th>Assigned Cashback</th>
                                            
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($usersWithCashbags as $user)
                                                <tr>
                                                    <td>{{ $user->first_name }}</td>
                                                    {{-- <td>{{ $user->last_name }}</td> --}}
                                                    <td>{{ $user->email }}</td>
                                                    <td>{{ $user->institute }}</td>
                                                    <td>
                                                        {{ $user->amount }} PKR
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
