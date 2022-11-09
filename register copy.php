<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login</title>


    <link href="css/bootstrap.min.css" rel="stylesheet">

    <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }
    </style>


    <link href="sidebars/sidebars.css" rel="stylesheet">
    <link href="css/custom.css" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/font-awesome.min.css">

</head>

<body class="d-flex justify-content-center align-items-center">

    <div class="col-9 borders bg-primary  height500 shadow mb-5  rounded">

        <form action="./php/get_user_login_data.php?type=user" method="post">
            <div class="container ">
                <div class="row">
                    <div class="col-3 d-flex justify-content-center ">
                        <div class="container height300 d-flex justify-content-center align-items-center">
                            <div class="container text-light">
                                <i class="fa-solid fa-building-columns fa-7x"></i>
                                <h1 class="display-1">
                                    Easy
                                </h1>
                                <h2>Bank System</h2>
                            </div>
                        </div>
                    </div>
                    <div class="col bg-light height500 shadow-inner d-flex justify-content-center align-items-center">
                        <div class="container  mt-4">

                            <center>
                                <h2>User Register</h2>
                                <br>
                            </center>
                            <div class="row">

                                <div class="col">





                                    <div class="container mb-3 p-0 ">

                                        <lable for="Name">Name</lable><br>
                                        <div class="row">
                                            <div class="col">
                                                <input class="form-control" type="text" name="fname" id="fname" placeholder="First Name">
                                            </div>
                                            <div class="col">
                                                <input class="form-control" type="text" name="lname" id="lname" placeholder="Last Name">
                                            </div>
                                        </div>
                                    </div>


                                    <div class="container mb-3 p-0 ">
                                        <div class="row">
                                            <div class="col">
                                                <lable for="NIC No">NIC Number</lable><br>
                                                <input class="form-control" type="text" name="NIC" id="NIC" placeholder="NIC No" required>
                                            </div>
                                            <div class="col">
                                                <lable for="Phone Number">Phone Number</lable><br>
                                                <input class="form-control" type="text" name="Phone Number" id="Phone_Number" placeholder="Phone Number" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="container mb-3 p-0 ">
                                        <lable for="Residental Address">Residental Address</lable><br>
                                        <input class="form-control" type="text" name="Street_Address" id="Street_Address" placeholder="Street Address" required>
                                    </div>

                                    <div class="container mb-3 p-0 ">
                                        <div class="row">
                                            <div class="col">

                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col">
                                                <input class="form-control" type="text" name="Province" id="Province" placeholder="Province" required>
                                            </div>

                                            <div class="col">
                                                <input class="form-control" type="text" name="Postal_Code" id="Postal_Code" placeholder="Postal Code" required>
                                            </div>
                                        </div>


                                    </div>
                                </div>

                                <div class="col">
                                    <div class="container mb-3 p-0 ">

                                        <div class="row">
                                            <div class="col">
                                                <lable for="acc_type">Account Type</lable><br>
                                                <select class="form-select" name="acc_type" id="acc_type" placeholder="Select Here" required>
                                                    <option value="Checking Account">Checking Account</option>
                                                    <option value="Saving Account">Saving Account</option>
                                                    <option value="A Money Market Account">A Money Market Account</option>
                                                    <option value="Certificate of Deposit (CD)">Certificate of Deposit (CD)</option>
                                                    <option value="IRA Account">IRA Account</option>
                                                </select>
                                            </div>
                                            <div class="col">
                                                <lable for="currency_type">Currency Type</lable><br>
                                                <select class="form-select" name="currency_type" id="currency_type" placeholder="Select Here" required>
                                                    <option value="Rs-Sri Lankan Rupees">Rs-Sri Lankan Rupees</option>
                                                    <option value="USD-Us Dollar">USD-Us Dollar</option>
                                                    <option value="EUR-Euro">EUR-Euro</option>
                                                    <option value="GBP-Pound Sterling">GBP-Pound Sterling</option>
                                                    <option value="CAD-Candian Doller">CAD-Candian Doller</option>
                                                    <option value="KWD-Kuwaiti Dinar">KWD-Kuwaiti Dinar</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="container mb-3 p-0 ">
                                        <lable for="Email">Email Address</lable><br>
                                        <input class="form-control" type="text" name="Email" id="Email" placeholder="Email" required>
                                    </div>
                                    <div class="container mb-3 p-0 ">
                                        <lable for="Password">Password</lable><br>

                                        <div class="row">
                                            <div class="col">
                                                <input class="form-control" type="text" name="password" id="Password" placeholder="Password" required>
                                            </div>
                                            <div class="col">
                                                <input class="form-control" type="text" name="passwordc" id="Password" placeholder="Confirm" required>
                                            </div>
                                        </div>
                                    </div>


                                </div>
                            </div>









                            <div class="row mt-3">
                                <center>
                                    <div class="row">
                                        <div class="d-grid gap-2 col-5 mx-auto">
                                            <input class="btn btn-outline-primary" type="submit" value="Login" btn id="btn_1">
                                        </div>
                                        <div class="d-grid gap-2 col-5 mx-auto">
                                            <input class="btn btn-outline-secondary" type="reset" value="Reset" btn id="btn_2">
                                        </div>
                                    </div>

                                    No Account ? <b> <a href="">Create one!</a></b>
                                </center>

                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </form>
    </div>
    <script src="https://kit.fontawesome.com/be7ffc507d.js" crossorigin="anonymous"></script>

</body>

</html>