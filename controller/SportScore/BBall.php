<?php 
    require ('../../dbcon.php');

   $Circuit = array('Malungon Circuit' => $Malungon = $_POST['MalC'], 'Gensan-Coastal Circuit' => $GenCoast = $_POST['GenCosC'],  
   'Polomolok Circuit' => $Polomolok = $_POST['PolC'],  'TuTam Circuit'=>$Tutam = $_POST['TutC'], 
   'KorLuTan Circuit' => $Korlutan = $_POST['KorC'],  'Banga Circuit'=> $Banga = $_POST['BanC'],
   'Surallah Circuit'=>$Surallah = $_POST['SurC'],'NorSan Circuit' => $NorSan = $_POST['NorC']);

   
   foreach($Circuit as $circuit => $score){
    $InsertScore = "INSERT INTO tbl_scrore (circuit_id, game_id, score) 
    VALUES (
        (SELECT circuit_id FROM tbl_circuit WHERE Circuit = '$circuit'), 
        (SELECT game_id FROM tbl_game WHERE game = 'BasketBall'), 
        $score
    );
    ";

    $Insert = $con -> query($InsertScore);

    if($Insert){
        echo 'success';
    }else{
        echo 'failed';
    }
   }
   



?>