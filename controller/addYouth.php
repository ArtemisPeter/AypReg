<?php
    require ('../dbcon.php');

    if(isset($_POST['customRadio'])){
        $fname = $_POST['firstName'];
        $lname = $_POST['lastName'];
        $nname = $_POST['nickname'];
        $bday = $_POST['bday'];
        $contact = $_POST['Contact'];
        $circuit = $_POST['Circuit'];
        $Church = $_POST['Church'];
        $deltype = $_POST['customRadio'];

        $CheckExistYP = "SELECT COUNT(tbl_yp.yp_id) AS CheckExist FROM tbl_yp WHERE tbl_yp.fname = '$fname' AND tbl_yp.lname ='$lname';";
        $resultYP = $con-> query($CheckExistYP);

        $CheckRegistered = "SELECT COUNT(tbl_delegate.delegate_id) AS registered FROM tbl_delegate 
        INNER JOIN tbl_yp ON tbl_yp.yp_id = tbl_delegate.yp_id WHERE tbl_delegate.yp_id = 
        (SELECT tbl_yp.yp_id FROM tbl_yp WHERE tbl_yp.fname = '$fname' AND tbl_yp.lname = '$lname');";
        $resultReg = $con-> query($CheckRegistered);

        if($resultReg -> num_rows > 0){
            $checkRes = $resultReg->fetch_assoc();
            $ExistReg = $checkRes['registered'];
        }

        if($resultYP -> num_rows > 0){
            $check = $resultYP-> fetch_assoc();
            $Exist = $check['CheckExist'];
        }

       if($Exist > 0 && $ExistReg > 0){
            echo 'Exist';
        }
        
        elseif($Exist == 0){
            $InsertYP = "INSERT INTO tbl_yp (tbl_yp.fname, tbl_yp.lname, tbl_yp.nickname, tbl_yp.Bday, 
            tbl_yp.del_type_id, tbl_yp.contact_num, tbl_yp.church_id) VALUES ('$fname', '$lname', '$nname', '$bday', (SELECT tbl_delegatetype.del_type_id FROM tbl_delegatetype WHERE tbl_delegatetype.delegate_type = '$deltype'), 
            '$contact', (SELECT tbl_church.church_id FROM tbl_church WHERE tbl_church.Church = '$Church'))";
            $YP = $con -> query($InsertYP);

            if($YP){
                $register = "INSERT INTO tbl_delegate (tbl_delegate.yp_id, tbl_delegate.RegTime, tbl_delegate.RegType_id)
                VALUES ((SELECT tbl_yp.yp_id FROM tbl_yp WHERE tbl_yp.fname = '$fname' AND tbl_yp.lname = '$lname'), NOW(), 2);";
                $registered = $con -> query($register);

                if($registered){
                    echo 'success';
                }
            }

        }
    }
?>