<?php
include "dbcon.php" ;
include "encryption.php";


$select = "*" ;
$table = "user_table" ;

echo $sql = "SELECT $select FROM $table where UNAME = '".$_POST['uname']."'";

$result = $conn->query($sql);


if ($result->num_rows > 0) {

$row = $result->fetch_assoc();
echo "<br>";

if (decryption($row['U_password']) == $_POST['pwdOld']) {
  
    
    echo $what_c = "U_password = '".(encryption($_POST['pwdNew']))."'" ;
    echo "<br>";
    echo $where_c = "UNAME = '".$_POST['uname']."'" ;
    echo "<br>";
    echo $table = "user_table" ;
  

    
    echo $sql = "UPDATE $table SET  $what_c WHERE $where_c ";
    
    if ($conn->query($sql) === TRUE) {
        header("location: ../password_reset.php");

    } else {
        echo "Error: ". $conn->error;

    }
}


}else{
    echo "Error: ". $conn->error;

}

?>

