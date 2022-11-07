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
                                        154,300.00
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
                        <div class="col">
                            <div class="row p-1 text-success">
                                <h5>
                                    Total Of Incomes ↑
                                </h5>
                                <h3>
                                    RS.
                                    100,000.00
                                </h3>
                            </div>
                            <div class="row p-1 text-danger">
                                <h5>
                                    Total of Expense ↓
                                </h5>
                                <h3>
                                    RS. 55,000.00
                                </h3>
                            </div>
                        </div>
                      
                    </div>
                </div>
            </div>


            <div class="row">
                <div class="col borders">
                    <div class="container" id="maindetails">
                        <table class="table">
                            <thead>
                                <tr class="table-secondary">

                                    <th scope="col">First</th>
                                    <th scope="col">Last</th>
                                    <th scope="col">Handle</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="table-primary">

                                    <td class="table-primary">Mark</td>
                                    <td class="table-primary">Otto</td>
                                    <td class="table-primary">@mdo</td>
                                </tr>

                                <tr class="table-danger">

                                    <td>Mark</td>
                                    <td>Otto</td>
                                    <td>@mdo</td>
                                </tr>

                            </tbody>
                        </table>

                    </div>
                </div>



            </div>


    </main>





</body>

</html>