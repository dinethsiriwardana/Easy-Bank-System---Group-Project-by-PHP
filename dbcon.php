<?php
$servername = "173.254.104.205";
$username = "mayurapa_fotdb";
$password = "W8g~a@F1-N#B";
$dbname = "mayurapa_fotdb";

$conn = new mysqli($servername, $username, $password,$dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }
  echo "Connected successfully";

   //Your code here
    
    $conn->close();
?>