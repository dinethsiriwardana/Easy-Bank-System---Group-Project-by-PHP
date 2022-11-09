<?php
// session_destroy();
include "landing_page.php";

if(!isset($_COOKIE['ROLE'])) {
  
  header("location: admin_login.php");

}


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
  <link href="css/custom.css" rel="stylesheet">

  <!-- <link rel="stylesheet" href="https://fontawesome.com/releases/v5.15/css/all.css"/> -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/font-awesome.min.css">


</head>

<body>




  <div class="container mt-5 borders">


    <div class="row">
      <div class="col-12 borders">
        <div class="container" id="subdetails">
          <div class="container">
            <br>
            <div class="row">
              <div class="col-11">

                <h3>New Account Request</h3>
              </div>
              <div class="col-1">
              <a  href="php/logout.php"><button type='button' class='btn btn-danger'>Logout</button></a>
              </div>
            </div>

          </div>
          <br>
          <div class="row">
            <div class="col borders">
              <div class="container" id="maintitlenohi">
                <?php
                if (isset($_GET['stts'])) {
                  if ($_GET['stts'] == 'dones') {
                    echo "
                    <div class='alert alert-success alert-dismissible fade show' role='alert'>
                      <strong>Successfully Added! </strong> Create All Table and genarate access successfully.
                      <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
                    </div>";
                  }else  if ($_GET['stts'] == 'errors'){
                    echo "
                    <div class='alert alert-danger alert-dismissible fade show' role='alert'>
                      <strong>Error! </strong> Found a error with genarate access.
                      <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
                    </div>";
                  }else  if ($_GET['stts'] == 'doner'){
                    echo "
                    <div class='alert alert-success alert-dismissible fade show' role='alert'>
                      <strong>Deletec! </strong> Appication reject successfully.
                      <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
                    </div>";
                  }else  if ($_GET['stts'] == 'errorr'){
                    echo "
                    <div class='alert alert-danger alert-dismissible fade show' role='alert'>
                      <strong>Error! </strong> Found a error with Appication reject.
                      <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
                    </div>";

                  }
                };
                ?>
                <table class="table">
                  <thead>
                    <tr class="table-primary">

                      <th scope="col">User id</th>
                      <th scope="col">User Name</th>
                      <th scope="col">Action</th>
                    </tr>
                  </thead>
                  <tbody>

                    <?php
                    include "php/dbcon.php";
                    include "php/encryption.php";

                    $sql = "SELECT * FROM user_table WHERE Approval = 'N' ";

                    if ($result = mysqli_query($conn, $sql)) {
                      if (mysqli_num_rows($result) > 0) {

                        while ($row = mysqli_fetch_array($result)) {


                          echo "<tr class='table-primary align-middle '>";
                          echo "<td class='table-primary align-middle '>" . $row['UID'] . "</td>";
                          echo "<td class='table-primary align-middle '>" . $row['UNAME'] . "</td>";
                          echo "<td class='table-primary align-middle  col-2'> 
                          <a href='php/accept_request.php?uid=" . $row['UID'] . "&type=submit'>
                          <button type='button' class='btn btn-success'>Accept</button></a>
                          <a href='php/accept_request.php?uid=" . $row['UID'] . "&type=reject'>
                          <button type='button' class='btn btn-danger'>Reject</button></a>
                          </td>";
                          echo "</tr>";
                        }
                      
                        // mysqli_free_result($result);
                      } else {
                        echo "<tr class='table-primary align-middle '>";
                        
                        echo "<td  colspan='3' class='table-primary align-middle '>No matching records are found.</td>";
                        echo "</tr>";

                      }
                    } else {
                      echo "ERROR: Could not able to execute $sql. "
                        . mysqli_error($conn);
                    }


                    $conn->close();
                    echo "<tbody>";
                    echo "</table>";
                    ?>

                    </tr>



                  </tbody>
                </table>

              </div>
            </div>

          </div>

        
        </div>
      </div>
     
    </div>
    <br>
    <div class="row">
      <div class="col-12 borders">
        <div class="container" id="subdetails">
          <div class="container">
            <br>
            <div class="row">
              <div class="col-11">

              <h3>Add new Admin</h3>
              </div>
              <div class="col-1">
              </div>
            </div>

          </div>
          <div class="row">
            <div class="col borders">
              <div class="container" id="maintitlenohi">
            <br>
            <form action="php/add_admin.php" method="post">
              <div class="row">
                <div class="col">
                  <input class="form-control" type="text" name="username" id="username" placeholder="User Name"><br>
                </div>
                <div class="col">
                  <input class="form-control" type="password" name="adminpassword" id="adminpassword" placeholder="Password"><br>
                </div>
                <div class="col">
                  <input class="form-control" type="text" name="admintype" id="admintype" placeholder="Admin Type"><br>

                </div>
                <div class="col-2">
                  <center>

                    <input class="btn btn-outline-primary" type="submit" value="Add User" btn id="btn_1">
                  </center>

                </div>
              </div>
            </form>

          </div>              
              </div>
            </div>

          </div>

        
        </div>
      </div>
     
    </div>
  </div>




  <script src="js/bootstrap.bundle.min.js"></script>

  <script src="sidebars/sidebars.js"></script>
  <script src="https://kit.fontawesome.com/be7ffc507d.js" crossorigin="anonymous"></script>
</body>

</html>