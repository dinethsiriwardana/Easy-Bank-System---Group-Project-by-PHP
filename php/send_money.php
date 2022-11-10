<?php
include "dbcon.php";
include "getdetails.php";


$onsender = floatval($user_account_balance['balance']);

echo "user_account_balance - ". $user_account_balance['balance'] . "<br>";


$sql = "SELECT * FROM account_balance WHERE uid =  $rnumber";
$result = $conn->query($sql);


if ($result->num_rows  > 0) {

    $row = $result->fetch_assoc();
    $raccountb = intval($row['balance']);
    echo $raccountb."<br>";


    // Add Statement Line to receiver
    $sqlinserttor = "INSERT INTO ". 
        $rnumber."_account_statement(transaction_type, s_r_account_number, s_r_account_name,amount,description)
        VALUES ('IN', $snumber, '$sname',$amount,'$description')";

        echo $sqlinserttor;
        echo "<br>";
    if ($conn->query($sqlinserttor) === TRUE) {

        // Add Statement For the Sender
        $sqlinserttos = "INSERT INTO ".$snumber."_account_statement(transaction_type, s_r_account_number, s_r_account_name,amount,description)
        VALUES ('OUT', $rnumber, '$rname',$amount,'$description')";

        echo $sqlinserttos;
        echo "<br>";

        if ($conn->query($sqlinserttos) === TRUE) {


            // Add Money to the receiver
            $what_s = "balance = " . ($raccountb + $amount);
            $where_s = "uid = $rnumber";

            $update_r_balance = "UPDATE account_balance SET  $what_s WHERE $where_s ";

            echo $update_r_balance;
            echo "<br>";

            if ($conn->query($update_r_balance) === TRUE) {

                // 
                
                echo (floatval($onsender)). " - ";   //from r balance - amount
                echo ($amount). " = ";   //from r balance - amount
                echo (floatval($onsender)-  $amount);   //from r balance - amount
              
                echo "<br>";
    
                $what_s = "balance = " . (floatval($onsender) -  $amount);
                $where_s = "uid = $snumber";

                $update_s_balance = "UPDATE account_balance SET  $what_s WHERE $where_s ";
                echo $update_s_balance;
                echo "<br>";
                if ($conn->query($update_s_balance) === TRUE) {
                    header("location: ../sendmoney.php");

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

