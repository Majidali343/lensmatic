@extends('layout.guest')

@section('title', 'Verify Otp')

@section('content')

    <!-- Header -->
    <header class="header-area header-sticky">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav class="main-nav">
                        <a href="{{url('/')}}" class="logo">
                            <h1>Lensmatic</h1>
                         </a>
                        <ul class="nav">
                            <li><a href="{{url('/')}}">Home</a></li>
                            <li><a href="{{url('/login')}}" class="active">LogIn</a></li>
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
                    <h1 class="text-white">Forgot password</h1>
                </div>
            </div>
        </div>
    </div>

    <div class="contact-us section" id="contact">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="contact-us-content">
                        <form id="contact-form" action="" method="post">
                            <div class="row">
                                <div class="col-lg-12">
                                    <fieldset>
                                        <input type="text" name="otp-number" id="otp-number" placeholder="Enter a OTP" required>
                                    </fieldset>
                                </div>
                                <div class="col-lg-12 text-end">
                                    <fieldset>
                                        <button type="submit" id="otp-send-btn" class="orange-button">Send</button>
                                    </fieldset>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

  @endsection