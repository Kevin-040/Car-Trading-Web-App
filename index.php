<?php 
  $username = "";
  $db = mysqli_connect('localhost','root','','car');
  $query = "SELECT * FROM recent_login ORDER BY id DESC LIMIT 1";
  $result = mysqli_query($db,$query); 
  $row = mysqli_fetch_array($result);

  session_start(); 

  if (!isset($_SESSION['username'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: login.php');
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['username']);
  	header("location: login.php");
  }
?>
<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
	<link rel="stylesheet" type="text/css" href="style.css">
  <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link rel="stylesheet" href="style1.css">
    <title>Hello, world!</title>
    <style>
            img{
       width: 100%;
       height: 100vh;
     }
     body{
          font-family: 'Open Sans', sans-serif;
          background:#3498db;
          margin: 0 auto 0 auto;  
          width:100%; 
          text-align:center;
          margin: 20px 0px 20px 0px;   
        }
        .img1
      {
        width: 150px;
        height: 40px;
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

<div class="header">
	<h2>Home Page</h2>
</div>
<div class="content">
  	<!-- notification message -->
  	<?php if (isset($_SESSION['success'])) : ?>
      <div class="error success" >
      	<h3>
          <?php 
          	echo $_SESSION['success']; 
          	unset($_SESSION['success']);
          ?>
      	</h3>
      </div>
  	<?php endif ?>

    <!-- logged in user information -->
    <?php  if (isset($_SESSION['username'])) : ?>
    	<p>Welcome <strong><?php echo $_SESSION['username']; ?></strong></p>
      <p><a href="http://localhost/WT/homepage.php" >Continue to home page</a></p>
    	<p> <a href="index.php?logout='1'" style="color:red;">logout</a> </p>
    <?php endif ?>
</div>		
</body>
</html>