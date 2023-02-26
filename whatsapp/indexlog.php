<?php


?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Whatsapp</title>

	<!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <style type="text/css">
    	
    	body
    	{
    		background: #d1d8e0;
    	}

    	nav
    	{
    		padding-bottom: 200px;
    	}

    	img
    	{
    		width: 37px;
    		margin: 30px;
    		position: absolute;
    		left: 130px;
    		
    	}

    	span
    	{
    		position: absolute;
    		top: 18px;
    		left: 210px;
    		font-family: arial;
    		font-size: 13px;
    	}

    	.info-box
    	{
    		width: 65%;
    		padding-bottom: 30%;
    		position: relative;
    		top: -110px;
    		border: 1px solid #ced6e0;
    		border-radius: 3px;
    		padding-left: 10px;

    	}
    	.info-box h6
    	{
    		font-size: 23px;
    		font-family: arial;
    		font-weight: normal;
    		padding-left: 55px;
    		padding-top: 60px;
    	}
    	.instruction
    	{
    		padding-left: 55px;
    		padding-top: 30px;
    	}
    	.instruction p
    	{
    		font-size: 16px;
    	}
    	.qrcode
    	{
    		width: 240px;
    		position: absolute;
    		top: 30px;
    		margin-right: 50px;
    		left: 450px;

    	}
    	.videotut
    	{
    		width: 480px;

    	}
    	form
    	{
    		margin: 20px;
    	}
    	.loginbtn
    	{
    		margin-left: 40px;
    		margin-top: 5px;
    	}
    	

 

    </style>
</head>
<body>

	<nav class="nav-wraper teal accent-4">
		<div>
			<img src="images/Whatsapplogo">
			<span>WHATSAPP WEB </span>
		</div>
	</nav>


	<div class="container white info-box z-depth-3 hide-on-med-and-low">

		<h6>To use WhatsApp on your computer:</h6>
		<div class="instruction">
			<p>1. Open Whatsapp on your phone</p>
			<p>2. Tap <b>Menu</b> <i class="material-icons tiny grey white-text darken-5">more_vert</i> or settings <i class="material-icons tiny grey white-text">settings_applications</i> and select <b>linked device</b></p>
			<p>3. Tap on <b>Link a Device</b></p>
			<p>4. Point your phone to the screen to capture the code</p>
			<img src="images/qrcode.png" class="qrcode"><br>
			<p class="green-text " style="font-size: 13px;">Need help to get started?</p>
		
		</div>
		<h5 class="center">Login manually</h5><br>

		<div class="center">
			<form class="white">
				<i class="material-icons prefix teal-text">account_circle
				<input type="text" name="username" placeholder="username" required></i><br>
				<i class="material-icons prefix teal-text">phone
				<input type="text" name="username" placeholder="Telephone" class="validate" required></i><br>
				<input type="submit" name="submit" value="Login" class="btn loginbtn">
			</form>
		</div>
		<div class="container">
  	<div><img src="images/videotut.png" class="videotut"></div>
  </div>
		
  </div>
        

	</div>

</body>
</html>
