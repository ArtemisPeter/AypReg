<?php 

require ('../dbcon.php');

    if(isset($_POST['YouthSelected'])){
        $YouthSelected = $_POST['YouthSelected'];

        $YouthName = explode(', ',$YouthSelected);

        foreach($YouthName as $Name){
            $FullName = trim($Name);
            $NameParts = explode(' ',$FullName);

            $FName = $NameParts[0];
            $LName = isset($NameParts[1]) ? $NameParts[1] : '';
            

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
            }elseif($ExistReg == 0){
                $register = "INSERT INTO tbl_delegate (tbl_delegate.yp_id, tbl_delegate.RegTime, tbl_delegate.RegType_id)
                VALUES ((SELECT tbl_yp.yp_id FROM tbl_yp WHERE tbl_yp.fname = '$FName' AND tbl_yp.lname = '$LName'), NOW(), 2);";
                $registered = $con -> query($register);
    
                if($registered){
                   echo 'success';
                }
            }
           
        }
    }else{
        echo 'error';
    }

?>