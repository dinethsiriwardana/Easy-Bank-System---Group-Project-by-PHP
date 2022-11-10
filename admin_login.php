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

    <div class="col-6 borders bg-primary  height500 shadow mb-5  rounded">

        <form action="./php/get_user_login_data.php?type=admin" method="post">
            <div class="container ">
                <div class="row">
                    <div class="col d-flex justify-content-center ">
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
                    <div class="col  bg-light height500 shadow-inner d-flex justify-content-center align-items-center">
                        <div class="container">
                            <center>
                                <h2>Admin Login</h2>
                                <br>
                            </center>

                            <?php 
                            if(isset($_GET['error'])) {
  
                              echo "<div class='alert alert-danger alert-dismissible fade show' role='alert'>
                              <strong>Error!</strong> Please Check Your Username or Password
                              <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
                            </div>";
                            
                            }
                            ?>
                            
                            <label for="admin/user">User Name:</label>
                            <input class="form-control" type="text" name="username" id="username"><br>
                            <label for="password">Password :</label>
                            <input class="form-control" type="password" id="password" name="password" maxlength="10"><br>
                            <div class="row">
                                <div class="d-grid gap-2 col-5 mx-auto">
                                    <input class="btn btn-outline-primary" type="submit" value="Login" btn id="btn_1">
                                </div>
                                <div class="d-grid gap-2 col-5 mx-auto">
                                    <input class="btn btn-outline-secondary" type="reset" value="Reset" btn id="btn_2">
                                </div>
                            </div>
                            <div class="row mt-3">
                                <center>
                                <a href="user_login.php">Login as a User</a>
                                </center>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </form>
    </div>
    <script src="https://kit.fontawesome.com/be7ffc507d.js" crossorigin="anonymous"></script>
    <script src="js/bootstrap.bundle.min.js"></script>


</body>

</html>