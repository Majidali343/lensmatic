<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>@yield('title', 'Uni-Perks')</title>
    <meta content="width=device-width, initial-scale=1.0, shrink-to-fit=no" name="viewport" />
    <link rel="icon" href="../assets/img/images/uni-logo.png" type="image/x-icon" />


    <link
      rel="icon"
      href="../assets/img/kaiadmin/favicon.ico"
      type="image/x-icon"
    />

    <!-- Fonts and icons -->
    <script src="../assets/js/plugin/webfont/webfont.min.js"></script>
    <script>
      WebFont.load({
        google: { families: ["Public Sans:300,400,500,600,700"] },
        custom: {
          families: [
            "Font Awesome 5 Solid",
            "Font Awesome 5 Regular",
            "Font Awesome 5 Brands",
            "simple-line-icons",
          ],
          urls: ["../assets/css/fonts.min.css"],
        },
        active: function () {
          sessionStorage.fonts = true;
        },
      });
    </script>


    <!-- CSS Files -->
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css" />
    <link rel="stylesheet" href="../assets/css/plugins.min.css" />
    <link rel="stylesheet" href="../assets/css/kaiadmin.min.css" />
    <link rel="stylesheet" href="../assets/css/fonts.min.css" />
    <!-- CSS Just for demo purpose, don't include it in your project -->
    <link rel="stylesheet" href="../assets/css/demo.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"
        crossorigin="anonymous">
    <style>
        .requests {
            position: absolute;
            text-align: center;
            border-radius: 10px;
            min-width: 17px;
            height: 17px;
            font-size: 10px;
            color: #fff;
            font-weight: 300;
            line-height: 17px;
            top: 15px;
            right: 130px;
            letter-spacing: -1px;
        }

        @media screen and (max-width:992px) {
            .requests {
                top: 2px;
                right: 97px;
            }
        }

        .logout {
            margin: 5px;
        }
       .statusMessage{
          background: #f1f1f1;
    width: 70%;
    margin: auto;
    padding: 5px;
    text-align: center;
    margin-bottom: 12px;
    border-radius: 13px;
    font-size: 16px;
        }

        @media screen and (max-width:760px) {
            .logout {
                margin: 12px;
            }
        }
    </style>
</head>

