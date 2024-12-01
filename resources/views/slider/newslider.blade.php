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
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="container mt-5">
                                    <h2>Add Slider</h2>
                                    
                                    @if (session('success'))
                                        <div class="alert alert-success">
                                            {{ session('success') }}
                                        </div>
                                    @endif
                                    
                                    <form action="{{ route('admin.addslider') }}" method="POST" enctype="multipart/form-data">
                                        @csrf
                                        <div class="mb-3">
                                            <label for="heading" class="form-label">Heading</label>
                                            <input type="text" class="form-control @error('heading') is-invalid @enderror" id="heading" name="heading" value="{{ old('heading') }}">
                                            @error('heading')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        
                                        <div class="mb-3">
                                            <label for="description" class="form-label">Description</label>
                                            <textarea class="form-control @error('description') is-invalid @enderror" id="description" name="description" rows="3">{{ old('description') }}</textarea>
                                            @error('description')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        
                                        <div class="mb-3">
                                            <label for="image" class="form-label">Slider Image</label>
                                            <input type="file" class="form-control @error('image') is-invalid @enderror" id="image" name="image">
                                            @error('image')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                    </form>
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
