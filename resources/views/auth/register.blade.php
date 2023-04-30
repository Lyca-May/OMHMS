<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- fontawesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"
        integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous" />
    <!-- main style -->
    <link rel="stylesheet" href="./main.css" />
    <title>Flexbook</title>
</head>
<style>
    .bg-image1 {
        background-image: url('{{ asset('images/front.jpg') }}');
        background-size: cover;
        background-position: center;
        background-attachment: fixed;
        /* opacity: .5; */
    }
</style>

<body class="bg-gray bg-image1 ">
    <!--Pegister-->
    <div class="container mt-3 pt-3">
        <div class="form-container">
            <div class="row">
              <h3 class="title">Register</h3>
                <form class="form-horizontal">
                    <div class="form-group" style="width: 610px">
                        <label>Email ID</label>
                        <input type="email" class="form-control" placeholder="Email Address">
                    </div>
                    <div class="form-group">
                        <label>Password</label>
                        <input type="password" class="form-control" placeholder="Password">
                    </div>
                    <div class="form-group">
                        <label>Confirm Password</label>
                        <input type="password" class="form-control" placeholder="Confirm Password">
                    </div>
                    <h4 class="sub-title">Personal Information</h4>
                    <div class="form-group">
                        <label>First Name</label>
                        <input type="text" class="form-control" placeholder="Phone Number">
                    </div>
                    <div class="form-group">
                        <label>Middle Name</label>
                        <input type="text" class="form-control" placeholder="Phone Number">
                    </div>
                    <div class="form-group">
                        <label>Surname</label>
                        <input type="text" class="form-control" placeholder="Phone Number">
                    </div>
                    <div class="form-group">
                        <label>Phone No.</label>
                        <input type="text" class="form-control" placeholder="Phone Number">
                    </div>
                    <div class="form-group">
                        <label>City</label>
                        <select class="form-control">
                            <option value="paris">Paris</option>
                            <option value="new york">New York</option>
                        </select>
                    </div>
                    <div class="check-terms">
                        <input type="checkbox" class="checkbox">
                        <span class="check-label">I agree to the terms</span>
                    </div>
                    <span class="signin-link">Already have an account? Click here to <a href="">Login</a></span>
                    <button class="btn signup">Create Account</button>
                </form>
            </div>
        </div>
    </div>
    </div>
    </div>

    </div>
</body>

</html>
