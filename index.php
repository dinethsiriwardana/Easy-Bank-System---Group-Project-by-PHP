<?php
// session_destroy();
include "landing_page.php";
include "php/statement.php"


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
  <script src="js/jquery.js"></script>

  <script>
    filename = "home"
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
    <div class="container borders overflow-auto">

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
                      <?php get_balance() ?>
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
                    <?php l_income() ?>
                  </h3>
                </div>
                <div class="row p-1 text-danger">
                  <h5>
                    Last Expense ↓
                  </h5>
                  <h3>
                    RS.

                    <?php l_expence() ?>
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
        <div class="col-4 borders">
          <div class="container" id="subdetails">
            <h3>Money Transfer</h3><br>
            <div class="d-grid gap-2">
              <center>

                <a href="sendmoney.php">
                  <button class="btn btn-lg btn-dark"><i class="fa-regular fa-share-from-square"></i> &nbsp;&nbsp;&nbsp;Send Money</button>
                </a>
              </center>
            </div>
            <br>
            <br>

            <div>
              <canvas id="myChart"></canvas>
            </div>

          </div>
        </div>
        <div class="col-8 borders">
          <div class="container" id="subdetails">
            <center>

              <h2 class="text-primary">WELCOME TO EASY E-BANKING!!</h2>
            </center>

<br><br>
            <h3 class="text-success">BEST CHOICE TO HAVE THE E_BANKING EXPERIENCE..</h3>

<br>
<br>
            <p>
              Wait for next update ...
            <ul class="list-group">
              <li class="list-group-item" >instant virtual cards</li>
              <li class="list-group-item" >digital wallet integrations</li>
              <li class="list-group-item" >M-Banking system</li>
              <li class="list-group-item" >Bill payments</li>
              <li class="list-group-item" >M-check deposits</li>
              <li class="list-group-item" >Mobile alerts & remainders</li>
              <li class="list-group-item" >Add-on service</li>
            </ul>
            </p>

          </div>
        </div>
      </div>
    </div>


  </main>


  <script src="js/bootstrap.bundle.min.js"></script>
  <script src="js/customjs/slider.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
  <script>
    const labels = [
      'Total Income',
      'Total Expence',

    ];

    const data = {
      labels: labels,
      datasets: [{
        label: 'My First dataset',
        backgroundColor: [
          '#14A44D',
          'rgb(212, 50, 66)'
        ],
        data: [<?php t_income() ?>, <?php t_expence() ?>],
      }]
    };

    const config = {
      type: 'doughnut',
      data: data,
      options: {

      }
    };
  </script>

  <script>
    const myChart = new Chart(
      document.getElementById('myChart'),

      config
    );
  </script>

  <script src="https://kit.fontawesome.com/be7ffc507d.js" crossorigin="anonymous"></script>
</body>

</html>