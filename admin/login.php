<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="assets/logo/simbol-kopi-kenangan.png" type="image/x-icon">

    <!-- Bootstrap CSS -->
    <link href="css/bootstrap.css" rel="stylesheet">
    <link rel="stylesheet" href="main/style.css">


    <title>Kopi Kenangan Shop</title>
    <style>
    body {
      background: url('assets/index/Carousel-1.jpg') no-repeat center center fixed;
      background-size: cover;
      height: 100vh;
      display: flex;
      align-items: center;
      justify-content: center;
    }   
    .custom-form {
      background: linear-gradient(to right, #ffff, #F07D94); /* Gradien warna latar belakang */
      border-radius: 10px;
      padding: 20px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); /* Shadow */
      transition: background 0.3s ease-in-out;
    }
    .custom-form:hover {
      background: linear-gradient(to right, #c7c6c1, #F07D94); /* Gradien warna latar belakang saat hover */
    }
    
    </style>  
  </head>
<body >
<div class="container" >
    <div class="row" .text-center>
		<div class="col-md-6 col-md-offset-3 ">
			<div class="panel panel-default">
				<div class="panel-body"> 
          
				<h1 style="text-muted"><span class="section-title"></span> 
				LOGIN ADMIN</h2>
				
					<form action="proses-login.php" method="POST" class="custom-form">
                    <div class="form-group">
                        <label for="username">Username</label>
                        <input type="text" name="username" class="form-control" required>
                    </div>

                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" name="password" class="form-control" required>
                    </div>

                    <input type="submit" name="kirim" value="Login" class="btn btn-info">
                    <input type="reset" name="kosongkan" value="Reset" class="btn btn-danger">
                </form>
			</div>		
			</div>
		</div>
    </div>
</div>

<script src="js/bootstrap.js"></script>
    <script src="main/main.js"></script>


</body>
</html>