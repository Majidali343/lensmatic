@extends('layout.guest')

@section('title', 'Change Password')

@section('content')


    <!-- Header -->
    <header class="header-area header-sticky">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav class="main-nav">
                        <a href="{{url('/')}}" class="logo">
                            <h1>UniPerks</h1>
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
                    <h1 class="text-white">New password</h1>
                </div>
            </div>
        </div>
    </div>

    <div class="contact-us section" id="contact">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="contact-us-content">
                        <form id="contact-form"  method="POST" action="{{ url('/update-password') }}">
                            @csrf
                            <div class="row">
                                <div class="col-lg-12">
                                    
                                    <input type="hidden" name="code" value="{{ $code }}">
                                    <fieldset>
                                      <input type="password" name="password" id="password"   placeholder="Your Password..."
                                        required="">
                                        @error('password')
                                        <div class="text-danger"  style="margin-top: -28px">{{ $message }}</div>
                                    @enderror
                                    </fieldset>
                                  </div>
                                  <div class="col-lg-12">
                                    <fieldset>
                                      <input type="password" name="password_confirmation" id="confrm_password"  placeholder="Confirm Password..."
                                        required="">
                                        @error('password_confirmation')
                                        <div class="text-danger"  style="margin-top: -28px">{{ $message }}</div>
                                    @enderror
                                    </fieldset>
                                  </div>
                                <div class="col-lg-12 text-end">
                                    <fieldset>
                                        <button type="submit" id="confrm-btn" class="orange-button">Confirm</button>
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