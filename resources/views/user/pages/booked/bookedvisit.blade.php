<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OMHMS</title>
    <link rel="stylesheet" href="{{ asset('assets/css/cssbooked.css') }}">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('assets/css/homestyle1.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css"
        integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous" />
    <link rel='stylesheet' href='{{ asset('fullcalendar/main.css') }}' />
    <script src='{{ asset('fullcalendar/main.js') }}'></script>

</head>
<style>
    .img {
        display: inline-block;
        position: relative;
    }

    .img-link {
        text-decoration: none;
        color: black;

    }
</style>

<body class="bg-gray postion-relative">>

    <!-- ================= Appbar ================= -->
    <div class="bg-white d-flex align-items-center fixed-top shadow" style="min-height: 56px; z-index: 5">
        <div class="container-fluid">
            <div class="row align-items-center">
                <!-- search -->
                <div class="col d-flex align-items-center">
                    <!-- logo -->
                    <img src="{{ asset('omhms.png') }}" alt="" style="width: 40px; height:40px">OMHMS</img>
                    <!-- search bar -->
                    <div class="input-group ms-5" type="button">
                        <!-- mobile -->
                        <span class="input-group-prepend d-lg-none" id="searchMenu" data-bs-toggle="dropdown"
                            aria-expanded="false" data-bs-auto-close="outside">
                            <div class="input-group-text bg-gray border-0 rounded-circle" style="min-height: 40px">
                                <i class="fas fa-search text-muted"></i>
                            </div>
                        </span>
                        <!-- desktop -->
                        <span class="input-group-prepend d-none d-lg-block" id="searchMenu" data-bs-toggle="dropdown"
                            aria-expanded="false" data-bs-auto-close="outside">
                            <div class="input-group-text bg-gray border-0 rounded-pill"
                                style="min-height: 40px; min-width: 230px">
                                <i class="fas fa-search me-2 text-muted"></i>
                                <p class="m-0 fs-7 text-muted">Search </p>
                            </div>
                        </span>
                        <!-- search menu -->
                        <ul class="dropdown-menu overflow-auto border-0 shadow p-3" aria-labelledby="searchMenu"
                            style="width: 20em; max-height: 600px">
                            <!-- search input -->
                            <li>
                                <input type="text" class="rounded-pill border-0 bg-gray dropdown-item"
                                    placeholder="Search Flexbook..." autofocus />
                            </li>
                            <!-- search 1 -->
                            <li class="my-4">
                                <div class="
                alert
                fade
                show
                dropdown-item
                p-1
                m-0
                d-flex
                align-items-center
                justify-content-between
              "
                                    role="alert">
                                    <div class="d-flex align-items-center">
                                        <img src="https://source.unsplash.com/random/1" alt="avatar"
                                            class="rounded-circle me-2"
                                            style="width: 35px; height: 35px; object-fit: cover" />
                                        <p class="m-0">Lorem ipsum</p>
                                    </div>
                                    <button type="button" class="btn-close p-0 m-0" data-bs-dismiss="alert"
                                        aria-label="Close"></button>
                                </div>
                            </li>
                            <!-- search 2 -->
                            <li class="my-4">
                                <div class="
                alert
                fade
                show
                dropdown-item
                p-1
                m-0
                d-flex
                align-items-center
                justify-content-between
              "
                                    role="alert">
                                    <div class="d-flex align-items-center">
                                        <img src="https://source.unsplash.com/random/2" alt="avatar"
                                            class="rounded-circle me-2"
                                            style="width: 35px; height: 35px; object-fit: cover" />
                                        <p class="m-0">Lorem ipsum</p>
                                    </div>
                                    <button type="button" class="btn-close p-0 m-0" data-bs-dismiss="alert"
                                        aria-label="Close"></button>
                                </div>
                            </li>
                            <!-- search 3 -->
                            <li class="my-4">
                                <div class="
                alert
                fade
                show
                dropdown-item
                p-1
                m-0
                d-flex
                align-items-center
                justify-content-between
              "
                                    role="alert">
                                    <div class="d-flex align-items-center">
                                        <img src="https://source.unsplash.com/random/3" alt="avatar"
                                            class="rounded-circle me-2"
                                            style="width: 35px; height: 35px; object-fit: cover" />
                                        <p class="m-0">Lorem ipsum</p>
                                    </div>
                                    <button type="button" class="btn-close p-0 m-0" data-bs-dismiss="alert"
                                        aria-label="Close"></button>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>

                <!-- nav -->
                <div class="col d-none d-xl-flex justify-content-center">
                    <!-- home -->

                    <!-- main menu -->
                    <div class="
          rounded-circle
          p-1
          bg-gray
          d-flex
          align-items-center
          justify-content-center
          mx-2
        "
                        style="width: 38px; height: 38px" type="button" id="mainMenu" data-bs-toggle="dropdown"
                        aria-expanded="false" data-bs-auto-close="outside">
                        <i class="fas fa-edit text-muted fs-7 ms-10 d-inline-block">Book_now!</i>
                    </div>
                    <ul class="dropdown-menu border-0 shadow p-3 overflow-auto" aria-labelledby="mainMenu"
                        style="width: 23em; max-height: 600px">

                        <!-- create -->
                        <div>
                            <!-- header -->
                            <li class="p-1 mx-2">
                                <h2>Create</h2>
                            </li>
                            <!-- c-1 -->
                            <li class="my-2 p-1">
                                <a href="{{ url('user/visit') }}"
                                    class="
                text-decoration-none text-dark
                d-flex
                align-items-center
              ">
                                    <div class="
                  rounded-circle
                  bg-gray
                  p-1
                  d-flex
                  align-items-center
                  justify-content-center
                  me-3
                "
                                        style="width: 38px; height: 38px">
                                        <i class="fas fa-edit"></i>
                                    </div>
                                    <div>
                                        <p class="m-0">Reservation Visit</p>
                                    </div>
                                </a>
                            </li>
                            <!-- c-2 -->
                            <li class="my-2 p-1">
                                <a href=""
                                    class="
                text-decoration-none text-dark
                d-flex
                align-items-center
              ">
                                    <div class="
                  rounded-circle
                  bg-gray
                  p-1
                  d-flex
                  align-items-center
                  justify-content-center
                  me-3
                "
                                        style="width: 38px; height: 38px">
                                        <i class="fas fa-book-open"></i>
                                    </div>
                                    <div>
                                        <p class="m-0">Rent the Functional Hall</p>
                                    </div>
                                </a>
                            </li>
                            <!-- c-3 -->

                            <hr />
                            <li class="p-1 mx-2">
                                <h3>More..</h3>
                            </li>
                            <!-- c-4 -->
                            <li class="my-2 p-1">
                                <a href="#"
                                    class="
                text-decoration-none text-dark
                d-flex
                align-items-center
              ">
                                    <div class="
                  rounded-circle
                  bg-gray
                  p-1
                  d-flex
                  align-items-center
                  justify-content-center
                  me-3
                "
                                        style="width: 38px; height: 38px">
                                        <i class="fas fa-flag"></i>
                                    </div>
                                    <div>
                                        <p class="m-0">Wedding</p>
                                    </div>
                                </a>
                            </li>
                            <!-- c-5 -->
                            <li class="my-2 p-1">
                                <a href="#"
                                    class="
                text-decoration-none text-dark
                d-flex
                align-items-center
              ">
                                    <div class="
                  rounded-circle
                  bg-gray
                  p-1
                  d-flex
                  align-items-center
                  justify-content-center
                  me-3
                "
                                        style="width: 38px; height: 38px">
                                        <i class="fas fa-bullhorn"></i>
                                    </div>
                                    <div>
                                        <p class="m-0">Birthday</p>
                                    </div>
                                </a>
                            </li>
                            <!-- c-6 -->
                            <li class="my-2 p-1">
                                <a href="#"
                                    class="
                text-decoration-none text-dark
                d-flex
                align-items-center
              ">
                                    <div class="
                  rounded-circle
                  bg-gray
                  p-1
                  d-flex
                  align-items-center
                  justify-content-center
                  me-3
                "
                                        style="width: 38px; height: 38px">
                                        <i class="fas fa-users"></i>
                                    </div>
                                    <div>
                                        <p class="m-0">Reunion</p>
                                    </div>
                                </a>
                            </li>
                            <!-- c-7-->
                            <li class="my-2 p-1">
                                <a href="#"
                                    class="
                text-decoration-none text-dark
                d-flex
                align-items-center
              ">
                                    <div class="
                  rounded-circle
                  bg-gray
                  p-1
                  d-flex
                  align-items-center
                  justify-content-center
                  me-3
                "
                                        style="width: 38px; height: 38px">
                                        <i class="fas fa-book"></i>
                                    </div>
                                    <div>
                                        <p class="m-0">Team Building</p>
                                    </div>
                                </a>
                            </li>
                            <!-- c-8 -->
                            <li class="my-2 p-1">
                                <a href="#"
                                    class="
                text-decoration-none text-dark
                d-flex
                align-items-center
              ">
                                    <div class="
                  rounded-circle
                  bg-gray
                  p-1
                  d-flex
                  align-items-center
                  justify-content-center
                  me-3
                "
                                        style="width: 38px; height: 38px">
                                        <i class="fas fa-shopping-basket"></i>
                                    </div>
                                    <div>
                                        <p class="m-0">Seminar</p>
                                    </div>
                                </a>
                            </li>
                            <!-- c-9 -->
                        </div>
                    </ul>


                </div>
                <!-- menus -->
                <div class="col d-flex align-items-center justify-content-end">

                    <!-- chat -->
                    <div class="
          rounded-circle
          p-1
          bg-gray
          d-flex
          align-items-center
          justify-content-center
          mx-2
        "
                        style="width: 38px; height: 38px" type="button" id="chatMenu" data-bs-toggle="dropdown"
                        aria-expanded="false" data-bs-auto-close="outside">
                        <i class="fas fa-comment"></i>
                    </div>
                    <!-- chat  dd -->
                    <ul class="dropdown-menu border-0 shadow p-3 overflow-auto" aria-labelledby="chatMenu"
                        style="width: 23em; max-height: 600px">
                        <!-- header -->
                        <li class="p-1">
                            <div class="d-flex justify-content-between">
                                <h2>Message</h2>
                                <div>
                                    <!-- setting -->
                                    <i class="fas fa-ellipsis-h text-muted mx-2" type="button"
                                        data-bs-toggle="dropdown"></i>
                                    <!-- setting dd -->
                                    <ul class="dropdown-menu shadow" style="width: 18em">
                                        <!-- title -->
                                        <div class="p-2">
                                            <h5>Chat Settings</h5>
                                            <span class="text-muted fs-7">Customize your Messenger experience.</span>
                                        </div>
                                        <hr />
                                        <!-- incoming sound -->
                                        <li>
                                            <div
                                                class="
                      dropdown-item
                      d-flex
                      align-items-center
                      justify-content-between
                    ">
                                                <!-- icon -->
                                                <div class="d-flex align-items-center">
                                                    <i class="fas fa-phone-alt me-3"></i>
                                                    <p class="m-0">Incoming call sounds</p>
                                                </div>
                                                <!-- toggle -->
                                                <div class="form-check form-switch m-0">
                                                    <input class="form-check-input" type="checkbox"
                                                        id="flexSwitchCheckChecked" checked />
                                                    <label class="form-check-label"
                                                        for="flexSwitchCheckChecked"></label>
                                                </div>
                                            </div>
                                        </li>
                                        <!-- message sound -->
                                        <li>
                                            <div
                                                class="
                      dropdown-item
                      d-flex
                      align-items-center
                      justify-content-between
                    ">
                                                <!-- icon -->
                                                <div class="d-flex align-items-center">
                                                    <i class="fas fa-volume-off me-4 fs-4"></i>
                                                    <p class="m-0">Message sounds</p>
                                                </div>
                                                <!-- toggle -->
                                                <div class="form-check form-switch m-0">
                                                    <input class="form-check-input" type="checkbox"
                                                        id="flexSwitchCheckChecked" checked />
                                                    <label class="form-check-label"
                                                        for="flexSwitchCheckChecked"></label>
                                                </div>
                                            </div>
                                        </li>
                                        <!-- popup message -->
                                        <li>
                                            <div
                                                class="
                      dropdown-item
                      d-flex
                      align-items-center
                      justify-content-between
                    ">
                                                <!-- icon -->
                                                <div class="d-flex align-items-center">
                                                    <i class="fas fa-spinner me-3"></i>
                                                    <p class="m-0">Pop-up new messages</p>
                                                </div>
                                                <!-- toggle -->
                                                <div class="form-check form-switch m-0">
                                                    <input class="form-check-input" type="checkbox"
                                                        id="flexSwitchCheckChecked" checked />
                                                    <label class="form-check-label"
                                                        for="flexSwitchCheckChecked"></label>
                                                </div>
                                            </div>
                                            <span class="ms-5 text-muted fs-7">Automatically open new messages.</span>
                                        </li>
                                        <hr class="m-0" />
                                        <!-- item 1 -->
                                        <li>
                                            <div
                                                class="
                      dropdown-item
                      d-flex
                      align-items-center
                      justify-content-between
                    ">
                                                <!-- icon -->
                                                <div class="d-flex align-items-center">
                                                    <i class="fas fa-toggle-off me-3"></i>
                                                    <p class="m-0">Turn Off Active Status</p>
                                                </div>
                                            </div>
                                        </li>
                                        <!-- item 2 -->
                                        <li>
                                            <div
                                                class="
                      dropdown-item
                      d-flex
                      align-items-center
                      justify-content-between
                    ">
                                                <!-- icon -->
                                                <div class="d-flex align-items-center">
                                                    <i class="far fa-comment-alt me-3"></i>
                                                    <p class="m-0">Message Request</p>
                                                </div>
                                            </div>
                                        </li>
                                        <!-- item 3 -->
                                        <li>
                                            <div
                                                class="
                      dropdown-item
                      d-flex
                      align-items-center
                      justify-content-between
                    ">
                                                <!-- icon -->
                                                <div class="d-flex align-items-center">
                                                    <i class="fas fa-share-square me-3"></i>
                                                    <p class="m-0">Message delivery settings</p>
                                                </div>
                                            </div>
                                        </li>
                                        <!-- item 4 -->
                                        <li>
                                            <div
                                                class="
                      dropdown-item
                      d-flex
                      align-items-center
                      justify-content-between
                    ">
                                                <!-- icon -->
                                                <div class="d-flex align-items-center">
                                                    <i class="fas fa-shield-alt me-3"></i>
                                                    <p class="m-0">Block settings</p>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                    <i class="fas fa-expand-arrows-alt text-muted mx-2" type="button"></i>
                                    <!-- new message -->
                                    <i class="fas fa-edit text-muted mx-2" type="button" data-bs-toggle="modal"
                                        data-bs-target="#newChat"></i>
                                </div>
                            </div>
                        </li>
                        <!-- search -->
                        <li class="p-1">
                            <div class="input-group-text bg-gray border-0 rounded-pill"
                                style="min-height: 40px; min-width: 230px">
                                <i class="fas fa-search me-2 text-muted"></i>
                                <input type="text" class="form-control rounded-pill border-0 bg-gray"
                                    placeholder="Search Messenger" />
                            </div>
                        </li>
                        <!-- message 1 -->
                        {{-- <li
          class="my-2 p-1"
          type="button"
          data-bs-toggle="modal"
          data-bs-target="#singleChat1"
        >
          <div class="d-flex align-items-center justify-content-between">
            <!-- big avatar -->
            <div class="d-flex align-items-center justify-content-evenly">
              <div class="p-2">
                <img
                  src="https://source.unsplash.com/random/1"
                  alt="avatar"
                  class="rounded-circle"
                  style="width: 58px; height: 58px; object-fit: cover"
                />
              </div>
              <div>
                <p class="fs-7 m-0">Mike</p>
                <span class="fs-7 text-muted"
                  >Lorem ipsum &#8226; 7d</span
                >
              </div>
            </div>
            <!-- small avatar -->
            <div class="p-2">
              <img
                src="https://source.unsplash.com/random/1"
                alt="avatar"
                class="rounded-circle"
                style="width: 15px; height: 15px; object-fit: cover"
              />
            </div>
          </div>
        </li> --}}
                        <!-- message 2 -->

                        <hr class="m-0" />
                        <a href="#" class="text-decoration-none">
                            <p class="fw-bold text-center pt-3 m-0">See All in Messenger</p>
                        </a>
                    </ul>
                    <!-- notifications -->
                    <div class="
          rounded-circle
          p-1
          bg-gray
          d-flex
          align-items-center
          justify-content-center
          mx-2
        "
                        style="width: 38px; height: 38px" type="button" id="notMenu" data-bs-toggle="dropdown"
                        aria-expanded="false" data-bs-auto-close="outside">
                        <i class="fas fa-bell"></i>
                    </div>
                    <!-- notifications dd -->
                    <ul class="dropdown-menu border-0 shadow p-3" aria-labelledby="notMenu"
                        style="width: 23em; max-height: 600px; overflow-y: auto">
                        <!-- header -->
                        <li class="p-1">
                            <div class="d-flex justify-content-between">
                                <h2>Notifications</h2>
                                <div>
                                    <i class="
                  fas
                  fa-ellipsis-h
                  pointer
                  p-2
                  rounded-circle
                  bg-gray
                "
                                        type="button" data-bs-toggle="dropdown"></i>
                                    <ul class="dropdown-menu">
                                        <li class="dropdown-item d-flex align-items-center" type="button">
                                            <i class="fas fa-check me-3 text-muted"></i>
                                            <p class="m-0">Mark all as read</p>
                                        </li>
                                        <li class="dropdown-item d-flex align-items-center" type="button">
                                            <i class="fas fa-cog me-3 text-muted"></i>
                                            <p class="m-0">Privacy Checkup</p>
                                        </li>
                                        <li class="dropdown-item d-flex align-items-center" type="button">
                                            <i class="fas fa-desktop me-3 text-muted"></i>
                                            <p class="m-0">Privacy Shortcuts</p>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="d-flex" type="button">
                                <p class="rounded-pill bg-gray p-2">All</p>
                                <p class="ms-3 rounded-pill bg-primary p-2 text-white">
                                    Unread
                                </p>
                            </div>
                        </li>
                        <!-- news -->
                        <div class="d-flex justify-content-between mx-2">
                            <h5>New</h5>
                            <a href="#" class="text-decoration-none">See All</a>
                        </div>
                        <!-- news 1 -->
                        <li class="my-2 p-1">
                            <a href="#"
                                class="
              d-flex
              align-items-center
              justify-content-evenly
              text-decoration-none text-dark
            ">
                                <div class="d-flex align-items-center justify-content-evenly">
                                    <div class="p-2">
                                        <img src="https://source.unsplash.com/random/1" alt="avatar"
                                            class="rounded-circle"
                                            style="width: 58px; height: 58px; object-fit: cover" />
                                    </div>
                                    <div>
                                        <p class="fs-7 m-0">
                                            Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                            Harum unde amet at nulla quae porro.
                                        </p>
                                        <span class="fs-7 text-primary">about an hour ago</span>
                                    </div>
                                </div>
                                <i class="fas fa-circle fs-7 text-primary"></i>
                            </a>
                        </li>
                        <!-- news 2 -->
                        <li class="my-2 p-1">
                            <a href="#"
                                class="
              d-flex
              align-items-center
              justify-content-evenly
              text-decoration-none text-dark
            ">
                                <div class="d-flex align-items-center justify-content-evenly">
                                    <div class="p-2">
                                        <img src="https://source.unsplash.com/random/2" alt="avatar"
                                            class="rounded-circle"
                                            style="width: 58px; height: 58px; object-fit: cover" />
                                    </div>
                                    <div>
                                        <p class="fs-7 m-0">
                                            Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                            Harum unde amet at nulla quae porro.
                                        </p>
                                        <span class="fs-7 text-primary">about an hour ago</span>
                                    </div>
                                </div>
                                <i class="fas fa-circle fs-7 text-primary"></i>
                            </a>
                        </li>
                        <!-- news 3 -->
                        <li class="my-2 p-1">
                            <a href="#"
                                class="
              d-flex
              align-items-center
              justify-content-evenly
              text-decoration-none text-dark
            ">
                                <div class="d-flex align-items-center justify-content-evenly">
                                    <div class="p-2">
                                        <img src="https://source.unsplash.com/random/3" alt="avatar"
                                            class="rounded-circle"
                                            style="width: 58px; height: 58px; object-fit: cover" />
                                    </div>
                                    <div>
                                        <p class="fs-7 m-0">
                                            Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                            Harum unde amet at nulla quae porro.
                                        </p>
                                        <span class="fs-7 text-primary">about an hour ago</span>
                                    </div>
                                </div>
                                <i class="fas fa-circle fs-7 text-primary"></i>
                            </a>
                        </li>
                        <!-- news 4 -->
                        <li class="my-2 p-1">
                            <a href="#"
                                class="
              d-flex
              align-items-center
              justify-content-evenly
              text-decoration-none text-dark
            ">
                                <div class="d-flex align-items-center justify-content-evenly">
                                    <div class="p-2">
                                        <img src="https://source.unsplash.com/random/4" alt="avatar"
                                            class="rounded-circle"
                                            style="width: 58px; height: 58px; object-fit: cover" />
                                    </div>
                                    <div>
                                        <p class="fs-7 m-0">
                                            Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                            Harum unde amet at nulla quae porro.
                                        </p>
                                        <span class="fs-7 text-primary">about an hour ago</span>
                                    </div>
                                </div>
                                <i class="fas fa-circle fs-7 text-primary"></i>
                            </a>
                        </li>
                        <!-- news 5 -->
                        <li class="my-2 p-1">
                            <a href="#"
                                class="
              d-flex
              align-items-center
              justify-content-evenly
              text-decoration-none text-dark
            ">
                                <div class="d-flex align-items-center justify-content-evenly">
                                    <div class="p-2">
                                        <img src="https://source.unsplash.com/random/5" alt="avatar"
                                            class="rounded-circle"
                                            style="width: 58px; height: 58px; object-fit: cover" />
                                    </div>
                                    <div>
                                        <p class="fs-7 m-0">
                                            Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                            Harum unde amet at nulla quae porro.
                                        </p>
                                        <span class="fs-7 text-primary">about an hour ago</span>
                                    </div>
                                </div>
                                <i class="fas fa-circle fs-7 text-primary"></i>
                            </a>
                        </li>
                    </ul>
                    <!-- secondary menu -->
                    <div class="align-items-center justify-content-center d-none d-xl-flex">
                        <img src="https://source.unsplash.com/collection/happy-people" class="rounded-circle me-2"
                            alt="avatar" style="width: 38px; height: 38px; object-fit: cover" />
                    </div>
                    <div class="
          rounded-circle
          p-1
          bg-gray
          d-flex
          align-items-center
          justify-content-center
          mx-2
        "
                        style="width: 38px; height: 38px" type="button" id="secondMenu" data-bs-toggle="dropdown"
                        aria-expanded="false" data-bs-auto-close="outside">
                        <i class="fas fa-caret-down"></i>
                    </div>
                    <!-- secondary menu dd -->
                    <ul class="dropdown-menu border-0 shadow p-3" aria-labelledby="secondMenu" style="width: 23em">
                        <!-- avatar -->
                        <li class="dropdown-item p-1 rounded d-flex" type="button">
                            <img src="https://source.unsplash.com/collection/happy-people" alt="avatar"
                                class="rounded-circle me-2" style="width: 45px; height: 45px; object-fit: cover" />
                            <div>
                                <p class="m-0"><span></p>
                                <p class="m-0 text-muted">See your profile</p>
                            </div>
                        </li>
                        <hr />
                        <!-- feedback -->
                        <li class="dropdown-item p-1 rounded d-flex align-items-center" type="button">
                            <i class="fas fa-exclamation-circle bg-gray p-2 rounded-circle"></i>
                            <div class="ms-3">
                                <p class="m-0">Give Feedback</p>
                                <p class="m-0 text-muted fs-7">
                                    Help us improve the new Flexbook.
                                </p>
                            </div>
                        </li>
                        <hr />
                        <!-- options -->
                        <!-- 1 -->
                        <li class="dropdown-item p-1 my-3 rounded" type="button">
                            <ul class="navbar-nav">
                                <li class="nav-item">
                                    <div class="d-flex" data-bs-toggle="dropdown">
                                        <i class="fas fa-cog bg-gray p-2 rounded-circle"></i>
                                        <div
                                            class="
                    ms-3
                    d-flex
                    justify-content-between
                    align-items-center
                    w-100
                  ">
                                            <p class="m-0">Settings & Privacy</p>
                                            <i class="fas fa-chevron-right"></i>
                                        </div>
                                    </div>
                                    <!-- nested menu -->
                                    <ul class="dropdown-menu">
                                        <li>
                                            <a class="dropdown-item d-flex align-items-center" href="#">
                                                <div class="
                        rounded-circle
                        p-1
                        bg-gray
                        d-flex
                        align-items-center
                        justify-content-center
                        me-2
                      "
                                                    style="width: 38px; height: 38px">
                                                    <i class="fas fa-cog"></i>
                                                </div>
                                                <p class="m-0">Settings</p>
                                            </a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item d-flex align-items-center" href="#">
                                                <div class="
                        rounded-circle
                        p-1
                        bg-gray
                        d-flex
                        align-items-center
                        justify-content-center
                        me-2
                      "
                                                    style="width: 38px; height: 38px">
                                                    <i class="fas fa-lock"></i>
                                                </div>
                                                <p class="m-0">Privacy Checkup</p>
                                            </a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item d-flex align-items-center" href="#">
                                                <div class="
                        rounded-circle
                        p-1
                        bg-gray
                        d-flex
                        align-items-center
                        justify-content-center
                        me-2
                      "
                                                    style="width: 38px; height: 38px">
                                                    <i class="fas fa-unlock-alt"></i>
                                                </div>
                                                <p class="m-0">Privacy Shortcuts</p>
                                            </a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item d-flex align-items-center" href="#">
                                                <div class="
                        rounded-circle
                        p-1
                        bg-gray
                        d-flex
                        align-items-center
                        justify-content-center
                        me-2
                      "
                                                    style="width: 38px; height: 38px">
                                                    <i class="fas fa-list"></i>
                                                </div>
                                                <p class="m-0">Activity Log</p>
                                            </a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item d-flex align-items-center" href="#">
                                                <div class="
                        rounded-circle
                        p-1
                        bg-gray
                        d-flex
                        align-items-center
                        justify-content-center
                        me-2
                      "
                                                    style="width: 38px; height: 38px">
                                                    <i class="fas fa-newspaper"></i>
                                                </div>
                                                <p class="m-0">News Feed Preferences</p>
                                            </a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item d-flex align-items-center" href="#">
                                                <div class="
                        rounded-circle
                        p-1
                        bg-gray
                        d-flex
                        align-items-center
                        justify-content-center
                        me-2
                      "
                                                    style="width: 38px; height: 38px">
                                                    <i class="fas fa-globe"></i>
                                                </div>
                                                <p class="m-0">Language</p>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <!-- 2 -->
                        <li class="dropdown-item p-1 my-3 rounded" type="button">
                            <ul class="navbar-nav">
                                <li class="nav-item">
                                    <div class="d-flex" data-bs-toggle="dropdown">
                                        <i
                                            class="
                    fas
                    fa-question-circle
                    bg-gray
                    p-2
                    rounded-circle
                  "></i>
                                        <div
                                            class="
                    ms-3
                    d-flex
                    justify-content-between
                    align-items-center
                    w-100
                  ">
                                            <p class="m-0">Help & Support</p>
                                            <i class="fas fa-chevron-right"></i>
                                        </div>
                                    </div>
                                    <!-- nested menu -->
                                    <ul class="dropdown-menu">
                                        <li>
                                            <a class="dropdown-item d-flex align-items-center" href="#">
                                                <div class="
                        rounded-circle
                        p-1
                        bg-gray
                        d-flex
                        align-items-center
                        justify-content-center
                        me-2
                      "
                                                    style="width: 38px; height: 38px">
                                                    <i class="fas fa-cog"></i>
                                                </div>
                                                <p class="m-0">Settings</p>
                                            </a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item d-flex align-items-center" href="#">
                                                <div class="
                        rounded-circle
                        p-1
                        bg-gray
                        d-flex
                        align-items-center
                        justify-content-center
                        me-2
                      "
                                                    style="width: 38px; height: 38px">
                                                    <i class="fas fa-lock"></i>
                                                </div>
                                                <p class="m-0">Privacy Checkup</p>
                                            </a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item d-flex align-items-center" href="#">
                                                <div class="
                        rounded-circle
                        p-1
                        bg-gray
                        d-flex
                        align-items-center
                        justify-content-center
                        me-2
                      "
                                                    style="width: 38px; height: 38px">
                                                    <i class="fas fa-unlock-alt"></i>
                                                </div>
                                                <p class="m-0">Privacy Shortcuts</p>
                                            </a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item d-flex align-items-center" href="#">
                                                <div class="
                        rounded-circle
                        p-1
                        bg-gray
                        d-flex
                        align-items-center
                        justify-content-center
                        me-2
                      "
                                                    style="width: 38px; height: 38px">
                                                    <i class="fas fa-list"></i>
                                                </div>
                                                <p class="m-0">Activity Log</p>
                                            </a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item d-flex align-items-center" href="#">
                                                <div class="
                        rounded-circle
                        p-1
                        bg-gray
                        d-flex
                        align-items-center
                        justify-content-center
                        me-2
                      "
                                                    style="width: 38px; height: 38px">
                                                    <i class="fas fa-newspaper"></i>
                                                </div>
                                                <p class="m-0">News Feed Preferences</p>
                                            </a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item d-flex align-items-center" href="#">
                                                <div class="
                        rounded-circle
                        p-1
                        bg-gray
                        d-flex
                        align-items-center
                        justify-content-center
                        me-2
                      "
                                                    style="width: 38px; height: 38px">
                                                    <i class="fas fa-globe"></i>
                                                </div>
                                                <p class="m-0">Language</p>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <!-- 3 -->
                        <li class="dropdown-item p-1 my-3 rounded" type="button">
                            <ul class="navbar-nav">
                                <li class="nav-item">
                                    <div class="d-flex" data-bs-toggle="dropdown">
                                        <i class="fas fa-moon bg-gray p-2 rounded-circle"></i>
                                        <div
                                            class="
                    ms-3
                    d-flex
                    justify-content-between
                    align-items-center
                    w-100
                  ">
                                            <p class="m-0">Display & Accessibility</p>
                                            <i class="fas fa-chevron-right"></i>
                                        </div>
                                    </div>
                                    <!-- nested menu -->
                                    <ul class="dropdown-menu">
                                        <li>
                                            <a class="dropdown-item d-flex align-items-center" href="#">
                                                <div class="
                        rounded-circle
                        p-1
                        bg-gray
                        d-flex
                        align-items-center
                        justify-content-center
                        me-2
                      "
                                                    style="width: 38px; height: 38px">
                                                    <i class="fas fa-cog"></i>
                                                </div>
                                                <p class="m-0">Settings</p>
                                            </a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item d-flex align-items-center" href="#">
                                                <div class="
                        rounded-circle
                        p-1
                        bg-gray
                        d-flex
                        align-items-center
                        justify-content-center
                        me-2
                      "
                                                    style="width: 38px; height: 38px">
                                                    <i class="fas fa-lock"></i>
                                                </div>
                                                <p class="m-0">Privacy Checkup</p>
                                            </a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item d-flex align-items-center" href="#">
                                                <div class="
                        rounded-circle
                        p-1
                        bg-gray
                        d-flex
                        align-items-center
                        justify-content-center
                        me-2
                      "
                                                    style="width: 38px; height: 38px">
                                                    <i class="fas fa-unlock-alt"></i>
                                                </div>
                                                <p class="m-0">Privacy Shortcuts</p>
                                            </a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item d-flex align-items-center" href="#">
                                                <div class="
                        rounded-circle
                        p-1
                        bg-gray
                        d-flex
                        align-items-center
                        justify-content-center
                        me-2
                      "
                                                    style="width: 38px; height: 38px">
                                                    <i class="fas fa-list"></i>
                                                </div>
                                                <p class="m-0">Activity Log</p>
                                            </a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item d-flex align-items-center" href="#">
                                                <div class="
                        rounded-circle
                        p-1
                        bg-gray
                        d-flex
                        align-items-center
                        justify-content-center
                        me-2
                      "
                                                    style="width: 38px; height: 38px">
                                                    <i class="fas fa-newspaper"></i>
                                                </div>
                                                <p class="m-0">News Feed Preferences</p>
                                            </a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item d-flex align-items-center" href="#">
                                                <div class="
                        rounded-circle
                        p-1
                        bg-gray
                        d-flex
                        align-items-center
                        justify-content-center
                        me-2
                      "
                                                    style="width: 38px; height: 38px">
                                                    <i class="fas fa-globe"></i>
                                                </div>
                                                <p class="m-0">Language</p>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <!-- 4 -->
                        <li class="dropdown-item p-1 my-3 rounded" type="button">
                            <ul class="navbar-nav">
                                <li class="nav-item">
                                    <a {{-- href="{{ url('auth/login') }}"
                href="{{url('logout')}}" --}} href="{{ url('logout') }}"
                                        class="d-flex text-decoration-none text-dark">
                                        <i class="fas fa-cog bg-gray p-2 rounded-circle"></i>
                                        <div
                                            class="
                    ms-3
                    d-flex
                    justify-content-between
                    align-items-center
                    w-100
                  ">
                                            <p class="m-0">Log Out</p>
                                        </div>
                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                    <!-- end -->
                    <!-- avatar -->

                </div>
            </div>
        </div>
    </div>
    <!-- =============== New Chat Mobile =============== -->
    <div class="modal fade" id="newChat" tabindex="-1" aria-labelledby="newChatLabel" aria-hidden="true"
        data-bs-backdrop="false">
        <div class="
    modal-dialog modal-sm
    position-absolute
    bottom-0
    end-0
    w-75
    shadow
  "
            style="transform: translateX(-80px)">
            <div class="modal-content border-0">
                <!-- head -->
                <div class="modal-header align-items-start">
                    <div>
                        <h6 class="modal-title text-dark mb-2" id="newChat1Label">
                            New Message
                        </h6>
                        <label class="text-dark">To:</label>
                        <input type="text" class="border-0" />
                    </div>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <!-- body -->
                <div class="modal-body shadow m-0 chat-border">
                    <p class="m-0 text-primary ms-4">Suggested</p>
                </div>
                <!-- footer -->
                <div class="modal-footer border-0" style="min-height: 300px"></div>
            </div>
        </div>
    </div>
    <!-- ================= Chat Modal Mobile ================= -->
    <!-- chat 1 -->
    <div class="modal fade" id="singleChat1" tabindex="-1" aria-labelledby="singleChat1Label" aria-hidden="true"
        data-bs-backdrop="false">
        <div class="modal-dialog modal-sm position-absolute bottom-0 end-0 w-17" style="transform: translateX(-80px)">
            <div class="modal-content border-0 shadow">
                <!-- head -->
                <div class="modal-header">
                    <div class="dropdown-item d-flex rounded" type="button" data-bs-container="body"
                        data-bs-toggle="popover" data-bs-placement="left"
                        data-bs-content='
        <div>
          <div class="popover-body d-flex flex-column p-0">
            <div class="d-flex align-items-center dropdown-item p-2 rounded pointer">
              <i class="far fa-comment me-3 fs-4"></i>
              <p class="m-0">Open Messenger App</p>
            </div>
            <div class="d-flex align-items-center dropdown-item p-2 rounded pointer">
              <i class="far fa-user me-3 fs-4"></i>
              <p class="m-0">Open Messenger App</p>
            </div>
            <hr>
            <div class="d-flex align-items-center dropdown-item p-2 rounded pointer">
              <i class="fas fa-fill-drip me-3 fs-4"></i>
              <p class="m-0">Color</p>
            </div>
            <div class="d-flex align-items-center dropdown-item p-2 rounded pointer">
              <i class="far fa-smile-beam me-3 fs-4"></i>
              <p class="m-0">Emoji</p>
            </div>
            <div class="d-flex align-items-center dropdown-item p-2 rounded pointer">
              <i class="fas fa-pencil-alt me-3 fs-4"></i>
              <p class="m-0">Nicknames</p>
            </div>
          </div>
        </div>
        '
                        data-bs-html="true">
                        <!-- avatar -->
                        <div class="position-relative">
                            <img src="https://source.unsplash.com/random/1" alt="avatar"
                                class="rounded-circle me-2" style="width: 38px; height: 38px; object-fit: cover" />
                            <span
                                class="
              position-absolute
              bottom-0
              translate-middle
              p-1
              bg-success
              border border-light
              rounded-circle
            "
                                style="left: 75%">
                                <span class="visually-hidden">New alerts</span>
                            </span>
                        </div>
                        <!-- name -->
                        <div>
                            <p class="m-0">Mike <i class="fas fa-angle-down"></i></p>
                            <span class="text-muted fs-7">Active Now</span>
                        </div>
                    </div>
                    <!-- close -->
                    <i class="fas fa-video mx-2 text-muted pointer"></i>
                    <i class="fas fa-phone-alt mx-2 text-muted pointer"></i>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <!-- body -->
                <div class="modal-body p-0 overflow-auto" style="max-height: 300px">
                    <!-- message l -->
                    <li class="list-group-item border-0 d-flex">
                        <!-- avatar -->
                        <div>
                            <img src="https://source.unsplash.com/random/1" alt="avatar"
                                class="rounded-circle me-2" style="width: 28px; height: 28px; object-fit: cover" />
                        </div>
                        <!-- message -->
                        <p class="bg-gray p-2 rounded">Lorem, ipsum dolor</p>
                    </li>
                    <!-- message r -->
                    <li class="list-group-item border-0 d-flex justify-content-end">
                        <!-- message -->
                        <p class="bg-gray p-2 rounded">Lorem, ipsum dolor</p>
                        <!-- avatar -->
                        <div>
                            <img src="https://source.unsplash.com/collection/happy-people" alt="avatar"
                                class="rounded-circle ms-2" style="width: 28px; height: 28px; object-fit: cover" />
                        </div>
                    </li>
                    <!-- message l -->
                    <li class="list-group-item border-0 d-flex">
                        <!-- avatar -->
                        <div>
                            <img src="https://source.unsplash.com/random/1" alt="avatar"
                                class="rounded-circle me-2" style="width: 28px; height: 28px; object-fit: cover" />
                        </div>
                        <!-- message -->
                        <p class="bg-gray p-2 rounded">Lorem, ipsum dolor</p>
                    </li>
                    <!-- message r -->
                    <li class="list-group-item border-0 d-flex justify-content-end">
                        <!-- message -->
                        <p class="bg-gray p-2 rounded">Lorem, ipsum dolor</p>
                        <!-- avatar -->
                        <div>
                            <img src="https://source.unsplash.com/collection/happy-people" alt="avatar"
                                class="rounded-circle ms-2" style="width: 28px; height: 28px; object-fit: cover" />
                        </div>
                    </li>
                    <!-- message l -->
                    <li class="list-group-item border-0 d-flex">
                        <!-- avatar -->
                        <div>
                            <img src="https://source.unsplash.com/random/1" alt="avatar"
                                class="rounded-circle me-2" style="width: 28px; height: 28px; object-fit: cover" />
                        </div>
                        <!-- message -->
                        <p class="bg-gray p-2 rounded">Lorem, ipsum dolor</p>
                    </li>
                    <!-- message r -->
                    <li class="list-group-item border-0 d-flex justify-content-end">
                        <!-- message -->
                        <p class="bg-gray p-2 rounded">Lorem, ipsum dolor</p>
                        <!-- avatar -->
                        <div>
                            <img src="https://source.unsplash.com/collection/happy-people" alt="avatar"
                                class="rounded-circle ms-2" style="width: 28px; height: 28px; object-fit: cover" />
                        </div>
                    </li>
                </div>
                <!-- message input -->
                <div class="modal-footer p-0 m-0 border-0">
                    <div class="d-flex">
                        <div class="d-flex align-items-center">
                            <i class="fas fa-plus-circle mx-1 fs-5 text-muted pointer"></i>
                            <i class="far fa-file-image mx-1 fs-5 text-muted pointer"></i>
                            <i class="fas fa-portrait mx-1 fs-5 text-muted pointer"></i>
                            <i class="fas fa-adjust mx-1 fs-5 text-muted pointer"></i>
                        </div>
                        <div>
                            <input type="text" class="form-control rounded-pill border-0 bg-gray"
                                placeholder="Aa" />
                        </div>
                        <div class="d-flex align-items-center mx-2">
                            <i class="fas fa-thumbs-up fs-5 text-muted pointer"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- chat 2 -->
    <div class="modal fade" id="singleChat2" tabindex="-1" aria-labelledby="singleChat2Label" aria-hidden="true"
        data-bs-backdrop="false">
        <div class="modal-dialog modal-sm position-absolute bottom-0 end-0 w-17" style="transform: translateX(-80px)">
            <div class="modal-content border-0 shadow">
                <!-- head -->
                <div class="modal-header">
                    <div class="dropdown-item d-flex rounded" type="button" data-bs-container="body"
                        data-bs-toggle="popover" data-bs-placement="left"
                        data-bs-content='
          <div>
            <div class="popover-body d-flex flex-column p-0">
              <div class="d-flex align-items-center dropdown-item p-2 rounded pointer">
                <i class="far fa-comment me-3 fs-4"></i>
                <p class="m-0">Open Messenger App</p>
              </div>
              <div class="d-flex align-items-center dropdown-item p-2 rounded pointer">
                <i class="far fa-user me-3 fs-4"></i>
                <p class="m-0">Open Messenger App</p>
              </div>
              <hr>
              <div class="d-flex align-items-center dropdown-item p-2 rounded pointer">
                <i class="fas fa-fill-drip me-3 fs-4"></i>
                <p class="m-0">Color</p>
              </div>
              <div class="d-flex align-items-center dropdown-item p-2 rounded pointer">
                <i class="far fa-smile-beam me-3 fs-4"></i>
                <p class="m-0">Emoji</p>
              </div>
              <div class="d-flex align-items-center dropdown-item p-2 rounded pointer">
                <i class="fas fa-pencil-alt me-3 fs-4"></i>
                <p class="m-0">Nicknames</p>
              </div>
            </div>
          </div>
          '
                        data-bs-html="true">
                        <!-- avatar -->
                        <div class="position-relative">
                            <img src="https://source.unsplash.com/random/2" alt="avatar"
                                class="rounded-circle me-2" style="width: 38px; height: 38px; object-fit: cover" />
                            <span
                                class="
              position-absolute
              bottom-0
              translate-middle
              p-1
              bg-success
              border border-light
              rounded-circle
            "
                                style="left: 75%">
                                <span class="visually-hidden">New alerts</span>
                            </span>
                        </div>
                        <!-- name -->
                        <div>
                            <p class="m-0">Tuan <i class="fas fa-angle-down"></i></p>
                            <span class="text-muted fs-7">Active Now</span>
                        </div>
                    </div>
                    <!-- close -->
                    <i class="fas fa-video mx-2 text-muted pointer"></i>
                    <i class="fas fa-phone-alt mx-2 text-muted pointer"></i>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <!-- body -->
                <div class="modal-body p-0 overflow-auto" style="max-height: 300px">
                    <!-- message l -->
                    <li class="list-group-item border-0 d-flex">
                        <!-- avatar -->
                        <div>
                            <img src="https://source.unsplash.com/random/2" alt="avatar"
                                class="rounded-circle me-2" style="width: 28px; height: 28px; object-fit: cover" />
                        </div>
                        <!-- message -->
                        <p class="bg-gray p-2 rounded">Lorem, ipsum dolor</p>
                    </li>
                    <!-- message r -->
                    <li class="list-group-item border-0 d-flex justify-content-end">
                        <!-- message -->
                        <p class="bg-gray p-2 rounded">Lorem, ipsum dolor</p>
                        <!-- avatar -->
                        <div>
                            <img src="https://source.unsplash.com/collection/happy-people" alt="avatar"
                                class="rounded-circle ms-2" style="width: 28px; height: 28px; object-fit: cover" />
                        </div>
                    </li>
                    <!-- message l -->
                    <li class="list-group-item border-0 d-flex">
                        <!-- avatar -->
                        <div>
                            <img src="https://source.unsplash.com/random/2" alt="avatar"
                                class="rounded-circle me-2" style="width: 28px; height: 28px; object-fit: cover" />
                        </div>
                        <!-- message -->
                        <p class="bg-gray p-2 rounded">Lorem, ipsum dolor</p>
                    </li>
                    <!-- message r -->
                    <li class="list-group-item border-0 d-flex justify-content-end">
                        <!-- message -->
                        <p class="bg-gray p-2 rounded">Lorem, ipsum dolor</p>
                        <!-- avatar -->
                        <div>
                            <img src="https://source.unsplash.com/collection/happy-people" alt="avatar"
                                class="rounded-circle ms-2" style="width: 28px; height: 28px; object-fit: cover" />
                        </div>
                    </li>
                    <!-- message l -->
                    <li class="list-group-item border-0 d-flex">
                        <!-- avatar -->
                        <div>
                            <img src="https://source.unsplash.com/random/2" alt="avatar"
                                class="rounded-circle me-2" style="width: 28px; height: 28px; object-fit: cover" />
                        </div>
                        <!-- message -->
                        <p class="bg-gray p-2 rounded">Lorem, ipsum dolor</p>
                    </li>
                    <!-- message r -->
                    <li class="list-group-item border-0 d-flex justify-content-end">
                        <!-- message -->
                        <p class="bg-gray p-2 rounded">Lorem, ipsum dolor</p>
                        <!-- avatar -->
                        <div>
                            <img src="https://source.unsplash.com/collection/happy-people" alt="avatar"
                                class="rounded-circle ms-2" style="width: 28px; height: 28px; object-fit: cover" />
                        </div>
                    </li>
                </div>
                <!-- message input -->
                <div class="modal-footer p-0 m-0 border-0">
                    <div class="d-flex">
                        <div class="d-flex align-items-center">
                            <i class="fas fa-plus-circle mx-1 fs-5 text-muted pointer"></i>
                            <i class="far fa-file-image mx-1 fs-5 text-muted pointer"></i>
                            <i class="fas fa-portrait mx-1 fs-5 text-muted pointer"></i>
                            <i class="fas fa-adjust mx-1 fs-5 text-muted pointer"></i>
                        </div>
                        <div>
                            <input type="text" class="form-control rounded-pill border-0 bg-gray"
                                placeholder="Aa" />
                        </div>
                        <div class="d-flex align-items-center mx-2">
                            <i class="fas fa-thumbs-up fs-5 text-muted pointer"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- chat 3 -->
    <div class="modal fade" id="singleChat3" tabindex="-1" aria-labelledby="singleChat3Label" aria-hidden="true"
        data-bs-backdrop="false">
        <div class="modal-dialog modal-sm position-absolute bottom-0 end-0 w-17" style="transform: translateX(-80px)">
            <div class="modal-content border-0 shadow">
                <!-- head -->
                <div class="modal-header">
                    <div class="dropdown-item d-flex rounded" type="button" data-bs-container="body"
                        data-bs-toggle="popover" data-bs-placement="left"
                        data-bs-content='
              <div>
                <div class="popover-body d-flex flex-column p-0">
                  <div class="d-flex align-items-center dropdown-item p-2 rounded pointer">
                    <i class="far fa-comment me-3 fs-4"></i>
                    <p class="m-0">Open Messenger App</p>
                  </div>
                  <div class="d-flex align-items-center dropdown-item p-2 rounded pointer">
                    <i class="far fa-user me-3 fs-4"></i>
                    <p class="m-0">Open Messenger App</p>
                  </div>
                  <hr>
                  <div class="d-flex align-items-center dropdown-item p-2 rounded pointer">
                    <i class="fas fa-fill-drip me-3 fs-4"></i>
                    <p class="m-0">Color</p>
                  </div>
                  <div class="d-flex align-items-center dropdown-item p-2 rounded pointer">
                    <i class="far fa-smile-beam me-3 fs-4"></i>
                    <p class="m-0">Emoji</p>
                  </div>
                  <div class="d-flex align-items-center dropdown-item p-2 rounded pointer">
                    <i class="fas fa-pencil-alt me-3 fs-4"></i>
                    <p class="m-0">Nicknames</p>
                  </div>
                </div>
              </div>
              '
                        data-bs-html="true">
                        <!-- avatar -->
                        <div class="position-relative">
                            <img src="https://source.unsplash.com/random/2" alt="avatar"
                                class="rounded-circle me-2" style="width: 38px; height: 38px; object-fit: cover" />
                            <span
                                class="
              position-absolute
              bottom-0
              translate-middle
              p-1
              bg-success
              border border-light
              rounded-circle
            "
                                style="left: 75%">
                                <span class="visually-hidden">New alerts</span>
                            </span>
                        </div>
                        <!-- name -->
                        <div>
                            <p class="m-0">Jerry <i class="fas fa-angle-down"></i></p>
                            <span class="text-muted fs-7">Active Now</span>
                        </div>
                    </div>
                    <!-- close -->
                    <i class="fas fa-video mx-2 text-muted pointer"></i>
                    <i class="fas fa-phone-alt mx-2 text-muted pointer"></i>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <!-- body -->
                <div class="modal-body p-0 overflow-auto" style="max-height: 300px">
                    <!-- message l -->
                    <li class="list-group-item border-0 d-flex">
                        <!-- avatar -->
                        <div>
                            <img src="https://source.unsplash.com/random/3" alt="avatar"
                                class="rounded-circle me-2" style="width: 28px; height: 28px; object-fit: cover" />
                        </div>
                        <!-- message -->
                        <p class="bg-gray p-2 rounded">Lorem, ipsum dolor</p>
                    </li>
                    <!-- message r -->
                    <li class="list-group-item border-0 d-flex justify-content-end">
                        <!-- message -->
                        <p class="bg-gray p-2 rounded">Lorem, ipsum dolor</p>
                        <!-- avatar -->
                        <div>
                            <img src="https://source.unsplash.com/collection/happy-people" alt="avatar"
                                class="rounded-circle ms-2" style="width: 28px; height: 28px; object-fit: cover" />
                        </div>
                    </li>
                    <!-- message l -->
                    <li class="list-group-item border-0 d-flex">
                        <!-- avatar -->
                        <div>
                            <img src="https://source.unsplash.com/random/3" alt="avatar"
                                class="rounded-circle me-2" style="width: 28px; height: 28px; object-fit: cover" />
                        </div>
                        <!-- message -->
                        <p class="bg-gray p-2 rounded">Lorem, ipsum dolor</p>
                    </li>
                    <!-- message r -->
                    <li class="list-group-item border-0 d-flex justify-content-end">
                        <!-- message -->
                        <p class="bg-gray p-2 rounded">Lorem, ipsum dolor</p>
                        <!-- avatar -->
                        <div>
                            <img src="https://source.unsplash.com/collection/happy-people" alt="avatar"
                                class="rounded-circle ms-2" style="width: 28px; height: 28px; object-fit: cover" />
                        </div>
                    </li>
                    <!-- message l -->
                    <li class="list-group-item border-0 d-flex">
                        <!-- avatar -->
                        <div>
                            <img src="https://source.unsplash.com/random/3" alt="avatar"
                                class="rounded-circle me-2" style="width: 28px; height: 28px; object-fit: cover" />
                        </div>
                        <!-- message -->
                        <p class="bg-gray p-2 rounded">Lorem, ipsum dolor</p>
                    </li>
                    <!-- message r -->
                    <li class="list-group-item border-0 d-flex justify-content-end">
                        <!-- message -->
                        <p class="bg-gray p-2 rounded">Lorem, ipsum dolor</p>
                        <!-- avatar -->
                        <div>
                            <img src="https://source.unsplash.com/collection/happy-people" alt="avatar"
                                class="rounded-circle ms-2" style="width: 28px; height: 28px; object-fit: cover" />
                        </div>
                    </li>
                </div>
                <!-- message input -->
                <div class="modal-footer p-0 m-0 border-0">
                    <div class="d-flex">
                        <div class="d-flex align-items-center">
                            <i class="fas fa-plus-circle mx-1 fs-5 text-muted pointer"></i>
                            <i class="far fa-file-image mx-1 fs-5 text-muted pointer"></i>
                            <i class="fas fa-portrait mx-1 fs-5 text-muted pointer"></i>
                            <i class="fas fa-adjust mx-1 fs-5 text-muted pointer"></i>
                        </div>
                        <div>
                            <input type="text" class="form-control rounded-pill border-0 bg-gray"
                                placeholder="Aa" />
                        </div>
                        <div class="d-flex align-items-center mx-2">
                            <i class="fas fa-thumbs-up fs-5 text-muted pointer"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- chat 4 -->
    <div class="modal fade" id="singleChat4" tabindex="-1" aria-labelledby="singleChat4Label" aria-hidden="true"
        data-bs-backdrop="false">
        <div class="modal-dialog modal-sm position-absolute bottom-0 end-0 w-17" style="transform: translateX(-80px)">
            <div class="modal-content border-0 shadow">
                <!-- head -->
                <div class="modal-header">
                    <div class="dropdown-item d-flex rounded" type="button" data-bs-container="body"
                        data-bs-toggle="popover" data-bs-placement="left"
                        data-bs-content='
                <div>
                  <div class="popover-body d-flex flex-column p-0">
                    <div class="d-flex align-items-center dropdown-item p-2 rounded pointer">
                      <i class="far fa-comment me-3 fs-4"></i>
                      <p class="m-0">Open Messenger App</p>
                    </div>
                    <div class="d-flex align-items-center dropdown-item p-2 rounded pointer">
                      <i class="far fa-user me-3 fs-4"></i>
                      <p class="m-0">Open Messenger App</p>
                    </div>
                    <hr>
                    <div class="d-flex align-items-center dropdown-item p-2 rounded pointer">
                      <i class="fas fa-fill-drip me-3 fs-4"></i>
                      <p class="m-0">Color</p>
                    </div>
                    <div class="d-flex align-items-center dropdown-item p-2 rounded pointer">
                      <i class="far fa-smile-beam me-3 fs-4"></i>
                      <p class="m-0">Emoji</p>
                    </div>
                    <div class="d-flex align-items-center dropdown-item p-2 rounded pointer">
                      <i class="fas fa-pencil-alt me-3 fs-4"></i>
                      <p class="m-0">Nicknames</p>
                    </div>
                  </div>
                </div>
                '
                        data-bs-html="true">
                        <!-- avatar -->
                        <div class="position-relative">
                            <img src="https://source.unsplash.com/random/2" alt="avatar"
                                class="rounded-circle me-2" style="width: 38px; height: 38px; object-fit: cover" />
                            <span
                                class="
              position-absolute
              bottom-0
              translate-middle
              p-1
              bg-success
              border border-light
              rounded-circle
            "
                                style="left: 75%">
                                <span class="visually-hidden">New alerts</span>
                            </span>
                        </div>
                        <!-- name -->
                        <div>
                            <p class="m-0">Tony <i class="fas fa-angle-down"></i></p>
                            <span class="text-muted fs-7">Active Now</span>
                        </div>
                    </div>
                    <!-- close -->
                    <i class="fas fa-video mx-2 text-muted pointer"></i>
                    <i class="fas fa-phone-alt mx-2 text-muted pointer"></i>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <!-- body -->
                <div class="modal-body p-0 overflow-auto" style="max-height: 300px">
                    <!-- message l -->
                    <li class="list-group-item border-0 d-flex">
                        <!-- avatar -->
                        <div>
                            <img src="https://source.unsplash.com/random/4" alt="avatar"
                                class="rounded-circle me-2" style="width: 28px; height: 28px; object-fit: cover" />
                        </div>
                        <!-- message -->
                        <p class="bg-gray p-2 rounded">Lorem, ipsum dolor</p>
                    </li>
                    <!-- message r -->
                    <li class="list-group-item border-0 d-flex justify-content-end">
                        <!-- message -->
                        <p class="bg-gray p-2 rounded">Lorem, ipsum dolor</p>
                        <!-- avatar -->
                        <div>
                            <img src="https://source.unsplash.com/collection/happy-people" alt="avatar"
                                class="rounded-circle ms-2" style="width: 28px; height: 28px; object-fit: cover" />
                        </div>
                    </li>
                    <!-- message l -->
                    <li class="list-group-item border-0 d-flex">
                        <!-- avatar -->
                        <div>
                            <img src="https://source.unsplash.com/random/4" alt="avatar"
                                class="rounded-circle me-2" style="width: 28px; height: 28px; object-fit: cover" />
                        </div>
                        <!-- message -->
                        <p class="bg-gray p-2 rounded">Lorem, ipsum dolor</p>
                    </li>
                    <!-- message r -->
                    <li class="list-group-item border-0 d-flex justify-content-end">
                        <!-- message -->
                        <p class="bg-gray p-2 rounded">Lorem, ipsum dolor</p>
                        <!-- avatar -->
                        <div>
                            <img src="https://source.unsplash.com/collection/happy-people" alt="avatar"
                                class="rounded-circle ms-2" style="width: 28px; height: 28px; object-fit: cover" />
                        </div>
                    </li>
                    <!-- message l -->
                    <li class="list-group-item border-0 d-flex">
                        <!-- avatar -->
                        <div>
                            <img src="https://source.unsplash.com/random/4" alt="avatar"
                                class="rounded-circle me-2" style="width: 28px; height: 28px; object-fit: cover" />
                        </div>
                        <!-- message -->
                        <p class="bg-gray p-2 rounded">Lorem, ipsum dolor</p>
                    </li>
                    <!-- message r -->
                    <li class="list-group-item border-0 d-flex justify-content-end">
                        <!-- message -->
                        <p class="bg-gray p-2 rounded">Lorem, ipsum dolor</p>
                        <!-- avatar -->
                        <div>
                            <img src="https://source.unsplash.com/collection/happy-people" alt="avatar"
                                class="rounded-circle ms-2" style="width: 28px; height: 28px; object-fit: cover" />
                        </div>
                    </li>
                </div>
                <!-- message input -->
                <div class="modal-footer p-0 m-0 border-0">
                    <div class="d-flex">
                        <div class="d-flex align-items-center">
                            <i class="fas fa-plus-circle mx-1 fs-5 text-muted pointer"></i>
                            <i class="far fa-file-image mx-1 fs-5 text-muted pointer"></i>
                            <i class="fas fa-portrait mx-1 fs-5 text-muted pointer"></i>
                            <i class="fas fa-adjust mx-1 fs-5 text-muted pointer"></i>
                        </div>
                        <div>
                            <input type="text" class="form-control rounded-pill border-0 bg-gray"
                                placeholder="Aa" />
                        </div>
                        <div class="d-flex align-items-center mx-2">
                            <i class="fas fa-thumbs-up fs-5 text-muted pointer"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- chat 5 -->
    <div class="modal fade" id="singleChat5" tabindex="-1" aria-labelledby="singleChat5Label" aria-hidden="true"
        data-bs-backdrop="false">
        <div class="modal-dialog modal-sm position-absolute bottom-0 end-0 w-17" style="transform: translateX(-80px)">
            <div class="modal-content border-0 shadow">
                <!-- head -->
                <div class="modal-header">
                    <div class="dropdown-item d-flex rounded" type="button" data-bs-container="body"
                        data-bs-toggle="popover" data-bs-placement="left"
                        data-bs-content='
                    <div>
                      <div class="popover-body d-flex flex-column p-0">
                        <div class="d-flex align-items-center dropdown-item p-2 rounded pointer">
                          <i class="far fa-comment me-3 fs-4"></i>
                          <p class="m-0">Open Messenger App</p>
                        </div>
                        <div class="d-flex align-items-center dropdown-item p-2 rounded pointer">
                          <i class="far fa-user me-3 fs-4"></i>
                          <p class="m-0">Open Messenger App</p>
                        </div>
                        <hr>
                        <div class="d-flex align-items-center dropdown-item p-2 rounded pointer">
                          <i class="fas fa-fill-drip me-3 fs-4"></i>
                          <p class="m-0">Color</p>
                        </div>
                        <div class="d-flex align-items-center dropdown-item p-2 rounded pointer">
                          <i class="far fa-smile-beam me-3 fs-4"></i>
                          <p class="m-0">Emoji</p>
                        </div>
                        <div class="d-flex align-items-center dropdown-item p-2 rounded pointer">
                          <i class="fas fa-pencil-alt me-3 fs-4"></i>
                          <p class="m-0">Nicknames</p>
                        </div>
                      </div>
                    </div>
                    '
                        data-bs-html="true">
                        <!-- avatar -->
                        <div class="position-relative">
                            <img src="https://source.unsplash.com/random/2" alt="avatar"
                                class="rounded-circle me-2" style="width: 38px; height: 38px; object-fit: cover" />
                            <span
                                class="
              position-absolute
              bottom-0
              translate-middle
              p-1
              bg-success
              border border-light
              rounded-circle
            "
                                style="left: 75%">
                                <span class="visually-hidden">New alerts</span>
                            </span>
                        </div>
                        <!-- name -->
                        <div>
                            <p class="m-0">Phu <i class="fas fa-angle-down"></i></p>
                            <span class="text-muted fs-7">Active Now</span>
                        </div>
                    </div>
                    <!-- close -->
                    <i class="fas fa-video mx-2 text-muted pointer"></i>
                    <i class="fas fa-phone-alt mx-2 text-muted pointer"></i>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <!-- body -->
                <div class="modal-body p-0 overflow-auto" style="max-height: 300px">
                    <!-- message l -->
                    <li class="list-group-item border-0 d-flex">
                        <!-- avatar -->
                        <div>
                            <img src="https://source.unsplash.com/random/5" alt="avatar"
                                class="rounded-circle me-2" style="width: 28px; height: 28px; object-fit: cover" />
                        </div>
                        <!-- message -->
                        <p class="bg-gray p-2 rounded">Lorem, ipsum dolor</p>
                    </li>
                    <!-- message r -->
                    <li class="list-group-item border-0 d-flex justify-content-end">
                        <!-- message -->
                        <p class="bg-gray p-2 rounded">Lorem, ipsum dolor</p>
                        <!-- avatar -->
                        <div>
                            <img src="https://source.unsplash.com/collection/happy-people" alt="avatar"
                                class="rounded-circle ms-2" style="width: 28px; height: 28px; object-fit: cover" />
                        </div>
                    </li>
                    <!-- message l -->
                    <li class="list-group-item border-0 d-flex">
                        <!-- avatar -->
                        <div>
                            <img src="https://source.unsplash.com/random/5" alt="avatar"
                                class="rounded-circle me-2" style="width: 28px; height: 28px; object-fit: cover" />
                        </div>
                        <!-- message -->
                        <p class="bg-gray p-2 rounded">Lorem, ipsum dolor</p>
                    </li>
                    <!-- message r -->
                    <li class="list-group-item border-0 d-flex justify-content-end">
                        <!-- message -->
                        <p class="bg-gray p-2 rounded">Lorem, ipsum dolor</p>
                        <!-- avatar -->
                        <div>
                            <img src="https://source.unsplash.com/collection/happy-people" alt="avatar"
                                class="rounded-circle ms-2" style="width: 28px; height: 28px; object-fit: cover" />
                        </div>
                    </li>
                    <!-- message l -->
                    <li class="list-group-item border-0 d-flex">
                        <!-- avatar -->
                        <div>
                            <img src="https://source.unsplash.com/random/5" alt="avatar"
                                class="rounded-circle me-2" style="width: 28px; height: 28px; object-fit: cover" />
                        </div>
                        <!-- message -->
                        <p class="bg-gray p-2 rounded">Lorem, ipsum dolor</p>
                    </li>
                    <!-- message r -->
                    <li class="list-group-item border-0 d-flex justify-content-end">
                        <!-- message -->
                        <p class="bg-gray p-2 rounded">Lorem, ipsum dolor</p>
                        <!-- avatar -->
                        <div>
                            <img src="https://source.unsplash.com/collection/happy-people" alt="avatar"
                                class="rounded-circle ms-2" style="width: 28px; height: 28px; object-fit: cover" />
                        </div>
                    </li>
                </div>
                <!-- message input -->
                <div class="modal-footer p-0 m-0 border-0">
                    <div class="d-flex">
                        <div class="d-flex align-items-center">
                            <i class="fas fa-plus-circle mx-1 fs-5 text-muted pointer"></i>
                            <i class="far fa-file-image mx-1 fs-5 text-muted pointer"></i>
                            <i class="fas fa-portrait mx-1 fs-5 text-muted pointer"></i>
                            <i class="fas fa-adjust mx-1 fs-5 text-muted pointer"></i>
                        </div>
                        <div>
                            <input type="text" class="form-control rounded-pill border-0 bg-gray"
                                placeholder="Aa" />
                        </div>
                        <div class="d-flex align-items-center mx-2">
                            <i class="fas fa-thumbs-up fs-5 text-muted pointer"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ================= Main ================= -->
    <div class="container-fluid">
        <div class="row justify-content-evenly">
            <!-- ================= Sidebar ================= -->
            <div class="col-12 col-lg-3">
                <div class="d-none d-xxl-block h-100 fixed-top overflow-hidden scrollbar"
                    style="max-width: 360px; width: 100%; z-index: 4">
                    <ul class="navbar-nav mt-4 ms-3 d-flex flex-column pb-5 mb-5" style="padding-top: 56px">
                        <!-- top -->
                        <!-- avatar -->
                        <li class="dropdown-item p-1 rounded">
                            <a href="#"
                                class="
                  d-flex
                  align-items-center
                  text-decoration-none text-dark
                ">
                                <div class="p-2">
                                    <img src="https://source.unsplash.com/collection/happy-people" alt="avatar"
                                        class="rounded-circle me-2"
                                        style="width: 38px; height: 38px; object-fit: cover" />
                                </div>
                                <div>
                                    <p class="m-0"><span></p>
                                </div>
                            </a>
                        </li>
                        <!-- top 1 -->
                        <li class="dropdown-item p-1 rounded">
                            <a href="#"
                                class="
                  d-flex
                  align-items-center
                  text-decoration-none text-dark
                ">
                                <div class="p-2">
                                    <img src="https://static.xx.fbcdn.net/rsrc.php/v3/yj/r/tSXYIzZlfrS.png"
                                        alt="from fb" class="rounded-circle"
                                        style="width: 38px; height: 38px; object-fit: cover" />
                                </div>
                                <div>
                                    <p class="m-0">Friends</p>
                                </div>
                            </a>
                        </li>
                        <!-- top 2 -->
                        <li class="dropdown-item p-1 rounded">
                            <a href="#"
                                class="
                  d-flex
                  align-items-center
                  text-decoration-none text-dark
                ">
                                <div class="p-2">
                                    <img src="https://static.xx.fbcdn.net/rsrc.php/v3/yj/r/Im_0d7HFH4n.png"
                                        alt="from fb" class="rounded-circle"
                                        style="width: 38px; height: 38px; object-fit: cover" />
                                </div>
                                <div>
                                    <p class="m-0">Groups</p>
                                    <i class="fas fa-circle text-primary" style="font-size: 0.5rem !important"></i>
                                    <span class="fs-7 text-primary"> 1 new</span>
                                </div>
                            </a>
                        </li>
                        <!-- top 3 -->
                        <li class="dropdown-item p-1">
                            <a href="#"
                                class="
                  d-flex
                  align-items-center
                  justify-content-between
                  text-decoration-none text-dark
                ">
                                <div class="d-flex align-items-center justify-content-evenly">
                                    <div class="p-2">
                                        <img src="https://static.xx.fbcdn.net/rsrc.php/v3/yj/r/0gH3vbvr8Ee.png"
                                            alt="from fb" class="rounded-circle"
                                            style="width: 38px; height: 38px; object-fit: cover" />
                                    </div>
                                    <div>
                                        <p class="m-0">Pages</p>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <!-- top 4 -->
                        <li class="dropdown-item p-1">
                            <a href="#"
                                class="
                  d-flex
                  align-items-center
                  justify-content-between
                  text-decoration-none text-dark
                ">
                                <div class="d-flex align-items-center justify-content-evenly">
                                    <div class="p-2">
                                        <img src="https://static.xx.fbcdn.net/rsrc.php/v3/y4/r/MN44Sm-CTHN.png"
                                            alt="from fb" class="rounded-circle"
                                            style="width: 38px; height: 38px; object-fit: cover" />
                                    </div>
                                    <div>
                                        <p class="m-0">Marketplace</p>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <!-- top 5 -->
                        <li class="dropdown-item p-1">
                            <a href="#"
                                class="
                  d-flex
                  align-items-center
                  justify-content-between
                  text-decoration-none text-dark
                ">
                                <div class="d-flex align-items-center justify-content-evenly">
                                    <div class="p-2">
                                        <img src="https://static.xx.fbcdn.net/rsrc.php/v3/y-/r/FhOLTyUFKwf.png"
                                            alt="from fb" class="rounded-circle"
                                            style="width: 38px; height: 38px; object-fit: cover" />
                                    </div>
                                    <div>
                                        <p class="m-0">About Us</p>
                                        <i class="fas fa-circle text-primary"
                                            style="font-size: 0.5rem !important"></i>
                                        <span class="fs-7 text-primary"> 9+ new videos</span>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <!-- see more -->
                        <li class="p-1" type="button">
                            <div id="accordionFlushExample">
                                <div>
                                    <!-- see more button -->
                                    <div class="d-flex align-items-center" data-bs-toggle="collapse"
                                        data-bs-target="#flush-collapseOne" aria-expanded="false"
                                        aria-controls="flush-collapseOne">
                                        <div class="p-2">
                                            <i class="fas fa-chevron-down rounded-circle p-2"
                                                style="background-color: #d5d5d5 !important"></i>
                                        </div>
                                        <div>
                                            <p class="m-0">See More</p>
                                        </div>
                                    </div>
                                    <!-- content -->
                                    <div id="flush-collapseOne" class="accordion-collapse collapse"
                                        aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                                        <div>
                                            <!-- item 1 -->
                                            <div
                                                class="
                          d-flex
                          align-items-center
                          dropdown-item
                          p-0
                          m-0
                        ">
                                                <div class="p-2">
                                                    <img src="https://static.xx.fbcdn.net/rsrc.php/v3/yj/r/Y7r38CcFEw5.png"
                                                        alt="from fb" class="rounded-circle"
                                                        style="
                              width: 38px;
                              height: 38px;
                              object-fit: cover;
                            " />
                                                </div>
                                                <div>
                                                    <p class="m-0">Campus</p>
                                                </div>
                                            </div>
                                            <!-- item 2 -->
                                            <div
                                                class="
                          d-flex
                          align-items-center
                          dropdown-item
                          p-0
                          m-0
                        ">
                                                <div class="p-2">
                                                    <img src="https://static.xx.fbcdn.net/rsrc.php/v3/yx/r/N7UOh8REweU.png"
                                                        alt="from fb" class="rounded-circle"
                                                        style="
                              width: 38px;
                              height: 38px;
                              object-fit: cover;
                            " />
                                                </div>
                                                <div>
                                                    <p class="m-0">Events</p>
                                                </div>
                                            </div>
                                            <!-- item 3 -->
                                            <div
                                                class="
                          d-flex
                          align-items-center
                          dropdown-item
                          p-0
                          m-0
                        ">
                                                <div class="p-2">
                                                    <img src="https://static.xx.fbcdn.net/rsrc.php/v3/yo/r/hLkEFzsCyXC.png"
                                                        alt="from fb" class="rounded-circle"
                                                        style="
                              width: 38px;
                              height: 38px;
                              object-fit: cover;
                            " />
                                                </div>
                                                <div>
                                                    <p class="m-0">Newsfeed</p>
                                                </div>
                                            </div>
                                            <!-- end -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <hr class="m-0" />
                        <!-- shortcuts -->
                        <!-- heading -->
                        <div
                            class="
                d-flex
                justify-content-between
                align-items-center
                mt-2
                text-muted
                edit-heading
              ">
                            <h4 class="m-0 pointer">Your Shorcuts</h4>
                            <p class="m-0 text-primary me-3 pointer edit-button" type="button"
                                data-bs-toggle="modal" data-bs-target="#shortCutModal">
                                Edit
                            </p>
                            <!-- modal -->
                            <div class="modal fade" id="shortCutModal" tabindex="-1"
                                aria-labelledby="shortCutModalLabel" aria-hidden="true" data-bs-backdrop="false">
                                <div class="modal-dialog modal-dialog-centered">
                                    <div class="modal-content">
                                        <!-- head -->
                                        <div class="modal-header align-items-center">
                                            <h5 class="text-dark text-center w-100 m-0" id="exampleModalLabel">
                                                Edit Your ShortCuts
                                            </h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                        </div>
                                        <!-- body -->
                                        <div class="modal-body">
                                            <p class="text-muted">
                                                Shortcuts provide quick access to what you do most on
                                                Facebook. Your Shortcuts are sorted automatically, but
                                                you can pin something so it's always shown at the top
                                                or hide it from the list.
                                            </p>
                                            <!-- Search -->
                                            <div class="p-1">
                                                <div class="
                            input-group-text
                            bg-gray
                            border-0
                            rounded-pill
                          "
                                                    style="min-height: 40px; min-width: 230px">
                                                    <i class="fas fa-search me-2 text-muted"></i>
                                                    <input type="text"
                                                        class="form-control rounded-pill border-0 bg-gray"
                                                        placeholder="Search your Pages, groups, games, and events" />
                                                </div>
                                            </div>
                                            <!-- short-1 -->
                                            <li class="my-1 p-1">
                                                <div
                                                    class="
                            d-flex
                            align-items-center
                            justify-content-between
                            text-decoration-none text-dark
                          ">
                                                    <div
                                                        class="
                              d-flex
                              align-items-center
                              justify-content-evenly
                            ">
                                                        <div class="p-2">
                                                            <img src="https://source.unsplash.com/random/1"
                                                                alt="from fb"
                                                                class="
                                  rounded
                                  border border-1 border-secondary
                                "
                                                                style="
                                  width: 38px;
                                  height: 38px;
                                  object-fit: cover;
                                " />
                                                        </div>
                                                        <div>
                                                            <p class="m-0">Lorem Ipsum</p>
                                                        </div>
                                                    </div>
                                                    <select class="form-select w-50 border-0 bg-gray"
                                                        aria-label="Default select example">
                                                        <option selected value="1">
                                                            Short Automatically
                                                        </option>
                                                        <option value="2">Pin To Top</option>
                                                        <option value="3">Hide</option>
                                                    </select>
                                                </div>
                                            </li>
                                            <!-- short-2 -->
                                            <li class="my-1 p-1">
                                                <div
                                                    class="
                            d-flex
                            align-items-center
                            justify-content-between
                            text-decoration-none text-dark
                          ">
                                                    <div
                                                        class="
                              d-flex
                              align-items-center
                              justify-content-evenly
                            ">
                                                        <div class="p-2">
                                                            <img src="https://source.unsplash.com/random/2"
                                                                alt="from fb"
                                                                class="
                                  rounded
                                  border border-1 border-secondary
                                "
                                                                style="
                                  width: 38px;
                                  height: 38px;
                                  object-fit: cover;
                                " />
                                                        </div>
                                                        <div>
                                                            <p class="m-0">Lorem Ipsum</p>
                                                        </div>
                                                    </div>
                                                    <select class="form-select w-50 border-0 bg-gray"
                                                        aria-label="Default select example">
                                                        <option selected value="1">
                                                            Short Automatically
                                                        </option>
                                                        <option value="2">Pin To Top</option>
                                                        <option value="3">Hide</option>
                                                    </select>
                                                </div>
                                            </li>
                                            <!-- short-3 -->
                                            <li class="my-1 p-1">
                                                <div
                                                    class="
                            d-flex
                            align-items-center
                            justify-content-between
                            text-decoration-none text-dark
                          ">
                                                    <div
                                                        class="
                              d-flex
                              align-items-center
                              justify-content-evenly
                            ">
                                                        <div class="p-2">
                                                            <img src="https://source.unsplash.com/random/3"
                                                                alt="from fb"
                                                                class="
                                  rounded
                                  border border-1 border-secondary
                                "
                                                                style="
                                  width: 38px;
                                  height: 38px;
                                  object-fit: cover;
                                " />
                                                        </div>
                                                        <div>
                                                            <p class="m-0">Lorem Ipsum</p>
                                                        </div>
                                                    </div>
                                                    <select class="form-select w-50 border-0 bg-gray"
                                                        aria-label="Default select example">
                                                        <option selected value="1">
                                                            Short Automatically
                                                        </option>
                                                        <option value="2">Pin To Top</option>
                                                        <option value="3">Hide</option>
                                                    </select>
                                                </div>
                                            </li>
                                            <!-- end -->
                                        </div>
                                        <!-- footer -->
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-light text-primary"
                                                data-bs-dismiss="modal">
                                                Close
                                            </button>
                                            <button type="button" class="btn btn-primary">
                                                Save changes
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- end -->
                        </div>
                        <!-- short 1 -->
                        <li class="dropdown-item p-1">
                            <a href="#"
                                class="
                  d-flex
                  align-items-center
                  text-decoration-none text-dark
                ">
                                <div class="p-2">
                                    <img src="https://source.unsplash.com/random/1" alt="from fb"
                                        class="rounded border border-1 border-secondary"
                                        style="width: 38px; height: 38px; object-fit: cover" />
                                </div>
                                <div>
                                    <p class="m-0">Lorem Ipsum</p>
                                </div>
                            </a>
                        </li>
                        <!-- short-2 -->
                        <li class="dropdown-item p-1">
                            <a href=""
                                class="
                  d-flex
                  align-items-center
                  text-decoration-none text-dark
                ">
                                <div class="p-2">
                                    <img src="https://source.unsplash.com/random/2" alt="from fb"
                                        class="rounded border border-1 border-secondary"
                                        style="width: 38px; height: 38px; object-fit: cover" />
                                </div>
                                <div>
                                    <p class="m-0">Lorem Ipsum</p>
                                </div>
                            </a>
                        </li>
                        <!-- short-3 -->
                        <li class="dropdown-item p-1">
                            <a href=""
                                class="
                  d-flex
                  align-items-center
                  text-decoration-none text-dark
                ">
                                <div class="p-2">
                                    <img src="https://source.unsplash.com/random/3" alt="from fb"
                                        class="rounded border border-1 border-secondary"
                                        style="width: 38px; height: 38px; object-fit: cover" />
                                </div>
                                <div>
                                    <p class="m-0">Lorem Ipsum</p>
                                </div>
                            </a>
                        </li>
                        <!-- see more -->
                        <li class="p-1" type="button">
                            <div id="accordionFlushExample">
                                <div>
                                    <!-- see more button -->
                                    <div class="d-flex align-items-center" data-bs-toggle="collapse"
                                        data-bs-target="#shortModal" aria-expanded="false"
                                        aria-controls="shortModal">
                                        <div class="p-2">
                                            <i class="fas fa-chevron-down rounded-circle p-2"
                                                style="background-color: #d5d5d5 !important"></i>
                                        </div>
                                        <div>
                                            <p class="m-0">See More</p>
                                        </div>
                                    </div>
                                    <!-- content -->
                                    <div id="shortModal" class="accordion-collapse collapse"
                                        aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                                        <div>
                                            <!-- item 1 -->
                                            <div
                                                class="
                          d-flex
                          align-items-center
                          dropdown-item
                          p-0
                          m-0
                        ">
                                                <div class="p-2">
                                                    <img src="https://source.unsplash.com/random/4" alt="from fb"
                                                        class="rounded border border-1 border-secondary"
                                                        style="
                              width: 38px;
                              height: 38px;
                              object-fit: cover;
                            " />
                                                </div>
                                                <div>
                                                    <p class="m-0">Campus</p>
                                                </div>
                                            </div>
                                            <!-- item 2 -->
                                            <div
                                                class="
                          d-flex
                          align-items-center
                          dropdown-item
                          p-0
                          m-0
                        ">
                                                <div class="p-2">
                                                    <img src="https://source.unsplash.com/random/5" alt="from fb"
                                                        class="rounded border border-1 border-secondary"
                                                        style="
                              width: 38px;
                              height: 38px;
                              object-fit: cover;
                            " />
                                                </div>
                                                <div>
                                                    <p class="m-0">Events</p>
                                                </div>
                                            </div>
                                            <!-- item 3 -->
                                            <div
                                                class="
                          d-flex
                          align-items-center
                          dropdown-item
                          p-0
                          m-0
                        ">
                                                <div class="p-2">
                                                    <img src="https://source.unsplash.com/random/6" alt="from fb"
                                                        class="rounded border border-1 border-secondary"
                                                        style="
                              width: 38px;
                              height: 38px;
                              object-fit: cover;
                            " />
                                                </div>
                                                <div>
                                                    <p class="m-0">Newsfeed</p>
                                                </div>
                                            </div>
                                            <!-- end -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                    <!-- terms -->
                    <div class="p-2 mt-5">
                        <p class="text-muted fs-7">
                            Privacy &#8226; Terms &#8226; Advertising &#8226; Ad Choices
                            &#8226; Cookies &#8226; Flexbook © 2021
                        </p>
                    </div>
                </div>
            </div>



            <!------------main--------------->

            <div class="main">

                <!------------------left------------------->

                <div class="left">
                    <a href="{{ url('user/home') }}" class="img-link">
                        <div class="img">
                            <div class="img">
                                <img src="{{ asset('image/saved.png') }}">
                                <p>News Feed</p>
                            </div>
                    </a>
                </div>
                <a href="{{ url('user/bookedvisit') }}" class="img-link">
                    <div class="img">
                        <img src="{{ asset('image/saved.png') }}">
                        <p>Booked Visit</p>
                    </div>
                </a>
                <a href="{{ url('user/rentedhall') }}" class="img-link">
                    <div class="img">
                        <img src="{{ asset('image/saved.png') }}">
                        <p>Functional Hall</p>
                    </div>
                </a>


                <div>
                    <hr>
                    <h8 class="text-muted">More Abouts<h8>
                </div>
                <a href="{{ url('') }}" class="img-link">
                    <div class="img">
                        <img src="{{ asset('image/saved.png') }}">
                        <p>About the museum</p>
                    </div>
                </a>
                <a href="{{ url('') }}" class="img-link">
                    <div class="img">
                        <img src="{{ asset('image/saved.png') }}">
                        <p>VMGO</p>
                    </div>
                </a>
                <div class="img">
                    <img src="{{ asset('image/down_arrow.png') }}">
                    <p>See more</p>
                </div>
            </div>

            {{-- ---------center---------- --}}

            <div class="center">
                <div class="row">
                    <div class="col-xs-20 col-sm-20">
                        <div class="card">
                            <div class="card-header custom-header">
                                @if(session('success'))
                                <div class="alert alert-success" role="alert">
                                    {{ session('success') }}
                                </div>
                            @endif
                            @if(session('failed'))
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
                                                            <p> <span style="color: gray">{{ $visits->visits_status }}</span></p>
                                                        @elseif ($visits->visits_status == 'CANCELLED')
                                                            <p><span >{{ $visits->visits_status }}</span></p>
                                                        @else
                                                            <p><span style="color: green">{{ $visits->visits_status }}</span></p>
                                                        @endif</div>
                                                    </div>
                                                    <div class="row">

                                                        <div class="col-sm-6 top-left">
                                                            {{-- <i class="fa fa-rocket"></i> --}}
                                                            <img src="{{ asset('omhms.png') }}" alt=""
                                                                style="width: 90px; height: 70px"></img>
                                                        </div>

                                                        <div class="col-sm-6 top-right">
                                                            <h3 class="marginright" style="margin-top: 10px">RESERVATION OVERVIEW</h3>
                                                            <span class="marginright">{{ date('l, F j, Y') }}</span>
                                                        </div>

                                                    </div>
                                                    <hr>
                                                    <div class="row">

                                                        {{-- <div class="col from"> --}}
                                                            <p class="lead marginbottom"><strong>From : Oriental Mindoro Heritage Museum</strong></p>

                                                                <div class="post" style="line-height: 20px">
                                                                    @if ($visits->gender == 'female')
                                                                    <p>Hi, Ms. {{ $visits->visits_lname }}, {{ $visits->visits_fname }} {{ $visits->visits_mname }}.</p>
                                                                    @else
                                                                        <p>Hi, Mr. {{ $visits->visits_lname }}, {{ $visits->visits_fname }} {{ $visits->visits_mname }}.</p>
                                                                    @endif
                                                                    <p>This is your Reservation for Visitation</p>
                                                                    <p>You are from {{ $visits->visits_street }}, {{ $visits->visits_brgy }}, {{ $visits->visits_municipality }}, {{ $visits->visits_province }}, {{ $visits->visits_country }}, with the zipcode {{ $visits->visits_zipcode }}.</p>
                                                                    <p>Your selected date is {{ date('F d, Y', strtotime($visits->visits_intended_date)) }} at {{ $visits->visits_time }}.</p>
                                                                    @if ($visits->visits_name_of_institution != null)
                                                                        <p>You are from {{ $visits->visits_name_of_institution }} Institution and you're with your</p>
                                                                    @endif
                                                                    @if ($visits->visits_no_of_visitors != null)
                                                                        <p>{{ $visits->visits_no_of_visitors }} members</p>
                                                                    @endif

                                                                    {{-- {!! QrCode::size(300)->backgroundColor(255,90,0)->generate($QRcode) !!} --}}



                                                                    {{-- <p> Due to:</p> --}}

                             _                                       <p>We will send you an email notification for the status of your reservation. If you have a clarification with your booking information, please contact us at our contact number or email account</p>
                                                                    <p>Contact Number: 09151949345</p>
                                                                    <p>Email: omhms@gmail.com</p>
                                                                </div>
                                                                <form action="{{url('user/cancel-visit-form')}}">
                                                                    @csrf
                                                                    <button type="submit" class="btn btn-danger">cancel</button>
                                                                </form>
                                                            @endforeach
                                                        @endif
                                                    </div>

                                                    <hr>
                                                    <div class="row">
                                                        <div class="col-xs-6 margintop">
                                                            <p class="lead marginbottom" style="margin-left:350px">
                                                                <strong>THANK YOU!</strong></p>

                                                            <button class="btn btn-success" id="invoice-print"
                                                                style="margin-left:735px; margin-bottom:20px"><i
                                                                    class="fa fa-history"></i>View History</button>
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


     <!-- Bootstrap JS -->
     <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
     <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
     <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous

</html>
