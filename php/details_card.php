
<?php
include "dbcon.php" ;


$select = "select" ;
$table = "tablename" ;

$sql = "SELECT personal_details.fname,personal_details.lname,personal_details.user_address,personal_details.email,card_no FROM personal_details,user_table WHERE user_table.UID = ".$_COOKIE['UID']." AND user_table.UNAME = personal_details.UNAME";
$result = $conn->query($sql);


if ($result->num_rows > 0) {

$row = $result->fetch_assoc();

// echo " id: " . $row["fname"];


}

?>


<div class="col-4 borders">
    <div class="container" id="maindetails">
        Name:

        <h4>
            <?php echo $row["fname"].' '.$row["lname"] ?>
            <br>
        </h4>
        Acc No: <h5><?php echo $_COOKIE['UID']; ?></h5>

        <?php 
            $credit_card_number =  $row["card_no"];

            echo sprintf('%04d-%04d-%04d-%04d',
            substr($credit_card_number, 0, 4),
            substr($credit_card_number, 4, 4),
            substr($credit_card_number, 8, 4),
            substr($credit_card_number, 12)
        );
        
        ?><br>

        <?php echo $row["email"] ?><br>

    </div>
</div>