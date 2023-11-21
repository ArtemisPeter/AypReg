<?php
    require ('../dbcon.php');

    if(isset($_POST['Circuit'])){
        $Circuit = $_POST['Circuit'];

        $getChurch = "SELECT tbl_church.Church FROM `tbl_church` WHERE tbl_church.circuit_id = 
        (SELECT tbl_circuit.circuit_id FROM tbl_circuit WHERE tbl_circuit.Circuit = '$Circuit');";
        
        $Churches = $con -> query($getChurch);

        if($Churches){
            foreach($Churches as $row){
                echo '<option>'.$row['Church'].'</option>';
            }
        }
    }

    

?>