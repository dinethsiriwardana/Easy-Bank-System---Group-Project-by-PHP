<?php
include "dbcon.php" ;
include "encryption.php";



  
    
    echo $what_c = "U_password = '".(encryption($_POST['passwordcfm']))."'" ;
    echo "<br>";
    echo $where_c = "user_table.UNAME = '".$_POST['username']."' AND personal_details.email = '".$_POST['email']."'  AND user_table.UID = '".$_POST['account']."' AND personal_details.UNAME = user_table.UNAME" ;
    echo "<br>";
    echo $table = "user_table,personal_details" ;
    echo "<br>";

    
    echo $sql = "UPDATE $table SET  $what_c WHERE $where_c ";
    
    if ($conn->query($sql) === TRUE) {
        header("location: ../password_reset_loggin.php");
        echo "done";
    } else {
        header("location: ../password_reset_loggin.php?error=noacc");
        echo "Error: ". $conn->error;

    }



?>

