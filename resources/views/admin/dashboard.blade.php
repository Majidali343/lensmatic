@extends('layout.app')

@section('title', 'Admin dashboard')

@section('content')

<div class="container">
    <div class="page-inner">
        <div class="d-flex align-items-left align-items-md-center flex-column flex-md-row pt-2 pb-4">
            <div>
                <h3 class="fw-bold mb-3">Dashboard</h3>
            </div>
        </div>

        
        <div class="row">
            @foreach ($users as $user )
            <div class="col-sm-12 col-md-3 col-lg-3">
                <div class="card card-stats card-round">
                    <div class="card-body">
                        <div class="row text-center">
                            <div class="col-md-12">
                                @if ($user->image == '')
                                <img src="../assets/img/profile.jpg" id="profileImage" class="rounded img-fluid" alt="Profile image" style="width: 10rem;height:10rem" />
                                @else
                                <img src="{{asset('storage/'.$user->image)}}" id="profileImage" class="rounded img-fluid" alt="Profile image" style="width: 10rem;height:10rem" />
                                @endif
                            </div>
                            <div class="col-12">
                                <h4>{{ $user->first_name .' '. $user->last_name}}</h4>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
            
           
        </div>
    </div>
</div>
<!-- End Offcanvas -->

@endsection