<?php
// session_destroy();
include "landing_page.php";
include "php/getdetails.php";

?>
<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
  <meta name="generator" content="Hugo 0.84.0">
  <title>Easy Money</title>




  <!-- Bootstrap core CSS -->
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


  <!-- Custom styles for this template -->
  <link href="sidebars/sidebars.css" rel="stylesheet">
  <link href="css/custom.css" rel="stylesheet">

  <!-- <link rel="stylesheet" href="https://fontawesome.com/releases/v5.15/css/all.css"/> -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/font-awesome.min.css">
  <script src="js/jquery.js">

  </script>
  <script>
    $(document).ready(function() {


      $('#passwordcfm').keyup(function() {

        passwordval = document.getElementById("password").value;
        if (passwordval == document.getElementById("passwordcfm").value) {
          if (passwordval.length > 7) {
            document.getElementById("submitbtn").className = 'btn btn-outline-primary';
          }
        } else {
          document.getElementById("submitbtn").className = 'btn btn-outline-danger disabled';
        }

      });
    });
  </script>

</head>

<body>



  <main>
    <h1 class="visually-hidden">Sidebars examples</h1>

    <?php
    include "phpincludes/slider.php";
    ?>

    <div class="b-example-divider">
    </div>
    <div class="container">


      <br><br><br><br><br><br>
      <div class="row">
        <div class="col"></div>
        <div class="col-5 borders">
          <div class="container p-4 mt-4" id="maintitlenohi">
            <form action="php/reset_pwd.php" method="post">
              <center>

                <h3>Password Reset</h3><br>
              </center>
              <div class="row">

                <div class="getPwd">

                  <label for="admin/user">User Name:</label>
                  <div class="pb-3"> <input class="form-control" type="text" size="40" maxlength="100" name="uname" id="uname" placeholder="Use Name" />
                    <span id="message1" style="color:red"> </span>
                  </div>
                  <label for="admin/user">Old Password:</label>
                  <div> <input class="form-control" type="password" size="40" maxlength="10" name="pwdOld" id="pwdOld" placeholder="Old Password" />
                    <span id="message2" style="color:red"> </span>
                  </div>
                  <div class="pb-3"> <input class="form-check-input" type="checkbox" onclick="showPwdOld()"> Show password </div>

                  <label for="admin/user">New Password:</label>
                  <div> <input class="form-control" type="password" size="40" maxlength="10" id="pwdNew" name="pwdNew" placeholder="New Password" onkeyup="myFunction()" />
                    <span id="message3" style="color:red"> </span>
                  </div>
                  <div class="pb-3"> <input class="form-check-input" type="checkbox" onclick="showPwdNew()"> Show password </div>

                  <label for="admin/user">Confirm Password :</label>
                  <div> <input class="form-control" type="password" size="40" maxlength="10" name="pwdCom" id="pwdCom" placeholder=" Password" onkeyup="myFunctions()" />
                    <span id="message4" style="color:red"> </span>
                    <span id="confirmPassword" style="color:red"></span>
                  </div>
                  <div class="pb-4"> <input type="checkbox" onclick="showPwdCom()"> Show password
                  </div>
                </div>

                <div id="requires">
                  <b> Password must contain the following: </b>
                  <ul type="none">
                    <li id="simple" class="invalid">A lowercase letter</li>
                    <li id="capital" class="invalid">An uppercase letter</li>
                    <li id="number" class="invalid">At least one number </li>
                    <li id="length" class="invalid"> 8 to 10 characters </li>
                    <li id="special" class="invalid"> A special character (!,@,#,$,%,&) </li>
                  </ul>
                  <hr>
                </div>

                <div class="row pt-3">
                  <div class="d-grid gap-2 col-5 mx-auto">
                    <input class="btn btn-outline-danger disabled" type="submit" value="Reset" id="submitbtn">
                  </div>

                </div>
              </div>
            </form>

          </div>
        </div>
        <div class="col"></div>


      </div>

    </div>


  </main>


  <script src="js/bootstrap.bundle.min.js"></script>
  <script src="js/jquery.js"></script>
  <script src="js/customjs/passwordreset.js"> </script>

  <script src="sidebars/sidebars.js"></script>
  <script src="https://kit.fontawesome.com/be7ffc507d.js" crossorigin="anonymous"></script>
</body>

</html>