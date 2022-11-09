<?php

function get_balance()
{
    include "dbcon.php";

    $find = $_COOKIE['UID']; //user name here(to find account)
    //Get data from database
    $sql = "SELECT * FROM account_balance where uid =".$find;

    $result = $conn->query($sql);

    if ($result->num_rows == 1) {
        while ($row = $result->fetch_assoc()) {
            echo $row['balance']; //part that want to display
        }
    } else {
        echo "Loading..";
    }
    $conn->close();
}

function l_income()
{
    include "dbcon.php";

    $find = $_COOKIE['UID']; //user name here(to find account)
    //Get data from database
    $sql = "SELECT * FROM ".$find."_account_statement where transaction_type = 'IN' ORDER BY rec_no DESC LIMIT 1";

    $result = $conn->query($sql);

    if ($result->num_rows == 1) {
        while ($row = $result->fetch_assoc()) {
            echo $row['amount']; //part that want to display
        }
    } else {
        echo "No results";
    }
    $conn->close();
}

function l_expence()
{
    include "dbcon.php";

    $find = $_COOKIE['UID']; //user name here(to find account)
    //Get data from database
    $sql = "SELECT * FROM ".$find."_account_statement where transaction_type = 'OUT' ORDER BY rec_no DESC LIMIT 1";

    $result = $conn->query($sql);

    if ($result->num_rows == 1) {
        while ($row = $result->fetch_assoc()) {
            echo $row['amount']; //part that want to display
        }
    } else {
        echo "No results";
    }
    $conn->close();
}

function t_income()
{
    include "dbcon.php";

    $find = $_COOKIE['UID']; //user name here(to find account)
    //Get data from database
    $sql = "SELECT SUM(amount) as amount FROM ".$find."_account_statement where transaction_type = 'IN'";

    $result = $conn->query($sql);

    if ($result->num_rows == 1) {
        while ($row = $result->fetch_assoc()) {
            echo $row['amount']; //part that want to display
        }
    } else {
        echo "No results";
    }
    $conn->close();
}

function t_expence()
{
    include "dbcon.php";

    $find = $_COOKIE['UID']; //user name here(to find account)
    //Get data from database
    $sql = "SELECT SUM(amount)  as amount FROM ".$find."_account_statement where transaction_type = 'OUT'";

    $result = $conn->query($sql);

    if ($result->num_rows == 1) {
        while ($row = $result->fetch_assoc()) {
            echo $row['amount']; //part that want to display
        }
    } else {
        echo "No results";
    }
    $conn->close();
}



?>
