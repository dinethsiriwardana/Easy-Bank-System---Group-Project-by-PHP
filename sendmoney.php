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



      $("#amount").keyup(function() {
        if ($("#amount").val() > <?php echo floatval($user_account_balance['balance']); ?>) {
          $("#amount").val(<?php echo floatval($user_account_balance['balance']) . ".00"; ?>)

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
    <div class="container borders">

      <div class="row">
        <?php
        include "php/details_card.php";
        ?>

        <div class="col-8 borders">
          <div class="container d-flex align-items-center" id="maindetails">
            <div class="row d-flex align-items-center p-3">
              <div class="col text-primary">
                <h3>
                  Balance:
                </h3>

                <h1>
                  <div class="h6">
                    LKR.<br>
                    <div class="h1">
                      <?php echo $user_account_balance['balance']; ?>
                    </div>
                  </div>
                </h1>
              </div>
              <div class="col">
                <div class="row p-1 text-success">
                  <h5>
                    Last Income ↑
                  </h5>
                  <h3>
                    RS.
                    100,000.00
                  </h3>
                </div>
                <div class="row p-1 text-danger">
                  <h5>
                    Last Expense ↓
                  </h5>
                  <h3>
                    RS. 55,000.00
                  </h3>
                </div>
              </div>
              <!-- <div class="col text-primary">
                <div id="piechart" style="width: 200px; height: 160px;"></div>
              </div> -->
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col"></div>
        <div class="col-10 borders">
          <div class="container p-4" id="maintitlenohi">
            <form action="php/send_money.php" method="post">
              <center>

                <h3>Money Transfre</h3><br>
              </center>
              <div class="row">
                <div class="col">

                  <label for="admin/user">Account Name:</label>
                  <input class="form-control" type="text" name="sname" id="sname" value="sname" readonly required><br>
                  <label for="admin/user">Account Number:</label>
                  <input class="form-control" type="text" name="snumber" id="snumber" value="<?php echo $_COOKIE['UID']; ?>" readonly><br>
                  <hr>
                  <label for="admin/user">Description:</label>
                  <input class="form-control" type="text" name="description" id="username" required><br>
                </div>
                <div class="col-1">

                </div>
                <div class="col">
                  <label for="admin/user">Receiver's Name:</label>
                  <input class="form-control" type="text" name="rname" id="rname" required><br>
                  <label for="admin/user">Receiver's Account Number:</label>
                  <input class="form-control" type="number" name="rnumber" id="rnumber" required><br>
                  <hr>
                  <label for="admin/user"> Amount:</label>
                  <input class="form-control" type="number" name="amount" id="amount" maxlength="9" value="0.00" step="any" required><br>

                </div>
              </div>

              <div class="col-12 float-right">
                <button type="submit" class="btn btn-lg btn-dark"><i class="fa-regular fa-share-from-square"></i> &nbsp;&nbsp;&nbsp;Send Money</button>
              </div>
            </form>

          </div>
        </div>
        <div class="col"></div>


      </div>

    </div>


  </main>


  <script src="js/bootstrap.bundle.min.js"></script>

  <script src="sidebars/sidebars.js"></script>
  <script src="https://kit.fontawesome.com/be7ffc507d.js" crossorigin="anonymous"></script>
</body>

</html>