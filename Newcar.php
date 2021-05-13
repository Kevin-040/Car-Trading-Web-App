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
		
		.all-box{
			display: flex;
			flex-wrap: wrap;
			background-color: rgb(23, 109, 109);
		}
		.card{
			margin: 28px 70px 9px 20px;
			align-items: center;
			text-align: center;
		}
		
		img{
		
			width: 18rem;
			height: 18rem;
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
	  <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="bmw5.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
              <h2>BMW SERIES 5</h2>
              <a href="https://www.bmw.in/en/all-models/5-series/sedan/2017/at-a-glance.html?tl=sea-goog-sapu-pro-miy-.-text-goobrand-20210429-5seriess5F5FA914&gclid=CjwKCAjwm7mEBhBsEiwA_of-TCxZy4gCKJXi8UCpy_8nh65X4Tu7ocSovSPPbjnLFMvKqlYxKJfxvBoCzQcQAvD_BwE&gclsrc=aw.ds"><p>MORE INFO</p></a>
            </div>
          </div>
          <div class="carousel-item">
            <img src="audia8.jpg"class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
              <h2>AUDI A8</h2>
              <a href="https://www.audi.com/en/experience-audi/models-and-technology/production-models/a8.html"><p>MORE INFO</p></a>
            </div>
          </div>
          <div class="carousel-item">
            <img src="rangerover.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
              <h5>RANGE ROVER VELAR</h5>
              <a href="https://www.landrover.in/vehicles/range-rover-velar/index.html"><p>MORE INFO</p></a>
            </div>
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
  </body>
</html> 	