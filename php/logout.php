<?php 
include 'dbcon.php';
if (isset($_COOKIE['UID'])) {

    $dt2=date("Y-m-d H:i:s");
            $loginsert = "INSERT INTO ".$_COOKIE['UID']."_logging_log (record_type,record_time)
            VALUES ('Log Out', '$dt2')";
            if ($conn->query($loginsert) === TRUE) {
            
            } else {
            echo "Error: " . $loginsert . "<br>" . $conn->error;
            }

    if (isset($_COOKIE['ROLE'])) {
        unset($_COOKIE['ROLE']);
        setcookie('ROLE', '', time() - 3600, '/'); // empty value and old timestamp
    }
    unset($_COOKIE['UID']);

    setcookie('UID', '', time() - 3600, '/'); // empty value and old timestamp
}
header("location: ../landing_page.php");
?>