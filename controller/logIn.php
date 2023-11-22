<?php 
    session_start();
    require ('../dbcon.php');

    if(isset($_POST['username']) && (isset($_POST['password']))){
       
        $username = $_POST['username'];
        $password = $_POST['password'];

        $getID = "SELECT tbl_users.user_id FROM tbl_users WHERE tbl_users.username = '$username' AND tbl_users.password = '$password'";
        $ID = $con -> query($getID);

        if($ID -> num_rows == 1){
            foreach($ID as $row){
                $userId = $row['user_id'];

                $getUserType = "SELECT tbl_usertype.userType FROM tbl_users INNER JOIN tbl_usertype ON tbl_usertype.userType_id = tbl_users.usertype_id WHERE tbl_users.user_id = $userId";
                $UserType = $con -> query($getUserType);

                $getUserName = "SELECT CONCAT (tbl_yp.fname,' ',tbl_yp.lname) AS UserName FROM tbl_users INNER JOIN tbl_yp ON tbl_yp.yp_id = tbl_users.yp_id WHERE tbl_users.user_id = $userId;";
                $UserName = $con -> query($getUserName);

                if($UserName -> num_rows == 1){
                    foreach($UserName as $name){
                        $_SESSION['UserName'] = $name['UserName'];
                    }
                }else{
                    echo 'error';
                }

               if($UserType){
                foreach($UserType as $user){
                    echo $user['userType'];
                }
               }
            }
        }else{
            echo 'error';
        }



    }else{
        echo 'error';
    }

?>