@extends('layout.app')

@section('title', 'Admin dashboard')

@section('content')
    <style>
        .file-upload-label {
            display: inline-block;
            padding: 12px 24px;
            background-color: #a9b7a9;
            color: white;
            border-radius: 8px;
            cursor: pointer;
            font-size: 16px;
            transition: background-color 0.3s;
        }

        .file-upload-label:hover {
            background-color: #45a049;
        }

        input[type="file"] {
            display: none;
        }
    </style>


    <div class="container-fluid" style="margin-top: 6rem;">
        <div class="col-12 d-flex justify-content-between">
            <div class="col-sm-12 col-md-3 col-lg-4">
                <!-- about -->
                <div class="card">
                    <div class="card-body" id="card-container">

                        <div class="profile-img-container">
                            <div class="profile-img d-flex justify-content-center">
                                @if (Auth::user()->image == '')
                                    <img src="../assets/img/profile.jpg" id="profileImage" class="rounded img-fluid"
                                        alt="Profile image" style="width: 10rem;height:10rem" />
                                @else
                                    <img src="{{ asset('storage/' . Auth::user()->image) }}" id="profileImage"
                                        class="rounded img-fluid" alt="Profile image" style="width: 10rem;height:10rem" />
                                @endif

                            </div>
                            <hr>
                            <form id="uploadForm" method="POST" action="{{ url('/pictureupload') }}" enctype="multipart/form-data">
                                @csrf
                                <div class="text-center mt-3">
                                    <label for="file-upload" class="file-upload-label">
                                        <span>Choose image</span>
                                    </label>
                                    <input type="file" id="file-upload" name="image" style="display: none;" onchange="this.form.submit();">
                                </div> 
                                @error('image')
                                    <div class="text-danger"  style="margin-top: -28px">{{ $message }}</div>
                                @enderror
                            </form>
                            
                            
                            
                        </div>
                       

                    </div>
                </div>
                <!--/ about -->
            </div>

            <div class="col-sm-12 col-md-7 col-lg-7">
                <div class="card">
                    <div class="card-body" id="card-container">
                        <div class="row d-flex">
                            <div class="col-md-6 mt-2">
                                <h5 class="mb-75 fw-bolder">Full Name:</h5>
                                <p class="card-text">{{ $user->first_name . ' ' . $user->last_name }}</p>
                            </div>
                            <div class="col-md-6 mt-2">
                                <h5 class="mb-75 fw-bolder">Email:</h5>
                                <p class="card-text">{{ $user->email }}</p>
                            </div>
                        </div>
                        <div class="row d-flex">
                            <div class="col-md-6 mt-2">
                                <h5 class="mb-75 fw-bolder">Phone:</h5>
                                <p class="card-text">{{ $user->phone }}</p>
                            </div>
                            <div class="col-md-6 mt-2">
                                <h5 class="mb-75 fw-bolder">Institute:</h5>
                                <p class="card-text">{{ $user->institute }}</p>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        // Optional: You can add some JavaScript to show the chosen file name after selection
        document.getElementById('file-upload').addEventListener('change', function() {
            if (this.files.length > 0) {
                var fileName = this.files[0].name;
                document.querySelector('.file-upload-label span').textContent = fileName;
            }
        });
    </script>

@endsection
