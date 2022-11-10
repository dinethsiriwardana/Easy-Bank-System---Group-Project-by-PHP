<?php

include "dbcon.php";


    $uname    = $_GET['user'];
    $fname              =$_POST['fname'];
    $lname              =$_POST['lname'];
    $nic                =$_POST['NIC'];
    $phone_number       =$_POST['Phone_Number'];
    $email              =$_POST['Email'];
    $Street_Address     =$_POST['Street_Address'];


    $stmt ="INSERT INTO personal_details(UNAME,fname,lname,nic,phone_number,email,user_address) VALUES
    ('$uname','$fname','$lname','$nic','$phone_number','$email','$Street_Address')";    
    if ($conn->query($stmt) === TRUE) {
      echo "New record created successfully";
      header("location: user_login.php");

    } else {
      echo "Error: " . $stmt . "<br>" . $conn->error;
    }

$conn->close();
