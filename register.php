<?php include('main.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>Register On My Car</title>
  <link rel="stylesheet" type="text/css" href="style.css">
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
                  <a class="nav-link active " aria-current="page" href="#"> Home </a>
    
                </li>
                <li class="nav-item">
                  <a class="nav-link active " aria-current="page" href="#"> New Cars </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link active  " aria-current="page" href="#"> Owned Cars </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link active " aria-current="page" href="">About Us</a>
                </li>
                </ul>
    
    
            </div>
        </div>
      </nav>

  <div class="header">
  	<h2>Register</h2>
  </div>
	
  <form method="post" action="register.php">
  	<?php include('error.php'); ?>
  	<div class="input-group">
  	  <label>Username</label>
  	  <input type="text" name="username" value="<?php echo $username; ?>">
  	</div>
  	<div class="input-group">
  	  <label>Email</label>
  	  <input type="email" name="email" value="<?php echo $email; ?>">
  	</div>
  	<div class="input-group">
  	  <label>Password</label>
  	  <input type="password" name="password_1">
  	</div>
  	<div class="input-group">
  	  <label>Confirm password</label>
  	  <input type="password" name="password_2">
  	</div>
  	<div class="input-group">
  	  <label>Phoneno</label>
  	  <input type="number" name="phoneno">
  	</div>
  	<div class="input-group">
  	  <button type="submit" class="btn btn-dark" name="reg_user">Register</button>
  	</div>
  	<p>
  		Already a member? <a href="login.php">Sign in</a>
  	</p>
  </form>
</body>
</html>