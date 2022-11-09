<?php
include "dbcon.php";
include "encryption.php";

session_start();



$username =    $_POST['username'];
$password =  encryption($_POST['password']);


    $sql = "INSERT INTO user_table (UNAME, U_password,Approval)
    VALUES ('$username', '$password','N')";
    if ($conn->query($sql) === TRUE) {
        header("location: ../user_login.php");

    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }



$conn->close();



