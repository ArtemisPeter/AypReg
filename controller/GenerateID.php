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
        width: 47%;
        height: 460px;
        margin: 10px 5px;
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
        font-family: 'Anton';
        position: absolute;
        top:  70%;
        left: 50%; 
        transform: translateX(-50%); 
        font-size: 60px;
        text-transform: uppercase;
        text-align: center;
      }

      .overlay-code {
        font-family: 'Anton';
        position: absolute;
        top: 67.5%;
        left: 83%;
        font-size: 12px;
        text-align: center;
      }
      .overlay-circuit{
        font-family: 'Arial';
        position: absolute;
        top: 88%;
        left: 50%; 
        transform: translateX(-50%); 
        font-size: 10px;
        text-transform: uppercase;
        text-align: center;

      }

    </style>
  </head>
  <body>
    <div class="img-container">
    <?php 
    
      $getId = "SELECT 
      REGEXP_REPLACE(tbl_yp.nickname, '[^0-9a-zA-Z]', '') AS cleaned_nickname,
      CONCAT(LEFT(tbl_circuit.Circuit, 1), '', tbl_delegate.delegate_id) AS code, tbl_circuit.Circuit, tbl_circuit.colour
  FROM 
      tbl_delegate 
      INNER JOIN tbl_yp ON tbl_yp.yp_id = tbl_delegate.yp_id 
      INNER JOIN tbl_church ON tbl_church.church_id = tbl_yp.church_id 
      INNER JOIN tbl_circuit ON tbl_circuit.circuit_id = tbl_church.circuit_id 
  WHERE 
      tbl_church.church_id = (SELECT tbl_church.church_id FROM tbl_church WHERE tbl_church.Church = '$Church');
  ";
      $ID = $con -> query($getId);
    
         if($ID){
          foreach($ID as $row){
            ?>
      <div class='box'>
        <div class="image-id"></div>
          <div class="idINFO">
            <div class="overlay-name"><?php echo $row['cleaned_nickname'] ?></div>
            <div class="overlay-code"><?php echo $row['code'];?></div> 
            <div class="overlay-circuit" style="color: <?php echo $row['colour']; ?>"><?php echo $row['Circuit'];?></div> 
          </div>
      </div>
      
      
      <?php }}?>
    </div>
  </body>
</html>


<script src="../plugins/jquery/jquery.min.js"></script>
<script>
    $(window).on('load', function () {

        var imgElement = $('<img>', {
            src: 'id.png',
            alt: 'Image Alt Text',
            width: '100%',
            height: '460px'
        });

        // Append the image element to the image container
        $('.image-id').append(imgElement);
       

        imgElement.on('load', () => {
            window.print();
        })

    })
</script>
<style>
  .bg-orange{
    background-color: orange;
  }
  .bg-pink{
    background-color: pink;
  }
</style>