<?php
	include("./controller/login.php");
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="./assets/login.css">
	<title>Home</title>
</head>
<body>
	<section id="header">
		<div class="wrapper">
			<h1>ERP System</h1>
		</div>
	</section>
	<section id="main">
		<div class="main_wrapper">
			<div>
				<h1 style="font-size: 5rem;">Welcome To ERP System</h1>
				
			</div>
			<div style="display:flex; justify-content: space-evenly;">
				<a href="./view/login.php"><button class="btn">Login</button></a>
				<a href="./view/login.php"><button class="btn">Signup</button></a>
			</div>
		</div>
	</section>
</body>
</html>