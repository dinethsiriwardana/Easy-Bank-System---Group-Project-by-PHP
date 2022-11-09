<?php

  $servername='191.96.56.1';
  $username='u812963415_ruhunafot';
  $password='eK4y*3RJt=8';
  $dbname='u812963415_ruhunafot';



$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }


  
  ?>