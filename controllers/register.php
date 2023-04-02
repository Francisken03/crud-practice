<?php

include('../includes/server.php');

if ( $dbcon == true ) {
    $sFname = $_POST['fName'];
    $sLname = $_POST['lName'];
    $sEmail = $_POST['email'];
    $sPass = $_POST['pass'];

    try {
        $qInsert = "INSERT INTO `db_cruddb`.`tbl_user_credentials`
            (`first_name`, `last_name`, `email`, `password`, `create_date`)
            VALUES
            ('{$sFname}', '{$sLname}', '{$sEmail}', '{$sPass}', '" . date("Y-m-d H:i:s") . "')
        ";

        $eInsert = mysqli_query($dbcon, $qInsert);

        if ( $eInsert == true ) {
            echo "Account successfully created for " . "$sFname" . " " . "$sLname";
        } else {
            echo "We're sorry. We are unable to create your account at this time";
        }
    } catch (Exception $e) {
        echo "Error!;";
    }
} else {
    echo "Error. Please contact system admin for assistance";
}