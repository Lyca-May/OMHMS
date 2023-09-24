<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <link rel="icon" href="{{ asset('omhms.png') }}" type="image/png">
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>OMHMS</title>
    <link href="https://fonts.gstatic.com" rel="preconnect">
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">


    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.5.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@2.10.2/dist/umd/popper.min.js"></script>

    <!-- Bootstrap core CSS-->
    <link href="{{ asset('assets/css/cssadmin/bootstrap.min.css') }}" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@10.16.6/dist/sweetalert2.min.css">

    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/material-design-iconic-font/2.2.0/css/material-design-iconic-font.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

    <!-- Vendor CSS Files -->
    <link href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/quill/quill.snow.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/quill/quill.bubble.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/remixicon/remixicon.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/simple-datatables/style.css') }}" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="{{ asset('assets/css/admin/style.css') }}" rel="stylesheet">


</head>

<body>

    <!--Start sidebar-wrapper-->
    @include('admin.pages.sidebar')
    <!--End sidebar-wrapper-->

    <!--Start topbar header-->
    @include('admin.pages.navbar')
    <!--End topbar header-->

    <main id="main" class="main">
        <div class="pagetitle">
            <h1>Profile</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                    <li class="breadcrumb-item">Users</li>
                    <li class="breadcrumb-item active">Profile</li>
                </ol>
            </nav>
        </div><!-- End Page Title -->
        @foreach ($users as $user)
            <section class="section profile">
                <div class="row">
                    <div class="col-xl-4">
                        <div class="card">
                            <div class="card-body profile-card pt-4 d-flex flex-column align-items-center">

                                <img src="{{ asset('avatar/' . $user->avatar) }}" alt="Profile"
                                    class="rounded-circle">
                                <h2 style="text-align: center">{{ $user->user_fname }} {{ $user->user_mname }}
                                    {{ $user->user_lname }} </h2>
                                <h3>{{ $user->user_email }}</h3>
                                <div class="social-links mt-2">
                                    <a href="https://web.facebook.com/darlenefajarito" class="facebook"><i class="bi bi-facebook"></i></a>
                                    <a href="https://www.instagram.com/_anghelaaa_/" class="instagram"><i class="bi bi-instagram"></i></a>
                                    <a href="https://github.com/DaraFajarito" class="github"><i class="bi bi-github"></i></a>
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="col-xl-8">

                        <div class="card">
                            <div class="card-body pt-3">
                                <!-- Bordered Tabs -->
                                <ul class="nav nav-tabs nav-tabs-bordered">

                                    <li class="nav-item">
                                        <button class="nav-link active" data-bs-toggle="tab"
                                            data-bs-target="#profile-overview">Overview</button>
                                    </li>

                                    <li class="nav-item">
                                        <button class="nav-link" data-bs-toggle="tab" data-bs-target="#profile-edit"
                                            href="javascript:void();">Edit
                                            Profile</button>
                                    </li>

                                    <li class="nav-item">
                                        <button class="nav-link" data-bs-toggle="tab"
                                            data-bs-target="#profile-change-password">Change Password</button>
                                    </li>

                                </ul>
                                <div class="tab-content pt-2">

                                    <div class="tab-pane fade show active profile-overview" id="profile-overview">
                                        {{-- <h5 class="card-title">About</h5>
                                        <p class="small fst-italic">Sunt est soluta temporibus accusantium neque nam maiores
                                            cumque temporibus. Tempora libero non est unde veniam est qui dolor. Ut sunt
                                            iure rerum quae quisquam autem eveniet perspiciatis odit. Fuga sequi sed ea
                                            saepe at unde.</p> --}}

                                        <h5 class="card-title">Profile Details</h5>

                                        <div class="row">
                                            <div class="col-lg-3 col-md-4 label ">Full Name</div>
                                            <div class="col-lg-9 col-md-8">{{ $user->user_fname }}
                                                {{ $user->user_mname }} {{ $user->user_lname }}</div>
                                        </div>

                                        <div class="row">
                                            <div class="col-lg-3 col-md-4 label">Username</div>
                                            <div class="col-lg-9 col-md-8">{{ $user->role }}</div>
                                        </div>

                                        <div class="row">
                                            <div class="col-lg-3 col-md-4 label">Email Address</div>
                                            <div class="col-lg-9 col-md-8">{{ $user->user_email }}</div>
                                        </div>

                                        <div class="row">
                                            <div class="col-lg-3 col-md-4 label">Address</div>
                                            <div class="col-lg-9 col-md-8">{{ $user->user_street }},
                                                {{ $user->user_barangay }}, {{ $user->user_municipality }},
                                                {{ $user->user_province }}, {{ $user->user_country }} </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-lg-3 col-md-4 label">Birthdate</div>
                                            <div class="col-lg-9 col-md-8">{{ $user->birthdate }}</div>
                                        </div>

                                        <div class="row">
                                            <div class="col-lg-3 col-md-4 label">Zipcode</div>
                                            <div class="col-lg-9 col-md-8">{{ $user->user_zipcode }}</div>
                                        </div>

                                        <div class="row">
                                            <div class="col-lg-3 col-md-4 label">Gender</div>
                                            <div class="col-lg-9 col-md-8">{{ $user->gender }}</div>
                                        </div>

                                        <div class="row">
                                            <div class="col-lg-3 col-md-4 label">Phone Number</div>
                                            <div class="col-lg-9 col-md-8">{{ $user->user_phonenum }}</div>
                                        </div>


                                    </div>

                                    <div class="tab-pane fade profile-edit pt-3" id="profile-edit">

                                        <!-- Profile Edit Form -->
                                        <form action="/update-profile" method="post" enctype="multipart/form-data">
                                            @csrf
                                            <div class="row mb-3">
                                                <label for="profileImage"
                                                    class="col-md-4 col-lg-3 col-form-label">Profile
                                                    Image</label>
                                                <div class="col-md-8 col-lg-9">
                                                    <img src={{ asset('avatar/' . $user->avatar) }} alt="Profile">
                                                    <div class="pt-2">
                                                        <input type="file" id="fileInput" style="display: none;"
                                                            name="avatar">
                                                        <a href="#" id="uploadButton"
                                                            class="btn btn-primary btn-sm"
                                                            title="Upload new profile image">
                                                            <i class="bi bi-upload" name="avatar"></i></a>
                                                        <p id="selectedFileName" style="display: inline-block">Upload
                                                            New Profile Image</p>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row mb-3">
                                                <label for="fi" class="col-md-4 col-lg-3 col-form-label">First
                                                    Name</label>
                                                <div class="col-md-8 col-lg-9">
                                                    <input name="user_fname" type="text" class="form-control"
                                                        id="firstName" value="{{ $user->user_fname }}">
                                                </div>
                                            </div>

                                            <div class="row mb-3">
                                                <label for="middleName"
                                                    class="col-md-4 col-lg-3 col-form-label">Middle
                                                    Name</label>
                                                <div class="col-md-8 col-lg-9">
                                                    <input name="user_mname" type="text" class="form-control"
                                                        id="middleName" value="{{ $user->user_mname }}">
                                                </div>
                                            </div>

                                            <div class="row mb-3">
                                                <label for="lastName" class="col-md-4 col-lg-3 col-form-label">Last
                                                    Name</label>
                                                <div class="col-md-8 col-lg-9">
                                                    <input name="user_lname" type="text" class="form-control"
                                                        id="lastName" value="{{ $user->user_lname }}">
                                                </div>
                                            </div>


                                            <div class="row mb-3">
                                                <label for="Email" class="col-md-4 col-lg-3 col-form-label">Email
                                                    Address</label>
                                                <div class="col-md-8 col-lg-9">
                                                    <input name="user_email" type="em" class="form-control"
                                                        id="user_email" value="{{ session('Admin')['user_email'] }}">
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <label
                                                    class="col-lg-3 col-form-label form-control-label">Address</label>
                                                <div class="col-lg-3">
                                                    <input class="form-control" type="text" name="user_country"
                                                        value="{{ session('Admin')['user_country'] }}"
                                                        placeholder="Country">
                                                </div>
                                                <div class="col-lg-3">
                                                    <input class="form-control" type="text" name="user_province"
                                                        value="{{ session('Admin')['user_province'] }}"
                                                        placeholder="Province">
                                                </div>
                                                <div class="col-lg-3">
                                                    <input class="form-control" type="text"
                                                        name="user_municipality"
                                                        value="{{ session('Admin')['user_municipality'] }}"
                                                        placeholder="Municipality">
                                                </div>
                                            </div>


                                            <div class="row mb-3">
                                                <label class="col-lg-3 col-form-label form-control-label"></label>
                                                <div class="col-lg-3">
                                                    <input class="form-control" type="text" name="user_barangay"
                                                        value="{{ session('Admin')['user_barangay'] }}"
                                                        placeholder="Barangay">
                                                </div>
                                                <div class="col-lg-3">
                                                    <input class="form-control" type="text" name="user_street"
                                                        value="{{ session('Admin')['user_street'] }}"
                                                        placeholder="Street">
                                                </div>
                                            </div>



                                            <div class="row mb-3">
                                                <label for="Birthdate"
                                                    class="col-md-4 col-lg-3 col-form-label">Birthdate</label>
                                                <div class="col-md-8 col-lg-9">
                                                    <input name="birthdate" type="text" class="form-control"
                                                        id="birthdate" value="{{ $user->birthdate }}">
                                                </div>
                                            </div>

                                            <div class="row mb-3">
                                                <label for="Zipcode"
                                                    class="col-md-4 col-lg-3 col-form-label">Zipcode</label>
                                                <div class="col-md-8 col-lg-9">
                                                    <input name="user_zipcode" type="text" class="form-control"
                                                        id="zip" value="{{ $user->user_zipcode }}">
                                                </div>
                                            </div>

                                            <div class="row mb-3">
                                                <label for="Gender"
                                                    class="col-md-4 col-lg-3 col-form-label">Gender</label>
                                                <div class="col-md-8 col-lg-9">
                                                    <input name="gender" type="text" class="form-control"
                                                        id="gender" value="{{ $user->gender }}">
                                                </div>
                                            </div>

                                            <div class="row mb-3">
                                                <label for="Phone Number"
                                                    class="col-md-4 col-lg-3 col-form-label">Phone
                                                    Number</label>
                                                <div class="col-md-8 col-lg-9">
                                                    <input name="user_phonenum" type="text" class="form-control"
                                                        id="Email" value="{{ $user->user_phonenum }}">
                                                </div>
                                            </div>

                                            <div class="modal-footer">
                                                <button type="submit" class="btn btn-success">Save Changes</button>
                                            </div>
                                        </form><!-- End Profile Edit Form -->
                                    </div>


                                    <div class="tab-pane fade pt-3" id="profile-change-password">
                                        <!-- Change Password Form -->
                                        <form method="POST" action="{{ route('change.password') }}">
                                            @csrf
                                            <div class="row mb-3">
                                                <label for="currentPassword"
                                                    class="col-md-4 col-lg-3 col-form-label">Current
                                                    Password</label>
                                                <div class="col-md-8 col-lg-9">
                                                    <input id="old_password" type="password"
                                                        class="form-control @error('old_password') is-invalid @enderror"
                                                        name="old_password" required autocomplete="current-password">
                                                    @error('old_password')
                                                        <span class="invalid-feedback" role="alert">
                                                            {{ $message }}
                                                        </span>
                                                    @enderror
                                                </div>
                                            </div>

                                            <div class="row mb-3">
                                                <label for="newPassword" class="col-md-4 col-lg-3 col-form-label">New
                                                    Password</label>
                                                <div class="col-md-8 col-lg-9">
                                                    <input id="new_password" type="password"
                                                        class="form-control @error('new_password') is-invalid @enderror"
                                                        name="new_password" required autocomplete="new-password">
                                                    @error('new_password')
                                                        <span class="invalid-feedback" role="alert">
                                                            {{ $message }}
                                                        </span>
                                                    @enderror
                                                </div>
                                            </div>

                                            <div class="row mb-3">
                                                <label for="renewPassword"
                                                    class="col-md-4 col-lg-3 col-form-label">Re-enter New
                                                    Password</label>
                                                <div class="col-md-8 col-lg-9">
                                                    <input id="new_password_confirmation" type="password"
                                                        class="form-control" name="new_password_confirmation" required
                                                        autocomplete="new-password">
                                                </div>
                                            </div>

                                            <div class="modal-footer">
                                                <button type="reset" class="btn btn-danger">Cancel</button>
                                                <button type="submit" class="btn btn-success">Change
                                                    Password</button>

                                            </div>
                                        </form><!-- End Change Password Form -->

                                    </div>

                                </div><!-- End Bordered Tabs -->

                            </div>
                        </div>

                    </div>
                </div>
            </section>
        @endforeach

    </main><!-- End #main -->


    <!-- Vendor JS Files -->
    <script src="{{ asset('assets/vendor/apexcharts/apexcharts.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/chart.js/chart.umd.js') }}"></script>
    <script src="{{ asset('assets/vendor/echarts/echarts.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/quill/quill.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/simple-datatables/simple-datatables.js') }}"></script>
    <script src="{{ asset('assets/vendor/tinymce/tinymce.min.js') }}"></script>

    <!-- Template Main JS File -->
    {{-- <script src="{{ asset('assets/js/admin/main.js') }}"></script> --}}


    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10.16.6/dist/sweetalert2.all.min.js"></script>

    <script>
        // Get references to the input and button elements
        const fileInput = document.getElementById("fileInput");
        const uploadButton = document.getElementById("uploadButton");
        const selectedFileName = document.getElementById("selectedFileName");

        // Add a click event listener to the button
        uploadButton.addEventListener("click", function() {
            // Trigger a click on the hidden file input element
            fileInput.click();
        });

        // Add a change event listener to the file input element
        fileInput.addEventListener("change", function() {
            // Check if a file was selected
            if (fileInput.files.length > 0) {
                // Display the selected file's name
                selectedFileName.textContent = "Selected file: " + fileInput.files[0].name;
            } else {
                // No file selected
                selectedFileName.textContent = "No file selected";
            }
        });
    </script>


    @if (session('success'))
        <script>
            Swal.fire({
                icon: 'success',
                title: 'Success!',
                text: '{{ session('success') }}',
                toast: true,
                position: 'top-end',
                showConfirmButton: false,
                timer: 1000,
                timerProgressBar: true,
                background: '#8cc63f',
                iconColor: '#ffffff',
                customClass: {
                    title: 'text-white',
                    content: 'text-white'
                }
            });
        </script>
    @endif

    @if (session('failed'))
        <script>
            Swal.fire({
                icon: 'failed',
                title: 'failed!',
                text: '{{ session('failed') }}',
                toast: true,
                position: 'top-end',
                showConfirmButton: false,
                timer: 1000,
                timerProgressBar: true,
                background: '#dc3545',
                iconColor: '#ffffff',
                customClass: {
                    title: 'text-white',
                    content: 'text-white'
                }
            });
        </script>
    @endif

</body>

</html>
