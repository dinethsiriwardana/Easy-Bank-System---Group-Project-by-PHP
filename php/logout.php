<?php 
if (isset($_COOKIE['UID'])) {
    if (isset($_COOKIE['ROLE'])) {
        unset($_COOKIE['ROLE']);
        setcookie('ROLE', '', time() - 3600, '/'); // empty value and old timestamp
    }
    unset($_COOKIE['UID']);

    setcookie('UID', '', time() - 3600, '/'); // empty value and old timestamp
}
header("location: ../landing_page.php");
?>