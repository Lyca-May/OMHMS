
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>OMHMS</title>

    <link rel="stylesheet" href="{{asset("assets/css/userprof.css")}}">
    <link rel="stylesheet" href="{{asset("assets/css/myprof.css")}}">


    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>




</head>
<body>
    <input type="checkbox" id="check">
    <!--header area start-->
    <header>
        <label for="check">
            <i class="fas fa-bars" id="sidebar_btn"></i>
        </label>
        <div class="left_area">
            <h3>Oriental Mindoro<span> Heritage Museum</span></h3>
        </div>
        <div class="right_area">
            <a href="{{url('logout')}}" class="logout_btn">Logout</a>
        </div>
    </header>
    <!--header area end-->
    <!--mobile navigation bar start-->
    <div class="mobile_nav">
        <div class="nav_bar">
            <img src="{{asset("assets/omhms.png")}}" class="mobile_profile_image" alt="">
            <i class="fa fa-bars nav_btn"></i>
        </div>
        <div class="mobile_nav_items">
            <a href="#"><i class="fas fa-desktop"></i><span>Home</span></a>
            <a href="#"><i class="fas fa-cogs"></i><span>My Profile</span></a>
            <a href="#"><i class="fas fa-table"></i><span>Tables</span></a>
            <a href="#"><i class="fas fa-th"></i><span>Forms</span></a>
            <a href="#"><i class="fas fa-info-circle"></i><span>About</span></a>
            <a href="#"><i class="fas fa-sliders-h"></i><span>Settings</span></a>
        </div>
    </div>
    <!--mobile navigation bar end-->
    <!--sidebar start-->
    <div class="sidebar">

        <a href="{{url('user/landlog')}}"><i class="fas fa-desktop"></i><span>Home</span></a>
        <a href="{{url('myprofile')}}"><i class="fas fa-cogs"></i><span>My Profile</span></a>
        <a href="{{url('user/bookedvisit')}}"><i class="fas fa-table"></i><span>My Visit Bookings</span></a>
        <a href="{{url('user/rentedhall')}}"><i class="fas fa-th"></i><span>My Rent Bookings</span></a>
        <a href="#"><i class="fas fa-info-circle"></i><span>Booking History</span></a>
        <a href="#"><i class="fas fa-sliders-h"></i><span>Settings</span></a>
    </div>
    <!--sidebar end-->

    <div class="content">
        <div class="card">

@foreach ($users as $user)
    <div class="container emp-profile">
        <form method="post">
            <div class="row">
                <div class="col-md-4">
                    <div class="profile-img">
                        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS52y5aInsxSm31CvHOFHWujqUx_wWTS9iM6s7BAm21oEN_RiGoog" alt=""/>
                        {{-- @if ($user->avatar) --}}
                        {{-- <img src="{{ asset('avatars/' .$user->avatar) }}"
                        class="avatar-image" /> --}}
                        {{-- @endif --}}
                        <div class="file btn btn-lg btn-primary">
                            Change Photo
                            <input type="file" name="avatar">
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="profile-head">
                                <h5>
                                    {{ $user->user_fname }} {{ $user->user_lname }}
                                </h5>
                                <h6>
                                    {{-- Web Developer and Designer --}}
                                </h6>
                                {{-- <p class="proile-rating">RANKINGS : <span>8/10</span></p> --}}
                        <ul class="nav nav-tabs" id="myTab" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">About</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Timeline</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-2">
                    <input type="submit" class="profile-edit-btn" name="btnAddMore" value="Edit Profile"/>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    {{-- <div class="profile-work">
                        <p>WORK LINK</p>
                        <a href="">Website Link</a><br/>
                        <a href="">Bootsnipp Profile</a><br/>
                        <a href="">Bootply Profile</a>
                        <p>SKILLS</p>
                        <a href="">Web Designer</a><br/>
                        <a href="">Web Developer</a><br/>
                        <a href="">WordPress</a><br/>
                        <a href="">WooCommerce</a><br/>
                        <a href="">PHP, .Net</a><br/>
                    </div> --}}
                </div>
                <div class="col-md-8">
                    <div class="tab-content profile-tab" id="myTabContent">
                        <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <label>Name</label>
                                        </div>
                                        <div class="col-md-6">
                                            <p>{{ $user->user_lname }}, {{ $user->user_fname }} {{ $user->user_mname }}.</p>
                                        </div>
                                    </div>
                                    {{-- <div class="row">
                                        <div class="col-md-6">
                                            <label>Name</label>
                                        </div>
                                        <div class="col-md-6">
                                            <p>Kshiti Ghelani</p>
                                        </div>
                                    </div> --}}
                                    <div class="row">
                                        <div class="col-md-6">
                                            <label>Email</label>
                                        </div>
                                        <div class="col-md-6">
                                            <p>{{ $user->user_email }}</p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <label>Phone</label>
                                        </div>
                                        <div class="col-md-6">
                                            <p>{{ $user->user_phonenum }}</p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <label>Address</label>
                                        </div>
                                        <div class="col-md-6">
                                            <p>{{ $user->user_street }}, {{ $user->user_barangay }}, {{ $user->user_municipality }}, {{ $user->user_province }}</p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <label>Zipcode</label>
                                        </div>
                                        <div class="col-md-6">
                                            <p> {{ $user->user_zipcode }}</p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <label>Birthdate</label>
                                        </div>
                                        <div class="col-md-6">
                                            <p>{{ $user->birthdate }}</p>
                                        </div>
                                        <div class="col-md-6">
                                            <label>Gender</label>
                                        </div>
                                        <div class="col-md-6">
                                            <p>{{ $user->gender }}</p>
                                        </div>
                                    </div>
                        </div>
                        <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <label>Experience</label>
                                        </div>
                                        <div class="col-md-6">
                                            <p>Expert</p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <label>Hourly Rate</label>
                                        </div>
                                        <div class="col-md-6">
                                            <p>10$/hr</p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <label>Total Projects</label>
                                        </div>
                                        <div class="col-md-6">
                                            <p>230</p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <label>English Level</label>
                                        </div>
                                        <div class="col-md-6">
                                            <p>Expert</p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <label>Availability</label>
                                        </div>
                                        <div class="col-md-6">
                                            <p>6 months</p>
                                        </div>
                                    </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <label>Your Bio</label><br/>
                                    <p>Your detail description</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>

    </div>
@endforeach
        </div>
    </div>
</body>
</html>
