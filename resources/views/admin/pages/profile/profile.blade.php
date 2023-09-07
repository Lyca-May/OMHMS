<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
    <link rel="icon" href="{{ asset('omhms.png') }}" type="image/png">
    <meta name="description" content=""/>
    <meta name="author" content=""/>
    <title>OMHMS</title>
  <!-- loader-->
  <link href="{{asset("assets/css/cssadmin/pace.min.css")}}" rel="stylesheet"/>
  <script src="{{asset("assets/js/jsadmin/pace.min.js")}}"></script>
  <!--favicon-->
  <link rel="icon" href="{{asset("assets/images/favicon.ico")}}" type="image/x-icon">
  <!-- Vector CSS -->
  <link href="{{asset("assets/plugins/vectormap/jquery-jvectormap-2.0.2.css")}}" rel="stylesheet"/>
  <!-- simplebar CSS-->
  <link href="{{asset("assets/plugins/simplebar/css/simplebar.css")}}" rel="stylesheet"/>
  <!-- Bootstrap core CSS-->
  <link href="{{asset("assets/css/cssadmin/bootstrap.min.css")}}" rel="stylesheet"/>
  <!-- animate CSS-->
  <link href="{{asset("assets/css/cssadmin/animate.css")}}" rel="stylesheet" type="text/css"/>
  <!-- Icons CSS-->
  <link href="{{asset("assets/css/cssadmin/icons.css")}}" rel="stylesheet" type="text/css"/>
  <!-- Sidebar CSS-->
  <link href="{{asset("assets/css/cssadmin/sidebar-menu.css")}}" rel="stylesheet"/>
  <!-- Custom Style-->
  <link href="{{asset("assets/css/cssadmin/app-style.css")}}" rel="stylesheet"/>

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/material-design-iconic-font/2.2.0/css/material-design-iconic-font.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
  {{-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"> --}}


</head>

<body class="bg-theme bg-theme1">

    <!-- Start wrapper-->
     <div id="wrapper">

      <!--Start sidebar-wrapper-->
       <div id="sidebar-wrapper" data-simplebar="" data-simplebar-auto-hide="true">
         <div class="brand-logo">
          <a href="index.html">
           <img src="{{asset("omhms.png")}}" class="logo-icon" alt="logo icon">
           <h5 class="logo-text">OMHMS</h5>
         </a>
       </div>
       <ul class="sidebar-menu do-nicescrol">
          <li class="sidebar-header">MAIN NAVIGATION</li>
          <li>
            <a href="{{asset("admin/home")}}">
              <i class="zmdi zmdi-view-dashboard"></i> <span>Dashboard</span>
            </a>
          </li>


          <li>
            <a href="#" id="tablesLink">
              <i class="zmdi zmdi-book"></i> <span>Bookings</span>
            </a>
            <ul id="tablesDrawer" class="drawer-items">
              <li><a class="zmdi zmdi-building" href="{{asset("admin/visit")}}">Museum Visit</a></li>
              <li><a href="{{url('admin/function')}}">Function Hall</a></li>

              <!-- Add more link items as needed -->
            </ul>
          </li>

          <li>
            <a href="{{asset("admin/inventory")}}" id="inventoryLink">
              <i class="zmdi zmdi-archive"></i> <span>Inventory</span>
            </a>
            <ul id="inventoryDrawer" class="drawer-items">
              <li><a href="">Items & Artefacts</a></li>
              <li><a href="">Souvenirs</a></li>
              <!-- Add more link items as needed -->
            </ul>
          </li>

          <li>
            <a href="{{ url('admin/announcement') }}">
              <i class="zmdi zmdi-info-outline"></i> <span>Announcements</span>
            </a>
          </li>


          <li>
            <a href="forms.html">
              <i class="zmdi zmdi-file-text"></i> <span>Attendance</span>
            </a>
          </li>

          <li>
            <a href="{{url("admin/calendar")}}">
              <i class="zmdi zmdi-calendar-check"></i> <span>Calendar</span>
              {{-- <small class="badge float-right badge-light">New</small> --}}
            </a>
          </li>

{{--

          <li class="sidebar-header">LABELS</li>
          <li>
            <a href="{{asset("admin/profile")}}">
              <i class="zmdi zmdi-face"></i> <span>Profile</span>
            </a>
          </li> --}}


        </ul>

       </div>
       <!--End sidebar-wrapper-->

<!--Start topbar header-->
<header class="topbar-nav">
 <nav class="navbar navbar-expand fixed-top">
  <ul class="navbar-nav mr-auto align-items-center">
    <li class="nav-item">
      <a class="nav-link toggle-menu" href="javascript:void();">
       {{-- <i class="icon-menu menu-icon"></i> --}}
     </a>
    </li>
    {{-- <li class="nav-item">
      <form class="search-bar">
        <input type="text" class="form-control" placeholder="Enter keywords">
         <a href="javascript:void();"><i class="icon-magnifier"></i></a>
      </form>
    </li> --}}
  </ul>

  <ul class="navbar-nav align-items-center right-nav-link">
    <li class="nav-item dropdown-lg">
      <a class="nav-link dropdown-toggle dropdown-toggle-nocaret waves-effect" data-toggle="dropdown" href="javascript:void();">
      <i class="fa fa-envelope-open-o"></i></a>
    </li>
    <li class="nav-item dropdown-lg">
      <a class="nav-link dropdown-toggle dropdown-toggle-nocaret waves-effect" data-toggle="dropdown" href="javascript:void();">
      <i class="fa fa-bell-o"></i></a>
    </li>
    <li class="nav-item language">
      <a class="nav-link dropdown-toggle dropdown-toggle-nocaret waves-effect" data-toggle="dropdown" href="javascript:void();"><i class="fa fa-flag"></i></a>
      <ul class="dropdown-menu dropdown-menu-right">
          <li class="dropdown-item"> <i class="flag-icon flag-icon-gb mr-2"></i> English</li>
          <li class="dropdown-item"> <i class="flag-icon flag-icon-fr mr-2"></i> French</li>
          <li class="dropdown-item"> <i class="flag-icon flag-icon-cn mr-2"></i> Chinese</li>
          <li class="dropdown-item"> <i class="flag-icon flag-icon-de mr-2"></i> German</li>
        </ul>
    </li>
    @foreach ($users as $user)
    <li class="nav-item">
        <a class="nav-link dropdown-toggle dropdown-toggle-nocaret" data-toggle="dropdown"
            href="#">
            <span class="user-profile"><img src="{{ asset('avatar/' . $user->avatar) }}"
                    class="img-circle" alt="user avatar"></span>
        </a>
        <ul class="dropdown-menu dropdown-menu-right">
            <li class="dropdown-item user-details">
                <a href="javaScript:void();">
                        <div class="media">

                            @if ($user->avatar)
                                <div class="avatar"><img class="align-self-start mr-3"
                                        src="{{ asset('avatar/' . $user->avatar) }}"
                                        alt="user avatar"></div>
                                {{-- <img src="{{ asset('avatar/' .$user->avatar) }}" alt="{{$user->user_fname}}" --}}
                                {{-- class="rounded-circle me-2" style="width:100px; height:100px; object-fit:cover" /> --}}
                            @endif

                            <div class="media-body">
                                <h6 class="mt-2 user-title">Hi, {{ session('Admin')['user_fname'] }}
                                </h6>
                                <p class="user-subtitle">{{ session('Admin')['user_email'] }}</p>
                            </div>
                        </div>
                </a>
            </li>
            <li class="dropdown-divider"></li>
            <li class="dropdown-item"><i class="zmdi zmdi-account"></i><a
                    href="{{ asset('admin/profile') }}"> Account</li></a>
            <li class="dropdown-divider"></li>
            <li class="dropdown-item"><i class="zmdi zmdi-power"></i><a
                    href="{{ asset('logout') }}">Logout</li></a>
        </ul>
    </li>
    @endforeach
  </ul>
</nav>
</header>
<!--End topbar header-->

<div class="clearfix"></div>

  <div class="content-wrapper">
    @foreach ($users as $user)
    <div class="container-fluid">

      <div class="row mt-3">
        <div class="col-lg-4">
           <div class="card profile-card-2">
            {{-- <div class="card-img-block">
                <img class="img-fluid" src="https://via.placeholder.com/800x500" alt="Card image cap">
            </div> --}}
            <div class="card-body pt-5">
                @if ($user->avatar)
                <img src="{{ asset('avatar/' .$user->avatar) }}" alt="{{$user->user_fname}}"
                class="rounded-circle me-2" style="width:100px; height:100px; object-fit:cover" />
                @endif
                {{-- <img src="https://via.placeholder.com/110x110" alt="profile-image" class="profile"> --}}
                <h5 class="card-title">{{session('Admin')['user_fname']}}'s Profile</h5>
                <p class="card-text">OMHMS Admin</p>
                <div class="icon-block">
                  <a href="javascript:void();"><i class="fa fa-facebook bg-facebook text-white"></i></a>
				  <a href="javascript:void();"> <i class="fa fa-twitter bg-twitter text-white"></i></a>
				  <a href="javascript:void();"> <i class="fa fa-google-plus bg-google-plus text-white"></i></a>
                </div>
            </div>
        </div>

        </div>

        <div class="col-lg-8">
           <div class="card">
            <div class="card-body">
            <ul class="nav nav-tabs nav-tabs-primary top-icon nav-justified">
                <li class="nav-item">
                    <a href="javascript:void();" data-target="#profile" data-toggle="pill" class="nav-link active"><i class="zmdi zmdi-account"></i> <span class="hidden-xs">Profile</span></a>
                </li>
                {{-- <li class="nav-item">
                    <a href="javascript:void();" data-target="#messages" data-toggle="pill" class="nav-link"><i class="icon-envelope-open"></i> <span class="hidden-xs">Messages</span></a>
                </li> --}}
                <li class="nav-item">
                    <a href="javascript:void();" data-target="#edit" data-toggle="pill" class="nav-link"><i class="zmdi zmdi-edit"></i> <span class="hidden-xs">Edit</span></a>
                </li>
            </ul>
            <div class="tab-content p-3">
                <div class="tab-pane active" id="profile">
                    <h5 class="mb-3">User Profile</h5>
                    <div class="row">
                        <div class="col-md-6">

                        </div>
                        {{-- @foreach ($users as $user) --}}
                        <div class="col-md-12">
                            <form>
                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label form-control-label">Last name: </label>
                                    <div class="col-lg-9">
                                        <input class="form-control" type="text" value="{{ $user->user_lname }}">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label form-control-label">First name: </label>
                                    <div class="col-lg-9">
                                        <input class="form-control"  value="{{ $user->user_fname }}">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label form-control-label">Middle name: </label>
                                    <div class="col-lg-9">
                                        <input class="form-control" type="text" value="{{ $user->user_mname }}">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label form-control-label">Email</label>
                                    <div class="col-lg-9">
                                        <input class="form-control" type="email" value="{{ $user->user_email }}">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label form-control-label">Address</label>
                                    <div class="col-lg-9">
                                        <input class="form-control" value="{{ $user->user_country }}, {{ $user->user_province }}, {{ $user->user_municipality }}, {{ $user->user_barangay}}, {{ $user->user_street }}">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label form-control-label">Zipcode</label>
                                    <div class="col-lg-9">
                                        <input class="form-control" type="text" value="{{ $user->user_zipcode }}" >
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label form-control-label">Birthdate</label>
                                    <div class="col-lg-6">
                                        <input class="form-control" type="text" value="{{ $user->birthdate }}">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label form-control-label">Gender</label>
                                    <div class="col-lg-3">
                                        <input class="form-control" type="text" value="{{ $user->gender }}">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label form-control-label">Phone Number</label>
                                    <div class="col-lg-3">
                                        <input class="form-control" type="text" value="{{ $user->user_phonenum}}">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label form-control-label">Username</label>
                                    <div class="col-lg-3">
                                        <input class="form-control" type="text" value="{{ $user->role }}">
                                    </div>
                                </div>
                                {{-- <div class="form-group row">
                                    <label class="col-lg-3 col-form-label form-control-label">Password</label>
                                    <div class="col-lg-9">
                                        {{-- <input class="form-control" type="password" value="11111122333"> --}}
                                    {{-- </div> --}}
                                {{-- </div> --}}

                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label form-control-label"></label>
                                    <div class="col-lg-9">
                                        {{-- <input type="reset" class="btn btn-secondary" value="Cancel">
                                        <input type="button" class="btn btn-primary" value="Save Changes"> --}}
                                    </div>
                                </div>
                            </form>
                        </div>
                        {{-- @endforeach --}}
                    </div>
                    <!--/row-->
                </div>


                {{-- EDIT PROFILE--}}
                <div class="tab-pane" id="edit">
                    <form action="/update-profile" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group row">
                            <label class="col-lg-3 col-form-label form-control-label">First name</label>
                            <div class="col-lg-9">
                                <input type="text" class="form-control" name="user_fname" value="{{session('Admin') ['user_fname']}}" placeholder="First Name">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-lg-3 col-form-label form-control-label">Middle name</label>
                            <div class="col-lg-9">
                                <input type="text" class="form-control" name="user_mname" value="{{session('Admin') ['user_mname']}}" placeholder="Middle Name">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-lg-3 col-form-label form-control-label">Last name</label>
                            <div class="col-lg-9">
                                <input type="text" class="form-control" name="user_lname" value="{{session('Admin') ['user_lname']}}" placeholder="Last Name">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-lg-3 col-form-label form-control-label">Email</label>
                            <div class="col-lg-9">
                                <input type="email" class="form-control" name="user_email" value="{{session('Admin') ['user_email']}}" placeholder="First Name">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-lg-3 col-form-label form-control-label">Change profile</label>
                            <div class="col-lg-9">
                                <input class="form-control" type="file" name="avatar">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-lg-3 col-form-label form-control-label">Address</label>
                            <div class="col-lg-3">
                                <input class="form-control" type="text" name="user_country" value="{{session('Admin') ['user_country']}}" placeholder="Country">
                            </div>
                            <div class="col-lg-3">
                                <input class="form-control" type="text" name="user_province" value="{{session('Admin') ['user_province']}}" placeholder="Province">
                            </div>
                            <div class="col-lg-3">
                                <input class="form-control" type="text" name="user_municipality" value="{{session('Admin') ['user_municipality']}}" placeholder="Municipality">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-lg-3 col-form-label form-control-label"></label>
                            <div class="col-lg-3">
                                <input class="form-control" type="text" name="user_barangay" value="{{session('Admin') ['user_barangay']}}" placeholder="Barangay">
                            </div>
                            <div class="col-lg-3">
                                <input class="form-control" type="text" name="user_street" value="{{session('Admin') ['user_street']}}" placeholder="Street">
                            </div>
                            <div class="col-lg-3">
                                <input class="form-control" type="text" name="user_zipcode" value="{{session('Admin') ['user_zipcode']}}" placeholder="Zipcode">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-lg-3 col-form-label form-control-label">Personal Information</label>
                            <div class="col-lg-3">
                                <input class="form-control" type="text" name="user_phonenum" value="{{session('Admin') ['user_phonenum']}}" placeholder="Phone Number">
                            </div>
                            <div class="col-lg-3">
                                <input class="form-control" type="text" name="gender" value="{{session('Admin') ['gender']}}" placeholder="Gender">
                            </div>
                            <div class="col-lg-3">
                                <input class="form-control" type="text" name="birthdate" value="{{session('Admin') ['birthdate']}}" placeholder="Birthdate">
                            </div>
                        </div>

                        {{-- <div class="form-group row">
                            <label class="col-lg-3 col-form-label form-control-label">Username</label>
                            <div class="col-lg-9">
                                <input class="form-control" name="role" value="{{session('Admin') ['role']}}">
                            </div>
                        </div> --}}
                        <div class="form-group row">
                            <label class="col-lg-3 col-form-label form-control-label"></label>
                            <div class="col-lg-9">
                                <input type="reset" class="btn btn-secondary" value="Cancel">
                                <button type="submit" class="btn btn-primary">Save Changes</button>
                            </div>
                        </div>
                    </form>

                    <form action="">
                        <div class="form-group row">
                            <label class="col-lg-3 col-form-label form-control-label">Password</label>
                            <div class="col-lg-9">
                                <input class="form-control" type="password" value="11111122333">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-lg-3 col-form-label form-control-label">Confirm password</label>
                            <div class="col-lg-9">
                                <input class="form-control" type="password" value="11111122333">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-lg-3 col-form-label form-control-label"></label>
                            <div class="col-lg-9">
                                <input type="reset" class="btn btn-secondary" value="Cancel">
                                <input type="button" class="btn btn-primary" value="Save New Password">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
      </div>
      </div>

    </div>
    @endforeach



	<!--start overlay-->
		  <div class="overlay toggle-menu"></div>
		<!--end overlay-->

    </div>
    <!-- End container-fluid-->
   </div><!--End content-wrapper-->
   <!--Start Back To Top Button-->
    <a href="javaScript:void();" class="back-to-top"><i class="fa fa-angle-double-up"></i> </a>
    <!--End Back To Top Button-->

	<!--Start footer-->
	<footer class="footer">
      <div class="container">
        <div class="text-center">
          Copyright © 2018 Dashtreme Admin
        </div>
      </div>
    </footer>
	<!--End footer-->

	<!--start color switcher-->
   <div class="right-sidebar">
    <div class="switcher-icon">
      <i class="zmdi zmdi-settings zmdi-hc-spin"></i>
    </div>
    <div class="right-sidebar-content">

      <p class="mb-0">Gaussion Texture</p>
      <hr>

      <ul class="switcher">
        <li id="theme3"></li>
        <li id="theme2"></li>
        <li id="theme1"></li>
        <li id="theme4"></li>
        <li id="theme5"></li>
        <li id="theme6"></li>
      </ul>

      <p class="mb-0">Gradient Background</p>
      <hr>

      <ul class="switcher">
        <li id="theme7"></li>
        <li id="theme8"></li>
        <li id="theme9"></li>
        <li id="theme10"></li>
        <li id="theme11"></li>
        <li id="theme12"></li>
		<li id="theme13"></li>
        <li id="theme14"></li>
        <li id="theme15"></li>
      </ul>

     </div>
   </div>
  <!--end color switcher-->

  </div><!--End wrapper-->


  <!-- Bootstrap core JavaScript-->
  <script src="{{asset("assets/js/jsadmin/jquery.min.js")}}"></script>
  <script src="{{asset("assets/js/jsadmin/popper.min.js")}}"></script>
  <script src="{{asset("assets/js/jsadmin/bootstrap.min.js")}}"></script>

 <!-- simplebar js -->
  <script src="{{asset("assets/plugins/simplebar/js/simplebar.js")}}"></script>
  <!-- sidebar-menu js -->
  <script src="{{asset("assets/js/jsadmin/sidebar-menu.js")}}"></script>
  <!-- loader scripts -->
  <script src="{{asset("assets/js/jsadmin/jquery.loading-indicator.js")}}"></script>
  <!-- Custom scripts -->
  <script src="{{asset("assets/js/jsadmin/app-script.js")}}"></script>
  <!-- Chart js -->

  <script src="{{asset("assets/plugins/Chart.js/Chart.min.js")}}"></script>

  <!-- Index js -->
  <script src="{{asset("assets/js/jsadmin/index.js")}}"></script>

</body>
</html>
