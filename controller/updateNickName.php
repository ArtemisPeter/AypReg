<?php 
    require ('../dbcon.php');

    $FirstName = $_POST['firstName'];
    $Surname = $_POST['surname'];
    $contactNum = $_POST['contactNum'];
    $Bday = $_POST['Bday'];
    $NickName = $_POST['NiName'];
    $yp_id = $_POST['yp_id'];

    $UpdateQuery = "UPDATE `tbl_yp` SET `fname`='$FirstName',`lname`='$Surname',
    `nickname`='$NickName',`Bday`='$Bday', `contact_num`='$contactNum' WHERE tbl_yp.yp_id = $yp_id";

    $Update = $con-> query($UpdateQuery);

    if($Update){
        echo 'success';
    }else{
        echo 'error';
    }

?>