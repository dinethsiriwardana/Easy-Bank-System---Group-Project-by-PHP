<?php
include "php/dbcon.php" ;
include "php/log_statement.php" ;
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Send Money</title>

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>


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
                <div class="container" id="maindetails">
                    <div class="row d-flex  justify-content-between p-3">
                    <div class="col text-primary"></div>

                        <div class="col text-primary">
                            <h6>
                                Total 
                            </h6>
                            <h1>
                                <div class="h3">
                                    Activites<br>
                                    <div class="h1">
                                      <?php all_act(); ?>
                                    </div>
                                </div>
                            </h1>
                        </div>
                        <div class="col text-primary"></div>

                        <div class="col text-primary">
                            <h6>
                                Total Log In
                            </h6>
                            <h1>
                                <div class="h3">
                                    Activites<br>
                                    <div class="h1">
                                    <?php all_in_act(); ?>

                                    </div>
                                </div>
                            </h1>
                        </div>
                        <div class="col text-primary"></div>

                        <div class="col text-primary">
                            <h6>
                                Total Log Out
                            </h6>
                            <h1>
                                <div class="h3">
                                    Activites<br>
                                    <div class="h1">
                                    <?php all_out_act(); ?>

                                    </div>
                                </div>
                            </h1>
                        </div>
                        <div class="col text-primary"></div>

                    </div>
                </div>
            </div>
            </div>


            <div class="row">
                <div class="col borders">
                    <div class="container p-4" id="maintitlenohi">
                        <table class="table">
                            <thead>
                                <tr class="table-secondary">

                                    <th scope="col">Log ID</th>
                                    <th scope="col">Record Type</th>
                                    <th scope="col">Record Time</th>
                                </tr>
                            </thead>
                            <tbody>

                                <?php 
                                    $record = "SELECT * FROM ".$_COOKIE['UID']."_logging_log ORDER BY log_id DESC LIMIT 10";
                                    if ($result = mysqli_query($conn, $record)) {
                                        if (mysqli_num_rows($result) > 0) {
                                           
                                            while ($row = mysqli_fetch_array($result)) {
                                                 $tabletrtype = ($row['record_type'] == "Log In"	) ? "primary" : "danger";

                                                echo "<tr class='table-$tabletrtype'>";
                                                    echo "<td class='table-$tabletrtype'>".$row['log_id']."</td>";
                                                    echo "<td class='table-$tabletrtype'>".$row['record_type']."</td>";
                                                    echo "<td class='table-$tabletrtype'>".$row['record_time']."</td>";
                                                echo "</tr>";
                                            }
                                           
                                            // mysqli_free_result($result);
                                        }
                                        else {
                                            echo "<tr class='table-primary align-middle '>";
                        
                                            echo "<td  colspan='3' class='table-primary align-middle '>No matching records are found.</td>";
                                            echo "</tr>";                                        }
                                    }
                                    else {
                                        echo "ERROR: Could not able to execute $sql. "
                                                                    .mysqli_error($conn);
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


    </main>





</body>

</html>