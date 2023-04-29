<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- fontawesome -->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"
      integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
    <!-- bootstrap -->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU"
      crossorigin="anonymous"
    />
    <!-- main style -->
    <link rel="stylesheet" href="{{asset('main.css')}}" />
    <title>OMHMS</title>
  </head>
  <body class="bg-gray postion-relative">
    <!-- ================= Appbar ================= -->
    <div
      class="bg-white d-flex align-items-center fixed-top shadow"
      style="min-height: 56px; z-index: 5"
    >
      <div class="container-fluid">
        <div class="row align-items-center">
          <!-- search -->
          <div class="col d-flex align-items-center">
            <!-- logo -->
            <img src="{{asset('omhms.png')}}" alt=""  style="width: 40px; height:40px">OMHMS</img>
            <!-- search bar -->
            <div class="input-group ms-2" type="button">
              <!-- mobile -->

              <ul
                class="dropdown-menu overflow-auto border-0 shadow p-3"
                aria-labelledby="searchMenu"
                style="width: 20em; max-height: 600px"
              >
                <!-- search input -->
                <li>
                  <input
                    type="text"
                    class="rounded-pill border-0 bg-gray dropdown-item"
                    placeholder="Search Flexbook..."
                    autofocus
                  />
                </li>
                <!-- search 1 -->
                <li class="my-4">
                  <div
                    class="
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
                    role="alert"
                  >
                    <div class="d-flex align-items-center">
                      <img
                        src="https://source.unsplash.com/random/1"
                        alt="avatar"
                        class="rounded-circle me-2"
                        style="width: 35px; height: 35px; object-fit: cover"
                      />
                      <p class="m-0">Lorem ipsum</p>
                    </div>
                    <button
                      type="button"
                      class="btn-close p-0 m-0"
                      data-bs-dismiss="alert"
                      aria-label="Close"
                    ></button>
                  </div>
                </li>
                <!-- search 2 -->
                <li class="my-4">
                  <div
                    class="
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
                    role="alert"
                  >
                    <div class="d-flex align-items-center">
                      <img
                        src="https://source.unsplash.com/random/2"
                        alt="avatar"
                        class="rounded-circle me-2"
                        style="width: 35px; height: 35px; object-fit: cover"
                      />
                      <p class="m-0">Lorem ipsum</p>
                    </div>
                    <button
                      type="button"
                      class="btn-close p-0 m-0"
                      data-bs-dismiss="alert"
                      aria-label="Close"
                    ></button>
                  </div>
                </li>
                <!-- search 3 -->
                <li class="my-4">
                  <div
                    class="
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
                    role="alert"
                  >
                    <div class="d-flex align-items-center">
                      <img
                        src="https://source.unsplash.com/random/3"
                        alt="avatar"
                        class="rounded-circle me-2"
                        style="width: 35px; height: 35px; object-fit: cover"
                      />
                      <p class="m-0">Lorem ipsum</p>
                    </div>
                    <button
                      type="button"
                      class="btn-close p-0 m-0"
                      data-bs-dismiss="alert"
                      aria-label="Close"
                    ></button>
                  </div>
                </li>
              </ul>
            </div>
          </div>
          <!-- nav -->
          <div class="col d-none d-xl-flex justify-content-center">

          <!-- menus -->
          <div class="col d-flex align-items-center justify-content-end">
            <!-- avatar -->
            <div
              class="align-items-center justify-content-center d-none d-xl-flex"
            >
              <img
                src="https://source.unsplash.com/collection/happy-people"
                class="rounded-circle me-2"
                alt="avatar"
                style="width: 38px; height: 38px; object-fit: cover"
              />
              <p class="m-0">John</p>
            </div>
            <!-- main menu -->
            <div
              class="
                rounded-circle
                p-1
                bg-gray
                d-flex
                align-items-center
                justify-content-center
                mx-2
              "
              style="width: 38px; height: 38px"
              type="button"
              id="mainMenu"
              data-bs-toggle="dropdown"
              aria-expanded="false"
              data-bs-auto-close="outside"
            >
              <i class="fas fa-ellipsis-h"></i>
            </div>

     {{-- booking form --}}

          {{-- <div class="row justify-content-evenly"> --}}

</body>
</html>
-
