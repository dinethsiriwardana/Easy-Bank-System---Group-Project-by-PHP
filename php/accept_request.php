<?php
include "dbcon.php";



if ($_GET['type'] == 'submit') {
    $what_c = "Approval = 'Y'";
    $where_c = "UID = '" . $_GET['uid'] . "'";
    $table = "user_table";

    $sql = "UPDATE $table SET  $what_c WHERE $where_c ";
    $sql2 = "CREATE TABLE " . $_GET['uid'] . "_account_statement (
                rec_no int(11) NOT NULL AUTO_INCREMENT,
                transaction_type varchar(3) NOT NULL,
                s_r_account_number INT(9)  NOT NULL,
                s_r_account_name varchar(45) NOT NULL,
                amount double(20,2) NOT NULL,
                PRIMARY KEY (rec_no)
            )AUTO_INCREMENT=1";

    $sql3 = "CREATE TABLE " . $_GET['uid'] . "_logging_log (
                log_id int(11) NOT NULL AUTO_INCREMENT,
                record_type varchar(10)  NOT NULL,
                record_time datetime NOT NULL,
                PRIMARY KEY (log_id)
            ) AUTO_INCREMENT=1";



    $sql4 = "INSERT INTO account_balance 
    VALUES ('" . $_GET['uid'] . "', 0)";


    if ($conn->query($sql) === TRUE) {

        if (($conn->query($sql2) === TRUE) && ($conn->query($sql3) === TRUE)) {


            if ($conn->query($sql4) === TRUE) {
                header("location: ../index_admin.php?stts=dones");
            } else {
                echo "Error: " . $sql . "<br>" . $conn->error;
            }
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
            header("location: ../index_admin.php?stts=errors");
        }
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
        header("location: ../index_admin.php?stts=errors");
    }
} else if ($_GET['type'] == 'reject') {

    $table = "user_table";
    $where_d = "UID = '" . $_GET['uid'] . "'";

    $sql = "DELETE FROM $table WHERE $where_d ";

    if ($conn->query($sql) === TRUE) {

        header("location: ../index_admin.php?stts=doner");
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
        header("location: ../index_admin.php?stts=errorr");
    }
}
