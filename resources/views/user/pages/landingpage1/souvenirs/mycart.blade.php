<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" href="{{ asset('omhms.png') }}" type="image/png">
    <title>OMHMS</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
        integrity="sha512-********" crossorigin="anonymous" />

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('vendors/linericon/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('vendors/owl-carousel/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('vendors/bootstrap-datepicker/bootstrap-datetimepicker.min.css') }}">
    <link rel="stylesheet" href="{{ asset('vendors/nice-select/css/nice-select.css') }}">
    {{-- <link rel="stylesheet" href="vendor/owl-carousel/owl.carousel.min.css"> --}}
    <!-- main css -->
    <link rel="stylesheet" href="{{ asset('assets/css/css/stylebook.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/css/responsive.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/css/testimonial1.css') }}">
    <style>
          .custom-image {
        width: 90px;
        height: 90px;
        margin-right: 30px;
    }
        .fixed-size-image {
            width: 100px;
            /* Set the desired width */
            height: 100px;
            /* Set the desired height */
            object-fit: cover;
            /* Maintain aspect ratio and cover the container */
        }
    </style>
</head>

<body>
    <!--================Header Area =================-->
    <header class="header_area">
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-light">
                <!-- Brand and toggle get grouped for better mobile display -->
                <img src="{{ asset('omhms.png') }}" class="logo-icon" alt="logo icon"
                    style="width: 40px; height: 20px;">
                <a class="navbar logo_h" href="index.html"><b>ORIENTAL MINDORO HERITAGE MUSEUM</b></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse"
                    data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse offset" id="navbarSupportedContent">
                    <ul class="nav navbar-nav menu_nav ml-auto">
                        <li class="nav-item active"><a class="nav-link" href="{{ url('user/landlog') }}">Home</a></li>
                        <li class="nav-item submenu dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button"
                                aria-haspopup="true" aria-expanded="false">About Us</a>
                            <ul class="dropdown-menu">
                                <li class="nav-item"><a class="nav-link" href="{{ url('user/history1') }}">History</a>
                                </li>
                                <li class="nav-item"><a class="nav-link" href="{{ url('user/vnm1') }}">Vision &
                                        Mission</a></li>
                                <li class="nav-item"><a class="nav-link" href="{{ url('user/oper1') }}">Operation</a>
                                </li>

                            </ul>
                        </li>
                        <li class="nav-item"><a class="nav-link"
                                href="{{ url('user/testimonials1') }}">Announcements</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{ url('user/services1') }}">Services</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{ url('user/feed1') }}">Feed</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{ url('user/contact1') }}">Contact</a></li>
                        <li class="nav-item submenu dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button"
                                aria-haspopup="true" aria-expanded="false" style="font-size: 10px">My Account</a>
                            <ul class="dropdown-menu">
                                <li class="nav-item"><a class="nav-link"
                                        href="{{ url('user/profile') }}">{{ session('User')['user_fname'] }}'s
                                        Profile</a>
                                </li>
                                <li class="nav-item"><a class="nav-link" href="{{ url('logout') }}">Log out</a></li>
                            </ul>
                        </li>
                        <li class="nav-item submenu dropdown">
                            <a href="" style="margin-top: 28px; display: inline-block;" class="shop-icon-btn">
                                <i class="fas fa-shopping-cart"></i></a>
                            <ul class="dropdown-menu" style="padding-top: 0;">
                                <li class="nav-item"><a class="nav-link"
                                        href="{{ url('user/souvenirs1') }}">Reserved Souvenirs</a></li>
                                <li class="nav-item"><a class="nav-link" href="{{ url('user/cart') }}">My Cart</a>
                                </li>
                            </ul>
                            </a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
    </header>
    <!--================Header Area =================-->
    <!--================ Accomodation Area  =================-->
    <section class="accomodation_area" style="margin-top: 150px">
        <div class="container">
            <div class="section_title">
                <h2 class="title_color">My Cart</h2>
                <p>Welcome to your cart page! This is the place where you can review and manage the items you've
                    selected for purchase. We've gathered all your chosen products here, making it convenient for you to
                    make any necessary adjustments before proceeding to checkout. Whether you're looking to finalize
                    your order, add or remove items, or calculate the total cost, this page is designed to streamline
                    your shopping experience.</p>
            </div>
        </div>
    </section>
    <section class="h-100 gradient-custom">
        <div class="container py-5">
            <div class="row d-flex justify-content-center my-4">
                <div class="col-md-8">
                    <div class="card mb-4">
                        <div class="card-header py-3">
                            <h5 class="mb-0">My Cart</h5>
                        </div>
                        @if ($cartItems->isEmpty())
                            <div class="card-body">
                                <p>Your Cart is Empty</p>
                            </div>
                        @else
                            <div class="card-body">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th></th>
                                            <th>Image</th>
                                            <th>Name</th>
                                            <th>Quantity</th>
                                            <th>Price</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($cartItems as $cartItem)
                                            <tr>
                                                <td>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox"
                                                            value="{{ $cartItem->cart_item_id }}"
                                                            id="checkbox{{ $cartItem->cart_item_id }}"
                                                            onchange="updateSummary(this)">
                                                        <label class="form-check-label"
                                                            for="checkbox{{ $cartItem->cart_item_id }}"></label>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="bg-image hover-overlay hover-zoom ripple rounded"
                                                        data-mdb-ripple-color="light">
                                                        <img
                                                            src="{{ asset('souvenir_image/' . $cartItem->souvenir->souvenir_image) }}"
                                                            alt="{{ $cartItem->souvenir->souvenir_name }}"
                                                            class="img-sm-small fixed-size-image">
                                                        <div class="mask"
                                                            style="background-color: rgba(251, 251, 251, 0.2)"></div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <strong>{{ $cartItem->souvenir->souvenir_name }}</strong><br>
                                                </td>
                                                <td>
                                                    <div class="d-flex" style="max-width: 120px">
                                                        <button class="btn btn-sm btn-primary px-2 me-2"
                                                            onclick="updateQuantity({{ $cartItem->cart_item_id }}, -1)">
                                                            <i class="fas fa-minus"></i>
                                                        </button>
                                                        <div class="form-outline">
                                                            <input
                                                                id="quantity{{ $cartItem->cart_item_id }}"
                                                                min="0" name="quantity"
                                                                value="{{ $cartItem->quantity }}" type="number"
                                                                class="form-control" style="width: 60px;" />
                                                        </div>
                                                        <button class="btn btn-sm btn-primary px-2 ms-2"
                                                            onclick="updateQuantity({{ $cartItem->cart_item_id }}, 1)">
                                                            <i class="fas fa-plus"></i>
                                                        </button>
                                                    </div>
                                                </td>
                                                <td>
                                                    <strong>{{ $cartItem->souvenir->souvenir_price }}</strong><br>
                                                </td>
                                                <td>
                                                    <button type="button" class="btn btn-primary btn-sm me-1 mb-2"
                                                        data-mdb-toggle="tooltip" title="Remove item"
                                                        onclick="removeItem({{ $cartItem->cart_item_id }})">
                                                        <i class="fas fa-trash"></i>
                                                    </button>
                                                    <button type="button" class="btn btn-danger btn-sm mb-2"
                                                        data-mdb-toggle="tooltip" title="Move to the wishlist">
                                                        <i class="fas fa-heart"></i>
                                                    </button>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        @endif
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card mb-4">
                        <div class="card-header py-3">
                            <h5 class="mb-0">Summary</h5>
                        </div>
                        <div class="card-body">
                            <ul id="summaryList" class="list-group list-group-flush">
                                <!-- Summary items will be added dynamically here -->
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row d-flex justify-content-center my-4">
                <div class="col-md-8">
                    @foreach ($cartItems as $cartItem)
                        <div class="card mb-4">
                            <div class="card-body">
                                <form action="{{ route('addToReserved') }}" method="POST"
                                    class="addToReservationForm">
                                    @csrf
                                    <hr>
                                    <dl class="dlist-align">
                                        <dt>Total price:</dt>
                                        <dd class="text-right ml-3 total-price">Php 0.00</dd>
                                    </dl>
                                    <dl class="dlist-align">
                                        <dt>Total quantity:</dt>
                                        <dd class="text-right ml-3">
                                            <input type="hidden" class="text-right ml-3 quantity" name="quantity" value="{{ old('quantity', 0) }}" readonly>
                                            @error('quantity')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror

                                        </dd>
                                    </dl>
                                    <hr>

                                    <input type="hidden" name="souvenir_id"
                                        value="{{ $cartItem->souvenir_id }}">
                                    <input type="hidden" name="total_price"
                                        class="total-price-input" value="0">
                                    <button type="submit"
                                        class="btn btn-out btn-primary btn-square btn-main add-to-reservation-btn"
                                        disabled>Add to Reservation</button>
                                </form>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="{{ asset('assets/js/js/jquery-3.2.1.min.js') }}"></script>
    <script src="{{ asset('assets/js/js/popper.js') }}"></script>
    <script src="{{ asset('assets/js/js/bootstrap.js') }}"></script>
    <script src="{{ asset('vendors/owl-carousel/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('assets/js/js/jquery.ajaxchimp.min.js') }}"></script>
    <script src="{{ asset('assets/js/js/mail-script.js') }}"></script>
    <script src="{{ asset('vendors/bootstrap-datepicker/bootstrap-datetimepicker.min.js') }}"></script>
    <script src="{{ asset('vendors/nice-select/js/jquery.nice-select.js') }}"></script>
    <script src="{{ asset('assets/js/js/mail-script.js') }}"></script>
    <script src="{{ asset('assets/js/js/stellar.js') }}"></script>
    <script src="{{ asset('vendor/lightbox/simpleLightbox.min.js') }}"></script>
    <script src="{{ asset('assets/js/js/custom.js') }}"></script>


    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@10.16.6/dist/sweetalert2.min.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10.16.6/dist/sweetalert2.all.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>


    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@10.16.6/dist/sweetalert2.min.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10.16.6/dist/sweetalert2.all.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>

    {{-- -----mycart-----0 --}}
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@10.16.6/dist/sweetalert2.min.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10.16.6/dist/sweetalert2.all.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
    <!-- jQuery -->

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <!-- Bootstrap JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/js/bootstrap.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha384-Ky3I1aiR6SjQ+P7N4BzZl5JJk1pgs3XoGrB2C2z5QrLUPw8m+64/tAKIwmt3WzqZ" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"
        integrity="sha384-07N5hCirBivLdDmyLw3iGBcE4McR3KtfLJ8TFN1pggLyHV5YfInAlMngfmI9bK1U" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"
        integrity="sha384-07N5hCirBivLdDmyLw3iGBcE4McR3KtfLJ8TFN1pggLyHV5YfInAlMngfmI9bK1U" crossorigin="anonymous">
    </script>
      <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@10.16.6/dist/sweetalert2.min.css">
      <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10.16.6/dist/sweetalert2.all.min.js"></script>
      <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
          integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
      </script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
          integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
      </script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
          integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
      </script>
      <!-- jQuery -->
      <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
      <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

      <!-- Bootstrap JS -->
      <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/js/bootstrap.min.js"></script>


