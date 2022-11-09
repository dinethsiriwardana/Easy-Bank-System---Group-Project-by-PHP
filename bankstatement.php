<?php
include "php/statement.php" ;
include "landing_page.php";
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

            <div class="col borders">
                <div class="container d-flex align-items-center" id="maindetails">
                    <div class="row d-flex align-items-center  justify-content-evenl p-3">
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
                        <div class="col">
                            <div class="row p-1 text-success">
                                <h5>
                                    Total Of Incomes ↑
                                </h5>
                                <h3>
                                    RS.
                                    <?php t_income() ?>
                                </h3>
                            </div>
                            <div class="row p-1 text-danger">
                                <h5>
                                    Total of Expense ↓
                                </h5>
                                <h3>
                                    RS.
                                   <?php t_expence() ?>
                                </h3>
                            </div>
                        </div>

                    </div>
                </div>
            </div>


            <div class="row">
                <div class="col borders">
                    <div class="container p-4" id="maintitlenohi">
                        <center>

                            <h3>Account Statement</h3><br>
                        </center>
                        <?php
                        include "php/dbcon.php";
                        $record = "SELECT * FROM " . $_COOKIE['UID'] . "_account_statement ORDER BY rec_no DESC LIMIT 10";
                        if ($result = mysqli_query($conn, $record)) {

                            if (mysqli_num_rows($result) > 0) {
                                echo "<table class = 'table'>";
                                echo "<thead>";
                                echo "<tr class='table-secondary'>";
                                echo "<th scope='col'>Transaction Type</th>";
                                echo "<th scope='col'>Account number</th>";
                                echo "<th scope='col'>Name</th>";
                                echo "<th scope='col'>Description</th>";
                                echo "<th scope='col'>Amount</th>";
                                echo "</tr>";
                                echo "</thead>";
                                echo "<tbody>";
                                while ($row = mysqli_fetch_array($result)) {
                                    $tabletrtype = ($row['transaction_type'] == 'IN') ? "primary" : "danger";

                                    echo "<tr class='table-$tabletrtype'>";
                                    echo "<td class='table-$tabletrtype'>" . $row['transaction_type'] . "</td>";
                                    echo "<td class='table-$tabletrtype'>" . $row['s_r_account_number'] . "</td>";
                                    echo "<td class='table-$tabletrtype'>" . $row['s_r_account_name'] . "</td>";
                                    echo "<td class='table-$tabletrtype'>" . $row['description'] . "</td>";
                                    echo "<td class='table-$tabletrtype'>" . $row['amount'] . "</td>";
                                    echo "</tr>";
                                }
                                echo "<tbody>";
                                echo "</table>";
                                mysqli_free_result($result);
                            } else {
                                echo "No matching records are found.";
                            }
                        } else {
                            echo "ERROR: Could not able to execute $sql. "
                                . mysqli_error($conn);
                        }

                        ?>

                    </div>
                </div>



            </div>


    </main>





</body>

</html>