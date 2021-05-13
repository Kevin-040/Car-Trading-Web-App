
        <?php
            $username = "";
            $db = mysqli_connect('localhost','root','','car');
            $query = "SELECT * FROM recent_login ORDER BY id DESC LIMIT 1";
            $result = mysqli_query($db,$query); 
            $row = mysqli_fetch_array($result);
          
        
        $username=$row["username"];
        $carname =  $_REQUEST['carname'];
        $brand = $_REQUEST['brand'];
        $category =  $_REQUEST['category'];
        $price = $_REQUEST['price'];
        $car_no = $_REQUEST['car_no'];
          
        // Performing insert query execution
        // here our table name is college
        $sql = "INSERT INTO car_info (carname,brand,category,car_no,price,username)  VALUES ('$carname', 
            '$brand','$category','$car_no','$price','$username')";
        if(mysqli_query($db, $sql))
        {
            header('location: success.php');
  
        } else{
            echo "ERROR: Hush! Sorry $sql. " 
                . mysqli_error($db);
        }
          
        // Close connection
        mysqli_close($db);
        ?>
