<?php

require ('../dbcon.php');

if(isset($_POST['YouthSelected'])){
    $YouthSelected = $_POST['YouthSelected'];

    $YouthNames = explode(', ', $YouthSelected);

    foreach($YouthNames as $FullName){
        $FullName = trim($FullName);
        $NameParts = explode(' ', $FullName);

        $FName = '';
        $LName = '';

        if (count($NameParts) > 1) {
            // If there are multiple parts, build the first name
            $FName = implode(' ', array_slice($NameParts, 0, -1));
            $LName = end($NameParts);
        } else {
            // If only one part, consider it as the first name
            $FName = $NameParts[0];
        }

        $CheckRegistered = "SELECT COUNT(tbl_delegate.delegate_id) AS registered FROM tbl_delegate 
        INNER JOIN tbl_yp ON tbl_yp.yp_id = tbl_delegate.yp_id WHERE tbl_delegate.yp_id = 
        (SELECT tbl_yp.yp_id FROM tbl_yp WHERE tbl_yp.fname = '$FName' AND tbl_yp.lname = '$LName');";
        $resultReg = $con-> query($CheckRegistered);

        if($resultReg -> num_rows > 0){
            $checkRes = $resultReg->fetch_assoc();
            $ExistReg = $checkRes['registered'];
        }

        if($ExistReg > 0){
            echo 'Exist';
        } elseif($ExistReg == 0){
            $register = "INSERT INTO tbl_delegate (tbl_delegate.yp_id, tbl_delegate.RegTime, tbl_delegate.RegType_id)
            VALUES ((SELECT tbl_yp.yp_id FROM tbl_yp WHERE tbl_yp.fname = '$FName' AND tbl_yp.lname = '$LName'), NOW(), 2);";
            $registered = $con -> query($register);

            if($registered){
                echo 'success';
            } else {
                echo 'error';
            }
        }
    }
} else {
    echo 'notset';
    echo 'error';
}
?>
