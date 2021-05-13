<?php
  $username = "";
  $db = mysqli_connect('localhost','root','','car');
  $query = "SELECT * FROM recent_login ORDER BY id DESC LIMIT 1";
  $result = mysqli_query($db,$query); 
  $row = mysqli_fetch_array($result);
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style1.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

  <title>ABOUT US</title>
  <style>
    .img1
      {
        width: 150px;
        height: 40px;
      }
    html {
      box-sizing: border-box;
    }
    .card{
      display: flex;
      flex-direction: column;
    }

    *,
    *:before,
    *:after {
      box-sizing: inherit;
    }

    .column {
      float: left;
      width: 33.3%;
      margin-bottom: 16px;
      padding: 0 8px;
    }

    .card {
      box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
      margin: 8px;
    }

    .about-section {
      padding: 50px;
      text-align: left;
      background-color: #474e5d;
      color: white;
    }

    .container {
      padding: 0 16px;
    }

    .container::after,
    .row::after {
      content: "";
      clear: both;
      display: table;
    }

    .title {
      color: grey;
    }

    .button {
      border: none;
      outline: 0;
      display: inline-block;
      padding: 8px;
      color: white;
      background-color: #000;
      text-align: center;
      cursor: pointer;
      width: 100%;
    }

    .button:hover {
      background-color: #555;
    }
    body{
          font-family: 'Open Sans', sans-serif;
          background:#3498db;
          margin: 0 auto 0 auto;  
          width:100%; 
          text-align:center;
          margin: 20px 0px 20px 0px;   
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
  <div class="about-section">
    <h1>About Us</h1>
    <h2 color:white;><p>Part of My Car Trading Group, <strong>My Car is an project corresponding to subject 2CP08(Web Technologies).</strong></p></h2>
  
  </div>
  
  <!-- <h3 style="text-align: center;color: rgb(92, 92, 156)  ; ">About Us</h3>  -->
  <section>
  <div class="row " >
    <div class="column">
      <div class="card">
        
        <div class="container">
            <img src="1.jpg" alt="John" style="width:100%">
          <h2>Jay Kava</h2>
          <p class="title">19CP025</p>
          <p>Divison 3 Sem 4</p>
          <p>19CP040@bvmcollege.com</p>
        </div>
      </div>
    </div>

    <!-- <div class="row"> -->
      <div class="column">
        <div class="card">
          
          <div class="container">
              <img src="1.jpg" alt="John" style="width:100%">
            <h2>Pratik Kher</h2>
            <p class="title">19CP034</p>
            <p>Divison 3 Sem 4</p>
            <p>19CP040@bvmcollege.com</p>
          </div>
        </div>
      </div>

      <!-- <div class="row"> -->
        <div class="column">
          <div class="card">
            
            <div class="container">
                <img src="1.jpg" alt="John" style="width:100%">
              <h2>Kevin Patel</h2>
              <p class="title">19CP040r</p>
              <p>Divison 3 Sem 4</p>
              <p>19CP040@bvmcollege.com</p>
            </div>
          </div>
        </div>
</section>        

</body>



</html>