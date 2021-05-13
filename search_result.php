<?php

$search ="";
$errors = array(); 

// connect to the database
$db = mysqli_connect('localhost','root','','car');
$username = "";
  $query = "SELECT * FROM recent_login ORDER BY id DESC LIMIT 1";
  $result1 = mysqli_query($db,$query); 
  $row1 = mysqli_fetch_array($result1);

// REGISTER USER
if (isset($_POST['brand']))
{
  	$search = mysqli_real_escape_string($db, $_POST['search']);
	if (empty($search)) { array_push($errors, "This field is required"); }
 	$search_query = "SELECT * FROM car_info WHERE brand='$search'";
 	$result = mysqli_query($db,$search_query);
 	$row = mysqli_fetch_assoc($result);
 }
 if (isset($_POST['category']))
{
  	$search = mysqli_real_escape_string($db, $_POST['search']);
	if (empty($search)) { array_push($errors, "This field is required"); }
 	$search_query = "SELECT * FROM car_info WHERE category='$search'";
 	$result = mysqli_query($db,$search_query);
 	$row = mysqli_fetch_assoc($result);
 }
?>
<!DOCTYPE html>
<html>
 <head>
 <title> ALL USED CAR DATA</title>
 </head>
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
    img{
       width: 100%;
       height: 100vh;
     }
     #USED {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 80%;
  margin-left: auto;
  margin-right: auto;
}

#USED td, #USED th {
  border: 1px solid #ddd;
  padding: 8px;
}

#USED tr:nth-child(even){background-color: #f2f2f2;}

#USED tr:hover {background-color: #ddd;}

#USED th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #4CAF50;
  color: white;
}
    </style>
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
                    <button type="button" class="btn btn-warning"><?php echo $row1["username"]; ?></button>
                </li>

                <li class="nav-item">
                <button type="button" class="btn btn-danger" ><a href="index.php?logout='1'" style="color:white;">logout</a></button>
                </li>
                </ul>
            </div>
        </div>
      </nav>
      <div class="container">
  <div class="row">
    <div class="col-sm">
      &nbsp
    </div>
    <div class="col-sm">
      &nbsp
    </div>
    <div class="col-sm">
      &nbsp
    </div>
  </div>
</div>
<div class="container">
<?php
if (mysqli_num_rows($result) > 0) {
?>

  <table id="USED">
  
  <tr>
    <th>CAR NAME</th>
    <th>BRAND</th>
    <th>CATEGORY</th>
    <th>CAR_NO</th>
    <th>PRICE</th>
  </tr>
<?php
$i=0;
while($row = mysqli_fetch_array($result)) {
?>
<tr>
    <td><?php echo $row["carname"]; ?></td>
    <td><?php echo $row["brand"]; ?></td>
    <td><?php echo $row["category"]; ?></td>
    <td><?php echo $row["car_no"]; ?></td>
    <td><?php echo $row["price"]; ?></td>
</tr>
<?php
$i++;
}
?>
</table>
 <?php
}
else{
    echo "No result found";
}
?>
</div>
 </body>
</html>