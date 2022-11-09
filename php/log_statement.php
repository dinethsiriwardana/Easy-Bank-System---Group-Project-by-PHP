<?php


function all_act(){

    include "dbcon.php";

    $find = $_COOKIE['UID']; //user name here(to find account)
    //Get data from database
    $sql = "SELECT count(log_id) as totallogcount FROM ".$find."_logging_log ";

    $result = $conn->query($sql);

    if ($result->num_rows == 1) {
        while ($row = $result->fetch_assoc()) {
            echo $row['totallogcount']; //part that want to display
        }
    } else {

        echo "Loading..";
    }
    $conn->close();

}
function all_in_act(){

    include "dbcon.php";

    $find = $_COOKIE['UID']; //user name here(to find account)
    //Get data from database
    $sql = "SELECT count(log_id) as totallogcount FROM ".$find."_logging_log where record_type='Log In'";

    $result = $conn->query($sql);

    if ($result->num_rows == 1) {
        while ($row = $result->fetch_assoc()) {
            echo $row['totallogcount']; //part that want to display
        }
    } else {

        echo "Loading..";
    }
    $conn->close();

}
function all_out_act(){

    include "dbcon.php";

    $find = $_COOKIE['UID']; //user name here(to find account)
    //Get data from database
    $sql = "SELECT count(log_id) as totallogcount FROM ".$find."_logging_log where record_type='Log Out'";

    $result = $conn->query($sql);

    if ($result->num_rows == 1) {
        while ($row = $result->fetch_assoc()) {
            echo $row['totallogcount']; //part that want to display
        }
    } else {

        echo "Loading..";
    }
    $conn->close();

}


?>