@if (session('success'))
            <script>
                Swal.fire({
                    icon: 'success',
                    title: 'Success!',
                    text: '{{ session('success') }}',
                    toast: true,
                    position: 'top-end',
                    showConfirmButton: false,
                    timer: 3000,
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
                    title: 'Error!',
                    text: '{{ session('failed') }}',
                    toast: true,
                    position: 'top-end',
                    showConfirmButton: false,
                    timer: 3000,
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
<script>
    function updateSummary(checkbox) {
        const checkboxId = checkbox.value;
        const summaryList = document.getElementById('summaryList');
        const summaryItems = summaryList.getElementsByClassName('summary-item');
        let totalPrice = 0;
        let totalQuantity = 0;

        if (checkbox.checked) {
            const cartItem = document.getElementById('checkbox' + checkboxId).parentNode.parentNode.parentNode;
            const imageSrc = cartItem.querySelector('.fixed-size-image').src;
            const name = cartItem.querySelector('strong').innerText;
            const quantity = parseInt(document.getElementById('quantity' + checkboxId).value);
            const price = parseFloat(cartItem.querySelector('td:nth-child(5) strong').innerText.replace('Php ', ''));
            const totalItemPrice = price * quantity;
            totalPrice += totalItemPrice;
            totalQuantity += quantity;

            // Create summary item HTML
            const summaryItemHTML = `
                <li class="list-group-item summary-item">
                    <div class="d-flex align-items-center">
                        <img src="${imageSrc}" alt="${name}" class="summary-image custom-image">
                        <div class="summary-details">
                            <p class="summary-name">${name}</p>
                            <p class="summary-quantity">Quantity: ${quantity}</p>
                            <p class="summary-price">Total Price: Php ${totalItemPrice.toFixed(2)}</p>
                        </div>
                    </div>
                </li>
            `;
            summaryList.insertAdjacentHTML('beforeend', summaryItemHTML);
        } else {
            const summaryItem = document.getElementById('summaryItem' + checkboxId);
            const totalItemPrice = parseFloat(summaryItem.querySelector('.summary-price').innerText.replace('Total Price: Php ', ''));
            totalPrice -= totalItemPrice;
            totalQuantity -= parseInt(summaryItem.querySelector('.summary-quantity').innerText.replace('Quantity: ', ''));
            summaryItem.remove();
        }

        document.querySelector('.total-price').innerText = 'Php ' + totalPrice.toFixed(2);
        document.querySelector('.quantity').value = totalQuantity;
        document.querySelector('.total-price-input').value = totalPrice.toFixed(2);
        // document.getElementById('souvenirIdInput').value = checkboxId;

        const addToReservationBtn = document.querySelector('.add-to-reservation-btn');
        if (totalQuantity > 0) {
            addToReservationBtn.removeAttribute('disabled');
        } else {
            addToReservationBtn.setAttribute('disabled', 'disabled');
        }
    }

    function updateQuantity(cartItemId, increment) {
        const quantityInput = document.getElementById('quantity' + cartItemId);
        let quantity = parseInt(quantityInput.value);
        quantity += increment;
        if (quantity < 0) {
            quantity = 0;
        }
        quantityInput.value = quantity;
        updateSummary(document.getElementById('checkbox' + cartItemId));
    }

    function removeItem(cartItemId) {
        const checkbox = document.getElementById('checkbox' + cartItemId);
        checkbox.checked = false;
        updateSummary(checkbox);
    }
</script>


</body>
</body>

</html>
