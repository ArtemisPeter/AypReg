<?php 
require ('../dbcon.php'); 
    if(isset($_POST['Circuit']) && isset($_POST['Church'])){
        $Circuit = $_POST['Circuit'];
        $Church = $_POST['Church'];
    }
?>

<!DOCTYPE html>
<html>
<head>
    <title>ID</title>
    <link href='https://fonts.googleapis.com/css?family=Anton' rel='stylesheet'>
    <style>
      .img-container {
        display: flex;
        flex-wrap: wrap;
       
      }

      .box{ 
        background-size: cover; /* Adjust as needed */
        border: 1px solid black;
        width: 45%;
        height: 460px;
        margin: 10px 10px;
        position: relative;
      }

      img{
        width: 100%;
        height: 460px;
      }

      .idINFO {
        position: absolute;
        font-weight: bold;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
      }

      .overlay-name {
        position: absolute;
        top: 71%;
        left: 50%; 
        transform: translateX(-50%); 
        font-size: 60px;
        text-transform: uppercase;
        text-align: center;
      }

      .overlay-code {
        position: absolute;
        top: 67.5%;
        left: 83%;
        font-size: 12px;
        text-align: center;
      }

      body {
        font-family: 'Anton';
      }
    </style>
  </head>
  <body>
    <div class="img-container">
    <?php 
    
      $getId = "SELECT 
      tbl_yp.nickname, 
      CONCAT(LEFT(tbl_circuit.Circuit, 1), '', tbl_delegate.delegate_id) AS code 
    FROM 
      tbl_delegate 
      INNER JOIN tbl_yp ON tbl_yp.yp_id = tbl_delegate.yp_id 
      INNER JOIN tbl_church ON tbl_church.church_id = tbl_yp.church_id 
      INNER JOIN tbl_circuit ON tbl_circuit.circuit_id = tbl_church.circuit_id WHERE tbl_church.church_id = ( SELECT tbl_church.church_id FROM tbl_church WHERE tbl_church.Church = '$Church');";
      $ID = $con -> query($getId);
    
         if($ID){
          foreach($ID as $row){
            ?>
      <div class='box'>
      <div class="image-id"></div>
        <div class="idINFO">
          <div class="overlay-name"><?php echo $row['nickname'] ?></div>
          <div class="overlay-code"><?php echo $row['code'];?></div> 
        </div>
      </div>
      <?php }}else{
        echo 'EMpty';
      } ?>

      
    </div>
  </body>
</html>


<script src="../plugins/jquery/jquery.min.js"></script>
<script>    
    $(window).on('load', function()  {

        var imgElement = $('<img>', {
            src: 'id.png',  // Replace with the actual path to your image
            alt: 'Image Alt Text',          // Provide alternative text for accessibility
            width: '100%',                    // Set the width of the image
            height: '460px'                    // Set the height of the image
        });

        // Append the image element to the image container
        $('.image-id').append(imgElement);

        imgElement.on('load', ()=> {
            window.print();
        })

    })

    
</script>