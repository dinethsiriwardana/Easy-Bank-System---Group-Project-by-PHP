<?php
include "dbcon.php";
include "encryption.php";

session_start();


$username =    $_POST['username'];
$password =  encryption($_POST['password']);
$type = $_GET['type'];

if ($_GET['type'] == "admin") {

    $table = "admin_user_table";
    $where = "ANAME = '$username' AND A_password = '$password'";

} else {
    $table = "user_table";
    $where = "UNAME = '$username' AND U_password = '$password'";

}

$select = "*";




$sql = "SELECT $select FROM $table where $where";
echo $sql;
$result = $conn->query($sql);

if ($result->num_rows == 1) {

    $row = $result->fetch_assoc();


    if ($_GET['type'] == "admin") {
        
        setcookie('UID', $row["ANAME"], time() + 1200, "/");
        setcookie('ROLE', $row["A_Level"], time() + 1200, "/");
        header("location: ../index_admin.php");
    } else {
        if ($row["Approval"] == 'N') {
            header("location: ../user_login.php?error=noacc");

        }else{

      
            
            setcookie('UID', $row["UID"], time() + 2400, "/");
            $dt2=date("Y-m-d H:i:s");
            $loginsert = "INSERT INTO ".$_COOKIE['UID']."_logging_log (record_type,record_time)
            VALUES ('Log In', '$dt2')";
            if ($conn->query($loginsert) === TRUE) {
            
            } else {
            echo "Error: " . $loginsert . "<br>" . $conn->error;
            }
            header("location: ../index.php");
        }
    }
} else {
    echo "Error Login";
    
    if ($_GET['type'] == "admin") {
        
        header("location: ../admin_login.php?error=haserror");
    }else{
        header("location: ../user_login.php?error=logerror");
        
    }

}




$conn->close();
