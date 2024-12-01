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
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <div class="d-flex align-items-center">
                                    <h4 class="card-title">Users</h4>
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
                                                <th>Phone</th>
                                                {{-- <th>Status</th> --}}
                                                <th>Institute</th>
                                                <th>Remove user</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($users as $user)
                                                <tr>
                                                    <td>{{ $user->first_name }}</td>
                                                    {{-- <td>{{ $user->last_name }}</td> --}}
                                                    <td>{{ $user->email }}</td>
                                                    <td>{{ $user->phone }}</td>
                                                    {{-- <td>
                                                        @if ($user->isuserapproved === 'yes')
                                                            {{ 'Approved' }}
                                                        @elseif ($user->isuserapproved === 'no')
                                                            {{ 'Pending' }}
                                                        @else
                                                            {{ $user->isuserapproved }}
                                                        @endif

                                                    </td> --}}
                                                    <td>{{ $user->institute }}</td>
                                                    <td>
                                                        <div class="form-button-action">
                                                            {{-- <button type="button" data-bs-toggle="tooltip" title=""
                                                                class="btn btn-link btn-success btn-lg approve-btn"
                                                                data-user_id="{{$user->id}}" data-status="yes"
                                                                data-original-title="Approved">
                                                                <i class="fa fa-check"></i>
                                                            </button> --}}
                                                            <button type="button" data-bs-toggle="tooltip" title=""
                                                                class="btn btn-link btn-danger reject-btn"
                                                                data-user_id="{{$user->id}}" data-status="rejected"
                                                                data-original-title="Decline">
                                                                <i class="fa fa-times"></i>
                                                            </button>
                                                            <form id="updateStatusForm" style="display: none">
                                                                @csrf
                                                            </form>
                                                        </div>
                                                        <div class="statusMessage" id="statusMessage_{{$user->id}}"></div>
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

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).ready(function() {
        // Attach click event to approve and reject buttons
        $('.approve-btn, .reject-btn').off('click').on('click', function() {
            var userId = $(this).data('user_id'); // Get user ID
            var status = $(this).data('status'); // Get status (approved/rejected)
            var token = $('#updateStatusForm').find('input[name="_token"]').val(); // Get CSRF token
            var userDiv = $(this).closest('.form-button-action'); // Select parent container
            var statusMessageDiv = $('#statusMessage_' + userId);

            // Send AJAX request
            $.ajax({
                url: '/user/' + userId + '/delete', // Laravel route
                type: 'POST',
                data: {
                    _token: token, // CSRF token
                    status: status // Status
                },
                success: function(response) {
                    // Display success message
                    statusMessageDiv.html(
                        '<span style="color:green;">' + response.message + '</span>'
                    );
                    // Hide the user div
                    userDiv.addClass('d-none');
                },
                error: function(response) {
                    // Display error message
                    $('.statusMessage').html(
                        '<span style="color:red;">' + response.responseJSON.message + '</span>'
                    );
                }
            });
        });
    });
</script>

@endsection
