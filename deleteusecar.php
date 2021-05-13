<?php
        $username = "";
        $db = mysqli_connect('localhost','root','','car');
        $query = "SELECT * FROM recent_login ORDER BY id DESC LIMIT 1";
        $result = mysqli_query($db,$query); 
        $row = mysqli_fetch_array($result);
          
        
        $username=$row["username"];
        $carname =  $_REQUEST['carname'];
        $car_no = $_REQUEST['car_no'];
        $sql = "DELETE FROM car_info WHERE username='$username' AND car_no='$car_no'";
        if(mysqli_query($db, $sql))
        {
            header('location: success.php');
        } else{
            echo "ERROR: Could not able to execute $sql. " . mysqli_error($db);
        }
          
        // Close connection
        mysqli_close($db);
?>
