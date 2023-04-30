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
        /* opacity: .5; */
    }

    .form-container {
        background-color: #fff;
        font-family: 'Titillium Web', sans-serif;
        font-size: 0;
        padding: 30px;
        border-radius: 20px;
        box-shadow: 0 0 25px -15px rgba(0, 0, 0, 0.3);
        /* margin-top: 30px; */
        margin-left: 225px;
        /* align-items: center; */
        max-width: 60%;
        margin-bottom: 30px;

    }

    .form-container .title {
        color: #000;
        font-size: 25px;
        font-weight: 600;
        text-transform: capitalize;
        margin: 0 0 25px;
    }

    .form-container .title:after {
        content: '';
        background-color: #00A9EF;
        height: 3px;
        width: 60px;
        margin: 10px 0 0;
        display: block;
        clear: both;
    }

    .form-container .sub-title {
        color: #333;
        font-size: 18px;
        font-weight: 600;
        text-align: center;
        text-transform: uppercase;
        margin: 0 0 20px;
    }

    .form-container .form-horizontal {
        font-size: 0;
    }

    .form-container .form-horizontal .form-group {
        color: #333;
        width: 50%;
        padding: 0 8px;
        margin: 0 0 15px;
        display: inline-block;
    }

    .form-container .form-horizontal .form-group:nth-child(4) {
        margin-bottom: 30px;
    }

    .form-container .form-horizontal .form-group label {
        font-size: 17px;
        font-weight: 600;
    }

    .form-container .form-horizontal .form-control {
        color: #888;
        background: #fff;
        font-weight: 400;
        letter-spacing: 1px;
        height: 40px;
        /* padding: 6px 12px; */
        /* border-radius: 10px; */
        border: 2px solid #e7e7e7;
        box-shadow: none;
    }

    .form-container .form-horizontal .form-control:focus {
        box-shadow: 0 0 5px #dcdcdc;
    }

    .form-container .form-horizontal .check-terms {
        padding: 0 8px;
        margin: 0 0 25px;
    }

    .form-container .form-horizontal .check-terms .check-label {
        color: #333;
        font-size: 14px;
        font-weight: 500;
        font-style: italic;
        vertical-align: top;
        display: inline-block;
    }

    .form-container .form-horizontal .check-terms .checkbox {
        height: 17px;
        width: 17px;
        min-height: auto;
        margin: 2px 8px 0 0;
        border: 2px solid #d9d9d9;
        border-radius: 2px;
        cursor: pointer;
        display: inline-block;
        position: relative;
        appearance: none;
        -moz-appearance: none;
        -webkit-appearance: none;
        transition: all 0.3s ease 0s;
    }

    .form-container .form-horizontal .check-terms .checkbox:before {
        content: '';
        height: 5px;
        width: 9px;
        border-bottom: 2px solid #00A9EF;
        border-left: 2px solid #00A9EF;
        transform: rotate(-45deg);
        position: absolute;
        left: 2px;
        top: 2.5px;
        transition: all 0.3s ease;
    }

    .form-container .form-horizontal .check-terms .checkbox:checked:before {
        opacity: 1;
    }

    .form-container .form-horizontal .check-terms .checkbox:not(:checked):before {
        opacity: 0;
    }

    .form-container .form-horizontal .check-terms .checkbox:focus {
        outline: none;
    }

    .form-container .signin-link {
        color: #333;
        font-size: 14px;
        width: calc(100% - 190px);
        margin-right: 30px;
        display: inline-block;
        vertical-align: top;
    }

    .form-container .signin-link a {
        color: #00A9EF;
        font-weight: 600;
        transition: all 0.3s ease 0s;
    }

    .form-container .signin-link a:hover {
        text-decoration: underline;
    }

    .form-container .form-horizontal .signup {
        color: #fff;
        background: #00A9EF;
        font-size: 15px;
        font-weight: 700;
        text-transform: uppercase;
        letter-spacing: 1px;
        width: 160px;
        padding: 8px 15px 9px;
        border-radius: 10px;
        transition: all 0.3s ease 0s;
    }

    .form-container .form-horizontal .btn:hover,
    .form-container .form-horizontal .btn:focus {
        text-shadow: 0 0 5px rgba(0, 0, 0, 0.5);
        box-shadow: 3px 3px rgba(0, 0, 0, 0.15), 5px 5px rgba(0, 0, 0, 0.1);
        outline: none;
    }

    @media only screen and (max-width:479px) {
        .form-container .form-horizontal .form-group {
            width: 100%;
        }

        .form-container .signin-link {
            width: 100%;
            margin: 0 10px 15px;
        }
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