<body>
    <div class="wrapper">
        <!-- Sidebar -->
        <div class="sidebar" data-background-color="dark">
            <div class="sidebar-logo">
                <!-- Logo Header -->
                <div class="logo-header" data-background-color="dark">
                    <a href="../user/dashboard.php" class="logo">
                        <img src="../assets/img/images/uni-logo.png" alt="navbar brand" class="navbar-brand"
                            height="50" /><span class="ms-3 text-white fw-bold">UniPerks</span>
                    </a>
                    <div class="nav-toggle">
                        <button class="btn btn-toggle toggle-sidebar">
                            <i class="gg-menu-right"></i>
                        </button>
                        <button class="btn btn-toggle sidenav-toggler">
                            <i class="gg-menu-left"></i>
                        </button>
                    </div>
                    <button class="topbar-toggler more">
                        <i class="gg-more-vertical-alt"></i>
                    </button>
                </div>
                <!-- End Logo Header -->
            </div>
            <div class="sidebar-wrapper scrollbar scrollbar-inner">
                <div class="sidebar-content">
                    <ul class="nav nav-secondary">
                        <li class="nav-item active">
                            @if (Auth::user()->role == 'admin')
                            <a href="{{url('/admindashboard')}}">
                                <i class="fas fa-home"></i>
                                <p>Dashboard</p>
                            </a>
                            {{-- <a href="{{url('/adminnewuser')}}">
                                <i class="fas fa-user-plus"></i>
                                <p >User Request  <span
                                    style="background: red; padding: 2px 6px; border-radius: 15px; margin-left:10px">{{ $count = App\Models\User::where('role', 'user')->where('isuserapproved', 'no')->count() }}</span></p>
                            </a> --}}
                            <a href="{{url('/adminuserlist')}}">
                                <i class="fas fa-users"></i>
                                <p>User list</p>
                            </a>
                            <a href="{{url('/assigncashbags')}}">
                                <i class="fas fa-wallet"></i>
                                <p>Assign Cashback</p>
                            </a>
                            <a href="{{url('/givencashbag')}}">
                                <i class="fas fa-wallet"></i>
                                <p>Cashback Given</p>
                            </a>
                            <a href="{{url('/slider')}}">
                                <i class="fas fa-images"></i>
                                <p>Slider</p>
                            </a>
                            @else
                            <a href="{{url('/userdasboard')}}">
                                <i class="fas fa-home"></i>
                                <p>Dashboard</p>
                            </a>
                            <a href="{{url('/myCashbags')}}">
                                <i class="fas fa-wallet"></i>
                                <p>My Cashback</p>
                            </a>
                            @endif
                           
                            
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- End Sidebar -->

        <div class="main-panel">
            <div class="main-header">
                <div class="main-header-logo">
                    <!-- Logo Header -->
                    <div class="logo-header" data-background-color="dark">
                        <a href="../index.html" class="logo">
                            <img src="../assets/img/kaiadmin/logo_light.svg" alt="navbar brand" class="navbar-brand"
                                height="20" />
                        </a>
                        <div class="nav-toggle">
                            <button class="btn btn-toggle toggle-sidebar">
                                <i class="gg-menu-right"></i>
                            </button>
                            <button class="btn btn-toggle sidenav-toggler">
                                <i class="gg-menu-left"></i>
                            </button>
                        </div>
                        <button class="topbar-toggler more">
                            <i class="gg-more-vertical-alt"></i>
                        </button>
                    </div>
                    <!-- End Logo Header -->
                </div>
                <!-- Navbar Header -->
                <nav class="navbar navbar-header navbar-header-transparent navbar-expand-lg border-bottom">
                    <div class="container-fluid">
                        <ul class="navbar-nav topbar-nav ms-md-auto align-items-center">
                            <li class="nav-item topbar-user dropdown hidden-caret">
                                <a class="dropdown-toggle profile-pic" data-bs-toggle="dropdown" href="#"
                                    aria-expanded="false">
                                    <div class="avatar-sm">
                                        @if (Auth::user()->image == '')
                                        <img src="../assets/img/profile.jpg" alt="..."
                                            class="avatar-img rounded-circle" />
                                        @else 
                                        <img src="{{ asset('storage/' . Auth::user()->image) }}" alt="..."
                                        class="avatar-img rounded-circle" />
                                        @endif

                                    </div>
                                    <span class="profile-username">
                                        <span class="op-7">Hi,</span>
                                        <span class="fw-bold">{{Auth::user()->first_name .' '. Auth::user()->last_name}}</span>
                                    </span>
                                </a>
                                <ul class="dropdown-menu dropdown-user animated fadeIn">
                                    <div class="dropdown-user-scroll scrollbar-outer">
                                        <li>
                                            <div class="user-box">
                                                <div class="avatar-lg">
                                                    @if (Auth::user()->image == '')
                                                    <img src="../assets/img/profile.jpg" alt="image profile"
                                                    class="avatar-img rounded" />
                                                    @else
                                                    <img src="{{ asset('storage/' . Auth::user()->image) }}" alt="image profile"
                                                    class="avatar-img rounded" />
                                                    @endif
                                                    

                                                    

                                                </div>
                                                <div class="u-text">
                                                    <h4>{{Auth::user()->first_name .' '. Auth::user()->last_name}}</h4>
                                                    <p class="text-muted">{{Auth::user()->email}}</p>
                                                    <a href="{{url('/profile')}}" class="btn btn-xs btn-secondary btn-sm">View
                                                        Profile</a>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="dropdown-divider"></div>
                                            <a class="dropdown-item" href="{{url('/profile')}}">My Profile</a>
                                            <a class="dropdown-item" href="#">My Balance</a>
                                            <a class="dropdown-item" href="#">Inbox</a>
                                            <div class="dropdown-divider"></div>
                                            <a class="dropdown-item" href="#">Account Setting</a>
                                            <div class="dropdown-divider"></div>
                                            <a class="dropdown-item" href="{{url('/logout')}}">Logout</a>
                                        </li>
                                    </div>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </nav>
                <!-- End Navbar -->
            </div>

            @yield('content')

            @include('includes.footer')

           
</body>

<!-- Bootstrap JS and Popper.js (for tooltips and other JS components) -->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
   <!--   Core JS Files   -->
   <script src="../assets/js/core/jquery-3.7.1.min.js"></script>
   <script src="../assets/js/core/popper.min.js"></script>
   <script src="../assets/js/core/bootstrap.min.js"></script>

   <!-- jQuery Scrollbar -->
   <script src="../assets/js/plugin/jquery-scrollbar/jquery.scrollbar.min.js"></script>
   <!-- Datatables -->
   <script src="../assets/js/plugin/datatables/datatables.min.js"></script>
   <!-- Kaiadmin JS -->
   <script src="../assets/js/kaiadmin.min.js"></script>
   <!-- Kaiadmin DEMO methods, don't include it in your project! -->
   <script src="../assets/js/setting-demo2.js"></script>
   <script>
     $(document).ready(function () {
       $("#basic-datatables").DataTable({});
       // User Request
       $("#add-row").DataTable({
         pageLength: 5,
       });
     });
   </script>
 </body>
</html>