<!DOCTYPE html>
<html lang="en">

<head>

</head>

<body>

  <?php

  $servername = "localhost";
  $username = "root";
  $password = "root";
  $dbname = "mydb";

  $conn = new mysqli($servername, $username, $password, $dbname);

  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }
  echo "Connected successfully";


  $sql = "SELECT id, reg_date FROM MyGuests where firstname = 'kamal'";
  $result = $conn->query($sql);

  if ($result->num_rows > 0) {
    // output data of each row
    while ($row = $result->fetch_assoc()) {
      echo "id: " . $row["id"] . " - reg_date: " . $row["reg_date"]  . "<br>";
    }
  } else {
    echo "0 results";
  }
  //Your code here

  $conn->close();

  ?>

  <script src="js/bootstrap.min.js"></script>
</body>

</html>