<?php 


include 'dbcon.php';

$select = "*" ;
$table = "account_balance WHERE uid = ".$_COOKIE['UID'] ;

$getbalancefromuser = "SELECT $select FROM $table ";
$getbalancefromuserresult = $conn->query($getbalancefromuser);

if ($getbalancefromuserresult->num_rows > 0) {
    
    $user_account_balance = $getbalancefromuserresult->fetch_assoc();
   

}




?>