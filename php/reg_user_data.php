<?php
include "dbcon.php";
include "encryption.php";

session_start();

$username =    $_POST['username'];
$password =  encryption($_POST['password']);

$sql = "SELECT * FROM user_table where UNAME = '$username'";

$result = $conn->query($sql);

if ($result->num_rows == 0) {

    $sql = "INSERT INTO user_table (UNAME, U_password,Approval)
    VALUES ('$username', '$password','N')";
    if ($conn->query($sql) === TRUE) {

        $select = "UID";
        $table = "user_table";

        $sql = "SELECT $select FROM $table where UNAME = '$username'";

        $result = $conn->query($sql);


        if ($result->num_rows > 0) {

            while ($row = $result->fetch_assoc()) {

                echo $sql = "UPDATE user_table SET card_no = CONCAT(" . $row['UID'] . ",FLOOR(RAND()*(9999999 - 1000000))) WHERE UID = " . $row['UID'];

                if ($conn->query($sql) === TRUE) {
                } else {
                    echo "Error: " . $sql . "<br>" . $conn->error;
                }
            }
        }
        header("location: ../register_personal.php?user=$username");
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}else{
    header("location: ../register.php?error=haveacc");
}

$conn->close();
