<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>White Hats</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <style>
       @import url('https://fonts.googleapis.com/css?family=Montserrat:400,800');

* {
	box-sizing: border-box;
}

body {
	background: #f6f5f7;
	display: flex;
	justify-content: center;
	align-items: center;
	flex-direction: column;
	font-family: 'Montserrat', sans-serif;
	height: 100vh;
	margin: -20px 0 50px;
}

h1 {
	font-weight: bold;
	margin: 0;
}

h2 {
	text-align: center;
}
.container {
	background-color: #fff;
	border-radius: 10px;
  	box-shadow: 0 14px 28px rgba(0,0,0,0.25), 
			0 10px 10px rgba(0,0,0,0.22);
	position: relative;
	overflow: hidden;
	width: 768px;
	max-width: 100%;
	min-height: 480px;
}

.form-container {
	position: absolute;
	top: 0;
	height: 100%;
	transition: all 0.6s ease-in-out;
}

.sign-in-container {
	left: 0;
	width: 50%;
	z-index: 2;
}
.overlay-container {
	position: absolute;
	top: 0;
	left: 50%;
	width: 50%;
	height: 100%;
	overflow: hidden;
	transition: transform 0.6s ease-in-out;
	z-index: 100;
}
        </style>
</head>
<body>
    <h2>White Hats</h2>
<div class="container" id="container">
	<div class="form-container sign-up-container">
		
	</div>
	<div class="form-container sign-in-container">
		<div class="card">
            <img src="<?php echo base_url("assets/images/img_avatar.png");?>" alt="Avatar" style="width:100%">
            <div class="container text-center">
              <h4><b>Yönetici Paneli</b></h4> 
              <a class="btn btn-outline-primary" href="<?=base_url("admin/login/")?>">Yönetici Paneli</a>
            </div>
          </div>
	</div>
	<div class="overlay-container">
		<div class="card">
            <img src="<?php echo base_url("assets/images/img_avatar2.png");?>" alt="Avatar" style="width:100%">
            <div class="container text-center">
              <h4><b>Kullanıcı Paneli</b></h4> 
              <a class="btn btn-outline-primary" href="<?=base_url("user/login/")?>">Kullanıcı Paneli</a>
            </div>
          </div>
		</div>
	</div>
</div>

</body>
</html>