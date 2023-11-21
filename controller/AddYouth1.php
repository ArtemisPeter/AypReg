<?php 

    if(isset($_POST['YouthSelected'])){
        $YouthSelected = $_POST['YouthSelected'];
        echo 'success';
    }else{
        echo 'error';
    }

?>