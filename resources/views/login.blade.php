@extends('layout.guest')

@section('title', 'Login')

@section('content')

    <header class="header-area header-sticky">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav class="main-nav">
                        <a href="{{url('/')}}" class="logo">
                            <h1>UniPerks</h1>
                         </a>
                        <ul class="nav">
                            <li><a href="{{ url('/') }}">Home</a></li>
                            <li><a href="{{ url('/login') }}" class="active">LogIn</a></li>
                        </ul>
                        <a class='menu-trigger'><span>Menu</span></a>
                    </nav>
                </div>
            </div>
        </div>
    </header>

    <!-- Login Section -->
    <div class="main-banner" id="top">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h1 class="text-white">LogIn</h1>
                </div>
            </div>
        </div>
    </div>

    <div class="contact-us section" id="contact">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="contact-us-content">
                        @if (session('success'))
                            <div class="alert alert-success">
                                {{ session('success') }}
                            </div>
                        @endif

                        @if (session('error'))
                            <div class="alert alert-danger">
                                {{ session('error') }}
                            </div>
                        @endif



                        <div class="row" id="login">
                            <form id="contact-form" method="POST" action="{{ url('/loginuser') }}">
                                @csrf
                                <div class="col-lg-12">
                                    <fieldset>
                                        <input type="text" name="email" id="email" value="{{ old('email') }}"
                                            placeholder="E-mail..." required>
                                        @error('email')
                                            <div class="text-danger"  style="margin-top: -28px">{{ $message }}</div>
                                        @enderror
                                    </fieldset>
                                </div>
                                <div class="col-lg-12">
                                    <fieldset>
                                        <input type="password" name="password" id="password" placeholder="Password..."
                                            required>
                                        @error('password')
                                            <div class="text-danger"  style="margin-top: -28px">{{ $message }}</div>
                                        @enderror
                                    </fieldset>
                                </div>
                                <div class="col-lg-12">
                                    <input type="checkbox"  id="forget_pass"
                                        onclick="toggleForgetPassword()">
                                    <span class="text-white">Forgot password?</span>
                                </div>

                                <div class="col-lg-12 text-end">
                                    <fieldset>
                                        <button type="submit" id="login-button" class="orange-button">Login</button>
                                    </fieldset>
                                </div>
                            </form>
                        </div>

                        <div class="row" id="forgot" style="display: none">
                            @error('otpemail')
                            <div id="otperror" class="text-danger"  style="margin-top: -28px">{{ $message }}</div>
                            @enderror
                            <form id="contact-form" method="POST" action="{{ url('/forgotpasssword') }}">
                                @csrf

                                <div class="col-lg-12" id="otp-email-field">
                                    <fieldset>
                                        <input type="text" name="otpemail" id="otp-email" value="{{ old('otpemail') }}"
                                            placeholder="Enter your email for OTP..." required>
                                    </fieldset>
                                </div>

                                <div class="col-lg-12 text-end">
                                    <fieldset>
                                        <button type="submit" id="login-button" class="orange-button">Send Otp</button>
                                    </fieldset>
                                </div>
                            </form>
                        </div>




                    </div>
                </div>
            </div>
        </div>
    </div>



    <script>
          
        const errorElement = document.getElementById('otperror');
        const form1 = document.getElementById('login');
        const form2 = document.getElementById('forgot');

        if (errorElement) {
            form1.style.display = 'none';
            form2.style.display = 'block';
        }
    

        function toggleForgetPassword() {
            const forgetPassCheckbox = document.getElementById('forget_pass');
            const form1 = document.getElementById('login');
            const form2 = document.getElementById('forgot');

            if (forgetPassCheckbox.checked) {
                form1.style.display = 'none';
                form2.style.display = 'block';
            } else {
                form1.style.display = 'block';
                form2.style.display = 'none';
            }
        }
    </script>

@endsection
