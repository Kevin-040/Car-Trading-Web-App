<?php
  $username = "";
  $db = mysqli_connect('localhost','root','','car');
  $query = "SELECT * FROM recent_login ORDER BY id DESC LIMIT 1";
  $result = mysqli_query($db,$query); 
  $row = mysqli_fetch_array($result);
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link rel="stylesheet" href="style1.css">
    <title>Hello, world!</title>
    <style>
      .img1
      {
        width: 150px;
        height: 40px;
      }
        body{
          font-family: 'Open Sans', sans-serif;
          background:#3498db;
          margin: 0 auto 0 auto;  
          width:100%; 
          text-align:left;
          margin: 20px 0px 20px 0px;   }
        * {box-sizing: border-box;
        
        }
 

        input[type=text], select, textarea {
          width: 100%;
          padding: 12px;
          border: 1px solid #ccc;
          border-radius: 4px;
          box-sizing: border-box;
          margin-top: 6px;
          margin-bottom: 16px;
          resize: vertical;
        }
        h3{
            text-align: center;
        }
        
        
        .maincontainer{
            display: flex;
        }
        .container2{
          height:2%;
        }
        
        .container1 {
          border-radius: 5px;
          background-color: #f2f2f2;
          margin-right: auto;
          margin-left: auto;
          width: 50%;
          padding: 20px;
          border: 5px solid rgb(66, 81, 105);
          border-radius: 8px;
        }
        </style>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-dark  bg-dark nav justify-content-end ">
        <div class="container-fluid">
          <a class="navbar-brand logo " style="margin-left: 20px;" href="#"><img class="img1" src="logo.png"></a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <ul class="nav justify-content-center">
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                  <a class="nav-link active " aria-current="page" href="http://localhost/WT/homepage.php"> Home </a>
    
                </li>
                <li class="nav-item">
                  <a class="nav-link active " aria-current="page" href="http://localhost/WT/Newcar.php"> New Cars </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link active  " aria-current="page" href="http://localhost/WT/Sellcar.php"> Owned Cars </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link active  " aria-current="page" href="http://localhost/WT/search1.php"> Search </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link active " aria-current="page" href="http://localhost/WT/about.php">About Us</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link active " aria-current="page" href="">&nbsp</a>
                </li>
                <li>
                    <button type="button" class="btn btn-warning"><?php echo $row["username"]; ?></button>
                </li>

                <li class="nav-item">
                <button type="button" class="btn btn-danger" ><a href="index.php?logout='1'" style="color:white;">logout</a></button>
                </li>
                </ul>
            </div>
        </div>
      </nav>
      <div>
      <div class="maincontainer">
        <div class="container2">
    <h2>&nbsp</h2>
  </div>
    

    <div class="container1">
        <h3 ><strong>PROVIDE INFORMATION</strong> </h3>
        <form action="addusedcar.php" method="post">
          <label for="lname">Carname</label>
          <input type="text" id="" name=" carname" placeholder="">

          <label for="fname">Brand</label>
          <input type="text" id="brand" name="brand" placeholder="">
      
          <label for="lname">Category</label>
          <input type="text" id="category" name="category" placeholder="">
        
          <label for="lname">Price</label>
          <input type="text" id="" name="price" placeholder="">

          <label for="lname">Car number</label>
          <input type="text" id="" name="car_no" placeholder="">
  <br>
  <br>
      <input type="submit" class="btn btn-dark" value="Submit">
      <input class="btn btn-warning"  type="reset" value="Reset">
        
        </form>
      </div>

    </div>
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>

    
  </body>
</html>