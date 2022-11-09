<?php
include "dbcon.php";
include "encryption.php";

session_start();



$username =    $_POST['username'];
$admintype =    $_POST['admintype'];
$password =  encryption($_POST['adminpassword']);


    $sql = "INSERT INTO admin_user_table (ANAME, A_password,A_Level)
    VALUES ('$username', '$password','$admintype')";
    if ($conn->query($sql) === TRUE) {
        header("location: ../index_admin.php");

    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;


    }



$conn->close();
