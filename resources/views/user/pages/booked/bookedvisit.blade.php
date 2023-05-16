<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>OMHMS</title>

    <link rel="stylesheet" href="{{ asset('assets/css/userprof.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/myprof.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/cssbooked.css') }}">


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
            <img src="{{ asset('assets/omhms.png') }}" class="mobile_profile_image" alt="">
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
    <div>
        <div class="content">
            <div class="card">
                    <div class="card-header custom-header">
                        @if (session('success'))
                            <div class="alert alert-success" role="alert">
                                {{ session('success') }}
                            </div>
                        @endif
                        @if (session('failed'))
                            <div class="alert alert-danger" role="alert">
                                {{ session('failed') }}
                            </div>
                        @endif
                    </div>
                    @if ($visit->count() === 0)
                        <p>You haven't done any booking for visitation</p>
                    @else
                        @foreach ($visit as $visits)
                            <form>
                                <div class="container bootstrap snippets bootdeys">
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <div class="panel panel-default invoice" id="invoice">
                                                <div class="panel-body">
                                                    <div class="invoice-ribbon">
                                                        <div class="ribbon-inner">
                                                            @if ($visits->visits_status == 'PENDING')
                                                                <p> <span
                                                                        style="color: black; font-weight:bold">{{ $visits->visits_status }}</span>
                                                                </p>
                                                            @elseif ($visits->visits_status == 'CANCELLED')
                                                                <p><span>{{ $visits->visits_status }}</span></p>
                                                            @else
                                                                <p><span
                                                                        style="color: green">{{ $visits->visits_status }}</span>
                                                                </p>
                                                            @endif
                                                        </div>
                                                    </div>
                                                    <div class="row">

                                                        <div class="col-sm-6 top-left">
                                                            {{-- <i class="fa fa-rocket"></i> --}}
                                                            <img src="{{ asset('omhms.png') }}" alt=""
                                                                style="width: 90px; height: 70px"></img>
                                                        </div>

                                                        <div class="col-sm-6 top-right">
                                                            <h3 class="marginright" style="margin-top: 10px">RESERVATION
                                                                OVERVIEW</h3>
                                                            <span class="marginright">{{ date('l, F j, Y') }}</span>
                                                        </div>

                                                    </div>
                                                    <hr>
                                                    <div class="row">

                                                        {{-- <div class="col from"> --}}
                                                        <p class="lead marginbottom"><strong>From : Oriental Mindoro
                                                                Heritage Museum</strong></p>

                                                        <div class="post" style="line-height: 10px">
                                                            @if ($visits->gender == 'FEMALE')
                                                                <p>Hi, Ms. {{ $visits->visits_lname }},
                                                                    {{ $visits->visits_fname }}
                                                                    {{ $visits->visits_mname }}.</p>
                                                            @else
                                                                <p>Hi, Mr. {{ $visits->visits_lname }},
                                                                    {{ $visits->visits_fname }}
                                                                    {{ $visits->visits_mname }}.</p>
                                                            @endif
                                                            <p>This is your Reservation for Visitation</p>
                                                            <p>You are from {{ $visits->visits_street }},
                                                                {{ $visits->visits_brgy }},
                                                                {{ $visits->visits_municipality }},
                                                                {{ $visits->visits_province }},
                                                                {{ $visits->visits_country }}, with the zipcode
                                                                {{ $visits->visits_zipcode }}.</p>
                                                            <p>Your selected date is
                                                                {{ date('F d, Y', strtotime($visits->visits_intended_date)) }}
                                                                at {{ $visits->visits_time }}.</p>
                                                            @if ($visits->visits_name_of_institution != null)
                                                                <p>You are from
                                                                    {{ $visits->visits_name_of_institution }}
                                                                    Institution and you're with your</p>
                                                            @endif
                                                            @if ($visits->visits_no_of_visitors != null)
                                                                <p>{{ $visits->visits_no_of_visitors }} members</p>
                                                            @endif

                                                            {{-- {!! QrCode::size(300)->backgroundColor(255,90,0)->generate($QRcode) !!} --}}



                                                            {{-- <p> Due to:</p> --}}

                                                            <p>We will send you an email notification for the status of
                                                                your reservation. If you have a clarification with your
                                                                booking information, please contact us at our contact
                                                                number or email account</p>
                                                            {{-- <p>Contact Number: 09151949345</p> --}}
                                                            {{-- <p>Email: omhms@gmail.com</p> --}}
                                                        </div>
                                                        {{-- <form action="{{url('user/cancel-visit-form')}}">
                                                        @csrf
                                                        <button type="submit" class="btn btn-danger">cancel</button>
                                                    </form> --}}
                        @endforeach
                    @endif
                </div>

                <hr>
                <div class="row">
                    <div class="col-xs-6 margintop">
                        <p class="lead marginbottom" style="margin-left:450px">
                            <strong>THANK YOU!</strong>
                        </p>

                        <button class="btn btn-success" id="invoice-print"
                            style="margin-left:900px; margin-bottom:20px"><i class="fa fa-history"></i>View
                            History</button>
                        {{-- <button class="btn btn-danger"><i class="fa fa-envelope-o" style="margin-left:250px"></i> Mail Invoice</button> --}}
                    </div>
                </div>

            </div>
        </div>
    </div>
    </div>
    </div>
    </form>
    </div>
    </div>
</div>
</body>
</html>
