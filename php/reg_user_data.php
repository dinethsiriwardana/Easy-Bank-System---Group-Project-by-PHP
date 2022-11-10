<?php
include "dbcon.php";
include "encryption.php";

session_start();



$username =    $_POST['username'];
$password =  encryption($_POST['password']);


    $sql = "INSERT INTO user_table (UNAME, U_password,Approval)
    VALUES ('$username', '$password','N')";
    if ($conn->query($sql) === TRUE) {
        header("location: ../register_personal.php?user=$username");

    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }



$conn->close();



