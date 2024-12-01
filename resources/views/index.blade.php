
@extends('layout.guest')
@section('content')
    <!-- ***** Preloader Start ***** -->
    <div id="js-preloader" class="js-preloader">
        <div class="preloader-inner">
            <span class="dot"></span>
            <div class="dots">
                <span></span>
                <span></span>
                <span></span>
            </div>
        </div>
    </div>
    <!-- ***** Preloader End ***** -->

    <!-- ***** Header Area Start ***** -->
    <header class="header-area header-sticky">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav class="main-nav">
                        <!-- ***** Logo Start ***** -->
                        <a href="{{url('/')}}" class="logo">
                            <h1>Lensmatic</h1>
                           
                        </a>
                        <!-- ***** Logo End ***** -->
                        <!-- ***** Serach Start ***** -->
                        <!-- <div class="search-input">
                      <form id="search" action="#">
                        <input type="text" placeholder="Type Something" id='searchText' name="searchKeyword" onkeypress="handle" />
                        <i class="fa fa-search"></i>
                      </form>
                    </div> -->
                        <!-- ***** Serach Start ***** -->
                        <!-- ***** Menu Start ***** -->
                        <ul class="nav">
                            <li class="scroll-to-section"><a href="#top" class="active">Home</a></li>
                            <!-- <li class="scroll-to-section"><a href="#services">Services</a></li>
                      <li class="scroll-to-section"><a href="#courses">Courses</a></li>
                      <li class="scroll-to-section"><a href="#team">Team</a></li>
                      <li class="scroll-to-section"><a href="#events">Events</a></li> -->
                            <li class="scroll-to-section"><a href="{{url('/register')}}">Register Now</a></li>
                        
                            <li class="scroll-to-section"><a href="{{url('/login')}}">LogIn</a></li>
                        </ul>
                        <a class='menu-trigger'>
              <span>Menu</span>
            </a>
                        <!-- ***** Menu End ***** -->
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- ***** Header Area End ***** -->

    <div class="main-banner" id="top">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="owl-carousel owl-banner">
                      @isset($sliders)
                      @foreach ($sliders as $slider )
                        <div class="item item-1" style="background-image: url('{{ asset('storage/' . $slider->image) }}');">
                            <div class="header-text">
                                <!-- <span class="category">Our Courses</span> -->
                                <h2>{{$slider->heading}}</h2>
                                <p>{{$slider->description}}</p>
                                <div class="buttons">
                                    <div class="main-button">
                                        <!-- <a href="#">Request Demo</a> -->
                                    </div>
                                    <div class="icon-button">
                                        <!-- <a href="#"><i class="fa fa-play"></i>What is Lorem Ipsum?</a> -->
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                        @endisset
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Sevices Section Start -->
    <!-- <div class="services section" id="services">
    <div class="container">
      <div class="row">
        <div class="col-lg-4 col-md-6">
          <div class="service-item">
            <div class="icon">
              <img src="./assets/img/service-01.png" alt="online degrees">
            </div>
            <div class="main-content">
              <h4>Online Degrees</h4>
              <p>Whenever you need free templates in HTML CSS, you just remember TemplateMo website.</p>
              <div class="main-button">
                <a href="#">Read More</a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6">
          <div class="service-item">
            <div class="icon">
              <img src="./assets/img/service-02.png" alt="short courses">
            </div>
            <div class="main-content">
              <h4>Short Courses</h4>
              <p>You can browse free templates based on different tags such as digital marketing, etc.</p>
              <div class="main-button">
                <a href="#">Read More</a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6">
          <div class="service-item">
            <div class="icon">
              <img src="./assets/img/service-03.png" alt="web experts">
            </div>
            <div class="main-content">
              <h4>Web Experts</h4>
              <p>You can start learning HTML CSS by modifying free templates from our website too.</p>
              <div class="main-button">
                <a href="#">Read More</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div> -->

    <!-- Sevices Section End -->

    <!-- About Section Start -->
    <!-- <div class="section about-us">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 offset-lg-1">
          <div class="accordion" id="accordionExample">
            <div class="accordion-item">
              <h2 class="accordion-header" id="headingOne">
                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                  Where shall we begin?
                </button>
              </h2>
              <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                  Dolor <strong>almesit amet</strong>, consectetur adipiscing elit, sed doesn't eiusmod tempor incididunt ut labore consectetur <code>adipiscing</code> elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida.
                </div>
              </div>
            </div>
            <div class="accordion-item">
              <h2 class="accordion-header" id="headingTwo">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                  How do we work together?
                </button>
              </h2>
              <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                  Dolor <strong>almesit amet</strong>, consectetur adipiscing elit, sed doesn't eiusmod tempor incididunt ut labore consectetur <code>adipiscing</code> elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida.
                </div>
              </div>
            </div>
            <div class="accordion-item">
              <h2 class="accordion-header" id="headingThree">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                  Why SCHOLAR is the best?
                </button>
              </h2>
              <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                  There are more than one hundred responsive HTML templates to choose from <strong>Template</strong>Mo website. You can browse by different tags or categories.
                </div>
              </div>
            </div>
            <div class="accordion-item">
              <h2 class="accordion-header" id="headingFour">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                  Do we get the best support?
                </button>
              </h2>
              <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                  You can also search on Google with specific keywords such as <code>templatemo business templates, templatemo gallery templates, admin dashboard templatemo, 3-column templatemo, etc.</code>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-5 align-self-center">
          <div class="section-heading">
            <h6>About Us</h6>
            <h2>What make us the best academy online?</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravid risus commodo.</p>
            <div class="main-button">
              <a href="#">Discover More</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div> -->
    <!-- About Section End -->


    <!-- Latest Courses Start -->
    <!-- <section class="section courses" id="courses">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 text-center">
          <div class="section-heading">
            <h6>Latest Courses</h6>
            <h2>Latest Courses</h2>
          </div>
        </div>
      </div>
      <ul class="event_filter">
        <li>
          <a class="is_active" href="#!" data-filter="*">Show All</a>
        </li>
        <li>
          <a href="#!" data-filter=".design">Webdesign</a>
        </li>
        <li>
          <a href="#!" data-filter=".development">Development</a>
        </li>
        <li>
          <a href="#!" data-filter=".wordpress">Wordpress</a>
        </li>
      </ul>
      <div class="row event_box">
        <div class="col-lg-4 col-md-6 align-self-center mb-30 event_outer col-md-6 design">
          <div class="events_item">
            <div class="thumb">
              <a href="#"><img src="./assets/img/course-01.jpg" alt=""></a>
              <span class="category">Webdesign</span>
              <span class="price">
                <h6><em>$</em>160</h6>
              </span>
            </div>
            <div class="down-content">
              <span class="author">Stella Blair</span>
              <h4>Learn Web Design</h4>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 align-self-center mb-30 event_outer col-md-6  development">
          <div class="events_item">
            <div class="thumb">
              <a href="#"><img src="./assets/img/course-02.jpg" alt=""></a>
              <span class="category">Development</span>
              <span class="price">
                <h6><em>$</em>340</h6>
              </span>
            </div>
            <div class="down-content">
              <span class="author">Cindy Walker</span>
              <h4>Web Development Tips</h4>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 align-self-center mb-30 event_outer col-md-6 design wordpress">
          <div class="events_item">
            <div class="thumb">
              <a href="#"><img src="./assets/img/course-03.jpg" alt=""></a>
              <span class="category">Wordpress</span>
              <span class="price">
                <h6><em>$</em>640</h6>
              </span>
            </div>
            <div class="down-content">
              <span class="author">David Hutson</span>
              <h4>Latest Web Trends</h4>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 align-self-center mb-30 event_outer col-md-6 development">
          <div class="events_item">
            <div class="thumb">
              <a href="#"><img src="./assets/img/course-04.jpg" alt=""></a>
              <span class="category">Development</span>
              <span class="price">
                <h6><em>$</em>450</h6>
              </span>
            </div>
            <div class="down-content">
              <span class="author">Stella Blair</span>
              <h4>Online Learning Steps</h4>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 align-self-center mb-30 event_outer col-md-6 wordpress development">
          <div class="events_item">
            <div class="thumb">
              <a href="#"><img src="./assets/img/course-05.jpg" alt=""></a>
              <span class="category">Wordpress</span>
              <span class="price">
                <h6><em>$</em>320</h6>
              </span>
            </div>
            <div class="down-content">
              <span class="author">Sophia Rose</span>
              <h4>Be a WordPress Master</h4>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 align-self-center mb-30 event_outer col-md-6 wordpress design">
          <div class="events_item">
            <div class="thumb">
              <a href="#"><img src="./assets/img/course-06.jpg" alt=""></a>
              <span class="category">Webdesign</span>
              <span class="price">
                <h6><em>$</em>240</h6>
              </span>
            </div>
            <div class="down-content">
              <span class="author">David Hutson</span>
              <h4>Full Stack Developer</h4>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section> -->
    <!-- Latest Courses End -->


    <div class="section fun-facts">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="wrapper">
                        <div class="row">
                            <div class="col-lg-3 col-md-6">
                                <div class="counter">
                                    <h2 class="timer count-title count-number" data-to="500" data-speed="1000"></h2>
                                    <p class="count-text ">Students Benefiting from Lensmatic</p>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6">
                                <div class="counter">
                                    <h2 class="timer count-title count-number" data-to="100" data-speed="1000"></h2>
                                    <p class="count-text ">Brands partnered Nationwide</p>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6">
                                <div class="counter">
                                    <h2 class="timer count-title count-number" data-to="1000" data-speed="1000"></h2>
                                    <p class="count-text ">Exclusive discounts</p>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6">
                                <div class="counter end">
                                    <h2 class="timer count-title count-number" data-to="1" data-speed="1000"></h2>
                                    <p class="count-text ">Platform for all Student Savings</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Team Section Start -->
    <!-- <div class="team section" id="team">
    <div class="container">
      <div class="row">
        <div class="col-lg-3 col-md-6">
          <div class="team-member">
            <div class="main-content">
              <img src="./assets/img/member-01.jpg" alt="">
              <span class="category">UX Teacher</span>
              <h4>Sophia Rose</h4>
              <ul class="social-icons">
                <li><a href="#"><i class="fab fa-facebook"></i></a></li>
                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                <li><a href="#"><i class="fab fa-linkedin"></i></a></li>
              </ul>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6">
          <div class="team-member">
            <div class="main-content">
              <img src="./assets/img/member-02.jpg" alt="">
              <span class="category">Graphic Teacher</span>
              <h4>Cindy Walker</h4>
              <ul class="social-icons">
                <li><a href="#"><i class="fab fa-facebook"></i></a></li>
                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                <li><a href="#"><i class="fab fa-linkedin"></i></a></li>
              </ul>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6">
          <div class="team-member">
            <div class="main-content">
              <img src="./assets/img/member-03.jpg" alt="">
              <span class="category">Full Stack Master</span>
              <h4>David Hutson</h4>
              <ul class="social-icons">
                <li><a href="#"><i class="fab fa-facebook"></i></a></li>
                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                <li><a href="#"><i class="fab fa-linkedin"></i></a></li>
              </ul>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6">
          <div class="team-member">
            <div class="main-content">
              <img src="./assets/img/member-04.jpg" alt="">
              <span class="category">Digital Animator</span>
              <h4>Stella Blair</h4>
              <ul class="social-icons">
                <li><a href="#"><i class="fab fa-facebook"></i></a></li>
                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                <li><a href="#"><i class="fab fa-linkedin"></i></a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div> -->
    <!-- Team Section End -->

    <!-- Testimonials Section Start -->
    <div class="section testimonials">
        <div class="container">
            <div class="row">
                <div class="col-lg-7">
                    <div class="owl-carousel owl-testimonials">
                        <div class="item">
                            <p><h2>Why Choose Lensmatic?</h2>
                              Exclusive Offers: Enjoy discounts that are designed specifically for students.
                              Wide Range of Brands: From fashion and tech to food and fitness, we partner with the best.
                              Simple Access: Unlock deals with just your student ID – no hassle, no fuss.
                              Empowering Students: Save smartly and focus your finances on what matters most – your education.</p>
                            <div class="author">
                                <img src="./assets/img/testimonial-author.jpg">
                                <!-- <span class="category">Full Stack Master</span> -->
                                <span class="fw-bolder fs-2">Atif Khan</span>
                            </div>
                        </div>
                        <div class="item">
                            <p>“Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravid.”</p>
                            <div class="author">
                                <img src="./assets/img/testimonial-author.jpg" alt="">
                                <span class="category">UI Expert</span>
                                <h4>Thomas Jefferson</h4>
                            </div>
                        </div>
                        <div class="item">
                            <p>“Scholar is free website template provided by TemplateMo for educational related websites. This CSS layout is based on Bootstrap v5.3.0 framework.”</p>
                            <div class="author">
                                <img src="./assets/img/testimonial-author.jpg" alt="">
                                <span class="category">Digital Animator</span>
                                <h4>Stella Blair</h4>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5 align-self-center">
                    <div class="section-heading">
                        <h6>TESTIMONIALS</h6>
                        <h2>Perks That Work for YOU!</h2>
                        <p>Join the Lensmatic family today and enjoy deals and discounts crafted just for students. It’s time to make every rupee count. </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Testimonials Section End -->


    <!-- Event Section Start -->
    <!-- <div class="section events" id="events">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 text-center">
          <div class="section-heading">
            <h6>Schedule</h6>
            <h2>Upcoming Events</h2>
          </div>
        </div>
        <div class="col-lg-12 col-md-6">
          <div class="item">
            <div class="row">
              <div class="col-lg-3">
                <div class="image">
                  <img src="./assets/img/event-01.jpg" alt="">
                </div>
              </div>
              <div class="col-lg-9">
                <ul>
                  <li>
                    <span class="category">Web Design</span>
                    <h4>UI Best Practices</h4>
                  </li>
                  <li>
                    <span>Date:</span>
                    <h6>16 Feb 2036</h6>
                  </li>
                  <li>
                    <span>Duration:</span>
                    <h6>22 Hours</h6>
                  </li>
                  <li>
                    <span>Price:</span>
                    <h6>$120</h6>
                  </li>
                </ul>
                <a href="#"><i class="fa fa-angle-right"></i></a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-12 col-md-6">
          <div class="item">
            <div class="row">
              <div class="col-lg-3">
                <div class="image">
                  <img src="./assets/img/event-02.jpg" alt="">
                </div>
              </div>
              <div class="col-lg-9">
                <ul>
                  <li>
                    <span class="category">Front End</span>
                    <h4>New Design Trend</h4>
                  </li>
                  <li>
                    <span>Date:</span>
                    <h6>24 Feb 2036</h6>
                  </li>
                  <li>
                    <span>Duration:</span>
                    <h6>30 Hours</h6>
                  </li>
                  <li>
                    <span>Price:</span>
                    <h6>$320</h6>
                  </li>
                </ul>
                <a href="#"><i class="fa fa-angle-right"></i></a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-12 col-md-6">
          <div class="item">
            <div class="row">
              <div class="col-lg-3">
                <div class="image">
                  <img src="./assets/img/event-03.jpg" alt="">
                </div>
              </div>
              <div class="col-lg-9">
                <ul>
                  <li>
                    <span class="category">Full Stack</span>
                    <h4>Web Programming</h4>
                  </li>
                  <li>
                    <span>Date:</span>
                    <h6>12 Mar 2036</h6>
                  </li>
                  <li>
                    <span>Duration:</span>
                    <h6>48 Hours</h6>
                  </li>
                  <li>
                    <span>Price:</span>
                    <h6>$440</h6>
                  </li>
                </ul>
                <a href="#"><i class="fa fa-angle-right"></i></a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div> -->
    <!-- Event Section End -->



    <div class="contact-us section" id="contact">
        <div class="container">
            <div class="row">
                <div class="col-lg-6  align-self-center">
                    <div class="section-heading">
                        {{-- <h6>Register</h6>
                        <h2>Register your account.</h2> --}}
                        <p>Why pay full price when Lensmatic has got your back? Register now and unlock exclusive student discounts on your favorite brands!.</p>
                        <div class="special-offer">
                            <span class="offer">off<br><em>50%</em></span>
                            <h6>Valid: <em>24 Dec, 2025</em></h6>
                            <h4>Special Offer <em>50%</em> OFF!</h4>
                            <a href="#"><i class="fa fa-angle-right"></i></a>
                        </div>
                    </div>
                </div>
                {{-- <div class="col-lg-6">
                  <div class="contact-us-content">
                    <form id="contact-form" action="{{ url('/storeuser') }}" method="POST">
                      @csrf  
                      <div class="row">
                        <div class="col-lg-12">
                          <fieldset>
                            <input type="name" name="first_name" id="name" value="{{ old('first_name') }}" placeholder="Your First Name..." autocomplete="on" required>
                            @error('first_name')
                            <div class="text-danger"  style="margin-top: -28px">{{ $message }}</div>
                        @enderror
                          </fieldset>
                        </div>
                        <div class="col-lg-12">
                          <fieldset>
                            <input type="name" name="last_name" id="last_name"  value="{{ old('last_name') }}" placeholder="Your Last Name..." autocomplete="on" required>
                            @error('first_name')
                            <div class="text-danger"  style="margin-top: -28px">{{ $message }}</div>
                        @enderror
                          </fieldset>
                        </div>
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
                            <select name="institute" id="options" required>
                              <option value="" disabled selected>Select an institute...</option>
                              <option value="NUST" {{ old('institute') == 'NUST' ? 'selected' : '' }}>NUST</option>
                              <option value="IMSciences" {{ old('institute') == 'IMSciences' ? 'selected' : '' }}>IMSciences</option>
                              <option value="UET" {{ old('institute') == 'UET' ? 'selected' : '' }}>UET</option>
                            </select>
                            @error('institute')
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
                </div> --}}
            </div>
        </div>
    </div>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            // Check if there are any validation errors
            const errorElements = document.querySelectorAll('.text-danger');

            if (errorElements.length > 0) {
                // Scroll to the form section if errors are found
                const formSection = document.getElementById('contact-form');
                if (formSection) {
                    formSection.scrollIntoView({
                        behavior: 'smooth'
                    });
                }
            }
        });
    </script>
@endsection
