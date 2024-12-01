@extends('layout.guest')

@section('title', 'Register')

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
                    <h1 class="text-white">Register</h1>
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



                        <div class="col-lg-12">
                            <div class="contact-us-content">
                              <form id="contact-form" action="{{ url('/storeuser') }}" method="POST">
                                @csrf  
                                <div class="row">
                                  <div class="col-lg-12">
                                    <fieldset>
                                      <input type="name" name="first_name" id="name" value="{{ old('first_name') }}" placeholder="Your Full Name..." autocomplete="on" required>
                                      @error('first_name')
                                      <div class="text-danger"  style="margin-top: -28px">{{ $message }}</div>
                                  @enderror
                                    </fieldset>
                                  </div>
                                  {{-- <div class="col-lg-12">
                                    <fieldset>
                                      <input type="name" name="last_name" id="last_name"  value="{{ old('last_name') }}" placeholder="Your Last Name..." autocomplete="on" required>
                                      @error('first_name')
                                      <div class="text-danger"  style="margin-top: -28px">{{ $message }}</div>
                                  @enderror
                                    </fieldset>
                                  </div> --}}
                                  <div class="col-lg-12">
                                    <fieldset>
                                      <input type="text" name="email" id="email"  value="{{ old('email') }}" placeholder="Your E-mail..."
                                        required="">
                                        @error('email')
                                        <div class="text-danger"  style="margin-top: -28px">{{ $message }}</div>
                                    @enderror
                                    </fieldset>
                                  </div>
                                  <div class="col-lg-12">
                                    <fieldset>
                                      <input type="text" name="phone" id="phone"  value="{{ old('phone') }}" placeholder="Your Phone..."
                                        required="">
                                        @error('phone')
                                        <div class="text-danger"  style="margin-top: -28px">{{ $message }}</div>
                                    @enderror
                                    </fieldset>
                                  </div>
                                  <div class="col-lg-12">
                                    <fieldset>
                                      <input type="text" name="address" id="phone"  value="{{ old('address') }}" placeholder="Your address..."
                                        required="">
                                        @error('address')
                                        <div class="text-danger"  style="margin-top: -28px">{{ $message }}</div>
                                    @enderror
                                    </fieldset>
                                  </div>
                                  <div class="col-lg-12">
                                    <fieldset>
                                      <input type="password" name="password" id="password" value="{{ old('password') }}" placeholder="Your Password..."
                                        required="">
                                        @error('password')
                                        <div class="text-danger"  style="margin-top: -28px">{{ $message }}</div>
                                    @enderror
                                    </fieldset>
                                  </div>
                                  <div class="col-lg-12">
                                    <fieldset>
                                      <input type="password" name="password_confirmation" id="confrm_password"  value="{{ old('password_confirmation') }}" placeholder="Confirm Password..."
                                        required="">
                                        @error('password_confirmation')
                                        <div class="text-danger"  style="margin-top: -28px">{{ $message }}</div>
                                    @enderror
                                    </fieldset>
                                  </div>
                                  <div class="col-lg-12">
                                    <fieldset>
                                      <button type="submit" id="form-submit" class="orange-button">Register</button>
                                    </fieldset>
                                  </div>
                                </div>
                              </form>
                              </div>
                          </div>

                      




                    </div>
                </div>
            </div>
        </div>
    </div>



   

@endsection
