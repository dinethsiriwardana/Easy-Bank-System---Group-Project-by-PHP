<?php
include "dbcon.php";
include "php/getdetails.php";


$sname = $_POST['sname'];
$snumber = $_POST['snumber'];
$description = $_POST['description'];
$rname = $_POST['rname'];
$rnumber = $_POST['rnumber'];
$amount = floatval($_POST['amount']);




$sql = "SELECT * FROM account_balance WHERE uid =  $rnumber";
$result = $conn->query($sql);


if ($result->num_rows  > 0) {

    $row = $result->fetch_assoc();
    $raccountb = intval($row['balance']);
    echo $row['balance']."<br>";

    $sqlinserttor = "INSERT INTO ". 
        $rnumber."_account_statement(transaction_type, s_r_account_number, s_r_account_name,amount,description)
        VALUES ('IN', $snumber, '$sname',$amount,'$description')";
    if ($conn->query($sqlinserttor) === TRUE) {

        $sqlinserttos = "INSERT INTO ".$snumber."_account_statement(transaction_type, s_r_account_number, s_r_account_name,amount,description)
        VALUES ('OUT', $rnumber, '$rname',$amount,'$description')";

        if ($conn->query($sqlinserttos) === TRUE) {



            $what_s = "balance = " . ($raccountb + $amount);
            $where_s = "uid = $rnumber";

            $update_r_balance = "UPDATE account_balance SET  $what_s WHERE $where_s ";

            if ($conn->query($update_r_balance) === TRUE) {
                echo (floatval($row['balance'])-  $amount);
                $what_s = "balance = " . (floatval($row['balance']) -  $amount);
                $where_s = "uid = $snumber";

                $update_s_balance = "UPDATE account_balance SET  $what_s WHERE $where_s ";

                if ($conn->query($update_s_balance) === TRUE) {
                  
                } else {
                    echo "Error: " . $update_s_balance . "<br>" . $conn->error;
                }
            } else {
                echo "Error: " . $update_r_balance . "<br>" . $conn->error;
            }
        } else {
            echo "Error: " . $sqlinserttos . "<br>" . $conn->error;
        }
    } else {
        echo "Error: " . $sqlinserttor . "<br>" . $conn->error;
    }
} else {
    echo "Error: " . $sql . "No Account";
}

