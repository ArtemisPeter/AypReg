<?php
    require ('../dbcon.php');

    if(isset($_POST['Circuit2']) && (isset($_POST['NewChurch']))){
        $Circuit = $_POST['Circuit2'];
        $Church = $_POST['NewChurch'];

        $CheckChurchExist = "SELECT COUNT(tbl_church.Church) AS ChurchExist FROM `tbl_church` WHERE tbl_church.Church = '$Church';";
        $getChurchNum = $con->query($CheckChurchExist);

        if($getChurchNum -> num_rows > 0){
            $getNum = $getChurchNum->fetch_assoc();
            $CheckExist = $getNum['ChurchExist'];
        }

        if($CheckExist > 0){
            echo 'Exist';
        }else{
            $InsertChurch = "INSERT INTO tbl_church (tbl_church.Church, tbl_church.circuit_id) VALUES 
            ('$Church', (SELECT tbl_circuit.circuit_id FROM tbl_circuit WHERE tbl_circuit.Circuit = '$Circuit'));";
    
            $ChurchInsert = $con-> query($InsertChurch);
    
            if($ChurchInsert){
                echo 'success';
            }
        }
        
       

    }
?>