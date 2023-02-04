<?php

  $servername='191.96.56.1';
  $username='u812963415_easybank';
  $password='E6lMvnO~l9';
  $dbname='u812963415_easybank';



$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }


  
  ?>